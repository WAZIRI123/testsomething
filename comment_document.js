/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/
require('./../../bootstrap');
import Vue from 'vue';

import DashboardPlugin from './../../plugins/dashboard-plugin';
import { addDays, format } from 'date-fns';
import { setPromiseTimeout, getQueryVariable } from './../../plugins/functions';

import Global from './../../mixins/global';

import Form from './../../plugins/form';
import BulkAction from './../../plugins/bulk-action';
import draggable from 'vuedraggable';

// plugin setup
Vue.use(DashboardPlugin);

const app = new Vue({
    el: '#main-body',

    mixins: [
        Global
    ],

    components: {
        draggable
    },

    data: function () {
        return {
            form: new Form('document'),
            // custom class called Form from mixins
            bulk_action: new BulkAction('documents'),
            // BulkAction class called Form from mixins
            totals: {
                sub: 0,
                item_discount: '',
                discount: '',
                discount_text: false,
                taxes: [],
                total: 0
            },
            transaction: [],
            edit: {
                status: false,
                currency: false,
                items: 0,
            },
            colspan: 6,
            discount: false,
            tax: false,
            discounts: [],
            tax_id: [],
            items: [],
            selected_items:[],
            taxes: [],
            page_loaded: false,
            currencies: [],
            min_due_date: false,
            currency_symbol: {
               "name":"US Dollar",
               "code":"USD",
               "rate":1,
               "precision":2,
               "symbol":"$",
               "symbol_first":1,
               "decimal_mark":".",
               "thousands_separator":","
            },
            dropdown_visible: true,
            dynamic_taxes: [],
            show_discount: false,
            show_discount_text: true,
            delete_discount: false,
            regex_condition: [
                '..',
                '.,',
                ',.',
                ',,'
            ],
            email_template: false,
            send_to: false,
        }
    },

    mounted() {
        this.form.discount_type = 'percentage';

        if ((document.getElementById('items') != null) && (document.getElementById('items').rows)) {
            this.colspan = document.getElementById("items").rows[0].cells.length - 1;
        }

        if (! this.edit.status) {
           this.dropdown_visible = false;
        }

        this.currency_symbol.rate = this.form.currency_rate;

        if (company_currency_code) {
           let default_currency_symbol = null;

           for (let symbol of this.currencies) {
               if (symbol.code == company_currency_code) {
                   default_currency_symbol = symbol.symbol;
               }
           }

           this.currency_symbol.symbol = default_currency_symbol;
        };

        if (document_app_env == 'production') {
           this.onFormCapture();
        }
    },

    methods: {
        onItemSortUpdate(event) {
            let item_index = this.form.items.indexOf(this.form.items[event.oldIndex]);
            let item = this.form.items.splice(item_index, 1)[0];

            this.form.items.splice(event.newIndex, 0, item);
        },

        onRefFocus(ref) {
            let index = this.form.items.length - 1;

            if (typeof (this.$refs['items-' + index + '-' + ref]) !== 'undefined') {
                let first_ref = this.$refs['items-' + index + '-'  + ref];

                if (first_ref != undefined) {
                    first_ref[0].focus();
                } else if (this.$refs[Object.keys(this.$refs)[0]] != undefined) {
                    this.$refs[Object.keys(this.$refs)[0]][0].focus();
                }
            }
        },

        onCalculateTotal() {
            // Discount variables
            let global_discount = parseFloat(this.form.discount); // Overall discount percentage
            let total_discount = 0; // Accumulated total discount
            let line_item_discount_total = 0; // Accumulated discount for each line item
        
            // Total calculation variables
            let sub_total = 0; // Subtotal{accumulated total price of each line item before any discounts or taxes have been applied} of all line items
            let totals_taxes = []; // Array to store tax amounts for each item
            let grand_total = 0; // Total amount after discounts and taxes
        
            // Calculate the total amount before discount and tax
            let items_amount = this.calculateTotalBeforeDiscountAndTax();
        
            // Iterate over each item in the items array
            this.items.forEach(function(item, index) {
                item.total = item.grand_total = item.price * item.quantity; // Calculate the initial total and grand total for the item
        
                let item_discounted_total = items_amount[index]; // Get the discounted total amount for the item
        
                let line_discount_amount = item.total - item_discounted_total; // Calculate the line discount amount{discount applied to a specific line item in a list}
        
                // Apply global discount to the item
                if (global_discount) {
                    if (this.form.discount_type === 'percentage') {
                        if (global_discount > 100) {
                            global_discount = 100;
                        }
        
                        // Apply percentage discount
                        total_discount += (item_discounted_total / 100) * global_discount;
                        item_discounted_total -= (item_discounted_total / 100) * global_discount;
                    } else {
                        // Apply discount based on a fixed amount
                        total_discount += (items_amount[index] / (items_amount['total'] / 100)) * (global_discount / 100);
                        item_discounted_total -= (items_amount[index] / (items_amount['total'] / 100)) * (global_discount / 100);
                    }
                }
        
                // Set the item grand total after discount
                if (item.discount || global_discount) {
                    item.grand_total = item_discounted_total;
                }
        
                // Calculate taxes for the item
                this.calculateItemTax(item, totals_taxes, total_discount + line_discount_amount);
        
                item.total = item.price * item.quantity; // Recalculate the item's total after applying discounts
        
                // Accumulate line item discount, sub total, and grand total
                line_item_discount_total += line_discount_amount;
                sub_total += item.total;
                grand_total += item.grand_total;
        
                let item_tax_ids = [];
        
                item.tax_ids.forEach(function(item_tax, item_tax_index) {
                    item_tax_ids.push(item_tax.id);
                });
        
                // Update the form with the item details
                this.form.items[index].name = item.name;
                this.form.items[index].description = item.description;
                this.form.items[index].quantity = item.quantity;
                this.form.items[index].price = item.price;
                this.form.items[index].tax_ids = item_tax_ids;
                this.form.items[index].discount = item.discount;
                this.form.items[index].discount_type = item.discount_type;
                this.form.items[index].total = item.total;
            }, this);
        
            // Update the totals with the calculated values
            this.totals.item_discount = line_item_discount_total;
            this.totals.discount = total_discount;
            this.totals.sub = sub_total;
            this.totals.taxes = totals_taxes;
            this.totals.total = grand_total;
        
            // Update the form items with missing values from the items array
            this.form.items.forEach(function(form_item, form_index) {
                let item = this.items[form_index];
        
                for (const [key, value] of Object.entries(item)) {
                    if (key == 'add_tax' || key == 'tax_ids' || key == 'add_discount') {
                        continue;
                    }
        
                    if (form_item[key] === undefined) {
                        form_item[key] = value;
                    }
                }
            }, this);
        
            this.currencyConversion(); // Convert the amounts to a different currency if needed
        },

        calculateItemTax(item, totals_taxes, total_discount_amount) {
            let taxes = this.dynamic_taxes; // Array of available tax objects
        
            if (item.tax_ids) {
                let inclusive_tax_total = 0; // Accumulated price of inclusive taxes
                let price_for_tax = 0; // Price used for calculating tax amounts{price that is used for calculating tax amounts for a particular item.}
                let total_tax_amount = 0; // Accumulated total tax amount
                let inclusives = []; // Array to store inclusive tax objects
                let compounds = []; // Array to store compound tax objects
                let fixed = []; // Array to store fixed tax objects
                let withholding = []; // Array to store withholding tax objects
                let normal = []; // Array to store normal tax objects
        
                // Iterate over item's tax_ids
                item.tax_ids.forEach(function(item_tax, item_tax_index) {
                    // Iterate over available taxes
                    for (var index_taxes = 0; index_taxes < taxes.length; index_taxes++) {
                        let tax = taxes[index_taxes];
        
                        // Match tax_id with available tax object
                        if (item_tax.id != tax.id) {
                            continue;
                        }
        
                        // Categorize tax based on its type
                        switch (tax.type) {
                            case 'inclusive':
                                inclusives.push({
                                    tax_index: item_tax_index,
                                    tax_id: tax.id,
                                    tax_name: tax.title,
                                    tax_rate: tax.rate
                                });
                                break;
                            case 'compound':
                                compounds.push({
                                    tax_index: item_tax_index,
                                    tax_id: tax.id,
                                    tax_name: tax.title,
                                    tax_rate: tax.rate
                                });
                                break;
                            case 'fixed':
                                fixed.push({
                                    tax_index: item_tax_index,
                                    tax_id: tax.id,
                                    tax_name: tax.title,
                                    tax_rate: tax.rate
                                });
                                break;
                            case 'withholding':
                                withholding.push({
                                    tax_index: item_tax_index,
                                    tax_id: tax.id,
                                    tax_name: tax.title,
                                    tax_rate: tax.rate
                                });
                                break;
                            default:
                                normal.push({
                                    tax_index: item_tax_index,
                                    tax_id: tax.id,
                                    tax_name: tax.title,
                                    tax_rate: tax.rate
                                });
                                break;
                        }
                    }
                }, this);
        
                if (inclusives.length) {
                    // Calculate and apply inclusive taxes
                    inclusives.forEach(function(inclusive) {
                        item.tax_ids[inclusive.tax_index].name = inclusive.tax_name;
                        item.tax_ids[inclusive.tax_index].price = item.grand_total - (item.grand_total / (1 + inclusive.tax_rate / 100));
                        // {amount of inclusive tax applied to the item }
        
                        inclusive_tax_total += item.tax_ids[inclusive.tax_index].price;
        
                        totals_taxes = this.calculateTotalsTax(totals_taxes, inclusive.tax_id, inclusive.tax_name, item.tax_ids[inclusive.tax_index].price);
                    }, this);
        
                    item.total = parseFloat(item.grand_total - inclusive_tax_total);
                }
        
                if (fixed.length) {
                    // Calculate and apply fixed taxes
                    fixed.forEach(function(fixed) {
                        item.tax_ids[fixed.tax_index].name = fixed.tax_name;
                        item.tax_ids[fixed.tax_index].price = fixed.tax_rate * item.quantity;
        
                        total_tax_amount += item.tax_ids[fixed.tax_index].price;
        
                        totals_taxes = this.calculateTotalsTax(totals_taxes, fixed.tax_id, fixed.tax_name, item.tax_ids[fixed.tax_index].price);
                    }, this);
                }
                // because inclusive taxes already included in the origianl tota
        
                if (inclusives.length) {
                    price_for_tax = item.total;
                } else {
                    price_for_tax = item.grand_total;
                }
        
                if (normal.length) {
                    // Calculate and apply normal taxes{ regular tax that is applied to taxable items or transactions}
                    normal.forEach(function(normal) {
                        item.tax_ids[normal.tax_index].name = normal.tax_name;
                        item.tax_ids[normal.tax_index].price = price_for_tax * (normal.tax_rate / 100);
        
                        total_tax_amount += item.tax_ids[normal.tax_index].price;
        
                        totals_taxes = this.calculateTotalsTax(totals_taxes, normal.tax_id, normal.tax_name, item.tax_ids[normal.tax_index].price);
                    }, this);
                }
        
                if (withholding.length) {
                    // Calculate and apply withholding taxes{deducted or withheld at the source of income}{collecting taxes on income earned by non-residents}
                    withholding.forEach(function(withholding) {
                        item.tax_ids[withholding.tax_index].name = withholding.tax_name;
                        item.tax_ids[withholding.tax_index].price = -(price_for_tax * (withholding.tax_rate / 100));
                        // signifies that this amount should be subtracted or deducted from the total instead of added.

// assume that total is amount of that non resident has to earn
        
                        total_tax_amount += item.tax_ids[withholding.tax_index].price;
        
                        totals_taxes = this.calculateTotalsTax(totals_taxes, withholding.tax_id, withholding.tax_name, item.tax_ids[withholding.tax_index].price);
                    }, this);
                }
        
                item.grand_total += total_tax_amount;
        
                if (compounds.length) {
                    // Calculate and apply compound taxes{ calculated based on the combined effect of multiple tax rates}
                    compounds.forEach(function(compound) {
                        item.tax_ids[compound.tax_index].name = compound.tax_name;
                        item.tax_ids[compound.tax_index].price = (item.grand_total / 100) * compound.tax_rate;
        
                        totals_taxes = this.calculateTotalsTax(totals_taxes, compound.tax_id, compound.tax_name, item.tax_ids[compound.tax_index].price);
        
                        item.grand_total += item.tax_ids[compound.tax_index].price;
                    }, this);
                }
        // include the discounts before calculating the inclusive taxes.
                if (inclusives.length) {
                    item.total += total_discount_amount;
                    // because the other hand, for other types of taxes (such as normal taxes or compound taxes), they are applied on top of the base amount, which is the modified total (item.grand_total) that already reflects the discounts applied
                }
            }
        }
        ,

        calculateTotalBeforeDiscountAndTax() {
            // Array to store the item amounts before discount and tax
            let amount_before_discount_and_tax = [];
        
            // Total amount before discount and tax
            let total = 0;
        
            this.items.forEach(function(item, index) {
                // Calculate the total amount for the current item
                let item_total = 0;
                item_total = item.price * item.quantity;
        
                // Calculate item discount
                if (item.discount) {
                    if (item.discount_type === 'percentage') {
                        // Calculate discount amount based on percentage
                        if (item.discount > 100) {
                            item.discount = 100;
                        }
                        item.discount_amount = item_total * (item.discount / 100);
                    } else {
                        // Calculate discount amount based on fixed value
                        if (parseInt(item.discount) > item_total) {
                            item.discount_amount = item_total;
                        } else {
                            item.discount_amount = parseFloat(item.discount);
                        }
                    }
                } else {
                    item.discount_amount = 0;
                }
        
                // Update the total amount by subtracting the item discount amount
                total += item_total - item.discount_amount;
        
                // Store the item amount before discount and tax in the array
                amount_before_discount_and_tax[index] = item_total - item.discount_amount;
            });
        
            // Set the total amount in the array
            amount_before_discount_and_tax['total'] = total;
        
            // Return the array of item amounts before discount and tax
            return amount_before_discount_and_tax;
        }
        ,

        calculateTotalsTax(totals_taxes, id, name, price) {
            let total_tax_index = totals_taxes.findIndex(total_tax => {
                if (total_tax.id === id) {
                    return true;
                }
            }, this); // Comment: Using 'this' as the second argument to the findIndex method, although not necessary in this context.
        
            if (total_tax_index === -1) {
                totals_taxes.push({
                    id: id,
                    name: name,
                    total: price,
                }); // Comment: Add a new object to the totals_taxes array if no matching id is found.
            } else {
                totals_taxes[total_tax_index].total = parseFloat(totals_taxes[total_tax_index].total) + parseFloat(price); // Comment: Update the total property of the existing total_tax object by adding the provided price to the existing total.
            }
        
            return totals_taxes; // Comment: Return the modified totals_taxes array.
        }
,        

        onSelectedItem(item){
            this.onAddItem(item);
        },

      /**
 * Adds an item to the form and items arrays, and performs additional actions.
 *
 * @param {Object} payload - The payload containing the item and item type.
 */
onAddItem(payload) {
    let { item, itemType } = payload;
    let inputRef = `${itemType === 'newItem' ? 'name' : 'description'}`; // indication for which input to focus first
    let total = 1 * item.price;
    let item_taxes = [];

    // Add item taxes to the taxes array and create item tax objects
    if (item.tax_ids) {
        item.tax_ids.forEach(function (tax_id, index) {
            // Check if the tax already exists in the taxes array
            if (this.taxes.includes(tax_id)) {
                this.taxes[tax_id].push(item.id);
            } else {
                // If the tax doesn't exist, add it to the taxes array
                this.taxes.push(tax_id);
                this.taxes[tax_id] = [];
                this.taxes[tax_id].push(item.id);
            }

            // Create item tax objects with an ID and a default price
            item_taxes.push({
                id: tax_id,
                price: 10,
            });
        }, this);
    }

    // Add the item to the form items array
    this.form.items.push({
        item_id: item.id,
        name: item.name,
        description: item.description,
        quantity: 1,
        price: item.price,
        tax_ids: item.tax_ids,
        discount: 0,
        total: total,
    });

    // Add the item to the items array with additional properties
    this.items.push({
        item_id: item.id,
        name: item.name,
        description: item.description,
        quantity: 1,
        price: item.price,
        add_tax: false,
        tax_ids: item_taxes,
        add_discount: false,
        discount: 0,
        discount_amount: 0,
        total: total,
        // @todo
        // invoice_item_checkbox_sample: [],
    });

    // Set a timeout to focus on the input field indicated by inputRef
    setTimeout(function() {
        this.onRefFocus(inputRef);
    }.bind(this), 100);

    // Set a timeout to calculate the total after a delay
    setTimeout(function() {
        this.onCalculateTotal();
    }.bind(this), 800);
}
,

       /**
 * Handles the selection of a tax for an item.
 *
 * @param {number} item_index - The index of the item in the items array.
 */
 onSelectedTax(item_index) {
    // If tax_id is empty or not set, return
    if (!this.tax_id || this.tax_id == '') {
        return;
    }

    let selected_tax;

    // Find the selected tax from the dynamic_taxes array
    this.dynamic_taxes.forEach(function (tax) {
        if (tax.id == this.tax_id) {
            selected_tax = tax;
        }
    }, this);

    if (selected_tax) {
        // Add the selected tax to the item's tax_ids array
        this.items[item_index].tax_ids.push({
            id: selected_tax.id,
            name: selected_tax.title,
            price: 0
        });

        // Add the tax_id to the form item's tax_ids array
        this.form.items[item_index].tax_ids.push(this.tax_id);

        // Update the taxes array with the item's tax_id
        if (this.taxes.includes(this.tax_id)) {
            this.taxes[this.tax_id].push(this.items[item_index].item_id);
        } else {
            this.taxes[this.tax_id] = [];
            this.taxes[this.tax_id].push(this.items[item_index].item_id);
        }
    }

    // Reset the tax_id and add_tax flag for the item
    this.tax_id = '';
    this.items[item_index].add_tax = false;

    // Calculate the total after adding the tax
    this.onCalculateTotal();
}
,

        // remove document item row => row_id = index
        onDeleteItem(index) {
            this.items.splice(index, 1);
            this.form.items.splice(index, 1);

            this.onCalculateTotal();
        },

        onAddLineDiscount(item_index) {
            this.items[item_index].discount_type = 'percentage';
            this.items[item_index].add_discount = true;
        },

        onChangeDiscountType(type) {
            this.form.discount_type = type;

            this.onAddTotalDiscount();
            this.onCalculateTotal();
        },

        onChangeLineDiscountType(item_index, type) {
            this.items[item_index].discount_type = type;

            this.onCalculateTotal();
        },

        onAddTotalDiscount() {
            let discount = document.getElementById('pre-discount').value;

            if (this.form.discount_type === 'percentage') {
                if (discount < 0) {
                    discount = 0;
                } else if (discount > 100) {
                    discount = 100;
                }
            } else {
                if (discount < 0) {
                    discount = 0;
                } else if (discount > this.totals.sub) {
                    discount = this.totals.sub;
                }
            }

            document.getElementById('pre-discount').value = discount;

            this.form.discount = discount;
            this.discount = false;

            this.onCalculateTotal();
        },

        onDeleteDiscount(item_index) {
            this.items[item_index].add_discount = false;
            this.items[item_index].discount = 0;

            this.onCalculateTotal();
        },

        onAddTax(item_index) {
            this.items[item_index].add_tax = true;
        },

        onAddDiscount() {
            this.show_discount = !this.show_discount;

            if (this.show_discount) {
                this.show_discount_text = false;
                this.delete_discount = true;
            }
        },

        onRemoveDiscountArea() {
            this.show_discount = false;
            this.show_discount_text = true;
            this.discount = false;
            this.delete_discount = false;
        },

        onDeleteTax(item_index, tax_index) {
            if (tax_index == '999') {
                this.items[item_index].add_tax = false;

                return;
            }

            this.items[item_index].tax_ids.splice(tax_index, 1);
            this.form.items[item_index].tax_ids.splice(tax_index, 1);

            this.onCalculateTotal();
        },

        onBindingItemField(item_index, field_name) {
            this.form.items[item_index][field_name] = this.items[item_index][field_name];
        },

        onEmailViaTemplate(route, template) {
            this.email_template = template;

            this.onSendEmail(route);
        },

/**
 * Handles the change of currency.
 *
 * @param {string} currency_code - The code of the selected currency.
 */
onChangeCurrency(currency_code) {
    // If editing and the currency is less than or equal to 2, increment the currency and return
    if (this.edit.status && this.edit.currency <= 2) {
        this.edit.currency++;
        return;
    }

    // If the currencies array is empty, fetch the currencies from the server
    if (!this.currencies.length) {
        let currency_promise = Promise.resolve(window.axios.get((url + '/settings/currencies')));

        currency_promise.then(response => {
            if (response.data.success) {
                this.currencies = response.data.data;
            }
        })
        .catch(error => {
            // Retry changing the currency in case of an error
            this.onChangeCurrency(currency_code);
        });
    }

    // Loop through the currencies array
    this.currencies.forEach(function (currency, index) {
        // Check if the currency code matches the selected currency_code
        if (currency_code == currency.code) {
            this.currency = currency;

            // Update the form's currency_code and currency_rate
            this.form.currency_code = currency.code;
            this.form.currency_rate = currency.rate;

            // Perform currency conversion
            this.currencyConversion();
        }

        // Check if the company's currency code matches the current currency
        if (company_currency_code == currency.code) {
           this.currency_symbol = currency;
        }
    }, this);
}
,

        setDueMinDate(date) {
            this.min_due_date = date;
        },
        currencyConversion() {
            // Delay execution to allow for the rendering of elements
            setTimeout(() => {
                // Check if there are any elements with the class 'js-conversion-input'
                if (document.querySelectorAll('.js-conversion-input')) {
                    // Retrieve all elements with the class 'js-conversion-input'
                    let currency_input = document.querySelectorAll('.js-conversion-input');
        
                    // Iterate over each input element
                    for (let input of currency_input) {
                        // Set the 'size' attribute of the input element to its value length
                        input.setAttribute('size', input.value.length);
                    }
                }
            }, 250); // Wait for 250 milliseconds before executing the code
        }
        ,

        onBeforeUnload() {
            window.onbeforeunload = function() {
                return 'Are you sure you want to leave this page';
            };
        },

        onFormCapture() {
            // Retrieve the form element with the 'document' id
            let form_html = document.querySelector('form');
        
            // Check if a form element is found and its id is 'document'
            if (form_html && form_html.getAttribute('id') == 'document') {
                // Add click event listeners to various elements within the form to handle when entered value on form he /she want to leave page
                form_html.querySelectorAll('input, textarea, select, ul, li, a').forEach((element) => {
                    element.addEventListener('click', () => {
                        this.onBeforeUnload();
                    });
                });
        
                // Add click event listeners to submit buttons within the form
                form_html.querySelectorAll('[type="submit"]').forEach((submit) => {
                    submit.addEventListener('click', () => {
                        window.onbeforeunload = null;
                        // remove any previously assigned event handler for the beforeunload event on the window object
                    });
                });
        
                // Add click event listeners to button elements within the form
                form_html.querySelectorAll('[type="button"]').forEach((button) => {
                    button.addEventListener('click', () => {
                        window.onbeforeunload = null;
                    });
                });
            }
        }
        ,

        onChangeRecurringDate() {
            let started_at = new Date(this.form.recurring_started_at);
            let due_at = format(addDays(started_at, this.form.payment_terms), 'YYYY-MM-DD');

            this.form.due_at = due_at;
        },

        onSubmitViaSendEmail() {
            this.form['senddocument'] = true;
            this.send_to = true;

            this.onSubmit();
        },
    },

    created() {
        // Initialize the form items array
        this.form.items = [];
    
        // Check if document_items is defined and truthy
        if (typeof document_items !== 'undefined' && document_items) {
            // Set edit status to true
            this.edit.status = true;
            // Set edit currency to 1
            this.edit.currency = 1;
    
            // Iterate over each item in document_items
            document_items.forEach(function(item) {
                // form set item
                this.form.items.push({
                    // Set properties of the item object
                    item_id: item.item_id,
                    name: item.name,
                    description: item.description === null ? "" : item.description,
                    quantity: item.quantity,
                    price: (item.price).toFixed(2),
                    tax_ids: item.tax_ids,
                    discount: item.discount_rate,
                    discount_type: item.discount_type,
                    total: (item.total).toFixed(2)
                });
    
                // Check if item.tax_ids is defined
                if (item.tax_ids) {
                    // Iterate over each tax_id in item.tax_ids
                    item.tax_ids.forEach(function (tax_id, index) {
                        // Check if taxes array includes the tax_id
                        if (this.taxes.includes(tax_id)) {
                            // Push item.id to the corresponding tax_id array
                            this.taxes[tax_id].push(item.id);
                        } else {
                            // Add the tax_id to taxes array
                            this.taxes.push(tax_id);
    
                            // Create a new array for the tax_id
                            this.taxes[tax_id] = [];
    
                            // Push item.id to the new tax_id array
                            this.taxes[tax_id].push(item.id);
                        }
                    }, this);
                }
    
                // Initialize item_taxes array
                let item_taxes = [];
    
                // Iterate over each item_tax in item.taxes
                item.taxes.forEach(function(item_tax) {
                    // Push tax details to item_taxes array
                    item_taxes.push({
                        id: item_tax.tax_id,
                        name: item_tax.name,
                        price: (item_tax.amount).toFixed(2),
                    });
                });
    
                // Push item details to the items array
                this.items.push({
                    item_id: item.item_id,
                    name: item.name,
                    description: item.description === null ? "" : item.description,
                    quantity: item.quantity,
                    price: (item.price).toFixed(2),
                    add_tax: false,
                    tax_ids: item_taxes,
                    add_discount: (item.discount_rate) ? true : false,
                    discount: item.discount_rate,
                    discount_type: item.discount_type,
                    total: (item.total).toFixed(2),
                    // @todo
                    // invoice_item_checkbox_sample: [],
                });
            }, this);
    
            // Iterate over each item in the items array
            this.items.forEach(function(item) {
                // Iterate over each tax in item.tax_ids
                item.tax_ids.forEach(function(tax) {
                    // Find the index of the tax in totals.taxes array
                    let total_tax_index = this.totals.taxes.findIndex(total_tax => {
                        if (total_tax.id === tax.id) {
                          return true;
                        }
                    }, this);
    
                    // Check if the tax is not found in totals.taxes array
                    if (total_tax_index === -1) {
                        // Push a new tax object to totals.taxes array
                        this.totals.taxes.push({
                            id: tax.id,
                            name: tax.name,
                            total: tax.price,
                        });
                    } else {
                        // Update the total of the existing tax in totals.taxes array
                        this.totals.taxes[total_tax_index].total = parseFloat(this.totals.taxes[total_tax_index].total) + parseFloat(tax.price);
                    }
                }, this);
            }, this);
        }
    
    

        if (typeof document_currencies !== 'undefined' && document_currencies) {
            this.currencies = document_currencies;

            this.currencies.forEach(function (currency, index) {
                if (document_default_currency == currency.code) {
                    this.currency = currency;

                    this.form.currency_code = currency.code;
                }
            }, this);
        }

        if (typeof document_taxes !== 'undefined' && document_taxes) {
            this.dynamic_taxes = document_taxes;
        }

        if (getQueryVariable('senddocument')) {
            // clear query string
            let uri = window.location.toString();

            if (uri.indexOf("?") > 0) {
                let clean_uri = uri.substring(0, uri.indexOf("?"));
//  eg state = { page: 'home', timestamp: Date.now() }
                window.history.replaceState({}, document.title, clean_uri);
            }

            let email_route = document.getElementById('senddocument_route').value;

            this.onSendEmail(email_route);
        }

        this.page_loaded = true;
    },

    watch: {
        watch: {
            'form.discount': function(newVal, oldVal) {
                // Check if newVal is not a string, and return early
                if (typeof newVal !== 'string') {
                    return;
                }
        
                // Check if newVal is not empty and doesn't match the required format
                if (newVal != '' && newVal.search('^(?=.*?[0-9])[0-9.,]+$') !== 0) {
                    // Restore the old value to form.discount
                    this.form.discount = oldVal;
        
                    // Check if Number(newVal) is null
                    if (Number(newVal) == null) {
                        // Replace comma with a dot in form.discount
                        this.form.discount.replace(',', '.');
                    }
        
                    // Return early
                    return;
                }
        
                // Iterate over each item in regex_condition array
                for (let item of this.regex_condition) {
                    // Check if form.discount is truthy and includes the current item
                    if (this.form.discount && this.form.discount.includes(item)) {
                        // Remove the last character from newVal and assign it to inputShown
                        const removeLastChar = newVal.length - 1;
                        const inputShown = newVal.slice(0, removeLastChar);
        
                        // Update form.discount with inputShown
                        this.form.discount = inputShown;
                    }
                }
        
                // Replace comma with a dot in form.discount
                this.form.discount.replace(',', '.');
            },
        }
        ,

        'form.loading': function (newVal, oldVal) {
            if (! newVal) {
                this.send_to = false;
            }
        },
    },
});

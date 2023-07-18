
                         discounted total amount
 the `onCalculateTotal()` method iterates through each item, calculates the discount amount for each item based on the discount type, and accumulates the total discount amount by summing the individual item discounts. This provides the overall discount amount for all items in the invoice.

                                subtotal
 the onCalculateTotal() method calculates the discounted total amount for each item by subtracting any applied discounts, accumulates the total discount amount for all items, and calculates the subtotal by summing the discounted amounts of all items.

                           line_item_discount_total
the line_item_discount_total is calculated by accumulating the discount amount applied to each item within the loop, representing the total discount amount for all items.
                                 
                                 grand total
 By summing the subtotal, total taxes, and applying additional discounts, the resulting value is the grand total. This value represents the total amount including all item prices, taxes, and discounts.

                             calculation of taxes
 the calculateItemTax() method handles the calculation of taxes for each item by categorizing them into different tax types, calculating the tax amounts based on the item's price or grand total, and updating the totals.taxes array with the tax information.

                               amount_before_discount_and_tax
By iterating through each item, multiplying the price by the quantity, and considering any applicable discounts, the amount_before_discount_and_tax array is populated with the total amount for each item before any discounts or taxes are applied. The overall total amount is also calculated and stored in the amount_before_discount_and_tax['total'] property.

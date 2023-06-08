
CREATE SALE INVOICE
ROUTE
{company_id}\sales\invoices\create\
VIEWS
\wamp64\www\akaunting-1\resources\views\sales\invoices\create.blade.php
DATA: NO
SUBCOMPONENT
\wamp64\www\akaunting-1\app\View\Components\Layouts\Admin.php
\wamp64\www\akaunting-1\resources\views\components\documents\form\content.blade.php
\wamp64\www\akaunting-1\resources\views\components\documents\script.blade.php
Slots         
title,favorite,content
LEVEL1(1 Admin.php)
SUBCOMPONENT
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\head.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\menu.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\header.blade.php
\wamp64\www\akaunting-1\resources\views\components\menu\favorite.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\content.blade.php
\wamp64\www\akaunting-1\resources\views\livewire\notification\browser\firefox.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\footer.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\scripts.blade.php

DATA:
$metaTitle-slot from parent
$title-slot from prent
$content-slot from parent
$status-slot from parent
$info-slot from parent
$favorite-slot from parent

Slots         
metaTitle,title,status,info,favorite,buttons,moreButtons

LEVEL2(1 head.blade.php)

SUBCOMPONENT
\wamp64\www\akaunting-1\resources\views\components\layouts\pwa\head.blade.php
\wamp64\www\akaunting-1\resources\views\components\script\exceptions\trackers.blade.php

DATA
$metaTitle-slot from parent
$title-slot from parent

GLOBAL DATA
window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;

        var flash_notification = {!! (session()->has('flash_notification')) ? json_encode(session()->get('flash_notification')) : 'false' !!};
var url = '{{ url("/" . company_id()) }}';
        var app_url = '{{ config("app.url") }}';
        var aka_currency = {!! !empty($currency) ? $currency : 'false' !!};


LEVEL3(1 pwa\head.blade.php)
serviceWorker registering
if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register("{{ asset('serviceworker.js') }}");
    }

    
LEVEL3(2 exceptions\trackers.blade.php)
Controller Component

C:\wamp64\www\akaunting\app\View\Components\Script\Exceptions\Trackers.php

Data
$channel;$action;$ip;$tags;$params; from Control Component

GLOBAL Data 
var exception_tracker = {
            channel: '{{ $channel }}',
            action: '{{ $action }}',
            user: {
                id: '{{ user_id() }}',
                name: '{{ user()?->name }}',
                email: '{{ user()?->email }}',
            },
            ip: '{{ $ip }}',
            tags: {!! json_encode($tags) !!},
            params: {!! json_encode($params) !!},
        };


LEVEL2(2 admin\menu.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\dropdown\link.blade.php
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\favorites.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\notifications.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\settings.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\neww.blade.php
C:\wamp64\www\akaunting\resources\views\components\loading\menu.blade.php

Data:
$notification_count-From Controller Component
$companies-From Controller Component
Slots
trigger

LEVEL3(1 components\dropdown\link.blade.php)
Slots
$slot
Data
$attributes-From parent
$href-From parent

LEVEL3(2 components\tooltip.blade.php)
Data
$width-not  provided
$id-From parent
$backgroundColor-From Controller Component
$textColor-From Controller Component
$size-From Controller Component
$borderColor-From Controller Component
$tooltipPosition-From Controller Component
$whitespace-From Controller Component
$message-From parent
Slots
$slot

LEVEL3(3 livewire\menu\favorites.blade.php)
Data:
$favorites-From Controller Component

LEVEL3(4 livewire\menu\notifications.blade.php)
Data 
$keyword-From Controller Component
$notifications-From Controller Component

Events:
window.addEventListener('mark-read', event => {
            if (event.detail.type == 'notifications') {
                $.notify(event.detail.message, {
                    type: 'success',
                });
            }
        });

        window.addEventListener('mark-read-all', event => {
            if (event.detail.type == 'notifications') {
                $.notify(event.detail.message, {
                    type: 'success',
                });
            }
        });

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php (Explaination already)

LEVEL3(5 livewire\menu\settings.blade.php)
GlobalData 
var is_settings_menu = {{ $active_menu }};
Data 
$keyword-From Controller Component
$settings-From Controller Component

LEVEL3(6 livewire\menu\neww.blade.php)
Data 
$keyword-From Controller Component
$neww-From Controller Component

LEVEL3(7 components\loading\menu.blade.php)
No just html

LEVEL2(3 layouts\admin\header.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\suggestions.blade.php

Data
$title-it slot from parent
$status-it slot from parent
$info-it slot from parent
$buttons-it slot from parent
$moreButtons-it slot from parent
$favorite-it slot from parent
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\title.blade.php

LEVEL3(1 views\components\title.blade.php)
Data
$slot-it slot from parent

LEVEL2(4 components\menu\favorite.blade.php)
Data
$title-From Controller Component
$icon-From Controller Component
$route-From Controller Component
$url-From Controller Component

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\livewire\menu\favorite.blade.php

LEVEL3(1 livewire\menu\favorite.blade.php)
Data 
$favorited-From Controller Component
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php (Already Explained)

LEVEL2(5 components\layouts\admin\content.blade.php)
Data
$slot-it slot from parent
SUBCOMPONENT
<notifications></notifications>
<component v-bind:is="component"></component>(From Vue js)

LEVEL2(6 livewire\notification\browser\firefox.blade.php)
Data 
$status-From Controller Component

LEVEL2(7 layouts\admin\footer.blade.php)
Nothing just html.
LEVEL2(8 layouts\admin\scripts.blade.php)
GlobalData: 
window.livewire_app_url = {{ company_id() }};

javascript Variable:
toggleButton ,navbarMenu,mainContent,detailsEL, sectionContent
sideBar,menuBackground,menuClose,notification_count 

LEVEL1(2 components\documents\form\content.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\loading\content.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\company.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\main.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\recurring.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\advanced.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\buttons.blade.php
Data 
$formId-from Controller component
$formRoute-from Controller component
$formMethod-from Controller component
$document-from Controller component
$type-from parent component
$hideCompany-from Controller component
$showRecurring-from Controller component
$hideAdvanced-from Controller component
$hideButtons-from Controller component

LEVEL2(1 components\loading\content.blade.php)
nothing just loading spin

LEVEL2(2 components\documents\form\company.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\accordion\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\accordion\head.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\group\text.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\group\file.blade.php
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingCompanyEdit.vue

DATA 
$hideLogo-from Controller component
$textSectionCompaniesTitle-from Controller component
$textSectionCompaniesDescription-from Controller component
$titleSetting-from Controller component
$subheadingSetting-from Controller component
$hideDocumentSubheading-from Controller component
$hideCompanyEdit-from Controller component
$company-from Controller component

SLOTS 
head,body

LEVEL3(1 components\form\accordion\index.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\icon.blade.php

DATA 
$attributes-From Prop
$icon-from Controller component
$type-From Parent Component
$body -slots
$foot-slots
$head-slots

LEVEL4(1 components\icon.blade.php)
DATA 
$sharp-from Controller component
$filled-from Controller component
$class-from Controller component
$simpleIcons-from Controller component
$rounded-from Controller component
$custom-from Controller component
$attributes-From Prop
$icon-From Parent Component

LEVEL3(2 components\form\accordion\head.blade.php)
DATA 
$description-From Parent Component
$title-From Parent Component

LEVEL3(3 components\form\group\text.blade.php)
DATA 
$formGroupClass-from Controller component
$required-from Controller component
$readonly-from Controller component
$disabled-from Controller component
$attributes['v-show']-$attributes
$attributes['v-bind:disabled']-$attributes
$attributes['v-error']-$attributes
$label-from Controller component
$inputGroupClass-from Controller component
$icon
$name-from Controller component
$id-from Controller component
$error
$value-from Controller component
$placeholder -from Controller component
$attributes['v-model']-$attributes
$custom_attributes-from Controller component

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\label.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\icon.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\error.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\input\text.blade.php

LEVEL4(1 components\form\label.blade.php)
DATA 
$slot-content from parent
$attributes- From $attributes

LEVEL4(2 components\form\icon.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\icon.blade.php

LEVEL5(1 components\icon.blade.php)
Already Explained

LEVEL4(3 components\form\error.blade.php)
DATA 
$attributes['v-error']-From $attributes
form.errors.has("' . $name . '")-?
$name -From Parent
$attributes['v-error-message']-From $attributes

LEVEL4(4 components\form\input\text.blade.php)
$name-From Parent
$id-From Parent
$placeholder-From Parent
$value-From Parent

LEVEL3(4 components\form\group\file.blade.php)
DATA 
$formGroupClass-from Controller component
$required-from Controller component
$readonly-from Controller component
$disabled-from Controller component
$attributes['v-show']-$attributes
$attributes['v-bind:disabled']-$attributes
$attributes['v-error']-$attributes
$label-from Controller component
$inputGroupClass-from Controller component
$icon
$options
$name-from Controller component
$id-from Controller component
$error
$value-from Controller component
$placeholder -from Controller component
$attributes['v-model']-$attributes
$custom_attributes-from Controller component

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\label.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\icon.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\error.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\input\file.blade.php

LEVEL4(1 components\form\label.blade.php)
DATA 
$slot-content from parent
$attributes- From $attributes

LEVEL4(2 components\form\icon.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\icon.blade.php

LEVEL5(1 components\icon.blade.php)
Already Explained

LEVEL4(3 components\form\error.blade.php)
DATA 
$attributes['v-error']-From $attributes
form.errors.has("' . $name . '")-?
$name -From Parent
$attributes['v-error-message']-From $attributes

LEVEL4(4 components\form\input\file.blade.php)
DATA 
$attributes['dropzone-class']-From attributes
$options-From Controller Component
$name-From Parent
$multiple-From Parent
$attributes['preview']-From attributes
$attributes['previewClasses']-From attributes
attributes['singleWidthClasses']-From attributes
$attributes['url']-From attributes
$attributes['v-model']-From attributes
$attributes['data-field']-From attributes
$value-From Controller Component

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDropzoneFileUpload.vue

LEVEL5(1 components\AkauntingDropzoneFileUpload.vue)
DATA 
preview -From Props
previewClasses -From Props
singleWidthClasses -From Props
multiple - From Props
textDropFile- From Props
textChooseFile- From Props
options -From Props
value -From Props
url -From Props
multiple -From Props
attachments -From Props
model-From Props

LEVEL4(5 components\AkauntingCompanyEdit.vue)
PROPS
company, taxNumberText, companyId,companyForm,description

DATA 
form,company_form,company_html

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModalAddNew.vue
AkauntingModal from './AkauntingModal'
AkauntingMoney from './AkauntingMoney'
AkauntingRadioGroup from './AkauntingRadioGroup'
AkauntingSelect from './AkauntingSelect'
AkauntingDate from './AkauntingDate'
{ Select, Option, OptionGroup, ColorPicker } from 'element-ui'
PLUGINS 
Form from './../plugins/form'

DynamicComponent
<component v-bind:is="company_html" @submit="onSubmit" @cancel="onCancel"></component>

LEVEL5(1 components\AkauntingModalAddNew.vue)
PROPS
show,is_component,title, message, buttons,animationDuration,modalDialogClass,modalPositionTop

SUBCOMPONENT
import { SlideYUpTransition } from "vue2-transitions";
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModal.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRadioGroup.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelectRemote.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDate.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRecurring.vue

C:\wamp64\www\akaunting\resources\assets\js\plugins\form.js
import { Alert, ColorPicker } from 'element-ui';
C:\wamp64\www\akaunting\resources\assets\js\mixins\global.js

DATA 
form,display,component,money,created

DynamicComponent
add-new-component

LEVEL6(1 vue2-transitions)
it is built in

LEVEL6(2 AkauntingModal)
PROPS
show,modalDialogClass,title,message,button_cancel, button_delete, animationDuration,modalPositionTop

DATA
form, display,created

SUBCOMPONENT
import { SlideYUpTransition } from "vue2-transitions";
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRadioGroup.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDate.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRecurring.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue

LEVEL7(1 Acomponents\AkauntingRadioGroup.vue)
PROPS
name,text,value,enable,disable,col
DATA
focused,real_value

LEVEL7(2 components\AkauntingSelect.vue)
Global SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\Inputs\BaseInput.vue
SUBCOMPONENT
import { Select, Option, OptionGroup, ColorPicker } from 'element-ui';

C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModalAddNew.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModal.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRadioGroup.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDate.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue

C:\wamp64\www\akaunting\resources\assets\js\plugins\form.js
PROPS
title,placeholder, formClasses,formError,icon,name,value,options,dynamicOptions,fullOptions,disabledOptions,description
option_sortable,sortOptions, model,addNew,description,group,multiple,readonly,clearable, notRequired,disabled,collapse,noDataText,noMatchingDataText,searchable,searchText,forceDynamicOptionValue

DATA 
dynamicPlaceholder,add_new,add_new_html,selected, form,sorted_options,full_options,new_options,loading,remote

DynamicComponent
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue @add-new-component

LEVEL8(1 components\AkauntingModalAddNew.vue)
Already

LEVEL8(2 components\AkauntingModal.vue)
Already

LEVEL8(3 components\AkauntingMoney.vue)
PROPS
title,placeholder,value,moneyClass, group_class, col, error,required,readonly, disabled,isDynamic,dynamicCurrency, currency,masked,rowInput, notRequired

SUBCOMPONENT
import {Money} from 'v-money';

Global Component
money

LEVEL9(1 money)
From  v-money package


LEVEL8(4 components\AkauntingRadioGroup.vue)
Already
LEVEL8(5 components\AkauntingDate.vue)

SUBCOMPONENT
import flatPicker from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";

PROPS
title,dataName,placeholder,readonly,notRequired,period,disabled,formClasses,formError,name,value,model,dateConfig,icon,locale,hiddenYear,dataValueMin

LEVEL9(1 flatPicker)
From  flatpickr library

LEVEL8(6 components\AkauntingSelect.vue)
Already

LEVEL8(7 plugins\form.js)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\plugins\error.js

Data 
form,name,data

LEVEL9(1 js\plugins\error.js)
DATA 
errors

LEVEL8(8 components\Inputs\BaseInput.vue)
PROPS 
required,group,valid,alternative,label,error,footerError,successMessage,formClasses,labelClasses,inputClasses,inputGroupClasses,value,type, appendIcon,prependIcon,notRequired

DATA 
focused

LEVEL8(9 components\AkauntingSelect.vue @add-new-component)

SUBCOMPONENT {ALREADY}
AkauntingModalAddNew,AkauntingRadioGroup,AkauntingSelect,AkauntingModal,AkauntingMoney,AkauntingDate,AkauntingRecurring,[ColorPicker.name]: ColorPicker,

DATA 
add_new

LEVEL7(3 components\AkauntingDate.vue)
ALREADY

LEVEL7(4 components\AkauntingRecurring.vue)
PROPS
startText, dateRangeText,middleText,endText,frequencies,frequencyText,frequencyEveryText,frequencyValue,invertalError,customFrequencies,customFrequencyValue,customFrequencyError,startedValue,startedError,limits,limitValue,limitCountValue,limitCountError,limitDateValue,limitDateError,dateFormat,sendEmailShow,sendEmailText,sendEmailYesText,sendEmailNoText,sendEmailValue

LEVEL7(5 components\AkauntingMoney.vue)
ALREADY

DATA 
frequency,interval,customFrequency,started_at,limit,limitCount,limitDate,formatDate,sendEmail

LEVEL6(3 components\AkauntingModal.vue)
ALREADY

LEVEL6(4 components\AkauntingMoney.vue)
ALREADY
LEVEL6(5 components\AkauntingRadioGroup.vue)
ALREADY

LEVEL6(6 components\AkauntingSelect.vue)
ALREADY

LEVEL6(7 components\AkauntingSelectRemote.vue)
SUBCOMPONENT (ALREADY)

import { Select, Option, OptionGroup, ColorPicker } from 'element-ui';
import AkauntingModalAddNew from './AkauntingModalAddNew';
import AkauntingModal from './AkauntingModal';
import AkauntingMoney from './AkauntingMoney';
import AkauntingRadioGroup from './AkauntingRadioGroup';
import AkauntingSelect from './AkauntingSelect';
import AkauntingDate from './AkauntingDate';
import AkauntingRecurring from './AkauntingRecurring';

import Form from './../plugins/form';

PROPS 
title,placeholder,formClasses,formError,icon,name,value,options,dynamicOptions,fullOptions,disabledOptions,option_sortable,sortOptions,model,addNew, group,multiple, readonly, noArrow,clearable,notRequired,disabled,collapse,noDataText,noMatchingDataText,searchable,searchText,remoteAction,currencyCode

DATA 
dynamicPlaceholder,add_new,add_new_html,selected,form ,sorted_options,full_options,new_options,loading

DynamicComponent{ALREADY}
add-new-component

GLOBAL COMPONENT {ALREADY}
base-input

LEVEL6(8 components\AkauntingDate.vue)
ALREADY

LEVEL6(9 components\AkauntingRecurring.vue)
ALREADY

LEVEL6(10 js\plugins\form.js)

LEVEL6(11 js\mixins\global.js)
SUBCOMPONENT
import axios from 'axios';

C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDropzoneFileUpload.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingContactCard.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingCompanyEdit.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingEditItemColumns.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingItemButton.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDocumentButton.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSearch.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingHtmlEditor.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingCountdown.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingCurrencyConversion.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingConnectTransactions.vue
import AkauntingSwitch from './../components/AkauntingSwitch';
import AkauntingSlider from './../components/AkauntingSlider';
import AkauntingColor from './../components/AkauntingColor';
import CardForm from './../components/CreditCard/CardForm';
import AkauntingModal from './../components/AkauntingModal';
import AkauntingMoney from './../components/AkauntingMoney';
import AkauntingModalAddNew from './../components/AkauntingModalAddNew';
import AkauntingRadioGroup from './../components/AkauntingRadioGroup';
import AkauntingSelect from './../components/AkauntingSelect';
import AkauntingSelectRemote from './../components/AkauntingSelectRemote';
import AkauntingDate from './../components/AkauntingDate';
import AkauntingRecurring from './../components/AkauntingRecurring';

import NProgress from 'nprogress';
import 'nprogress/nprogress.css';
import NProgressAxios from './../plugins/nprogress-axios';

import { Select, Option, Steps, Step, Button, Link, Tooltip, ColorPicker } from 'element-ui';

import Form from './../plugins/form';
import Swiper, { Navigation, Pagination } from 'swiper';
import GLightbox from 'glightbox';

Swiper.use([Navigation, Pagination]);

import Bugsnag from './../exceptions/trackers/bugsnag';
import Sentry from './../exceptions/trackers/sentry';

DATA 
component,currency,all_currencies,connect,cardData,min_date,item_name_input,price_name_input,quantity_name_input

DynamicComponent
add-new-component{ALREADY}

LEVEL7(1 components\AkauntingDropzoneFileUpload.vue)
PROPS 
textDropFile,textChooseFile,options,value,url,multiple,previewClasses, singleWidthClasses,preview,attachments,model

DATA 
files,configurations

LEVEL7(2 components\AkauntingContactCard.vue)
SUBCOMPONENT
import Vue from 'vue';

import { Select, Option, OptionGroup, ColorPicker } from 'element-ui';

import AkauntingModalAddNew from './AkauntingModalAddNew';
import AkauntingModal from './AkauntingModal';
import AkauntingMoney from './AkauntingMoney';
import AkauntingRadioGroup from './AkauntingRadioGroup';
import AkauntingSelect from './AkauntingSelect';
import AkauntingDate from './AkauntingDate';

import Form from './../plugins/form';

PROPS 
placeholder,searchRoute,createRoute,error,selected, contacts,addNew,addContactText,createNewContactText,editContactText,contactInfoText,taxNumberText,chooseDifferentContactText,noDataText,noMatchingDataText

DATA 
contact_list, contact,search,show, form,add_new,add_new_html

DYNAMICCOMPONENT {ALREADY}
add-new-component

LEVEL7(3 components\AkauntingContactCard.vue)
ALREADY

LEVEL7(4 components\AkauntingCompanyEdit.vue)
ALREADY

LEVEL7(5 components\AkauntingEditItemColumns.vue)
DYNAMICCOMPONENT {ALREADY}
add-new-component

SUBCOMPONENT {ALREADY}
import AkauntingModalAddNew from './AkauntingModalAddNew';
import Form from './../plugins/form';

PROPS 
placeholder,type,editColumn,

DATA 
form,edit_column,edit_html

LEVEL7(6 components\AkauntingItemButton.vue)
SUBCOMPONENT {ALREADY}
import Vue from 'vue';

import { Select, Option, OptionGroup, ColorPicker } from 'element-ui';

import {Money} from 'v-money';
import AkauntingModalAddNew from './AkauntingModalAddNew';
import AkauntingModal from './AkauntingModal';
import AkauntingMoney from './AkauntingMoney';
import AkauntingRadioGroup from './AkauntingRadioGroup';
import AkauntingSelect from './AkauntingSelect';
import AkauntingDate from './AkauntingDate';

import Form from './../plugins/form';

PROPS 
placeholder,type, price,items,addNew,addItemText,createNewItemText,noDataText,noMatchingDataText, dynamicCurrency,currency,searchCharLimit

DATA 
item_list,selected_items,changeBackground,search,show,isItemMatched,form,add_new,newItems,add_new_html,money

LEVEL7(7 components\AkauntingDocumentButton.vue)
PROPS
placeholder,items,selectedItems,addItemText,noDataText,dynamicCurrency,currency

DATA 
item_list,search,show, money

LEVEL7(8 components\AkauntingSearch.vue)
PROPS 
placeholder,selectPlaceholder,enterPlaceholder,searchText,operatorIsText,operatorIsNotText,noDataText,noMatchingDataText,value,filters,defaultFiltered,dateConfig,model

DATA 
filter_list, search,filtered,filter_index,filter_last_step,visible,equal,not_equal,range,option_values,selected_options,selected_operator,selected_values, values,current_value,show_date,show_button, show_close_icon,show_icon,not_equal_image,input_focus,defaultPlaceholder,dynamicPlaceholder

LEVEL7(9 components\AkauntingHtmlEditor.vue)
PROPS 
name,value,model,disabled

DATA 
content,editorId,customToolbar

LEVEL7(10 components\AkauntingCountdown.vue)
PROPS 
textDays,year,month,date,hour, minute,second,millisecond
DATA 
displayDays,displayHours,displayMinutes,displaySeconds,loaded,
expired

LEVEL7(11 components\AkauntingCurrencyConversion.vue)
PROPS
currencyConversionText,price,currecyCode,currencyRate,currencySymbol

DATA 
conversion,rate,texts

LEVEL7(12 components\AkauntingConnectTransactions.vue)
PROPS
show,transaction,currency,documents,translations,modalDialogClass,animationDuration
DATA 
form,transaction_amount,money,totalAmount,differenceAmount

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
import AkauntingModal from './AkauntingModal';
import AkauntingMoney from './AkauntingMoney';
import AkauntingRadioGroup from './AkauntingRadioGroup';
import AkauntingSelect from './AkauntingSelect';
import AkauntingSelectRemote from './AkauntingSelectRemote';
import AkauntingDate from './AkauntingDate';
import AkauntingRecurring from './AkauntingRecurring';

import Form from './../plugins/form';
import { Alert, ColorPicker } from 'element-ui';
import Global from './../mixins/global';

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
import AkauntingDate from './AkauntingDate';
import AkauntingRecurring from './AkauntingRecurring';
import AkauntingMoney from './AkauntingMoney';

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
add-new-component

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
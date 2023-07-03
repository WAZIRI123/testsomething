
CREATE SALE INVOICE
ROUTE
{company_id}\sales\invoices\create\
VIEWS
\wamp64\www\akaunting-1\resources\views\sales\invoices\create.blade.php
DATA: NO
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php
\wamp64\www\akaunting-1\resources\views\components\documents\form\content.blade.php
\wamp64\www\akaunting-1\resources\views\components\documents\script.blade.php
Slots         
title,favorite,content
LEVEL1(1 C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php)
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
C:\wamp64\www\akaunting\resources\views\livewire\menu\profile.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\notifications.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\settings.blade.php
C:\wamp64\www\akaunting\resources\views\livewire\menu\neww.blade.php
C:\wamp64\www\akaunting\resources\views\components\loading\menu.blade.php
C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php
MIDDLEWARE
C:\wamp64\www\akaunting\app\Http\Middleware\AdminMenu.php

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
$href-From parentcomponents\dropdown\button.blade.php

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
Controller Component
C:\wamp64\www\akaunting\app\Http\Livewire\Menu\Favorites.php

LEVEL3(4 livewire\menu\notifications.blade.php)
Data 
$keyword-From Controller Component
$notifications-From Controller Component

Controller Component
C:\wamp64\www\akaunting\app\Http\Livewire\Menu\Notifications.php

Events:
<!-- eg of how it will be triggered var markReadAllEvent = new CustomEvent('mark-read-all', {
  detail: {
    type: 'notifications',
    message: 'Notification message to display for marking all as read'
  }
});
window.dispatchEvent(markReadAllEvent); -->
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

Event
menu('settings')
<!-- created from parent component by menu()->create('settings', function ($menu) { and it trigger Events\Menu\SettingsCreated.php -->
Data 
$keyword-From Controller Component
$settings-From Controller Component

LEVEL4(event)(1 Menu\SettingsCreated.php)
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInSettings.php
DATA 
$menu-from parent

LEVEL5(listener)(1 Menu\ShowInSettings.php)
DATA 
$event-From Parent 

LEVEL3(6 livewire\menu\neww.blade.php)
Data 
$keyword-From Controller Component
$neww-From Controller Component
Event 
menu('neww')-Events\Menu\NewwCreated.php

LEVEL4(event)(1 Menu\NewwCreated.php)
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInNeww.php
DATA 
$menu-from parent
LEVEL5(listener)(1 Menu\ShowInNeww.php)
DATA 
$event-From Parent 


LEVEL3(7 components\loading\menu.blade.php)
No just html

LEVEL3(8 livewire\menu\profile.blade.php)
DATA 
menu('profile')
$active_menu-FROM CONTROLLER COMPONENT

GlobalData
var is_profile_menu = {{ $active_menu }}

EVENT 
menu('profile')-Events\Menu\ProfileCreated.php

LEVEL4(event)(1 Menu\ProfileCreated.php)
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInProfile.php
DATA 
$menu-from parent
LEVEL5(listener)(1 Menu\ShowInProfile.php)
DATA 
$event-From Parent 

LEVEL3(9 components\button\hover.blade.php)
DATA 
$color-From Controller Component
$groupHover-From Controller Component

LEVEL3(10 components\link\index.blade.php)
DATA 
$class-From Controller Component
$attributes-FROM attributes

LEVEL3(11 Http\Middleware\AdminMenu.php)
EVENT
menu('admin')-Events\Menu\AdminCreated.php

LEVEL4(event)(1 Events\Menu\AdminCreated.php )
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInAdmin.php

DATA 
$menu-From Constructor

LEVEL5(listener)(1 app\Listeners\Menu\ShowInAdmin.php)
DATA 
$event-FROM EVENT

LEVEL2(3 layouts\admin\header.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\suggestions.blade.php
C:\wamp64\www\akaunting\resources\views\components\title.blade.php

Data
$title-it slot from parent
$status-it slot from parent
$info-it slot from parent
$buttons-it slot from parent
$moreButtons-it slot from parent
$favorite-it slot from parent

LEVEL3(1 views\components\suggestions.blade.php)
Data
$suggestions-From Component

SUBCOMPONENT
link-{{ALREADY}}

LEVEL3(2 views\components\title.blade.php)
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
C:\wamp64\www\akaunting\resources\assets\js\components\NotificationPlugin\Notifications.vue
<component v-bind:is="component"></component>(From Vue js)
LEVEL3(1 components\NotificationPlugin\Notifications.vue )
SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\assets\js\components\NotificationPlugin\Notification.vue
import { SlideYUpTransition } from 'vue2-transitions';
PROPS 
transitionDuration,overlap
DATA 
notifications-FROM STORE
registered here Vue.prototype.$notifications = app.notificationStore; globally in resources/assets/js/components/NotificationPlugin/index.js


LEVEL4(1 components\NotificationPlugin\Notification.vue )
PROPS 
message,title,icon,verticalAlign,horizontalAlign, type,timeout,timestamp,component,showClose,closeOnClick,clickHandler

DATA 
elmHeight,typeByClass,textByClass

Dynamic Component 
contentRender-based on passed from parent

LEVEL2(6 livewire\notification\browser\firefox.blade.php)
Data 
$status-From Controller Component

LEVEL2(7 layouts\admin\footer.blade.php)
Nothing just html.
LEVEL2(8 layouts\admin\scripts.blade.php)
GlobalData: 
window.livewire_app_url = {{ company_id() }};

javascript Variable:
toggleButton, menus,navbarMenu,mainContent,detailsEL, sectionContent
sideBar,menuBackground,menuClose,notification_count ,menuClose

<!-- LEVEL2(9 components\layouts\admin\notifications.blade.php)
DATA 
$notifications-FROM CONTROLLER COMPONENT
$notify-FROM CONTROLLER COMPONENT -->

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
$attributes-From $attributes
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
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModal.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRadioGroup.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDate.vue
{ Select, Option, OptionGroup, ColorPicker } from 'element-ui'
PLUGINS 
Form from './../plugins/form'

DynamicComponent
<component v-bind:is="company_html" @submit="onSubmit" @cancel="onCancel"></component>

LEVEL5(1 components\AkauntingModalAddNew.vue)
PROPS
show,is_component,title, message{html for form }, buttons,animationDuration,modalDialogClass,modalPositionTop

SUBCOMPONENT
import { SlideYUpTransition } from "vue2-transitions";
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModal.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRadioGroup.vue
C:\wamp64\www\akaunting\resources\asset s\js\components\AkauntingSelect.vue
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

LEVEL6(2 js\components\AkauntingModal.vue)
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
<component v-bind:is="add_new_html" @submit="onSubmit" @cancel="onCancel"></component>

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
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSwitch.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSlider.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingColor.vue
C:\wamp64\www\akaunting\resources\assets\js\plugins\nprogress-axios.js
{ALREADY}
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
SUBCOMPONENT{ALREADY}
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

LEVEL7(13 components\AkauntingSwitch.vue)
PROPS
name,value,label,model,inputData

DATA 
enabled,selected

LEVEL7(14 components\AkauntingSlider.vue)
PROPS
name,video, screenshots,height,arrow, pagination,type,sliderView,sliderRow

LEVEL7(15 components\AkauntingColor.vue)
PROPS
title,placeholder,formClasses,formError,icon,name,value, model,readonly,disabled,small

DATA 
isOpen,color,colors,variants

LEVEL7(16 plugins\nprogress-axios.js)

LEVEL2(3 components\documents\form\main.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\section\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\section\head.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\metadata.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\form\items.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\totals.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\note.blade.php

DATA 
$type-Parent Component

LEVEL3(1 components\form\section\index.blade.php)
DATA 
$attributes-From attributes
$head-From Slot
$body-From Slot
$foot-From Slot

LEVEL3(2 components\form\section\head.blade.php)
DATA 
$description-Parent Component
$title-Parent Component

LEVEL3(3 components\documents\form\metadata.blade.php)
SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\form\label.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\contact.blade.php

C:\wamp64\www\akaunting\resources\views\components\form\group\date.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\group\text.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php


DATA 
$textContact -FROM CONTROLLER COMPONENT
$contact-FROM CONTROLLER COMPONENT
$contacts-FROM CONTROLLER COMPONENT
$searchContactRoute-FROM CONTROLLER COMPONENT
$createContactRoute-FROM CONTROLLER COMPONENT
$textAddContact-FROM CONTROLLER COMPONENT
$textCreateNewContact-FROM CONTROLLER COMPONENT
$textEditContact-FROM CONTROLLER COMPONENT
$textContactInfo-FROM CONTROLLER COMPONENT
$textChooseDifferentContact-FROM CONTROLLER COMPONENT
$textIssuedAt-FROM CONTROLLER COMPONENT
$issuedAt-FROM CONTROLLER COMPONENT
$textDocumentNumber-FROM CONTROLLER COMPONENT
$documentNumber-FROM CONTROLLER COMPONENT
$textDueAt-FROM CONTROLLER COMPONENT
$dueAt-FROM CONTROLLER COMPONENT
$periodDueAt-FROM CONTROLLER COMPONENT
$textOrderNumber-FROM CONTROLLER COMPONENT
$orderNumber-FROM CONTROLLER COMPONENT
$hideDueAt-FROM CONTROLLER COMPONENT
$hideOrderNumber-FROM CONTROLLER COMPONENT
$hideDocumentNumber-FROM CONTROLLER COMPONENT
$hideIssuedAt-FROM CONTROLLER COMPONENT

LEVEL4(1
components\form\label.blade.php)
ALREADY
LEVEL4(2
components\documents\form\contact.blade.php)

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingContactCard.vue{ALREADY}

DATA 
$placeholder-FROM PARENT
$searchRoute-FROM PARENT
$createRoute-FROM PARENT
$contacts-FROM PARENT
$contact-FROM PARENT
$textAddContact-FROM PARENT
$textCreateNewContact-FROM PARENT
$textEditContact-FROM PARENT
$textContactInfo-FROM PARENT
$textChooseDifferentContact-FROM PARENT
$error-FROM PARENT

LEVEL4(3 components\form\group\date.blade.php)
DATA 
$name-FROM PARENT
$formGroupClass-FROM PARENT
$attributes-FROM CONTROLLER COMPONENT
$readonly-FROM CONTROLLER COMPONENT
$required-FROM CONTROLLER COMPONENT
$disabled-FROM CONTROLLER COMPONENT
$group_class-FROM CONTROLLER COMPONENT
$icon-FROM CONTROLLER COMPONENT
$label-FROM CONTROLLER COMPONENT
$placeholder-FROM CONTROLLER COMPONENT

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingDate.vue{ALREADY}

LEVEL4(4 components\form\group\text.blade.php)
{ALREADY}

LEVEL4(5 components\form\input\hidden.blade.php)

DATA 
$name-FROM PARENT
$id-FROM CONTROLLER COMPONENT
$valueFROM CONTROLLER COMPONENT
$placeholderFROM CONTROLLER COMPONENT
$requiredFROM CONTROLLER COMPONENT
$disabledFROM CONTROLLER COMPONENT
$readonlyFROM CONTROLLER COMPONENT
$attributesFROM CONTROLLER COMPONENT

LEVEL3(4 components\documents\form\items.blade.php)
DATA 
$hideEditItemColumns
$type-FROM PARENT
$hideItems-FROM CONTROLLER COMPONENT
$hideItemName-FROM CONTROLLER COMPONENT
$textItemName-FROM CONTROLLER COMPONENT
$hideItemDescription-FROM CONTROLLER COMPONENT
$textItemDescription-FROM CONTROLLER COMPONENT
$textItemQuantity-FROM CONTROLLER COMPONENT
$hideItemQuantity-FROM CONTROLLER COMPONENT
$textItemPrice-FROM CONTROLLER COMPONENT
$hideItemPrice-FROM CONTROLLER COMPONENT
$textItemAmount-FROM CONTROLLER COMPONENT
$isSalePrice-FROM CONTROLLER COMPONENT
$isPurchasePrice-FROM CONTROLLER COMPONENT
$searchCharLimit-FROM CONTROLLER COMPONENT

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\documents\form\item-columns.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\line-item.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\form\item-button.blade.php

LEVEL4(1 components\documents\form\item-columns.blade.php)

DATA 
$type-FROM PARENT

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingEditItemColumns.vue
LEVEL5(1 components\AkauntingEditItemColumns.vue)
SUBCOMPONENT{ALREADY}
import AkauntingModalAddNew from './AkauntingModalAddNew';

import Form from './../plugins/form';

PROPS 
placeholder
type
editColumn

DATA 
form,edit_column

DYNAMICCOMPONENT{ALREADY}
add-new-component

LEVEL4(2 components\documents\form\line-item.blade.php)

DATA 
$hideItems-FROM CONTROLLER COMPONENT
$hideItemName
$hideItemDescription
$hideItemQuantity
$event
$currency
$hideDiscount

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\input\money.blade.php

C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue

C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php


LEVEL5(1 components\form\input\money.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingMoney.vue{ALREADY}

DATA 
$name-FROM PARENT
$attributes-FROM $attributes
$formGroupClass-FROM PARENT
$required-FROM CONTROLLER COMPONENT
$readonly-FROM CONTROLLER COMPONENT
$disabled-FROM CONTROLLER COMPONENT
$icon-FROM CONTROLLER COMPONENT
$currency-FROM PARENT


LEVEL5(2 components\AkauntingSelect.vue)
{ALREADY}

LEVEL5(3 components\button\hover.blade.php)
{ALREADY}

LEVEL4(3 components\documents\form\item-button.blade.php)

DATA 
$type-FROM PARENT
$price-FROM CONTROLLER COMPONENT
$items-FROM CONTROLLER COMPONENT
$searchCharLimit-FROM PARENT
$event

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingItemButton.vue

LEVEL5(1 components\AkauntingItemButton.vue)
{ALREADY}

LEVEL3(5 components\documents\form\totals.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\input\money.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\text.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\select.blade.php

C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingCurrencyConversion.vue
{ALREADY}

DATA 
$currency
$document
$event

LEVEL4(1 components\form\group\select.blade.php)

DATA 
$formGroupClass-FROM PARENT
$required-FROM CONTROLLER COMPONENT
$readonly-FROM CONTROLLER COMPONENT
$disabled-FROM CONTROLLER COMPONENT
$name-FROM PARENT
$remote-FROM CONTROLLER COMPONENT
$attributes-From $attributes
$label-FROM CONTROLLER COMPONENT
$icon-FROM CONTROLLER COMPONENT
$event-From emitted event
$addNew-FROM CONTROLLER COMPONENT
$placeholder
$options-FROM PARENT
$searchText-FROM CONTROLLER COMPONENT
$selected-FROM PARENT
$multiple-FROM CONTROLLER COMPONENT
$forceDynamicOptionValue-FROM PARENT

SUBCOMPONENT {ALREADY}
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelectRemote.vue
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSelect.vue

LEVEL4(2 components\AkauntingCurrencyConversion.vue)
{ALREADY}

LEVEL3(6 components\documents\form\note.blade.php)

DATA 
$notes

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\group\textarea.blade.php

LEVEL4(1 components\form\group\textarea.blade.php)

DATA 
$formGroupClass-FROM PARENT
$required-FROM CONTROLLER COMPONENT
$readonly-FROM CONTROLLER COMPONENT
$disabled-FROM CONTROLLER COMPONENT
$attributes-FROM attributes
$label-FROM CONTROLLER COMPONENT
$name--FROM PARENT
$id-FROM CONTROLLER COMPONENT
$value-FROM PARENT
$placeholder -FROM CONTROLLER COMPONENT
$rows-INSIDE IT SELF
$custom_attributes

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\label.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\input\textarea.blade.php

C:\wamp64\www\akaunting\resources\views\components\form\error.blade.php{ALREADY}

LEVEL5(1 components\form\input\textarea.blade.php)

DATA 
$name-FROM PARENT
$id-FROM PARENT
$class-FROM IT SELF
$rows-FROM PARENT
$placeholder -FROM PARENT
$disabled-FROM PARENT
$required-FROM PARENT
$readonly-FROM PARENT
$attributes-FROM attributes
$value-FROM PARENT

LEVEL2(4 components\documents\form\recurring.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\section\index.blade.php {ALREADY}
C:\wamp64\www\akaunting\resources\views\components\form\section\head.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\recurring.blade.php

DATA 
$document-FROM PARENT
$type-FROM PARENT

LEVEL3(1 components\form\group\recurring.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingRecurring.vue{ALREADY}

DATA 
$customFrequenc-FROM PARENT
$event-FROM PARENT EVENT
$limit-FROM PARENT
$sendEmailShow -FROM CONTROLLER COMPONENT
$sendEmail-FROM CONTROLLER COMPONENT
$type-FROM PARENT
$limit-FROM PARENT
$startedValue-FROM PARENT
$frequencies-FROM PARENT
$limitDateValue-FROM PARENT
$limitCount-FROM PARENT

LEVEL2(5 components\documents\form\advanced.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\accordion\index.blade.php {ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\accordion\head.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\textarea.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\category.blade.php

C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\group\attachment.blade.php

DATA 
$footer-From Controller Component
$type-From parent
$classFooter-From Controller Component
$hideCategory-From Controller Component
$classCategory-From Controller Component
$typeCategory-From Controller Component
$categoryId-From Controller Component
$hideAttachment-From Controller Component
$classAttachment-From Controller Component

LEVEL3(1 components\form\group\category.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\group\select.blade.php{ALREADY}
DATA 
$remoteAction-FROM CONTROLLER COMPONENT
$path-FROM CONTROLLER COMPONENT
$attributes-FROM attributes
$name-FROM CONTROLLER COMPONENT
$categories-FROM CONTROLLER COMPONENT
$selected-FROM PARENT
$multiple-FROM CONTROLLER COMPONENT
$group-FROM CONTROLLER COMPONENT
$formGroupClass-FROM CONTROLLER COMPONENT
$required-FROM CONTROLLER COMPONENT
$readonly-FROM CONTROLLER COMPONENT
$disabled-FROM CONTROLLER COMPONENT

LEVEL3(2 components\form\group\attachment.blade.php)
DATA
$file_types-FROM CONTROLLER COMPONENT

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\group\file.blade.php{ALREADY}

LEVEL2(6 components\form\input\hidden.blade.php)
{ALREADY}

LEVEL2(7 components\documents\form\buttons.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\form\section\index.blade.php{ALREADY}

C:\wamp64\www\akaunting\resources\views\components\form\buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php

DATA 
$hideSendTo-FROM CONTROLLER COMPONENT
$cancelRoute-FROM CONTROLLER COMPONENT

LEVEL3(1 components\form\buttons.blade.php)

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php{ALREADY}

DATA 
$withoutCancel-FROM CONTROLLER COMPONENT
$cancel-FROM CONTROLLER COMPONENT
$cancelText-FROM CONTROLLER COMPONENT
$saveDisabled-FROM CONTROLLER COMPONENT
$saveLoading-FROM CONTROLLER COMPONENT

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\button\loading.blade.php

LEVEL4(1 components\button\loading.blade.php)

DATA 
$action-FROM PARENT
$slot -FROM PARENT SLOT

LEVEL3(2  components\button\index.blade.php)
DATA 
$class-FROM PARENT
$type-FROM PARENT
$slot-SLOT FROM PARENT

LEVEL1(3 components\documents\script.blade.php)

DATA 
$currencies-From CONTROLLER COMPONENT
$taxes-From CONTROLLER COMPONENT
$items-From CONTROLLER COMPONENT

FIND VALUE OF THESE FILES
type=invoice
alias=''
config('type.' . static::OBJECT_TYPE . '.' . $type . '.alias')=
config('type . document . invoice .alias')=''

folder=''
config('type.' . static::OBJECT_TYPE . '.' . $type . '.script.folder')=config('type. document .invoice.script.folder')=common

file=''
config('type.' . static::OBJECT_TYPE . '.' . $type . '.script.file')=config('type.document . invoice.script.file')=documents

$file-From CONTROLLER COMPONENT=documents
$folder-From CONTROLLER COMPONENT=common
$alias-From CONTROLLER COMPONENT=''


SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\script.blade.php

LEVEL2(1 components\script.blade.php)

JS FILE
C:\wamp64\www\akaunting\resources\assets\js\views\common\documents.js

DATA 
FIND VALUE OF SOURCE 
$source-From CONTROLLER COMPONENT=common/documents.min.js

LEVEL3(1 js\views\common\documents.js)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\plugins\dashboard-plugin.js
import { addDays, format } from 'date-fns';
C:\wamp64\www\akaunting\resources\assets\js\plugins\functions.js

C:\wamp64\www\akaunting\resources\assets\js\mixins\global.js
{ALREADY}

C:\wamp64\www\akaunting\resources\assets\js\plugins\form.js
{ALREADY}
C:\wamp64\www\akaunting\resources\assets\js\plugins\bulk-action.js
import draggable from 'vuedraggable';

DATA 
form,bulk_action,totals,transaction,edit,colspan,discount, tax,discounts, tax_id,items,selected_items,taxes, page_loaded,currencies,min_due_date,currency_symbol,dropdown_visible,dynamic_taxes,show_discount,show_discount_text,delete_discount,regex_condition,email_template,send_to


LEVEL4(1 js\plugins\dashboard-plugin.js)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\polyfills.js
// Notifications plugin. Used on Notifications page
C:\wamp64\www\akaunting\resources\assets\js\components\NotificationPlugin\Notifications.vue
// Validation plugin used to validate forms
import VeeValidate from 'vee-validate';{ALREADY}
// A plugin file where you could register global components used across the app
// A plugin file where you could register global directives
C:\wamp64\www\akaunting\resources\assets\js\plugins\globalComponents.js

// element ui language configuration
import lang from 'element-ui/lib/locale/lang/en';
import locale from 'element-ui/lib/locale';

LEVEL5(1 resources\assets\js\polyfills.js)
Nothing  JUST polyfills

LEVEL5(2 js\components\NotificationPlugin\Notifications.vue)
{ALREADY}

LEVEL5(3 js\plugins\globalComponents.js)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\components\Inputs\BaseInput.vue {ALREADY}
C:\wamp64\www\akaunting\resources\assets\js\components\Cards\Card.vue
C:\wamp64\www\akaunting\resources\assets\js\components\Modal.vue
C:\wamp64\www\akaunting\resources\assets\js\components\Cards\StatsCard.vue{specify card type primary,warning ...}
C:\wamp64\www\akaunting\resources\assets\js\components\BaseButton.vue
C:\wamp64\www\akaunting\resources\assets\js\components\Badge.vue
C:\wamp64\www\akaunting\resources\assets\js\components\BaseAlert.vue
import { Input, Tooltip, Popover } from 'element-ui';

LEVEL6(1 js\components\Cards\Card.vue)
PROPS 
type,gradient,hover,shadow,shadowSize,noBody,bodyClasses,headerClasses,footerClasses

LEVEL6(2 js\components\Modal.vue)
SUBCOMPONENT
import { SlideYUpTransition } from "vue2-transitions";

PROPS 
show,showClose,type,modalClasses,size,modalContentClasses,gradient, headerClasses,bodyClasses,footerClasses,animationDuration,

LEVEL6(3 js\components\Cards\StatsCard.vue)
PROPS 
type,icon,title,subTitle,iconClasses

LEVEL6(4 js\components\BaseButton.vue)
PROPS 
tag,round,icon,block,loading,wide,disabled,type,nativeType,size,outline,link

LEVEL6(5 js\components\Badge.vue)
PROPS 
tag,rounded,circle,icon,type,size

LEVEL6(6 js\components\BaseAlert.vue)
PROPS 
type,dismissible,icon

DATA 
visible

LEVEL4(2 js\plugins\functions.js)
IT JUST NORMAL FUNCTION

LEVEL4(3 js\plugins\bulk-action.js)
IT JUST JS FUNCTIONS FOR BULK ACTIONS

MISCELLENOUS
CalculateTotal

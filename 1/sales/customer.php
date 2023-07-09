C:\wamp64\www\akaunting\resources\views\sales\invoices\show.blade.php

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php
C:\wamp64\www\akaunting\resources\views\components\contacts\index\buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\contacts\index\more-buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\contacts\index\content.blade.php

C:\wamp64\www\akaunting\resources\views\components\contacts\script.blade.php

Slots
title,favorite,buttons,moreButtons,content

DATA 
$customers
LEVEL1(1 C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php)
SUBCOMPONENT
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\head.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\menu.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\header.blade.php
\wamp64\www\akaunting-1\resources\views\components\menu\favorite.blade.php
\wamp64\www\akaunting-1\resources\views\components\layouts\admin\content.blade.php
C:\wamp64\www\akaunting\resources\views\components\layouts\admin\notifications.blade.php
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
C:\wamp64\www\akaunting\resources\views\components\dropdown\index.blade.php{ALREADY}
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
{IN ROUTE SERVICE PROVIDER CALLED ROUTE.php}
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
<!-- created from Controller Component by menu()->create('settings', function ($menu) { and it trigger Events\Menu\SettingsCreated.php -->
Data 
$keyword-From Controller Component
$settings-From Controller Component

LEVEL4(Event)(1 Menu\SettingsCreated.php)
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInSettings.php
DATA 
$menu-from parent

LEVEL5(1 Menu\ShowInSettings.php)
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
LEVEL5 (listener)(1 Menu\ShowInNeww.php)
DATA 
$event-From Parent 


LEVEL3(7 components\loading\menu.blade.php)
No just html

LEVEL3(8 livewire\menu\profile.blade.php)
DATA 
menu('profile')
$active_menu-FROM CONTROLLER COMPONENT

GlobalData

var is_profile_menu = {{ $active_menu }} for javascript

EVENT 
menu('profile')-Events\Menu\ProfileCreated.php

LEVEL4(1 Menu\ProfileCreated.php)
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInProfile.php
DATA 
$menu-from parent
LEVEL5(1 Menu\ShowInProfile.php)
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

LEVEL4(1 Events\Menu\AdminCreated.php )
LISTENER 
C:\wamp64\www\akaunting\app\Listeners\Menu\ShowInAdmin.php

DATA 
$menu-From Constructor

LEVEL5(1 app\Listeners\Menu\ShowInAdmin.php)
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
LEVEL2(7 components\layouts\admin\notifications.blade.php)
DATA 
$notifications-FROM CONTROLLER COMPONENT
$notify-FROM CONTROLLER COMPONENT

LEVEL2(8 layouts\admin\footer.blade.php)
Nothing just html.
LEVEL2(9 layouts\admin\scripts.blade.php)
GlobalData: 
window.livewire_app_url = {{ company_id() }};

javascript Variable:
toggleButton, menus,navbarMenu,mainContent,detailsEL, sectionContent
sideBar,menuBackground,menuClose,notification_count ,menuClose

---------End Of Admin LayOut------------------------------------


LEVEL1(2 components\contacts\index\buttons.blade.php)
DATA 
$createRoute-FROM CONTROLLER
$textPage-FROM CONTROLLER
$type-FROM PARENT=customer
$checkPermissionCreate-FROM CONTROLLER
$permissionCreate-FROM CONTROLLER
$hideCreate-FROM CONTROLLER

calculate $createRoute
dependents
$type=customer
$document="$customers"
$createRoute=''
$parameter=1
$this->createRoute = $this->getcreateRoute($type, $createRoute)=$this->getcreateRoute(customer, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(customer, 'create', 1, true);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=customer
$config_key=create

OPTION1
$route = config('type.' . static::OBJECT_TYPE . customer . '.route.' . $config_key)=config('type . document .customer . route . create)=undefined

OPTION2
dependents
$alias = config('type.document.customer .alias')='';
$prefix = config('type.document.customer.route.prefix')=customers;

$route .= '' . '.';
$route .= 'modals.';
$route .= customers. '.';
$route .= create;
if ($modal=true)
route(modals.customers.create, 1);

OPTION3
$route = Str::plural(customer, 2) . '.' . create;
route(customers.create,1);

OPTION4
$route=''

FINAL
$route=modals.customers.create
or
$route=customers.create this it final


SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php

LEVEL2(1 components\link\index.blade.php)
DATA 
$class-From Controller Component
$attributes-FROM attributes
$slot-From slot 


LEVEL1(3 components\contacts\index\more-buttons.blade.php)

DATA 
$checkPermissionCreate
$permissionCreate
$hideImport
$importRouteParameters
calculate $importRouteParameters
dependents
$type=customer
$importRouteParameters=[]
static::OBJECT_TYPE=contact
$this->getImportRouteParameters($type, $importRouteParameters)=$this->getImportRouteParameters(invoice, [])

protected function getImportRouteParameters(invoice, [])
    {
        if (! empty($importRouteParameters)) {
            return $importRouteParameters;
        }

        $alias = config('type.contact  . customer . '.alias')='';
        $group = config('type.contact . customer . '.group')='sales';
        $prefix = config('type.contact  . customer . '.route.prefix')='customers';

        if (empty($group) && ! empty($alias)){
            $group = $alias;
        } else if (empty($group) && empty($alias)) {
            $group = 'sales';
        }

        $importRouteParameters = [
            'group' => $group,
            'type' => $prefix,
        ];

        return $importRouteParameters=[sales,customers];
    }


$type
$exportRoute
calculate $exportRoute
dependents
$type=customer
$document=$invoice

$this->exportRoute = $this->getexportRoute($type, $importRoute)=$this->getexportRoute(customer, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(customer, 'export', 1, false);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=customer
$config_key=export

OPTION1
$route = config('type.' . static::OBJECT_TYPE . customer . '.route.' . $config_key)=config('type . contact .customer . route . create)=undefined

OPTION2
dependents
$alias = config('type.contact.customer .alias')='';
$prefix = config('type.contact.customer.route.prefix')=customers;

$route .= '' . '.';
$route .= 'modals.';
$route .= customers. '.';
$route .= export;
if ($modal=true)
route(modals.customers.export, 1);

OPTION3
$route = Str::plural(customer, 2) . '.' . export;
route(customers.export,1);

OPTION4
$route=''

FINAL
$route=modals.customers.export
or
$route=customers.export this it final

$importRoute
calculate $importRoute
dependents
$type=customer
$document=$invoice

$parameter=1
$this->createRoute = $this->getimportRoute($importRoute)=$this->getcreateRoute('')=import.create;

SubComponets
C:\wamp64\www\akaunting\resources\views\common\import\create.blade.php

LEVEL2(1 common\import\create.blade.php)
Data
$form_params['url']=company_id()/sales/customers/import
$title_type
$sample_file
$route
$path

SUBCOMPONENTS
C:\wamp64\www\akaunting\resources\views\components\form\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\group\file.blade.php

C:\wamp64\www\akaunting\resources\views\components\script.blade.php

LEVEL3(1 components\form\index.blade.php)

DATA 
$action-FROM CONTTROLLER COMPONENT
$class-FROM CONTTROLLER COMPONENT
$role-FROM CONTTROLLER COMPONENT
$novalidate-FROM CONTTROLLER COMPONENT
$enctype-FROM CONTTROLLER COMPONENT
$acceptCharset-FROM CONTTROLLER COMPONENT
$submit-FROM CONTTROLLER COMPONENT
$attributes-FROM ATTRIBUTES
$method-FROM CONTTROLLER COMPONENT

LEVEL3(2 components\form\group\file.blade.php)
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
DATA 
$sharp-from Controller component
$filled-from Controller component
$class-from Controller component
$simpleIcons-from Controller component
$rounded-from Controller component
$custom-from Controller component
$attributes-From Prop
$icon-From Parent Component

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

LEVEL3(3 components\script.blade.php)

DATA 
$SOURCE 

CALCULATE  $SOURCE
dependents
$folder=common
$file=imports
core='core'
$source=''
protected function getSource(core, common, imports)
    {
        $path = 'public/js/';
        $version = version('short');

        if ($alias != 'core') {
            try {
                $module = module($alias);

                if ($module) {
                    $path = 'modules/' . $module->getStudlyName() . '/Resources/assets/js/';
                    $version = module_version($alias);
                }
            } catch (\Exception $e) {

            }
        }

        if (! empty(common)) {
            $path .= common . '/';
        }

        $path .= imports . '.min.js?v=' . $version;

        return $path=C:\wamp64\www\akaunting\resources\assets\js\views\common\imports.js;
    }

    js\views\common\imports.js
    return form: new Form('import')



   LEVEL1(4 components\contacts\index\content.blade.php)
   SUBCOMPONENT
   C:\wamp64\www\akaunting\resources\views\components\index\summary.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\container.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\search.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\index.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\tr.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\tbody.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\actions-mobile.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\actions.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\bulkaction\single.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\currency.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\country.blade.php
   C:\wamp64\www\akaunting\resources\views\components\index\disable.blade.php
   C:\wamp64\www\akaunting\resources\views\components\contacts\index\content.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\td.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\th.blade.php
   C:\wamp64\www\akaunting\resources\views\components\table\thead.blade.php
   C:\wamp64\www\akaunting\resources\views\components\pagination.blade.php
   DATA 
   $summaryItems
   $hideEmptyPage
   $contacts
   $hideSummary
   $hideSearchString
   $searchStringModel
   $bulkActionClass
   $searchRoute
   $hideBulkAction
   $classBulkAction
   $hideName
   $hideTaxNumber
   $classNameAndTaxNumber
   $textName
   $textTaxNumber
   $classEmailAndPhone
   $hidePhone
   $hideEmail
   $textEmail
   $textPhone
   $hideCountry
   $classCountryAndCurrencyCode
   $textCountry
   $hideCurrencyCode
   $textCurrencyCode
   $hideOverdue
   $hideOpen
   $textOpen
   $textOverdue

LEVEL2(1 components\index\summary.blade.php)
DATA 
$items-FROM PARENT
$first-FROM SLOTS
$second-FROM SLOTS
$third-FROM SLOTS

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php

LEVEL3(1 components\tooltip.blade.php)
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

LEVEL3(2 components\link\index.blade.php)
DATA 
$class-From Controller Component
$attributes-FROM attributes

LEVEL2(2 components\index\container.blade.php)
DATA 
$attributes- FROM ATTRIBUTES
$slot-FROM SLOT

LEVEL2(3 components\index\search.blade.php)
$searchString-FROM PARENT
$bulkAction-FROM PARENT
$action -FROM CONTROLLER COMPONENT

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\form\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\search-string.blade.php
C:\wamp64\www\akaunting\resources\views\components\index\bulkaction\index.blade.php

LEVEL3(1 components\form\index.blade.php)
ALREADY

LEVEL3(2 components\search-string.blade.php)
DATA 
$filters-FROM CONTROLLER COMPONENT
$filtered-FROM CONTROLLER COMPONENT
$attributes-FROM ATTRIBUTE

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingSearch.vue

LEVEL4(1 components\AkauntingSearch.vue)
PROPS
placeholder
selectPlaceholder
enterPlaceholder
searchText
operatorIsText
operatorIsNotText
noDataText
noMatchingDataText
value
filters
defaultFiltered
dateConfig
model
filter_list
search
filtered
filter_index
filter_last_step
visible
equal
not_equal
range
option_values
selected_options
selected_operator
selected_values
values
current_value
show_date
show_button
show_close_icon
show_icon
not_equal_image
input_focus
defaultPlaceholder
dynamicPlaceholder




















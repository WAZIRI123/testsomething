C:\wamp64\www\akaunting\resources\views\sales\customers\index.blade.php

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
$menu-from Notification construct

LEVEL5(1 Menu\ShowInSettings.php)
DATA 
$event-From EVENT 

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
$menu-from Notification construct
LEVEL5 (listener)(1 Menu\ShowInNeww.php)
DATA 
$event-From EVENT  


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
$menu-from Notification construct
LEVEL5(1 Menu\ShowInProfile.php)
DATA 
$event-From EVENT  

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
$event-From Constructor

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
$form_params['url']=company_id()/sales/customers/import =>Sales\Customers@import
$title_type
$sample_file
$route
$path=company_id()/sales/customers

SUBCOMPONENTS
C:\wamp64\www\akaunting\resources\views\components\form\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\form\group\file.blade.php

C:\wamp64\www\akaunting\resources\views\components\script.blade.php

LEVEL3(1 components\form\index.blade.php)

DATA 
$action-FROM 
Calculate $action
dependents 
$action=""
$route=false
$url=false

FINAL $action =what given in constructor

CONTTROLLER COMPONENT
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
   C:\wamp64\www\akaunting\resources\views\components\empty-page.blade.php
   DATA 
   $summaryItems
   $hideEmptyPage
   $contacts
   $hideSummary
   $hideSearchString
   $searchStringModel
   
   $bulkActionClass
   CALCULATE $bulkActionClass
   $bulkActionClass=''
   $type=customer
   $file_name = '';
   static::OBJECT_TYPE=contact

   $this->bulkActionClass = getBulkActionClass($type, $bulkActionClass)=$this->getBulkActionClass(customer, '');

   $this->bulkActionClass = getBulkActionClass($type, $bulkActionClass)=$this->getBulkActionClass(customer, '');
   =config('type.' . static::OBJECT_TYPE . '.' . $type . '.bulk_actions')= config('type.' contact'.' . customer . '.bulk_actions')

   OR

$group = config('type.' . static::OBJECT_TYPE . '.' . $type . '.group')=config('type.' . contact . '.' . customer . '.group')
=sales
$file_name .=Str::studly($group) . '\\'

$prefix = config('type.' . contact . '.' . customer. '.route.prefix')=customers
$file_name .= Str::studly($prefix);

$alias = config('type.' . contact . '.' . customer . '.alias')=''
$module = module($alias)

if (! $module instanceof Module) {
                $b = new \stdClass();
                $b->actions = [];

                event(new BulkActionsAdding($b));

                return $b->actions;
            }
                 FINAL

            $bulkActionClass = 'Modules\\' . $module->getStudlyName() . '\BulkActions\\' . $file_name;

            OR
            $bulkActionClass = 'App\BulkActions\\' .  $file_name=App\BulkActions\\sales\customers

   $searchStringModel
   CALCULATE   $searchStringModel
   $searchStringModel='',
static::OBJECT_TYPE=contact
   $this->searchStringModel = $this->getSearchStringModel("customer", $searchStringModel);

   searchStringModel=getSearchStringModel($type, $searchStringModel)=getSearchStringModel("customer", '')= config('type.' . contact . '.' . customer. '.search_string_model')

   $group = config('type.' . contact . '.' . customer . '.group')

   $prefix = Str::studly(Str::singular(config('type.' . contact. '.' . customer . '.route.prefix')));

   $group = Str::studly(Str::singular($group)) . '\\';
   $alias = config('type.' . contact . '.' . customer . '.alias')
FINAL 
   $searchStringModel = 'Modules\\' . Str::studly($alias) .'\Models\\' . $group . $prefix;

   OR
   $searchStringModel = 'App\Models\\' . $group . $prefix;


   CALCULATE  $searchRoute
   Dependents
   type="customer"
   $searchRoute=

   $this->searchRoute = $this->getIndexRoute($type, $searchRoute)=$this->getIndexRoute(customer,'');

   $this->searchRoute = $this->getRouteFromConfig($type, 'index')$this->getRouteFromConfig(customer, 'index');

   getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=getRouteFromConfig(customer, index, $config_parameters = [], $modal = false){
   $alias= config('type.contact . customer . '.alias')=''

   $prefix= config('type.contact . customer . 'route.prefix')=customers
   }

   Final
   $this->searchRoute=customers/index
   


   $hideBulkAction
   $classBulkAction
   calculate $classBulkAction
   type="customer"

 $this->classBulkAction = $this->getClassBulkAction($type, $classBulkAction)=$this->getClassBulkAction('customer', '');

 $class=public function getClassFromConfig($type, $config_key)=$this->getClassFromConfig('customer', 'bulk_action')
 $class_key ='type.' . $type . '.class.' . $config_key='type.' . customer. '.class.' . bulk_action=
 $classBulkAction=config($class_key, '')='';

 SO IT TAKE DEFAULT
 $classBulkAction=ltr:pr-6 rtl:pl-6 hidden sm:table-cell

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
Calculate $action
dependents 
$action=""
$route=false
$url=false

FINAL $action =what given in constructor=customers.index

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
\\\\\selectPlaceholder
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


LEVEL3(3 components\index\bulkaction\index.blade.php)
DATA 
$text-FROM CONTOLLER COMPONENT
$actions-FROM PARENT
$path-FROM CONTOLLER COMPONENT

Calculate $path
dependents
$path = [
        'group' => 'sales',
        'type' => 'customers',
    ];
$bulk_action=App\BulkActions\\sales\customers

route('bulk-actions.action', $bulk_action->path)
or
 url('common/bulk-actions/' . $bulk_action->path)

 OR 
 $bulk_action = new \stdClass();
            $bulk_action->text = '';
            $bulk_action->path = '';
            $bulk_action->actions = [];
            $bulk_action->icons = [];

            event(new BulkActionsAdding($bulk_action));

            if (is_array($bulk_action->path)) {
                $this->path = route('bulk-actions.action', $bulk_action->path);
            } else {
                $this->path = url('common/bulk-actions/' . $bulk_action->path);
            }
      THIS IS IMPORTANT IN WHICH ACTION ARE EXECUTED       $result = $bulk_actions->{$handle}($request);
  

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php{ALREADY}
C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php
C:\wamp64\www\akaunting\resources\assets\js\components\AkauntingModal.vue

LEVEL4(2  components\button\index.blade.php)
DATA 
$class-FROM PARENT
$type-FROM PARENT
$slot-SLOT FROM PARENT
LEVEL4(3 js\components\AkauntingModal.vue)
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

LEVEL5(1 Acomponents\AkauntingRadioGroup.vue)
PROPS
name,text,value,enable,disable,col
DATA
focused,real_value

LEVEL5(2 components\AkauntingSelect.vue)
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

LEVEL6(1 components\AkauntingModalAddNew.vue)
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

LEVEL6(2 components\AkauntingModal.vue)
Already

LEVEL6(3 components\AkauntingMoney.vue)
PROPS
title,placeholder,value,moneyClass, group_class, col, error,required,readonly, disabled,isDynamic,dynamicCurrency, currency,masked,rowInput, notRequired

SUBCOMPONENT
import {Money} from 'v-money';

Global Component
money

LEVEL7(1 money)
From  v-money package


LEVEL6(4 components\AkauntingRadioGroup.vue)
Already
LEVEL6(5 components\AkauntingDate.vue)

SUBCOMPONENT
import flatPicker from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";

PROPS
title,dataName,placeholder,readonly,notRequired,period,disabled,formClasses,formError,name,value,model,dateConfig,icon,locale,hiddenYear,dataValueMin

LEVEL7(1 flatPicker)
From  flatpickr library

LEVEL6(6 components\AkauntingSelect.vue)
Already

LEVEL6(7 plugins\form.js)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\assets\js\plugins\error.js

Data 
form,name,data

LEVEL7(1 js\plugins\error.js)
DATA 
errors

LEVEL6(8 components\Inputs\BaseInput.vue)
PROPS 
required,group,valid,alternative,label,error,footerError,successMessage,formClasses,labelClasses,inputClasses,inputGroupClasses,value,type, appendIcon,prependIcon,notRequired

DATA 
focused

LEVEL6(9 components\AkauntingSelect.vue @add-new-component)

SUBCOMPONENT {ALREADY}
AkauntingModalAddNew,AkauntingRadioGroup,AkauntingSelect,AkauntingModal,AkauntingMoney,AkauntingDate,AkauntingRecurring,[ColorPicker.name]: ColorPicker,

DATA 
add_new

LEVEL5(3 components\AkauntingDate.vue)
ALREADY

LEVEL5(4 components\AkauntingRecurring.vue)
PROPS
startText, dateRangeText,middleText,endText,frequencies,frequencyText,frequencyEveryText,frequencyValue,invertalError,customFrequencies,customFrequencyValue,customFrequencyError,startedValue,startedError,limits,limitValue,limitCountValue,limitCountError,limitDateValue,limitDateError,dateFormat,sendEmailShow,sendEmailText,sendEmailYesText,sendEmailNoText,sendEmailValue

LEVEL5(5 components\AkauntingMoney.vue)
ALREADY

DATA 
frequency,interval,customFrequency,started_at,limit,limitCount,limitDate,formatDate,sendEmail

LEVEL2(4 components\table\index.blade.php)
DATA 
$slot-From SLOT
$attributes

It just table anchor tags(<table></table>)

LEVEL2(5 components\table\tr.blade.php)

DATA 
$slot-From SLOT
$attributes
$class

IT JUST (<tr></tr>)


LEVEL2(6 components\table\tbody.blade.php)

DATA 
$slot-From SLOT
$attributes
$class

IT JUST (<tbody></tbody>)


LEVEL2(7 components\table\actions.blade.php)

DATA 
$slot-From SLOT
$attributes
$action

IT JUST (buttons>)

LEVEL2(8 components\index\bulkaction\single.blade.php)

DATA 
$attributes
$id

IT JUST (button>)

LEVEL2(9 components\index\currency.blade.php)

DATA 
{{ $currency }}-FROM PARENT

LEVEL2(10 components\index\country.blade.php)

DATA 
{{ $country }}-FROM PARENT

LEVEL2(11 components\index\disable.blade.php)

DATA 
{{ $icon }}-FROM PARENT
$disableText
$id
$position
$iconType

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php
{ALready}

LEVEL2(12 components\table\td.blade.php)

DATA 
{{ $class }}-FROM PARENT
$disableText
$first
$second
$slot

JUST (<td></td>)

LEVEL2(13 components\table\th.blade.php)

DATA 
{{ $class }}-FROM PARENT
$disableText
$first
$second
$slot

JUST (<th></th>)

LEVEL2(14 components\table\thead.blade.php)

DATA 
$attributes
$slot

JUST (<thead></thead>)

LEVEL2(15 components\pagination.blade.php)

DATA 
$items
$slot

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\vendor\nwidart\menus\item\dropdown.blade.php

C:\wamp64\www\akaunting\resources\views\components\dropdown\link.blade.php{ALREADY}

LEVEL3(1 nwidart\menus\item\dropdown.blade.php)
 SUBCOMPONENT
 C:\wamp64\www\akaunting\resources\views\vendor\nwidart\menus\child\item.blade.php

DATA 
$item

LEVEL4(1 nwidart\menus\child\item.blade.php)
DATA 
$item

LEVEL2(16 components\empty-page.blade.php)

DATA 
$title
$description
$buttons
$checkPermissionCreate
$suggestions
$image

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\title.blade.php
C:\wamp64\www\akaunting\resources\views\components\dropdown\link.blade.php{ALREADY}

LEVEL3(1 components\title.blade.php)
DATA 
$slot

LEVEL1(5 components\contacts\script.blade.php)

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\contacts\script.blade.php

LEVEL1(2 components\contacts\script.blade.php)
GLOBAL JS VARIABLE
contact_default_currency
contact_currencies
can_login_errors

DATA 
$currency_code
$currencies
$alias
CALCULATE $alias
Dependents 
$type=customer
$alias=''
OBJECT_TYPE='contact'

$alias=$this->getAlias($type, $alias)=$this->getAlias(customer, '')

$alias = config('type.' . static::OBJECT_TYPE . '.' . $type . '.alias')
=config('type.contact.customer.alias')

FINAL $alias=''

$folder
CALCULATE $folder
$folder=''

$folder=$this->getScriptFolder($type, $folder)=
$this->getScriptFolder(customer, '')

$folder = config('type.contact.customer.script.folder')

FINAL $folder=common

$file
CALCULATE $file
$file=''

$file=$this->getScriptFile($type, $file)=$this->getScriptFile(customer, ;)

$file = config('type.'contact. customer . '.script.file')

FINAL $file=contacts

so FINAL =common/contacts.js

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\script.blade.php

LEVEL2(1 components\script.blade.php)

$SOURCE=public/js/common/contacts.js




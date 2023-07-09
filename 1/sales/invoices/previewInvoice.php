C:\wamp64\www\akaunting\resources\views\sales\invoices\show.blade.php

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php
C:\wamp64\www\akaunting\resources\views\components\show\status.blade.php

C:\wamp64\www\akaunting\resources\views\compzonents\documents\show\buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\more-buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\content.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\script.blade.php

Slots
title,status,buttons,moreButtons,content

DATA 
$invoice
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

LEVEL2(7 layouts\admin\footer.blade.php)
Nothing just html.
LEVEL2(8 layouts\admin\scripts.blade.php)
GlobalData: 
window.livewire_app_url = {{ company_id() }};

javascript Variable:
toggleButton, menus,navbarMenu,mainContent,detailsEL, sectionContent
sideBar,menuBackground,menuClose,notification_count ,menuClose

LEVEL2(9 components\layouts\admin\notifications.blade.php)
DATA 
$notifications-FROM CONTROLLER COMPONENT
$notify-FROM CONTROLLER COMPONENT

LEVEL1(2 components\show\status.blade.php)
DATA 
$textStatus-From Controller Component $backgroundColor-From Controller Component $textColor-From Controller Component 

LEVEL1(3 components\documents\show\buttons.blade.php)

DATA 
$hideCreate-From Controller Component
$textPage-From Controller Component
$hideButtonStatuses-From Controller Component
$permissionUpdate-From Controller Component
$editRoute-From Controller Component
$createRoute-From Controller Component
$document-From Parent

calculation of $editRoute & $createRoute

dependents
$type=invoice
$document="$invoice"
$editRoute=''
$parameter=1
$this->editRoute = $this->geteditRoute($type, $editRoute)=$this->geteditRoute(invoice, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'edit', 1, true);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=edit

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . edit)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= edit;
if ($modal=true)
route(modals.invoices.edit, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . edit;
route(invoices.edit,1);

OPTION4
$route=''

FINAL
$route=modals.invoices.edit
or
$route=invoices.edit this it final


Calculate   $createRoute
dependents
$type=invoice
$document="$invoice"
$createRoute=''
$parameter=1
$this->createRoute = $this->getcreateRoute($type, $createRoute)=$this->getcreateRoute(invoice, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'create', 1, true);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=create

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . create)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= create;
if ($modal=true)
route(modals.invoices.create, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . create;
route(invoices.create,1);

OPTION4
$route=''

FINAL
$route=modals.invoices.create
or
$route=invoices.create this it final


SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php

LEVEL2(1 components\link\index.blade.php)
DATA 
$class-From Controller Component
$attributes-FROM attributes

LEVEL1(4 C:\wamp64\www\akaunting\resources\views\components\documents\show\more-buttons.blade.php)

DATA 
$hideMoreActions-From Controller Component
$document-From Parent
$permissionCreate-From Controller Component
$duplicateRoute-From Controller Component
$printRoute-From Controller Component=invoices.print
NB IT PRINT BECAUSE OF window.print() IN C:\wamp64\www\akaunting\resources\views\components\layouts\print.blade.php

$pdfRoute-From Controller Component=invoices.pdf
Downloaded File Name
public function getDocumentFileName(Document $document, string $separator = '-', string $extension = 'pdf'): string
    {
        return $this->getSafeDocumentNumber($document, $separator) . $separator . time() . '.' . $extension;
    }

    public function getSafeDocumentNumber(Document $document, string $separator = '-'): string
    {
        return Str::slug($document->document_number, $separator, language()->getShortCode());
    }
$shareRoute-From Controller Component
$hideShare-From Controller Component
$hideDivider2-From Controller Component
$hideButtonStatuses-From Controller Component
$hideEmail-From Controller Component
$textEmail-From Controller Component
$hideDivider3-From Controller Component
$hideDivider4-From Controller Component
$permissionDelete-From Controller Component
$customizeRoute-From Controller Component
CALCULATE CUSTOMIZED ROUTE
$route = '';
$type=invoice
static::OBJECT_TYPE=document 

$alias = config('type.' . static::OBJECT_TYPE . '.' . $type . '.alias')=config('type.document.invoice.alias')='';

if (!empty($alias)) {
            $route .= $alias . '.';
        }

$route .= 'settings.invoice.edit';

calculation of script folder path for customize
<x-script folder="settings" file="settings" />
$alias=core 

$this->source = $this->getSource(core , settings, settings);
protected function getSource($alias, $folder, $file)
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

        if (! empty($folder)) {
            $path .=  . '/';
        }

        $path .= $file . '.min.js?v=' . $version;

        return $path=resources\assets\js\views\settings\settings.js ?HOW , IS A PROBLEM;
    }

$checkReconciled-From Controller Component
$deleteRoute-From Controller Component
$textDeleteModal-From Controller Component
$endRoute-From Controller Component
$cancelledRoute-From Controller Component
$permissionCustomize-From Controller Component
$duplicateRoute=invoices.duplicate
SLOT 
trigger

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\dropdown\index.blade.php
C:\wamp64\www\akaunting\resources\views\components\dropdown\link.blade.php

C:\wamp64\www\akaunting\resources\views\components\dropdown\divider.blade.php

C:\wamp64\www\akaunting\resources\views\components\dropdown\button.blade.php
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php{alreay}

LEVEL2(1 components\dropdown\index.blade.php){No Controller}
DATA 
$trigger -FROM SLOT
$id-from parent
$attributes-from parent
$slot-FROM SLOT

LEVEL2(2 components\dropdown\link.blade.php)
Slots
$slot
Data
$attributes-From parent
$href-From parent

LEVEL2(3 components\dropdown\divider.blade.php)
Nothing it just Html

LEVEL2(4 components\dropdown\button.blade.php)
DATA 
$slot-FROM SLOT

LEVEL2(5  components\tooltip.blade.php)
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

LEVEL1(4 components\documents\show\content.blade.php)
DATA 
$hideRecurringMessage-From Controller Component
$document-From Parent
$textRecurringType-From Controller Component
$recurring_message-From Controller Component
$hideStatusMessage-From Controller Component
$textStatusMessage-From Controller Component
$type-From Controller Component
$hideReceive-From Controller Component
$hideGetPaid-From Controller Component
$hideRestore-From Controller Component
$hideSchedule-From Controller Component
$hideMakePayment-From Controller Component
$hideAttachment-From Controller Component
$attachment-From Controller Component
$emailRoute-From Controller Component

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\documents\show\message.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\create.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\send.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\receive.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\get-paid.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\make-payment.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\restore.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\schedule.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\children.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\attachment.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\show\template.blade.php

C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php

LEVEL2(0 FORGETTEN components\documents\show\send.blade.php)
DATA 
$document
$sent_date
$description
$emailRoute
$textEmail
$hideMarkSent
$permissionUpdate
$textMarkSent
$markSentRoute
$hideShare
$shareRoute
$accordionActive

Calculate  $emailRoute
dependents
$type=invoice
$document="$invoice"
$emailRoute=''
$parameter=1
$this->emailRoute = $this->getEmailRoute($type, $emailRoute)=$this->getEmailRoute(invoice, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'emails.create', 1, true);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=emails.create

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . emails.create)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= emails.create;
if ($modal=true)
route(modals.invoices.emails.create, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . emails.create;
route(invoices.emails.create,1);

OPTION4
$route=''

FINAL
$route=modals.invoices.emails.create
or
$route=invoices.emails.create

IMPORTANT FLOW FOR NOTIFICATION 
modals.invoices.emails.create > Controllers\Modals\InvoiceEmails.php @create > App\Notifications\Sale\Invoice 
{set email who to send email to by $notifiable->email}
{set new instance of MailMessage and attach pdf and attachments}

{set and initiate necessary requirements for setting array form of email }

{set tags placeholders and their replcements using  getTags() and getTagsReplacement() }
> Controllers\Modals\InvoiceEmails.php @store > App\Jobs\Document\SendDocumentAsCustomMail
{where actual message will be sent using $document->contact->notify(new $notification($document, $this`->template_alias, true, $custom_mail, $attachments));}

IMPORTANT NOTES ON AkauntingModalAddNew.vue
this.message=html of modal
form_id = document.getElementById('modal-add-new-form-' + form_prefix).children[0].id{FORM ID}

this.form = this.$children[0].$children[0].form{CHILD COMPONENT FORM DATA };

HOW THE EMAIL IS SENT WHEN USER CLICK THAT SEND BTN IN MODAL in  GLOBAL JS 
1. akaunting-modal-add-new emits cancel and submit event PASSING this.form as Parameter on respective btn clicked

2.this.component  listen to them and call onSubmit and onCancel as result 
3.then onSubmit emit submit and pass event as parament , and then it call submit(){FROM FORM PLUGIN} on event, while onCancel is close modal

GENERAL NOTICES 
ACTION OF FORM ABOVE OBTAINED FROM FORM CLASS CONTROLLER

Calculate  $markSentRoute
dependents
$document="$invoice"
$type=invoice
$markSentRoute=''
$parameter = 1;


$this->markSentRoute = $this->getMarkSentRoute($type, $markSentRoute)=$this->getMarkSentRoute(invoice, '')

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'sent', 1);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=sent

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . sent)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= sent;
if ($modal=true)
route(modals.invoices.sent, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . sent;
route(invoices.sent,1);

OPTION4
$route=''

FINAL
$route=modals.invoices.sent
or
$route=invoices.sent

IMPORTANT FLOW FOR markSent
'App\Events\Document\DocumentMarkedSent' => [
            'App\Listeners\Document\MarkDocumentSent',
        ] then dispatch{App\Jobs\Document\CreateDocumentHistory}


Calculate  $shareRoute
dependents
$type=invoice
$document="$invoice"
$shareRoute=''
$parameter=1
$this->emailRoute = $this->getShareRoute($type, $shareRoute)=$this->getEmailRoute(invoice, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'share', 1, true);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=share

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . share)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= share;
if ($modal=true)
route(modals.invoices.share, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . share;
route(invoices.share,1);

OPTION4
$route=''

FINAL
$route=modals.invoices.share
or
$route=invoices.share

IMPORTANT FLOW FOR inside share Controller
$page = config('type.document.bill .route.prefix')="bills"
$alias = config('type.document. bill.alias')="";
$preview_route =''.preview.bills.show
$signed_route=''.signed.bills.show

IMPORTANT FLOW FOR inside share blade
on Global js
onCopyLink() {
            let copy_html = document.getElementById('share');
            let copy_badge = document.querySelector('[data-copied]');

            copy_html.select();
            document.execCommand('copy');

        }





SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php{ALREADY}
C:\wamp64\www\akaunting\resources\views\components\dropdown\button.blade.php{ALREADY}

LEVEL2(1 components\documents\show\message.blade.php)

DATA 
$message- FROM PARENT
$backgroundColor-FROM CONTROLLER COMPONENT
$textColor-FROM CONTROLLER COMPONENT
$type-FROM CONTROLLER COMPONENT

LEVEL2(2 components\documents\show\create.blade.php)

DATA 
$hideEdit-FROM CONTROLLER COMPONENT
$accordionActive-FROM CONTROLLER COMPONENT
$permissionUpdate-FROM CONTROLLER COMPONENT
$editRoute-FROM CONTROLLER COMPONENT
$document-FROM PARENT
$description-FROM PARENT
$created_date-FROM PARENT

SLOT 
body,
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\show\accordion\head.blade.php
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php{ALREADYINSIDESELF}


LEVEL3(1 components\show\accordion\head.blade.php)
DATA 
$title-FROM PARENT
$description-FROM PARENT

SUBCOMPONENT 
C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php

LEVEL4(1 \components\button\hover.blade.php)

DATA 
$color-FROM CONTROLLER COMPONENT
$groupHover-FROM CONTROLLER COMPONENT
$slot-FROM SLOT

LEVEL2(3 components\documents\show\receive.blade.php){no Controller}
SLOT
head,body
DATA 
$description-From Parent
$sent_date-From Parent
$accordionActive-From Parent
$permissionUpdate-From Parent
$textMarkReceived-From Parent
$document-FROM PARENT
$hideMarkReceived-From Parent
$permissionUpdate-From Parent

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php

LEVEL3(1  components\button\index.blade.php)
DATA 
$class-FROM PARENT
$type-FROM PARENT
$slot-SLOT FROM PARENT

LEVEL2(4 components\documents\show\get-paid.blade.php){ALREADY}
methods 
onAddPayment: on global js

IMPORTANT ON ONLINE PAYMENT
GET URL TO
dependents
$page = request('page', 1);

$data = [
    'query' => [
        'page' => $page,
    ]
];

$alias=payment-method
$data=getModulesByCategory($alias, $data = [])=$this->getModulesByCategory(payment-method, $data)
$key = 'apps.categories. payment-method . $this->getDataKeyOfModules($data);

$result = 'language.' . language()->getShortCode() . '.page.' . $this->getPageNumberOfModules($data);

public function getPageNumberOfModules($data = [])
    {
        if (empty($data['query']) || empty($data['query']['page'])) {
            return 1;
        }

        return $data['query']['page'];
    }

    $result = 'language.' . language()->getShortCode() . '.page.1

    public function getDataKeyOfModules($data = [])
    {
        $result = 'language.' . language()->getShortCode() . '.page.' . $this->getPageNumberOfModules($data);

        if (isset($data['query']['page'])) {
            unset($data['query']['page']);
        }

        if (isset($data['query'])){
            foreach($data['query'] as $key => $value) {
                $result .= '.' . $key . '.' . $value;
            }
        }

        return $result;
    }

 $key = 'apps.categories.payment-method.language()->getShortCode().page.1?.$key.$value';
zend_version
 $category = Cache::get($key);
 if (! empty($category)) {
            return $category;
        }

        $category = static::getResponseData('GET', 'apps/categories/' . $alias, $data);

NB: IT WILL REDIRECTED TO apps/api-key/create BECAUSE I DONT HAVE API KEY YET.


HOW THE ADD PAYMENT IS DONE
1. akaunting-modal-add-new emits cancel and submit event PASSING this.form as Parameter on respective btn clicked

2.this.component  listen to them and call onSubmit and onCancel as result 
3.then onSubmit emit submit and pass event as parament , and then append data and finally submit it, while onCancel is close modal



DATA 
$accordionActive
$description
$transactionEmailRoute
$document
$type
$hideAddPayment
$transactions
SLOT
head,body

calculate FOR $transactionEmailRoute
dependents
$type=invoice
$document="$invoice"
$transactionEmailRoute=''
$parameter=1
$this->emailRoute = $this->getTransactionEmailRoute($type, $transactionEmailRoute)=$this->getTransactionEmailRoute(invoice, '');

$route = $this->getRouteFromConfig($type, $config_key, $config_parameters = [], $modal = false)=$this->getRouteFromConfig(invoice, 'transaction_email', 1);

Option of getRouteFromConfig()
dependents
static::OBJECT_TYPE=document
$type=invoice
$config_key=transaction_email

OPTION1
$route = config('type.' . static::OBJECT_TYPE . invoice . '.route.' . $config_key)=config('type . document .invoice . route . transaction_email)=undefined

OPTION2
dependents
$alias = config('type.document.invoice .alias')='';
$prefix = config('type.document.invoice.route.prefix')=invoices;

$route .= '' . '.';
$route .= 'modals.';
$route .= invoices. '.';
$route .= transaction_email;
if ($modal=true)
route(modals.invoices.transaction_email, 1);

OPTION3
$route = Str::plural(invoice, 2) . '.' . transaction_email;
route(invoices.transaction_email,1);

OPTION4
modals.transactions.emails.create

FINAL
$route=modals.invoices.transaction_email
or
$route=invoices.transaction_email

IMPORTANT ON SENDING transaction EMAIL in C:\wamp64\www\akaunting\app\Http\Controllers\Modals\TransactionEmails.php
$email_template = config('type.transaction.' . income . '.email_template')=payment_received_customer;


SUBCOMPONENT

C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php{ALREADYSELF}

C:\wamp64\www\akaunting\resources\views\components\link\hover.blade.php

C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php

C:\wamp64\www\akaunting\resources\views\components\tooltip.blade.php

C:\wamp64\www\akaunting\resources\views\components\date.blade.php

C:\wamp64\www\akaunting\resources\views\components\delete-link.blade.php


LEVEL3(1 components\link\hover.blade.php)

DATA 
$color-FROM CONTROLLER COMPONENT
$groupHover-FROM CONTROLLER COMPONENT
$slot-FROM SLOT

LEVEL3(2 components\button\hover.blade.php)
DATA 
$color-From Controller Component
$groupHover-From Controller Component

LEVEL3(3 components\tooltip.blade.php)
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

LEVEL3(4 components\date.blade.php)

DATA 
$date-From slot Parent

LEVEL3(5 components\delete-link.blade.php)

DATA 
$class-FROM CONTROLLER CONTROLLER
$textClass-FROM CONTROLLER CONTROLLER
$modelTable-FROM CONTROLLER CONTROLLER
$slot-FROM SLOT PARENT
$message-FROM CONTROLLER CONTROLLER
$deleteText-FROM CONTROLLER CONTROLLER
$cancelText-FROM CONTROLLER CONTROLLER
$id-FROM CONTROLLER CONTROLLER
$label-FROM PARENT SLOT
$title-FROM CONTROLLER CONTROLLER
$action-FROM CONTROLLER CONTROLLER
$attributes-fROM attributes

SUBCOMPONENT

C:\wamp64\www\akaunting\resources\views\components\form\input\hidden.blade.php
C:\wamp64\www\akaunting\resources\views\components\button\index.blade.php{ALREADY IT SELF}

LEVEL4(1 components\form\input\hidden.blade.php)

DATA 
$name-FROM PARENT
$id-FROM CONTROLLER COMPONENT
$valueFROM CONTROLLER COMPONENT
$placeholderFROM CONTROLLER COMPONENT
$requiredFROM CONTROLLER COMPONENT
$disabledFROM CONTROLLER COMPONENT
$readonlyFROM CONTROLLER COMPONENT
$attributesFROM CONTROLLER COMPONENT

LEVEL2(5 components\documents\show\make-payment.blade.php)
{ALREADY } HERE ARE DIFFENCES AS components\documents\show\get-paid.blade.php

LEVEL2(6 components\documents\show\restore.blade.php)

DATA 
$description-FROM PARENT
$accordionActive-FROM PARENT

SLOT
head,body

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\show\accordion\index.blade.php

C:\wamp64\www\akaunting\resources\views\components\show\accordion\head.blade.php{already in itself}

LEVEL3(1 components\show\accordion\index.blade.php)

DATA 
$attributes-FROM ATRRIBUTES
$open-FROM parent
$type-FROM parent
$head-fROM SLOT PARENT 
$body-fROM SLOT PARENT
$footfROM SLOT PARENT

LEVEL2(7 components\documents\show\schedule.blade.php)
{ALREADY AS C:\wamp64\www\akaunting\resources\views\components\documents\show\restore.blade.php} THEY HAVE SAME STRUCTURE ALTHOUGH DIFFERENT CONTENTS
DATA 
$document -FROM PARENT 


LEVEL2(8
components\documents\show\children.blade.php)
{ALREADY AS C:\wamp64\www\akaunting\resources\views\components\documents\show\restore.blade.php}
DATA 
$document - FROM PARENT
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\show\accordion\head.blade.php

LEVEL3(1 components\show\accordion\head.blade.php)
DATA 
$description -FROM CONTROLELER COMPONENT

SLOT
body
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\button\hover.blade.php

LEVEL4(1 components\button\hover.blade.php)

DATA 
$color -FROM CONTROLELER COMPONENT
$groupHover -FROM CONTROLELER COMPONENT


LEVEL2(8 components\documents\show\attachment.blade.php)

{ALREADY AS C:\wamp64\www\akaunting\resources\views\components\documents\show\restore.blade.php}

DIFFENCES
SUBCOMPONENTS
C:\wamp64\www\akaunting\resources\views\components\media\file.blade.php

LEVEL3(1 components\media\file.blade.php)
{FOR DISPLAYING ATTACHMENT NO UPLOAD}
$file-FROM PARENT
$column_name-FROM CONTROLLER COMPONENT{Ffile}

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\link\index.blade.php{ALREADY IN ITSELF}

LEVEL2(10 components\documents\show\template.blade.php)
SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\documents\template\classic.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\template\default.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\template\modern.blade.php

DATA {ALL FROM CONTROLELER CONTROLLER}
$type
$document
$documentTemplate
$logo
$backgroundColor
$hideFooter
$hideCompanyLogo
$hideCompanyDetails
$hideCompanyName
$hideCompanyAddress
$hideCompanyTaxNumber
$hideCompanyPhone
$hideCompanyEmail
$hideContactInfo
$hideContactName
$hideContactTaxNumber
$hideContactPhone
$hideContactEmail
$hideOrderNumber
$hideIssuedAt
$hideDueAt
$textContactInfo
$textIssuedAt
$textDocumentNumber
$textDueAt
$textOrderNumber
$textDocumentTitle
$textDocumentSubheading
$hideItems
$hideName 
$hideDescription
$hideQuantity
$hidePrice
$hideAmount 
$hideNote
$textItems
$textPrice 
$textAmount
$hideDocumentNumber
$hideContactAddress

LEVEL3(1 C:\wamp64\www\akaunting\resources\views\components\documents\template\classic.blade.php)
DATA {ALL DATA FROM PARENT}

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\link\hover.blade.php{ALREADY IN SELF}

C:\wamp64\www\akaunting\resources\views\components\documents\template\line-item.blade.php
money  component from money package

LEVEL4(1 components\documents\template\line-item.blade.php)
DATA 
$hideName-FROM CONTROLELER COMPONENT
$hideItems-FROM CONTROLELER COMPONENT
$item-FROM CONTROLELER COMPONENT
$hideAmount-FROM CONTROLELER COMPONENT
$hideDiscount-FROM CONTROLELER COMPONENT
$document-FROM CONTROLELER COMPONENT
$hidePrice-FROM CONTROLELER COMPONENT
$hideQuantity-FROM CONTROLELER COMPONENT
$hideDescription-FROM CONTROLELER COMPONENT

LEVEL3(2 components\documents\template\default.blade.php){SAME AS components\documents\template\classic.blade.php}

LEVEL3(3 components\documents\template\modern.blade.php){SAME AS components\documents\template\classic.blade.php}


LEVEL1(5 components\documents\script.blade.php)

DATA 
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

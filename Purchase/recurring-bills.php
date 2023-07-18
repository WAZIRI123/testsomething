C:\wamp64\www\akaunting\resources\views\purchases\recurring_bills\index.blade.php

SUBCOMPONENT
C:\wamp64\www\akaunting\resources\views\components\layouts\admin.blade.php
C:\wamp64\www\akaunting\resources\views\components\documents\index\buttons.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\index\more-buttons.blade.php


C:\wamp64\www\akaunting\resources\views\components\documents\index\content.blade.php

C:\wamp64\www\akaunting\resources\views\components\documents\script.blade.php

Slots
title,favorite,buttons,moreButtons,content

DATA 
$bills
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
C:\wamp64\www\akaunting\resources\views\livewire\menu\favorite.blade.php{defined by <livewire:menu.favorite in  components\menu\favorite.blade.php }

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
NOTE:BECAUSE $DOCUMENT->COUNT() IS 0 , 
<x-empty-page
        group="{{ $group }}"
        page="{{ $page }}"
        alias="{{ $alias }}"
        :buttons="$emptyPageButtons"
        image-empty-page="{{ $imageEmptyPage }}"
        text-empty-page="{{ $textEmptyPage }}"
        url-docs-path="{{ $urlDocsPath }}"
        check-permission-create="{{ $checkPermissionCreate }}"
    /> WILL BE DISPLAYED INSTEAD OF CONTENTS SECTION

    LEVEL1(5 components\documents\index\content.blade.php)
    SUBCOMPONENT
    C:\wamp64\www\akaunting\resources\views\components\empty-page.blade.php
   LEVEL2(1 components\empty-page.blade.php)

   DATA 
   $title
   $description
   $checkPermissionCreate
   $button
   $suggestions
   $image

   SUBCOMPONENT
   C:\wamp64\www\akaunting\resources\views\components\dropdown\link.blade.php
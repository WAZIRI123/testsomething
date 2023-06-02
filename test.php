
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
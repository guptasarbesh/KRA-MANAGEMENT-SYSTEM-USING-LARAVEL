<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>KRA MANAGEMENT SYSTEM</title>


    <!-- uikit -->
    <link rel="stylesheet" href="{{URL::asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{URL::asset('assets/icons/flags/flags.min.css')}}" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style_switcher.min.css')}}" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.min.css')}}" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/themes/themes_combined.min.css')}}" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
        <link rel="stylesheet" href="assets/css/ie.css" media="all">
    <![endif]-->

</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
<header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                            <div class="uk-dropdown uk-dropdown-width-3">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-2-3">
                                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                            <a href="page_mailbox.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                                <span class="uk-text-muted uk-display-block">Mailbox</span>
                                            </a>
                                            <a href="page_invoices.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                                <span class="uk-text-muted uk-display-block">Invoices</span>
                                            </a>
                                            <a href="page_chat.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                                                <span class="uk-text-muted uk-display-block">Chat</span>
                                            </a>
                                            <a href="page_scrum_board.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                                <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                            </a>
                                            <a href="page_snippets.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-blue-600">&#xE86F;</i>
                                                <span class="uk-text-muted uk-display-block">Snippets</span>
                                            </a>
                                            <a href="page_user_profile.html" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                                <span class="uk-text-muted uk-display-block">User profile</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <ul class="uk-nav uk-nav-dropdown uk-panel">
                                            <li class="uk-nav-header">Components</li>
                                            <li><a href="components_accordion.html">Accordions</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="URL::asset{{('components_notifications.html')}}">Notifications</a></li>
                                            <li><a href="components_sortable.html">Sortable</a></li>
                                            <li><a href="components_tabs.html">Tabs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">fullscreen</i></a></li>
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                        <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-cyan">tz</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="page_mailbox.html">At eum.</a></span>
                                                        <span class="uk-text-small uk-text-muted">A nostrum deleniti sit nihil cumque.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="page_mailbox.html">Aliquid temporibus.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Molestias in non expedita suscipit illum nam.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-light-green">cx</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="page_mailbox.html">Non nisi asperiores.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Nobis voluptatem nesciunt voluptates et ratione.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="page_mailbox.html">Molestiae doloribus.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Asperiores saepe velit sit est sed veniam.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="page_mailbox.html">Explicabo animi.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Fugit et rerum nihil cupiditate laudantium eligendi id delectus iste laudantium.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Itaque enim repudiandae.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Eveniet sed voluptas beatae distinctio amet est quod.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Aliquid placeat recusandae.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Maiores adipisci saepe neque voluptatem.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Ut autem magni.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Dignissimos molestiae qui itaque quod saepe.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Corrupti qui est.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Sit accusantium mollitia eum dignissimos quae doloribus sit.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li> <a href="{{route('logout')}}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                    <li><a href="login_v2.html">Login Page v2</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
                <script type="text/autocomplete">
                </script>
            </form>
        </div>
    </header>

    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="/dashboard" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="/dashboard" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="/dashboard">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                    
                </li>
                <li title="KRA MANAGEMENT SYSTEM">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">KRA SYSTEM</span>
                    </a>
                    <ul>
                        <li><a href="/krafront">KRA MASTER</a></li>
                       
                        <li><a href="/groupfront">KRA GROUPS</a></li>
                        <li><a href="/detailfront">KRA GROUPS DETAIL</a></li>
                        <li><a href="/employeefront">KRA GROUPS EMPLOYEE</a></li>
                       
                        <!-- <li class="menu_subtitle">WYSIWYG Editors</li>
                                <li><a href="forms_wysiwyg_ckeditor.html">CKeditor</a></li>
                        <li><a href="forms_wysiwyg_inline.html">Ckeditor Inline</a></li>
                        <li><a href="forms_wysiwyg_tinymce.html">TinyMCE</a></li> -->
                     </ul>
                
                </li>
              
            
               
                <li title="User Profile">
                    <a href="page_user_profile.html">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User Profile</span>
                    </a>
                    
                </li>


            </ul>
        </div>
    </aside>

    <div id="page_content">
        <div id="page_content_inner">
            @yield('content')
        </div>
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="{{URL::asset('assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{URL::asset('assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{URL::asset('assets/js/altair_admin_common.min.js')}}"></script>

    <!-- page specific plugins -->
    <!-- maplace (google maps) -->
    <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyC2FodI8g-iCz1KHRFE7_4r8MFLA7Zbyhk"></!--> -->
    <!-- <script src="{{URL::asset('bower_components/maplace-js/dist/maplace.min.js')}}"></script> -->

    <!--  google maps functions -->
    <!-- <script src="{{URL::asset('assets/js/pages/plugins_google_maps.min.js')}}"></script> -->


       <!-- datatables -->
   <script src="{{URL::asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <!-- datatables buttons-->
    <script src="{{URL::asset('bower_components/datatables-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{URL::asset('assets/js/custom/datatables/buttons.uikit.js')}}"></script>
    <script src="{{URL::asset('bower_components/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('bower_components/datatables-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{URL::asset('bower_components/datatables-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{URL::asset('bower_components/datatables-buttons/js/buttons.print.js')}}"></script>

    <!-- datatables custom integration -->
    <script src="{{URL::asset('assets/js/custom/datatables/datatables.uikit.min.js')}}"></script>

    <!--  datatables functions -->
    <script src="{{URL::asset('assets/js/pages/plugins_datatables.min.js')}}"></script>
      <!--  notifications functions -->
      <script src="{{URL::asset('assets/js/pages/components_notifications.min.js')}}"></script>


    
    <script>
        $(function() {
            if(isHighDensity()) {
                $.getScript( "{{URL::asset('assets/js/custom/dense.min.js')}}", function(data) {
                    // enable hires images
                    altair_helpers.retina_images();
                });
            }
            if(Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>

 



</body>
</html>
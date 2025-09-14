<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Elite Exchange Delivery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add this in the <head> section of your layout file -->
    <!-- CSS at the beginning -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>




    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/bootstrap/bootstrap-icons.css')}}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}" />


</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->


                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>


                </div>

                <div class="d-flex">




                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>
                    <div class="dropdown d-lg-inline-block ms-1">
                        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl"
                            style="background-position:-0px -0px;"><img src="{{asset('flags/blank.png')}}" height="16"
                                width="16" alt="English" /></a><a href="#" onclick="doGTranslate('en|fr');return false;"
                            title="French" class="gflag nturl" style="background-position:-200px -100px;"><img
                                src="{{asset('flags/blank.png')}}" height="16" width="16" alt="French" /></a><a href="#"
                            onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl"
                            style="background-position:-300px -100px;"><img src="{{asset('flags/blank.png')}}"
                                height="16" width="16" alt="German" /></a><a href="#"
                            onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl"
                            style="background-position:-600px -100px;"><img src="{{asset('flags/blank.png')}}"
                                height="16" width="16" alt="Italian" /></a>

                        <style type="text/css">
                            a.gflag {
                                vertical-align: middle;
                                font-size: 16px;
                                padding: 1px 0;
                                background-repeat: no-repeat;
                                background-image: url('flags/16.png');
                            }



                            a.gflag img {
                                border: 0;
                            }

                            a.gflag:hover {
                                background-image: url('flags/16a.png');
                                /* Corrected */
                            }

                            #goog-gt-tt {
                                display: none !important;
                            }

                            .goog-te-banner-frame {
                                display: none !important;
                            }

                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }

                            body {
                                top: 0 !important;
                            }

                            #google_translate_element2 {
                                display: none !important;
                            }
                        </style>

                        <br /><select onchange="doGTranslate(this);">
                            <option value="">Select Language</option>
                            <option value="en|af">Afrikaans</option>
                            <option value="en|sq">Albanian</option>
                            <option value="en|ar">Arabic</option>
                            <option value="en|hy">Armenian</option>
                            <option value="en|az">Azerbaijani</option>
                            <option value="en|eu">Basque</option>
                            <option value="en|be">Belarusian</option>
                            <option value="en|bg">Bulgarian</option>
                            <option value="en|ca">Catalan</option>
                            <option value="en|zh-CN">Chinese (Simplified)</option>
                            <option value="en|zh-TW">Chinese (Traditional)</option>
                            <option value="en|hr">Croatian</option>
                            <option value="en|cs">Czech</option>
                            <option value="en|da">Danish</option>
                            <option value="en|nl">Dutch</option>
                            <option value="en|en">English</option>
                            <option value="en|et">Estonian</option>
                            <option value="en|tl">Filipino</option>
                            <option value="en|fi">Finnish</option>
                            <option value="en|fr">French</option>
                            <option value="en|gl">Galician</option>
                            <option value="en|ka">Georgian</option>
                            <option value="en|de">German</option>
                            <option value="en|el">Greek</option>
                            <option value="en|ht">Haitian Creole</option>
                            <option value="en|iw">Hebrew</option>
                            <option value="en|hi">Hindi</option>
                            <option value="en|hu">Hungarian</option>
                            <option value="en|is">Icelandic</option>
                            <option value="en|id">Indonesian</option>
                            <option value="en|ga">Irish</option>
                            <option value="en|it">Italian</option>
                            <option value="en|ja">Japanese</option>
                            <option value="en|ko">Korean</option>
                            <option value="en|lv">Latvian</option>
                            <option value="en|lt">Lithuanian</option>
                            <option value="en|mk">Macedonian</option>
                            <option value="en|ms">Malay</option>
                            <option value="en|mt">Maltese</option>
                            <option value="en|no">Norwegian</option>
                            <option value="en|fa">Persian</option>
                            <option value="en|pl">Polish</option>
                            <option value="en|pt">Portuguese</option>
                            <option value="en|ro">Romanian</option>
                            <option value="en|ru">Russian</option>
                            <option value="en|sr">Serbian</option>
                            <option value="en|sk">Slovak</option>
                            <option value="en|sl">Slovenian</option>
                            <option value="en|es">Spanish</option>
                            <option value="en|sw">Swahili</option>
                            <option value="en|sv">Swedish</option>
                            <option value="en|th">Thai</option>
                            <option value="en|tr">Turkish</option>
                            <option value="en|uk">Ukrainian</option>
                            <option value="en|ur">Urdu</option>
                            <option value="en|vi">Vietnamese</option>
                            <option value="en|cy">Welsh</option>
                            <option value="en|yi">Yiddish</option>
                            <option value="en|bn">Bengali</option>
                            <option value="en|ceb">Cebuano</option>
                            <option value="en|eo">Esperanto</option>
                            <option value="en|gu">Gujarati</option>
                            <option value="en|hmn">Hmong</option>
                            <option value="en|jw">Javanese</option>
                            <option value="en|kn">Kannada</option>
                            <option value="en|la">Latin</option>
                            <option value="en|ne">Nepali</option>
                            <option value="en|pa">Punjabi</option>
                            <option value="en|so">Somali</option>
                            <option value="en|ta">Tamil</option>
                            <option value="en|te">Telugu</option>
                        </select>
                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                        </script>
                        <script type="text/javascript"
                            src="https://translate.google.com/translate_a/element7876.js?cb=googleTranslateElementInit2">
                        </script> <!-- Corrected -->



                        <script type="text/javascript">
                            /* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
                        </script>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{asset('assets/images/new.png')}}"
                                alt="Header Avatar"> <!-- Corrected -->

                            <span class="d-none d-xl-inline-block ms-1" key="t-henry"> </span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{route('profile')}}"><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                    key="t-profile">Profile</span></a>
                            <a class="dropdown-item d-block" href="{{route('settings')}}"><span
                                    class="badge bg-success float-end"></span><i
                                    class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                    key="t-settings">Settings</span></a>
                            <!-- <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{route('logout')}}" id='logout_account'><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="{{route('dashboard')}}" class="has-arrow waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{route('create.shipment')}}" class="waves-effect">
                                <i class="bx bx-credit-card-alt"></i>
                                <span key="t-projects">Create Shipment</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('all.packages')}}" class=" waves-effect">
                                <i class="bx bxl-mastercard"></i>
                                <span key="t-layouts">Edit Shipment</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{route('send.user.email')}}" class=" waves-effect">
                                <i class="bx bxl-mastercard"></i>
                                <span key="t-layouts">Send Mail</span>
                            </a>

                        </li>


                        <li>
                            <a href="{{route('profile')}}" class="waves-effect">
                                <i class="bx bx-user"></i>
                                <span key="t-chat">My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('settings')}}" class="waves-effect">
                                <i class="bx bx-wrench"></i>
                                <span key="t-invoices">Account Settings</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="{{route('logout')}}">
                                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"
                                    id='logout_account1'>
                                    <span key="t-logout">Logout</span> </i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Left Sidebar End -->
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
            type="text/css" />

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <!-- Left Sidebar End -->
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
            type="text/css" />
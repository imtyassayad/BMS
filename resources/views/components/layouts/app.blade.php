<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>Hotel Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/assets/images/favicon.ico')}}">

         <!-- Plugins css -->
         <link href="{{asset('web/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('web/assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('web/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('web/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('web/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- ION Slider -->
        <link href="{{asset('web/assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- App css -->
        <link href="{{asset('web/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-stylesheet" />
        <link href="{{asset('web/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

        <!-- icons -->
        <link href="{{asset('web/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search">

                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found <span class="text-danger">09</span> results</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('web/assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div>
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('web/assets/images/users/avatar-5.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div>
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </li>

                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Search">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-grid noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/github.png')}}" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/dribbble.png')}}" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/slack.png')}}" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/g-suite.png')}}" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('web/assets/images/brands/dropbox.png')}}" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('web/assets/images/flags/us.jpg')}}" alt="user-image" height="14">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{asset('web/assets/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{asset('web/assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{asset('web/assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{asset('web/assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="#" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div class="noti-scroll" data-simplebar>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-soft-primary text-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Doug Dukes commented on Admin Dashboard
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{asset('web/assets/images/users/avatar-2.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Mario Drummond</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{asset('web/assets/images/users/avatar-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-soft-warning text-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('web/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Nik Patel <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-account-circle-line"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-settings-3-line"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-wallet-line"></i>
                                    <span>My Wallet <span class="badge bg-success float-end">3</span> </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lock-line"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                <a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="dropdown-item notify-item">
                                    <i class="ri-logout-box-line"></i>
                                    <span>Logout</span>
                                </a>
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{asset('web/assets/images/logo-sm-dark.png')}}" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">Minton</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('web/assets/images/logo-dark.png')}}" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">M</span> -->
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{asset('web/assets/images/logo-sm.png')}}" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('web/assets/images/logo-light.png')}}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Create New
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-briefcase me-1"></i>
                                    <span>New Projects</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-user me-1"></i>
                                    <span>Create Users</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-bar-chart-line- me-1"></i>
                                    <span>Revenue Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-headphones me-1"></i>
                                    <span>Help & Support</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown dropdown-mega d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Mega Menu
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Widgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Nestable List</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Range Sliders</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Masonry Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Treeview Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tour Page</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">CRM Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Team Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Task Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">New Header Style</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Search Result</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Gallery Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h3 class="text-dark">Special Discount Sale!</h3>
                                            <h4>Save up to 70% off.</h4>
                                            <button class="btn btn-primary rounded-pill mt-3">Download Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-dashboard-line me-1"></i> Dashboards <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                        <a  href="{{route('dashboard')}}" class="dropdown-item">Management</a>
                                        <a  href="{{route('bms.dashboard')}}" class="dropdown-item">BMS</a>
                                        <a href="#" class="dropdown-item">Comming Soon</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-apps-2-line me-1"></i> Apps <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-apps">

                                        <a href="apps-calendar.html" class="dropdown-item"><i class="ri-calendar-2-line align-middle me-1"></i> Calendar</a>
                                        <a href="apps-chat.html" class="dropdown-item"><i class="ri-message-2-line align-middle me-1"></i> Chat</a>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-shopping-cart-2-line align-middle me-1"></i> Ecommerce <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                <a href="ecommerce-products.html" class="dropdown-item">Products List</a>
                                                <a href="ecommerce-products-grid.html" class="dropdown-item">Products Grid</a>
                                                <a href="ecommerce-product-detail.html" class="dropdown-item">Product Detail</a>
                                                <a href="ecommerce-product-create.html" class="dropdown-item">Create Product</a>
                                                <a href="ecommerce-customers.html" class="dropdown-item">Customers</a>
                                                <a href="ecommerce-orders.html" class="dropdown-item">Orders</a>
                                                <a href="ecommerce-orders-detail.html" class="dropdown-item">Order Detail</a>
                                                <a href="ecommerce-sellers.html" class="dropdown-item">Sellers</a>
                                                <a href="ecommerce-cart.html" class="dropdown-item">Shopping Cart</a>
                                                <a href="ecommerce-checkout.html" class="dropdown-item">Checkout</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-mail-line align-middle me-1"></i> Email <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                                <a href="email-read.html" class="dropdown-item">Read Email</a>
                                                <a href="email-templates.html" class="dropdown-item">Email Templates</a>
                                            </div>
                                        </div>

                                        <a href="apps-companies.html" class="dropdown-item"><i class="ri-building-4-line align-middle me-1"></i> Companies</a>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-task-line align-middle me-1"></i> Tasks <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-task">
                                                <a href="task-list.html" class="dropdown-item">List</a>
                                                <a href="task-details.html" class="dropdown-item">Details</a>
                                                <a href="task-kanban-board.html" class="dropdown-item">Kanban Board</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-profile-line align-middle me-1"></i> Contacts <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                <a href="contacts-list.html" class="dropdown-item">Members List</a>
                                                <a href="contacts-profile.html" class="dropdown-item">Profile</a>
                                            </div>
                                        </div>
                                        <a href="apps-file-manager.html" class="dropdown-item"><i class="ri-folders-line align-middle me-1"></i> File Manager</a>
                                        <a href="apps-tickets.html" class="dropdown-item"><i class="ri-customer-service-2-line align-middle me-1"></i> Tickets</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-pencil-ruler-2-line me-1"></i> UI Elements <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-xl" aria-labelledby="topnav-ui">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <a href="ui-avatars.html" class="dropdown-item">Avatars</a>
                                                    <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                    <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                    <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                    <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                    <a href="ui-video.html" class="dropdown-item">Embed Video</a>
                                                    <a href="ui-general.html" class="dropdown-item">General UI</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                    <a href="ui-images.html" class="dropdown-item">Images</a>
                                                    <a href="ui-list-group.html" class="dropdown-item">List Group</a>
                                                    <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                    <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                                                    <a href="ui-offcanvas.html" class="dropdown-item">Offcanvas</a>
                                                    <a href="ui-placeholders.html" class="dropdown-item">Placeholders</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <a href="ui-portlets.html" class="dropdown-item">Portlets</a>
                                                    <a href="ui-progress.html" class="dropdown-item">Progress</a>
                                                    <a href="ui-ribbons.html" class="dropdown-item">Ribbons</a>
                                                    <a href="ui-spinners.html" class="dropdown-item">Spinners</a>
                                                    <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs & Accordions</a>
                                                    <a href="ui-tooltips-popovers.html" class="dropdown-item">Tooltips & Popovers</a>
                                                    <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-stack-line me-1"></i> Components <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extendedui"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-stack-line align-middle me-1"></i> Extended UI <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-extendedui">
                                                <a href="extended-nestable.html" class="dropdown-item">Nestable List</a>
                                                <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                                <a href="extended-sweet-alert.html" class="dropdown-item">Sweet Alert</a>
                                                <a href="extended-tour.html" class="dropdown-item">Tour Page</a>
                                                <a href="extended-treeview.html" class="dropdown-item">Tree View</a>
                                                <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                            </div>
                                        </div>
                                        <a href="widgets.html" class="dropdown-item"><i class="ri-honour-line align-middle me-1"></i> Widgets</a>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-eraser-line align-middle me-1"></i> Forms <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                <a href="forms-elements.html" class="dropdown-item">General Elements</a>
                                                <a href="forms-advanced.html" class="dropdown-item">Advanced</a>
                                                <a href="forms-validation.html" class="dropdown-item">Validation</a>
                                                <a href="forms-pickers.html" class="dropdown-item">Pickers</a>
                                                <a href="forms-wizard.html" class="dropdown-item">Wizard</a>
                                                <a href="forms-masks.html" class="dropdown-item">Masks</a>
                                                <a href="forms-quilljs.html" class="dropdown-item">Quilljs Editor</a>
                                                <a href="forms-file-uploads.html" class="dropdown-item">File Uploads</a>
                                                <a href="forms-x-editable.html" class="dropdown-item">X Editable</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-bar-chart-line align-middle me-1"></i> Charts <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                <a href="charts-flot.html" class="dropdown-item">Flot Charts</a>
                                                <a href="charts-apex.html" class="dropdown-item">Apex Charts</a>
                                                <a href="charts-morris.html" class="dropdown-item">Morris Charts</a>
                                                <a href="charts-chartjs.html" class="dropdown-item">Chartjs Charts</a>
                                                <a href="charts-peity.html" class="dropdown-item">Peity Charts</a>
                                                <a href="charts-chartist.html" class="dropdown-item">Chartist Charts</a>
                                                <a href="charts-c3.html" class="dropdown-item">C3 Charts</a>
                                                <a href="charts-sparklines.html" class="dropdown-item">Sparklines Charts</a>
                                                <a href="charts-knob.html" class="dropdown-item">Jquery Knob Charts</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-table-line align-middle me-1"></i> Tables <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                <a href="tables-datatables.html" class="dropdown-item">Data Tables</a>
                                                <a href="tables-editable.html" class="dropdown-item">Editable Tables</a>
                                                <a href="tables-responsive.html" class="dropdown-item">Responsive Tables</a>
                                                <a href="tables-footables.html" class="dropdown-item">FooTable</a>
                                                <a href="tables-tablesaw.html" class="dropdown-item">Tablesaw Tables</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-markup-line align-middle me-1"></i> Icons <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                <a href="icons-feather.html" class="dropdown-item">Feather</a>
                                                <a href="icons-remix.html" class="dropdown-item">Remix</a>
                                                <a href="icons-boxicons.html" class="dropdown-item">Boxicons</a>
                                                <a href="icons-mdi.html" class="dropdown-item">Material Design</a>
                                                <a href="icons-font-awesome.html" class="dropdown-item">Font Awesome 5</a>
                                                <a href="icons-weather.html" class="dropdown-item">Weather</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-map-pin-line align-middle me-1"></i> Maps <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                                <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                <a href="maps-mapael.html" class="dropdown-item">Mapael Maps</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-pages-line me-1"></i> Pages <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Auth Style 1 <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                <a href="auth-login.html" class="dropdown-item">Log In</a>
                                                <a href="auth-register.html" class="dropdown-item">Register</a>
                                                <a href="auth-signin-signup.html" class="dropdown-item">Signin - Signup</a>
                                                <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                <a href="auth-logout.html" class="dropdown-item">Logout</a>
                                                <a href="auth-confirm-mail.html" class="dropdown-item">Confirm Mail</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth2"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Auth Style 2 <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-auth2">
                                                <a href="auth-login-2.html" class="dropdown-item">Log In 2</a>
                                                <a href="auth-register-2.html" class="dropdown-item">Register 2</a>
                                                <a href="auth-signin-signup-2.html" class="dropdown-item">Signin - Signup 2</a>
                                                <a href="auth-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                                <a href="auth-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                                <a href="auth-logout-2.html" class="dropdown-item">Logout 2</a>
                                                <a href="auth-confirm-mail-2.html" class="dropdown-item">Confirm Mail 2</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Errors <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                <a href="pages-404-alt.html" class="dropdown-item">Error 404-alt</a>
                                                <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Utility <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                <a href="pages-starter.html" class="dropdown-item">Starter</a>
                                                <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                <a href="pages-sitemap.html" class="dropdown-item">Sitemap</a>
                                                <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                                <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                                <a href="pages-search-results.html" class="dropdown-item">Search Results</a>
                                                <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                                <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                                <a href="pages-coming-soon.html" class="dropdown-item">Coming Soon</a>
                                                <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-layout-line me-1"></i> Layouts <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                        <a href="index.html" class="dropdown-item">Vertical</a>
                                        <a href="layouts-horizontal.html" class="dropdown-item">Horizontal</a>
                                        <a href="layouts-detached.html" class="dropdown-item">Detached</a>
                                        <a href="layouts-two-column.html" class="dropdown-item">Two Column Menu</a>
                                        <a href="layouts-preloader.html" class="dropdown-item">Preloader</a>
                                    </div>
                                </li>
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
               {{$slot}}

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Minton theme by <a href="#">Coderthemes</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">

                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-10.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status busy"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-9.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status online"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-2.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status away"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-4.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status online"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-5.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status online"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-6.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status busy"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-7.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative me-2">
                                        <span class="user-status away"></span>
                                        <img src="{{asset('web/assets/images/users/avatar-8.jpg')}}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading me-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="d-grid p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="topbar-color" value="dark" id="darktopbar-check" checked>
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="topbar-color" value="light" id="lighttopbar-check">
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>


                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus Positon <small>(Leftsidebar and Topbar)</small></h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="menus-position" value="fixed" id="fixed-check" checked>
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="menus-position" value="scrollable" id="scrollable-check">
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>


                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-color" value="light" id="light-check" checked>
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-color" value="dark" id="dark-check">
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-color" value="brand" id="brand-check">
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-color" value="gradient" id="gradient-check">
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>


                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-size" value="default" id="default-size-check" checked>
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-size" value="condensed" id="condensed-check">
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-size" value="compact" id="compact-check">
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>


                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="leftsidebar-user" value="fixed" id="sidebaruser-check">
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                            <a href="#"
                                class="btn btn-danger mt-2" ><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('web/assets/js/vendor.min.js')}}"></script>

         <!-- KNOB JS -->
         <script src="{{asset('web/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

        <!-- Apex js-->
        <script src="{{asset('web/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>

        <!-- Plugins Js -->
        <script src="{{asset('web/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
        <script src="{{asset('web/assets/libs/jquery.quicksearch/jquery.quicksearch.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('web/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

        <
        @stack('scripts')
        <!-- init js -->
        <script src="{{asset('web/assets/js/pages/form-advanced.init.js')}}"></script>

        <!-- Ion Range Slider-->
        <script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

        <!-- Range slider init js-->
        <script src="assets/js/pages/range-sliders.init.js"></script>

         <!-- Widgets demo js-->
         <script src="{{asset('web/assets/js/pages/widgets.init.js')}}"></script>

        <!-- TODO js-->
        <script src="{{asset('web/assets/js/pages/jquery.todo.js')}}"></script>

        <!-- Dashboard init-->
        <script src="{{asset('web/assets/js/pages/dashboard-crm.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('web/assets/js/app.min.js')}}"></script>



    </body>

</html>

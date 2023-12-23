<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                <div class="ps-lg-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with
                            this template!</p>
                        <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank"
                           class="btn me-2 buy-now-btn border-0">Buy Now</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="ti-close text-white"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="../index.html">
                    <img src="../assets/images/logo.svg" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="../index.html">
                    <img src="../assets/images/logo-mini.svg" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
                    <h3 class="welcome-sub-text">Your performance summary this week </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#"
                       data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">Select category</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                                <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                                <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                                <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                                <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
          <span class="input-group-addon input-group-prepend border-right">
            <span class="icon-calendar input-group-text calendar-icon"></span>
          </span>
                        <input type="text" class="form-control">
                    </div>
                </li>
                <li class="nav-item">
                    <form class="search-form" action="#">
                        <i class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                <p class="fw-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                <p class="fw-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                <p class="fw-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-mail icon-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="countDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                            <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                            Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                            Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                            Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                            FAQ</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">UI Elements</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-floor-plan"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">Forms and Datas</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                       aria-controls="form-elements">
                        <i class="menu-icon mdi mdi-card-text-outline"></i>
                        <span class="menu-title">Form elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="../pages/forms/basic_elements.html">Basic Elements</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/charts/chartjs.html">ChartJs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/tables/basic-table.html">Basic table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-layers-outline"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/icons/mdi.html">Mdi icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">pages</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">help</li>
                <li class="nav-item">
                    <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                        <i class="menu-icon mdi mdi-file-document"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
                                           aria-controls="overview" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab"
                                           aria-selected="false">Audiences</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab"
                                           aria-selected="false">Demographics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab"
                                           aria-selected="false">More</a>
                                    </li>
                                </ul>
                                <div>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Bounce Rate</p>
                                                    <h3 class="rate-percentage">32.53%</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                                                </div>
                                                <div>
                                                    <p class="statistics-title">Page Views</p>
                                                    <h3 class="rate-percentage">7,682</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                                </div>
                                                <div>
                                                    <p class="statistics-title">New Sessions</p>
                                                    <h3 class="rate-percentage">68.8</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Avg. Time on Site</p>
                                                    <h3 class="rate-percentage">2m:35s</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">New Sessions</p>
                                                    <h3 class="rate-percentage">68.8</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Avg. Time on Site</p>
                                                    <h3 class="rate-percentage">2m:35s</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 d-flex flex-column">
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                                <div>
                                                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                                                    <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur
                                                                        adipisicing elit</p>
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                                type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="false"> This month </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                            <h6 class="dropdown-header">Settings</h6>
                                                                            <a class="dropdown-item" href="#">Action</a>
                                                                            <a class="dropdown-item" href="#">Another action</a>
                                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                                <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                    <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                                                    <h4 class="me-2">USD</h4>
                                                                    <h4 class="text-success">(+1.37%)</h4>
                                                                </div>
                                                                <div class="me-3">
                                                                    <div id="marketingOverview-legend"></div>
                                                                </div>
                                                            </div>
                                                            <div class="chartjs-bar-wrapper mt-3">
                                                                <canvas id="marketingOverview"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                                <div>
                                                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                                                    <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                                                            class="mdi mdi-account-plus"></i>Add new member</button>
                                                                </div>
                                                            </div>
                                                            <div class="table-responsive  mt-1">
                                                                <table class="table select-table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>Customer</th>
                                                                        <th>Company</th>
                                                                        <th>Progress</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex ">
                                                                                <img src="assets/images/faces/face1.jpg" alt="">
                                                                                <div>
                                                                                    <h6>Brandon Washington</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">79%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%"
                                                                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="assets/images/faces/face2.jpg" alt="">
                                                                                <div>
                                                                                    <h6>Laura Brooks</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                                                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="assets/images/faces/face3.jpg" alt="">
                                                                                <div>
                                                                                    <h6>Wayne Murphy</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 38%"
                                                                                         aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="assets/images/faces/face4.jpg" alt="">
                                                                                <div>
                                                                                    <h6>Matthew Bailey</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                                                                         aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-danger">Pending</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="assets/images/faces/face5.jpg" alt="">
                                                                                <div>
                                                                                    <h6>Katherine Butler</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                                                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-success">Completed</div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row flex-grow">
                                                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body card-rounded">
                                                            <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 font-weight-medium">
                                                                        Change in Directors
                                                                    </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 font-weight-medium">
                                                                        Other Events
                                                                    </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 font-weight-medium">
                                                                        Quarterly Report
                                                                    </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 font-weight-medium">
                                                                        Change in Directors
                                                                    </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="list align-items-center pt-3">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-0">
                                                                        <a href="#" class="fw-bold text-primary">Show all <i
                                                                                class="mdi mdi-arrow-right ms-2"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                                <h4 class="card-title card-title-dash">Activities</h4>
                                                                <p class="mb-0">20 finished, 5 remaining</p>
                                                            </div>
                                                            <ul class="bullet-line-list">
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>Just now</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="list align-items-center pt-3">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-0">
                                                                        <a href="#" class="fw-bold text-primary">Show all <i
                                                                                class="mdi mdi-arrow-right ms-2"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 d-flex flex-column">
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h4 class="card-title card-title-dash">Todo list</h4>
                                                                        <div class="add-items d-flex mb-0">
                                                                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                            <button
                                                                                class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i
                                                                                    class="mdi mdi-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="list-wrapper">
                                                                        <ul class="todo-list todo-list-rounded">
                                                                            <li class="d-block">
                                                                                <div class="form-check w-100">
                                                                                    <label class="form-check-label">
                                                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                        of the printing <i class="input-helper rounded"></i>
                                                                                    </label>
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                        <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                                        <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="d-block">
                                                                                <div class="form-check w-100">
                                                                                    <label class="form-check-label">
                                                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                        of the printing <i class="input-helper rounded"></i>
                                                                                    </label>
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="ps-4 text-small me-3">23 June 2020</div>
                                                                                        <div class="badge badge-opacity-success me-3">Done</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="form-check w-100">
                                                                                    <label class="form-check-label">
                                                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                        of the printing <i class="input-helper rounded"></i>
                                                                                    </label>
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                        <div class="badge badge-opacity-success me-3">Done</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="border-bottom-0">
                                                                                <div class="form-check w-100">
                                                                                    <label class="form-check-label">
                                                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                        of the printing <i class="input-helper rounded"></i>
                                                                                    </label>
                                                                                    <div class="d-flex mt-2">
                                                                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                        <div class="badge badge-opacity-danger me-3">Expired</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <h4 class="card-title card-title-dash">Type By Amount</h4>
                                                                    </div>
                                                                    <div>
                                                                        <canvas class="my-auto" id="doughnutChart"></canvas>
                                                                    </div>
                                                                    <div id="doughnutChart-legend" class="mt-5 text-center"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <div>
                                                                            <h4 class="card-title card-title-dash">Leave Report</h4>
                                                                        </div>
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                                        type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                                                        aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                                                    <h6 class="dropdown-header">week Wise</h6>
                                                                                    <a class="dropdown-item" href="#">Year Wise</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <canvas id="leaveReport"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <div>
                                                                            <h4 class="card-title card-title-dash">Top Performer</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <div
                                                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                            <div class="d-flex">
                                                                                <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg"
                                                                                     alt="profile">
                                                                                <div class="wrapper ms-3">
                                                                                    <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                                                    <small class="text-muted mb-0">162543</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted text-small">
                                                                                1h ago
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                            <div class="d-flex">
                                                                                <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg"
                                                                                     alt="profile">
                                                                                <div class="wrapper ms-3">
                                                                                    <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                                                    <small class="text-muted mb-0">162543</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted text-small">
                                                                                1h ago
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                            <div class="d-flex">
                                                                                <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg"
                                                                                     alt="profile">
                                                                                <div class="wrapper ms-3">
                                                                                    <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                                                    <small class="text-muted mb-0">162543</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted text-small">
                                                                                1h ago
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                            <div class="d-flex">
                                                                                <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg"
                                                                                     alt="profile">
                                                                                <div class="wrapper ms-3">
                                                                                    <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                                                    <small class="text-muted mb-0">162543</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted text-small">
                                                                                1h ago
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                            <div class="d-flex">
                                                                                <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg"
                                                                                     alt="profile">
                                                                                <div class="wrapper ms-3">
                                                                                    <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                                                    <small class="text-muted mb-0">Alaska, USA</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted text-small">
                                                                                1h ago
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/proBanner.js"></script>
<!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->

<script>
    'use strict'

    var gulp = require('gulp');
    var browserSync = require('browser-sync').create();
    // var sass = require('gulp-sass');
    const sass = require('gulp-sass')(require('sass'));
    var rename = require('gulp-rename');
    var del = require('del');
    var replace = require('gulp-replace');
    var injectPartials = require('gulp-inject-partials');
    var inject = require('gulp-inject');
    var sourcemaps = require('gulp-sourcemaps');
    var concat = require('gulp-concat');
    var merge = require('merge-stream');

    gulp.paths = {
        dist: 'dist',
    };

    var paths = gulp.paths;


    gulp.task('sass', function () {
        return gulp.src('./assets/scss/**/style.scss')
            .pipe(sourcemaps.init())
            .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
            .pipe(sourcemaps.write('./maps'))
            .pipe(gulp.dest('./assets/css'))
            .pipe(browserSync.stream());
    });

    // Static Server + watching scss/html files
    gulp.task('serve', gulp.series('sass', function() {

        browserSync.init({
            port: 3000,
            server: "../dist",
            ghostMode: false,
            notify: false
        });

        gulp.watch('../dist/assets/scss/**/*.scss', gulp.series('sass'));
        gulp.watch('../dist/pages/**/*.html').on('change', browserSync.reload);
        gulp.watch('../dist/assets/js/*.js').on('change', browserSync.reload);

    }));

    // Static Server without watching scss files
    gulp.task('serve:lite', function() {

        browserSync.init({
            server: "./",
            ghostMode: false,
            notify: false
        });

        gulp.watch('../dist/assets/css/**/*.css').on('change', browserSync.reload);
        gulp.watch('../dist/index.html').on('change', browserSync.reload);
        gulp.watch('../dist/pages/**/*.html').on('change', browserSync.reload);
        gulp.watch('../dist/assets/js/*.js').on('change', browserSync.reload);

    });



    gulp.task('sass:watch', function () {
        gulp.watch('./scss/**/*.scss');
    });


    /* inject partials like sidebar and navbar */
    gulp.task('injectPartial', function () {
        return gulp.src(["./pages/**/*.html", "./index.html"], {
            base: "./"
        })
            .pipe(injectPartials())
            .pipe(gulp.dest("."));
    });

    /* inject Js and CCS assets into HTML */
    gulp.task('injectCommonAssets', function () {
        return gulp.src('./**/*.html')
            .pipe(inject(gulp.src([
                './assets/vendors/feather/feather.css',
                './assets/vendors/mdi/css/materialdesignicons.min.css',
                './assets/vendors/ti-icons/css/themify-icons.css',
                './assets/vendors/typicons/typicons.css',
                './assets/vendors/simple-line-icons/css/simple-line-icons.css',
                './assets/vendors/css/vendor.bundle.base.css',
                './assets/vendors/js/vendor.bundle.base.js',
                './assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js',
            ], {read: false}), {name: 'plugins', relative: true}))
            .pipe(inject(gulp.src([
                './assets/css/*.css',
                './assets/js/off-canvas.js',
                './assets/js/hoverable-collapse.js',
                './assets/js/template.js',
                './assets/js/settings.js',
                './assets/js/todolist.js'
            ], {read: false}), {relative: true}))
            .pipe(gulp.dest('.'));
    });

    /* inject Js and CCS assets into HTML */
    gulp.task('injectLayoutStyles', function () {
        var verticalLightStream = gulp.src(['./**/*.html',
            './index.html'])
            .pipe(inject(gulp.src([
                './assets/css/vertical-layout-light/style.css',
            ], {read: false}), {relative: true}))
            .pipe(gulp.dest('.'));
        return merge(verticalLightStream);
    });

    /*replace image path and linking after injection*/
    gulp.task('replacePath', () => {
        var replacePath1 = gulp.src(['./pages/**/*.html'], { base: "./" })
            .pipe(replace('="../index.html', '="../../index.html'))
            .pipe(replace('="../assets', '="../../assets'))
            .pipe(replace('href="../pages/', 'href="../../pages/'))
            .pipe(gulp.dest('.'))
        return replacePath1
    })

    /*sequence for injecting partials and replacing paths*/
    gulp.task('inject', gulp.series('injectPartial' , 'injectCommonAssets' , 'injectLayoutStyles', 'replacePath'));

    gulp.task('clean:vendors', function () {
        return del([
            'assets/vendors/**/*'
        ]);
    });

    /*Building vendor scripts needed for basic template rendering*/
    gulp.task('buildBaseVendorScripts', function() {
        return gulp.src([
            '../node_modules/jquery/dist/jquery.min.js',
            // './node_modules/popper.js/dist/umd/popper.min.js',
            '../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
            '../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'
        ])
            .pipe(concat('vendor.bundle.base.js'))
            .pipe(gulp.dest('./assets/vendors/js'));
    });

    /*Building vendor styles needed for basic template rendering*/
    gulp.task('buildBaseVendorStyles', function() {
        return gulp.src(['../node_modules/perfect-scrollbar/css/perfect-scrollbar.css'])
            .pipe(concat('vendor.bundle.base.css'))
            .pipe(gulp.dest('./assets/vendors/css'));
    });

    /*Scripts for addons*/
    gulp.task('copyAddonsScripts', function() {
        var aScript1 = gulp.src(['../node_modules/chart.js/dist/Chart.min.js'])
            .pipe(gulp.dest('./assets/vendors/chart.js'));
        var aScript2 = gulp.src(['../node_modules/jquery-bar-rating/dist/jquery.barrating.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aScript3 = gulp.src(['../node_modules/jquery-sparkline/jquery.sparkline.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-sparkline'));
        var aScript4 = gulp.src(['../node_modules/progressbar.js/dist/progressbar.min.js'])
            .pipe(gulp.dest('./assets/vendors/progressbar.js'));
        var aScript5 = gulp.src(['../node_modules/moment/moment.js'])
            .pipe(gulp.dest('./assets/vendors/moment'));
        var aScript18 = gulp.src(['../node_modules/morris.js/morris.min.js'])
            .pipe(gulp.dest('./assets/vendors/morris.js'));
        var aScript19 = gulp.src(['../node_modules/raphael/raphael.min.js'])
            .pipe(gulp.dest('./assets/vendors/raphael'));
        var aScript20 = gulp.src(['../node_modules/jquery-tags-input/dist/jquery.tagsinput.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-tags-input'));
        var aScript21 = gulp.src(['../node_modules/progressbar.js/dist/progressbar.min.js'])
            .pipe(gulp.dest('./assets/vendors/progressbar.js'));
        var aScript22 = gulp.src(['../node_modules/summernote/dist/**/*'])
            .pipe(gulp.dest('./assets/vendors/summernote/dist'));
        var aScript23 = gulp.src(['../node_modules/pwstabs/assets/jquery.pwstabs.min.js'])
            .pipe(gulp.dest('./assets/vendors/pwstabs'));
        var aScript24 = gulp.src(['../node_modules/ace-builds/src-min/**/*'])
            .pipe(gulp.dest('./assets/vendors/ace-builds/src-min'));
        var aScript27 = gulp.src(['../node_modules/dropify/dist/js/dropify.min.js'])
            .pipe(gulp.dest('./assets/vendors/dropify'));
        var aScript28 = gulp.src(['../node_modules/dropzone/dist/dropzone.js'])
            .pipe(gulp.dest('./assets/vendors/dropzone'));
        var aScript29 = gulp.src(['../node_modules/jquery-file-upload/js/jquery.uploadfile.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-file-upload'));
        var aScript30 = gulp.src(['../node_modules/jquery-asColor/dist/jquery-asColor.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-asColor'));
        var aScript31 = gulp.src(['../node_modules/jquery-asGradient/dist/jquery-asGradient.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-asGradient'));
        var aScript32 = gulp.src(['../node_modules/jquery-asColorPicker/dist/jquery-asColorPicker.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-asColorPicker'));
        var aScript33 = gulp.src(['../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'])
            .pipe(gulp.dest('./assets/vendors/bootstrap-datepicker'));
        var aScript34 = gulp.src(['../node_modules/moment/min/moment.min.js'])
            .pipe(gulp.dest('./assets/vendors/moment'));
        var aScript35 = gulp.src(['../node_modules/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js'])
            .pipe(gulp.dest('./assets/vendors/x-editable'));
        var aScript36 = gulp.src(['../node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js'])
            .pipe(gulp.dest('./assets/vendors/tempusdominus-bootstrap-4'));
        var aScript37 = gulp.src(['../node_modules/jquery.repeater/jquery.repeater.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery.repeater'));
        var aScript38 = gulp.src(['../node_modules/typeahead.js/dist/typeahead.bundle.min.js'])
            .pipe(gulp.dest('./assets/vendors/typeahead.js'));
        var aScript39 = gulp.src(['../node_modules/select2/dist/js/select2.min.js'])
            .pipe(gulp.dest('./assets/vendors/select2'));
        var aScript43 = gulp.src(['../node_modules/quill/dist/quill.min.js'])
            .pipe(gulp.dest('./assets/vendors/quill'));
        var aScript44 = gulp.src(['../node_modules/simplemde/dist/simplemde.min.js'])
            .pipe(gulp.dest('./assets/vendors/simplemde'));
        var aScript45 = gulp.src(['../node_modules/jquery-validation/dist/jquery.validate.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-validation'));
        var aScript55 = gulp.src(['../node_modules/datatables.net/js/jquery.dataTables.js'])
            .pipe(gulp.dest('./assets/vendors/datatables.net'));
        var aScript56 = gulp.src(['../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'])
            .pipe(gulp.dest('./assets/vendors/datatables.net-bs4'));
        var aScript57 = gulp.src(['../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'])
            .pipe(gulp.dest('./assets/vendors/datatables.net-bs4'));
        var aScript60 = gulp.src(['../node_modules/clipboard/dist/clipboard.min.js'])
            .pipe(gulp.dest('./assets/vendors/clipboard'));
        var aScript61 = gulp.src(['../node_modules/colcade/colcade.js'])
            .pipe(gulp.dest('./assets/vendors/colcade'));
        var aScript64 = gulp.src(['../node_modules/jquery-toast-plugin/dist/jquery.toast.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery-toast-plugin'));
        var aScript65 = gulp.src(['../node_modules/twbs-pagination/jquery.twbsPagination.min.js'])
            .pipe(gulp.dest('./assets/vendors/twbs-pagination'));
        var aScript66 = gulp.src(['../node_modules/sweetalert/dist/sweetalert.min.js'])
            .pipe(gulp.dest('./assets/vendors/sweetalert'));
        var aScript67 = gulp.src(['../node_modules/jquery.avgrund/jquery.avgrund.min.js'])
            .pipe(gulp.dest('./assets/vendors/jquery.avgrund'));
        var aScript69 = gulp.src(['../node_modules/ion-rangeslider/js/ion.rangeSlider.min.js'])
            .pipe(gulp.dest('./assets/vendors/ion-rangeslider/js'));
        var aScript70 = gulp.src(['../node_modules/tinymce/**/*'])
            .pipe(gulp.dest('./assets/vendors/tinymce'));
        return merge(aScript1, aScript2, aScript3, aScript4, aScript5, aScript18, aScript19, aScript20, aScript21, aScript22, aScript23, aScript24, aScript27, aScript28, aScript29, aScript30, aScript31, aScript32, aScript33, aScript34, aScript35, aScript36, aScript37, aScript38, aScript39, aScript43, aScript44, aScript45, aScript55, aScript56, aScript57, aScript60, aScript61, aScript64, aScript65, aScript66, aScript67, aScript69, aScript70);
    });


    /*Styles for addons*/
    gulp.task('copyAddonsStyles', function() {
        var aStyle1 = gulp.src(['../node_modules/@mdi/font/css/materialdesignicons.min.css'])
            .pipe(gulp.dest('./assets/vendors/mdi/css'));
        var aStyle2 = gulp.src(['../node_modules/@mdi/font/fonts/*'])
            .pipe(gulp.dest('./assets/vendors/mdi/fonts'));
        var aStyle3 = gulp.src(['../node_modules/font-awesome/css/font-awesome.min.css'])
            .pipe(gulp.dest('./assets/vendors/font-awesome/css'));
        var aStyle4 = gulp.src(['../node_modules/font-awesome/fonts/*'])
            .pipe(gulp.dest('./assets/vendors/font-awesome/fonts'));
        var aStyle5 = gulp.src(['../node_modules/flag-icon-css/css/flag-icons.min.css'])
            .pipe(gulp.dest('./assets/vendors/flag-icon-css/css'));
        var aStyle6 = gulp.src(['../node_modules/flag-icon-css/flags/**/*'])
            .pipe(gulp.dest('./assets/vendors/flag-icon-css/flags'));
        var aStyle7 = gulp.src(['../node_modules/simple-line-icons/css/simple-line-icons.css'])
            .pipe(gulp.dest('./assets/vendors/simple-line-icons/css'));
        var aStyle8 = gulp.src(['../node_modules/simple-line-icons/fonts/*'])
            .pipe(gulp.dest('./assets/vendors/simple-line-icons/fonts'));
        var aStyle9 = gulp.src(['../node_modules/ti-icons/css/themify-icons.css'])
            .pipe(gulp.dest('./assets/vendors/ti-icons/css'));
        var aStyle10 = gulp.src(['../node_modules/ti-icons/fonts/*'])
            .pipe(gulp.dest('./assets/vendors/ti-icons/fonts'));
        var aStyle15 = gulp.src(['../node_modules/jquery-tags-input/dist/jquery.tagsinput.min.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-tags-input'));
        var aStyle16 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle17 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-1to10.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle18 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-horizontal.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle19 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-movie.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle20 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-pill.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle21 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-reversed.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle22 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bars-square.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle23 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/bootstrap-stars.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle24 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/css-stars.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle25 = gulp.src(['../node_modules/jquery-bar-rating/dist/themes/fontawesome-stars-o.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle26 = gulp.src(['../node_modules/jquery-bar-rating/examples/css/examples.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var aStyle27 = gulp.src(['../node_modules/dropify/dist/css/dropify.min.css'])
            .pipe(gulp.dest('./assets/vendors/dropify'));
        var aStyle28 = gulp.src(['../node_modules/jquery-file-upload/css/uploadfile.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-file-upload'));
        var aStyle29 = gulp.src(['../node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'])
            .pipe(gulp.dest('./assets/vendors/tempusdominus-bootstrap-4'));
        var aStyle30 = gulp.src(['../node_modules/jquery-asColorPicker/dist/css/asColorPicker.min.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-asColorPicker/css'));
        var aStyle31 = gulp.src(['../node_modules/jquery-asColorPicker/dist/images/*'])
            .pipe(gulp.dest('./assets/vendors/jquery-asColorPicker/images'));
        var aStyle32 = gulp.src(['../node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'])
            .pipe(gulp.dest('./assets/vendors/bootstrap-datepicker'));
        var aStyle33 = gulp.src(['../node_modules/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css'])
            .pipe(gulp.dest('./assets/vendors/x-editable'));
        var aStyle34 = gulp.src(['../node_modules/select2/dist/css/select2.min.css'])
            .pipe(gulp.dest('./assets/vendors/select2'));
        var aStyle35 = gulp.src(['../node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css'])
            .pipe(gulp.dest('./assets/vendors/select2-bootstrap-theme'));
        var aStyle38 = gulp.src(['../node_modules/dropify/dist/css/dropify.min.css'])
            .pipe(gulp.dest('./assets/vendors/dropify'));
        var aStyle39 = gulp.src(['../node_modules/quill/dist/quill.snow.css'])
            .pipe(gulp.dest('./assets/vendors/quill'));
        var aStyle40 = gulp.src(['../node_modules/simplemde/dist/simplemde.min.css'])
            .pipe(gulp.dest('./assets/vendors/simplemde'));
        var aStyle42 = gulp.src(['../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'])
            .pipe(gulp.dest('./assets/vendors/datatables.net-bs4'));
        var aStyle49 = gulp.src(['../node_modules/jquery-toast-plugin/dist/jquery.toast.min.css'])
            .pipe(gulp.dest('./assets/vendors/jquery-toast-plugin'));
        var aStyle51 = gulp.src(['../node_modules/ion-rangeslider/css/ion.rangeSlider.css'])
            .pipe(gulp.dest('./assets/vendors/ion-rangeslider/css'));
        var aStyle52 = gulp.src(['../node_modules/dropzone/dist/dropzone.css'])
            .pipe(gulp.dest('./assets/vendors/dropzone'));
        var aStyle53 = gulp.src(['../node_modules/ion-rangeslider/img/*'])
            .pipe(gulp.dest('./assets/vendors/ion-rangeslider/img'));
        var aStyle54 = gulp.src(['../node_modules/pwstabs/assets/jquery.pwstabs.min.css'])
            .pipe(gulp.dest('./assets/vendors/pwstabs'));
        var aStyle56 = gulp.src(['../node_modules/puse-icons-feather/feather.css'])
            .pipe(gulp.dest('./assets/vendors/feather'));
        var aStyle57 = gulp.src(['../node_modules/puse-icons-feather/fonts/*'])
            .pipe(gulp.dest('./assets/vendors/feather/fonts'));
        var aStyle58 = gulp.src(['../node_modules/typicons.font/src/font/*'])
            .pipe(gulp.dest('./assets/vendors/typicons'));
        return merge(aStyle1, aStyle2, aStyle3, aStyle4, aStyle5, aStyle6, aStyle7, aStyle8, aStyle9, aStyle10, aStyle15, aStyle16, aStyle17, aStyle18, aStyle19, aStyle20, aStyle21, aStyle22, aStyle23, aStyle24, aStyle25, aStyle26, aStyle27, aStyle28, aStyle29, aStyle30, aStyle31, aStyle32, aStyle33, aStyle34, aStyle35, aStyle38, aStyle39, aStyle40, aStyle42, aStyle49, aStyle51, aStyle52, aStyle53, aStyle54, aStyle56, aStyle57,aStyle58);
    });

    //Copy essential map files
    gulp.task('copyMapFiles', function() {
        var map1 = gulp.src('../node_modules/bootstrap/dist/js/bootstrap.min.js.map')
            .pipe(gulp.dest('./assets/vendors/js'));
        var map2 = gulp.src('../node_modules/@mdi/font/css/materialdesignicons.min.css.map')
            .pipe(gulp.dest('./assets/vendors/mdi/css'));
        var map3 = gulp.src('../node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.css.map')
            .pipe(gulp.dest('./assets/vendors/jquery-contextmenu'));
        var map4 = gulp.src('../node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-contextmenu'));
        var map5 = gulp.src('../node_modules/jquery-asColorPicker/dist/jquery-asColorPicker.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-asColorPicker'));
        var map6 = gulp.src('../node_modules/jquery-asColorPicker/dist/css/asColorPicker.min.css.map')
            .pipe(gulp.dest('./assets/vendors/jquery-asColorPicker/css'));
        var map7 = gulp.src('../node_modules/jquery-asColor/dist/jquery-asColor.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-asColor'));
        var map8 = gulp.src('../node_modules/jquery-bar-rating/dist/jquery.barrating.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        var map9 = gulp.src('../node_modules/jquery-asGradient/dist/jquery-asGradient.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-asGradient'));
        var map10 = gulp.src('../node_modules/quill/dist/quill.min.js.map')
            .pipe(gulp.dest('./assets/vendors/quill'));
        var map12 = gulp.src('../node_modules/jquery-bar-rating/dist/jquery.barrating.min.js.map')
            .pipe(gulp.dest('./assets/vendors/jquery-bar-rating'));
        return merge(map1, map2, map3, map4, map5, map6, map7, map8, map9, map10, map12);
    });

    // necessary build files to
    gulp.task('copyAssets', () => {
        return gulp.src('./assets/**/*').pipe(gulp.dest('../dist/assets/'))
    })

    gulp.task('copyHTML', () => {
        return gulp.src('./pages/**/*.html').pipe(gulp.dest('../dist/pages/'))
    })

    gulp.task('copyIndex', () => {
        return gulp.src('./index.html').pipe(gulp.dest('../dist/'))
    })

    gulp.task('build', gulp.series('copyAssets', 'copyHTML', 'copyIndex'))


    /*sequence for building vendor scripts and styles*/
    gulp.task('bundleVendors', gulp.series('clean:vendors', 'buildBaseVendorStyles','buildBaseVendorScripts', 'copyAddonsStyles', 'copyAddonsScripts', 'copyMapFiles'));

    gulp.task('default', gulp.series('serve'));
</script>
</body>

</html>

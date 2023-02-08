<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>
        Dashboard
        - Customer


    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="ht" name="author" />

    <meta name="csrf-token" content="oKN0fbAvgNHFvRpgM5qCercHJZpClnhIUAvAw6jg">
    <meta name="file-url" content="http://pulsense.us/uploads/images">
    <meta name="app-url" content="http://pulsense.us">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="http://pulsense.us/assets/images/aiq-logo.png">

    <link rel="stylesheet" href="http://pulsense.us/assets/libs/selectize/css/selectize.bootstrap3.css">
    <link href="http://pulsense.us/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap css -->
    <link href="http://pulsense.us/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="http://pulsense.us/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="http://pulsense.us/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="http://pulsense.us/assets/js/head.js"></script>

    <link href="http://pulsense.us/assets/css/hamburgers.css" rel="stylesheet">

    <!-- Sweet Alert-->
    <link href="http://pulsense.us/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <meta content="oKN0fbAvgNHFvRpgM5qCercHJZpClnhIUAvAw6jg" id="csrf-token">
    <meta content="" id="file-url">
    <meta content="http://pulsense.us" id="app-url">


    <link rel="stylesheet" href="http://pulsense.us/assets/libs/mohithg-switchery/switchery.min.css">

    <link rel="stylesheet" href="http://pulsense.us/assets/css/custom.css">



    <style>
        hr {
            border: 0.1px solid #000;
        }

        .btn:hover {
            background-color: #fff !important;
            color: #019ee3;
            border-color: #019ee3
        }

        .swal2-modal .swal2-confirm {
            background-color: #019ee3 !important;
        }

        .swal2-icon.swal2-question {
            color: #019ee3 !important;
            border-color: #019ee3 !important;
        }

        .navbar-custom .button-dashboard {
            border: none;
            color: #4d709d;
            display: inline-block;
            height: 70px;
            line-height: 70px;
            width: 60px;
            background-color: transparent;
            font-size: 24px;
            cursor: pointer;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #5897fb;
            color: #fff;
        }

        .select2-container--default .select2-results__option[aria-selected=true]:hover {
            background-color: #5897fb;
            color: #fff;
        }

        .select2-selection__rendered {
            color: #000;
            background-color: #fbf9f9;
            border-color: #ece8e8;
        }

        /* #sidebar-menu>ul>li>a svg.feather.feather-home {
            color: #fff !important;
        } */

        body[data-leftbar-size=condensed] .left-side-menu #sidebar-menu>ul>li>a:active,
        body[data-leftbar-size=condensed] .left-side-menu #sidebar-menu>ul>li>a:focus,
        body[data-leftbar-size=condensed] .left-side-menu #sidebar-menu>ul>li>a:hover {
            color: #019ee3;
        }
    </style>
    <!-- Plugins css -->
    <link href="http://pulsense.us/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://pulsense.us/assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/@trevoreyre/autocomplete-js/dist/style.css" />
    <style>
        .searchList ul {


            width: auto;

            font-size: 12px;
            color: #333333;
            list-style: none;
            padding: 8px;
            z-index: 1000;
            border-bottom-right-radius: 5px;
            background: #ffffff;

            border-bottom-left-radius: 5px;
        }
    </style>
</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark"
    data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="fe-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>

                                <!-- item-->


                                <!-- item-->


                                <!-- item-->


                                <!-- item-->


                                <!-- item-->


                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-notify"></i>
                                    </div>
                                    <p class="notify-details">No notification found.

                                    </p>
                                </a>
                            </div>

                            <!-- All-->


                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="http://pulsense.us/general/setting" class="nav-link waves-effect waves-light">
                            <i class="fe-settings noti-icon" style="font-weight: 100!important;"></i>
                        </a>
                    </li>
                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-toggle="fullscreen" href="#">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">

                            <img src="  http://pulsense.us/assets/images/logo-aiq.png" alt="user-image"
                                class="rounded-circle" style="height:54px;width:59px;">

                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome ! Dallas ISD</h6>
                            </div>

                            <!-- item-->


                            <!-- item-->


                            <!-- item-->
                            <a href="http://pulsense.us/profile" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="http://pulsense.us/logout" class="dropdown-item notify-item"
                                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="http://pulsense.us/logout" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_token"
                                    value="oKN0fbAvgNHFvRpgM5qCercHJZpClnhIUAvAw6jg">
                            </form>
                        </div>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="http://pulsense.us/dashboard" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="http://pulsense.us/assets/images/aiq-logo.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="http://pulsense.us/assets/images/aiq-logo.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="http://pulsense.us/dashboard" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="http://pulsense.us/assets/images/aiq-logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://pulsense.us/assets/images/aiq-logo.png" alt="" height="60">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>

                        <button class="button-dashboard hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>

                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->
        <!-- Topbar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul id="side-menu">
                        <li class="has_sub ">
                            <a href="http://pulsense.us/dashboard" class="waves-effect ">
                                <i data-feather=grid class=""></i>
                                <span> Dashboard</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/pm-schedule" class="waves-effect ">
                                <i data-feather=clock class=""></i>
                                <span> PM Schedules</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/building" class="waves-effect ">
                                <i data-feather=box class=""></i>
                                <span> Buildings</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/warehouse" class="waves-effect ">
                                <i data-feather=square class=""></i>
                                <span> Warehouse</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/quotation" class="waves-effect ">
                                <i data-feather=folder-plus class=""></i>
                                <span> Quotations</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/system-user" class="waves-effect ">
                                <i data-feather=users class=""></i>
                                <span> System Users</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/vendor" class="waves-effect ">
                                <i data-feather=users class=""></i>
                                <span> Vendors</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/technician" class="waves-effect ">
                                <i data-feather=users class=""></i>
                                <span> Technicians</span>
                            </a>
                        </li>
                        <li class="has_sub ">
                            <a href="http://pulsense.us/broadcast-alert" class="waves-effect ">
                                <i data-feather=alert-octagon class=""></i>
                                <span> Broadcast Alert</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="col-lg-12">
                                <div class="card" style="width:100%;">
                                    <div class="card-header card-custom justify-content-between"
                                        style="border-top-left-radius: 15px; border-top-right-radius: 15px;border-bottom:0.5px solid #4D709D;display: flex; padding:0px 20px;">
                                        <h4 style="color: #4d709d; font-size: 14px; font-weight:600; margin:14px 0px;">
                                            System View</h4>
                                        <select id="location" class="form-control fa-1x border-0 "
                                            style="color:#019ee3 !important;width:35%;">
                                            <option value="">Location</option>

                                            <option value="44">
                                                Texas</option>
                                            <option value="5">
                                                California</option>
                                        </select>

                                    </div>
                                    <div class="card-body card-custom"
                                        style="border-bottom-left-radius: 15px;border-bottom-right-radius: 15px; padding:5px 0px; min-height: 195px;">
                                        <div class="row text-center ">
                                            <div class="col-md-6">
                                                <h4 class="">OVERALL</h4>
                                                <div id='overall'>

                                                    <div id="overall-chart" class="chart chart-big" data-percent="0">

                                                        <span><b style="font-size: 36px;" id='overall_percent'>0%</b>
                                                        </span>
                                                    </div>
                                                    <br> <strong id="overall_text"
                                                        style="color: #01a1e7;font-size: 17px;"> 0 out of
                                                        0</strong>

                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <h4 class="">PM CSA</h4>
                                                <div id='pm_csa'>

                                                    <div id="pm_csa-chart" class="chart chart-big" data-percent="0">

                                                        <span><b style="font-size: 36px;" id='pm_csa_percent'>0%</b>
                                                        </span>
                                                    </div>
                                                    <br>
                                                    <strong id="pm_csa_text" style="color: #01a1e7;font-size: 17px;">0
                                                        out
                                                        of 0</strong>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div> <!-- end card -->
                            </div>
                            <div class="col-lg-12">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body card-custom"
                                        style="border-radius:15px; padding: 30px 17px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4
                                                    style="color: #4d709d;font-size: 14px;font-weight: 600;padding-bottom: 7px;padding-top: 0;margin-top: -8px;">
                                                    Fahrenheit</h4>
                                                <div class="box border p-2" style="color: #019ee3;">
                                                    <img src="http://pulsense.us/assets/images/thermameter.png"
                                                        width="30" height="30" alt=""> &nbsp;&nbsp;
                                                    <span id="temperature"
                                                        style="font-weight: 600;
                                            font-size: 16px;"></span>
                                                    <i class=" wi wi-fahrenheit"
                                                        style="font-weight: 600;
                                            font-size: 21px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4
                                                    style="color: #4d709d;font-size: 14px;font-weight: 600; margin-top: -8px;padding-bottom: 7px;">
                                                    Humidity
                                                </h4>
                                                <div class="box border p-2" style="color: #019ee3;">
                                                    <img src="http://pulsense.us/assets/images/humanity.png "
                                                        width="30" height="30" alt=""> &nbsp;&nbsp;
                                                    <span id="humidity"
                                                        style="font-weight: 600;
                                            font-size: 16px;"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header card-custom"
                                        style="border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom: 0.5px solid #4D709D; display: flex; padding: 0px 20px;">

                                        <h4 style="color: #4d709d;font-size: 14px;font-weight: 600; margin: 14px 0px;">
                                            Project Cost
                                            Performance

                                        </h4>
                                    </div>
                                    <div class="card-body card-custom"
                                        style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 0;">
                                        <div class="row pt-2">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6 text-center">
                                                        <h4 style="color: #4d709d;">$ 534,000
                                                        </h4>
                                                        Total Budget

                                                        <h4 style="color: #4d709d;display: flex;flex-direction: column;align-items: center;"
                                                            id="actual_cost">




                                                        </h4>
                                                        <div id="exceed_error"></div>
                                                        Actual Cost

                                                    </div>

                                                    <div class="col-md-6 text-center gauge-div">
                                                        <canvas id="gauge"></canvas>

                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <a href="http://pulsense.us/jobs/in-process">
                                    <div class="card">

                                        <div class="card-body text-white rounded-4"
                                            style="background: #28a745;padding: 4px 20px;">

                                            <div class="row">
                                                <div class="col-md-12">

                                                    <span><img class="pb-1"
                                                            src="http://pulsense.us/assets/images/process-pm.png"
                                                            alt=""></span>
                                                    <span class="font-36" id="job_inprocess_count"> </span>
                                                    <span style="vertical-align: super;font-weight:700">JOBS in
                                                        Process</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div> <!-- end card -->
                                </a>

                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-left">
                                    <ol class="breadcrumb m-0 py-2">
                                        <li class="breadcrumb-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg><a href="javascript: void(0);"></a></li>
                                        <li class="breadcrumb-item active" style="padding-top: 3px;"><a
                                                href="javascript: void(0);">Dashboard</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div> --}}

                        <!-- end page title -->

                        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-header card-custom"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom: 0.5px solid #4D709D; display: flex; padding: 0px 20px;">
                                            <h4
                                                style="color: #4d709d;font-size: 14px;font-weight: 600; margin: 14px 0px;">
                                                Broadcast Alert
                                            </h4>
                                        </div>
                                        <div class="card-body card-custom"
                                            style="border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                padding: 0;">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="carouselExampleIndicators" class="carousel slide"
                                                        data-bs-ride="carousel">

                                                        <div class="carousel-inner" style="height: 195px;">
                                                            <div class="carousel-item  active ">
                                                                <div class="alert-content p-2" style="">
                                                                    <h3
                                                                        style="color: #019ee3; font-weight: 700;
                                                                font-size: 16px;">
                                                                        Severe Weather Alert</h3>

                                                                    <p
                                                                        style="font-weight: 600;
                                                                font-size: 12px; color:black;">
                                                                        Tornado warning! Take Shelter</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <div class="alert-content p-2" style="">
                                                                    <h3
                                                                        style="color: #019ee3; font-weight: 700;
                                                                font-size: 16px;">
                                                                        Annual Holidays Schedule</h3>

                                                                    <p
                                                                        style="font-weight: 600;
                                                                font-size: 12px; color:black;">
                                                                        Presidents’ Day: Monday, February 20
                                                                        Memorial Day: Monday, May 29
                                                                        Juneteenth: Friday, June 16
                                                                        Independence Day: Tuesday, July 4
                                                                        Labor Day: Monday, September 4
                                                                        Indigenous Peoples’ Day (also observed as
                                                                        Columbus
                                                                        Day):
                                                                        Monday, October 9
                                                                        Veterans’ Day: Saturday, November 11 (Observed
                                                                        Friday,
                                                                        November 10)
                                                                        Thanksgiving: Thursday, November 23
                                                                        Christmas: Monday, December 25</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-indicators">
                                                            <button type="button"
                                                                data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="0" class=" active "
                                                                aria-current="true" aria-label="Slide 1">

                                                            </button>
                                                            <button type="button"
                                                                data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="1" class=""
                                                                aria-current="true" aria-label="Slide 1">

                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div> <!-- end card -->
                                </div> <!-- end col-->
                                <div class="col-lg-6">
                                    <div class="weathercard">
                                        <div class="card" style="width: 100%;min-height: 239px;">
                                            <div class="card-header card-custom"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px; display: flex; padding: 0px 20px; z-index:99;">
                                                <h4
                                                    style="color: #1f567c; font-size: 14px; font-weight: 600; margin: 14px 0px">
                                                    Weather
                                                </h4>
                                            </div>
                                            <div class="card-body  p-0"
                                                style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 0; background-color: #1f567c;">

                                                <a class="weatherwidget-io weather_data"
                                                    style="margin-top: -15px; z-index: 0; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;"
                                                    data-theme="original"></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-header card-custom"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom: 0.5px solid #4D709D; display: flex; padding: 0px 20px;">


                                            <select name="" id="region"
                                                class="form-control fa-1x border-0 fw-medium"
                                                style="color:#019ee3 !important;width:15%;">
                                                <option value=" ">Region</option>
                                                <option value="all">All Region</option>
                                                <option value="25">NE</option>
                                                <option value="26">SW</option>
                                                <option value="27">NW</option>
                                                <option value="28">SE</option>
                                                <option value="31">OTHERS</option>
                                            </select>

                                        </div>
                                        <div class="card-body card-custom"
                                            style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 0; height: 235px;overflow:hidden;">
                                            <div class="text-center">
                                                <div class="owl-carousel owl-theme categories">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <!-- end row -->


                                <div class="col-lg-6">
                                    <div class="card" style="width: 100%;min-height: 213px;">
                                        <div class="card-header card-custom"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom: 0.5px solid #4D709D; display: flex; padding: 0px 20px;">

                                            <h4
                                                style="color: #4d709d;font-size: 14px;font-weight: 600; margin: 14px 0px;">
                                                Search

                                            </h4>
                                        </div>
                                        <div class="card-body card-custom"
                                            style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding: 0;">
                                            <div class="row">
                                                <div class="form-group m-4 w-50">


                                                    <label for="" class="mb-1">Building name</label>
                                                    <div class="input-group">
                                                        <input list="searchList" type="text"
                                                            class="form-control query" placeholder="Search...">

                                                        <button class="btn input-group-text" id="search">
                                                            <i class="fe-search"></i>
                                                        </button>

                                                    </div>
                                                    <div class="searchList" id="searchList">
                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card" style="width: 100%;">

                                        <div class="card-body card-custom"
                                            style="border-radius: 15px; padding: 5px 0;">
                                            <div class="row text-center">
                                                <div class="col-md-6">
                                                    <h4 class="mb-3 text-center"
                                                        style="padding-left:35px; font-weight: 600;
                                            font-size: 18px;">
                                                        Avg. days to complete </h4>
                                                    <div id='avg_day'>

                                                        <div id="avg_day-chart" class="chart chart-big"
                                                            data-percent="0">

                                                            <span
                                                                style="font-weight: 700;
                                                    font-size: 20px;"><b>Total</b>
                                                                <br> 0</span>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="mb-3 text-center"
                                                        style="padding-left:35px; font-weight: 600;
                                            font-size: 18px;">
                                                        Total time spent on PM</h4>

                                                    <div id='total_pm'>
                                                        <div id="total_pm-chart" class="chart chart-big"
                                                            data-percent="0">

                                                            <span
                                                                style="font-weight: 700;
                                                        font-size: 20px;"><b
                                                                    id='total_pm_percent'>Total </b> <br>
                                                                0</span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <!-- end row -->


                                <!-- end col-->
                                <div class="col-lg-6">
                                    <a href="http://pulsense.us/upcoming/building/pm">
                                        <div class="card">

                                            <div class="card-body text-white rounded-4"
                                                style="background: #ffc107;padding: 4px 20px;">

                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <span><img class="pb-1"
                                                                src="http://pulsense.us/assets/images/up-pm.png"
                                                                alt=""></span>
                                                        <span class="font-36" id="upcoming"></span>
                                                        <span style="vertical-align: super;font-weight:700"> UPCOMING
                                                            buildings
                                                            for
                                                            PM</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div> <!-- end card -->
                                    </a>

                                </div><!-- end col-->
                                <div class="col-lg-6">
                                    <a href="http://pulsense.us/overdue/building/pm">
                                        <div class="card">

                                            <div class="card-body text-white rounded-4"
                                                style="background: #dc3545;padding: 4px 20px;">

                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <span><img class="pb-1"
                                                                src="http://pulsense.us/assets/images/ov-pm.png"
                                                                alt=""></span>
                                                        <span class="font-36" id="overdue_count"> </span>
                                                        <span style="vertical-align: super;font-weight:700">OVERDUE
                                                            buildings
                                                            for PM</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div> <!-- end card -->
                                    </a>

                                </div><!-- end col-->
                            </div>

                        </div>

                        
                    </div> <!-- container -->

                </div> <!-- content -->



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
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
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
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->

    </div>
    <!-- Vendor js -->
    <script src="http://pulsense.us/assets/js/vendor.min.js"></script>

    <!-- KNOB JS -->
    <script src="http://pulsense.us/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- App js-->
    <script src="http://pulsense.us/assets/js/app.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="http://pulsense.us/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

    <script src="http://pulsense.us/assets/js/pages/axios.min.js"></script>

    <!-- Switchery js -->
    <script src="http://pulsense.us/assets/libs/mohithg-switchery/switchery.min.js"></script>

    <script src="http://pulsense.us/assets/libs/select2/js/select2.min.js"></script>

    <!-- Moment js -->
    <script src="http://pulsense.us/assets/libs/moment/min/moment.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Plugins js-->
    <script src="http://pulsense.us/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="http://pulsense.us/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Third Party js-->
    <script src="http://pulsense.us/assets/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="http://pulsense.us/assets/js/gauge.min.js"></script>
    <script src="http://pulsense.us/assets/js/jquery.easy-pie-chart.js"></script>

    <script id="weatherwidget-io-js" src="https://weatherwidget.io/js/widget.min.js"></script>
    <script src='https://unpkg.com/@trevoreyre/autocomplete-js'></script>
    <script>
        function search_autocomplete(res) {
            // console.log('res - current',res);
            new Autocomplete('#autocomplete', {
                search: input => {
                    if (input.length < 1) {
                        return []
                    }
                    return res.filter(data => {
                        return data.toLowerCase()
                            .startsWith(input.toLowerCase())
                        // return data
                    })
                }
            })
            // console.log('res - current-end',res);
        }
        $(document).ready(function() {







            if (localStorage.getItem("location_id") != null) {

                $('#location').val(localStorage.getItem("location_id"))

            }


            $('#overall-chart').easyPieChart({
                size: 300,
                scaleColor: "transparent",
                trackColor: '#D6DBDF',
                barColor: '#00B74A',
                scaleLength: 2,
                // lineCap: 'butt', //Can be butt
                size: 260,
                // barColor: function() {
                //     var ctx = this.renderer.getCtx();
                //     var canvas = this.renderer.getCanvas();
                //     var gradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
                //     gradient.addColorStop(0, "#24cdea");
                //     gradient.addColorStop(1, "#274dd5");
                //     return gradient;
                // },
                lineWidth: 11,
                animate: 1000
            });
            $('#pm_csa-chart').easyPieChart({
                size: 300,
                scaleColor: "transparent",
                barColor: '#00B74A',
                trackColor: '#D6DBDF',
                scaleLength: 2,
                // lineCap: 'butt', //Can be butt
                size: 260,
                // barColor: function() {
                //     var ctx = this.renderer.getCtx();
                //     var canvas = this.renderer.getCanvas();
                //     var gradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
                //     gradient.addColorStop(0, "#59fdbe");
                //     gradient.addColorStop(1, "#84ff3c");
                //     return gradient;
                // },
                lineWidth: 11,
                animate: 1000
            });
            $('#avg_day-chart').easyPieChart({
                size: 300,
                scaleColor: "transparent",
                barColor: '#00B74A',
                trackColor: '#D6DBDF',
                scaleLength: 2,
                lineCap: 'butt', //Can be butt
                size: 160,
                lineWidth: 20,
                animate: 1000
            });

            $('#total_pm-chart').easyPieChart({
                size: 300,
                scaleColor: "transparent",
                barColor: '#00B74A',
                trackColor: '#D6DBDF',
                scaleLength: 2,
                lineCap: 'butt', //Can be butt
                size: 160,
                lineWidth: 20,
                animate: 1000
            });

            var opts = {
                angle: -0.1, /// The span of the gauge arc
                lineWidth: 0.1,
                radiusScale: 1, // The line thickness
                pointer: {
                    length: 0.4, // Relative to gauge radius
                    strokeWidth: 0.035 // The thickness
                },
                colorStart: '#6936c3', // Colors
                colorStop: '#6936c3', // just experiment with them
                strokeColor: '#E0E0E0',
                generateGradient: true,
                highDpiSupport: true,
                staticLabels: {
                    font: "10px sans-serif", // Specifies font
                    labels: [0, 106800, 213600, 320400, 427200, 534000], // Print labels at these values
                    color: "#000000", // Optional: Label text color
                    fractionDigits: 0 // Optional: Numerical precision. 0=round off.
                },
                staticZones: [{
                    "strokeStyle": "#3e50a6",
                    "min": 0,
                    "max": 267000
                }, {
                    "strokeStyle": "#f27815",
                    "min": 267000,
                    "max": 534000
                }],
                renderTicks: {
                    divisions: 5,
                    divWidth: 1.1,
                    divLength: 1,
                    divColor: '#FFFFFF',
                },
            };


            $('#region').on('change', function() {

                axios.get('{{ url('data') }}', {

                }).then(function(res) {

                    data = [];

                    // res.data.pm_schedule_count.forEach(function(v, i) {
                    $.each(res.data, function(i, v) {
                        var chartId = "chart-" + i;
                        var card_name =
                            data += `

                        <div class="item active">
                            <div class="progresscard">
                            <h4 style="color: #10a3e4; font-weight: 600; font-size: 18px; margin-bottom: 0;
                                padding-top: 10px; ">${v}</h4>
                                <div id="${chartId}"></div>
                                <p style="color: #01a1e7;position: relative;top: -122px;font-weight:600;">1-3</p>
                            </div>
                        </div>

                      `;
                        setTimeout(() => {
                            var chart = new ApexCharts(document.querySelector(
                                "#" + chartId), {
                                series: [v],
                                chart: {
                                    type: "radialBar",
                                    height: 380


                                },
                                plotOptions: {
                                    radialBar: {
                                        startAngle: -90,
                                        endAngle: 90,
                                        track: {
                                            background: "#314ABB",
                                            strokeWidth: '100%',
                                            margin: 0, // margin is in pixels
                                            dropShadow: {
                                                enabled: false,
                                                top: 0,
                                                left: 0,
                                                color: '#999',
                                                opacity: 1,
                                                blur: 2
                                            }
                                        },
                                        dataLabels: {
                                            name: {

                                                show: false
                                            },
                                            value: {
                                                color: '#000',
                                                offsetY: -20,
                                                fontSize: '29px',

                                            }

                                        }
                                    }
                                },
                                grid: {
                                    padding: {
                                        top: -10
                                    }
                                },
                                fill: {
                                    colors: ['#0622e9'],

                                },
                            });
                            chart.render();
                        }, 0);


                    });
                    $('.categories').empty()
                    $('.categories').append(data)
                    owlCarouselActive();

                });

            });


            $('#region').trigger('change')


            // owlCarouselActive();







        });

        function owlCarouselActive() {
            $('.owl-carousel').trigger('destroy.owl.carousel')
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 5,
                responsiveClass: true,
                nav: true,
                navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }

                }
            })

        }
    </script>


</body>

</html>

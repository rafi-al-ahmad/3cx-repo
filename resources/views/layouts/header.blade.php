<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ url('design') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('design') }}/app-assets/images/ico/favicon.ico">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/vendors/css/vendors-ltr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/vendors/css/charts/apexcharts.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/vendors/css/extensions/toastr.min.css"> -->
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/components.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/core/menu/menu-types/vertical-menu.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/plugins/charts/chart-apex.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/plugins/extensions/ext-component-toastr.css"> -->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/css-ltr/custom-ltr.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/assets/css/style-ltr.css">
    <!-- END: Custom CSS-->
    <!-- public\design/app-assets/fonts/font-awesome/css/font-awesome.min.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('design') }}/app-assets/vendors/css/extensions/toastr.min.css">
    <style>
        body {
            font-family: 'Tajawal', sans-serif !important;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .font-tajawal {
            font-family: 'Tajawal', sans-serif !important;
        }

        .navigation {
            font-family: unset;
            font-weight: 500 !important;
            font-size: 1rem !important;
        }

        .form-label {
            margin-bottom: 0.2857rem;
            font-size: unset;
            color: #5E5873;
        }

        .demo-inline-spacing>.action-row {
            margin-left: .5rem !important;
            margin-top: .5rem !important;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .hide-scrollbars::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hide-scrollbars {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .card-overlay {
            position: absolute;
            display: none;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgb(255 255 255 / 50%);
            z-index: 2;
        }
    </style>

    @stack('header')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
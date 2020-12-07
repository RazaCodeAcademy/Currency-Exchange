<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    
@include('common.header')

@yield('content')

@include('common.footer')

<!-- ALL JS FILES -->
<script src="/js/jquery.min.js"></script>
	<script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.pogo-slider.min.js"></script>
    <script src="/js/slider-index.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/form-validator.min.js"></script>
    <script src="/js/contact-form-script.js"></script>
    <script src="/js/isotope.min.js"></script>
    <script src="/js/images-loded.min.js"></script>
    <script src="/js/custom.js"></script>
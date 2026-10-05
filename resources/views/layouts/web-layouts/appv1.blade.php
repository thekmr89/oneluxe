<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <!-- css****** -->
    <link href="{{asset('css/custom_style.css')}}?v={{ file_exists(public_path('css/custom_style.css')) ? filemtime(public_path('css/custom_style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('style.css')}}?v={{ file_exists(public_path('style.css')) ? filemtime(public_path('style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('css/responsive-fixes.css')}}?v={{ file_exists(public_path('css/responsive-fixes.css')) ? filemtime(public_path('css/responsive-fixes.css')) : time() }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {}

        p {
            font-family: "Futura Book" !important;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Futura Book" !important;
        }

        .track .content {
            margin: 64px;
            padding: 0;
            font-size: 144px;
            font-weight: 100;
            /*color: #b2893d;*/
            color: #e2b855;
        }

        .marquee {
            position: relative;
            width: 100vw;
            max-width: 100%;
            height: 235px;
            overflow-x: hidden;
            background: #efeae2;
        }

        .track {
            position: absolute;
            white-space: nowrap;
            will-change: transform;
            animation: marquee 30s linear infinite;
            padding-top: 35px;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        p.desination_text {
            font-size: 1.375rem;
            padding-bottom: 1.875rem;
            border-bottom: 1px solid #dedede;
            color: #b2893d;
            margin-left: 3px;
        }

        .trips-slider {
            margin-bottom: 0px;
            background: #e0e6e4;
            padding-bottom: 40px;
        }

        .trips-text {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
        }

        .text-h {

            font-size: 3.5em;
            text-align: center;
            margin-bottom: 48px;
        }

        .testi_desination h5 {
            font-size: 20px;
            padding-top: 48px;
            padding-bottom: 48px;
        }

        .testi_main_box h4 {
            font-size: 30px;
            line-height: 38px;
            margin-top: 54px;
            margin-bottom: 54px;
        }

        .trips-text p {
            padding-top: 20px;
            line-height: 30px;
            color: #52575c !important;
            font-size: 1rem;
            line-height: 1.75rem !important;
        }

        .why-choose p {
            font-size: 16px;
            margin-bottom: 35px;
        }

        p {
            /**/
            font-size: 16px;

        }

        .trips-text1 h1 {

            font-size: 3.5em;
        }

        .trips-text1 span {
            font-size: 3.3rem;
            padding-top: 20px;
            display: inline-block;
            padding-bottom: 43px;
        }

        .trips-text1 h3 {
            font-size: 1rem;
        }

        .trips-text h1 {
            font-size: 3.5em;
            /**/

            margin-bottom: 10px;
        }

        .text-effect {
            font-size: 45px;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
            font-size: 15px;
        }

        .menu-bg {
            background: transparent !important;
            width: 100%;
            background-size: cover;
            position: fixed;
            z-index: 1;
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-lg,
        .navbar>.container-md,
        .navbar>.container-sm,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            /* justify-content: space-between; */
            justify-content: flex-end;
        }

        .pakage-text {
            background: #fff;
            padding: 20px 30px;
            margin-left: 50px;
            margin-right: 50px;
            position: relative;
            bottom: 50px;
            margin-top: -50px;
            z-index: 1;

        }

        .text-video {
            position: absolute;
            top: 35%;
            text-align: center;
            left: 6%;
        }

        .logo-bg {
            width: 100%;
            padding: 20px 0 20px 0;
            background-size: cover;
            background: white;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        #tabs-nav li {
            text-align: center;
        }

        p.desination_text {
            text-align: center;
        }

        .text-effect {
            color: #333;

            font-size: 60px;
            /*color: #198754;*/
            color: #a5854b;
            margin-bottom: 30px;
        }

        .trips-text1 {
            width: 92%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
            padding-top: 60px;
        }

        .marque marquee {
            height: 41vh;
            font-size: 20vh;
            padding-top: 94px;
            font-weight: 100;
            color: #b2893d;
        }

        .navbar {
            position: relative;
            display: flex !important;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            /*padding-top: .5rem;*/
            /*padding-bottom: .5rem;*/
            /*height:55px;*/
            padding: 0px;
        }

        .left {
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
            width: 17%;
        }

        .enquri {
            text-decoration: none;
            /* border: 1px solid; */
            background: #000;
            border-radius: 5px;
            /*background-color:#091a54;*/
            cursor: pointer;
            color: #fff;
            padding: 7px 38px 7px 38px;
            display: inline-block;
        }

        .contact {
            height: 50px;
            width: 100%;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
            font-size: 16px;
            font-weight: 500;
            margin-left: 10px;
        }

        .contact:hover {
            text-decoration: none;
            border: 1px solid #5f698c;
            background: #fff;
            color: #5f698c;
            /*border-radius: 10px;*/
            cursor: pointer;

        }

        .enquri:hover {
            text-decoration: none;
            border: 1px solid #5f698c;
            padding: 7px 38px 7px 38px;
            background: #fff;
            color: #5f698c;
            border-radius: 10px;
        }

        .cont-num span {
            padding-left: 10px;
        }

        .cont-num {
            font-size: 17px;
            font-weight: 500;
            padding-left: 20px;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            font-weight: 500;
        }

        .cta a {
            text-decoration: none;
            /*border: 1px solid;*/
            padding: 7px 55px 7px 55px;
            /*padding: 10px 60px;*/
            background: #000;
            color: white;
            border-radius: 5px;
        }

        .cta:hover a {
            text-decoration: none;
            border: 1px solid #5f698c;
            padding: 10px 60px;
            background: #fff;
            color: #5f698c;
            border-radius: 10px;
        }

        .video img {
            width: 100%;
            height: 100vh;
            /*object-fit: contain;*/
        }

        .trips-bg {
            padding: 60px 0 100px 0;
            /*background-image: url(https://indiaforworld.com/design2/images/Backpanel.jpg);*/
            /*background-size:contain;*/
            /*background-repeat:no-repeat;*/
            /*background-clip:content-box;*/
        }

        .logo {
            width: 27%;
        }

        .tog-btn {
            display: inline-block;
            font-size: 40px;
            cursor: pointer;
            position: relative;
        }

        .mainu {
            position: absolute;
            width: 24.5vw;
            height: auto;
            background: black;
            z-index: 1000;
            height: auto;
            visibility: hidden;
            top: 50px;
            right: -195px;
        }

        .tog-btn:hover .mainu {
            visibility: visible;
        }

        .list-mainu {
            padding: 0px;
            /*text-align:left;*/
            text-align: center;
        }

        .list-mainu .list {
            list-style: none;
            padding: 5px;
        }

        .list-mainu .list a {
            font-size: 18px;
            text-align: left;
            color: white;
            text-decoration: none;
        }

        .inner-mainu {
            width: 100%;
            padding: 10px;
        }

        .list-mainu .list a:hover {
            color: #f17011;
            transition-delay: 0ms;
            text-decoration: underline;
        }

        .titleheading {
            color: #000;
            font-size: 18px;
            font-size: 1.125rem;
            font-weight: 700;
            letter-spacing: 1.8px;
            line-height: 1.28;
            margin-bottom: 6.375px;
            text-transform: uppercase;
        }

        p {
            color: #52575c !important;
            font-size: 1rem !important;
        }

        .btn_know {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .btn_more {
            height: 35px;
            padding: 5px 15px;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;

        }

        .btn_more:hover {
            text-decoration: none;
            border: 1px solid #5f698c;
            background: #fff;
            color: #5f698c;
            /*border-radius: 10px;*/
            cursor: pointer;
        }

        .FrBrighShw {
            /*width: 40px;*/
            /*height: 38px;*/
            /*cursor: pointer;*/
            width: 40px;
            height: 50px;
            cursor: pointer;
            padding-top: 10px;
        }

        .FrBrighShw .Fnb {
            width: 100%;
            height: 2px;
            display: block;
            background-color: #000;
            cursor: pointer;
        }

        .FrBrighShw .Fnb:nth-child(2) {
            width: 70%;
            margin: 7px 0px;
        }

        .FrBrighShw .Fnb:nth-child(3) {
            width: 50%;
        }

        .FrBrighShw .Fnb:nth-child(4) {
            margin: 7px 0px 0px 0px;
            width: 25%;
        }

        /*social media icon css*/

        .social {
            display: flex;
            justify-content: left;
            text-align: center;
            align-items: center;
        }

        .social i {
            color: #000;
            width: 30px;
            height: 30px;
            background-color: transparent;
            font-size: 20px;
            text-align: center;
            margin-right: 5px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /*End social media icon css*/
    </style>
    <style>
        .why-choose img {
            width: 100px;
        }

        .desti-img img {
            width: 100%;
            /*height:auto;*/
            height: 450px;
        }

        .dest-heading {
            text-align: center;
            padding: 75px 0px 40px 0px;
        }

        .dest-heading h2 {
            /*font-size: 40px;*/
            /*margin-top: 50px;*/
            /*margin-bottom:35px;*/
            text-transform: uppercase;
        }

        .desti-img span {
            position: absolute;
            top: 50%;
            left: 50%;
            /*transform: translate(-50%, -50%);*/
            transform: translate(-50%, 492%);
            font-size: 25px;
            font-weight: 500;
            color: white;
        }

        h2 {
            text-transform: uppercase;
        }

        .desti-img {
            position: relative;
            /*padding-left: 12px;*/
            padding-right: 0px !important;
            overflow: hidden;
        }

        .img-hover:before {
            content: '';
            display: block;
            position: absolute;
            height: 0%;
            width: 100%;
            bottom: 0;
            transition: height 0.5s ease-out;
            background: linear-gradient(to bottom, transparent 0%, #495057 100%);
        }

        .desti-img:hover:before {
            height: 100%;
        }

        .texti-section img {
            width: 100%;
            height: auto;
            /*object-fit: contain*/
            min-height: 40vw;
            height: 100%;
        }

        /*.texti-section{*/
        /*    margin-bottom:15px;*/
        /*}*/
        .texti-section .texti-inner {
            padding: 25px 100px;
            /*padding-top:100px;*/
        }

        .texti-section .texti-inner h2 {
            text-align: left;
            margin-top: 51px;
            margin-bottom: 42px;
            /*font-size:24px;*/
        }

        .inspired_section {
            padding: 5px 0px;
        }

        .offer-slider-btn-expele p {
            display: none;
        }

        .offer-slider-btn-expele {
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            display: inline-block;
            padding: 6px;
            letter-spacing: 0.5px;
            text-align: center;
            position: absolute;
            transition: 1.5s;
            margin: 0px 20px;
            position: absolute;
            bottom: -130px;
            left: 0%;
            right: 0%;
            cursor: pointer;
            height: 38vh;
        }

        .offer-slider-btn-expele p {
            color: white !important;
            font-size: 0.85rem !important;
        }

        .desti-img:hover .offer-slider-btn-expele {
            bottom: 20px !important;
        }

        .desti-img:hover p {
            display: block;
        }

        /*.trips-slider .owl-item:nth-child(odd) {*/
        /*     margin-top:0px!important; */
        /*}*/
        @media (min-width: 1200px) {

            .h2,
            h2 {
                /*font-size: 2.8125rem;*/
                font-size: 2rem;
                margin-bottom: 38px;
            }
        }

        .expo {
            padding: 0px;
            border: none;
        }

        .expo a {
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 17px;
            text-decoration: none;
            color: #ffffff;
            background: #000000;
            font-weight: 500;
        }

        .botom {
            height: 11vw;
            position: absolute;
            /*background: linear-gradient(to top, #945656, transparent) !important;*/
            opacity: 1;
            opacity: 1;
            bottom: 0px;
            background: red;
            width: 93%;
            z-index: 20
        }

        .slider_p {
            height: 15vh;
            width: 100%;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }
    </style>
    <style>
        .inner_img_text {
            position: absolute;
            top: 40%;
            left: 40%;
            transform: translate(-50%, -50%);
            font-size: 25px;
            font-weight: 500;
            color: black;
        }
    </style>
    <style>
        .img-hove2 .animated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        .img-hove2 .-in {
            z-index: 0
        }

        .img-hove2 .img-hove2-out {
            z-index: 1
        }

        .img-hove2 .fadeOut {
            animation-name: fadeOut
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .why-choose {
            padding-top: 75px;
            padding-bottom: 75px;
        }
    </style>
    <style>
        .inspire {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 16px;
            position: relative;
        }

        .inspire h1::before {
            width: 231px;
            height: 2px;
            top: auto;
            right: auto;
            bottom: 44px;
            left: 50%;
            position: absolute;
            content: "";
            background-color: #f17011;
            transform: translate(-50%, 0px);
        }
    </style>
    <style>
        .blog-content .category {
            padding: 10px 0px 10px 0px;
            font-weight: 500;
        }

        .blog-content .blog-t {
            font-size: 1.0rem;
            cursor: pointer;
            color: rgb(26 44 53);
        }

        .blog-content .comment {
            /* display: flex;*/
            /*justify-content: space-between;*/
            /*text-align: center;*/
            align-items: center;
        }

        .blog-content .comment span {
            color: #a89f84;
            font-size: 15px;
        }

        /*.owl-theme .blog{*/
        /*    width:347px;*/
        /*    margin: auto;*/
        /*}*/
        .border_line1 span {
            background-color: #fff;
            padding: 8px 15px;
            position: relative;
            z-index: 5;
            display: block;
            font-size: 20px;
            color: black;
        }
    </style>
    <style>
        .contact {
            position: relative;
        }

        .form {
            position: absolute;
            top: 114px;
            right: 114px;
            width: 45%;
            height: auto;
            background: #f6f3ec;
        }

        .form .inner-f {
            width: 100%;
            height: auto;
            padding: 60px;
        }

        .inner-f .col-sm-6 {
            padding-bottom: 20px;
        }

        input[type="text"] {
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 1px solid;
            border-radius: 0px;
            background: #f6f3ec;
            outline: none;
            padding-top: 13px;
            padding-bottom: 13px;
        }
        }

        . .inner-f h3 {

            font-size: 3.5em;
            text-align: center;
        }

        .btn-1 {
            padding-left: 56px;
            padding-right: 56px;
            padding-top: 10px;
            padding-bottom: 10px;
            background: #d8a01d;
            border: none;
            color: white;
        }

        .chek {
            padding-bottom: 10px;
        }

        input[type="checkbox"] {
            margin: 5px;
        }
    </style>
    <style>
        /*.carousel-inner {*/
        /*    position: relative;*/
        /*    width: 100%;*/
        /*    overflow: hidden;*/
        /*    background-image: url(https://indiaforworld.com/design2/images/home/testi.jpg);*/
        /*}*/
        h2 {
            text-align: center;
            position: relative;
            margin: 50px 0 30px;
        }

        /*h2::after {*/
        /*  content: "";*/
        /*  width: 100px;*/
        /*  position: absolute;*/
        /*  margin: 0 auto;*/
        /*  height: 3px;*/
        /*  background: #e6d1cc;*/
        /*  left: 0;*/
        /*  right: 0;*/
        /*  bottom: -10px;*/
        /*}*/

        .carousel {
            width: 650px;
            margin: 0 auto;
            padding-bottom: 50px;
        }

        .carousel .carousel-item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 340px;
        }

        .carousel .carousel-item a {
            color: #eb7245;
        }

        .carousel .img-box {
            width: 145px;
            height: 145px;
            margin: 0 auto;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 20px 0 10px;
        }

        .carousel .overview {
            text-align: center;
            padding-bottom: 5px;
        }

        .carousel .overview b {
            color: #333;
            font-size: 15px;
            text-transform: uppercase;
            display: block;
            padding-bottom: 5px;
        }

        .carousel .star-rating i {
            font-size: 18px;
            color: #ffdc12;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #999;
            text-shadow: none;
            top: 198px;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 20px;
            margin-right: 2px;
        }

        /*.carousel-control-prev {*/
        /*  left: auto;*/
        /*  right: 40px;*/
        /*}*/
        .carousel-control-prev {
            left: auto;
            right: 22rem;
        }

        .carousel-control-next {
            left: auto;
            left: 22rem;
        }

        .carousel-control-next i {
            margin-right: -2px;
        }

        .carousel .carousel-indicators {
            bottom: 15px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 11px;
            height: 11px;
            margin: 1px 5px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: none;
        }

        .carousel-indicators li.active {
            background: #888;
        }
    </style>
    <style>
        .cheack input {
            margin-left: -20px;
        }

        .check input {
            margin-top: -35px;
        }

        .check {
            width: 70%;
            font-size: 14px;
            color: white;
            margin-top: 20px;
        }

        .btn-2:hover a {
            color: black;
            background: white;
        }

        .btn-2 {
            padding: 12px 25px !important;
            border: 1px solid rgb(255 255 255 / 50%);
            color: white !important;
            font-size: 13px !important;
            line-height: 14px;
            letter-spacing: 1px;
            position: relative;
            color: white;
            z-index: 0;
        }

        .form-inline .form-group {
            width: 33%;
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center;
            justify-content: space-between;
        }

        .form-inline input[type=email] {
            background: transparent;
            border: 0;
            border-bottom: 1px solid rgb(255 255 255 / 50%);
            border-radius: 0;
            padding: 13px 13px 13px 0 !important;
            color: #FFFFFF;
            outline: #000000;
            font-size: 15px !important;
            line-height: 16px;
            letter-spacing: .5px;
            width: 100%;
        }

    </style>

</head>

<body>

    <header>
        <div class="menu-bg" id="navbar">
            <div class="container-fluid" style="padding-right: 0;">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="logo">
                                <a href="/" class="logo">
                                    <img src="images/logo/logo_far_and_beyond.png" alt="logo" style="height: 20px;">
                                </a>
                            </div>
                            <div class="left">
                                <div class="tog-btn">
                                    <div class="FrBrighShw">
                                        <span class="Fnb"></span>
                                        <span class="Fnb"></span>
                                        <span class="Fnb"></span>
                                        <span class="Fnb"></span>
                                    </div>
                                    <div class="mainu">
                                        <div class="inner-mainu">
                                            <ul class="list-mainu">
                                                <li class="list"><a href="about-us">ABOUT US</a></li>
                                                <li class="list"><a href="our-destination">OUR DESTINATIONS</a></li>
                                                <li class="list"> <a href="our-servic">OUR SERVICES</a></li>
                                                <li class="list"><a href="littile-inspiration">LITTLE
                                                        INSPIRATIONS</a></li>
                                                <li class="list"><a href="responsible-travel">RESPONSIBLE
                                                        TRAVEL</a></li>
                                                <li class="list"> <a href="about-us#why-us">WHY US</a></li>
                                                <li class="list"><a href="about-us#meet-our-team">MEET OUR
                                                        TEAM</a></li>
                                                <li class="list"> <a href="blogs">BLOGS</a></li>
                                                <li class="list"> <a href="contact-us">CONTACT</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact" onclick="location.href='contact-us.html';">CONTACT US</div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('page-content')

    <div class="client-logo-bg">
        <div class="client-text" style="display:none;">
            <h3 class="border_line1">
                <span>Our Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="items">
                    <img src="slider/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="items">
                    <img src="slider/IATO.png" alt="Atlantis">
                </div>
                <div class="items">
                    <img src="slider/trustedFITservice.png" alt="Four Seasons">
                </div>
                <div class="items">
                    <img src="slider/IATO.png" alt="Raffles">
                </div>
                <div class="items">
                    <img src="slider/trustedFITservice.png" alt="Fairmont">
                </div>
                <div class="items">
                    <img src="slider/IATO.png" alt="Sofitel">
                </div>
                <div class="items">
                    <img src="slider/trustedFITservice.png" alt="St Regis">
                </div>
                <div class="items">
                    <img src="slider/IATO.png" alt="Preferred hotels">
                </div>
            </div>
        </div>
    </div>

    <footer class="footers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <img src="slider/footer-image.jpg" alt="logo">
                            <div><span style="color: #6c757d;font-size: 0.85rem;">(A Unit Of Distinct
                                    Destinations)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Far And Beyond</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class="">Destinos</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span>Experiencias</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span>Novios</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" "> Regala </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span class=" ">Bitácora</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span class="">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Companies</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class="">Incentive travel</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span>Corporate events</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">About</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class="">Manifesto</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span>Sustainability</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span>Our history</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span>The team</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span class=" ">Our boutiques</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span class="">Press</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span class="">Work with us</span>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="f-heading">Information</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class="">Frequently Asked Questions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Contact Us</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class="">(+91) 765 011 657</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span>Instagram</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span>LinkedIn</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <spna>Facebook</spna>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span class=" ">Twitter</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <span class="">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="f-heading">Global</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href=" ">
                                        <span class=""> Text1 Mexico</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href=" ">
                                        <span class=""> Text2 United States</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copywrite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-left">
                    <ul class="copy-itm">
                        <li class="list-itm">
                            <a href="privacy-policy">
                                <span class="">Privacy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy">
                                <span class=" ">Cookies</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center" style="font-size:12px;"> © 2024 FAR & BEYOND. All
                    Rights
                    Reserved.
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-left" style="font-size:12px;">
                    <div class="social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer end-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                stagePadding: 50,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <script>
        $('.testi_box').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: [' < i class = "fa fa-caret-left" > < /i>', ' < i class = "fa fa-caret-right" > < /i>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 1
                }
            }
        });
    </script>
    <!--logo slider-->
    <script>
        $('.inspired_slider1').owlCarousel({
            loop: true,
            autoplay: true,
            stagePadding: 150,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    </script>
    <script>
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();
        // Click function
        $('#tabs-nav li').mouseenter(function() {
            $('#tabs-nav li').removeClass('active');
            // $(this).addClass('active');
            $('.tab-content').hide();
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });
    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <!--transparent nabigation-->
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

                document.getElementById("navbar").style.background = "#fff";
            } else {

                document.getElementById("navbar").style.background = "none";
            }
        }
    </script>
</body>

</html>

@extends('layouts.master') @section('main-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Far And Beyond</title>
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <!-- css****** -->
    <link rel="icon" href="images/favicon.jpg" type="image/png" sizes="16x16">
    <link href="{{asset('css/custom_style.css')}}?v={{ file_exists(public_path('css/custom_style.css')) ? filemtime(public_path('css/custom_style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('style.css')}}?v={{ file_exists(public_path('style.css')) ? filemtime(public_path('style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('css/responsive-fixes.css')}}?v={{ file_exists(public_path('css/responsive-fixes.css')) ? filemtime(public_path('css/responsive-fixes.css')) : time() }}" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/futura-font@1.0.0/styles.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- New Global site tag (gtag.js) - Google Analytics -->
    <style>
        p {
            font-family: "Futura Book" !important;
        }

        p {
            color: #495057;
        }

        h2 {
            font-weight: 600;
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

            font-size: 20px;
            line-height: 30px;
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
            width: 100%;
            background: rgba(0, 0, 0, 0);
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
            top: 55%;
            text-align: center;
            left: 21%;
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
            padding: 60px 0 50px 0;
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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            visibility: hidden;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mainu .inner-mainu {
            background: #000;
            border-radius: 50%;
            width: 200vw;
            height: 200vw;
            display: flex;
            flex: none;
            align-items: center;
            justify-content: center;
            transform: scale(0);
            transition: all 0.4s ease;
        }

        /*.mainu .inner-mainu .main-menu{*/
        /*     text-align: center;*/
        /*     max-width: 90vw;*/
        /*     max-height: 100vh;*/
        /*     opacity: 0;*/
        /*     transition: opacity 0.4s ease;*/
        /*}*/

        .tog-btn:hover .mainu {
            visibility: visible;
        }

        /*.tog-btn:hover .mainu .main-menu {*/
        /*   opacity: 1;*/
        /*   transition:  opacity 0.4s ease 0.4s;*/
        /*   }*/

        .tog-btn:hover .mainu .inner-mainu {
            transform: scale(1);
            transition-duration: 0.75s;
            visibility: visible;

        }

        .mainu .inner-mainu .main-menu>ul>li {
            list-style: none;
            color: #fff;
            font-size: 1.5rem;
            padding: 0.4rem;
        }

        /*.menu-wrap .toggler:hover .menu {*/

        /*  transition:  opacity 0.4s ease 0.4s;*/
        /*}     */

        /* .tog-btn:hover .mainu{*/
        /*    visibility: visible;*/
        /*    transform: scale(1);*/
        /*    transition-duration:0.75s;*/
        /*}*/
        .list-mainu {
            padding: 0px;
            /*text-align:left;*/
            text-align: center;
        }

        .list-mainu .list {
            list-style: none;
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

        /*.header-logo{*/
        /*    height:32px;*/
        /*    width:226px;*/
        /*}*/
        .header-logo img {
            width: 200px;
            /*height: 100%;*/
            object-fit: cover;
        }

    </style>

    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset('images/contact/Contact-us.webp')}}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#fff;">Thank You</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .hero-title .bottom-head {
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 1.6px;
            line-height: 1.4;
            color: #379c8a;
        }

        .thanku {
            width: 100%;
            margin: auto;
        }

        .thanku-h {
            font-size: 3rem;
            text-align: center;
        }

        .thanku-cont {
            font-size: 1.25rem !important;
            text-align: center;
            padding-top: 34px;
        }

        .thanku-cont p {
            line-height: 36px;
        }

    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="thanku">
                        <div class="thanku-h" style="font-size:2rem;"> Online Payment is Processed Successfully !</div>
                        <img src="https://farandbeyond.in/public/images/icon/icons8-tick.gif" alt="logo" style="width: 80px; height: 80px; margin: 20px auto; display: block;">
                        <div class="table-top">
                             
                          <div class="thanku-cont">
                            <h2 style="margin-bottom:10px!important; font-weight:500">Thank you for your payment!</h2>
                            <div class="maine">
                            <div class="lefte">
                            <p><strong>Order ID:</strong>  </p>
                            <p><strong>Transaction ID:</strong>  </p>
                            <p><strong>Amount:</strong>  </p>
                            <p><strong>Email:</strong></p>
                            </div>
                            <div class="right">
                            <p>{{ $order_id }}</p>
                            <p>{{ $txn_id }}</p>
                            <p>{{ $amount }} {{ $currency }} </p>
                            <p>{{ $customer_email }}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <section>
        </section>
        <style>
    .thanku-cont p{
       font-size:16px; 
    }
    .right{
        width: 50%;
        border-left: 1px solid black!important;
        text-align:left;
        padding-left: 30px!important;
    }
    .lefte{
        width: 50%;
         border-right: 1px solid black!important;
    }
    .thanku-cont{
    width: 900px;
       margin: auto;
       border: 1px solid beige;
       padding: 20px;
    }
    .maine{
    display: flex;
    justify-content: space-around;
    text-align: center;
    align-items: center;
        }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .title h2 {
                display: block;
                text-align: center;
                font-size: 39px;
                line-height: 52px;
                text-transform: capitalize;
                color: #fff;
            }

            .IqryFrmBx-Wppr {
                background: rgba(0, 0, 0, .6);
                display: flex;
                align-content: center;
                justify-content: center;
                padding: 60px 50px;
                margin-bottom: 0px;
                position: relative;
            }

            .IqryFrmBx-Wppr::before {
                width: 100%;
                height: 100%;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                position: absolute;
                content: "";
                background: url(https://www.distinctdestinations.in/asset/images/cntbnner.jpg) center center no-repeat;
                background-size: cover;
                z-index: -1
            }

            .IqryFrmBx-Wppr .Clm-sm-7 {
                flex: 0 70%;
                max-width: 70%;
                /*z-index: 1;*/
            }

            .title {
                width: 100%;
                position: relative;
                display: inline-block;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr {
                display: flex;
                align-content: center;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset {
                flex: 0 48%;
                max-width: 48%;
                margin-bottom: 40px;
                margin-right: 8px;
                position: relative;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .FtrInpt {
                line-height: 30px;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .FtrInpt {
                color: #fff;
                outline: none;
            }

            fieldset .FtrInpt {
                padding: 5px 0px;
                border: 0;
                border-bottom: 1px solid #959491;
                font-size: 18px;
                line-height: 25px;
                background: rgba(0, 0, 0, 0);
                width: 100%;
            }

            #ContentPlaceHolder1_UpdatePanelNOrmalinquiry {
                display: flex;
                align-content: center;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .InptTxtName {
                opacity: 48%;
                color: #fff;
            }

            fieldset .InptTxtName {
                position: absolute;
                top: 10px;
                left: 0;
                font-size: 18px;
                line-height: 14px;
                font-weight: 300;
                transition: all 1s;
                z-index: 0;
                padding: 0 0px;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .FlWdth {
                flex: 0 100%;
                max-width: 100%;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset {
                flex: 0 48%;
                max-width: 48%;
                margin-bottom: 40px;
                margin-right: 8px;
                position: relative;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px 0 0;
            }

            .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx .Cmn-Btn {
                padding: 10px 30px;
                padding-right: 50px;
                border: 1px solid rgba(0, 0, 0, 0);
                background: rgba(0, 0, 0, 0);
                color: #e2781a;
                font-size: 18px;
                text-transform: uppercase;
            }

        </style>
    </section>
    <!--footer start-->
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

        .owl-carousel .owl-stage {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

    <style>

        .social {
            display: flex;
            align-items: center;
            /*justify-content: left;*/
            text-align: center;
        }

        .social i {
            color: #000;
            width: 30px;
            height: 30px;
            background-color: transparent;
            font-size: 16px;
            text-align: center;
            margin-right: 5px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

    </body>

</html>
@endsection

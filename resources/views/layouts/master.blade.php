<!DOCTYPE html>
<html lang="en">

<head>
    <!--<meta charset="UTF-8">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> {{--
    <title>{{ $meta->tittle ?? 'Farandbeyond Online Payment Policy, Please read carefully' }}</title>--}}
    <title>{{ $meta->tittle ?? 'Online Payment - Far And Beyond' }}</title>
    <meta name="description" content="{{ $meta->description ?? 'Distinct Destinations Payment Policy, Please read carefully' }}" />
    <meta name="keywords" content="{{ $meta->keywords ?? 'not working' }}" />
    <!--<title></title>-->
    <!--<meta name="description" content=" " />-->
    <!--<meta name="keywords" content=" " />-->
    <!-- css****** -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/icon/Oneluxe.png')}}">-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icon/facivon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon/facivon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/icon/facivon/favicon.ico')}}">
    <link href="{{asset('css/custom_style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('fonts/all.min.css')}}" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{asset('style.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('css/responsive-fixes.css')}}" type="text/css" rel="stylesheet">
    <!---->

    <style>
        @font-face {
          font-family: 'Futura-Book';
          src: url('/fonts/Futura-Book.woff2') format('woff2'),
               url('/fonts/Futura-Book.woff') format('woff');
          font-weight: normal;
          font-style: normal;
          font-display: swap;
        }
        @font-face {
          font-family: 'Futura Book';
          src: url('/fonts/Futura-Book.woff2') format('woff2'),
               url('/fonts/Futura-Book.woff') format('woff');
          font-weight: normal;
          font-style: normal;
          font-display: swap;
        }
        
        body {
          font-family: 'Futura-Book', 'Futura Book', sans-serif !important;
        }
        p {
          font-family: "Futura Book" !important;
        }
            /*new css all pages*/
            .h3 h2{
            font-weight: 500;
        }
        .trips-text h2{
            margin-bottom: 0px!important;
            margin-top: 10px!important;
            color: #77a3ab !important;
        }
        .trips-text p{
         padding-bottom: 14px;
        }
        .trips-text h2 span {
            color:#77a3ab!important;
        }
        .texti-inner h2 span  {
            color:#77a3ab!important;
        }
        .dest-heading h2 ,.why-choose h2 {
             color:#77a3ab!important;
        } 
         body {
            background-color: #fffaf0;
        }
        /*end css*/
                body{
                    
                }
                
                  p {
                    font-size:1.25rem!important;
                    
                  }
            
                  p{
                   color:#495057;
                  }
                  h2{
                      font-weight:600;
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
            
                  .client-logo-bg {
                    background-color: #000;
                    padding: 40px 0 50px 0;
                    position: relative;
                    z-index: 0;
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
                    width: 80%;
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
                    /*color:#A9A9A9 !important;*/
                    font-size:1.25rem!important;
                    line-height: 1.75rem !important;
                  }
            
                  .why-choose p {
                    font-size: 16px;
                    margin-bottom: 35px;
                  }
            
                  p {
                    /**/
                    /*font-size: 16px;*/
                    /**/
                    /*color:#A9A9A9;*/
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
                    top: 35%;
                    text-align: center;
                    left: 15%;
                    right:15%;
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
                    padding:0px;
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
                    display:inline-block;
                  }
                  .contact{
                     height:50px;
                    width: 100%;
                    text-align: center;
                    color: white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: #77a3ab;
                   font-size: 16px;
                    font-weight: 500;
                    margin-left: 10px;
                    transition: .6s;
                    }
                  .contact:hover{
                    text-decoration: none;
                    background: #77a3ab;
                    color: #fff;
                    /*border-radius: 10px;*/
                    cursor:pointer;
                      
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
                 .video{
                     position:relative;
                 }
                  .trips-bg {
                    padding: 10px 0 60px 0;
                    /*background-image: url(https://indiaforworld.com/design2/images/Backpanel.jpg);*/
                    /*background-size:contain;*/
                    /*background-repeat:no-repeat;*/
                    /*background-clip:content-box;*/
                  }
            
                  .logo {
                    width: 27%;
                  }
                  .tog-btn{
                      display:inline-block;
                      font-size:40px;
                      cursor: pointer;
                      position:relative;
                  }
                  
                  .mainu{
                          position: fixed;
                          top: 0;
                          right:0;
                          width: 50%;
                          height: 100%;
                          visibility: hidden;
                          overflow: hidden;
                          display: flex;
                          align-items: center;
                          justify-content: center;
                       }
                       .mainu .inner-mainu
                          {
                          background:#000000c9;
                          /*background:rgba (91,91,91, 0.85);*/
                          width: 100%;
                          height: 200vw;
                          display: flex;
                          flex: none;
                          align-items: center;
                          justify-content: center;
                          transform: scale(0);
                          transition: all 0.4s ease;
                        }
            	  .tog-btn:hover .mainu {
                          visibility: visible;
                        }
            	    .tog-btn:hover .mainu .inner-mainu {
                        transform: scale(1);
                        transition-duration:0.75s;
                         visibility: visible;
                        
                    }
                   .mainu .inner-mainu .main-menu > ul > li {
                      list-style: none;
                      color: #fff;
                      font-size:1.5rem;
                      padding: 0.4rem;
                     }
                  .list-mainu{
                      padding-left:70px;
                      text-align:center;
                      
                  }
                  .list-mainu .list{
                      list-style:none;
                      padding:5px;
                  }
                  .list-mainu .list a{
                      font-size:18px;
                      text-align:left;
                      color:#fff;
                      text-decoration:none;
                  }
            /*      .inner-mainu{*/
            /*          width:100%;*/
            /*          padding:10px;*/
            /*      }*/
                 .list-mainu .list a:hover {
                color: #FFA8B0;
                transition-delay: 0ms;
                text-decoration: underline;
                }
                .titleheading{
                color: #000;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: 700;
                letter-spacing: 1.8px;
                line-height: 1.28;
                margin-bottom: 6.375px;
                
                }
                p{
                 /*color: #52575c!important;*/
                  /*color:#A9A9A9!important;*/
                 font-size:1.25rem!important;
                }
                .btn_know{
                display: flex;
                text-align: center;
                justify-content: center;
                align-items: center;
                }
               .btn_more:hover {
                height: 35px;
                padding: 5px 15px;
                text-align: center;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                background: black;
                border:1px solid black;
                
                }
                .btn_more {
                height: 35px;
                padding: 5px 15px;
                text-align: center;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                background:white;
                color:black;
                border:1px solid black;
                
                }
                  /*.btn_more:hover{  text-decoration: none;*/
                  /*  border: 1px solid #5f698c;*/
                  /*  background: #fff;*/
                  /*  color: #5f698c;*/
                    /*border-radius: 10px;*/
                  /*  cursor:pointer;}*/
                    
                    
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
                cursor: pointer;
                }
               .FrBrighShw .Fnb:nth-child(2) {
                width: 70%;
                margin: 7px 0px;
                }
                .FrBrighShw .Fnb:nth-child(3) {
                width: 50%;
                }
                .FrBrighShw .Fnb:nth-child(4){
                margin:7px 0px 0px 0px;
                width:25%;
                }
                 /*social media icon css*/
                
                .social{
                    display:flex;
                    justify-content:left;
                    text-align:center;
                    align-items:center;
                    margin-top:10px;
                }
                .social i{
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
              /*End social media icon css*/
              
              @media only screen and (max-width:1013px) {
                .check{
                    width:100%!important;
                    display:flex;
                    justify-content:space-between;
                    align-items:center
                    text-align:center;
                }
                .padding_right{
                    padding-right: var(--bs-gutter-x, .75rem)!important;
                }
              .texti-section .texti-inner {
                padding: 25px 100px!important;
                position: relative!important;
                top: 0px!important;
            }
             .img-respo{
                 padding:10px!important;
             }
               .contact {
                 display:none;
              }
              .form-inline .form-group {
                width: 100%!important;
                 }
                 .news-latter{
                     padding:10px 20px!important;
                 }
              .cook {
                  padding:22px 11px!important;
              }
              .inner_img_text1{
                  position:relative!important;
                  padding: 30px 30px 30px 30px!important;
              }
              .top-features {
                order: 2;
              }
            
              .item-brand {
                order: 1;
              }
              p{
                  1rem;
              }
              .text-video {
              text-align: center;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              width:100%;
              }
              .trips-text{
                  width:100%!important;
              }
              .home-banner span{
                font-size:1.5rem!important;
                  
              }
              .left {
                display: flex;
                text-align: center;
                align-items: center;
                width: 13%;
                justify-content: space-evenly;
            }
            .carousel{
                width:100%!important;
            }
            .texti-section .texti-inner {
                padding: 12px 13px !important;
            }
            .desti-img{
                padding-left:0px!important;
            }
            .ali-center{
                display: flex;
                text-align: center;
                align-items: center;
                justify-content: center!important;
            }
            .social {
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
                margin-top: 10px;
            }
            }
             .header-logo{
                    /*height:32px;*/
                    /*width:226px;*/
                }
                .header-logo img{
                  /*width:200px;*/
                    width:140px;
                    height: 100%;
                    object-fit:cover;
                }
            .home-banner span{
                font-size:3rem;
                font-weight: 400;
                letter-spacing: 2px;
                line-height: 1.05;
                color:white; 
                font-weight: 600; 
                line-height:1.5;"
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
                outline:none!important;
              }
               .form-inline input[type=text] {
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
                outline:none!important;
              }
                .btn-2 {
                padding: 12px 25px !important;
                border: 1px solid rgb(255 255 255 / 50%);
                color: white !important;
                font-size: 13px !important;
                line-height: 14px;
                /* letter-spacing: 1px; */
                /* position: relative; */
                /* color: white; */
                /* z-index: 0; */
                background: black;
              }
                 input:-webkit-autofill,
                input:-webkit-autofill:hover, 
                input:-webkit-autofill:focus,
                textarea:-webkit-autofill,
                textarea:-webkit-autofill:hover,
                textarea:-webkit-autofill:focus,
                select:-webkit-autofill,
                select:-webkit-autofill:hover,
                select:-webkit-autofill:focus {
                  -webkit-text-fill-color:white;
                  -webkit-box-shadow: 0 0 0px 1000px #000 inset;
                  transition: background-color 5000s ease-in-out 0s;
                }
                .checkbox{
                    display: flex;
                    justify-content: space-between;
                    text-align: center;
                    align-items: center;
                }
    </style>
</head>
<script>
    @if($message = session('succes_message'))
    swal("{{ $message }}");
    @endif
</script>

<body>
    <!-- header statred -->
    <header>
        <div class="menu-bg" id="navbar">
            <div class="container-fluid padding_right" style="padding-right: 0;">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="logo" id="logo1">
                                <a href="{{ route('home') }}" class="logo">
                                    <div class="header-logo">
                                        <img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="logo" id="logo2" style="display:none;">
                                <a href="{{ route('home') }}" class="logo">
                                    <div class="header-logo">
                                        <img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="left">
                                <div class="tog-btn">
                                    <div class="FrBrighShw" id="logo3">
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                    </div>
                                    <div class="FrBrighShw" id="logo4" style="display:none;">
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                    </div>
                                    <div class="mainu">
                                        <div class="inner-mainu">
                                            <div class="main-menu">
                                                <ul class="list-mainu">
                                                    <li class="list"><a href="{{ route('home') }}">HOME</a></li>
                                                    <li class="list"><a href="about-us">ABOUT US</a></li>
                                                    <li class="list"><a href="destinations">DESTINATIONS</a></li>
                                                    <li class="list"> <a href="services">SERVICES</a></li>
                                                    {{--
                                                    <li class="list"><a href="inspiring-experiences">INSPIRING EXPERIENCES</a></li>--}}
                                                    <li class="list"><a href="responsible-travel">RESPONSIBLE TRAVEL</a></li>
                                                    {{--
                                                    <li class="list"> <a href="about-us#why-us">WHY US</a></li>--}}
                                                    <!--<li class="list"><a href="about-us#our-team">MEET OUR TEAM</a></li>-->
                                                    {{--
                                                    <li class="list"> <a href="{{route('blog')}}">BLOGS</a></li>--}}
                                                    <li class="list"> <a href="contact-us">CONTACT US</a></li>
                                                    <li class="list"> <a href="{{ route('home') }}" style="color:red;text-decoration:underline;">CLOSE</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact" onclick="location.href='contact-us';">CONTACT US</div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!---header ended-->
    @yield('main-content')
    <!-- footer start  -->
    <footer>
        <div class="client-logo-bg">
            <div class="group-aff">
                <h3 style="font-weight:600;">
          <span>Group Affiliations</span>
        </h3>
            </div>
            <div class="inspired_section-1">
                <div class="owl-carousel owl-theme inspired_slider1">
                    <div class="item">
                        <img src="{{asset('images/footerlogo/trustedFITservice.png')}}" alt="One and only ">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/keralatravelmart.png')}}" alt="Atlantis">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/Tourcert.png')}}" alt="Four Seasons">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/Toft.png')}}" alt="Raffles">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/RTSOI-LOGO.png')}}" alt="Fairmont">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/One-Tree-Planted.png')}}" alt="Sofitel">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/IATO.png')}}" alt="St Regis">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/sanderson-phillips.png')}}" alt="Preferred hotels">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/USTOA.png')}}" alt="Preferred hotels">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/footerlogo/SITE_wordmark.png')}}" alt="site_wordmark">
                    </div>
                </div>
            </div>
        </div>
        <section class="news-latter" style="border-top:1px solid rgb(255 255 255 / 50%);">
            <div class="container-fluid">
                <button style="display:none;" onclick="topFunction()" id="mybutton" class="btn-top btn-visible scrollToTop "><img src="{{asset('images/icon/top_arrow.png')}}" style="cursor: pointer;"></button>
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="news-cont">YOUR JOURNEY STARTS HERE.</div>
                        <div class="news-desc news-cont">Share your ideas with us. We’ll make it personal, private, and distinctly luxurious.</div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <form class="form-inline" action="{{ route('admin.save.subscription') }}" method="POST" onsubmit="return validateForm()">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Name" name="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <!--@if(Session::has('success'))-->

                            <!--<p class="alert alert-success">-->
                            <!--    {{ Session::get('success') }}-->
                            <!--</p>-->
                            <!--    @endif-->
                            <button type="submit" class="btn-2">SUBSCRIBE</button>
                            <div class="checkbox">
                                <!--<label class="check"> </label>-->
                                <input type="checkbox" required>
                                <p style="font-size:1rem!important; color: white; margin-top:10px;">I have read and accept the <a href="https://farandbeyond.in/privacy-policy" style="text-decoration: underline;color: white;">Privacy and Data Protection Policy</a>. </p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footers">
            <div class="container-fluid">
                <div class="row ali-center">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('home') }}">
                                    <div class="footer-logo">
                                        <img src="{{asset('images/logo/Oneluxe_Logo.png')}}" alt="logo">
                                    </div>
                                </a>
                                <div><span style="color: #6c757d;font-size: 0.85rem;">(A Distinct Destinations company)</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="f-heading">Quick Links</h3>
                                <ul class="f-list-item">
                                    <li class="list-item">
                                        <a href="about-us">
                                            <span class="">About Us</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="services">
                                            <span>Services</span>
                                        </a>
                                    </li>
                                    {{--
                                    <li class="list-item">
                                        <a href="inspiring-experiences">
                                            <span>Inspiring Experiences</span>
                                        </a>
                                    </li>--}}
                                    <li class="list-item">
                                        <a href="responsible-travel">
                                            <span class="">Responsible Travel</span>
                                        </a>
                                    </li>
                                    {{--
                                    <li class="list-item">
                                        <a href="about-us#our-team">
                                            <span class="">Our Team</span>
                                        </a>
                                    </li>--}}
                                    <li class="list-item">
                                        <a href="{{ url('pay-online') }}">
                                            <span class="">Payment Link</span>
                                        </a>
                                    </li>
                                    {{--
                                    <li class="list-item">
                                        <a href="https://www.distinctdestinations.in/pay-online" target="_blank">
                                            <span class="">Payment Link</span>
                                        </a>
                                    </li>--}}
                                    <li class="list-item">
                                        <a href="contact-us">
                                            <span class="">Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="https://api.whatsapp.com/send?phone=919599360800" target="_blank">
                                            <span>Start a Whatsapp Chat</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="f-heading">Destinations</h3>
                                <ul class="f-list-item">
                                    <li class="list-item">
                                        <a href="destinations#India">
                                            <span class="">India</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="destinations#Nepal">
                                            <span>Nepal</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="destinations#Bhutan">
                                            <span>Bhutan</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="destinations#Sri Lanka">
                                            <span>Sri Lanka</span>
                                        </a>
                                    </li>
                                </ul>
                                {{--
                                <h3 class="f-heading">Services</h3>
                                <ul class="f-list-item">
                                    <li class="list-item">
                                        <a href="services#The Luxury Collection">
                                            <span class="">The Luxury Collection</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="services#Meetings & Conferences">
                                            <span class="">Meetings & Conferences</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="services#Incentives">
                                            <span class="">Incentives</span>
                                        </a>
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="f-heading">Contact Us</h3>
                                <p class="list-item" style="font-size:16px!important; color:black;">
                                    Unit No 701 to 708
                                    <br/> Tower D, Global Business Park
                                    <br/> Sector-26, Gurugram, Haryana, 122002
                                    <br/> +91 9599-360-800
                                    <br> info@oneluxe.in
                                </p>
                                <ul class="f-list-item" style="display:none;">
                                    <li class="list-item">
                                        <div class="social">
                                            <a href="https://www.facebook.com/profile.php?id=61559894617770
" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <!--<a href="" target="_blank"><i class="fa fa-youtube"></i></a>-->
                                            <a href="https://www.linkedin.com/company/102744889/admin/feed/posts/
" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a href="https://www.instagram.com/farandbeyondd/
" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </div>
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
                    <div class="col-lg-3 col-md-3 col-sm-12 text-center footer-cent" style="font-size:14px;"><span>© {{ \Carbon\Carbon::now()->year }} Oneluxe. All Rights Reserved.</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-left footer-cent">
                        <ul class="copy-itm" st>
                            <li class="list-itm">
                                <a href="privacy-policy#tab_payment">
                                    <span class="">Privacy Policy</span>
                                </a>
                            </li>
                            <li class="list-itm">
                                <a href="privacy-policy#tab_cookie">
                                    <span class=" ">Cookies Policy</span>
                                </a>
                            </li>
                            <li class="list-itm">
                                <a href="privacy-policy#tab_gdpr">
                                    <span class=" "> GDPR Policy</span>
                                </a>
                            </li>
                            <li class="list-itm">
                                <a href="privacy-policy#tab_policy">
                                    <span class=" "> Payment Policy</span>

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 text-left footer-cent" style="font-size:14px;">
                        <ul class="copy-itm">
                            <li class="list-itm">
                                <a href="https://www.bitgaintech.com/" target="_blank" title="IT Partner - bitGain Technology Pvt Ltd">
                                    <span style="margin-right:3px;"><img src="https://www.bitgaintech.com/assets/images/bitgain-tech-symbol.png" style="height:20px; width:20px;"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="cook cookie-alert">
                <div class="cookie">
                    <div class="cookie-p">
                        <p> We use cookies to improve your website experience. By navigating our site, you agree to allow us to use cookies, in accordance with our <a href="privacy-policy#tab_cookie" style="color:#77a3ab;">Cookie Policy</a></p>
                    </div>
                    <div class="cookie-btn">
                        <a href="https://www.cookiesandyou.com/" target="_blank">Learn More</a>
                    </div>
                    <div class="cookie-btn accept-cookies">
                        <a href="">Ok Continue</a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--footer end-->
    <style>
        .f-heading {
        font-size: 1rem;
        color: #77a3ab!important;
        font-weight: 600;
    }
        .cook{
             width: 100%;
             background:#f0f0ea!important;
             padding:8px 70px;
             position:fixed;
             z-index:1000;
             bottom:0;
             opacity: 0;
          transform: translateY(100%);
          transition: all 500ms ease-out;
            }
           .cookie{
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center
             position: fixed;
             flex-wrap: wrap;
            }
            .cookie .cookie-p p{
                color:#495057!important;
                margin:0px!important;
                font-size:15px!important;
                font-weight:500!important;
            }
            .cookie-btn a{
            width: 100%;
            padding: 7px 15px;
            background-color: #77a3ab;
            border-radius: 5px;
            color: #fff!important;
            font-size: 14px;
            text-decoration:none;
            font-weight:500!important;
            }
        .cookie-alert.show {
          opacity: 1;
          transform: translateY(0%);
          transition-delay: 1000ms;
        }
        
        
        /* crousel css starting */
        .vert .carousel-item-next.carousel-item-left,
        .vert .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
        }
        
        .vert .carousel-item-next,
        .vert .active.carousel-item-right {
            -webkit-transform: translate3d(0, 100%, 0);
                    transform: translate3d(0, 100% 0);
        }
        
        .vert .carousel-item-prev,
        .vert .active.carousel-item-left {
        -webkit-transform: translate3d(0,-100%, 0);
                transform: translate3d(0,-100%, 0);
        }
        .carousel-item {
            transition-duration: 2s;
        }
        /* end crousel css */
        
        
    /*footer botton hover effect css*/
    .btn-2:hover {
    color: #fff;
    background: #77a3ab;
    }
    /*End footer btn css*/
    </style>
    <!--cookies policy end-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <!--swal cnd for popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!--   End swal cdn popup-->
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
              autoplay:false,
              autoplayHoverPause:true,
              margin: 10,
              stagePadding: 0,
              nav: false,
              loop: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 3
                },
                1000: {
                  items: 4
                }
              }
            })
          })
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
                items: 6
              },
              1200: {
                items: 7
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
        window.onload = function () {
        var navbar = document.getElementById("navbar");
        if (navbar) {
            navbar.style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent)";
        }
    };
    </script>
    <script>
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
    <!--transparent nabigation-->
    <script>
        (function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookie-alert");
    var acceptCookies = document.querySelector(".accept-cookies");

    cookieAlert.offsetHeight; 

    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 60);
        cookieAlert.classList.remove("show");
    });
})();

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
    </script>
    @if(Session::has('success'))
    <script>
        swal("Message", "{{ Session::get('success') }}","success")
    </script>
    @endif
    <script>
        $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.scrollToTop').fadeIn();
            document.getElementById('mybutton').style.display = "block";
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    </script>
    @yield('') @yield('scripts')
</body>

</html>

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
    <title>{{'Far And Beyond | Blogs'}}</title>
    <meta name="description" content="{{ $meta->description ?? 'Distinct Destinations Payment Policy, Please read carefully' }}" />
    <meta name="keywords" content="{{ $meta->keywords ?? 'not working' }}" />
    <!--<title></title>-->
    <!--<meta name="description" content=" " />-->
    <!--<meta name="keywords" content=" " />-->
    <!-- css****** -->
    <link rel="icon" href="{{asset('images/icon/fevicon.png')}}" type="image/png" sizes="16x16">
    <link href="{{asset('css/custom_style.css')}}?v={{ file_exists(public_path('css/custom_style.css')) ? filemtime(public_path('css/custom_style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('style.css')}}?v={{ file_exists(public_path('style.css')) ? filemtime(public_path('style.css')) : time() }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('css/responsive-fixes.css')}}?v={{ file_exists(public_path('css/responsive-fixes.css')) ? filemtime(public_path('css/responsive-fixes.css')) : time() }}" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/futura-font@1.0.0/styles.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--swal cnd for popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!--<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">-->
    <!--End swal cdn popup-->
    <style>
     body {
    background-color: #fffaf0;
}
        body{
            
        }
        
          p {
            font-family: "Futura Book" !important;
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
              font-family:"Futura Book"!important;
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
              font-size: 1.5rem;
              padding: 0.4rem;
             }

    /*     .mainu {*/
    /*    position: absolute;*/
    /*    width: 24.5vw;*/
    /*    height: auto;*/
    /*    background: black;*/
    /*    z-index: 1000;*/
    /*    height: auto;*/
    /*    visibility: hidden;*/
    /*    top: 50px;*/
    /*    right: -195px;*/
    /*}*/
    /*      .tog-btn:hover .mainu{*/
    /*          visibility: visible;*/
    /*      }*/
          .list-mainu{
              padding:0px;
              text-align:left;
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

      .cook {
          padding:22px 11px!important;
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
            width:200px;
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
     a.card_btn:hover {
        background-color: #77a3ab !important;        
        color: #fff;                   
        transform: scale(1.05);          
        border: 2px solid #c9dbf3;
      }
    
 .blog-grid .cont_card:hover .card_btn
   {
    background-color: #77a3ab;
    color: #fff;
    box-shadow: 0px 2px 0px #77a3ab;
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
                                        <img src="{{asset('images/logo/logo_far_and_beyond.png')}}" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="logo" id="logo2" style="display:none;">
                                <a href="{{ route('home') }}" class="logo">
                                    <div class="header-logo">
                                        <img src="{{asset('images/logo/logo_far_and_beyond_black.png')}}" alt="logo">
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
                                                    <li class="list"><a href="inspiring-experiences">INSPIRING EXPERIENCES</a></li>
                                                    <li class="list"><a href="responsible-travel">RESPONSIBLE TRAVEL</a></li>
                                                    <li class="list"> <a href="about-us#why-us">WHY US</a></li>
                                                    <li class="list"><a href="about-us#our-team">MEET OUR TEAM</a></li>
                                                    <li class="list"> <a href="{{route('blog')}}">BLOGS</a></li>
                                                    <li class="list"> <a href="contact-us">CONTACT</a></li>
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
    </header>
     <section class="hero" style="position:relative; ">
        <div class="banner">
          <img src="{{asset('images/blogs/blogs-cover.webp')}}" class="d-block w-100" alt="Luxury Travels Bali">
         </div>
      <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hero-title" style="text-align:center;">
              <h2 style="font-size:4.5rem;line-height: .8em; color:#FFF;">Blogs</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="cat-manag">
            <select class="form-select" onchange="myChangeHandler.apply(this)" >
              <option value="{{route('blog')}}" >--Select Category--</option>
              @foreach($PostCat as $cat_name)
              <!--<option value="blog/{{$cat_name->category}}">{{$cat_name->category;}}</option>-->
               @if(collect(request()->segments())->last() ==  $cat_name->category)
               <option value="{{route('catblog',[$cat_name->category])}}" selected= "true">{{$cat_name->category;}}</option>
               @else
               <option value="{{route('catblog',[$cat_name->category])}}">{{$cat_name->category;}}</option>
                @endif
              @endforeach
            </select>
        </div>
    </section>
<style>
*:focus {
    box-shadow: none !important;
}
.form-select{
     cursor:pointer;
     font-size:18px;
}
.cat-manag{
    padding-top:1.5rem;
    width: 20rem;
    margin: auto;
}
   @media only screen and (max-width:768px) {
    .contact {
        display:none;
    }
     .hero-title h2{
        font-size:2rem!important;
        
    }
    .about-img1 {
        padding:10px!important;
    }
    .imag-p{
        padding:0px!important;
        margin-bottom:10px;
    }
   }
    p {
    color: #495057;
    font-family: "Futura Book" !important;
}
  .blog-d{
      padding:10px;
  }  
  .container{
    max-width: 1250px;
    padding: 0 15px;
    width: 100%;
    margin: 0 auto;
  }
  .blog-d .content{
      padding:20px;
      box-sizing:border-box;
  }
  .blog-d .content h2{
      margin:20px 0px;
  }
  .blog-uc{
    border-top: 1px solid rgba(0, 0, 0, .2117647059);
    border-right: 1px solid rgba(0, 0, 0, .2117647059);
    border-bottom: 1px solid rgba(0, 0, 0, .2117647059);
  }
  
.blog-img img{
 width:100%;
}
.blog-img{
    padding-right:0px;
}
.blog-d a{
    text-decoration:none;
    color:red;
}
.inner-grid img{
    width:100%;
}
.inner-grid .conte{
    padding: 20px 20px 10px 20px;
    /*height:185px;*/
    height:170px;
    width:100%;
    /*padding:24px;*/
    /*border-left: 1px solid rgba(0, 0, 0, .2117647059);*/
    /*border-right: 1px solid rgba(0, 0, 0, .2117647059);*/
    /*border-bottom: 1px solid rgba(0, 0, 0, .2117647059);*/
}
.inner-grid a{
    text-decoration: none;
    color:black;
}
.blog-grid{
    padding-bottom:25px;
}
.inner-grid img{
          display: block;
          transition: transform 2s;
          
      }
.inner-grid .img{
          overflow: hidden;  
          cursor:pointer;
      }
      .inner-grid{
         overflow:hidden;
      }
.inner-grid:hover img {
    transform: scale(1.3);
    transform-origin: 50% 50%;
 }
 .cont_card{
    /*background: green;*/
    width: 100%;
    width: calc(100% - 40px);
    margin: -30px auto 0;
    background-color: #fff;
    position: relative;
    z-index: 0;
    transition: transform 300ms;
    transform: translateY(0);
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}
 .card_btn{
    width: 100%;
    padding: 8px 0px 8px 0px;
    border: none;
    color: white;
    background-color: #000;
    box-shadow: 0px 2px 0px #00402e;
    /* text-transform:uppercase; */
    font-size:16px;
    margin-top:20px;
 }
 a:hover .cont_card{
     transform: translateY(-65px)
 }
 /*section{*/
 /*    background:#f2f2f2;*/
 /*}*/
 .explor{
    text-align: center;
    padding-top: 20px;
    padding-bottom: 20px;
 }
 .expo {
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
    border: 1px solid black;
    min-width: 133px;
 }
 .dest-btn {
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-bottom: 60px;
}
 .explor a{
    text-decoration: none;
    border: 1px solid;
    padding: 12px 39px 12px 40px;
    text-transform: uppercase;
    background: black;
    color: white;
}
.explor:hover a{
    border:1px solid black;
    color:black;
    background:white;
}
.date{
    padding: 6px 0px 6px 0px;
    font-size: 14px;
    font-weight: 500;
    color: #b3b3b3;
    display: inline-block;
}
.conte h3{
    font-size:26px;
}
.sd-h6{
    font-weight: 500;
    line-height: 24px;
    margin-bottom: 0rem !important;
    font-size: 20px !important;
    font-weight: 5;
    color: black;
}

.expo a:hover {
    display: inline-block;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 17px;
    text-decoration: none;
    color: #000;
    background: #fff;
    font-weight: 500;
    border:1px solid black;
    min-width: 133px;
}
.auth{
  display: flex;
  text-align:center;
  align-items:center;
  justify-content:space-between;
}
.inner-grid .img {
  max-height: 187px;
}
</style>
{{--dd($blog_data)--}}
<section class="blog-grid" style="padding-top:20px;">
  <div class="container">
      <div class="row">
        @foreach($blog_data as $data)
          <div class="col-lg-4 col-md-6 col-sm-12 inner-grid" style="height:400px; margin-bottom:25px;">
              <a href="{{ url('blog/'.strtolower($data->category).'/'.$data->slug) }}">
              <div class="img">
                  <img src="{{asset('thumbnail/'.$data->images)}}" alt="">
              </div>
              {{-- !!$blogvalue->description ?? ''!! --}}
              <div class="cont_card">
               <div class="conte">
                  <p class="sd-h6">{{Illuminate\Support\Str::limit(strip_tags($data->title) ,$limit = 45, $end = '...')}}</p>
                   <span class="date"><small>{{\Carbon\Carbon::parse($data->date)->isoFormat('Do MMM YYYY')}}</small> | </span> <span class="date">{{$data->category}}</span> 
                  <p style="font-size:1.0rem!important;">
                    {{Illuminate\Support\Str::limit(strip_tags($data->description) ,$limit = 90, $end = '...')}}
                   </p>
               </div>
               <button class="card_btn">Read More</button>
             </div>
             </a>
          </div>
          @endforeach
      </div>
      
  </div>
</section>
<!-- <div class="dest-btn">
                <button class="expo" onclick="myFunction();"> View All Videos</button>
           </div> -->
<!-- <section style="padding-bottom:40px;">
<div class="dest-btn">
                <button class="expo" onclick="myFunction();"> View All Videos</button>
           </div> -->
    <!-- <div class="explor">
        <a href="">load More</a></div> -->
<!-- </section> -->
<style>
      /* Newsletter Section */


.form-inline {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  flex-wrap: wrap;
}

.form-inline .form-group {
  width: 33%;
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

.btn-2 {
  padding: 12px 25px !important;
  border: 1px solid rgb(255 255 255 / 50%);
  color: white !important;
  font-size: 13px !important;
  line-height: 14px;
  letter-spacing: 1px;
  position: relative;
  z-index: 0;
}

.btn-2:hover a {
  color: black;
  background: white;
}

/* Footer Links and Layout */


/* Footer Logo */


/* Scroll to Top Button */


/* Copywrite Section */


/* Carousel container if used in footer */
.owl-carousel {
  width: 100% !important;
  z-index: 0 !important;
}

.owl-carousel .owl-stage {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
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
                        <div class="news-cont">Join our travel notebook!</div>
                        <div class="news-desc news-cont">Stay ahead with the latest updates in travel trends.</div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                         <form class="form-inline" action="{{ route('admin.save.subscription') }}" method="POST"
                        onsubmit="return validateForm()">
                        @csrf
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Name" name="Name"    required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Enter email" name="email"  required>
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
                                <a href="https://www.farandbeyond.in">
                                    <div class="footer-logo">
                                        <img src="{{asset('images/logo/footer-logo.png')}}" alt="logo">
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
                                    <li class="list-item">
                                        <a href="inspiring-experiences">
                                            <span>Inspiring Experiences</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="responsible-travel">
                                            <span class="">Responsible Travel</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="about-us#our-team">
                                            <span class="">Our Team</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="https://www.distinctdestinations.in/pay-online" target="_blank">
                                            <span class="">Payment Links</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="contact-us">
                                            <span class="">Contact Us</span>
                                        </a>
                                    </li>
                                      <li class="list-item">
                                        <a href="{{ url('pay-online') }}">
                                            <span class="">Demo Payment Links</span>
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
                                <h3 class="f-heading">Services</h3>
                                <ul class="f-list-item">
                                    <li class="list-item">
                                        <a href="services#luxury-collection">
                                            <span class="">The Luxury Collection</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="services#meetings-and-conferences">
                                            <span class="">Meetings & Conferences</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="services#incentives">
                                            <span class="">Incentives</span>
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
                                <p class="list-item" style="font-size:16px!important; color:black;">
                                    Unit No 701 to 708
                                    <br/> Tower D, Global Business Park
                                    <br/> Sector-26, Gurugram, Haryana, 122002
                                    <br/> +91 9599-360-800
                                    <br> info@farandbeyond.in
                                </p>
                                <ul class="f-list-item">
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
                        <ul class="copy-itm">
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
                                <a href="https://bitgaintech.com/" target="_blank">
                                    <span style="color:#0dcaf0;padding:0px!important; font-weight:bold;">bit</span><span style="color: #28a745;padding:0px; font-weight:bold;">Gain</span><span style="padding:0px!important; font-weight:bold; color:gray;">-Tech</span>
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
    <!--cookies policy end-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
              autoplay:true,
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
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 520 || document.documentElement.scrollTop > 520) {
            
            document.getElementById("navbar").style.background = "rgb(255 255 255 / 50%)";
            document.getElementById('logo1').style.display = "none";
            document.getElementById('logo2').style.display = "block";
            document.getElementById('logo3').style.display = "none";
            document.getElementById('logo4').style.display = "block";
          } else {
           
              document.getElementById("navbar").style.background = "none";
              document.getElementById('logo2').style.display = "none";
              document.getElementById('logo1').style.display = "block";
              document.getElementById('logo4').style.display = "none";
              document.getElementById('logo3').style.display = "block";
          }
        }
         function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
</script>
    <script language="javascript">    
   function myChangeHandler() 
   {
    window.location.replace(this.options[this.selectedIndex].value);
    this.form.submit();
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
      
     @yield('')
      @yield('scripts')
</body>

</html>
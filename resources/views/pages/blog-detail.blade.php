<!--//@extends('layouts.master') @section('main-content')
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
    @foreach($blog_detail as $blogvalue)
    <title>{{$blogvalue->title;}}</title>
    <meta name="description" content="{{ $meta->description ?? 'Distinct Destinations Payment Policy, Please read carefully' }}" />
    <meta name="keywords" content="{{ $meta->keywords ?? 'not working' }}" />
    <!--<title></title>-->
    <!--<meta name="description" content=" " />-->
    <!--<meta name="keywords" content=" " />-->
    <!-- css****** -->
    <link rel="icon" href="{{asset('images/icon/fevicon.png')}}" type="image/png" sizes="16x16">
    <link href="{{asset('css/custom_style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('style.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="{{asset('css/responsive-fixes.css')}}" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/futura-font@1.0.0/styles.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--swal cnd for popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!--<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">-->
    <!--End swal cdn popup-->
    <style>
    .test1{
        line-height: 1.5em!important;
    }
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
    .bot-title{
        position: absolute;
        bottom: 70px;
    }
    .hero-title{
        padding-left:50px;
    }
    .hero-title small{
        color:white; 
        font-size:20px;
        padding: 20px 0px;
        display: inline-block;
    }
    .hero-title h2{
        font-size:2rem;
        line-height: .8em;
        color:#FFF;
    }
    
  @media (max-width: 767px) {
   .hero-title h2{
        font-size: 17px;
        line-height: 24px;
        color: #FFF;
    }
 .bot-title {
    position: absolute;
    bottom: 5px;
}
.hero-title small {
    color: white;
    font-size: 20px;
    padding: 8px 0px;
    display: inline-block;
}
}
    </style>
</head>
</header>
<base href="/">
<section class="hero" style="position:relative; ">
    <div class="banner">
        <img src="{{asset('thumbnail/'.$blogvalue->images)}}" class="d-block w-100" alt="Luxury Travels Bali">
    </div>
    <div class="container bot-title">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="hero-title">
                    <small>{{\Carbon\Carbon::parse($blogvalue->date)->isoFormat('Do MMM YYYY')}}</small>
                    <h2 class="test1">{{$blogvalue->title;}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
     
    {{-- dd($blog_detail); --}}
    <div class="container">
        <div class="page-detail">
            <div class="row">
                <div class="col-lg-9">
                {!!$blogvalue->description ?? ''!!}
                    
                    <!-- <h3>Royal Splendour</h3>
                    <p>The majesty of this ancient Himalayan kingdom remains a shining allurement in the eyes of a photographer. Despite the march of time and Bhutan’s stepping away from an absolute hereditary monarchy to a constitutional monarchy in the
                        transition to a parliamentary democracy, the country keeps alive many old cultural traditions, which continue to enrich the visitor experience.</p>
                         -->
                        <!-- <div class="image">
                        <div class="img"><img src="https://www.distinctdestinations.in/DistinctDestinationsBackEndImg/downloads/dzong-culture.jpg"></div>
                        <div class="img" style="margin-left:27px;"><img src="https://www.distinctdestinations.in/DistinctDestinationsBackEndImg/downloads/dzong-culture.jpg"></div>
                        </div>
                        {{strip_tags($blogvalue->description);}} -->
                        <!-- <h3>Royal Splendour</h3>
                    <p>The majesty of this ancient Himalayan kingdom remains a shining allurement in the eyes of a photographer. Despite the march of time and Bhutan’s stepping away from an absolute hereditary monarchy to a constitutional monarchy in the
                        transition to a parliamentary democracy, the country keeps alive many old cultural traditions, which continue to enrich the visitor experience.</p>
                        <h3>Royal Splendour</h3>
                    <p>The majesty of this ancient Himalayan kingdom remains a shining allurement in the eyes of a photographer. Despite the march of time and Bhutan’s stepping away from an absolute hereditary monarchy to a constitutional monarchy in the
                        transition to a parliamentary democracy, the country keeps alive many old cultural traditions, which continue to enrich the visitor experience.</p>
                 -->
                </div>
                <div class="col-lg-3">
                    <div class="blog-category">
                        <div class="sidebar-cat">
                        <h3>Category</h3>
                       </div>
                       <ul class="list">
                          @foreach($count_value as $key => $value)
                        <li class="cat"><a href="blog/{{$key}}">{{ $key }} ({{ $value }})</a><li>
                        @endforeach  
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<style>
    p {
    color: #495057;
    font-family: "Futura Book" !important;
}
.owl-theme .owl-dots .owl-dot {
    zoom: 1;
    display: none!important;
}
.image{
    width: 100%;
    height:auto;
    padding:25px 0px;
}
.image .img{
    width: 48%;
    display: inline-block;
    min-width: 284px;
    max-height:433px;
}
.image .img img{
    width:100%;
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
   
 .page-detail{
    padding:60px 5px;
 }
 .page_detail h3{
    font-size:26px;
    font-weight:500;
    color:black;
    margin-bottom: 12px!important;
 }
 .page_detail h1 {
    font-size:29px!important;
    margin-bottom:10px!important;
    font-weight:500;
 }
 .sidebar-cat{
    border-bottom: 1px solid;
    padding-bottom: 7px;
    margin-bottom: 11px;
 }
 .cat{
    font-size: 20px!important;
    font-weight: 500!important;
 }
 .blog-category{
   padding-left:20px;
 }
 .list {
    list-style: none;
    padding:0px;
 }
 .list li{
    padding:3px 0px;
 }
 .list a{
    color:black;
    text-decoration: none;
 }
 .list a:hover{
    margin-left:20px;
    transition: all 1s ease;
    transition-behavior:normal;
    transition-duration: 1s;
    transition-timing-function: ease;
    transition-delay: 0s;
    transition-property:all;

 }
</style>
{{--dd($blog_data)--}}

 <style>
      /* Newsletter Section */
.news-latter {
  transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
  padding: 64px 30px 62px 30px;
  background: #000000;
}

.news-cont {
  color: white;
  font-size: 21px;
  font-weight: 400;
  line-height: 35px;
}

.group-aff {
  text-align: center;
  padding-bottom: 20px;
  color: white;
}

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
.footers {
  border-top: 1px #dedede solid;
  transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
  padding: 50px 30px 0px 30px;
}

.f-list-item {
  padding-left: 0px;
}

.f-list-item .list-item {
  list-style: none;
  padding: 0px 0px;
}

.f-list-item .list-item a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  text-transform: none;
  line-height: 16px;
  letter-spacing: .5px;
  color: black;
  transition: all 0.2s ease;
}

.f-list-item .list-item a:hover {
  margin-left: 5px;
  border-bottom: 3px solid #FFA8B0;
}

.f-heading {
  font-size: 1rem;
  color: #000;
  font-weight: 600;
}

/* Footer Logo */
.footer-logo img {
  width: 125px;
  object-fit: cover;
}

/* Scroll to Top Button */
.btn-top {
  position: fixed;
  bottom: 50px;
  right: -200px;
  border: 1px solid #77a3ab;
  height: 41px;
  width: 41px;
  text-align: center;
  border-radius: 50px;
  background: #77a3ab;
  visibility: hidden;
  opacity: 0;
  z-index: 99;
  transition: all 1s ease;
}

.btn-visible {
  visibility: visible;
  opacity: 1;
  right: 25px;
}

.btn-top img {
  width: 100%;
  cursor: pointer;
}

/* Copywrite Section */
.copywrite {
    background: #dbd4d4;
    padding: 10px 0;
    border-top: 1px #dedede solid;
    color: black;
    text-align: center;
}

.copy-itm {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  list-style: none;
  flex-wrap: wrap;
  padding-left: 0px;
  margin: 0px !important;
}

.copy-itm .list-itm span {
  color: black;
  font-weight: 100;
  padding-left: 24px;
  font-size: 14px;
}

.footer-cent {
  display: flex;
  justify-content: center;
  text-align: center;
  align-items: center;
}

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
   .f-heading {
        font-size: 1rem;
        color: #77a3ab!important;
        font-weight: 600;
    }
 </style>
@endsection
@section('scripts')
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
@endsection
@extends('layouts.master') @section('main-content')
<section class="" style="background: #f0f0ea !important;">
    <div class="video">
        <!--<video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src=" https://www.distinctdestinations.in/asset/video/ddvideos.mp4" id='video-slider-1'></video>-->
        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{asset($pageData['section1video'] ?? '' )}}" id='video-slider-1'></video>
        <!--<img src="slider/banner-1.jpg" alt="banner-1">-->
        <div class="text-video">
              
            <h2 class="home-banner"><span>{{ $pageData['section1heading'] ?? '' }}</span></h2>
        </div>
    </div>
</section>
<section class="trips-bg" style="background:#f0f0ea!important;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="trips-text">
                    <!-- <h2 style="margin-top:25px;margin-bottom:10px;"><span class="titleheading1">The Luxury Specialists</span></h2>--> 
                     {!! $pageData['section2title'] ?? '' !!}
                    <div class="btn_know  expo2 "><a class="btn_more" href="about-us" style="text-decoration:none;">Know More</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="destination div-services-1" style="padding-top: 55px;padding-bottom: 45px; padding-left:30px;padding-right:35px; background-image: url('public/images/home/srvceback.png');" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12" style="position:relative">
                <div class="inner_img_text1">
                    <h2 style="color:#000;text-align: left;">IMMERSIVE JOURNEYS </h2>
                    <div class="slider_p" style="padding-top: 10px;">
                        <!--<p style="text-align: left; font-size:18px!important; color:white;">-->
                        <!--    Every great journey begins with thoughtful design. Our services are crafted to inspire Ã¢â‚¬â€ combining rich storytelling with seamless execution.-->
                        <!--</p>-->
                       <p style="text-align: left; font-size:18px!important; color:#000;">Personal journeys. Private experiences. Individual ways to discover India, Nepal, Bhutan and Srilanka.</p>
                    </div>
                    <div class="ourser-btn">
                        <button class="expo1"><a href="services">Read More</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                @if(count($multipleServices) > 3)
                    <div class="owl-carousel  owl-carousel1 owl-theme">
                        @foreach($multipleServices as $Services)
                            <div class="item desti-img img-hove2 srv-img">
                                <div class="card">
                                    <img src="{{ asset($Services->image_path ?? '') }}" alt="vote-for-us">
                                    <a href="services#{!! $Services->tag_service_page !!}" style="text-decoration:none;" class="hiden">
                                        <div class="offer-slider-btn-expele">
                                            <h2 style="font-size: 23px; color:white;">{!! $Services->heading !!}</h2>
                                            <div class="slider_p new_style" style="padding-top: 10px;">
                                                <p> {!! $Services->content_value !!}</p>
                                            </div> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        @foreach($multipleServices as $Services)
                            <div class="col-lg-4 col-md-6 col-sm-12 desti-img img-hove2 srv-img">
                                <div class="card">
                                    <img src="{{ asset($Services->image_path ?? '') }}" alt="vote-for-us">
                                    <a href="services#{!! $Services->tag_service_page !!}" style="text-decoration:none;" class="hiden">
                                        <div class="offer-slider-btn-expele">
                                            <h2 style="font-size: 23px; color:white;">{!! $Services->heading !!}</h2>
                                            <div class="slider_p new_style" style="padding-top: 10px;">
                                                <p> {!! $Services->content_value !!}</p>
                                            </div> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
    <style>
       .new_style p { color: white; font-size: 18px!important; }
        .new_style h4 { font-size: 24px; color: white; }
        .inner_img_text {
            position: absolute;
            top: 40%;
            left: 40%;
            transform: translate(-50%, -50%);
            font-size: 25px;
            font-weight: 500;
            color: black;
        }

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
</section>
<div class="why-choose">
    <div class="container">
        <div class="row">
            <h2 class="text-center">WHY ONELUXE</h2>
			<h5 class="text-center">BECAUSE ULTRA-LUXURY IS PERSONAL</h5>
            <div class="col-lg-3 col-md-4 col-12 top-features">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/last minute experts.png')}}" class="img-fluid">
                    <h4>THREE DECADES OF EXPERTISE</h4>
                    <div class="slider_p">
                        <p>Three decades of collective experience and first-hand destination knowledge.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Destination Advisors.png')}}" class="img-fluid">
                    <h4>WE LISTEN FIRST</h4>
                    <div class="slider_p">
                        <p>Your interests, preferences, pace, and priorities shape every journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Travel Assurance.png')}}" class="img-fluid">
                    <h4>PERSONAL ADVISORS</h4>
                    <div class="slider_p">
                        <p>One-to-one expertise and continuity from the first conversation onwards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Insider Access.png')}}" class="img-fluid">
                    <h4>PRIVATE & INSIDER ACCESS</h4>
                    <div class="slider_p">
                        <p>Private experiences, privileged introductions and access beyond the conventional.</p>
                    </div>
                </div>
            </div>
               <div class="col-lg-3 col-md-4 col-12 top-features">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/24_7 Support.png')}}" class="img-fluid">
                    <h4>INDIVIDUALLY DESIGNED</h4>
                    <div class="slider_p">
                        <p>Every journey is designed around the person travelling, never a template.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Total Privacy.png')}}" class="img-fluid">
                    <h4>TOTAL PRIVACY</h4>
                    <div class="slider_p">
                        <p>Discreet planning, confidential arrangements and personal space throughout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Flawless Execution.png')}}" class="img-fluid">
                    <h4>FLAWLESS EXECUTION</h4>
                    <div class="slider_p">
                        <p>Every detail coordinated with precision, from arrival to departure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Client First.png')}}" class="img-fluid">
                    <h4>24/7 SUPPORT</h4>
                    <div class="slider_p">
                        <p>Responsive on-ground assistance whenever and wherever it is needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
/*new css for home page*/
         .inspired_slider .desti-img  img {
            width: 100%;
            height: auto;
            max-height: 500px;
            transition: .6s linear;
            
        }
        .inspired_slider .desti-img {
            position: relative;
            /padding-left: 12px;/
            padding-right: 0px !important;
            overflow: hidden;
            margin-bottom: 10px;
            border-radius:20px;
            transition: .4s linear;
        }
       /*.inspired_slider .desti-img:hover{*/
       /*     border-radius: 0px 75px 0px 75px; */
       /* }*/
        .inspired_slider .desti-img:hover:before {
            height: 100%;
        }
         .inspired_slider  .desti-img .card .h3 h2::before,
    .inspired_slider  .desti-img .card .h3 h2::after {
      content: '';
      position: absolute;
      opacity: 0; 
      transition: opacity 0.3s ease 0.2s, transform 0.3s ease 0.2s;
      pointer-events:none;
    }

    /*.inspired_slider  .desti-img .card .h3 h2::before {*/
    /*     top: 5px;*/
    /*bottom: 6px;*/
    /*left: -5px;*/
    /*right: 10px;*/
    /*border-top: 0.5px solid #fff;*/
    /*border-bottom: 0.5px solid #fff;*/
    /*transform: scaleX(0);*/
    /*transform-origin: left;*/
    /*width: 105%;*/
    /*}*/

    /*.inspired_slider  .desti-img .card .h3 h2::after {*/
    /*      height: 105%;*/
    /*top: -2px;*/
    /*  bottom: 10px;*/
    /*  left: 6px;*/
    /*  right: 6px;*/
    /*  border-left: 0.5px solid #fff;*/
    /*  border-right: 0.5px solid #fff;*/
    /*  transform: scaleY(0);*/
    /*  transform-origin: top;*/
    /*}*/

    /*.inspired_slider  .desti-img:hover .card .h3 h2::before,*/
    /*.inspired_slider  .desti-img:hover .card .h3 h2::after {*/
    /*  opacity: 1;*/
    /*  transform: scale(1);*/
    /*} */
         .inspired_slider  .desti-img .card .h3 h2{
    margin: 0px 0 0px;
    transition: .6s linear;
    padding: 10px 45px;
    width: 85%;
        }
        .inspired_slider .owl-stage{
            padding-top: 20px;
        }
        .inspired_slider  .desti-img span {
            position: absolute;
            top: 50%;
            left: 50%;
            /transform: translate(-50%, -50%);/
            transform: translate(-50%, 492%);
            font-size: 25px;
            font-weight: 500;
            color: white;
        }
       .inspired_slider  .desti-img:hover .card .h3{
    height: 150px;
    
    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #1a1b1a 100%);
        }
 
        .owl-carousel1 .owl-item img{
            border-radius: 20px;
            transition: .6s;
        }
        .owl-carousel1 .owl-item:hover img{
            transform: scale(1.2);
        }
        .owl-carousel1 .desti-img{
            border-radius: 20px;
            overflow: hidden;
        }
        .owl-carousel1 .desti-img .card{
            height: 430px;
        }
        .owl-carousel1 .desti-img .card img{
            height: 100%;
        }
        /*.owl-carousel1 .desti-img:hover{*/
        /*        box-shadow: 3px 3px 1px white;*/
        /*}*/
        .owl-carousel1 .offer-slider-btn-expele .slider_p{
            position: relative;
        }
        .owl-carousel1 .offer-slider-btn-expele .slider_p p{
            color: white !important;
        }
        .owl-carousel1 .desti-img .card{
            border:none;
        }
        .owl-carousel1 .offer-slider-btn-expele::before{
            background: linear-gradient(0deg, rgba(0, 0, 0, .7), transparent);
    content: "";
    display: block;
    height: 100%;
    left: 0;
    opacity: .53;
    position: absolute;
    top: 0;
    transition: opacity .3s ease-in-out;
    width: 100%;
        }
        .owl-carousel1:hover .offer-slider-btn-expele::before{
            opacity: 1;
        }
        .owl-carousel1 .offer-slider-btn-expele{
            height: auto;
            bottom: 0px;
            transition: .2s;
            margin: 0px;
        }
        .owl-carousel1 .offer-slider-btn-expele h2{
            margin: 50px 0px 0px;
        }
        .srv-img:hover .offer-slider-btn-expele{
            bottom: 0px !important;
        }
        .div-services-1 .inner_img_text1 h2{
                margin: 50px 0 10px;
        }
        .div-services-1{
                background-attachment: scroll;
                    position: relative;
                        background-size: cover;
    overflow: hidden;
        background-repeat: no-repeat;
            margin:0px 0px;
        }
        .expo1{
            background: transparent;
            border: none;
        }
        .expo1 a {
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
    border: 1px solid black;
    min-width: 133px;
    position: relative;
    border-radius: 17px 0px 17px 0px;
    transition: .6s;
}
   .expo2 a {
    display: inline-block;
    padding-top: 3px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    text-decoration: none;
    color: #000;
    background: #fff;
    font-weight: 500;
    border: 1px solid black;
    min-width: 133px;
    position: relative;
    border-radius: 17px 0px 17px 0px;
    transition: .6s;
}
 .expo2 a:hover {
    display: inline-block;
    padding-top:3px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    text-decoration: none;
    color: #fff;
    background: #77a3ab;
    font-weight: 500;
    border: 1px solid white;
    min-width: 133px;
    border-radius: 0px 17px 0px 17px;
}
.expo1 a:hover {
    display: inline-block;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 17px;
    text-decoration: none;
    color: #fff;
    background: transparent;
    font-weight: 500;
    border: 1px solid rgb(255, 255, 255);
    min-width: 133px;
    border-radius: 0px 17px 0px 17px;
}
/*End new css*/
    .why-choose img {
        width: 65px;
      }

      .desti-img img {
        width: 100%;
        height:auto;
       max-height:500px;
      }

      .dest-heading {
        text-align: center;
        padding:50px 0px 40px 0px;
      }
     
      .dest-heading h2 {
        /*font-size: 40px;*/
        /*margin-top: 50px;*/
        /*margin-bottom:35px;*/
        
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
      h2{
          /*text-transform:uppercase;*/
      }
      .desti-img {
        position: relative;
        /*padding-left: 12px;*/
        padding-right:0px!important;
        /*overflow: hidden;*/
        margin-bottom:10px;
      }
    /* .img-hover1 img:hover {*/
    /*  background-color: black; opacity: 0.8; transition: all .5s ease-in-out;*/
    /*  filter:brightness(60%);*/
    /*  color:white;*/
    /*}*/

      .img-hover:before {
        /*content: '';*/
        /*display: block;*/
        /*position: absolute;*/
        /*height: 0%;*/
        /*width: 100%;*/
        /*bottom: 0;*/
        /*transition: height 0.5s ease-out;*/
      }

      .desti-img:hover:before {
        height: 100%;
      }

      .texti-section img {
        width: 100%;
        height: auto;
        /*object-fit: contain*/
        min-height: 40vw;
        height:100%;
        border-radius: 55px;
        padding: 20px;
      }

      /*.texti-section{*/
      /*    margin-bottom:15px;*/
      /*}*/
      .texti-section .texti-inner {
        padding: 25px 100px;
        position:relative;
        top:25px;
      }

      .texti-section .texti-inner h2 {
        text-align: left;
        margin-top: 51px;
        margin-bottom: 25px;
        color:#77a3ab!important;
      }

      .inspired_section {
        padding: 5px 0px;
      }
    .offer-slider-btn-expele p{
        display:none;
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
        transition: 2.5s;
        margin: 0px 20px;
        position: absolute;
        bottom: -130px;
        left: 0%;
        right: 0%;
        cursor: pointer;
        height:38vh;
      }
      .offer-slider-btn-expele p{
          color:white!important;
          font-size: 0.85rem!important;
      }
     /* .desti-img:hover .offer-slider-btn-expele{*/
     /*   bottom:20px!important;*/
     /* }*/
     /*.desti-img:hover p{*/
     /*   display:block;*/
     /*}*/
      .trips-slider .owl-item:nth-child(odd) {
           margin-top:0px!important; 
      }
      
      /*services card hover effect*/
      
     .srv-img:hover p{
        display:block;
     }
     
      .srv-slider .owl-item:nth-child(odd) {
           margin-top:0px!important; 
      }
      .img-hover:before {
        content: '';
        display: block;
        position: absolute;
        height: 0%;
        width: 100%;
        bottom: 0;
        transition: height 0.5s ease-out;
        opacity: 1
      }
      /*services card hover effect*/
      @media (min-width: 1200px) {

        .h2,
        h2 {
          /*font-size: 2.8125rem;*/
          font-size: 2rem;
          margin-bottom: 38px;
        }
      }
.expo{
    padding: 0px;
    border: none;
    min-width: 133px;
   }

/*   .expo a {*/
/*    display: inline-block;*/
/*    padding-top: 5px;*/
/*    padding-bottom: 5px;*/
/*    padding-left: 20px;*/
/*    padding-right: 20px;*/
/*    font-size: 17px;*/
/*    text-decoration: none;*/
/*    color: #ffffff;*/
/*    background: #000000;*/
/*    font-weight: 500;*/
/*    border:1px solid black;*/
/*    min-width: 133px;*/
/*}*/
/* .expo a:hover {*/
/*    display: inline-block;*/
/*    padding-top: 5px;*/
/*    padding-bottom: 5px;*/
/*    padding-left: 20px;*/
/*    padding-right: 20px;*/
/*    font-size: 17px;*/
/*    text-decoration: none;*/
/*    color: #000;*/
/*    background: #fff;*/
/*    font-weight: 500;*/
/*    border:1px solid black;*/
/*    min-width: 133px;*/
/*}*/
.expo {
            padding: 0px;
            border: none;
            min-width: 133px;
            background: transparent;
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
            border: 1px solid black;
            min-width: 133px;
            position: relative;
            border-radius: 17px 0px 17px 0px;
            transition: .6s;
        }
    .expo a:hover {
    display: inline-block;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 17px;
    text-decoration: none;
    color: #fff;
    background: #77a3ab;
    font-weight: 500;
    border: 1px solid white;
    min-width: 133px;
    border-radius: 0px 17px 0px 17px;
}
.offer-slider-btn-expele a{
    color:white;
    text-decoration:none;
}
      .botom{
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
    .slider_p{
       height:auto;
       width:100%;
    }
/*.owl-carousel .owl-item img {*/
/*    display: block;*/
/*    width:100px;*/
/*    }*/
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align:center;
    }
    .card .h3{
    font-weight: 400;
    position: absolute;
    bottom: 0px;
    right: 0%;
    left: 0%;
    color: white;
    z-index: 0;
    margin-bottom: 0px;
    padding-bottom: 4px;
    height: 50px;
    transition: .6s linear;
    display: flex
;
    align-items: center;
    justify-content: center;
    
    }
    .dest-btn{
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-top:35px;
    }
    .ourser-btn {
         display: flex;
        text-align: center;
        justify-content: start;
        align-items: center;
        margin-top:18px;
    }
     .inner_img_text1{
         position: absolute;
         bottom: 10px;
         padding: 30px 30px 0px 6px!important;
     }
     .img-hover1{
         overflow:hidden;
     }
    .img-hover1:hover img {
    transform: scale(1.3);
    transform-origin: 50% 50%;
    transition: all .5s ease-in-out
 }
 .card{
     overflow:hidden;
 }
 
 

.image-hover-effect::after {
    content: "";
    position: absolute;
    width: 200%;
    height: 0%;
    left: 50%;
    top: 50%;
    background-color: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%) rotate(-45deg);
    z-index: 1;
}

.image-hover-effect:hover::after {
    height: 250%;
    transition: all 600ms linear;
    background-color: transparent;
}
</style>

<section>
    <div class="destination" style="background-color: #fff; padding-bottom:40px;">
        <div class="dest-heading">
            <h2 style="margin-bottom:0px!important; margin-top:0px;">Destinations</h2>
			<h5 style="margin-bottom:0px!important; margin-top:0px;">FOUR COUNTRIES. ENDLESS POSSIBILITIES</h5>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:30px;padding-right:35px; ">
                <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($destination as $value)
                            <div class="owl-item active ">
                                <div class="item desti-img ">
                                    <a href="{{'destinations#'.strip_tags($value->destination_name) ?? '' }}">
                                        <div class="card img-hover1 image-hover-effect">
                                            <img src="{{asset($value->l_image ?? '') }}" alt="vote-for-us">
                                            <div class="h3">{!! $value->destination_name ?? '' !!}</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dest-btn">
        <button class="expo"><a href="destinations">EXPLORE DESTINATIONS</a></button>
    </div>
    </div>
    </div>   
    </div>
</section>
<style>
.OurComintSec {
    width: 100%;
    position: relative;
    display: flex;
    background-image: url(public/images/home/bckimg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 530px;
    background-position: top center;
}
.OurComintSec:before {
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    position: absolute;
    content: "";
    background-color: #000;
    opacity: .5;
}
.OurComintSec .Cmntmntcl12 {
    display: flex;
    align-items: center;
    width: 100%;
}
.OurComintSec .Cmntmntcl12 .TlteHderShw {
    display: block;
    max-width: 970px;
    margin: 0 auto;
    position: relative;
    text-align: center;
}
.OurComintSec .Cmntmntcl12 .TlteHderShw h5 {
    font-size: 2rem;
    color: #fff;
    line-height: 1;
    margin-bottom: 20px;
}
.OurComintSec .Cmntmntcl12 .TlteHderShw h6 {
    font-size: 1.25rem;
    color: #fff;
    line-height: 1;
    margin-bottom: 20px;
}
.OurComintSec .Cmntmntcl12 .TlteHderShw p {
    color: #fff;
    font-size: 1.25px;
    text-align: center;
}
.Cl12SwMnWth {
    text-align: center;
    margin-top: 40px;
    position: relative;
}
.Cl12SwMnWth a {
    color: #d4620f;
    text-transform: uppercase;
}
.Cl12SwMnWth a img {
    vertical-align: middle;
    margin-left: 10px;
    width: 0px;
    transition: all 1s ease;
}
</style>
<section class="AnimateSec activeAnimte">
    <div class="OurComintSec">
        <div class="Cmntmntcl12">
            <div class="TlteHderShw">
                <h5>LUXURY WITH MEANING</h5>
				<h6>BECAUSE THE PLACES THAT MAKE EXTRAORDINARY JOURNEYS POSSIBLE DESERVE SOMETHING IN RETURN</h6>
                <p>We believe exceptional travel carries responsibility. Through Distinct Steps Foundation, we support initiatives connected to local communities, cultural heritage, and the natural environments that make these destinations extraordinary.</p>
                <div class="Cl12SwMnWth">
                    <button class="expo"><a href="https://www.distinctstepsfoundation.com" target="_blank"> DISCOVER DISTINCT STEPS FOUNDATION </a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="texti-section" style="display:none;">
                <div class="container-fluid">
                    <div class="row">
                        @php
                $img1 = $pageData['section6image1'] ?? null;
                $img2 = $pageData['section6image2'] ?? null;
                $img3 = $pageData['section6image3'] ?? null;
            @endphp
            
            <div class="col-lg-6 col-md-6 col-sm-12 img-respo  image-hover-effect"
                 style="padding: 0px 0px 0px 10px; min-height: 40vw; overflow: hidden; background:#f0f0ea;">
            
                @if(!empty($img1) && !empty($img2) && !empty($img3))
                    <div id="carouselExampleControls" class="carousel1 vert slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset($img1) }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($img2) }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($img3) }}" alt="image">
                            </div>
                        </div>
                    </div>
            
                @elseif(!empty($img1) || !empty($img2) || !empty($img3))
                    {{-- Show only the first available image --}}
                    @if(!empty($img1))
                        <img src="{{ asset($img1) }}" alt="image">
                    @elseif(!empty($img2))
                        <img src="{{ asset($img2) }}" alt="image">
                    @elseif(!empty($img3))
                        <img src="{{ asset($img3) }}" alt="image">
                    @endif
            
                @endif
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px 0px 0px 10px;min-height: 40vw; overflow: hidden;  background:#f0f0ea;">
                <div class="texti-inner">
                    {!! $pageData['section6content'] ?? '' !!}
                    <div class="ourser-btn">
                        <br>
                        <br>
                        <button class="expo" style="display:none"><a href="inspiring-experiences">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="texti-section" style="display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 top-features" style="padding: 0px 10px 5px 0px; background:#FFF7F7; min-height: 40vw; overflow: hidden;  background:#f0f0ea;">
                <div class="texti-inner">
                    {!! $pageData['section7content'] ?? '' !!}
                    <div class="ourser-btn">
                        <br>
                        <br>
                        <button class="expo" ><a href="responsible-travel">Read More</a></button>
                    </div>
                </div>
            </div>
             @php
            $img1 = $pageData['section7image1'] ?? null;
            $img2 = $pageData['section7image2'] ?? null;
            $img3 = $pageData['section7image3'] ?? null;
        @endphp
        
        <div class="col-lg-6 col-md-6 col-sm-12 item-brand img-respo  image-hover-effect"
             style="padding: 0px 10px 5px 0px; min-height: 40vw; overflow: hidden; background:#f0f0ea;">
        
            @if(!empty($img1) && !empty($img2) && !empty($img3))
                <div id="carouselExampleControls" class="carousel1 vert slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset($img1) }}" alt="image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset($img2) }}" alt="image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset($img3) }}" alt="image">
                        </div>
                    </div>
                </div>
            @elseif(!empty($img1) || !empty($img2) || !empty($img3))
                {{-- Show first available image only --}}
                @if(!empty($img1))
                    <img src="{{ asset($img1) }}" alt="image">
                @elseif(!empty($img2))
                    <img src="{{ asset($img2) }}" alt="image">
                @elseif(!empty($img3))
                    <img src="{{ asset($img3) }}" alt="image">
                @endif
            @endif
        
        </div>

        </div>
    </div>
</section> 

<!--new section adding here-->
         <section class="ttm-row connect-section bg-img2 ttm-bgcolor-darkgrey clearfix fixed-bg" style="display:none;">
          <!-- Row -->
          <div class="row m-0">
            <div class="col-lg-12 text-center">
              <!-- Featured Icon Box -->
              <div class="featured-icon-box icon-align-top-content text-center style7 text-opa content-box">
                <div class="featured-content">
                  <div class="featured-desc">
                    <h4 class="title1">Designed for those who find beauty in the details.</h4>
                  </div>
                </div>
                <!--<div class="col-lg-5 mx-auto btn-c">-->
                <!--  <button class="btn1"><a href="contact-us">Get In Touch</a></button>-->
                <!--</div>-->
              </div>
            </div>
          </div>
        </section>
        

<style>
/*new section css*/
/* Fixed background image section */
.connect-section {
  position: relative;
  overflow: hidden;
}

.connect-section::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000;
  opacity: 0.5;
  z-index: 1;
}

.connect-section .content-box {
  position: relative;
  z-index: 2;
}

.fixed-bg {
  background-image: url('public/images/home/cta-2.jpg');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  /*position: relative;*/
  z-index: -1;
}

/* Transparent, blurred content box */
.content-box {
  background: rgba(255, 255, 255, 0); /* White with opacity */
  backdrop-filter: blur(6px);
  padding: 40px 20px;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  display: inline-block;
  margin-top: 40px;
}

/* Optional enhancements */
.btn1 a {
  color: #fff;
  text-decoration: none;
}

.btn1 {
  background-color: #007BFF;
  border: none;
  padding: 10px 25px;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.btn1:hover {
  background-color: #0056b3;
}

    .ttm-row {
    padding: 135px 0;
 }
 
 /* Mobile First (Default) */
.ttm-row .text-opa {
    background-color: rgba(112, 195, 196, 0);
    position: relative;
    height: 100%;
    width: 100%;
    margin: auto !important;
    padding-top: 23px;
    padding-bottom: 37px;
}
@media (min-width: 1024px) {
    .ttm-row .text-opa {
        background-color: rgba(112, 195, 196, 0.1); /* Slightly more visible */
        padding-top: 60px;
        padding-bottom: 60px;
        width: 70%; /* More elegant layout */
        margin: 0 auto !important;
        border-radius: 12px;
    }
}
@media (max-width: 480px) {
    .ttm-row .text-opa {
        padding-top: 20px;
        padding-bottom: 30px;
        font-size: 14px;
    }
}

 .ttm-row .featured-icon-box.icon-align-top-content .featured-content {
    padding-top: 15px;
}
 .ttm-row .featured-icon-box.icon-align-top-content .featured-content .title1{
    color: white;
        font-size: 30px;
    line-height: 1.7;
    margin-bottom: 0px;
}
 .ttm-row .featured-icon-box.icon-align-top-content .featured-content .featured-desc p{
    color: white; 
    margin-bottom: 20px;
    font-size: 19px;
}
.featured-desc{
    padding-bottom: 20px;
}
 .ttm-row .btn-c {
    display: flex
;
    justify-content: center;
    align-items: center;
}
 .owl-prev ,.owl-next{
    background-color: transparent!important;
}
.owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
    background: 0 0;
    color:#fff!important;
    border: none;
    padding: 0 !important;
    font: inherit;
    font-size: 109px!important;
    position: absolute;
    top: 120px!important;
    opacity: 0.6!important;
    
    
}
 .ttm-row .btn1 {
    width: 225px;
    margin: auto;
    height: 42px;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
        transition: all 0.35s ease;
    background: transparent;
    border: 1px solid #fff !important;
}
 .ttm-row .btn1 a{
    font-size: 20px !important;
    color: white;
    text-decoration: none;
}
 .ttm-row .btn1:hover {
    background-color: #77a3ab !important;
    color: white !important;
    border-color: #77a3ab !important;
}
 .ttm-row .btn1:hover a {
    color: white;
    border-color: #77a3ab !important;
    
}
.featured-icon-box.icon-align-top-content .featured-content {}
                 
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
<div class="trips-slider" style="display:none;">
    <div class="trips-text1">
        <h3>OUR BLOGS</h3>
        <h2>Inspiration For Travelers</h2>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/festive-holiday.jpg" alt="Luxury Travels South Africa">
                <div class="box-content">
                    <h3 class="title">Festive Holidays</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/textile-art-and-craft.jpg" alt="Luxury Travels Dubai Abu Dhabi">
                <div class="box-content">
                    <h3 class="title">Testile, Arts and Craft</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/food-holiday.jpg" alt="Luxury Travels Maldives">
                <div class="box-content">
                    <h3 class="title">Food Holidays</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/Untitled-design-(2).jpg" alt="Luxury Travels Switzerland">
                <div class="box-content">
                    <h3 class="title">Wildlife Holidays</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/MYS-multi-activity.jpg" alt="Luxury Travels Paris">
                <div class="box-content">
                    <h3 class="title">Multi-Active Holidays</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/positive-impact.jpg" alt="Luxury Travels Japan">
                <div class="box-content">
                    <h3 class="title">positive Impact Travel</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="box">
                <img src="https://www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/wheelchair.jpg" alt="Luxury Travels China">
                <div class="box-content">
                    <h3 class="title">Wheelchair Accessible Holidays</h3>
                    <span class="post">
                <a href="">Know More</a>
              </span>
                </div>
            </div>
            <div class="blog-content">
                <div class="category"></div>
                <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                <div class="comment">
                    <span>07 May 2024</span>
                    <span style="margin-left:40px;"> 0 Comment</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--End blog section-->
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
     .check p{
         color:white;
     }
      input[type="checkbox"] {
        margin: 5px;
      }
</style>
<!--Our patenar-->
<section class="our_team" style="display:none">
    <h2 style="margin-top:65px">What They Say</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" position="relative;">
        <div class="carousel-inner">
         @foreach( $testimonials as $index =>$testimonial )
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="img-box" style="display:none">
                    <img src="/examples/images/clients/3.jpg" alt="">
                </div>
                <p class="testimonial">{{strip_tags($testimonial->description)}}</p>
                <p class="overview">
                    <b> {{$testimonial->name}}
                    </b> {{$testimonial->title}}
                    <br>{{$testimonial->company}}
                </p>
            </div>
            @endforeach
            
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-right"></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-left"></i>
        </a>
    </div>
</section>
<style>
      h2 {
        text-align: center;
        position: relative;
        margin: 50px 0 30px;
      }

      .carousel {
        width: 850px;
        margin: 0 auto;
        padding-bottom: 85px;
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
        top:325px;
        z-index: 0 !important;
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
<!--End our patener-->
<!--contact-us-->
<!--contact us end-->
<!--news latter -->

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
        /*display: -ms-flexbox;*/
        /*display: flex;*/
        /*-ms-flex-flow: row wrap;*/
        /*flex-flow: row wrap;*/
        /*-ms-flex-align: center;*/
        /*align-items: center;*/
        /*justify-content: space-between;*/
        display:flex;
        justify-content:space-between;
        align-items:center;
        text-align:center;
        flex-wrap: wrap;
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

      .news-cont {
        color: white;
        font-size: 21px;
        font-weight: 400;
        line-height: 35px;
      }

      .news-latter {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 64px 30px 62px 30px;
        background: #000000;
      }
      .group-aff{
          text-align: center;
          padding-bottom: 20px;
          color:white;
      }
    .owl-carousel .owl-stage{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content:center;
      }
</style>
<!--End news latter-->

<style>
  
    .footers {
        border-top: 1px #dedede solid;
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 50px 30px 0px 30px;
      }

      .f-list-item .list-item {
        list-style: none;
        padding:0px 0px;
      }

      .f-list-item {
        padding-left: 0px;
      }

      .f-list-item .list-item a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        text-transform: none;
        line-height: 16px;
        letter-spacing: .5px;
        color: black;
        transition: all 0.2s ease
      }
  .owl-carousel {
    width: 100% !important;
    z-index: 0 !important;
     }
    .f-list-item .list-item a:hover{
        margin-left:5px;
        border-bottom:3px solid #FFA8B0;
    }
      .f-heading {
        font-size: 1rem;
        color:#000;
        font-weight:600;
      }
       .footer-logo{
          /*height:250px;*/
          /*width:250px;*/
      }
      .footer-logo img{
          width:125px;
          object-fit:cover;
      }
      .btn-top {
        position:fixed;
        bottom:50px;
        right:10px;
        border:1px solid #77a3ab;
        height: 41px;
        width: 41px;
        text-align: center;
        border-radius: 50px;
        background:#77a3ab;
        /*background:black;**/
        right: -200px;
        visibility: hidden;
        opacity: 0;
        z-index: 99;
        transition: all 1s ease;
      }
       .btn-visible  {
            visibility: visible;
            opacity: 1;
            right: 25px;
           }
      .btn-top img{
          width:100%;
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

</style>
<!--new footer desine-->
<script>
$(document).ready(function(){
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        rtl: false,  // Enable Right-To-Left sliding
        responsive:{
            0:{ items:1 },
            600:{ items:2 },
            1000:{ items:3 }
        }
    });
});

</script>
@endsection

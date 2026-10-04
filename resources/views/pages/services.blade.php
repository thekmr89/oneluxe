@extends('layouts.master') @section('main-content')
<section class="hero" style="position:relative; ">
    <div class="banner">
        <img src="{{ asset($pageData['section1Image'] ?? '') }}" class="d-block w-100" alt="Luxury Travels Bali">
    </div>
    <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="hero-title" style="text-align:center;">
                    <h2>{{ strip_tags($pageData['section1tittle']) ?? '' }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /*media query */
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
 
 .top-features {
    order: 2;
  }

  .item-brand {
    order: 1;
  }
   .about_main5,.about_main2{
        position:relative!important;
    }
    .about-img2 img{
       height:auto!important;
    }
    .about-img2{
        padding:15px!important;
    }
    .about_main2{
        padding:0px!important;
        position:relative!important;
        right:0px!important;
        margin: 20px!important;
    }
    .about_main5{
        padding:0px!important;
        position:relative!important;
        right:0px!important;
        margin: 20px!important;
        left:0px!important;
    }
      .about-text{
          width:100%!important;
          padding:10px!important;
      }  
     .mar-top{
        margin-top: -92px!important;
     }
       .trips-bg {
        padding: 10px 0 10px 0px!important;
         }
      .trips-bg1 {
         padding: 45px 0 8px 0!important;
      }
    .left {
        display: flex;
        text-align: center;
        align-items: center;
        width: 13%;
        justify-content: space-evenly;
       }
    .padding_right{
            padding-right: var(--bs-gutter-x, .75rem)!important;
        }
    .check {
            width: 100% !important;
            display: flex;
            justify-content: space-between;
            align-items: center text-align:center;
        }
    .form-inline .form-group {
            width: 100% !important;
        }
   .ali-center{
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        }
    .social {
        display: flex;
        justify-content: center!important;
        text-align: center;
        align-items: center;
        margin-top: 10px;
        }
.list-item{
    text-align:center;
    
     }
    } 
    /*end media query*/
      .hero-title h2{
          font-size:5rem;
          line-height: .8em;
          color:#fff;
          text-transform:capitalize; 
          font-weight:bold;
      }
      .hero-title .bottom-head {
        font-size: 1rem;
        font-style: normal;
        font-weight: 700;
        letter-spacing: 1.6px;
        line-height: 1.4;
        color: #379c8a;
      }
      .about-cont{
              padding: 60px 0 0px 0;
      }
      .about-cont .container{
          padding-top:40px;
      }
.about-text p {
    padding-top:0px;

    font-size: 1.25rem;
    line-height: 30px;
    text-align:center;
    }
    .about-text{
        width:70%;
        margin:auto;
    }
    .about-img img{
        width:100%;
    }
   .trips-bg .inner-section{
       padding:0px;
   }
   
   .about-h h2{
       font-size: 3rem;
       font-weight: bold;
   }
   .about-h{
       text-align:left;
   }
   
   .innner-content{
       /*overflow:hidden;*/
       position:relative;
   }
   .about-img .inner-img{
       width:100%;
       background-size:cover;
       background-position:center;
       background-repeat:no-repeat;
   }
   .about_main{
        min-height: 39.4vw;
        height: auto;
        width: 90%;
        margin: auto;
        padding-top: 40px;
        padding-left: 14px;
        padding-right: 14px;
   }
   .about_main .about_p{
       text-align:center;
   }
   .about_main .about_p p{
       font-size:1.25rem;
   }
   .about-img1{
        /*max-width: 562px;*/
        width: 100%;
        margin: auto;
        background: red;
        overflow: hidden;
   }
   .about-img1 img{
       width:100%;
       height:43vw;
   }
    .about-img2{
        min-height: 37vw;
        /*min-width:506px;*/
        height: 100%;
        width: 100%;
        overflow:hidden;
   }
   .about-img2 img{
       width:100%;
       height:37vw;
   }
   
   /*services page css*/
   .about_main2{
        min-height:26vw;
        /*max-height:26vw;*/
        /*height: 100%;*/
        width: 100%;
        padding: 35px 50px;
        position:absolute;
        right: 4%;
   }
   .about_main4{
        min-height:26vw;
        max-height:26vw;
        height: 100%;
        width: 100%;
        padding: 35px 50px;
        position:absolute;
        right: 4%;
        
   }
   
    .innner-content{
        position:relative;
    }
    
    
   /*end services page css*/
   
   
   .meet_team{
       max-height:20vw;
       height:20vw;
       display: flex;
       justify-content: left;
       text-align: center;
       align-items: center;
   }
   .about-img4{
    max-width: 540px;
    width: 80%;
    margin: auto;
    background: red;
    overflow: hidden;
    position: absolute;
    bottom: 20%;
    left: 10%;
   }
   .about-img4 img{
       width:100%;
       height:37vw;
   }
   .about_left, p{
       text-align:left;
   }
   .about_main5 {
     min-height: 26vw;
    /*max-height: 26vw;*/
    /*height: 100%;*/
    width: 100%;
    padding: 35px 50px;
    position: absolute;
    left: 4%;
    z-index: 0;
}
  /*services inner section css*/
   .inner_sect{
       display: flex;
       justify-content: center;
       align-items: center;
   }
   .about_main3{
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    width:100%;
    height:100%;
       
   }
   .about
    /*End inner section css*/
</style>
<section class="trips-bg1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-text">
                {!! $pageData['section1content'] ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</section>
@foreach ($multiServices as $key => $service)
        <?php
if (($key + 1) % 2 != 0) {
?>
<section class="trips-bg" style="padding-bottom:40px;" id="luxury-collection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                <div class="about-img2">
                <img src="{{ $service->image_path }}" alt="about">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect mar-top">
                <div class="about_main2" style="background:#FFF7F7;">
                    <div class="about_main3">
                        <!-- <div class="about-h">
                            <h3 style="margin-bottom:23px;font-weight: bold;">The Luxury Collection</h3></div> -->
                        <div class="about_p">
                        {!! $service->content_value !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} else {
?>
<section class="trips-bg" style="padding-top:40px; padding: 60px 0 50px 0px" id="meetings-and-conferences">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect top-features mar-top">
                <div class="about_main5" style="background:#FFF7F7;">
                    <div class="about_main3">
                        <!-- <div class="about-h">
                            <h3 style="margin-bottom:23px;font-weight: bold;">Meetings & Conferences </h3></div> -->
                        <div class="about_p">
                        {!! $service->content_value !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 inner-section" style="position:relative; z-index:-1; item-brand">
                <div class="about-img2">
                <img src="{{ $service->image_path }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>
    @endforeach
 
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
        padding: 50px 30px 50px 30px;
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
       .btn-top{
        position:fixed;
        bottom:40px;
        right:10px;
        border:1px solid black;
        height: 41px;
        width: 41px;
        text-align: center;
        border-radius: 50px;
        background:black;
      }
      .btn-top img{
          width:100%;
         cursor: pointer;
      }
</style>

<style>
    .copy-itm {
        display: flex;
        justify-content:center;
        align-items: center;
        text-align: center;
        list-style: none;
      }
      .copy-itm {
          padding-left:0px;
          margin:0px!important;
      }

      .copywrite {
        background: white;
        padding: 10px 0 10px 0;
        border-top: 1px #dedede solid;
        color: black;
        text-align: center;
      }

      .copy-itm .list-itm span {
        color: black;
        font-weight: 100;
        padding-left: 24px;
        font-size: 12px;
      }
      .footer-cent{
          display:flex;
          justify-content:center;
          text-align:center;
          align-items:center
      }
    .social{
    display: flex;
    align-items: center;
    justify-content: left;
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
@endsection
@section('scripts')
  <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop >520 || document.documentElement.scrollTop > 520) {
            
            document.getElementById("navbar").style.background = "#fff";
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
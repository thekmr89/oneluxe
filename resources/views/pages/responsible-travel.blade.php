 @extends('layouts.master') @section('main-content')
    <style>
    /*media query */
    @media only screen and (max-width: 768px) {
    .imag-p {
        padding: 0px !important;
        margin-bottom: 10px;
    }
}
    @media only screen and (max-width:768px) {
    .contact {
        display:none;
    }
    
     .hero-title h2{
        font-size:2rem!important;
        
    }
    .imag-p{
        padding:0px!important;
        margin-bottom:10px;
    }
    .res-inner{
        padding:10px;
    }
    .about-text {
        width:100%!important;
        padding:10px;
    }
    .rest-p{
        padding:10px!important;
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
    .section2imag{
        padding:10px!important;
    }
    .res-trav img {
    width: 100%;
    object-fit: cover;
    height: 12rem;
}
.res-trav {
    width: 100%;
    min-height: 18vh;
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
        font-size: 1rem;
        line-height: 30px;
        text-align:center;
        font-family:"Futura Book"!important;
        padding-bottom: 30px!important;
        padding-top: 30px!important;
        }
    .about-text{
        width:80%;
        margin:auto;
    }
    .about-img img{
        width:100%;
    }
    
   
   .about-h h2{
       font-size: 3rem;
       font-weight: bold;
   }
   .about-h{
       text-align:left;
   }
   /*responsive travel css start*/
   .res-trav{
       width:100%;
       max-height:80vh;
   }
   .res-trav img{
       width:100%;
       object-fit: cover;
       
   }
   .zoom-img img {
 
   }
   .res-inner{
        overflow:hidden;
        cursor:pointer;
        border-radius: 10px;
   }
   .res-inner img{
       width:100%;
       object-fit: cover;
       border-radius: 10px;
   }
   .res-inner img:hover {
     transform: scale(1.3);
    transform-origin: 50% 50%;
    transition: all .5s ease-in-out
    
}
   /*end responsive travel css*/
    <!--footer end-->
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
.custom-bg:nth-of-type(odd) {
   background-color: #fffaf0 !important;
}
.custom-bg:nth-of-type(even) {
    background-color: #f0f0ea !important;
}
  .section2imag{
      padding-top:10px;
  }  
 .imag-p{
     padding-top: 10px;
 }
</style>
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset($pageData['section1image']) }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{{ $pageData['section1heading'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-top custom-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {!! $pageData['section1content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-rsp custom-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 section2imag">
                    <div class="res-trav">
                        <img src="{{ asset($pageData['section2image'] )}}" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 0px 0px; padding-bottom:40px">
                    <div class="about-text">
                        {!! $pageData['section2content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-rsp custom-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 imag-p" style="padding-left:60px">
                    <div class="res-inner">
                        <img src="{{ asset($pageData['section3image1'] )}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 imag-p" style="padding-right:60px">
                    <div class="res-inner">
                        <img src="{{ asset($pageData['section3image2'] )}}" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 30px 0px;">
                    <div class="about-text">
                         {!! $pageData['section3content'] !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
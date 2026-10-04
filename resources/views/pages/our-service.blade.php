@extends('layouts.master') @section('main-content')
 <style>
    header{
    z-index: 3;
    position: relative;
    }
  .hero-title h2 {
    font-size: 5rem;
    line-height: 0.8em;
    color: #fff;
    text-transform: capitalize;
    font-weight: bold;
  }
  .about-text {
    width: 80%;
    margin: auto;
  }
  .about-text p {
    padding-top: 0;

    font-size: 1.25rem;
    line-height: 30px;
    text-align: center;
  }
  .about-img2 {
    min-height: 37vw;
    width: 100%;
    overflow: hidden;
  }
  .about-img2 img {
    width: 100%;
    height: 37vw;
    border-radius: 10px;
  }
  .about_main2, .about_main5 {
    min-height: 26vw;
    width: 100%;
    padding: 35px 50px;
    position: absolute;
    right: 4%;
    background: #FFF7F7;
  }
  .about_main5 {
    left: 4%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }
  .about_main3 {
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
   
  }
  .about-h h3 {
    font-weight: bold;
    margin-bottom: 23px;
  }
  .about_p p {
    font-size: 1.25rem;
  }
  .inner_sect {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .trips-bg .inner-section {
    padding: 0;
  }
   
.trips-bg{
    padding: 10px 0 0px 0px;
}
  /* Responsive */
  @media only screen and (max-width: 768px) {
    .hero-title h2 {
      font-size: 2rem !important;
    }
    .about_main2,
    .about_main5 {
      position: relative !important;
      padding: 0 !important;
      margin: 20px !important;
      right: 0 !important;
      left: 0 !important;
    }
    .about-img2 {
      padding: 15px !important;
       border-top-right-radius: 10px;
       border-bottom-right-radius: 10px;
    }
    .about-img2 img {
      height: auto !important;
    }
    .about-text {
      width: 100% !important;
      padding: 10px !important;
    }
    .trips-bg {
      padding: 10px 0 !important;
    }
  }
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
@media only screen and (max-width: 768px) {
  .about-text,
  .about-text p,
  .about_left,
  .about_left p {
    text-align: left !important;
  }
}
section h1,
section h2,
section h3 {
  color: #77a3ab !important;
}
.hero-title h1,
.hero-title h2,
.hero-title h3 {
  color: #fff !important; /* or use your original hero color */
}
 .about-text p,
.about_p p {
  text-align: center !important;
}

.custom-bg:nth-of-type(odd) {
   background-color: #fffaf0 !important;
}
.custom-bg:nth-of-type(even) {
    background-color: #f0f0ea !important;
}
 
.main1{
 background-color: #f0f0ea !important;
 padding: 10px 0 60px 0;
}
/*.trips-bg:nth-of-type(odd) .inner-section {*/
/*   background-color: #fffaf0 !important;*/
/*}*/

/*.trips-bg:nth-of-type(even) .inner-section {*/
 
/*  background-color: #f0f0ea !important;*/
/*  padding: 10px 0 10px 0px;*/
/*}*/
.about-img2 {
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 10px;
}
}
.about_main2,
.about_main5 {
  padding: 40px 30px;
  margin: 20px auto;
  position: relative; /* safer than absolute */
  background: #FFF7F7;
  width: 100%;
  box-sizing: border-box;
}
@media only screen and (max-width: 768px) {
  section {
    padding: 30px 15px !important;
  }

  .about_main2,
  .about_main5 {
    padding: 20px !important;
    margin: 10px 0 !important;
  }

  .about-text {
    padding: 10px !important;
  }

  .about-img2 {
    padding: 15px !important;
  }
}




 .try-new-style {
    position: absolute;
    left: 2px;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.try-new-style1 {
    position: absolute;
    right: -40px;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.try-new-style .ring {
    padding-bottom: 20px;
}
.try-new-style .ring img {
    width: 100%;
}
.try-new-style1 .ring {
    padding-bottom: 20px;
}
.try-new-style1 .ring img {
    width: 100%;
}
.trips-bg { 
    overflow: hidden;
    position: relative;
}
 /*hover effect*/
.image-hover-effect {
    position: relative;
    overflow: hidden;
    display: inline-block;
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

.responsive-right {
    right: 0; /* default for small screens */
    position: relative;
}

@media (min-width: 992px) { /* lg and above */
    .responsive-right {
        right: 10px;
    }
}

 /*end hover effect*/
 </style>
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset($pageData['section1Image'] ?? '') }}" class="d-block w-100" alt="Luxury Travels Bali">
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

    <section class="trips-bg main1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {{-- <p>
                            We offer the most exclusive experiences to guests through our three ultra- personalised
                            services: The Luxury Collection; Meetings & Conferences; Incentives. We are laser-focused on
                            offering only the finest value-added propositions to our clients. Our expertise has long been
                            recognised for the design, coordination and management of luxury experiential travel, Incentive
                            trips, and Meetings and Conferences. Supported by strong partnerships and an authentic
                            representation we have navigated the challenges of these evolving markets and seek to raise the
                            bar in this growing space as a lead player.

                        </p> --}}
                        {!! $pageData['section1content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($multiServices as $key => $service)
        <?php
if (($service->id + 1) % 2 == 0) {
?>
        <section class="trips-bg"   id="{!! $service->tag_service_page !!}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section top-features">
                        <div class="about-img2 image-hover-effect">
                            <img src="{{asset($service->image_path)}}" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect item-brand">
                        <div class="about_main2" style="background:#f0f0ea !important; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                              <div class="try-new-style" style="display:none">
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                             </div> 
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                               </div>
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                               </div>
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                               </div>
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                               </div>
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                            
                            </div>
                            <div class="about_main3">
                                <div class="about-h"><h3 style="margin-bottom:23px;font-weight: bold;">{!! $service->heading !!}</h3></div>
                                <div class="about_p">
                                   <p>{!! $service->content_value !!}</p> 
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
        <section class="trips-bg"   id= "{!! $service->tag_service_page !!}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                        <div class="about_main5 custom-redius1" style="background:#f0f0ea !important; z-index:1;">
                             <div class="try-new-style1" style="display:none">
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div> 
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                                <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                             <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                             <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                             <div class="ring">
                                <img src="https://www.elanexperiences.in/public/frontend/img/ring.svg" alt="">
                            </div>
                            </div>
                            <div class="about_main3">
                                <div class="about-h"><h3 style="margin-bottom:23px;font-weight: bold;">{!! $service->heading !!}</h3></div>
                                <div class="about_p">
                                    <p>{!! $service->content_value !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section about-img-wrapper responsive-right" style="position:relative; ">
                        <div class="about-img2 image-hover-effect ">
                            <img src="{{asset($service->image_path)}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
}
?>
    @endforeach
@endsection
@section('scripts')
@endsection
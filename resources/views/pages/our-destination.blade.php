@extends('layouts.master') @section('main-content')
 <style>
.hero-title h2 {
  font-size: 5rem;
  line-height: 0.8em;
  color: #fff;
  text-transform: capitalize;
  font-weight: bold;
}
.hero-title .bottom-head {
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 1.6px;
  line-height: 1.4;
  color: #379c8a;
}
.about-cont {
  padding: 60px 0 0;
}
.about-cont .container {
  padding-top: 40px;
}
.about-text {
  width: 80%;
  margin: auto;
}
.about-text p {

  font-size: 1rem;
  line-height: 30px;
  text-align: center;
}
.about-img img,
.about-img1 img,
.about-img2 img {
  width: 100%;
  object-fit: cover;
}
.about-img1 img {
  height: 43vw;
}
.about-img2 {
  height: 100%;
  width: 100%;
  overflow: hidden;
  min-height: 37vw;
}
.about-img2 img {
  height: 37vw;
}
.trips-bg .inner-section {
  padding: 0;
}
.about-h {
  text-align: left;
}
.about-h h2 {
  font-size: 3rem;
  font-weight: bold;
}
.about_main {
  position: absolute;
  bottom: 0;
  width: 80%;
  margin: auto;
  padding: 40px 14px 0 14px;
}
.about_main2 {
  position: absolute;
  bottom: 0;
  width: 100%;
  margin: auto;
  padding: 40px 14px 0 14px;
}
.about_main {
  margin-left: 50px;
}
.about_main .about_p {
  text-align: left;
}
.about_main .about_p p {
  font-size: 19px;
}
.about_main3 {
  width: 70%;
  margin-top: 5%;
  margin-left: 25%;
  padding: 20px 20px 0;
  box-sizing: border-box;
  text-align: left;
}
 

/* Media Queries */
@media only screen and (max-width: 1013px) {
  .about_main,
  .about_main2 {
    position: relative;
    bottom: 0;
  }
}
@media only screen and (max-width: 768px) {
  .hero-title h2 {
    font-size: 2rem !important;
  }
  .about-text {
    width: 100% !important;
    padding: 10px;
  }
  .about-text p,
  .about_left p {
    text-align: center !important;
  }
  .about-img1,
  .about-img2 {
    padding: 10px !important;
  }
  .about_main,
  .about_main2,
  .about_main3 {
    width: 100% !important;
    margin: 0 !important;
    padding: 20px !important;
  }
  .about-img1 img,
  .about-img2 img {
    height: auto !important;
  }
  .top-features {
    order: 2;
  }
  .item-brand {
    order: 1;
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
.trips-bg {
  padding: 30px 0px 30px 0px !important;
}
 .about-img1,
.about-img2 {
  padding-left: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right:10px;
}
.about-img1 img,
.about-img2 img {
  border-radius: 10px;
  width: 100%;
  height: auto;
  object-fit: cover;
}
  .trips-bg:nth-of-type(odd) {
  background-color: #fffaf0 !important;
}

.trips-bg:nth-of-type(even) {
  background-color: #f0f0ea !important;
}
 </style>
 <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset($pageData['section1video'] ?? '' )}}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>{!! $pageData['section1heading'] ?? '' !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trips-bg" style="padding-top:40px!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        {!! $pageData['section2content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($designations as $key => $designation)
        <section class="trips-bg" id="{!! strip_tags($designation->destination_name) ?? ''!!}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                        <div class="about-img1">
                            <img src="{{asset( $designation->image_one ?? '' )}}" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                        <div class="about_main">
                            <div class="about-h">
                                <h2 style="margin-bottom:31px;text-align:left;">{!! $designation->destination_name ?? '' !!}
                                </h2>
                            </div>
                            <div class="about_p">
                                {!! $designation->content_one ?? '' !!}
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="trips-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content top-features">
                        <div class="about_main2">
                            <div class="about_main3">
                                {!! $designation->content_two ?? '' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-section item-brand">
                        <div class="about-img2">
                            <img src="{{asset($designation->image_two) }}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<div style="height:4vw; width:100%; clear:both;"></div>-->
    @endforeach
@endsection
@section('scripts')
@endsection

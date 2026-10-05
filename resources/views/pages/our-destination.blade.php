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

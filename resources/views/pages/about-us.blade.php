 @extends('layouts.master') @section('main-content')
 <style>
 html, body {
  overflow-x: hidden;
  overflow-y: auto;
}
.about-mar1,.about-mar h2 {
  color: #77a3ab !important;
}

.hero-title h2 {
  font-size: 5rem;
  line-height: 0.8em;
  color: #fff;
  text-transform: capitalize;
  font-weight: bold;
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
  padding-top: 0;
  font-size: 1.25rem !important;
  line-height: 30px;
  text-align: center;
}

p {
  color: #495057;
  font-size: 1.25rem !important;
}

.about-img img,
.about-img1 img,
.about-img2 img {
  width: 100%;
  height: auto !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;
  border-radius: 5px;
}

.about-img2 {
  width: 100%;
  overflow: hidden;
}

.about-mar,
.about-mar1 {
  padding: 25px !important;
}

.container {
  max-width: 95% !important;
  margin: 0 auto;
}

@media only screen and (max-width: 768px) {
  .text {
    width: 100%;
    object-fit: contain;
    height: 394px !important;
    overflow: hidden;
  }

  .contact {
    display: none;
  }

  .hero-title h2 {
    font-size: 2rem !important;
  }

  .about-img1 {
    width: 100% !important;
    padding: 0px !important;
  }

  .about-img2 {
    padding: 10px !important;
    padding-left: 10px !important;
  }

  .about-text {
    width: 100% !important;
  }

  .col-lg-7 {
    padding: 12px !important;
  }

  .item-p {
    padding-left: 10px !important;
  }

  .about-mar1,
  .about-mar {
    margin: 0px !important;
    padding: 10px !important;
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
#smision {
 background-color:#fffaf0!important;
}

#snetwork {
  background-color:#f0f0ea!important;
}

#swhyfnb1 {
  background-color:#fffaf0!important;
}

#swhyfnb2 {
  background-color: #f0f0ea;
}
.shdrtext1{
 background-color: #f0f0ea!important
}


 </style>
    <section class="hero" style="position:relative; ">
      <div class="banner">
      <img src="{{asset($pageData['section1image']) }}" class="d-block w-100" alt="Luxury Travels Bali">
      </div>
      <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hero-title" style="text-align:center;">
              <h2>{!! $pageData['section1heading'] !!}</h2>
			  <h5 style="color: #fff; font-size: 35px;">And there is always more to discover.</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="shdrtext1" id="shdrtext" style="padding-top:50px; padding-bottom: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="about-text">
					 {!! $pageData['section2title'] !!}
				</div>
			</div>
		</div>
	</div>
</section>
<section id="smision" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-img1">
          <img src="{{ asset($pageData['section3image']) }}" alt="about" class="img-fluid" style="border-radius: 5px;">
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-mar1 px-4">
          <!--{!! $pageData['section3content'] !!}-->
			<h2 style="">OUR STORY</h2>
			<h5 style="">Years of exploring, learning, and building connections shaped what OneLuxe is today.</h5>
			<p>OneLuxe was created by the team behind Distinct Destinations, shaped by years of exploring and designing journeys across India, Nepal, Bhutan and Sri Lanka.<br><br>Through first-hand travel, we have built trusted connections, discovered places both celebrated and little known, and gained a deeper understanding of what makes each destination worth experiencing.<br><br>OneLuxe brings this knowledge into a more personal way of travelling. Every journey begins by listening, understanding individual interests, preferences and pace, and then designing something entirely around them.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="ourphilosophy " class="py-5" style="background-color: #f8f9fa !important;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-mar px-4">
			<div id="ontwk">
				<div id="ontwk-content">
					<h2 style="">OUR PHILOSOPHY</h2>
					<h5 style="">LUXURY BEGINS WITH UNDERSTANDING</h5>
					<p>No two people experience a destination in quite the same way. We listen first, understand what matters to each guest, and design from there.</p>
					<p>The pace, the places, the people they meet, and the experiences they have are considered individually, creating a journey that feels distinctly their own. </p>
				</div>
			</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img2">
          <img src="https://oneluxe.in/public/uploads/about/175378472052.jpg" alt="about" class="img-fluid" style="border-radius: 5px;">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="ourexpertise " class="py-5" style="background-color: #fffaf0 !important;">
  <div class="container">
    <div class="row align-items-center">
		<div class="col-md-6">
			<div class="about-img1">
				<img src="https://oneluxe.in/public/uploads/about/175378416736.jpg" alt="about" class="img-fluid" style="border-radius: 5px;">
			</div>
		</div>
		<div class="col-md-6">
			<div class="about-mar1 px-4">
				<h2 style="text-align: left;">OUR EXPERTISE </h2>
				<h5 style="text-align: left;">ALWAYS DISCOVERING. ALWAYS ONE STEP AHEAD.<br>INDIA • NEPAL • BHUTAN • SRI LANKA</h5>
				<p style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">Our knowledge is constantly evolving. We travel throughout the region, returning to places we know and seeking out what has newly emerged, from remarkable stays and private experiences to people and places that bring a destination to life. It means every journey is shaped by what we know today, not simply what we have known for years..</p>				
				<div class="btn_know  expo2 "><a class="btn_more" href="destinations" style="text-decoration:none;">EXPLORE DESTINATIONS </a></div>
			</div>
		</div>
    </div>
  </div>
</section>

<section id="snetwork" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-mar px-4">
          {!! $pageData['section4content'] !!}
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img2">
          <img src="{{ asset($pageData['section4image']) }}" alt="about" class="img-fluid" style="border-radius: 5px;">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="ourexpertise " class="py-5" style="background-color: #fffaf0 !important;">
  <div class="container">
    <div class="row align-items-center">
		<div class="col-md-6">
			<div class="about-img1">
				<img src="https://oneluxe.in/public/uploads/about/175378416736.jpg" alt="about" class="img-fluid" style="border-radius: 5px;">
			</div>
		</div>
		<div class="col-md-6">
			<div class="about-mar1 px-4">
				<h2 style="text-align: left;">OUR COMMITMENT  </h2>
				<h5 style="text-align: left;">TRAVEL SHOULD GIVE BACK.</h5>
				<p style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;">The places we explore are shaped by their people, cultures, and natural environments. We believe travel has a responsibility to respect and support what makes them special.<br><br>Through responsible practices and the work of Distinct Steps Foundation, we support local communities, cultural preservation, and environmental stewardship.</p>
				<div class="btn_know  expo2 "><a class="btn_more" href="destinations" style="text-decoration:none;">DISCOVER OUR APPROACH TO RESPONSIBLE TRAVEL →</a></div>
			</div>
		</div>
    </div>
  </div>
</section>
<section id="swhyfnb1" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-mar px-4">
          {!! $pageData['section5content'] !!}
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img2">
          <img src="{{ asset($pageData['section5image']) }}" alt="about" class="img-fluid" style="border-radius: 5px;">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="swhyfnb2" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="about-img2">
          <img src="{{ asset($pageData['section5image2']) }}" alt="about" class="img-fluid" style="border-radius: 5px;">
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-mar px-4">
          {!! $pageData['section5content2'] !!}
        </div>
      </div>
    </div>
  </div>
</section>
     <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12" style="padding-left:0px;padding-right:0px;">
                    
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12" style="position:relative;">
                    <div class="about_main2" style="position:absolute;bottom:10px;">
                        <div class="about_main3">
                        <div class="about_p " >
                                     
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Meet Our Team section adding here-->
	<section style="background:#85a2aa;" id="our-team">
        <div class="container meet_team">
            <div class="about-p">
             <h2 style="font-size: 3rem;font-weight: bold; color:white; ">THE PEOPLE BEHIND ONELUXE</h2>
			 <h5 style="color: #fff;">Experience, local knowledge and a shared understanding that exceptional travel is always personal.</h5>
			 <p style="color: #fff;">Every journey is shaped by people who know the destinations first-hand and understand the details that make travel seamless, individual and memorable.</p>
            </div>
        </div>
    </section>
    
    <section id="tm1" >
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="top:-35px;">
				<div class="pro-img" style="max-width: 540px;width: 80%;margin: auto;">
					 <img src="{{ asset( $pageData['section6image'] )}}" alt="about" style="width:100%;">
				</div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 team">
				<div style="width:100%;padding:50px 60px 0px 30px;">
					{!! $pageData['section6content'] !!}
				</div>
			</div>
        </div>		
    </section>
	<div style="height:10px; width:100%; clear:both;"></div>
    <section id="tm2">
        <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 vinay">
				<div class="vinay1 team" style="width:100%;padding:15px 10px 0px 65px; team">                                 
					{!! $pageData['section6content2'] !!}
				</div>                       
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 vinay-img">
				<div class="pro-img" style="max-width: 540px;width: 80%;margin: auto;">
				   <img src="{{ asset($pageData['section6image2']) }}" alt="about"  style="width:100%;">
				</div>
            </div>
        </div>
    </section>
    <div style="height:10px; width:100%; clear:both;"></div>
	<section id="tm3">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="pro-img" style="max-width: 540px;width: 80%;margin: auto;">
					 <img src="https://oneluxe.in/public/uploads/about/comingsoon.jpg" alt="about" style="width:100%;">
				</div>
			</div>
			 <div class="col-lg-6 col-md-6 col-sm-12 team">
				<div style="width:100%;padding:50px 60px 0px 30px;">
					<h2>COMING SOON</h2>
					<h3>Director</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</div>
    </section>
    <!--css for meet our team section-->
    <style>
    .team h2{
      color: #77a3ab !important;
    }
        html, body {
  overflow-x: hidden;
  overflow-y: auto;
}

.container {
  max-width: 95% !important;
  margin: 0 auto;
}

.meet_team {
  max-height: 20vw;
  height: 20vw;
  display: flex;
  justify-content: center;
  text-align: center;
  align-items: center;
}

.text {
  width: 100%;
  object-fit: contain;
  height: 600px;
  overflow: hidden;
}

.pro-img {
  max-width: 540px;
  width: 80%;
  margin: auto;
}

.about-p h2 {
  font-size: 3rem;
  font-weight: bold;
}

@media only screen and (max-width: 768px) {
  .text {
    width: 100%;
    object-fit: contain;
    height: 394px !important;
    overflow: hidden;
  }

  .vinay {
    position: relative !important;
    top: 0px !important;
  }

  .vinay1 {
    padding: 20px !important;
    margin-top: -223px;
  }

  .vinay-img,
  .rahul-cont,
  .rahul1-cont {
    position: relative !important;
    top: 0px !important;
  }

  .pro-img {
    width: 90% !important;
  }

  .about-p h2 {
    font-size: 1.5rem !important;
    padding-bottom: 18px !important;
  }
}

@media only screen and (min-width: 764px) {
  .about-top {
    height:50rem !important;
    /*height:98rem !important;*/
  }
}

    </style>
    <!--End Meet Our Section Team-->
@endsection
@section('scripts')
@endsection
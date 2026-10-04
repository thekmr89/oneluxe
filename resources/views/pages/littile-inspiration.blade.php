@extends('layouts.master') @section('main-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
              <img src="{{asset($pageData['section1Image'] ?? '') }}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
      <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hero-title" style="text-align:center;">
              <h2>{{ strip_tags($pageData['section1heading']) ?? '' }}</h2>
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
      .social {
    display: flex;
    align-items: center;
     justify-content: center; 
    text-align: center;
}
    .about_left, p {
     text-align: center; 
}
       
 .top-features {
    order: 2;
  }

  .item-brand {
    order: 1;
  }
  .experiences-box{
      position:relative!important;
      top:0px!important;
  }
  .exper-cont{
      padding:0px!important;
  }
  .view-all{
      padding:0px!important;
      margin-bottom: 20px!important;
  }
  .about-text{
    width:100%!important;
    padding:20px!important;
  }
  .elVideo{
      height:auto;
  }
  .elVideo1{
      padding:10px!important;
  }
  .elVideo2{
      padding:0px 0px 20px 0px!important;
  }
  .thumb{
      padding-bottom:10px!important;
  }
  .trips-bg1{
    padding: 60px 0 10px 0!important;  
  }
  .trips-bg {
    padding: 10px 0 10px 0!important;
}
.litt-videos h2 {
    font-weight: 600;
    font-size: 2rem!important;
}
.dest-btn{
    margin-bottom:30px!important;
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
    }
.trips-bg1{
     padding: 40px 0 37px 0;
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
        width:80%;
        margin:auto;
    }
    .about-img img{
        width:100%;
    }
   .trips-bg .inner-section{
       padding:0px;
   }
   
   .f-list-item {
    padding-left: 0px;
    /*text-align: left;*/
}
   .about-h h2{
       font-size: 3rem;
       font-weight: bold;
   }
   .about-h{
       text-align:left;
   }
   
   .innner-content{
       overflow:hidden;
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
 .res-trav {
    width: 100%;
    /*background: green;*/
    max-height: 80vh;
    overflow: hidden;
}
.res-trav img {
    width: 100%;
    object-fit: cover;
}
.trips-rsp {
    padding: 0px 0 0px 0px;
}
.litt-trav img{
    width:100%;
    height:227px;
    object-fit:cover;
}
.litt-trav{
   width:100%;
   height:227px;
}
.trav-video{
 width:100%;
 height:400px;
 overflow:hidden;
}
.trav-video2{
 width:100%;
 height:300px;
 overflow:hidden;
}
.trav-video img{
    width:100%;
}
.owl-carousel {
    display: none;
    width: 100%;
    z-index: 0!important;
}
.exper-cont{
    width: 100%;
    height: auto;
}
.content{
 padding:27px 27px 0px 27px;
}
.content button{
    width: 100%;
    padding: 7px;
    color: white;
    border: none;
    background-color:#000; /* optional default background */
    cursor: pointer;
    transition: all 0.6s ease; /* Smooth transition */
}
 

 
.read-more{
    color:white;
}
.litt-videos{
    text-align:center;
}
.litt-videos h2{
    font-weight:600;
    font-size:2.5rem;
}
.dest-btn {
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding-bottom: 28px;
    
}
.expo{
    padding:0px;
}
.expo  {
    display: inline-block;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 17px;
    text-decoration: none;
    color: #ffffff;
    background: #000;
    border: none;
    font-weight: 500;
    min-width: 133px;
}
.experiences-box{
    position:absolute;
    bottom:0px;
}
  .play-button-wrapper {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: auto;
	pointer-events: none;
	#circle-play-b {
		cursor: pointer;
		pointer-events: auto;

		svg {
			width: 70px;
			/*height: 100px;*/
			fill: #fff;
			stroke: #fff;
			cursor: pointer;
			background-color: rgba(black, 0.2);
			border-radius: 50%;
			opacity: 0.9;
		}
	}
}
.PopShwMnVriBkle, .PopShwMnVriBklehmshw {
    position: fixed;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, .8);
    z-index: 10;
    bottom: 0;
    top: 0;
    
}
.PopShwMnVriBkle .SurciseSecSwn, .PopShwMnVriBklehmshw .SurciseSecSwn {
    position: absolute;
    width: 390px;
    background: #fff;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    height: 200px;
    display: flex;
    align-items: center;
    padding: 20px;
    text-align: center;
}
.PopShwMnVriBkle .SurciseSecSwn .clseShw, .PopShwMnVriBklehmshw .SurciseSecSwn .clseShw {
    position: absolute;
    top: 0;
    right: 13px;
    top: 13px;
    cursor: pointer;
    width: 20px;
}
.PopShwMnVriBkle .SurciseSecSwn h5, .PopShwMnVriBklehmshw .SurciseSecSwn h5 {
    font-size: 36px;
    margin-bottom: 10px;
}
.PopShwMnVriBkle .SurciseSecSwn a, .PopShwMnVriBklehmshw .SurciseSecSwn a {
    color: #f17011;
  text-decoration:none;
}
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
 .trips-bg {
            padding: 50px 0 50px 0!important;
           
          }
.content button:hover {
    background-color: #77a3ab!important;  
    color: #fff;
}
.expo:hover {
    background-color: #77a3ab;
    color: #fff;
    border: none;
}

    </style>
    <section class="trips-bg1 custom-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                         <p>
                         {!! $pageData['section1content'] ?? '' !!}
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="trips-bg custom-bg">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-3 col-md-12 col-sm-12 view-all top-features" style="padding-right:0px!important; padding-left:40px;">
                 <div class="experiences-box">
               <div class="exper-cont" style="padding-top:99px;">
                <div class="content">
                    <div class="alpo-hedading">
                        <h3>Alphonso Experiences</h3>
                    </div>
                    <br/>
                    <br/>
                    <p>
                      Choose from our exclusive selection of handpicked experiences and fall in love with the city, one story at a time.
                    </p>
                    <!--<button><a href="https://www.alphonsostories.com/experiences" style="text-decoration:none;color:white;" target="_blank">View All Experiences</a></button>-->
                    <button class="custom-button">View All Experiences</button>
                 </div>
               </div>
            </div>
             </div>
    <div class="col-lg-9 col-md-12 col-sm-12 item-brand" style="padding-left:0px!important">
    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
    <div class="owl-stage-outer">
      <div class="owl-stage">
      <?php foreach ($tourData as $key => $value) {
                            ?>
        <div class="owl-item active">
          <div class="item">
            <div class="inspired_box">
              <img src="{{asset( $value->file_path ?? '' )}}" alt="Luxury Travels Sri Lanka">
              <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences" style="color:white;">
              <div class="content">
                <h3>{{ $value->title }}</h3>
                <p class="read-more color-primary sans-serif"> Read more </p>
              </div>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
   
</section>
      <section class="trips-rsp custom-bg">
        <div class="container-fluid">
            <div class="row">
                 <div class="litt-videos">
                 {!! $pageData['section2content'] ?? '' !!}
                  </div>
                 <div class="col-12 elVideo1" style="padding: 30px 50px;">
                    <div class="res-trav">
                     <div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                         	<div class="play-button-wrapper">
                    			<div title="Play video" class="play-gif" id="circle-play-b">
                    				<!-- SVG Play Button -->
                    				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                    					<path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                    				</svg>
                    			</div>
	                     	</div>
                      <img class="thumb" style="cursor: pointer;" src="{{asset( $videoData1->placeholder_image_path ?? '') }}">
                    </div>
                    <div id="thevideo" style="display: none;">
                        <video controls  width="100%" height="470px" class="elVideo" loop="loop" autoplay="" playsinline="" muted="" src="{{ asset( $videoData1->file_path ?? '') }}" id="video-slider-1 big-video" ></video>
        
                    </div>
                    </div>
                </div>
                </div>
                <div class="row elVideo2" style="padding:0px 30px 36px 36px;">
                @foreach ($videoData as $key => $video)
                    <?php
                    $count = $key + 1;
                    $id = "thevideo$count";
                    $elemtnId = "'thevideo$count'";
                    ?>
                <div class="col-lg-4">
                    <div class="litt-trav">
                     <div onclick="thevid=document.getElementById('{{$id}}'); thevid.style.display='block'; this.style.display='none'">
                         <div class="play-button-wrapper">
                    			<div title="Play video" class="play-gif" id="circle-play-b">
                    				<!-- SVG Play Button -->
                    				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="width:50px;">
                    					<path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                    				</svg>
                    			</div>
	                     	</div>
                      <img class="thumb" style="cursor: pointer;" src="{{asset( $video->placeholder_image_path )}}">
                    </div>
                    <div id="{{ $id }}" style="display: none;">
                        <video controls width="100%" class="elVideo" loop="loop" autoplay="" playsinline="" muted="" src="{{asset( $video->file_path )}}" id="video-slider-1 big-video" ></video>
                    </div>
                    </div>
                </div>
                 @endforeach

                 
            </div>
            <div class="dest-btn">
                <button class="expo" onclick="myFunction();"> View All Videos</button>
           </div>
        </div>
    </section>
    
    <section>
        <div class="PopShwMnVriBkle" id="myDIV"  style="display: none;"> 
    <div class="SurciseSecSwn">
        <div class="clseShw" id="send2" onclick="hide();"> <img src="https://www.distinctdestinations.in/asset/icon/closenv.png"> </div>
        <div>
            <h5>Disclaimer</h5>         
            <p>To Explore our collection, please contact us at <a href="mailto:info@farandbeyond.in">info@farandbeyond.in</a> for the Login and password.</p>
        </div>
    </div>
</div>
    </section>
    <section class="trips-rsp" style="display:none;">
        <div class="container-fluid">
            <div class="row">
              <div class="about-h"><h2 style="margin-bottom:31px;text-align:center;">Blogs</h2>
                  </div>
                </div>
                <div class="row" style="padding:0px 30px 10px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video">
                         <img src="images/home/destinations/india.jpg" alt="about" style="height:400px!important">
                    </div>
                </div>
                 <div class="col-lg-8">
                    <div class="trav-video">
                         <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video2">
                         <img src="images/home/destinations/india.jpg" alt="about" style="height:300px!important">
                    </div>
                </div>
                 <div class="col-lg-8">
                    <div class="trav-video2">
                         <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          autoplay:true,
          margin:25,
          stagePadding:25,
          nav: false,
          center: true,
          loop: true,
          responsive: {
          0: {
            items: 1
          },
          768: {
            items: 3
          },
          960: {
            items: 3
          },
          1200: {
            items: 3
          }
        }
        })
      })
    </script>
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
       x.style.display = "none";
  }
}
function hide() {
    document.getElementById('myDIV').style.display = 'none';
}
</script>
@endsection
@section('scripts')
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
       x.style.display = "none";
  }
}
function hide() {
    document.getElementById('myDIV').style.display = 'none';
}
</script>

@endsection
 
   
   
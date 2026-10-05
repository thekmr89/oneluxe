@extends('layouts.master')
@section('css')
    <link href="{{ asset('css/home.css') }}?v={{ file_exists(public_path('css/home.css')) ? filemtime(public_path('css/home.css')) : time() }}" type="text/css" rel="stylesheet">
@endsection
@section('main-content')
<section class="lh-0">
    <div class="video">
        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{asset($pageData['section1video'] ?? '' )}}" id='video-slider-1'></video>
        <div class="text-video">
            <h2 class="home-banner"><span>{{ $pageData['section1heading'] ?? '' }}</span></h2>
        </div>
    </div>
</section>
<section class="bg-secondary-light bg-secondary-light py-4 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center desp-sec-A">
                {!! $pageData['section2title'] ?? '' !!}
               <div class="btn_know  expo2 "><a class="btn_more" href="about-us" style="text-decoration:none;">Know More</a></div>
            </div>
        </div>
    </div>
</section>

<section class="py-4 py-md-5" style="background-image: url('../images/home/srvceback.png');" >
    <div class="px-md-5 px-1">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-end">
                <div class="inner_img_text1 text-sm-start text-center px-md-0 px-2 mb-md-0 mb-4">
                    <h2 class="">IMMERSIVE </br> JOURNEYS </h2>
                    <div class="slider_p pt-3 text-sm-start text-center ">
                       <p style="font-size:18px!important; color:#000;">Personal journeys. Private experiences. Individual ways to discover India, Nepal, Bhutan and Srilanka.</p>
                    </div>
                    <div class="ourser-btn justify-content-center justify-content-md-start text-sm-start text-center">
                        <button class="expo1"><a href="services">Read More</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                @if(count($multipleServices) > 3)
                    <div class="owl-carousel  owl-carousel1 owl-theme">
                        @foreach($multipleServices as $Services)
                            <div class="item desti-img img-hove2 srv-img overflow-hidden">
                                <div class="card">
                                    <img src="{{ asset($Services->image_path ?? '') }}" alt="vote-for-us">
                                    <a href="services#{!! $Services->tag_service_page !!}" style="text-decoration:none;" class="hiden">
                                        <div class="offer-slider-btn-expele">
                                            <h3 class="text-white position-relative">{!! $Services->heading !!}</h3>
                                            <div class="slider_p new_style" class="pt-2">
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
</section>
<div class="why-choose py-4 py-md-5">
    <div class="container">
        <div class="row">
            <div class="text-center mb-md-5 mb-4">
                <h2 class="text-secondary">WHY ONELUXE</h2>
                <h5>BECAUSE ULTRA-LUXURY IS PERSONAL</h5>
            </div>
            <div class="col-lg-3 col-md-4 col-12 top-features">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/last minute experts.png')}}" class="img-fluid">
                    <h4>THREE DECADES</br> OF EXPERTISE</h4>
                    <div class="slider_p">
                        <p>Three decades of collective experience and first-hand destination knowledge.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Destination Advisors.png')}}" class="img-fluid">
                    <h4>WE LISTEN</br> FIRST</h4>
                    <div class="slider_p">
                        <p>Your interests, preferences, pace, and priorities shape every journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Travel Assurance.png')}}" class="img-fluid">
                    <h4>PERSONAL</br> ADVISORS</h4>
                    <div class="slider_p">
                        <p>One-to-one expertise and continuity from the first conversation onwards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Insider Access.png')}}" class="img-fluid">
                    <h4>PRIVATE &</br> INSIDER ACCESS</h4>
                    <div class="slider_p">
                        <p>Private experiences, privileged introductions and access beyond the conventional.</p>
                    </div>
                </div>
            </div>
               <div class="col-lg-3 col-md-4 col-12 top-features">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/24_7 Support.png')}}" class="img-fluid">
                    <h4>INDIVIDUALLY</br> DESIGNED</h4>
                    <div class="slider_p">
                        <p>Every journey is designed around the person travelling, never a template.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Total Privacy.png')}}" class="img-fluid">
                    <h4>TOTAL </br>PRIVACY</h4>
                    <div class="slider_p">
                        <p>Discreet planning, confidential arrangements and personal space throughout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Flawless Execution.png')}}" class="img-fluid">
                    <h4>FLAWLESS</br> EXECUTION</h4>
                    <div class="slider_p">
                        <p>Every detail coordinated with precision, from arrival to departure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="pakage-image text-center">
                    <img src="{{asset('images/icon/Client First.png')}}" class="img-fluid">
                    <h4>24/7 </br>SUPPORT</h4>
                    <div class="slider_p">
                        <p>Responsive on-ground assistance whenever and wherever it is needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="destination bg-white py-md-5 py-4">
        <div class="mb-md-5 mb-4 text-center container">
            <h2 class="text-secondary">DESTINATIONS</h2>
			<h5>FOUR COUNTRIES. ENDLESS POSSIBILITIES</h5>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:30px;padding-right:35px; ">
                <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($destination as $value)
                            <div class="owl-item active ">
                                <div class="item desti-img ">
                                    <a class="d-block rounded-md" href="{{'destinations#'.strip_tags($value->destination_name) ?? '' }}">
                                        <div class="card img-hover1 image-hover-effect">
                                            <img src="{{asset($value->l_image ?? '') }}" alt="vote-for-us" class="w-100 object-fit-cover">
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

<section class="AnimateSec activeAnimte">
    <div class="OurComintSec">
        <div class="Cmntmntcl12">
            <div class="TlteHderShw container">
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

         <section class="ttm-row connect-section bg-img2 ttm-bgcolor-darkgrey clearfix fixed-bg" style="display:none;">
          
          <div class="row m-0">
            <div class="col-lg-12 text-center">
              
              <div class="featured-icon-box icon-align-top-content text-center style7 text-opa content-box">
                <div class="featured-content">
                  <div class="featured-desc">
                    <h4 class="title1">Designed for those who find beauty in the details.</h4>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

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
        
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-right"></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-left"></i>
        </a>
    </div>
</section>

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
            1140:{ items:3 }
        }
    });
});

</script>
@endsection

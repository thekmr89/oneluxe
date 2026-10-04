@extends('web-layouts.app')

@section('page-content')
    <link href="css/hero.min.css" type="text/css" rel="stylesheet">


    <style>
        @media only screen and (max-width: 600px) {
            .text-video {
                left: 50% !important;
                right: 50% !important;
            }
        }
    </style>
    <section class="">
        <div class="video video-slider-1">
            <video width="100%" class="elVideo video-slider-1" loop="loop" autoPlay playsInline muted
                src="{{ $pageData['section1video'] ?? '' }}" id='video-slider-1'></video>
            <div class="text-video hard-responsive">
                <h2><span class="hard-responsive"
                        style="font-size:3rem;font-weight: 400;letter-spacing: 2px;line-height: 1.05;color:white; font-weight: 600; line-height:1.5;">
                        {{ $pageData['section1heading'] ?? '' }}</span></h2>

            </div>
        </div>
    </section>

    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="trips-text">
                        {!! $pageData['section2title'] ?? '' !!}
                        <div class="btn_know"><a class="btn_more" href="about-us" style="text-decoration:none;">Know
                                More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- new section  --}}
    <section>
        <div class="destination" style="background:#FFF7F7!important; padding-bottom:40px;">
            <div class="dest-heading">
                <h2 style="margin-bottom:0px!important; margin-top:0px;">Destinations</h2>
            </div>
            <div class="container-fluid">
                <div class="row" style="padding-left:30px;padding-right:35px; ">
                    <div class="owl-carousel vol1 owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="width:4326px !important">

                                @foreach ($destination as $value)
                                    <div class="owl-item active">
                                        <div class="item desti-img">
                                            <a href="{{ 'our-destination#' . $value->destination_name ?? '' }}">
                                                <div class="card img-hover1">
                                                    <img src="{{ $value->l_image ?? '' }}">
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
        </div>
        <div class="dest-btn">
            <button class="expo"><a href="our-destination">Explore</a></button>
        </div>
        </div>
    </section>


    <section class="trips-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12" style="position:relative">
                    <div class="inner_img_text1">
                        <h2 style="color:black;text-align: left;">Our Services</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="text-align: left; font-size:18px!important;">
                                We offer the most exclusive experiences to guests through
                                our three highly personalised services.
                            </p>
                        </div>
                        <div class="ourser-btn">
                            <button class="expo"><a href="our-servic">Read More</a></button>
                        </div>
                    </div>
                </div>

                <style>
                    @media only screen and (max-width: 600px) {
                        .hard-responsive {
                            width: 100% !important;
                        }

                        .col-3 {
                            padding-left: 0px !important;
                        }
                    }
                </style>

                <div class="col-9 hard-responsive" style="padding-left:0px!important; width:75%">
                    <div id="service-carousel2" class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="width: 3344px !important;">



                                @foreach ($multipleServices as $item)
                                    <div class="owl-item active hard-responsive servicesSlider"
                                        style="width: 12% !important;">

                                        <div class="item" style="border-radius: 10px;">

                                            <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img">


                                                <div class="card" style="width: 400% !important; border-radius: 10px;">
                                                    <div class="offer-slider-btn-expele">
                                                        {!! $item->content_value !!}
                                                    </div>
                                                    <img src="{{ $item->image_path ?? '' }}"
                                                        style="width: 500px !important; height:500px" alt="vote-for-us">
                                                    <a href="our-servic" style="text-decoration:none;" class="hiden">
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    {{-- <section class="destination" style="padding-top: 55px;padding-bottom: 65px; padding-left:30px;padding-right:35px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12" style="position:relative">
                    <div class="inner_img_text1">
                        <h2 style="color:black;text-align: left;">Our Services</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="text-align: left; font-size:18px!important;">
                                We offer the most exclusive experiences to guests through
                                our three highly personalised services.
                            </p>
                        </div>
                        <div class="ourser-btn">
                            <button class="expo"><a href="services.html">Read More</a></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img" style="">
                    <div class="card">
                        <img src="images/home/luxury-collection.webp" alt="vote-for-us">
                        <a href="services.html#luxury-collection" style="text-decoration:none;" class="hiden">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size: 24px; color:white;">The Luxury Collection</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        Our Luxury Collection is in sync with the expanded
                                        new &quot;three T&#39;s&quot; of luxury: Time, Truth and Trust.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img" style="">
                    <div class="card">
                        <img src="images/home/meetings-and-conferences.webp" alt="vote-for-us">
                        <a href="services.html#meetings-and-conferences">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size:24px;color:white;">Meeting & Conferences</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        We provide a comprehensive range of ultra-personalised services, including
                                        technological solutions and more.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img" style="">
                    <div class="card">
                        <img src="images/home/Incentives.webp" alt="vote-for-us">
                        <a href="services.html#incentives">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size: 24px;color:white;">Incentives</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        Our leisure time programmes offer the greatest value for
                                        time and money through a spectrum of thrilling events and
                                        fun activities.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section> --}}

    {{-- //////////////////////////////////////////////////////// --}}


    <div class="why-choose">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Why Travel With Far & Beyond</h2>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Heart.svg" class="img-fluid">
                        <h4>Responsible Travel</h4>
                        <div class="slider_p">
                            <p>Only Responsible Travel makes our world a better place. Come share this vision with us.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Philanthropy.svg" class="img-fluid">
                        <h4>In Our Hands</h4>
                        <div class="slider_p">
                            <p>Our fantastic Concierge network ‘far and beyond’ empowers
                                the guest experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_TravelExperts.svg" class="img-fluid">
                        <h4>Travel Experts</h4>
                        <div class="slider_p">
                            <p>We take you only where we have gone, as your comfort is our comfort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Guide.svg" class="img-fluid">
                        <h4>Our Guarantee</h4>
                        <div class="slider_p">
                            <p>We deliver what we commit, your extended team on- ground creating memorable experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pakage" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-1.html" class="img-fluid">
                    </div>
                    <div class="pakage-text">
                        <p>Lorem Ipsum is</p>
                        <h1>Lorem Ipsum is simply dummy</h1>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-2.html" class="img-fluid">
                    </div>
                    <div class="pakage-text">
                        <p>Lorem Ipsum is</p>
                        <h1>Lorem Ipsum</h1>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- first --}}
    <section class="texti-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 img-respo"
                    style="padding: 0px 0px 0px; 0px;min-height: 40vw; overflow: hidden;">
                    {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="900">
                        <div class="carousel-inner">
                            @foreach ($liImage as $index => $item)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ $item->file_path ?? '' }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div> --}}

                    <div id="carouselExampleControls" class="carousel  slide" data-bs-ride="carousel"
                        data-bs-interval="900">
                        <div class="carousel-inner">
                            @foreach ($liImage as $index => $item)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ $item->file_path ?? '' }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px;min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        {!! $pageData['section6content'] ?? '' !!}
                        <div class="ourser-btn">
                            <br><br>
                            <button class="expo"><a href="littile-inspiration">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- updated section  --}}
    <section class="texti-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 top-features"
                    style="padding: 0px 0px 0px 0px; background:#FFF7F7; min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        {!! $pageData['section7content'] ?? '' !!}
                        <div class="ourser-btn">
                            <br><br>
                            <button class="expo"><a href="responsible-travel">Read More</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 item-brand img-respo"
                    style="padding: 0px 0px 0px 0px; min-height: 40vw; overflow: hidden;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="900">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/home/little-inspirations.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/Responsible-travel.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" class="d-block w-100" alt="...">
                            </div>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/festive-holiday.jpg"
                        alt="Luxury Travels South Africa">
                    <div class="box-content">
                        <h3 class="title">Festive Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/textile-art-and-craft.jpg"
                        alt="Luxury Travels Dubai Abu Dhabi">
                    <div class="box-content">
                        <h3 class="title">Testile, Arts and Craft</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/food-holiday.jpg"
                        alt="Luxury Travels Maldives">
                    <div class="box-content">
                        <h3 class="title">Food Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/Untitled-design-(2).jpg"
                        alt="Luxury Travels Switzerland">
                    <div class="box-content">
                        <h3 class="title">Wildlife Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/MYS-multi-activity.jpg"
                        alt="Luxury Travels Paris">
                    <div class="box-content">
                        <h3 class="title">Multi-Active Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/positive-impact.jpg"
                        alt="Luxury Travels Japan">
                    <div class="box-content">
                        <h3 class="title">positive Impact Travel</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/wheelchair.jpg"
                        alt="Luxury Travels China">
                    <div class="box-content">
                        <h3 class="title">Wheelchair Accessible Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
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



    <section class="our_team" style="margin-bottom:5%">
        <h2 style="margin-top:65px">What They Say</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" position="relative;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/3.html" alt="">
                    </div>
                    <p class="testimonial">With these few words, would like to mention that, Vinay has been my reliable
                        partner for more than 15 years for the requests of my VIP clients in India, Sri Lanka, Nepal,
                        and Bhutan. He is an exceptional destination manager who understands and meets even the most
                        complex requirements. His deep expertise and extensive knowledge of these destinations ensure
                        unique and memorable experiences for travellers. I highly recommend his services for an
                        authentic and worthwhile exploration of this wonderful region.</p>
                    <p class="overview">
                        <b> Laurence
                        </b> LOCAZUR Travel - Yachting - Cruises<br>
                        Belgium
                    </p>
                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/1.html" alt="">
                    </div>
                    <p class="testimonial">
                        Je travaille avec Vinay depuis plus de 10 ans maintenant, j’apprécie particulièrement son
                        professionnalisme et son efficacité mais aussi sa disponibilité pour le suivi des dossiers.
                        Nous avons l’occasion de travailler ensemble sur l’organisation de voyages assez compliqués avec
                        des clients très exigeants ou avec des demandes originales.
                        En 10 ans de collaboration, tout s’est toujours parfaitement bien passé avec mes clients, je
                        n’ai jamais eu le moindre retour négatif.

                    </p>
                    <p class="overview">
                        <b>Aimée Bon-Hecker</b>Managing Director<br>TERANUI BY TSELANA TRAVEL
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Plus de 10 ans que Vinay, veille au bonheur de nos hôtes. Notre
                        collaboration prend force grâce à ce supplément d’âme qui fait que chaque voyage en Inde que
                        nous créons devient une féerie, embellis par les conseils avisés que nous recevons pour proposer
                        une nouvelle adresse, un site à ne pas manquer…Et puis il y a ce sens de l’hospitalité et de la
                        courtoisie totalement inné chez Vinay et donne force et sécurité à une collaboration à distance.
                    </p>
                    <p class="overview">
                        <b>Nathalie BUENO</b>Directrice Générale – Managing Director<br>SECRETS DE VOYAGES

                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vinay Dhall is a highly skilled professional with whom I have built a strong
                        relationship over the years.
                        Available at anytime, efficient, enthusiastic and always offering excellent advice.
                        I entrust my clients to him with complete confidence.
                        When we work with such a professional, business becomes easier.
                    </p>
                    <p class="overview">
                        <b>OLIVIER GLASBERG</b>Product Director
                        <br>SUCCES VOYAGE

                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial"> J’ai rencontré Vinay lors notre arrivée en Inde avec notre premier groupe
                        de voyageurs en 2011. Vinay avait construit notre voyage et a veillé sur chaque instant de notre
                        voyage. Un voyage pavé de surprises comme nous n’en avions jamais vécues dans les cadres
                        somptueux des anciens palais choisis avec soin. Et depuis 2011 nous avons toujours gardé contact
                        et un de mes rêves et retourner dans cet incroyable pays ☀️ et laisser à Vinay le soin de
                        construire ce voyage ! </p>
                    <p class="overview">
                        <b>Sylvie ARRIGHI-REVAH</b>Veuve Clicquot
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Je travaille avec Vinay depuis 5 ans pour l’Inde et le Sri Lanka pour ma
                        clientèle haut de gamme et très exigente et je ne confierais mes clients à personne d’autre que
                        lui !

                        Au-delà des feedbacks de mes clients qui sont revenus enchantés (qualité dans l’organisation,
                        souci du détail, les surprises offertes pour créer un wow effect), j’apprécie aussi son
                        expertise, la clarté et la transparence des informations, son Happy Face constant et so
                        optimisme à toute épreuve.

                        Vinay connait tout le monde en Inde, donc tout est extrêmement fluide, rapide avec une
                        reconnaissance et une valorisation du client. « A l’impossible nul n’est tenu » …..Vinay en est
                        le contre-exemple ! </p>
                    <p class="overview">
                        Cécile Bouchet<br />Trans Continental
                    </p>

                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-next" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-right">
                    < </i>
            </a>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-left">
                    ></i>
            </a>
        </div>





        <style>
            h3 p {
                color: white !important;
            }
        </style>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Preload images
                const images = document.querySelectorAll('.carousel-item img');
                images.forEach(img => {
                    const src = img.getAttribute('src');
                    const imgPreload = new Image();
                    imgPreload.src = src;
                });

                // Smooth transitions by removing white flash
                const carouselInner = document.querySelector('.carousel-inner');
                carouselInner.style.transition = 'opacity 0.5s ease-in-out';
                carouselInner.style.opacity = '1';
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myCarousel').on('slide.bs.carousel', function(e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 3;
                    var totalItems = $('.carousel-item').length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });
            });
        </script>






        {{-- ////////////////////////////////////////////////////////////////////////// --}}


        <script>
            $(document).ready(function() {
                var owl = $('#service-carousel2');
                owl.owlCarousel({
                    autoplay: true,
                    autoplayHoverPause: true,
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            })
        </script>

        <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    autoplay: true,
                    autoplayHoverPause: true,
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
            })
        </script>


        <script>
            $('.testi_box').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                navText: [' < i class = "fa fa-caret-left" > < /i>', ' < i class = "fa fa-caret-right" > < /i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 4
                    },
                    1200: {
                        items: 1
                    }
                }
            });
        </script>
        <!--logo slider-->
        <script>
            $('.inspired_slider1').owlCarousel({
                loop: true,
                autoplay: true,
                stagePadding: 150,
                margin: 30,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 6
                    },
                    1200: {
                        items: 7
                    }
                }
            });
        </script>
        <script>
            // Show the first tab and hide the rest
            $('#tabs-nav li:first-child').addClass('active');
            $('.tab-content').hide();
            $('.tab-content:first').show();
            // Click function
            $('#tabs-nav li').mouseenter(function() {
                $('#tabs-nav li').removeClass('active');
                // $(this).addClass('active');
                $('.tab-content').hide();
                var activeTab = $(this).find('a').attr('href');
                $(activeTab).fadeIn();
                return false;
            });
        </script>
        <script>
            window.onscroll = function() {
                myFunction()
            };
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }
        </script>
        <!--transparent nabigation-->
        <script>
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {

                    document.getElementById("navbar").style.background = "#fff";
                    document.getElementById('logo1').style.display = "none";
                    document.getElementById('logo2').style.display = "block";
                    document.getElementById('logo3').style.display = "none";
                    document.getElementById('logo4').style.display = "block";
                    document.getElementByClass('Fnb').style.color = "#fff"
                    document.getElementByClassName('mybutton').classList.add("btn-visible")
                } else {

                    document.getElementById("navbar").style.background = "none";
                    document.getElementById('logo2').style.display = "none";
                    document.getElementById('logo1').style.display = "block";
                    document.getElementById('logo4').style.display = "none";
                    document.getElementById('logo3').style.display = "block";
                    document.getElementByClassName('mybutton').classList.remove("btn-visible")
                }
            }
        </script>
        <script>
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!--transparent nabigation-->
        <script>
            (function() {
                "use strict";

                var cookieAlert = document.querySelector(".cookie-alert");
                var acceptCookies = document.querySelector(".accept-cookies");

                cookieAlert.offsetHeight;

                if (!getCookie("acceptCookies")) {
                    cookieAlert.classList.add("show");
                }

                acceptCookies.addEventListener("click", function() {
                    setCookie("acceptCookies", true, 60);
                    cookieAlert.classList.remove("show");
                });
            })();

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) === ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) === 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
        </script>

























    </section>
@endsection

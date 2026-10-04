<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="/">
    <link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $meta->tittle ?? 'not working' }}</title>
    <meta name="description" content="{{ $meta->description ?? 'not working' }}" />
    <meta name="keywords" content="{{ $meta->keywords ?? 'not working' }}" />

    <!-- css****** -->
    <link href="css/custom_style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/cssone.min.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href="css/responsive-fixes.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="menu-bg" id="navbar">
            <div class="container-fluid" style="padding-right: 0;">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="logo" id="logo1">
                                <a href="/" class="logo">
                                    <div class="header-logo">
                                        <img src="images/logo/logo_far_and_beyond.png" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="logo" id="logo2" style="display:none;">
                                <a href="/" class="logo">
                                    <div class="header-logo">
                                        <img src="images/logo/logo_far_and_beyond_black.png" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="left">
                                <div class="tog-btn">
                                    <div class="FrBrighShw" id="logo3">
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                    </div>
                                    <div class="FrBrighShw" id="logo4" style="display:none;">
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                    </div>
                                    <div class="mainu">
                                        <div class="inner-mainu">
                                            <div class="main-menu">
                                                <ul class="list-mainu">
                                                    <li class="list"><a href="/">HOME</a></li>
                                                    <li class="list"><a href="about-us">ABOUT US</a></li>
                                                    <li class="list"><a href="our-destination">DESTINATIONS</a></li>
                                                    <li class="list"> <a href="our-servic">SERVICES</a></li>
                                                    <li class="list"><a href="littile-inspiration">INSPIRING
                                                            EXPERIENCES</a></li>
                                                    <li class="list"><a href="responsible-travel">RESPONSIBLE
                                                            TRAVEL</a></li>
                                                    <li class="list"> <a href="about-us#why-us">WHY US</a></li>
                                                    <li class="list"><a href="about-us#our-team">MEET OUR TEAM</a>
                                                    </li>
                                                    <li class="list"> <a href="contact-us">CONTACT</a></li>
                                                    <li class="list"> <a href=""
                                                            style="color:red;text-decoration:underline;">CLOSE</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact" onclick="location.href='contact-us';">Contact Us</div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- this is the style --}}

    </header>





    @yield('page-content')




    <!--End our patener-->



    <!--contact-us-->
    <section class="contact" style="display:none;">
        <img src="slider/banner-4.jpg" alt="" style="width: 100%;">
        <div class="form">
            <div class="inner-f">
                <p>CONTACT US</p>
                <h3
                    style="
        font-size: 3.5em; line-height: 52px;
    letter-spacing: -2.5px;margin-bottom: 40px;">
                    Have questions? <br> Get in touch! </h3>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Last Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Email">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Country">
                    </div>
                </div>
                <div class="chek cheack" style="padding-left: 20px;">
                    <input class="form-check-input" type="checkbox" id="" name="option1" value="something"
                        checked>
                    <span>I agree to the Privacy Policy.</span>
                </div>
                <button class="btn btn-1 ">Get in Touch </button>
            </div>
        </div>
    </section>
    <!--contact us end-->
    <!--news latter -->


    <!--End news latter-->
    {{-- <div class="client-logo-bg">
        <div class="group-aff">
            <h3 style="font-weight:600;">
                <span>Group Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="images/footerlogo/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="images/footerlogo/keralatravelmart.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Tourcert.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Toft.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="images/footerlogo/RTSOI-LOGO.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="images/footerlogo/One-Tree-Planted.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="images/footerlogo/IATO.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/sanderson-phillips.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/USTOA.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/SITE_wordmark.png" alt="site_wordmark">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="client-logo-bg">
        <div class="group-aff">
            <h3 style="font-weight:600;">
                <span>Group Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="images/footerlogo/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="images/footerlogo/keralatravelmart.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Tourcert.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Toft.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="images/footerlogo/RTSOI-LOGO.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="images/footerlogo/One-Tree-Planted.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="images/footerlogo/IATO.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/sanderson-phillips.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/USTOA.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/SITE_wordmark.png" alt="site_wordmark">
                </div>
            </div>
        </div>
    </div>

    <section class="news-latter" style="border-top:1px solid rgb(255 255 255 / 50%);">
        <div class="container-fluid">
            <a onclick="topFunction()" class="btn-top"><img class="btn-top-image"
                    src="images/icon/top_arrow.png"></a>
            <div class="row">
                <div class="col-5 hard-responsive">
                    <div class="news-cont">Join our travel notebook!</div>
                    <div class="news-desc news-cont">Stay ahead with the latest updates in travel trends.</div>
                </div>
                <div class="col-7 hard-responsive">
                  <form class="form-inline" action="{{ route('admin.save.subscription') }}" method="POST"
                        onsubmit="return validateForm()">
                        @csrf
                            <div class="form-group">
                                <input type="email" id="name" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Enter email" name="email">
                            </div>
                            <button type="submit" class="btn-2">SUBSCRIBE</button>
                            <div class="checkbox">
                                <label class="check">
                                    <input type="checkbox">
                                    <p style="font-size:1rem!important; color: white;">I have read and accept the <a style="text-decoration: underline;">Privacy and Data Protection Policy*</a> and I know that I can unsubscribe at any time. </p>
                                </label>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!--new footer desine-->
    <footer class="footers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <a href="/">
                                <div class="footer-logo hard-responsive">
                                    <img src="images/logo/footer-logo.png" alt="logo">
                                </div>
                            </a>
                            <div><span style="color: #6c757d;font-size: 0.85rem;">(A Distinct Destinations
                                    company)</span></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 hard-responsive">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Quick Links</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="contact-us">
                                        <span class="">About Us</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="our-servic">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="littile-inspiration">
                                        <span>Inspirational Adventures</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="responsible-travel">
                                        <span class="">Responsible Travels</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="about-us#our-team">
                                        <span class="">Our Team</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="https://www.distinctdestinations.in/pay-online" target="_blank">
                                        <span class="">Payment Links</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="contact-us">
                                        <span class="">Contact Us</span>
                                    </a>
                                </li>
                                 <li class="list-item">
                                    <a href="{{route('pay-online')}}" target="_blank">
                                        <span class="">Demo Payment Links</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="https://api.whatsapp.com/send?phone=919599360800" target="_blank">
                                        <span>Start a Whatsapp Chat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 hard-responsive">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Destinations</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="destinations.html#india">
                                        <span class="">India</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destination#nepal">
                                        <span>Nepal</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destination#bhutan">
                                        <span>Bhutan</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destination#shrilanka">
                                        <span>Sri Lanka</span>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="f-heading">Services</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="our-servic#luxury-collection">
                                        <span class="">The Luxury Collection</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="our-servic#meetings-and-conferences">
                                        <span class="">Meetings & Conferences</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="our-servic#incentives">
                                        <span class="">Incentives</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 hard-responsive">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Contact Us</h3>
                            <p class="list-item" style="font-size:16px!important; color:black;">
                                Unit No 701 to 708<br />
                                Tower D, Global Business Park
                                <br />
                                Sector-26, Gurugram, Haryana, 122002
                                <br />
                                +91 9599-360-800
                                <br>
                                info@farandbeyond.in
                            </p>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <div class="social">
                                        <a href="https://www.facebook.com/profile.php?id=61559894617770"
                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.linkedin.com/company/102744889/admin/feed/posts/"
                                            target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/farandbeyondd/" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copywrite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 text-center footer-cent" style="font-size:14px;"><span>© 2024
                        FAR & BEYOND. All Rights Reserved.</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left footer-cent">
                    <ul class="copy-itm" st>
                        <li class="list-itm">
                            <a href="privacy-policy#tab_payment">
                                <span class="">Privacy Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy#tab_cookie">
                                <span class=" ">Cookies Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy#tab_gdpr">
                                <span class=" "> GDPR Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy#tab_policy">
                                <span class=" "> Payment Policy</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 text-left footer-cent" style="font-size:14px;">
                    <ul class="copy-itm">
                        <li class="list-itm">
                            <a href="https://bitgaintech.com/" target="_blank">
                                <span style="color:#0dcaf0;padding:0px!important; font-weight:bold;">bit</span><span
                                    style="color: #28a745;padding:0px; font-weight:bold;">Gain</span><span
                                    style="padding:0px!important; font-weight:bold; color:gray;">-Tech</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer end-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                stagePadding: 50,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
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

    <script>
        function validateForm() {
            var checkbox = document.getElementById("privacyPolicyCheckbox");
            if (!checkbox.checked) {
                alert("You must accept the Privacy and Data Protection Policy to subscribe.");
                return false;
            }
            return true;
        }
    </script>
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
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

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
            } else {

                document.getElementById("navbar").style.background = "none";
                document.getElementById('logo2').style.display = "none";
                document.getElementById('logo1').style.display = "block";
                document.getElementById('logo4').style.display = "none";
                document.getElementById('logo3').style.display = "block";
            }
        }




        ///////////////////////////////////////////////
    </script>










</body>

</html>

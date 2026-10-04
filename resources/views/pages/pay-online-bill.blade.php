 @extends('layouts.master') @section('main-content')
 <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <section class="hero" style="position:relative; ">
     <div class="banner">
         <img src="https://www.distinctdestinations.in/asset/images/payentbanner.jpg" class="d-block w-100"
             alt="Luxury Travels Bali">
     </div>
     <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="hero-title" style="text-align:center;">
                     <h2 style="font-size: 48px;line-height: .8em; color:#fff;">Online Payment</h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <style>
     .hero-title .bottom-head {
         font-size: 1rem;
         font-style: normal;
         font-weight: 700;
         letter-spacing: 1.6px;
         line-height: 1.4;
         color: #379c8a;
     }

     .about-cont {
         padding: 60px 0 0px 0;
     }

     .about-cont .container {
         padding-top: 40px;
     }

     .about-text p {
         padding-top: 0px;

         font-size: 20px;
         line-height: 30px;
         text-align: center;
     }

     .about-text {
         width: 80%;
         margin: auto;
     }

     .about-img img {
         width: 100%;
     }

     .trips-bg .inner-section {
         padding: 0px;
     }

     .about-h h2 {
         font-size: 3rem;
         font-weight: bold;
     }

     .about-h {
         text-align: left;
     }

     .innner-content {
         overflow: hidden;
     }

     .about-img .inner-img {
         width: 100%;
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .about_main {
         min-height: 39.4vw;
         height: auto;
         width: 90%;
         margin: auto;
         padding-top: 40px;
         padding-left: 14px;
         padding-right: 14px;
     }

     .about_main .about_p {
         text-align: center;
     }

     .about_main .about_p p {
         font-size: 19px;
     }

     .about-img1 {
         /*max-width: 562px;*/
         width: 100%;
         margin: auto;
         background: red;
         overflow: hidden;
     }

     .about-img1 img {
         width: 100%;
         height: 43vw;
     }

     .about-img2 {
         min-height: 37vw;
         /*min-width:506px;*/
         height: 100%;
         width: 100%;
         overflow: hidden;
     }

     .about-img2 img {
         width: 100%;
         height: 37vw;
     }

     .about_main2 {
         min-height: 37vw;
         /*min-width:506px;*/
         height: 100%;
         width: 100%;
         /*background:green;*/
         display: flex;
         text-align: center;
         align-items: center;
     }

     .about_main3 {
         width: 70%;
         /* background: red; */
         /* margin: auto; */
         text-align: center;
         margin-top: 5%;
         margin-left: 25%;
         padding: 20px;
         box-sizing: border-box;

     }

     .meet_team {
         max-height: 20vw;
         height: 20vw;
         display: flex;
         justify-content: left;
         text-align: center;
         align-items: center;
     }

     .about-img4 {
         max-width: 540px;
         width: 80%;
         margin: auto;
         background: red;
         overflow: hidden;
         position: absolute;
         bottom: 20%;
         left: 10%;
     }

     .about-img4 img {
         width: 100%;
         height: 37vw;
     }

     .about_left,
     p {
         text-align: left;
     }

     .about_main4 {
         min-height: 37vw;
         height: 100%;
         width: 80%;
         margin: auto;
         display: flex;
         text-align: center;
         align-items: center;
     }

     .cont-p p {
         font-size: 16px;
         font-weight: 500;
         color: #495057;
     }

     .expo {
         padding: 0px !important;
         border: none !important;
         min-width: 133px !important;
     }

     .expo a:hover {
         display: inline-block;
         padding-top: 5px;
         padding-bottom: 5px;
         padding-left: 20px;
         padding-right: 20px;
         font-size: 17px;
         text-decoration: none;
         color: #ffffff;
         background: #000000;
         font-weight: 500;
         border: 1px solid black;
         min-width: 133px;
     }

     .expo a {
         display: inline-block;
         padding-top: 5px;
         padding-bottom: 5px;
         padding-left: 20px;
         padding-right: 20px;
         font-size: 17px;
         text-decoration: none;
         color: #000;
         background: #fff;
         font-weight: 500;
         border: 1px solid black;
         min-width: 133px;
     }

     @media only screen and (max-width: 600px) {
         .hard-responsive {
             width: 100% !important;
         }
     }

     /*media query */
     @media only screen and (max-width:768px) {
         .contact {
             display: none;
         }

         .social {
             display: flex;
             align-items: center;
             justify-content: center !important;
             text-align: center !important;
         }

         .about_left,
         p {
             text-align: center;
         }

         .hero-title h2 {
             font-size: 2rem !important;

         }

         .about-img1 {
             padding: 10px !important;
         }

         .left {
             display: flex;
             text-align: center;
             align-items: center;
             width: 13%;
             justify-content: space-evenly;
         }

         .padding_right {
             padding-right: var(--bs-gutter-x, .75rem) !important;
         }

         .form-inline .form-group {
             width: 100% !important;
         }

         .check {
             width: 100% !important;
             display: flex;
             justify-content: space-between;
             align-items: center text-align:center;
         }

         .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset {
             flex: 0 100% !important;
             max-width: 100% !important;
             margin-bottom: 40px !important;
             margin-right: 8px !important;
             position: relative !important;
         }

         .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .title h2 {
             font-size: 30px !important;
         }

         .cont-p {
             padding-bottom: 20px;
         }

         .cont-pho {
             padding-top: 20px;
         }

         .IqryFrmBx-Wppr {
             padding: 0px !important;
         }

         .IqryFrmBx-Wppr .Clm-sm-7 {
             flex: 0 83% !important;
             max-width: 83% !important;
             z-index: 1 !important;
         }

         .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx {

             margin-bottom: 20px !important;
         }
     }

     .expo {
         padding: 0px !important;
         border: none !important;
         min-width: 133px !important;
     }

     /*end media query*/
     input,
     input::placeholder {
         font-size: 20px !important;
     }

     .left-side {
         margin-top: 88px;
     }

     .top-section {
         margin-top: 53px;
         margin-bottom: 53px;
     }

     .top-section a {
         text-decoration: none;
         color: black;
     }

     .top-section h2 {
         font-size: 26px;
         margin-bottom: 19px;
     }

 </style>
 <!--New page desine for payment-->
 <div class="container">
     <div class="row">
        <div class="col-sm-5">
            <div class="left-side">
                <div class="top-section">
                    <h2>Corporate Office Address</h2>
                    <p>Unit No 701 to 708, Tower D, Global Business
                        Park, Sector-26, Gurugram, Haryana, 122002</p>
                </div>
                <div class="top-section">
                    <h2>Write us</h2>
                    <a href="mailto:info@farandbeyond.in">info@farandbeyond.in</a>
                </div>
                <div class="top-section">
                    <h2>Call Us</h2>
                    <a href="tel:+91 9818 401 791">+91 9818 401 791</a>
                </div>

            </div>
        </div>
        <div class="col-sm-7">
            <div class="contact-f">
                <h2>Online Payment</h2>
                <form action="{{route('payments.process')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr"><span  style="color:red">First Name:*</span></label>
                                <input type="text" class="form-control" id="usr" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr">Last Name:</label>
                                <input type="text" class="form-control" id="usr" name="last_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr"><span  style="color:red">Email:*</span></label>
                                <input type="email" class="form-control" id="usr" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr"><span  style="color:red">Mobile:*</span></label>
                                <input type="text" class="form-control" id="usr" name="mobile" maxlength="15" pattern="\d{10}"  required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="usr"><span  style="color:red">Choose Package:*</span></label>
                                <select class="form-select" name="package_name" id="DdlService" onchange="updateAmtbox()" required>
                                    <!--<option value="0#0.00#0.00">--Select Package--</option>-->
                                    <!--<option value="1#424915#4999#01#02">Deluxe Golden Triangle Tour 5 Days (2 Pax)</option>-->
                                    <!--<option value="2#594915#03#04">Deluxe Golden Triangle Tour with Ranthambhore 7 Days-->
                                    <!--    (2 Pax)</option>-->
                                    <!--<option value="3#467415#5499#05#06">South India Kerala Trip 7 Days (2 Pax)</option>-->
                                    <!--<option value="4#552415#6499#07#08">Deluxe Golden Triangle Tour with Varanasi 8 Days (2-->
                                    <!--    Pax)</option>-->
                                    <option value="1">Online Payment</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr">Currency:</label>
                                <select class="form-select" id="curr" name="currency" onchange="updateAmtbox()">
                                    <option value="INR" selected="true">INR</option>
                                    <option value="USD">USD</option>
                                     <option value="EUR">EUR</option>
                                     <option value="GBP">GBP</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="usr">Amount:</label>
                                <input type="text" class="form-control" id="TxtAmt1" name="TxtAmt"  placeholder="0.00">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="usr">Payment For / Ref:</label>
                                <textarea type="text" class="form-control" id="usr" name="payment_for"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <!--<div class="col-lg-12">
                            <div class="form-group">
                                <label for="usr">Remarks:</label>
                                <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                            </div>
                        </div>-->
                    </div>
                    <button type="submit" class="btn btn-primary1" name="submit" data-mdb-ripple-init>PAY NOW</button>
                </form>

            </div>
        </div>
     </div>
 </div>
 <!--end new page designe-->
 
 <style>
     .contact-f h2 {
         font-size: 26px;
     }

     .btn-primary1 {
         width: 100%;
         border: 1px solid #ced4da;
         padding: .375rem .75rem !important;
     }

     .btn-primary1:hover {
         background: black;
         color: white;
     }

     .contact-f {
         margin-top: 49px;
         padding: 33px;
     }

     .trips-bg {
         padding: 60px 0 50px 0;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .title h2 {
         display: block;
         text-align: center;
         font-size: 39px;
         line-height: 52px;
         text-transform: capitalize;
         color: #fff;
     }

     .IqryFrmBx-Wppr {
         background: rgba(0, 0, 0, .6);
         display: flex;
         align-content: center;
         justify-content: center;
         padding: 60px 50px;
         margin-bottom: 0px;
         position: relative;
     }

      

     .IqryFrmBx-Wppr .Clm-sm-7 {
         flex: 0 70%;
         max-width: 70%;
         /*z-index: 1;*/
     }

     .title {
         width: 100%;
         position: relative;
         display: inline-block;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr {
         display: flex;
         align-content: center;
         justify-content: space-between;
         flex-wrap: wrap;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset {
         flex: 0 48%;
         max-width: 48%;
         margin-bottom: 40px;
         margin-right: 8px;
         position: relative;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .FtrInpt {
         line-height: 30px;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .FtrInpt {
         color: #fff;
         outline: none;
     }

     .FtrInpt {
         padding: 5px 0px;
         border: 0;
         border-bottom: 1px solid #959491;
         font-size: 18px;
         line-height: 25px;
         background: rgba(0, 0, 0, 0);
         width: 100%;
     }

     #ContentPlaceHolder1_UpdatePanelNOrmalinquiry {
         display: flex;
         align-content: center;
         justify-content: space-between;
         flex-wrap: wrap;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset .InptTxtName {
         opacity: 48%;
         color: #fff;
     }

     fieldset .InptTxtName {
         position: absolute;
         top: 10px;
         left: 0;
         font-size: 18px;
         line-height: 14px;
         font-weight: 300;
         transition: all 1s;
         z-index: 0;
         padding: 0 0px;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .FlWdth {
         flex: 0 100%;
         max-width: 100%;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr fieldset {
         flex: 0 48%;
         max-width: 48%;
         margin-bottom: 40px;
         margin-right: 8px;
         position: relative;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx {
         width: 100%;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px 0 0;
     }

     .IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx .Cmn-Btn {
         padding: 10px 30px;
         padding-right: 50px;
         border: 1px solid rgba(0, 0, 0, 0);
         background: rgba(0, 0, 0, 0);
         color: #e2781a;
         font-size: 18px;
         text-transform: uppercase;
     }



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

     .btn {
         color: black;
         background-color: white;
         height: 36px;
         text-align: center;

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

     .group-aff {
         text-align: center;
         padding-bottom: 20px;
         color: white;
     }

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

     .group-aff {
         text-align: center;
         padding-bottom: 20px;
         color: white;
     }

     .owl-carousel .owl-stage {
         width: 100%;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .footers {
         border-top: 1px #dedede solid;
         transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
         padding: 50px 30px 50px 30px;
     }

     .f-list-item .list-item {
         list-style: none;
         padding: 0px 0px;
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

     .f-list-item .list-item a:hover {
         margin-left: 5px;
         border-bottom: 3px solid #FFA8B0;
     }

     .f-heading {
         font-size: 1rem;
         color: #000;
         font-weight: 600;
     }

     .footer-logo {
         /*height:250px;*/
         /*width:250px;*/
     }

     .footer-logo img {
         width: 125px;
         object-fit: cover;
     }

     .btn-top {
         position: fixed;
         bottom: 40px;
         right: 10px;
         border: 1px solid black;
         height: 41px;
         width: 41px;
         text-align: center;
         border-radius: 50px;
         background: black;
     }

     .btn-top img {
         width: 100%;
         cursor: pointer;
     }

     .copy-itm {
         display: flex;
         justify-content: center;
         align-items: center;
         text-align: center;
         list-style: none;
     }

     .copy-itm {
         padding-left: 0px;
         margin: 0px !important;
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

     .footer-cent {
         display: flex;
         justify-content: center;
         text-align: center;
         align-items: center
     }

     .social {
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
     window.onscroll = function () {
         scrollFunction()
     };

     function scrollFunction() {
         if (document.body.scrollTop > 520 || document.documentElement.scrollTop > 520) {

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
 @if(session('error'))
        <script>
            swal(
                "{{ session('error') }}",
                "{{ session('message') ?? session('error') }}",
                "error"
            );
        </script>
@endif
 @endsection

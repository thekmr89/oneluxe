 @extends('layouts.master') @section('main-content')

    <div class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset('images/contact/Contact-us.webp')}}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#fff;">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .hard-responsive .expo a:hover{
      background-color: #77a3ab;
      color:#fff;
      border: 1px solid  #77a3ab;
}
    .ComBtnBx  .expo:hover{
        background-color: #77a3ab;
        color:#fff;
}

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
        display:none;
    }
    .social {
    display: flex;
    align-items: center;
     justify-content: center!important; 
    text-align: center!important;
}
    .about_left, p {
     text-align: center; 
}
     .hero-title h2{
        font-size:2rem!important;
        
    }
    .about-img1 {
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
    flex: 0 100%!important;
    max-width: 100%!important;
    margin-bottom: 40px!important;
    margin-right: 8px!important;
    position: relative!important;
}
.IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .title h2 {
    font-size:30px!important;
}
.cont-p{
    padding-bottom:20px;
}
.cont-pho{
    padding-top:20px;
}
.IqryFrmBx-Wppr{
    padding-left:0px!important;
    padding-right:0px!important;
}
.IqryFrmBx-Wppr .Clm-sm-7 {
    flex: 0 83%!important;
    max-width: 83%!important;
    z-index: 1!important;
}
.IqryFrmBx-Wppr .Clm-sm-7 .IqryFrmBx .IqryFrm-Wppr .ComBtnBx {
    
    margin-bottom: 20px!important;
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
    font-size:20px!important;
}
    </style>
    <section class="py-5 bg-secondary-light eu56g">
        <div class="container">
            <div class="row">
                <div class="col-4 cont-p hard-responsive ">
                    <h3>Corporate Office Address</h3>
                    <p>Unit No 701 to 708, Tower D, Global Business<br />
                        Park, Sector-26, Gurugram, Haryana, 122002</p>
                    <button class="expo"><a
                            href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x390d23ebc52446cd:0x6fae1a16a0a95197?source=g.page.share">Get
                            Directions</a></button>
                </div>
                <div class="col-4 hard-responsive ">
                    <h3>Write us</h3>
                    <p> info@farandbeyond.in</p>

                </div>
                <div class="col-4 hard-responsive ">
                    <h3>Call Us</h3>
                    <p>+91 9818 401 791
                        <br />
                        +91 9971-466-955
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <section>
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="QickEnquiry">
                <div class="IqryFrmBx-Wppr">
                    <div class="Clm-sm-7">
                        <div class="IqryFrmBx">
                            <div class="title">
                                <h2>Quick Inquiry</h2>
                            </div>

                            <form action={{ route('admin.save.inquiry') }} method="POST">
                                @csrf
                                <div class="IqryFrm-Wppr">
                                    <div id="ContentPlaceHolder1_PnlNOrmalinquiry"
                                        onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ContentPlaceHolder1_btnNormal')">

                                        <div id="ContentPlaceHolder1_UpdatePanelNOrmalinquiry">

                                            <fieldset>
                                                <input name="Name" type="text"
                                                    id="ContentPlaceHolder1_txtNOrmalinquiryName" class="FtrInpt"
                                                    oncopy="return false" onpaste="return false"placeholder="First Name" oncut="return false"
                                                    autocomplete="off" required>
                                                <!--<label class="InptTxtName">First Name</label>-->
                                            </fieldset>
                                            <fieldset>
                                                <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                                                <input name="tLastName" type="text"
                                                    class="FtrInpt" oncopy="return false" placeholder="Last Name" onpaste="return false"
                                                    oncut="return false" autocomplete="off" required>
                                                <!--<label class="InptTxtName">Last Name</label>-->
                                            </fieldset>
                                            <fieldset>
                                                <input name="Email" type="email" 
                                                    id="ContentPlaceHolder1_txtNOrmalinquiryEmail" class="FtrInpt"
                                                    oncopy="return false" onpaste="return false" placeholder="Email" oncut="return false"
                                                    autocomplete="off" pattern="[^ @]*@[^ @]*" required>
                                                <!--<label class="InptTxtName"> Email </label>-->
                                            </fieldset>
                                            <fieldset>
                                                <input name="Phone" type="text" maxlength="10"
                                                    id="ContentPlaceHolder1_txtNOrmalinquiryPhone" class="FtrInpt"
                                                    oncopy="return false" onpaste="return false" oncut="return false"
                                                    autocomplete="off" placeholder="Phone"onkeypress="return numeralsOnly(event)"
                                                    pattern="[0-9]*" inputmode="numeric" >
                                                <!--<label class="InptTxtName" required> Phone </label>-->
                                            </fieldset>

                                            <fieldset class="FlWdth">
                                                <textarea name="textarea1"  placeholder="Message" id="ContentPlaceHolder1_textarea1" class="FtrInpt" required></textarea>
                                                <!--<label class="InptTxtName">Message</label>-->
                                            </fieldset>

                                            <!--<div class="g-recaptcha"-->
                                            <!--    data-sitekey="6LeUv-4pAAAAAP7Sgrv6IuSLnQPZ4VDWLupmlWkS">-->
                                            <!--</div>-->

                                            <div class="ComBtnBx">
                                                <button type="submit" class="btn expo"><strong>Submit</strong></button>
                                            </div>
                            </form>

                        </div>
                        <div id="ContentPlaceHolder1_UpdateProgressNOrmalinquiry" class="progress_aeodc"
                            style="display:none;" role="status" aria-hidden="true">

                            <span class="ibrandoxWeb31 ibrandoxWeb32">Please
                                Wait...&nbsp;&nbsp;&nbsp;&nbsp;</span>

                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
        <style>
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

            .IqryFrmBx-Wppr::before {
                width: 100%;
                height: 100%;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                position: absolute;
                content: "";
                background: url({{asset('images/cntbnner.jpg')}});
                center center no-repeat;
                background-size: cover;
                z-index: -1
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

     .owl-carousel .owl-stage{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content:center;
      }

    .social{
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

/* Footer Links and Layout */

/* Footer Logo */

/* Scroll to Top Button */

/* Copywrite Section */
.trips-bg{
     background-color: #f0f0ea !important;
}

/* Carousel container if used in footer */
</style>
    
@endsection
@section('scripts')
@endsection

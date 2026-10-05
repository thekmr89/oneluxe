@extends('layouts.master') @section('main-content')
<style>
      .hero-title h2{
          font-size:6.5rem;
          line-height: .8em;
          color:#fff;
          text-transform:capitalize; 
          font-weight:bold;
      }
      .sticky {
        position: fixed;
        top: 50px;
        width: 100%;
        z-index:;
      }
      .hero-title .bottom-head {
        font-size: 1rem;
        font-style: normal;
        font-weight: 700;
        letter-spacing: 1.6px;
        line-height: 1.4;
        color: #379c8a;
      }
     .bg-section .video::after {
    content: "";
    position: absolute!important;
    bottom: 0!important;
    left: 0!important;
    right: 0!important;
    height: 100%!important;
    background: linear-gradient(to top, black , transparent)!important;
    opacity: .7!important;
}  
    
   .bg-section .bg{
      position:relative!important;
      
        }
  .policyStrip{
    background:#dfdfdf;
    transition: .5s ease;
    box-shadow: rgba(149,157,165,.2) 0px 8px 24px;
  }
  .policyStrip .container ul li{
    position: relative;
    display: inline-block;
    transition: .5s ease;
    cursor: pointer;
    padding: 18px 0;
    color:black;  
}
.policyStrip .container ul li a{
    text-decoration:none;
    color:black;
}
.policyStrip .container ul{
    margin:0px;
    padding:0px;
}
.policyStrip .container{
    text-align:center;
}
.policyStrip .container ul li:not(:first-child) {
    margin-left: 50px
}
.headin_p{
    width:100%;
    text-align:center;
}
.headin_p h2{
    font-size: 48px;
    color: #000;
    margin-bottom: 36px;
    padding-bottom: 10px;
    width: 100%;
    text-align: center;
    position: relative;
    z-index:-1;
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
    </style>
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="{{asset('images/privacy/privacy-policy.webp')}}" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>Policy</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="bg-section">-->
    <!--  <div class="video bg">-->
    <!--<video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="video/v1.mp4" id='video-slider-1'></video>-->
    <!--    <img src="images/home/privacy.jpg" alt="banner-1">-->
    <!--    <div class="text-video">-->
    <!--      <h1>Our Policy</h1>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <style>
        .hero-title h2 {
            font-size: 6.5rem;
            line-height: .8em;
            color: #fff;
            text-transform: capitalize;
            font-weight: bold;
        }

        .hero-title .bottom-head {
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 1.6px;
            line-height: 1.4;
            color: #379c8a;
        }

        .bg-section .video::after {
            content: "";
            position: absolute !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            height: 100% !important;
            background: linear-gradient(to top, black, transparent) !important;
            opacity: .7 !important;
        }
    </style>
    <style>
        .bg-section .bg {
            position: relative !important;

        }

        .policyStrip {
            background: #dfdfdf;
            transition: .5s ease;
            box-shadow: rgba(149, 157, 165, .2) 0px 8px 24px;
        }

        .policyStrip .container ul li {
            position: relative;
            display: inline-block;
            transition: .5s ease;
            cursor: pointer;
            padding: 18px 0;
            color: black;
        }

        .policyStrip .container ul li a {
            text-decoration: none;
            color: black;
        }

        .policyStrip .container ul {
            margin: 0px;
            padding: 0px;
        }

        .policyStrip .container {
            text-align: center;
        }

        .policyStrip .container ul li:not(:first-child) {
            margin-left: 50px
        }

        .headin_p {
            width: 100%;
            text-align: center;
        }

        .headin_p h2 {
            font-size: 48px;
            color: #000;
            margin-bottom: 36px;
            padding-bottom: 10px;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: -1;
        }
    </style>
    <section class="policyStrip">
        <div class="container">
            <ul>
                <li class="tab-policy"><a href="#tab_policy">Payment Policy</a></li>
                <li class="tab-policy"><a href="#tab_cookie">Cookie Policy</a></li>
                <li class="tab-policy"><a href="#tab_payment">Privacy Policy</a></li>
                <li class="tab-policy"><a href="#tab_gdpr">GDPR Policy</a></li>
            </ul>
        </div>
    </section>
    <section class="trips-bg" id="tab_policy">
        <div class="container">
            <div class="headin_p">
                <h2>Payment Policy</h2>
            </div>
            <h3>General Terms & Conditions</h3>
            <p>The Terms and Conditions prescribed for regulation of Online Payment facilities by Far & Beyond (A Distinct
                Destinations company)</p>
            <br>
            <p>
                The payment system of the bank may collect personally identifiable information, like names, postal
                addresses, email addresses, etc., when voluntarily submitted by our visitors. The information you provide is
                used to fulfil your specific request. This information is only used to fulfil your specific request, unless
                you give us permission to use it in another manner, for example to add you to one of our mailing lists.</p>
            <br>
            <p>Review our payments policy in detail.</p>
            <ul>
                <li>
                    <strong>"Agent"</strong> means any Foreign or Domestic tour operator / travel agency / person who
                    desires to pay for the travel services which has been or will be booked as per agreed terms and
                    condition of the invoice / contract/ email correspondence with Far & Beyond (A Distinct Destinations
                    company) for their customers or themselves using the online payment facility over the online payment
                    Gateway.
                </li>
                <li>
                    <strong>"Merchant"</strong> means any person who owns or manages or operates the Merchant Establishment
                    through a physical establishment and/or a website www.farandbeyond.com.
                </li>
                <li>
                    <strong>"Facility"</strong> means, providing online payment facilities to Agent, who agrees to the terms
                    and condition set forth in this document.
                </li>
            </ul>
            <p>These Terms and conditions form part of the contract between the agent and Far & Beyond (A Distinct
                Destinations company).</p>
            <p>The provider of the Payment Gateway shall validate the Credit or debit Card details & other information like
                address, email and contact details provided by the Agent during a transaction.</p>
            <p>Ullam site Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, consequatur.</p>
            <p>This facility shall be provided at the discretion of Far & Beyond (A Distinct Destinations company) which
                reserves the right to add, revise, suspend in whole or in part any of the facility provided by it, without
                any notice and it shall be binding on the Agent. By using the facility, the Agent shall be deemed to have
                accepted these Terms and Conditions.</p>
            <p>The Agent is aware that in case of online payment over the Payment Gateway, the Agent will not physically
                sign the charge-slips at the time of making the payment though the Payment Gateway. Accordingly, the Agent
                accepts that, in the event of any dispute regarding the authenticity or validity of such a payment, for any
                reason whatsoever, the Agent shall continue be liable to pay the outstanding amount of Far & Beyond (A
                Distinct Destinations company) for the services booked & utilized.</p>
            <p>Far & Beyond (A Distinct Destinations company) has no obligation to verify the authenticity of any payment
                made from the Agent account while using the payment facility.</p>
            <p>In the process of using this Website and/or executing any Instruction/ Transaction on behalf of the Agent,
                Far & Beyond (A Distinct Destinations company) may be privy to information relating to the Agent, including
                information that is of a confidential nature. Far & Beyond (A Distinct Destinations company) is strongly
                committed to protecting the privacy of its Agent and has taken steps to protect the information furnished to
                it. Far & Beyond (A Distinct Destinations company) has taken all necessary measures to protect the
                confidentiality of the information and its transmission under the online payment Facility.</p>
            <p>The Agent authorizes Far & Beyond (A Distinct Destinations company) to exchange, share, part with all
                information related to the details and transaction history of the Agent to its Affiliates, banks / financial
                institutions / credit bureaus agencies as may be required by law or customary practice and shall not hold
                Far & Beyond (A Distinct Destinations company) liable for use or disclosure of this information.</p>

            <p>Far & Beyond (A Distinct Destinations company) has no obligation to verify the authenticity of any payment
                made from the Agent account while using the payment facility.</p>

            <p>Amendments : Far & Beyond (A Distinct Destinations company) reserves the right to add, amend, revise, suspend
                or cancel in whole or in part any of the online payment Facility available through the Website, and will
                make best efforts to provide appropriate notice to the Foreign Agent. Any addition, suspension, revision,
                amendment, cancellation or suspension of the terms as notified on the Website may be made by Far & Beyond (A
                Distinct Destinations company) , by causing a notice of the same to be posted on the Website and the Agent
                shall be deemed to have accepted the same in the event of its executing any transaction through the Website
                after the addition, suspension, revision, amendment, cancellation or suspension has been notified. Far &
                Beyond (A Distinct Destinations company) may introduce new services in relation to the Website from time to
                time. The existence and availability of the new online payment Facility will be notified on the Website, as
                and when they become available.</p>

            <p>No Waiver Of Rights : A failure or delay in exercising any right, power or privilege in respect of these
                Terms and Conditions will not be presumed to operate as a waiver, and a single or partial exercise of any
                right, power or privilege will not be presumed to preclude any subsequent or further exercise, of that
                right, power or privilege or the exercise of any other right, power or privilege.</p>
        </div>
    </section>
    <!--cookie section start-->
    <section class="trips-bg" id="tab_cookie">
        <div class="container">
            <div class="headin_p">
                <h2>Cookie Policy</h2>
            </div>
            <h3>Cookie Policy</h3>
            <p>
                Far & Beyond (A Distinct Destinations company) respects your protection and is dedicated to shield the
                security of your personal data. We regard your need to see how data is being gathered, utilized, unveiled,
                moved and put away. In this manner, we
                have created underneath Cookie policy to familiarize you with our practices. We recommend you to carefully
                browse this policy together with our Website privacy policy.
            </p>
            <h5>Reason:</h5>
            <p>Far & Beyond (A Distinct Destinations company) utilizes Cookies and different innovations to improve your
                experience when you use our website. With that impact, we have built up the beneath cookie policy to
                acquaint you with our practices.</p>
            <h5>Extension:</h5>
            <p>This Policy is appropriate to all people who visit our website and to all data gathered by techniques of the
                cookies.</p>
            <h5>Cookie Means ?</h5>
            <p>
                Cookies are a component of internet browser programming that permits web servers to briefly store data
                inside your browser. They are commonly used to make website work, to monitor your developments inside the
                site, to
                recall your login subtleties, and for comparable exercises. Cookies are sent to the beginning site on
                ensuing visit or to another site that perceives the particular treat. Most Internet browsers naturally
                acknowledge
                Cookies.
            </p>
            <p>
                Cookies permit website to perceive the gadget through which the site is gotten to. Cookies can be utilized
                to store your inclinations and past activities which can additionally be utilized to give explicit
                functionalities or alternatives fit to your inclinations, in this way improving your site understanding.
                Cookies can't get to some other data on your PC. Most Internet browsers consequently acknowledge Cookies.
                Obviously, by changing the choices on your internet browser or utilizing certain product programs, you can
                control and erase how and whether Cookies will be acknowledged by your program. You can likewise alter your
                program alternatives to decide not to not get Cookies later on.
            </p>
            <h5>Kinds Of Cookies</h5>
            <p>There are types of cookies, and they can be recognized dependent on their beginning, capacity and lifespan.
                Significant attributes of treats incorporate the accompanying:</p>
            <ul class="list_bullet">
                <li><strong>Targeting/advertising cookies</strong> enable a website to send you personalized advertising.
                </li>
                <li><strong>Performance cookies&nbsp;</strong>&nbsp;collect data on the performance of a website such as the
                    number of visitors, the time spent on the website and error messages.</li>
                <li>
                    <strong>First party cookies</strong> are cookies that are stored by the website you are visiting, while
                    third party cookies are stored by a website other than the one you are visiting. Please note that we do
                    not
                    control the collection or further use of your data by third parties.
                </li>
                <li><strong>Functionality cookies</strong>&nbsp;increase the usability of a website by remembering your
                    choices (e.g. language, region, login, and so on).</li>
                <li><strong>Necessary cookies</strong> are necessary to allow the technical operation of a website (e.g.,
                    they enable you to move around on a website and to use its features).</li>
                <li>
                    <strong>Session cookies</strong>&nbsp;are temporary cookies that are erased once you close your browser
                    while persistent or permanent cookies stay on your device until you manually delete them or until your
                    browser
                    deletes them based on the duration period specified in the persistent cookie file.
                </li>
            </ul>
            <h5>Gathered information and our reason for using cookies and other technologies</h5>
            <p>
                In order to improve our services to you, DISTINCT DESTINATIONS’s website, online services, applications, and
                advertisements may use 'cookies' to collect information related to your use of the website. Cookies may also
                be
                used to carry out transactions and disabling them may affect the functionality of this website.
            </p>
            <ul class="list_bullet">
                <li>
                    Far & Beyond (A Distinct Destinations company) and its partners may use cookies or other technologies to
                    record anonymous, non-personal information (not including your name, address email address or telephone
                    number) about your visits to this and
                    other websites in order to measure advertising effectiveness.
                </li>
                <li>
                    As is true of most we gather some information automatically and store it in log files. This information
                    includes Internet Protocol (IP) addresses, browser type and language, Internet Service Provider (ISP),
                    referring
                    and exit pages, operating system, date/time stamp, and clickstream data. We use this information to
                    understand and analyse trends, to administer the website, to learn about user behaviour on the website,
                    and to
                    gather demographic information about our user base. farandbeyond may use this information in our
                    marketing and advertising services.
                </li>
                <li>
                    We may also collect non-personal information about your visit to our website, based on your browsing
                    (click stream) activities. This information may include but is not limited to the pages browsed and
                    products and
                    services viewed or booked. This helps us to better manage and develop our offers and to provide you with
                    better products and services tailored to your individual interests and needs. We may use this
                    information to
                    measure the entry and exit points of visitors to the website and respective numbers of visitors to
                    various pages and sections of the website and details of searches performed. We may also use this
                    information to
                    measure the usage of advertising banners, another clicks through from the website.
                </li>
                <li>Pixel tags enable us to send email messages in a format customer can read, and they tell us whether mail
                    has been opened. We may use this information to reduce or eliminate messages sent to customers.</li>
                <li>
                    In some of our email messages, we use a “click-through URL” linked to content on the FARANDBEYOND
                    website. When customers click one of these URLs, they pass through a separate web server before arriving
                    at the
                    destination page on our website. We track this click-through data to help us determine interest in
                    particular topics and measure the effectiveness of our customer communications. If you prefer not to be
                    tracked in
                    this way, you should not click text or graphic links in the email messages.
                </li>
            </ul>
            <h5>Controlling Cookies ?</h5>
            <p>
                Most internet browsers are set to automatically accept cookies. Depending on your browser, you can set your
                browser to warn you before accepting cookies, or you can set it to refuse them. If you do not want to
                receive
                cookies, most browsers allow you to control cookies through their setting preferences. For instructions on
                how to change your browser settings, select the browser:
            </p>
            <ul class="list_bullet">
                <li>Safari</li>
                <li>Firefox</li>
                <li>Chrome</li>
                <li>Internet Explorer</li>
                <li>Opera</li>
            </ul>
            <h5>Canalytics Tools</h5>
            <p>
                We use various analytics tools and third-party technologies including Google Analytics to collect and
                analyze cookies. We have contractual relationship with these third-party analytics companies, who collect
                this
                information. They may combine this information with other information that they already have independently
                collected from other websites. Many of these companies collect and use information under their own privacy
                policies. You may opt-out of Google Analytics by visiting the link
            </p>
            <h5>Changes To The Policy</h5>
            <p>
                We reserve the right to update or change this policy at any time, and we will provide you with the updated
                policy when we make any substantial updates at the earliest either through email or by providing a prominent
                policy of change on the website. This policy has been updated on 16th July 2020. You should check the policy
                periodically. Your continued use of the website after we post any modifications to the policy on this page
                will
                constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified
                policy.
            </p>
        </div>
    </section>
    <section class="trips-bg" id="tab_payment">
        <div class="container">
            <div class="headin_p">
                <h2>Privacy Policy</h2>
            </div>
            <h3>Privacy policy</h3>
            <p>
                Far & Beyond (A Distinct Destinations company) respects your protection and is dedicated to shield the
                security of your personal data. We regard your need to see how data is being gathered, utilized, unveiled,
                moved and put away. In this manner, we
                have created underneath Cookie policy to familiarize you with our practices. We recommend you to carefully
                browse this policy together with our Website privacy policy.
            </p>
            <h5>Reason:</h5>
            <p>Far & Beyond (A Distinct Destinations company) utilizes Cookies and different innovations to improve your
                experience when you use our website. With that impact, we have built up the beneath cookie policy to
                acquaint you with our practices.</p>
            <h5>Extension:</h5>
            <p>This Policy is appropriate to all people who visit our website and to all data gathered by techniques of the
                cookies.</p>
            <h5>Cookie Means ?</h5>
            <p>
                Cookies are a component of internet browser programming that permits web servers to briefly store data
                inside your browser. They are commonly used to make website work, to monitor your developments inside the
                site, to
                recall your login subtleties, and for comparable exercises. Cookies are sent to the beginning site on
                ensuing visit or to another site that perceives the particular treat. Most Internet browsers naturally
                acknowledge
                Cookies.
            </p>
            <p>
                Cookies permit website to perceive the gadget through which the site is gotten to. Cookies can be utilized
                to store your inclinations and past activities which can additionally be utilized to give explicit
                functionalities or alternatives fit to your inclinations, in this way improving your site understanding.
                Cookies can't get to some other data on your PC. Most Internet browsers consequently acknowledge Cookies.
                Obviously, by changing the choices on your internet browser or utilizing certain product programs, you can
                control and erase how and whether Cookies will be acknowledged by your program. You can likewise alter your
                program alternatives to decide not to not get Cookies later on.
            </p>
            <h5>Kinds Of Cookies</h5>
            <p>There are types of cookies, and they can be recognized dependent on their beginning, capacity and lifespan.
                Significant attributes of treats incorporate the accompanying:</p>
            <ul class="list_bullet">
                <li><strong>Targeting/advertising cookies</strong> enable a website to send you personalized advertising.
                </li>
                <li><strong>Performance cookies&nbsp;</strong>&nbsp;collect data on the performance of a website such as the
                    number of visitors, the time spent on the website and error messages.</li>
                <li>
                    <strong>First party cookies</strong> are cookies that are stored by the website you are visiting, while
                    third party cookies are stored by a website other than the one you are visiting. Please note that we do
                    not
                    control the collection or further use of your data by third parties.
                </li>
                <li><strong>Functionality cookies</strong>&nbsp;increase the usability of a website by remembering your
                    choices (e.g. language, region, login, and so on).</li>
                <li><strong>Necessary cookies</strong> are necessary to allow the technical operation of a website (e.g.,
                    they enable you to move around on a website and to use its features).</li>
                <li>
                    <strong>Session cookies</strong>&nbsp;are temporary cookies that are erased once you close your browser
                    while persistent or permanent cookies stay on your device until you manually delete them or until your
                    browser
                    deletes them based on the duration period specified in the persistent cookie file.
                </li>
            </ul>
            <h5>Gathered information and our reason for using cookies and other technologies</h5>
            <p>
                In order to improve our services to you, DISTINCT DESTINATIONS’s website, online services, applications, and
                advertisements may use 'cookies' to collect information related to your use of the website. Cookies may also
                be
                used to carry out transactions and disabling them may affect the functionality of this website.
            </p>
            <ul class="list_bullet">
                <li>
                    Far & Beyond (A Distinct Destinations company) and its partners may use cookies or other technologies to
                    record anonymous, non-personal information (not including your name, address email address or telephone
                    number) about your visits to this and
                    other websites in order to measure advertising effectiveness.
                </li>
                <li>
                    As is true of most we gather some information automatically and store it in log files. This information
                    includes Internet Protocol (IP) addresses, browser type and language, Internet Service Provider (ISP),
                    referring
                    and exit pages, operating system, date/time stamp, and clickstream data. We use this information to
                    understand and analyse trends, to administer the website, to learn about user behaviour on the website,
                    and to
                    gather demographic information about our user base. FARANDBEYOND may use this information in our
                    marketing and advertising services.
                </li>
                <li>
                    We may also collect non-personal information about your visit to our website, based on your browsing
                    (click stream) activities. This information may include but is not limited to the pages browsed and
                    products and
                    services viewed or booked. This helps us to better manage and develop our offers and to provide you with
                    better products and services tailored to your individual interests and needs. We may use this
                    information to
                    measure the entry and exit points of visitors to the website and respective numbers of visitors to
                    various pages and sections of the website and details of searches performed. We may also use this
                    information to
                    measure the usage of advertising banners, another clicks through from the website.
                </li>
                <li>Pixel tags enable us to send email messages in a format customer can read, and they tell us whether mail
                    has been opened. We may use this information to reduce or eliminate messages sent to customers.</li>
                <li>
                    In some of our email messages, we use a “click-through URL” linked to content on the FARANDBEYOND
                    website. When customers click one of these URLs, they pass through a separate web server before arriving
                    at the
                    destination page on our website. We track this click-through data to help us determine interest in
                    particular topics and measure the effectiveness of our customer communications. If you prefer not to be
                    tracked in
                    this way, you should not click text or graphic links in the email messages.
                </li>
            </ul>
            <h5>Controlling Cookies ?</h5>
            <p>
                Most internet browsers are set to automatically accept cookies. Depending on your browser, you can set your
                browser to warn you before accepting cookies, or you can set it to refuse them. If you do not want to
                receive
                cookies, most browsers allow you to control cookies through their setting preferences. For instructions on
                how to change your browser settings, select the browser:
            </p>
            <ul class="list_bullet">
                <li>Safari</li>
                <li>Firefox</li>
                <li>Chrome</li>
                <li>Internet Explorer</li>
                <li>Opera</li>
            </ul>
            <h5>Canalytics Tools</h5>
            <p>
                We use various analytics tools and third-party technologies including Google Analytics to collect and
                analyze cookies. We have contractual relationship with these third-party analytics companies, who collect
                this
                information. They may combine this information with other information that they already have independently
                collected from other websites. Many of these companies collect and use information under their own privacy
                policies. You may opt-out of Google Analytics by visiting the link
            </p>
            <h5>Changes To The Policy</h5>
            <p>
                We reserve the right to update or change this policy at any time, and we will provide you with the updated
                policy when we make any substantial updates at the earliest either through email or by providing a prominent
                policy of change on the website. This policy has been updated on 16th July 2020. You should check the policy
                periodically. Your continued use of the website after we post any modifications to the policy on this page
                will
                constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified
                policy.
            </p>
        </div>
    </section>
    <section class="trips-bg" id="tab_gdpr">
        <div class="container">
            <div class="headin_p">
                <h2>GDPR Policy</h2>
            </div>
            <h3>GDPR Policy</h3>
            <p>FarandBeyond is focused on directing its business as per every single relevant Data Protection laws and
                guidelines and in accordance with the best expectations of moral lead.</p>
            <p>
                This policy sets forth the expected behaviors of FARANDBEYOND Employees and Third Parties in relation to the
                collection, use, retention, transfer, disclosure, and destruction of any Personal Data belonging to an
                FARANDBEYOND Contact (i.e. the Data Subject).
            </p>
            <p>
                Personal Data is any data (counting feelings and intentions) which identifies with a recognized or
                Recognizable Normal Individual. Personal Data is dependent upon certain legitimate protections and different
                guidelines,
                which force limitations on how associations may process Personal Data. An association that handles Personal
                Data and settles on choices about its utilization is known as a Data Controller while a Data processor is
                liable
                for preparing Personal Data in the interest of the Data Controller. FARANDBEYOND, as a Data Controller and
                Data Processor, is answerable for guaranteeing consistence with the Data Protection necessities illustrated
                in this arrangement.
            </p>
            <p>
                FARANDBEYOND leadership is fully committed to ensuring continued and effective implementation of this policy
                and expects all FarandBeyond Employees and Third Parties to share in this commitment. Any breach of
                this policy will be taken seriously and may result in disciplinary or legal action.
            </p>
            <p>We are compliant with all GDPR rules. If you require our GDPR policy in details, you may contact us using the
                information below:</p>
        </div>

    </section>
    <!--cookie section end-->
    <!--start footer-->
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
                    <input class="form-check-input" type="checkbox" id="" name="option1" value="something" checked>
                    <span>I agree to the Privacy Policy.</span>
                </div>
                <button class="btn btn-1 ">Get in Touch </button>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
        $(window).scroll(function(){
            if($(this).scrollTop() >426){
                $('.policyStrip').addClass('sticky')
            } else{
                $('.policyStrip').removeClass('sticky')
            }
        });
    </script>
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 520 || document.documentElement.scrollTop > 520) {
            
            document.getElementById("navbar").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent)";
            document.getElementById('logo1').style.display = "none";
            document.getElementById('logo2').style.display = "block";
          } else {
           
            document.getElementById("navbar").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent)";
             document.getElementById('logo2').style.display = "none";
             document.getElementById('logo1').style.display = "block";
          }
        }
    </script>
    @endsection

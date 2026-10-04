(function() {
    // "use strict";
    var winH = "",
        winW = "",
        hdrH = "",
        topHdr = "",
        ftrH = "",
        st = "";
    winH = $(window).height();

    // Change text value of headEnq-btn on mobile screen
    function headEnq() {
        if (winW <= 767) {
            // $('.headEnq-btn').text('Enquiry');

        } else {
            // $('.headEnq-btn').text('Enquiry For Lease');

        }
    }

    $(window).resize(function() {
        // checkWidth();
        winH = $(window).height();
        winW = $(window).width();
        hdrH = $('header').innerHeight();
        ftrH = $('footer').innerHeight();
        topHdr = $('.PTM-Txt-Bx').innerHeight()
        $('main').css({ 'margin-top': topHdr })
        console.log(hdrH)

        // Call headEnq() function 
        headEnq()
    });
    $(window).load(function() {
        $(window).trigger('resize');
       
        // setTimeout(function(){  WndScrll(); }, 3000);
    });


    $(window).scroll(function() {
        $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=1", "autoplay=0"));
        $('.Vdo-pstr').slideDown();
           $('.Why-Vdo').css('z-index','0');
        st = $(this).scrollTop();
        if (st > winH) {

        } else {

        }
    });


    $(document).ready(function() {

        SlderTwo();

        $(document).keydown(function(){ 
          if (event.keyCode == 27) { 
             $(".pop_up_vdo1").hide();
             $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=1", "autoplay=0"));
          }
        });

     $('.fileInpt_ImgH ').change(function(eq) {
            var FilPath = eq.target.files[0].name;
            $('.fileLbl_ImgH small').text(FilPath)
        });

     $('.CntineBtn').click(function () {
         $('.DsntMnSn').slideUp('slow');
     });

     $('.Cookisply').click(function(){
         $('.PopShwMnVriBklehmshw').slideDown('slow');
     });

      "https://www.distinctdestinations.in/our-network" === window.location.href && $("header").addClass("Hdtmnr"); 
     "https://www.distinctdestinations.in/our-network" === window.location.href && $("header").addClass("Hdtmnr"); 

        topHdr = $('header').innerHeight();
        $('main').css({ 'margin-top': topHdr });


       $(window).scroll(function() {
        if(($(window).scrollTop()) > ($(window).height()) / 100) {
              if ($('.hdrDownShoD').hasClass('HrdMver')){   
                $('header').addClass('hdrDown');
              }else {
                $('header').addClass('hdrDown');
              }   
          }else {
            $('header').removeClass('hdrDown');
          }
       });


      
      $(".VideObtnSec").click(function () {
            $(".pop_up_vdo1").addClass("pop_up_vdo_opn1");
            $(".pop_up_vdo1").show();
            $(".vdo_onply1").addClass("vdo_onply_ad1");
            var Vdefrm = $(this).attr("data-atrshw");
            $(".TstIfrmeSec").attr("src", Vdefrm);
            $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=0", "autoplay=1"));
      });

      $(".ClseIfrmSec").click(function(){
            $(".pop_up_vdo1").hide();
            $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=1", "autoplay=0"));
      });


         $(".TrvelSlidrSec").owlCarousel({
                items: 2,
                loop: true,
                margin: 0,
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                center: true,
                autoWidth: false,
                nav: true,
                navText: ["<img src='asset/icon/left-arrow-dis.png'/>", "<img src='asset/icon/right-arrow-dis.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 0,
                        autoWidth: false,
                        center: false,
                    },
                    600: {
                        items: 1,
                        autoWidth: false,
                        center: false,
                    },
                    1000: {
                        items: 2,
                        
                    },
                },
            });

           $(".TestmnSechwSl").owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: true,
                nav: false,
                autoHeight:true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });


          $(".DisnSlidr").owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                dots: true,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                nav: false,

                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });

            $(".SliderDest").owlCarousel({
                items: 3,
                loop: false,
                margin: 30, 
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                center:false,
                autoWidth: false,
                nav: true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
                    },
                },
            });

            $(".SlirPgeMn").owlCarousel({
                items: 1,
                loop: true,
                margin: 0, 
                dots: false,
                autoplay: true,
                slideSpeed: 3000,
                autoplayTimeout: 2000,
                autoplaySpeed: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
               
                center:false,
                autoWidth:false,
                nav: true,
                animateOut: 'slideOutDown',
                navText: ["<img src='asset/icon/left-arrow-dis.png'/>", "<img src='asset/icon/right-arrow-dis.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });

            $(".SldrRlsted").owlCarousel({
                items: 3,
                loop: false,
                margin: 30, 
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 2000,
                autoplaySpeed: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                center: false,
                autoWidth: false,
                nav: true,
                navText: ["<img src='/asset/icon/right-arrow-pro.png'/>", "<img src='/asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });


            $(".MreDesSlider").owlCarousel({
                items: 3,
                loop: true,
                margin: 30, 
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                center:false,
                autoWidth:false,
                nav: true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });

           $(".InfoCnt > p").removeAttr("style");
           $(".InfoCnt  span").removeAttr("style");

             $(".sliderAbtFt").owlCarousel({
                items: 3,
                loop: true,
                margin: 30, 
                dots: false,
                slideSpeed: 2000,
                autoplayTimeout: 2000,
                autoplaySpeed: 2000,
                autoplayTimeout: 2000,
                smartSpeed: 2000,
                autoplayHoverPause: true,
                autoplay: false,
                center:false,
                autoWidth:false,
                nav: true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });


             $(".cl12wnSldrdl").owlCarousel({
                items: 1,
                loop: true,
                margin: 0, 
                dots: true,
                slideSpeed: 3000,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplaySpeed: 3000,
     
                smartSpeed: 3000,
                autoplayHoverPause: true,
                
                center:false,
                autoWidth:false,
                nav: false,
                animateOut: 'slideOutDown',
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });



   $(".SliderMnNweshw").owlCarousel({
                items: 2,
                loop: true,
                margin: 30, 
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                mouseDrag: true,
                autoplayHoverPause: true,
                autoplay: false,
                nav: true,
                autoHeight:true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 2,
                    },
                },
            });

   $(".SliderMnNweshw2").owlCarousel({
                loop: true,
                margin: 20, 
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                mouseDrag: true,
                autoplayHoverPause: true,
                autoplay: true,
                nav: true,
                autoHeight:true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                    },
                    676: {
                        items: 3,
                    },
                    992: {
                        items: 3,
                    },
                    1025: {
                        items: 5,
                    },
                },
            });


            $(".SliderResSlwMn").owlCarousel({
                items: 3,
                loop: true,
                margin: 98,
                dots: false,
                slideSpeed: 3000,
                autoplayTimeout: 3000,
                autoplaySpeed: 3000,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                autoplay: false,
                center:true,
                autoWidth:true,
                nav: true,
                navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
                responsive: {
                    0: {
                        items: 1,
                        margin: 10,
                        autoWidth:false,
                    },
                    700: {
                        items: 2,
                        autoWidth:false,
                        
                    },
                    1024: {
                        items: 2,
                        autoWidth:false,
                        margin: 40, 
                    },

                    1366: {
                        items: 2,
                        autoWidth:false,
                    },


                },
            });



        (function(){
            $('.form-input,.FtrInpt,.frmcntl').focusout(function () {
                if ($(this).val() != "") {
                    $(this).siblings('.label-wrap,.InptTxtName').addClass('hasVal')
                } else {
                    $(this).siblings('.label-wrap,.InptTxtName').removeClass('hasVal')
                }
            });        
        })();

        $('.TemHver').click(function (){
           $('.onnPopup').addClass('add_onnPopup');
           var TmSl =  $(this).attr('data-tm');
           $('.Inn_0nnPopup').each(function (){
               if ($(this).attr('data-popr') == TmSl) {
                    $(this).slideDown('slow');  
               }
           });
        });

        $('.PopBxCls').click(function (){
           $('.onnPopup').removeClass('add_onnPopup');
           $('.Inn_0nnPopup').slideUp('slow');
        });

      $('.nxtSecAct').click(function() {
            var dataID = $(this).attr('data-nextSec');
            $('html, body').animate({
                scrollTop: ($('#' + dataID).offset().top - 65)
            }, 1000);
      });



      $('.itempro').click(function (){
           $('.itempro').removeClass('ActProList');
           $(this).addClass('ActProList');
           var ProSec =  $(this).attr('data-attr-clk');
           $('.ProDuctListSec12Sw').each(function (){
               if ($(this).attr('data-attr-ptocnt') == ProSec) {
                  $('.ProDuctListSec12Sw').slideUp('slow');
                  $(this).slideDown('slow');
               }
           });
      });


      $('.SrvDlDns li').click(function (){
           $('.SrvDlDns li').removeClass('ActiSrv');
           $(this).addClass('ActiSrv');
           var ProSec =  $(this).attr('data-aatrsr');
           $('.Cl12SrvSecdl').each(function (){
               if ($(this).attr('data-srv') == ProSec) {
                  $('.Cl12SrvSecdl').slideUp('slow');
                  $(this).slideDown('slow');
               }
           });
      });

        $('.ClkViewSec').click(function (){
           var ProSec =  $(this).attr('data-cvd');
           $('.CvidMnShw').each(function (){
               if ($(this).attr('data-cvid') == ProSec) {
                  $('.CvidMnShw').slideUp('slow');
                  $(this).slideDown('slow');
                 
                //   $('html, body').animate({
                //     scrollTop: ($('#mnshv').offset().top - 100)
                // }, 1000);

               }
           });
      });

       $('.PtmPlicy').click(function (){
           var ProSec =  $(this).attr('data-abtptm');
           $('.SrcvtY').each(function (){
               if ($(this).attr('dataply') == ProSec) {
                  $('.SrcvtY').slideUp('slow');
                  $(this).slideDown('slow');
                   $('html, body').animate({
                    scrollTop: ($('#mnshv').offset().top - 50)
                }, 1000);
               }
           });
      });


      $('.Cl12ShwmnRgncol3 ul li').click(function (){
           $('.Cl12ShwmnRgncol3 ul li').removeClass('activeNavShw');

           $(this).addClass('activeNavShw');
           var ProSec =  $(this).attr('data-attrnr');
           $('.cl12Owlsecmn').each(function (){
               if ($(this).attr('data-rgin') == ProSec) {
                  $('.cl12Owlsecmn').slideUp('slow');
                  $(this).slideDown('slow');
               }
           });
      });

       $('.HstySec').each(function() {
    var myBGImg = $(this).children('img.bg').attr('src');
    $(this).children('img.bg').hide();
    $(this).css({ 'background': 'url(' + myBGImg + ') center top',
      'background-size': 'cover', 'background-attachment':'fixed'
    });
})

      $('.Cl3SecShwMn').click(function (){
           $('.Cl3SecShwMn').removeClass('Cl3SecShwMnAct');
           $(this).addClass('Cl3SecShwMnAct');
           $('.Vdo-pstr').slideDown();
           $('.Why-Vdo').css('z-index','0');
           $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=1", "autoplay=0"));
            
            $('.Why-Vdo').css('z-index','3');
            $('WhySty-VdoBx:before').hide();


            var Vdefrm = $(this).attr('data-ifrm');
            // alert(Vdefrm);

           var ProSec =  $(this).attr('data-attrsl');
           $('.cl12InsSec').each(function (){
               if ($(this).attr('data-attrcl') == ProSec) {
                  $('.cl12InsSec').removeClass('MnSwn');
                  $(this).addClass('MnSwn');

             $(this).children().find('iframe').attr('src',Vdefrm);
             $(this).children().find('iframe').attr("src", $(this).children().find('iframe').attr("src").replace("autoplay=0", "autoplay=1"));

               }
           });
      });

      


        $('.CreNameSec').click(function () {
            // $('.DrpDownSec').removeClass('MinusAdd')  
            $(this).parents('.OppSecRpt').siblings().find('.CntSecDrpDown').slideUp('slow');
            $(this).parents('.OppSecRpt').siblings().find('.DrpDownSec').removeClass('MinusAdd');
            $(this).parents('.OppSecRpt').siblings().find('.CreNameSec').removeClass('ActeTab');
            $(this).parents('.OppSecRpt').find('.CntSecDrpDown').slideToggle('slow');
            $(this).find('.DrpDownSec').toggleClass('MinusAdd');
            $(this).toggleClass('ActeTab');
        });

        $('.QuiKeQy,.EnqPhone,.BtnGetQuote').click(function() {
            var TbIdIcn = $(this).attr('data-tbicn');
            $('.PopContntBx').each(function() {
                if ($(this).attr('data-poptb') == TbIdIcn) {
                    if ($(this).hasClass('OpnPopCntct')) {

                    } else {
                        $('.PopContntBx').removeClass('OpnPopCntct');
                        $(this).addClass('OpnPopCntct');
                    }
                }
            });
        });

         $('body').click(function (e) {
            var catFilterCont = $(".EnqPhone,.PopTxtBx");
            if (!catFilterCont.is(e.target) && catFilterCont.has(e.target).length === 0) {
                  $('.PopContntBx').removeClass('OpnPopCntct');
            }
        });

         $('.PopBxCls').click(function() {
             $('.PopContntBx').removeClass('OpnPopCntct');
         });

         var offset = 300,
            offset_opacity = 1200,
            scroll_top_duration = 700,
            $back_to_top = $('.cd-top');
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) { 
                $back_to_top.addClass('cd-fade-out');
            }
        });
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

        $('.LngSec').click(function () {
            $('.lang_drp').slideToggle('slow');
        });


        $('.Vdo-plyBtn').click(function() {
            $('.Vdo-plyBtn').slideUp();
            $('.pusbtn').show();
            $(this).slideUp('slow');
            $('.Why-Vdo').css('z-index','3');
            $('WhySty-VdoBx:before').hide()
            var Vdefrm = $(this).attr('data-ifrm');
            $(this).next().children().attr('src',Vdefrm);
             $(this).next().children().attr("src", $(this).next().children().attr("src").replace("autoplay=0", "autoplay=1"));
        });
        $('.pusbtn').click(function() {
            $('.Vdo-pstr').slideDown();
            $('#play').show();
            $(this).hide();
            $('#indx_vido').get(0).play();
        });

          $('body').click(function (e) {
                var catFilterCont = $(".LngSec,.lang_drp");
                if (!catFilterCont.is(e.target) && catFilterCont.has(e.target).length === 0) {
                    $('.lang_drp').slideUp('slow');
                }
          });

        $(".NvrBrighShw").click(function () {
          $(".MnuSecShow").addClass("activeMn");
          $('.NavrmnUsec').addClass('ActiveNav');
        });

        $(".NvrBrighShw").click(function () {
          $(".MnuSecShow").removeClass("activeMn");
        });

        $('.ClseSecBtnNav').click(function () {
          $('.NavrmnUsec').removeClass('ActiveNav'); 
        });

        // $(window).scroll(function(){
        //     $('.AnimateSec').each(function() {
        //         if($(window).scrollTop() >= $(this).offset().top - window.innerHeight/1.5){ 
        //             $(this).addClass('activeAnimte');
        //         }else{
        //             $(this).removeClass('activeAnimte');
        //         }
        //      });
        // });

            $(".VideObtnSec").click(function () {
                $(".pop_up_vdo1").addClass("pop_up_vdo_opn1");
                $(".pop_up_vdo1").show();
                $(".vdo_onply1").addClass("vdo_onply_ad1");
                var Vdefrm = $(this).attr("data-atrshw");
                $(".TstIfrmeSec").attr("src", Vdefrm);
                $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=0", "autoplay=1"));
            });

            $(".ClseIfrmSec").click(function(){
                $(".pop_up_vdo1").hide();
                $(".TstIfrmeSec").attr("src", $(".TstIfrmeSec").attr("src").replace("autoplay=1", "autoplay=0"));
            });

            $('.BtnTypeUseInf').click(function(){
                $('body').css('overflow-y','hidden');
                $('.usrFulImfrmPop').slideDown('slow');
            });

            $('.ClsedivSec').click(function (){
                $('.usrFulImfrmPop').slideUp('slow');
                $('body').css('overflow-y','auto');
            });

      //   $('.nxtSecAct').click(function() {
      //   var dataID = $(this).attr('data-nextSec');
      //   $('html, body').animate({
      //       scrollTop: ($('#' + dataID).offset().top - 50)
      //   }, 1000);
      // });


       $('.GlbMrkBx span').click(function () {
            $(this).parents('.GlbMrkBx').siblings().find('.MrkAdrBx').slideUp('slow')
            $(this).parents('.GlbMrkBx').find('.MrkAdrBx').slideToggle('slow')
      });

      $('.ClseSec').click(function (){
          $('.MrkAdrBx').slideUp('slow'); 
      });

      $('body').click(function(e) {
            var catFilterCont = $(".GlbMrkBx,.MrkAdrBx,.Cl12Sec12Drp");
            if (!catFilterCont.is(e.target) && catFilterCont.has(e.target).length === 0) {
                $('.MrkAdrBx').slideUp('slow');
            }
        });

      
          $(".Addres").owlCarousel({
                        loop: true,
                        margin: 0,
                        dots: false,
                        autoplaySpeed: 2500,
                        autoplay: false,
                        nav: true,
                        navText: ["<img src='asset/images/left-arrow.png'>", "<img src='asset/images/right-arrow.png'>"],
                        items: 1
              });



      $('.BrdCrmsGreSec ul li').on('click', function (e) {
        e.preventDefault();
        var tab_id = $(this).attr('data-abt');

         if (tab_id == 'target1') {
             

             $('.BrdCrmsGreSec').hide();


         } 
        $('.BrdCrmsGreSec ul li').removeClass('ActTabSec')
        $(this).addClass('ActTabSec');

        $("#" + tab_id).addClass('current');

        var hdrHgt = $('header').innerHeight() - 15;
        var prdctHght = $('.AbutCntTxtBx').height();
        var prdctId = $("#" + tab_id).offset().top - hdrHgt
        var acb = prdctHght - hdrHgt;
          
        $("html, body").animate({ scrollTop: prdctId + acb - prdctHght }, "slow");
     });


      // Slider Sec Desgnitains
          
        $('.addCntrl').click(function (){
            $('.address_panel').toggleClass('address_panelActVe');
        });  

        $('.mpshw').click(function(){
             var maparr = $(this).attr('data-mapshwmn');
             $('.mpshw').removeClass('alldm');
             $(this).addClass('alldm');

             $('.TxtNetWrk').slideUp('slow');
             $('.Col2SecAddresShw').each(function (){
                 
                 if ($(this).attr('data-mapshw') == maparr ) {
                      
                   $('.Col2SecAddresShw').slideUp('slow');
                   
                   $(this).slideDown('slow')      

                 }

             });

        });


      $('.NvrBrighShw').click(function(){
         $('.MnuSecShow').addClass('activeMn')
      });

      $('.MnuClseSec').click(function(){
         $('.MnuSecShow').removeClass('activeMn')
      });
  
      // Slider Sec End 
   

      autoType(".type-js",200);

      function autoType(elementClass, typingSpeed){
          var thhis = $(elementClass);
          thhis.css({
            "position": "relative",
            "display": "inline-block" });
          thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
          thhis = thhis.find(".text-js");
          var text = thhis.text().trim().split('');
          var amntOfChars = text.length;
          var newString = "";
          thhis.text("");
          setTimeout(function(){
            thhis.css("opacity",1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for(var i = 0; i < amntOfChars; i++){
              (function(i,char){
                setTimeout(function() {        
                  newString += char;
                  thhis.text(newString);
                },i*typingSpeed);
              })(i+1,text[i]);
            }
          },200);
        }

              // autoTypeDisnt(".typeDsit",200);

      function autoTypeDisnt(elementClass, typingSpeed){
          var thhis = $(elementClass);
          thhis.css({
            "position": "relative",
            "display": "inline-block" });
          thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
          thhis = thhis.find(".text-js");
          var text = thhis.text().trim().split('');
          var amntOfChars = text.length;
          var newString = "";
          thhis.text("");
          setTimeout(function(){
            thhis.css("opacity",1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for(var i = 0; i < amntOfChars; i++){
              (function(i,char){
                setTimeout(function() {        
                  newString += char;
                  thhis.text(newString);
                },i*typingSpeed);
              })(i+1,text[i]);
            }
          },200);
        }

      $('.pnbvl ul li').click(function () {
          $('.pnbvl ul li').addClass('mapActve');
          $(this).addClass('mapActve')

      });


    $(window).resize(function () {
      
       // alert();
       SlderOne();
         SlderTwo();
       // SlderThree();
       // checkWidth2();
        checkWidth();
       checkWidth3();
    });
    // $(window).resize();
    // $(window).resize();

        function checkWidth() {
            if ($(window).width() > 768) {
                $('.SrvDlDns').removeClass('MboOilSec');
            } else {
                $('.SrvDlDns').addClass('MboOilSec');
            }
        }

        //   function checkWidth2() {
        //     if ($(window).width() > 768) {
        //         $('.LogSecFter').removeClass('MboOilSecSlidr');
        //     } else {
        //         $('.LogSecFter').addClass('MboOilSecSlidr');
        //     }


        // }

           function checkWidth3() {
            if ($(window).width() > 767) {
                // $('.BrdCrmsGreSec ul').removeClass('MoblenavSlder');
                //  $('.c2_as_city ul li').click(function(){
                //     $('.address_panel').addClass('address_panelActVe'); 
                // });
            } else {
                 
                 $('.ClkViewSec').eq(4).text('Imp information'); 

                // $('.BrdCrmsGreSec ul').addClass('MoblenavSlder');

                // $('.c2_as_city ul li').click(function(){
                //     $('.address_panel').addClass('address_panelActVe'); 
                // });
            }
        }

    (function($) {
        var $window = $(window),
            $html = $('.MboOilSec');
        function resize() {
           if ($window.width() < 768) {
                return $html.addClass('owl-carousel owl-theme');
            }
            $html.removeClass('owl-carousel owl-theme');
        }
        $window
            .resize(resize) 
            .trigger('resize');
    })(jQuery);

    //  (function($) {
    //     var $window = $(window),
    //         $html = $('.MboOilSecSlidr');
    //     function resize() {
    //         if ($window.width() < 768) {
    //             return $html.addClass('owl-carousel owl-theme');
    //         }
    //         $html.removeClass('owl-carousel owl-theme');
    //     }
    //     $window
    //         .resize(resize) 
    //         .trigger('resize');
    // })(jQuery);


    (function($) {
        var $window = $(window),
            $html = $('.MoblenavSlder');
        function resize() {
            if ($window.width() < 768) {
                return $html.addClass('owl-carousel owl-theme');
            }
            $html.removeClass('owl-carousel owl-theme');
        }
        $window
            .resize(resize) 
            .trigger('resize');
    })(jQuery);


function SlderTwo() {
      // body...  
     $('.MboOilSec').owlCarousel({
        loop: false,
        margin: 0,
        dots: false,
        nav: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoplay: false,
        navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
        responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 2,
                },
            },

    });
}  
 
 function SlderOne() {
    $('.MoblenavSlder').owlCarousel({
        loop: false,
        margin: 0,
        dots: false,
        nav: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoplay: false,
        navText: ["<img src='asset/icon/right-arrow-pro.png'/>", "<img src='asset/icon/right-arrow-pro-sec.png'/>"],
        responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },

    });
 }



// function SlderThree() {

    $('.LogSecFter').owlCarousel({
        loop: false,
        margin: 20,
        dots: false,
        nav: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoplay: true,
        items: 8,
loop: true,
        responsive: {
                0: {
                    items: 4,
                },
                600: {
                    items: 6,
                },
                1000: {
                    items: 8,
                },
            },

    });


     $('.BlgMnSwnVr .BlogClsec:nth-child(5n+1)').each(function (){
        $(this).next().addClass('wthinc4n');
        $(this).prev().addClass('wthinc4nPrv'); 
    });
// }

     // document.getElementById('videoId').play();
     

    $('.clseShw').click(function (){
        $('.PopShwMnVriBkle').slideUp('slow');
         $('.PopShwMnVriBklehmshw').slideUp('slow');
    }); 

    $('.pupdisclmr').click(function(){
       $('.PopShwMnVriBkle').slideDown('slow');
    })

     $(window).scroll(function(){
        $('.AnimateSec').each(function() {
            if($(window).scrollTop() >= $(this).offset().top - window.innerHeight/1.5){ 
                $(this).addClass('activeAnimte');
            }else{

                $(this).removeClass('activeAnimte');
            }
        });
    });

WndScrll();



"" + location.host + "/our-network" === window.location.href && $("header").addClass("Hdtmnr");
"" + location.host + "/our-network" === window.location.href && $("header").addClass("Hdtmnr");
"" + location.host + "/our-network" === window.location.href && $("header").addClass("Hdtmnr");


    function WndScrll() {
        // body...
    
       var fixmeTop = $('.BrdCrmsGreSec').offset().top - $('.hdrDown').height() - 20;
         $(window).scroll(function () {
            $('.BrdCrmsGreSec').show();
             var currentScroll = $(window).scrollTop();
             if (currentScroll >= fixmeTop) {
                var hdrHght = $('header').innerHeight();
                 $('.BrdCrmsGreSec').addClass('BrdCrmsGreSecAct').css("top", hdrHght); 

             } else {
                 $('.BrdCrmsGreSec').removeClass('BrdCrmsGreSecAct').css("top", '0'); 
             }
         });

     }





        $(".HgSecshow").height( $('.well:not(.r_pric_n)').height() - $('.crt_sec_pds').height()  - 20 );
            $(".HgSecshow").mCustomScrollbar({
                theme: 'minimal-dark',
                autoHideScrollbar: true
            });

            $(".Col2SecAddres").height( $('.well:not(.r_pric_n)').height() - $('.crt_sec_pds').height()  - 20 );
            $(".Col2SecAddres").mCustomScrollbar({
                theme: 'minimal-dark',
                autoHideScrollbar: false 
            });

        // $(".wrpr_abtinfo").height( $('.well:not(.r_pric_n)').height() - $('.crt_sec_pds').height()  - 20 );
        // $(".wrpr_abtinfo").mCustomScrollbar({theme:'minimal-dark'});

        
// document.getElementById('videoId').play();

    });


})();
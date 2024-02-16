var currentLetter = 0;
var thinCurrentLetter = 2;
var mob = false;
var currH = 0;

$(document).ready(function () {

   var $window = $(window);

   currH = $window.innerHeight();

   $window.scroll(function () {
      $('.section-7 .portfolio-item').each(function () {
         if ($window.scrollTop() + $window.innerHeight() - 0.1 * $window.innerHeight() >= $(this).offset().top) {
            $(this).addClass('visible');
            raiseNumbers($(this).find('[data-number]'));
         }
      });
   })

   if (isMobile.any) {
      removeHovers();
   } else {
      $('h1,h2,h3,h4,h5,h6').addClass('hyphenate');
   }


   if ($window.innerWidth() < 292) {
      mob = true;
   } else {
      mob = false;
   }
   checkMobile();

   $window.on('resize', function () {
      if ($window.innerWidth() < 292) {
         mob = true;
      } else {
         mob = false;
      }
      checkMobile();
   });

   $(document).on('click', '.section-4 .arrow-circle, .section-8 .arrow-circle', function (e) {
      e.preventDefault();
      if (mob) {
         var c = $(this).closest('.section').find('video')[0];
         if (c.paused) {
            c.play();
            $(c).addClass('visible');
         } else {
            c.pause();
            $(c).removeClass('visible');
         }
      }
   });


   $('.section-8 .arrow-circle').on('mouseenter', function () {
      if (!mob) {
         var video = $('.section-8 .content.step-1 .video-wrapper .video');
         var wideVideo = new TimelineMax().fromTo(video, 0.1, {
            height: "100%"
         }, {
            height: "70vh",
            ease: Linear.easeInOut
         });
         wideVideo.play();
      }
   })

   $(document).on('mouseleave', 'body:not(.showVideo) .section-8 .arrow-circle, body:not(.showVideo) .section-8 .video', function () {
      if (!mob) {
         var video = $('.section-8 .content.step-1 .video-wrapper .video');
         var wideVideo = new TimelineMax().fromTo(video, 0.1, {
            height: "70vh"
         }, {
            height: "100%",
            ease: Linear.easeInOut
         });
         wideVideo.play();
      }
   });

   $(document).on('click', '.section-8 .arrow-circle', function (e) {
      if (!mob) {
         e.preventDefault();
         e.stopPropagation();
         if ($(this).closest('.content.step-1').length) {
            $('body').addClass('showVideo');

            if (!$('.section-8 video.big').length) {
               $('.section-8 .video').append('<video class="big" src="/videos/showreel.mp4" poster="/videos/FIGARO_SHOWREEL_WEB_02_000.jpg"></video>')
            }

            $('.section-8 video.big')[0].muted = false;
            var video = $('.section-8 .content.step-1 .video-wrapper .video');
            var top = video[0].getBoundingClientRect().top;

            var showVideo = new TimelineMax().fromTo(video, 0.5, {
               top: 0,
               left: "calc(0vw - 0px)",
               right: "calc(0vw - 0px)",
               height: "70vh"
            }, {
               top: -top,
               left: "calc(-7.14vw - 10px)",
               right: "calc(-7.14vw - 10px)",
               height: "100vh",
               ease: Linear.easeInOut
            })

            showVideo.play(0);

            $(this).closest('.section').find('video.small')[0].pause();
            $(this).closest('.section').find('video.big')[0].play();
         }
      } else {
         e.preventDefault();
         e.stopPropagation();
         $('body').addClass('showVideo');

         if (!$('.section-8 video.big').length) {
            $('.section-8 .video').append('<video class="big" src="/videos/showreel.mp4" poster="/videos/FIGARO_SHOWREEL_WEB_02_000.jpg"></video>')
         }

         $('.section-8 video.big')[0].muted = false;
         var video = $('.section-8 .content .video-wrapper .video');
         var top = video[0].getBoundingClientRect().top;

         $(this).closest('.section').find('video.big')[0].play();
      }
   });

   $(document).on('mousedown touch', '.section-8 .video', function (e) {
      if (!mob) {
         e.preventDefault();
         $('body').removeClass('showVideo');
         $(this).closest('.section').find('video.small')[0].play();
         $(this).closest('.section').find('video.big')[0].pause();
         $('.section-8 video.big')[0].muted = true;
         var video = $('.section-8 .content.step-1 .video-wrapper .video');
         var hideVideo = new TimelineMax().to(video, 0.5, {
            top: 0,
            left: "calc(0vw - 0px)",
            right: "calc(0vw - 0px)",
            height: "70vh"
         })
         hideVideo.play(0);
      } else {
         e.preventDefault();
         $('body').removeClass('showVideo');
         $(this).closest('.section').find('video')[0].pause();
         $('.section-8 video')[0].muted = true;
         var video = $('.section-8 .content .video-wrapper .video');
      }
   });

   $(document).on('click', '.portfolio-item-inner', function (e) {
      e.preventDefault();
      window.location = $(this).attr('data-url');
   });
   $(document).on('click', '.portfolio-item-inner a', function (e) {
      e.stopPropagation();
   });


});

/*function createPortfolioSlider(){
  if(!$('html').hasClass('portfolioSliderCreated')){
    $('html').addClass('portfolioSliderCreated');
    var $sections4 = $('.portfolio-item');
    $sections4.wrapAll('<div class="section-slider">');
    $sections4.wrapAll('<div class="swiper-container">');
    $sections4.wrapAll('<div class="swiper-wrapper"/>');
    $sections4.wrap('<div class="swiper-slide"/>');
    $sections4.closest('.swiper-container').append('<div class="swiper-pagination"/>');

    var swiper4 = new Swiper($sections4.closest('.swiper-container'), {
      slidesPerView: 1,
      paginationClickable: true,
      pagination: $sections4.closest('.swiper-container').find('.swiper-pagination'),
      loop: true,
      spaceBetween: 0,
      speed: 500,
      simulateTouch: false,
    });
  }
}*/

/*function createSliders(){
  if(!$('html').hasClass('slidersCreated')){
    $('html').addClass('slidersCreated');
    var $sections1 = $('.section-fixed');
    $sections1.wrapAll('<div class="section-slider">');
    $sections1.wrapAll('<div class="swiper-container">');
    $sections1.wrapAll('<div class="swiper-wrapper"/>');
    $sections1.wrap('<div class="swiper-slide"/>');
    $sections1.closest('.swiper-container').append('<div class="swiper-pagination"/>');

    /*var swiper1 = new Swiper($sections1.closest('.swiper-container'), {
      slidesPerView: 1,
      paginationClickable: true,
      pagination: $sections1.closest('.swiper-container').find('.swiper-pagination'),
      loop: true,
      spaceBetween: 0,
      speed: 500,
      simulateTouch: false,
    });*/


/*var $sections2 = $('.section-fixed2');
$sections2.wrapAll('<div class="section-slider">');
$sections2.wrapAll('<div class="swiper-container">');
$sections2.wrapAll('<div class="swiper-wrapper"/>');
$sections2.wrap('<div class="swiper-slide"/>');
$sections2.closest('.swiper-container').append('<div class="swiper-pagination"/>');*/

/*var swiper2 = new Swiper($sections2.closest('.swiper-container'), {
  slidesPerView: 1,
  paginationClickable: true,
  pagination: $sections2.closest('.swiper-container').find('.swiper-pagination'),
  loop: true,
  spaceBetween: 0,
  speed: 500,
  simulateTouch: false,
});*/

/*var $sections3 = $('.section-fixed3');
$sections3.wrapAll('<div class="section-slider">');
$sections3.wrapAll('<div class="swiper-container">');
$sections3.wrapAll('<div class="swiper-wrapper"/>');
$sections3.wrap('<div class="swiper-slide"/>');
$sections3.closest('.swiper-container').append('<div class="swiper-pagination"/>');*/

/*var swiper3 = new Swiper($sections3.closest('.swiper-container'), {
  slidesPerView: 1,
  paginationClickable: true,
  pagination: $sections3.closest('.swiper-container').find('.swiper-pagination'),
  loop: true,
  spaceBetween: 0,
  speed: 500,
  simulateTouch: false,
});

}
};*/

function checkMobile() {
   if ($(window).innerWidth() >= 292) {
      initLetters();
      initThinLetters();
      destroySliders();
      if (currH != $(window).innerHeight()) {
         currH = $(window).innerHeight()
         //destroyMagic();
      }
      //initMagic();
   } else {
      //destroyMagic();
      hideLetters();
      //thinHideLetters();
      //createSliders();
      $('video').each(function () {
         $(this)[0].pause();
      });
   }
   /*if($(window).innerWidth()<480){
     createPortfolioSlider();
   }else{
     destroyPortfolioSlider();
   }*/

   if (isMobile.any) {
      if (!$('.section-8 video.big').length) {
         $('.section-8 .video').append('<video class="big" src="/videos/showreel.mp4" poster="/videos/FIGARO_SHOWREEL_WEB_02_000.jpg"></video>');
      }
   } else {
      if (!$('.section-8 video.small').length) {
         $('.section-8 .video').append('<video class="small" src="/videos/wow.mp4" poster="/images/format1.jpg"></video>');
      }
   }
}

function destroySliders() {
   if ($('html').hasClass('slidersCreated')) {
      $('html').removeClass('slidersCreated');
      $('.swiper-container')[0].swiper.destroy(true, true);
      $('.swiper-container')[1].swiper.destroy(true, true);
      $('.swiper-container')[2].swiper.destroy(true, true);

      var $sections1 = $('.section-fixed');
      $sections1.unwrap().unwrap().unwrap().unwrap();
      var $sections2 = $('.section-fixed2');
      $sections2.unwrap().unwrap().unwrap().unwrap();
      var $sections3 = $('.section-fixed3');
      $sections3.unwrap().unwrap().unwrap().unwrap();

      $('.swiper-pagination').remove();
   }
};

function destroyPortfolioSlider() {
   if ($('html').hasClass('portfolioSliderCreated')) {
      $('html').removeClass('portfolioSliderCreated');
      $('.portfolio-scroll .swiper-container')[0].swiper.destroy(true, true);
      var $sections4 = $('.portfolio-item');
      $sections4.unwrap().unwrap().unwrap().unwrap();
      $('.portfolio-scroll .swiper-pagination').remove();
   }
};

function hideLetters() {
   if ($('html').hasClass('letters-on')) {
      $('html').removeClass('letters-on');
      $('.full-video').removeClass('visible');
      stopAnimation(currentLetter);
   }
}

function thinHideLetters() {
   if ($('html').hasClass('thin-letters-on')) {
      $('html').removeClass('thin-letters-on');
      $('.thin-letters').removeClass('visible');
      thinStopAnimation(thinCurrentLetter);
   }
}

function initLetters() {
   if (!$('html').hasClass('letters-on')) {

      $('html').addClass('letters-on');
      $('.full-video').addClass('visible');

      /*    letter B     */

      segment_B1 = new Segment(document.getElementById('b1'));
      segment_B2 = new Segment(document.getElementById('b2'));
      segment_B3 = new Segment(document.getElementById('b3'));

      anim_B1 = [
         function () { segment_B1.draw("100%", "100%", 0.01, { delay: 0, circular: true, callback: anim_B1[1] }); },
         function () { segment_B1.draw("100% ", "0%", 0.7, { delay: 0, circular: true, callback: anim_B1[2] }); },
         function () { segment_B1.draw("30% - 360", "100% - 360", 1.6, { delay: 0.2, circular: true, callback: anim_B1[3] }); },
         function () { segment_B1.draw("0% + 0", "70% + 0", 0.7, { delay: 0, circular: true, callback: anim_B1[4] }); },
         function () { segment_B1.draw("20% + 0", "100% + 0", 1.7, { delay: 0, circular: true, callback: anim_B1[5] }); },
         function () { segment_B1.draw("90% - 360", "90% - 360", 0.3, { delay: 0, circular: true }); }
      ];
      anim_B2 = [
         function () { segment_B2.draw("26.36%", "26.36%", 0.01, { delay: 0, circular: true, callback: anim_B2[1] }); },
         function () { segment_B2.draw("26.36%", "63%", 0.9, { delay: 0, circular: true, callback: anim_B2[2] }); },
         function () { segment_B2.draw("37.07%", "74%", 1.5, { delay: 0, circular: true, callback: anim_B2[3] }); },
         function () { segment_B2.draw("26.36%+360", "67.07%+360", 1.5, { delay: 0, circular: true, callback: anim_B2[4] }); },
         function () { segment_B2.draw("26.36%", "45.07%", 1.3, { delay: 0, circular: true, callback: anim_B2[5] }); },
         function () { segment_B2.draw("50%", "73.6%", 0.5, { delay: 0, circular: true, callback: anim_B2[6] }); },
         function () { segment_B2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: anim_B2[7] }); },
         function () { segment_B2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: nextLetter(1) }); },
      ];
      anim_B3 = [
         function () { segment_B3.draw("92%", "92%", 0.01, { delay: 0, circular: false, callback: anim_B3[1] }); },
         function () { segment_B3.draw("0%", "92%", 0.8, { delay: 1, circular: false, callback: anim_B3[2] }); },
         function () { segment_B3.draw("0%", "65%", 0.3, { delay: 0.5, circular: false, callback: anim_B3[3] }); },
         function () { segment_B3.draw("0%", "50%", 1.3, { delay: 0, circular: false, callback: anim_B3[4] }); },
         function () { segment_B3.draw("0%", "65%", 1.3, { delay: 0, circular: false, callback: anim_B3[5] }); },
         function () { segment_B3.draw("0%", "92%", 0.3, { delay: 0, circular: false, callback: anim_B3[6] }); },
         function () { segment_B3.draw("92%", "92%", 0.3, { delay: 0, circular: false }); },
      ];
      segment_B1.draw("0%", "0%", 0, { delay: 0, circular: true });
      segment_B2.draw("0%", "0%", 0, { delay: 0, circular: true });
      segment_B3.draw("0%", "0%", 0, { delay: 0, circular: true });

      if ($(window).scrollTop() < $(window).innerHeight() / 3) {
         anim_B1[0]();
         anim_B2[0]();
         anim_B3[0]();
      }


      /*    letter R     */

      segment_R1 = new Segment(document.getElementById('r1'));
      segment_R2 = new Segment(document.getElementById('r2'));
      segment_R3 = new Segment(document.getElementById('r3'));

      anim_R1 = [
         function () { segment_R1.draw("100%", "100%", 0.01, { delay: 0, circular: true, callback: anim_R1[1] }); },
         function () { segment_R1.draw("100% ", "0%", 0.7, { delay: 0, circular: true, callback: anim_R1[2] }); },
         function () { segment_R1.draw("30% - 360", "100% - 360", 1.6, { delay: 0.2, circular: true, callback: anim_R1[3] }); },
         function () { segment_R1.draw("0% + 0", "70% + 0", 0.7, { delay: 0, circular: true, callback: anim_R1[4] }); },
         function () { segment_R1.draw("20% + 0", "100% + 0", 1.7, { delay: 0, circular: true, callback: anim_R1[5] }); },
         function () { segment_R1.draw("90% - 360", "90% - 360", 0.3, { delay: 0, circular: true }); }
      ];
      anim_R2 = [
         function () { segment_R2.draw("26.36%", "26.36%", 0.01, { delay: 0, circular: true, callback: anim_R2[1] }); },
         function () { segment_R2.draw("26.36%", "63%", 0.9, { delay: 0, circular: true, callback: anim_R2[2] }); },
         function () { segment_R2.draw("37.07%", "74%", 1.5, { delay: 0, circular: true, callback: anim_R2[3] }); },
         function () { segment_R2.draw("26.36%+360", "67.07%+360", 1.5, { delay: 0, circular: true, callback: anim_R2[4] }); },
         function () { segment_R2.draw("26.36%", "45.07%", 1.3, { delay: 0, circular: true, callback: anim_R2[5] }); },
         function () { segment_R2.draw("50%", "73.6%", 0.5, { delay: 0, circular: true, callback: anim_R2[6] }); },
         function () { segment_R2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: anim_R2[7] }); },
         function () { segment_R2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: nextLetter(2) }); },
      ];
      anim_R3 = [
         function () { segment_R3.draw("92%", "92%", 0.01, { delay: 0, circular: false, callback: anim_R3[1] }); },
         function () { segment_R3.draw("0%", "92%", 0.8, { delay: 1, circular: false, callback: anim_R3[2] }); },
         function () { segment_R3.draw("0%", "65%", 0.3, { delay: 0.5, circular: false, callback: anim_R3[3] }); },
         function () { segment_R3.draw("0%", "50%", 1.3, { delay: 0, circular: false, callback: anim_R3[4] }); },
         function () { segment_R3.draw("0%", "65%", 1.3, { delay: 0, circular: false, callback: anim_R3[5] }); },
         function () { segment_R3.draw("0%", "92%", 0.3, { delay: 0, circular: false, callback: anim_R3[6] }); },
         function () { segment_R3.draw("92%", "92%", 0.3, { delay: 0, circular: false }); },
      ];
      segment_R1.draw("0%", "0%", 0, { delay: 0, circular: true });
      segment_R2.draw("0%", "0%", 0, { delay: 0, circular: true });
      segment_R3.draw("0%", "0%", 0, { delay: 0, circular: true });





      /*    letter G     */

      segment_G1 = new Segment(document.getElementById('g1'));
      segment_G2 = new Segment(document.getElementById('g2'));

      anim_G1 = [
         function () { segment_G1.draw("0%", "0%", 0.01, { delay: 0, circular: true, callback: anim_G1[1] }); },
         function () { segment_G1.draw("0%", "0%", 0.81, { delay: 0, circular: true, callback: anim_G1[2] }); },
         function () { segment_G1.draw("36% ", "27.55%", 0.01, { delay: 0, circular: true, callback: anim_G1[3] }); },
         function () { segment_G1.draw("27.55% +0 ", "45% + 0", 0.7, { delay: 0, circular: true, callback: anim_G1[4] }); },
         function () { segment_G1.draw("27.55% +0 ", "53% + 0", 0.6, { delay: 0, circular: true, callback: anim_G1[5] }); },
         function () { segment_G1.draw("27.55% +0 ", "53% + 0", 0.3, { delay: 0, circular: true, callback: anim_G1[6] }); },
         function () { segment_G1.draw("27.55% +0 ", "100% + 0", 0.6, { delay: 0, circular: true, callback: anim_G1[7] }); },
         function () { segment_G1.draw("127.55% -360 ", "155% -360", 0.8, { delay: 0, circular: true, callback: anim_G1[8] }); },
         function () { segment_G1.draw("127.55% -360 ", "155% -360", 0.3, { delay: 0, circular: true, callback: anim_G1[9] }); },
         function () { segment_G1.draw("127.55% -360 ", "136% -360", 0.35, { delay: 0, circular: true, callback: anim_G1[10] }); },
         function () { segment_G1.draw("127.55% -360 ", "127.55% -360", 0.01, { delay: 0, circular: true }); },
      ];
      anim_G2 = [
         function () { segment_G2.draw("0% ", "0%", 0.01, { delay: 0, circular: true, callback: anim_G2[1] }); },
         function () { segment_G2.draw("80% ", "80%", 0.01, { delay: 0, circular: true, callback: anim_G2[2] }); },
         function () { segment_G2.draw("90% +0 ", "21.9% + 0", 0.8, { delay: 0, circular: true, callback: anim_G2[3] }); },
         function () { segment_G2.draw("21.9% - 0 ", "110% - 0 ", 1.3, { delay: 0, circular: true, callback: anim_G2[4] }); },
         function () { segment_G2.draw("21.9% - 360 ", "110% - 360 ", 0.3, { delay: 0, circular: true, callback: anim_G2[5] }); },
         function () { segment_G2.draw("21.9% - 360 ", "28% - 360 ", 0.6, { delay: 0, circular: true, callback: anim_G2[6] }); },
         function () { segment_G2.draw("21.9% - 360 ", "21.9% - 360 ", 0.01, { delay: 0, circular: true, callback: anim_G2[7] }); },
         function () { segment_G2.draw("21.9% - 360 ", "21.9% - 360 ", 0.6, { delay: 0, circular: true, callback: anim_G2[8] }); },
         function () { segment_G2.draw("21.9% - 360 ", "110% - 360 ", 0.9, { delay: 0, circular: true, callback: anim_G2[9] }); },
         function () { segment_G2.draw("110% - 300 ", "110% - 300 ", 0.9, { delay: 0, circular: true, callback: anim_G2[10] }); },
         function () { segment_G2.draw("110% - 300 ", "110% - 300 ", 0.9, { delay: 0, circular: true, callback: nextLetter(0) }); },
      ];
      segment_G1.draw("0%", "0%", 0, { delay: 0, circular: true });
      segment_G2.draw("0%", "0%", 0, { delay: 0, circular: true });

   }
};

function nextLetter(curr_inn) {

   console.log(currentLetter + ' - ' + curr_inn);

   //if(currentLetter == 1) currentLetter = 2;
   //if(currentLetter == 1) currentLetter = 2;
   //if(currentLetter == 2) currentLetter = 0;


   currentLetter = (currentLetter > 1) ? 0 : ++currentLetter;
   if (!$('.full-video.stopLetters').length) {
      startAnimation(currentLetter);
   } else {
      stopAnimation(curr_inn);
   }
};

function stopAnimation(cur) {
   //console.log('stopped:'+ cur);
   //console.log(endtime);
   switch (cur) {
      case 0:
         segment_B1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         segment_B2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         segment_B3.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
      case 1:
         segment_R1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         segment_R2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         segment_R3.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
      case 2:
         segment_G1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         segment_G2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
   }
}

function startAnimation(cur) {
   currentLetter = cur;
   switch (cur) {
      case 0:
         anim_B1[0]();
         anim_B2[0]();
         anim_B3[0]();
         break;
      case 1:
         anim_R1[0]();
         anim_R2[0]();
         anim_R3[0]();
         break;
      case 2:
         anim_G1[0]();
         anim_G2[0]();
         break;
   }
}

/*function startAnimation(cur){
  currentLetter = cur;
  switch(cur){
    case 0:
      anim_G1[0]();
      anim_G2[0]();
      //anim_F1[0]();
      //anim_F2[0]();
      //anim_F3[0]();
      break;
    case 1:
      //anim_I[0]();
      break;
    case 2:
      anim_G1[0]();
      anim_G2[0]();
      break;
    case 3:
      anim_A1[0]();
      anim_A2[0]();
      anim_A3[0]();
      break;
    case 4:
      anim_R1[0]();
      anim_R2[0]();
      anim_R3[0]();
      break;
    case 5:
      anim_O[0]();
      break;
  }
}*/

function initThinLetters() {
   if (!$('html').hasClass('thin-letters-on')) {

      $('html').addClass('thin-letters-on');
      /*    letter F     */
      thin_segment_F1 = new Segment(document.getElementById('thin-f1'));
      thin_segment_F2 = new Segment(document.getElementById('thin-f2'));
      thin_segment_F3 = new Segment(document.getElementById('thin-f3'));

      thin_anim_F1 = [
         function () { thin_segment_F1.draw("100% ", "0%", 0.5, { delay: 0, circular: false, callback: thin_anim_F1[1] }); },
         function () { thin_segment_F1.draw("20% ", "100%", 1.5, { delay: 0, circular: false, callback: thin_anim_F1[2] }); },
         function () { thin_segment_F1.draw("0% ", "100%", 1.5, { delay: 0, circular: false, callback: thin_anim_F1[3] }); },
         function () { thin_segment_F1.draw("0% ", "0%", 0.5, { delay: 1.3, circular: false, callback: thin_anim_F1[4] }); },
         function () { thin_segment_F1.draw("0% ", "0%", 0.5, { delay: 1.3, circular: false, callback: thinNextLetter() }); }
      ];

      thin_anim_F2 = [
         function () { thin_segment_F2.draw("37.07%", "64%", 0.5, { delay: 0.5, circular: false, callback: thin_anim_F2[1] }); },
         function () { thin_segment_F2.draw("37.07%", "74%", 1, { delay: 0, circular: false, callback: thin_anim_F2[2] }); },
         function () { thin_segment_F2.draw("37.07%", "60%", 2.3, { delay: 0, circular: false, callback: thin_anim_F2[3] }); },
         function () { thin_segment_F2.draw("45.07%", "45.07%", 0.5, { delay: 0, circular: false, callback: thin_anim_F2[4] }); }
      ];

      thin_anim_F3 = [
         function () { thin_segment_F3.draw("45.07%", "60%", 0.7, { delay: 0.3, circular: true, callback: thin_anim_F3[1] }); },
         function () { thin_segment_F3.draw("37.07%", "70%", 1, { delay: 0, circular: true, callback: thin_anim_F3[2] }); },
         function () { thin_segment_F3.draw("37.07%", "55%", 2.5, { delay: 0, circular: true, callback: thin_anim_F3[3] }); },
         function () { thin_segment_F3.draw("45.07%", "45.07%", 0.4, { delay: 0, circular: true, callback: thin_anim_F3[4] }); }
      ];
      thin_segment_F1.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_F2.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_F3.draw("0%", "0%", 0, { delay: 0, circular: true });

      /*    letter I     */
      thin_segment_I = new Segment(document.getElementById('thin-i'));

      thin_anim_I = [
         function () { thin_segment_I.draw("100% ", "100%", 0.01, { delay: 0, circular: false, callback: thin_anim_I[1] }); },
         function () { thin_segment_I.draw("40% ", "80%", 0.7, { delay: 0, circular: false, callback: thin_anim_I[2] }); },
         function () { thin_segment_I.draw("0% ", "60%", 0.5, { delay: 0, circular: false, callback: thin_anim_I[3] }); },
         function () { thin_segment_I.draw("0% ", "0%", 0.6, { delay: 0, circular: false, callback: thin_anim_I[4] }); },
         function () { thin_segment_I.draw("0% ", "0%", 0.6, { delay: 0, circular: false, callback: thinNextLetter() }); }
      ];
      thin_segment_I.draw("0%", "0%", 0, { delay: 0, circular: false });


      /*    letter G     */
      thin_segment_G1 = new Segment(document.getElementById('thin-g1'));
      thin_segment_G2 = new Segment(document.getElementById('thin-g2'));

      thin_anim_G1 = [
         function () { thin_segment_G1.draw("0 ", "0%", 1.41, { delay: 0, circular: true, callback: thin_anim_G1[1] }); },
         function () { thin_segment_G1.draw("27.18% ", "27.18%", 0.01, { delay: 0, circular: true, callback: thin_anim_G1[2] }); },
         function () { thin_segment_G1.draw("27.18% +0 ", "45% + 0", 0.7, { delay: 0, circular: true, callback: thin_anim_G1[3] }); },
         function () { thin_segment_G1.draw("27.18% +0 ", "53% + 0", 0.6, { delay: 0, circular: true, callback: thin_anim_G1[4] }); },
         function () { thin_segment_G1.draw("27.18% +0 ", "53% + 0", 0.3, { delay: 0, circular: true, callback: thin_anim_G1[5] }); },
         function () { thin_segment_G1.draw("27.18% +0 ", "100% + 0", 1.6, { delay: 0, circular: true, callback: thin_anim_G1[6] }); },
         function () { thin_segment_G1.draw("127.18% -360 ", "155% -360", 0.8, { delay: 0, circular: true, callback: thin_anim_G1[7] }); },
         function () { thin_segment_G1.draw("127.18% -360 ", "155% -360", 0.3, { delay: 0, circular: true, callback: thin_anim_G1[8] }); },
         function () { thin_segment_G1.draw("127.18% -360 ", "136% -360", 0.35, { delay: 0, circular: true, callback: thin_anim_G1[9] }); },
         function () { thin_segment_G1.draw("127.18% -360 ", "127.18% -360", 0.01, { delay: 0, circular: true, callback: thin_anim_G1[10] }); }
      ];
      thin_anim_G2 = [
         function () { thin_segment_G2.draw("80% ", "80%", 0.01, { delay: 0, circular: true, callback: thin_anim_G2[1] }); },
         function () { thin_segment_G2.draw("90% +0 ", "25% + 0", 1.4, { delay: 0, circular: true, callback: thin_anim_G2[2] }); },
         function () { thin_segment_G2.draw("25% - 0 ", "110% - 0 ", 1.3, { delay: 0, circular: true, callback: thin_anim_G2[3] }); },
         function () { thin_segment_G2.draw("25% - 360 ", "110% - 360 ", 0.3, { delay: 0, circular: true, callback: thin_anim_G2[4] }); },
         function () { thin_segment_G2.draw("25% - 360 ", "28% - 360 ", 1.6, { delay: 0, circular: true, callback: thin_anim_G2[5] }); },
         function () { thin_segment_G2.draw("25% - 360 ", "25% - 360 ", 0.01, { delay: 0, circular: true, callback: thin_anim_G2[6] }); },
         function () { thin_segment_G2.draw("25% - 360 ", "25% - 360 ", 0.6, { delay: 0, circular: true, callback: thin_anim_G2[7] }); },
         function () { thin_segment_G2.draw("25% - 360 ", "110% - 360 ", 0.9, { delay: 0, circular: true, callback: thin_anim_G2[8] }); },
         function () { thin_segment_G2.draw("110% - 300 ", "110% - 300 ", 1.9, { delay: 0, circular: true, callback: thin_anim_G2[9] }); },
         function () { thin_segment_G2.draw("110% - 300 ", "110% - 300 ", 1.9, { delay: 0, circular: true, callback: thinNextLetter() }); }
      ];
      thin_segment_G1.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_G2.draw("0%", "0%", 0, { delay: 0, circular: true });


      thin_anim_G1[0]();
      thin_anim_G2[0]();

      /* if($(window).scrollTop()<$('.section-4').offset().top-$(window).innerHeight()/2 && $(window).scrollTop()>$('.section-2').offset().top-$(window).innerHeight()/2){
         thin_anim_G1[0]();
         thin_anim_G2[0]();
       }*/

      /*    letter A     */
      thin_segment_A1 = new Segment(document.getElementById('thin-a1'));
      thin_segment_A2 = new Segment(document.getElementById('thin-a2'));
      thin_segment_A3 = new Segment(document.getElementById('thin-a3'));

      thin_anim_A1 = [
         function () { thin_segment_A1.draw("0% ", "0%", 0.01, { delay: 0, circular: false, callback: thin_anim_A1[1] }); },
         function () { thin_segment_A1.draw("100% ", "0%", 0.9, { delay: 0, circular: false, callback: thin_anim_A1[2] }); },
         function () { thin_segment_A1.draw("0% ", "75%", 0.5, { delay: 1.3, circular: false, callback: thin_anim_A1[3] }); },
         function () { thin_segment_A1.draw("0% ", "70%", 1.3, { delay: 0, circular: false, callback: thin_anim_A1[4] }); },
         function () { thin_segment_A1.draw("0% ", "100%", 0.3, { delay: 0, circular: false, callback: thin_anim_A1[5] }); },
         function () { thin_segment_A1.draw("100% ", "100%", 0.5, { delay: 0.2, circular: false, callback: thin_anim_A1[6] }); }
      ];
      thin_anim_A2 = [
         function () { thin_segment_A2.draw("0%", "0%", 0.01, { delay: 0, circular: false, callback: thin_anim_A2[1] }); },
         function () { thin_segment_A2.draw("0%", "100%", 0.9, { delay: 0.9, circular: false, callback: thin_anim_A2[2] }); },
         function () { thin_segment_A2.draw("0%", "80%", 0.9, { delay: 0.3, circular: false, callback: thin_anim_A2[3] }); },
         function () { thin_segment_A2.draw("0%", "75%", 1.05, { delay: 0.0, circular: false, callback: thin_anim_A2[4] }); },
         function () { thin_segment_A2.draw("0%", "100%", 0.3, { delay: 0.0, circular: false, callback: thin_anim_A2[5] }); },
         function () { thin_segment_A2.draw("100%", "100%", 0.5, { delay: 0.7, circular: false, callback: thin_anim_A2[6] }); }
      ];
      thin_anim_A3 = [
         function () { thin_segment_A3.draw("37.5%", "61.9%", 1.5, { delay: 0.6, circular: true, callback: thin_anim_A3[1] }); },
         function () { thin_segment_A3.draw("37.5%-360", "90%-360", 1.0, { delay: 0.3, circular: true, callback: thin_anim_A3[2] }); },
         function () { thin_segment_A3.draw("37.5%-360", "60%-360", 1.0, { delay: 0.0, circular: true, callback: thin_anim_A3[3] }); },
         function () { thin_segment_A3.draw("37.5%-360", "100%-360", 0.5, { delay: 0.2, circular: true, callback: thin_anim_A3[4] }); },
         function () { thin_segment_A3.draw("100%-360", "100%-360", 0.5, { delay: 0.2, circular: true, callback: thin_anim_A3[5] }); },
         function () { thin_segment_A3.draw("100%-360", "100%-360", 0.5, { delay: 0.2, circular: true, callback: thinNextLetter() }); }
      ];
      thin_segment_A1.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_A2.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_A3.draw("0%", "0%", 0, { delay: 0, circular: true });


      /*    letter R     */
      thin_segment_R1 = new Segment(document.getElementById('thin-r1'));
      thin_segment_R2 = new Segment(document.getElementById('thin-r2'));
      thin_segment_R3 = new Segment(document.getElementById('thin-r3'));

      thin_anim_R1 = [
         function () { thin_segment_R1.draw("100% ", "0%", 0.7, { delay: 0, circular: true, callback: thin_anim_R1[1] }); },
         function () { thin_segment_R1.draw("30% - 360", "100% - 360", 1.6, { delay: 0.2, circular: true, callback: thin_anim_R1[2] }); },
         function () { thin_segment_R1.draw("0% + 0", "70% + 0", 0.7, { delay: 0, circular: true, callback: thin_anim_R1[3] }); },
         function () { thin_segment_R1.draw("20% + 0", "100% + 0", 1.7, { delay: 0, circular: true, callback: thin_anim_R1[4] }); },
         function () { thin_segment_R1.draw("90% - 360", "90% - 360", 0.3, { delay: 0, circular: true, callback: thin_anim_R1[5] }); }
      ];
      thin_anim_R2 = [
         function () { thin_segment_R2.draw("26.36%", "63%", 0.9, { delay: 0, circular: true, callback: thin_anim_R2[1] }); },
         function () { thin_segment_R2.draw("37.07%", "74%", 1.5, { delay: 0, circular: true, callback: thin_anim_R2[2] }); },
         function () { thin_segment_R2.draw("26.36%+360", "67.07%+360", 1.5, { delay: 0, circular: true, callback: thin_anim_R2[3] }); },
         function () { thin_segment_R2.draw("26.36%", "45.07%", 1.3, { delay: 0, circular: true, callback: thin_anim_R2[4] }); },
         function () { thin_segment_R2.draw("50%", "73.6%", 0.5, { delay: 0, circular: true, callback: thin_anim_R2[5] }); },
         function () { thin_segment_R2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: thin_anim_R2[6] }); },
         function () { thin_segment_R2.draw("73.6%", "73.6%", 0.4, { delay: 0, circular: true, callback: thinNextLetter() }); },
      ];
      thin_anim_R3 = [
         function () { thin_segment_R3.draw("0%", "92%", 0.8, { delay: 1, circular: false, callback: thin_anim_R3[1] }); },
         function () { thin_segment_R3.draw("0%", "65%", 0.3, { delay: 0.5, circular: false, callback: thin_anim_R3[2] }); },
         function () { thin_segment_R3.draw("0%", "50%", 1.3, { delay: 0, circular: false, callback: thin_anim_R3[3] }); },
         function () { thin_segment_R3.draw("0%", "65%", 1.3, { delay: 0, circular: false, callback: thin_anim_R3[4] }); },
         function () { thin_segment_R3.draw("0%", "92%", 0.3, { delay: 0, circular: false, callback: thin_anim_R3[5] }); },
         function () { thin_segment_R3.draw("92%", "92%", 0.3, { delay: 0, circular: false, callback: thin_anim_R3[6] }); }
      ];
      thin_segment_R1.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_R2.draw("0%", "0%", 0, { delay: 0, circular: true });
      thin_segment_R3.draw("0%", "0%", 0, { delay: 0, circular: true });


      /*    letter O    */
      thin_segment_O = new Segment(document.getElementById('thin-o'));

      var t = 2;
      thin_anim_O = [
         function () { thin_segment_O.draw("26% ", "26%", 0.01, { delay: 0, circular: true, callback: thin_anim_O[1] }); },
         function () { thin_segment_O.draw("100% +34 ", "7% + 34", 0.9 * t, { delay: 0, circular: true, callback: thin_anim_O[2] }); },
         function () { thin_segment_O.draw("-100% +55 ", "0% + 55", 0.44 * t, { delay: 0, circular: true, callback: thin_anim_O[3] }); },
         function () { thin_segment_O.draw("100% +129 ", "0% + 129", 0.01, { delay: 0, circular: true, callback: thin_anim_O[4] }); },
         function () { thin_segment_O.draw("44% +13 ", "100% + 13", 1.60 * t, { delay: 0.5, circular: true, callback: thin_anim_O[5] }); },
         function () { thin_segment_O.draw("-100% +200 ", "-100% + 200", 1.0 * t, { delay: 0, circular: true, callback: thin_anim_O[6] }); },
         function () { thin_segment_O.draw("-100% +200 ", "-100% + 200", 1.0 * t, { delay: 0, circular: true, callback: thinNextLetter() }); },
      ];
      thin_segment_O.draw("0% ", "0%", 0, { delay: 0, circular: true });
   }
};

function thinStartAnimation(cur) {
   thinCurrentLetter = cur;
   switch (cur) {
      case 0:
         thin_anim_F1[0]();
         thin_anim_F2[0]();
         thin_anim_F3[0]();
         break;
      case 1:
         thin_anim_I[0]();
         break;
      case 2:
         thin_anim_G1[0]();
         thin_anim_G2[0]();
         break;
      case 3:
         thin_anim_A1[0]();
         thin_anim_A2[0]();
         thin_anim_A3[0]();
         break;
      case 4:
         thin_anim_R1[0]();
         thin_anim_R2[0]();
         thin_anim_R3[0]();
         break;
      case 5:
         thin_anim_O[0]();
         break;
   }
}

function thinNextLetter() {
   thinCurrentLetter = (thinCurrentLetter > 4) ? 0 : ++thinCurrentLetter;
   if (!$('.thin-letters.stopLetters').length) {
      thinStartAnimation(thinCurrentLetter);
   } else {
      thinStopAnimation(thinCurrentLetter);
   }
};

function thinStopAnimation(cur) {
   switch (cur) {
      case 0:
         //thin_segment_F1.draw(shlop +40, shlop +40, endtime, {delay: 0, circular: true});
         //thin_segment_F2.draw(shlop +40, shlop +40, endtime, {delay: 0, circular: true});
         //thin_segment_F3.draw(shlop +40, shlop +40, endtime, {delay: 0, circular: true});
         break;
      case 1:
         //thin_segment_I.draw(shlop +40, shlop +40, endtime, {delay: 0, circular: true});
         break;
      case 2:
         thin_segment_G1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         thin_segment_G2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
      case 3:
         thin_segment_A1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         thin_segment_A2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         thin_segment_A3.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
      case 4:
         thin_segment_R1.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         thin_segment_R2.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         thin_segment_R3.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
      case 5:
         thin_segment_O.draw(shlop + 40, shlop + 40, endtime, { delay: 0, circular: true });
         break;
   }
}

function raiseNumbers(o) {
   var $cont = o.closest('.portfolio-item'),
      target = parseInt(o.attr('data-number')),
      timeout = parseInt(o.attr('data-timeout')),
      number = 0,
      interval = 50;

   o.attr('data-text', o.attr('data-text').replace(/\B(?=(?:\d{3})+(?!\d))/g, ' '));

   if (isMobile.any || mob) {
      interval = 0;
      timeout = 0;
      o.html(target);
      o.html(o.html().replace(/\B(?=(?:\d{3})+(?!\d))/g, ' '));
   } else {
      if (!$cont.hasClass('finished') && !$cont.hasClass('animating')) {
         $cont.addClass('animating');
         clearInterval(numTimeout);
         var numTimeout = setTimeout(function () {
            clearInterval(numInterval);
            var numInterval = setInterval(function () {
               number = number + (parseInt(target / 8));
               if (number >= target) {
                  number = target;
                  clearInterval(numInterval);
                  $cont.addClass('finished');
                  $cont.removeClass('animating');
               }
               o.html(number);
               o.html(o.html().replace(/\B(?=(?:\d{3})+(?!\d))/g, ' '));
            }, interval);
         }, timeout);
      }
   }

};


!function (a) { var b = /iPhone/i, c = /iPod/i, d = /iPad/i, e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i, f = /Android/i, g = /IEMobile/i, h = /(?=.*\bWindows\b)(?=.*\bARM\b)/i, i = /BlackBerry/i, j = /BB10/i, k = /Opera Mini/i, l = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i, m = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"), n = function (a, b) { return a.test(b) }, o = function (a) { var o = a || navigator.userAgent; return this.apple = { phone: n(b, o), ipod: n(c, o), tablet: n(d, o), device: n(b, o) || n(c, o) || n(d, o) }, this.android = { phone: n(e, o), tablet: !n(e, o) && n(f, o), device: n(e, o) || n(f, o) }, this.windows = { phone: n(g, o), tablet: n(h, o), device: n(g, o) || n(h, o) }, this.other = { blackberry: n(i, o), blackberry10: n(j, o), opera: n(k, o), firefox: n(l, o), device: n(i, o) || n(j, o) || n(k, o) || n(l, o) }, this.seven_inch = n(m, o), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window ? this : void 0 }, p = function () { var a = new o; return a.Class = o, a }; "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = o : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = p() : "function" == typeof define && define.amd ? define(a.isMobile = p()) : a.isMobile = p() }(this);

function removeHovers() {
   try {
      for (var si in document.styleSheets) {
         var styleSheet = document.styleSheets[si];
         if (!styleSheet.rules) continue;

         for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
            if (!styleSheet.rules[ri].selectorText) continue;

            if (styleSheet.rules[ri].selectorText.match(':hover')) {
               styleSheet.deleteRule(ri);
            }
         }
      }
   } catch (ex) { }
}



/**
 * segment - A little JavaScript class (without dependencies) to draw and animate SVG path strokes
 * @version v1.0.8
 * @link https://github.com/lmgonzalves/segment
 * @license MIT
 */

(function () {
   var lastTime = 0;
   var vendors = ['ms', 'moz', 'webkit', 'o'];
   for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame']
         || window[vendors[x] + 'CancelRequestAnimationFrame'];
   }

   if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function (callback, element) {

         var currTime = new Date().getTime();
         var timeToCall = Math.max(0, 16 - (currTime - lastTime));
         var id = window.setTimeout(function () { callback(currTime + timeToCall); },
            timeToCall);
         lastTime = currTime + timeToCall;
         return id;
      };

   if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function (id) {
         clearTimeout(id);
      };
}());

function Segment(path, begin, end, circular) {
   this.path = path;
   this.length = path.getTotalLength();
   this.path.style.strokeDashoffset = this.length * 2;
   this.begin = typeof begin !== 'undefined' ? this.valueOf(begin) : 0;
   this.end = typeof end !== 'undefined' ? this.valueOf(end) : this.length;
   this.circular = typeof circular !== 'undefined' ? circular : false;
   this.timer = null;
   this.animationTimer = null;
   this.draw(this.begin, this.end, 0, { circular: this.circular });
}

Segment.prototype = {
   draw: function (begin, end, duration, options) {
      this.circular = options && options.hasOwnProperty('circular') ? options.circular : false;
      if (duration) {
         /// this.length         

         var delay = options && options.hasOwnProperty('delay') ? parseFloat(options.delay) * 1000 : 0,
            easing = options && options.hasOwnProperty('easing') ? options.easing : null,
            callback = options && options.hasOwnProperty('callback') ? options.callback : null,
            that = this;

         this.stop();
         if (delay) {
            delete options.delay;
            this.timer = setTimeout(function () {
               that.draw(begin, end, duration, options);
            }, delay);
            return this.timer;
         }

         var startTime = new Date(),
            initBegin = this.begin,
            initEnd = this.end,
            finalBegin = this.valueOf(begin),
            finalEnd = this.valueOf(end);

         (function calc() {
            var now = new Date(),
               elapsed = (now - startTime) / 1000,
               time = (elapsed / parseFloat(duration)),
               t = time;

            if (typeof easing === 'function') {
               t = easing(t);
            }

            if (time > 1) {
               t = 1;
            } else {
               that.animationTimer = window.requestAnimationFrame(calc);
            }

            that.begin = initBegin + (finalBegin - initBegin) * t;
            that.end = initEnd + (finalEnd - initEnd) * t;

            that.begin = that.begin < 0 && !that.circular ? 0 : that.begin;
            that.begin = that.begin > that.length && !that.circular ? that.length : that.begin;
            that.end = that.end < 0 && !that.circular ? 0 : that.end;
            that.end = that.end > that.length && !that.circular ? that.length : that.end;

            if (that.end - that.begin <= that.length && that.end - that.begin > 0) {
               that.draw(that.begin, that.end, 0, { circular: that.circular });
            } else {
               if (that.circular && that.end - that.begin > that.length) {
                  that.draw(0, that.length, 0, { circular: that.circular });
               } else {
                  that.draw(that.begin + (that.end - that.begin), that.end - (that.end - that.begin), 0, { circular: that.circular });
               }
            }

            if (time > 1 && typeof callback === 'function') {
               return callback.call(that);
            }
         })();
      } else {
         this.path.style.strokeDasharray = this.strokeDasharray(begin, end);
      }
   },

   strokeDasharray: function (begin, end) {

      ///// считаю текущее время до схлопа
      endtime = (end - begin) / this.length / 1.24;
      endtime = (endtime != 0) ? endtime : 0.5;
      shlop = begin;
      ///

      this.begin = this.valueOf(begin);
      this.end = this.valueOf(end);
      if (this.circular) {
         var division = this.begin > this.end || (this.begin < 0 && this.begin < this.length * -1)
            ? parseInt(this.begin / parseInt(this.length)) : parseInt(this.end / parseInt(this.length));
         if (division !== 0) {
            this.begin = this.begin - this.length * division;
            this.end = this.end - this.length * division;
         }
      }
      if (this.end > this.length) {
         var plus = this.end - this.length;
         return [this.length, this.length, plus, this.begin - plus, this.end - this.begin].join(' ');
      }
      if (this.begin < 0) {
         var minus = this.length + this.begin;
         if (this.end < 0) {
            return [this.length, this.length + this.begin, this.end - this.begin, minus - this.end, this.end - this.begin, this.length].join(' ');
         } else {
            return [this.length, this.length + this.begin, this.end - this.begin, minus - this.end, this.length].join(' ');
         }
      }
      return [this.length, this.length + this.begin, this.end - this.begin].join(' ');
   },

   valueOf: function (input) {

      var val = parseFloat(input);
      if (typeof input === 'string' || input instanceof String) {
         if (~input.indexOf('%')) {
            var arr;
            if (~input.indexOf('+')) {
               arr = input.split('+');
               val = this.percent(arr[0]) + (this.length * parseFloat(arr[1]) / 360);
               //console.log(this.length*parseFloat(arr[1]) / 360);
            } else if (~input.indexOf('-')) {
               arr = input.split('-');
               if (arr.length === 3) {
                  val = -this.percent(arr[1]) - parseFloat(arr[2]);

               } else {
                  val = arr[0] ? this.percent(arr[0]) - (this.length * parseFloat(arr[1]) / 360) : -this.percent(arr[1]);
                  // console.log("-");
               }
            } else {
               val = this.percent(input);
            }
         }
      }
      return val;
   },

   stop: function () {
      window.cancelAnimationFrame(this.animationTimer);
      this.animationTimer = null;
      clearTimeout(this.timer);
      this.timer = null;
   },

   percent: function (value) {
      return parseFloat(value) / 100 * this.length;
   }
};

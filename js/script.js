$(window).on("load", function (e) {
  $('.loader-animation').addClass('visibility-hidden');
  setTimeout(function(){
    $('.loader-animation').addClass('visibility-hidden');
  },3000)
  setTimeout(function(){
    $('.loader-animation').addClass('visibility-hidden');
  },6000)

  $('.bg_3d_image_1').addClass('set_location_image')

  $('.employee_impacts_design_svg').addClass('employee_impacts_design_svg_onload')

  AOS.init();


});
jQuery(document).ready(function($){

    var tab_height = $("#first-tab").innerHeight();
    var tab_width = $("#first-tab").innerWidth();

    // $( ".container" ).after( $( ".precinct-section .tab-content .my-slick .slick-next" ) );
    $( "<p></p>" ).insertAfter(".precinct-section .tab-content .my-slick .slick-next");

    $(".changing-color").css({'height': tab_height, 'width': tab_width});

    if ( $(window).width() <= 576 ) {
      $('.menu-btn').addClass('main-btn-mobile');
      $('.menu-btn').removeClass('main-btn-pc');
      $('.close-btn').addClass('close-btn-mobile');
      $('.close-btn').removeClass('close-btn-pc');
      $('.side-content-mobile').removeClass('d-none');
      $('.side-content-mobile').addClass('d-flex');
    }
    else{
      $('.menu-btn').addClass('main-btn-pc');
      $('.menu-btn').removeClass('main-btn-mobile');
      $('.close-btn').removeClass('close-btn-mobile');
      $('.close-btn').addClass('close-btn-pc');
      $('.side-content-mobile').addClass('d-none');
      $('.side-content-mobile').removeClass('d-flex');

    }

     $('.main-btn-pc').click(function() {
      $('.side-content-pc').addClass('right-0');
     });

     $('.main-btn-mobile').click(function() {
      $('.side-content-mobile').addClass('right-0');
      $('body').addClass('o-hidden');
      $('html').addClass('o-hidden');
     });

      $('.close-btn-mobile').click(function() {
        $('.side-content-mobile').removeClass('right-0');
        $('body').removeClass('o-hidden');
        $('html').removeClass('o-hidden');
      });

      $('.close-btn-pc').click(function() {
        $('.side-content-pc').removeClass('right-0');
      });

      $(document).on('click', '#ueberTab a', function(e) {
          var left_width = $(this).offset().left;
          var wrapper_left = $("#ueberTab").offset().left;
          var final_left = left_width - wrapper_left;
          var color_class = $(this).data("class");

          $(".changing-color").animate({left: final_left});

          $('.changing-color').removeClass('residential leisure office');
          $('.precinct-svg-animation').removeClass('residential leisure office');

          $('.changing-color').addClass(color_class);
          $('.precinct-svg-animation').addClass(color_class);

          otherTabs = $(this).attr('data-secondary').split(',');
          for(i= 0; i<otherTabs.length;i++) {
            nav = $('<ul class="nav   " id="tmpNav"></ul>');
            nav.append('<li class="nav-item"><a href="#" data-toggle="tab" data-target="' + otherTabs[i] + '">nav</a></li>"');
            nav.find('a').tab('show');
          }
      });
      $("#first-tab").click(function() {
        $( "#slick-slide-control00" ).click();
      });
      $("#second-tab").click(function() {
        $( "#slick-slide-control01" ).click();
      });
      $("#third-tab").click(function() {
        $( "#slick-slide-control02" ).click();
      });



      $('.my-slick').on('click', '.slick-next', function(event) {
        var $items = $('.main-residential .sub-residential ul li'),
        $selected = $items.filter('.selected').removeClass('selected'),
        $next;
        if (!$selected.length) {
          $next = $items.first();
        } else {
          $next = $selected.is($items.last()) ? $items.first() : $selected.next();
        }
        $next.addClass('selected');
        $next.children().click();
      });
      $(".main-residential .sub-residential ul li a").click(function() {
        var t = $(this);
        t.parents('.main-residential .sub-residential ul').find('li').removeClass('selected');
        t.parentsUntil('.main-residential .sub-residential ul', 'li').addClass('selected');
      });

      $('.precinct-section .tab-content .my-slick .slick-next').addClass('testttt');
      if($('#first-tab').hasClass('active')){

      }

        $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_2').removeClass('animation_coordinates');
        $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_1').removeClass('animation_coordinates');
        $('.precinct-svg-animation #residential_svg #residential_x5F_ball_x5F_1').removeClass('animation_coordinates');
        $('.precinct-svg-animation #residential_svg .residential_x5F_ball_x5F_2').removeClass('animation_coordinates');
        $('.precinct-svg-animation #residential_svg #residential_x5F_ellipse_x5F_1').removeClass('animation_coordinates');

       //Hide Office
       $('.precinct-svg-animation #office_svg .big-triangle').addClass('animation_coordinates');
       $('.precinct-svg-animation #office_svg #office_x5F_ellipse').addClass('animation_coordinates');
       $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_2').addClass('animation_coordinates');
       $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_1').addClass('animation_coordinates');
       $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_4').addClass('animation_coordinates');
       $('.precinct-svg-animation #office_svg .office-circle').addClass('animation_coordinates');

       //Hide Leisure
       $('.precinct-svg-animation #leisure_svg .silver-big ').addClass('animation_coordinates');
       $('.precinct-svg-animation #leisure_svg .organge_pentagon ').addClass('animation_coordinates');
       $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates');
       $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates');
       $('.precinct-svg-animation #leisure_svg .sliver-small ').addClass('animation_coordinates');

        $(document).on('click', '.main-residential .sub-residential .nav-item', function(e) {
          if($('.main-residential .sub-residential .res').hasClass("active")){
            //Show Residential
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_2').removeClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_1').removeClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ball_x5F_1').removeClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_ball_x5F_2').removeClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ellipse_x5F_1').removeClass('animation_coordinates');

            //Hide Office
            $('.precinct-svg-animation #office_svg .big-triangle').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_ellipse').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_4').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg .office-circle').addClass('animation_coordinates');

            //Hide Leisure
            $('.precinct-svg-animation #leisure_svg .silver-big ').addClass('animation_coordinates');
            $('.precinct-svg-animation #leisure_svg .organge_pentagon ').addClass('animation_coordinates');
            $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates');
            $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates');
            $('.precinct-svg-animation #leisure_svg .sliver-small ').addClass('animation_coordinates');
          }
           if($('.main-residential .sub-residential .offic_class').hasClass("active")){
            //Hide Residential
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ball_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_ball_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ellipse_x5F_1').addClass('animation_coordinates');

            //Office Show
            $('.precinct-svg-animation #office_svg .big-triangle').removeClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_ellipse').removeClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_2').removeClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_1').removeClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_4').removeClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg .office-circle').removeClass('animation_coordinates');

             //Hide Leisure
             $('.precinct-svg-animation #leisure_svg .silver-big ').addClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg .organge_pentagon ').addClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg .sliver-small ').addClass('animation_coordinates');

          }
          if($('.main-residential .sub-residential .leis').hasClass("active")){
            //Hide Residential
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_square_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ball_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg .residential_x5F_ball_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #residential_svg #residential_x5F_ellipse_x5F_1').addClass('animation_coordinates');

            //Hide Office
            $('.precinct-svg-animation #office_svg .big-triangle').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_ellipse').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_2').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_1').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg #office_x5F_cone_x5F_4').addClass('animation_coordinates');
            $('.precinct-svg-animation #office_svg .office-circle').addClass('animation_coordinates');

             //Show Leisure
             $('.precinct-svg-animation #leisure_svg .silver-big ').removeClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg .organge_pentagon ').removeClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_3 ').removeClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg #leisure_x5F_pentagon_x5F_2 ').removeClass('animation_coordinates');
             $('.precinct-svg-animation #leisure_svg .sliver-small ').removeClass('animation_coordinates');
            }
      });

  //Mobile animation
            //Show Residential
            $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_2').removeClass('animation_coordinates_mobile_left');
            $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_1').removeClass('animation_coordinates_mobile_left');
            $('.precinct-mobile #residential_svg1 #residential_x5F_ball_x5F_1').removeClass('animation_coordinates_mobile_left');
            $('.precinct-mobile #residential_svg1 .residential_x5F_ball_x5F_2').removeClass('animation_coordinates_mobile_left');
            $('.precinct-mobile #residential_svg1 #residential_x5F_ellipse_x5F_1').removeClass('animation_coordinates_mobile_left');

            //Hide Office
            $('.precinct-mobile #office_svg1 .big-triangle').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #office_svg1 #office_x5F_ellipse').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_2').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_1').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_4').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #office_svg1 .office-circle').addClass('animation_coordinates_mobile_right');

            //Hide Leisure
            $('.precinct-mobile #leisure_svg1 .silver-big ').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #leisure_svg1 .organge_pentagon ').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates_mobile_right');
            $('.precinct-mobile #leisure_svg1 .sliver-small ').addClass('animation_coordinates_mobile_right');

            $(document).on('click', '.main-residential .sub-residential .nav-item', function(e) {
              if($('.main-residential .sub-residential .res').hasClass("active")){
                //Show Residential
                $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_2').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_1').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 #residential_x5F_ball_x5F_1').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 .residential_x5F_ball_x5F_2').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 #residential_x5F_ellipse_x5F_1').removeClass('animation_coordinates_mobile_left');

                //Hide Office
                $('.precinct-mobile #office_svg1 .big-triangle').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_ellipse').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_2').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_1').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_4').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 .office-circle').addClass('animation_coordinates_mobile_right');

                //Hide Leisure
                $('.precinct-mobile #leisure_svg1 .silver-big ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 .organge_pentagon ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 .sliver-small ').addClass('animation_coordinates_mobile_right');
              }
              if($('.main-residential .sub-residential .offic_class').hasClass("active")){
                //Hide Residential
                $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_2').addClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_1').addClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 #residential_x5F_ball_x5F_1').addClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 .residential_x5F_ball_x5F_2').addClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #residential_svg1 #residential_x5F_ellipse_x5F_1').addClass('animation_coordinates_mobile_left');

                //Show Office
                $('.precinct-mobile #office_svg1 .big-triangle').removeClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_ellipse').removeClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_2').removeClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_1').removeClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_4').removeClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #office_svg1 .office-circle').removeClass('animation_coordinates_mobile_right');

                $('.precinct-mobile #office_svg1 .big-triangle').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #office_svg1 #office_x5F_ellipse').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_2').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_1').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_4').removeClass('animation_coordinates_mobile_left');
                $('.precinct-mobile #office_svg1 .office-circle').removeClass('animation_coordinates_mobile_left');

                //Hide Leisure
                $('.precinct-mobile #leisure_svg1 .silver-big ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 .organge_pentagon ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_3 ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_2 ').addClass('animation_coordinates_mobile_right');
                $('.precinct-mobile #leisure_svg1 .sliver-small ').addClass('animation_coordinates_mobile_right');
              }
              if($('.main-residential .sub-residential .leis').hasClass("active")){
                  //Hide Residential
                  $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_2').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #residential_svg1 .residential_x5F_square_x5F_1').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #residential_svg1 #residential_x5F_ball_x5F_1').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #residential_svg1 .residential_x5F_ball_x5F_2').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #residential_svg1 #residential_x5F_ellipse_x5F_1').addClass('animation_coordinates_mobile_left');

                  //Hide Office
                  $('.precinct-mobile #office_svg1 .big-triangle').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #office_svg1 #office_x5F_ellipse').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_2').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_1').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #office_svg1 #office_x5F_cone_x5F_4').addClass('animation_coordinates_mobile_left');
                  $('.precinct-mobile #office_svg1 .office-circle').addClass('animation_coordinates_mobile_left');

                  //Show Leisure
                  $('.precinct-mobile #leisure_svg1 .silver-big ').removeClass('animation_coordinates_mobile_right');
                  $('.precinct-mobile #leisure_svg1 .organge_pentagon ').removeClass('animation_coordinates_mobile_right');
                  $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_3 ').removeClass('animation_coordinates_mobile_right');
                  $('.precinct-mobile #leisure_svg1 #leisure_x5F_pentagon_x5F_2 ').removeClass('animation_coordinates_mobile_right');
                  $('.precinct-mobile #leisure_svg1 .sliver-small ').removeClass('animation_coordinates_mobile_right');
              }
            });




      var position = $(window).scrollTop();
          $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              if (scroll > 50) {
              $('.header').addClass("pt-15");
              }
              position = scroll;
          });
          $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              if (scroll < 50) {
              $('.header').removeClass("pt-15");
              }
              position = scroll;
          });

      $('.my-slick').slick({
          dots: true,
          infinite: true,
          cssEase: 'ease-in-out',
          draggable: false,
          // prevArrow: '<button id="prev-arrow"></button>',
          // nextArrow: '<button id="next-arrow"></button>'
          // slidesToShow: 1,
          // slidesToScroll: 1,
          // // autoplay: true,
          // autoplaySpeed: 5000
          // // arrows: true
      });


      $('.r_precinct_orange_slick').slick({
          dots: true,
          infinite: false,
          // prevArrow: true,
          // nextArrow: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          // autoplay: true,
          // autoplaySpeed: 5000,
          arrows: true
      });


      // $('.projects_list .slick_holder').slick({
      //   slidesToShow: 1,
      //   slidesToScroll: 1,
      //   arrows: true,
      //   // autoplay: true,
      //   dots: false,

      //   // initialSlide: 1,
      //   // fade: true,
      //   asNavFor: '.projects_list .slick_sub_holder'
      // });
      $('.projects_list .slick_sub_holder').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // asNavFor: '.projects_list .slick_holder',
        dots: false,
        // centerMode: true,
        // focusOnSelect: true
      });


    //   if ( $(window).width() < 1024 ) {
    //     $('.r_precinct_orange_slick .slick-prev').addClass('hidden');
    //     $('.r_precinct_orange_sub .r_precinct_orange_slick').on('afterChange', function (event, slick, currentSlide) {
    //       if(currentSlide === 0) {
    //           $('.r_precinct_orange_slick .slick-prev').addClass('hidden');
    //       }
    //       else {
    //           $('.r_precinct_orange_slick .slick-prev').removeClass('hidden');
    //       }
    //       console.log(slick, currentSlide);
    //       if (slick.$slides.length-1 == currentSlide) {
    //         $('.r_precinct_orange_slick .slick-next').addClass('hidden');
    //       }
    //       else{
    //         $('.r_precinct_orange_slick .slick-next').removeClass('hidden');
    //       }
    //   })
    // }

    // if ( $(window).width() < 576 ) {
    //   $('.office_element_4 .slick_sub_holder .slick-prev').addClass('hidden');
    //     $('.office_element_4').on('afterChange', function (event, slick, currentSlide) {
    //       if(currentSlide === 0) {
    //         $('.office_element_4 .slick_sub_holder .slick-prev').addClass('hidden');
    //       }
    //       else {
    //         $('.office_element_4 .slick_sub_holder .slick-prev').removeClass('hidden');
    //       }
    //       console.log(slick, currentSlide);
    //       if (slick.$slides.length-1 == currentSlide) {
    //         $('.office_element_4 .slick_sub_holder .slick-next').addClass('hidden');
    //       }
    //       else{
    //         $('.office_element_4 .slick_sub_holder .slick-next').removeClass('hidden');
    //       }
    //   })
    // }

    // if ( $(window).width() <= 576 ) {
    //   $('.o_precinct_orange .slick_holder .slick-prev').addClass('hidden');
    //   $('.o_precinct_orange .slick_holder .slick-next').addClass('hidden');

    //   $('.o_precinct_orange .slick_sub_holder .slick-prev').removeClass('hidden');
    //   $('.o_precinct_orange .slick_sub_holder .slick-next').removeClass('hidden');
    // }

    // if ( $(window).width() >= 576 ) {
    //   $('.office_element_3 .slick_sub_holder .slick-prev').addClass('hidden');
    //   $('.office_element_3 .slick_sub_holder .slick-next').addClass('hidden');

    //   $('.o_precinct_orange .slick_holder .slick-prev').removeClass('hidden');
    //   $('.o_precinct_orange .slick_holder .slick-next').removeClass('hidden');
    // }

    // if ( $(window).width() >= 576 ) {
    //   $('.office_element_4 .slick_sub_holder .slick-prev').addClass('hidden');
    //   $('.office_element_4 .slick_sub_holder .slick-next').addClass('hidden');
    // }

      $('.popup-iframe').magnificPopup({
        type: 'iframe'
      });


      $('.footer-items li').addClass('col-6 p-0 pb-sm-2');
      $('#menu-secondary-two li').addClass('pb-sm-2');

      var waypoints = $('#philosophy-play-section').waypoint({
        handler: function(direction) {
          $('#yt_play').click();
          $('.philosophy-main-image iframe').removeClass('opacity-0');
          $('.philosophy-main-image .philosophy-image').addClass('opacity-0');
          $('.philosophy-main-image .play-btn').addClass('opacity-0');
        },
        offset: '40%'
      });

        $('#yt_play').on('click', function(ev) {
          
          $("#video_main")[0].src += "&autoplay=1";
          ev.preventDefault();
      
      });

      $('.contact-btn').click(function(){
        // $('.contact-slide').toggleClass('all-in-one');
        $('.contact-slide').toggleClass('all-in-one');
      });
      $('.notify-me').click(function(){
        $('.contact-slide-residential').toggleClass('all-in-one');
      });
      $('.notify-close-menu').click(function(){
        $('.contact-slide-residential').toggleClass('all-in-one');
      });
      $('.office-notify').click(function(){
        $('.contact-slide-residential').toggleClass('all-in-one');
      });
     

      if ( $(window).width() < 576 ) {
        $('.eme .experiences .experiences-container').addClass('experiences-container-mobile');
        // $('.eme .experiences .experiences-container-footer').addClass('experiences-container-mobile-footer');
        $('.eme .experiences .experiences-container').removeClass('experiences-container-pc');
        // $('.eme .experiences .experiences-container').removeClass('experiences-container');
      }
      else{
        $('.eme .experiences .experiences-container').removeClass('experiences-container-mobile');
        // $('.eme .experiences .experiences-container-footer').removeClass('experiences-container-mobile-footer');
        $('.eme .experiences .experiences-container').addClass('experiences-container-pc');
      }
      $('.precinct-hover-border').addClass('custom-hide');
      $('.list-items li:nth-child(1)').mouseover(function(){
        $('.precinct-hover-border').addClass('d-block');
        $('.list-items li:nth-child(1) a').addClass('color-8d8d8d');
        $('.precinct-hover-border').addClass('custom-show');
      });
      $('.list-items li:nth-child(1)').mouseleave(function(){
        $('.precinct-hover-border').removeClass('d-block');
        $('.list-items li:nth-child(1) a').removeClass('color-8d8d8d');
        $('.precinct-hover-border').addClass('custom-hide');
        $('.precinct-hover-border').removeClass('custom-show');
      });
      $('.precinct-hover-border').mouseleave(function(){
        $('.precinct-hover-border').removeClass('d-block');
        $('.list-items li:nth-child(1) a').removeClass('color-8d8d8d');
        $('.precinct-hover-border').addClass('custom-hide');
        $('.precinct-hover-border').removeClass('custom-show');
      });
      $('.precinct-hover-border').mouseover(function(){
        $('.precinct-hover-border').addClass('custom-show');
        $('.list-items li:nth-child(1) a').addClass('color-8d8d8d');
      });
      $('.precinct-hover-border').mouseleave(function(){
        $('.precinct-hover-border').removeClass('custom-show');
        $('.precinct-hover-border').addClass('custom-hide');
        $('.list-items li:nth-child(1) a').removeClass('color-8d8d8d');
      });

      if ( $(window).width() < 576 ) {
        $('.office-spaces br').replaceWith(' ');
      }

      if($(".main-container").length){
        var spacex = jQuery(".main-container").offset().left;
        // spacex = spacex + 15;

        jQuery(".leisure-right").css('padding-right', spacex);

        jQuery(".leisure-left").css('padding-left', spacex);

        jQuery(".office-right").css('padding-right', spacex);

        jQuery(".office-left").css('padding-left', spacex);
      }

      if($(".page-template-residential").length){
        if ($(window).width() < 576) {
          var sticky = new Waypoint.Sticky({
            element: jQuery('.bg_image_mobile_1')[0]
          });
          var sticky = new Waypoint.Sticky({
            element: jQuery('.bg_image_mobile_2')[0]
          });
          var sticky = new Waypoint.Sticky({
            element: jQuery('.bg_image_mobile_3')[0]
          });
          var sticky = new Waypoint.Sticky({
            element: jQuery('.bg_image_mobile_4')[0]
          });
       }
       else {
        var sticky = new Waypoint.Sticky({
          element: jQuery('.bg_image_1')[0]
        });
        var sticky = new Waypoint.Sticky({
          element: jQuery('.bg_image_2')[0]
        });
        var sticky = new Waypoint.Sticky({
          element: jQuery('.bg_image_3')[0]
        });
        var sticky = new Waypoint.Sticky({
          element: jQuery('.bg_image_4')[0]
        });
       }  

      }

      //Default Commercial in-active
      $('#Ellipse_1148').addClass('commercial-circle-1');
      $('#Ellipse_1151').addClass('commercial-circle-1');
      $('#Ellipse_1152').addClass('commercial-circle-1');
      $('#Ellipse_1167').addClass('commercial-circle-1');
      $('#Ellipse_1155').addClass('commercial-circle-1');
      $('#Ellipse_1161').addClass('commercial-circle-1');
      $('#Ellipse_1162').addClass('commercial-circle-1');
      $('#Ellipse_1163').addClass('commercial-circle-1');
      $('#Ellipse_1164').addClass('commercial-circle-1');
      $('#Ellipse_1165').addClass('commercial-circle-1');
      $('#Ellipse_1166').addClass('commercial-circle-1');

      $('#Rectangle_7218-2').addClass('opacity_40');
      $('#Rectangle_7219-2').addClass('opacity_40');
      $('#Rectangle_7220-2').addClass('opacity_40');
      $('#Rectangle_7220-2').addClass('opacity_40');
      $('#Rectangle_7221-2').addClass('opacity_40');
      $('#Rectangle_7222-2').addClass('opacity_40');
      $('#Rectangle_7223-2').addClass('opacity_40');



      // $('#Path_4761-2').addClass('common_color_1');
      $('#Rectangle_7224').addClass('opacity-1');
      $('#Rectangle_7225').addClass('opacity-1');
      $('#Rectangle_7226').addClass('opacity-1');

      //Default Residential
      $('#Path_4771-2').addClass('common_color_2');
      $('#Path_4769-2').addClass('common_color_2');
      $('#Path_4772-2').addClass('common_color_2');
      $('#Path_4770-2').addClass('common_color_2');
      $('#Union_3').addClass('common_color_3');

      //Default Residential circle
      $('.Ellipse_1158').addClass('circle-scale');
      $('.Ellipse_1159').addClass('circle-scale');
      $('.Ellipse_1147').addClass('circle-scale');
      $('.Ellipse_1160').addClass('circle-scale');

      //Default Leisure in-active
      $('#Path_4759-2').addClass('low_opacity');
      $('#Path_4760-2').addClass('low_opacity');
      $('#Path_4761-2').addClass('low_opacity');
      $('#Path_4762-2').addClass('low_opacity');
      $('#Path_4763-2').addClass('low_opacity');
      $('#Path_4764-2').addClass('low_opacity');
      $('#Path_4765-2').addClass('low_opacity');
      $('#Path_4766-2').addClass('low_opacity');
      $('#Path_4767-2').addClass('low_opacity');
      $('#Path_4768-2').addClass('low_opacity');
      $('#Rectangle_7217-2').addClass('low_opacity').addClass('common_color_1');

      $('#Ellipse_1149').addClass('commercial-circle-1');
      $('#Ellipse_1150').addClass('commercial-circle-1');
      $('#Ellipse_1153').addClass('commercial-circle-1');
      $('#Ellipse_1154').addClass('commercial-circle-1');
      $('#Ellipse_1156').addClass('commercial-circle-1');
      $('#Ellipse_1157').addClass('commercial-circle-1');

      $('#Path_4744').addClass('leisure_stroke_opacity');


      $('.residential_button #Group_5301 #Union_2').addClass('location-color-1');
      $('.residential_button').mouseenter(function() {
        $('.residential_button #Group_5301 #Union_2').addClass('location-color-1');
      });
      $('.residential_button').mouseleave(function() {
        // $('.residential_button #Group_5301 #Union_2').removeClass('location-color-1');
      });
      //residential click
      $('.residential_button').click(function() {



        $('.residential_button #Group_5301 #Union_2').css('fill', '#FC932F');
        $('.commercial_button #Group_5302 #Rectangle_6736').css('fill', '#7C92AB');
        $('.commercial_button #Group_5302 #Rectangle_6735').css('fill', '#7C92AB');
        $('.commercial_button #Group_5302 #Path_4384').css('fill', '#7C92AB');
        $('.leisure_button #Group_5305 #Subtraction_1').css('fill', '#7C92AB');
        $('.leisure_button #Group_5305 #Path_4386').css('fill', '#7C92AB');


        //active Residential
        $('#Rectangle_7210').removeClass('residential-rectangle-1');
        $('#Path_4771-2').addClass('common_color_2').removeClass('low_opacity');
        $('#Path_4769-2').addClass('common_color_2').removeClass('low_opacity');
        $('#Path_4772-2').addClass('common_color_2').removeClass('low_opacity');
        $('#Path_4770-2').addClass('common_color_2').removeClass('low_opacity');
        $('#Union_3').addClass('common_color_3').removeClass('low_opacity');
        $('#Path_4745').removeClass('residential_rectangle_4');
        $('#Path_4746').removeClass('residential_rectangle_4');
        $('#Path_4747').removeClass('residential_rectangle_4');

        $('#Ellipse_1160').removeClass('commercial-circle-1');
        $('#Ellipse_1147').removeClass('commercial-circle-1');
        $('#Ellipse_1158').removeClass('commercial-circle-1');
        $('#Ellipse_1159').removeClass('commercial-circle-1');

        $('.Ellipse_1158').removeClass('commercial-circle-1');
        $('.Ellipse_1159').removeClass('commercial-circle-1');
        $('.Ellipse_1147').removeClass('commercial-circle-1');
        $('.Ellipse_1160').removeClass('commercial-circle-1');

        $('.Ellipse_1158').addClass('circle-scale');
        $('.Ellipse_1159').addClass('circle-scale');
        $('.Ellipse_1147').addClass('circle-scale');
        $('.Ellipse_1160').addClass('circle-scale');

        $('#Path_4745').removeClass('residential-rectangle-1');
        $('#Path_4746').removeClass('residential-rectangle-1');
        $('#Path_4747').removeClass('residential-rectangle-1');
        //active Residential end

        //in-active commercial

        $('#Ellipse_1167').addClass('commercial-circle-1');
        $('#Ellipse_1152').addClass('commercial-circle-1');

        $('.Ellipse_1148').removeClass('circle-scale');
        $('.Ellipse_1151').removeClass('circle-scale');
        $('.Ellipse_1155').removeClass('circle-scale');
        $('.Ellipse_1161').removeClass('circle-scale');
        $('.Ellipse_1162').removeClass('circle-scale');
        $('.Ellipse_1163').removeClass('circle-scale');
        $('.Ellipse_1164').removeClass('circle-scale');
        $('.Ellipse_1165').removeClass('circle-scale');
        $('.Ellipse_1166').removeClass('circle-scale');

        $('#Ellipse_1148').addClass('commercial-circle-1');
        $('#Ellipse_1151').addClass('commercial-circle-1');
        $('#Ellipse_1155').addClass('commercial-circle-1');
        $('#Ellipse_1161').addClass('commercial-circle-1');
        $('#Ellipse_1162').addClass('commercial-circle-1');
        $('#Ellipse_1163').addClass('commercial-circle-1');
        $('#Ellipse_1164').addClass('commercial-circle-1');
        $('#Ellipse_1165').addClass('commercial-circle-1');
        $('#Ellipse_1166').addClass('commercial-circle-1');

        
        $('#Rectangle_7224').addClass('opacity-1');
        $('#Rectangle_7225').addClass('opacity-1');
        $('#Rectangle_7226').addClass('opacity-1');

        $('#Rectangle_7218-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7219-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7220-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7220-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7221-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7222-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7223-2').removeClass('common_color_1').addClass('opacity_40');

        //in-active commercial end

        //in-active Leisure
        $('#Path_4759-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4760-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4761-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4762-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4763-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4764-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4765-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4766-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4767-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4768-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Rectangle_7217-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4761-2').addClass('common_color_1');
        $('.Ellipse_1149').removeClass('circle-scale');
        $('.Ellipse_1150').removeClass('circle-scale');
        $('.Ellipse_1153').removeClass('circle-scale');
        $('.Ellipse_1154').removeClass('circle-scale');
        $('.Ellipse_1156').removeClass('circle-scale');
        $('.Ellipse_1157').removeClass('circle-scale');

        $('#Ellipse_1149').addClass('commercial-circle-1');
        $('#Ellipse_1150').addClass('commercial-circle-1');
        $('#Ellipse_1153').addClass('commercial-circle-1');
        $('#Ellipse_1154').addClass('commercial-circle-1');
        $('#Ellipse_1156').addClass('commercial-circle-1');
        $('#Ellipse_1157').addClass('commercial-circle-1');

        $('#Path_4744').addClass('leisure_stroke_opacity');
      });

      $('.commercial_button, .leisure_button').click(function() {
        $('.residential_button #Group_5301 #Union_2').removeClass('location-color-1');
      });

      $('.commercial_button').mouseenter(function() {
        $('.commercial_button #Group_5302 #Rectangle_6736').addClass('location-house-1');
        $('.commercial_button #Group_5302 #Rectangle_6735').addClass('location-house-2');
        $('.commercial_button #Group_5302 #Path_4384').addClass('location-house-3');
        
      });

      $('.commercial_button').mouseleave(function() {
        $('.commercial_button #Group_5302 #Rectangle_6736').removeClass('location-house-1');
        $('.commercial_button #Group_5302 #Rectangle_6735').removeClass('location-house-2');
        $('.commercial_button #Group_5302 #Path_4384').removeClass('location-house-3');
      });

      $('.commercial_button').click(function() {
        $('.commercial_button #Group_5302 #Rectangle_6736').css('fill', '#0062B0');
        $('.commercial_button #Group_5302 #Rectangle_6735').css('fill', '#0E7BD2');
        $('.commercial_button #Group_5302 #Path_4384').css('fill', '#03508E');
        $('.residential_button #Group_5301 #Union_2').css('fill', '#7C92AB');
        $('.leisure_button #Group_5305 #Subtraction_1').css('fill', '#7C92AB');
        $('.leisure_button #Group_5305 #Path_4386').css('fill', '#7C92AB');

        //Residential in-active
        $('#Rectangle_7210').addClass('residential-rectangle-1');
        $('#Path_4771-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4769-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4772-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4770-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Union_3').removeClass('common_color_3').addClass('residential-rectangle-1');
        $('#Path_4745').addClass('residential-rectangle-1');
        $('#Path_4746').addClass('residential-rectangle-1');
        $('#Path_4747').addClass('residential-rectangle-1');

        $('#Ellipse_1160').addClass('commercial-circle-1');
        $('#Ellipse_1147').addClass('commercial-circle-1');
        $('#Ellipse_1158').addClass('commercial-circle-1');
        $('#Ellipse_1159').addClass('commercial-circle-1');

        $('.Ellipse_1158').removeClass('circle-scale');
        $('.Ellipse_1159').removeClass('circle-scale');
        $('.Ellipse_1147').removeClass('circle-scale');
        $('.Ellipse_1160').removeClass('circle-scale');


        $('.Ellipse_1148').addClass('circle-scale');
        $('.Ellipse_1151').addClass('circle-scale');
        $('.Ellipse_1155').addClass('circle-scale');
        $('.Ellipse_1161').addClass('circle-scale');
        $('.Ellipse_1162').addClass('circle-scale');
        $('.Ellipse_1163').addClass('circle-scale');
        $('.Ellipse_1164').addClass('circle-scale');
        $('.Ellipse_1165').addClass('circle-scale');
        $('.Ellipse_1166').addClass('circle-scale');

        //Commercial active
        $('#Rectangle_7218-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7219-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7220-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7220-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7221-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7222-2').addClass('common_color_1').removeClass('opacity_40');
        $('#Rectangle_7223-2').addClass('common_color_1').removeClass('opacity_40');
        $('.Ellipse_1151').removeClass('circle-scale');
        $('#Path_4761-2').addClass('low_opacity');
        $('#Ellipse_1148').removeClass('commercial-circle-1');
        $('#Ellipse_1151').addClass('commercial-circle-1');
        $('#Ellipse_1152').removeClass('commercial-circle-1');
        $('#Ellipse_1155').removeClass('commercial-circle-1');
        $('#Ellipse_1161').removeClass('commercial-circle-1');
        $('#Ellipse_1162').removeClass('commercial-circle-1');
        $('#Ellipse_1163').removeClass('commercial-circle-1');
        $('#Ellipse_1164').removeClass('commercial-circle-1');
        $('#Ellipse_1165').removeClass('commercial-circle-1');
        $('#Ellipse_1166').removeClass('commercial-circle-1');
        $('#Ellipse_1167').removeClass('commercial-circle-1');

        $('#Rectangle_7224').removeClass('opacity-1');
        $('#Rectangle_7225').removeClass('opacity-1');
        $('#Rectangle_7226').removeClass('opacity-1');

        //Leisure inactive
        $('#Path_4759-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4760-2').addClass('low_opacity').removeClass('common_color_1');

        $('#Path_4762-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4763-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4764-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4765-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4766-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4767-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Path_4768-2').addClass('low_opacity').removeClass('common_color_1');
        $('#Rectangle_7217-2').addClass('low_opacity').removeClass('common_color_1');

        $('.Ellipse_1149').removeClass('circle-scale');
        $('.Ellipse_1150').removeClass('circle-scale');
        $('.Ellipse_1153').removeClass('circle-scale');
        $('.Ellipse_1154').removeClass('circle-scale');
        $('.Ellipse_1156').removeClass('circle-scale');
        $('.Ellipse_1157').removeClass('circle-scale');

        $('#Ellipse_1149').addClass('commercial-circle-1');
        $('#Ellipse_1150').addClass('commercial-circle-1');
        $('#Ellipse_1153').addClass('commercial-circle-1');
        $('#Ellipse_1154').addClass('commercial-circle-1');
        $('#Ellipse_1156').addClass('commercial-circle-1');
        $('#Ellipse_1157').addClass('commercial-circle-1');

        $('#Path_4744').addClass('leisure_stroke_opacity');
      });


      $('.leisure_button').mouseenter(function() {
        $('.leisure_button #Group_5305 #Subtraction_1').addClass('location-leisure-1');
        $('.leisure_button #Group_5305 #Path_4386').addClass('location-leisure-2');
      });

      $('.leisure_button').mouseleave(function() {
        $('.leisure_button #Group_5305 #Subtraction_1').removeClass('location-leisure-1');
        $('.leisure_button #Group_5305 #Path_4386').removeClass('location-leisure-2');
      });

      $('.leisure_button').click(function() {
        //Leisure active
        $('#Ellipse_1151').addClass('location-leisure-2');
        $('.Ellipse_1151').addClass('circle-scale');
        $('.Ellipse_1151').addClass('location-leisure-2');
        $('#Ellipse_1151').removeClass('commercial-circle-1');
        $('#Path_4759-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4760-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4762-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4763-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4764-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4765-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4766-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4767-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4768-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Rectangle_7217-2').removeClass('low_opacity').addClass('common_color_1');
        $('#Path_4761-2').removeClass('low_opacity').addClass('common_color_1');
        $('.Ellipse_1149').addClass('circle-scale');
        $('.Ellipse_1150').addClass('circle-scale');
        $('.Ellipse_1153').addClass('circle-scale');
        $('.Ellipse_1154').addClass('circle-scale');
        $('.Ellipse_1156').addClass('circle-scale');
        $('.Ellipse_1157').addClass('circle-scale');

        $('#Ellipse_1149').removeClass('commercial-circle-1');
        $('#Ellipse_1150').removeClass('commercial-circle-1');
        $('#Ellipse_1153').removeClass('commercial-circle-1');
        $('#Ellipse_1154').removeClass('commercial-circle-1');
        $('#Ellipse_1156').removeClass('commercial-circle-1');
        $('#Ellipse_1157').removeClass('commercial-circle-1');
        //Leisure active end

        $('#Path_4771-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4769-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4772-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Path_4770-2').removeClass('common_color_2').addClass('low_opacity');
        $('#Union_3').removeClass('common_color_3').addClass('residential-rectangle-1');
        $('#Path_4745').addClass('residential-rectangle-1');
        $('#Path_4746').addClass('residential-rectangle-1');
        $('#Path_4747').addClass('residential-rectangle-1');

        //Residential in-active
        $('#Rectangle_7210').addClass('residential-rectangle-1');

        $('.Ellipse_1158').removeClass('circle-scale');
        $('.Ellipse_1159').removeClass('circle-scale');
        $('.Ellipse_1147').removeClass('circle-scale');
        $('.Ellipse_1160').removeClass('circle-scale');

        $('#Ellipse_1160').addClass('commercial-circle-1');
        $('#Ellipse_1147').addClass('commercial-circle-1');
        $('#Ellipse_1158').addClass('commercial-circle-1');
        $('#Ellipse_1159').addClass('commercial-circle-1');

        $('#Path_4745').addClass('residential-rectangle-1');
        $('#Path_4746').addClass('residential-rectangle-1');
        $('#Path_4747').addClass('residential-rectangle-1');
        //Commercial in-active
        $('#Ellipse_1148').addClass('commercial-circle-1');
        // $('#Ellipse_1151').addClass('commercial-circle-1');
        $('#Ellipse_1152').addClass('commercial-circle-1');
        $('#Ellipse_1155').addClass('commercial-circle-1');
        $('#Ellipse_1161').addClass('commercial-circle-1');
        $('#Ellipse_1162').addClass('commercial-circle-1');
        $('#Ellipse_1163').addClass('commercial-circle-1');
        $('#Ellipse_1164').addClass('commercial-circle-1');
        $('#Ellipse_1165').addClass('commercial-circle-1');
        $('#Ellipse_1166').addClass('commercial-circle-1');
        $('#Ellipse_1167').addClass('commercial-circle-1');

        $('#Rectangle_7218-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7219-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7220-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7220-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7221-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7222-2').removeClass('common_color_1').addClass('opacity_40');
        $('#Rectangle_7223-2').removeClass('common_color_1').addClass('opacity_40');

        // $('#Path_4761-2').addClass('common_color_1').addClass('low_opacity');
        $('#Rectangle_7224').addClass('opacity-1');
        $('#Rectangle_7225').addClass('opacity-1');
        $('#Rectangle_7226').addClass('opacity-1');

        $('.leisure_button #Group_5305 #Subtraction_1').css('fill', '#F84530');
        $('.leisure_button #Group_5305 #Path_4386').css('fill', '#FF6E5D');
        $('.residential_button #Group_5301 #Union_2').css('fill', '#7C92AB');
        $('.commercial_button #Group_5302 #Rectangle_6736').css('fill', '#7C92AB');
        $('.commercial_button #Group_5302 #Rectangle_6735').css('fill', '#7C92AB');
        $('.commercial_button #Group_5302 #Path_4384').css('fill', '#7C92AB');

        $('#Path_4744').removeClass('leisure_stroke_opacity').addClass('leisure_stroke');
      });

      $('.expeciences-slick').slick({
        dots: false,
        infinite: true,
        cssEase: 'ease-in-out',
        draggable: false,
        // prevArrow: '<button id="prev-arrow"></button>',
        // nextArrow: '<button id="next-arrow"></button>'
        slidesToShow: 3,
        slidesToScroll: 1,
        // // autoplay: true,
        // autoplaySpeed: 5000
        arrows: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
    });

    $("#Offices_2_").addClass('d-none');
    $("#Retail_2_").addClass('d-none');
    $("#Hotels_2_").addClass('d-none');
    $("#Hospitals_2_").addClass('d-none');

    $('#School_button').click(function(){
      $("#schools").removeClass('d-none');
      $("#Offices_2_").addClass('d-none');
      $("#Retail_2_").addClass('d-none');
      $("#Hotels_2_").addClass('d-none');
      $("#Hospitals_2_").addClass('d-none');

    });
    $('#Hospital_Button').click(function(){
      $("#schools").addClass('d-none');
      $("#Hospitals_2_").removeClass('d-none');
      $("#Offices_2_").addClass('d-none');
      $("#Retail_2_").addClass('d-none');
      $("#Hotels_2_").addClass('d-none');
    });
    $('#Hotel_Button').click(function(){
      $("#schools").addClass('d-none');
      $("#Hospitals_2_").addClass('d-none');
      $("#Offices_2_").addClass('d-none');
      $("#Retail_2_").addClass('d-none');
      $("#Hotels_2_").removeClass('d-none');
    });
    $('#Retail_Button').click(function(){
      $("#schools").addClass('d-none');
      $("#Hospitals_2_").addClass('d-none');
      $("#Offices_2_").addClass('d-none');
      $("#Retail_2_").removeClass('d-none');
      $("#Hotels_2_").addClass('d-none');
    });
    $('#Office_Button').click(function(){
      $("#schools").addClass('d-none');
      $("#Hospitals_2_").addClass('d-none');
      $("#Offices_2_").removeClass('d-none');
      $("#Retail_2_").addClass('d-none');
      $("#Hotels_2_").addClass('d-none');
    });

    $('.dropdown .content').click(function(){
      $('.dropdown .date-picker').focus();
    });

    var waypoints = $('.banglores-social-hub-svg, .workplace-svg, .employee-centric-design, .lady_svg, .dns_svg, .commspaces, .cycle-svg, .quadrants, .life_without_barriers_svg').waypoint({
      handler: function(direction) {
      
        $(this.element).find(".animate_1").toggleClass('bus-class');
        $(this.element).find(".animate_2").toggleClass('house-class');
        $(this.element).find(".animate_3").toggleClass('road-class');
        $(this.element).find(".animate_4").toggleClass('sign-class');
        $(".workplace-svg").toggleClass('workplace-evolution-svg');
        $(".employee-centric-design").toggleClass('employee-centric-scroll-svg');
        $(".lady_svg").toggleClass('lady_svg_scroll');
        $(".dns_svg").toggleClass('dns_svg_scroll');
        $(".commspaces").toggleClass('commspaces_svg');
        $(".cycle-svg").toggleClass('cycle_svg_scroll');
        $(".quadrants").toggleClass('quadrants_svg');
        $(".life_without_barriers_svg .image").toggleClass('mini-icons');
        console.log('Waypoints works | Chakakit | This is targeted to the Video section');
      },
      offset: '30%'
    });

    var waypoints = $('.banglores-social-hub-svg, .workplace-svg, .employee-centric-design, .lady_svg, .dns_svg, .commspaces, .cycle-svg, .quadrants, .life_without_barriers_svg').waypoint({
      handler: function(direction) {
      
        $(this.element).find(".animate_1").toggleClass('bus-class');
        $(this.element).find(".animate_2").toggleClass('house-class');
        $(this.element).find(".animate_3").toggleClass('road-class');
        $(this.element).find(".animate_4").toggleClass('sign-class');
        $(".workplace-svg").toggleClass('workplace-evolution-svg');
        $(".employee-centric-design").toggleClass('employee-centric-scroll-svg');
        $(".lady_svg").toggleClass('lady_svg_scroll');
        $(".dns_svg").toggleClass('dns_svg_scroll');
        $(".commspaces").toggleClass('commspaces_svg');
        $(".cycle-svg").toggleClass('cycle_svg_scroll');
        $(".quadrants").toggleClass('quadrants_svg');
        $(".life_without_barriers_svg .image").toggleClass('mini-icons');
        console.log('Waypoints works | Chakakit | This is targeted to the Video section');
      },
      offset: '80%'
    });

    var waypoints = $('.team-svg').waypoint({
      handler: function(direction) {
        $(".team-svg").toggleClass('team-svg-scroll');
      },
      offset: '70%'
    });

    var waypoints = $('.team-svg').waypoint({
      handler: function(direction) {
        $(".team-svg").toggleClass('team-svg-scroll');
      },
      offset: '30%'
    });

    if($(".img-parallax").length){
    $('.img-parallax, .img-parallax-1').each(function(){
      var img = $(this);
      var imgParent = $(this).parent();
      function parallaxImg () {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();
    
        // The next pixel to show on screen      
        var winBottom = winY + winH;
    
        // If block is shown on screen
        if (winBottom > imgY && winY < imgY + parentH) {
          // Number of pixels shown after block appear
          var imgBottom = ((winBottom - imgY) * speed);
          // Max number of pixels until block disappear
          var imgTop = winH + parentH;
          // Porcentage between start showing until disappearing
          var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
        }
        img.css({
          top: imgPercent + '%',
          transform: 'translate(-50%, -' + imgPercent + '%)'
        });
      }
      $(document).on({
        scroll: function () {
          parallaxImg();
        }, ready: function () {
          parallaxImg();
        }
      });
    });
  }
  });

  $(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });

    $('.right-social .social').mouseover(function(){
      $('.right-social .social').addClass('d-block');
    });
    $('.right-social .social').mouseleave(function(){
      $('.right-social .social').removeClass('d-block');
    });



    refreshData();
    var i = 1;
  
    function refreshData(e) {
      x = 10; //Seconds
      
      $('.common_click_' + i).click();
        i = i == 5 ? 1 : (i + 1);
      
     
      setTimeout(refreshData, x*1000);

    
    }

  
    $('.disclaimer-buttom').click(function(){ 
     jQuery.ajax({
      type: 'post',
      url: ajaxurl,
      data: {action: 'the_cookies'},
      success: function(){
        setTimeout(function(){
          jQuery('.disclaimer').remove();
          $.scrollify.enable();
          jQuery('html, body').removeClass('o-hidden');
        }, 300);
      }
     });
    });



    // function clickCounter() {
    //   $('.disclaimer').addClass('d-none');
    //   if (typeof(Storage) !== "undefined") {
    //     if (sessionStorage.clickcount) {
    //       sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    //       $('.disclaimer').addClass('d-none');
    //     } else {
    //       sessionStorage.clickcount = 1;
    //       $('.disclaimer').removeClass('d-none');
    //     }
       
    //   } else {
       
    //   }
    // }
    // console.log(sessionStorage.clickcount);
    // if(sessionStorage.clickcount>=1){
    //   $('.disclaimer').addClass('d-none');
    // }
    // else{
    //   $('.disclaimer').removeClass('d-none');
    // }
   
});

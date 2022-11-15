const totalFrames = 46;
const animationDuration = 1300;
const timePerFrame = animationDuration / totalFrames;
const timeHalf = animationDuration / 2;
jQuery.fn.reverse = [].reverse;

// window.onload = function () { alert("It's loaded!") }

jQuery(window).on('load', function(){
  // luxy.init();
  jQuery('body').scrollTop(0);
  jQuery('.loader_wrapper').addClass('hide_load');
  jQuery('body').scrollTop(0);
  jQuery('.img_container .img_set_1 .scroll-animation-1').css("opacity", 1);
  jQuery('.main_wrapper .text_container_inner').addClass('animate_it');

  if($('.disclaimer').length){
    $.scrollify.disable();
    jQuery('html, body').addClass('o-hidden');
  }

});

jQuery(document).ready(function(){
  
  jQuery('body').scrollTop(0);
  $.scrollify({
    section : ".section_banner",
    updateHash: false,
    touchScroll:true,
    // scrollbars: false,
    overflowScroll: false,
    scrollSpeed: 1700,
    afterRender:function(){
      jQuery('body').attr('data-preIndex',0);
      jQuery('body').attr('data-postIndex',0);
      },
    before:function(e) {

      var direction,preIndex;
       preIndex = parseInt(jQuery('body').attr('data-preIndex'));
       if (e > preIndex){
         direction = "down";
         }else{
         direction = "up";
       }
       jQuery('body').attr('data-preIndex',e);

      current = $.scrollify.current();
      if(current.data('section-name') == 'banner') {
        console.log('Banner');
        jQuery('.bg_top .bg_3d_text').removeClass('show_text');
        // jQuery('.main_wrapper .bg_image').removeClass('showimg');
        // jQuery('.main_wrapper .bg_image').removeClass('disphide');
        jQuery('.main_wrapper .img_container').removeClass('disphide');
        jQuery('.bg_top .bg_3d_image').removeClass('set');
        jQuery('.bg_top .bg_3d_image_inner').removeClass('set');
        jQuery('.bg_top .bg_3d_image').removeClass('set_scale');
        jQuery('.bg_top .bg_3d_image_inner').removeClass('set_scale');
        jQuery('.main_wrapper .bg_color').removeClass('disphide');
        jQuery('.main_wrapper .bg_color_inner').removeClass('disphide');
        // jQuery('.main_wrapper .bg_color').removeClass('hide_wrapper');
        setTimeout(function(){
          animate_sequence('reverse', 'img_set_1');
          jQuery('.main_wrapper .text_container').removeClass('set_it_right');
          jQuery('.main_wrapper .text_container_inner').removeClass('set_it_right');
        },500);
      }
      else if(current.data('section-name') == 'banner1'){

        // jQuery('.main_wrapper .bg_image').removeClass('showimg');
        jQuery('.main_wrapper .bg_color').removeClass('hide_wrapper');
        jQuery('.main_wrapper .bg_color_inner').removeClass('hide_wrapper');
        if(direction == 'down') {
          console.log('Banner 1 if');
          jQuery('.main_wrapper .text_container').addClass('set_it_right');
          jQuery('.main_wrapper .text_container_inner').addClass('set_it_right');
          jQuery('.main_wrapper .bg_color_inner').addClass('disphide');
          jQuery('.bg_top .bg_3d_image_inner').addClass('set');
          setTimeout(function(){
            jQuery('.bg_top .bg_3d_image_inner').addClass('set_scale');
          },500);
          animate_sequence('forward', 'img_set_1');
          setTimeout(function(){
            // jQuery('.main_wrapper .bg_image').addClass('showimg');
            // jQuery('.bg_top .bg_3d_text').addClass('show_text');
          // },700);
          },1200);
          setTimeout(function(){
            // jQuery('.main_wrapper .bg_image').addClass('showimg');
            // jQuery('.main_wrapper .bg_image').addClass('disphide');
            jQuery('.bg_top .bg_3d_text').addClass('show_text');
            jQuery('.main_wrapper .img_container').addClass('disphide');
            jQuery('.bg_top .bg_3d_image').addClass('set');
            jQuery('.main_wrapper .bg_color').addClass('disphide');
          },900);
          // },1300);
          setTimeout(function(){
            jQuery('.bg_top .bg_3d_image').addClass('set_scale');
          },1200);
          // },1600);
        }else {
          console.log('Banner 1 else');
          animate_sequence('reverse', 'img_set_2');
          jQuery('.bg_top .bg_3d_image').removeClass('set_scale_end');
          jQuery('.main_wrapper .text_container').removeClass('fade_it_out');
          jQuery('.main_wrapper .text_container_inner').removeClass('fade_it_out');
          jQuery('.bg_top .bg_3d_image').removeClass('set_scale_end_final');
        }
      }
      /*else if(current.data('section-name') == 'banner2') {
        jQuery('.main_wrapper .bg_image').addClass('showimg');
        jQuery('.main_wrapper .img_container').removeClass('disphide');
        jQuery('.main_wrapper').removeClass('hide_wrapper');
          if(direction == 'down') {
            animate_sequence('forward', 'img_set_2');
            jQuery('.main_wrapper .bg_image').addClass('showimg');
          }else {
            jQuery('.main_wrapper .bg_image').addClass('showimg');
            jQuery('.main_wrapper .img_container').removeClass('disphide');
            jQuery('.main_wrapper').removeClass('hide_wrapper');
            jQuery('.bg_top').removeClass('set');
          }
        }*/
        else if(current.data('section-name') == 'banner_main') {
          console.log('Banner Main');
          jQuery('.bg_top .bg_3d_image').addClass('set_scale_end');
          // jQuery('.bg_top .bg_3d_text').addClass('slide_up');
          jQuery('.main_wrapper .text_container').addClass('fade_it_out');
          jQuery('.main_wrapper .text_container_inner').addClass('fade_it_out');
          setTimeout(function(){
            jQuery('.bg_top .bg_3d_image').addClass('set_scale_end_final');
          },400);
          // animate_sequence('forward', 'img_set_2');
          // jQuery('.bg_3d_text #ktc_3dtext').addClass('scale_it');
          // jQuery('.main_wrapper .bg_image').addClass('zoomout');
          // jQuery('.main_wrapper .img_container .scroll-animation-42 svg #ktc3d_image').addClass('disphide');
          jQuery('.main_wrapper .img_container .scroll-animation-42').addClass('disphide');
          setTimeout(function(){
            // jQuery('.main_wrapper .bg_image').removeClass('showimg');
            jQuery('.main_wrapper .bg_color').addClass('hide_wrapper');
            jQuery('.main_wrapper .bg_color_inner').addClass('hide_wrapper');

            jQuery('.bg_top .bg_3d_image').addClass('set');
            jQuery('.bg_top .bg_3d_image_inner').addClass('set');
            jQuery('header').removeClass('header_minus100');
            jQuery('.shape-of-things .svg_wrapper').addClass('start_animate');
          },300);
          setTimeout(function(){
            jQuery('body').removeClass('overhidden');
            // jQuery('html, body').animate({
            //   scrollTop: jQuery("#auto_scroll_point").offset().top
            // }, 500);
            $.scrollify.destroy();
            jQuery(".sec_fixed").remove();
            locomotive();
            // scroller.scrollTo(auto_scroll_point);
          },600);
        }
        //Inner Pages
        else if(current.data('section-name') == 'banner_inner') {

        }

    },
    afterResize:function() {
      locomotive();
    },
    // after: function(e) {
    //   var postdirection,postIndex;
    //   postIndex = parseInt(jQuery('body').attr('data-postIndex'));
    //   if (e > postIndex){
    //     postdirection = "down";
    //     }else{
    //     postdirection = "up";
    //   }
    //   jQuery('body').attr('data-postIndex',e);
    //   currentafter = $.scrollify.current();
    //   if(currentafter.data('section-name') == 'banner1') {
    //     if(postdirection == 'down') {
    //       $.scrollify.move('#banner2');
    //     }else {
    //       $.scrollify.move('#banner');
    //     }
    //   }
    // },

    // after: function(e) {
    //   var postdirection,postIndex;
    //   postIndex = parseInt(jQuery('body').attr('data-postIndex'));
    //   if (e > postIndex){
    //     postdirection = "down";
    //     }else{
    //     postdirection = "up";
    //   }
    //   jQuery('body').attr('data-postIndex',e);
    //   currentafter = $.scrollify.current();
    //   if(currentafter.data('section-name') == 'banner2') {
    //     if(postdirection == 'down') {
    //       $.scrollify.instantMove('#banner_main');
    //     }else {
    //       $.scrollify.instantMove('#banner1');
    //       jQuery('.main_wrapper .bg_image').removeClass('showimg');
    //       jQuery('.main_wrapper .img_container').removeClass('disphide');
    //       jQuery('.main_wrapper').removeClass('hide_wrapper');
    //       animate_sequence('reverse', 'img_set_2');
    //     }
    //   }
    // },
  }); //......scrollify


  // var sec_height = $('.section_two').height();
  // console.log(sec_height);
  // var the_new_top = sec_height / 2;
  // $('.second_sec').css('top', '-'+the_new_top+'px');
  //
  // $('.contact-btn').on('click', function(){
  //   console.log('clickbait');
  //   $.scrollify.instantMove(3);
  //   // $.scrollify.instantMove('#banner_main');
  // });


  // var waypoint = new Waypoint({
  //   element: document.getElementById('section_start'),
  //   handler: function(direction) {
  //     if(direction == 'up') {
  //       // $.scrollify.enable();
  //     }
  //   }
  // });

  jQuery('.shape-of-things .title h3').click(function(){
    jQuery('.shape-of-things .svg_wrapper').toggleClass('start_animate');
  });

  // console.log('start');

  // console.log('end');
  // locomotive();
  jQuery(window).resize(function() {
    setTimeout(function(){
      locomotive();
    },500);
  });

  var check_home = jQuery('body').is('.page-template-home');
  if(check_home == false) {
    // locomotive();
  }

  // gsap.from(".frm_description", {
  //   scrollTrigger: {
  //     trigger: ".frm_description",
  //     scroller: ".main_scroller",
  //     scrub: true,
  //     start: "top bottom",
  //     end: "top top",
  //     onUpdate: self => console.log(self.direction)
  //   },
  //   scaleX: 0,
  //   transformOrigin: "left center",
  //   ease: "none"
  // });

  // jQuery(".load_more_btn").click( function(e) {
  jQuery(".news-main").on('click', '.load_more_btn', function(e) {
		 e.preventDefault();
		 var totalposts = jQuery(this).data("totalposts");
		 var countid = jQuery(this).data("count");
     var new_count = countid + 3;
		 jQuery.ajax({
				type : "post",
				url : ajaxurl,
				data : {action: "news_loadmore", post_id : countid},
				success: function(response) {
        // alert(response);
        jQuery('.load_more_btn').data('count', new_count);
				jQuery(".some_more_news").append(response);
			},
        complete: function () {
          var displayeditems = jQuery('.some_more_news .single_news_item').length;
          if(totalposts <= displayeditems) {
            jQuery('.load_more_btn').remove();
          }
        }
		 });
	});


  jQuery(".exp_category_single").click( function(e) {
     e.preventDefault();
     var id = jQuery(this).attr("id");
     if(id == 'all') {
        jQuery(".exp_category_single").removeClass('active');
      }else {
        jQuery(".exp_category_single").removeClass('active');
        jQuery(this).addClass('active');
      }
     jQuery.ajax({
        type : "post",
        url : ajaxurl,
        data : {action: "expcategory_items", post_id : id},
        success: function(response) {
                   // alert(response);
        jQuery(".main_exp_container").html(response);
      }
     });
  });


  function call_initial(){
     jQuery.ajax({
        type : "post",
        url : ajaxurl,
        data : {action: "expcategory_items", post_id : 'all'},
        success: function(response) {
        jQuery(".main_exp_container").html(response);
      }
     });
  }

  if($(".main_exp_container").length){
    call_initial();
  }



});//......documentready


function locomotive() {
  // const scroller = new LocomotiveScroll({
  //     el: document.querySelector('[data-scroll-container]'),
  //     smooth: true
  // })

  // gsap.registerPlugin(ScrollTrigger)


  // scroller.on('scroll', ScrollTrigger.update)

  // ScrollTrigger.scrollerProxy(
  //     '.container', {
  //         scrollTop(value) {
  //             return arguments.length ?
  //             scroller.scrollTo(value, 0, 0) :
  //             scroller.scroll.instance.scroll.y
  //         },
  //         getBoundingClientRect() {
  //             return {
  //                 left: 0, top: 0,
  //                 width: window.innerWidth,
  //                 height: window.innerHeight
  //             }
  //         }
  //     }
  // );
}


function animate_sequence(direction, set) {
  // console.log('forward');
  // var $pics = jQuery('.main_wrapper .scroll-animation');
  var $picsAll = jQuery('.main_wrapper .scroll-animation');
  var $pics = jQuery('.main_wrapper .'+set+' .scroll-animation');
  var time = timePerFrame;

  if(direction == 'forward'){
    // jQuery('.main_wrapper .bg_image').delay(600).animate({opacity: '1'}, 300);
    $pics.each(function(){
      var obj = jQuery(this);
      setTimeout( function(){
        $picsAll.css("opacity", 0);
        obj.css("opacity", 1);
      }, time)
        time += timePerFrame;
    });
  }else if(direction == 'reverse') {
    // jQuery('.main_wrapper .bg_image').delay(600).animate({opacity: '0'}, 300);
    $pics.reverse().each(function(){
      var obj = jQuery(this);
      setTimeout( function(){
        $picsAll.css("opacity", 0);
        obj.css("opacity", 1);
      }, time)
        time += timePerFrame;
    });
  }
}

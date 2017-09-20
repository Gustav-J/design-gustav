$(document).ready(function() {

    FastClick.attach(document.body);
    $(".category__content input").prop('disabled', true);

		$(".feedback--success").fadeIn().delay(2500).fadeOut("slow");
		$(".feedback--success__overlay").fadeIn().delay(2500).fadeOut("slow");


    $(".category .category__head").click(function() {
        $(this).toggleClass("active");

        if ($(this).next("div.category__content").is(":visible")) {
            $(this).parent().find(".category__content input").prop('disabled', true);
            $(this).next("div").slideUp(400);
        } else {
            /* $(".category .category__content").slideUp("fase"); */
            $(this).next("div").slideToggle(400);
            $(this).parent().find(".category__content input").prop('disabled', false);
        }
    });

          var preloadFrames = function(pictureUrls, callback) {
          var i,
              j,
              loaded = 0;

          for (i = 0, j = pictureUrls.length; i < j; i++) {
              (function (img, src) {
                  img.onload = function () {
                      if (
                        ++loaded == pictureUrls.length &&
                        callback
                      ) {
                          callback();
                      }
                  };
                  img.src = src;
              } (new Image(), pictureUrls[i]));
          }
      };

      var aImg = [
                '../images/hero/hero-1.jpg',
                '../images/hero/hero-2.jpg',
                '../images/hero/hero-3.jpg',
                '../images/hero/hero-4.jpg',
                '../images/hero/hero-5.jpg',
                '../images/hero/hero-8.jpg',
           ],
           oHeader = $('.hero--front'),
           iFrameCount = aImg.length,
           iCurFrame = 0,
           iSpeed = 2000;

          preloadFrames(aImg, function(){

            var headerAnimation = setInterval(function() {
               if (iCurFrame >= iFrameCount) {
                   iCurFrame = 0;
                   //clearInterval(headerAnimation);
               }
               oHeader.css(
                   'background-image', 'url(' + aImg[iCurFrame] + ')'
               );
               iCurFrame++;
           }, iSpeed);
          });



    $(".header__menu-trigger").click(function() {
        $('body').toggleClass("noscroll");
        $(this).toggleClass("is-active");
        $(".header__menu").toggleClass("is-active");
        $(".menu-main__overlay").toggleClass("menu-main__overlay--is-active");
    });

    $(".t-dropdown-menu").click(function(e) {
          $(this).next(".dropdown-menu__content").toggleClass("active");
      });

    $(function(){
        $(document).scroll(function(){
            if($(this).scrollTop() >= $('.scrollto').offset().top - 800) {
                $(".scrollto").addClass("scrollto--animate");
            }
        });
    });



    jQuery('img.svg').each(function(){
      var $img = jQuery(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');

      jQuery.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass+' replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr('xmlns:a');

          // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
          if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
              $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
          }

          // Replace image with new SVG
          $img.replaceWith($svg);

      }, 'xml');

  });


  $('.t-dialog--register').click(function() {
      $('.dialog--register').show();
      $('.dialog--register').removeClass("dialog--closed");
      $('.dialog__overlay').show();
      $('body').toggleClass("noscroll");
      return false;
  });

  $('.t-dialog--login').click(function() {
      $('.dialog--login').show();
      $('.dialog--login').removeClass("dialog--closed");
      $('.dialog__overlay').show();
      $('body').toggleClass("noscroll");
      return false;
  });

  $('.t-close-dialog').click(function() {
      $('body').removeClass("noscroll");
      $(this).parent().addClass("dialog--closed");
      $('.dialog__overlay').hide();
      return false;
  });

});

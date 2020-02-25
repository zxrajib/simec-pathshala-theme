(function($) {
    "use strict";
    if (window.location.hash) scroll(0, 0);
    setTimeout(function () {
        scroll(0, 0);
    }, 1);
    $('.scroll a').on('click', function () {
        let hash = $('#' + $(this).attr('href').split('#')[1]);
        
        if (hash.length) {
            $('html, body').animate({
                scrollTop: $(hash).offset().top + 'px'
            }, 1000, 'swing');
            return false;
        }
        return true;
    });

    if (window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1000, 'swing');
    }

/********************* Owl Carousel ************************/

   $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    autoplay:true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 6,
        nav: true,
        loop: false,
        margin: 20
      }
    }
  })

})(jQuery);
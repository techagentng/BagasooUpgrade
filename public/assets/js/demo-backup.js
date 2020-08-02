var $instagramSlick = $('.js-br-card-instagram-mobile');
var detectViewPort = function() {
var viewPortWidth = $(window).width();
  if (viewPortWidth < 768) {
    if (! $instagramSlick.hasClass('slick-initialized')) {
      $('.js-br-card-instagram-mobile').slick({
        slidesToShow: 2, 
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        responsive: [
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          }
        }
        ]
      });
    }
  } else {
    if ($instagramSlick.hasClass('slick-initialized')) {
      $('.js-br-card-instagram-mobile').slick('destroy');
    }
  }
};

  detectViewPort();
  $(window).resize(function () {
     detectViewPort();
  });
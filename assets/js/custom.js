$('.slick_slide').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,

  prevArrow: '<span class="slick_btn_left" type="button"><i class="bi bi-arrow-left-circle"></i></span>',
  nextArrow: '<span class="slick_btn_right" type="button"><i class="bi bi-arrow-right-circle"></i></span>',

  // prevArrow: true,
  // nextArrow: $('.slick-prev:before'),

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        prevArrow: '<span class="slick_btn_left" type="button"><i class="bi bi-arrow-left-circle"></i></span>',
        nextArrow: '<span class="slick_btn_right" type="button"><i class="bi bi-arrow-right-circle"></i></span>',

      }
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: false,
        nextArrow: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.center_slide').slick({

  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});


var base_url = $('#theme_base_url').val();
// calender
$(document).ready(function(){
  $('#datepicker').datepicker({
    inline:true,
    firstDay: 1,
    showOtherMonths:true,
    dayNamesMin:['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
  })
});

// chnage-password-form
$(document).ready(function(){
  $(".new-add").click(function(){
    $(".ship-address").show();
  });

  $(".ship-close").click(function(){
    $(".ship-address").hide();
  })
});

// home banner slider
$(".categories-slider").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: true,
  navText: [
    "<img src='"+base_url+"/assets/images/home/Arrowleft.svg'>",
    "<img src='"+base_url+"/assets/images/home/arrowRight.svg'>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 2,
    },
    768: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1000: {
      items: 2,
    },
    1200: {
      items: 3,
    },
    1300: {
      items: 3,
      dots: false,
    },
  },
});

//
$(".testimonials-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  autoplay: true,
  autospeed: 1000,
  navText: [
    "<img src='"+base_url+"/assets/images/home/Arrowleft.svg'>",
    "<img src='"+base_url+"/assets/images/home/arrowRight.svg'>",
  ],
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

$(document).ready(function () {
  "use strict";

  var c,
    currentScrollTop = 0,
    navbar = $("header");

  $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      navbar.addClass("scrollUp");
    } else if (c > currentScrollTop && !(a <= b)) {
      navbar.addClass("scrollDown");
      navbar.removeClass("scrollUp");
    }
    c = currentScrollTop;

    if (a == 0) {
      navbar.removeClass("scrollDown");
      $(".light-image").addClass("d-block");
      $(".light-image").removeClass("d-none");
    } else {
      $(".light-image").removeClass("d-block");
      $(".light-image").addClass("d-none");
    }
  });
});

// home banner slider
$(".banner-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  responsive: {
    0: {
      items: 1,
      dots: true,
    },
    600: {
      items: 1,
      dots: true,
    },
    1000: {
      items: 1,
      dots: true,
    },
  },
});

// home top-rating-slider
$(".top-rating-slider").owlCarousel({
  loop: true,
  margin: 25,
  nav: true,
  dots: false,
  navText: [
    "<img src='"+base_url+"/assets/images/home/Arrowleft.svg'>",
    "<img src='"+base_url+"/assets/images/home/arrowRight.svg'>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 3,
    },
    1300: {
      items: 4,
      dots: false,
    },
  },
});

// -----check-out-page-slider---
// -----owl-slider-3---
$(".owl-3").owlCarousel({
  loop: true,
  margin: 5,
  nav: false,

  // autoplay:true,
  responsive: {
    0: {
      items: 2,
      dots: false,
      nav: false,
      margin: 10,
    },
    576: {
      items: 4,
      margin: 20,
      dots: false,
      nav: false,
    },
    600: {
      items: 3,
      dots: false,
      nav: false,
    },
    768: {
      items: 3,
      dots: false,
      margin: 20,
    },
    992: {
      items: 3,
      dots: false,
      nav: false,
    },
    1000: {
      items: 3,
      dots: false,
      nav: false,
    },
    1200: {
      items: 4,
      dots: false,
      margin: 20,
      nav: false,
    },
    1400: {
      items: 5,
      dots: false,
      nav: false,
      // autoplay:true,
    },
  },
});

// =====product-detalis-slider-js----------
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 20,
  slidesPerView: 3,
  loop: true,
  autoplay: false,
  //   autoplay: {
  //     delay: 2500,
  //     disableOnInteraction: true,
  //   },
  // breakpoints: {
  //     768: {
  //         slidesPerView: 2,
  //       },
  //   },
});

var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  slidesPerView: 1,
  loop: true,
  autoplay: false,
  //   autoplay: {
  //     delay: 2500,
  //     disableOnInteraction: true,
  //   },
  // breakpoints: {
  //     400: {
  //         slidesPerView: 1,
  //         spaceBetween: 0,
  //       },
  //     640: {
  //       slidesPerView: 1,
  //       spaceBetween: 20,
  //     },
  //   },
  thumbs: {
    swiper: swiper,
  },
});

//   -----checkout-image-choose---
var loadFile = function (event) {
  var output = document.getElementById("output");
  output.src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function () {
  $(".choose-btn").click(function () {
    $("input[type='file']").trigger("click");
  });
});

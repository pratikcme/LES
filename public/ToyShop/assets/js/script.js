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

// ----category-silder--
$(".category-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 2,
    },
    768: {
      items: 3,
    },
    992: {
      items: 4,
    },
    1200: {
      items: 5,
    },
    1300: {
      items: 6,
      dots: false,
    },
  },
});

// ---new-arriv-product--
$(".new-arrive-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
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
    1200: {
      items: 4,
    },
    1300: {
      items: 4,
      dots: false,
    },
  },
});

// ---about-slider
$(".client-testimonial-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1200: {
      items: 1,
    },
    1300: {
      items: 1,
      dots: false,
    },
  },
});

// =====product-detalis-slider-js----------
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 20,
  slidesPerView: 3,
  loop: true,
  autoplay: false,
  // direction: "verrtical",
  // direction: 'vertical',
  // upadteOnWindowResize:false,

  //   autoplay: {
  //     delay: 2500,
  //     disableOnInteraction: true,
  //   },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
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

$(document).ready(function () {
  $(".choose-btn").click(function () {
    $("input[type='file']").trigger("click");
  });
});

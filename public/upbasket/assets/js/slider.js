$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// accordion js
$(document).ready(function () {
  $(".accordion-items").on("click", ".accordion-heading", function () {
    $(this).toggleClass("active").next().slideToggle();

    $(".accordion-content").not($(this).next()).slideUp(300);

    $(this).siblings().removeClass("active");
  });
});

// zoom
// var paneContainer = document.querySelector(".zoom");

// $(".swiper-slide").each(function () {
//   new Drift($(this).find("img")[0], {
//     paneContainer: paneContainer,
//     inlinePane: false,
//   });
// });

// ---- slider-js------
$(".owl-1").owlCarousel({
  loop: true,
  margin: 5,
  // rtl: true,
  nav: true,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 3,
      dots: false,
      margin: 40,
    },
    320: {
      items: 3,
      dots: false,
      margin: 20,
    },
    414: {
      items: 4,
      dots: false,
      margin: 40,
    },
    540: {
      items: 5,
      dots: false,
      margin: 0,
    },
    600: {
      items: 4,
      dots: false,
    },
    768: {
      items: 4,
      dots: false,
      margin: 50,
    },
    992: {
      items: 3,
      dots: false,
    },
    1000: {
      items: 4,
      dots: false,
    },
    1200: {
      items: 6,
      dots: false,
    },
  },
});

// --------latest-productd-slider--------
$(".owl-2").owlCarousel({
  loop: true,
  margin: 25,
  // rtl: true,
  nav: true,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 1,
      dots: false,
      margin: 10,
    },
    390: {
      items: 1,
      dots: false,
      margin: 10,
    },
    400: {
      items: 2,
      margin: 20,
      dots: false,
    },
    600: {
      items: 2,
      margin: 20,
      dots: false,
    },
    768: {
      items: 2,
      dots: false,
      margin: 20,
    },
    992: {
      items: 2,
      dots: false,
      margin: 20,
    },
    1000: {
      items: 3,
      dots: false,
      margin: 20,
    },
    1200: {
      items: 3,
      dots: false,
      margin: 20,
    },
    1400: {
      items: 4,
      dots: false,
    },
  },
});

// -----owl-slider-3---
$(".owl-3").owlCarousel({
  loop: true,
  margin: 5,
  // rtl: true,
  nav: false,

  // autoplay:true,
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 3,
      dots: false,
      margin: 20,
    },
    600: {
      items: 3,
    },
    768: {
      items: 3,
      dots: false,
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

// ---------about-page-slider-----
$(".owl-4").owlCarousel({
  loop: true,
  margin: 3,
  // rtl: true,
  nav: false,
  center: true,
  dots: true,
  // autoplay:true,
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 1,
      dots: true,
      margin: 20,
    },
    600: {
      items: 2,
      margin: 20,
    },
    768: {
      items: 2,
      dots: true,
      margin: 30,
    },
    992: {
      items: 3,
      dots: true,
      nav: false,
      margin: 30,
    },
    1000: {
      items: 3,
      dots: true,
      nav: false,
      margin: 30,
    },
    1200: {
      items: 3,
      dots: true,
      margin: 30,
      nav: false,
    },
    1400: {
      items: 3,
      dots: true,

      nav: false,

      // autoplay:true,
    },
  },
});

// ---------listing-sub-lisitng-slider-----
$(".owl-5").owlCarousel({
  loop: true,
  items: 6,
  // rtl: true,
  margin: 5,
  nav: false,
  // center:true,
  dots: true,
  // autoplay:true,
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 4,
      dots: false,
      margin: 8,
    },
    600: {
      items: 4,
      dots: false,
      margin: 5,
    },
    768: {
      items: 4,
      dots: false,
      margin: 30,
    },
    992: {
      items: 3,
      dots: false,
      nav: false,
      margin: 30,
    },
    1000: {
      items: 4,
      dots: false,
      nav: false,
      margin: 30,
    },
    1200: {
      items: 5,
      dots: false,
      margin: 10,
      nav: false,
    },
    1400: {
      items: 6,
      dots: false,
      nav: false,
      margin: 5,
    },
  },
});

// ---------------------------
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
  //     400: {
  //         slidesPerView: 1,
  //         spaceBetween: 50,
  //       },
  //     640: {
  //       slidesPerView: 1,
  //       spaceBetween: 20,
  //     },
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

if ($("body").hasClass("rtl")) {
  $(".owl-carousel").addClass("");
}

// $(document).ready(function () {
//   $("#table-two-axis").basictable();
// });


//   -----checkout-image-choose---
var loadFile = function (event) {
  var output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function () {
  $(".choose-btn").click(function () {
    $("input[type='file']").trigger('click');
  });
});

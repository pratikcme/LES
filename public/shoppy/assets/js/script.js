$(document).ready(function () {
  var siteCurrency = $("#siteCurrency").val();

  $(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 10000,
      values: [0, 0],
      slide: function (event, ui) {
        $("#siteCurr").remove();
        $("#amount").val(
          siteCurrency + " " + ui.values[0] + "-" + siteCurrency + ui.values[1]
        );
        var cat_id = $("#cat_id").val();
        var sub_id = $("#sub_cat_id").val();
        st_price = ui.values[0];
        en_price = ui.values[1];
        onload(
          1,
          sub_id,
          cat_id,
          (sort = ""),
          (search = ""),
          st_price,
          en_price
        );
      },
    });

    $("#amount").val(
      $("#slider-range").slider("values", 0) +
        "-" +
        $("#slider-range").slider("values", 1)
    );
  });
});

// calender
$(document).ready(function () {
  $("#calendar").datepicker({
    inline: true,
    firstDay: 1,
    showOtherMonths: true,
    dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
  });
});

// chnage-password-form
$(document).ready(function () {
  $(".new-add").click(function () {
    $(".ship-address").show();
  });

  $(".ship-close").click(function () {
    $(".ship-address").hide();
  });
});

$(".simple").owlCarousel({
  loop: true,
  margin: 20,
  items: 2,
  nav: true,
  // rtl:true,
  dots: false,
  autoplay: false,
  navigation: true,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  autoplayHoverPause: true,
  autoplaySpeed: 500,
  responsive: {
    320: {
      items: 1,
    },
    430: {
      items: 1.5,
    },
    575: {
      items: 2.5,
    },
    600: {
      items: 2.5,
    },
    615: {
      items: 2.5,
    },
    991: {
      items: 3.5,
    },
    1000: {
      items: 4.5,
    },
    1400: {
      items: 4.5,
    },
    1700: {
      items: 4.5,
    },
    2000: {
      items: 4.5,
    },
    2400: {
      items: 4.5,
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
      items: 1,
      dots: false,
      nav: false,
    },
    300: {
      items: 3,
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

$("#client-slide").owlCarousel({
  center: true,
  loop: true,
  dots: false,
  margin: 15,
  nav: true,
  navigation: true,
  autoplay: false,
  // rtl:true,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  autoplayTimeout: 5000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    767: {
      items: 2,
      center: false,
    },
    992: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 3,
    },
  },
});

$("#client-slide").on("changed.owl.carousel", function (event) {
  console.log(event.item.count);
  $(".offering .owl-carousel .owl-item").removeClass("test1");
  $(".offering .owl-carousel .owl-item").removeClass("test2");
  $(".offering .owl-carousel .owl-item").removeClass("test3");
  $(".offering .owl-carousel .owl-item").removeClass("test4");

  setTimeout(function () {
    $(".offering .owl-carousel .owl-item.active").each(function (i) {
      var classes = "test" + (i + 1);
      $(this).addClass(classes);
    });
  }, 50);
});

$(document).ready(function () {
  $(".offering .owl-item").removeClass("test1");
  $(".offering .owl-item").removeClass("test2");
  $(".offering .owl-item").removeClass("test3");
  $(".offering .owl-item").removeClass("test4");
  $(".offering .owl-carousel .owl-item.active").each(function (i) {
    var classes = "test" + (i + 1);
    $(this).addClass(classes);
  });
});

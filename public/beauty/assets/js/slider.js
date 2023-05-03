
// ---- slider-js------
$('.owl-1').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    navText: ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:2,
            dots:false,
            margin:40,
        },
        320:{
            items:2,
            dots:false,
            margin:20,
        },
        414:{
            items:2,
            dots:false,
            margin:20,
        },
        425:{
            items:3,
            dots:false,
            margin:20,
        },
        540:{
            items:3,
            dots:false,
            margin:0,
        },
        600:{
            items:3,
            dots:false,
        },
        768:{
            items:4,
            dots:false,
            margin:50,
        },
        992:{
            items:5,
            dots:false,
        },
        1000:{
            items:5,
            dots:false,
        },
        1200:{
            items:7,
            dots:false,
        }

    }
});



// --------latest-productd-slider--------
$('.owl-2').owlCarousel({
  loop:true,
  margin:20,
  nav:false,
  dots:true,
  responsive:{
      0:{
          items:1
      },
      300:{
          items:1,
          dots:false,
          margin: 10,
      },

      430:{
        items:2,
        dots:false,
        margin: 10,
      },
      
      600:{
          items:2,
          margin: 20,
          dots:false,
      }, 
       768:{
          items:2,
          dots:false,
          margin: 20,
      },
      992:{
          items:3,
          dots:false,
          margin: 20,
          nav:false,
      },
      1000:{
          items:3,
          dots:true,
          margin: 20,
          nav:false,
      },
      1200:{
          items:3,
          dots:true,
          margin: 20,
          nav:false,
      },
      1400:{
          items:4,
          dots:true,
          nav:false,
          
      }
  }
});

  // -----check-out-page-slider---
  // -----owl-slider-3---
  $('.owl-3').owlCarousel({
      loop:true,
      margin:5,
      nav:false,
      
      // autoplay:true,
      responsive:{
          0:{
              items:1,
              dots:false,
              nav:false,
          },
          300:{
              items:3,
              margin: 20,
              dots:false,
              nav:false,
          },
          600:{
              items:3,
              dots:false,
              nav:false,
          }, 
          768:{
              items:3,
              dots:false,
              margin: 20,
          },
          992:{
              items:3,
              dots:false,
              nav:false,
          },
          1000:{
              items:3,
              dots:false,
              nav:false,
          },
          1200:{
              items:4,
              dots:false,
              margin: 20,
              nav:false,
          },
          1400:{
              items:5,
              dots:false,
              nav:false,
              // autoplay:true,
              
          }
      }
  });




// =====product-detalis-slider-js----------
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    slidesPerView: 3,
    loop: true,
    autoplay:false,
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
    autoplay:false,
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
    dots:true,
    margin: 15,
    nav: false,
    navigation: false,
    autoplay: false,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      767: {
        items: 2,
        center: false,
        nav: false,
      },
      992: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
      },
      1200: {
        items: 3,
        nav: false,
      },
      1400: {
        nav: false,
      },
    }
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



// -------mousepointer-event-js--
  $maxRange = 6;
  $multi = 0.1;
  $OldPosX = 0;
  $OldPosY = 0;
  $PositionY = -5;
  $PositionX = -5;
  $img = document.getElementById("Image");

  function moveMouse() {
    CursorX = event.clientX;
    CursorY = event.clientY;

    if ($OldPosX <= CursorX) {
      $PositionX = $PositionX + ($multi * 1);
    } else {
      $PositionX = $PositionX - ($multi * 1);
    }

    if ($PositionX >= $maxRange || $PositionX <= -$maxRange) {
      if ($PositionX >= $maxRange) {
        $PositionX = $maxRange;
      } else {
        $PositionX = -$maxRange;
      }
    }

    $OldPosX = CursorX;

    if ($OldPosY <= CursorY) {
      $PositionY = $PositionY + ($multi * 1);
    } else {
      $PositionY = $PositionY - ($multi * 1);
    }

    if ($PositionY >= $maxRange || $PositionY <= -$maxRange) {
      if ($PositionY >= $maxRange) {
        $PositionY = $maxRange;
      } else {
        $PositionY = -$maxRange;
      }
    }


    $OldPosY = CursorY;
    $img.style.transform = "translateY(" + $PositionY + "%) translateX(" + $PositionX + "%)";
  }



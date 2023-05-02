// -----------zoom-effect--
if ($(window).width() >= 992) {
  var paneContainer = document.querySelector(".zoom");
  $(".swiper-slide").each(function () {
    new Drift($(this).find("a > img")[0], {
      paneContainer: paneContainer,
      inlinePane: false,
    });
  });
}

// ----resposnive-zoom-effect--
if ($(window).width() <= 991) {
  $("img[data-enlargable]")
    .addClass("img-enlargable")
    .click(function () {
      var src = $(this).attr("src");
      $("<div>")
        .css({
          background: "RGBA(0,0,0,.5) url(" + src + ") no-repeat center",
          backgroundSize: "100% 100%",
          width: "100%",
          height: "100%",
          position: "fixed",
          zIndex: "100000000",
          top: "0",
          left: "0",
          cursor: "zoom-out",
        })
        .click(function () {
          $(this).remove();
        })
        .appendTo("body");
    });
}

//   -----checkout-image-choose---
var loadFile = function (event) {
  var output = document.getElementById("output");
  output.src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function () {
  $(".button").click(function () {
    $("input[type='file']").trigger("click");
  });
});

// -----cart-sidenav-dropdown-js---

let filterdiv = document.querySelector(".my-filter-wrapper");
let leftdiv = document.querySelector(".show-div-wrapper");
let hidedivebtn = document.querySelector(".filter-hide-btn");

hidedivebtn.addEventListener("click", (event) => {
  filterdiv.classList.toggle("hide");
  leftdiv.classList.toggle("hide");
});

// -----------mobile-sidenav-------
let mobileopenbtn = document.querySelector(".mobile-filter-btn");
let closebtn = document.querySelector(".closebtn");
let mysidebar = document.querySelector(".sidepanel");
let ovelaybg = document.querySelector(".mobile-btn-overlay");

mobileopenbtn.addEventListener("click", (event) => {
  mysidebar.classList.toggle("active");
  ovelaybg.classList.toggle("active");
});

closebtn.addEventListener("click", (event) => {
  mysidebar.classList.remove("active");
  ovelaybg.classList.remove("active");
});

mobileopenbtn.addEventListener("blur", (event) => {
  mysidebar.classList.remove("active");
  ovelaybg.classList.remove("active");
});

ovelaybg.addEventListener("click", (event) => {
  mysidebar.classList.remove("active");
  ovelaybg.classList.remove("active");
});

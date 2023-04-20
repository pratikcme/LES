function myFunction(x) {
  x.classList.toggle("fa-solid");
}

// ---------my-acoount-table-js--
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// <!-- --responisive-table-js--- -->
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// -----counter-js---
// var buttonPlus  = $(".qty-btn-plus");
// var buttonMinus = $(".qty-btn-minus");

// var buttonPlus  = $(".qty-btn-plus");
//             var buttonMinus = $(".qty-btn-minus");

//             var incrementPlus = buttonPlus.click(function() {
//             var $n = $(this)
//             .parent(".qty-container")
//             .find(".input-qty");
//             $n.val(Number($n.val())+1 );
//             });

//             var incrementMinus = buttonMinus.click(function() {
//             var $n = $(this)
//             .parent(".qty-container")
//             .find(".input-qty");
//             var amount = Number($n.val());
//             if (amount > 0) {
//                 $n.val(amount-1);
//             }
// });

// -----checkout-page-accordion----
$(document).ready(function () {
  $(".accordion-items").on("click", ".accordion-heading", function () {
    // $(".accordion-heading").removeClass("active");
    $(this).toggleClass("active").next().slideToggle();

    $(".accordion-content").not($(this).next()).slideUp(300);
    $(this).siblings().removeClass("active");
  });
});

// ============= place order modal js ===========
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function () {
  modal.style.display = "block";
};
span.onclick = function (event) {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// ============= place order modal js ===========
// var modal = document.getElementById("myModals");
// var btn = document.getElementById("myBtns");
// var span = document.getElementsByClassName("close")[0];
// btn.onclick = function () {
//   modal.style.display = "block";
// };
// span.onclick = function (event) {
//   modal.style.display = "none";
// };

// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

// let openbtn = document.querySelector(".openbtn");
// let mobileopenbtn = document.querySelector(".mobile-filter-btn");
// let closebtn = document.querySelector(".closebtn");
// let mysidebar = document.querySelector(".sidepanel");

// openbtn.addEventListener('click', (event) => {
//     mysidebar.classList.toggle('active');
// });
// mobileopenbtn.addEventListener('click', (event) => {
//     mysidebar.classList.toggle('active');
// });
// closebtn.addEventListener('click', (event) => {
//     mysidebar.classList.remove('active');
// });

// openbtn.addEventListener('blur', (event) => {
//     mysidebar.classList.remove('active');
// });

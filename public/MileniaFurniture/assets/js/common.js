function myFunction(x) {
  x.classList.toggle("fa-solid");
}


// -----counter-js---
// var buttonPlus = $(".qty-btn-plus");
// var buttonMinus = $(".qty-btn-minus");

// var buttonPlus = $(".qty-btn-plus");
// var buttonMinus = $(".qty-btn-minus");

// var incrementPlus = buttonPlus.click(function () {
//   var $n = $(this).parent(".qty-container").find(".input-qty");
//   $n.val(Number($n.val()) + 1);
// });

// var incrementMinus = buttonMinus.click(function () {
//   var $n = $(this).parent(".qty-container").find(".input-qty");
//   var amount = Number($n.val());
//   if (amount > 0) {
//     $n.val(amount - 1);
//   }
// });

// ---------my-acoount-table-js--
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// <!-- --responisive-table-js--- -->
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// -----checkout-page-accordion----
// $(document).ready(function () {
//   $(".accordion-heading").on("click", function () {
//     $(this).addClass("active");
//     $(this).next().addClass("test");
//     $(this).next().slideToggle();

//     // $(".accordion-heading").removeClass("active");
//     // $(this).toggleClass("active").next().slideToggle();

//     // $(".accordion-content").not($(this).next()).slideUp(300);
//     // $(this).siblings().removeClass("active");
//   });
// });


$(document).ready(function () {
  $(".accordion-items").on("click", ".accordion-heading", function () {
    console.log('click',$(this).parent().hasClass("openAcc"))
    if (!$(this).parent().hasClass("openAcc")) {
      console.log('add')
      $(this).parent().siblings().removeClass("openAcc");
      $(this).parent().addClass("openAcc");
    }
    else{
      console.log('remove')
      $(this).parent().removeClass("openAcc");
    }
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

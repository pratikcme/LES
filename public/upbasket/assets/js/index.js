$(document).ready(function () {
  $(".new-add").click(function () {
    $(".ship-address").show();
  });

  $(".ship-close").click(function () {
    $(".ship-address").hide();
  })
});

new WOW().init();

// -------shop-cart-counter-count-js---------

$(document).ready(function () {
  $(".quantity__trigger").click(function () {
    var $input = $(this).closest(".quantity-counter").find(".value");
    if ($(this).hasClass("increment")) $input.val(parseInt($input.val()) + 1);
    else if ($input.val() >= 1) $input.val(parseInt($input.val()) - 1);
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
//===========DATEPICKER CHECKOUT=====
var is_self_pickup = $('#CheckisSelfPickup').val();

if (is_self_pickup == 0) {
  var minDate = 2;
  var maxDate = "2d";
} else {
  var minDate = 0;
  var maxDate = "6d";
}

$(function () {
  if ($("#datepicker").length) {
    $("#datepicker").datepicker(
      {
        minDate: minDate,
        maxDate: maxDate,
        dateFormat: 'D,dd-mm-yy'
      }
    );
  }
});

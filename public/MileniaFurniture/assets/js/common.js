function myFunction(x) {
  x.classList.toggle("fa-solid");
}

$(document).ready(function () {
  var information = $("#information").val();

  if (information == "0") {
    $(".discnt").remove();
    $(".hot-products-cart-wrap").remove();
    $(".price-wrap").remove();
    $(".rating-furni").remove();
    $(".rating-starts").remove();
    $(".product-detail-quentity").remove();
    $("#dynamic_price").remove();
    $(".fadeInRight").remove();
    $(".review_show").remove();
  }
});
// $(document).ready(function(){
//   $(".close-btn").click(function(){
//    alert(0);
//   });
// });

// $(document).on("click",".close-btn",function(){
//   $(".cart-dropdowns").hide();

// })

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

$(function () {
  var timeoutId;
  $("#price-range").slider({
    step: 1,
    range: true,
    min: 0,
    max: 20000,
    values: [0, 20000],
    slide: function (event, ui) {
      $("#priceRange").val(ui.values[0] + " - " + ui.values[1]);

      st_price = ui.values[0];
      en_price = ui.values[1];

      clearTimeout(timeoutId);

      timeoutId = setTimeout(function () {
        onload(
          1,

          (sort = ""),
          (search = ""),
          st_price,
          en_price
        );
      }, 700);
    },
  });
  $("#priceRange").val(
    $("#price-range").slider("values", 0) +
      " - " +
      $("#price-range").slider("values", 1)
  );
});

$(function () {
  var timeoutId;
  $("#price-range_mob").slider({
    step: 1,
    range: true,
    min: 0,
    max: 20000,
    values: [0, 20000],
    slide: function (event, ui) {
      $("#priceRange_mob").val(ui.values[0] + " - " + ui.values[1]);
      // var cat_id = $("#cat_id").val();
      // var sub_id = $("#sub_cat_id").val();
      st_price = ui.values[0];
      en_price = ui.values[1];
      clearTimeout(timeoutId);
      timeoutId = setTimeout(function () {
        onload(
          1,
          //  sub_id,
          // cat_id,
          (sort = ""),
          (search = ""),
          st_price,
          en_price
        );
      }, 700);
    },
  });
  $("#priceRange_mob").val(
    $("#price-range_mob").slider("values", 0) +
      " - " +
      $("#price-range_mob").slider("values", 1)
  );
});

function onload(
  page,
  sub_id = "",
  cat_id = "",
  sort = "",
  search = "",
  start_price,
  end_price
) {
  var search = $("#search_product").val();
  var url = $("#url").val();
  var rangeArray = [];
  var getCatByURL = $("#getBycatID").val();
  // var rangeArray = get_filter('range');
  // var rangeArray = $('#start_range').val();
  // alert(rangeArray);
  var discountArray = get_filter("discount");
  var brandArray = get_filter("brand");
  var subcatArray = get_filter("subcategory_id");
  var categoryArray = get_filter("category_id");

  var catwithsubArray = [];

  if ($.inArray("All", categoryArray) !== -1) {
    $(".subcategory_id").each(function () {
      catwithsubArray.push($(this).val());
    });
  } else {
    $.each(categoryArray, function (index, catid) {
      $(".subcategoryId" + catid).each(function () {
        catwithsubArray.push($(this).val());
      });
    });
  }
  if (subcatArray.length != 0) {
    $.each(subcatArray, function (index, subcatid) {
      catwithsubArray.push(subcatid);
    });
  }
  if (catwithsubArray.length != 0) {
    cat_id = "";
  }

  var range = $("#priceRange").val();
  if (range != "") {
    var numbers = range.split(" - ");

    // Store the values in separate variables
    var start_price = parseInt(numbers[0]);
    var end_price = parseInt(numbers[1]);
  }

  var slider = "1";
  $.ajax({
    url: url + "products/subcategory/" + page,
    data: {
      search: search,
      sort: sort,
      sub_id: sub_id,
      cat_id: cat_id,
      brandArray: brandArray,
      subcatArray: subcatArray,
      categoryArray: categoryArray,
      catwithsubArray: catwithsubArray,
      start_price: start_price,
      end_price: end_price,
      discountArray: discountArray,
      page: page,
      getCatByURL: getCatByURL,
      slider: slider,
    },
    method: "post",
    dataType: "json",
    success: function (output) {
      // console.log(output);
      $("#ajaxProduct").html(output.result);

      if (cat_id != "") {
        $("#sd").css("display", "block");
        $("#short").html(output.short_li);
        $("#long").html(output.long_li);
      } else {
        $("#sd").css("display", "none");
      }
      $(".cate_id").each(function () {
        var value = $(this).data("cate_id");
        if (cat_id == value) {
          $(this).addClass("active");
        } else {
          $(this).removeClass("active");
        }
      });
      $(".sub_cat_link").removeClass("active_sub");
      $(".sub_cat_link").each(function () {
        var val = $(this).data("sub_id");
        if (sub_id == val) {
          $(this).addClass("active_sub");
        }
      });
    },
  });
}

// ---------my-acoount-table-js--
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// <!-- --responisive-table-js--- -->
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

let hidedivebtn2 = document.querySelector(".filter-hide-btn");
let filterbtnicon = document.querySelector(".filter-arrow-icon");

hidedivebtn2.addEventListener("click", (event) => {
  filterbtnicon.classList.toggle("active");
});

// -----checkout-page-accordion----

// ============= place order modal js ===========
// var modal = document.getElementById("myModal");
// var btn = document.getElementById("myBtn");
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

function zoom() {
  if ($(window).width() >= 992) {
    var paneContainer = document.querySelector(".zoom");
    $(".swiper-slide").each(function () {
      new Drift($(this).find("a > img")[0], {
        paneContainer: paneContainer,
        inlinePane: false,
      });
    });
  }
}

function ReinitSlider() {
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
}

$(document).on("click", "#reviewModel", function () {
  $(".fa-star").removeClass("active");
  $("#Comments").val("");
  $("#error").html("");
});

$(document).on("click", "#btnSubmit", function () {
  var base_url = $("#url").val();
  let product_id = $("#ratting_product_id").val();
  let varient_id = $("#ratting_product_varient_id").val();
  let ratetIndex = 0;
  $(".fa-star").each(function () {
    if ($(this).hasClass("active")) {
      ratetIndex += 1;
    }
  });
  let comment = $("#Comments").val();
  if (ratetIndex == 0) {
    swal("Please Provide Star Ratting");
    return false;
  }
  if (comment == "") {
    $("#error").html("Please enter your comment");
    return false;
  } else if (comment.length > 250) {
    $("#error").html("Your comment not more than 250 character");
    return false;
  }
  $.ajax({
    url: base_url + "products/review",
    type: "post",
    async: false,
    data: {
      product_id: product_id,
      varient_id: varient_id,
      ratetIndex: ratetIndex,
      comment: comment,
    },
    dataType: "json",
    success: function (output) {
      if (output.status == "1") {
        swal("Thanks For Your Review");
      }
      setTimeout(function () {
        window.location.reload();
        // $(".close").click();
      }, 2000);
    },
  });
});

$(".product-slider").mouseenter(function () {
  $(".product-detail-wrapper .detail").removeClass("z-0");
  $(".product-detail-wrapper .detail").addClass("z-9");
});

$(".product-slider").mouseleave(function () {
  $(".product-detail-wrapper .detail").addClass("z-0");
  $(".product-detail-wrapper .detail").removeClass("z-9");
});

var ADDPRODUCT = (function () {
  // $(document).ready(function(){
  //       $('.alert').fadeOut(5000);
  // });

  // zommFun();

  var siteCurrency = $("#siteCurrency").val(); // global currency declare

  $(document).on("click", "#addtocart", function () {
    var siteCurrency = $("#siteCurrency").val();
    var qnt = checkNotNull("qnt");
    var url = $("#url").val();

    if (qnt <= 0 || qnt == "" || qnt == "-0" || qnt == "+0" || qnt == "NaN") {
      $("#qnt").val("1");
      // swal('please select valid qnt');
      // return false;
      qnt = 1;
    }

    var varient_id = checkNotNull("product_varient_id");
    var product_id = checkNotNull("product_id");
    $.ajax({
      // url: url+'products/addtocart',
      url: url + "add_to_card/addProducToCart",
      method: "post",
      dataType: "json",
      data: { qnt: qnt, varient_id: varient_id, product_id: product_id },
      success: function (output) {
        $("#updated_list").html(output.updated_list);
        $("#nav_subtotal").html(siteCurrency + " " + output.cartTotal);

        if (output.errormsg != "") {
          swal(output.errormsg);
          $(".cart-plus-minus-box").val("1");
        } else if (output.itemExist != "") {
          swal(output.itemExist).then((value) => {
            // window.location.href = url+'products/cart_item';
          });
        } else {
          $("#nav_cart_dropdown").removeClass("d-none");
          window.location.href =
            url +
            "products/productDetails/" +
            product_id +
            "/" +
            output.enc_product_variant_id;

          // setTimeout(function() {
          //     // $("#backdrop").removeClass("backdrop_bg");
          //     // $('#pupup_message').fadeOut('fast');
          //   }, 500);
        }
      },
    });
  });

  $(document).on("click", "#order_now", function () {
    var qnt = checkNotNull("qnt");
    var url = $("#url").val();
    if (qnt <= 0 || qnt == "" || qnt == "-0" || qnt == "+0" || qnt == "NaN") {
      $("#qnt").val("1");
      swal("please select valid qnt");
      return false;
    }
    var varient_id = checkNotNull("product_varient_id");
    var product_id = checkNotNull("product_id");

    $.ajax({
      url: url + "add_to_card/addProducToCart",
      method: "post",
      dataType: "json",
      data: { qnt: qnt, varient_id: varient_id, product_id: product_id },
      success: function (output) {
        if (output.errormsg != "") {
          swal(output.errormsg);
          $(".cart-plus-minus-box").val("1");
        } else if (output.itemExist != "") {
          window.location.href = url + "checkout";
        } else {
          window.location.href = url + "checkout";
        }
      },
    });
  });

  function checkNotNull(id_name) {
    return $("#" + id_name).val();
  }

  $(document).on("change", "#qnt", function () {
    var q = $(this).val();
    if (q <= 0 || q == "-0" || q == "+0" || !$.isNumeric(q)) {
      $(".btn").attr("disabled", "disabled");
      $("#order_now").attr("disabled", "disabled");
    } else {
      $(".btn").removeAttr("disabled", "disabled");
      $("#order_now").removeAttr("disabled", "disabled");
    }
  });
  $(document).on("click", ".decqnt", function () {
    var q = $(this).next("input").val();
    if (q <= 0 || q == "+0" || !$.isNumeric(q)) {
      // $('.btn').attr('disabled','disabled');
      $("#order_now").attr("disabled", "disabled");
    }
  });
  $(document).on("click", ".incqnt", function () {
    var q = $(this).prev("input").val();
    if (q > 0 || $.isNumeric(q)) {
      $(".btn").removeAttr("disabled", "disabled");
      $("#order_now").removeAttr("disabled", "disabled");
    } else {
      $(".btn").attr("disabled", "disabled");
      $("#order_now").attr("disabled", "disabled");
    }
  });

  $(document).on("change", ".product_varient_id", function () {
    // var product_varient_id = $(this).data('varient_id');
    var product_varient_id = $(this).val();
    var url = $("#url").val();
    var that = $(this);
    var stockMessage = language.js_limited_stock;
    var stockMessage1 = language.js_available_instock;
    $("#product_varient_id").val(product_varient_id); //update hidden field
    if (product_varient_id != "") {
      $(".weight-error").html("");

      $.ajax({
        url: url + "products/getDataProductWeight",
        method: "post",
        data: { product_varient_id: product_varient_id },
        dataType: "json",
        success: function (output) {
          $("#review_count").html(
            language.Reviews + "(" + output.productReviewCount + ")"
          );
          if (output.productReviewCount == 0) {
            $("#review_section").addClass("d-none");
          } else {
            $("#review_section").removeClass("d-none");
          }
          if (
            output.isVarientExist == 0 ||
            output.countParticularUserReview >= 1
          ) {
            $("#writeReviewSection").addClass("d-none");
          } else {
            $("#writeReviewSection").removeClass("d-none");
          }

          $("#review_section").html(output.reviewSection);
          $("#starRatting").html(output.upbasket_starHtml);
          var product_price =
            output.discount_per > 0
              ? siteCurrency + " " + output.product_price
              : +"";
          $("#dynamic_price").html(
            siteCurrency +
            " " +
            output.discount_price +
            " <span><strike>" +
            product_price +
            "</strike></span>"
          );

          // $('#dynamic_price').html(siteCurrency + ' ' + output.discount_price + '<span><strike>' + (output.discount_per > 0) ? siteCurrency + ' ' + output.product_price : + '' + '</strike></span>');
          var imageFolder = $("#imageFolder").val();
          var images = output.images;

          if (output.discount_per == "0") {
            // $('#is_discounted').html('<div class=""><p></p></div> <div class="wishlist-icon" data-product_id =' + output.product_id + ' data-product_weight_id =' + output.product_variant_id + ' > <i class="far fa-heart ' + output.isInWishList + '"></i> </div>');
            // $('.orginal-price').css('display', 'none');
          } else {
            // $('#is_discounted').html('<div class="offer-wrap"><p>' + output.discount_per + ' % off</p></div> <div class="wishlist-icon" data-product_id =' + output.product_id + ' data-product_weight_id =' + output.product_variant_id + ' > <i class="far fa-heart ' + output.isInWishList + '"></i> </div>');
            // $('.orginal-price').css('display', '');
          }
          var isDiscount = (output.discount_per > 0) ? "" : "d-none";
          var disNwislist = '<span class='discnt ' + 'isDiscount + '>' + output.discount_per + '% off</span>';
          disNwislist = disNwislist + '<div class="pro-hearticon wishlist-icon" data-product_id="' + output.product_id + '" data-product_weight_id="' + output.product_variant_id + '"><i class="fa-regular fa-heart ' + output.isInWishListUpbasket + '"></i></div>';
          $(".discnt").remove();
          $(".pro-hearticon").remove();
          $("#zoom_image").before(disNwislist);
          // $(disNwislist).insertBefore('#zoom_image');
          // $('#zoom_image').insertBefore(disNwislist);

          if (output.varient_quantity > 25) {
            $("#is_aval_stock").html(stockMessage1);
          } else {
            $("#is_aval_stock").html(stockMessage);
          }

          if (output.cartProductQuantity == 0) {
            var qnt = 1;
            that.next("div").find("a:first").removeClass("d-none");
            that
              .next("div")
              .find(".product-detail-quentity")
              .addClass("d-none");
            that
              .next("div")
              .find(".product-detail-quentity .qty-container .qty-btn-minus")
              .attr("data-product_weight_id", output.product_weight_id);
            that
              .next("div")
              .find(".product-detail-quentity .qty-container .qty-btn-plus")
              .attr("data-product_weight_id", output.product_weight_id);
          } else {
            that.next("div").find("a:first").addClass("d-none");
            that
              .next("div")
              .find(".product-detail-quentity")
              .removeClass("d-none");
            that
              .next("div")
              .find(".product-detail-quentity .qty-container .qty-btn-minus")
              .attr("data-product_weight_id", output.product_weight_id);
            that
              .next("div")
              .find(".product-detail-quentity .qty-container .qty-btn-plus")
              .attr("data-product_weight_id", output.product_weight_id);
            var qnt = output.cartProductQuantity;
          }
          $("#qnt").val(qnt);
          $("#product_weight_id").val(output.product_weight_id);
          $("#varient_id").val(output.product_variant_id);

          $("#zoom_image").html(output.upbasket_zoom_image);
          $("#image_thumb").html(output.upbasket_thumb);
          ReinitSlider();
          zoom();
        },
      });
    } else {
      $("#weight_no").html("");
    }
  });

  $(document).on("change", "#review", function () {
    var review = $(this).val();
    if (review != "") {
      $(".error").html("");
    } else {
      $(".error").html("please enter product review");
    }
  });

  $(document).on("click", "#btnSubmit", function (event) {
    event.preventDefault();
    var that = $(this);
    var session_user_id = $(this).data("user_session_id");
    var ratting = $("#selectRetting").data("index");
    if (typeof ratting == "undefined") {
      ratting = 0;
    } else {
      ratting = ratting + 1;
    }

    var review_user_id = [];
    $(".revew_user_id").each(function () {
      var user_id = $(this).val();
      review_user_id.push(user_id);
    });
    var review = $("#review").val();
    var action = $("#reviewForm").attr("action");
    var product_id = $("#product_id").val();
    // console.log(review_user_id);
    // return false;
    if (review != "") {
      $.each(review_user_id, function (key, value) {
        if (value == session_user_id) {
          var base_url = $("#url").val();
          action = base_url + "products/productreviewupdate";
          $(".post_review" + session_user_id).remove();

          // swal("Sorry you can not review multiple time");
        }
      });

      $.ajax({
        url: action,
        type: "post",
        data: { product_id: product_id, review: review, ratting: ratting },
        dataType: "json",
        success: function (output) {
          $(".append_review").append(output.html);
          $("#reviewForm").trigger("reset");
          var j = 0;
          $(".ratted" + output.user_id).each(function () {
            if (output.ratting == j) {
              return false;
            } else {
              $(this).removeClass("far");
              $(this).addClass("fa");
            }
            j++;
          });
          $(".change_title").html("Update");
          swal("Thanks For Your Review");
          // window.location.reload();
        },
      });
    } else {
      $(".error").html("please enter product review");
    }
  });

  //

  var ratedIndex = -1,
    uID = 0;

  $(document).ready(function () {
    resetStarColors();

    // if (localStorage.getItem('ratedIndex') != null) {
    //     setStars(parseInt(localStorage.getItem('ratedIndex')));
    //     uID = localStorage.getItem('uID');
    // }

    $(".ratting").on("click", function () {
      ratedIndex = parseInt($(this).data("index"));
      // localStorage.setItem('ratedIndex', ratedIndex);

      var i = 0;
      $(".ratting").each(function () {
        if (ratedIndex == i) {
          $(this).attr("id", "selectRetting");
        } else {
          $(this).removeAttr("id", "selectRetting");
        }
        i++;
      });
      // saveToTheDB();
    });

    $(".ratting").mouseover(function () {
      resetStarColors();
      var currentIndex = parseInt($(this).data("index"));
      setStars(currentIndex);
    });

    $(".ratting").mouseleave(function () {
      resetStarColors();

      if (ratedIndex != -1) setStars(ratedIndex);
    });
  });

  function setStars(max) {
    for (var i = 0; i <= max; i++)
      $(".ratting:eq(" + i + ")").css("color", "green");
  }

  function resetStarColors() {
    $(".ratting").css("color", "white");
  }

  // var  handleAddToCartForm =  function () {

  $("#reviewForm").validate({
    rules: {
      review_title: { required: true },
      comment: { required: true },
    },
    messages: {
      review_title: { required: "Please enter product title" },
      comment: {
        required: "Please enter product review",
      },
    },
    submitHandler: function (form) {
      $("#btnSubmit").attr("disabled", "disabled");
      form.submit();
    },
  });
  // }
})();

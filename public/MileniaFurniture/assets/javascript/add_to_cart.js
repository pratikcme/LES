$(document).on("click", ".addcartbutton", function () {
  // alert(0);
  var that = $(this);
  var product_id = $(this).data("product_id");
  var varient_id = $(this).data("varient_id");
  var url = $("#url").val();
  var qnt = $(this).parent().parent().next("div").find("input:text").val();
  // var qnt = $(this).parent().next("div").find("input:text").val();

  var siteCurrency = $("#siteCurrency").val(); // currency is dynamic
  if (qnt == 0) {
    $(".product_" + product_id)
      .next("div")
      .find("input:text")
      .val("1");
    return false;
  }

  $.ajax({
    url: url + "add_to_card/addProducToCart",
    data: { product_id: product_id, qnt: qnt, varient_id: varient_id },
    method: "post",
    dataType: "json",
    success: function (output) {
      if (output.errormsg != "") {
        swal(output.errormsg);
        $(".cart-plus-minus-box").val("1");
        return false;
      } else if (output.itemExist != "") {
        swal(output.itemExist);
        return false;
      }
      $("#itemCountMobile").addClass("d-none");
      let productClass = $(".product_" + product_id);
      if (output.count >= 1) {
        productClass
          .parent()
          .parent()
          .next("div")
          .find("div.product-detail-quentity")
          .removeClass("d-none");
        productClass.addClass("d-none");

        $("#itemCount").css("display", "block");
        $("#itemCountMobile").html(output.count);
        $("#itemCountMobile").removeClass("d-none");
      }
      $("#nav_cart_dropdown").removeClass("d-none");
      $("#itemCount").html(output.count);
      $("#updated_list").html(output.updated_list);
      $("#nav_subtotal").html(siteCurrency + " " + output.final_total);
      $("#display_subtotal").html(siteCurrency + output.final_total);
    },
  });
});

$(document).on("click", ".addcartbutton_wishlist", function () {
  // alert(0);
  var that = $(this);
  var product_id = $(this).data("product_id");
  var varient_id = $(this).data("varient_id");
  var url = $("#url").val();
  var qnt = $(this).parent().next("div").find("input:text").val();
  // alert(qnt);
  var siteCurrency = $("#siteCurrency").val(); // currency is dynamic
  if (qnt == 0) {
    $(this).next("div").find("input:text").val("1");
    return false;
  }
  $.ajax({
    url: url + "add_to_card/addProducToCart",
    data: { product_id: product_id, qnt: qnt, varient_id: varient_id },
    method: "post",
    dataType: "json",
    success: function (output) {
      if (output.errormsg != "") {
        swal(output.errormsg);
        $(".cart-plus-minus-box").val("1");
        return false;
      } else if (output.itemExist != "") {
        swal(output.itemExist);
        return false;
      }

      if (output.count >= 1) {
        that.next("div").removeClass("d-none");
        that.addClass("d-none");
        $("#itemCount").css("display", "block");
        $("#updated_list").removeClass("d-none");
      }
      $("#nav_cart_dropdown").removeClass("d-none");
      $("#itemCount").html(output.count);
      $("#updated_list").html(output.updated_list);
      $("#nav_subtotal").html(siteCurrency + " " + output.final_total);
      $("#display_subtotal").html(siteCurrency + output.final_total);
      $("#itemCountMobile").html(output.count);
    },
  });
});

$(document).on("click", ".addcartbutton", function () {
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
      // console.log("here", output);
      if (output.errormsg != "") {
        swal(output.errormsg);
        $(".cart-plus-minus-box").val("1");
        return false;
      } else if (output.itemExist != "") {
        swal(output.itemExist);
        return false;
      }

      $("#itemCountMobile").addClass("d-none");
      if (output.count >= 1) {
        that.next("div").removeClass("d-none");
        that.addClass("d-none");
        $("#itemCount").css("display", "block");
        $("#updated_list").parent("div").removeClass("no-itm");
        $("#itemCountMobile").removeClass("d-none");
      }
      $("#nav_cart_dropdown").removeClass("d-none");
      $("#itemCount").html(output.count);
      $("#updated_list").html(output.updated_list);
      $("#itemCountMobile").html(output.count);
      $("#nav_subtotal").html(siteCurrency + " " + output.final_total);
      $("#display_subtotal").html(siteCurrency + output.final_total);
    },
  });
});

var PRIVACY = (function () {
  $(document).ready(function () {
    $(".alert").fadeOut(5000);
  });

  let url = $("#base_url").val();
  $("#discard_sell").attr("disabled", "disabled");
  $(".total-main").hide();
  $("#cart_based_item").hide();
  $("#removed_cartbased_item").hide();

  $(document).on("keyup", "#search_order", function () {
    var keyValue = $(this).val();
    var currency = $("#currency").val();

    if (keyValue !== undefined && keyValue !== null) {
      $.ajax({
        url: url + "sell_development/findOrderByKey",
        type: "POST",
        dataType: "JSON",
        data: {
          keyValue: keyValue,
          currency: currency,
        },
        success: function (output) {
          if (keyValue == "") {
            $("#prod-list").html(" ");
            $("#prod-list").css("display", "none");
          } else {
            $("#prod-list").css("display", "block");
            $("#prod-list").html(output.res);
          }
        },
      });
    }
  });

  $(document).on("click", "#discard_sell", function () {
    window.location.reload();
  });

  //   Add Order
  $(document).on("click", ".add_order", function () {
    var order_id = $(this).data("order_id");
    var customer_id = $(this).data("customer_id");

    $.ajax({
      url: url + "sell_development/showAllSoldProducts",
      type: "POST",
      dataType: "JSON",

      data: {
        order_id: order_id,
        customer_id: customer_id,
      },
      success: function (output) {
        if (output !== null) {
          $("#sold_products").html(output.result);
          $("#selected_customber").html(output.customer_html);
          $("#cart_items").html(output.cart_html);
          $("#sub_total").text(output.sub_total);

          if (output.cart_based != "0") {
            $("#cart_based").val(output.cart_based);
            $("#return_shopping_based_discountPercentage").text(
              output.cart_based
            );
            $("#cart_based_item").show();
            $(".tag_removed").text("Removed Cart based Discount");
          } else if (output.promocode_used.percentage != undefined) {
            $("#cart_based").val(output.promocode_used.percentage);
            $("#cart_based_item").show();
            $(".tag_removed").text("Removed Promocode Discount");
            $("#return_shopping_based_discountPercentage").text(
              output.promocode_used.percentage
            );
          } else {
            $("#cart_based").val(0);
          }

          $("#prod-list").css("display", "none");
          $("#search_order").val("");
          $("#prod-list").html("");
          calculate_refund_subtotal($("#cart_based").val() == 0);

          $("#discard_sell").attr("disabled", false);
        }
        // $(".total-main").show();
      },
    });
  });

  function isFloat(x) {
    return !!(x % 1);
  }
  //
  // function green(val) {
  //   $(val).addClass("green");
  //   $(val).removeClass("red");
  // }

  // function red(val) {
  //   $(val).removeClass("green");
  //   $(val).addClass("red");
  // }

  // // main jquery ui draggable
  // function addDraggable() {
  //   $(".draggable").draggable({
  //     revert: true,
  //     cursor: "move",
  //     effect: "drop",
  //     scroll: false,
  //     axis: "x",
  //     containment: [500, 0, 1200, 0],
  //     start: function (event, ui) {
  //       start = ui.position.left;
  //     },
  //     drag: function (e, ui) {
  //       stop = ui.position.left;
  //       start < stop ? green($(this).parent()) : red($(this).parent());

  //       if (stop < -200) {
  //         $(this).parent().find(".btnchange").text("Delete");
  //         $(this).parent().addClass("darkred");
  //       } else {
  //         $(this).parent().find(".btnchange").text("Remove");
  //         $(this).parent().removeClass("darkred");
  //       }
  //     },
  //     stop: function (event, ui) {
  //       let stop = ui.position.left;

  //       if (stop < -70 && stop > -200) {
  //         start < stop
  //           ? "right"
  //           : addQuantity(
  //               $(this).find(".qunt"),
  //               parseInt($(this).find(".qunt").val()) - 1
  //             );
  //       } else if (stop < -200) {
  //         start < stop ? "right" : deleteByDrag(event);
  //       }

  //       if (stop > 70) {
  //         start < stop
  //           ? addQuantity(
  //               $(this).find(".qunt"),
  //               parseInt($(this).find(".qunt").val()) + 1
  //             )
  //           : "";
  //       }
  //     },
  //   });

  //   // $(".draggable").droppable({
  //   //   drop: function (event, ui) {
  //   //     console.log("here");
  //   //   },
  //   // });
  // }

  // get cart based
  // async function getCartBasedDiscount(val, check) {
  //   // $("#promocode_discount_item").hide();
  //   await $.ajax({
  //     type: "GET",
  //     url: url + "sell_development/getShoppingAmountBasedDiscount",
  //     data: { price: val },
  //     dataType: "json",
  //     success: function (res) {
  //       if (parseFloat(res.shopping_based_discount) > 0) {
  //         if (check == true) {
  //           $("#shopping_based_discount_amount").html(
  //             parseFloat(res.shopping_based_discount).toFixed(2)
  //           );

  //           isFloat(res.shopping_based_discountPercentage)
  //             ? $("#shopping_based_discountPercentage").html(
  //                 parseFloat(res.shopping_based_discountPercentage).toFixed(2)
  //               )
  //             : $("#shopping_based_discountPercentage").html(
  //                 parseInt(res.shopping_based_discountPercentage)
  //               );
  //         } else {
  //           $("#return_shopping_based_discount_amount").html(
  //             parseFloat(res.shopping_based_discount).toFixed(2)
  //           );

  //           isFloat(res.shopping_based_discountPercentage)
  //             ? $("#return_shopping_based_discountPercentage").html(
  //                 parseFloat(res.shopping_based_discountPercentage).toFixed(2)
  //               )
  //             : $("#return_shopping_based_discountPercentage").html(
  //                 parseInt(res.shopping_based_discountPercentage)
  //               );
  //           $("#removed_cartbased_item").show();
  //         }

  //         $("#cart_based_item").show();
  //       } else {
  //         let promocode_discount = parseFloat($("#cart_based").val());
  //         let amonut = parseFloat(
  //           $("#sub_total").text() - $("#refund_subtotal").text()
  //         );

  //         let discPer = (amonut * promocode_discount) / 100;

  //         $("#shopping_based_discount_amount").html(
  //           parseFloat(discPer).toFixed(2)
  //         );

  //         isFloat(promocode_discount)
  //           ? $("#shopping_based_discountPercentage").html(
  //               parseFloat(promocode_discount).toFixed(2)
  //             )
  //           : $("#shopping_based_discountPercentage").html(
  //               parseInt(promocode_discount)
  //             );
  //         $("#removed_cartbased_item").show();
  //         $("#cart_based_item").show();
  //       }

  //       // else {
  //       //   $("#cart_based_item").hide();
  //       // }
  //     },
  //   });
  // }
  // end

  // delete by drag
  // function deleteByDrag(event) {
  //   let target = $(event.target).find(".removeRecord");

  //   var product_id = $(target).data("product_id");
  //   var product_weight_id = $(target).data("product_weight_id");
  //   var order_id = $(target).data("order_id");
  //   var product_name = $(target).data("product_name");
  //   var weight_no = $(target).data("weight_no");
  //   var weight_name = $(target).data("weight_name");
  //   var weight_id = $(target).data("weight_id");

  //   var quantity = $(target).data("quantity");
  //   var discount_price = $(target).data("discount_price");
  //   var discount = $(target).data("discount");
  //   var actual_price = $(target).data("actual_price");
  //   var order_details_id = $(target).data("order_details_id");
  //   var price = $(target).data("price");
  //   var that = $(target);

  //   $.ajax({
  //     url: url + "sell_development/removeSoldProductFromCart",
  //     type: "POST",
  //     dataType: "JSON",
  //     data: {
  //       product_id: product_id,
  //       product_weight_id: product_weight_id,
  //       order_id: order_id,
  //       product_name: product_name,
  //       weight_no: weight_no,
  //       weight_name: weight_name,
  //       quantity: quantity,
  //       discount_price: discount_price,
  //       discount: discount,
  //       actual_price: actual_price,
  //       order_details_id: order_details_id,
  //       price: price,
  //       weight_id: weight_id,
  //     },
  //     success: function (output) {
  //       if (output !== null) {
  //         if (output.status == 1) {
  //           $("#sold_products").append(output.result);
  //           $(that).parent().parent().parent().parent().remove();
  //           //   $("#subtotal").html(output.subtotal);
  //           //   $("#total_gst").html(output.total_gst);
  //           calculate_refund_subtotal();
  //         }
  //       }
  //     },
  //   });
  // }
  //

  async function calculate_refund_subtotal(check) {
    var sub_total = 0;
    $(".sub_total").each(function () {
      sub_total += parseFloat($(this).text());
    });

    var uncount_total = 0;
    $(".uncount_total").each(function () {
      uncount_total += parseFloat($(this).val());
    });

    var final_subtotal = parseFloat(sub_total - uncount_total).toFixed(2);

    if (final_subtotal > 0) {
      $("#refund_subtotal").html(final_subtotal);
      $("#subtotal").val(final_subtotal);
      parseFloat($("#cart_based").val()) > 0
        ? $("#removed_cartbased_item").show()
        : $("#removed_cartbased_item").hide();
      $(".total-main").show();
      // document.getElementById("refund_btn").style.display = "none";
    } else {
      $("#removed_cartbased_item").hide();
      $("#refund_subtotal").html(0);
      $("#subtotal").val(0);
      $("#total_pay").val(parseFloat(0).toFixed(2));
      $("#refund_amount").html(parseFloat(0).toFixed(2));
      $(".total-main").hide();
      // document.querySelector(".total-main").style.display = "flex";
    }

    let disc = parseFloat($("#cart_based").val());

    // let amt = parseFloat($("#sub_total").text()).toFixed(2);
    // if (check == true) {
    //   $("#shopping_based_discount_amount").html(
    //     parseFloat((amt * disc) / 100).toFixed(2)
    //   );

    //   isFloat(disc)
    //     ? $("#shopping_based_discountPercentage").html(
    //         parseFloat(disc).toFixed(2)
    //       )
    //     : $("#shopping_based_discountPercentage").html(parseInt(disc));
    // } else {
    let amt = parseFloat($("#refund_subtotal").text()).toFixed(2);

    $("#return_shopping_based_discount_amount").html(
      parseFloat((amt * disc) / 100).toFixed(2)
    );
    $("#discount_amount").val(parseFloat((amt * disc) / 100).toFixed(2));

    isFloat(disc)
      ? $("#return_shopping_based_discountPercentage").html(
          parseFloat(disc).toFixed(2)
        )
      : $("#return_shopping_based_discountPercentage").html(parseInt(disc));

    // }

    let subtotal = parseFloat($("#refund_subtotal").html());
    let discAmt = parseFloat(
      $("#return_shopping_based_discount_amount").html()
    );

    $("#total_pay").html(parseFloat(subtotal - discAmt).toFixed(2));
    $("#refund_amount").val(parseFloat(subtotal - discAmt).toFixed(2));
    // addDraggable();
  }

  $(document).on("click", ".add_quick_product", function (e) {
    var product_id = $(this).data("product_id");
    var product_weight_id = $(this).data("product_weight_id");
    var order_id = $(this).data("order_id");
    var product_name = $(this).data("product_name");
    var weight_no = $(this).data("weight_no");
    var weight_id = $(this).data("weight_id");
    var weight_name = $(this).data("weight_name");
    var quantity = $(this).data("quantity");
    var discount_price = $(this).data("discount_price");
    var discount = $(this).data("discount");
    var actual_price = $(this).data("actual_price");
    var order_details_id = $(this).data("order_details_id");

    var price = $(this).data("price");

    var that = $(this);

    $.ajax({
      url: url + "sell_development/addSoldProductToCart",
      type: "POST",
      dataType: "JSON",
      async: false,
      data: {
        product_id: product_id,
        product_weight_id: product_weight_id,
        order_id: order_id,
        product_name: product_name,
        weight_no: weight_no,
        weight_name: weight_name,
        quantity: quantity,
        discount_price: discount_price,
        discount: discount,
        actual_price: actual_price,
        order_details_id: order_details_id,
        price: price,
        weight_id: weight_id,
      },
      success: function (output) {
        if (output.status == 1) {
          $("#cart_items").append(output.result);
          $(that).remove();
          //   $("#subtotal").html(output.subtotal);

          //   $("#total_gst").html(output.total_gst);
          calculate_refund_subtotal();
        }
      },
    });
    //
  });

  // quant change
  $(document).on("change", ".qunt", function (e) {
    var qnt = $(this).val();
    var max = parseInt($(this).attr("max"));
    var price = parseFloat($(this).data("actual_discount_price"));

    if (qnt > max) {
      $(this).val(max);
    } else if (qnt < 0) {
      $(this).val(max);
    } else {
      $(this)
        .parent()
        .parent()
        .parent()
        .prev()
        .find(".this_quantity")
        .html(qnt);

      let sub = parseFloat(qnt * price).toFixed(2);

      $(this).parent().parent().next().find(".sub_total").html(sub);

      $(this).parent().find(".calculation_price").val(sub);

      calculate_refund_subtotal();
    }
  });

  $(document).on("click", ".removeRecord", function (e) {
    var product_id = $(this).data("product_id");
    var product_weight_id = $(this).data("product_weight_id");
    var order_id = $(this).data("order_id");
    var product_name = $(this).data("product_name");
    var weight_no = $(this).data("weight_no");
    var weight_name = $(this).data("weight_name");
    var weight_id = $(this).data("weight_id");

    var quantity = $(this).data("quantity");
    var discount_price = $(this).data("discount_price");
    var discount = $(this).data("discount");
    var actual_price = $(this).data("actual_price");
    var order_details_id = $(this).data("order_details_id");
    var price = $(this).data("price");
    var that = $(this);

    $.ajax({
      url: url + "sell_development/removeSoldProductFromCart",
      type: "POST",
      dataType: "JSON",
      async: false,
      data: {
        product_id: product_id,
        product_weight_id: product_weight_id,
        order_id: order_id,
        product_name: product_name,
        weight_no: weight_no,
        weight_name: weight_name,
        quantity: quantity,
        discount_price: discount_price,
        discount: discount,
        actual_price: actual_price,
        order_details_id: order_details_id,
        price: price,
        weight_id: weight_id,
      },
      success: function (output) {
        if (output.status == 1) {
          $("#sold_products").append(output.result);
          $(that).parent().parent().parent().parent().remove();

          calculate_refund_subtotal();
        }
      },
    });
  });
})();

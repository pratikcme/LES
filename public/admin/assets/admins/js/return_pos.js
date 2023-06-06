var PRIVACY = (function () {
  $(document).ready(function () {
    $(".alert").fadeOut(5000);
  });

  let url = $("#base_url").val();
  $("#discard_sell").attr("disabled", "disabled");
  $(".total-main").hide();
  $("#cart_based_item").hide();
  $("#removed_cartbased_item").hide();

  $(document).on("keyup focus", "#search_order", function () {
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

  $(document).click(function (e) {
    var target = $(e.target);
    if (
      !target.closest("#search_order").length &&
      $("#search_order").is(":visible") &&
      !target.closest("#prod-list").length &&
      $("#prod-list").is(":visible")
    ) {
      $("#prod-list").css("display", "none");
    }
  });

  $(document).on("click", "#discard_sell", function () {
    window.location.reload();
  });

  let flag = true;

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
            // let cartBased = 0;
            // cartBased =
            //   (output.cart_based * 100) / parseFloat(output.sub_total);
            $("#cart_based").val(output.cart_based);
            // showExtraGst();
            setNewGSt(parseFloat(output.cart_based).toFixed(2));
            //
            // $("#front_cartBased").val(output.cart_based);
            // if (flag == true) {
            //   // if ($("#front_cartBased").val() != "") {
            //   //   let cartBased =
            //   //     (parseFloat($("#front_cartBased").val()) * 100) / final_subtotal;
            //   //   $("#cart_based").val(cartBased);
            //   //   // $("#return_shopping_based_discountPercentage").text(
            //   //   //   parseFloat(cartBased).toFixed(2)
            //   //   // );
            //   // }

            //   flag = false;
            // }
            // if (isShow !== "") {
            //   let amt = parseFloat(
            //     parseFloat(output.sub_total) -
            //       parseFloat($("#total_gst").text())
            //   ).toFixed(2);

            //   cartBased = (output.cart_based * 100) / amt;
            // } else {
            // }

            // $("#cart_based").val(parseFloat(cartBased).toFixed(2));

            // $("#return_shopping_based_discountPercentage").text(
            //   output.cart_based
            // );

            $("#cart_based_item").show();
            $(".tag_removed").text("Removed Cart based Discount");
          } else if (output.promocode_used.percentage != undefined) {
            $("#cart_based").val(output.promocode_used.percentage);
            // showExtraGst();
            setNewGSt(parseFloat(output.promocode_used.percentage).toFixed(2));
            $("#cart_based_item").show();
            $(".tag_removed").text("Removed Promocode Discount");
            $("#return_shopping_based_discountPercentage").text(
              output.promocode_used.percentage
            );
          } else {
            $("#cart_based").val(0);
            hideExtraGst();
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

  $(".dis_subtotal").hide();
  function setNewGSt(discPer) {
    let newGst = 0;

    $(".this_price").each(function () {
      let quantity = parseInt($(this).parent().find(".this_quantity").text());
      let amt = parseFloat($(this).data("actual_price")).toFixed(2);
      let disc = parseFloat(
        $(this).parent().parent().parent().next().find(".disc").val()
      ).toFixed(2);
      let amtDisc = amt - (amt * disc) / 100;
      let cartBased =
        amtDisc - (amtDisc * parseFloat(discPer).toFixed(2)) / 100;
      let gstPer = parseFloat($(this).data("gst")).toFixed(2);

      let valTocal = parseFloat((cartBased * gstPer) / 100);
      valTocal = (Math.round(valTocal * 100 + Number.EPSILON) / 100).toFixed(2);

      newGst += parseFloat(
        parseFloat(parseFloat(valTocal) * quantity).toFixed(2)
      );
    });

    let uncount_gst_discounted_amount = 0;
    $(".uncount_gst_discounted_amount").each(function () {
      uncount_gst_discounted_amount += parseFloat($(this).val());
    });

    // console.log("called", parseFloat(uncount_gst_discounted_amount).toFixed(2));
    // return;

    $("#total_gst").text(
      parseFloat(
        newGst - parseFloat(uncount_gst_discounted_amount).toFixed(2)
      ).toFixed(2)
    );
  }

  function showExtraGst() {
    let oldGst = parseFloat($("#total_gst").text());
    $(".dis_subtotal")
      .find(".dis_sub_val")
      .text(
        parseFloat(parseFloat($("#refund_subtotal").text()) + oldGst).toFixed(2)
      );

    $(".dis_subtotal").find(".dis_gst").text(parseFloat(oldGst).toFixed(2));
    $(".dis_subtotal").parent().find(".gstName").text("Updated GST");

    $(".dis_subtotal").show();
  }

  function hideExtraGst() {
    $(".dis_subtotal").hide();
    $(".dis_subtotal").find(".dis_sub_val").text(0);
    $(".dis_subtotal").find(".dis_gst").text(0);

    $(".dis_subtotal").parent().find(".gstName").text("Products GST");
  }

  async function calculate_refund_subtotal(check) {
    var sub_total = 0;
    $(".sub_total").each(function () {
      sub_total += parseFloat($(this).text());
    });

    var uncount_total = 0;
    $(".uncount_total").each(function () {
      uncount_total += parseFloat($(this).val());
    });

    var gst = 0;
    $(".gst_amount").each(function () {
      gst += parseFloat($(this).val());
    });

    var uncount_gst = 0;
    $(".uncount_gst_amount").each(function () {
      uncount_gst += parseFloat($(this).val());
    });

    $("#total_gst").html(
      parseFloat(parseFloat(gst) - parseFloat(uncount_gst)).toFixed(2)
    );
    $("#counted_total_gst").val(
      parseFloat(parseFloat(gst) - parseFloat(uncount_gst)).toFixed(2)
    );

    var final_subtotal = parseFloat(
      parseFloat(sub_total) - parseFloat(uncount_total)
    ).toFixed(2);

    let isShow = $("#isShow").val();

    if (isShow != "1") {
      final_subtotal = parseFloat(
        parseFloat(final_subtotal) - parseFloat($("#total_gst").html())
      ).toFixed(2);

      // if ($("#front_cartBased").val() != "") {
      //   let cartBased =
      //     (parseFloat($("#front_cartBased").val()) * 100) / final_subtotal;
      //   $("#cart_based").val(cartBased);
      //   // $("#return_shopping_based_discountPercentage").text(
      //   //   parseFloat(cartBased).toFixed(2)
      //   // );
      // }
    }

    if (final_subtotal > 0) {
      $("#refund_subtotal").html(parseFloat(final_subtotal).toFixed(2));

      let discount = parseFloat($("#cart_based").val());

      if (discount > 0) {
        showExtraGst();
        setNewGSt(discount);
        $("#removed_cartbased_item").show();
      } else {
        hideExtraGst();
        $("#removed_cartbased_item").hide();
      }

      // parseFloat($("#cart_based").val()) > 0 ?  : ;
      // parseFloat($("#cart_based").val()) > 0
      //   ? $("#removed_cartbased_item").show()
      //   : $("#removed_cartbased_item").hide();

      $("#subtotal").val(parseFloat(final_subtotal).toFixed(2));
      $(".total-main").show();

      // document.getElementById("refund_btn").style.display = "none";
    } else {
      //
      $("#removed_cartbased_item").hide();
      $("#refund_subtotal").html(parseFloat(0).toFixed(2));
      $("#subtotal").val(0);
      $("#total_pay").val(parseFloat(0).toFixed(2));
      $("#refund_amount").html(parseFloat(0).toFixed(2));
      $(".total-main").hide();
      hideExtraGst();
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
    // if (isShow != "1") {
    //   // alert("here");
    //   amt = parseFloat(
    //     parseFloat(amt) + parseFloat($("#total_gst").html())
    //   ).toFixed(2);
    // }

    // console.log("amounrt", amt);
    // return;

    $("#return_shopping_based_discount_amount").html(
      parseFloat((amt * disc) / 100).toFixed(2)
    );
    $("#discount_amount").val(parseFloat((amt * disc) / 100).toFixed(2));

    isFloat(disc)
      ? $("#return_shopping_based_discountPercentage").html(
          parseFloat(disc).toFixed(2)
        )
      : $("#return_shopping_based_discountPercentage").html(parseInt(disc));

    // if (disc > 0) {
    //   showExtraGst();
    //   setNewGSt(disc);
    // }
    //  else {
    //   hideExtraGst();
    // }

    // }

    let subtotal = parseFloat($("#refund_subtotal").html());
    let discAmt = parseFloat(
      $("#return_shopping_based_discount_amount").html()
    );

    // let isShow = $("#isShow").val();

    $("#refund_amount").val(
      parseFloat(parseFloat(subtotal) - parseFloat(discAmt)).toFixed(2)
    );

    // console.log(
    //   "check",
    //   parseFloat(parseFloat(subtotal) - parseFloat(discAmt)).toFixed(2)
    // );

    // // if (isShow == 1) {
    $("#refund_amount").val(
      parseFloat(
        parseFloat($("#refund_amount").val()) +
          parseFloat($("#total_gst").html())
      ).toFixed(2)
    );

    $("#total_pay").html(
      parseFloat(parseFloat($("#refund_amount").val())).toFixed(2)
    );
    // } else {
    // $("#refund_amount").val(parseFloat($("#refund_amount").val()).toFixed(2));
    // $("#total_pay").html(
    //   parseFloat(parseFloat($("#refund_amount").val())).toFixed(2)
    // );
    // }

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
    var without_gst_price = $(this).data("without_gst_price");
    var gst = $(this).data("gst");

    // var price = $(this).data("price");

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
        // price: price,
        weight_id: weight_id,
        without_gst_price: without_gst_price,
        gst: gst,
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
    $("#promocode").val("");
    var qnt = $(this).val();
    var max = parseInt($(this).attr("max"));
    var price = parseFloat($(this).data("actual_calculation_price"));
    var gst_amount = parseFloat($(this).data("gst_amount"));

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
      let newGSt = parseFloat(qnt * gst_amount).toFixed(2);

      $(this).parent().parent().next().find(".sub_total").html(sub);

      $(this).parent().find(".calculation_price").val(sub);
      $(this).parent().find(".gst_amount").val(newGSt);

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

    var without_gst_price = $(this).data("without_gst_price");
    var gst = $(this).data("gst");
    // var price = $(this).data("price");
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
        weight_id: weight_id,
        without_gst_price: without_gst_price,
        gst: gst,
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

(function ($) {
  $.fn.inputFilter = function (inputFilter) {
    return this.on(
      "input keydown keyup mousedown mouseup select contextmenu drop",
      function () {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      }
    );
  };
})(jQuery);

var PRIVACY = (function () {
  $(document).ready(function () {
    $(".alert").fadeOut(5000);
  });
  var url = $("#url").val();

  $(document).on("keyup focus", "#search_prod", function () {
    var keyValue = $(this).val();
    if (
      !$.isNumeric(keyValue) ||
      ($.isNumeric(keyValue) && keyValue.length == 13)
    ) {
      $.ajax({
        url: url + "sell_development/findProductBykey",
        type: "POST",
        dataType: "JSON",
        data: {
          keyValue: keyValue,
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
      !target.closest("#prod-list").length &&
      $("#prod-list").is(":visible") &&
      !target.closest("#search_prod").length &&
      $("#search_prod").is(":visible")
    ) {
      $("#prod-list").css("display", "none");
    }
  });

  $(document).on("change", "#search_prod", function () {
    var keyValue = $(this).val();
    if ($.isNumeric(keyValue) && keyValue.length == 13) {
      $.ajax({
        url: url + "sell_development/findProductBykey",
        type: "POST",
        dataType: "JSON",
        data: {
          keyValue: keyValue,
        },
        success: function (output) {
          if (keyValue == "") {
            $("#prod-list").html(" ");
            $("#prod-list").css("display", "none");
          } else {
            $("#prod-list").html(output.res);
            $("#prod-list").css("display", "block");
          }
          if ($.isNumeric(keyValue) && keyValue.length == 13) {
            $(".add_product").click();
            $("#prod-list").css("display", "none");
            $("#search_prod").val("");
            $("#prod-list").html("");
          }
        },
      });
    }
  });

  $(document).on("click", ".add_product", function () {
    $(".overlay").css("display", "block");
    var product_id = $(this).data("product_id");
    var pw_id = $(this).data("pw_id");
    var isParked = $("#isParked").val();
    // setTimeout(function () {
    $.ajax({
      url: url + "sell_development/addProducttoTempOrder",
      type: "POST",
      dataType: "JSON",
      async: false,
      data: {
        product_id: product_id,
        pw_id: pw_id,
        isParked: isParked,
      },
      success: function (output) {
        $("#hidden_discount_total").val(output.total_savings);
        // $('#search_prod').val('');
        $(".overlay").css("display", "none");
        if (output.status == 0) {
          bootbox.alert("Product is not available", function () {
            // window.location.reload(true);
          });
        }

        // console.log("output", output);

        if (output.status == 1) {
          // $(output.result).insertAfter('#selected_customber');
          $(".old_list").remove();

          // $("#selected_customber").after(output.result);
          $("#cart_items").html(output.result);
          addDraggable();
          $("#subtotal").html(output.subtotal);
          // $('#discount_total').html(output.total_discount);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        }
        // displayBlock(output.count);
        $("#prod-list").css("display", "none");
        $("#search_prod").val("");
        $("#prod-list").html("");

        // Dk
        // $(".after-pay button").fadeOut();

        // setTimeout(() => {
        //   $(".pay-btn").fadeIn();
        // }, 400);
      },
    });
    // },1000);
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  $(document).on("click", ".add_quick_product", function (e) {
    if ($(e.target).is($(this).find(".deleteIcon"))) return;

    $(".overlay").css("display", "block");
    var product_id = $(this).data("product_id");
    var pw_id = $(this).data("pw_id");
    var isParked = $("#isParked").val();
    // setTimeout(function () {
    $.ajax({
      url: url + "sell_development/addProducttoTempOrder",
      type: "POST",
      dataType: "JSON",
      async: false,
      data: {
        product_id: product_id,
        pw_id: pw_id,
        isParked: isParked,
      },
      success: function (output) {
        $("#hidden_discount_total").val(output.total_savings);
        // $('#search_prod').val('');
        $(".overlay").css("display", "none");
        if (output.status == 0) {
          bootbox.alert("Product is not available", function () {
            // window.location.reload(true);
          });
        }
        if (output.status == 1) {
          // $(output.result).insertAfter('#selected_customber');
          $(".old_list").remove();

          // $("#selected_customber").after(output.result);

          $("#cart_items").html(output.result);
          addDraggable();
          $("#subtotal").html(output.subtotal);
          // $('#discount_total').html(output.total_discount);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        }
      },
    });
    // },1000);
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  // function displayBlock(parm) {
  //   if (parm > 0) {
  //     var css = "block";
  //   } else {
  //     var css = "none";
  //   }
  //   $("#parked_sell").parent().css("display", css);
  //   $("#discard_sell").parent().css("display", css);
  // }

  $(document).on("keyup focus", "#add_customer", function () {
    var customber = $(this).val();

    if (customber == "") {
      $("#set_customer").val("");
      $(".select_customer").html("");
      $("#message").hide();
      return;
    }

    // setTimeout(function () {
    $.ajax({
      url: url + "sell_development/searchCustomber",
      type: "POST",
      dataType: "JSON",
      data: {
        customber: customber,
      },
      success: function (output) {
        // $('#insertBefore').before(output.result);
        $("#message").html(output.result);
        $("#message").show();
      },
    });
    // },1000);
  });

  // $(document).on("blur", "#add_customer", function () {
  //   $("#message").hide();
  // });

  $(document).click(function (e) {
    var target = $(e.target);
    if (
      !target.closest("#message").length &&
      $("#message").is(":visible") &&
      !target.closest("#add_customer").length &&
      $("#add_customer").is(":visible")
    ) {
      $("#message").hide();
    }
  });

  $(document).on("click", ".select_customer", function () {
    var customber_id = $(this).data("customer_id");
    var customber_name = $(this).find("a 	div.list-items h4").html();
    $("#add_customer").val(customber_name);
    // setTimeout(function () {
    $.ajax({
      url: url + "sell_development/searchforAdd",
      type: "POST",
      dataType: "JSON",
      data: {
        customber_id: customber_id,
      },
      success: function (output) {
        $("#selected_customber").html(output.result);
        $("#set_customer").val(customber_id);

        $("#message").hide();
      },
    });
    // },1000);
  });

  // dropdown

  $("#retriveBtn").on("click", myFunction);

  $(document).click(function (e) {
    let btn = $("#retriveBtn");
    if (!btn.is(e.target)) {
      $("#myDropdown").hide();
    }
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  function myFunction() {
    $("#myDropdown").toggle();
    // document.getElementById("myDropdown").classList.toggle("show");
  }

  // $(document).mouseup(function (e) {
  //   var container = $("#myDropdown");

  //   var c2 = $("#retriveBtn");
  //   // if the target of the click isn't the container nor a descendant of the container
  //   if (!container.is(e.target) && container.has(e.target).length === 0) {
  //     container.hide();
  //   } else if (c2.is(e.target)) {
  //     container.toggle();
  //   }
  // });

  // // Close the dropdown if the user clicks outside of it
  // window.onclick = function (event) {
  //   if (!event.target.matches(".dropbtn")) {
  //     var dropdowns = document.getElementsByClassName("dropdown-content");
  //     var i;
  //     for (i = 0; i < dropdowns.length; i++) {
  //       var openDropdown = dropdowns[i];
  //       if (openDropdown.classList.contains("show")) {
  //         openDropdown.classList.remove("show");
  //       }
  //     }
  //   }
  // };

  // here
  function deleteByDrag(event) {
    var order_tempId = $(event.target)
      .find(".revomeRecord")
      .data("order_tempid");

    // console.log("parekd", event.target);
    var isParked = $(event.target).find(".revomeRecord").data("isparked");

    $.ajax({
      url: url + "sell_development/removeRecord",
      type: "POST",
      dataType: "JSON",
      data: {
        order_tempId: order_tempId,
        isParked: isParked,
      },
      success: function (output) {
        $("#hidden_discount_total").val(output.total_savings);
        if (output.status == "1") {
          $(event.target).parent().remove();
          var final_subtotal = calculateSubtotal();
          $("#subtotal").html(final_subtotal);
          $("#discount_total").html(output.total_discount);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        }
      },
    });
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  }

  // function addQuant(val, qnt) {
  //   console.log(val, qnt);
  // }

  function green(val) {
    $(val).addClass("green");
    $(val).removeClass("red");
  }

  function red(val) {
    $(val).removeClass("green");
    $(val).addClass("red");
  }

  // main jquery ui draggable
  function addDraggable() {
    $(".draggable").draggable({
      revert: true,
      cursor: "move",
      effect: "drop",
      scroll: false,
      axis: "x",
      containment: [500, 0, 1200, 0],
      start: function (event, ui) {
        start = ui.position.left;
      },
      drag: function (e, ui) {
        stop = ui.position.left;
        start < stop ? green($(this).parent()) : red($(this).parent());

        if (stop < -200) {
          $(this).parent().find(".btnchange").text("Delete");
          $(this).parent().addClass("darkred");
        } else {
          $(this).parent().find(".btnchange").text("Remove");
          $(this).parent().removeClass("darkred");
        }
      },
      stop: function (event, ui) {
        let stop = ui.position.left;

        if (stop < -70 && stop > -200) {
          start < stop
            ? "right"
            : addQuantity(
                $(this).find(".qunt"),
                parseInt($(this).find(".qunt").val()) - 1
              );
        } else if (stop < -200) {
          start < stop ? "right" : deleteByDrag(event);
        }

        if (stop > 70) {
          start < stop
            ? addQuantity(
                $(this).find(".qunt"),
                parseInt($(this).find(".qunt").val()) + 1
              )
            : "";
        }
      },
    });

    // $(".draggable").droppable({
    //   drop: function (event, ui) {
    //     console.log("here");
    //   },
    // });
  }

  // function addDraggable() {
  //   var draggableElems = document.querySelectorAll(".draggable");
  //   // array of Draggabillies
  //   var draggies = [];
  //   // init Draggabillies
  //   for (var i = 0; i < draggableElems.length; i++) {
  //     var draggableElem = draggableElems[i];
  //     var draggie = new Draggabilly(draggableElem, {
  //       axis: "x",
  //       revert: true,
  //       // containment: [500, 0, 1200, 0],
  //     });
  //     draggies.push(draggie);
  //   }

  //   draggies.forEach((ele) => {
  //     let pos = {};

  //     ele.on("dragStart", function (e) {
  //       pos = ele.position;
  //     });
  //     ele.on("dragMove", function (e) {});
  //     ele.on("pointerUp", function (e) {
  //       ele.setPosition(pos);
  //     });
  //   });

  //   //single working
  //   // let abc = new Draggabilly(".draggable", {
  //   //   axis: "x",
  //   //   revert: true,
  //   // });
  //   // let pos = {};
  //   // abc.on("dragStart", function (e) {
  //   //   pos = abc.position;
  //   // });
  //   // abc.on("pointerUp", function (e) {
  //   //   abc.setPosition(pos);
  //   // });
  //   // $(".draggable").udraggable();
  // }

  //new try

  addDraggable();

  $(document).on("click", ".revomeRecord", function () {
    var order_tempId = $(this).data("order_tempid");
    var isParked = $(this).data("isparked");
    var that = $(this);
    $.ajax({
      url: url + "sell_development/removeRecord",
      type: "POST",
      dataType: "JSON",
      data: {
        order_tempId: order_tempId,
        isParked: isParked,
      },
      success: function (output) {
        $("#hidden_discount_total").val(output.total_savings);
        if (output.status == "1") {
          that.parent().parent().parent().parent().remove();
          var final_subtotal = calculateSubtotal();
          $("#subtotal").html(final_subtotal);
          $("#discount_total").html(output.total_discount);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        }

        // removed by Dipesh For new Design
        // displayBlock(output.count);

        // // Dk
        // $(".after-pay button").fadeOut();

        // setTimeout(() => {
        //   $(".pay-btn").fadeIn();
        // }, 400);
      },
    });
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  // $(".qunt").inputFilter(function(value) {
  //     return /^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/.test(value);
  // });

  // Dipesh Changed key up from change

  // $(document).on("keydown", ".qunt", function (e) {
  //   if (
  //     !(
  //       (e.keyCode > 95 && e.keyCode < 106) ||
  //       (e.keyCode > 47 && e.keyCode < 58) ||
  //       e.keyCode == 8
  //     )
  //   ) {
  //     return false;
  //   }
  // });

  // old design qunt change
  $(document).on("change", ".qunt", function () {
    var qunt = $(this).val();
    var product_weight_id = $(this).data("product_weight_id");
    var isParked = $(this).data("isparked");
    var temp_id = $(this).data("temp_id");
    var check = Math.sign(qunt);
    var actual_discount_price = $(this).data("actual_discount_price");
    // alert(actual_discount_price);
    //
    // console.log("value", qunt);

    if (qunt == "0" || check == -1 || qunt == "") {
      qunt = 1;
    }
    var that = $(this);
    var current_price = $(this)
      .parent()
      .next()
      .next()
      .find(".sub_total")
      .text();
    if (qunt == "0" || check == -1) {
      var qunt = "1";
      that.val(qunt);
      var change_price = qunt * current_price;
      $(this)
        .parent()
        .next()
        .next()
        .find(".sub_total")
        .html(change_price.toFixed(2));
    } else {
      let discount = $(this).parent().next().find(".disc").val();
      $.ajax({
        url: url + "sell_development/add_quantity",
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {
          product_weight_id: product_weight_id,
          temp_id: temp_id,
          qunt: qunt,
          actual_discount_price: actual_discount_price,
          isParked: isParked,
          discount: discount,
        },
        success: function (output) {
          $("#hidden_discount_total").val(output.total_savings);
          // console.log("output", output);
          if (output.status == 0) {
            bootbox.alert("Product is not available", function () {
              return;
            });
            that
              .parent()
              .parent()
              .parent()
              .prev()
              .find(".this_quantity")
              .html(output.exist_quantity);

            $(that).val(output.exist_quantity);
            return;
          }

          that.val(output.exist_quantity);

          that
            .parent()
            .parent()
            .next()
            .find(".sub_total")
            .html(output.exist_price); //Dipesh Changed to subtotlal

          that
            .parent()
            .parent()
            .parent()
            .prev()
            .find(".this_quantity")
            .html(output.exist_quantity);
          var final_subtotal = calculateSubtotal();
          $("#subtotal").html(final_subtotal);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        },
      });
    }
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  // new design
  function addQuantity(val, qunt) {
    // var qunt = $(val).val();

    var product_weight_id = $(val).data("product_weight_id");
    var isParked = $(val).data("isparked");
    var temp_id = $(val).data("temp_id");
    var check = Math.sign(qunt);
    var actual_discount_price = $(val).data("actual_discount_price");
    //

    if (qunt == "0" || check == -1 || qunt == "") {
      qunt = 1;
    }
    var that = $(val);

    var current_price = $(val)
      .parent()
      .parent()
      .next()
      .find(".sub_total")
      .text();

    if (qunt == "0" || check == -1) {
      var qunt = "1";
      that.val(qunt);
      var change_price = qunt * current_price;

      $(val)
        .parent()
        .parent()
        .next()
        .find(".sub_total")
        .html(change_price.toFixed(2));
    } else {
      let discount = $(val).parent().next().find(".disc").val();

      $.ajax({
        url: url + "sell_development/add_quantity",
        type: "POST",
        dataType: "JSON",
        async: false,
        data: {
          product_weight_id: product_weight_id,
          temp_id: temp_id,
          qunt: qunt,
          actual_discount_price: actual_discount_price,
          isParked: isParked,
          discount: discount,
        },

        success: function (output) {
          $("#hidden_discount_total").val(output.total_savings);
          // console.log("output", output);
          if (output.status == 0) {
            bootbox.alert("Product is not available", function () {});
            that
              .parent()
              .parent()
              .parent()
              .prev()
              .find(".this_quantity")
              .html(output.exist_quantity);

            $(that).val(output.exist_quantity);
            return;
          }

          that.val(output.exist_quantity);

          that
            .parent()
            .parent()
            .next()
            .find(".sub_total")
            .html(output.exist_price); //Dipesh Changed to subtotlal

          that
            .parent()
            .parent()
            .parent()
            .prev()
            .find(".this_quantity")
            .html(output.exist_quantity);

          var final_subtotal = calculateSubtotal();
          $("#subtotal").html(final_subtotal);
          $("#total_gst").html(output.total_gst);
          calculate_disc_percentage();
        },
      });
    }
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  }

  // $(document).on("click", ".dec", function () {
  //   addQuantity($(this).next(), parseInt($(this).next().val()) - 1);
  // });

  // $(document).on("click", ".inc", function () {
  //   addQuantity($(this).prev(), parseInt($(this).prev().val()) + 1);
  // });

  //new Design Ends

  $(document).on("focusout", ".disc", function () {
    if ($(this).val() == "") {
      $(this).val("0.00");
    }
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  //re added by dipesh now discount needed
  $(document).on("keyup", ".disc", function () {
    var discount = parseFloat($(this).val());
    var temp_id = $(this).data("temp_id");
    var isParked = $(this).data("isparked");
    var product_weight_id = $(this).data("product_weight_id");
    var quantity = parseInt($(this).parent().prev().find(".qunt").val());
    var actual_discount_price = $(this).data("actual_discount_price");
    var that = $(this);

    if (that.val().trim() === "") {
      $(".total-main").attr("disabled", false);
      return false;
    }

    if (discount >= 100) {
      $(".total-main").attr("disabled", "disabled");

      return false;
    } else if (Math.sign(discount) == -1) {
      $(".total-main").attr("disabled", "disabled");
      return false;
    } else {
      if (discount !== "") {
        $(".total-main").attr("disabled", false);
        $.ajax({
          url: url + "sell_development/update_quantity",
          type: "POST",
          dataType: "JSON",
          data: {
            product_weight_id: product_weight_id,
            discount: discount,
            temp_id: temp_id,
            quantity: quantity,
            actual_discount_price: actual_discount_price,
            isParked: isParked,
          },
          success: function (output) {
            $("#hidden_discount_total").val(output.total_savings);
            // console.log("output", output);
            // if (output.status == 0) {
            //   bootbox.alert("Product is not available", function () {});

            //   $(that).val(output.exist_quantity);
            //   return;
            // }

            if (parseFloat(output.discount) > 0) {
              that
                .parent()
                .parent()
                .parent()
                .prev()
                .find(".actual_price")
                .html(output.actual_price);
            } else {
              that
                .parent()
                .parent()
                .parent()
                .prev()
                .find(".actual_price")
                .html("");
            }

            that
              .parent()
              .parent()
              .next()
              .find(".sub_total")
              .html(output.exist_total);

            that
              .parent()
              .parent()
              .parent()
              .prev()
              .find(".this_price")
              .html(output.exist_price);

            var final_subtotal = calculateSubtotal();
            $("#subtotal").html(final_subtotal);
            $("#total_gst").html(output.total_gst);
            calculate_disc_percentage();
          },
        });
      }
    }
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  $("#disc_percentage").keyup(function () {
    var disc = $(this).val();
    if (disc > 99) {
      $(this).val("");
      $(this).next("label").html("Discount must be less than 100%");
      // $('#span_pay').css("display","none");
    } else if (Math.sign(disc) == -1) {
      $(this).val("");
      $(this).next("label").html("Discount value not be minus");
    } else {
      $(this).next().html("");
    }
  });

  $(document).on("keyup", "#add_search_prod", function () {
    var keyValue = $(this).val();
    var from = "quick_keys";
    if (
      !$.isNumeric(keyValue) ||
      ($.isNumeric(keyValue) && keyValue.length == 13)
    ) {
      $.ajax({
        url: url + "sell_development/findProductBykey",
        type: "POST",
        dataType: "JSON",
        data: {
          keyValue: keyValue,
          from: from,
        },
        success: function (output) {
          if (keyValue == "") {
            $("#add-prod-list").css("display", "none");
          } else {
            $("#add-prod-list").css("display", "block");
          }
          $("#add-prod-list").html(output.res);
        },
      });
    }
  });

  $(document).on("click", "#quick_keys", function () {
    $("#add_search_prod").val("");
    $("#add-prod-list").html("");
    $("#product_quick_list").html("");
  });

  $("#discard_sell").click(function () {
    var sub_total = calculateSubtotal();
    if (sub_total == 0) {
      return;
    }
    $.ajax({
      method: "post",
      url: url + "sell_development/update_same_as_qnt",
      success: function () {
        window.location.reload();
      },
    });
  });

  $(document).on("click", ".quick", function () {
    var product_id = $(this).data("product_id");
    var pw_id = $(this).data("pw_id");

    $.ajax({
      type: "post",
      dataType: "JSON",
      url: url + "sell_development/quickList",
      data: { product_id: product_id, pw_id: pw_id },
      success: function (output) {
        $("#product_quick_list").append(output.list);
        $("#add-prod-list").css("display", "none");
        $("#add_search_prod").val("");
      },
    });
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  });

  $(".remove_quick_list_item").click(function () {
    var pw_id = $(this).data("pw_id");
    var that = $(this);
    $.ajax({
      type: "post",
      dataType: "JSON",
      url: url + "sell_development/RemoveQuickListItem",
      data: { pw_id: pw_id },
      success: function (output) {
        if (output.status) {
          that.parent().remove();
        } else {
          bootbox.alert("Something Went Wrong", function () {});
        }
      },
    });
  });

  $("#SubmitQuickList").click(function () {
    var varientList = [];
    $(".product_quick_list").each(function () {
      var product_weight_id = $(this).data("product_weight_id");
      if ($.inArray(product_weight_id, varientList) == -1) {
        varientList.push(product_weight_id);
      }
    });
    $("#quick-keys").css("display", "none");
    $.ajax({
      type: "post",
      dataType: "JSON",
      url: url + "sell_development/MakeQuickList",
      data: { varientList: varientList },
      success: function (output) {
        window.location.reload();
      },
    });
  });

  $("#discard_parked_sell").click(function () {
    var sub_total = calculateSubtotal();
    if (sub_total == 0) {
      return;
    }
    var id = $("#parked_id").val();
    $.ajax({
      type: "post",
      url: url + "sell_development/discard_parked_order",
      data: { id: id },
      success: function () {
        location.href = url + "sell_development";
      },
    });
  });

  // changeParkTime
  $("#changeParkTime").on("click", function (e) {
    var id = $("#parked_id").val();
    var subtotal = calculateSubtotal();

    $.ajax({
      type: "post",
      url: url + "sell_development/changeParkTime",
      data: { id: id, subtotal: subtotal },
      success: function (res) {
        if (res == 1) {
          location.href = url + "sell_development";
        }
      },
    });
  });
  //

  function isFloat(x) {
    return !!(x % 1);
  }

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
        amtDisc - (amtDisc * parseFloat(parseFloat(discPer).toFixed(2))) / 100;

      let gstPer = parseFloat($(this).data("gst")).toFixed(2);

      newGst += parseFloat(
        parseFloat(
          parseFloat(parseFloat((cartBased * gstPer) / 100).toFixed(2)) *
            quantity
        ).toFixed(2)
      );
    });

    $("#total_gst").text(parseFloat(newGst).toFixed(2));
    $("#hidden_subtotal").val(parseFloat($("#subtotal").html()).toFixed(2));
  }

  function showExtraGst(check) {
    if (!check) {
      let oldGst = parseFloat(parseFloat($("#total_gst").text()).toFixed(2));
      $(".dis_subtotal")
        .find(".dis_sub_val")
        .text(
          parseFloat(parseFloat($("#subtotal").text()) + oldGst).toFixed(2)
        );
      $(".dis_subtotal").find(".dis_gst").text(parseFloat(oldGst).toFixed(2));
    }
    $(".dis_subtotal").parent().find(".gstName").text("Updated GST");

    $(".dis_subtotal").show();
  }

  function hideExtraGst() {
    $(".dis_subtotal").hide();
    $(".dis_subtotal").find(".dis_sub_val").text(0);
    $(".dis_subtotal").find(".dis_gst").text(0);
    $(".dis_subtotal").parent().find(".gstName").text("Products GST");
  }

  async function getCartBasedDiscount(val) {
    $("#promocode_discount_item").hide();

    let cur = $("#currency").val();
    await $.ajax({
      type: "GET",
      url: url + "sell_development/getShoppingAmountBasedDiscount",
      data: { price: val },
      dataType: "json",
      success: function (res) {
        if (parseFloat(res.shopping_based_discount) > 0) {
          showExtraGst();
          // let oldGst = parseFloat($("#total_gst").text());

          // $(".dis_subtotal")
          //   .find(".dis_sub_val")
          //   .text(
          //     parseFloat(parseFloat($("#subtotal").text()) + oldGst).toFixed(2)
          //   );
          // $(".dis_subtotal")
          //   .find(".dis_gst")
          //   .text(parseFloat(oldGst).toFixed(2));
          // $(".dis_subtotal").parent().find(".gstName").text("Updated GST");

          // $(".dis_subtotal").show();

          setNewGSt(res.shopping_based_discountPercentage);
          val = parseFloat(
            parseFloat(
              parseFloat(val) + parseFloat($("#total_gst").text())
            ).toFixed(2)
          );

          $("#shopping_based_discount").val(res.shopping_based_discount);
          $("#discount_amt").val(res.shopping_based_discount);
          $("#total_pay").html(
            parseFloat(val - res.shopping_based_discount).toFixed(2)
          );

          $("#discount").val(res.shopping_based_discountPercentage);

          $("#hidden_total_pay").val(
            parseFloat(val - res.shopping_based_discount).toFixed(2)
          );

          $("#shopping_based_discount_amount").html(
            cur + parseFloat(res.shopping_based_discount).toFixed(2)
          );

          isFloat(res.shopping_based_discountPercentage)
            ? $("#shopping_based_discountPercentage").html(
                parseFloat(res.shopping_based_discountPercentage).toFixed(2)
              )
            : $("#shopping_based_discountPercentage").html(
                parseInt(res.shopping_based_discountPercentage)
              );

          $("#promocode_item").hide();
          $("#cart_based_item").show();
        } else {
          $("#shopping_based_discount").val(0);
          $("#discount").val(0);
          $("#discount_amt").val(0);

          hideExtraGst();
          // $(".dis_subtotal").hide();
          // $(".dis_subtotal").find(".dis_sub_val").text(0);
          // $(".dis_subtotal").find(".dis_gst").text(0);
          // $(".dis_subtotal").parent().find(".gstName").text("Products GST");

          val = parseFloat(
            parseFloat(
              parseFloat(val) + parseFloat($("#total_gst").text())
            ).toFixed(2)
          );

          $("#total_pay").html(parseFloat(val).toFixed(2));
          $("#hidden_total_pay").val(parseFloat(val).toFixed(2)); //new for pos

          // $("#promocode_item").show();
          $("#cart_based_item").hide();
        }

        // $("#hidden_subtotal").val(parseFloat(Math.round(val)).toFixed(2));
      },
    });

    $("#promocode").val("");
    $("#applied").val("false");
    $("#promo_err").html("");
    $("#hidden_subtotal").val(
      parseFloat(parseFloat($("#subtotal").html()).toFixed(2)).toFixed(2)
    );
  }

  // Dipesh
  $("#checkPromocode").click(function () {
    var siteCurrency = $("#siteCurrency").val();
    var promocode = $("#promocode").val();
    var base_url = $("#base_url").val();
    var total_price = parseFloat($("#subtotal").text());

    $("#applied_promo").val("");
    $("#promoAmount").html("0");
    $(".promocode-applied").hide();

    $("#promo_err").html("");

    $.ajax({
      url: base_url + "sell_development/validate_promocode", //change by dipesh
      type: "post",
      data: { promocode: promocode, total_price: total_price },
      dataType: "json",
      success: function (response) {
        $("#promo_err").html(response.message);
        if (response.success == "1") {
          let per =
            (parseFloat(response.data).toFixed(2) * 100) /
            parseFloat(response.orderAmount).toFixed(2);

          if ($("#applied").val() === "false") {
            showExtraGst();
            setNewGSt(per);

            let val = parseFloat(
              parseFloat(parseFloat(total_price).toFixed(2)) +
                parseFloat(parseFloat($("#total_gst").text()).toFixed(2))
            ).toFixed(2);

            $("#total_pay").html(
              parseFloat(
                val - parseFloat(parseFloat(response.data).toFixed(2))
              ).toFixed(2)
            );

            $("#hidden_total_pay").val(
              parseFloat(
                val - parseFloat(parseFloat(response.data).toFixed(2))
              ).toFixed(2)
            );
            $("#applied").val("true");
          } else {
            $("#promo_err").html("Promocode already applied!");

            showExtraGst(true);
            setNewGSt(per);
          }

          //

          $("#promocode_discount").html(
            parseFloat(parseFloat(response.data.toFixed(2))).toFixed(2)
          );
          $("#discount_amt").val(
            parseFloat(parseFloat(response.data.toFixed(2))).toFixed(2)
          );

          $("#discount").val(parseFloat(per).toFixed(2));

          isFloat(per)
            ? $("#promocode_per").html(parseFloat(per).toFixed(2))
            : $("#promocode_per").html(parseInt(per));

          $("#promocode_discount_item").show();

          // // finalAmount = (orderAmount + parseFloat(shipping_charge) - parseFloat(response.data)).toFixed(2)
          // finalAmount = parseFloat(orderAmount - response.data).toFixed(2);
          // // console.log("orderAmount ====" ,orderAmount ,  parseFloat(shipping_charge) ,  parseFloat(response.data))
          // if ($("#totalSaving").length) {
          //   var amount = response.data;
          //   var promocodeDiscount =
          //     parseFloat(response.withoutPromo) + parseFloat(amount);
          //   $("#totalSaving").html(
          //     siteCurrency + " " + promocodeDiscount.toFixed(2)
          //   );
          // }
          // $("#promoAmount").html(response.data.toFixed(2));
          // $("#checkout_final").html(finalAmount);
          // $(".promocode-applied").show();
          // $("#applied_promo").val(promocode);
        } else {
          hideExtraGst();

          $("#hidden_total_pay").val(
            parseFloat(
              parseFloat(parseFloat(total_price).toFixed(2)) +
                parseFloat(parseFloat($("#total_gst").text()).toFixed(2))
            ).toFixed(2)
          );

          // $("#hidden_subtotal").val(Math.round(total_price));
          $("#discount").val(0);
          $("#discount_amt").val(0);

          // $("#applied_promo").val("");
          // $("#checkout_final").html(
          //   (
          //     parseFloat(response.orderAmount) + parseFloat(shipping_charge)
          //   ).toFixed(2)
          // );
          // var promocodeDiscount = parseFloat(response.withoutPromo);
          // $("#totalSaving").html(
          //   siteCurrency + " " + promocodeDiscount.toFixed(2)
          // );
        }
      },
    });
    $("#hidden_subtotal").val(
      parseFloat(parseFloat($("#subtotal").html()).toFixed(2)).toFixed(2)
    );
  });

  // promocode
  $(document).on("keyup", "#disc_percentage", function () {
    var disc = $(this).val();
    if (disc > 99) {
      // $(this).val("");
      $(this).next("label").html("Discount must be less than 100%");
      // Dipesh
      $("#paypal_form").on("submit", function (e) {
        return;
      });

      // $('#span_pay').css("display","none");
    } else if (Math.sign(disc) == -1) {
      // $(this).val("");
      $(this).next("label").html("Discount value not be minus");
      $("#paypal_form").on("submit", function (e) {
        return;
      });
    } else {
      $("#paypal_form").on("submit", function (e) {
        e.submit();
      });

      $(this).next().html("");
      var extra_discount = calculate_disc_percentage();

      // $('#hidden_discount_total').val(extra_discount.toFixed(2));
      // var subtotal = calculateSubtotal();
      // var pay_total = subtotal - extra_discount;
      // $('#hidden_total_pay').val(pay_total.toFixed(2));
      // $('#paypal_amount').val(pay_total.toFixed(2));

      // Dk
      $(".after-pay button").fadeOut();

      setTimeout(() => {
        $(".pay-btn").fadeIn();
      }, 400);
    }
  });

  $(document).on("keydown", "form", function (event) {
    return event.key != "Enter";
  });

  calculate_disc_percentage();
  async function calculate_disc_percentage() {
    var sub_total = calculateSubtotal();

    if (sub_total == 0) {
      $(".total-payment-wrap").addClass("hide");

      // $("#promocode_item").hide();
      document.getElementById("promocode_item").style.display = "none";
      // $("#promocode_item").addClass("hide");
      $("#parked_sell").attr("disabled", "disabled");
      $(".discard_class").attr("disabled", "disabled");
    } else {
      $(".total-payment-wrap").removeClass("hide");
      // $("#promocode_item").show();

      document.getElementById("promocode_item").style.display = "flex";
      // $("#promocode_item").removeClass("hide");
      $("#parked_sell").attr("disabled", false);
      $(".discard_class").attr("disabled", false);
    }

    if ($("#parked_order_id").val() !== "") {
      $("#parked_sell").attr("disabled", "disabled");
    }
    // var disc_percentage = 0;
    // $("#disc_percentage").val();
    getCartBasedDiscount(sub_total);

    // var pay_total = sub_total - shopping_based_discount;
    // $("#total_pay").html(pay_total.toFixed(2));

    // $("#hidden_subtotal").val(sub_total);
    // $("#hidden_total").val(sub_total);

    // $("#hidden_discount_total").val(shopping_based_discount.toFixed(2));
    // $("#hidden_total_pay").val(pay_total.toFixed(2));
    // $("#paypal_amount").val(pay_total.toFixed(2));
    // return shopping_based_discount;
  }

  function calculateSubtotal() {
    var sub_total = 0;
    $(".sub_total").each(function () {
      sub_total += parseFloat($(this).text());
    });

    var final_subtotal = parseFloat(sub_total).toFixed(2);

    $("#subtotal").html(final_subtotal);

    let isShow = $("#isShow").val();
    if (isShow !== "1") {
      let gst = parseFloat($("#total_gst").text()).toFixed(2); //check

      $("#subtotal").html(
        parseFloat(
          parseFloat(parseFloat(final_subtotal).toFixed(2)) -
            parseFloat(parseFloat(gst).toFixed(2))
        ).toFixed(2)
      );
      return parseFloat(final_subtotal - gst).toFixed(2);
    }

    $("#hidden_subtotal").val(
      parseFloat(parseFloat($("#subtotal").html()).toFixed(2)).toFixed(2)
    );

    // $("#total_pay").html(pay_amount.toFixed(2));
    return final_subtotal;
  }
  // calculateSubtotal();

  $(".mobile").inputFilter(function (value) {
    return /^-?\d*$/.test(value) && value.length <= "15";
  });
  $(document).on("click", "#btn_add_cust", function () {
    $(".form-control").each(function () {
      $(this).next().html("");
    });
    $("#customer_form")[0].reset();
  });

  $("#customer_form").validate({
    rules: {
      customer_name: { required: true },
      customercode: { required: true },
      email: {
        required: true,
        email: true,
        remote: {
          url: url + "sell_development/isAvailable",
          type: "post",
        },
        async: false,
      },
      mobile: {
        required: true,
        minlength: 7,
        maxlength: 15,
        remote: {
          url: url + "sell_development/isAvailable",
          type: "post",
        },
        async: false,
      },
    },
    messages: {
      customer_name: { required: "Please enter name" },
      customercode: { required: "customercode can not be empty" },
      email: {
        required: "Please enter email",
        email: "Please ener valid email",
        remote: "Email already exist",
      },
      mobile: {
        required: "Please enter your mobile number",
        remote: "Mobile number already exist",
      },
    },
    submitHandler: function (form) {
      $("body").attr("disabled", "disabled");
      $("#btnSubmit").attr("disabled", "disabled");
      $("#btnSubmit").val("please wait");
      form.submit();
    },
  });
})();

$(document).ready(function () {
  var siteCurrency = $("#siteCurrency").val();
  $(document).on("click", "#ClearCart", function () {
    var url = $("#url").val();
    swal({
      title: "Do you want to clear cart?",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: url + "products/clear_cart",
          method: "post",
          success: function (output) {
            var obj = $.parseJSON(output);
            if (obj.status == 1) {
              window.location.href = url + "home";
            }
          },
        });
      }
    });
  });

  $(document).on("click", ".removeCartItem", function () {
    var product_weight_id = $(this).data("product_weight_id");
    var product_id = $(this).data("product_id");
    var weight_id = $(this).data("weight_id");
    var that = $(this);
    var url = $("#url").val();
    var shipping_charge = $("#shipingCharge").val();
    shipping_charge = parseFloat(shipping_charge);
    swal({
      title: "Are you sure?",
      text: "Press Ok to delete cart item !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: url + "products/remove_cart",
          method: "post",
          dataType: "json",
          async: false,
          data: {
            product_id: product_id,
            weight_id: weight_id,
            product_weight_id: product_weight_id,
          },
          success: function (output) {
            console.log(output, "onutput");
            if (output.result == "true") {
              swal("Cart item successfully deleted"); //sweet alert
              $("#itemCount").html(output.count);
              $("#updated_list").html(output.updated_list);
              that.closest("td").parent("tr").remove();
            }
            if (output.count == 0) {
              $("#itemCount").css("display", "none");
              window.location.reload();
            }
            var subtot = subtotal();
            $("#display_subtotal").html(siteCurrency + subtot);
            $("#final_subtotal").html(siteCurrency + " " + subtot);
            $("#nav_subtotal").html(siteCurrency + " " + subtot);
            $("#shipingCharge").val(output.delivery_charge);
            $("#delivery_charge").html(siteCurrency + " " + output.delivery_charge);
            var final = parseFloat(subtot) + parseFloat(output.delivery_charge);
            $("#total").html(siteCurrency + " " + final.toFixed(2));
          },
        });
      }
    });

    // if(confirm('Press Ok to delete cart item')){

    // }
  });

  // function setIncDec(product_id,weight_id,action,that,quantity){
  // 	var url = $('#url').val();
  // 	$.ajax({
  // 			url : url +'products/cartIncDec',
  // 			method: 'post',
  // 			dataType: 'json',
  // 			data : {product_id:product_id,weight_id:weight_id,action:action},
  // 			success:function(output){
  // 				if(output.errormsg == ''){
  // 					that.parent('div').parent('td').next('td').html(output.new_total);
  // 				}else{
  // 					alert(output.errormsg);
  // 				}
  // 			}
  // 		})
  // }

  $(document).on("click", ".decrement", function () {
    $(this).prop("disabled", true);
    var that = $(this);
    var product_weight_id = $(this).data("product_weight_id");
    var quantity = $(this).next("input").val();
    var product_id = $(this).next().data("product_id");
    var weight_id = $(this).next().data("weight_id");
    var action = "decrease";
    var url = $("#url").val();
    var shipping_charge = $("#shipingCharge").val();
    shipping_charge = parseFloat(shipping_charge);
    var that = $(this);
    if (quantity == 0) {
      swal({
        title: "Are you sure?",
        text: "Press Ok to delete cart item !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: url + "products/remove_cart",
            method: "post",
            dataType: "json",
            async: false,
            data: {
              product_id: product_id,
              weight_id: weight_id,
              product_weight_id: product_weight_id,
            },
            success: function (output) {
              if (output.result == "true") {
                swal("Cart item successfully deleted");

                if (output.count == 0) {
                  $("#itemCount").css("display", "none");
                  window.location.reload();
                }
                setTimeout(function () {
                  that.removeAttr("disabled");
                }, 1000);

                $("#updated_list").html(output.updated_list);
                $("#itemCount").html(output.count);

                that.closest("td").parent("tr").remove();
                var subtot = subtotal();
                $("#display_subtotal").html(siteCurrency + subtot);
                $("#final_subtotal").html(siteCurrency + subtot);
                // $("#nav_subtotal").html(siteCurrency + " " + subtot);
                var final = parseFloat(subtot) + shipping_charge;
                $("#total").html(siteCurrency + " " + parseFloat(final).toFixed(2));
              }
            },
          });
        } else {
          $(this).prop("disabled", false);
          that.next("input").val(1);
        }
      });
    } else {
      var subtot = subtotal();
      $.ajax({
        url: url + "add_to_card/cartIncDec",
        method: "post",
        dataType: "json",
        async: false,
        data: {
          product_id: product_id,
          weight_id: weight_id,
          product_weight_id: product_weight_id,
          action: action,
          subtotal: subtot,
        },
        success: function (output) {
          that.val(quantity);
          $("#updated_list").html(output.updated_list);
          // window.location.reload();
          setTimeout(function () {
            that.removeAttr("disabled");
          }, 1000);
          if (output.errormsg == "") {
            that.closest('td').addClass('ffffffff');
            that.parent().parent().parent().next("td").find('h3').html(siteCurrency + "" + output.new_total);
            that.parent().parent().parent().next("td").find('input').val(output.new_total);
            var subtot = subtotal();
            if (output.new_quan == "") {
              that.next("input").val(output.max_qun);
            }
            $("#display_subtotal").html(subtot);
            $("#final_subtotal").html(siteCurrency + " " + subtot);
            // $("#nav_subtotal").html(siteCurrency + " " + subtot);
            // new
            if ($("#shipping_charge").val() !== output.delivery_charge) {
              $("#shipping_charge").val(output.delivery_charge);
            }
            // check
            $("#delivery_charge").html(siteCurrency + " " + output.delivery_charge);
            var final = parseFloat(subtot) + parseFloat(output.delivery_charge);
            $("#total").html(siteCurrency + " " + parseFloat(final).toFixed(2));
          } else {
            swal(output.errormsg);
          }
        },
      });
    }
  });

  $(document).on("click", ".increment", function () {
    $(this).prop("disabled", true);

    var that = $(this);
    var product_weight_id = $(this).data("product_weight_id");
    var quantity = $(this).prev("input").val();
    var product_id = $(this).prev("input").data("product_id");
    var weight_id = $(this).prev("input").data("weight_id");
    var action = "increase";
    var url = $("#url").val();
    var subtot = subtotal();

    var shipping_charge = $("#shipingCharge").val();
    if (quantity < 0 || typeof quantity == "undefined") {
      swal("Somthing Went Wrong");
      window.location.reload();
      return false;
    }
    shipping_charge = parseFloat(shipping_charge);
    if (quantity == 0) {
      swal("Are you want to delete this product");
    } else {
      $.ajax({
        url: url + "add_to_card/cartIncDec",
        method: "post",
        dataType: "json",
        async: false,
        data: {
          product_id: product_id,
          weight_id: weight_id,
          product_weight_id: product_weight_id,
          action: action,
          subtotal: subtot,
        },
        success: function (output) {
          setTimeout(function () {
            that.removeAttr("disabled");
          }, 1000);
          // return false;
          // window.location.reload();
          $("#updated_list").html(output.updated_list);
          if (output.errormsg == "") {
            that.parent().parent().parent().next("td").find('h3').html(siteCurrency + output.new_total);
            that.parent().parent().parent().next("td").find('input').val(output.new_total);
            var subtot = subtotal();

            $("#display_subtotal").html(subtot);
            $("#final_subtotal").html(siteCurrency + " " + subtot);
            // $("#shipping_charge").val(output.delivery_charge);
            //   if ($("#shipping_charge").val() !== output.delivery_charge) {
            //     $("#shipping_charge").val(output.delivery_charge);
            //   }
            //   //
            var final = parseFloat(subtot) + parseFloat(output.delivery_charge);
            $("#delivery_charge").html(siteCurrency + " " + output.delivery_charge);
            $("#total").html(siteCurrency + " " + parseFloat(final).toFixed(2));
          } else {
            swal(output.errormsg);
            that.prev("input").val(quantity - 1);
          }
        },
      });
    }
  });

  function subtotal() {
    var subtot = 0;
    $(".total").each(function () {
      var total = $(this).val();
      if (total.match(/\<font.+\>/)) {
        total = $(this).find('font').html();
      }
      // var  total = total.substring(3, total.length);
      subtot += parseFloat(total);
    });

    return subtot.toFixed(2);
  }

  $(document).ready(function () {
    function check() {
      // alert();
      var mycartCheck = $("#session_my_cart").val();
      if (mycartCheck == 0) {
        $(".checkout").css("disabled", true);
        $(".checkout").css("pointer-events", "none");
      } else {
        $(".checkout").css("disabled", false);
        $(".checkout").css("pointer-events", "");
      }
    }
    check();
  });
});

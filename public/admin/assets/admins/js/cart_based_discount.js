var url = $("#url").val();
$(document).ready(function () {
  $(".alert").fadeOut(5000);
});

$("#frmAddEdit").validate({
  rules: {
    cart_amount: {
      required: true,
      number: true,
      remote: {
        url: url + "cart_amount_based_discount/checkAmountExist",
        type: "POST",
        async: false,
        data: {
          update_id: function () {
            return $("#id").val();
          },
        },
      },
    },
    //     discount_percentage: {
    //         required: true,
    //         number: true,
    //         range: [1, 99]
    //     },
    //   },
    // },
    discount_percentage: {
      required: true,
      number: true,
      range: [1, 99],
    },
    submitHandler: function (form) {
      $("body").attr("disabled", "disabled");
      $("#btnSubmit").attr("disabled", "disabled");
      $("#btnSubmit").value("please wait");
      form.submit();
    },
  },
});

$(".table").DataTable();

$(document).on("click", ".delete", function () {
  var id = $(this).val();
  var that = $(this);
  var x = confirm("Are you sure you want to delete?");
  if (x) {
    $.ajax({
      url: url + "Promocode_manage/removeRecord",
      type: "post",
      data: { id: id },
      success: function (output) {
        that.parent().parent().remove();
      },
    });
  }
});

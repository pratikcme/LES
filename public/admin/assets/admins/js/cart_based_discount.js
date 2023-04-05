var url = $("#url").val();
$(document).ready(function () {
  $(".alert").fadeOut(5000);
});

$("#frmAddEdit").validate({
  rules: {
    branch: { required: true },
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
    discount_percentage: {
      required: true,
      number: true,
      range: [1, 99],
    },
    messages: {
      branch: { required: "Please select branch" },
      cart_amount: {
        required: "Please enter cart amount",
        number: "Please enter value in digit only",
        remote: "Discount is already available on this amount",
      },
      discount_percentage: {
        required: "Please enter discount price",
        number: "Please enter value in digit only",
        rage: "Please enter range between 1 to 99",
      },
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

var TAX = (function () {
  $("#profession").DataTable({
    ordering: false,
  });

  $(".alert").fadeOut(5000);
  var base_url = $("#base_url").val();

  var HandleAddEdit = function () {
    $("#taxForm").validate({
      rules: {
        tax_name: {
          required: true,
        },
      },
      messages: {
        tax_name: {
          required: "Please enter tax name",
        },
      },
      submitHandler: function (form) {
        $("#btnSubmit").attr("disabled", "disabled");
        form.submit();
      },
    });
  };

  var HandleTaxType = function () {
    $("#taxTypeForm").validate({
      rules: {
        tax_id: {
          required: true,
        },
      },
      messages: {
        tax_id: {
          required: "Please select tax",
        },
      },

      submitHandler: function (form) {
        var error = getTaxTypeError();
        if (error == 0) {
          $("#btnSubmit").attr("disabled", "disabled");
          form.submit();
        }
      },
    });

    $("#taxTypeEditForm").validate({
      rules: {
        tax_type: {
          required: true,
        },
        percentage: {
          required: true,
        },
      },
      messages: {
        tax_type: {
          required: "Please enter tax type",
        },
        percentage: {
          required: "Please enter percentage",
        },
      },

      submitHandler: function (form) {
        var error = getTaxTypeError();
        if (error == 0) {
          $("#btnSubmit").attr("disabled", "disabled");
          form.submit();
        }
      },
    });

    function getTaxTypeError() {
      var arr_name = [];
      var error = 0;
      $(".tax_type").each(function () {
        if ($(this).is(":visible")) {
          if ($(this).val() == "") {
            error++;
            $(this)
              .next()
              .html("Please enter tax type")
              .addClass("text-danger");
          } else {
            $(this).next().html("");
          }
        }
      });

      $(".percentage").each(function () {
        if ($(this).is(":visible")) {
          if ($(this).val() == "") {
            error++;
            $(this)
              .next()
              .html("Please enter percentage type")
              .addClass("text-danger");
          } else {
            $(this).next().html("");
          }
        }
      });

      return error;
    }
  };

  return {
    add: function () {
      HandleAddEdit();
    },
    addTaxType: function () {
      HandleTaxType();
    },
  };
})();

$(document).on("click", ".delete_tax", function () {
  let id = $(this).data("tax_id");
  let url = $("#url").val();

  $.ajax({
    url: url + "super_admin/tax/delete",
    type: "POST",
    data: {
      id: id,
    },
    success: function (res) {
      if (parseInt(res) === 1) {
        window.location.reload();
      }
    },
  });
});

$(document).on("click", ".delete_tax_type", function () {
  let id = $(this).data("tax_type_id");
  let url = $("#url").val();

  $.ajax({
    url: url + "super_admin/tax/delete_tax_type",
    type: "POST",
    data: {
      id: id,
    },
    success: function (res) {
      if (parseInt(res) === 1) {
        window.location.reload();
      }
    },
  });
});

$(document).on("click", "#addTaxType", function () {
  var html = $("#appendHtml").html();
  $("#addHtml").append(html);
});

$(document).on("click", ".remove", function () {
  $(this).parent().remove();
});

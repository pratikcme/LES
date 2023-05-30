var url = $("#url").val();
$(document).ready(function () {
  $(".alert").fadeOut(5000);
});

function single_delete(value) {
  bootbox.confirm("Are you sure you want to delete ?", function (confirmed) {
    if (confirmed == true) {
      $.ajax({
        url: url + "live_chat/deleteCreds",
        method: "POST",
        data: {
          id: value,
        },
        success: function (data) {
          if (data == true) {
            bootbox.alert(
              "Chat key has been deleted successfully.",
              function () {
                window.location.reload(true);
              }
            );
          } else {
            alert("Failed to delete selected chat key.");
          }
        },
        error: function () {
          alert("Failed to delete selected chat key.");
        },
      });
    }
  });
}

$("#frmAddEdit").validate({
  rules: {
    property_id: { required: true },
    widget_id: { required: true },
  },
  messages: {
    property_id: { required: "Please enter property id" },
    widget_id: { required: "Please enter widget id" },
  },
  submitHandler: function (form) {
    $("body").attr("disabled", "disabled");
    $("#btnSubmit").attr("disabled", "disabled");
    $("#btnSubmit").value("please wait");
    $(form).submit();
  },
});

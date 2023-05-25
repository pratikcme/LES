var url = $("#url").val();
$(document).ready(function () {
  $(".alert").fadeOut(5000);
});

// function single_delete(value) {
//   bootbox.confirm("Are you sure you want to delete ?", function (confirmed) {
//     if (confirmed == true) {
//       $.ajax({
//         url: url + "live_chat/deleteRecord",
//         data: {
//           id: value,
//         },
//         success: function (data) {
//           if (parseInt(data) == true) {
//             bootbox.alert(
//               "Chat key has been deleted successfully.",
//               function () {
//                 window.location.reload(true);
//               }
//             );
//           } else {
//             alert("Failed to delete selected chat key.");
//           }
//         },
//         error: function () {
//           alert("Failed to delete selected chat key.");
//         },
//       });
//     }
//   });
// }

$("#frmAddEdit").validate({
  rules: {
    live_chat_key: { required: true },
  },
  messages: {
    live_chat_key: { required: "Please enter live chat key" },
  },
  submitHandler: function (form) {
    $("body").attr("disabled", "disabled");
    $("#btnSubmit").attr("disabled", "disabled");
    $("#btnSubmit").value("please wait");
    $(form).submit();
  },
});

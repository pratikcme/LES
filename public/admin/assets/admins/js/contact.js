var CONTACT = (function () {
  $(document).ready(function () {
    $(".alert").fadeOut(5000);
  });

  $(document).on('click', '.see-massge', function () {
    let url = $('#base_url').val();
    let id = $(this).val();
    $.ajax({
      url: url + "admins/messagelist/getMessage",
      type: "POST",
      async: false,
      data: {
        id: id
      },
      success: function (message) {
        $('#user_message').html("");
        $('#user_message').html(message);
      }
    });
  })

  var HandleContactInfo = function () {

    $("#frmAddEdit").validate({
      ignore: [],
      debug: false,
      // ignore: " :hidden",
      rules: {
        image: {
          required: {
            depends: function (e) {
              return $("#hidden_image").val() === "";
            },
          },
          accept: "jpg,png,jpeg,gif",
        },

        location: {
          required: function () {
            CKEDITOR.instances.location.updateElement();
          },
        },
        email: {
          required: function () {
            CKEDITOR.instances.email.updateElement();
          },
        },
        phone_no: {
          required: function () {
            CKEDITOR.instances.phone_no.updateElement();
          },
        },
      },
      messages: {
        image: {
          required: "please select image",
          accept: "Only image type jpg/png/jpeg/gif is allowed",
        },
        location: { required: "Please enter main title" },
        timing: { required: "Please enter about author" },
        phone_no: { required: "Please enter facebook" },
      },
      submitHandler: function (form) {
        $("body").attr("disabled", "disabled");
        $("#btnSubmit").attr("disabled", "disabled");
        $("#btnSubmit").value("please wait");
        $(form).submit();
      },
    });
  };

  var HandleUsersMessageList = function () {
    var url = $("#baseUrl").val();
    // $(".deleteMsg").click(function (e) {
    //   let id = $(this).attr("data-id");

    // });

    $(".deleteMsg").click(function () {
      let id = $(this).attr("data-id");
      bootbox.confirm(
        "Are you sure you want to delete ?",
        function (confirmed) {
          if (confirmed == true) {
            $.ajax({
              type: "GET",
              url: url + "admins/messagelist/deleteMessage",
              data: {
                id: id.toString(),
              },
              success: function (res) {
                console.log("res", res);
                if (res == 1) {
                  bootbox.alert(
                    "Message group has been deleted successfully.",
                    function () {
                      window.location.reload(true);
                    }
                  );
                } else {
                  alert("Failed to delete selected Message group.");
                }
              },
              error: function (err) {
                console.log(err, "err");
                alert("Failed to delete selected Message group.");
              },
            });
          }
        }
      );
    });

    var dataTable = $("#usersMessageList").DataTable({
      // "processing":true,
      // "serverSide":true,
      // "order":[],
      columnDefs: [
        {
          targets: [0],
          orderable: false,
        },
      ],
    });
  };

  return {
    init: function () {
      HandleContactInfo();
    },
    messagelist: function () {
      HandleUsersMessageList();
    },
  };
})();

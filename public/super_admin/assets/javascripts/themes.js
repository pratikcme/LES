var THEMES = (function () {
  $("#profession").DataTable({
    ordering: false,
  });

  $(".alert").fadeOut(5000);

  //   check just
  $(".hideImg").hide();
  $("#photo").change(function () {
    const file = this.files[0];

    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#imgPreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
      $(".hideImg").show();
    } else {
      $(".hideImg").hide();
    }
  });
  //

  $(document).on("click", ".deleteBtn", function () {
    let id = $(this).data("theme_id");
    let url = $("#url").val();

    $.ajax({
      url: url + "super_admin/themes/deleteTheme",
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

  var HandleAdd = function () {
    let base_url = $("#base_url").val();
    $("#theme_form").validate({
      rules: {
        name: {
          required: true,
        },
        image: {
          required: true,
          accept: "image/jpg,image/jpeg,image/png,image/gif",
        },
        details: {
          required: true,
        },
        theme_key: {
          required: true,
          remote: {
            url: base_url + "super_admin/themes/checkThemeKeyExist",
            type: "POST",
          },
        },
      },
      messages: {
        name: {
          required: "Please enter theme name",
        },
        image: {
          required: "Please select theme image",
          accept: "Only image type jpg/png/jpeg/gif is allowed",
        },
        details: {
          required: "Please enter theme details",
        },
        theme_key: {
          required: "Please enter key",
          remote: "Theme key must be unique",
        },
      },
      submitHandler: function (form) {
        $("#btnSubmit").attr("disabled", "disabled");
        form.submit();
      },
    });
  };

  var HandleEdit = function () {
    let base_url = $("#base_url").val();
    $("#theme_form").validate({
      rules: {
        name: {
          required: true,
        },
        image: {
          accept: "image/jpg,image/jpeg,image/png,image/gif",
        },
        details: {
          required: true,
        },
        theme_key: {
          required: true,
          remote: {
            url: base_url + "super_admin/themes/checkThemeKeyExist",
            type: "POST",
            data: {
              theme_id: $("#theme_id").val(),
            },
          },
        },
      },
      messages: {
        name: {
          required: "Please enter theme name",
        },
        image: {
          accept: "Only image type jpg/png/jpeg/gif is allowed",
        },
        details: {
          required: "Please enter theme details",
        },
        theme_key: {
          required: "Please enter key",
          remote: "Theme key must be unique",
        },
      },
      submitHandler: function (form) {
        form.submit();
      },
    });
  };

  return {
    //main function to initiate the module
    // delete: function () {
    //   Handledelete();
    // },
    // professionAdd: function () {
    //   HandleAdd();
    // },
    edit: function () {
      HandleEdit();
    },
    add: function () {
      HandleAdd();
    },
  };
})();

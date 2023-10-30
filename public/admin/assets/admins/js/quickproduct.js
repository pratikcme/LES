var url = $("#base_url").val();
$("#image").on("change", function () {
  $("#about").trigger("focus");
});
/*Get Brand From Store*/
$(function () {
  $("#category_id").change(function () {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url() . 'product/get_brand'; ?>",
      data: {
        category_id: $("#category_id option:selected").val(),
      },
    }).done(function (msg) {
      $("#get_brand").html(msg);
    });
    $.ajax({
      type: "POST",
      url: "<?php echo base_url() . 'product/get_subCategory'; ?>",
      data: {
        category_id: $("#category_id option:selected").val(),
      },
    }).done(function (msg) {
      $("#get_subCategory").html(msg);
    });
  });
});
var base_url = $("#base_url").val();
$("#product_form").validate({
  rules: {
    name: {
      required: true,
      maxlength: 100,
    },
    category_id: {
      required: true,
    },
    supplier_id: {
      required: true,
    },
    brand_id: {
      required: true,
    },
    subcategory_id: {
      required: true,
    },
    // about: {
    //     required: true,
    //     maxlength: 500
    // },
    image: {
      required: true,
      accept: "image/jpg,image/jpeg,image/png,image/gif",
    },
    image_edit: {
      accept: "image/jpg,image/jpeg,image/png,image/gif",
    },
    // content: {
    //     required: true,
    //     maxlength: 500
    // },
    gst: {
      // required: true,
      maxlength: 15,
      // number : true,
    },
    tags: {
      maxlength: 15,
    },
    display_priority: {
      remote: {
        url: base_url + "product/check_display_priority",
        type: "post",
        data: {
          product_id: function () {
            return $("#id").val();
          },
        },
      },
    },
  },
  messages: {
    name: {
      required: "Please enter product name",
      maxlength: "Please enter maximum 100 character product name",
    },
    category_id: {
      required: "Please select category",
    },
    supplier_id: {
      required: "Please select supplier",
    },
    brand_id: {
      required: "Please select brand",
    },
    subcategory_id: {
      required: "Please select subcategory",
    },
    // about: {
    //     required: "Please enter about",
    //     maxlength: "Please enter maximum 500 character about"
    // },
    image: {
      required: "Select Image",
      accept: "Only image type jpg/png/jpeg/gif is allowed",
    },
    image_edit: {
      accept: "Only image type jpg/png/jpeg/gif is allowed",
    },
    // content: {
    //     required: "Please enter content",
    //     maxlength: "Please enter maximum 500 character content"
    // },
    gst: {
      // required: "Please enter gst percent",
      maxlength: "Please enter maximum 15 character",
      // number : "Please enter number only",
    },
    display_priority: {
      remote: "Priority already assigned",
    },
  },
  error: function (label) {
    $(this).addClass("error");
  },

  submitHandler: function (form) {
    // $('.btn').attr('disabled','disabled');
    form.submit();
  },
});

// Add New category //

var url = $("#base_url").val();
$(document).ready(function () {
  // $('#name').trigger('click');
  $("#name").focus();
});

$(document).ready(function () {
  // ajax cat list //

  $.ajax({
    type: "POST",
    url: url + "quickProduct/ajaxCategoryData",
    success: function (output) {
      $("#category").html(output);
    },
  });

  $("#categoryForm").validate({
    rules: {
      name: {
        required: true,
        remote: {
          url: url + "category/isCategoryAvailable",
          type: "post",
          data: {
            id: function () {
              return $("#id").val();
            },
          },
        },
      },
      image: {
        required: true,
        accept: "image/jpg,image/jpeg,image/png,image/gif",
      },
    },
    messages: {
      name: {
        required: "Please enter category name",
        remote: "Category name already exist",
      },
      image: {
        required: "Please select image",
        accept: "Only image type jpg/png/jpeg/gif is allowed",
      },
      image_edit: {
        accept: "Only image type jpg/png/jpeg/gif is allowed",
      },
    },
    submitHandler: function (form) {
      $.ajax({
        type: "POST",
        url: url + "quickProduct/category_add_update",
        data: new FormData(form),
        contentType: JSON,
        processData: false,
        contentType: false,
        success: function (output) {
          $("#category").html(output.html);
          $("#category_id").html(output.htmlMain);
        },
      });
    },
  });
});

function check() {
  $res = "";
  $.ajax({
    url: url + "category/isCategoryAvailable",
    type: "post",
    data: {
      id: function () {
        return $("#id").val();
      },
      name: function () {
        return $("#name").val();
      },
    },
    async: false,
    success: function (out) {
      $res = out;
    },
  });

  return $res;
}

$(document).on("change", "#image", function () {
  var imgpreview = DisplayImagePreview(this);
  $(".img_preview").show();

  setTimeout(function () {
    $("#cat").focus();
    $("#image").focus();
  }, 500);
});
setTimeout(function () {
  $("#name").trigger("click");
}, 1000);
function DisplayImagePreview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#img_preview").attr("src", e.target.result);
    };
    // $("#name").trigger("focus");
    $("#image-error").remove();
    $("#loaded").show();
    reader.readAsDataURL(input.files[0]);
  }
  validateFileType();
}
function validateFileType() {
  var fileName = $("#image").val();
  var idxDot = fileName.lastIndexOf(".") + 1;
  var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
  if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
    $("#img_preview").show();
    $("#loaded").hide();
    // $("#ERR").html("");
  } else {
    $("#ERR").show();
    $("#img_preview").attr("style", "display: none;");
    $("#loaded").hide();
    // $("#ERR").html("Only image type jpg/png/jpeg/gif is allowed");
  }
}
$(document).click(function (event) {
  $("#ERR:visible").hide();
});

// Store Add Quick Category  //

$(document).ready(function () {
  // Initialize the form validation using jQuery Validate plugin
  $("#myForm").validate({
    rules: {
      username: {
        required: true,
      },
      password: {
        required: true,
      },
    },
    messages: {
      username: "Please enter your username",
      password: "Please enter your password",
    },
    submitHandler: function (form) {
      // Form is valid; make an AJAX call
      var username = $("#username").val();
      var password = $("#password").val();

      //   $.ajax({
      //     type: "POST",
      //     url: "your-server-endpoint.php", // Replace with your server endpoint
      //     data: {
      //       username: username,
      //       password: password,
      //     },
      //     success: function (response) {
      //       // Handle the AJAX response here
      //       console.log(response);
      //     },
      //     error: function (xhr, status, error) {
      //       // Handle errors
      //       console.error(xhr.responseText);
      //     },
      //   });
    },
  });
});

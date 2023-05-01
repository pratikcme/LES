var VENDORS = (function () {
  $("#profession").DataTable({
    ordering: false,
  });

  $(".hideImg").hide();
  $("#theme_select").change(function () {
    // let img = $(this);
    var base_url = $("#base_url").val();
    let img = $(this).find(":selected").data("img");

    if (img !== undefined) {
      $("#imgPreview").attr(
        "src",
        base_url + "public/images/themes_images/" + img
      );
      $(".hideImg").show();
    } else {
      $(".hideImg").hide();
    }
  });

  $(document).on("click", "#add", function () {
    var html = $("#html").html();
    $("#append").append(html);
  });

  $(document).on("click", ".remove", function () {
    $(this).closest(".row").remove();
  });

  $(".alert").fadeOut(5000);

  $(document).on("click", ".redirect_to", function () {
    let href = $(this).data("href");
    window.open("http://" + href);
  });

  var base_url = $("#base_url").val();
  var HandleAdd = function () {
    $(document).on("change", "#domain_type", function () {
      $("#domain_name").val("");
      $("#database").val("");
    });

    $("#vendor_form").validate({
      rules: {
        domain_name: {
          required: true,
          maxlength: 50,
          remote: {
            url: base_url + "super_admin/vendors/checkDomainExist",
            type: "POST",
            data: {
              domain_name: function () {
                return $("#domain_name").val();
              },
              domain_type: function () {
                return $("#domain_type").val();
              },
              database: function () {
                return $("#database").val();
              },
            },
          },
        },
        domain_type: {
          required: true,
          // url : true,
        },
        name: {
          required: true,
          maxlength: 25,
        },
        store_type: {
          required: true,
        },
        ownername: {
          required: true,
          maxlength: 25,
        },
        image: {
          required: true,
          accept: "image/jpg,image/jpeg,image/png,image/gif",
        },
        email: {
          required: true,
          email: true,
          remote: {
            url: base_url + "super_admin/vendors/checkEmailExist",
            type: "POST",
            data: {
              email: function () {
                return $("#email").val();
              },
              database: function () {
                return $("#database").val();
              },
            },
          },
        },
        password: {
          required: true,
          minlength: 6,
          maxlength: 25,
        },
        cpassword: {
          required: true,
          minlength: 6,
          maxlength: 25,
          equalTo: "#password",
        },
        mobile_number: {
          required: true,
          number: true,
          minlength: 7,
          maxlength: 15,
        },
        login_type: {
          required: true,
        },
        address: {
          required: true,
        },
        location: {
          required: true,
        },
        language_support: {
          required: true,
        },
        theme_name: {
          required: true,
        },
      },
      messages: {
        domain_name: {
          required: "please enter your domain name",
          maxlength: "Domain name must be less than or equal to 50 digit",
          remote: "Domain name already exist",
        },
        domain_type: {
          required: "please select domain type",
        },
        name: {
          required: "Please enter shop name",
        },
        store_type: {
          required: "Please enter type of store",
        },
        ownername: {
          required: "Please enter shop owner name",
        },
        image: {
          required: "Please select image",
          accept: "Only image type jpg/png/jpeg/gif is allowed",
        },
        email: {
          required: "Please enter email",
          email: "Please enter valid email",
          remote: "This email is already exist",
        },
        password: {
          required: "Please enter password",
          minlength: "Please enter minmum 6 digit password",
          maxlength: "Your password must be less than or equal to 25 digit",
        },
        cpassword: {
          required: "Please enter confrim password",
          equalTo: "Password and confirm password does not match",
          minlength: "Please enter minmum 6 digit password",
          maxlength: "Confirm  password must be less than or equal to 25 digit",
        },
        mobile: {
          required: "Please enter phone number",
          digits: "Please enter valid phone number",
          minlength: "Please enter minmum 7 digit mobile number",
          maxlength: "Mobile number must be less than or equal to 15 digit",
        },
        login_type: {
          required: "Please select at least login type",
        },
        address: {
          required: "Please enter address",
        },
        location: {
          required: "Please select location",
        },
        language_support: {
          required: "Please select primary language",
        },
        theme_name: {
          required: "Please select theme",
        },
      },
      submitHandler: function (form) {
        // if(grecaptcha.getResponse().length === 0){
        //  alert('Please tick the box to continue');
        //  return false;
        // }
        $("#btnSubmit").attr("disabled", "disabled");
        form.submit();
      },
    });
  };

  var HandleEdit = function () {
    $("#editForm").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        approved: {
          required: true,
          digits: true,
          min: 1,
          max: 9,
        },
        login_type: {
          required: true,
        },
        webTitle: {
          required: true,
          maxlength: 25,
        },
        android_version: {
          required: true,
        },
        ios_version: {
          required: true,
        },
        android_isforce: {
          required: true,
          digits: true,
          max: 1,
        },
        ios_isforce: {
          required: true,
          digits: true,
          max: 1,
        },
        display_price_with_gst: {
          required: true,
        },
        language_support: {
          required: true,
        },
        theme_name: {
          required: true,
        },
      },
      messages: {
        email: {
          required: "Please enter email",
        },
        approved: {
          required: "Please enter approved branch",
        },
        language_support: {
          required: "Please select primary language",
        },
        theme_name: {
          required: "Please select theme",
        },
      },
      submitHandler: function (form) {
        form.submit();
      },
    });

    // $("#theme_change").change(function () {
    //   const file = this.files[0];

    //   if (file) {
    //     let reader = new FileReader();
    //     reader.onload = function (event) {
    //       $("#imgPreview").attr("src", event.target.result);
    //     };
    //     reader.readAsDataURL(file);
    //     $(".hideImg").show();
    //   } else {
    //     $(".hideImg").hide();
    //   }
    // });

    $("#theme_change").change(function () {
      var base_url = $("#base_url").val();
      let img = $(this).find(":selected").data("img");

      if (img !== undefined) {
        $("#imgPreview").attr("src", "");
        $("#imgPreview").attr("src", img);
        $(".editTheme").show();
      } else {
        $(".editTheme").hide();
      }
    });
  };

  // var Handledelete = function () {
  //      $('.delete').click(function(){
  //         var base_url = $('#base_url').val();
  //         var id = $(this).val();
  //         var that = $(this);
  //         // var x = confirm("Are you sure you want to delete?");
  //   	swal({
  // 		  title: "Are you sure?",
  // 		  text: "Do you want to delete",
  // 		  icon: "warning",
  // 		  buttons: true,
  // 		  dangerMode: true,
  // 		})
  // 		.then((willDelete) => {
  // 		  if (willDelete) {
  // 		  	$.ajax({
  //                 url : base_url+'admin/profession/delete',
  //                 method:'post',
  //                 data: { id : id },
  //                 success:function(response){
  //                      window.location.reload();
  //                 }
  //        			 })
  // 		  }
  // 	});
  //     })
  // }

  return {
    //main function to initiate the module
    delete: function () {
      Handledelete();
    },
    professionAdd: function () {
      HandleAdd();
    },
    edit: function () {
      HandleEdit();
    },
    add: function () {
      HandleAdd();
    },
  };
})();

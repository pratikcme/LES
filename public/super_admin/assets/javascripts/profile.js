var USERPROFILE = function () {
  $(document).ready(function () {
    $('.alert').fadeOut(5000);
  });

  var HandleProfile = function () {

    $('#ProfileForm').validate({
      rules: {
        company_name: {
          required: true,
          maxlength: 25
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
        },
        new_password: {
          required: true,
        },
        confirm_password: {
          required: true,
          equalTo: "#new_password"
        }
      },
      messages: {
        company_name: { required: "Please enter company name" },
        email: {
          required: "Please enter email",
          email: 'Please enter valid email address'
        },
        password: {
          required: "Please enter old password",
          minlength: "Please enter minmum 6 digit password",
          maxlength: "Your Password must be less than 10 digit"
        },
        new_password: {
          required: "Please enter new password",
          minlength: "Please enter minmum 6 digit password",
          maxlength: "Your Password must be less than 10 digit"
        },
        confirm_password: {
          required: "Please enter confirm password",
          minlength: "Please enter minmum 6 digit password",
          maxlength: "Your Password must be less than 10 digit",
          equalTo: "Your password does not match"
        }
      }
    });
  }

  return {
    //main function to initiate the module
    init: function () {
      HandleProfile();
    }
  };
}();
(function ($) {
  $.fn.inputFilter = function (inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {

      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

var LOGIN = function () {
  // $('label.error').css('display', 'none');
  var url = $('#url').val();
  // $(document).ready(function(){
  //   $('.alert').fadeOut(5000);
  // });

  $(".mob_no").inputFilter(function (value) {
    return /^-?\d*$/.test(value) && (value.length <= "15");
  });

  //  $(".pincode").inputFilter(function(value) {
  //     return /^-?\d*$/.test(value) && (value.length <= "6"); 
  // });

  // $(".name").inputFilter(function(value) {
  //     return /^[a-zA-Z\s]*$/.test(value) && (value.length <= "25"); 
  // });

  // $(".state").inputFilter(function(value) {
  //     return /^[a-zA-Z]*$/.test(value) && (value.length <= "10"); 
  // });

  // $(".city").inputFilter(function(value) {
  //     return /^[a-zA-Z]*$/.test(value) && (value.length <= "15"); 
  // });

  // // last name for sign up
  // $(".lname").inputFilter(function(value) {
  //     return /^[a-zA-Z\s]*$/.test(value) && (value.length <= "15"); 
  // });
  $(document).on('change', '#country_code', function () {
    $('.mob_no').removeAttr('readonly');
    $('.mob_no').val('');
  })

  // var HandleRegisterForm = function () {
  $('#RegisterForm').attr('autocomplete', 'off');
  $('#RegisterForm').validate({
    rules: {
      fname: { required: true, },
      lname: { required: true, },
      country_code: { required: true },
      phone: {
        required: true,
        number: true,
        minlength: 7,
        maxlength: 15,
        remote: {
          url: url + "login/verify_mobile",
          type: "POST",
          data: {
            country_code: function () {
              return $("#country_code").val();
            },
          },
        },
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: url + "login/verify_email",
          type: "POST",
        }
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 20
      },
      confirm_password: {
        required: true,
        minlength: 6,
        maxlength: 20,
        equalTo: "#password"

      },
      term_policy: { required: true }
    },
    messages: {
      email: {
        required: language.please_enter_email,
        email: language.please_enter_valid_email,
        remote: language.this_email_is_already_exist
      },
      fname: { required: language.please_enter_first_name },
      lname: { required: language.please_enter_last_name },
      phone: {
        required: language.please_enter_valid_mobile_number,
        number: "Please enter valid mobile number",
        minlength: language.please_enter_minimum_7_digits,
        maxlength: "Please enter maximum 15 digits",
        remote: language.this_mobile_number_is_already_exist
      },
      country_code: { required: language.please_select_country_code },
      password: {
        required: language.please_enter_password,
        minlength: language.please_enter_at_least_6_character,
        maxlength: language.please_select_less_than_or_equal_to_10_character
      },
      confirm_password: {
        required: language.please_enter_confirm_password,
        minlength: language.please_enter_at_least_6_character,
        maxlength: language.please_select_less_than_or_equal_to_10_character,
        equalTo: language.password_does_not_match
      },
      term_policy: { required: language.Please_accept_Terms_of_conditions_and_Privacy_Policy }
    },submitHandler: function(form) {
      $('#btnSubmit').attr('disabled','disabled');
      form.submit();
  }





  });
  // }

  // var handleLoginForm = function () {
  $('#LoginForm').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
      },
    },
    messages: {
      email: {
        required: language.please_enter_email,
        email: language.please_enter_valid_email
      },
      password: {
        required: language.please_enter_password,
      },
    }
  });
  // }

  // var handleForgetPass = function () {
  $('#ForgetForm').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      email: {
        required: language.please_enter_email,
        email: language.please_enter_valid_email
      },
    }
  });
  // }
  return {
    //main function to initiate the module
    init: function () {
      HandleRegisterForm();
    },
    login: function () {
      handleLoginForm();
    },
    forget: function () {
      handleForgetPass();
    }
  }
}();
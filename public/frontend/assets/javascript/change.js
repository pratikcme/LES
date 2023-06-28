(function ($) {
  $.fn.inputFilter = function (inputFilter) {
    return this.on(
      "input keydown keyup mousedown mouseup select contextmenu drop",
      function () {
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
      }
    );
  };
})(jQuery);
var CHANGE = (function () {
  // $(document).ready(function(){
  //        $('.alert').fadeOut(5000);
  //    });

  $("#ChangeUserPass").validate({
    rules: {
      old_pass: { required: true },
      new_pass: {
        required: true,
        // minlength: 6,
        maxlength: 20,
      },
      confirm_pass: {
        required: true,
        // minlength: 6,
        maxlength: 20,
        equalTo: "#password_new",
      },
    },
    messages: {
      old_pass: {
        required: language.Please_enter_your_old_password,
      },
      new_pass: {
        required: language.Please_enter_your_new_password,
        minlength: language.Please_enter_at_least_6_charecter,
        maxlength: language.Please_select_less_then_20_charecter,
      },
      confirm_pass: {
        required: language.Please_enter_confirm_password,
        minlength: language.Please_enter_at_least_6_charecter,
        maxlength: language.Please_select_less_then_20_charecter,
        equalTo: language.Your_password_does_not_match,
      },
    },
    submitHandler: function (form) {
      $("body").attr("disabled", "disabled");
      $("#btnSubmit").attr("disabled", "disabled");
      $("#btnSubmit").value("please wait");
      $(form).submit();
    },
  });

  $(".phone").inputFilter(function (value) {
    return /^-?\d*$/.test(value) && value.length <= "15";
  });

  var handleChangePass = function () {
    $("#ChangePass").validate({
      rules: {
        profileimage: {
          accept: "jpg,png,jpeg,gif",
        },
        fname: { required: true },
        lname: { required: true },
        // old_pass : { required : true},
        new_pass: {
          // required : true,
          // minlength: 6,
          maxlength: 20,
        },
        confirm_pass: {
          // required : true,
          // minlength: 6,
          maxlength: 20,
          equalTo: "#password",
        },
        user_gst_number: {
          maxlength: 15,
        },
        phone: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        gst: {
          maxlength: 15,
        },
      },
      messages: {
        profileimage: {
          accept: language.image_validation,
        },
        fname: { required: language.Please_enter_first_name },
        lname: { required: language.Please_enter_last_name },
        old_pass: {
          required: language.Please_enter_your_old_password,
        },
        new_pass: {
          required: language.Please_enter_your_new_password,
          minlength: language.Please_enter_at_least_6_charecter,
          maxlength: language.Please_select_less_then_20_charecter,
        },
        confirm_pass: {
          required: language.Please_enter_confirm_password,
          minlength: language.Please_enter_at_least_6_charecter,
          maxlength: language.Please_select_less_then_20_charecter,
          equalTo: language.Your_password_does_not_match,
        },
        phone: {
          required: language.Please_enter_mobile_number,
          digits: language.Please_enter_number_only,
          minlength: language.Please_enter_6_digit_mobile_number,
          maxlength: language.Please_enter_15_digit_mobile_number,
        },
      },
      submitHandler: function (form) {
        if ($(".varification").css("display") == "block") {
          if ($("#otp").val().trim() == "") {
            $("#otpError").text("Please enter otp");
            $("#otpError").css("display", "block");
            return;
          } else if ($("#otp").val().trim().length !== 4) {
            $("#otpError").text("Otp should be 4 digits exact!");
            $("#otpError").css("display", "block");
            return;
          }
        }

        $("body").attr("disabled", "disabled");
        $("#btnSubmit").attr("disabled", "disabled");
        $("#btnSubmit").value("please wait");
        $(form).submit();
      },
    });
  };
  return {
    //main function to initiate the module
    init: function () {
      handleChangePass();
    },
  };
})();

var CONTACT = (function () {
  // $(document).ready(function(){
  //        $('.alert').fadeOut(5000);
  //    });
  var handleContactForm = function () {
    $("#form").validate({
      rules: {
        fname: { required: true, maxlength: 15 },
        mobile_no: {
          required: true,
          digits: true,
          minlength: 7,
          maxlength: 15,
        },
        email: {
          required: true,
          email: true,
        },
        message: { required: true },
      },
      messages: {
        fname: {
          required: language.please_enter_first_name,
          maxlength: language.please_enter_no_more_than_15_characters,
        },
        mobile_no: {
          required: language.please_enter_your_phone_number,
          digits: language.please_enter_only_digits,
          minlength: language.please_enter_minimum_7_digits,
          maxlength: language.please_enter_15_digits_mobile_number,
        },
        email: {
          required: language.please_enter_email,
          email: language.please_enter_valid_email,
        },
        message: { required: language.please_enter_your_message },
      },
      submitHandler: function (form) {
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
      handleContactForm();
    },
  };
})();

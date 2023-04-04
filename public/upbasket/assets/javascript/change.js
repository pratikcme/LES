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

// $(document).ready(function(){
//        $('.alert').fadeOut(5000);
//    });

$('#ChangeUserPass').validate({
    rules: {
        old_pass: { required: true },
        new_pass: {
            required: true,
            // minlength: 6,
            maxlength: 20
        },
        confirm_pass: {
            required: true,
            // minlength: 6,
            maxlength: 20,
            equalTo: "#password_new"
        },
    },
    messages: {
        old_pass: {
            required: language.Please_enter_your_old_password
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
            equalTo: language.Your_password_does_not_match
        },

    },
    submitHandler: function (form) {
        $('body').attr('disabled', 'disabled');
        $('#btnSubmit').attr('disabled', 'disabled');
        $('#btnSubmit').value('please wait');
        $(form).submit();
    }
});




$(".phone").inputFilter(function (value) {
    return /^-?\d*$/.test(value) && (value.length <= "15");
});

$('#ChangePass').validate({
    rules: {
        profileimage: {
            accept: "jpg,png,jpeg,gif"
        },
        fname: { required: true },
        lname: { required: true },
        // old_pass : { required : true},
        new_pass: {
            // required : true,
            // minlength: 6,
            maxlength: 20
        },
        confirm_pass: {
            // required : true,
            // minlength: 6,
            maxlength: 20,
            equalTo: "#password"
        },
        user_gst_number: {
            maxlength: 15
        },
        phone: {
            required: true,
            minlength: 6,
            maxlength: 15,
        },
        gst: {
            maxlength: 15,
        }
    },
    messages: {
        profileimage: {
            accept: language.image_validation,
        },
        fname: { required: language.Please_enter_last_name },
        lname: { required: language.Please_enter_first_name },
        old_pass: {
            required: language.Please_enter_your_old_password
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
            equalTo: language.Your_password_does_not_match
        },
        phone: {
            required: language.Please_enter_mobile_number,
            digits: language.Please_enter_number_only,
            minlength: language.Please_enter_6_digit_mobile_number,
            maxlength: language.Please_enter_15_digit_mobile_number,
        }

    },
    submitHandler: function (form) {
        $('body').attr('disabled', 'disabled');
        $('#btnSubmit').attr('disabled', 'disabled');
        $('#btnSubmit').value('please wait');
        $(form).submit();
    }
});
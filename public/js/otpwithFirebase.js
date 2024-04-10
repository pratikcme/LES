const firebaseConfig = {
    apiKey: "AIzaSyA5Rgi4YOOxB3woa_z9l6yIlkzl3_qN-ac",
    authDomain: "launchestore-42c1d.firebaseapp.com",
    projectId: "launchestore-42c1d",
    storageBucket: "launchestore-42c1d.appspot.com",
    messagingSenderId: "1084683870891",
    appId: "1:1084683870891:web:8c339e2af7d163dbc54dee",
    measurementId: "G-MT0S5BGQWB",
};
firebase.initializeApp(firebaseConfig);

var url = $("#url").val();

$("#completeProfile").hide();
$("#completeOTP").hide();
$("#Register_Form").validate({
    rules: {
        fname: { required: true },
        otp: { required: true },
        lname: { required: true },
        email: {
            required: true,
            email: true,
        },
        phone: { required: true, number: true, minlength: 6, maxlength: 15 },
    },
    messages: {
        otp: { required: "Please enter otp" },

        fname: { required: "Please enter first name" },
        lname: { required: "Please enter last name" },
        email: {
            required: "Please enter email",
            email: "Please enter valid email",
        },
        phone: {
            required: "Please enter valid mobile number",
            number: "Please enter valid mobile number",
            minlength: "Please enter minimum 6 digits",
            maxlength: "Please enter maximum 15 digits",
        },
    },
});
$("#resend").click(function () {
    var country_code = $("#country_code").val();
    var phone = $("#phone").val();
    i = 60;
    $.ajax({
        url: url + "login/sendOtpLogin",
        data: { country_code: country_code, phone: phone },
        type: "post",
        dataType: "json",
        success: function (res) {
            if (res.success == 1) {
                // $("#country_code").attr('disabled',true);
                //  $("#phone").attr('disabled',true);
            }
        },
    });
});
// Initialize reCAPTCHA verifier when the page loads
var appVerifier;

// Wait for the document to be ready
$(document).ready(function () {
    // Initialize reCAPTCHA verifier
    appVerifier = new firebase.auth.RecaptchaVerifier("recaptcha-container");

    // Render the reCAPTCHA widget
    appVerifier.render().then(function (widgetId) {
        // Set the ID of the reCAPTCHA widget
        grecaptchaWidgetId = widgetId;
    });
});

// Event Handling
$(document).on("click", ".s-btn", function (e) {
    // Prevent the default form submission
    e.preventDefault();
    var country_code = $(".country_code").val();
    var phone = $("#phoneNumber").val();
    var phoneNumber = country_code + phone;
    console.log(appVerifier);
    // Verify reCAPTCHA
    firebase
        .auth()
        .signInWithPhoneNumber(phoneNumber, appVerifier)
        .then(function (confirmationResult) {
            // reCAPTCHA verification successful

            window.confirmationResult = confirmationResult;

            // Make AJAX request
            $.ajax({
                url: url + "checkout/updateMobileNumber",
                data: $("#mobileNumber").serialize(),
                dataType: "json",
                type: "POST",
                success: function (response) {
                    if (response.success == "1") {
                        // Handle success
                        $("#mobileModal").modal("hide");
                        $("#Otp").modal("show");
                        $("#Otp").modal({
                            backdrop: "static",
                            keyboard: false,
                        });
                    } else {
                        // Handle failure
                        $(".mobile_verification").html(
                            "This mobile number is linked with another account"
                        );
                        $(".mobile_verification").css("display", "block");
                    }
                },
                error: function (error) {
                    // Handle AJAX error
                    console.error(error);
                },
            });
        })
        .catch(function (error) {
            // Handle reCAPTCHA verification error
            console.error(error);
        });
});

$(document).on("click", "#v-btn", function (e) {
    if ($("#OtpVerification").valid()) {
        var code = $("#otp").val();
        confirmationResult
            .confirm(code)
            .then(function (result) {
                var otp = $("#otp").val();
                $.ajax({
                    url: url + "checkout/OtpVerification",
                    type: "POST",
                    data: { otp: otp },
                    dataType: "json",
                    success: function (response) {
                        if (response.success == "1") {
                            window.location.reload();
                        } else {
                            $("#invalid").css("display", "block");
                            setTimeout(function () {
                                $("#invalid").css("display", "none");
                            }, 3000);
                        }
                    },
                });
            })
            .catch(function (error) {
                $("#invalid").css("display", "block");
                setTimeout(function () {
                    $("#invalid").css("display", "none");
                }, 3000);
            });
    }
});

// $(document).on('click','#btnSubmit',function(e){

//     if($('#mobileNumber').valid()){
//         $.ajax({
//         url: url+'checkout/updateMobileNumber',
//         data: $('#mobileNumber').serialize(),
//         dataType: "json",
//         type:'POST',
//         success: function (response) {
//           if (response.success == "1") {
//             var country_code = $('.country_code').val();
//             var phone     = $('#phoneNumber').val();
//             var phoneNumber = country_code+phone;
//             var appVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');

//             firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
//                 .then(function (confirmationResult) {
//                     var user = res.user_id;
//                     window.confirmationResult = confirmationResult;

//                     $('#recaptcha-container').hide();
//                     $("#mobileModal").modal("hide");
//                     $("#Otp").modal("show");
//                     $("#Otp").modal({ backdrop: "static", keyboard: false });
//                 })
//                 .catch(function (error) {
//                     // Handle errors
//                     console.error(error);
//                 });

//           } else {
//             $(".mobile_verfication").html(
//               "This mobile number is linked with another account"
//             );
//             $(".mobile_verfication").css("display", "block");
//           }
//         },
//       });
//     }
// })
$("#frmBtn").click(function () {
    if ($("#Register_Form").valid()) {
        var that = $(this);

        that.html("Please wait...");

        if ($(this).hasClass("send")) {
            var country_code = $("#country_code").val();
            var phone = $("#phone").val();
            // alert(country_code)
            $.ajax({
                url: url + "login/sendOtpLogin",
                data: { country_code: country_code, phone: phone },
                type: "post",
                dataType: "json",
                success: function (res) {
                    if (res.success == 1) {
                        $("#country_code").attr("readonly", true);
                        $("#phone").attr("readonly", true);
                        var phoneNumber = country_code + phone;
                        // var appVerifier = new firebase.auth.RecaptchaVerifier(
                        //     "recaptcha-container"
                        // );

                        firebase
                            .auth()
                            .signInWithPhoneNumber(phoneNumber, appVerifier)
                            .then(function (confirmationResult) {
                                var user = res.user_id;
                                window.confirmationResult = confirmationResult;

                                that.removeClass("send");
                                that.addClass("varify");
                                that.html("varify otp");
                                $("#completeOTP").show();
                                $("#recaptcha-container").hide();
                                $("#user_id").val(user);
                                $("#fname").val(res.first_name);
                                // console.error(user);
                            })
                            .catch(function (error) {
                                // Handle errors
                                console.error(error);
                            });
                    }
                },
            });
        } else if ($(this).hasClass("varify")) {
            var code = $("#otp").val();

            confirmationResult
                .confirm(code)
                .then(function (result) {
                    // console.log({ result });
                    // alert("Verification successful! User signed in.");
                    var country_code = $("#country_code").val();
                    var phone = $("#phone").val();
                    var otp = $("#otp").val();
                    $.ajax({
                        url: url + "login/varifyOtpLogin",
                        data: {
                            country_code: country_code,
                            phone: phone,
                            otp: otp,
                        },
                        type: "post",
                        dataType: "json",
                        success: function (res) {
                            if (res.success == 1) {
                                $("#resend").hide();
                                $("#resetcounter").hide();

                                if (res.fname != "") {
                                    window.location.href = window.location.href;
                                    return true;
                                }
                                $("#otp").attr("disabled", true);
                                $("#completeProfile").show();
                                $(".varify-error").html("");
                                $(".varify-error").hide();
                                $("#user_id").val(res.user_id);
                                that.removeClass("varify");
                                that.addClass("complete");
                                that.html("Complete Profile");
                            } else {
                                $(".varify-error").show();
                                $(".varify-error").html("Invalid OTP");
                                that.html("varify otp");
                            }
                        },
                    });
                })
                .catch(function (error) {
                    $(".varify-error").show();
                    $(".varify-error").html("Invalid OTP");
                    that.html("varify otp");
                });
        } else if ($(this).hasClass("complete")) {
            var user_id = $("#user_id").val();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();

            $.ajax({
                url: url + "login/completeProfile",
                data: {
                    user_id: user_id,
                    fname: fname,
                    lname: lname,
                    email: email,
                },
                type: "post",
                dataType: "json",
                success: function (res) {
                    if (res.success == 1) {
                        window.location.href = window.location.href;
                    }
                },
            });
        }
    }
});

var PROJECTCONFIG = function () {
  $(document).on('click', '.redirect_to', function () {
    let href = $(this).data('href');
    window.open('http://' + href);
  });
  $('#config').DataTable({
    ordering: false
  });
  $
    ('.alert').fadeOut(5000);

  //  $(document).on('change','#vendor_id',function(){
  //   $('#searchByVendor').submit();
  // });

  var HandleForm = function () {

    $('#frmAdd').validate({
      rules: {
        // user_firebase_key: {required: true},
        staff_firebase_key: { required: true },
        key_id: { required: true },
        team_id: { required: true },
        // user_bandle_id: {required: true},
        staff_bandle_id: { required: true },
        delivery_bandle_id: { required: true },
        // facebook_client_id: {required: true},
        // facebook_secret_id: {required: true},
        // google_client_id: {required: true},
        // google_secret_id: {required: true},
        contact_number: {
          required: true,
          // digits: true,
          // minlength: 7,
          // maxlength: 15
        },
        contact_email: {
          required: true,
          email: true
        },
        twitter_link: {
          url: true
        },
        google_plus_link: {
          url: true
        },
        instagram_link: {
          url: true
        },
        facebook_link: {
          url: true
        }
      },
      messages: {
        user_firebase_key: {
          required: "Please enter user firebase key",
        },
        staff_firebase_key: {
          required: "Please enter staff firebase key",
        },
        key_id: {
          required: "Please enter key id ",
        },
        team_id: {
          required: "Please enter team id",
        },
        user_bandle_id: {
          required: "Please enter users bandle id",
        },
        staff_bandle_id: {
          required: "Please enter staff bandle id",
        },
        delivery_bandle_id: {
          required: "Please enter delivery bandle id",
        },
        facebook_client_id: {
          required: "Please enter facebook client id",
        },
        facebook_secret_id: {
          required: "Please enter facebook secret id",
        },
        google_client_id: {
          required: "Please enter google client id",
        },
        google_secret_id: {
          required: "Please enter google secret id",
        },
        contact_number: {
          required: "Please enter contact number",
          // digits: "Please enter valid phone number",
          // minlength: "Please enter minmum 7 digit contact number",
          // maxlength: "Contact number must be less than or equal to 15 digit",
        },
        contact_email: {
          required: "Please enter contact email",
        },
      },
      submitHandler: function (form) {
        $("#btnSubmit").attr('disabled', 'disabled');
        form.submit();
      }

    });

  }

  return {
    //main function to initiate the module
    init: function () {
      HandleForm();
    }
  };
}();
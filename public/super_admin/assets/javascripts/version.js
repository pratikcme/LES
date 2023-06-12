$("#VersionForm").validate({
    rules: {
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
      }
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
        var X = confirm('Are you sure. do you want to update app features or force update to all client app');
        if(X){
            form.submit();
        }
    },
  });
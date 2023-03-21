var STORE = function () {
    $('#profession').DataTable({
        ordering: false
    });


    $('.alert').fadeOut(5000);
    var base_url = $('#base_url').val();
    var HandleAdd = function () {
        $(document).on('change', '#domain_type', function () {
            $('#domain_name').val('');
            $('#database').val('');
        });

        $('#Form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 25,
                    remote: {
                        url: base_url + 'super_admin/store_type/checkExist',
                        type: 'POST',
                        data: {
                            'id': function () {
                                return $('#id').val();
                            },
                        }
                    },
                }
            },
            messages: {
                name: {
                    required: "Please enter store name",
                    remote: "This store is already exist"
                }
            },
            submitHandler: function (form) {
                $('#btnSubmit').attr('disabled', 'disabled');
                form.submit();
            }
        });
    }

    var HandleEdit = function () {
        $('#editForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                approved: {
                    required: true,
                    digits: true,
                    min: 1,
                    max: 9
                },
                login_type: {
                    required: true
                },
                webTitle: {
                    required: true,
                    maxlength: 25
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
                    max: 1
                },
                ios_isforce: {
                    required: true,
                    digits: true,
                    max: 1
                },
                display_price_with_gst: {
                    required: true
                },
                language_support: {
                    required: true
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
                    required: "Please select primary language"
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }


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
        }

    };
}();
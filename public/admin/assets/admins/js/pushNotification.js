var url = $('#url').val();
$(document).ready(function () {
    $('.alert').fadeOut(5000);
});

$(document).on('change', '#branch', function () {

    var branch_id = $(this).val();
    $('#category').html("");
    $('#product').html("");
    if (branch_id != '') {
        $.ajax({
            url: url + 'banners/get_category_list',
            type: 'post',
            dataType: "json",
            data: { branch_id: branch_id },
            success: function (output) {
                $('#category').parent().css('display', 'block');
                $('#category').html(output.category_list);
                $('#type').removeAttr('disabled');
                $('#product_varient').html('');
                $('#product_varient').html(' <option value="">Select product varient</option>');

            }
        })
    } else {
        $('#category').parent().css('display', 'none');
        $('#product').parent().css('display', 'none');
    }
});

$(document).on('change', '#category', function () {

    var branch_id = $('#branch').val();
    var category_id = $(this).val();

    if (branch_id != '' && category_id != '') {
        $.ajax({
            url: url + 'PushNotification/get_product_list',
            type: 'post',
            dataType: "json",
            data: {
                branch_id: branch_id,
                category_id: category_id
            },
            success: function (output) {
                $('#product').parent().css('display', 'block');
                $('#product').html(output.product_list);
                $('#type').removeAttr('disabled');
                $('#product_varient').html('');
                $('#product_varient').html(' <option value="">Select product varient</option>');

            }
        })
    } else {
        $('#product').parent().css('display', 'none');
    }
});



$('#frmAddEdit').validate({
    rules: {
        branch: { required: true },
        category_id: { required: true },
        product_id: { required: true },
        title: { required: true },
        message: { required: true },
    },
    messages: {
        branch: { required: "Please select branch" },
        category_id: { required: "Please select category" },
        product_id: { required: "Please select product" },
        title: { required: "Please enter title" },
        message: { required: "Please enter message" },
    },
    submitHandler: function (form) {

        $('body').attr('disabled', 'disabled');
        $('#btnSubmit').attr('disabled', 'disabled');
        $('#btnSubmit').value('please wait');
        $(form).submit();
    }

});


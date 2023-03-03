
var url = $('#url').val();
$(document).ready(function () {
    $('.alert').fadeOut(5000);
});

$.validator.addMethod("endDate", function (value, element) {
    var startDate = $('.start_date').val();
    return Date.parse(startDate) <= Date.parse(value) || value == "";
}, "* End date must be grater than start date");

// $.validator.addMethod("startDate", function (value, element) {
//     var endDate = $('.end_date').val();
//     return Date.parse(endDate) >= Date.parse(value) || value == "";
// }, "* Start date must be less than end date");

$('#frmAddEdit').validate({
    rules: {

        name: { required: true },
        percentage: { required: true, number: true, range: [1, 99] },
        max_use: { required: true, number: true, min: 1, maxlength: 3 },
        max_cart: { required: true, number: true, min: 1, maxlength: 6 },
        min_cart: { required: true, number: true, min: 1, maxlength: 6 },
        start_date: { required: true },
        end_date: { required: true, endDate: true },
        notes: { maxlength: 150 },
    },
    messages: {

        name: { required: "Please enter name" },
        percentage: { required: "Please enter percentage", number: "Please enter valid number" },
        max_use: { required: "Please enter max use", number: "Please enter valid number" },
        max_cart: { required: "Please enter maximum cart", number: "Please enter valid number" },
        min_cart: { required: "Please enter minimum cart", number: "Please enter valid number" },
        start_date: { required: "Please enter start date" },
        end_date: { required: "Please enter end date" },
    },
    submitHandler: function (form) {
        $('body').attr('disabled', 'disabled');
        $('#btnSubmit').attr('disabled', 'disabled');
        $('#btnSubmit').value('please wait');
        $(form).submit();
    }

});

$('.table').DataTable();


$(document).on('click', '.delete', function () {
    var id = $(this).val();
    var that = $(this);
    var x = confirm("Are you sure you want to delete?");
    if (x) {
        $.ajax({
            url: url + 'Promocode_manage/removeRecord',
            type: 'post',
            data: { id: id },
            success: function (output) {
                that.parent().parent().remove();
            }
        })
    }
});


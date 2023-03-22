$('#Form').validate({
    rules: {
        "store_type[]": { required: true },
    },
    messages: {
        "store_type[]": { required: "Please select Store Type" },
    },
    submitHandler: function (form) {
        $('#btnSubmit').attr('disabled', 'disabled');
        form.submit();
    }
});
setTimeout(function () {
    $('.alert').remove();
}, 5000)
$('#store_type').multiSelect({
    selectableHeader: "<input type='text' class='search-input' autocomplete='off' placeholder='Search in selection'>",
    selectionHeader: "<input type='text' class='search-input' autocomplete='off' placeholder='Search in selected'>",
    afterInit: function (ms) {
        var that = this,
            $selectableSearch = that.$selectableUl.prev(),
            $selectionSearch = that.$selectionUl.prev(),
            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
            .on('keydown', function (e) {
                if (e.which === 40) {
                    that.$selectableUl.focus();
                    return false;
                }
            });

        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
            .on('keydown', function (e) {
                if (e.which == 40) {
                    that.$selectionUl.focus();
                    return false;
                }
            });
    },
    afterSelect: function () {
        this.qs1.cache();
        this.qs2.cache();
    },
    afterDeselect: function () {
        this.qs1.cache();
        this.qs2.cache();
    }
});
$('#select-all').click(function () {

    jQuery('#store_type').multiSelect('select_all');
});
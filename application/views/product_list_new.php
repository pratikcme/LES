<?php
include('header.php');
?>
<section class="main-section-content">
    <div class="main-content">
        <main class="main-wrapper">
            <div class="top-div">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fa-solid fa-house"></i>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/index'; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:">Products</a></li>
                    </ol>
                </nav>
                <div class="btns-wrapper">
                    <a href="<?= base_url() . 'product/product_profile' ?>" class="add-btn">Add Product</a>
                    <a href="javascript:" id="delete_user" class="delete-btn">Delete Product</a>
                    <div class="tooltip-wrapper">
                        <a href="javascript:" class="disable-btn status_deleted" data-status="9">Disable</a>
                        <span class="tooltiptext">Disable Products</span>
                    </div>
                    <div class="tooltip-wrapper">
                        <a href="javascript:" class="activate status_deleted" data-status="1">activate</a>
                        <span class="tooltiptext">Activate Product</span>
                    </div>
                </div>
            </div>

            <div class="product-details-wrapper">

                <div class="table-wrapper">
                    <div class="add-delete-btns">
                        <div class="search-box"></div>
                    </div>

                    <div class="my-table">
                        <table class="table dataTable" style="width: 100%;text-align: left;" id="example_product_new">
                            <thead>
                                <tr>
                                    <th>
                                        <div>
                                            <input type="checkbox" class="checkboxMain" id="1" name="1" value="1">
                                        </div>
                                    </th>

                                    <th>
                                        <h3>Product Name</h3>
                                    </th>

                                    <th>
                                        <h3>Category Name</h3>
                                    </th>

                                    <th>
                                        <h3>Subcategory Name</h3>
                                    </th>

                                    <th>
                                        <h3>Brand Name</h3>
                                    </th>

                                    <th>
                                        <h3>Change Status</h3>
                                    </th>

                                    <th>
                                        <h3>Action</h3>
                                    </th>

                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>
</section>
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        $('#msg').hide();
    }, 4000);

    /*Single Delete Script*/
    function single_hard_delete(value) {

        bootbox.confirm("Are you sure Do you want to delete..? Product is not recoverd", function(confirmed) {
            if (confirmed == true) {

                var id = value;
                $.ajax({
                    url: '<?php echo base_url() . 'product/check_for_hard_delete'; ?>',
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if (data.status == 1) {
                            single_delete_hard(id);

                        } else if (data.status == 2) {
                            bootbox.alert(data.msg, function() {});
                        } else if (data.status == 5) {
                            bootbox.alert(data.msg, function() {});
                        } else {
                            alert('Failed to delete selected sote.');
                        }
                    },
                    error: function() {
                        alert('Failed to delete selected brand.');
                    }
                });
            }
        })

    }

    function single_delete_hard(value) {

        var id = value;
        $.ajax({
            url: '<?php echo base_url() . 'product/parmanentDeleteProduct'; ?>',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {

                if (data.status == 1) {
                    bootbox.alert("Product has been deleted successfully.", function() {
                        window.location.reload(true);
                    });

                } else if (data.status == 2) {
                    bootbox.alert(data.msg, function() {});
                } else if (data.status == 5) {
                    bootbox.alert(data.msg, function() {});
                } else {
                    alert('Failed to delete selected sote.');
                }
            },
            error: function() {
                alert('Failed to delete selected brand.');
            }
        });

    }


    /*Single Delete Script*/
    function single_delete_check(value) {


        var id = value;
        $.ajax({
            url: '<?php echo base_url() . 'product/check_product_varient'; ?>',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {

                if (data.status == 1) {
                    single_delete(id);

                } else if (data.status == 2) {
                    bootbox.alert(data.msg, function() {});
                } else if (data.status == 5) {
                    bootbox.alert(data.msg, function() {});
                } else {
                    alert('Failed to delete selected sote.');
                }
            },
            error: function() {
                alert('Failed to delete selected brand.');
            }
        });

    }

    /*Single Delete Script*/
    function single_delete(value) {

        bootbox.confirm("Are you sure you want to disable  ?", function(confirmed) {
            if (confirmed == true) {
                var id = value;
                $.ajax({
                    url: '<?php echo base_url() . 'product/single_delete_product'; ?>',
                    data: {
                        id: id
                    },
                    success: function(data) {

                        if (data.status == 1) {
                            bootbox.alert("Product has been disabled successfully.", function() {
                                window.location.reload(true);
                            });
                        } else {
                            alert('Failed to delete selected product.');
                        }
                    },
                    error: function() {
                        alert('Failed to delete selected product.');
                    }
                });
            } else {
                window.location.reload(true);
            }
        });
    }

    $('#delete_user').click(function() {

        if ($('.checkbox_user:checked').length == 0) {

            bootbox.alert('Please select at least one record to delete');
            return;
        }
        bootbox.confirm("Are you sure you want to delete ?", function(confirmed) {
            if (confirmed == true) {

                var ids = [];
                $('.checkbox_user:checked').each(function() {
                    ids.push($(this).val());
                });
                $.ajax({
                    url: '<?php echo base_url() . 'product/multi_delete_product'; ?>',
                    data: {
                        ids: ids.toString()
                    },
                    success: function(data) {
                        var a = data.names;
                        if (data.status == 1) {
                            bootbox.alert("Product(s) has been deleted successfully.",
                                function() {
                                    window.location.reload(true);
                                });
                        } else if (data.status == 2) {
                            bootbox.alert("The product '" + a +
                                "', is maped with varient. Please deselect it and try again.",
                                function() {});
                        } else if (data.status == 5) {


                            bootbox.alert(data.msg, function() {});
                        } else {
                            bootbox.alert('Failed to delete the selected records.');

                        }
                    },
                    error: function() {
                        bootbox.alert('Failed to delete the selected records.');
                    }
                });
            } else {
                window.location.reload(true);
            }
        });
    })

    $(document).ready(function() {
        $('.checkboxMain').on('click', function() {
            if (this.checked) {
                $('.checkbox_user').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox_user').each(function() {
                    this.checked = false;
                });
            }
        });

        $(document).on('click', '.checkbox_user', function() {
            if ($('.checkbox_user:checked').length == $('.checkbox_user').length) {
                $('.checkboxMain').prop('checked', true);
            } else {
                $('.checkboxMain').prop('checked', false);
            }
        });
    });
</script>
<?php include('footer.php'); ?>
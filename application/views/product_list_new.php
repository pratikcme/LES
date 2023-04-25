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
                <!-- <div class="product-header-text">
                    <h2>Product</h2>
                </div> -->

                <div class="table-wrapper">
                    <div class="add-delete-btns">
                        <div class="search-box"></div>
                        <!-- <div class="btns-wrapper">
                                <a href="<?= base_url() . 'product/product_profile' ?>" class="add-btn">Add Product</a>
                                <a href="javascript:" id="delete_user" class="delete-btn" >Delete Product</a>
                                <div class="tooltip-wrapper">
                                <a href="javascript:" class="disable-btn status_deleted" data-status="9">Disable</a>
                                    <span class="tooltiptext">Disable Products</span>
                                </div>
                                <div class="tooltip-wrapper">
                                    <a href="javascript:" class="activate status_deleted" data-status="1">activate</a>
                                    <span class="tooltiptext">Activate Product</span>
                                </div>
                            </div> -->
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

                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" class="checkbox_user" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Cabbage</h3>
                                    </td>

                                    <td>
                                        <h3>Fresh Vegetable</h3>
                                    </td>

                                    <td>
                                        <h3>Exotic Vegetables</h3>
                                    </td>

                                    <td>
                                        <h3>BigBucket</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="disable">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="<?= base_url() ?>public/admin_product_page_assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Cucumber</h3>
                                    </td>

                                    <td>
                                        <h3>Fresh Vegetable</h3>
                                    </td>

                                    <td>
                                        <h3>Vegetable-Regular</h3>
                                    </td>

                                    <td>
                                        <h3>BigBucket</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="disable">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Fresh Halal Chicken</h3>
                                    </td>

                                    <td>
                                        <h3>Non veg. chiken& mutton.pure
                                            halal.SADSA</h3>
                                    </td>

                                    <td>
                                        <h3>Non veg. chiken&mutton
                                            pure halal</h3>
                                    </td>

                                    <td>
                                        <h3>Generic</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="disable">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Water Melon</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>Generic</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="active">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Fresh Halal Chicken</h3>
                                    </td>

                                    <td>
                                        <h3>Non veg. chiken& mutton.pure
                                            halal.SADSA</h3>
                                    </td>

                                    <td>
                                        <h3>Non veg. chiken&mutton
                                            pure halal</h3>
                                    </td>

                                    <td>
                                        <h3>BigBucket</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="disable">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Cucumber</h3>
                                    </td>

                                    <td>
                                        <h3>Fresh Vegetable</h3>
                                    </td>

                                    <td>
                                        <h3>Vegetable-Regular</h3>
                                    </td>

                                    <td>
                                        <h3>BigBucket</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="disable">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Fresh Halal Chicken</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>Generic</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="active">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div>
                                            <input type="checkbox" id="1" name="1" value="1">
                                        </div>
                                    </td>

                                    <td>
                                        <h3>Fresh Halal Chicken</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>American Fruits</h3>
                                    </td>

                                    <td>
                                        <h3>Generic</h3>
                                    </td>

                                    <td>
                                        <div>
                                            <span class="active">Disable</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <span><i class="fa-solid fa-ellipsis-vertical action-dropdown-btn"></i></span>
                                            <div class="action-dropdown">
                                                <a href="#"><span><img src="./assets/images/drodown-icon-1.svg" alt=""></span>Manage Variants</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-2.svg" alt=""></span>Edit product</a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-3.svg" alt=""></span>Delete Product </a>
                                                <a href="#"><span><img src="./assets/images/drodown-icon-4.svg" alt=""></span>Product Image</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
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
                            bootbox.alert(data.msg, function() {
                                // window.location.reload(true);
                            });
                        } else if (data.status == 5) {
                            bootbox.alert(data.msg, function() {
                                // window.location.reload(true);
                            });
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
        // bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
        // if (confirmed == true) {   
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
                    bootbox.alert(data.msg, function() {
                        // window.location.reload(true);
                    });
                } else if (data.status == 5) {
                    bootbox.alert(data.msg, function() {
                        // window.location.reload(true);
                    });
                } else {
                    alert('Failed to delete selected sote.');
                }
            },
            error: function() {
                alert('Failed to delete selected brand.');
            }
        });
        // }
        // })

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
                    bootbox.alert(data.msg, function() {
                        // window.location.reload(true);
                    });
                } else if (data.status == 5) {
                    bootbox.alert(data.msg, function() {
                        // window.location.reload(true);
                    });
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
            //alert("Select one record"); return false;
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
                            //  bootbox.alert("The product '"+a+"', is maped with order. Please deselect it and try again.", function() {
                            // });
                            bootbox.alert(data.msg, function() {});
                        } else {
                            bootbox.alert('Failed to delete the selected records.');
                            // bootbox.alert(data.msg);
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

        $('.checkbox_user').on('click', function() {
            if ($('.checkbox_user:checked').length == $('.checkbox_user').length) {
                $('.checkboxMain').prop('checked', true);
            } else {
                $('.checkboxMain').prop('checked', false);
            }
        });
    });
</script>
<?php include('footer.php'); ?>
<!-- <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script> -->
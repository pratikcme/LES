<?php $this->load->view('header.php'); ?>
<style type="text/css">
    .required {
        color: red;
    }
</style>
<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / <a href="<?php echo base_url() . 'product/product_list'; ?>">Product</a> / <?= (isset($result) && $result['id'] != '') ? 'Update' : 'Add' ?></a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?= (isset($result) && $result['id'] != '') ? 'Update' : 'Add' ?> Quick Product
                    </header>
                    <form role="form" method="post" action="<?php echo base_url() . 'product/product_add_update'; ?>" name="product_form" id="product_form" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" value="<?= (isset($result) && $result['id'] != '') ? $result['id'] : '' ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">



                            </div>

                        </div>
                    </form>
                </section>
            </div>
            <!--Map Part-->
        </div>

        <!-- page end-->
    </section>
</section>
<input type="hidden" id="base_url" value="<?= base_url() ?>">
<!--main content end-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<style>
    label.error {
        color: red;
        font-weight: 500;
    }
</style>
<!-- <script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script> -->
<script type="text/javascript">
    //$("#divid").hide();
    $("#image").on('change', function() {
        $('#about').trigger('focus');
    });
    /*Get Brand From Store*/
    $(function() {
        $("#category_id").change(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'product/get_brand'; ?>",
                data: {
                    category_id: $("#category_id option:selected").val()
                }
            }).done(function(msg) {
                $("#get_brand").html(msg);
            });
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'product/get_subCategory'; ?>",
                data: {
                    category_id: $("#category_id option:selected").val()
                }
            }).done(function(msg) {
                $("#get_subCategory").html(msg);
            });
        });
    });
    var base_url = $('#base_url').val();
    $('#product_form').validate({

        rules: {
            name: {
                required: true,
                maxlength: 100
            },
            category_id: {
                required: true
            },
            supplier_id: {
                required: true
            },
            brand_id: {
                required: true
            },
            subcategory_id: {
                required: true
            },
            // about: {
            //     required: true,
            //     maxlength: 500
            // },
            image: {
                required: true,
                accept: "image/jpg,image/jpeg,image/png,image/gif"
            },
            image_edit: {
                accept: "image/jpg,image/jpeg,image/png,image/gif"
            },
            // content: {
            //     required: true,
            //     maxlength: 500
            // },
            gst: {
                // required: true,
                maxlength: 15,
                // number : true,
            },
            tags: {
                maxlength: 15,
            },
            display_priority: {
                remote: {
                    url: base_url + "product/check_display_priority",
                    type: "post",
                    data: {
                        product_id: function() {
                            return $("#id").val();
                        }
                    }
                }
            }
        },
        messages: {
            name: {
                required: "Please enter product name",
                maxlength: "Please enter maximum 100 character product name"
            },
            category_id: {
                required: "Please select category"
            },
            supplier_id: {
                required: "Please select supplier"
            },
            brand_id: {
                required: "Please select brand"
            },
            subcategory_id: {
                required: "Please select subcategory"
            },
            // about: {
            //     required: "Please enter about",
            //     maxlength: "Please enter maximum 500 character about"
            // },
            image: {
                required: "Select Image",
                accept: "Only image type jpg/png/jpeg/gif is allowed"
            },
            image_edit: {

                accept: "Only image type jpg/png/jpeg/gif is allowed"
            },
            // content: {
            //     required: "Please enter content",
            //     maxlength: "Please enter maximum 500 character content"
            // },
            gst: {
                // required: "Please enter gst percent",
                maxlength: "Please enter maximum 15 character",
                // number : "Please enter number only",
            },
            display_priority: {
                remote: 'Priority already assigned'
            }
        },
        error: function(label) {
            $(this).addClass("error");
        },

        submitHandler: function(form) {
            // $('.btn').attr('disabled','disabled');
            form.submit();

        }
    });
</script>
<?php $this->load->view('footer.php'); ?>
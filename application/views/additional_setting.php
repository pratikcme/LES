<?php
include('header.php');
@$id = $this->utility->decode($_GET['id']);
// $vendor_id = $this->session->userdata['id'];

// $query = $this->db->query("SELECT * FROM set_default WHERE request_id='1'");
// $result = $query->row_array();
// print_r($result);die;

?>
<style>
.required {
    color: red;
}

.img_preview {
    width: 300px;
    position: relative;
    display: none;
}

img#img_preview {
    width: 100%;
}

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
}

.im_progress {
    position: absolute;
    width: 100%;
    opacity: 0.5;
}

.loader_img {
    position: absolute;
    top: 50%;
    left: 50%;
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
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a
                                href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / Cart Minimum Value
                            <?php if ($result['id'] != '') {
                                                                                                                                                                        echo "Update";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "Add";
                                                                                                                                                                    } ?></a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div id="msg">
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
            <div class="alert alert-success fade in">
                <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?php if ($resultcartData['id'] != '') {
                            echo "Update Minimum Cart Value";
                        } else {
                            echo "Add Minimum Cart Value";
                        } ?>

                    </header>
                    <form role="form" method="post" action="<?php echo base_url() . 'setting/cart_add'; ?>"
                        name="cart_value" id="cart_value" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" value="<?php echo $resultcartData['id']; ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" id="cat" class="margin_top_label">Minimum Cart Value :<span
                                                class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="cart_min_value"
                                            name="cart_min_value" placeholder="Minimum cart value"
                                            value="<?php echo $resultcartData['value']; ?>">
                                    </div>


                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <?php if ($resultcartData['id'] != '') {
                                        $btn = "Update ";
                                    } else {
                                        $btn = "Add ";
                                    } ?>

                                    <a href="<?php echo base_url() . 'admin/dashboard'; ?>"
                                        style="float: right; margin-right: 10px;" id="delete_user"
                                        class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-info pull-right margin_top_label"
                                        value="<?php echo $btn . 'Cart Minimum Value'; ?>" name="submit">
                                </div>
                            </div>
                    </form>
                </section>
                <section class="panel">
                    <header class="panel-heading">
                        <?php if ($resultcurrencyData['id'] != '') {
                            echo "Update Currency Symbol";
                        } else {
                            echo "Add Currency Symbol";
                        } ?>

                    </header>
                    <form role="form" method="post" action="<?php echo base_url() . 'setting/currency_add'; ?>"
                        name="currency" id="currency" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" value="<?php echo $resultcurrencyData['id']; ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" id="cat" class="margin_top_label">Currency Symbol:<span
                                                class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="currency"
                                            name="currency" placeholder="Currency symbol"
                                            value="<?php echo $resultcurrencyData['value']; ?>">
                                    </div>


                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <?php if ($resultcurrencyData['id'] != '') {
                                        $btn = "Update ";
                                    } else {
                                        $btn = "Add ";
                                    } ?>

                                    <a href="<?php echo base_url() . 'admin/dashboard'; ?>"
                                        style="float: right; margin-right: 10px;" id="delete_user"
                                        class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-info pull-right margin_top_label"
                                        value="<?php echo $btn . 'Currency Symbol'; ?>" name="submit">
                                </div>
                            </div>
                    </form>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        <?php
                        echo "Update Display price without gst";
                        ?>

                    </header>
                    <form role="form" method="post"
                        action="<?php echo base_url() . 'setting/update_display_price_without_gst'; ?>" name="currency"
                        id="currency" enctype="multipart/form-data">
                        <input type="hidden" name="app_id" id="app_id" value="<?php echo $app_result['id']; ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="">Display price without gst<span class="required"
                                                aria-required="true">
                                                * </span></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="radio" name="display_price_with_gst"
                                                    class="display_price_with_gst" value="0"
                                                    <?= ($app_result['display_price_with_gst'] == '0') ? 'checked' : '' ?>>
                                                Disabled
                                                <input type="radio" name="display_price_with_gst"
                                                    class="display_price_with_gst" value="1"
                                                    <?= ($app_result['display_price_with_gst'] == '1') ? 'checked' : '' ?>>Enabled
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">


                                    <a href="<?php echo base_url() . 'admin/dashboard'; ?>"
                                        style="float: right; margin-right: 10px;" id="delete_user"
                                        class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-info pull-right margin_top_label"
                                        value="<?php echo 'update'; ?>" name="submit">
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
<!--main content end-->
<style>
label.error {
    color: red;
    font-weight: 500;
}
</style>
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script> -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script type="text/javascript">
setTimeout(function() {
    $('#msg').hide();
}, 4000);


$('#cart_value').validate({
    rules: {
        cart_min_value: {
            required: true,
            min: 1,
            number: true,
        }
    },
    messages: {
        cart_min_value: {
            required: "Please enter cart minimum value",
            min: "Value must be greater than 0",
            number: "Please enter valid cart value"
        }
    },
    error: function(label) {
        placement();
    },
    submitHandler: function(form) {
        $('.btn').attr('disabled', 'disabled');
        $(form).submit();
    }
});

$('#currency').validate({
    rules: {
        currency: {
            required: true,
            maxlength: 3

        }
    },
    messages: {
        currency: {
            required: "Please enter currency symbol",

        }
    },
    error: function(label) {
        placement();
    },
    submitHandler: function(form) {
        $('.btn').attr('disabled', 'disabled');
        $(form).submit();
    }
});
</script>

<?php include('footer.php'); ?>
<?php
include('header.php');
// error_reporting(0);
// $id = $this->utility->decode($_GET['id']);
// $vendor_id = $this->session->userdata['id'];
// if ($id != '') {

//     $query = $this->db->query("SELECT * FROM delivery_charge WHERE id = '$id'");
//     $result = $query->row_array();
// }
// 
?>
<?php
if (isset($price_range_id) && $price_range_id != '') {
    $reqName = "Update";
} else {
    $reqName = "Add";
}
?>
<style type="text/css">
.required {
    color: red;
}

#delete {
    margin: 22px 0 0 -30px;
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
                                href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / <a
                                href="<?php echo base_url() . 'delivery_charge'; ?>">Delivery
                                Charge</a> / <a
                                href="<?php echo base_url() . 'delivery_charge/delivery_charge_variants/' . $this->utility->encode($range_id); ?>">
                                Delivery Price Range Charge /
                            </a>
                            <?php echo $reqName;
                            ?>
                        </a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?php //echo $reqName; 
                        ?> Delivery Charge
                    </header>
                    <form role="form" id="variant_form" method="post" action="<?php echo base_url() . $formAction; ?>"
                        name="city_form" id="city_form">
                        <input type="hidden" id="range_id" name="range_id"
                            value="<?= isset($range_id) && $range_id != '' ? $range_id : ''; ?>">
                        <input type="hidden" id="price_range_id" name="price_range_id"
                            value="<?= isset($price_range_id) && $price_range_id != '' ? $price_range_id : ''; ?>">
                        <div class="panel-body row ">
                            <div class="col-md-4 col-sm-6 col-xs-6 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <div>
                                            <label for="start_price" class="margin_top_label">Start Price Range
                                                <span class="required" aria-required="true"> * </span></label>
                                            <input type="text" class="start form-control margin_top_input commonclass"
                                                id="start_price" onkeypress="validates(event)" name="start_price"
                                                placeholder="Start Price Range"
                                                value="<?= isset($price_range_vals) ? $price_range_vals['start_price'] : '' ?>">
                                            <span style="color: red;" class="err"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="end_price" class="margin_top_label">End Price Range<span
                                                class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="end form-control margin_top_input commonclass"
                                            id="end_price" name="end_price" placeholder="End Price Range"
                                            onkeypress="validates(event)"
                                            value="<?= isset($price_range_vals) ? $price_range_vals['end_price'] : '' ?>">
                                        <span style="color: red;" class="error"></span>
                                        <span style="color: red;" class="err"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="margin_top_label">Price<span class="required">
                                                <input type="text"
                                                    class="price form-control margin_top_input commonclass"
                                                    id="delivery_charge" name="delivery_charge"
                                                    placeholder="Delivery Charge" onkeypress="validates(event)"
                                                    value="<?= isset($price_range_vals) ? $price_range_vals['delivery_charge'] : '' ?>">
                                                <span style="color: red" class="err"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- <span class="panel-body padding-zero" > -->
                                <a href="<?= base_url() . '/delivery_charge/delivery_charge_variants/' . $this->utility->encode($range_id) ?>"
                                    style="float: right; margin-right: 10px;" id="delete_user"
                                    class="btn btn-danger">Cancel</a>
                                <input type="submit" class="submit btn btn-info pull-right margin_top_label" value="<?php echo $reqName . ' Delivery Price Range Charge';
                                                                                                                    ?>"
                                    name="submit">
                                <!-- </span> -->
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
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script type="text/javascript">
$.validator.addMethod("validaterange", function(value, element) {
    var priceval = $('#start_price').val();

    priceval = parseInt(priceval);
    value = parseInt(value);


    if (priceval > value) {
        return false;
    } else {
        return true;
    }
}, "End price range should be greater than start price range");

$('#variant_form').validate({
    rules: {
        start_price: {
            required: true,
            remote: {
                url: "<?php echo base_url() . 'delivery_charge/get_valid_start_price' ?>",
                type: "post",
                data: {
                    range_id: $('#range_id').val(),
                    price_range_id: $('#price_range_id').val()
                },
                async: false,
            }
        },
        delivery_charge: {
            required: true,
        },
        end_price: {
            required: true,
            remote: {
                url: "<?php echo base_url() . 'delivery_charge/get_valid_end_price' ?>",
                type: "post",
                data: {
                    range_id: $('#range_id').val(),
                    price_range_id: $('#price_range_id').val()
                },
                async: false,
            },
            validaterange: true
        }
    },
    messages: {
        start_price: {
            required: "Please enter start price range",
            remote: "This price range is already exist"
        },
        delivery_charge: {
            required: "Please enter delivery charge",
        },
        end_price: {
            required: "Please enter end price range",
            remote: "This price range is already exist"
        },
    },
    error: function(label) {
        $(this).addClass("error");
    },
    submitHandler: function(form) {
        $("#variant_form").submit();
        //   error = getSkillError();
        //     if (error == 0) {
        //         $('#submit').click(function() {
        //             $(this).attr('disabled', true);
        //         });
        //         $('.btn').attr('disabled', 'disabled');
        //         $('#city_form').submit();
        //     }
    }
});
</script>
<script type="text/javascript">
function validates(evt) {

    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}
</script>
<?php include('footer.php'); ?>
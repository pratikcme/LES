<?php include('header.php'); ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'index.php/admin/dashboard'; ?>">Home</a> / Edit User </a>
                    </li>
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
        <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <a class="btn btn-warning" href="<?php echo base_url() . 'admin/genrate_excel'; ?>"
                        style="float: right;">Download Excel</a>
                    <header class="panel-heading">Edit User</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="#" id="delete_user" class="btn btn-danger">Delete User</a>
                                </div>
                                hello
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> -->
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit User
                    </header>
                    <form id="editUserForm" action="<?php echo base_url() . $formAction; ?>" method="post">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">

                                    <input type="hidden" name="user_id" id="user_id" value="<?= isset($editData) && $editData !== '' ? $editData['id'] : "" ?>">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" name="fname" class="form-control" value="<?php echo @$editData['fname'] != '' ? $editData['fname'] : @set_value('fname'); ?>">
                                        <label for="fname" class="error"><?php echo @form_error('fname'); ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" name="lname" class="form-control" value="<?php echo @$editData['lname'] != '' ? $editData['lname'] : @set_value('lname'); ?>">
                                        <label for="lname" class="error"><?php echo @form_error('lname'); ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="<?php echo @$editData['email'] != '' ? $editData['email'] : @set_value('email'); ?>">
                                        <label for="email" class="error"><?php echo @form_error('email'); ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="country_code">Country Code</label>
                                        <select id="country_code" name="country_code" class="form-control">
                                            <!-- change -->
                                            <?php
                                            foreach ($country_code as $key => $value) :
                                            ?>
                                                <option value="<?= $key; ?>" <?= (isset($editData['country_code']) && $key == $editData['country_code']) ? "selected" : "";
                                                                                ?>>
                                                    <?= $value; ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>

                                        <!-- <input type=" text" id="phone" name="phone" class="form-control"
                                                value="<?php echo @$editData['phone'] != '' ? $editData['phone'] : @set_value('phone'); ?>">
                                                <label for="phone"
                                                    class="error"><?php echo @form_error('phone'); ?></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo @$editData['phone'] != '' ? $editData['phone'] : @set_value('phone'); ?>">
                                        <label for="phone" class="error"><?php echo @form_error('phone'); ?></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- <span class="panel-body padding-zero" > -->
                                <a href="<?= base_url() . 'admin/user_list' ?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>

                                <input type="submit" class="btn btn-info pull-right margin_top_label" value="Update" name="submit">
                                <!-- </span> -->
                            </div>
                        </div>
                        <input type="hidden" name="vendor_id" id="vendor_id" value="<?= isset($editData) && $editData !== '' ? $editData['vendor_id'] : "" ?>">
                        <input type="hidden" name="url" id="base_url" value="<?= base_url() ?>">
                    </form>
                </section>
            </div>
            <!--Map Part-->
        </div>
    </section>
</section>

<!--main content end-->
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
<script>
    // let id = $("#base_url").val();
    let user_id = $("#user_id").val();
    let vendor_id = $("#vendor_id").val();

    $('#editUserForm').validate({
        rules: {
            fname: {
                required: true,
                maxlength: 50,
            },
            lname: {
                required: true,
                maxlength: 50,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "<?php echo base_url() . 'vendor/get_valid_user_email' ?>",
                    type: "post",
                    data: {
                        user_id: user_id,
                        vendor_id: vendor_id,
                    },
                    async: false,
                }
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15,
                remote: {
                    url: "<?php echo base_url() . 'vendor/get_valid_user_mobile' ?>",
                    type: "post",
                    data: {
                        user_id: user_id,
                        vendor_id: vendor_id,
                    },
                    async: false,
                }
            },
        },
        messages: {
            fname: {
                required: "Please enter first name",
            },
            lname: {
                required: "Please enter last name",
            },
            email: {
                required: "Please enter email",
                email: "Please enter valid email",
                remote: "This email is already exist"
            },
            phone: {
                required: "Please enter phone number",
                digits: "Please enter valid phone number",
                minlength: "Please enter valid phone number",
                maxlength: "Please enter 15 digit valid number",
                remote: "This mobile number is already exist"
            },
        },
    });

    // let valid = $('#editUserForm').valid();

    // if (true) {

    //     try {
    //         await $.ajax({
    //             type: "POST",
    //             url: '',
    //             data: formData,
    //             cache: false,
    //             processData: false,
    //             success: function(data) {
    //                 console.log("data", data)
    //                 // if (data.status == 1) {
    //                 //     bootbox.alert("Brand has been deleted successfully.", function() {
    //                 //         window.location.reload(true);
    //                 //     });
    //                 // } else {
    //                 //     alert('Failed to delete selected sote.');
    //                 // }
    //             },
    //             error: function(err) {
    //                 console.log("err", err)
    //                 // alert('Failed to delete selected brand.');
    //             }
    //         });
    //     } catch (error) {
    //         console.log(error)
    //     }
    // }
</script>
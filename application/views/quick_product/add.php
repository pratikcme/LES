<?php $this->load->view('header.php'); ?>
<style type="text/css">
    .required {
        color: red;
    }

    .select-group {
        position: relative;
        z-index: 0;
    }

    .select-group::after {
        content: "\f107";
        font-family: "FONTAWESOME";
        position: absolute;
        top: 50%;
        right: 8px;
        transform: translate(0%, -50%);
        width: 28px;
        height: 28px;
        background: #EAEFF4;
        color: #FF6C60;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: -1;
        cursor: pointer;
    }

    .add-quick-product-wrp input {
        border-radius: 5px;
        border: 1px solid #AEB2B7;
        background: #FFF;
        height: 45px;
        color: #2A3542 !important;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        padding-left: 20px;
    }

    .add-quick-product-wrp textarea {
        border-radius: 5px;
        border: 1px solid #AEB2B7;
        background: #FFF;
        height: 45px;
        color: #2A3542;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        padding-left: 20px;
        width: 100%;
        height: 100px;
    }

    .add-quick-product-wrp select {
        border-radius: 5px;
        border: 1px solid #AEB2B7;
        height: 45px;
        color: #2A3542 !important;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        padding-left: 20px;
        appearance: none;
    }

    .add-quick-product-wrp label {
        color: #2A3542 !important;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        margin-bottom: 10px !important;
        /* width:100%; */
    }

    .add-quick-product-wrp label span {
        color: #FF6C60;
        margin-left: 3px;
    }

    .add-quick-product-wrp input::placeholder {
        color: #2A3542 !important;
        font-family: "Open Sans" !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        line-height: 24px !important;
    }

    .add-quick-product-wrp textarea::placeholder {
        color: #2A3542 !important;
        font-family: "Open Sans" !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        line-height: 24px !important;
    }

    .lable-select-group.select-group::after {
        top: 73%;
    }

    .checkbox-form {
        width: 100%;
        height: 45px;
        border-radius: 5px;
        background: #EAEFF4;
        color: #464255;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 20px;
    }

    .checkbox-form .form-check input {
        float: right;
        margin-left: 5px !important;
        margin-top: 7px;
        height: auto !important;
    }

    .checkbox-form label {
        margin-bottom: 0px !important;
    }

    .select-tag-wrp {
        border-radius: 5px;
        background: #EAEFF4;
        padding: 20px;
    }

    .select-tag {
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .select-tag span {
        border-radius: 5px;
        background: #2A3542 !important;
        color: #FFF;
        font-family: "Open Sans";
        font-size: 14px;
        font-weight: 700;
        line-height: normal;
        align-items: center;
        padding: 7px 10px;
        display: inline-flex;
    }

    .select-tag span i {
        color: #FFF;
        margin-left: 5px;
        font-weight: 400;
        cursor: pointer;
    }

    .quick-add-btn {
        border-radius: 5px;
        background: #FF6C60;
        box-shadow: 0px 11px 20px 0px rgba(255, 108, 96, 0.24);
        display: inline-flex;
        padding: 11px 18px 11px 20px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: "Open Sans";
        font-size: 16px;
        font-weight: 600;
        line-height: normal;
        border: none;
        height: 44px;
    }

    .cancel-btn {
        border-radius: 5px;
        border: 1px solid #FF6C60;
        background: #FFF;
        display: inline-flex;
        padding: 11px 20px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        color: #FF6C60;
        font-family: "Open Sans";
        font-size: 16px;
        font-weight: 600;
        line-height: normal;
        height: 44px;
        margin-left: 20px;
    }

    .form-check input[type="radio"]:checked {
        border: 1px solid red !important;
    }

    .main-wrp h3 {
        color: #091B2D;
        font-family: "Open Sans";
        font-size: 20px;
        font-weight: 700;
        line-height: 30px;
    }

    .add-quick-product-common {
        border-radius: 7px;
        background: #FFF;
        padding: 25px;
        height: 100%;
    }

    #quick-add-modal .modal-content {
        border-radius: 20px;
        background: #FFF;
        padding: 40px 50px;
        width: 500px;
        margin: 0px auto;
        position: relative;
    }

    #quick-add-modal .modal-content .close {
        position: absolute;
        top: 20px;
        right: 20px;
        border-radius: 5px;
        background: #FF6C60;
        box-shadow: 0px 11px 20px 0px rgba(255, 108, 96, 0.24);
        width: 24px;
        height: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        color: #fff;
    }

    #quick-add-modal .modal-content .close i {
        font-size: 15px;
        line-height: 0px;
    }

    .tabs-wrap .nav-tabs {
        border-bottom: none;
        border-radius: 5px;
        background: #EAEFF4;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tabs-wrap .nav-tabs a {
        color: #2A3542;
        font-family: "Open Sans";
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: 15px;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border-radius: 5px !important;
        background: #FF6C60 !important;
        box-shadow: 0px 11px 20px 0px rgba(255, 108, 96, 0.24) !important;
        color: #fff !important;
        border-bottom: none;
    }

    .choose-file-wrp input {
        border: none !important;
        height: auto !important;
        padding: 0px !important;
    }

    .choose-file-wrp input[type=file]::file-selector-button {
        border: 1px solid #EAEFF4;
        padding: .2em .4em;
        border-radius: 5px;
        background: #EAEFF4;
        transition: 1s;
        color: #2A3542;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
    }

    .tab-content {
        margin-top: 20px;
    }

    .add-quick-product-wrp .form-control {
        background-color: transparent !important;
    }

    .tab-common-btn {
        border-radius: 5px;
        background: #FF6C60;
        box-shadow: 0px 11px 20px 0px rgba(255, 108, 96, 0.24);
        width: 100%;
        padding: 10px 15px;
        color: #FFF;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 24px;
        border: none;
        margin-top: 20px;
    }

    #quick-add-modal .modal-dialog {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }



    .checkbox-form .form-check input[type="radio"] {
        appearance: none;
        display: none;
    }

    .checkbox-form .form-check input[type="radio"]+label {
        cursor: pointer;
        position: relative;
        padding-left: 30px;
        line-height: 20px;
    }

    .checkbox-form .form-check input[type="radio"]+label::before {
        content: "";
        display: inline-block;
        width: 20px;
        height: 20px !important;
        aspect-ratio: 1;
        border: 2px solid #464255;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        opacity: 1;
        transition: all 0.3s;
    }

    .checkbox-form .form-check input[type="radio"]+label::after {
        content: "";
        display: inline-block;
        width: 10px;
        aspect-ratio: 1;
        border: 1px solid #FF6C60;
        background: #FF6C60;
        border-radius: 50%;
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: all 0.3s;
    }

    .checkbox-form .form-check input[type="radio"]:checked+label::after {
        opacity: 1;
    }

    .checkbox-form .form-check input[type="radio"]:checked+label::before {
        border: 2px solid #FF6C60;
    }






    @media only screen and (max-width: 1199px) {
        .add-quick-product-wrp .col-lg-6:nth-child(2) {
            margin-top: 30px;
        }
    }

    @media only screen and (max-width: 500px) {
        #quick-add-modal .modal-content {
            width: 100%;
        }

        /* .tabs-wrap .nav-tabs{
        flex-direction: column;
    } */
        #quick-add-modal .modal-content {
            padding: 40px 20px;
        }
    }

    @media only screen and (max-width: 424px) {
        .checkbox-form {
            flex-direction: column;
            height: auto;
            gap: 10px;
            align-items: start;
        }

        .cancel-btn {
            margin-left: 10px;
        }

        .select-tag span {
            font-size: 12px;
        }

        .quick-add-btn {
            font-size: 14px;
        }

        .cancel-btn {
            font-size: 14px;
        }

        .tabs-wrap .nav-tabs {
            flex-direction: column;
        }

        #quick-add-modal .modal-body {
            padding: 0px !important;
        }

        #quick-add-modal .modal-content .close {
            top: 10px;
            right: 10px;
        }

        #quick-add-modal .modal-content {
            border-radius: 10px;
        }

        #quick-add-modal .modal-content .close i {
            font-size: 13px;
            line-height: 0px;
        }
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
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / <a href="<?php echo base_url() . 'product/product_list'; ?>">Product</a> /
                            <?= (isset($result) && $result['id'] != '') ? 'Update' : 'Add' ?></a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-wrp">
                    <h3>Quick Add Product</h3>
                    <form role="form" method="post" action="<?php echo base_url() . 'quickProduct/product_add_update'; ?>" name="product_form" id="product_form" enctype="multipart/form-data">
                        <div class="row add-quick-product-wrp">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="add-quick-product-common">
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="margin_top_label">Product Name<span class="required" aria-required="true"> * </span></label>
                                                <input type="text" class="form-control margin_top_input" id="name" name="name" placeholder="Product name" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group select-group lable-select-group">
                                                <label for="category_id" class="margin_top_label">Category<span class="required" aria-required="true"> * </span></label>
                                                <select class="form-control margin_top_input category" id="category_id" name="category_id">
                                                    <option value="" selected disabled>Select Category</option>
                                                    <option value="add_new">Add New Category</option>
                                                    <?php foreach ($category_result as $cat) { ?>
                                                        <option value="<?php echo $cat->id; ?>" <?php if ($category_id == $cat->id) { ?> selected <?php } ?>><?php echo $cat->name; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group select-group lable-select-group" id="get_subCategory">

                                                <label for="brand_id" class="margin_top_label">Subcateory<span class="required" aria-required="true"> * </span></label>
                                                <select class="form-control margin_top_input subcategory" id="subcategory_id" name="subcategory_id">
                                                    <option value="" selected disabled>Select Subcateory</option>
                                                    <option value="add_new">Add New Subcateory</option>
                                                    <?php
                                                    foreach ($subcategory_result as $subcate) { ?>
                                                        <option value="<?php echo $subcate->id; ?>" <?php if ($id != '' && $subcate_result['id'] == $subcate->id) {
                                                                                                        echo  "selected";
                                                                                                    } ?>><?php echo $subcate->name; ?></option>
                                                    <?php } ?>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-12" id="get_brand">
                                            <div class="form-group select-group lable-select-group">
                                                <label for="brand_id" class="margin_top_label ">Brand<span class="required" aria-required="true"> * </span></label>
                                                <select class="form-control margin_top_input brand" id="brand_id" name="brand_id">
                                                    <option value="" selected disabled>Select Brand</option>
                                                    <option value="add_new">Add New Brand</option>
                                                    <?php foreach ($brand_results as $bra) { ?>
                                                        <option value="<?php echo $bra->id; ?>" <?php if ($id != '' && $bra_result['id'] == $bra->id) { ?> selected <?php } ?>><?php echo $bra->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="fname">Display Priority</label>
                                                <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="w-100">Description<span class="required" aria-required="true"></span></label>
                                                <textarea name="" id=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="add-quick-product-common">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="w-100">Content <span class="required" aria-required="true"></span></label>
                                                <textarea name="" id=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Food Type</label>
                                            <div class="form-group checkbox-form">
                                                <div class="form-check">

                                                    <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                    <label class="" for="flexRadioDefault1">
                                                        Veg.
                                                    </label>

                                                </div>
                                                <div class="form-check">
                                                    <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="" for="flexRadioDefault2">
                                                        Non Veg.
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="" for="flexRadioDefault3">
                                                        None
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="fname">GST</label>
                                                <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="Product GST">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fname">Tag</label>
                                            <div class="form-group select-tag-wrp">
                                                <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="">
                                                <div class="select-tag">
                                                    <span>veg <i class="fa fa-times" aria-hidden="true"></i></span>
                                                    <span>Snacks <i class="fa fa-times" aria-hidden="true"></i></span>
                                                    <span>American Fruits <i class="fa fa-times" aria-hidden="true"></i></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="quick-add-btn">Add Product</button>
                                            <button class="cancel-btn">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- <button data-toggle="modal" data-target="#quick-add-modal">Add Product</button> -->
                </div>
            </div>
            <!--Map Part-->
        </div>

        <!-- page end-->

    </section>
</section>


<div class="modal fade" id="quick-add-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content add-quick-product-wrp">
            <button type="button" class="close quicksubccatb" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="modal-body">
                <div class="tabs-wrap">
                    <ul class="nav nav-tabs">
                        <li class="quickcat quicktab"><a data-toggle="tab" href="#home">Category</a></li>
                        <li class="quicksubcat quicktab"><a data-toggle="tab" href="#menu1">Subcategory</a></li>
                        <li class="quickbrand quicktab"><a data-toggle="tab" href="#menu2">Brand</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in  active">
                            <form action="" id="categoryForm" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group select-group lable-select-group">
                                            <label for="fname">Category:<span>*</span></label>
                                            <input type="text" class="form-control margin_top_input" id="name" name="name" placeholder="Enter Category" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group choose-file-wrp">
                                            <label for="fname">Image :<span>*</span></label>
                                            <input accept="image/*" type="file" class="form-control margin_top_input" id="image" name="image" placeholder="Select Image" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">

                                        <button type="submit" class="tab-common-btn" id="addQuickCategory"><span>+</span> Add Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group select-group lable-select-group">
                                            <label for="fname">Category Name :<span>*</span></label>
                                            <select name="" id="category" class="form-control form-select">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fname">Subcategory Name<span>*</span> </label>
                                            <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="Enter Subcategory">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <button class="tab-common-btn"><span>+</span> Add subcategory</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fname">Brand Name<span>*</span> </label>
                                            <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="Enter Brand Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fname">Subcategory Name<span>*</span> </label>
                                            <input type="text" name="fname" class="form-control" id="txtStoreName" placeholder="Enter Subcategory">
                                            <div class="select-tag">
                                                <span>veg <i class="fa fa-times" aria-hidden="true"></i></span>
                                                <span>Snacks <i class="fa fa-times" aria-hidden="true"></i></span>
                                                <span>American Fruits <i class="fa fa-times" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <button class="tab-common-btn"><span>+</span> Add subcategory</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
<script>
    $(".category").change(function() {
        var catItem = $('select[name=category_id] option').filter(':selected').val()

        $('.quicktab').removeClass('active');
        $('.tab-pane').removeClass('active');
        if (catItem == 'add_new') {

            $("#quick-add-modal").modal('show');
            $(".quickcat").addClass('active');
            $('#home').addClass('active');


        }
    });

    $(".subcategory").change(function() {
        var catItem = $('select[name=subcategory_id] option').filter(':selected').val()
        $('.quicktab').removeClass('active');
        $('.tab-pane').removeClass('active');
        if (catItem == 'add_new') {

            $("#quick-add-modal").modal('show');
            $(".quicksubcat").addClass('active');
            $('#menu1').addClass('active in');
        }
    });

    $(".brand").change(function() {
        var catItem = $('select[name=brand_id] option').filter(':selected').val()
        $('.quicktab').removeClass('active');
        $('.tab-pane').removeClass('active');
        if (catItem == 'add_new') {

            $("#quick-add-modal").modal('show');
            $(".quickbrand").addClass('active');
            $('#menu2').addClass('active in');
        }
    });
</script>
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>

<script src="<?= base_url() . 'public/admin/assets/admins/js/quickproduct.js' ?>"></script>
<?php $this->load->view('footer.php'); ?>
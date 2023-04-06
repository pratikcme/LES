<?php $this->load->view('header'); ?>

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / Web Setting / Fav Image</a></li>
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
            <?php if ($this->session->flashdata('myMessage') && $this->session->flashdata('myMessage') != '') {
                echo $this->session->flashdata('myMessage');
            } ?>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading"> Fav Image</header>
                    <form id="frmAddEdit" method="post" enctype="multipart/form-data" action="<?= base_url() ?>web_setting/fav_image">
                        <input type="hidden" name="app_id" id="app_id" value="<?php echo $app_result['id']; ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="margin_top_label">Favicon Image:<span class="required" aria-required="true"> * </span></label>
                                        <input type="hidden" id="old_favicon" name="old_favicon" value="<?php echo $app_result['favicon_image']; ?>">
                                        <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control img margin_top_input" id="favicon_image" name="favicon_image" placeholder="Select webLogo"> <span id="favicon_image" style="color: red;"></span>
                                        <div class="favicon_img_preview" style="display: none;"> <img src="" id="favicon_img_preview" width="200" height="150"> </div>
                                        <div class="All_images"></div>
                                    </div>
                                    <?php $favicon = $app_result['favicon_image']; ?>
                                    <div class="img favicon" style="margin-right: 10px; margin-bottom: 20px;">
                                        <?php if ($favicon != '' && file_exists('public/client_logo/' . $favicon)) { ?> <img src="<?php echo base_url() . 'public/client_logo/' . $favicon; ?>" style="height: 180px; width: 200px;">
                                        <?php } ?>
                                    </div>

                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <!-- <span class="panel-body padding-zero" > -->
                                    <a href="<?= base_url() . 'admin/dashboard' ?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>
                                    <input type="submit" class="btn btn-info pull-right margin_top_label" id="btnSubmit" name="submit" value="<?= (!empty($getPrivacy) ? "Update" : 'Add') ?>">
                                    <!-- </span> -->
                                </div>
                            </div>
                        </div>
            </div>
            </form>
    </section>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="panel">
                <header class="panel-heading"> Web Logo</header>
                <form id="frmAddEdit" method="post" enctype="multipart/form-data" action="<?= base_url() ?>web_setting/web_logo">
                    <input type="hidden" name="app_id" id="app_id" value="<?php echo $app_result['id']; ?>">
                    <div class="panel-body">
                        <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="margin_top_label">Web Logo :<span class="required" aria-required="true"> * </span></label>
                                    <input type="hidden" id="old_webLogo" name="old_webLogo" value="<?php echo $app_result['webLogo']; ?>">
                                    <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control img margin_top_input" id="webLogo" name="webLogo" placeholder="Select webLogo"> <span id="webLog" style="color: red;"></span>
                                    <div class="webLogo_img_preview" style="display: none;"> <img src="" id="webLogo_img_preview" width="200" height="150"> </div>
                                    <div class="All_images"></div>
                                </div>
                                <?php $webLogo = $app_result['webLogo']; ?>
                                <div class="img img_show" style="float: left; margin-right: 10px; margin-bottom: 20px;">
                                    <?php if ($webLogo != '' && file_exists('public/client_logo/' . $webLogo)) { ?> <img src="<?php echo base_url() . 'public/client_logo/' . $webLogo; ?>" style="height: 180px; width: 200px;">
                                    <?php } ?>
                                </div>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- <span class="panel-body padding-zero" > -->
                                <a href="<?= base_url() . 'admin/dashboard' ?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>
                                <input type="submit" class="btn btn-info pull-right margin_top_label" id="btnSubmit" name="submit" value="<?= (!empty($getPrivacy) ? "Update" : 'Add') ?>">
                                <!-- </span> -->
                            </div>
                        </div>
                    </div>

                </form>

            </section>
        </div>
    </div>
</section>
</section>

<?php $this->load->view('footer'); ?>
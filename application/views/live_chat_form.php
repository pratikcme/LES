<?php $this->load->view('header.php') ?>


<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a
                                href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / <a
                                href="<?php echo base_url() . 'live_chat'; ?>"></a> Add Live chat </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">

            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="msg">
                    <?php if ($this->session->flashdata('myMessage') && $this->session->flashdata('myMessage') != '') { ?>
                    <?php echo $this->session->flashdata('myMessage'); ?>
                    <?php } ?>
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        Add Creds
                    </header>
                    <form id="frmAddEdit" method="post" action="<?= $FormAction ?>">
                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="property_id">Property Id</label>
                                        <input type="text" id="property_id" name="property_id"
                                            value="<?= $creds !== '' ? $creds->property_id : '' ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="widget_id">Widget Id</label>
                                        <input type="text" id="widget_id" name="widget_id"
                                            value="<?= $creds !== '' ? $creds->widget_id : '' ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="javascript:;" style="float: right; margin-right: 10px;"
                                    <?= $creds !== '' ? "onclick=\"single_delete('{$this->utility->encode($creds->id)}')\"" : 'disabled' ?>
                                    class="btn btn-danger">Remove</a>
                                <input type="submit" class="btn btn-info pull-right margin_top_label"
                                    value="<?= $creds !== '' ? 'Update' : 'Add' ?>" id="btnSubmit" name="submit">
                            </div>
                        </div>
                        <input type="hidden" name="url" id="base_url" value="<?= base_url() ?>">
                        <input type="hidden" name="edit_id" id="edit_id" value="<?= $creds !== '' ? $creds->id : '' ?>">
                    </form>
                </section>
            </div>
            <!--Map Part-->
        </div>
    </section>
</section>

<?php $this->load->view('footer.php') ?>
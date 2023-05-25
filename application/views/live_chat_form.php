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
            <div id="msg">
                <?php if ($this->session->flashdata('myMessage') && $this->session->flashdata('myMessage') != '') { ?>
                <?php echo $this->session->flashdata('myMessage'); ?>
                <?php }
                ?>
            </div>
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Creds
                    </header>
                    <form id="frmAddEdit" method="post" action="<?= $FormAction ?>">

                        <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">

                                        <label for="live_chat_key">Live Chat Key</label>
                                        <input type="text" id="live_chat_key" name="live_chat_key"
                                            value="<?= $creds !== '' ? $creds->live_chat_key : '' ?>"
                                            class="form-control">
                                        <label for="live_chat_key" style="color: red"
                                            class="error"><?php echo @form_error('live_chat_key'); ?></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="<?= base_url() . 'live_chat' ?>" style="float: right; margin-right: 10px;"
                                    id="delete_user" class="btn btn-danger">Cancel</a>
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


<script type="text/javascript">
// function readUploadedImage(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function(e) {

//             $('#ContentImage').attr('src', e.target.result);
//             $('#show1').css('display', '');

//         }

//         reader.readAsDataURL(input.files[0]);
//     }
//     $("#uploadimage").change(function() {
//         readUploadedImage(this);
//     });
// }
</script>
<?php $this->load->view('footer.php') ?>
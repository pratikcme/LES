<?php $this->load->view('header.php'); ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / Social Media Post</a></li>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">Social Media Post</header>
                    <div class="panel-body">

                        <div class="row">

                            <?php
                            foreach ($getPosts as $key => $value) {
                                if ($value[0]->date >= date('Y-m-d')) {

                            ?>



                                    <div class="col-lg-12 col-lg-12 mb-4">
                                        <h5 class="title"><?= $key ?></h5>
                                        <div class="row">
                                            <?php foreach ($value as $postVal) { ?>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-3">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-img position-relative">
                                                            <img src="<?= base_url() . 'public/festival_post_images/' . $postVal->image ?>" alt="india">
                                                            <a class="view-more" href="<?= base_url() . 'social_media_post/view_posts/' . $postVal->id; ?>" type="button">View More</a>
                                                            <div class="card-overlay"></div>
                                                        </div>

                                                        <div class="card-detail">
                                                            <h5><?= $postVal->festival_name ?></h5>
                                                            <p> <?= date('D d M Y', strtotime($postVal->date)); ?> </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                            <?php }
                            }
                            ?>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<script>
    $("#post").change(function() {

        var theme = $(this).val();
        $.ajax({
            method: "GET",

            url: "<?= base_url() . 'social_media_post/gettheme/' ?>" + theme,
            success: function(output) {

                $("#preview").html(output);
            }

        })
    });
</script>

<?php $this->load->view('footer.php'); ?>
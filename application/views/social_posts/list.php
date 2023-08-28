<?php $this->load->view('header.php'); ?>
<!--main content start-->
<style>
    .card-wrap {
        border-radius: 10px;
        background: #F1F2F7;
        padding: 18px 21px;
        transition: 0.5s linear;
        -webkit-transition: 0.5s linear;
        -moz-transition: 0.5s linear;
        -ms-transition: 0.5s linear;
        -o-transition: 0.5s linear;
        height: 245px;
    }



    .card-wrap:hover a.view-more {
        display: block;
    }

    .title {
        color: #2A3542;
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: normal;
        margin-bottom: 24px;
    }

    .card-wrap .card-img {
        margin-bottom: 11px;
        position: relative;
    }

    .card-wrap .card-img img {
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        width: 100%;
        height: 100%;
    }

    .card-wrap h5 {
        color: #000;
        text-align: center;
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-wrap p {
        color: #2A3542;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-bottom: 0;
    }

    .card-wrap a.view-more {
        width: 100%;
        max-width: 95px;
        background-color: #fff;
        padding: 12px 10px;
        color: #FF6C60;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-decoration: none;
        border-radius: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        z-index: 2;
        display: none;
    }

    .card-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        visibility: none;
        transition: .5s ease;
        background-color: rgba(0, 0, 0, 0.40);
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }

    .card-wrap:hover .card-overlay {
        opacity: 1;
    }

    @media only screen and (max-width:1200px) {
        .card-wrap {
            padding: 18px 15px;
        }

        .card-wrap h5 {
            font-size: 14px;
        }

        .card-wrap p {
            font-size: 13px;
        }
    }
</style>
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
                            foreach ($getPosts as $key => $value) { ?>



                                <div class="col-lg-12 col-lg-12 mb-4">
                                    <h5 class="title"><?= $key ?></h5>
                                    <div class="row">
                                        <?php foreach ($value as $postVal) { ?>
                                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-3">
                                                <div class="card-wrap text-center">
                                                    <div class="card-img position-relative">
                                                        <img src="<?= base_url() . 'public/festival_post_images/' . $postVal->image ?>" alt="india">
                                                        <a class="view-more" href="<?= base_url() . 'social_media_post/view_posts' ?>" type="button">View More</a>
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
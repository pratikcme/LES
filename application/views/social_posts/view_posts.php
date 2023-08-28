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
                    <header class="panel-heading">View Post</header>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <h5 class="title"><span>Independence day - </span><span>Tue 30 Aug 2023</span></h5>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-3">
                                        <div class="card-img month-card">
                                            <img src="<?= base_url() . 'public/festival_post_images/friendship_day.png' ?>" alt="india">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <div class="input-wrapper">
                                    <div class="input-box">
                                        <label for="">Quotes</label>
                                        <input type="text" placeholder="type here...........">
                                    </div>
                                    <div class="input-box">
                                        <label for="">Change Color</label>
                                        <input type="color" placeholder="#fff">
                                    </div>
                                    <div class="button-wrapper">
                                        <button type="button">change</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <h5 class="title">Preview</h5>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                                        <div class="card-img position-relative preview-img">
                                            <img src="./assets/img/india.png" alt="preview-img">
                                            <div class="card-overlay"></div>
                                            <div class="download-icon">
                                                <img src="./assets/img/download.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
</section>


<?php $this->load->view('footer.php'); ?>
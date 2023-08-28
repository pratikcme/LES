<?php $this->load->view('header.php'); ?>
<!--main content start-->
<style>
    .month-card.card-img {
        position: relative;
        transition: 0.5s linear;
        -webkit-transition: 0.5s linear;
        -moz-transition: 0.5s linear;
        -ms-transition: 0.5s linear;
        -o-transition: 0.5s linear;
        border: 2px solid transparent;
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.20);
    }

    .month-card.card-img:hover {
        border: 2px solid #FF6C60;
        border-radius: 10px;
    }

    .input-wrapper {
        gap: 25px;
    }

    .input-wrapper .input-box {
        max-width: 391px;
        width: 100%
    }

    .input-box label {
        color: #2A3542;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-bottom: 15px;
    }

    .input-box input {
        padding-left: 19px;
        height: 47px;
        border-radius: 5px;
        border: 1px solid rgba(42, 53, 66, 0.50);
        background: #FFF;
        outline: 0;
    }

    .input-wrapper button {
        padding: 11px 20px;
        border-radius: 5px;
        background: #2A3542;
        box-shadow: 0px 11px 20px 0px rgba(42, 53, 66, 0.24);
        color: #fff;
        text-transform: capitalize;
        border: 1px solid transparent;
        transition: 0.5s linear;
        -webkit-transition: 0.5s linear;
        -moz-transition: 0.5s linear;
        -ms-transition: 0.5s linear;
        -o-transition: 0.5s linear;
    }

    .input-wrapper button:hover {
        background-color: transparent;
        border: 1px solid #2A3542;
        color: #2A3542;
    }

    .preview-img.card-img {
        position: relative;
        transition: 0.5s linear;
        -webkit-transition: 0.5s linear;
        -moz-transition: 0.5s linear;
        -ms-transition: 0.5s linear;
        -o-transition: 0.5s linear;
    }

    .preview-img.card-img:hover .card-overlay {
        opacity: 1;
    }

    .preview-img.card-img:hover .download-icon {
        opacity: 1;
    }

    .download-icon {
        width: 30px;
        height: 30px;
        background-color: #fff;
        position: absolute;
        right: 10px;
        top: 10px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
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
                                <div class="d-flex input-wrapper flex-wrap">
                                    <div class="d-flex flex-column input-box">
                                        <label for="">Quotes</label>
                                        <input type="text" placeholder="type here...........">
                                    </div>
                                    <div class="d-flex flex-column input-box">
                                        <label for="">Change Color</label>
                                        <input type="text" placeholder="#fff">
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <button type="button">change</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <h5 class="title">Preview</h5>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                                        <div class="card-img position-relative preview-img">
                                            <img src="./assets/img/india.png" alt="">
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
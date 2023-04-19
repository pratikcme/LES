
<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('Contact Us')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Contact Us')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- ------------contact-us-section------------ -->
<section class="contact-us-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2><?=$this->lang->line('Reach Out To Us')?></h2>
                <!-- <p>We’re talking about clean beauty gift sets, of course – and we’ve got a bouquet <br> of beauties for yourself or someone you love.</p> -->
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-solid fa-mobile"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_number?></a></h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-regular fa-envelope"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_email?></a></h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-solid fa-location-dot"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_us_address?></a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
                <div class="left-contact-wrapper">
                    <form id="form" method="post" action="<?=base_url().'contact'?>">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="fname" class="form-label"><?=$this->lang->line('First Name')?></label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="<?=$this->lang->line('First Name')?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><?=$this->lang->line('Email')?></label>
                                    <input type="email" name="email" class="form-control" placeholder="<?=$this->lang->line('Email')?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone-num" class="form-label"><?=$this->lang->line('Phone')?></label>
                                    <input type="tel" name="mobile_no" class="form-control" aria-describedby="phone-num" placeholder="<?=$this->lang->line('Phone')?>">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="message" class="form-label"><?=$this->lang->line('Message')?></label>
                                    <textarea name="message" cols="0" rows="0" placeholder="<?=$this->lang->line('Message')?>"></textarea>
                                    <label for="message" class="error"><?=form_error('message')?></label>
                                  </div>

                                <div class="submit-btn">
                                    <button type="submit" name="submit" id="btnSubmit"><?=$this->lang->line('send')?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
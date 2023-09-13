<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('Contact Us') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Contact Us') ?>
                        </li>
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
                <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                </svg>
                <h2><?= $this->lang->line('Reach Out To Us') ?></h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-solid fa-mobile"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?= $appLinks[0]->contact_number ?></a></h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-regular fa-envelope"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?= $appLinks[0]->contact_email ?></a></h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="right-contact-main">
                    <a href="#" class="right-contact"><i class="fa-solid fa-location-dot"></i></a>

                    <div class="right-contact-text">
                        <h4><a href="javascript:"><?= $appLinks[0]->contact_us_address ?></a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
                <div class="left-contact-wrapper">
                    <form id="form" method="post" action="<?= base_url() . 'contact' ?>">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="fname" class="form-label"><?= $this->lang->line('First Name') ?></label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="<?= $this->lang->line('First Name') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><?= $this->lang->line('Email') ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="<?= $this->lang->line('Email') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone-num" class="form-label"><?= $this->lang->line('Phone') ?></label>
                                    <input type="tel" name="mobile_no" class="form-control" aria-describedby="phone-num" placeholder="<?= $this->lang->line('Phone') ?>">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="message" class="form-label"><?= $this->lang->line('Message') ?></label>
                                    <textarea name="message" cols="0" rows="0" placeholder="<?= $this->lang->line('Message') ?>"></textarea>
                                    <label for="message" class="error"><?= form_error('message') ?></label>
                                </div>

                                <div class="submit-btn" style="text-align:center">
                                    <button type="submit" name="submit" id="btnSubmit"><?= $this->lang->line('send') ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
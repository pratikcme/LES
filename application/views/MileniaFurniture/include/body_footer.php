<section class="subscribe">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe-wrap">
                    <div class="title text-center">
                        <h3>Subscribe To Our Newsletter</h3>
                        <p>Sign up for the weekly newsletter and build better ecommerce stores.</p>
                    </div>
                    <form action="">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Enter email" name="email">
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="cmn-btn w-100 px-2">sign up</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <p>We respect your privacy, so we never share your info.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <svg id="footer-bg" data-name="Layer 1" xmlns="<?= $this->theme_base_url ?>/assets/images/Bg.svg" viewBox="850 0 200 400" fill="url(#g1)">
        <defs></defs>
        <path class="footer-bg" d="M0,100C374.9,100,667.45,6,960,6s585.1,94,960,94V574H0Z" />
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="footer-wrap">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="<?= $this->theme_base_url ?>/assets/images/logo.svg" alt="logo" />
                        </a>
                    </div>
                    <div class="download-app-wrap">
                        <h4>Download App</h4>
                        <p>From App Store or Google Play</p>

                        <div class="store-wrap">
                            <a href="#"><img src="<?= $this->theme_base_url ?>/assets/images/footer/app-store.png" alt="app-store" /></a>
                            <a href="#"><img src="<?= $this->theme_base_url ?>/assets/images/footer/google-play.png" alt="google-play" /></a>
                        </div>
                    </div>

                    <div class="foot-payment-icons">
                        <ul>
                            <li><a href=""><img src="<?= $this->theme_base_url ?>/assets/images/footer/foot-icon-1.png" alt=""></a></li>
                            <li><a href=""><img src="<?= $this->theme_base_url ?>/assets/images/footer/foot-icon-2.png" alt=""></a></li>
                            <li><a href=""><img src="<?= $this->theme_base_url ?>/assets/images/footer/foot-icon-3.png" alt=""></a></li>
                            <li><a href=""><img src="<?= $this->theme_base_url ?>/assets/images/footer/foot-icon-4.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="footer-wrap">
                    <h4>Useful Links</h4>
                    <ul>
                        <!-- <li><a href="#">Blog</a></li> -->
                        <li><a href="<?=base_url().'users_account/users/account?name=my_account'?>"><?=$this->lang->line('My account')?></a></li>
                        <li><a href="<?=base_url().'users_account/users/account?name=wishlist'?>"><?=$this->lang->line('Wishlist')?></a></li>
                        <li><a href="<?= base_url() . 'terms_condition' ?>"><?= $this->lang->line('Term & Conditions') ?></a>
                        </li>
                        <!-- <li><a href="#">Order History</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="footer-wrap">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="<?=base_url().'products'?>"><?=$this->lang->line('Shop')?></a></li>
                        <li><a href="<?= base_url() . 'contact' ?>"><?= $this->lang->line('Contact Us') ?></a></li>
                        <li><a href="<?= base_url() . 'about' ?>"><?= $this->lang->line('About Us') ?></a></li>
                        <li><a href="<?= base_url() . 'privacy_policy' ?>"><?= $this->lang->line('Privacy Policy') ?></a>
                        </li>
                        <!-- <li><a href="#">FAQ</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="footer-wrap">
                    <h4><?=$this->lang->line('Categories')?></h4>
                    <ul>
                    <?php foreach ($CategoryHighrstProduct as $key => $value) { ?>
                        <li><a href="<?=base_url().'products?cat_id='.$this->utility->safe_b64encode($value->id)?>"><?=$value->name?></a></li>
                    <?php } ?>
                        <!-- <li><a href="#">Sofas</a></li>
                        <li><a href="#">Table</a></li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">Wall Lamp</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="footer-wrap">
                    <h4>Contact</h4>
                    <div class="footer-address-main-div">
                        <div class="footer-address-wrap">
                            <div class="footer-address-icon">
                                <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 12.25C10.6569 12.25 12 10.9069 12 9.25C12 7.59315 10.6569 6.25 9 6.25C7.34315 6.25 6 7.59315 6 9.25C6 10.9069 7.34315 12.25 9 12.25Z" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 9.25C16.5 16 9 21.25 9 21.25C9 21.25 1.5 16 1.5 9.25C1.5 7.26088 2.29018 5.35322 3.6967 3.9467C5.10322 2.54018 7.01088 1.75 9 1.75C10.9891 1.75 12.8968 2.54018 14.3033 3.9467C15.7098 5.35322 16.5 7.26088 16.5 9.25V9.25Z" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <!-- <img src="<?= $this->theme_base_url ?>/assets/images/footer/marker.svg" alt="marker" /> -->
                            </div>
                            <p><?= $appLinks[0]->contact_us_address ?></p>
                        </div>
                        <div class="footer-address-wrap">
                            <div class="footer-address-icon">
                                <svg width="14" height="23" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 1.75H2.5C1.67157 1.75 1 2.42157 1 3.25V19.75C1 20.5784 1.67157 21.25 2.5 21.25H11.5C12.3284 21.25 13 20.5784 13 19.75V3.25C13 2.42157 12.3284 1.75 11.5 1.75Z" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 4.75H13" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 18.25H13" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <!-- <img src="<?= $this->theme_base_url ?>/assets/images/footer/mobile.svg" alt="mobile" /> -->
                            </div>
                            <a href="tel:+1 412-450-3173">
                                <p><?= $appLinks[0]->contact_number ?></p>
                            </a>
                        </div>
                        <div class="footer-address-wrap">
                            <div class="footer-address-icon">
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.75H19V14.5C19 14.6989 18.921 14.8897 18.7803 15.0303C18.6397 15.171 18.4489 15.25 18.25 15.25H1.75C1.55109 15.25 1.36032 15.171 1.21967 15.0303C1.07902 14.8897 1 14.6989 1 14.5V1.75Z" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 1.75L10 10L1 1.75" stroke="#351C05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <!-- <img src="<?= $this->theme_base_url ?>/assets/images/footer/email.svg" alt="email" /> -->
                            </div>
                            <a href="mailto:info@mileniafurniture.com">
                                <p><?= $appLinks[0]->contact_email ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>© Copyright <?= date('Y') ?> <?= $this->siteTitle ?> Milenia Furniture . All rights reserved</p>
                    <div class="social-icons">
                        <a href="#"><img src="<?= $this->theme_base_url ?>/assets/images/footer/fb.svg" alt=""></a>
                        <a href="#"><img src="<?= $this->theme_base_url ?>/assets/images/footer/insta.svg" alt=""></a>
                        <a href="#"><img src="<?= $this->theme_base_url ?>/assets/images/footer/twiter.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
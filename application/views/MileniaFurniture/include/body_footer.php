<footer>

  <!--============== footer-bottom  ==============-->
  <div class="footer-extra-bg-1"></div>
  <div class="footer-extra-bg-2"></div>
  <section class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
          <div>
            <h4><?= $this->lang->line('Contact') ?></h4>
            <ul class="ps-0">
              <li class="social-networks d-flex align-items-start">
                <div class="device-im"><img src="<?= $this->theme_base_url . '/assets/img/home/MapPin.svg' ?>" alt=""></div>
                <p class="mb-0"><?= $appLinks[0]->contact_us_address ?></p>
              </li>
              <li class="social-networks d-flex align-items-center">
                <div class="device-im"><img src="<?= $this->theme_base_url . '/assets/img/home/DeviceMobile.svg' ?>" alt=""></div>
                <a href="tel:" class="mb-0"><?= $appLinks[0]->contact_number ?></a>
              </li>
              <li class="social-networks d-flex align-items-center">
                <div class="device-im"><img src="<?= $this->theme_base_url . '/assets/img/home/EnvelopeSimple.svg' ?>" alt=""></div>
                <a href="#"><?= $appLinks[0]->contact_email ?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
          <div>
            <h4><?= $this->lang->line('Useful Links') ?></h4>
            <ul class="ps-0">
              <li><a href=""><?= $this->lang->line('Blog') ?></a></li>
              <li><a href="<?= base_url() . 'users_account/users/account' ?>"><?= $this->lang->line('My account') ?></a></li>
              <li><a href="<?= base_url() . 'users_account/users/account?name=wishlist' ?>"><?= $this->lang->line('Wishlist') ?></a></li>
              <li><a href="<?= base_url() . 'terms_condition' ?>"><?= $this->lang->line('Terms of Service') ?></a></li>
              <li><a href="<?= base_url() . 'users_account/users/account?name=order' ?>"><?= $this->lang->line('Order History') ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
          <div>
            <h4><?= $this->lang->line('Information') ?></h4>
            <ul class="ps-0">
              <li><a href="<?= base_url() . 'products' ?>"><?= $this->lang->line('Shop') ?></a></li>
              <li><a href="<?= base_url() . 'contact' ?>"><?= $this->lang->line('Contact Us') ?></a></li>
              <li><a href="<?= base_url() . 'about' ?>"><?= $this->lang->line('About Us') ?></a></li>
              <li><a href="<?= base_url() . 'privacy_policy' ?>"><?= $this->lang->line('Privacy Policy') ?></a></li>
              <li><a href="<?= base_url() . 'about' ?>"><?= $this->lang->line('FAQ') ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
          <div>
            <h4><?= $this->lang->line('Categories') ?></h4>
            <ul class="ps-0">
              <?php foreach ($CategoryHighrstProduct as $key => $value) { ?>
                <li><a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>"><?= $value->name ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
          <div>
            <a href="./index.php">
              <div class="footer-logo">
                <img src="<?= $this->theme_base_url . '/assets/img/home/header-logo.png' ?>" alt="" class="logo-foot-img">
              </div>
            </a>
            <div>
              <h4 class="mb-1"><?= $this->lang->line('Download App') ?></h4>
              <p><?= $this->lang->line('From App Store or Google Play') ?></p>
            </div>
            <div class="d-flex app-store">


              <div class=" app-img me-3"><a href="<?= (!empty($appLinks)  && $appLinks[0]->ios_app_link != '') ? $appLinks[0]->ios_app_link : "#" ?>"><img src="<?= $this->theme_base_url . '/assets/img/home/app-store (1).png' ?>" alt=""></a>
              </div>
              <div class="app-img"><a href="<?= (!empty($appLinks) && $appLinks[0]->android_app_link != '') ? $appLinks[0]->android_app_link : "#" ?>"><img src="<?= $this->theme_base_url . '/assets/img/home/google-play.png' ?>" alt=""></a></div>
            </div>
            <div class="d-flex">
              <div class="social-imges">
                <a href="#"><img src="<?= $this->theme_base_url . '/assets/img/home/visa.png' ?>" alt=""></a>
              </div>
              <div class="social-imges">
                <a href="#"> <img src="<?= $this->theme_base_url . '/assets/img/home/mestercard.png' ?>" alt=""></a>
              </div>
              <div class="social-imges">
                <a href="#"><img src="<?= $this->theme_base_url . '/assets/img/home/upi.png' ?>" alt=""></a>
              </div>
              <div class="social-imges">
                <a href="#"><img src="<?= $this->theme_base_url . '/assets/img/home/paytm.png' ?>" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-copyright">
        <div>
          <p class="mb-0"><a href="mailto:© Copyright 2022 ">© Copyright 2023 </a> Fashion shop. All rights reserved</p>
        </div>
        <div class="footer-social-icons">
          <ul class="d-flex mb-0 ps-0">
            <li><a href="<?= (@$appLinks[0]->facebook_link != '') ? @$appLinks[0]->facebook_link : 'javascript:' ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="<?= (@$appLinks[0]->instagram_link != '') ? @$appLinks[0]->instagram_link : 'javascript:' ?>"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="<?= (@$appLinks[0]->twitter_link != '') ? @$appLinks[0]->twitter_link : 'javascript:' ?>"><i class="fa-brands fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="triangle">

      </div>
    </div>
  </section>
</footer>
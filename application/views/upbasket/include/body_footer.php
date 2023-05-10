<div class="container">
  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="foot-1">
        <a href="<?= base_url() ?>home">
          <img src="<?= $this->theme_base_url . '/assets/images/header-logo.png' ?>" alt="" class="logo-foot-img">
        </a>

        <h4><?= $this->lang->line('Download App') ?></h4>
        <p>From App Store or Google Play</p>
        <div class="foot-btn">
          <a href="<?= (!empty($appLinks)  && $appLinks[0]->ios_app_link != '') ? $appLinks[0]->ios_app_link : '#' ?>"><img src="<?= $this->theme_base_url . '/assets/images/app-store.png"' ?>" alt=""></a>
          <a href="<?= (!empty($appLinks) && $appLinks[0]->android_app_link != '') ? $appLinks[0]->android_app_link : '#' ?>"><img src="<?= $this->theme_base_url . '/assets/images/google-play.png"' ?>" alt=""></a>
        </div>
        <div class="foot-payment-icons">
          <ul>
            <li><a href="javascript:"><img src="<?= $this->theme_base_url . '/assets/images/foot-icon-1.png' ?>" alt=""></a></li>
            <li><a href="javascript:"><img src="<?= $this->theme_base_url . '/assets/images/foot-icon-2.png' ?>" alt=""></a></li>
            <li><a href="javascript:"><img src="<?= $this->theme_base_url . '/assets/images/foot-icon-3.png' ?>" alt=""></a></li>
            <li><a href="javascript:"><img src="<?= $this->theme_base_url . '/assets/images/foot-icon-4.png' ?>" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
      <div class="foot-2 common-links">
        <h3><?= $this->lang->line('Categories') ?></h3>
        <ul>
          <?php foreach ($CategoryHighrstProduct as $key => $value) { ?>
            <li><a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $value->name ?></a></li>
          <?php } ?>
          <!-- <li><a href="./product-listing-2.php"><span><i class="fa-solid fa-arrow-right"></i></span>Snacks</a></li>
              <li><a href="./product-listing-2.php"><span><i class="fa-solid fa-arrow-right"></i></span>Dry Fruits</a></li>
              <li><a href="./product-listing-2.php"><span><i class="fa-solid fa-arrow-right"></i></span>Biscuits</a></li>
              <li><a href="./product-listing-2.php"><span><i class="fa-solid fa-arrow-right"></i></span>Chocolates</a></li>
              <li><a href="./product-listing-2.php"><span><i class="fa-solid fa-arrow-right"></i></span>Drinks</a></li> -->
        </ul>
      </div>
    </div>
    <div class="col-xl-2 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
      <div class="foot-3 common-links">
        <h3><?= $this->lang->line('Useful Links') ?></h3>
        <ul>
          <li><a href="<?= base_url() . 'about' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('About Us') ?></a>
          </li>
          <li><a href="<?= base_url() . 'privacy_policy' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('Privacy Policy') ?></a>
          </li>
          <li><a href="<?= base_url() . 'terms_condition' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('Term & Conditions') ?></a>
          </li>
          <li><a href="<?= base_url() . 'return_refund' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('Refund & Return / Shipping policy') ?></a>
          </li>
          <!-- <li><a href="#"><span><i class="fa-solid fa-arrow-right"></i></span>Shipping policy</a></li> -->
          <li><a href="<?= base_url() . 'contact' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('Contact Us') ?></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
      <div class="foot-4 common-links">
        <h3><?= $this->lang->line('Shop information') ?></h3>
        <!-- Dk changed -->
        <div class="row">
          <div class="col-xl-1 col-lg-1 col-md-1">
            <a href="#"><i class="fa-solid fa-location-dot"></i></a>
          </div>
          <div class="col-xl-11 col-lg-11 col-md-11">
            <h4><span><?= $this->lang->line('Address') ?>:</span> <?= $appLinks[0]->contact_us_address ?></h4>
          </div>

          <div class="col-xl-1 col-lg-1 col-md-1">
            <a href="#"><i class="fa fa-mobile" aria-hidden="true"></i></a>
          </div>
          <div class="col-xl-11 col-lg-11 col-md-11">
            <h4><span><?= $this->lang->line('Call Us') ?>: </span><a href="#"><?= $appLinks[0]->contact_number ?></a></h4>
          </div>

          <div class="col-xl-1 col-lg-1 col-md-1">
            <a href="#"><i class="fa-regular fa-envelope"></i></a>
          </div>
          <div class="col-xl-11 col-lg-11 col-md-11">
            <h4><span><?= $this->lang->line('Email') ?>: </span><a href="#">
                <?= $appLinks[0]->contact_email ?></a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copy-right">
  <div class="container">
    <div class="copy-right-content">
      <div>
        <h3>© Copyright <?= date('Y') ?> <?= $this->siteTitle ?> . All rights reserved</h3>
      </div>
      <div class="foot-social-icons">
        <ul>
          <li><a href="<?= (@$appLinks[0]->facebook_link != '') ? @$appLinks[0]->facebook_link : 'javascript:' ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="<?= (@$appLinks[0]->instagram_link != '') ? @$appLinks[0]->instagram_link : 'javascript:' ?>"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="<?= (@$appLinks[0]->twitter_link != '') ? @$appLinks[0]->twitter_link : 'javascript:' ?>"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
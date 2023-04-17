  <!-- <div class="exta-foot-img"> -->
  <svg id="Layer_1" data-name="Layer 1" xmlns="<?=$this->theme_base_url?>/assets/images/Bg.svg" viewBox="400 0 1100 600" fill="url(#g1)">
      <defs>
        <linearGradient id='g1' gradientUnits='userSpaceOnUse' x1='-9.75%' y1='68.48%' x2='109.75%' y2='31.52%'>
        <stop offset='.301' stop-color='#FFE9F1'/>
        <stop offset='.827' stop-color='#ffe9f1' stop-opacity='.28'/>
        </linearGradient>
      </defs>
      <path class="footer-bg" d="M0,100C374.9,100,667.45,6,960,6s585.1,94,960,94V574H0Z" />
    </svg>
    <!-- </div> -->
    <img src="<?=$this->theme_base_url?>/assets/images/home-page/footer-left-img.png" alt="" class="footer-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/home-page/footer-right-img.png" alt="" class="footer-right-img">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
          <div class="foot-4 common-links">
            <h3><?=$this->lang->line('Contact Us')?></h3>
            <div class="row">
              <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                <a href="javascript:"><i class="fa-solid fa-location-dot"></i></a>
              </div>
              <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                <h4>103 South Pleasant DriveTuscaloosa, AL 35405</h4>
              </div>

              <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                <a href="javascript:"><i class="fa-solid fa-mobile-screen-button"></i></a>
              </div>
              <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                <h4><a href="tel: <?=(!empty($appLinks) && $appLinks[0]->contact_number != '' ) ? @$appLinks[0]->contact_number : "" ?>"><?=(!empty($appLinks) && $appLinks[0]->contact_number != '' ) ? @$appLinks[0]->contact_number : "1800-121-000" ?></a></h4>
              </div>

              <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                <a href="javascript:"><i class="fa-regular fa-envelope"></i></a>
              </div>
              <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                <h4><a href="mailto:"><?=(!empty($appLinks) && @$appLinks[0]->contact_email != '' ) ? @$appLinks[0]->contact_email : "" ?></a></h4>
              </div>
              <div class="foot-social-icons">
            <ul>
              <li><a href="<?=(@$appLinks[0]->facebook_link != '') ? @$appLinks[0]->facebook_link : 'javascript:' ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="<?=(@$appLinks[0]->twitter_link != '') ? @$appLinks[0]->twitter_link : 'javascript:' ?>"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="<?=(@$appLinks[0]->instagram_link != '') ? @$appLinks[0]->instagram_link : 'javascript:' ?>"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
          </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
          <div class="foot-2 common-links">
            <h3><?=$this->lang->line('Categories')?></h3>
            <ul>
            <?php foreach ($CategoryHighrstProduct as $key => $value) { ?>
              <li><a href="<?=base_url().'products?cat_id='.$this->utility->safe_b64encode($value->id)?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$value->name?></a></li>
            <?php } ?>
              <!-- <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Lips</a></li>
              <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Hair</a></li>
              <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Eye</a></li>
              <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Makeup</a></li>
              <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Natural</a></li>
              <li><a href="<?=$this->theme_base_url?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Fragrance</a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
          <div class="foot-3 common-links">
            <h3><?=$this->lang->line('Useful Links')?></h3>
            <ul>
              <li><a href="<?=base_url().'about'?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$this->lang->line('About Us')?></a></li>
              <li><a href="<?=base_url().'privacy_policy'?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$this->lang->line('Privacy Policy')?></a></li>
              <li><a href="<?=base_url().'terms_condition'?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$this->lang->line('Term & Conditions')?></a></li>
              <li><a href="<?=base_url().'return_refund'?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$this->lang->line('Refund & Return / Shipping policy')?></a></li>
              <li><a href="<?=base_url().'contact'?>"><span><i class="fa-solid fa-arrow-right"></i></span><?=$this->lang->line('Contact Us')?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
          <div class="foot-1">
            <a href="<?=base_url()?>"><img src="<?=$this->theme_base_url?>/assets/images/header-logo.png" alt="" class="logo-foot-img"></a>
            <h4><?=$this->lang->line('Download App')?></h4>
            <!-- <p>From App Store or Google Play</p> -->
            <div class="foot-btn">
              <a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/app-store.png" alt=""></a>
              <a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/google-play.png" alt=""></a>
            </div>
            <div class="foot-payment-icons">
              <ul>
                <li><a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/foot-icon-1.png" alt=""></a></li>
                <li><a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/foot-icon-2.png" alt=""></a></li>
                <li><a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/foot-icon-3.png" alt=""></a></li>
                <li><a href="javascript:"><img src="<?=$this->theme_base_url?>/assets/images/home-page/foot-icon-4.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right">
      <div class="container">
        <div class="copy-right-content">
          <div>
            <h3>© Copyright 2022 Butterfly Beauty Shop . All rights reserved</h3>
          </div>
        </div>
      </div>
    </div>
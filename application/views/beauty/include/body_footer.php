  <!-- <div class="exta-foot-img"> -->
  <svg id="Layer_1" data-name="Layer 1" xmlns="<?= $this->theme_base_url ?>/assets/images/Bg.svg" viewBox="850 0 200 400" fill="url(#g1)">
      <defs>
          <linearGradient id='g1' gradientUnits='userSpaceOnUse' x1='-9.75%' y1='68.48%' x2='109.75%' y2='31.52%'>
              <stop offset='.301' stop-color='#FFE9F1' />
              <stop offset='.827' stop-color='#ffe9f1' stop-opacity='.28' />
          </linearGradient>
      </defs>
      <path class="footer-bg" d="M0,100C374.9,100,667.45,6,960,6s585.1,94,960,94V574H0Z" />
  </svg>
  <!-- </div> -->
  <svg class="footer-left-img" viewBox="0 0 117 87" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path opacity="0.1" d="M12.0364 34.5744C12.0364 70.6939 52.7326 79.0365 58.6014 85.009C52.6364 85.009 39.4558 82.3547 34.5492 79.7002C20.7914 72.4005 6.36007 59.9814 2.2231 46.8988C-3.16458 24.81 1.45341 17.4154 13.7681 7.93501C-1.91389 21.3019 2.80033 40.5471 5.30176 46.8988C17.0392 73.8226 42.1497 81.7859 50.4236 82.3547C30.4122 75.6238 15.7885 61.3088 10.6894 50.5013C3.45454 30.1758 11.9081 13.6548 17.0392 7.93501C36.281 -8.37067 57.0358 3.85905 63.3156 14.2869C73.7061 31.5409 71.4933 46.8988 70.435 67.7552C74.4541 62.3515 78.3241 57.327 86.7905 51.8285C103.916 42.1587 117 49.7428 117 59.9814C114.883 81.3119 85.8284 85.009 66.0094 87C80.5369 82.8287 100.163 79.7002 107.668 70.2201C115.172 60.7399 108.437 51.8285 95.3531 54.1037C80.8467 56.7543 72.9595 68.952 66.0397 79.6534L66.0094 79.7002C66.2018 74.3915 67.2601 63.6787 68.5108 45.0975C66.5867 13.1493 53.5985 8.40902 36.281 7.93501C16.8083 7.25243 12.0043 25.4102 12.0364 34.5744Z" fill="#0F053F"></path>
  </svg>

  <svg class="footer-right-img" viewBox="0 0 238 253" fill="var(--secondary-color)" xmlns="http://www.w3.org/2000/svg">
      <path opacity="0.1" d="M34.8746 100.544C34.8746 205.581 152.789 229.842 169.794 247.21C152.511 247.21 114.321 239.491 100.104 231.772C60.2416 210.544 18.4279 174.429 6.44129 136.384C-9.16918 72.1485 4.21116 50.6448 39.8922 23.0754C-5.54538 61.9468 8.11378 117.913 15.3615 136.384C49.37 214.679 122.126 237.837 146.099 239.491C88.1175 219.917 45.7461 178.289 30.9719 146.86C10.0093 87.7526 34.5029 39.7088 49.37 23.0754C105.122 -24.3423 165.258 11.2223 183.453 41.547C213.559 91.7223 207.147 136.384 204.081 197.035C215.726 181.321 226.939 166.71 251.47 150.72C301.089 122.599 339 144.654 339 174.429C332.867 236.459 248.682 247.21 191.258 253C233.351 240.87 290.217 231.772 311.96 204.203C333.704 176.634 314.19 150.72 276.279 157.336C234.248 165.044 211.395 200.516 191.346 231.636L191.258 231.772C191.816 216.334 194.882 185.181 198.506 131.146C192.931 38.2387 155.298 24.4538 105.122 23.0754C48.701 21.0904 34.7817 73.8939 34.8746 100.544Z" fill="#F92672"></path>
  </svg>

  <div class="container">
      <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
              <div class="foot-4 common-links">
                  <h3><?= $this->lang->line('Contact Us') ?></h3>
                  <div class="row">
                      <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                          <a href="javascript:"><i class="fa-solid fa-location-dot"></i></a>
                      </div>
                      <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                          <h4><?= (!empty($appLinks) && $appLinks[0]->contact_us_address != '') ? @$appLinks[0]->contact_us_address : "103 South Pleasant DriveTuscaloosa, AL 35405" ?>
                          </h4>
                      </div>

                      <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                          <a href="javascript:"><i class="fa-solid fa-mobile-screen-button"></i></a>
                      </div>
                      <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                          <h4><a href="tel: <?= (!empty($appLinks) && $appLinks[0]->contact_number != '') ? @$appLinks[0]->contact_number : "" ?>"><?= (!empty($appLinks) && $appLinks[0]->contact_number != '') ? @$appLinks[0]->contact_number : "1800-121-000" ?></a>
                          </h4>
                      </div>

                      <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                          <a href="javascript:"><i class="fa-regular fa-envelope"></i></a>
                      </div>
                      <div class="col-xxl-11 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11">
                          <h4><a href="mailto:"><?= (!empty($appLinks) && @$appLinks[0]->contact_email != '') ? @$appLinks[0]->contact_email : "" ?></a>
                          </h4>
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
          <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
              <div class="foot-2 common-links">
                  <h3><?= $this->lang->line('Categories') ?></h3>
                  <ul>
                      <?php foreach ($CategoryHighrstProduct as $key => $value) { ?>
                          <li><a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $value->name ?></a></li>
                      <?php } ?>
                      <!-- <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Lips</a></li>
              <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Hair</a></li>
              <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Eye</a></li>
              <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Makeup</a></li>
              <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Natural</a></li>
              <li><a href="<?= $this->theme_base_url ?>/p-listing-2.html"><span><i class="fa-solid fa-arrow-right"></i></span>Fragrance</a></li> -->
                  </ul>
              </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
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
                      <li><a href="<?= base_url() . 'contact' ?>"><span><i class="fa-solid fa-arrow-right"></i></span><?= $this->lang->line('Contact Us') ?></a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
              <div class="foot-1">
                  <a href="<?= base_url() . 'home' ?>"><img src="<?= $this->siteLogo ?>" alt="" class="logo-foot-img"></a>
                  <h4><?= $this->lang->line('Download App') ?></h4>
                  <!-- <p>From App Store or Google Play</p> -->
                  <div class="foot-btn">
                      <a href="<?= (!empty($appLinks)  && $appLinks[0]->ios_app_link != '') ? $appLinks[0]->ios_app_link : "#" ?>"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/app-store.png" alt=""></a>
                      <a href="<?= (!empty($appLinks) && $appLinks[0]->android_app_link != '') ? $appLinks[0]->android_app_link : "#" ?>"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/google-play.png" alt=""></a>
                  </div>
                  <div class="foot-payment-icons">
                      <ul>
                          <li><a href="javascript:"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/foot-icon-1.png" alt=""></a></li>
                          <li><a href="javascript:"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/foot-icon-2.png" alt=""></a></li>
                          <li><a href="javascript:"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/foot-icon-3.png" alt=""></a></li>
                          <li><a href="javascript:"><img src="<?= $this->theme_base_url ?>/assets/images/home-page/foot-icon-4.png" alt=""></a></li>
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
                  <h3>© Copyright 2023 <?= $this->siteTitle ?> . All rights reserved</h3>
              </div>
          </div>
      </div>
  </div>
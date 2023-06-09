<!-- banner -->
<section class="cmn-banner banner about-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="cmn-banner-wrap text-center">
          <h3 class="title2 text-uppercase"><?= $this->lang->line('About us') ?></h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('About us') ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- about-us -->
<section class="about-us p-120">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-us-img">
          <img src="<?= base_url() . 'public/uploads/about/' . $about_section_one[0]->image ?>" alt="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-wrap">
          <span class="small-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('About us') ?></span>
          <h3 class="title2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0">
            <?= $about_section_one[0]->main_title ?></h3>
          <p class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">
            <?= $about_section_one[0]->content ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- why us -->
<section class="why-us pb-120">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-wrap">
          <span class="small-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('Why'); ?>
            <?= $this->lang->line('Choose Us?'); ?></span>
          <h3 class="title2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0">We
            provide unique design solutions for you</h3>
          <p class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">Standing
            behind a reputation of outstanding customer service and care, is a product line of unmatched
            quality and affordability.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-6 col-6 my-lg-5 my-5 wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
            <div class="why-us-wrap">
              <div class="why-us-icon">
                <!-- <img src="./assets/images/about/circle-design.svg" alt="circle-design" /> -->
                <svg id="Layer_1" data-name="Layer 1" xmlns="./assets/images/about/circle-design.svg" viewBox="0 0 62 62">
                  <defs>
                    <style>
                      .about-why-choose-icon {
                        fill: none;
                        stroke: #f5512b;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 5px;
                      }
                    </style>
                  </defs>
                  <path class="about-why-choose-icon" d="M38,66.5A28.5,28.5,0,1,0,9.5,38,28.5,28.5,0,0,0,38,66.5Zm0-16.62A11.88,11.88,0,1,0,26.12,38,11.88,11.88,0,0,0,38,49.88ZM29.6,29.6,17.84,17.84M46.4,29.6,58.16,17.84M46.4,46.4,58.16,58.16M29.6,46.4,17.84,58.16" transform="translate(-7 -7)" />
                </svg>
              </div>
              <h5>Support 24/7</h5>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia mollit anim id est
                laborum.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-6 my-lg-5 my-5 wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
            <div class="why-us-wrap">
              <div class="why-us-icon">
                <!-- <img src="./assets/images/about/refund.svg" alt="refund" /> -->
                <svg id="Layer_1" data-name="Layer 1" xmlns="./assets/images/about/refund.svg" viewBox="0 0 62 52.5">
                  <defs>
                    <style>
                      .about-why-choose-icon {
                        fill: none;
                        stroke: #f5512b;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 5px;
                      }
                    </style>
                  </defs>
                  <path class="about-why-choose-icon" d="M23.75,40.38,9.5,26.12,23.75,11.88m0,47.5H49.88a16.63,16.63,0,0,0,0-33.26H9.5" transform="translate(-7 -9.38)" />
                </svg>
              </div>
              <h5>Refund Anytime</h5>
              <p>Since the introduction of Virtual Game, it has been achieving great heights so far as its
                popularity</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ">
        <div class="about-us-img">
          <img src="<?= $this->theme_base_url ?>/assets/images/about/why-us.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- start-project -->
<section class="start-project">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"></div>
      <div class="col-lg-6">
        <div class="start-project-wrap">
          <h3 class="title2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">Let's
            start your new dream project</h3>
          <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">Get in touch
            to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill
            out the contact form and we'll get back to you.</p>
          <a href="#" class="cmn-btn mt-lg-4 mt-md-3 mt-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">Get a Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- testimonials -->
<section class="testimonials p-120 categories">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title title text-center center-title">
          <span class="small-title">
            <?= $this->lang->line('What Our Clients Say') ?>
          </span>
          <h2>Testimonials</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-carousel owl-theme testimonials-slider">
          <?php foreach ($about_section_two as $key => $value) { ?>
            <div class="item">
              <div class="testimonials-wrap text-center">
                <div class="quote-img-wrap position-relative">
                  <svg width="77" height="68" viewBox="0 0 77 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.504 67.5C13.7462 67.5 9.13997 65.4167 5.68527 61.25C2.39509 56.9167 0.75 51.3333 0.75 44.5C0.75 35.1667 3.21764 26.75 8.15291 19.25C13.2527 11.5833 20.9846 5.16666 31.3487 0L34.0631 3.99999C29.1278 6.99999 24.6038 11.25 20.4911 16.75C16.5429 22.0833 14.5688 27.5 14.5688 33C14.5688 34.5 14.98 35.75 15.8026 36.75C16.6251 37.5833 17.859 38 19.504 38C23.6168 38 27.0715 39.5 29.8681 42.5C32.8293 45.3333 34.3099 48.8333 34.3099 53C34.3099 57.1667 32.8293 60.6667 29.8681 63.5C27.0715 66.1667 23.6168 67.5 19.504 67.5ZM62.1942 67.5C56.4364 67.5 51.8301 65.4167 48.3754 61.25C45.0852 56.9167 43.4401 51.3333 43.4401 44.5C43.4401 35.1667 45.9078 26.75 50.843 19.25C55.9428 11.5833 63.6748 5.16666 74.0388 0L76.7532 3.99999C71.818 6.99999 67.294 11.25 63.1812 16.75C59.233 22.0833 57.2589 27.5 57.2589 33C57.2589 34.5 57.6702 35.75 58.4927 36.75C59.3153 37.5833 60.5491 38 62.1942 38C66.3069 38 69.7616 39.5 72.5583 42.5C75.5194 45.3333 77 48.8333 77 53C77 57.1667 75.5194 60.6667 72.5583 63.5C69.7616 66.1667 66.3069 67.5 62.1942 67.5Z" fill="#CC833D" />
                  </svg>
                </div>
                <p>” <?= $value->content ?> “</p>
                <h5><?= $value->name ?></h5>
                <p><?= $value->designation ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
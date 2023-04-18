<!-- ----hero-section--- -->
<section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>About Us</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('About us')?></li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- ---------about-us-section------------ -->
  <section class="about-us-section section">
  <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-left-img.png" alt="" class="product-detail-top-left-img">
  <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-right-img.png" alt="" class="product-detail-top-right-img">
  <img src="<?=$this->theme_base_url?>/assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">

    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.5s" data-wow-delay="0" data-wow-offset="0">
          <div class="about-content">
              <!-- <h2 class="title">Laxmiraj <span>Dryfruits</span></h2> -->
              <h2 class="title"><?=$about_section_one[0]->main_title ?></h2>
              <p><?=$about_section_one[0]->content ?></p>
              <!-- <p >Turpis massa tincidunt dui ut. Commodo ullamcorper a lacus vestibulum sed arcu. Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Quis viverra nibh cras pulvinar mattis. Orci a scelerisque purus semper eget duis. Justo laoreet sit amet cursus. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.</p> -->
          </div>
        </div>
        <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0" data-wow-offset="0">
          <div class="about-image-parts">
          <img src="<?=$this->theme_base_url?>/assets/images/about-rectangl-1.svg" alt="" class="about-rectangl-1">
          <img src="<?=$this->theme_base_url?>/assets/images/about-rectangl-2.svg" alt="" class="about-rectangl-2">
          <div class="about-image">
            <!-- <img src="<?=$this->theme_base_url?>/assets/images/about-main-img.png" alt=""> -->
            <img src="<?= base_url() . 'public/uploads/about/' . $about_section_one[0]->image ?>" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- -------- our-trusted-clients--------- -->
  <section class="our-clinets-section section">
      <div class="container">
      <h2 class="title text-center">The Trust From <span>Clients</span></h2>
      <!-- <p class="pera text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
        
      <div class="owl-4 owl-carousel owl-theme">
        <?php foreach ($about_section_two as $key => $value) { ?>
        <div class="clinet-review-wrapper wow flipInX" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="0">
            <div class="review-icon">
                <!-- <img src="./assets/images/double-quotes-img.svg" alt=""> -->
                <svg width="77" height="68" viewBox="0 0 77 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.504 67.5C13.7462 67.5 9.13997 65.4167 5.68527 61.25C2.39509 56.9167 0.75 51.3333 0.75 44.5C0.75 35.1667 3.21764 26.75 8.15291 19.25C13.2527 11.5833 20.9846 5.16666 31.3487 0L34.0631 3.99999C29.1278 6.99999 24.6038 11.25 20.4911 16.75C16.5429 22.0833 14.5688 27.5 14.5688 33C14.5688 34.5 14.98 35.75 15.8026 36.75C16.6251 37.5833 17.859 38 19.504 38C23.6168 38 27.0715 39.5 29.8681 42.5C32.8293 45.3333 34.3099 48.8333 34.3099 53C34.3099 57.1667 32.8293 60.6667 29.8681 63.5C27.0715 66.1667 23.6168 67.5 19.504 67.5ZM62.1942 67.5C56.4364 67.5 51.8301 65.4167 48.3754 61.25C45.0852 56.9167 43.4401 51.3333 43.4401 44.5C43.4401 35.1667 45.9078 26.75 50.843 19.25C55.9428 11.5833 63.6748 5.16666 74.0388 0L76.7532 3.99999C71.818 6.99999 67.294 11.25 63.1812 16.75C59.233 22.0833 57.2589 27.5 57.2589 33C57.2589 34.5 57.6702 35.75 58.4927 36.75C59.3153 37.5833 60.5491 38 62.1942 38C66.3069 38 69.7616 39.5 72.5583 42.5C75.5194 45.3333 77 48.8333 77 53C77 57.1667 75.5194 60.6667 72.5583 63.5C69.7616 66.1667 66.3069 67.5 62.1942 67.5Z" fill="#CC833D"/>
                </svg>
            </div>
            <p><?=$value->content?></p>
            <h3><?=$value->name?></h3>
            <h5><?=$value->designation?></h5>
        </div>
        <?php } ?>
        <!-- <div class="clinet-review-wrapper wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.2s" data-wow-offset="0">
            <div class="review-icon"> -->
                <!-- <img src="./assets/images/double-quotes-img.svg" alt=""> -->
                <!-- <svg width="77" height="68" viewBox="0 0 77 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.504 67.5C13.7462 67.5 9.13997 65.4167 5.68527 61.25C2.39509 56.9167 0.75 51.3333 0.75 44.5C0.75 35.1667 3.21764 26.75 8.15291 19.25C13.2527 11.5833 20.9846 5.16666 31.3487 0L34.0631 3.99999C29.1278 6.99999 24.6038 11.25 20.4911 16.75C16.5429 22.0833 14.5688 27.5 14.5688 33C14.5688 34.5 14.98 35.75 15.8026 36.75C16.6251 37.5833 17.859 38 19.504 38C23.6168 38 27.0715 39.5 29.8681 42.5C32.8293 45.3333 34.3099 48.8333 34.3099 53C34.3099 57.1667 32.8293 60.6667 29.8681 63.5C27.0715 66.1667 23.6168 67.5 19.504 67.5ZM62.1942 67.5C56.4364 67.5 51.8301 65.4167 48.3754 61.25C45.0852 56.9167 43.4401 51.3333 43.4401 44.5C43.4401 35.1667 45.9078 26.75 50.843 19.25C55.9428 11.5833 63.6748 5.16666 74.0388 0L76.7532 3.99999C71.818 6.99999 67.294 11.25 63.1812 16.75C59.233 22.0833 57.2589 27.5 57.2589 33C57.2589 34.5 57.6702 35.75 58.4927 36.75C59.3153 37.5833 60.5491 38 62.1942 38C66.3069 38 69.7616 39.5 72.5583 42.5C75.5194 45.3333 77 48.8333 77 53C77 57.1667 75.5194 60.6667 72.5583 63.5C69.7616 66.1667 66.3069 67.5 62.1942 67.5Z" fill="#CC833D"/>
                </svg>
            </div>
            <p>Fringilla est ullamcorper eget nulla facilisi etiam. Varius vel pharetra vel turpis nunc eget lorem dolor sed. Metus dictum at tempor commodo ullamcorper a. Tristique senectus et netus et malesuada. Suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
            <h3>Rajive Khanna</h3>
            <h5>Customer</h5>
        </div> -->
        <!-- <div class="clinet-review-wrapper wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offset="0">
            <div class="review-icon"> -->
                <!-- <img src="./assets/images/double-quotes-img.svg" alt=""> -->
                <!-- <svg width="77" height="68" viewBox="0 0 77 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.504 67.5C13.7462 67.5 9.13997 65.4167 5.68527 61.25C2.39509 56.9167 0.75 51.3333 0.75 44.5C0.75 35.1667 3.21764 26.75 8.15291 19.25C13.2527 11.5833 20.9846 5.16666 31.3487 0L34.0631 3.99999C29.1278 6.99999 24.6038 11.25 20.4911 16.75C16.5429 22.0833 14.5688 27.5 14.5688 33C14.5688 34.5 14.98 35.75 15.8026 36.75C16.6251 37.5833 17.859 38 19.504 38C23.6168 38 27.0715 39.5 29.8681 42.5C32.8293 45.3333 34.3099 48.8333 34.3099 53C34.3099 57.1667 32.8293 60.6667 29.8681 63.5C27.0715 66.1667 23.6168 67.5 19.504 67.5ZM62.1942 67.5C56.4364 67.5 51.8301 65.4167 48.3754 61.25C45.0852 56.9167 43.4401 51.3333 43.4401 44.5C43.4401 35.1667 45.9078 26.75 50.843 19.25C55.9428 11.5833 63.6748 5.16666 74.0388 0L76.7532 3.99999C71.818 6.99999 67.294 11.25 63.1812 16.75C59.233 22.0833 57.2589 27.5 57.2589 33C57.2589 34.5 57.6702 35.75 58.4927 36.75C59.3153 37.5833 60.5491 38 62.1942 38C66.3069 38 69.7616 39.5 72.5583 42.5C75.5194 45.3333 77 48.8333 77 53C77 57.1667 75.5194 60.6667 72.5583 63.5C69.7616 66.1667 66.3069 67.5 62.1942 67.5Z" fill="#CC833D"/>
                </svg>
            </div>
            <p>Fringilla est ullamcorper eget nulla facilisi etiam. Varius vel pharetra vel turpis nunc eget lorem dolor sed. Metus dictum at tempor commodo ullamcorper a. Tristique senectus et netus et malesuada. Suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
            <h3>Rajive Khanna</h3>
            <h5>Customer</h5>
        </div> -->
      </div> 

      </div>
  </section>
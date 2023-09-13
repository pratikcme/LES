<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('About Us') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('About Us') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!--========= about-us =============-->
<section class="about-us p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="about-content">
                    <div class="about-text">

                        <h2><?= $about_section_one[0]->main_title ?></h2>
                    </div>
                    <div>
                        <p><?= $about_section_one[0]->content ?></p>

                    </div>
                    <div class="about-author-name d-flex align-items-center d-none  ">
                        <h4 class="me-2 mb-0">Alex Marlay</h4>
                        <span>(CEO)</span>
                    </div>
                    <div class="author-sign d-none">
                        <img src="<?= $this->theme_base_url ?>/assets/images/about-us/author-sign.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="about-frame">
                    <!-- <img src="<?= $this->theme_base_url ?>/assets/images/about-us/about-frame.png" alt="" class="about-left-im"> -->

                    <svg class="about-left-img" viewBox="0 0 139 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M14.2996 43.3173C14.2996 88.5705 62.6482 99.0227 69.6204 106.506C62.5339 106.506 46.8749 103.18 41.0456 99.8543C24.7008 90.7087 7.55599 75.1492 2.64112 58.7583C-3.75963 31.0837 1.7267 21.8193 16.357 9.94156C-2.27377 26.6886 3.32689 50.8004 6.29867 58.7583C20.2432 92.4903 50.0753 102.467 59.905 103.18C36.1308 94.7471 18.7573 76.8121 12.6994 63.2718C4.10411 37.8065 14.1472 17.1077 20.2432 9.94156C43.103 -10.4874 67.7605 4.8349 75.2211 17.8997C87.5654 39.5167 84.9365 58.7582 83.6792 84.8887C88.454 78.1185 93.0517 71.8235 103.11 64.9345C123.455 52.8195 139 62.3215 139 75.1492C136.485 101.874 101.967 106.506 78.4214 109C95.6806 103.774 118.998 99.8543 127.913 87.9769C136.828 76.0994 128.827 64.9345 113.283 67.7851C96.0487 71.106 86.6783 86.3881 78.4574 99.7956L78.4214 99.8543C78.65 93.2032 79.9073 79.7814 81.3932 56.5015C79.1072 16.4744 63.6769 10.5354 43.103 9.94156C19.9689 9.08638 14.2615 31.8357 14.2996 43.3173Z" fill="var(--secondary-color)" />
                    </svg>

                    <div class="about-img">
                        <img src="<?= base_url() . 'public/uploads/about/' . $about_section_one[0]->image ?>" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--============ why-butterfly ================-->
<!-- <section class="why-butterfly-wrap wow fadeInDownBig" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
    <div class="container">
        <div class="why-butterfly-data">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="title text-center">
                        <h2>Why Butterfly</h2>
                        <p>Do not miss the current offers until the end of month.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 mb-lg-3">
                    <div class="why-beautic-data text-center">
                        <div class="why-icon">
                            <img src="<?= $this->theme_base_url ?>/assets/images/about-us/no-artificial.svg" alt="">
                        </div>
                        <div class="why-beautic-content">
                            <h5>No Artificial Fragrances</h5>
                            <p>Decorate your nails with various Beaux. We have products like nail hardener, polish,
                                extensions, artificial nails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 mb-lg-3">
                    <div class="why-beautic-data natural-data text-center">
                        <img src="<?= $this->theme_base_url ?>/assets/images/about-us/why-line-left-im.png" alt=""
                            class="natural-left-line">
                        <img src="<?= $this->theme_base_url ?>/assets/images/about-us/why-line-right-img.png" alt=""
                            class="natural-right-line">
                        <div class="why-icon">
                            <img src="<?= $this->theme_base_url ?>/assets/images/about-us/natural-vegen.svg" alt="">
                        </div>
                        <div class="why-beautic-content">
                            <h5>100% Natural & Vegan</h5>
                            <p>Decorate your nails with various Beaux. We have products like nail hardener, polish,
                                extensions, artificial nails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 mb-lg-3">
                    <div class="why-beautic-data text-center">
                        <div class="why-icon">
                            <img src="<?= $this->theme_base_url ?>/assets/images/about-us/harsh-chemical.svg" alt="">
                        </div>
                        <div class="why-beautic-content">
                            <h5>No Harsh Chemicals</h5>
                            <p>Decorate your nails with various Beaux. We have products like nail hardener, polish,
                                extensions, artificial nails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--============ client-wrap ==================-->
<section class="client-wrap p-100 offering">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="title text-center">
                    <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                    </svg>
                    <h2>The Trust From Clients</h2>
                    <p>Do not miss the current offers until the end of month.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- slider -->
    <div class="owl-carousel owl-theme" id="client-slide">
        <?php foreach ($about_section_two as $key => $value) { ?>

            <div class="item">
                <div class="clients-card text-center">
                    <div class="clients-quote-img">
                        <!-- <img src="<?= $this->theme_base_url ?>/assets/images/about-us/client-quote-img.png" alt=""> -->
                        <svg id="Layer-1" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54">
                            <defs></defs>
                            <path class="client-quote-img" d="M15,54A13.64,13.64,0,0,1,4,49Q0,43.8,0,35.6A35.92,35.92,0,0,1,5.92,15.4Q12,6.21,24.48,0l2.17,3.2A39,39,0,0,0,15.79,13.4q-4.74,6.41-4.73,13a4.55,4.55,0,0,0,1,3,4,4,0,0,0,3,1A10.87,10.87,0,0,1,23.29,34a11.18,11.18,0,0,1,3.56,8.4,11.18,11.18,0,0,1-3.56,8.4A11.55,11.55,0,0,1,15,54Zm34.16,0A13.64,13.64,0,0,1,38.1,49q-3.94-5.2-4-13.4a36,36,0,0,1,5.92-20.2Q46.19,6.21,58.63,0L60.8,3.2A39.17,39.17,0,0,0,49.94,13.4q-4.72,6.41-4.73,13a4.61,4.61,0,0,0,1,3,4,4,0,0,0,3,1A10.89,10.89,0,0,1,57.45,34,11.17,11.17,0,0,1,61,42.4a11.17,11.17,0,0,1-3.55,8.4A11.57,11.57,0,0,1,49.16,54Z" />
                        </svg>
                    </div>
                    <div class="clients-con">
                        <p><?= $value->content ?></p>
                    </div>
                    <div class="client-name">
                        <h4><?= $value->name ?></h4>
                        <p><?= $value->designation ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('About Us')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('About Us')?></li>
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
                        <!-- <h4>welcome to our </h4> -->
                        <h2><?=$about_section_one[0]->main_title ?></h2>
                    </div>
                    <div>
                        <p><?=$about_section_one[0]->content ?></p>
                        <!-- <p>I think it would rob her of something. We live in an era of globalization and the era of the
                            woman. Never in the history of the world have women been more in control of their destiny.
                        </p> -->
                    </div>
                    <div class="about-author-name d-flex align-items-center d-none  ">
                        <h4 class="me-2 mb-0">Alex Marlay</h4>
                        <span>(CEO)</span>
                    </div>
                    <div class="author-sign d-none">
                        <img src="<?=$this->theme_base_url?>/assets/images/about-us/author-sign.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                <div class="about-frame">
                    <img src="<?=$this->theme_base_url?>/assets/images/about-us/about-frame.png" alt="" class="about-left-im">
                    <div class="about-img">
                        <img src="<?= base_url() . 'public/uploads/about/' . $about_section_one[0]->image ?>" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--============ why-butterfly ================-->
<section class="why-butterfly-wrap wow fadeInDownBig" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0"    >
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
                            <img src="<?=$this->theme_base_url?>/assets/images/about-us/no-artificial.svg" alt="">
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
                        <img src="<?=$this->theme_base_url?>/assets/images/about-us/why-line-left-im.png" alt="" class="natural-left-line">
                        <img src="<?=$this->theme_base_url?>/assets/images/about-us/why-line-right-img.png" alt="" class="natural-right-line">
                        <div class="why-icon">
                            <img src="<?=$this->theme_base_url?>/assets/images/about-us/natural-vegen.svg" alt="">
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
                            <img src="<?=$this->theme_base_url?>/assets/images/about-us/harsh-chemical.svg" alt="">
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
</section>

<!--============ client-wrap ==================-->
<section class="client-wrap p-100 offering">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="title text-center">
                    <h2>The Trust From Clients</h2>
                    <p>Do not miss the current offers until the end of month.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- slider -->
    <div class="owl-carousel owl-theme" id="client-slide">
        <div class="item">
            <div class="clients-card text-center">
                <div class="clients-quote-img">
                    <!-- <img src="<?=$this->theme_base_url?>/assets/images/about-us/client-quote-img.png" alt=""> -->
                    <svg id="Layer-1" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54"><defs></defs><path class="client-quote-img" d="M15,54A13.64,13.64,0,0,1,4,49Q0,43.8,0,35.6A35.92,35.92,0,0,1,5.92,15.4Q12,6.21,24.48,0l2.17,3.2A39,39,0,0,0,15.79,13.4q-4.74,6.41-4.73,13a4.55,4.55,0,0,0,1,3,4,4,0,0,0,3,1A10.87,10.87,0,0,1,23.29,34a11.18,11.18,0,0,1,3.56,8.4,11.18,11.18,0,0,1-3.56,8.4A11.55,11.55,0,0,1,15,54Zm34.16,0A13.64,13.64,0,0,1,38.1,49q-3.94-5.2-4-13.4a36,36,0,0,1,5.92-20.2Q46.19,6.21,58.63,0L60.8,3.2A39.17,39.17,0,0,0,49.94,13.4q-4.72,6.41-4.73,13a4.61,4.61,0,0,0,1,3,4,4,0,0,0,3,1A10.89,10.89,0,0,1,57.45,34,11.17,11.17,0,0,1,61,42.4a11.17,11.17,0,0,1-3.55,8.4A11.57,11.57,0,0,1,49.16,54Z"/></svg>
                </div>
                <div class="clients-con">
                    <p>Fringilla est ullamcorper eget nulla facilisi etiam. Varius vel pharetra vel turpis nunc eget
                        lorem dolor sed. Metus dictum at tempor commodo ullamcorper a. Tristique senectus et netus
                        et malesuada. Suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
                </div>
                <div class="client-name">
                    <h4>Mike Hussy</h4>
                    <p>Customer</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="clients-card text-center">
                <div class="clients-quote-img">
                    <!-- <img src="<?=$this->theme_base_url?>/assets/images/about-us/client-quote-img.png" alt=""> -->
                    <svg id="Layer-1" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54"><defs></defs><path class="client-quote-img" d="M15,54A13.64,13.64,0,0,1,4,49Q0,43.8,0,35.6A35.92,35.92,0,0,1,5.92,15.4Q12,6.21,24.48,0l2.17,3.2A39,39,0,0,0,15.79,13.4q-4.74,6.41-4.73,13a4.55,4.55,0,0,0,1,3,4,4,0,0,0,3,1A10.87,10.87,0,0,1,23.29,34a11.18,11.18,0,0,1,3.56,8.4,11.18,11.18,0,0,1-3.56,8.4A11.55,11.55,0,0,1,15,54Zm34.16,0A13.64,13.64,0,0,1,38.1,49q-3.94-5.2-4-13.4a36,36,0,0,1,5.92-20.2Q46.19,6.21,58.63,0L60.8,3.2A39.17,39.17,0,0,0,49.94,13.4q-4.72,6.41-4.73,13a4.61,4.61,0,0,0,1,3,4,4,0,0,0,3,1A10.89,10.89,0,0,1,57.45,34,11.17,11.17,0,0,1,61,42.4a11.17,11.17,0,0,1-3.55,8.4A11.57,11.57,0,0,1,49.16,54Z"/></svg>
                </div>
                <div class="clients-con">
                    <p>Fringilla est ullamcorper eget nulla facilisi etiam. Varius vel pharetra vel turpis nunc eget
                        lorem dolor sed. Metus dictum at tempor commodo ullamcorper a. Tristique senectus et netus
                        et malesuada. Suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
                </div>
                <div class="client-name">
                    <h4>Mike Hussy</h4>
                    <p>Customer</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="clients-card text-center">
                <div class="clients-quote-img">
                    <!-- <img src="<?=$this->theme_base_url?>/assets/images/about-us/client-quote-img.png" alt=""> -->
                    <svg id="Layer-1" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 54"><defs></defs><path class="client-quote-img" d="M15,54A13.64,13.64,0,0,1,4,49Q0,43.8,0,35.6A35.92,35.92,0,0,1,5.92,15.4Q12,6.21,24.48,0l2.17,3.2A39,39,0,0,0,15.79,13.4q-4.74,6.41-4.73,13a4.55,4.55,0,0,0,1,3,4,4,0,0,0,3,1A10.87,10.87,0,0,1,23.29,34a11.18,11.18,0,0,1,3.56,8.4,11.18,11.18,0,0,1-3.56,8.4A11.55,11.55,0,0,1,15,54Zm34.16,0A13.64,13.64,0,0,1,38.1,49q-3.94-5.2-4-13.4a36,36,0,0,1,5.92-20.2Q46.19,6.21,58.63,0L60.8,3.2A39.17,39.17,0,0,0,49.94,13.4q-4.72,6.41-4.73,13a4.61,4.61,0,0,0,1,3,4,4,0,0,0,3,1A10.89,10.89,0,0,1,57.45,34,11.17,11.17,0,0,1,61,42.4a11.17,11.17,0,0,1-3.55,8.4A11.57,11.57,0,0,1,49.16,54Z"/></svg>
                </div>
                <div class="clients-con">
                    <p>Fringilla est ullamcorper eget nulla facilisi etiam. Varius vel pharetra vel turpis nunc eget
                        lorem dolor sed. Metus dictum at tempor commodo ullamcorper a. Tristique senectus et netus
                        et malesuada. Suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
                </div>
                <div class="client-name">
                    <h4>Mike Hussy</h4>
                    <p>Customer</p>
                </div>
            </div>
        </div>
    </div>
</section>
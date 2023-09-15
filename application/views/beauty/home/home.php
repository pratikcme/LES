<!--============== Carousel ==================-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <?php foreach ($banner as $key => $value) { ?>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?= ($key == '0') ? 'active' : '' ?>active"></button>
        <?php } ?>
        <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
    </div>

    <!-- The slideshow/carousel -->

    <div class="carousel-inner">
        <?php foreach ($banner as $key => $value) {
            $shopPage = "";
            if ($value->type == '1') {
                $shopPage = base_url() . 'products';
            } elseif ($value->type == '2') {
                $shopPage = base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->category_id);
            } else {
                $shopPage = base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id);
            } ?>
            <a href="<?= $shopPage ?>">

                <section class="hero-section banner-section carousel-item <?= ($key == 0) ? "active" : "" ?> " style="background-image: url(https://rukminim2.flixcart.com/fk-p-flap/850/400/image/31c1f7c0e257255b.jpg?q=20);">

                </section>
            </a>
        <?php } ?>

    </div>
</div>

<!-- -----Categories-section----- -->
<section class="Categories-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                </svg>
                <h2><?= $this->lang->line('SHOP BY CATEGORIES') ?></h2>
                <!-- <p>Top Categories Of The Week</p> -->
            </div>
        </div>

        <!-- --------owl-slider--------->

        <div class="owl-1 owl-carousel owl-theme">
            <?php foreach ($category as $key => $value) { ?>
                <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>" class="categorie-wapper">
                    <div class="categorie-img">
                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'category/' . $value->image ?>" alt="">
                    </div>
                    <div class="categorie-text">
                        <h4><?= $value->name ?></h4>
                    </div>
                </a>
            <?php } ?>

        </div>

    </div>
</section>


<!-- -----Featured Products-section------------ -->
<section class="Featured-Products p-100 <?= (empty($top_sell) ? 'd-none' : '') ?>">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                </svg>
                <h2><?= $this->lang->line('TOP FEATURED PRODUCTS') ?></h2>
                <!-- <p>Do not miss the current offers until the end of month.</p> -->
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- -----product-card----- -->
            <?php foreach ($top_sell as $key => $value) {
                // $class = '';
                // if (in_array($value->id, $wish_pid)) {
                //   $class = 'fas .fa-heart';
                // }
                $value->name = character_limiter($value->name, 30);
            ?>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                    <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                        <div href="#" class="product-wrapper card <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">

                            <div class="card-header">
                                <span class="discnt <?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><?= $value->discount_per ?>
                                    %
                                    off</span>
                                <h5 class="<?= ($value->varientQuantity > $value->limited_stock) ? 'invisible' : 'visible' ?>"><?= ($value->varientQuantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                </h5>

                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                                </a>
                            </div>

                            <div class="card-body">
                                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a>
                                </h3>
                                <h6 class="rating-cnt notranslate">
                                    <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                    <span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
                                </h6>
                                <div class="rating-starts">
                                    <div class="rating stars3_5">
                                        <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                                            <span class="star"></span>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                                            <span class="star star-active"></span>
                                        <?php } ?>

                                    </div>
                                    <div><span>(<?= $value->reviewCount ?>)</span></div>
                                </div>
                                <?php
                                $d_none = '';
                                $d_show = 'd-none';
                                if (!empty($item_weight_id)) {
                                    if (in_array($value->pw_id, $item_weight_id)) {
                                        $d_show = '';
                                        $d_none = 'd-none';
                                    }
                                }
                                ?>
                                <div class="card-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                    <a href="javascript:" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                        <?= $this->lang->line('add to cart') ?></a>
                                </div>
                                <div class="product-detail-quentity add-cart-btn <?= $d_show ?>">
                                    <div class="qty-container">
                                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" readonly>
                                        <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<!-- --our-offers--- -->
<section class="our-offer-section p-100 pb-0 <?= (empty($offer_list)) ? 'd-none' : '' ?>">
    <div class="container">
        <div class="row">
            <?php if (count($offer_list) == '1') { ?>
                <!--=========== Single-Banner ========-->
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="sale-banner-wrap position-relative">
                        <img src="<?= $offer_list[0]->image ?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                        <div class="sale-banner-inner text-center">
                            <h3> <span><?= $offer_list[0]->offer_percent ?>% OFF</span></h3>
                            <h2><?= $offer_list[0]->offer_title ?></h2>
                            <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>" class="lg-btn"><?= $this->lang->line('shop now') ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--=========== Two-Banners ==========-->
            <?php if (count($offer_list) == '2' || count($offer_list) >= '4') { ?>
                <?php foreach ($offer_list as $key => $value) { ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">
                            <div class="offer-wrapper offer-wrapper-1" style="background:url(<?= $value->image ?>)">

                                <h4><?= $value->offer_title ?></h4>
                                <h3><?= $value->offer_percent ?>% <span>OFF</span></h3>
                                <p><?= $value->category_name ?></p>
                                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="explor-btn"><?= $this->lang->line('Explore More') ?></a>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            <?php } ?>
            <!--=============== three-banners ==================-->
            <?php if (count($offer_list) == 3) { ?>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div>
                        <div class="home-clothes mb-4 ">
                            <div class="cloth-card">
                                <img src="<?= $offer_list[0]->image ?>" alt="">
                            </div>
                            <div class="cloth-content">
                                <h5><?= $offer_list[0]->offer_title ?></h5>
                                <h3><?= $offer_list[0]->offer_percent ?>%<span>OFF</span></h3>
                                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                            </div>
                        </div>
                        <div class="home-clothes women-cloth">
                            <div class="cloth-card">
                                <img src="<?= $offer_list[1]->image ?>" alt="">
                            </div>
                            <div class="cloth-content">
                                <h5><?= $offer_list[1]->offer_title ?></h5>
                                <h3><?= $offer_list[1]->offer_percent ?>%<span>OFF</span></h3>
                                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[1]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!-- new upper -->
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="practical-cloth home-clothes">
                        <div class="cloth-card">
                            <img src="<?= $offer_list[2]->image ?>" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5><?= $offer_list[2]->offer_title ?></h5>
                            <h3><?= $offer_list[2]->offer_percent ?>%<span>OFF</span></h3>
                            <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[2]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                        </div>
                    </div>
                </div>
            <?php

            } ?>
        </div>
    </div>
</section>

<!-- -----Latest Products----- -->
<section class="Latest-Products Categories-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                </svg>
                <h2><?= $this->lang->line('Latest') ?> <?= $this->lang->line('Products') ?></h2>
                <!-- <p>Do not miss the current offers until the end of month.</p> -->
            </div>
        </div>

        <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
            <?php foreach ($new_arrival as $key => $value) { ?>
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">

                        <div class="card-header">
                            <span class="discnt <?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><?= $value->discount_per ?>
                                %
                                off</span>
                            <h5 class="<?= ($value->varientQuantity > $value->limited_stock) ? 'invisible' : 'visible' ?>"><?= ($value->varientQuantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                            </h5>
                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a>
                            </h3>
                            <h6 class="rating-cnt notranslate">
                                <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                <span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
                            </h6>
                            <div class="rating-starts">
                                <div class="rating stars3_5">
                                    <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                                        <span class="star"></span>
                                    <?php } ?>
                                    <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                                        <span class="star star-active"></span>
                                    <?php } ?>
                                    <!-- <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star star-active"></span>
                                    <span class="star star-active-half"></span> -->
                                </div>
                                <div><span>(<?= $value->reviewCount ?>)</span></div>
                            </div>
                            <?php
                            $d_none = '';
                            $d_show = 'd-none';
                            if (!empty($item_weight_id)) {
                                if (in_array($value->pw_id, $item_weight_id)) {
                                    $d_show = '';
                                    $d_none = 'd-none';
                                }
                            }
                            ?>
                            <div class="card-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                <a href="javascript:" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    <?= $this->lang->line('add to cart') ?></a>
                            </div>
                            <div class="product-detail-quentity add-cart-btn <?= $d_show ?>">
                                <div class="qty-container">
                                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                    <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" readonly>
                                    <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
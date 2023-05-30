<!-- banner -->
<section class="banner home-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-wrap">
                    <div class="owl-carousel owl-theme banner-slider">
                        <?php foreach ($banner as $key => $value) { ?>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-mg-6">
                                    <div class="banner-content">
                                        <h3 class="sub-heading wow bounceInLeft" data-wow-duration="1s"
                                            data-wow-delay="0" data-wow-offset="0">Furniture</h3>
                                        <h1 class="wow wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0"
                                            data-wow-offset="0"><?= $value->main_title ?></h1>
                                        <p class="wow wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0"
                                            data-wow-offset="0"><?= $value->main_title ?></p>
                                        <?php if ($value->type == '1') { ?>
                                        <a href="<?= base_url() . 'products' ?>" class="cmn-btn wow bounceInLeft"
                                            data-wow-duration="4s" data-wow-delay="0"
                                            data-wow-offset="0"><?= $this->lang->line('Shop Now') ?></a>
                                        <?php } elseif ($value->type == '2') { ?>
                                        <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->category_id) ?>"
                                            class="cmn-btn wow bounceInLeft" data-wow-duration="4s" data-wow-delay="0"
                                            data-wow-offset="0"><?= $this->lang->line('Shop Now') ?></a>
                                        <?php } else { ?>
                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>"
                                            class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-mg-6">
                                    <div class="banner-image">
                                        <img src="<?= $this->theme_base_url ?>/assets/images/home/banner.png"
                                            alt="banner-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop by categories -->
<section class="categories p-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="categories-content">
                    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <?= $this->lang->line('Shop') ?> <br>
                        <?= $this->lang->line('by categories') ?>
                    </h2>
                    <div class="categories-detail wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0"
                        data-wow-offset="0">
                        <div class="categories-detail-img-wrap">
                            <img src="<?= $this->theme_base_url ?>/assets/images/home/armchair.svg" alt="armchair" />
                        </div>
                        <div>
                            <p>
                                200 + <br>
                                Unique products
                            </p>
                        </div>
                    </div>
                    <h5 class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">ALL
                        CATEGORIES <svg width="16" height="14" class="rightArrowdark" viewBox="0 0 16 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 7H14.875" stroke="#351C05" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M9.25 1.375L14.875 7L9.25 12.625" stroke="#351C05" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </h5>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="categories-slider-main">
                    <div class="owl-carousel owl-theme categories-slider">
                        <?php foreach ($category as $key => $value) { ?>
                        <div class="item">
                            <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>"
                                class="categories-wrap">
                                <div class="categories-image-wrap">
                                    <!-- <img src="<?= $this->theme_base_url ?>/assets/images/home/image.png" alt="" /> -->
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'category/' . $value->image ?>"
                                        alt="" />
                                </div>
                                <div class="categories-text">
                                    <h4><?= $value->name ?></h4>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sale-banner -->
<section class="sale-banner <?= (empty($offer_list)) ? 'd-none' : '' ?>">
    <div class="container">
        <div class="row">
            <!--======== single-banner ==========-->
            <?php if (count($offer_list) == '1') { ?>
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?= $offer_list[0]->image ?>" class="sale-banner-img position-absolute"
                        alt="sale-banner" />
                    <div class="sale-banner-inner text-center">
                        <!-- <span>FROM LOVESEATS TO SECTIONALS.</span> -->
                        <span><?= $offer_list[0]->offer_percent ?>% OFF</span>
                        <h2><?= $offer_list[0]->offer_title ?></h2>
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>"
                            class="cmn-btn"><?= $this->lang->line('shop now') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!--========= Two-banner ===========-->
            <?php if (count($offer_list) == '2' || count($offer_list) >= '4') { ?>
            <?php foreach ($offer_list as $key => $value) { ?>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?= $value->image ?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                    <div class="sale-banner-inner text-center">
                        <!-- <span>FROM LOVESEATS TO SECTIONALS.</span> -->
                        <span><?= $offer_list[0]->offer_percent ?>% OFF</span>
                        <h2><?= $offer_list[0]->offer_title ?></h2>
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>"
                            class="cmn-btn"><?= $this->lang->line('shop now') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>

            <!--=============== three-banners ==================-->
            <?php if (count($offer_list) == 3) { ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <div>
                    <div class="home-clothes mb-4">
                        <div class="cloth-card">
                            <img src="<?= $offer_list[0]->image ?>" alt="">
                        </div>
                        <div class="cloth-content">
                            <!-- <h5>CLOTHES THAT YOU LIKE</h5> -->
                            <h5><?= $offer_list[0]->offer_percent ?>%<span>OFF</span></h5>
                            <h3><?= $offer_list[0]->offer_title ?></h3>
                            <a
                                href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                        </div>
                    </div>
                    <div class="women-cloth home-clothes">
                        <div class="cloth-card">
                            <img src="<?= $offer_list[1]->image ?>" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5><?= $offer_list[1]->offer_percent ?>%<span>OFF</span></h5>
                            <h3><?= $offer_list[1]->offer_title ?></h3>
                            <a
                                href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[1]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <div class="practical-cloth home-clothes">
                    <div class="cloth-card">
                        <img src="<?= $offer_list[2]->image ?>" alt="">
                    </div>
                    <div class="cloth-content">
                        <h5><?= $offer_list[2]->offer_percent ?>%<span>OFF</span></h5>
                        <h3><?= $offer_list[2]->offer_title ?></h3>
                        <a
                            href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[2]->id) ?>"><?= $this->lang->line('Explore More') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- hot products -->
<section class="hot-products">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="title">
                    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <?= $this->lang->line('Hot Products') ?></h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab"
                                href="#latest-products"><?= $this->lang->line('Latest Products') ?></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#top-rating">Top Rating</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                                href="#best-seller"><?= $this->lang->line('Best Sellers') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="text-end product-btn-wrap">
                    <a href="<?= base_url() ?>products" class="border-btn wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('All Produts') ?>
                        <svg width="16" height="14" class="rightArrowdark" viewBox="0 0 16 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 7H14.875" stroke="#351C05" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M9.25 1.375L14.875 7L9.25 12.625" stroke="#351C05" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="latest-products" class="tab-pane active">
                        <div class="row">
                            <?php foreach ($new_arrival as $key => $value) {
                                $d_none = '';
                                $d_show = 'd-none';
                                if (!empty($item_weight_id)) {
                                    if (in_array($value->pw_id, $item_weight_id)) {
                                        $d_show = '';
                                        $d_none = 'd-none';
                                    }
                                }
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4 wow fadeInDown" data-wow-duration="1s"
                                data-wow-delay="0" data-wow-offset="0">
                                <div class="hot-products-wrap  <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
                                    <div class="hot-products-img position-relative overflow-hidden">
                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                            alt="" />
                                        <p><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                        </p>
                                        <div class="hot-products-cart-wrap">
                                            <a href="javascript:" class="addcartbutton <?= $d_none ?>"
                                                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a
                                                href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><svg
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <div class="techno-check">
                                                <input class="techno_checkbox wishlist-icon"
                                                    data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                    data-product_weight_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"
                                                    type="checkbox" id="1" value="1"
                                                    <?= (in_array($value->pw_id, $wish_pid)) ? "checked" : "" ?>>
                                                <div class="stocks heart">
                                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z"
                                                            stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="hot-products-details ">
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                            <h5><?= $value->name ?></h5>
                                        </a>
                                        <div class="price-wrap notranslate d-flex">
                                            <p><span
                                                    class="<?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><strike><?= $this->siteCurrency . ' ' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
                                            </p>
                                            <h6><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                            </h6>
                                        </div>
                                        <div class="rating-starts rating-furni">
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
                                            <div>
                                                <p>( <?= $value->ratting['rating'] . ' ' . $this->lang->line('Reviews') ?>
                                                    )</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                                            <div class="qty-container ">
                                                <button class="qty-btn-minus dec cart-qty-minus"
                                                    data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                        class="fa-solid fa-minus"></i></button>
                                                <input type="text" name="qty"
                                                    value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>"
                                                    class="input-qty qty" data-product_id="<?= $value->id ?>"
                                                    data-weight_id="<?= $value->weight_id ?>" readonly>
                                                <button class="qty-btn-plus inc cart-qty-plus"
                                                    data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                        class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="best-seller" class="tab-pane fade">
                        <div class="row">
                            <?php foreach ($top_sell as $key => $value) {
                                $d_none = '';
                                $d_show = 'd-none';
                                if (!empty($item_weight_id)) {
                                    if (in_array($value->pw_id, $item_weight_id)) {
                                        $d_show = '';
                                        $d_none = 'd-none';
                                    }
                                }
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="hot-products-wrap">
                                    <div class="hot-products-img position-relative overflow-hidden">

                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                            alt="" />
                                        <p><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                        </p>
                                        <div class="hot-products-cart-wrap">
                                            <a href="javascript:" class="addcartbutton <?= $d_none ?>"
                                                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a
                                                href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><svg
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>

                                            <div class="techno-check">
                                                <input class="techno_checkbox" type="checkbox" id="1" value="1"
                                                    <?= (in_array($value->pw_id, $wish_pid)) ? "checked" : "" ?>>
                                                <div class="stocks heart">
                                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z"
                                                            stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-products-details">
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                            <h5><?= $value->name ?></h5>
                                        </a>
                                        <div class="price-wrap notranslate d-flex">
                                            <p><span
                                                    class="<?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><strike><?= $this->siteCurrency . '' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
                                            </p>
                                            <h6><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                            </h6>
                                        </div>
                                        <div class="rating-starts rating-furni">
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
                                            <div>
                                                <p>( <?= $value->ratting['rating'] . ' ' . $this->lang->line('Reviews') ?>
                                                    )</p>
                                            </div>
                                        </div>

                                        <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                                            <div class="qty-container">
                                                <button class="qty-btn-minus dec cart-qty-minus"
                                                    data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                        class="fa-solid fa-minus"></i></button>
                                                <input type="text" name="qty" class="input-qty qty"
                                                    value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>"
                                                    data-product_id="<?= $value->id ?>"
                                                    data-weight_id="<?= $value->weight_id ?>" readonly>
                                                <button class="qty-btn-plus inc cart-qty-plus"
                                                    data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                        class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top rating -->
<section class="categories top-rating p-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="main-title title text-center center-title">
                    <h2><?= $this->lang->line('Top Rating') ?></h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="banner-wrap">
                    <div class="owl-carousel owl-theme top-rating-slider">
                        <?php foreach ($top_ratted_product as $key => $value) { ?>

                        <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="hot-products-wrap  <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
                                <div class="hot-products-img position-relative overflow-hidden">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                        alt="" />
                                    <p><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                    </p>
                                    <div class="hot-products-cart-wrap">
                                        <a href="javascript:" class="addcartbutton <?= $d_none ?>"
                                            data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                            data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z"
                                                    stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75"
                                                    stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><svg
                                                width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z"
                                                    stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>

                                        <div class="techno-check">
                                            <input class="techno_checkbox wishlist-icon"
                                                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                data-product_weight_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"
                                                type="checkbox" id="1" value="1"
                                                <?= (in_array($value->pw_id, $wish_pid)) ? "checked" : "" ?>>
                                            <div class="stocks heart">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z"
                                                        stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hot-products-details ">
                                    <a
                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                        <h5><?= $value->name ?></h5>
                                    </a>
                                    <div class="price-wrap notranslate d-flex">
                                        <p><span
                                                class="<?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><strike><?= $this->siteCurrency . ' ' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
                                        </p>
                                        <h6><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                        </h6>
                                    </div>
                                    <div class="rating-starts rating-furni">
                                        <div class="rating stars3_5">
                                            <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                                            <span class="star"></span>
                                            <?php } ?>
                                            <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                                            <span class="star star-active"></span>
                                            <?php } ?>
                                        </div>
                                        <div>
                                            <p>( <?= $value->ratting['rating'] . ' ' . $this->lang->line('Reviews') ?> )
                                            </p>
                                        </div>
                                    </div>

                                    <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                                        <div class="qty-container ">
                                            <button class="qty-btn-minus dec cart-qty-minus"
                                                data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                    class="fa-solid fa-minus"></i></button>
                                            <input type="text" name="qty"
                                                value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>"
                                                class="input-qty qty" data-product_id="<?= $value->id ?>"
                                                data-weight_id="<?= $value->weight_id ?>" readonly>
                                            <button class="qty-btn-plus inc cart-qty-plus"
                                                data-product_weight_id="<?= $value->pw_id ?>" type="button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
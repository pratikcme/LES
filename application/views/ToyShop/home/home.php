<!-- <section class="banner home-banner">
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


<section class="sale-banner <?= (empty($offer_list)) ? 'd-none' : '' ?>">
    <div class="container">
        <div class="row">

            <?php if (count($offer_list) == '1') { ?>
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?= $offer_list[0]->image ?>" class="sale-banner-img position-absolute"
                        alt="sale-banner" />
                    <div class="sale-banner-inner text-center">

                        <span><?= $offer_list[0]->offer_percent ?>% OFF</span>
                        <h2><?= $offer_list[0]->offer_title ?></h2>
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>"
                            class="cmn-btn"><?= $this->lang->line('shop now') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if (count($offer_list) == '2' || count($offer_list) >= '4') { ?>
            <?php foreach ($offer_list as $key => $value) { ?>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?= $value->image ?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                    <div class="sale-banner-inner text-center">

                        <span><?= $offer_list[$key]->offer_percent ?>% OFF</span>
                        <h2><?= $offer_list[$key]->offer_title ?></h2>
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>"
                            class="cmn-btn"><?= $this->lang->line('shop now') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>


            <?php if (count($offer_list) == 3) { ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <div>
                    <div class="home-clothes mb-4">
                        <div class="cloth-card">
                            <img src="<?= $offer_list[0]->image ?>" alt="">
                        </div>
                        <div class="cloth-content">

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

                    <ul class="nav nav-tabs justify-content-center border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab"
                                href="#latest-products"><?= $this->lang->line('Latest Products') ?></a>
                        </li>

                        <a class="nav-link" data-bs-toggle="tab" href="#top-rating">Top Rating</a>
                        </li> 
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
                                        <?php if ($value->discount_per > '0') { ?>
                                        <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
                                        <?php } ?>
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

                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star star-active"></span>
                                                <span class="star star-active-half"></span> 
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
                                        <?php if ($value->discount_per > '0') { ?>
                                        <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
                                        <?php } ?>
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
                        <?php foreach ($top_ratted_product as $key => $value) {
                            $d_none = '';
                            $d_show = 'd-none';
                            if (!empty($item_weight_id)) {
                                if (in_array($value->pw_id, $item_weight_id)) {
                                    $d_show = '';
                                    $d_none = 'd-none';
                                }
                            }
                        ?>
                        <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="hot-products-wrap  <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
                                <div class="hot-products-img position-relative overflow-hidden">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                        alt="" />
                                    <p><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                    </p>
                                    <?php if ($value->discount_per > '0') { ?>
                                    <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
                                    <?php } ?>
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
</section> -->



<!--============== Carousel ==================-->
<div id="demo" class="carousel slide banner" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <!-- <div class="owl-nav disabled">
        <button type="button" role="presentation" data-bs-target="#demo" data-bs-slide-to="0" class="owl-prev" class="active">
            <svg width="62" height="51" viewBox="0 0 62 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M24.5743 26.9505H62M2 26.9505L42.396 2V48.9307L2 26.9505Z" stroke="#BC764B" stroke-width="2"/>
            </svg>
        </button>
        <button type="button" role="presentation" data-bs-target="#demo" data-bs-slide-to="1" class="owl-next">
            <svg width="62" height="51" viewBox="0 0 62 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M37.4257 26.9505H0M60 26.9505L19.604 2V48.9307L60 26.9505Z" stroke="#FFE3CE" stroke-width="2"/>
            </svg>
        </button>
    </div> -->


    <!-- The slideshow/carousel -->
    <div class="carousel-inner">

        <section class="home-banner carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="banner-content">
                            <h3>best toys quality</h3>
                            <h1>This is one of <br> the best toy store</h1>
                            <p>Pulvinar neque laoreet suspendisse interdum consectetur libero id. Fringilla est
                                ullamcorper eget nulla facilisi etiam dign</p>
                            <a href="./product-list.php" class="cmn-btn">Explore Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    </div>
                </div>
            </div>
        </section>

        <section class="home-banner carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="banner-content">
                            <h3>best toys quality</h3>
                            <h1>This is one of <br> the best toy store</h1>
                            <p>Pulvinar neque laoreet suspendisse interdum consectetur libero id. Fringilla est
                                ullamcorper eget nulla facilisi etiam dign</p>
                            <a href="./product-list.php" class="cmn-btn">Explore Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- ========shop-by-age====== -->
<section class="shop-by-age p-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <span>
                        <svg width="130" height="37" viewBox="0 0 130 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.3953 29.45C43.3829 28.4113 42.4339 27.3203 41.6561 26.0859C40.9247 24.9254 40.8025 23.7163 41.3011 22.4341C42.2716 19.9383 43.5132 17.5876 44.9813 15.3578C45.1258 15.1387 45.1722 14.9485 45.0964 14.6933C44.2615 11.9017 44.4381 9.1264 45.2168 6.35287C45.5941 5.01028 46.2256 3.85975 47.3664 3.03473C48.567 2.16642 49.9148 1.95273 51.3508 2.11232C53.7422 2.37741 56.0666 2.88415 58.2055 4.05271C58.4044 4.16181 58.5819 4.1014 58.7603 4.04279C61.2177 3.2358 63.7393 2.92292 66.3144 3.06538C66.9949 3.10325 67.6764 3.1817 68.3507 3.28719C68.6254 3.33047 68.8208 3.2881 69.0438 3.1258C71.213 1.54698 73.6481 0.579486 76.2579 0.0916833C78.5182 -0.331199 80.6366 0.733671 81.7212 2.77234C83.0707 5.30873 83.8146 8.01193 83.5354 10.9045C83.4516 11.7773 83.6862 12.3363 84.2401 12.9549C85.8688 14.7717 87.2844 16.7554 88.4814 18.8933C89.0924 19.9843 89.1566 21.1105 88.7106 22.2718C87.8365 24.5494 86.5521 26.5728 84.9831 28.4194C84.9349 28.4753 84.893 28.5375 84.8484 28.5961C84.7396 28.6881 84.621 28.6601 84.5148 28.6042C83.8048 28.2291 83.1207 27.8153 82.5382 27.2499C82.4481 27.1625 82.3911 27.0633 82.4125 26.9316C82.6025 26.479 82.9726 26.1607 83.2616 25.782C84.2615 24.4674 85.1356 23.0815 85.7903 21.5523C86.0294 20.9951 85.9964 20.5325 85.6886 20.0285C84.7815 18.5434 83.7986 17.1143 82.6934 15.7726C81.9709 14.8962 81.2413 14.0252 80.4386 13.2209C80.2397 13.0207 80.1781 12.8097 80.253 12.5293C81.0076 9.71338 80.4849 7.05526 79.2487 4.49453C78.7456 3.4513 77.8117 2.78136 76.4203 3.1267C74.4999 3.60278 72.6714 4.28444 71.0221 5.40792C70.6769 5.64325 70.3326 5.884 70.0543 6.20048C69.7618 6.5332 69.4202 6.59 69.0054 6.49082C67.7576 6.19057 66.491 6.08146 65.2065 6.07154C62.9329 6.05441 60.745 6.47369 58.631 7.29962C58.2287 7.45651 57.9219 7.43396 57.5571 7.18601C55.9302 6.08417 54.0883 5.56661 52.1759 5.27718C51.6193 5.19332 51.0645 5.07791 50.4954 5.08512C49.4483 5.09865 48.6072 5.64415 48.2718 6.64771C47.3638 9.35993 47.1666 12.083 48.3083 14.7862C48.5064 15.255 48.4707 15.6085 48.1683 16.0269C46.5663 18.2432 45.2748 20.6389 44.2134 23.1654C43.9583 23.7722 43.9948 24.2744 44.3819 24.8001C44.9956 25.6341 45.6458 26.4303 46.3897 27.1489C46.5583 27.3112 46.7608 27.46 46.7831 27.7287C46.7447 28.0245 46.5209 28.1913 46.3193 28.3545C45.8358 28.7449 45.3096 29.074 44.7824 29.3995C44.6727 29.4671 44.5416 29.597 44.3926 29.45H44.3953Z"
                                fill="#ED7524" />
                            <path
                                d="M44.3953 29.45C45.2971 29.0325 46.1141 28.4951 46.7751 27.735C46.8108 27.5069 46.9856 27.378 47.131 27.231C49.0853 25.2473 50.1717 22.8507 50.4357 20.0736C50.5811 18.5479 50.7051 17.0223 51.3018 15.586C52.3284 13.1145 54.1329 11.6024 56.7294 11.0497C59.275 10.5078 61.2712 11.4284 62.875 13.394C63.3879 14.0225 63.7866 14.7276 64.1585 15.448C64.2254 15.5778 64.2754 15.7564 64.4457 15.7618C64.6535 15.769 64.6803 15.5607 64.7436 15.4173C65.1584 14.4796 65.6632 13.5969 66.3349 12.8214C67.6719 11.2778 69.3319 10.5168 71.3861 10.6944C73.137 10.8459 74.6863 11.4816 75.9502 12.7123C77.1615 13.8917 77.8376 15.3858 78.2176 17.0295C78.4682 18.1151 78.4986 19.2332 78.7224 20.3215C79.205 22.665 80.2825 24.6838 81.9397 26.3906C82.1146 26.571 82.334 26.7152 82.4277 26.9668C83.1207 27.6818 83.9172 28.2409 84.8484 28.5943C84.9715 28.6719 85.1009 28.7422 85.2177 28.8297C85.5602 29.0857 85.669 29.5348 85.4844 29.899C85.2917 30.2813 84.8475 30.4608 84.4363 30.2985C84.1509 30.1858 83.8789 30.0379 83.6006 29.9053C82.9682 29.7007 82.4883 29.2453 81.9567 28.8774C81.6775 28.6845 81.4287 28.4455 81.1495 28.249C78.4932 25.8677 77.0357 22.8687 76.6415 19.3198C76.522 18.2441 76.3614 17.1765 75.9529 16.163C75.0529 13.9287 73.3653 12.7583 71.0329 12.5906C69.595 12.4869 68.4631 13.1965 67.5854 14.3272C66.6391 15.5463 66.1092 16.9574 65.7444 18.4415C65.6374 18.8789 65.5437 19.3189 65.4679 19.7634C65.3707 20.3323 65.021 20.6614 64.5278 20.6723C64.0354 20.6831 63.6902 20.3928 63.5609 19.7922C63.3219 18.6877 63.0159 17.6057 62.5548 16.576C62.0678 15.4877 61.4621 14.4769 60.5149 13.7195C59.5622 12.9576 58.491 12.6889 57.294 12.9107C54.8491 13.3652 53.4015 14.8727 52.7575 17.2522C52.4292 18.4641 52.4497 19.721 52.2624 20.95C51.7906 24.0508 50.4669 26.7125 48.2111 28.8847C47.5511 29.4401 46.9089 30.0208 46.1659 30.468C46.041 30.5428 45.942 30.6718 45.7752 30.6582C45.6057 30.7439 45.4354 30.825 45.2686 30.9143C44.6808 31.229 44.2348 31.1614 43.9556 30.7105C43.6898 30.2813 43.8548 29.8071 44.3944 29.4482L44.3953 29.45Z"
                                fill="#ED7524" />
                            <path
                                d="M81.2092 28.1984C82.0066 28.7682 82.804 29.3381 83.6014 29.9079C79.8793 33.4993 75.4195 35.5938 70.3897 36.4901C67.0208 37.0906 63.6304 37.133 60.2312 36.7218C56.0497 36.216 52.1268 34.9483 48.5322 32.7085C47.56 32.1026 46.6074 31.4624 45.7752 30.6617C46.5565 30.0657 47.3379 29.4706 48.1192 28.8746C48.3155 28.8647 48.452 28.9891 48.5938 29.0946C52.0483 31.6653 55.9516 33.08 60.1696 33.667C61.9348 33.9122 63.7152 34.0267 65.4964 33.9555C68.8725 33.8203 72.1683 33.263 75.2875 31.8799C77.2293 31.0188 79.0409 29.9413 80.6375 28.5176C80.8025 28.3706 80.9604 28.2011 81.2074 28.1993L81.2092 28.1984Z"
                                fill="#ED7524" />
                            <path
                                d="M82.4285 26.9686C80.7258 25.516 79.6046 23.6802 78.9115 21.555C78.5369 20.4054 78.4646 19.2053 78.2827 18.0223C77.9223 15.6843 77.1062 13.5536 75.0939 12.1668C73.0014 10.7251 70.7162 10.2319 68.3213 11.3851C66.6569 12.1858 65.6909 13.6663 64.9184 15.2938C64.8034 15.5364 64.8096 15.9286 64.4662 15.9475C64.0791 15.9692 64.0782 15.5445 63.9507 15.3001C63.3727 14.1866 62.6894 13.156 61.7163 12.3562C59.7584 10.7467 57.5972 10.68 55.3477 11.5925C52.8056 12.624 51.5042 14.669 50.9022 17.2694C50.6239 18.474 50.672 19.7174 50.4544 20.9274C49.9718 23.6054 48.8043 25.9092 46.7751 27.7341C45.8278 26.7784 44.91 25.8001 44.1652 24.6658C43.886 24.2411 43.8209 23.8579 44.0198 23.3647C45.1053 20.6678 46.4977 18.1458 48.1852 15.7915C48.385 15.5129 48.4136 15.3065 48.2691 14.9882C47.3111 12.8747 47.2166 10.6692 47.6697 8.42402C47.791 7.82351 47.9667 7.23202 48.1469 6.64593C48.4519 5.6568 49.3493 4.93006 50.3429 4.98146C52.9992 5.11941 55.5546 5.65139 57.8006 7.20767C57.9968 7.34382 58.16 7.36366 58.3723 7.2762C61.2525 6.0869 64.2459 5.72353 67.3267 6.06797C67.9743 6.1401 68.6129 6.29248 69.2534 6.41781C69.4541 6.45749 69.6101 6.44937 69.776 6.28978C71.4815 4.64694 73.5847 3.77953 75.8119 3.16279C76.3828 3.005 76.9519 2.82827 77.5629 2.9509C78.2622 3.09066 78.8232 3.45313 79.1506 4.07798C80.567 6.77848 81.2012 9.6025 80.336 12.6276C80.2539 12.9143 80.4047 13.0397 80.5607 13.1993C82.5703 15.2614 84.3213 17.5255 85.8099 20.0014C86.1319 20.5361 86.1525 20.9996 85.9116 21.5595C85.1035 23.435 84.0126 25.122 82.6854 26.6593C82.598 26.7612 82.5124 26.8649 82.4267 26.9677L82.4285 26.9686Z"
                                fill="#F9F6FC" />
                            <path
                                d="M81.2092 28.1984C78.6636 30.495 75.7379 32.0855 72.4591 33.0269C69.6066 33.8456 66.6925 34.1305 63.7384 34.0656C60.2214 33.988 56.8069 33.3767 53.537 32.0287C51.589 31.2253 49.7774 30.1857 48.1192 28.8747C49.0852 27.8522 49.9638 26.7648 50.6381 25.5169C51.7192 23.5161 52.1991 21.3629 52.3391 19.1033C52.4435 17.4289 52.8511 15.8248 54.0169 14.558C55.3352 13.1252 56.9862 12.4914 58.9182 12.8187C60.1134 13.0216 60.9635 13.8042 61.6539 14.7627C62.7126 16.2324 63.2781 17.914 63.6519 19.6705C63.7821 20.2827 64.0488 20.5694 64.526 20.5667C64.9996 20.5631 65.2565 20.2782 65.3698 19.6515C65.6695 17.9906 66.1262 16.3839 67.0154 14.934C68.7985 12.0261 72.2084 11.605 74.6586 13.9863C75.8012 15.0972 76.3453 16.5092 76.579 18.0493C76.8181 19.6182 76.9581 21.1997 77.5201 22.7055C78.3157 24.8388 79.5564 26.6584 81.2083 28.2002L81.2092 28.1984Z"
                                fill="#F9F6FC" />
                            <path
                                d="M64.6946 23.5305C65.4162 23.5449 65.9897 23.6739 66.4839 24.0463C67.0279 24.4565 67.0913 25.0011 66.6506 25.5205C66.4678 25.736 66.2644 25.9371 66.053 26.1246C65.6606 26.4727 65.6427 27.1525 66.029 27.5772C66.3706 27.9541 67.0003 27.9613 67.3919 27.5907C67.6577 27.3383 67.7906 26.9992 67.9663 26.6873C68.051 26.5367 68.117 26.3338 68.3311 26.3329C68.571 26.332 68.6995 26.5304 68.794 26.7098C68.9367 26.9812 68.9537 27.2815 68.8823 27.5862C68.5024 29.2191 66.5882 29.9233 65.2485 28.9009C64.9907 28.7034 64.8872 28.7178 64.6553 28.936C63.4057 30.11 61.3765 29.5708 60.8591 27.9469C60.7494 27.6025 60.7575 27.267 60.9483 26.9514C61.0893 26.7197 61.2596 26.6818 61.4443 26.9019C61.6557 27.1534 61.8457 27.4248 62.0731 27.6602C62.4566 28.0578 62.9446 28.1624 63.3727 27.9721C63.8445 27.762 63.9088 27.341 63.9355 26.8883C63.9498 26.6422 63.8535 26.497 63.6474 26.3852C63.2915 26.1922 62.9829 25.9317 62.7091 25.6332C62.3398 25.2311 62.3371 24.7433 62.7091 24.3438C63.2781 23.7316 64.0194 23.5657 64.6955 23.5314L64.6946 23.5305Z"
                                fill="#ED7524" />
                            <path
                                d="M60.1937 18.236C60.1955 19.1052 60.0055 19.785 59.4864 20.3378C58.7951 21.0744 57.8158 21.115 57.0523 20.4523C55.9587 19.5019 55.7375 17.5606 56.5911 16.3885C57.2958 15.4201 58.4847 15.3155 59.3321 16.1612C59.9342 16.7627 60.1812 17.5165 60.1937 18.2369V18.236Z"
                                fill="#ED7524" />
                            <path
                                d="M70.4174 18.2044C70.9748 18.3162 71.5082 18.3532 71.9961 18.5786C72.3779 18.7553 72.7427 18.9546 72.9327 19.3604C72.9871 19.4767 73.079 19.6074 72.9844 19.7391C72.8756 19.8905 72.7257 19.8328 72.5795 19.7932C71.8213 19.5912 71.0658 19.382 70.2693 19.3847C69.7751 19.3865 69.2971 19.4623 68.8243 19.5948C68.3757 19.721 68.1402 19.5173 68.2222 19.0565C68.2445 18.9285 68.2927 18.7869 68.373 18.6886C69.1133 17.7879 69.9642 17.0395 71.1211 16.7347C71.221 16.7086 71.3236 16.6878 71.4262 16.6842C71.5823 16.6788 71.7794 16.6139 71.8552 16.8159C71.939 17.0395 71.7589 17.1323 71.5992 17.2207C71.155 17.4651 70.7661 17.7752 70.4174 18.2017V18.2044Z"
                                fill="#ED7524" />
                            <path
                                d="M59.3687 17.686C59.366 18.2405 59.0279 18.6697 58.5971 18.6643C58.1413 18.658 57.7613 18.1521 57.7729 17.5652C57.7827 17.0323 58.1065 16.6175 58.5195 16.6076C58.9753 16.5968 59.3713 17.1008 59.3687 17.686Z"
                                fill="#FEFCFE" />
                            <path d="M1 18H31" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                            <path d="M99 18H129" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <h2>Shop By Age</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-1.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>For Baby</h4>
                    </div>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-2.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>1 to 2 years</h4>
                    </div>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-3.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>2 to 4 years</h4>
                    </div>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-4.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>5 to 7 years</h4>
                    </div>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-5.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>8 to 11 years</h4>
                    </div>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <a href="./product-list.php" class="shop-by-age-wrp">
                    <div class="shop-age-img">
                        <img src="./assets/img/home/shop-age-img-6.png" alt="shop-by-age">
                    </div>
                    <div class="shop-age-content">
                        <h4>12 years & up</h4>
                    </div>
                </a>
            </div>


            <div class="shop-byage-banners">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                        <div class="more-shopby-banner children-toy-sets">
                            <h3>Various Children's Toy Sets</h3>
                            <a href="#" class="cmn-btn">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="more-shopby-banner children-craft-toys">
                            <p>CRAFT TOYS</p>
                            <h3>Dough Cubes, Fun to Play</h3>
                            <a href="#" class="cmn-btn">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm -6">
                        <div class="more-shopby-banner children-new-toys">
                            <h3>NEW IN</h3>
                            <p>See new products now</p>
                            <a href="#" class="cmn-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>

<!-- =====shop-by-category==== -->
<section class="shop-by-category p-100 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <span>
                        <svg width="130" height="37" viewBox="0 0 130 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.3953 29.45C43.3829 28.4113 42.4339 27.3203 41.6561 26.0859C40.9247 24.9254 40.8025 23.7163 41.3011 22.4341C42.2716 19.9383 43.5132 17.5876 44.9813 15.3578C45.1258 15.1387 45.1722 14.9485 45.0964 14.6933C44.2615 11.9017 44.4381 9.1264 45.2168 6.35287C45.5941 5.01028 46.2256 3.85975 47.3664 3.03473C48.567 2.16642 49.9148 1.95273 51.3508 2.11232C53.7422 2.37741 56.0666 2.88415 58.2055 4.05271C58.4044 4.16181 58.5819 4.1014 58.7603 4.04279C61.2177 3.2358 63.7393 2.92292 66.3144 3.06538C66.9949 3.10325 67.6764 3.1817 68.3507 3.28719C68.6254 3.33047 68.8208 3.2881 69.0438 3.1258C71.213 1.54698 73.6481 0.579486 76.2579 0.0916833C78.5182 -0.331199 80.6366 0.733671 81.7212 2.77234C83.0707 5.30873 83.8146 8.01193 83.5354 10.9045C83.4516 11.7773 83.6862 12.3363 84.2401 12.9549C85.8688 14.7717 87.2844 16.7554 88.4814 18.8933C89.0924 19.9843 89.1566 21.1105 88.7106 22.2718C87.8365 24.5494 86.5521 26.5728 84.9831 28.4194C84.9349 28.4753 84.893 28.5375 84.8484 28.5961C84.7396 28.6881 84.621 28.6601 84.5148 28.6042C83.8048 28.2291 83.1207 27.8153 82.5382 27.2499C82.4481 27.1625 82.3911 27.0633 82.4125 26.9316C82.6025 26.479 82.9726 26.1607 83.2616 25.782C84.2615 24.4674 85.1356 23.0815 85.7903 21.5523C86.0294 20.9951 85.9964 20.5325 85.6886 20.0285C84.7815 18.5434 83.7986 17.1143 82.6934 15.7726C81.9709 14.8962 81.2413 14.0252 80.4386 13.2209C80.2397 13.0207 80.1781 12.8097 80.253 12.5293C81.0076 9.71338 80.4849 7.05526 79.2487 4.49453C78.7456 3.4513 77.8117 2.78136 76.4203 3.1267C74.4999 3.60278 72.6714 4.28444 71.0221 5.40792C70.6769 5.64325 70.3326 5.884 70.0543 6.20048C69.7618 6.5332 69.4202 6.59 69.0054 6.49082C67.7576 6.19057 66.491 6.08146 65.2065 6.07154C62.9329 6.05441 60.745 6.47369 58.631 7.29962C58.2287 7.45651 57.9219 7.43396 57.5571 7.18601C55.9302 6.08417 54.0883 5.56661 52.1759 5.27718C51.6193 5.19332 51.0645 5.07791 50.4954 5.08512C49.4483 5.09865 48.6072 5.64415 48.2718 6.64771C47.3638 9.35993 47.1666 12.083 48.3083 14.7862C48.5064 15.255 48.4707 15.6085 48.1683 16.0269C46.5663 18.2432 45.2748 20.6389 44.2134 23.1654C43.9583 23.7722 43.9948 24.2744 44.3819 24.8001C44.9956 25.6341 45.6458 26.4303 46.3897 27.1489C46.5583 27.3112 46.7608 27.46 46.7831 27.7287C46.7447 28.0245 46.5209 28.1913 46.3193 28.3545C45.8358 28.7449 45.3096 29.074 44.7824 29.3995C44.6727 29.4671 44.5416 29.597 44.3926 29.45H44.3953Z"
                                fill="#ED7524" />
                            <path
                                d="M44.3953 29.45C45.2971 29.0325 46.1141 28.4951 46.7751 27.735C46.8108 27.5069 46.9856 27.378 47.131 27.231C49.0853 25.2473 50.1717 22.8507 50.4357 20.0736C50.5811 18.5479 50.7051 17.0223 51.3018 15.586C52.3284 13.1145 54.1329 11.6024 56.7294 11.0497C59.275 10.5078 61.2712 11.4284 62.875 13.394C63.3879 14.0225 63.7866 14.7276 64.1585 15.448C64.2254 15.5778 64.2754 15.7564 64.4457 15.7618C64.6535 15.769 64.6803 15.5607 64.7436 15.4173C65.1584 14.4796 65.6632 13.5969 66.3349 12.8214C67.6719 11.2778 69.3319 10.5168 71.3861 10.6944C73.137 10.8459 74.6863 11.4816 75.9502 12.7123C77.1615 13.8917 77.8376 15.3858 78.2176 17.0295C78.4682 18.1151 78.4986 19.2332 78.7224 20.3215C79.205 22.665 80.2825 24.6838 81.9397 26.3906C82.1146 26.571 82.334 26.7152 82.4277 26.9668C83.1207 27.6818 83.9172 28.2409 84.8484 28.5943C84.9715 28.6719 85.1009 28.7422 85.2177 28.8297C85.5602 29.0857 85.669 29.5348 85.4844 29.899C85.2917 30.2813 84.8475 30.4608 84.4363 30.2985C84.1509 30.1858 83.8789 30.0379 83.6006 29.9053C82.9682 29.7007 82.4883 29.2453 81.9567 28.8774C81.6775 28.6845 81.4287 28.4455 81.1495 28.249C78.4932 25.8677 77.0357 22.8687 76.6415 19.3198C76.522 18.2441 76.3614 17.1765 75.9529 16.163C75.0529 13.9287 73.3653 12.7583 71.0329 12.5906C69.595 12.4869 68.4631 13.1965 67.5854 14.3272C66.6391 15.5463 66.1092 16.9574 65.7444 18.4415C65.6374 18.8789 65.5437 19.3189 65.4679 19.7634C65.3707 20.3323 65.021 20.6614 64.5278 20.6723C64.0354 20.6831 63.6902 20.3928 63.5609 19.7922C63.3219 18.6877 63.0159 17.6057 62.5548 16.576C62.0678 15.4877 61.4621 14.4769 60.5149 13.7195C59.5622 12.9576 58.491 12.6889 57.294 12.9107C54.8491 13.3652 53.4015 14.8727 52.7575 17.2522C52.4292 18.4641 52.4497 19.721 52.2624 20.95C51.7906 24.0508 50.4669 26.7125 48.2111 28.8847C47.5511 29.4401 46.9089 30.0208 46.1659 30.468C46.041 30.5428 45.942 30.6718 45.7752 30.6582C45.6057 30.7439 45.4354 30.825 45.2686 30.9143C44.6808 31.229 44.2348 31.1614 43.9556 30.7105C43.6898 30.2813 43.8548 29.8071 44.3944 29.4482L44.3953 29.45Z"
                                fill="#ED7524" />
                            <path
                                d="M81.2092 28.1984C82.0066 28.7682 82.804 29.3381 83.6014 29.9079C79.8793 33.4993 75.4195 35.5938 70.3897 36.4901C67.0208 37.0906 63.6304 37.133 60.2312 36.7218C56.0497 36.216 52.1268 34.9483 48.5322 32.7085C47.56 32.1026 46.6074 31.4624 45.7752 30.6617C46.5565 30.0657 47.3379 29.4706 48.1192 28.8746C48.3155 28.8647 48.452 28.9891 48.5938 29.0946C52.0483 31.6653 55.9516 33.08 60.1696 33.667C61.9348 33.9122 63.7152 34.0267 65.4964 33.9555C68.8725 33.8203 72.1683 33.263 75.2875 31.8799C77.2293 31.0188 79.0409 29.9413 80.6375 28.5176C80.8025 28.3706 80.9604 28.2011 81.2074 28.1993L81.2092 28.1984Z"
                                fill="#ED7524" />
                            <path
                                d="M82.4285 26.9686C80.7258 25.516 79.6046 23.6802 78.9115 21.555C78.5369 20.4054 78.4646 19.2053 78.2827 18.0223C77.9223 15.6843 77.1062 13.5536 75.0939 12.1668C73.0014 10.7251 70.7162 10.2319 68.3213 11.3851C66.6569 12.1858 65.6909 13.6663 64.9184 15.2938C64.8034 15.5364 64.8096 15.9286 64.4662 15.9475C64.0791 15.9692 64.0782 15.5445 63.9507 15.3001C63.3727 14.1866 62.6894 13.156 61.7163 12.3562C59.7584 10.7467 57.5972 10.68 55.3477 11.5925C52.8056 12.624 51.5042 14.669 50.9022 17.2694C50.6239 18.474 50.672 19.7174 50.4544 20.9274C49.9718 23.6054 48.8043 25.9092 46.7751 27.7341C45.8278 26.7784 44.91 25.8001 44.1652 24.6658C43.886 24.2411 43.8209 23.8579 44.0198 23.3647C45.1053 20.6678 46.4977 18.1458 48.1852 15.7915C48.385 15.5129 48.4136 15.3065 48.2691 14.9882C47.3111 12.8747 47.2166 10.6692 47.6697 8.42402C47.791 7.82351 47.9667 7.23202 48.1469 6.64593C48.4519 5.6568 49.3493 4.93006 50.3429 4.98146C52.9992 5.11941 55.5546 5.65139 57.8006 7.20767C57.9968 7.34382 58.16 7.36366 58.3723 7.2762C61.2525 6.0869 64.2459 5.72353 67.3267 6.06797C67.9743 6.1401 68.6129 6.29248 69.2534 6.41781C69.4541 6.45749 69.6101 6.44937 69.776 6.28978C71.4815 4.64694 73.5847 3.77953 75.8119 3.16279C76.3828 3.005 76.9519 2.82827 77.5629 2.9509C78.2622 3.09066 78.8232 3.45313 79.1506 4.07798C80.567 6.77848 81.2012 9.6025 80.336 12.6276C80.2539 12.9143 80.4047 13.0397 80.5607 13.1993C82.5703 15.2614 84.3213 17.5255 85.8099 20.0014C86.1319 20.5361 86.1525 20.9996 85.9116 21.5595C85.1035 23.435 84.0126 25.122 82.6854 26.6593C82.598 26.7612 82.5124 26.8649 82.4267 26.9677L82.4285 26.9686Z"
                                fill="#F9F6FC" />
                            <path
                                d="M81.2092 28.1984C78.6636 30.495 75.7379 32.0855 72.4591 33.0269C69.6066 33.8456 66.6925 34.1305 63.7384 34.0656C60.2214 33.988 56.8069 33.3767 53.537 32.0287C51.589 31.2253 49.7774 30.1857 48.1192 28.8747C49.0852 27.8522 49.9638 26.7648 50.6381 25.5169C51.7192 23.5161 52.1991 21.3629 52.3391 19.1033C52.4435 17.4289 52.8511 15.8248 54.0169 14.558C55.3352 13.1252 56.9862 12.4914 58.9182 12.8187C60.1134 13.0216 60.9635 13.8042 61.6539 14.7627C62.7126 16.2324 63.2781 17.914 63.6519 19.6705C63.7821 20.2827 64.0488 20.5694 64.526 20.5667C64.9996 20.5631 65.2565 20.2782 65.3698 19.6515C65.6695 17.9906 66.1262 16.3839 67.0154 14.934C68.7985 12.0261 72.2084 11.605 74.6586 13.9863C75.8012 15.0972 76.3453 16.5092 76.579 18.0493C76.8181 19.6182 76.9581 21.1997 77.5201 22.7055C78.3157 24.8388 79.5564 26.6584 81.2083 28.2002L81.2092 28.1984Z"
                                fill="#F9F6FC" />
                            <path
                                d="M64.6946 23.5305C65.4162 23.5449 65.9897 23.6739 66.4839 24.0463C67.0279 24.4565 67.0913 25.0011 66.6506 25.5205C66.4678 25.736 66.2644 25.9371 66.053 26.1246C65.6606 26.4727 65.6427 27.1525 66.029 27.5772C66.3706 27.9541 67.0003 27.9613 67.3919 27.5907C67.6577 27.3383 67.7906 26.9992 67.9663 26.6873C68.051 26.5367 68.117 26.3338 68.3311 26.3329C68.571 26.332 68.6995 26.5304 68.794 26.7098C68.9367 26.9812 68.9537 27.2815 68.8823 27.5862C68.5024 29.2191 66.5882 29.9233 65.2485 28.9009C64.9907 28.7034 64.8872 28.7178 64.6553 28.936C63.4057 30.11 61.3765 29.5708 60.8591 27.9469C60.7494 27.6025 60.7575 27.267 60.9483 26.9514C61.0893 26.7197 61.2596 26.6818 61.4443 26.9019C61.6557 27.1534 61.8457 27.4248 62.0731 27.6602C62.4566 28.0578 62.9446 28.1624 63.3727 27.9721C63.8445 27.762 63.9088 27.341 63.9355 26.8883C63.9498 26.6422 63.8535 26.497 63.6474 26.3852C63.2915 26.1922 62.9829 25.9317 62.7091 25.6332C62.3398 25.2311 62.3371 24.7433 62.7091 24.3438C63.2781 23.7316 64.0194 23.5657 64.6955 23.5314L64.6946 23.5305Z"
                                fill="#ED7524" />
                            <path
                                d="M60.1937 18.236C60.1955 19.1052 60.0055 19.785 59.4864 20.3378C58.7951 21.0744 57.8158 21.115 57.0523 20.4523C55.9587 19.5019 55.7375 17.5606 56.5911 16.3885C57.2958 15.4201 58.4847 15.3155 59.3321 16.1612C59.9342 16.7627 60.1812 17.5165 60.1937 18.2369V18.236Z"
                                fill="#ED7524" />
                            <path
                                d="M70.4174 18.2044C70.9748 18.3162 71.5082 18.3532 71.9961 18.5786C72.3779 18.7553 72.7427 18.9546 72.9327 19.3604C72.9871 19.4767 73.079 19.6074 72.9844 19.7391C72.8756 19.8905 72.7257 19.8328 72.5795 19.7932C71.8213 19.5912 71.0658 19.382 70.2693 19.3847C69.7751 19.3865 69.2971 19.4623 68.8243 19.5948C68.3757 19.721 68.1402 19.5173 68.2222 19.0565C68.2445 18.9285 68.2927 18.7869 68.373 18.6886C69.1133 17.7879 69.9642 17.0395 71.1211 16.7347C71.221 16.7086 71.3236 16.6878 71.4262 16.6842C71.5823 16.6788 71.7794 16.6139 71.8552 16.8159C71.939 17.0395 71.7589 17.1323 71.5992 17.2207C71.155 17.4651 70.7661 17.7752 70.4174 18.2017V18.2044Z"
                                fill="#ED7524" />
                            <path
                                d="M59.3687 17.686C59.366 18.2405 59.0279 18.6697 58.5971 18.6643C58.1413 18.658 57.7613 18.1521 57.7729 17.5652C57.7827 17.0323 58.1065 16.6175 58.5195 16.6076C58.9753 16.5968 59.3713 17.1008 59.3687 17.686Z"
                                fill="#FEFCFE" />
                            <path d="M1 18H31" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                            <path d="M99 18H129" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <h2>Shop By Category</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="owl-carousel owl-theme category-slider">
                    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-1">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-1.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Activity & Learning</h3>
                            </div>
                        </a>
                    </div>
                    <div class="item wow fadeInDown" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-2">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-2.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Action Figure</h3>
                            </div>
                        </a>
                    </div>
                    <div class="item wow fadeInDown" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-3">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-3.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Bicycle & Scooter</h3>
                            </div>
                        </a>
                    </div>
                    <div class="item wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-4">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-4.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Baby & Toddlers</h3>
                            </div>
                        </a>
                    </div>
                    <div class="item wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-5">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-5.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Board & Puzzles</h3>
                            </div>
                        </a>
                    </div>
                    <div class="item wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
                        <a href="./product-list.php" class="category-wrap category-wrap-6">
                            <div class="category-img">
                                <img src="./assets/img/home/category-img-6.png" alt="category-img">
                            </div>
                            <div class="category-content">
                                <h3>Soft Toys</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======top-feature-product=== -->
<section class="top-feature-product products-wrap p-100 pb-0s">
    <div class="bg-shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <span>
                        <svg width="130" height="37" viewBox="0 0 130 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.3953 29.45C43.3829 28.4113 42.4339 27.3203 41.6561 26.0859C40.9247 24.9254 40.8025 23.7163 41.3011 22.4341C42.2716 19.9383 43.5132 17.5876 44.9813 15.3578C45.1258 15.1387 45.1722 14.9485 45.0964 14.6933C44.2615 11.9017 44.4381 9.1264 45.2168 6.35287C45.5941 5.01028 46.2256 3.85975 47.3664 3.03473C48.567 2.16642 49.9148 1.95273 51.3508 2.11232C53.7422 2.37741 56.0666 2.88415 58.2055 4.05271C58.4044 4.16181 58.5819 4.1014 58.7603 4.04279C61.2177 3.2358 63.7393 2.92292 66.3144 3.06538C66.9949 3.10325 67.6764 3.1817 68.3507 3.28719C68.6254 3.33047 68.8208 3.2881 69.0438 3.1258C71.213 1.54698 73.6481 0.579486 76.2579 0.0916833C78.5182 -0.331199 80.6366 0.733671 81.7212 2.77234C83.0707 5.30873 83.8146 8.01193 83.5354 10.9045C83.4516 11.7773 83.6862 12.3363 84.2401 12.9549C85.8688 14.7717 87.2844 16.7554 88.4814 18.8933C89.0924 19.9843 89.1566 21.1105 88.7106 22.2718C87.8365 24.5494 86.5521 26.5728 84.9831 28.4194C84.9349 28.4753 84.893 28.5375 84.8484 28.5961C84.7396 28.6881 84.621 28.6601 84.5148 28.6042C83.8048 28.2291 83.1207 27.8153 82.5382 27.2499C82.4481 27.1625 82.3911 27.0633 82.4125 26.9316C82.6025 26.479 82.9726 26.1607 83.2616 25.782C84.2615 24.4674 85.1356 23.0815 85.7903 21.5523C86.0294 20.9951 85.9964 20.5325 85.6886 20.0285C84.7815 18.5434 83.7986 17.1143 82.6934 15.7726C81.9709 14.8962 81.2413 14.0252 80.4386 13.2209C80.2397 13.0207 80.1781 12.8097 80.253 12.5293C81.0076 9.71338 80.4849 7.05526 79.2487 4.49453C78.7456 3.4513 77.8117 2.78136 76.4203 3.1267C74.4999 3.60278 72.6714 4.28444 71.0221 5.40792C70.6769 5.64325 70.3326 5.884 70.0543 6.20048C69.7618 6.5332 69.4202 6.59 69.0054 6.49082C67.7576 6.19057 66.491 6.08146 65.2065 6.07154C62.9329 6.05441 60.745 6.47369 58.631 7.29962C58.2287 7.45651 57.9219 7.43396 57.5571 7.18601C55.9302 6.08417 54.0883 5.56661 52.1759 5.27718C51.6193 5.19332 51.0645 5.07791 50.4954 5.08512C49.4483 5.09865 48.6072 5.64415 48.2718 6.64771C47.3638 9.35993 47.1666 12.083 48.3083 14.7862C48.5064 15.255 48.4707 15.6085 48.1683 16.0269C46.5663 18.2432 45.2748 20.6389 44.2134 23.1654C43.9583 23.7722 43.9948 24.2744 44.3819 24.8001C44.9956 25.6341 45.6458 26.4303 46.3897 27.1489C46.5583 27.3112 46.7608 27.46 46.7831 27.7287C46.7447 28.0245 46.5209 28.1913 46.3193 28.3545C45.8358 28.7449 45.3096 29.074 44.7824 29.3995C44.6727 29.4671 44.5416 29.597 44.3926 29.45H44.3953Z"
                                fill="#ED7524" />
                            <path
                                d="M44.3953 29.45C45.2971 29.0325 46.1141 28.4951 46.7751 27.735C46.8108 27.5069 46.9856 27.378 47.131 27.231C49.0853 25.2473 50.1717 22.8507 50.4357 20.0736C50.5811 18.5479 50.7051 17.0223 51.3018 15.586C52.3284 13.1145 54.1329 11.6024 56.7294 11.0497C59.275 10.5078 61.2712 11.4284 62.875 13.394C63.3879 14.0225 63.7866 14.7276 64.1585 15.448C64.2254 15.5778 64.2754 15.7564 64.4457 15.7618C64.6535 15.769 64.6803 15.5607 64.7436 15.4173C65.1584 14.4796 65.6632 13.5969 66.3349 12.8214C67.6719 11.2778 69.3319 10.5168 71.3861 10.6944C73.137 10.8459 74.6863 11.4816 75.9502 12.7123C77.1615 13.8917 77.8376 15.3858 78.2176 17.0295C78.4682 18.1151 78.4986 19.2332 78.7224 20.3215C79.205 22.665 80.2825 24.6838 81.9397 26.3906C82.1146 26.571 82.334 26.7152 82.4277 26.9668C83.1207 27.6818 83.9172 28.2409 84.8484 28.5943C84.9715 28.6719 85.1009 28.7422 85.2177 28.8297C85.5602 29.0857 85.669 29.5348 85.4844 29.899C85.2917 30.2813 84.8475 30.4608 84.4363 30.2985C84.1509 30.1858 83.8789 30.0379 83.6006 29.9053C82.9682 29.7007 82.4883 29.2453 81.9567 28.8774C81.6775 28.6845 81.4287 28.4455 81.1495 28.249C78.4932 25.8677 77.0357 22.8687 76.6415 19.3198C76.522 18.2441 76.3614 17.1765 75.9529 16.163C75.0529 13.9287 73.3653 12.7583 71.0329 12.5906C69.595 12.4869 68.4631 13.1965 67.5854 14.3272C66.6391 15.5463 66.1092 16.9574 65.7444 18.4415C65.6374 18.8789 65.5437 19.3189 65.4679 19.7634C65.3707 20.3323 65.021 20.6614 64.5278 20.6723C64.0354 20.6831 63.6902 20.3928 63.5609 19.7922C63.3219 18.6877 63.0159 17.6057 62.5548 16.576C62.0678 15.4877 61.4621 14.4769 60.5149 13.7195C59.5622 12.9576 58.491 12.6889 57.294 12.9107C54.8491 13.3652 53.4015 14.8727 52.7575 17.2522C52.4292 18.4641 52.4497 19.721 52.2624 20.95C51.7906 24.0508 50.4669 26.7125 48.2111 28.8847C47.5511 29.4401 46.9089 30.0208 46.1659 30.468C46.041 30.5428 45.942 30.6718 45.7752 30.6582C45.6057 30.7439 45.4354 30.825 45.2686 30.9143C44.6808 31.229 44.2348 31.1614 43.9556 30.7105C43.6898 30.2813 43.8548 29.8071 44.3944 29.4482L44.3953 29.45Z"
                                fill="#ED7524" />
                            <path
                                d="M81.2092 28.1984C82.0066 28.7682 82.804 29.3381 83.6014 29.9079C79.8793 33.4993 75.4195 35.5938 70.3897 36.4901C67.0208 37.0906 63.6304 37.133 60.2312 36.7218C56.0497 36.216 52.1268 34.9483 48.5322 32.7085C47.56 32.1026 46.6074 31.4624 45.7752 30.6617C46.5565 30.0657 47.3379 29.4706 48.1192 28.8746C48.3155 28.8647 48.452 28.9891 48.5938 29.0946C52.0483 31.6653 55.9516 33.08 60.1696 33.667C61.9348 33.9122 63.7152 34.0267 65.4964 33.9555C68.8725 33.8203 72.1683 33.263 75.2875 31.8799C77.2293 31.0188 79.0409 29.9413 80.6375 28.5176C80.8025 28.3706 80.9604 28.2011 81.2074 28.1993L81.2092 28.1984Z"
                                fill="#ED7524" />
                            <path
                                d="M82.4285 26.9686C80.7258 25.516 79.6046 23.6802 78.9115 21.555C78.5369 20.4054 78.4646 19.2053 78.2827 18.0223C77.9223 15.6843 77.1062 13.5536 75.0939 12.1668C73.0014 10.7251 70.7162 10.2319 68.3213 11.3851C66.6569 12.1858 65.6909 13.6663 64.9184 15.2938C64.8034 15.5364 64.8096 15.9286 64.4662 15.9475C64.0791 15.9692 64.0782 15.5445 63.9507 15.3001C63.3727 14.1866 62.6894 13.156 61.7163 12.3562C59.7584 10.7467 57.5972 10.68 55.3477 11.5925C52.8056 12.624 51.5042 14.669 50.9022 17.2694C50.6239 18.474 50.672 19.7174 50.4544 20.9274C49.9718 23.6054 48.8043 25.9092 46.7751 27.7341C45.8278 26.7784 44.91 25.8001 44.1652 24.6658C43.886 24.2411 43.8209 23.8579 44.0198 23.3647C45.1053 20.6678 46.4977 18.1458 48.1852 15.7915C48.385 15.5129 48.4136 15.3065 48.2691 14.9882C47.3111 12.8747 47.2166 10.6692 47.6697 8.42402C47.791 7.82351 47.9667 7.23202 48.1469 6.64593C48.4519 5.6568 49.3493 4.93006 50.3429 4.98146C52.9992 5.11941 55.5546 5.65139 57.8006 7.20767C57.9968 7.34382 58.16 7.36366 58.3723 7.2762C61.2525 6.0869 64.2459 5.72353 67.3267 6.06797C67.9743 6.1401 68.6129 6.29248 69.2534 6.41781C69.4541 6.45749 69.6101 6.44937 69.776 6.28978C71.4815 4.64694 73.5847 3.77953 75.8119 3.16279C76.3828 3.005 76.9519 2.82827 77.5629 2.9509C78.2622 3.09066 78.8232 3.45313 79.1506 4.07798C80.567 6.77848 81.2012 9.6025 80.336 12.6276C80.2539 12.9143 80.4047 13.0397 80.5607 13.1993C82.5703 15.2614 84.3213 17.5255 85.8099 20.0014C86.1319 20.5361 86.1525 20.9996 85.9116 21.5595C85.1035 23.435 84.0126 25.122 82.6854 26.6593C82.598 26.7612 82.5124 26.8649 82.4267 26.9677L82.4285 26.9686Z"
                                fill="#F9F6FC" />
                            <path
                                d="M81.2092 28.1984C78.6636 30.495 75.7379 32.0855 72.4591 33.0269C69.6066 33.8456 66.6925 34.1305 63.7384 34.0656C60.2214 33.988 56.8069 33.3767 53.537 32.0287C51.589 31.2253 49.7774 30.1857 48.1192 28.8747C49.0852 27.8522 49.9638 26.7648 50.6381 25.5169C51.7192 23.5161 52.1991 21.3629 52.3391 19.1033C52.4435 17.4289 52.8511 15.8248 54.0169 14.558C55.3352 13.1252 56.9862 12.4914 58.9182 12.8187C60.1134 13.0216 60.9635 13.8042 61.6539 14.7627C62.7126 16.2324 63.2781 17.914 63.6519 19.6705C63.7821 20.2827 64.0488 20.5694 64.526 20.5667C64.9996 20.5631 65.2565 20.2782 65.3698 19.6515C65.6695 17.9906 66.1262 16.3839 67.0154 14.934C68.7985 12.0261 72.2084 11.605 74.6586 13.9863C75.8012 15.0972 76.3453 16.5092 76.579 18.0493C76.8181 19.6182 76.9581 21.1997 77.5201 22.7055C78.3157 24.8388 79.5564 26.6584 81.2083 28.2002L81.2092 28.1984Z"
                                fill="#F9F6FC" />
                            <path
                                d="M64.6946 23.5305C65.4162 23.5449 65.9897 23.6739 66.4839 24.0463C67.0279 24.4565 67.0913 25.0011 66.6506 25.5205C66.4678 25.736 66.2644 25.9371 66.053 26.1246C65.6606 26.4727 65.6427 27.1525 66.029 27.5772C66.3706 27.9541 67.0003 27.9613 67.3919 27.5907C67.6577 27.3383 67.7906 26.9992 67.9663 26.6873C68.051 26.5367 68.117 26.3338 68.3311 26.3329C68.571 26.332 68.6995 26.5304 68.794 26.7098C68.9367 26.9812 68.9537 27.2815 68.8823 27.5862C68.5024 29.2191 66.5882 29.9233 65.2485 28.9009C64.9907 28.7034 64.8872 28.7178 64.6553 28.936C63.4057 30.11 61.3765 29.5708 60.8591 27.9469C60.7494 27.6025 60.7575 27.267 60.9483 26.9514C61.0893 26.7197 61.2596 26.6818 61.4443 26.9019C61.6557 27.1534 61.8457 27.4248 62.0731 27.6602C62.4566 28.0578 62.9446 28.1624 63.3727 27.9721C63.8445 27.762 63.9088 27.341 63.9355 26.8883C63.9498 26.6422 63.8535 26.497 63.6474 26.3852C63.2915 26.1922 62.9829 25.9317 62.7091 25.6332C62.3398 25.2311 62.3371 24.7433 62.7091 24.3438C63.2781 23.7316 64.0194 23.5657 64.6955 23.5314L64.6946 23.5305Z"
                                fill="#ED7524" />
                            <path
                                d="M60.1937 18.236C60.1955 19.1052 60.0055 19.785 59.4864 20.3378C58.7951 21.0744 57.8158 21.115 57.0523 20.4523C55.9587 19.5019 55.7375 17.5606 56.5911 16.3885C57.2958 15.4201 58.4847 15.3155 59.3321 16.1612C59.9342 16.7627 60.1812 17.5165 60.1937 18.2369V18.236Z"
                                fill="#ED7524" />
                            <path
                                d="M70.4174 18.2044C70.9748 18.3162 71.5082 18.3532 71.9961 18.5786C72.3779 18.7553 72.7427 18.9546 72.9327 19.3604C72.9871 19.4767 73.079 19.6074 72.9844 19.7391C72.8756 19.8905 72.7257 19.8328 72.5795 19.7932C71.8213 19.5912 71.0658 19.382 70.2693 19.3847C69.7751 19.3865 69.2971 19.4623 68.8243 19.5948C68.3757 19.721 68.1402 19.5173 68.2222 19.0565C68.2445 18.9285 68.2927 18.7869 68.373 18.6886C69.1133 17.7879 69.9642 17.0395 71.1211 16.7347C71.221 16.7086 71.3236 16.6878 71.4262 16.6842C71.5823 16.6788 71.7794 16.6139 71.8552 16.8159C71.939 17.0395 71.7589 17.1323 71.5992 17.2207C71.155 17.4651 70.7661 17.7752 70.4174 18.2017V18.2044Z"
                                fill="#ED7524" />
                            <path
                                d="M59.3687 17.686C59.366 18.2405 59.0279 18.6697 58.5971 18.6643C58.1413 18.658 57.7613 18.1521 57.7729 17.5652C57.7827 17.0323 58.1065 16.6175 58.5195 16.6076C58.9753 16.5968 59.3713 17.1008 59.3687 17.686Z"
                                fill="#FEFCFE" />
                            <path d="M1 18H31" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                            <path d="M99 18H129" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <h2>Top Featured Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="seller-tab" data-bs-toggle="tab" data-bs-target="#sellers"
                            type="button" role="tab" aria-controls="sellers" aria-selected="true">Latest
                            Products</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#Featured"
                            type="button" role="tab" aria-controls="Featured" aria-selected="false">Top Rating</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="arrival-tab" data-bs-toggle="tab" data-bs-target="#New"
                            type="button" role="tab" aria-controls="New" aria-selected="false">Best Seller</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="sellers" role="tabpanel" aria-labelledby="seller-tab">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock btn-test">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-1.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Kids Puzzle Shape Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock btn-test">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-2.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Round New Red Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock btn-test">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-3.png"
                                                alt="feature-products">
                                        </div>
                                    </a>

                                    <span class="instock-label">In Stock</span>
                                    <span class="offer-label">15% off</span>

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Catapult Car Toy For Kids</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock btn-test">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-4.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Best Knitted Sausage Dog</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-5.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Kids Puzzle Round Shape Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-6.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Jigsaw Puzzles Jungle Theme</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-7.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Pop Catch Set Combo Assorted</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-7.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Rescue Van Building Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Featured" role="tabpanel" aria-labelledby="featured-tab">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-1.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Kids Puzzle Shape Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-2.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Round New Red Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="New" role="tabpanel" aria-labelledby="arrival-tab">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 wow fadeInDown"
                            data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <div class="product-card out-of-stock">
                                <div class="product-img-wrap">
                                    <a href="./product-detail.php">
                                        <div class="product-im">
                                            <img src="./assets/img/home/feature-product-img-1.png"
                                                alt="feature-products">
                                        </div>
                                    </a>
                                    <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                    <div class="stock-icons">
                                        <div class="techno-check">
                                            <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                            <div class="stocks heart">
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 21.44 18.34">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                        transform="translate(-1.25 -2.75)" />
                                                </svg>
                                            </div>
                                        </div>
                                        <a href="./product-detail.php">
                                            <div class="stocks">
                                                <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="./assets/img/home/MagnifyingGlassPlus.svg"
                                                    viewBox="0 0 20 20">
                                                    <defs>
                                                        <style>
                                                        .stock-icon-svg {
                                                            fill: none;
                                                            stroke: #f5512b;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 2px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path class="stock-icon-svg"
                                                        d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                        transform="translate(-2 -2)" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <div class="rating-starts">
                                        <div class="rating stars3_5">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star star-active-half"></span>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <h5>Kids Puzzle Shape Toy</h5>
                                    </a>
                                    <div class="product-discount">
                                        <p>₹325</p>
                                        <h4>₹250</h4>
                                    </div>
                                    <div class="product-card-btn">
                                        <button class="cmn-btn">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_29_403)">
                                                        <path
                                                            d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_29_403">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-arrive-product products-wrap p-100 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <span>
                        <svg width="130" height="37" viewBox="0 0 130 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.3953 29.45C43.3829 28.4113 42.4339 27.3203 41.6561 26.0859C40.9247 24.9254 40.8025 23.7163 41.3011 22.4341C42.2716 19.9383 43.5132 17.5876 44.9813 15.3578C45.1258 15.1387 45.1722 14.9485 45.0964 14.6933C44.2615 11.9017 44.4381 9.1264 45.2168 6.35287C45.5941 5.01028 46.2256 3.85975 47.3664 3.03473C48.567 2.16642 49.9148 1.95273 51.3508 2.11232C53.7422 2.37741 56.0666 2.88415 58.2055 4.05271C58.4044 4.16181 58.5819 4.1014 58.7603 4.04279C61.2177 3.2358 63.7393 2.92292 66.3144 3.06538C66.9949 3.10325 67.6764 3.1817 68.3507 3.28719C68.6254 3.33047 68.8208 3.2881 69.0438 3.1258C71.213 1.54698 73.6481 0.579486 76.2579 0.0916833C78.5182 -0.331199 80.6366 0.733671 81.7212 2.77234C83.0707 5.30873 83.8146 8.01193 83.5354 10.9045C83.4516 11.7773 83.6862 12.3363 84.2401 12.9549C85.8688 14.7717 87.2844 16.7554 88.4814 18.8933C89.0924 19.9843 89.1566 21.1105 88.7106 22.2718C87.8365 24.5494 86.5521 26.5728 84.9831 28.4194C84.9349 28.4753 84.893 28.5375 84.8484 28.5961C84.7396 28.6881 84.621 28.6601 84.5148 28.6042C83.8048 28.2291 83.1207 27.8153 82.5382 27.2499C82.4481 27.1625 82.3911 27.0633 82.4125 26.9316C82.6025 26.479 82.9726 26.1607 83.2616 25.782C84.2615 24.4674 85.1356 23.0815 85.7903 21.5523C86.0294 20.9951 85.9964 20.5325 85.6886 20.0285C84.7815 18.5434 83.7986 17.1143 82.6934 15.7726C81.9709 14.8962 81.2413 14.0252 80.4386 13.2209C80.2397 13.0207 80.1781 12.8097 80.253 12.5293C81.0076 9.71338 80.4849 7.05526 79.2487 4.49453C78.7456 3.4513 77.8117 2.78136 76.4203 3.1267C74.4999 3.60278 72.6714 4.28444 71.0221 5.40792C70.6769 5.64325 70.3326 5.884 70.0543 6.20048C69.7618 6.5332 69.4202 6.59 69.0054 6.49082C67.7576 6.19057 66.491 6.08146 65.2065 6.07154C62.9329 6.05441 60.745 6.47369 58.631 7.29962C58.2287 7.45651 57.9219 7.43396 57.5571 7.18601C55.9302 6.08417 54.0883 5.56661 52.1759 5.27718C51.6193 5.19332 51.0645 5.07791 50.4954 5.08512C49.4483 5.09865 48.6072 5.64415 48.2718 6.64771C47.3638 9.35993 47.1666 12.083 48.3083 14.7862C48.5064 15.255 48.4707 15.6085 48.1683 16.0269C46.5663 18.2432 45.2748 20.6389 44.2134 23.1654C43.9583 23.7722 43.9948 24.2744 44.3819 24.8001C44.9956 25.6341 45.6458 26.4303 46.3897 27.1489C46.5583 27.3112 46.7608 27.46 46.7831 27.7287C46.7447 28.0245 46.5209 28.1913 46.3193 28.3545C45.8358 28.7449 45.3096 29.074 44.7824 29.3995C44.6727 29.4671 44.5416 29.597 44.3926 29.45H44.3953Z"
                                fill="#ED7524" />
                            <path
                                d="M44.3953 29.45C45.2971 29.0325 46.1141 28.4951 46.7751 27.735C46.8108 27.5069 46.9856 27.378 47.131 27.231C49.0853 25.2473 50.1717 22.8507 50.4357 20.0736C50.5811 18.5479 50.7051 17.0223 51.3018 15.586C52.3284 13.1145 54.1329 11.6024 56.7294 11.0497C59.275 10.5078 61.2712 11.4284 62.875 13.394C63.3879 14.0225 63.7866 14.7276 64.1585 15.448C64.2254 15.5778 64.2754 15.7564 64.4457 15.7618C64.6535 15.769 64.6803 15.5607 64.7436 15.4173C65.1584 14.4796 65.6632 13.5969 66.3349 12.8214C67.6719 11.2778 69.3319 10.5168 71.3861 10.6944C73.137 10.8459 74.6863 11.4816 75.9502 12.7123C77.1615 13.8917 77.8376 15.3858 78.2176 17.0295C78.4682 18.1151 78.4986 19.2332 78.7224 20.3215C79.205 22.665 80.2825 24.6838 81.9397 26.3906C82.1146 26.571 82.334 26.7152 82.4277 26.9668C83.1207 27.6818 83.9172 28.2409 84.8484 28.5943C84.9715 28.6719 85.1009 28.7422 85.2177 28.8297C85.5602 29.0857 85.669 29.5348 85.4844 29.899C85.2917 30.2813 84.8475 30.4608 84.4363 30.2985C84.1509 30.1858 83.8789 30.0379 83.6006 29.9053C82.9682 29.7007 82.4883 29.2453 81.9567 28.8774C81.6775 28.6845 81.4287 28.4455 81.1495 28.249C78.4932 25.8677 77.0357 22.8687 76.6415 19.3198C76.522 18.2441 76.3614 17.1765 75.9529 16.163C75.0529 13.9287 73.3653 12.7583 71.0329 12.5906C69.595 12.4869 68.4631 13.1965 67.5854 14.3272C66.6391 15.5463 66.1092 16.9574 65.7444 18.4415C65.6374 18.8789 65.5437 19.3189 65.4679 19.7634C65.3707 20.3323 65.021 20.6614 64.5278 20.6723C64.0354 20.6831 63.6902 20.3928 63.5609 19.7922C63.3219 18.6877 63.0159 17.6057 62.5548 16.576C62.0678 15.4877 61.4621 14.4769 60.5149 13.7195C59.5622 12.9576 58.491 12.6889 57.294 12.9107C54.8491 13.3652 53.4015 14.8727 52.7575 17.2522C52.4292 18.4641 52.4497 19.721 52.2624 20.95C51.7906 24.0508 50.4669 26.7125 48.2111 28.8847C47.5511 29.4401 46.9089 30.0208 46.1659 30.468C46.041 30.5428 45.942 30.6718 45.7752 30.6582C45.6057 30.7439 45.4354 30.825 45.2686 30.9143C44.6808 31.229 44.2348 31.1614 43.9556 30.7105C43.6898 30.2813 43.8548 29.8071 44.3944 29.4482L44.3953 29.45Z"
                                fill="#ED7524" />
                            <path
                                d="M81.2092 28.1984C82.0066 28.7682 82.804 29.3381 83.6014 29.9079C79.8793 33.4993 75.4195 35.5938 70.3897 36.4901C67.0208 37.0906 63.6304 37.133 60.2312 36.7218C56.0497 36.216 52.1268 34.9483 48.5322 32.7085C47.56 32.1026 46.6074 31.4624 45.7752 30.6617C46.5565 30.0657 47.3379 29.4706 48.1192 28.8746C48.3155 28.8647 48.452 28.9891 48.5938 29.0946C52.0483 31.6653 55.9516 33.08 60.1696 33.667C61.9348 33.9122 63.7152 34.0267 65.4964 33.9555C68.8725 33.8203 72.1683 33.263 75.2875 31.8799C77.2293 31.0188 79.0409 29.9413 80.6375 28.5176C80.8025 28.3706 80.9604 28.2011 81.2074 28.1993L81.2092 28.1984Z"
                                fill="#ED7524" />
                            <path
                                d="M82.4285 26.9686C80.7258 25.516 79.6046 23.6802 78.9115 21.555C78.5369 20.4054 78.4646 19.2053 78.2827 18.0223C77.9223 15.6843 77.1062 13.5536 75.0939 12.1668C73.0014 10.7251 70.7162 10.2319 68.3213 11.3851C66.6569 12.1858 65.6909 13.6663 64.9184 15.2938C64.8034 15.5364 64.8096 15.9286 64.4662 15.9475C64.0791 15.9692 64.0782 15.5445 63.9507 15.3001C63.3727 14.1866 62.6894 13.156 61.7163 12.3562C59.7584 10.7467 57.5972 10.68 55.3477 11.5925C52.8056 12.624 51.5042 14.669 50.9022 17.2694C50.6239 18.474 50.672 19.7174 50.4544 20.9274C49.9718 23.6054 48.8043 25.9092 46.7751 27.7341C45.8278 26.7784 44.91 25.8001 44.1652 24.6658C43.886 24.2411 43.8209 23.8579 44.0198 23.3647C45.1053 20.6678 46.4977 18.1458 48.1852 15.7915C48.385 15.5129 48.4136 15.3065 48.2691 14.9882C47.3111 12.8747 47.2166 10.6692 47.6697 8.42402C47.791 7.82351 47.9667 7.23202 48.1469 6.64593C48.4519 5.6568 49.3493 4.93006 50.3429 4.98146C52.9992 5.11941 55.5546 5.65139 57.8006 7.20767C57.9968 7.34382 58.16 7.36366 58.3723 7.2762C61.2525 6.0869 64.2459 5.72353 67.3267 6.06797C67.9743 6.1401 68.6129 6.29248 69.2534 6.41781C69.4541 6.45749 69.6101 6.44937 69.776 6.28978C71.4815 4.64694 73.5847 3.77953 75.8119 3.16279C76.3828 3.005 76.9519 2.82827 77.5629 2.9509C78.2622 3.09066 78.8232 3.45313 79.1506 4.07798C80.567 6.77848 81.2012 9.6025 80.336 12.6276C80.2539 12.9143 80.4047 13.0397 80.5607 13.1993C82.5703 15.2614 84.3213 17.5255 85.8099 20.0014C86.1319 20.5361 86.1525 20.9996 85.9116 21.5595C85.1035 23.435 84.0126 25.122 82.6854 26.6593C82.598 26.7612 82.5124 26.8649 82.4267 26.9677L82.4285 26.9686Z"
                                fill="#F9F6FC" />
                            <path
                                d="M81.2092 28.1984C78.6636 30.495 75.7379 32.0855 72.4591 33.0269C69.6066 33.8456 66.6925 34.1305 63.7384 34.0656C60.2214 33.988 56.8069 33.3767 53.537 32.0287C51.589 31.2253 49.7774 30.1857 48.1192 28.8747C49.0852 27.8522 49.9638 26.7648 50.6381 25.5169C51.7192 23.5161 52.1991 21.3629 52.3391 19.1033C52.4435 17.4289 52.8511 15.8248 54.0169 14.558C55.3352 13.1252 56.9862 12.4914 58.9182 12.8187C60.1134 13.0216 60.9635 13.8042 61.6539 14.7627C62.7126 16.2324 63.2781 17.914 63.6519 19.6705C63.7821 20.2827 64.0488 20.5694 64.526 20.5667C64.9996 20.5631 65.2565 20.2782 65.3698 19.6515C65.6695 17.9906 66.1262 16.3839 67.0154 14.934C68.7985 12.0261 72.2084 11.605 74.6586 13.9863C75.8012 15.0972 76.3453 16.5092 76.579 18.0493C76.8181 19.6182 76.9581 21.1997 77.5201 22.7055C78.3157 24.8388 79.5564 26.6584 81.2083 28.2002L81.2092 28.1984Z"
                                fill="#F9F6FC" />
                            <path
                                d="M64.6946 23.5305C65.4162 23.5449 65.9897 23.6739 66.4839 24.0463C67.0279 24.4565 67.0913 25.0011 66.6506 25.5205C66.4678 25.736 66.2644 25.9371 66.053 26.1246C65.6606 26.4727 65.6427 27.1525 66.029 27.5772C66.3706 27.9541 67.0003 27.9613 67.3919 27.5907C67.6577 27.3383 67.7906 26.9992 67.9663 26.6873C68.051 26.5367 68.117 26.3338 68.3311 26.3329C68.571 26.332 68.6995 26.5304 68.794 26.7098C68.9367 26.9812 68.9537 27.2815 68.8823 27.5862C68.5024 29.2191 66.5882 29.9233 65.2485 28.9009C64.9907 28.7034 64.8872 28.7178 64.6553 28.936C63.4057 30.11 61.3765 29.5708 60.8591 27.9469C60.7494 27.6025 60.7575 27.267 60.9483 26.9514C61.0893 26.7197 61.2596 26.6818 61.4443 26.9019C61.6557 27.1534 61.8457 27.4248 62.0731 27.6602C62.4566 28.0578 62.9446 28.1624 63.3727 27.9721C63.8445 27.762 63.9088 27.341 63.9355 26.8883C63.9498 26.6422 63.8535 26.497 63.6474 26.3852C63.2915 26.1922 62.9829 25.9317 62.7091 25.6332C62.3398 25.2311 62.3371 24.7433 62.7091 24.3438C63.2781 23.7316 64.0194 23.5657 64.6955 23.5314L64.6946 23.5305Z"
                                fill="#ED7524" />
                            <path
                                d="M60.1937 18.236C60.1955 19.1052 60.0055 19.785 59.4864 20.3378C58.7951 21.0744 57.8158 21.115 57.0523 20.4523C55.9587 19.5019 55.7375 17.5606 56.5911 16.3885C57.2958 15.4201 58.4847 15.3155 59.3321 16.1612C59.9342 16.7627 60.1812 17.5165 60.1937 18.2369V18.236Z"
                                fill="#ED7524" />
                            <path
                                d="M70.4174 18.2044C70.9748 18.3162 71.5082 18.3532 71.9961 18.5786C72.3779 18.7553 72.7427 18.9546 72.9327 19.3604C72.9871 19.4767 73.079 19.6074 72.9844 19.7391C72.8756 19.8905 72.7257 19.8328 72.5795 19.7932C71.8213 19.5912 71.0658 19.382 70.2693 19.3847C69.7751 19.3865 69.2971 19.4623 68.8243 19.5948C68.3757 19.721 68.1402 19.5173 68.2222 19.0565C68.2445 18.9285 68.2927 18.7869 68.373 18.6886C69.1133 17.7879 69.9642 17.0395 71.1211 16.7347C71.221 16.7086 71.3236 16.6878 71.4262 16.6842C71.5823 16.6788 71.7794 16.6139 71.8552 16.8159C71.939 17.0395 71.7589 17.1323 71.5992 17.2207C71.155 17.4651 70.7661 17.7752 70.4174 18.2017V18.2044Z"
                                fill="#ED7524" />
                            <path
                                d="M59.3687 17.686C59.366 18.2405 59.0279 18.6697 58.5971 18.6643C58.1413 18.658 57.7613 18.1521 57.7729 17.5652C57.7827 17.0323 58.1065 16.6175 58.5195 16.6076C58.9753 16.5968 59.3713 17.1008 59.3687 17.686Z"
                                fill="#FEFCFE" />
                            <path d="M1 18H31" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                            <path d="M99 18H129" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <h2>New Arrivals</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="owl-carousel owl-theme new-arrive-slider">
                    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <div class="product-card out-of-stock">
                            <div class="product-img-wrap">
                                <a href="./product-detail.php">
                                    <div class="product-im">
                                        <img src="./assets/img/home/feature-product-img-1.png" alt="feature-products">
                                    </div>
                                </a>
                                <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                <div class="stock-icons">
                                    <div class="techno-check">
                                        <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                        <div class="stocks heart">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 21.44 18.34">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                    transform="translate(-1.25 -2.75)" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <div class="stocks">
                                            <svg id="Layer_1" data-name="Layer 1"
                                                xmlns="./assets/img/home/MagnifyingGlassPlus.svg" viewBox="0 0 20 20">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                    transform="translate(-2 -2)" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="rating-starts">
                                    <div class="rating stars3_5">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star star-active-half"></span>
                                    </div>
                                </div>
                                <a href="./product-detail.php">
                                    <h5>Kids Puzzle Shape Toy</h5>
                                </a>
                                <div class="product-discount">
                                    <p>₹325</p>
                                    <h4>₹250</h4>
                                </div>
                                <div class="product-card-btn">
                                    <button class="cmn-btn">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_29_403)">
                                                    <path
                                                        d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_29_403">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        Add to Cart
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item wow fadeInDown" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0">
                        <div class="product-card out-of-stock">
                            <div class="product-img-wrap">
                                <a href="./product-detail.php">
                                    <div class="product-im">
                                        <img src="./assets/img/home/feature-product-img-2.png" alt="feature-products">
                                    </div>
                                </a>
                                <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                <div class="stock-icons">
                                    <div class="techno-check">
                                        <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                        <div class="stocks heart">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 21.44 18.34">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                    transform="translate(-1.25 -2.75)" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <div class="stocks">
                                            <svg id="Layer_1" data-name="Layer 1"
                                                xmlns="./assets/img/home/MagnifyingGlassPlus.svg" viewBox="0 0 20 20">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                    transform="translate(-2 -2)" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="rating-starts">
                                    <div class="rating stars3_5">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star star-active-half"></span>
                                    </div>
                                </div>
                                <a href="./product-detail.php">
                                    <h5>Round New Red Toy</h5>
                                </a>
                                <div class="product-discount">
                                    <p>₹325</p>
                                    <h4>₹250</h4>
                                </div>
                                <div class="product-card-btn">
                                    <button class="cmn-btn">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_29_403)">
                                                    <path
                                                        d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_29_403">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        Add to Cart
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item wow fadeInDown" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">
                        <div class="product-card out-of-stock">
                            <div class="product-img-wrap">
                                <a href="./product-detail.php">
                                    <div class="product-im">
                                        <img src="./assets/img/home/feature-product-img-3.png" alt="feature-products">
                                    </div>
                                </a>

                                <span class="instock-label">In Stock</span>
                                <span class="offer-label">15% off</span>

                                <div class="stock-icons">
                                    <div class="techno-check">
                                        <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                        <div class="stocks heart">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 21.44 18.34">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                    transform="translate(-1.25 -2.75)" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <div class="stocks">
                                            <svg id="Layer_1" data-name="Layer 1"
                                                xmlns="./assets/img/home/MagnifyingGlassPlus.svg" viewBox="0 0 20 20">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                    transform="translate(-2 -2)" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="rating-starts">
                                    <div class="rating stars3_5">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star star-active-half"></span>
                                    </div>
                                </div>
                                <a href="./product-detail.php">
                                    <h5>Catapult Car Toy For Kids</h5>
                                </a>
                                <div class="product-discount">
                                    <p>₹325</p>
                                    <h4>₹250</h4>
                                </div>
                                <div class="product-card-btn">
                                    <button class="cmn-btn">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_29_403)">
                                                    <path
                                                        d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_29_403">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        Add to Cart
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item wow fadeInDown" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">
                        <div class="product-card out-of-stock">
                            <div class="product-img-wrap">
                                <a href="./product-detail.php">
                                    <div class="product-im">
                                        <img src="./assets/img/home/feature-product-img-4.png" alt="feature-products">
                                    </div>
                                </a>
                                <!-- <span class="offer-label">25% off</span>
                                    <span class="instock-label">In Stock</span> -->

                                <div class="stock-icons">
                                    <div class="techno-check">
                                        <input class="techno_checkbox" type="checkbox" id="1" value="1">
                                        <div class="stocks heart">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 21.44 18.34">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z"
                                                    transform="translate(-1.25 -2.75)" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="./product-detail.php">
                                        <div class="stocks">
                                            <svg id="Layer_1" data-name="Layer 1"
                                                xmlns="./assets/img/home/MagnifyingGlassPlus.svg" viewBox="0 0 20 20">
                                                <defs>
                                                    <style>
                                                    .stock-icon-svg {
                                                        fill: none;
                                                        stroke: #f5512b;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }
                                                    </style>
                                                </defs>
                                                <path class="stock-icon-svg"
                                                    d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21"
                                                    transform="translate(-2 -2)" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="rating-starts">
                                    <div class="rating stars3_5">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star star-active-half"></span>
                                    </div>
                                </div>
                                <a href="./product-detail.php">
                                    <h5>Best Knitted Sausage Dog</h5>
                                </a>
                                <div class="product-discount">
                                    <p>₹325</p>
                                    <h4>₹250</h4>
                                </div>
                                <div class="product-card-btn">
                                    <button class="cmn-btn">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_29_403)">
                                                    <path
                                                        d="M16.875 17.25H7.79719C7.44591 17.2499 7.10579 17.1266 6.83612 16.9015C6.56646 16.6764 6.38435 16.3637 6.32156 16.0181L3.93 2.86594C3.8986 2.69313 3.80755 2.53681 3.67272 2.42425C3.53789 2.31169 3.36783 2.25003 3.19219 2.25H1.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.875 21C8.91053 21 9.75 20.1605 9.75 19.125C9.75 18.0895 8.91053 17.25 7.875 17.25C6.83947 17.25 6 18.0895 6 19.125C6 20.1605 6.83947 21 7.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.875 21C17.9105 21 18.75 20.1605 18.75 19.125C18.75 18.0895 17.9105 17.25 16.875 17.25C15.8395 17.25 15 18.0895 15 19.125C15 20.1605 15.8395 21 16.875 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.86406 13.5H17.6344C17.9857 13.4999 18.3258 13.3766 18.5954 13.1515C18.8651 12.9264 19.0472 12.6137 19.11 12.2681L20.25 6H4.5"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_29_403">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        Add to Cart
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
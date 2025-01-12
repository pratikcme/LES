<!-- -----hero-section--- -->
<section class="hero-section d-none" style="background-image: url('<?= base_url() . 'public/images/' . $this->folder . 'web_banners/' . $banner[0]->web_banner_image ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6"></div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="hero-content">

                    <h1><?= $banner[0]->main_title ?></h1>
                    <h3><?= $banner[0]->sub_title ?></h3>
                    <a href="<?= base_url() . 'products' ?>" class="hero-btn">shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <?php foreach ($banner as $key => $value) { ?>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></button>
        <?php } ?>

    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <?php foreach ($banner as $key => $value) { ?>
            <section class="hero-section carousel-item <?= ($key == 0) ? "active" : "" ?>" style="background-image: url(<?= base_url() . 'public/images/' . $this->folder . 'web_banners/' . $value->web_banner_image ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="hero-content">

                                <h1><?= $value->main_title ?></h1>
                                <h3><?= $value->sub_title ?></h3>
                                <?php if ($value->type == '1') { ?>
                                    <a href="<?= base_url() . 'products' ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                                <?php } else if ($value->type == '2') { ?>
                                    <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->category_id) ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                                <?php } else { ?>
                                    <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>
</div>


<!-- -----Categories-section----- -->
<section class="Categories-section section">
    <img src="<?= $this->theme_base_url ?>/assets/images/category-top-right-img.png" alt="" class="category-top-right-img">
    <div class="container">
        <h1 class="title"><?= $this->lang->line('Shop By') ?> <span><?= $this->lang->line('Categories') ?> </span></h1>
        <span class="line-animation"></span>

        <h5><?= $this->lang->line('See All') ?> <?= $this->lang->line('Categories') ?></h5>
        <h5 class="mobile-cate-text"><a href="#"><?= $this->lang->line('See All') ?></a></h5>

        <!-- --------owl-slider--------->
        <div class="owl-1 owl-carousel owl-theme">
            <?php foreach ($category as $key => $value) {
            ?>
                <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>" class="categorie-wrapper categorie-1">
                    <div class="categorie-img ">

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
<section class="Featured-Products  section">
    <img src="<?= $this->theme_base_url ?>/assets/images/product-top-left-img.png" alt="" class="product-top-left-img">
    <img src="<?= $this->theme_base_url ?>/assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">
    <div class="container">
        <h2 class="title"><?= $this->lang->line('Top Featured') ?> <span><?= $this->lang->line('Products') ?></span>
        </h2>
        <span class="line-animation"></span>

        <div class="row">
            <!-- -----product-card----- -->
            <?php foreach ($top_sell as $key => $value) {
                $attr = '';
                if (in_array($value->id, $wish_pid)) {
                    $attr = 'checked';
                }
                $value->name = character_limiter($value->name, 30);
            ?>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                    <div class="techno-check">
                        <div class="product-wrapper card  <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">
                            <span class="discnt <?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><?= $value->discount_per ?>
                                % off</span>
                            <span> <?= $this->lang->line('out of stock') ?></span>
                            <div class="card-header">
                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">

                                </a>
                            </div>

                            <div class="card-body">
                                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a>
                                </h3>
                                <h4 class="<?= ($value->varientQuantity > $value->limited_stock) ? 'invisible' : 'visible' ?>">
                                    <?= ($value->varientQuantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                </h4>

                                <div class="rate-dropdown">
                                    <select class="form-select card-dropdown d-none" aria-label="Default select example">
                                        <option selected>500 Gms</option>
                                        <option value="1">300 Gms</option>
                                        <option value="2">200 Gms</option>
                                        <option value="3">1Kg</option>
                                    </select>


                                    <div class="card-rating">
                                        <p><img src="<?= $this->theme_base_url ?>/assets/images/card-star-img.png" alt=""><?= $value->ratting['rating'] ?></p>
                                    </div>
                                </div>
                                <h6 class="rating notranslate">
                                    <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . $value->price ?></strike></span>
                                </h6>
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
                                <a href="javascript:" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    <?= $this->lang->line('add to cart') ?>
                                </a>
                                <div class="product-detail-quentity <?= $d_show ?>">
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

<!-- Dk added -->
<?php
if (isset($offer_list) && !empty($offer_list) && count($offer_list) != 0) { ?>
    <section class="products-banner p-100">
        <div class="container">
            <div class="row">
                <?php
                if (count($offer_list) == 1) {
                    foreach ($offer_list as $key => $value) : ?>
                        <!--======== single-banner ==============-->
                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="sale-banner-wrap position-relative">
                                <img src="<?= $value->image ?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                                <div class="sale-banner-inner text-center">
                                    <h3> <span><?= $offer_list[0]->offer_percent ?>% OFF</span></h3>
                                    <h2><?= $value->offer_title ?></h2>
                                    <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="lg-btn add-cart-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                }

                if (count($offer_list) == 2 or count($offer_list) > 3) { ?>
                    <!--============== two-banner ===================-->
                    <?php foreach ($offer_list as $key => $value) : ?>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                            <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">
                                <div class="offer-wrapper offer-wrapper-<?= $key + 1 ?>" style="background:url(<?= $value->image ?>)">
                                    <h4><?= $value->offer_title ?></h4>
                                    <h3><?= $value->offer_percent ?>%<span>OFF</span></h3>
                                    <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="explor-btn"><?= $this->lang->line('Explore More'); ?></a>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>

                <?php }
                ?>

                <!--=============== three-banners ==================-->
                <?php if (count($offer_list) == 3) {
                ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div>
                            <div class="home-clothes mb-4 ">
                                <div class="cloth-card">
                                    <img src="<?= $offer_list[0]->image ?>" alt="">
                                </div>
                                <div class="cloth-content">
                                    <h5><?= $offer_list[0]->offer_title ?></h5>
                                    <h3><?= $offer_list[0]->offer_percent ?>%<span>OFF</span></h3>
                                    <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>"><?= $this->lang->line('Explore More'); ?></a>
                                </div>
                            </div>
                            <div class="home-clothes women-cloth">
                                <div class="cloth-card">
                                    <img src="<?= $offer_list[1]->image ?>" alt="">
                                </div>
                                <div class="cloth-content">
                                    <h5><?= $offer_list[1]->offer_title ?></h5>
                                    <h3><?= $offer_list[1]->offer_percent ?>%<span>OFF</span></h3>
                                    <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[1]->id) ?>"><?= $this->lang->line('Explore More'); ?></a>
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
                                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[2]->id) ?>"><?= $this->lang->line('Explore More'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php

                } ?>
            </div>
        </div>
    </section>
<?php } ?>
<!-- end -->
<!-- -----Latest Products----- -->
<section class="Latest-Products Categories-section section">
    <img src="<?= $this->theme_base_url ?>/assets/images/latest-product-top-img.png" alt="" class="latest-product-top-img">
    <div class="container">
        <h1 class="title"><?= $this->lang->line('Latest') ?> <span><?= $this->lang->line('Products') ?></span></h1>
        <span class="line-animation"></span>

        <h5><?= $this->lang->line('See All') ?> <?= $this->lang->line('Categories') ?></h5>

        <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
            <?php foreach ($new_arrival as $key => $value) {
            ?>
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="8" value="8" />
                    <div class="product-wrapper card <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">
                        <span class="discnt <?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><?= $value->discount_per ?> %
                            off</span>
                        <span> <?= $this->lang->line('out of stock') ?></span>
                        <div class="card-header">
                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">

                                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a>
                            </h3>
                            <h4 class="<?= ($value->varientQuantity > $value->limited_stock) ? 'invisible' : 'visible' ?>"><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                            </h4>

                            <div class="rate-dropdown">

                                <div class="card-rating">
                                    <p><img src="<?= $this->theme_base_url ?>/assets/images/card-star-img.png" alt=""><?= $value->ratting['rating'] ?></p>
                                </div>
                            </div>
                            <h6 class="rating notranslate">
                                <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . $value->price ?></strike></span>
                            </h6>
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
                            <a href="javascript:" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                <span><i class="fa-solid fa-cart-shopping"></i></span><?= $this->lang->line('add to cart') ?>
                            </a>
                            <div class="product-detail-quentity <?= $d_show ?>">
                                <div class="qty-container">
                                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                    <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" readonly>
                                    <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</section>
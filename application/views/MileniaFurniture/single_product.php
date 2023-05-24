<style>
    .rating-rev {
        font-size: 20px;
    }

    .stars3_5 span:last-child {
        /* font-size: 18px; */
        /* padding-left: 10px; */
    }

    /* Dk added Temp */
    #image_thumb {
        height: auto !important;
    }
</style>

<!-- ----hero-section-- -->
<section class="hero-section banner common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('SHOP') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Product Detail') ?></li>


                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ------------Featured Products-section------------ -->
<section class="product-detalis-section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                <div class="product-image-part">
                    <!-- -------swipr-slider-----  -->
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 gallery-top">
                        <span class="discnt <?= ($varientDetails[0]->discount_per > 0) ? '' : 'd-none' ?>"><?= $varientDetails[0]->discount_per ?>%
                            off</span>
                        <div class="pro-hearticon wishlist-icon" data-product_id="<?= $product_id ?>" data-product_weight_id="<?= $product_weight_id ?>">
                            <i class="fa-regular fa-heart <?= (in_array($this->utility->safe_b64decode($product_weight_id), $wish_pid)) ? "fa-solid" : "" ?>"></i>
                        </div>
                        <div class="swiper-wrapper" id="zoom_image">
                            <?php foreach ($product_image as $key => $value) { ?>
                                <div class="swiper-slide">
                                    <a href="#"><img data-enlargable class="drift-demo-trigger" src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" data-zoom="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" />
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper gallery-thumbs">
                        <div class="swiper-wrapper" id="image_thumb">
                            <?php foreach ($product_image as $key => $value) { ?>
                                <div class="swiper-slide">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" />
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                <div class="product-content-part zoom">
                    <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <?= $productDetail[0]->name ?></h2>
                    <div class="rating-starts justify-content-start" id="starRatting">
                        <div class="rating stars3_5">
                            <?php for ($j = 1; $j <= $productDetail[0]->rating['rating']; $j++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                            <?php for ($i = 1; $i <= 5 - $productDetail[0]->rating['rating']; $i++) { ?>
                                <span class="star star-active"></span>
                            <?php } ?>
                        </div>
                        <div><span>(<?= $productDetail[0]->rating['rating'] ?>)</span></div>
                    </div>

                    <h6 id="is_aval_stock">
                        <?= ($varientDetails[0]->quantity > $varientDetails[0]->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                    </h6>

                    <h3 class="notranslate" id="dynamic_price">
                        <?= $this->siteCurrency . ' ' . number_format((float)$varientDetails[0]->discount_price, 2, '.', '') ?>
                        <span>
                            <strike><?= ($varientDetails[0]->discount_per > 0) ? $this->siteCurrency . ' ' . number_format((float)$varientDetails[0]->price, 2, '.', '') : '' ?></strike>
                        </span>
                    </h3>
                    <hr>
                    <p><?= $productDetail[0]->about ?></p>

                    <!-- <h6><span><i class="fa-regular fa-clock"></i></span>Hurry up ! Deal ends in :</h6> -->

                    <!-- -----counter-product-- -->
                    <?php
                    $d_none = '';
                    $d_show = 'd-none';
                    if (!empty($item_weight_id)) {
                        if (in_array($varientDetails[0]->id, $item_weight_id)) {
                            $d_show = '';
                            $d_none = 'd-none';
                        }
                    }
                    ?>


                    <!-- -----product-details-btn----- -->
                    <div class="product-detalis-btn wow fadeInRight" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <div class="product-detail-quentity wow fadeInRight" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                            <?php if ($isAvailable != '0') { ?>
                                <a href="javascript:" class="add-cart-btn cmn-btn <?= $d_none ?>" id="addtocart"><span><i class="fa-solid fa-cart-shopping "></i></span>Add To Cart</a>
                            <?php } ?>
                            <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                                <div class="qty-container">
                                    <button class="dec decqnt cart-qty-minus qty-btn-minus productDetailsButton" type="button" data-product_weight_id="<?= $varientDetails[0]->id ?>"><i class="fa-solid fa-minus"></i></button>
                                    <input type="text" name="qty" id="qnt" value="<?= ($cartQuantityForVarient != '') ? $cartQuantityForVarient : 1 ?>" data-product_id="<?= $this->utility->safe_b64decode($product_id) ?>" class="input-qty" readonly>
                                    <button class="inc qty-btn-plus cart-qty-plus incqnt" type="button" data-product_weight_id="<?= $varientDetails[0]->id ?>"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php if ($isAvailable != '0') { ?>
                            <a href="javascript:" id="order_now" class="add-cart-btn order-now cmn-btn"><span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>Order Now</a>
                        <?php } ?>
                        <?php if (!empty($BranchDetails) && $BranchDetails[0]->whatsappFlag  != '0' && $BranchDetails[0]->phone_no != '') {
                            $mobile = '91' . $BranchDetails[0]->phone_no;
                            $product_id = $this->uri->segment(3);
                            $varient_id = $this->uri->segment(4);
                            $url = base_url() . 'products/productDetails/' . $product_id . '/' . $varient_id;
                        ?>
                            <a href="https://wa.me/<?= $mobile ?>/?text=<?= $url ?>" id='whatsapp_link' target="_black" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
                        <?php } ?>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <form action="">
                            <select class="product_varient_id" name="cars" id="cars">
                                <?php foreach ($varient as $key => $value) { ?>
                                    <option value="<?= $this->utility->safe_b64encode($value) ?>" <?= ($varientDetails[0]->id == $value) ? 'selected' : '' ?>>
                                        <?= $weight_no[$key] . ' ' . $weight_name[$key] ?></option>
                                <?php } ?>
                            </select>
                        </form>
                    </div>


                    <h4><?= $this->lang->line('Brand') ?>: <span> <?= $productDetail[0]->brand_name ?></span></h4>

                    <h4><?= $this->lang->line('Categories') ?>: <span><?= $productDetail[0]->category_name ?></span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-120 review-wrp">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="review-desc">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?= $this->lang->line('Description') ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review_count" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?= $this->lang->line('Reviews') ?>
                                (<span><?= count($product_review) ?></span>)</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane mt-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p><?= $productDetail[0]->about ?></p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="review_count">
                            <!-- -------review-tab------ -->
                            <div class="my-review-wrapper">
                                <!-- ----review-content--- -->
                                <div class="review-content">
                                    <div class="left-content">
                                        <div>
                                            <h3><strong id="avgRating"><?= $productDetail[0]->rating['rating'] ?></strong><span>/5</span>
                                            </h3>
                                        </div>
                                        <div>
                                            <h4><?= $this->lang->line("Overall Rating") ?></h4>
                                        </div>
                                    </div>
                                    <?php
                                    if ((!empty($isVarientExist) && $countParticularUserReview == 0)) {
                                    ?>
                                        <div class="right-content" id="writeReviewSection">
                                            <h6 class="invisible">review!</h6>
                                            <div class="enter-review-btn">
                                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= $this->lang->line('Write Review') ?></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <!-- ----review-comment-part--- -->
                                <div class="review-comment-wrapper" id="review_section">
                                    <h3><?= $this->lang->line('Most Useful Review') ?></h3>
                                    <?php foreach ($product_review as $key => $value) { ?>
                                        <div class="supportive-div">
                                            <div class="rewiew-wrapper">
                                                <div class="review-left">
                                                    <div class="review-img">
                                                        <svg xmlns="<?= $this->theme_base_url ?>/assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: #cc833d;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
                                                        </svg>
                                                    </div>
                                                    <div class="review-text">
                                                        <h6><?= $value->fname ?></h6>
                                                        <p><span><i class="fa-solid fa-circle-check"></i></span> Verified
                                                            Buyers</p>
                                                    </div>
                                                </div>
                                                <div class="review-right">
                                                    <div class="review-right-top">
                                                        <span class="number-star"><?= $value->ratting ?> <span><i class="fa-solid fa-star"></i></span></span>
                                                        on<h4><?= date('M d, Y', strtotime($value->dt_created)) ?></h4>
                                                    </div>
                                                    <p><?= $value->review ?></p>
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
        </div>
    </div>
</section>

<input type="hidden" name="product_id" id="product_id" value='<?= $product_id ?>'>
<input type="hidden" name="product_varient_id" id="product_varient_id" value='<?= (isset($varientDetails[0]->id) && $varientDetails[0]->id != '') ? $this->utility->safe_b64encode($varientDetails[0]->id) : $this->utility->safe_b64encode($productDetail[0]->variant_id) ?>'>



<!-- -----related-product----- -->
<?php if (!empty($related_product)) { ?>
    <section class="categories top-rating p-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main-title title text-center center-title">
                        <h2><?= $this->lang->line('related products') ?></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="banner-wrap">
                        <div class="owl-carousel owl-theme top-rating-slider">
                            <?php foreach ($related_product as $key => $value) {

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
                                            <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="hot-product-img" />

                                            <p><?= ($value->quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                            </p>
                                            <div class="hot-products-cart-wrap">
                                                <a href="javascript:" class="addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">
                                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>

                                                <div class="techno-check">
                                                    <input class="techno_checkbox wishlist-icon" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-product_weight_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>" type="checkbox" id="1" value="1" <?= (in_array($value->pw_id, $wish_pid)) ? "checked" : "" ?>>
                                                    <div class="stocks heart">
                                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hot-products-details ">
                                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                                <h5><?= $value->name ?></h5>
                                            </a>
                                            <div class="price-wrap notranslate d-flex">
                                                <p><span class="<?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><strike><?= $this->siteCurrency . ' ' . number_format((float)$value->price, 2, '.', '') ?></strike></span>
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
                                            <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                                                <div class="qty-container ">
                                                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" name="qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" class="input-qty qty" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" readonly>
                                                    <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
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
<?php } ?>

<?php if ($this->session->userdata('user_id') != '') { ?>

    <div class="modal fade my-review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><?= $this->lang->line('Write Review') ?></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
                </div>
                <form class="modal-body" id="reviewForm" class="modal-body rating flex-column" method="POST" action="<?= base_url() . 'products/productReview' ?>">
                    <div class="rating-box">
                        <div class="rating">
                            <div class="rating__stars">
                                <input id="rating-1" class="rating__input rating__input-1" type="radio" name="ratetIndex" value="1">
                                <input id="rating-2" class="rating__input rating__input-2" type="radio" name="ratetIndex" value="2">
                                <input id="rating-3" class="rating__input rating__input-3" type="radio" name="ratetIndex" value="3">
                                <input id="rating-4" class="rating__input rating__input-4" type="radio" name="ratetIndex" value="4">
                                <input id="rating-5" class="rating__input rating__input-5" type="radio" name="ratetIndex" value="5">
                                <label class="rating__label" for="rating-1">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <g transform="translate(16,16)">
                                            <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                                        </g>
                                        <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(16,16) rotate(180)">
                                                <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                                                <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
                                            </g>
                                            <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                                                <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="rating__sr">1 star—Terrible</span>
                                </label>
                                <label class="rating__label" for="rating-2">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <g transform="translate(16,16)">
                                            <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                                        </g>
                                        <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(16,16) rotate(180)">
                                                <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                                                <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
                                            </g>
                                            <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                                                <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="rating__sr">2 stars—Bad</span>
                                </label>
                                <label class="rating__label" for="rating-3">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <g transform="translate(16,16)">
                                            <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                                        </g>
                                        <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(16,16) rotate(180)">
                                                <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                                                <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
                                            </g>
                                            <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                                                <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="rating__sr">3 stars—OK</span>
                                </label>
                                <label class="rating__label" for="rating-4">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <g transform="translate(16,16)">
                                            <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                                        </g>
                                        <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(16,16) rotate(180)">
                                                <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                                                <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
                                            </g>
                                            <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                                                <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="rating__sr">4 stars—Good</span>
                                </label>
                                <label class="rating__label" for="rating-5">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <g transform="translate(16,16)">
                                            <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                                        </g>
                                        <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(16,16) rotate(180)">
                                                <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                                                <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
                                            </g>
                                            <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                                                <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                                                <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="rating__sr">5 stars—Excellent</span>
                                </label>
                                <p class="rating__display" data-rating="1" hidden>Terrible</p>
                                <p class="rating__display" data-rating="2" hidden>Bad</p>
                                <p class="rating__display" data-rating="3" hidden>OK</p>
                                <p class="rating__display" data-rating="4" hidden>Good</p>
                                <p class="rating__display" data-rating="5" hidden>Excellent</p>
                            </div>
                        </div>

                        <input type="hidden" name="product_id" id="product_id" value="<?= $this->uri->segment(3) ?>">
                        <input type="hidden" name="varient_id" id="varient_id" value="<?= $this->uri->segment(4) ?>">

                        <div class="review-text-box">
                            <textarea name="comment" id="Your-review" cols="30" rows="10" placeholder="Your Comments"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnSubmit1" class="btn cmn-btn lg-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
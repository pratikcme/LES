<section class="hero-section common-banner-bg login-section">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1>Product Listing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="products-wrap p-100 offer-products">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="title text-center wow fadeIn">
                    <h2> Exclusive <span>Products</span></h2>
                    <p>Do not miss the current offers until the end of month.</p>
                </div>
            </div>
            <?php

            foreach ($offer_varient_list as $key => $value) {

            ?>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="product-card <?= ($value->available_quantity == '0') ? 'out-of-stock' : '' ?>">
                    <div class="product-img-wrap">
                        <a
                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                            <div class="product-im">
                                <img src="<?= $value->image ?>" alt="">
                            </div>
                        </a>
                        <?php
                            if ($value->available_quantity == '0') { ?>
                        <span> <?= $this->lang->line('out of stock') ?></span>
                        <?php  } ?>

                        <?php if ($value->available_quantity != '0') : ?>
                        <p class="<?= ($value->available_quantity > $value->limited_stock) ? 'd-none' : '' ?>">
                            <?= ($value->available_quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                        </p>
                        <?php endif ?>

                        <?php if ($value->new_percentage > '0') { ?>
                        <span class="discnt"><?= $value->new_percentage . ' % off' ?></span>
                        <?php } ?>

                    </div>

                    <div class="product-content">
                        <a
                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                            <h5><?= $value->name ?></h5>

                            <div class="product-discount notranslate">
                                <h4> <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                </h4>
                                <p class="<?= ($value->new_percentage > 0) ? '' : ' d-none' ?>">
                                    <?= $this->siteCurrency . ' ' . $value->price ?></p>
                            </div>
                        </a>
                        <div class="rating-starts">
                            <div class="rating stars3_5">
                                <?php for ($j = 1; $j <= $value->rating; $j++) { ?>
                                <span class="star"></span>
                                <?php } ?>

                                <?php for ($i = 1; $i <= 5 - $value->rating; $i++) { ?>
                                <span class="star star-active"></span>
                                <?php } ?>
                            </div>
                            <div><span>(<?= $value->reviewCount  ?>)</span></div>
                        </div>

                        <?php
                            $d_none = '';
                            $d_show = 'd-none';
                            if (!empty($item_weight_id)) {
                                if (in_array($value->product_varient_id, $item_weight_id)) {
                                    $d_show = '';
                                    $d_none = 'd-none';
                                }
                            }

                            ?>
                        <div>
                            <button type="button"
                                class="add-cart-btn addcartbutton product_<?= $this->utility->safe_b64encode($value->product_id) ?> <?= $d_none ?>"
                                data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>"
                                data-varient_id="<?= $this->utility->safe_b64encode($value->product_varient_id) ?>"><span><i
                                        class="fa-solid fa-cart-shopping"></i></span>Add to
                                Cart
                            </button>
                        </div>
                        <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                            <div class="qty-container">
                                <button class="qty-btn-minus dec dec_<?= $value->product_varient_id ?> cart-qty-minus"
                                    data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i
                                        class="fa-solid fa-minus"></i></button>
                                <input type="text" name="qty" value="1" class="input-qty qty"
                                    value="<?= $addQuantity ?>" data-product_id="<?= $value->product_id ?>"
                                    data-weight_id="<?= $value->weight_id ?>">
                                <button class="qty-btn-plus inc inc_<?= $value->product_varient_id ?> cart-qty-plus"
                                    data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i
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
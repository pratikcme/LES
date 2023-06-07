<!-- ----hero-section--- -->
<section class="hero-section listing-hero-sec">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
            </ol>
        </nav>
    </div>
</section>

<!-- -----Featured Products-section------------ -->
<section class="Featured-Products  section">
    <img src="<?= base_url() . 'public/upbasket/' ?>assets/images/product-top-left-img.png" alt="" class="product-top-left-img">
    <img src="<?= base_url() . 'public/upbasket/' ?>assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">
    <div class="container">
        <h2 class="title"><span>OFFER</span> PRODUCT LISTING</h2>
        <div class="row">
            <!-- -----product-card----- -->
            <?php
            foreach ($offer_varient_list as $key => $value) { ?>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                    <div class="techno-check <?= ($value->available_quantity == '0') ? 'out-of-stock' : '' ?> ">

                        <div class="product-wrapper card">

                            <?php
                            if ($value->available_quantity == '0') { ?>
                                <span> <?= $this->lang->line('out of stock') ?></span>
                            <?php  } ?>


                            <?php if ($value->new_percentage > '0') { ?>
                                <span class="discnt"><?= $value->new_percentage . ' % off' ?></span>
                            <?php } ?>

                            <div class="card-header">
                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                                    <img src="<?= $value->image ?>" alt="">
                                </a>
                            </div>

                            <div class="card-body">
                                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>"><?= $value->name ?></a>
                                </h3>

                                <?php if ($value->available_quantity != '0') : ?>

                                    <h4><?= ($value->available_quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                    </h4>

                                <?php
                                endif ?>
                                <div class="rate-dropdown">

                                    <div class="card-rating">
                                        <p><img src="<?= base_url() . 'public/upbasket' ?>/assets/images/card-star-img.png" alt=""><?= $value->ratting['rating'] ?></p>
                                    </div>
                                </div>
                                <h6 class="rating"><span><?= $this->siteCurrency ?></span>
                                    <?= number_format((float)$value->discount_price, 2, '.', '') ?>

                                    <span><strike><span><?= $this->siteCurrency ?></span>
                                            <?= number_format((float)$value->actual_price, 2, '.', '') ?></strike></span>
                                </h6>

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

                                <a href="javascript:;" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_varient_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>


                                <div class="product-detail-quentity <?= $d_show ?>">
                                    <div class="qty-container">
                                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" name="qty" value="<?= ($value->my_cart_quantity != '0') ? $value->my_cart_quantity : 1 ?>" data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>" class="input-qty qty" readonly />

                                        <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
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
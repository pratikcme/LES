<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1>Product Listing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Product Listing') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>



<section class="Featured-Products p-100 offer-products">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2>OFFER <?= $this->lang->line('Product Listing') ?></h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- -----product-card----- -->
            <?php
            foreach ($offer_varient_list as $key => $value) { ?>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                    <div class="techno-check <?= ($value->available_quantity == '0') ? 'out-of-stock' : '' ?> ">
                        <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                        <div href="#" class="product-wrapper card ">

                            <?php
                            if ($value->available_quantity == '0') { ?>
                                <span> <?= $this->lang->line('out of stock') ?></span>
                            <?php  } ?>

                            <div class="card-header">

                                <?php if ($value->available_quantity != '0') : ?>

                                    <h5><?= ($value->available_quantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
                                    </h5>

                                <?php
                                endif ?>

                                <?php if ($value->new_percentage > '0') { ?>
                                    <span class="discnt"><?= $value->new_percentage . ' % off' ?></span>
                                <?php } ?>


                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                                </a>
                            </div>

                            <div class="card-body">
                                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>"><?= $value->name ?></a>
                                </h3>
                                <h6 class="rating-cnt">
                                    <span><?= $this->siteCurrency ?></span><?= number_format((float)$value->discount_price, 2, '.', '') ?>
                                    <span><strike><span><?= $this->siteCurrency ?></span><?= number_format((float)$value->actual_price, 2, '.', '') ?></strike></span>
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
                                    <div><span>(<?= $value->ratting['rating'] ?>)</span></div>
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


                                <!-- <div class="card-btn"> -->
                                <a href="javascript:;" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_varient_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                                <!-- </div> -->


                                <div class="product-detail-quentity add-cart-btn <?= $d_show ?>">
                                    <div class="qty-container">
                                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" name="qty" value="<?= ($value->my_cart_quantity != '0') ? $value->my_cart_quantity : 1 ?>" data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>" class="input-qty qty" readonly>
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
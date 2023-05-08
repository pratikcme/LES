<div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
    <div class="techno-check">
        <input class="techno_checkbox" type="checkbox" id="1" value="1" />
        <div href="#" class="product-wrapper card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
            <span class="discnt <?= ($value->discount_per > 0) ? '' : 'd-none' ?>"><?= $value->discount_per ?> %
                off</span>
            <div class="card-header">
                <h5>
                <?php 
                    if ($value->quantity > $value->limited_stock) { ?>
                        <?= $this->lang->line('Available(Instock)') ?>
                    <?php } else { ?>
                        <?= $this->lang->line('Limited Stock') ?>
                    <?php } 
                ?>
                </h5>
                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                </a>
            </div>
            <div class="card-body">
                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->name ?></a>
                </h3>
                <h6 class="rating-cnt notranslate">
                    <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . $value->price ?></strike></span>
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
                <a href="javascript:" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->prod_id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>">
                    <span><i class="fa-solid fa-cart-shopping"></i></span> <?= $this->lang->line('add to cart') ?>
                </a>
                <div class="product-detail-quentity add-cart-btn <?= $d_show ?>">
                    <div class="qty-container ">
                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                        <input type="text" name="qty" class="input-qty qty" value="<?= $addQuantity ?>" data-product_id="<?= $value->prod_id ?>" data-weight_id="<?= $value->product_weight_id ?>">
                        <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
    <div class="techno-check">
        <input class="techno_checkbox" type="checkbox" id="1" value="1" />
        <div href="#" class="product-wrapper card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
        <span class="discnt <?=($value->discount_per > 0) ? '' : 'd-none'?>"><?=$value->discount_per?> % off</span>
            <div class="card-header">
                <?php if ($value->quantity > 25) { ?>
                    <?= $this->lang->line('Available(Instock)') ?>
                <?php } else { ?>
                    <?= $this->lang->line('Limited Stock') ?>
                <?php } ?>
                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                </a>
            </div>  
            <div class="card-body">
                <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->name ?></a></h3>
                <h6 class="rating-cnt notranslate"><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?=($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . $value->price ?></strike></span></h6>
                <div class="rating-starts">
                    <div class="rating stars3_5">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star star-active"></span>
                        <span class="star star-active-half"></span>
                    </div>
                    <div><span>(122)</span></div>
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
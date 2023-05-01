<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="product-wrapper">
        <?= $p_outofstock ?>
        <div class="wishlist-wrapper">
            <?php
			if ($value->discount_per > '0') { ?>
            <div class="offer-wrap">
                <p>
                    <?= $value->discount_per ?> % off</p>
            </div>
            <?php } else { ?>
            <div class=""></div>
            <?php } ?>
            <div class="wishlist-icon" style="display:none"
                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                data-product_weight_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>"> <i
                    class="far fa-heart <?= $class ?> "></i> </div>
        </div>
        <a
            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
            <div class="feat-img">
                <?php if ($value->food_type == '1') { ?>
                <img src="<?= base_url() . 'public/frontend/assets/images/vage-icon.svg' ?>" alt="veg-icon"
                    class="veg-icon">
                <?php } else if ($value->food_type == '2') { ?>
                <img src="<?= base_url() . 'public/frontend/assets/images/non-vage-icon.svg' ?>" alt="nonveg-icon"
                    class="nonveg-icon">
                <?php } ?>
                <img src=<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $image ?>>
            </div>
        </a>
        <div class="feature-detail">
            <div class="card-icon">
                <?php

                for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                <i class="fas fa-star"></i>
                <?php } ?>

                <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                <i class="fas fa-star blank-ratting"></i>
                <?php } ?>
                <!-- <i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i> -->
            </div>

            <a
                href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                <h5><?= $value->name ?></h5>
            </a>
            <h6><span
                    class="notranslate"><?= $this->siteCurrency ?></span><?= number_format((float)$value->discount_price, 2, '.', '') ?>
            </h6>

            <p>


                <?= ($value->varientQuantity > $value->limited_stock) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>


            </p>
        </div>

        <div class="feature-bottom-wrap">
            <div class="cart addcartbutton d-none" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>">
                <i class="fas fa-shopping-basket"></i>
            </div>
            <div class="new_add_to_cart <?= $d_none ?>">
                <button class="btn addcartbutton" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                    data-varient_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>">
                    <?= $this->lang->line('add to cart') ?>
                </button>
            </div>
            <div class="quantity-wrap <?= $d_show ?>">
                <button class="dec cart-qty-minus" data-product_weight_id=<?= $value->product_weight_id ?>><span
                        class="minus"><i class="fa fa-minus"></i></span></button>
                <input class="qty" type="text" name="" value="<?= $addQuantity ?>" data-product_id="<?= $value->id ?>"
                    data-weight_id="<?= $value->weight_id ?>" readonly>
                <button class="inc cart-qty-plus" data-product_weight_id="<?= $value->product_weight_id ?>"><span><i
                            class="fa fa-plus"></i></span></button>
            </div>
        </div>
    </div>
</div>
<!-- <div class="col-md-12" style="display:' <?= $display ?>">
	<button type="button" class="btn show-more" id="load_more" value="<?= $page ?>" data-ids="<?= json_encode($postdata) ?>">
		<?= $this->lang->line('Show More') ?>
	</button>
</div> -->
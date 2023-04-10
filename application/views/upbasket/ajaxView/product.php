<div class="techno-check">
    <input class="techno_checkbox" type="checkbox" id="8" value="8" />
    <div class="product-wrapper card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
        <div class="card-header">
            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                <!-- <img src="<?= $this->theme_base_url ?>/assets/images/feature-prodct-1.png" alt=""> -->
                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
            </a>
        </div>
        <div class="card-body">
            <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a></h3>
            <h4><?= ($value->quantity >= 25) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></h4>

            <div class="rate-dropdown">
                <!-- <a href="#" class="card-dropdown">500 gms <span><i class="fa-solid fa-angle-down"></i></span></a> -->

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
            <h6 class="rating">
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
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart
            </a>
            <div class="product-detail-quentity <?= $d_show ?>">
                <div class="qty-container">
                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>">
                    <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
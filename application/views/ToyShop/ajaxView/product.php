<!--  -->


<div class="product-listing-wrapper hot-products-wrap wow fadeInDown <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>"
    data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
    <div class="hot-products-img position-relative overflow-hidden ">

        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="" />
        <?php if ($value->quantity != '0') : ?>
        <p>
            <?php if ($value->quantity > $value->limited_stock) { ?>
            <?= $this->lang->line('Available(Instock)') ?>
            <?php } else { ?>
            <?= $this->lang->line('Limited Stock') ?>
            <?php } ?>
        </p>
        <?php endif ?>

        <?php if ($value->discount_per > '0') { ?>
        <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
        <?php } ?>
        <div class="hot-products-cart-wrap">
            <a href="javascript:;" class="addcartbutton <?= $d_none ?>"
                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                data-varient_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>"><svg width="22"
                    height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z"
                        stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75"
                        stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <a
                href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><svg
                    width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z"
                        stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>

            <div class="techno-check">

                <input class="techno_checkbox wishlist-icon" type="checkbox"
                    data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                    data-product_weight_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>"
                    <?= (in_array($value->product_weight_id, $wish_pid)) ? "checked" : "" ?>>
                <div class="stocks heart">
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z"
                            stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="hot-products-details">
        <a
            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
            <h5><?= $value->name ?></h5>
        </a>
        <div class="price-wrap d-flex">
            <p><span
                    class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . numberFormat($value->price) ?></strike></span>
            </p>
            <h6><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?></h6>
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
                <p>( <?= $value->ratting['rating'] ?> reviews )</p>
            </div>
        </div>

        <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
            <div class="qty-container">
                <button class="qty-btn-minus dec cart-qty-minus"
                    data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i
                        class="fa-solid fa-minus"></i></button>
                <input type="text" name="qty" value="<?= $addQuantity ?>" class="input-qty qty"
                    data-product_id="<?= $value->prod_id ?>" data-weight_id="<?= $value->product_weight_id ?>" readonly>
                <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_weight_id ?>"
                    type="button"><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>

    </div>
</div>
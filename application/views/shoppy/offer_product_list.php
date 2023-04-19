<div class="products-wrap pro-list-wrap mycustom-row">
  <!-- ---left-product-list--- -->
  <div class="show-div-wrapper">
    <div class="main-listing-wrapper">
      <?php
      foreach ($offer_varient_list as $key => $value) { ?>
        <div class="product-listing-wrapper mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
          <div class="product-card <?= ($value->available_quantity == '0') ? 'out-of-stock' : '' ?>">
            <?php
            if ($value->available_quantity == '0') { ?>
              <span> <?= $this->lang->line('out of stock') ?></span>
            <?php  } ?>

            <div class=" product-img-wrap">
              <div class="product-im">
                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                  <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                </a>
              </div>

              <?php if ($value->available_quantity != '0') : ?>
                <p>In Stock</p>
              <?php endif ?>
              <?php if ($value->new_percentage > '0') { ?>
                <span class="discnt"><?= $value->new_percentage . ' % off' ?></span>
              <?php } ?>
            </div>
            <div class="product-content">
              <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>">
                <h5><?= $value->name ?></h5>


                <div class="product-discount notranslate">
                  <h4> <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?></h4>
                  <p class="<?= ($value->new_percentage > 0) ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->price ?></p>
                </div>
              </a>
              <div class="rating-starts">
                <div class="rating stars3_5">
                  <?php for ($j = 1; $j <= $value->rating['rating']; $j++) { ?>
                    <span class="star"></span>
                  <?php } ?>

                  <?php for ($i = 1; $i <= 5 - $value->rating['rating']; $i++) { ?>
                    <span class="star star-active"></span>
                  <?php } ?>
                </div>
                <div><span>(<?= $value->rating['rating'] ?>)</span></div>
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
                <button type="button" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_varient_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                  Cart
                </button>
              </div>
              <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                <div class="qty-container">
                  <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                  <input type="text" name="qty" value="1" class="input-qty qty" value="<?= $addQuantity ?>" data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>">
                  <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_varient_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                </div>
              </div>
            </div>

          </div>

        </div>

      <?php } ?>
    </div>
  </div>

</div>
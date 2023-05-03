 <div class="product-listing-wrapper mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
     <div class="product-card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
         <?php
            if ($value->quantity == '0') { ?>
             <span> <?= $this->lang->line('out of stock') ?></span>
         <?php  } ?>

         <div class=" product-img-wrap">
             <div class="product-im">
                 <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                     <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                 </a>
             </div>

             <?php if ($value->quantity != '0') : ?>
                 <p><?php if ($value->quantity > $value->limited_stock) { ?>
                         <?= $this->lang->line('Available(Instock)') ?>
                     <?php } else { ?>
                         <?= $this->lang->line('Limited Stock') ?>
                     <?php } ?></p>

             <?php endif ?>
             <?php if ($value->discount_per > '0') { ?>
                 <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
             <?php } ?>
         </div>
         <div class="product-content">
             <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                 <h5><?= $value->name ?></h5>


                 <div class="product-discount notranslate">
                     <h4> <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                     </h4>
                     <p class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>">
                         <?= $this->siteCurrency . ' ' . $value->price ?></p>
                 </div>
             </a>
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
             <div>

                 <button type="button" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span> <?= $this->lang->line('add to cart'); ?>

                 </button>
             </div>
             <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                 <div class="qty-container">
                     <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                     <input type="text" name="qty" class="input-qty qty" value="<?= $addQuantity ?>" data-product_id="<?= $value->prod_id ?>" data-weight_id="<?= $value->product_weight_id ?>">
                     <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                 </div>
             </div>
         </div>

     </div>

 </div>
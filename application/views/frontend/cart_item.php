<section class="breadcrumb-menu breadcrumb-cart">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?=$this->lang->line('home')?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('cart')?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- =================CART SECTION================= -->
<?php $CI = &get_instance(); ?>
<?php if ($this->session->userdata('user_id') == '') {
?>
<section class="p-100 bg-cream">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrapper cart-item-table-wrapper">
                    <table class="table cart-table table-reponsive">
                        <thead>
                            <tr>
                                <th class="w-45"><?=$this->lang->line('Product')?></th>
                                <th class="w-20 text-center"><?=$this->lang->line('Quantity')?></th>
                                <th class="w-20 text-center"><?=$this->lang->line('price')?></th>
                                <th class="w-5 text-center"><?=$this->lang->line('Total')?></th>
                                <th class="w-10 text-center"><?=$this->lang->line('Action')?></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                $CI = &get_instance();
                $CI->load->model('common_model');
                $default_product_image = $CI->common_model->default_product_image();
                ?>
                <?php
                if (isset($_SESSION['My_cart']) && $_SESSION['My_cart'] != '') {
                   
                  foreach ($_SESSION['My_cart'] as $key => $value) {
                    $CI->load->model('frontend/product_model');
                    $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
                    echo "<pre>";
                    print_r($product);
                    
                    $CI->load->model('api_v3/common_model','co_model');
                    $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));
                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                      $product[0]->discount_price = $product[0]->without_gst_price;
                    }   
                    
                    $product[0]->image = preg_replace('/\s+/', '%20', $product[0]->image);
                    if (!file_exists('public/images/' . $CI->folder . 'product_image/' . $product[0]->image) || $product[0]->image == '') {
                      if (strpos($product[0]->image, '%20') === true || $product[0]->image == '') {
                        $product[0]->image = $default_product_image;
                      }
                    }

                    $calculation_price = $product[0]->discount_price * $value['quantity'];;
                ?>
                            <tr id="<?= $value['product_id'] . '_' . $value['product_weight_id'] ?>">
                                <td>
                                    <div class="cart-item">
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value["product_id"]) . '/' . $this->utility->safe_b64encode($value["product_weight_id"]) ?>">
                                            <div class="cart-img-wrap"> 
                                            <?php if(isset($value['food_type']) && $value['food_type'] == '1'){ ?>
                                                <img src="<?=base_url().'public/frontend/assets/images/vage-icon.svg'?>" alt="veg-icon" class="veg-icon">
                                            <?php }else if(isset($value['food_type']) && $value['food_type'] == '2'){ ?>
                                                <img src="<?=base_url().'public/frontend/assets/images/non-vage-icon.svg'?>" alt="nonveg-icon" class="nonveg-icon">
                                            <?php } ?>
                                                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $product[0]->image ?>">
                                            </div>
                                        </a>
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value["product_id"]) . '/' . $this->utility->safe_b64encode($value["product_weight_id"]) ?>">
                                            <div class="cart-detail-wrap">
                                                <h6><?= $value['product_name'] ?></h6>
                                                <p><span><?= $value['quantity'] ?></span>X<?= $product[0]->discount_price ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="quantity-wrap">
                                        <button class="decrement cart-qty-minus_c"
                                            data-product_weight_id="<?= $value['product_weight_id'] ?>">
                                            <span class="minus"><i class="fa fa-minus"></i></span>
                                        </button>
                                        <input class="qty" type="text" name="" value="<?= $value['quantity'] ?>"
                                            data-product_id="<?= $value['product_id'] ?>"
                                            data-weight_id="<?= $value['weight_id'] ?>" readonly>
                                        <button class="increment cart-qty-plus_c"
                                            data-product_weight_id="<?= $value['product_weight_id'] ?>">
                                            <span><i class="fa fa-plus"></i></span>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <?php if ($value['discount_per'] > 0) : ?>
                                    <p class="discount-on notranslate">
                                        <span class="notranslate"><?= $this->siteCurrency ?></span><?= $product[0]->price ?>
                                    </p>
                                    <?php endif ?>
                                    <p class="notranslate"><span class="notranslate"><?= $this->siteCurrency ?></span><?= $product[0]->discount_price ?></p>
                                </td>
                                <td class="text-center">
                                    <p class="notranslate">
                                        <span  class="notranslate">
                                            <?= $this->siteCurrency ?>
                                        </span>
                                        <span class="total notranslate">
                                            <?= number_format((float)$calculation_price, 2, '.', '') ?>
                                        </span>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <span class="delete-item removeCartItem"
                                        data-product_id="<?= $value['product_id'] ?>"
                                        data-product_weight_id="<?= $value['product_weight_id'] ?>"
                                        data-weight_id="<?= $value['weight_id'] ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <input type="button" class="btn" id="ClearCart" value="<?=$this->lang->line('clear cart')?>">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="cart-total-wrap">
                    <div class="cart-total-heading">
                        <h6> <span><i class="fas fa-shopping-basket"></i> </span> <?=$this->lang->line('Cart Total')?></h6>
                    </div>
                    <div class="cart-total-innerbox">
                        <div class="total-count">
                            <h6><?=$this->lang->line('Sub Total')?></h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p class="notranslate">
                                    <span><?= $this->siteCurrency ?>
                                    </span> <span id="final_subtotal"><?= getMycartSubtotal() ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="total-count">
                            <h6><?=$this->lang->line('Delivery Charges')?></h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p id="delivery_charge" class="notranslate"><span><?= $this->siteCurrency ?></span>

                                    <?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?>
                                </p>
                            </div>
                        </div>
                        <div class="total-count">
                            <h6><?=$this->lang->line('Total')?> </h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p id="total"class="notranslate" ><span><?= $this->siteCurrency ?></span>
                                    <?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ?  number_format(getMycartSubtotal() + $calc_shiping, 2, '.', '') : getMycartSubtotal(); ?>
                                </p>
                            </div>
                        </div>
                        <p class="instruc" style="display: none"> In publishing and graphic design, Lorem ipsum is a
                            placeholder text commonly used to demonstrate the visual form of a document or a typeface
                            without relying on meaningful content. </p>
                        <a href="<?= base_url() . 'checkout' ?>" class="btn"><?=$this->lang->line('Proceed to checkout')?></a>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="" id="shipingCharge"
            value="<?= ($calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?>">
    </div>
</section>
<?php } else { ?>
<section class="p-100 bg-cream">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrapper cart-item-table-wrapper">
                    <table class="table cart-table table-reponsive">
                        <thead>
                            <tr>
                                <th class="w-45"><?=$this->lang->line('Product')?></th>
                                <th class="w-20 text-center"><?=$this->lang->line('Quantity')?></th>
                                <th class="w-20 text-center"><?=$this->lang->line('price')?></th>
                                <th class="w-5 text-center"><?=$this->lang->line('Total')?></th>
                                <th class="w-10 text-center"><?=$this->lang->line('Action')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($my_cart as $key => $value) {
                  $calculation_price = $value->discount_price * $value->quantity;
                ?>
                            <tr id="<?= $value->product_id . '_' . $value->product_weight_id ?>">
                                <td>
                                    <div class="cart-item">
                                        <div class="wishlist-icon"
                                            data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>"
                                            data-product_weight_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                            <i
                                                class="far fa-heart  <?= (in_array($value->product_weight_id, $wish_pid)) ? 'fas .fa-heart' : '' ?>"></i>
                                        </div>
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                            <div class="cart-img-wrap">
                                            <?php if(isset($value->food_type) && $value->food_type == '1'){ ?>
                                                <img src="<?=base_url().'public/frontend/assets/images/vage-icon.svg'?>" alt="veg-icon" class="veg-icon">
                                            <?php }else if(isset($value->food_type) && $value->food_type == '2'){ ?>
                                                <img src="<?=base_url().'public/frontend/assets/images/non-vage-icon.svg'?>" alt="nonveg-icon" class="nonveg-icon">
                                            <?php } ?>
                                                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>">
                                            </div>
                                        </a>
                                        <a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                            <div class="cart-detail-wrap">
                                                <h6><?= $value->product_name ?></h6>
                                                <p><span><?= $value->quantity ?></span>X<?= $value->discount_price ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="quantity-wrap">
                                        <button class="decrement cart-qty-minus_c"
                                            data-product_weight_id="<?= $value->product_weight_id ?>">
                                            <span class="minus"><i class="fa fa-minus"></i></span>
                                        </button>
                                        <input class="qty" type="text" name="" value="<?= $value->quantity ?>"
                                            data-product_id="<?= $value->product_id ?>"
                                            data-weight_id="<?= $value->weight_id ?>" readonly>
                                        <button class="increment cart-qty-plus_c"
                                            data-product_weight_id="<?= $value->product_weight_id ?>">
                                            <span><i class="fa fa-plus"></i></span>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <?php if ($value->discount_per > 0) : ?>
                                    <p class="discount-on notranslate"><span><?= $this->siteCurrency ?></span><?= $value->price ?>
                                    </p>
                                    <?php endif ?>
                                    <p class="notranslate"><span><?= $this->siteCurrency ?></span><?= $value->discount_price ?></p>
                                </td>
                                <td class="text-center">
                                    <p class="notranslate">
                                        <span>
                                            <?= $this->siteCurrency ?>
                                        </span>
                                        <span class="total notranslate">
                                            <?= number_format((float)$calculation_price, 2, '.', '') ?>
                                        </span>
                                    </p>
                                </td>

                                <td class="text-center">
                                    <span class="delete-item removeCartItem" data-product_id="<?= $value->product_id ?>"
                                        data-product_weight_id="<?= $value->product_weight_id ?>"
                                        data-weight_id="<?= $value->weight_id ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <input type="button" class="btn" id="ClearCart" value="<?=$this->lang->line('clear cart')?>">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="cart-total-wrap">
                    <div class="cart-total-heading">
                        <h6> <span><i class="fas fa-shopping-basket"></i> </span> <?=$this->lang->line('Cart Total')?></h6>
                    </div>
                    <div class="cart-total-innerbox">
                        <div class="total-count">
                            <h6><?=$this->lang->line('Sub Total')?></h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p class="notranslate">
                                    <span><?= $this->siteCurrency ?>
                                    </span> <span id="final_subtotal"><?= getMycartSubtotal() ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="total-count">
                            <h6><?=$this->lang->line('Delivery Charges')?></h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p id="delivery_charge" class="notranslate"><span><?= $this->siteCurrency ?></span>
                                    <?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?>
                                </p>
                            </div>
                        </div>
                        <div class="total-count">
                            <h6><?=$this->lang->line('Total')?></h6>
                            <div class="price-seperator"> <span class="seperator">:</span>
                                <p id="total" class="notranslate"><span><?= $this->siteCurrency ?></span>
                                    <?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ?  number_format(getMycartSubtotal() + $calc_shiping, 2, '.', '') : getMycartSubtotal(); ?>
                                </p>
                            </div>
                        </div>

                        <p class="instruc" style="display: none"> In publishing and graphic design, Lorem ipsum is a
                            placeholder text commonly used to demonstrate the visual form of a document or a typeface
                            without relying on meaningful content. </p>
                        <a href="<?= base_url() . 'checkout' ?>" class="btn"><?=$this->lang->line('Proceed to checkout')?></a>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="" id="shipingCharge"
            value="<?= ($calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?>">
    </div>
</section>
<?php } ?>
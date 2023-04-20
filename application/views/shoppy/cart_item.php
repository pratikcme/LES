<section class="hero-section common-banner-bg login-section">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1>Shop Cart</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Shop Cart') ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>


<!-- ------------shop-cart------------ -->
<section class="shop-cart-seciton p-100">
  <div class="container">
    <div class="row">
      <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0" data-wow-offset="0">
        <div class="cart-product-detail">
          <table id="table-two-axis" class="two-axis">
            <thead class="head-title">
              <tr>
                <th colspan="2">product</th>
                <th>price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <div>
              <?php $CI = &get_instance();
              $CI = &get_instance();
              $CI->load->model('common_model');
              $default_product_image = $CI->common_model->default_product_image();
              ?>
              <?php if ($this->session->userdata('user_id') == '') { ?>
                <?php if (isset($_SESSION['My_cart']) && $_SESSION['My_cart'] != '') {

                ?>

                  <?php foreach ($_SESSION['My_cart']  as $key => $value) {

                    $CI->load->model('frontend/product_model');
                    $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);

                    $CI->load->model('api_v3/common_model', 'co_model');
                    $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));
                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                      $product[0]->discount_price = $product[0]->without_gst_price;
                    }

                    $product[0]->image = preg_replace('/\s+/', '%20', $product[0]->image);
                    if (!file_exists('public/images/' . $CI->folder . 'product_image/' . $product[0]->image) || $product[0]->image == '') {
                      if (strpos($product[0]->image, '%20') === true || $product[0]->image == '') {
                        $product[0]->image = $default_product_image;
                      } else {
                        $product[0]->image = $default_product_image;
                      }
                    }
                    $calculation_price = $product[0]->discount_price * $value['quantity'];;
                  ?>
                    <tbody class="product-tables">
                      <tr>
                        <td>
                          <div class="cart-detail-img">
                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value["product_id"]) . '/' . $this->utility->safe_b64encode($value["product_weight_id"]) ?>">
                              <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $product[0]->image ?>" alt="">
                            </a>
                          </div>
                        </td>
                        <td>
                          <div class="cart-detail-text">
                            <h4><?= $value['product_name'] ?></h4>
                          </div>
                        </td>
                        <td>
                          <div class="cart-price-text cart-price">

                            <span class="disc-throw <?= ($value['discount_per'] > 0) ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value['product_price'] ?></span>
                            <h3><?= $this->siteCurrency . '' . number_format((float)$value['discount_price'], 2, '.', '') ?></h3>

                          </div>
                        </td>
                        <td>
                          <!-- -----counter-product-- -->
                          <div class="product-detail-quentity">
                            <div class="qty-container">
                              <button id="counter-decrement" class="decrement qty-btn-minus cart-qty-minus_c" data-product_weight_id="<?= $value['product_weight_id'] ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                              <input id="counter-value" type="text" name="qty" value="<?= $value['quantity'] ?>" class="input-qty value qty quantity-counter" data-product_id="<?= $value['product_id'] ?>" data-weight_id="<?= $value['weight_id'] ?>" readonly />
                              <button id="counter-increment" class="increment qty-btn-plus cart-qty-plus_c" data-product_weight_id="<?= $value['product_weight_id'] ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="cart-price-text cart-cross">
                            <h3 class="notranslate"><?= $this->siteCurrency . '' . number_format((float)$calculation_price, 2, '.', '') ?></h3>
                            <input type="hidden" class="total" value="<?= number_format((float)$calculation_price, 2, '.', '') ?>">
                            <a href="#" class="removeCartItem" data-product_id="<?= $value['product_id'] ?>" data-product_weight_id="<?= $value['product_weight_id'] ?>" data-weight_id="<?= $value['weight_id'] ?>"><i class="fa-solid fa-xmark"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  <?php } ?>
                <?php } ?>
              <?php } else { ?>
                <?php foreach ($my_cart as $key => $value) {
                  $calculation_price = $value->discount_price * $value->quantity;
                ?>
                  <tbody class="product-tables">
                    <tr>
                      <td>
                        <div class="cart-detail-img">
                          <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                            <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt=""></a>
                        </div>
                      </td>
                      <td>
                        <div class="cart-detail-text">
                          <h4><?= $value->product_name ?></h4>
                        </div>
                      </td>
                      <td>
                        <div class="cart-price-text cart-price">
                          <span class="disc-throw <?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->product_price ?></span>
                          <h3><?= $this->siteCurrency . '' . number_format((float)$value->discount_price, 2, '.', '') ?></h3>
                        </div>
                      </td>
                      <td>
                        <!-- -----counter-product-- -->
                        <div class="product-detail-quentity">
                          <div class="qty-container">
                            <button id="counter-decrement" class="decrement qty-btn-minus cart-qty-minus_c" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                            <input id="counter-value" type="text" name="qty" value="<?= $value->quantity ?>" class="input-qty value qty quantity-counter" data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>" readonly />
                            <button id="counter-increment" class="qty-btn-plus increment cart-qty-plus_c" type="button" data-product_weight_id="<?= $value->product_weight_id ?>"><i class="fa-solid fa-plus"></i></button>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="cart-price-text cart-cross">
                          <h3 class="notranslate"><?= $this->siteCurrency . '' . number_format((float)$calculation_price, 2, '.', '') ?></h3>
                          <input type="hidden" class="total" value="<?= number_format((float)$calculation_price, 2, '.', '') ?>">
                          <a href="#" class="removeCartItem" data-product_id="<?= $value->product_id ?>" data-product_weight_id="<?= $value->product_weight_id ?>" data-weight_id="<?= $value->weight_id ?>"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
              <?php } ?>
            </div>

          </table>
          <div>
            <button type="button" class="lg-btn clear-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Clear Cart</button>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0" data-wow-offset="0">
        <div class="cart-totals-part">
          <table>
            <thead class="head-title">
              <tr>
                <th colspan="2">Cart totals</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="cart-total-text-1"><?= $this->lang->line('Sub Total') ?></td>
                <td id="finalSubtotal" class="cart-total-text-2 notranslate"><?= $this->siteCurrency ?> <?= getMycartSubtotal() ?></td>
              </tr>
              <tr>
                <td class="cart-total-text-1"><?= $this->lang->line('Delivery Charges') ?></td>
                <td id="delivery_charge" class="cart-total-text-2 notranslate"><?= $this->siteCurrency ?> <?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?></td>
              </tr>
              <tr>
                <td class="cart-total-text-1"><?= $this->lang->line('Total') ?></td>
                <td id="total" class="cart-total-text-2 notranslate"><span><?= $this->siteCurrency ?> </span><?= (isset($calc_shiping) && $calc_shiping != 'NotInRange') ?  number_format(getMycartSubtotal() + $calc_shiping, 2, '.', '') : getMycartSubtotal(); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href="<?= base_url() . 'checkout' ?>" class="proceed-checkout-btn"><?= $this->lang->line('Proceed to checkout') ?></a>
      </div>
    </div>
  </div>
</section>
<input type="hidden" name="" id="shipingCharge" value="<?= ($calc_shiping != 'NotInRange') ? $calc_shiping : '0.00' ?>">



<!-- Modal -->
<div class="modal common-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Do you Want to Clear Cart?</h3>

        <div class="reset-btn">
          <button type="submit" id="ClearCart" class="yes-btn">Yes</button>
          <button type="button" class="no-btn" data-dismiss="modal">No</button>


        </div>
      </div>
    </div>
  </div>
</div>
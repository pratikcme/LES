<style type="text/css">
    .add-new-address-wrapper .form-control {
        padding: 0;
    }

    #RegisterForm .fas.fa-phone {
        transform: rotate(90deg);
    }

    .loader-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        position: fixed;
        position: 0.3;
        z-index: 2222;
        left: 0;
        right: 0;
        top: 0;
    }

    input:focus {
        color: #666 !important;
    }

    .form-control:focus {
        color: #666 !important;
    }

    .ui-widget.ui-widget-content {
        width: 100% !important;
    }

    .dots {
        position: relative;
        width: 100px;
        height: 100px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .dot {
        width: 20px;
        height: 20px;
        background-color: #fff;
    }

    .dot2 .dot:nth-child(1) {
        animation-delay: 0s;
    }

    .dot2 .dot:nth-child(2) {
        animation-delay: 0.4s;
    }

    .dot2 .dot:nth-child(3) {
        animation-delay: 0.8s;
    }

    .dot2 .dot {
        border-radius: 50%;
        animation: topDown2 1.2s linear forwards infinite;
    }

    @keyframes topDown2 {

        0%,
        100% {
            transform: translateY(0px);
        }

        25% {
            transform: translateY(20px);
            background-color: #fec641;
        }

        75% {
            transform: translateY(-20px);
            background-color: #22bdb6;
        }
    }

    label.error {
        color: red;
        position: relative;
        top: -17px;
    }

    label.error.mobile_verfication {
        color: red;
        position: relative;
        top: 0px;
    }

    .maxHeight {
        height: auto !important;
    }

    .add-new-address-wrapper .address-form {
        padding-bottom: 30px;
    }

    .input-wrapper select.country_code {
        border: none;
        color: #666;
        font-size: 20px;
        font-weight: bold;
        margin-right: 5px;
        width: 75px;
    }
</style>
<section class="loader-main d-none">
    <div class="loader-wrapper">
        <div class="dots dot2">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</section>
<!--=================BREADCRUMB SECTION=================  -->
<?php if (isset($Host)) { ?>
    <script type="application/javascript" src="<?= $Host . '/merchantpgpui/checkoutjs/merchants/' . $MID ?>.js"></script>
<?php } ?>
<section class="breadcrumb-menu breadcrumb-cart">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('checkout') ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- =================CART SECTION================= -->
<section class="p-100 bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrapper billing-wrapper">
                    <div class="billing-header">
                        <h4><?= $this->lang->line('Billing Details') ?></h4>
                        <div class="selfpickup-wrap">
                            <?php if (isset($selfPickEnable) && $selfPickEnable == '1') { ?>
                                <div class="address-chk-box dn-btn">
                                    <label> <?= $this->lang->line('self pickup') ?>
                                        <input type="checkbox" id="isSelfPickup" class="default_check" <?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  "checked" : "" ?>>
                                        <span class="blue"></span>
                                    </label>
                                </div>
                            <?php } ?>
                            <?php if (!empty($userAddress) && $userAddress[0]->user_gst_number != '') { ?>
                                <div class="address-chk-box dn-btn">
                                    <label> <?= $this->lang->line('Use GST Number') ?>
                                        <input type="checkbox" id="user_gst_number" class="default_check" value="<?= ($userAddress[0]->user_gst_number != '') ? $userAddress[0]->user_gst_number : "" ?>">
                                        <span class="blue"></span>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>




                    </div>

                    <button class="billing-btns active"><?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  $this->lang->line("Pickup Address") : $this->lang->line('Delivery Address') ?></button>
                    <div class="panel full_height address_panel" style="max-height: 100%;">
                        <div class="add-new-address-wrapper" id="billing-new-add">
                            <div class="new-add-header">
                                <p><?= $this->lang->line('Add new address') ?></p>
                            </div>
                            <form method="post" id="RegisterForm" action="<?= base_url() . 'users_account/users/add_address' ?>" class="address-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-wrapper">
                                            <span><i class="far fa-user-circle"></i></span>
                                            <input type="text" class="fname" name="fname" placeholder="<?= $this->lang->line('Full Name') ?>" autocomplete="off">
                                        </div>
                                        <label for="fname" class="error"></label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-phone"></i></span>
                                            <input type="text" class="mob_no" name="phone" placeholder="<?= $this->lang->line('Mobile number') ?>" autocomplete="off">
                                        </div>
                                        <label for="phone" class="error"><?= @form_error('phone') ?></label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-home"></i></span>
                                            <input type="text" id="departure_address" onFocus="initAutocomplete('departure_address')" placeholder="<?= $this->lang->line('Enter Location') ?>" name="location" maxlength="255" value="<?php echo set_value('location'); ?>" autocomplete="off">
                                            <?php echo form_error('location'); ?>
                                        </div>
                                        <label for="departure_address" class="error"></label>
                                        <input type="hidden" id="departure_latitude" name="latitude" placeholder="Latitude" value="<?php echo set_value('latitude'); ?>" />
                                        <input type="hidden" id="departure_longitude" name="longitude" placeholder="Longitude" value="<?php echo set_value('longitude'); ?>" />
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-landmark"></i></span>
                                            <input type="text" class="landmark" name="landmark" placeholder="<?= $this->lang->line('Landmark') ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-globe-americas"></i></span> <input type="text" name="city" id="city" placeholder="<?= $this->lang->line('city') ?>" autocomplete="off">
                                        </div>
                                        <label for="city" class="error"><?= @form_error('city') ?></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-globe-americas"></i></span>
                                            <input type="text" name="state" id="state" placeholder="<?= $this->lang->line('State') ?>" autocomplete="off">
                                        </div>
                                        <label for="state" class="error"><?= @form_error('state') ?></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-globe-americas"></i></span>
                                            <input type="text" name="country" placeholder="country" id="country">

                                        </div>
                                        <label for="country" class="error"><?= @form_error('country') ?></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-hashtag"></i></span>
                                            <input type="text" name="pincode" class=" pincode" id="pincode" placeholder="<?= $this->lang->line('pincode') ?>" autocomplete="off">
                                        </div>
                                        <label for="pincode" class="error"></label>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-wrapper add-text">
                                            <span><i class="fas fa-list-alt"></i></span>
                                            <textarea name="address" placeholder="<?= $this->lang->line('Enter Address') ?>" id="address" class=" add-textarea" autocomplete="off"></textarea>
                                        </div>
                                        <label for="address" class="error"></label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" id="addAddress" class="btn save-btn"><?= $this->lang->line('Save') ?></button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button class="btn cancel-btn"><?= $this->lang->line('Cancel') ?></button>
                                    </div>
                                    <input type="hidden" name="redirect_url" value="<?= base_url() . 'checkout' ?>">
                                </div>
                            </form>
                        </div>
                        <div class="address-wrapper" id="billing-add">
                            <ul>
                                <?php foreach ($get_address as $key => $value) : ?>
                                    <li>
                                        <div class="address-list">
                                            <div class="address-title">
                                                <span><i class="fas fa-home"></i> </span>
                                                <h6>Address</h6>
                                            </div>
                                            <?php if ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') { ?>
                                                <div class="address-operation">
                                                    <div class="address-chk-box <?= ($value->status != '1') ? 'is_default' : '' ?>" data-id='<?= $this->utility->safe_b64encode($value->id) ?>'>
                                                        <label> Defualt
                                                            <input type="checkbox" value="<?= $key ?>" class="default_check chek" <?= ($value->status == '1') ? 'checked' : '' ?>>
                                                            <span class="blue"></span>
                                                        </label>
                                                    </div>
                                                    <span class="edit_address" data-id='<?= $this->utility->safe_b64encode($value->id) ?>'>
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="user-detail">
                                            <h6><?= $value->name ?></h6>
                                            <span></span>
                                            <?php if ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') { ?>
                                                <h6><?= $value->phone ?></h6>
                                        </div>
                                        <p><?= $value->address . '<br>' . $value->city . ',' . $value->state . ' ' . $value->country ?>
                                        </p>
                                        <?= ($value->landmark != '') ? '<p>Landmark :- ' . $value->landmark . '</p>' : ''; ?>
                                        <p>pincode :- <?= $value->pincode ?></p>
                                    <?php } else { ?>
                                        <h6>+91 <?= $value->phone_no ?></h6>
                        </div>
                        <p><?= $value->address ?> </p>
                        <!-- <p><?= $value->location ?> </p> -->
                    <?php } ?>
                    </li>
                <?php endforeach ?>
                </ul>
                <?php if ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') { ?>
                    <div class="billing-btn">
                        <button class="btn add-new-address"><?= $this->lang->line('Add new address') ?></button>
                        <button class="btn btn-orange next-btn" id="nextButton" style="display: none">next</button>
                    </div>
                <?php } ?>
                    </div>
                </div>
                <?php if ($isDeliveryTimeDate == '1' || isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                    <button class="billing-btns active"><?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  $this->lang->line('Pickup') : $this->lang->line('Delivery')  ?>
                        <?= $this->lang->line('Time & Date') ?></button>
                <?php } ?>
                <div class="panel">
                    <div class="date-time-common">
                        <?php if ($isDeliveryTimeDate == '1' || isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                            <div class="date-wrap">
                                <div id="datepicker" class="datepicker"></div>
                            </div>
                        <?php } ?>
                        <div class="time-wrap">
                            <?php
                            if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                                <div class="time-box">
                                    <div class="time-title">
                                        <h6><?= $this->lang->line('Pickup Timing') ?></h6>
                                    </div>
                                    <div class="pickup_timming mt-3">
                                        <?= $selfPickupTimeChart[0]->selfPickupOpenClosingTiming ?>
                                    </div>

                                </div>
                            <?php } else { ?>
                                <?php if ($isDeliveryTimeDate == '1' || isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                                    <div class="time-box">
                                        <div class="time-title">
                                            <?php date_default_timezone_set('Asia/Kolkata'); ?>
                                            <h6><?= date('F,h:i a') ?></h6>
                                        </div>
                                        <div class="radio-wrap">
                                            <div class="row">
                                                <?php foreach ($time_slot as $key => $value) : ?>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <label class="radio-container"><?= $value->start_time ?> -
                                                            <?= $value->end_time ?>
                                                            <input type="radio" <?= ($value->id == $time_slot[0]->id) ? 'checked' : '' ?> class="time_slot_checked" name="time_slot" value="<?= $value->id ?>">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <!--        <div class="pay-btn">
                     <button class="btn" id="btnCheckSlot">Process To payment</button>
                  </div> -->
                </div>
                <button class="billing-btns active"><?= $this->lang->line('Payment Option') ?></button>
                <div class="panel" style="max-height: 191px;">
                    <div class="payment-wrapper">
                        <div class="payment-options">
                            <!--<div class="option-">
                            <label class="radio-container mb-0">Credit / Debit Card
                           <input class="pay-chk" type="radio" name="radio" value="3">
                           <span class="checkmark"></span>
                           </label> 
                        </div>-->
                            <?php if ($payment_option != '' && $isOnlinePayment == '1') { ?>
                                <div class="option-1">
                                    <label class="radio-container mb-0"><?= $this->lang->line('Credit/Debit Card') ?>
                                        <input id="credit" class="pay-chk" type="radio" name="radio" <?= ($isCOD == '0' && $isOnlinePayment == '1') ? 'checked' : '' ?> value="<?= $payment_option ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            <?php } ?>
                            <?php if ($isCOD == '1') { ?>
                                <div class="option-1">
                                    <label class="radio-container mb-0"><?= $this->lang->line('Cash On Delivery') ?>
                                        <input class="pay-chk" type="radio" <?= ($isCOD == '1' && $isOnlinePayment == '0') ? 'checked' : '' ?> name="radio" value="0">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <div id="payBtn_error" style="color: red"></div>
                        <?php if ($phone == '0' || $is_verify == '0') { ?>
                            <div class="pay-btn">
                                <button class="btn show-modal" id="verify"><?= $this->lang->line('Verify Mobile') ?></button>
                            </div>

                        <?php } else { ?>

                            <div class="pay-btn">
                                <button class="btn" id="payBtn"><?= $this->lang->line('Place order') ?></button>
                            </div>

                        <?php } ?>
                        <input type="hidden" id="applied_promo">
                    </div>
                    <div class="debit-wrapper">
                        <form>
                            <h6>Debit / Credit Card</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-wrapper">
                                        <span><i class="far fa-user-circle"></i></span>
                                        <input type="text" name="" placeholder="Card holder name*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-wrapper">
                                        <span><i class="fas fa-credit-card"></i></span>
                                        <input type="text" name="" placeholder="Card Number*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-wrapper select-wrapper">
                                        <span><i class="far fa-check-circle"></i></span>
                                        <p>Valid thru*</p>
                                        <select>
                                            <option>MM</option>
                                        </select>
                                        <p>/</p>
                                        <select>
                                            <option>YY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="cvv-wrap">
                                        <div class="input-wrapper">
                                            <span><i class="fas fa-landmark"></i></span>
                                            <input class="cvv*" type="text" name="" placeholder="cvv">
                                            <div class="cvv-info">
                                                <span><i class="fas fa-question-circle"></i></span>
                                            </div>
                                            <p class="css-detail">its 3 digit number back of your card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="netbanking-wrapper">
                        <form>
                            <h6>Net banking</h6>
                        </form>
                    </div>
                    <div class="cod-wrapper">
                        <form>
                            <h6>Cash On delivery</h6>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="cart-total-wrap">
                <input type="hidden" id="isShow" value="<?= $isShow[0]->display_price_with_gst == '1' ? "1" : "0" ?>">
                <div class="cart-total-heading">
                    <h6> <span><i class="fas fa-shopping-basket"></i> </span> <?= $this->lang->line('Order Summary') ?>
                    </h6>
                </div>
                <div class="cart-total-innerbox your-order-wrapper order-summary-box ">
                    <ul class="checkout-scroll">
                        <?php
                        $CI = &get_instance();
                        $CI->load->model('common_model');
                        $default_product_image = $CI->common_model->default_product_image();
                        if ($this->session->userdata('user_id') == '') {

                            if (isset($_SESSION['My_cart']) && $_SESSION['My_cart'] != '') {

                                foreach ($_SESSION['My_cart'] as $key => $value) {
                                    if (empty($value['image']) || !file_exists('public/images/' . $this->folder . 'product_image/' . $value['image'])) {
                                        $value['image'] = $default_product_image;
                                    } ?>

                                    <li id="<?= $value['product_id'] . '_' . $value['product_weight_id'] ?>">
                                        <div class="your-order-img-wrap">
                                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>">
                                                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value["image"] ?>">
                                            </a>
                                        </div>
                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>">
                                            <div class="your-order-detail-wrap">
                                                <h6><?= $value['product_name'] ?></h6>
                                                <p><?= $value['quantity'] ?> X <span class='notranslate'><?= $this->siteCurrency ?></span>
                                                    <?= $value['discount_price'] ?></p>
                                            </div>
                                        </a>
                                        <!-- <div class="cart-delete">
                           
                             <i class="fas fa-times-circle"></i>
                          </div> -->
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php foreach ($mycart as $key => $value) { ?>

                                <li id="<?= $value->product_id . '_' . $value->product_weight_id ?>">
                                    <div class="your-order-img-wrap">
                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                            <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>">
                                        </a>
                                    </div>
                                    <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                        <div class="your-order-detail-wrap">
                                            <h6><?= $value->product_name ?></h6>
                                            <p><?= $value->quantity ?> X <span class='notranslate'><?= $this->siteCurrency ?></span>
                                                <?= $value->discount_price ?></p>
                                        </div>
                                    </a>
                                </li>

                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <ul>
                        <li class="total-wrap">
                            <div class="total-count">
                                <h6><?= $this->lang->line('Sub Total') ?></h6>
                                <div class="price-seperator">
                                    <span class="seperator">:</span>
                                    <p>
                                        <span class='notranslate'><?= $this->siteCurrency ?></span>
                                        <span id="checkout_subtotal"><?= numberFormat($getMycartSubtotal) ?></span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="total-wrap">
                            <div class="total-count">
                                <h6><?= $this->lang->line('Tax (Gst)') ?></h6>
                                <div class="price-seperator">
                                    <span class="seperator">:</span>
                                    <p><span class='notranslate'><?= $this->siteCurrency ?></span> <span id="checkout_gst"><?= $TotalGstAmount ?></span></p>
                                </div>
                            </div>
                        </li>

                        <li class="total-wrap">
                            <div class="total-count">
                                <h6><?= $this->lang->line('Delivery Charges') ?></h6>
                                <div class="price-seperator">
                                    <span class="seperator">:</span>
                                    <p><span class='notranslate'><?= $this->siteCurrency ?></span>
                                        <?= (isset($calc_shiping) && is_numeric($calc_shiping)) ? number_format((float)$calc_shiping, 2, '.', '') : '0.00' ?>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <?php if ($shopping_based_discount > 0) { ?>
                            <li class="total-wrap">
                                <div class="total-count">
                                    <h6><?= $this->lang->line('Cart Discount') ?></h6>
                                    <div class="price-seperator">
                                        <span class="seperator">:</span>
                                        <p><span class='notranslate'><?= $this->siteCurrency ?></span> <span id="shoppingBasedDiscount"><?= $shopping_based_discount ?></span></p>
                                    </div>
                            </li>
                        <?php } ?>

                        <li class="total-wrap promocode-applied" style="display:none;">
                            <div class="total-count">
                                <h6><?= $this->lang->line('Promocode Discount') ?></h6>
                                <div class="price-seperator">
                                    <span class="seperator">:</span>
                                    <p><span class='notranslate'><?= $this->siteCurrency ?></span> <span id="promoAmount"></span></p>
                                </div>
                            </div>
                        </li>

                        <li class="total-wrap">
                            <div class="total-count">
                                <h6> <?= $this->lang->line('Total') ?></h6>
                                <div class="price-seperator">
                                    <span class="seperator">:</span>
                                    <p><span class='notranslate'><?= $this->siteCurrency ?></span>
                                        <span id="checkout_final">
                                            <?php
                                            if (isset($calc_shiping) && is_numeric($calc_shiping)) {

                                                $to = $getMycartSubtotal + $calc_shiping + $TotalGstAmount;
                                                $f_amount = $to - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2, '.', '');
                                            } else {

                                                $tot = $getMycartSubtotal + $TotalGstAmount;

                                                $f_amount = $tot - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2);
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <?php if (totalSaving() > '0.00') { ?>
                            <li class="saving">
                                <?php $totalSaving = totalSaving() + $shopping_based_discount; ?>
                                <p><?= $this->lang->line('You will save') ?> <span id='totalSaving' class='notranslate'><?= $this->siteCurrency . ' ' . $totalSaving ?></span>
                                    <?= $this->lang->line('on this order') ?></p>
                            </li>
                        <?php } ?>
                        <?php if ($shopping_based_discount == 0) { ?>
                            <li class="saving">
                                <input type="text" name="promocode" id="promocode" placeholder="<?= $this->lang->line('Enter Promocode') ?>">
                                <span class="error" id="promo_err"></span>
                                <button id="checkPromocode" class="btn btn-primary" type="button"><?= $this->lang->line('Apply') ?></button>
                            </li>
                        <?php } ?>

                        <li class="saving">
                            <h6> <img src="<?= base_url() . 'public/frontend/' ?>assets/images/shield.png">
                                <?= $this->lang->line('100 Genuine Products') ?></h6>
                        </li>
                        <li class="saving">
                            <h6> <img src="<?= base_url() . 'public/frontend/' ?>assets/images/secure-pay.png"><?= $this->lang->line('Secure Payments') ?>
                            </h6>
                        </li>
                        <li class="saving" id="gst_number" style="display: none">
                            <h6> <img src="<?= base_url() . 'public/frontend/' ?>assets/images/tax.png">
                                GST -
                                <?= ($userAddress[0]->user_gst_number != '') ? $userAddress[0]->user_gst_number : "" ?>
                            </h6>
                        </li>
                        <li class="saving">
                            <a href="<?= base_url() . 'home' ?>" class="btn btn-orange">
                                <?= $this->lang->line('Cancel') ?>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="" id="s_charge" value="<?= $this->utility->safe_b64encode($calc_shiping) ?>">
    <input type="hidden" name="" id="shipping_charge" value="<?= (isset($calc_shiping) && $calc_shiping != '') ? number_format((float)$calc_shiping, 2, '.', '') : '0.00' ?>">
    <input type="hidden" name="" id="AddressNotInRange" value="<?= $AddressNotInRange ?>">
    <input type="hidden" name="" id="checkAddress" value="<?= (!empty($userAddress) ? "1" : "0") ?>">
    <input type="hidden" name="" id="CheckisSelfPickup" value="<?= ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') ? "0" : "1" ?>">

    </div>
    <?php if ($GatewayType == '1') { ?>
        <form name='razorpayform' action="<?php echo base_url() . 'checkout/verify'; ?>" method="POST">
            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
        </form>
    <?php } elseif ($GatewayType == '2') { ?>
        <input type="hidden" name="publishableKey" id="publishableKey">

        <form id="stipeForm" action="<?php echo base_url() . 'checkout/stripepost'; ?>" method="post">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>" data-amount="<?= $amount ?>" data-name="<?= $this->siteTitle ?>" data-description="<?= $this->siteTitle ?>" data-image="<?= $this->siteLogo ?>" data-currency="<?= $currency_code ?>" data-email="<?= $user_email ?>">
            </script>
        </form>

    <?php } else { ?>
        <!-- <div id="paytm-checkoutjs" style="display: none"></div> -->
    <?php } ?>
    <script>

    </script>
    <input type="hidden" id="razerData" data-json='<?= $data ?>'>
    <input type="hidden" id="paytm" data-json='<?= $paytm ?>'>
</section>


<script type="text/javascript">
    function onScriptLoad(txnToken, orderId, amount) {
        // console.log(orderId);
        var config = {
            "root": "",
            "flow": "DEFAULT",
            "merchant": {
                "name": '<?= $this->siteTitle ?>',
                "logo": '<?= $this->siteLogo ?>'
            },
            "style": {
                "headerBackgroundColor": "#8dd8ff",
                "headerColor": "#3f3f40"
            },
            "data": {
                "orderId": orderId,
                "token": txnToken,
                "tokenType": "TXN_TOKEN",
                "amount": amount,
            },
            "handler": {
                "notifyMerchant": function(eventName, data) {
                    if (eventName == 'SESSION_EXPIRED') {
                        alert("Your session has expired!!");
                        location.reload();
                    }
                }
            }
        };

        if (window.Paytm && window.Paytm.CheckoutJS) {
            // console.log('in');
            // initialze configuration using init method
            window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                console.log('Before JS Checkout invoke');
                // after successfully update configuration invoke checkoutjs
                window.Paytm.CheckoutJS.invoke();
            }).catch(function onError(error) {
                console.log("Error => ", error);
            });
        }
    }
</script>

<!-- The Modal -->
<div class="modal" id="order_success">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <div>
                    <h3><?= $this->lang->line('thanks for shopping') ?></h3>
                </div>
                <div class="my-3">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <!-- <div class="my-3">
                <img src="assets/images/bag.png" class="bag" alt="">
            </div> -->
                <div>
                    <h5>order placed successfully</h5>
                    <p id="orderId"></p>
                </div>
                <div>
                    <a href="<?= base_url() . 'home' ?>" class="shopping_btn"><?= $this->lang->line('continue shopping') ?></a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal mobileModal" id="mobileModal">

    <div class="modal-dialog">
        <div class="modal-content">
            <label for="country_code" class="error"></label>
            <h6 class="mobile-title"><?= $this->lang->line('Please Enter Mobile Number') ?></h6>
            <form id="mobileNumber" class="mobileNum-form" method="post" action="<?= base_url() . 'checkout/updateMobileNumber' ?>">
                <div class="input-wrapper m-0">
                    <span><i class="fas fa-mobile"></i></span>
                    <select name="country_code" class="country_code" required="">
                        <option value=""><?= $this->lang->line('Select Country Code') ?></option>
                        <?php foreach ($country_code as $key => $value) : ?>
                            <option value="<?= $key ?>" <?= ($key == '+91') ? "SELECTED" : "" ?>><?= $key ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile Number*" required="">
                </div>
                <label for="phoneNumber" class="error mobile_verfication"></label>

                <button type="submit" id="btnSubmit" class="s-btn"><?= $this->lang->line('Submit') ?></button>
            </form>
        </div>
    </div>
</div>

<div class="modal mobileModal" id="Otp">

    <div class="modal-dialog">
        <div class="modal-content">
            <h6 class="mobile-title"><?= $this->lang->line('Please enter Otp') ?></h6>
            <form id="OtpVerification" class="mobileNum-form" method="post" action="<?= base_url() . 'checkout/OtpVerification' ?>">
                <div class="input-wrapper m-0">
                    <span><i class="fas fa-mobile"></i></span>
                    <input type="text" name="otp" id="otp" placeholder="Please enter 4 digit otp*" maxlength="4" required="">
                </div>
                <label for="otp" class="error mobile_verfication"></label>
                <label id="invalid" style="display: none; color: red">Invalid Otp</label>
                <button type="submit" id="btnSubmit" class="s-btn"><?= $this->lang->line('Submit') ?></button>
            </form>
        </div>
    </div>
</div>
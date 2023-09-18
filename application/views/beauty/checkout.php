<!-- ----hero-section--- -->
<?php if (isset($Host)) { ?>
    <script type="application/javascript" src="<?= $Host . '/merchantpgpui/checkoutjs/merchants/' . $MID ?>.js"></script>
<?php } ?>
<section class="hero-section login-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('checkout') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('checkout') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ---------check-out-process--- -->
<section class="checkout-process-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="var(--secondary-color)" />
                </svg>
                <h2><?= $this->lang->line('Checkout Process') ?></h2>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                <div class="fill-detali-part">

                    <!-- ----------accordian-part------ -->
                    <div class="accordion-items">

                        <?php if (isset($selfPickEnable) && $selfPickEnable == '1' || !empty($userAddress) && $userAddress[0]->user_gst_number != '') { ?>
                            <div class="main-accordion">
                                <div class="delivery-method-wrap">
                                    <form class="accordion-content-2" action="">
                                        <?php if (isset($selfPickEnable) && $selfPickEnable == '1') { ?>
                                            <div class="form-check radio-outer-line">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="isSelfPickup" <?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  "checked" : "" ?>>
                                                <label class="form-check-label" for="isSelfPickup" style="text-transform:capitalize">
                                                    <?= $this->lang->line('self pickup') ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                        <?php if (!empty($userAddress) && $userAddress[0]->user_gst_number != '') { ?>
                                            <div class="form-check radio-outer-line">
                                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="user_gst_number">
                                                <label class="form-check-label" for="user_gst_number" style="text-transform:capitalize">
                                                    <?= $this->lang->line('Use GST Number') ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                            <div class="main-accordion">
                                <div class="accordion-heading"><?= $this->lang->line('Pickup Address') ?></div>
                                <div class="accordion-content accordion-content-3">
                                    <?php foreach ($get_address as $key => $value) {
                                        $status = ($value->status == '0') ? 'is_default ' : ''; ?>
                                        <div class="address-wrapper">
                                            <div class="address-text mt-3">
                                                <?php foreach ($get_address as $key => $value) { ?>
                                                    <h3> <?= $value->name ?> </h3>
                                                    <p><?= $value->address ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="main-accordion">
                                <div class="accordion-heading"><?= $this->lang->line('Delivery Address') ?></div>
                                <div class="accordion-content accordion-content-3">
                                    <?php foreach ($get_address as $key => $value) {
                                        $status = ($value->status == '0') ? 'is_default ' : ''; ?>
                                        <div class="address-wrapper">
                                            <div class="ship-check text-end">
                                                <div class="form-check">
                                                    <input class="form-check-input <?= $status ?>" data-id="
                                            <?= $this->utility->safe_b64encode($value->id) ?>" type="checkbox" <?= ($value->status == '1') ? 'checked' : '' ?>>
                                                    <label class="form-check-label" for="id2">
                                                        <?= $this->lang->line('Default') ?>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="address-text">
                                                <h3> <?= $value->name ?> </h3>
                                                <p> <?= $value->address ?> </p>
                                            </div>
                                            <div class="address-icons">
                                                <a href="javascript:" class="add-address-btn edit_address" data-id='<?= $this->utility->safe_b64encode($value->id) ?>'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="javascript:" class="delet-address-btn remove_address" data-id="<?= $this->utility->safe_b64encode($value->id) ?>">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="new-address text-end">
                                        <button type="button" class="new-add"><?= $this->lang->line('Add new address') ?></button>
                                    </div>

                                    <form method="post" id="RegisterForm" action="<?= base_url() . 'users_account/users/add_address' ?>" class="ship-address" autocomplete="off">
                                        <div class="text-end">
                                            <button type="button" class="ship-close cancel-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-sharp fa-regular fa-circle-xmark"></i></button>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="fname" class="form-label"><?= $this->lang->line('Full Name') ?><span>*</span></label>
                                                <input type="text" name="fname" class="form-control fname" id="fname" aria-describedby="fname" placeholder="<?= $this->lang->line('Full Name') ?>">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="text" class="form-label"><?= $this->lang->line('Mobile number') ?><span>*</span>
                                                </label>
                                                <input type="text" name="phone" class="form-control mob_no" id="text" aria-describedby="text" placeholder="<?= $this->lang->line('Mobile number') ?>">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="add" class="form-label"><?= $this->lang->line('Location') ?><span>*</span>
                                                </label>
                                                <input type="text" id="departure_address" onfocus="initAutocomplete('departure_address')" class="form-control pac-target-input" name="location" aria-describedby="add" placeholder="<?= $this->lang->line('Enter Location') ?>">
                                                <label for="departure_address" class="error" style="display: none;"></label>
                                                <input type="hidden" id="departure_latitude" name="latitude" placeholder="Latitude" value="">
                                                <input type="hidden" id="departure_longitude" name="longitude" placeholder="Longitude" value="">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control landmark" name="landmark" id="landmark" aria-describedby="add" placeholder="<?= $this->lang->line('Landmark') ?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="select-box">
                                                    <label for="city" class="form-label">Town / City <span>*</span>
                                                    </label>
                                                    <input type="text" name="city" class="form-control" id="city" aria-describedby="add" placeholder="<?= $this->lang->line('city') ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="select-box">
                                                    <label for="state" class="form-label"><?= $this->lang->line('State') ?>
                                                        <span>*</span>
                                                    </label>
                                                    <input type="text" name="state" class="form-control" id="state" aria-describedby="add" placeholder="<?= $this->lang->line('State') ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="select-box">
                                                    <label for="country" class="form-label"><?= $this->lang->line('Country') ?>
                                                        <span>*</span>
                                                    </label>
                                                    <input type="text" name="country" class="form-control" id="country" aria-describedby="add" placeholder="<?= $this->lang->line('country') ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="select-box">
                                                    <label for="pincode" class="form-label"><?= $this->lang->line('pincode') ?><span>*</span>
                                                    </label>
                                                    <input type="text" name="pincode" class="form-control pincode" id="pincode" aria-describedby="add" placeholder="<?= $this->lang->line('pincode') ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="select-box">
                                                    <label for="address" class="form-label"><?= $this->lang->line('Address') ?><span>*</span>
                                                    </label>
                                                    <textarea type="text" name="address" class="form-control pincode" id="address" placeholder="<?= $this->lang->line('Enter Address') ?>" autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="redirect_url" value="<?= base_url() . 'checkout' ?>">
                                            <div class="save-btn">
                                                <button type="submit" id="addAddress" class="signin-btn-green">
                                                    <?= $this->lang->line('Save') ?> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="main-accordion">
                            <div class="accordion-heading"><?= $this->lang->line('Delivery Schedule'); ?></div>
                            <div class="accordion-content  accordion-content-4">

                                <?php if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                                    <div class="time-picker">
                                        <div class="dates-day-wrapper">
                                            <div id="datepicker"></div>
                                        </div>

                                        <form class="time-wrapper">
                                            <h3><?= $this->lang->line('Pickup Timing') ?></h3>
                                            <?= $selfPickupTimeChart[0]->selfPickupOpenClosingTiming ?>
                                        </form>
                                    </div>
                                <?php } else { ?>
                                    <div class="time-picker">
                                        <div class="dates-day-wrapper">
                                            <div id="datepicker"></div>
                                        </div>

                                        <form class="time-wrapper">
                                            <?php foreach ($time_slot as $key => $value) { ?>
                                                <div class="form-check">
                                                    <input class="time_slot_checked form-check-input" type="radio" id="<?= 'time' . $key ?>" name="time_slot" value=" <?= $value->id ?>" <?= ($value->id == $time_slot[0]->id) ? 'checked' : '' ?>>
                                                    <label class="form-check-label" for="<?= 'time' . $key ?>">
                                                        <?= $value->start_time ?> -
                                                        <?= $value->end_time ?> </label>
                                                </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="main-accordion">
                            <div class="accordion-heading"><?= $this->lang->line('Payment Option') ?></div>
                            <div class="accordion-content">
                                <div class="accordion-content-2 accordion-5">
                                    <?php if ($payment_option != '' && $isOnlinePayment == '1') { ?>
                                        <div class="form-check radio-outer-line">
                                            <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2" id="credit" value="<?= $payment_option ?>" <?= ($isCOD == '0' && $isOnlinePayment == '1') ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="credit">
                                                <?= $this->lang->line('Credit/Debit Card') ?> </label>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <?php if ($isCOD == '1') { ?>
                                        <div class="form-check radio-outer-line">
                                            <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2" id="Cash On Delivery" value="0" <?= ($isCOD == '1' && $isOnlinePayment == '0') ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="Cash On Delivery">
                                                <?= $this->lang->line('Cash On Delivery') ?> </label>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn verify-btn d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?= $this->lang->line('Verify Mobile') ?>
                    </button>
                </div>
            </div>


            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                <div class="checkout-order-detils">
                    <div class="mydiv-wrapper">
                        <div class="mydiv-header">
                            <h3><?= $this->lang->line('Your Orders') ?></h3>
                        </div>
                        <div class="supportive-div">
                            <?php foreach ($mycart as $key => $value) { ?>
                                <div class="order-wrapper">
                                    <div class="order-wrapper-img">
                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                            <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt=""></a>
                                    </div>
                                    <div class="order-wrapper-text">
                                        <h4><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->product_name ?></a>
                                        </h4>
                                        <h5>Qty : <?= $value->quantity ?></h5>
                                        <h3 class='notranslate'>
                                            <?= $this->siteCurrency . number_format((float)$value->discount_price, '2', '.', '') ?>
                                        </h3>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="coupon-code-wrapper d-none">
                        <img src="<?= $this->theme_base_url ?>/assets/images/check-out-tag-img.png" alt="" class="check-out-tag-img">
                        <h3><span><i class="fa fa-tag" aria-hidden="true"></i></span>Have a coupon?<a href="">Click here
                                to enter your code</a></h3>
                    </div>
                    <?php if ($shopping_based_discount == 0) { ?>
                        <div class="have-code-part">
                            <div class="input-group mb-3">
                                <!-- <label for="text">If you have a coupon code, please apply it below.</label><br> -->
                                <input type="text" class="form-control" id="promocode" placeholder="<?= $this->lang->line('Enter Promocode') ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="checkPromocode"><?= $this->lang->line('Apply') ?></span>
                                <br>
                                <span class="error" id="promo_err"></span>
                            </div>
                        </div>
                    <?php } ?>

                    <input type="hidden" id="isShow" value="<?= $isShow[0]->display_price_with_gst == '1' ? "1" : "0" ?>">

                    <div class="cart-totals-part">
                        <table>
                            <thead class="head-title">
                                <tr>
                                    <th colspan="2"><?= $this->lang->line('Cart Totals') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-total-text-1"><?= $this->lang->line('Sub Total') ?>
                                        <!-- (<?= ($isShow[0]->display_price_with_gst == '1') ? $this->lang->line('exclude') : $this->lang->line('Inc') ?>Tax) -->
                                    </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="checkout_subtotal"> <?= numberFormat($getMycartSubtotal) ?> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-total-text-1"> <?= $this->lang->line('Tax (Gst)') ?> </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="checkout_gst"> <?= $TotalGstAmount ?> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-total-text-1"> <?= $this->lang->line('Delivery Charges') ?> </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span>
                                            <?= (isset($calc_shiping) && is_numeric($calc_shiping)) ? number_format((float)$calc_shiping, 2, '.', '') : '0.00' ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php if ($shopping_based_discount > 0) { ?>
                                    <tr>
                                        <td class="cart-total-text-1"> <?= $this->lang->line('Cart Discount') ?> </td>
                                        <td class="cart-total-text-2">
                                            <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                            <span id="shoppingBasedDiscount"> <?= $shopping_based_discount ?> </span>
                                        </td>
                                    </tr> <?php } ?>
                                <tr class="promocode-applied" style="display:none;">
                                    <td class="cart-total-text-1"> <?= $this->lang->line('Promocode Discount') ?> </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="promoAmount"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-total-text-1"> <?= $this->lang->line('Total') ?> </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="checkout_final">
                                            <?php
                                            if (isset($calc_shiping) && is_numeric($calc_shiping)) {
                                                // if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                                                //     $to = $getMycartSubtotal + $calc_shiping + $TotalGstAmount;
                                                // } else {
                                                //     $to = $getMycartSubtotal + $calc_shiping;
                                                // }
                                                $to = $getMycartSubtotal + $calc_shiping + $TotalGstAmount;
                                                $f_amount = $to - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2, '.', '');
                                            } else {
                                                // if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                                                //     $tot = $getMycartSubtotal + $TotalGstAmount;
                                                // } else {
                                                //     $tot = $getMycartSubtotal;
                                                // }
                                                $tot = $getMycartSubtotal + $TotalGstAmount;
                                                $f_amount = $tot - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2);
                                            } ?>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <input type="hidden" id="applied_promo">
                    <?php if ($phone == '0' || $is_verify == '0') { ?>
                        <button type="button" class="place-order-btn" id="verify"><?= $this->lang->line('Verify Mobile') ?></button>
                    <?php } else { ?>
                        <button type="button" class="place-order-btn" id="payBtn"> <?= $this->lang->line('Place order') ?>
                        </button>
                    <?php } ?>
                    <!-- <a href="javascript:" class="place-order-btn" id="myBtn" data-toggle="modal"><?= $this->lang->line('Place order') ?></a> -->

                    <div class="our-secure-product">
                        <div class="secure-product-wrapper">
                            <div class="icon">
                                <!-- <a href="#"><img src="./assets/images/ShieldCheck.png" alt=""></a> -->
                                <svg id="Layer-2" data-name="Layer-2" xmlns="./assets/images/ShieldCheck.svg" viewBox="0 0 26.75 27.83">
                                    <defs>
                                        <style>
                                            .ShieldCheck-icon {
                                                fill: none;
                                                stroke: #f5512b;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke: width 1.5em;
                                            }
                                        </style>
                                    </defs>
                                    <path class="ShieldCheck-icon" d="M5.62,16.13V7.88A1.14,1.14,0,0,1,6,7.08a1.15,1.15,0,0,1,.8-.33h22.5a1.15,1.15,0,0,1,.8.33,1.14,1.14,0,0,1,.33.8v8.25c0,11.81-10,15.72-12,16.38a.94.94,0,0,1-.7,0C15.65,31.85,5.62,27.94,5.62,16.13Zm18.57-1.51L15.93,22.5l-4.12-3.94" transform="translate(-4.63 -5.75)" />
                                </svg>
                            </div>
                            <div class="text">
                                <h3><?= $this->lang->line('100 Genuine Products') ?></h3>
                            </div>
                        </div>
                        <div class="secure-product-wrapper">
                            <div class="icon">
                                <!-- <a href="#"><img src="./assets/images/Medal.png" alt=""></a> -->
                                <svg id="Layer-2" data-name="Layer-2" xmlns="./assets/images/Medal.svg" viewBox="0 0 24.5 33.5">
                                    <defs>
                                        <style>
                                            .medal-icon {
                                                fill: none;
                                                stroke: #f5512b;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.5px;
                                            }
                                        </style>
                                    </defs>
                                    <path class="medal-icon" d="M18,24.75A11.25,11.25,0,1,0,6.75,13.5,11.25,11.25,0,0,0,18,24.75Zm0-4.5a6.75,6.75,0,1,0-6.75-6.75A6.75,6.75,0,0,0,18,20.25Zm6.75,2.25V33.75L18,30.38l-6.75,3.37V22.5" transform="translate(-5.75 -1.25)" />
                                </svg>
                            </div>
                            <div class="text">
                                <h3><?= $this->lang->line('Secure Payments') ?></h3>
                            </div>
                        </div>
                    </div>
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


<!-- Modal -->
<div class="modal fade otp-popup mobileModal" id="mobileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button> -->
            <div class="modal-body">
                <form id="mobileNumber" class="mobileNum-form" method="post" action="<?= base_url() . 'checkout/updateMobileNumber' ?>" novalidate="novalidate" autocomplete="off">
                    <label for=""><?= $this->lang->line('Please Enter Mobile Number') ?></label>
                    <div class="input-wrapper ">
                        <span><i class="fas fa-mobile"></i></span>
                        <select name="country_code" class="country_code" required="">
                            <?php foreach ($country_code as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= ($key == '+91') ? "SELECTED" : "" ?>><?= $key ?></option>
                            <?php endforeach ?>
                        </select>
                        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile Number*" required="">
                    </div>
                    <label for="phoneNumber" class="error mobile_verfication" style="display: none;"></label>
                    <br>
                    <button type="submit" id="btnSubmit" class="s-btn"><?= $this->lang->line('Submit') ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal otp -->
<div class="modal fade otp-popup" id="Otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button> -->
            <div class="modal-body">
                <form id="OtpVerification" method="post" action="<?= base_url() . 'checkout/OtpVerification' ?>">
                    <label for="mobilenumber" class="form-label"><?= $this->lang->line('Please enter Otp') ?></label>
                    <input type="text" class="form-control" style="border:1px solid gray" name="otp" id="otp" placeholder="Please enter 4 digit otp*" maxlength="4" required="">
                    <label id="invalid" style="display: none; color: red">Invalid Otp</label>
                    <br>
                    <button type="submit" id="btnSubmit"><?= $this->lang->line('Submit') ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<button id="showsucessmodel">Show Model</button>
<!-- =============place order popup=========== -->
<div id="order_success" class="modal">
    <div class="container">
        <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page">
                <div class="container">
                    <div class="center-img">

                        <svg viewBox="0 0 600 477" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_211_964)">
                                <path d="M274.971 476.923C424.377 476.923 545.495 462.308 545.495 444.28C545.495 426.252 424.377 411.637 274.971 411.637C125.565 411.637 4.44727 426.252 4.44727 444.28C4.44727 462.308 125.565 476.923 274.971 476.923Z" fill="#FFE1EC" />
                                <path d="M524.561 302.198C526.872 300.282 529.286 296.976 529.154 293.379C529.037 289.781 526.433 286.49 523.215 286.637C518.768 286.841 515.125 294.753 514.452 299.229C514.379 299.667 514.087 305.898 514.174 305.898C514.174 305.898 521.796 304.523 524.546 302.212L524.561 302.198Z" fill="var(--secondary-color)" />
                                <path d="M527.545 414.284C528.35 414.81 534.742 418.964 538.048 419.403C541.047 419.841 544.88 419.403 546.825 416.741C548.8 413.831 548.303 409.911 545.67 407.586C541.852 404.397 534.406 407.162 531.319 409.823C531.129 409.999 529.023 412.31 527.969 413.509C528.569 412.295 529.227 411.081 529.9 409.823C530.851 408.01 531.919 406.123 532.943 404.31L534.655 401.516C535.21 400.595 535.854 399.776 536.454 398.855C537.375 397.553 538.37 396.28 539.38 394.95C541.033 396.383 545.831 400.478 548.8 401.385C551.755 402.291 555.661 402.511 557.972 400.273C560.327 397.699 560.327 393.75 557.972 391.162C554.578 387.388 546.738 388.807 543.3 390.796C543.198 390.869 542.51 391.381 541.72 392.01C542.729 390.781 543.739 389.553 544.807 388.354C547.762 384.917 550.951 381.612 554.14 378.248L556.1 376.127C557.49 377.37 562.814 381.875 565.769 382.796C568.724 383.718 572.63 383.937 574.927 381.685C577.326 379.125 577.326 375.147 574.927 372.573C571.533 368.8 563.692 370.219 560.254 372.222C560.123 372.295 559.318 372.91 558.411 373.626C560.123 371.754 561.805 369.882 563.399 367.952C566.208 364.617 568.768 361.078 571.05 357.378C571.547 357.817 577.633 363.228 580.968 364.252C583.938 365.173 587.844 365.392 590.14 363.155C592.51 360.581 592.51 356.617 590.14 354.029C586.746 350.255 578.906 351.689 575.468 353.678C575.234 353.824 572.323 356.091 571.313 356.939L571.401 356.807C573.639 352.99 575.512 348.968 577.033 344.815C578.452 341.027 579.652 337.166 580.632 333.247C581.597 329.576 582.255 326.139 582.841 323.097C583.133 321.429 583.382 319.908 583.601 318.49V318.578C583.66 318.651 586.688 313.795 586.834 313.444C588.677 309.554 590.096 300.501 586.922 296.494C586.615 296.04 586.234 295.631 585.781 295.309C583.631 293.715 580.602 294.168 579.008 296.318C577.004 298.863 577.077 303.338 577.808 306.863C578.54 310.388 582.402 316.676 583.353 318.227C583.119 319.704 582.826 321.269 582.475 322.994C581.846 326.007 581.1 329.415 580.076 333.027C579.813 334.007 579.491 335.016 579.183 336.011C579.388 334.168 579.608 331.638 579.608 331.389C579.608 326.782 577.238 317.583 572.937 315.506C569.88 313.956 566.925 316.018 566.267 319.499C565.608 322.994 567.408 327.031 569.485 329.985C571.547 332.939 577.413 336.844 578.759 337.678C578.072 339.857 577.311 342.095 576.389 344.347C574.81 348.413 572.849 352.318 570.567 356.032L570.348 355.886C570.714 354.248 571.416 350.753 571.416 350.446C571.825 345.897 570.289 336.552 566.179 333.978C563.224 332.12 560.035 333.744 559.04 337.093C558.06 340.457 559.567 344.786 561.278 347.828C563.253 351.323 569.821 356.544 570.085 356.749C567.773 360.259 565.228 363.594 562.463 366.753C560.43 369.078 558.309 371.316 556.144 373.539C556.422 372.398 557.358 367.806 557.358 367.469C557.767 362.921 556.231 353.575 552.121 350.987C549.166 349.129 545.977 350.826 544.982 354.116C544.002 357.407 545.509 361.736 547.206 364.778C549.137 368.186 555.427 373.231 555.954 373.656L553.013 376.668C549.766 379.9 546.504 383.22 543.373 386.555C542.291 387.71 541.267 388.895 540.243 390.094C540.608 388.354 541.252 385.18 541.252 384.888C541.676 380.339 540.126 370.994 536.015 368.405C533.06 366.548 529.871 368.23 528.876 371.535C527.896 374.84 529.374 379.155 531.114 382.197C532.855 385.253 538.048 389.611 539.526 390.811C537.814 392.814 536.176 394.833 534.64 396.924C534.055 397.845 533.279 398.738 532.724 399.659L530.968 402.408C529.827 404.324 528.759 406.109 527.735 407.937C527.209 408.814 526.755 409.692 526.258 410.598C526.872 408.931 527.852 406.269 527.852 406.006C528.862 401.663 528.554 392.288 524.766 389.056C524.312 388.632 523.786 388.31 523.215 388.09C520.787 387.184 518.095 388.412 517.188 390.84C517.013 391.235 516.866 391.63 516.764 392.054C514.072 394.613 512.112 397.831 511.073 401.385C511 401.663 510.474 405.07 510.24 406.825C510.152 405.333 510.035 403.856 509.962 402.306C509.845 400.083 509.757 397.714 509.684 395.447C509.684 394.262 509.713 393.107 509.684 391.878C509.655 390.65 509.786 389.509 509.786 388.31C509.859 386.569 510.02 384.771 510.181 382.972C512.156 383.191 517.788 383.761 520.582 382.665C523.376 381.568 526.55 379.198 527.253 375.805C527.94 372.412 526.126 368.508 522.923 367.659C518.461 366.489 513.034 372.778 511.322 376.785C511.264 376.902 510.986 377.809 510.664 378.877C510.869 377.136 511.059 375.381 511.322 373.641C512.039 368.668 512.902 363.652 513.765 358.621C513.955 357.568 514.116 356.515 514.292 355.477C515.916 355.667 522.147 356.281 524.956 355.199C527.765 354.116 530.924 351.762 531.626 348.34C532.314 344.932 530.5 341.027 527.296 340.193C522.835 339.023 517.408 345.298 515.711 349.305C515.638 349.451 515.316 350.519 514.95 351.718C515.374 348.968 515.784 346.219 516.091 343.484C516.676 338.731 516.969 333.949 516.969 329.152C517.554 329.225 524.897 330.146 527.984 328.918C530.793 327.821 533.938 325.451 534.655 322.058C535.357 318.665 533.528 314.76 530.325 313.912C525.863 312.742 520.436 319.031 518.739 323.038C518.622 323.272 517.451 327.192 517.071 328.61V328.435C516.998 323.653 516.545 318.87 515.74 314.161C515.038 309.92 514.116 305.708 512.975 301.554C511.98 297.693 510.839 294.183 509.83 291.097C509.274 289.43 508.718 287.909 508.221 286.505H508.309V279.836C507.928 275.2 504.725 266.235 500.307 264.684C497.133 263.558 494.397 265.971 494.075 269.584C493.753 273.196 495.933 277.072 498.2 279.748C500.468 282.41 506.466 285.554 507.972 286.315C508.484 287.777 509.011 289.371 509.567 291.126C510.518 294.212 511.586 297.722 512.507 301.598C512.756 302.636 512.99 303.762 513.239 304.83C512.507 303.119 511.468 300.677 511.351 300.457C509.172 296.348 502.838 289.693 498.508 290.6C495.392 291.258 494.061 294.987 495.246 298.512C496.416 302.051 499.766 304.464 502.779 305.795C505.793 307.112 512.258 306.79 513.677 306.717C514.175 309.101 514.643 311.587 515.009 314.175C515.725 318.855 516.091 323.579 516.091 328.318H515.842C515.33 326.621 514.189 323.082 514.072 322.804C512.185 318.49 506.509 311.133 502.077 311.484C498.917 311.718 497.235 315.228 498.083 318.841C498.917 322.453 502.165 325.364 504.959 326.958C508.177 328.815 515.784 329.269 516.062 329.269C515.959 333.875 515.579 338.482 514.935 343.06C514.482 346.438 513.897 349.787 513.282 353.166C512.946 351.967 511.439 347.316 511.308 346.979C509.42 342.665 503.745 335.323 499.312 335.66C496.152 335.908 494.47 339.389 495.319 343.016C496.153 346.643 499.4 349.539 502.194 351.148C505.325 352.946 512.639 353.444 513.253 353.444C512.975 354.979 512.697 356.515 512.405 358.036C511.454 363.038 510.488 368.04 509.655 373.027C509.377 374.752 509.143 376.464 508.923 378.204C508.382 376.376 507.329 373.144 507.212 372.866C505.325 368.551 499.649 361.195 495.216 361.546C492.071 361.78 490.36 365.29 491.223 368.902C492.071 372.515 495.304 375.411 498.098 377.019C500.892 378.628 507.036 379.169 508.762 379.286C508.397 382.167 508.089 385.019 507.899 387.871C507.841 389.114 507.724 390.357 507.724 391.557V395.111C507.767 397.568 507.797 399.834 507.87 402.116C507.914 403.271 508.016 404.368 508.016 405.494C507.694 403.608 507.138 400.639 507.051 400.376C505.763 395.842 501.024 387.71 496.518 387.257C493.271 386.935 491.12 390.021 491.486 393.692C491.866 397.377 494.734 400.756 497.323 402.818C500.175 405.085 507.197 406.781 508.075 406.986C508.192 409.736 508.353 412.397 508.528 414.898C509.026 422.021 509.655 428.163 510.196 432.682H513.18C512.507 428.251 511.82 422.123 511.176 414.927C510.971 412.675 510.796 410.277 510.62 407.805C511.468 407.761 517.978 407.396 520.933 405.801C522.484 407.864 524.151 409.838 525.921 411.71C524.722 413.933 523.581 416.097 522.528 418.16C519.631 423.863 517.32 428.865 515.638 432.682H519.09C520.597 429.143 522.528 424.77 524.883 419.9C525.834 418.057 526.77 416.024 527.56 414.269L527.545 414.284Z" fill="#F92672" />
                                <path d="M599.151 336.991C600.819 333.89 599.971 330.044 597.133 327.952C593.066 325.261 586.03 329.079 583.28 332.106C583.045 332.369 579.842 337.049 579.856 337.064C579.856 337.064 587.332 340.91 590.842 340.91C593.812 340.91 597.557 339.93 599.151 336.991Z" fill="var(--secondary-color)" />
                                <path opacity="0.2" d="M524.561 302.198C526.872 300.282 529.286 296.976 529.154 293.379C529.037 289.781 526.433 286.49 523.215 286.637C518.768 286.841 515.125 294.753 514.452 299.229C514.379 299.667 514.087 305.898 514.174 305.898C514.174 305.898 521.796 304.523 524.546 302.212L524.561 302.198Z" fill="#0F053F" />
                                <path opacity="0.2" d="M527.545 414.284C528.35 414.81 534.742 418.964 538.048 419.403C541.047 419.841 544.88 419.403 546.825 416.741C548.8 413.831 548.303 409.911 545.67 407.586C541.852 404.397 534.406 407.162 531.319 409.823C531.129 409.999 529.023 412.31 527.969 413.509C528.569 412.295 529.227 411.081 529.9 409.823C530.851 408.01 531.919 406.123 532.943 404.31L534.655 401.516C535.21 400.595 535.854 399.776 536.454 398.855C537.375 397.553 538.37 396.28 539.38 394.95C541.033 396.383 545.831 400.478 548.8 401.385C551.755 402.291 555.661 402.511 557.972 400.273C560.327 397.699 560.327 393.75 557.972 391.162C554.578 387.388 546.738 388.807 543.3 390.796C543.198 390.869 542.51 391.381 541.72 392.01C542.729 390.781 543.739 389.553 544.807 388.354C547.762 384.917 550.951 381.612 554.14 378.248L556.1 376.127C557.49 377.37 562.814 381.875 565.769 382.796C568.724 383.718 572.63 383.937 574.927 381.685C577.326 379.125 577.326 375.147 574.927 372.573C571.533 368.8 563.692 370.219 560.254 372.222C560.123 372.295 559.318 372.91 558.411 373.626C560.123 371.754 561.805 369.882 563.399 367.952C566.208 364.617 568.768 361.078 571.05 357.378C571.547 357.817 577.633 363.228 580.968 364.252C583.938 365.173 587.844 365.392 590.14 363.155C592.51 360.581 592.51 356.617 590.14 354.029C586.746 350.255 578.906 351.689 575.468 353.678C575.234 353.824 572.323 356.091 571.313 356.939L571.401 356.807C573.639 352.99 575.512 348.968 577.033 344.815C578.452 341.027 579.652 337.166 580.632 333.247C581.597 329.576 582.255 326.139 582.841 323.097C583.133 321.429 583.382 319.908 583.601 318.49V318.578C583.66 318.651 586.688 313.795 586.834 313.444C588.677 309.554 590.096 300.501 586.922 296.494C586.615 296.04 586.234 295.631 585.781 295.309C583.631 293.715 580.602 294.168 579.008 296.318C577.004 298.863 577.077 303.338 577.808 306.863C578.54 310.388 582.402 316.676 583.353 318.227C583.119 319.704 582.826 321.269 582.475 322.994C581.846 326.007 581.1 329.415 580.076 333.027C579.813 334.007 579.491 335.016 579.183 336.011C579.388 334.168 579.608 331.638 579.608 331.389C579.608 326.782 577.238 317.583 572.937 315.506C569.88 313.956 566.925 316.018 566.267 319.499C565.608 322.994 567.408 327.031 569.485 329.985C571.547 332.939 577.413 336.844 578.759 337.678C578.072 339.857 577.311 342.095 576.389 344.347C574.81 348.413 572.849 352.318 570.567 356.032L570.348 355.886C570.714 354.248 571.416 350.753 571.416 350.446C571.825 345.897 570.289 336.552 566.179 333.978C563.224 332.12 560.035 333.744 559.04 337.093C558.06 340.457 559.567 344.786 561.278 347.828C563.253 351.323 569.821 356.544 570.085 356.749C567.773 360.259 565.228 363.594 562.463 366.753C560.43 369.078 558.309 371.316 556.144 373.539C556.422 372.398 557.358 367.806 557.358 367.469C557.767 362.921 556.231 353.575 552.121 350.987C549.166 349.129 545.977 350.826 544.982 354.116C544.002 357.407 545.509 361.736 547.206 364.778C549.137 368.186 555.427 373.231 555.954 373.656L553.013 376.668C549.766 379.9 546.504 383.22 543.373 386.555C542.291 387.71 541.267 388.895 540.243 390.094C540.608 388.354 541.252 385.18 541.252 384.888C541.676 380.339 540.126 370.994 536.015 368.405C533.06 366.548 529.871 368.23 528.876 371.535C527.896 374.84 529.374 379.155 531.114 382.197C532.855 385.253 538.048 389.611 539.526 390.811C537.814 392.814 536.176 394.833 534.64 396.924C534.055 397.845 533.279 398.738 532.724 399.659L530.968 402.408C529.827 404.324 528.759 406.109 527.735 407.937C527.209 408.814 526.755 409.692 526.258 410.598C526.872 408.931 527.852 406.269 527.852 406.006C528.862 401.663 528.554 392.288 524.766 389.056C524.312 388.632 523.786 388.31 523.215 388.09C520.787 387.184 518.095 388.412 517.188 390.84C517.013 391.235 516.866 391.63 516.764 392.054C514.072 394.613 512.112 397.831 511.073 401.385C511 401.663 510.474 405.07 510.24 406.825C510.152 405.333 510.035 403.856 509.962 402.306C509.845 400.083 509.757 397.714 509.684 395.447C509.684 394.262 509.713 393.107 509.684 391.878C509.655 390.65 509.786 389.509 509.786 388.31C509.859 386.569 510.02 384.771 510.181 382.972C512.156 383.191 517.788 383.761 520.582 382.665C523.376 381.568 526.55 379.198 527.253 375.805C527.94 372.412 526.126 368.508 522.923 367.659C518.461 366.489 513.034 372.778 511.322 376.785C511.264 376.902 510.986 377.809 510.664 378.877C510.869 377.136 511.059 375.381 511.322 373.641C512.039 368.668 512.902 363.652 513.765 358.621C513.955 357.568 514.116 356.515 514.292 355.477C515.916 355.667 522.147 356.281 524.956 355.199C527.765 354.116 530.924 351.762 531.626 348.34C532.314 344.932 530.5 341.027 527.296 340.193C522.835 339.023 517.408 345.298 515.711 349.305C515.638 349.451 515.316 350.519 514.95 351.718C515.374 348.968 515.784 346.219 516.091 343.484C516.676 338.731 516.969 333.949 516.969 329.152C517.554 329.225 524.897 330.146 527.984 328.918C530.793 327.821 533.938 325.451 534.655 322.058C535.357 318.665 533.528 314.76 530.325 313.912C525.863 312.742 520.436 319.031 518.739 323.038C518.622 323.272 517.451 327.192 517.071 328.61V328.435C516.998 323.653 516.545 318.87 515.74 314.161C515.038 309.92 514.116 305.708 512.975 301.554C511.98 297.693 510.839 294.183 509.83 291.097C509.274 289.43 508.718 287.909 508.221 286.505H508.309V279.836C507.928 275.2 504.725 266.235 500.307 264.684C497.133 263.558 494.397 265.971 494.075 269.584C493.753 273.196 495.933 277.072 498.2 279.748C500.468 282.41 506.466 285.554 507.972 286.315C508.484 287.777 509.011 289.371 509.567 291.126C510.518 294.212 511.586 297.722 512.507 301.598C512.756 302.636 512.99 303.762 513.239 304.83C512.507 303.119 511.468 300.677 511.351 300.457C509.172 296.348 502.838 289.693 498.508 290.6C495.392 291.258 494.061 294.987 495.246 298.512C496.416 302.051 499.766 304.464 502.779 305.795C505.793 307.112 512.258 306.79 513.677 306.717C514.175 309.101 514.643 311.587 515.009 314.175C515.725 318.855 516.091 323.579 516.091 328.318H515.842C515.33 326.621 514.189 323.082 514.072 322.804C512.185 318.49 506.509 311.133 502.077 311.484C498.917 311.718 497.235 315.228 498.083 318.841C498.917 322.453 502.165 325.364 504.959 326.958C508.177 328.815 515.784 329.269 516.062 329.269C515.959 333.875 515.579 338.482 514.935 343.06C514.482 346.438 513.897 349.787 513.282 353.166C512.946 351.967 511.439 347.316 511.308 346.979C509.42 342.665 503.745 335.323 499.312 335.66C496.152 335.908 494.47 339.389 495.319 343.016C496.153 346.643 499.4 349.539 502.194 351.148C505.325 352.946 512.639 353.444 513.253 353.444C512.975 354.979 512.697 356.515 512.405 358.036C511.454 363.038 510.488 368.04 509.655 373.027C509.377 374.752 509.143 376.464 508.923 378.204C508.382 376.376 507.329 373.144 507.212 372.866C505.325 368.551 499.649 361.195 495.216 361.546C492.071 361.78 490.36 365.29 491.223 368.902C492.071 372.515 495.304 375.411 498.098 377.019C500.892 378.628 507.036 379.169 508.762 379.286C508.397 382.167 508.089 385.019 507.899 387.871C507.841 389.114 507.724 390.357 507.724 391.557V395.111C507.767 397.568 507.797 399.834 507.87 402.116C507.914 403.271 508.016 404.368 508.016 405.494C507.694 403.608 507.138 400.639 507.051 400.376C505.763 395.842 501.024 387.71 496.518 387.257C493.271 386.935 491.12 390.021 491.486 393.692C491.866 397.377 494.734 400.756 497.323 402.818C500.175 405.085 507.197 406.781 508.075 406.986C508.192 409.736 508.353 412.397 508.528 414.898C509.026 422.021 509.655 428.163 510.196 432.682H513.18C512.507 428.251 511.82 422.123 511.176 414.927C510.971 412.675 510.796 410.277 510.62 407.805C511.468 407.761 517.978 407.396 520.933 405.801C522.484 407.864 524.151 409.838 525.921 411.71C524.722 413.933 523.581 416.097 522.528 418.16C519.631 423.863 517.32 428.865 515.638 432.682H519.09C520.597 429.143 522.528 424.77 524.883 419.9C525.834 418.057 526.77 416.024 527.56 414.269L527.545 414.284Z" fill="var(--secondary-color)" />
                                <path opacity="0.2" d="M599.151 336.991C600.819 333.89 599.971 330.044 597.133 327.952C593.066 325.261 586.03 329.079 583.28 332.106C583.045 332.369 579.842 337.049 579.856 337.064C579.856 337.064 587.332 340.91 590.842 340.91C593.812 340.91 597.557 339.93 599.151 336.991Z" fill="#0F053F" />
                                <path d="M75.4383 309.598C73.127 307.682 70.7133 304.377 70.845 300.779C70.962 297.181 73.5659 293.891 76.7841 294.037C81.2312 294.242 84.8737 302.154 85.5466 306.629C85.6197 307.068 85.9123 313.298 85.8245 313.298C85.8245 313.298 78.2031 311.923 75.453 309.613L75.4383 309.598Z" fill="var(--secondary-color)" />
                                <path d="M72.4545 421.684C71.6499 422.211 65.2573 426.364 61.9512 426.803C58.9524 427.242 55.1198 426.803 53.1742 424.141C51.1993 421.231 51.6967 417.311 54.3298 414.986C58.1479 411.798 65.5937 414.562 68.6803 417.224C68.8705 417.399 70.977 419.71 72.0302 420.909C71.4305 419.695 70.7722 418.481 70.0993 417.224C69.1484 415.41 68.0806 413.524 67.0566 411.71L65.345 408.917C64.7892 407.995 64.1455 407.176 63.5457 406.255C62.6242 404.953 61.6294 403.681 60.6201 402.35C58.967 403.783 54.1689 407.878 51.1994 408.785C48.2444 409.692 44.3386 409.911 42.0273 407.674C39.6721 405.1 39.6721 401.151 42.0273 398.562C45.4211 394.789 53.262 396.207 56.6996 398.196C56.802 398.27 57.4896 398.781 58.2795 399.41C57.2702 398.182 56.2608 396.953 55.1929 395.754C52.238 392.317 49.049 389.012 45.86 385.648L43.8998 383.528C42.5101 384.771 37.1853 389.275 34.2304 390.197C31.2754 391.118 27.3696 391.337 25.073 389.085C22.6739 386.526 22.6739 382.548 25.073 379.974C28.4668 376.2 36.3076 377.619 39.7453 379.623C39.8769 379.696 40.6815 380.31 41.5885 381.027C39.8769 379.155 38.1947 377.283 36.6002 375.352C33.7915 372.018 31.2315 368.478 28.9495 364.778C28.4521 365.217 22.3667 370.628 19.0314 371.652C16.0618 372.573 12.1561 372.793 9.85939 370.555C7.48958 367.981 7.48958 364.018 9.85939 361.429C13.2532 357.656 21.094 359.089 24.5317 361.078C24.7658 361.224 27.6768 363.491 28.6862 364.339L28.5984 364.208C26.3603 360.391 24.4878 356.369 22.9665 352.215C21.5475 348.427 20.348 344.566 19.3679 340.647C18.4024 336.976 17.7441 333.539 17.159 330.497C16.8664 328.83 16.6177 327.309 16.3983 325.89V325.978C16.3398 326.051 13.3117 321.196 13.1508 320.845C11.3076 316.954 9.88864 307.901 13.063 303.894C13.3702 303.441 13.7506 303.031 14.204 302.709C16.3544 301.115 19.3825 301.569 20.977 303.719C22.9811 306.263 22.908 310.739 22.1765 314.263C21.4451 317.788 17.5832 324.077 16.6324 325.627C16.8664 327.104 17.159 328.669 17.5101 330.395C18.1391 333.407 18.8851 336.815 19.9091 340.413C20.1724 341.393 20.4943 342.402 20.8015 343.396C20.5967 341.554 20.3772 339.024 20.3772 338.775C20.3772 334.168 22.747 324.969 27.0478 322.892C30.1051 321.342 33.0601 323.404 33.7184 326.885C34.3766 330.38 32.5774 334.417 30.5001 337.371C28.4229 340.325 22.5715 344.23 21.2257 345.064C21.9132 347.243 22.6739 349.48 23.5955 351.733C25.1754 355.798 27.1356 359.703 29.4176 363.418L29.637 363.272C29.2713 361.634 28.5692 358.138 28.5692 357.831C28.1596 353.283 29.6955 343.938 33.8061 341.364C36.7611 339.506 39.9501 341.13 40.9448 344.479C41.9249 347.842 40.4182 352.171 38.7067 355.213C36.7318 358.709 30.1637 363.93 29.9003 364.135C32.2116 367.645 34.757 370.979 37.5218 374.138C39.5551 376.464 41.6762 378.701 43.8412 380.924C43.5633 379.784 42.6271 375.191 42.6271 374.855C42.2175 370.306 43.7535 360.961 47.8641 358.372C50.819 356.515 54.008 358.212 55.0027 361.502C55.9828 364.793 54.4761 369.122 52.7792 372.164C50.8483 375.572 44.558 380.617 44.0314 381.041L46.9717 384.054C50.2192 387.286 53.4814 390.606 56.6119 393.941C57.6944 395.096 58.7184 396.281 59.7424 397.48C59.3766 395.754 58.733 392.566 58.733 392.273C58.3088 387.725 59.8594 378.38 63.97 375.791C66.9249 373.934 70.1139 375.615 71.1087 378.921C72.0888 382.226 70.6113 386.54 68.8705 389.582C67.1297 392.639 61.9366 396.997 60.4592 398.196C62.1707 400.2 63.8091 402.218 65.345 404.31C65.9302 405.231 66.7055 406.123 67.2614 407.045L69.0168 409.794C70.1578 411.71 71.2257 413.494 72.2497 415.322C72.7763 416.2 73.2298 417.077 73.7271 417.984C73.1128 416.317 72.1326 413.655 72.1326 413.392C71.1233 409.048 71.4305 399.674 75.2192 396.441C75.6727 396.017 76.1993 395.696 76.7699 395.476C79.1982 394.569 81.8898 395.798 82.7968 398.226C82.9723 398.621 83.1186 399.015 83.221 399.44C85.9126 401.999 87.8728 405.217 88.9115 408.77C88.9846 409.048 89.5112 412.456 89.7453 414.211C89.8331 412.719 89.9501 411.242 90.0232 409.692C90.1403 407.469 90.228 405.1 90.3012 402.833C90.3012 401.648 90.2719 400.493 90.3012 399.264C90.3304 398.036 90.1988 396.895 90.1988 395.696C90.1256 393.955 89.9647 392.156 89.8038 390.357C87.829 390.577 82.197 391.147 79.403 390.05C76.6089 388.953 73.4346 386.584 72.7324 383.191C72.0302 379.798 73.8588 375.893 77.0624 375.045C81.5241 373.875 86.9513 380.164 88.6628 384.171C88.7213 384.288 88.9992 385.195 89.3211 386.262C89.1163 384.522 88.9261 382.767 88.6628 381.027C87.946 376.054 87.0829 371.038 86.2198 366.007C86.0297 364.954 85.8688 363.901 85.6932 362.862C84.0695 363.052 77.8377 363.667 75.0291 362.584C72.2204 361.502 69.0607 359.148 68.3585 355.725C67.671 352.318 69.4849 348.413 72.6885 347.579C77.1502 346.409 82.5773 352.683 84.2742 356.691C84.3474 356.837 84.6692 357.904 85.0349 359.104C84.6107 356.354 84.2011 353.605 83.8939 350.87C83.3088 346.117 83.0162 341.334 83.0162 336.537C82.4311 336.61 75.0876 337.532 72.001 336.303C69.1923 335.206 66.0472 332.837 65.3304 329.444C64.6136 326.051 66.4568 322.146 69.6604 321.298C74.1221 320.128 79.5493 326.417 81.2462 330.424C81.3632 330.658 82.5335 334.578 82.9138 335.996V335.821C82.9869 331.038 83.4404 326.256 84.245 321.547C84.9472 317.305 85.8687 313.093 87.0098 308.94C88.0045 305.079 89.1455 301.569 90.1549 298.483C90.7108 296.816 91.2666 295.295 91.764 293.891H91.6762V287.222C92.0566 282.585 95.2602 273.62 99.678 272.07C102.852 270.944 105.588 273.357 105.91 276.969C106.232 280.582 104.052 284.457 101.784 287.134C99.5171 289.796 93.5194 292.94 92.0127 293.7C91.5007 295.163 90.9741 296.757 90.4182 298.512C89.4673 301.598 88.3995 305.108 87.4779 308.984C87.2292 310.022 86.9951 311.148 86.7465 312.216C87.4779 310.505 88.5165 308.062 88.6335 307.843C90.8132 303.733 97.1473 297.079 101.477 297.986C104.593 298.644 105.924 302.373 104.739 305.898C103.569 309.437 100.219 311.85 97.2058 313.181C94.1923 314.497 87.7266 314.176 86.3076 314.102C85.8102 316.486 85.3421 318.973 84.9764 321.561C84.2596 326.241 83.8939 330.965 83.8939 335.704H84.1426C84.6546 334.007 85.7956 330.468 85.9126 330.19C87.7997 325.876 93.4755 318.519 97.908 318.87C101.068 319.104 102.75 322.614 101.902 326.227C101.068 329.839 97.8202 332.749 95.0261 334.343C91.8079 336.201 84.2011 336.654 83.9232 336.654C84.0256 341.261 84.4059 345.868 85.0496 350.446C85.503 353.824 86.0882 357.173 86.7026 360.552C87.039 359.352 88.5457 354.702 88.6774 354.365C90.5645 350.051 96.2403 342.709 100.673 343.045C103.832 343.294 105.515 346.775 104.666 350.402C103.832 354.029 100.585 356.925 97.7909 358.533C94.6604 360.332 87.3462 360.829 86.7318 360.829C87.0098 362.365 87.2877 363.901 87.5803 365.422C88.5311 370.424 89.4966 375.425 90.3304 380.412C90.6084 382.138 90.8424 383.849 91.0618 385.59C91.6031 383.762 92.6563 380.529 92.7734 380.252C94.6604 375.937 100.336 368.581 104.769 368.932C107.914 369.166 109.625 372.676 108.762 376.288C107.914 379.901 104.681 382.796 101.887 384.405C99.0929 386.014 92.9489 386.555 91.2228 386.672C91.5885 389.553 91.8957 392.405 92.0858 395.257C92.1443 396.5 92.2614 397.743 92.2614 398.942V402.496C92.2175 404.953 92.1882 407.22 92.1151 409.502C92.0712 410.657 91.9688 411.754 91.9688 412.88C92.2906 410.993 92.8465 408.025 92.9343 407.761C94.2216 403.227 98.9612 395.096 103.467 394.643C106.714 394.321 108.865 397.407 108.499 401.078C108.119 404.763 105.251 408.142 102.662 410.204C99.8096 412.471 92.788 414.167 91.9103 414.372C91.7933 417.121 91.6324 419.783 91.4568 422.284C90.9594 429.406 90.3304 435.549 89.7892 440.068H86.805C87.4779 435.637 88.1654 429.509 88.8091 422.313C89.0139 420.061 89.1894 417.662 89.3649 415.191C88.5165 415.147 82.0068 414.781 79.0519 413.187C77.5013 415.249 75.8336 417.224 74.0636 419.096C75.2631 421.319 76.4042 423.483 77.4574 425.545C80.3538 431.249 82.6651 436.251 84.3474 440.068H80.8951C79.3884 436.529 77.4574 432.156 75.1022 427.286C74.1514 425.443 73.2151 423.41 72.4252 421.655L72.4545 421.684Z" fill="var(--secondary-color)" />
                                <path d="M0.848235 344.391C-0.819407 341.291 0.0290429 337.444 2.86696 335.353C6.93367 332.662 13.9699 336.479 16.7201 339.506C16.9541 339.77 20.1578 344.45 20.1431 344.464C20.1431 344.464 12.668 348.311 9.15719 348.311C6.18762 348.311 2.44273 347.331 0.848235 344.391Z" fill="var(--secondary-color)" />
                                <path opacity="0.2" d="M75.4383 309.598C73.127 307.682 70.7133 304.377 70.845 300.779C70.962 297.181 73.5659 293.891 76.7841 294.037C81.2312 294.242 84.8737 302.154 85.5466 306.629C85.6197 307.068 85.9123 313.298 85.8245 313.298C85.8245 313.298 78.2031 311.923 75.453 309.613L75.4383 309.598Z" fill="#0F053F" />
                                <path opacity="0.2" d="M72.4545 421.684C71.6499 422.211 65.2573 426.364 61.9512 426.803C58.9524 427.242 55.1198 426.803 53.1742 424.141C51.1993 421.231 51.6967 417.311 54.3298 414.986C58.1479 411.798 65.5937 414.562 68.6803 417.224C68.8705 417.399 70.977 419.71 72.0302 420.909C71.4305 419.695 70.7722 418.481 70.0993 417.224C69.1484 415.41 68.0806 413.524 67.0566 411.71L65.345 408.917C64.7892 407.995 64.1455 407.176 63.5457 406.255C62.6242 404.953 61.6294 403.681 60.6201 402.35C58.967 403.783 54.1689 407.878 51.1994 408.785C48.2444 409.692 44.3386 409.911 42.0273 407.674C39.6721 405.1 39.6721 401.151 42.0273 398.562C45.4211 394.789 53.262 396.207 56.6996 398.196C56.802 398.27 57.4896 398.781 58.2795 399.41C57.2702 398.182 56.2608 396.953 55.1929 395.754C52.238 392.317 49.049 389.012 45.86 385.648L43.8998 383.528C42.5101 384.771 37.1853 389.275 34.2304 390.197C31.2754 391.118 27.3696 391.337 25.073 389.085C22.6739 386.526 22.6739 382.548 25.073 379.974C28.4668 376.2 36.3076 377.619 39.7453 379.623C39.8769 379.696 40.6815 380.31 41.5885 381.027C39.8769 379.155 38.1947 377.283 36.6002 375.352C33.7915 372.018 31.2315 368.478 28.9495 364.778C28.4521 365.217 22.3667 370.628 19.0314 371.652C16.0618 372.573 12.1561 372.793 9.85939 370.555C7.48958 367.981 7.48958 364.018 9.85939 361.429C13.2532 357.656 21.094 359.089 24.5317 361.078C24.7658 361.224 27.6768 363.491 28.6862 364.339L28.5984 364.208C26.3603 360.391 24.4878 356.369 22.9665 352.215C21.5475 348.427 20.348 344.566 19.3679 340.647C18.4024 336.976 17.7441 333.539 17.159 330.497C16.8664 328.83 16.6177 327.309 16.3983 325.89V325.978C16.3398 326.051 13.3117 321.196 13.1508 320.845C11.3076 316.954 9.88864 307.901 13.063 303.894C13.3702 303.441 13.7506 303.031 14.204 302.709C16.3544 301.115 19.3825 301.569 20.977 303.719C22.9811 306.263 22.908 310.739 22.1765 314.263C21.4451 317.788 17.5832 324.077 16.6324 325.627C16.8664 327.104 17.159 328.669 17.5101 330.395C18.1391 333.407 18.8851 336.815 19.9091 340.413C20.1724 341.393 20.4943 342.402 20.8015 343.396C20.5967 341.554 20.3772 339.024 20.3772 338.775C20.3772 334.168 22.747 324.969 27.0478 322.892C30.1051 321.342 33.0601 323.404 33.7184 326.885C34.3766 330.38 32.5774 334.417 30.5001 337.371C28.4229 340.325 22.5715 344.23 21.2257 345.064C21.9132 347.243 22.6739 349.48 23.5955 351.733C25.1754 355.798 27.1356 359.703 29.4176 363.418L29.637 363.272C29.2713 361.634 28.5692 358.138 28.5692 357.831C28.1596 353.283 29.6955 343.938 33.8061 341.364C36.7611 339.506 39.9501 341.13 40.9448 344.479C41.9249 347.842 40.4182 352.171 38.7067 355.213C36.7318 358.709 30.1637 363.93 29.9003 364.135C32.2116 367.645 34.757 370.979 37.5218 374.138C39.5551 376.464 41.6762 378.701 43.8412 380.924C43.5633 379.784 42.6271 375.191 42.6271 374.855C42.2175 370.306 43.7535 360.961 47.8641 358.372C50.819 356.515 54.008 358.212 55.0027 361.502C55.9828 364.793 54.4761 369.122 52.7792 372.164C50.8483 375.572 44.558 380.617 44.0314 381.041L46.9717 384.054C50.2192 387.286 53.4814 390.606 56.6119 393.941C57.6944 395.096 58.7184 396.281 59.7424 397.48C59.3766 395.754 58.733 392.566 58.733 392.273C58.3088 387.725 59.8594 378.38 63.97 375.791C66.9249 373.934 70.1139 375.615 71.1087 378.921C72.0888 382.226 70.6113 386.54 68.8705 389.582C67.1297 392.639 61.9366 396.997 60.4592 398.196C62.1707 400.2 63.8091 402.218 65.345 404.31C65.9302 405.231 66.7055 406.123 67.2614 407.045L69.0168 409.794C70.1578 411.71 71.2257 413.494 72.2497 415.322C72.7763 416.2 73.2298 417.077 73.7271 417.984C73.1128 416.317 72.1326 413.655 72.1326 413.392C71.1233 409.048 71.4305 399.674 75.2192 396.441C75.6727 396.017 76.1993 395.696 76.7699 395.476C79.1982 394.569 81.8898 395.798 82.7968 398.226C82.9723 398.621 83.1186 399.015 83.221 399.44C85.9126 401.999 87.8728 405.217 88.9115 408.77C88.9846 409.048 89.5112 412.456 89.7453 414.211C89.8331 412.719 89.9501 411.242 90.0232 409.692C90.1403 407.469 90.228 405.1 90.3012 402.833C90.3012 401.648 90.2719 400.493 90.3012 399.264C90.3304 398.036 90.1988 396.895 90.1988 395.696C90.1256 393.955 89.9647 392.156 89.8038 390.357C87.829 390.577 82.197 391.147 79.403 390.05C76.6089 388.953 73.4346 386.584 72.7324 383.191C72.0302 379.798 73.8588 375.893 77.0624 375.045C81.5241 373.875 86.9513 380.164 88.6628 384.171C88.7213 384.288 88.9992 385.195 89.3211 386.262C89.1163 384.522 88.9261 382.767 88.6628 381.027C87.946 376.054 87.0829 371.038 86.2198 366.007C86.0297 364.954 85.8688 363.901 85.6932 362.862C84.0695 363.052 77.8377 363.667 75.0291 362.584C72.2204 361.502 69.0607 359.148 68.3585 355.725C67.671 352.318 69.4849 348.413 72.6885 347.579C77.1502 346.409 82.5773 352.683 84.2742 356.691C84.3474 356.837 84.6692 357.904 85.0349 359.104C84.6107 356.354 84.2011 353.605 83.8939 350.87C83.3088 346.117 83.0162 341.334 83.0162 336.537C82.4311 336.61 75.0876 337.532 72.001 336.303C69.1923 335.206 66.0472 332.837 65.3304 329.444C64.6136 326.051 66.4568 322.146 69.6604 321.298C74.1221 320.128 79.5493 326.417 81.2462 330.424C81.3632 330.658 82.5335 334.578 82.9138 335.996V335.821C82.9869 331.038 83.4404 326.256 84.245 321.547C84.9472 317.305 85.8687 313.093 87.0098 308.94C88.0045 305.079 89.1455 301.569 90.1549 298.483C90.7108 296.816 91.2666 295.295 91.764 293.891H91.6762V287.222C92.0566 282.585 95.2602 273.62 99.678 272.07C102.852 270.944 105.588 273.357 105.91 276.969C106.232 280.582 104.052 284.457 101.784 287.134C99.5171 289.796 93.5194 292.94 92.0127 293.7C91.5007 295.163 90.9741 296.757 90.4182 298.512C89.4673 301.598 88.3995 305.108 87.4779 308.984C87.2292 310.022 86.9951 311.148 86.7465 312.216C87.4779 310.505 88.5165 308.062 88.6335 307.843C90.8132 303.733 97.1473 297.079 101.477 297.986C104.593 298.644 105.924 302.373 104.739 305.898C103.569 309.437 100.219 311.85 97.2058 313.181C94.1923 314.497 87.7266 314.176 86.3076 314.102C85.8102 316.486 85.3421 318.973 84.9764 321.561C84.2596 326.241 83.8939 330.965 83.8939 335.704H84.1426C84.6546 334.007 85.7956 330.468 85.9126 330.19C87.7997 325.876 93.4755 318.519 97.908 318.87C101.068 319.104 102.75 322.614 101.902 326.227C101.068 329.839 97.8202 332.749 95.0261 334.343C91.8079 336.201 84.2011 336.654 83.9232 336.654C84.0256 341.261 84.4059 345.868 85.0496 350.446C85.503 353.824 86.0882 357.173 86.7026 360.552C87.039 359.352 88.5457 354.702 88.6774 354.365C90.5645 350.051 96.2403 342.709 100.673 343.045C103.832 343.294 105.515 346.775 104.666 350.402C103.832 354.029 100.585 356.925 97.7909 358.533C94.6604 360.332 87.3462 360.829 86.7318 360.829C87.0098 362.365 87.2877 363.901 87.5803 365.422C88.5311 370.424 89.4966 375.425 90.3304 380.412C90.6084 382.138 90.8424 383.849 91.0618 385.59C91.6031 383.762 92.6563 380.529 92.7734 380.252C94.6604 375.937 100.336 368.581 104.769 368.932C107.914 369.166 109.625 372.676 108.762 376.288C107.914 379.901 104.681 382.796 101.887 384.405C99.0929 386.014 92.9489 386.555 91.2228 386.672C91.5885 389.553 91.8957 392.405 92.0858 395.257C92.1443 396.5 92.2614 397.743 92.2614 398.942V402.496C92.2175 404.953 92.1882 407.22 92.1151 409.502C92.0712 410.657 91.9688 411.754 91.9688 412.88C92.2906 410.993 92.8465 408.025 92.9343 407.761C94.2216 403.227 98.9612 395.096 103.467 394.643C106.714 394.321 108.865 397.407 108.499 401.078C108.119 404.763 105.251 408.142 102.662 410.204C99.8096 412.471 92.788 414.167 91.9103 414.372C91.7933 417.121 91.6324 419.783 91.4568 422.284C90.9594 429.406 90.3304 435.549 89.7892 440.068H86.805C87.4779 435.637 88.1654 429.509 88.8091 422.313C89.0139 420.061 89.1894 417.662 89.3649 415.191C88.5165 415.147 82.0068 414.781 79.0519 413.187C77.5013 415.249 75.8336 417.224 74.0636 419.096C75.2631 421.319 76.4042 423.483 77.4574 425.545C80.3538 431.249 82.6651 436.251 84.3474 440.068H80.8951C79.3884 436.529 77.4574 432.156 75.1022 427.286C74.1514 425.443 73.2151 423.41 72.4252 421.655L72.4545 421.684Z" fill="#0F053F" />
                                <path opacity="0.2" d="M0.848235 344.391C-0.819407 341.291 0.0290429 337.444 2.86696 335.353C6.93367 332.662 13.9699 336.479 16.7201 339.506C16.9541 339.77 20.1578 344.45 20.1431 344.464C20.1431 344.464 12.668 348.311 9.15719 348.311C6.18762 348.311 2.44273 347.331 0.848235 344.391Z" fill="#0F053F" />
                                <path d="M216.472 41.7546C216.501 18.7201 197.865 0.0292845 174.839 3.43918e-05C151.814 -0.0292157 133.119 18.6031 133.075 41.6229C133.046 60.694 145.963 77.3519 164.453 82.0758L174.43 99.465L183.938 82.5146C202.985 78.2294 216.516 61.279 216.472 41.7546Z" fill="#0F053F" />
                                <path d="M190.067 34.2529L188.48 40.3687H159.341L160.905 34.2529H190.067ZM174.921 68.1321L160.058 50.2245L160.08 44.7246H167.424C169.061 44.7246 170.43 44.4166 171.531 43.8007C172.632 43.1847 173.458 42.3487 174.008 41.2927C174.559 40.2367 174.841 39.0341 174.856 37.6848C174.841 35.6609 174.255 34.0109 173.096 32.7349C171.951 31.4443 170.061 30.799 167.424 30.799H159.341L161.123 23.0771H167.424C171.118 23.0771 174.197 23.6418 176.659 24.7711C179.137 25.8857 180.991 27.477 182.222 29.545C183.468 31.6129 184.098 34.0769 184.113 36.9368C184.098 39.4741 183.678 41.6887 182.852 43.5807C182.041 45.4726 180.759 47.0493 179.006 48.3106C177.268 49.5719 175.001 50.5105 172.205 51.1265L171.857 51.2585L185.156 67.7361V68.1321H174.921ZM190.11 23.0771L188.48 29.281H164.491L166.12 23.0771H190.11Z" fill="var(--secondary-color)" />
                                <path d="M86.8789 147.611L109.392 461.187L344.222 433.852L278.277 134.755L86.8789 147.611Z" fill="var(--secondary-color)" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M86.8786 147.611L53.1016 445.099L109.392 461.187L86.8786 147.611Z" fill="var(--secondary-color)" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.1" d="M109.392 461.187L86.8786 147.611L53.1016 445.099L109.392 461.187Z" fill="#0F053F" />
                                <path d="M152.97 164.196C152.97 164.196 166.282 220.955 203.452 226.411C240.623 231.851 251.522 151.252 251.522 151.252" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M152.97 169.811C156.856 169.811 160.006 166.662 160.006 162.777C160.006 158.892 156.856 155.742 152.97 155.742C149.084 155.742 145.934 158.892 145.934 162.777C145.934 166.662 149.084 169.811 152.97 169.811Z" fill="#0F053F" />
                                <path d="M511.147 23.9414H303.555C295.629 23.9414 289.204 30.3649 289.204 38.2886V435.344C289.204 443.268 295.629 449.691 303.555 449.691H511.147C519.072 449.691 525.497 443.268 525.497 435.344V38.2886C525.497 30.3649 519.072 23.9414 511.147 23.9414Z" fill="#0F053F" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M500.19 23.9414H292.598C284.672 23.9414 278.247 30.3649 278.247 38.2886V435.344C278.247 443.268 284.672 449.691 292.598 449.691H500.19C508.115 449.691 514.54 443.268 514.54 435.344V38.2886C514.54 30.3649 508.115 23.9414 500.19 23.9414Z" fill="white" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M412.726 49.3742H383.308C381.641 49.3742 380.295 48.0287 380.295 46.3614C380.295 44.6941 381.655 43.3486 383.308 43.3486H412.726C414.394 43.3486 415.74 44.6941 415.74 46.3614C415.74 48.014 414.423 49.3742 412.755 49.3742C412.755 49.3742 412.726 49.3742 412.712 49.3742H412.726Z" fill="#0F053F" />
                                <path d="M499.59 49.8426V411.637H293.183V49.7256H342.1L347.586 54.2886C349.517 55.8681 351.93 56.7602 354.447 56.7602H440.784C443.387 56.7602 445.889 55.8096 447.834 54.0985L452.823 49.8426H499.605H499.59Z" fill="#0F053F" />
                                <path d="M499.59 411.637H293.183V49.7402H342.1L347.586 54.2886C349.517 55.8828 351.93 56.7456 354.432 56.7603H440.769C443.373 56.7603 445.874 55.8243 447.834 54.0985L452.808 49.8426H499.59V411.637Z" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M402.983 422.796C402.983 420.207 400.877 418.101 398.288 418.101C395.698 418.101 393.592 420.207 393.592 422.796C393.592 425.384 395.698 427.49 398.288 427.49H398.302C400.891 427.49 402.983 425.399 402.983 422.81V422.796Z" fill="#0F053F" />
                                <path opacity="0.2" d="M499.576 223.413V269.745L357.636 411.637H311.322L499.576 223.413Z" fill="white" />
                                <path opacity="0.2" d="M499.59 73.4473V149.615L293.183 355.974V279.821L499.59 73.4473Z" fill="white" />
                                <path d="M527.735 116.006H250.746C243.919 116.006 238.385 121.539 238.385 128.364V283.58C238.385 290.405 243.919 295.938 250.746 295.938H527.735C534.562 295.938 540.096 290.405 540.096 283.58V128.364C540.096 121.539 534.562 116.006 527.735 116.006Z" fill="white" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M310.693 162.031V147.055H304.798V144.261H319.88V147.055H313.985V162.031H310.678H310.693Z" fill="var(--secondary-color)" />
                                <path d="M325.687 162.031H322.381V144.261H325.687V162.031ZM335.137 154.411H325.438V151.588H335.137V154.411ZM334.888 144.261H338.165V162.031H334.888V144.261Z" fill="var(--secondary-color)" />
                                <path d="M340.433 162.031L348.434 144.261H351.682L359.713 162.031H356.231L349.371 146.016H350.687L343.797 162.031H340.418H340.433ZM344.119 157.921L345.026 155.332H354.593L355.485 157.921H344.104H344.119Z" fill="var(--secondary-color)" />
                                <path d="M361.966 162.031V144.261H364.687L375.834 157.965H374.488V144.261H377.735V162.031H375.014L363.897 148.327H365.243V162.031H361.966Z" fill="var(--secondary-color)" />
                                <path d="M382.533 162.031V144.261H385.839V162.031H382.533ZM385.459 157.848L385.313 153.943L394.602 144.276H398.332L390.593 152.495L388.765 154.499L385.459 157.848ZM394.938 162.031L388.107 153.928L390.316 151.515L398.829 162.031H394.938Z" fill="var(--secondary-color)" />
                                <path d="M412.434 162.031V154.996L413.194 157L405.456 144.261H408.967L415.213 154.543H413.238L419.455 144.261H422.703L414.979 157L415.711 154.996V162.031H412.434Z" fill="var(--secondary-color)" />
                                <path d="M432.417 162.294C431.041 162.294 429.769 162.06 428.599 161.607C427.428 161.153 426.404 160.51 425.541 159.676C424.678 158.843 424.005 157.877 423.537 156.766C423.069 155.654 422.82 154.455 422.82 153.153C422.82 151.852 423.054 150.623 423.537 149.512C424.005 148.4 424.678 147.435 425.541 146.616C426.404 145.797 427.428 145.153 428.584 144.7C429.754 144.247 431.027 144.013 432.417 144.013C433.806 144.013 435.064 144.232 436.22 144.685C437.39 145.139 438.4 145.768 439.263 146.587C440.111 147.406 440.784 148.371 441.252 149.497C441.72 150.609 441.969 151.837 441.969 153.153C441.969 154.47 441.735 155.683 441.252 156.795C440.784 157.906 440.111 158.872 439.263 159.705C438.414 160.539 437.39 161.168 436.22 161.621C435.05 162.075 433.777 162.294 432.417 162.294ZM432.417 159.398C433.309 159.398 434.143 159.252 434.889 158.945C435.635 158.638 436.293 158.214 436.864 157.643C437.434 157.073 437.858 156.429 438.166 155.669C438.473 154.908 438.634 154.075 438.634 153.153C438.634 152.232 438.487 151.398 438.18 150.638C437.873 149.877 437.434 149.219 436.878 148.663C436.308 148.108 435.649 147.669 434.903 147.362C434.157 147.055 433.323 146.908 432.431 146.908C431.539 146.908 430.705 147.055 429.93 147.362C429.154 147.669 428.496 148.108 427.94 148.663C427.384 149.234 426.946 149.892 426.624 150.638C426.302 151.398 426.141 152.217 426.141 153.139C426.141 154.06 426.302 154.864 426.624 155.625C426.946 156.385 427.384 157.058 427.94 157.614C428.496 158.184 429.169 158.623 429.93 158.916C430.705 159.223 431.539 159.369 432.431 159.369L432.417 159.398Z" fill="var(--secondary-color)" />
                                <path d="M453.086 162.294C450.658 162.294 448.771 161.607 447.381 160.232C445.991 158.857 445.304 156.868 445.304 154.265V144.261H448.61V154.162C448.61 155.991 449.005 157.321 449.795 158.155C450.585 158.989 451.696 159.398 453.13 159.398C454.564 159.398 455.675 158.989 456.451 158.155C457.226 157.321 457.621 155.991 457.621 154.162V144.261H460.868V154.265C460.868 156.868 460.181 158.857 458.806 160.232C457.431 161.607 455.514 162.294 453.071 162.294H453.086Z" fill="var(--secondary-color)" />
                                <path d="M466.676 162.206C466.076 162.206 465.593 162.016 465.198 161.621C464.803 161.226 464.613 160.773 464.613 160.232C464.613 159.691 464.803 159.223 465.198 158.842C465.593 158.462 466.076 158.272 466.676 158.272C467.276 158.272 467.744 158.462 468.124 158.842C468.504 159.223 468.68 159.691 468.68 160.232C468.68 160.773 468.49 161.241 468.124 161.621C467.758 162.016 467.276 162.206 466.676 162.206ZM465.403 156.137L464.789 144.261H468.548L467.89 156.137H465.403Z" fill="var(--secondary-color)" />
                                <path d="M298.273 194.704V190.623L298.463 191.15L293.738 183.457H294.645L298.931 190.433H298.478L302.764 183.457H303.612L298.887 191.15L299.078 190.623V194.704H298.258H298.273Z" fill="#0F053F" />
                                <path d="M307.723 194.762C306.918 194.762 306.201 194.586 305.587 194.221C304.958 193.855 304.461 193.358 304.095 192.714C303.729 192.071 303.539 191.34 303.539 190.521C303.539 189.702 303.729 188.956 304.095 188.312C304.461 187.669 304.958 187.171 305.587 186.806C306.216 186.44 306.933 186.265 307.723 186.265C308.513 186.265 309.244 186.44 309.873 186.806C310.502 187.171 311 187.669 311.365 188.312C311.731 188.956 311.907 189.687 311.907 190.521C311.907 191.354 311.731 192.071 311.365 192.714C311 193.358 310.502 193.855 309.873 194.221C309.244 194.586 308.527 194.762 307.723 194.762ZM307.723 194.045C308.366 194.045 308.937 193.899 309.464 193.606C309.976 193.314 310.385 192.904 310.663 192.363C310.956 191.822 311.102 191.208 311.102 190.521C311.102 189.833 310.956 189.19 310.663 188.663C310.371 188.137 309.976 187.727 309.464 187.42C308.952 187.113 308.366 186.981 307.723 186.981C307.079 186.981 306.509 187.128 305.997 187.42C305.485 187.713 305.09 188.122 304.797 188.663C304.505 189.204 304.358 189.804 304.358 190.521C304.358 191.237 304.505 191.837 304.797 192.363C305.09 192.904 305.499 193.314 305.997 193.606C306.509 193.899 307.079 194.045 307.723 194.045Z" fill="#0F053F" />
                                <path d="M317.802 194.762C317.085 194.762 316.456 194.63 315.944 194.367C315.417 194.104 315.022 193.709 314.73 193.182C314.452 192.656 314.306 191.998 314.306 191.223V186.323H315.11V191.15C315.11 192.086 315.359 192.802 315.827 193.299C316.31 193.797 316.983 194.031 317.86 194.031C318.489 194.031 319.031 193.899 319.499 193.636C319.952 193.373 320.318 192.992 320.552 192.51C320.801 192.027 320.918 191.442 320.918 190.784V186.323H321.722V194.703H320.947V192.378L321.064 192.656C320.815 193.314 320.406 193.826 319.835 194.206C319.265 194.586 318.577 194.777 317.787 194.777L317.802 194.762Z" fill="#0F053F" />
                                <path d="M325.146 194.703V186.323H325.921V188.619L325.848 188.356C326.082 187.683 326.477 187.157 327.033 186.806C327.588 186.44 328.291 186.265 329.124 186.265V187.054C329.124 187.054 329.066 187.054 329.022 187.054C328.993 187.054 328.964 187.054 328.92 187.054C327.983 187.054 327.267 187.347 326.74 187.932C326.213 188.517 325.95 189.321 325.95 190.36V194.733H325.146V194.703Z" fill="#0F053F" />
                                <path d="M338.867 194.762C338.063 194.762 337.346 194.586 336.732 194.221C336.103 193.855 335.605 193.358 335.239 192.714C334.874 192.071 334.684 191.34 334.684 190.521C334.684 189.702 334.874 188.956 335.239 188.312C335.605 187.669 336.103 187.171 336.732 186.806C337.361 186.44 338.077 186.265 338.867 186.265C339.657 186.265 340.389 186.44 341.018 186.806C341.647 187.171 342.144 187.669 342.51 188.312C342.876 188.956 343.051 189.687 343.051 190.521C343.051 191.354 342.876 192.071 342.51 192.714C342.144 193.358 341.647 193.855 341.018 194.221C340.389 194.586 339.672 194.762 338.867 194.762ZM338.867 194.045C339.511 194.045 340.081 193.899 340.608 193.606C341.12 193.314 341.53 192.904 341.808 192.363C342.1 191.822 342.247 191.208 342.247 190.521C342.247 189.833 342.1 189.19 341.808 188.663C341.515 188.137 341.12 187.727 340.608 187.42C340.096 187.113 339.511 186.981 338.867 186.981C338.224 186.981 337.653 187.128 337.141 187.42C336.629 187.713 336.234 188.122 335.942 188.663C335.649 189.204 335.503 189.804 335.503 190.521C335.503 191.237 335.649 191.837 335.942 192.363C336.234 192.904 336.644 193.314 337.141 193.606C337.653 193.899 338.224 194.045 338.867 194.045Z" fill="#0F053F" />
                                <path d="M345.552 194.703V186.323H346.327V188.619L346.254 188.356C346.488 187.683 346.883 187.157 347.439 186.806C347.995 186.44 348.697 186.265 349.531 186.265V187.054C349.531 187.054 349.472 187.054 349.428 187.054C349.399 187.054 349.37 187.054 349.326 187.054C348.39 187.054 347.673 187.347 347.146 187.932C346.62 188.517 346.356 189.321 346.356 190.36V194.733H345.552V194.703Z" fill="#0F053F" />
                                <path d="M354.87 194.762C354.08 194.762 353.378 194.587 352.764 194.221C352.135 193.855 351.637 193.358 351.272 192.715C350.906 192.071 350.73 191.34 350.73 190.506C350.73 189.673 350.906 188.927 351.272 188.283C351.637 187.64 352.135 187.142 352.764 186.791C353.393 186.426 354.095 186.25 354.87 186.25C355.602 186.25 356.275 186.426 356.874 186.762C357.474 187.099 357.942 187.596 358.293 188.225C358.644 188.854 358.82 189.614 358.82 190.506C358.82 191.398 358.644 192.13 358.308 192.773C357.972 193.417 357.503 193.914 356.904 194.25C356.304 194.587 355.631 194.762 354.885 194.762H354.87ZM354.914 194.045C355.558 194.045 356.128 193.899 356.64 193.607C357.152 193.314 357.547 192.905 357.84 192.364C358.132 191.822 358.279 191.208 358.279 190.521C358.279 189.833 358.132 189.19 357.84 188.663C357.547 188.137 357.138 187.727 356.64 187.42C356.143 187.113 355.558 186.982 354.914 186.982C354.271 186.982 353.7 187.128 353.188 187.42C352.676 187.713 352.281 188.122 351.989 188.663C351.696 189.205 351.55 189.804 351.55 190.521C351.55 191.237 351.696 191.837 351.989 192.364C352.281 192.905 352.691 193.314 353.188 193.607C353.7 193.899 354.271 194.045 354.914 194.045ZM358.308 194.704V191.954L358.454 190.492L358.293 189.029V182.784H359.098V194.689H358.308V194.704Z" fill="#0F053F" />
                                <path d="M365.886 194.762C365.037 194.762 364.291 194.586 363.648 194.221C363.004 193.855 362.492 193.358 362.126 192.714C361.76 192.071 361.57 191.34 361.57 190.521C361.57 189.702 361.746 188.956 362.097 188.312C362.448 187.669 362.931 187.171 363.531 186.806C364.145 186.44 364.818 186.265 365.593 186.265C366.368 186.265 367.041 186.44 367.641 186.791C368.241 187.142 368.724 187.639 369.075 188.283C369.426 188.926 369.601 189.658 369.601 190.491C369.601 190.521 369.601 190.564 369.601 190.594C369.601 190.638 369.601 190.667 369.601 190.711H362.199V190.082H369.162L368.841 190.389C368.841 189.731 368.709 189.146 368.431 188.634C368.153 188.122 367.758 187.713 367.275 187.42C366.793 187.128 366.237 186.981 365.608 186.981C364.979 186.981 364.437 187.128 363.94 187.42C363.457 187.713 363.077 188.122 362.799 188.634C362.521 189.146 362.375 189.745 362.375 190.404V190.55C362.375 191.237 362.521 191.837 362.828 192.378C363.136 192.904 363.56 193.314 364.086 193.621C364.628 193.914 365.227 194.06 365.915 194.06C366.456 194.06 366.954 193.957 367.422 193.767C367.89 193.577 368.285 193.285 368.607 192.89L369.075 193.416C368.709 193.87 368.256 194.206 367.7 194.44C367.144 194.674 366.559 194.791 365.915 194.791L365.886 194.762Z" fill="#0F053F" />
                                <path d="M372.073 194.703V186.323H372.849V188.619L372.775 188.356C373.009 187.683 373.404 187.157 373.96 186.806C374.516 186.44 375.218 186.265 376.052 186.265V187.054C376.052 187.054 375.994 187.054 375.95 187.054C375.921 187.054 375.891 187.054 375.847 187.054C374.911 187.054 374.194 187.347 373.668 187.932C373.141 188.517 372.878 189.321 372.878 190.36V194.733H372.073V194.703Z" fill="#0F053F" />
                                <path d="M382.928 184.276C382.752 184.276 382.591 184.217 382.46 184.086C382.328 183.954 382.27 183.808 382.27 183.632C382.27 183.457 382.328 183.296 382.46 183.164C382.591 183.033 382.738 182.974 382.928 182.974C383.118 182.974 383.279 183.033 383.396 183.164C383.513 183.296 383.586 183.442 383.586 183.618C383.586 183.793 383.528 183.954 383.396 184.086C383.279 184.217 383.118 184.276 382.928 184.276ZM382.533 194.689V186.309H383.337V194.689H382.533Z" fill="#0F053F" />
                                <path d="M388.838 194.762C388.136 194.762 387.492 194.659 386.893 194.455C386.293 194.25 385.825 194.001 385.488 193.68L385.854 193.036C386.176 193.314 386.6 193.548 387.141 193.753C387.683 193.957 388.253 194.045 388.867 194.045C389.745 194.045 390.374 193.899 390.769 193.606C391.15 193.314 391.34 192.934 391.34 192.466C391.34 192.129 391.237 191.851 391.047 191.661C390.857 191.457 390.579 191.31 390.257 191.208C389.935 191.106 389.555 191.018 389.16 190.945C388.765 190.872 388.37 190.798 387.975 190.711C387.58 190.623 387.214 190.506 386.878 190.345C386.542 190.184 386.278 189.965 386.088 189.672C385.898 189.394 385.796 189.014 385.796 188.546C385.796 188.122 385.913 187.727 386.147 187.391C386.381 187.054 386.732 186.777 387.2 186.557C387.668 186.352 388.253 186.25 388.97 186.25C389.496 186.25 390.023 186.323 390.55 186.469C391.076 186.616 391.515 186.82 391.837 187.069L391.471 187.713C391.12 187.449 390.725 187.259 390.286 187.128C389.848 187.011 389.409 186.952 388.955 186.952C388.136 186.952 387.551 187.098 387.171 187.405C386.79 187.698 386.6 188.078 386.6 188.532C386.6 188.883 386.702 189.16 386.893 189.38C387.097 189.585 387.361 189.745 387.683 189.862C388.019 189.979 388.385 190.067 388.78 190.14C389.175 190.213 389.57 190.287 389.965 190.374C390.36 190.462 390.725 190.579 391.062 190.74C391.398 190.901 391.661 191.106 391.852 191.383C392.056 191.661 392.144 192.027 392.144 192.48C392.144 192.934 392.013 193.343 391.764 193.68C391.515 194.016 391.135 194.294 390.652 194.484C390.155 194.674 389.555 194.776 388.838 194.776V194.762Z" fill="#0F053F" />
                                <path d="M401.843 194.762C401.024 194.762 400.307 194.586 399.663 194.221C399.02 193.855 398.522 193.358 398.156 192.714C397.791 192.071 397.601 191.34 397.601 190.521C397.601 189.702 397.791 188.941 398.156 188.312C398.522 187.669 399.034 187.171 399.663 186.806C400.292 186.44 401.024 186.265 401.843 186.265C402.516 186.265 403.13 186.396 403.686 186.645C404.242 186.908 404.681 187.288 405.032 187.8L404.432 188.239C404.14 187.815 403.759 187.493 403.306 187.288C402.852 187.084 402.369 186.981 401.843 186.981C401.185 186.981 400.599 187.128 400.087 187.42C399.575 187.713 399.166 188.122 398.873 188.663C398.581 189.204 398.434 189.804 398.434 190.521C398.434 191.237 398.581 191.851 398.873 192.378C399.166 192.904 399.575 193.314 400.087 193.621C400.614 193.914 401.199 194.06 401.843 194.06C402.369 194.06 402.852 193.957 403.306 193.753C403.759 193.548 404.125 193.241 404.432 192.802L405.032 193.241C404.695 193.753 404.242 194.133 403.686 194.396C403.13 194.659 402.516 194.776 401.843 194.776V194.762Z" fill="#0F053F" />
                                <path d="M410.561 194.762C409.756 194.762 409.039 194.586 408.425 194.221C407.796 193.855 407.299 193.358 406.933 192.714C406.567 192.071 406.377 191.34 406.377 190.521C406.377 189.702 406.567 188.956 406.933 188.312C407.299 187.669 407.796 187.171 408.425 186.806C409.054 186.44 409.771 186.265 410.561 186.265C411.351 186.265 412.082 186.44 412.711 186.806C413.34 187.171 413.837 187.669 414.203 188.312C414.569 188.956 414.744 189.687 414.744 190.521C414.744 191.354 414.569 192.071 414.203 192.714C413.837 193.358 413.34 193.855 412.711 194.221C412.082 194.586 411.365 194.762 410.561 194.762ZM410.561 194.045C411.204 194.045 411.775 193.899 412.301 193.606C412.813 193.314 413.223 192.904 413.501 192.363C413.794 191.822 413.94 191.208 413.94 190.521C413.94 189.833 413.794 189.19 413.501 188.663C413.208 188.137 412.813 187.727 412.301 187.42C411.79 187.113 411.204 186.981 410.561 186.981C409.917 186.981 409.347 187.128 408.835 187.42C408.323 187.713 407.928 188.122 407.635 188.663C407.342 189.204 407.196 189.804 407.196 190.521C407.196 191.237 407.342 191.837 407.635 192.363C407.928 192.904 408.337 193.314 408.835 193.606C409.347 193.899 409.917 194.045 410.561 194.045Z" fill="#0F053F" />
                                <path d="M421.327 186.25C422.015 186.25 422.615 186.382 423.112 186.645C423.624 186.908 424.019 187.303 424.297 187.829C424.575 188.356 424.721 189.014 424.721 189.789V194.689H423.917V189.862C423.917 188.926 423.683 188.21 423.2 187.713C422.717 187.215 422.059 186.981 421.196 186.981C420.537 186.981 419.982 187.113 419.499 187.376C419.016 187.639 418.65 188.02 418.402 188.502C418.153 188.985 418.021 189.555 418.021 190.243V194.703H417.217V186.323H417.992V188.649L417.875 188.385C418.138 187.727 418.548 187.201 419.148 186.82C419.748 186.44 420.464 186.25 421.313 186.25H421.327Z" fill="#0F053F" />
                                <path d="M426.667 187.011V186.323H431.67V187.011H426.667ZM428.203 194.704V185.036C428.203 184.334 428.408 183.779 428.803 183.354C429.198 182.93 429.783 182.726 430.529 182.726C430.836 182.726 431.143 182.769 431.45 182.857C431.758 182.945 431.992 183.091 432.182 183.267L431.86 183.881C431.699 183.72 431.509 183.603 431.29 183.53C431.07 183.457 430.821 183.413 430.573 183.413C430.061 183.413 429.666 183.559 429.403 183.837C429.139 184.115 429.008 184.539 429.008 185.095V186.894L429.022 194.689H428.218L428.203 194.704ZM433.703 184.29C433.528 184.29 433.367 184.232 433.235 184.1C433.103 183.969 433.045 183.822 433.045 183.647C433.045 183.471 433.103 183.311 433.235 183.179C433.367 183.047 433.513 182.989 433.703 182.989C433.893 182.989 434.054 183.047 434.171 183.179C434.288 183.296 434.362 183.457 434.362 183.632C434.362 183.808 434.303 183.969 434.171 184.1C434.054 184.232 433.893 184.29 433.703 184.29ZM433.308 194.704V186.323H434.113V194.704H433.308Z" fill="#0F053F" />
                                <path d="M437.507 194.703V186.323H438.282V188.619L438.209 188.356C438.443 187.683 438.838 187.157 439.394 186.806C439.95 186.44 440.652 186.265 441.486 186.265V187.054C441.486 187.054 441.427 187.054 441.383 187.054C441.354 187.054 441.325 187.054 441.281 187.054C440.345 187.054 439.628 187.347 439.101 187.932C438.575 188.517 438.311 189.321 438.311 190.36V194.733H437.507V194.703Z" fill="#0F053F" />
                                <path d="M454.124 186.25C454.797 186.25 455.382 186.382 455.88 186.645C456.377 186.908 456.772 187.303 457.05 187.829C457.328 188.356 457.474 189.014 457.474 189.789V194.689H456.67V189.862C456.67 188.926 456.436 188.21 455.982 187.713C455.514 187.215 454.885 186.981 454.051 186.981C453.422 186.981 452.866 187.113 452.413 187.376C451.959 187.639 451.594 188.02 451.36 188.502C451.111 188.985 450.994 189.555 450.994 190.243V194.703H450.189V189.877C450.189 188.941 449.955 188.224 449.502 187.727C449.048 187.23 448.405 186.996 447.571 186.996C446.942 186.996 446.401 187.128 445.932 187.391C445.464 187.654 445.113 188.034 444.879 188.517C444.631 189 444.514 189.57 444.514 190.257V194.718H443.709V186.338H444.484V188.649L444.367 188.385C444.616 187.727 445.026 187.215 445.611 186.835C446.181 186.455 446.883 186.265 447.703 186.265C448.522 186.265 449.239 186.469 449.809 186.894C450.38 187.318 450.745 187.947 450.892 188.78L450.614 188.663C450.833 187.947 451.257 187.362 451.886 186.923C452.501 186.484 453.261 186.25 454.154 186.25H454.124Z" fill="#0F053F" />
                                <path d="M464.174 194.762C463.325 194.762 462.579 194.586 461.936 194.221C461.292 193.855 460.78 193.358 460.414 192.714C460.049 192.071 459.858 191.34 459.858 190.521C459.858 189.702 460.034 188.956 460.385 188.312C460.736 187.669 461.219 187.171 461.819 186.806C462.433 186.44 463.106 186.265 463.881 186.265C464.657 186.265 465.329 186.44 465.929 186.791C466.529 187.142 467.012 187.639 467.363 188.283C467.714 188.926 467.889 189.658 467.889 190.491C467.889 190.521 467.889 190.564 467.889 190.594C467.889 190.638 467.889 190.667 467.889 190.711H460.487V190.082H467.451L467.129 190.389C467.129 189.731 466.997 189.146 466.719 188.634C466.441 188.122 466.046 187.713 465.564 187.42C465.081 187.128 464.525 186.981 463.896 186.981C463.267 186.981 462.726 187.128 462.228 187.42C461.746 187.713 461.365 188.122 461.087 188.634C460.809 189.146 460.663 189.745 460.663 190.404V190.55C460.663 191.237 460.809 191.837 461.116 192.378C461.424 192.904 461.848 193.314 462.374 193.621C462.916 193.914 463.516 194.06 464.203 194.06C464.744 194.06 465.242 193.957 465.71 193.767C466.178 193.577 466.573 193.285 466.895 192.89L467.363 193.416C466.997 193.87 466.544 194.206 465.988 194.44C465.432 194.674 464.847 194.791 464.203 194.791L464.174 194.762Z" fill="#0F053F" />
                                <path d="M473.58 194.762C472.79 194.762 472.088 194.587 471.474 194.221C470.845 193.855 470.347 193.358 469.982 192.715C469.616 192.071 469.44 191.34 469.44 190.506C469.44 189.673 469.616 188.927 469.982 188.283C470.347 187.64 470.845 187.142 471.474 186.791C472.103 186.426 472.805 186.25 473.58 186.25C474.312 186.25 474.985 186.426 475.584 186.762C476.184 187.099 476.652 187.596 477.003 188.225C477.354 188.854 477.53 189.614 477.53 190.506C477.53 191.398 477.354 192.13 477.018 192.773C476.681 193.417 476.213 193.914 475.614 194.25C475.014 194.587 474.341 194.762 473.595 194.762H473.58ZM473.624 194.045C474.268 194.045 474.838 193.899 475.35 193.607C475.862 193.314 476.257 192.905 476.55 192.364C476.842 191.822 476.989 191.208 476.989 190.521C476.989 189.833 476.842 189.19 476.55 188.663C476.257 188.137 475.848 187.727 475.35 187.42C474.853 187.113 474.268 186.982 473.624 186.982C472.98 186.982 472.41 187.128 471.898 187.42C471.386 187.713 470.991 188.122 470.698 188.663C470.406 189.205 470.26 189.804 470.26 190.521C470.26 191.237 470.406 191.837 470.698 192.364C470.991 192.905 471.401 193.314 471.898 193.607C472.41 193.899 472.98 194.045 473.624 194.045ZM477.018 194.704V191.954L477.164 190.492L477.003 189.029V182.784H477.808V194.689H477.018V194.704Z" fill="#0F053F" />
                                <path d="M481.978 257.255H358.25C348.522 257.255 340.638 249.372 340.638 239.646C340.638 229.92 348.522 222.038 358.25 222.038H481.978C491.706 222.038 499.59 229.92 499.59 239.646C499.59 249.372 491.706 257.255 481.978 257.255Z" fill="var(--secondary-color)" />
                                <path d="M363.78 243.507C363.122 243.507 362.522 243.405 361.966 243.185C361.41 242.966 360.942 242.659 360.532 242.264C360.123 241.869 359.801 241.401 359.582 240.874C359.348 240.348 359.245 239.763 359.245 239.119C359.245 238.476 359.362 237.891 359.582 237.364C359.801 236.838 360.123 236.385 360.547 235.975C360.957 235.58 361.439 235.273 361.995 235.054C362.551 234.834 363.151 234.732 363.809 234.732C364.511 234.732 365.14 234.849 365.711 235.098C366.281 235.346 366.779 235.697 367.174 236.165L366.15 237.13C365.828 236.794 365.491 236.545 365.111 236.385C364.731 236.224 364.321 236.136 363.882 236.136C363.443 236.136 363.034 236.209 362.668 236.355C362.302 236.502 361.981 236.706 361.703 236.97C361.425 237.233 361.22 237.555 361.059 237.92C360.898 238.286 360.825 238.681 360.825 239.119C360.825 239.558 360.898 239.953 361.059 240.319C361.22 240.684 361.425 240.991 361.703 241.269C361.966 241.533 362.288 241.737 362.668 241.884C363.034 242.03 363.443 242.103 363.882 242.103C364.321 242.103 364.731 242.015 365.111 241.854C365.491 241.693 365.843 241.43 366.15 241.094L367.174 242.059C366.779 242.527 366.296 242.893 365.711 243.127C365.126 243.361 364.497 243.492 363.795 243.492L363.78 243.507Z" fill="white" />
                                <path d="M372.688 243.376H371.108V234.864H372.688V243.376ZM377.208 239.734H372.571V238.388H377.208V239.734ZM377.091 234.878H378.657V243.39H377.091V234.878Z" fill="white" />
                                <path d="M384.962 242.045H389.76V243.376H383.382V234.864H389.599V236.195H384.962V242.03V242.045ZM384.845 238.418H389.072V239.719H384.845V238.418Z" fill="white" />
                                <path d="M397.893 243.507C397.235 243.507 396.635 243.405 396.079 243.185C395.523 242.966 395.055 242.659 394.646 242.264C394.236 241.869 393.914 241.401 393.695 240.874C393.461 240.348 393.358 239.763 393.358 239.119C393.358 238.476 393.475 237.891 393.695 237.364C393.914 236.838 394.236 236.385 394.66 235.975C395.07 235.58 395.553 235.273 396.109 235.054C396.664 234.834 397.264 234.732 397.922 234.732C398.625 234.732 399.254 234.849 399.824 235.098C400.395 235.346 400.892 235.697 401.287 236.165L400.263 237.13C399.941 236.794 399.605 236.545 399.224 236.385C398.844 236.224 398.434 236.136 397.996 236.136C397.557 236.136 397.147 236.209 396.781 236.355C396.416 236.502 396.094 236.706 395.816 236.97C395.538 237.233 395.333 237.555 395.172 237.92C395.011 238.286 394.938 238.681 394.938 239.119C394.938 239.558 395.011 239.953 395.172 240.319C395.333 240.684 395.538 240.991 395.816 241.269C396.079 241.533 396.401 241.737 396.781 241.884C397.147 242.03 397.557 242.103 397.996 242.103C398.434 242.103 398.844 242.015 399.224 241.854C399.605 241.693 399.956 241.43 400.263 241.094L401.287 242.059C400.892 242.527 400.409 242.893 399.824 243.127C399.239 243.361 398.61 243.492 397.908 243.492L397.893 243.507Z" fill="white" />
                                <path d="M405.223 243.376V234.864H406.803V243.376H405.223ZM406.627 241.372L406.554 239.5L411.001 234.864H412.786L409.085 238.798L408.207 239.763L406.627 241.372ZM411.162 243.376L407.9 239.5L408.953 238.345L413.02 243.376H411.162Z" fill="white" />
                                <path d="M424.927 243.507C424.269 243.507 423.625 243.405 423.025 243.215C422.426 243.024 421.943 242.776 421.577 242.483L422.118 241.255C422.455 241.518 422.879 241.737 423.376 241.927C423.874 242.103 424.4 242.191 424.927 242.191C425.366 242.191 425.732 242.147 426.01 242.044C426.288 241.942 426.492 241.81 426.624 241.65C426.756 241.489 426.814 241.299 426.814 241.079C426.814 240.816 426.726 240.611 426.536 240.45C426.346 240.289 426.112 240.172 425.819 240.07C425.527 239.982 425.19 239.895 424.839 239.821C424.474 239.748 424.122 239.646 423.757 239.529C423.391 239.412 423.069 239.266 422.762 239.105C422.455 238.944 422.221 238.695 422.045 238.403C421.87 238.11 421.767 237.745 421.767 237.291C421.767 236.838 421.884 236.399 422.133 236.019C422.382 235.639 422.762 235.332 423.259 235.098C423.771 234.864 424.415 234.747 425.19 234.747C425.702 234.747 426.214 234.805 426.712 234.937C427.209 235.068 427.648 235.258 428.028 235.492L427.531 236.721C427.151 236.487 426.756 236.326 426.346 236.224C425.936 236.107 425.556 236.063 425.176 236.063C424.752 236.063 424.4 236.121 424.122 236.224C423.845 236.326 423.64 236.472 423.523 236.648C423.406 236.823 423.333 237.013 423.333 237.218C423.333 237.481 423.42 237.686 423.61 237.847C423.786 238.008 424.035 238.125 424.327 238.213C424.62 238.3 424.956 238.388 425.322 238.461C425.688 238.549 426.053 238.637 426.405 238.754C426.756 238.871 427.092 239.002 427.385 239.178C427.677 239.353 427.926 239.587 428.101 239.865C428.277 240.158 428.379 240.523 428.379 240.962C428.379 241.401 428.262 241.84 428.014 242.22C427.765 242.6 427.385 242.907 426.873 243.141C426.361 243.375 425.717 243.492 424.942 243.492L424.927 243.507Z" fill="white" />
                                <path d="M433.967 243.376V236.209H431.144V234.878H438.355V236.209H435.532V243.376H433.952H433.967Z" fill="white" />
                                <path d="M440.359 243.376L444.192 234.864H445.743L449.575 243.376H447.908L444.631 235.712H445.26L441.969 243.376H440.345H440.359ZM442.129 241.401L442.568 240.158H447.147L447.571 241.401H442.129Z" fill="white" />
                                <path d="M454.403 243.376V236.209H451.58V234.878H458.792V236.209H455.969V243.376H454.389H454.403Z" fill="white" />
                                <path d="M465.916 243.507C464.76 243.507 463.853 243.185 463.18 242.527C462.507 241.869 462.186 240.918 462.186 239.675V234.893H463.765V239.631C463.765 240.509 463.956 241.137 464.336 241.532C464.716 241.927 465.243 242.132 465.93 242.132C466.618 242.132 467.145 241.927 467.525 241.532C467.891 241.137 468.081 240.494 468.081 239.631V234.893H469.631V239.675C469.631 240.918 469.295 241.869 468.637 242.527C467.978 243.185 467.057 243.507 465.901 243.507H465.916Z" fill="white" />
                                <path d="M476.916 243.507C476.258 243.507 475.614 243.405 475.015 243.215C474.415 243.024 473.932 242.776 473.566 242.483L474.108 241.255C474.444 241.518 474.868 241.737 475.366 241.927C475.863 242.103 476.39 242.191 476.916 242.191C477.355 242.191 477.721 242.147 477.999 242.044C478.277 241.942 478.482 241.81 478.613 241.65C478.745 241.489 478.803 241.299 478.803 241.079C478.803 240.816 478.716 240.611 478.525 240.45C478.335 240.289 478.101 240.172 477.809 240.07C477.516 239.982 477.18 239.895 476.829 239.821C476.463 239.748 476.112 239.646 475.746 239.529C475.38 239.412 475.059 239.266 474.751 239.105C474.444 238.944 474.21 238.695 474.034 238.403C473.859 238.11 473.757 237.745 473.757 237.291C473.757 236.838 473.874 236.399 474.122 236.019C474.371 235.639 474.751 235.332 475.249 235.098C475.761 234.864 476.404 234.747 477.18 234.747C477.692 234.747 478.204 234.805 478.701 234.937C479.198 235.068 479.637 235.258 480.018 235.492L479.52 236.721C479.14 236.487 478.745 236.326 478.335 236.224C477.926 236.107 477.545 236.063 477.165 236.063C476.741 236.063 476.39 236.121 476.112 236.224C475.834 236.326 475.629 236.472 475.512 236.648C475.395 236.823 475.322 237.013 475.322 237.218C475.322 237.481 475.41 237.686 475.6 237.847C475.775 238.008 476.024 238.125 476.317 238.213C476.609 238.3 476.946 238.388 477.311 238.461C477.677 238.549 478.043 238.637 478.394 238.754C478.745 238.871 479.081 239.002 479.374 239.178C479.666 239.353 479.915 239.587 480.091 239.865C480.266 240.158 480.369 240.523 480.369 240.962C480.369 241.401 480.252 241.84 480.003 242.22C479.754 242.6 479.374 242.907 478.862 243.141C478.35 243.375 477.706 243.492 476.931 243.492L476.916 243.507Z" fill="white" />
                                <path d="M318.108 255.518C326.877 246.751 326.877 232.536 318.108 223.769C309.339 215.002 295.122 215.002 286.352 223.769C277.583 232.536 277.583 246.751 286.352 255.518C295.122 264.285 309.339 264.285 318.108 255.518Z" fill="var(--secondary-color)" />
                                <path opacity="0.2" d="M318.108 255.518C326.877 246.751 326.877 232.536 318.108 223.769C309.339 215.002 295.122 215.002 286.352 223.769C277.583 232.536 277.583 246.751 286.352 255.518C295.122 264.285 309.339 264.285 318.108 255.518Z" fill="white" />
                                <path d="M312.742 249.858C318.432 244.169 318.432 234.946 312.742 229.258C307.053 223.569 297.827 223.569 292.137 229.258C286.448 234.946 286.448 244.169 292.137 249.858C297.827 255.546 307.053 255.546 312.742 249.858Z" fill="white" stroke="#0F053F" stroke-miterlimit="10" />
                                <path d="M295.713 237.891L301.316 245.73L311.409 232.845" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M177.823 295.938L190.023 465.793L317.232 450.993L281.51 288.977L177.823 295.938Z" fill="#FF689E" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M177.824 295.938L159.538 457.091L190.024 465.793L177.824 295.938Z" fill="#FF689E" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.1" d="M190.024 465.794L177.604 297.971L159.538 457.092L190.024 465.794Z" fill="#0F053F" />
                                <path d="M215.463 304.026C215.463 304.026 225.162 333.671 245.232 334.87C265.302 336.069 262.508 300.647 262.508 300.647" stroke="#0F053F" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M218.095 304.026C218.095 305.473 216.91 306.658 215.462 306.658C214.014 306.658 212.829 305.473 212.829 304.026C212.829 302.578 214.014 301.393 215.462 301.393C216.91 301.393 218.095 302.578 218.095 304.026Z" fill="#0F053F" />
                                <path d="M264.702 300.647C264.702 302.095 263.517 303.28 262.069 303.28C260.62 303.28 259.436 302.095 259.436 300.647C259.436 299.199 260.62 298.015 262.069 298.015C263.517 298.015 264.702 299.199 264.702 300.647Z" fill="#0F053F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_211_964">
                                    <rect width="600" height="476.923" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <!-- <img src="<?= $this->theme_base_url ?>/assets/images/checkout-modal-img.png" alt=""> -->
                    </div>
                    <h2>Thank you.</h2>
                    <h3>Your order has been received</h3>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <h5 id="orderId"></h5>

                    <div class="continue-btn">
                        <a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('continue shopping') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
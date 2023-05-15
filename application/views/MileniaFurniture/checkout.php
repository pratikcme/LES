<!-- <?php if (isset($Host)) { ?>
<script type="application/javascript" src="<?= $Host . '/merchantpgpui/checkoutjs/merchants/' . $MID ?>.js"></script>
<?php } ?>
<section class="hero-section common-banner-bg login-section">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('checkout') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('checkout') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="checkout-process-section p-100">
    <div class="container">
        <div class="col-xxl-12">
            <div class="title text-center">
                <h2><?= $this->lang->line('checkout') ?> <span><?= $this->lang->line('Process') ?></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                <div class="fill-detali-part">


                    <div class="accordion-items">
                        <div class="main-accordion">
                            <div class="delivery-method-wrap">
                                <form class="accordion-content-2" action="">
                                    <?php if (isset($selfPickEnable) && $selfPickEnable == '1') { ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" id="isSelfPickup"
                                            class="default_check"
                                            <?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  "checked" : "" ?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <?= $this->lang->line('self pickup') ?>
                                        </label>
                                    </div>
                                    <?php }
                                    if (!empty($userAddress) && $userAddress[0]->user_gst_number != '') {
                                    ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                            id="user_gst_number" class="default_check"
                                            value="<?= ($userAddress[0]->user_gst_number != '') ? $userAddress[0]->user_gst_number : "" ?>">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <?= $this->lang->line('Use GST Number') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>


                        <?php if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                        <div class="main-accordion">
                            <div class="accordion-heading"><?= $this->lang->line('Pickup Address') ?></div>
                            <div class="accordion-content accordion-content-3" action="">
                                <div class="address-wrapper">
                                    <?php foreach ($get_address as $key => $value) { ?>
                                    <div class="address-text">
                                        <h3><?= $value->name ?></h3>
                                    </div>
                                    <p><?= $value->address ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>

                        <div class="main-accordion">
                            <div class="accordion-heading"><?= $this->lang->line('Delivery Address') ?></div>
                            <div class="accordion-content accordion-content-3" action="">

                                <?php foreach ($get_address as $key => $value) {
                                    $status = ($value->status == '0') ? 'is_default ' : '';
                                ?>
                                <div class="address-wrapper">
                                    <div class="address-text">
                                        <h3><?= $value->name ?></h3>
                                        <div class="address-icons">
                                            <div class="ship-check text-end">
                                                <div class="form-check">
                                                    <input class="form-check-input default_check chek <?= $status ?>"
                                                        type="checkbox"
                                                        data-id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                        <?= ($value->status == '1') ? 'checked' : '' ?> id="id1">
                                                    <label class="form-check-label" for="id1">
                                                        <?= $this->lang->line('Default') ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <a href="javascript:" class="add-address-btn edit_address"
                                                data-id='<?= $this->utility->safe_b64encode($value->id) ?>'><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                        </div>
                                    </div>
                                    <p><?= $value->address ?></p>
                                </div>
                                <?php } ?>
                                <div class="new-address text-end">
                                    <button type="button" id="checkout-add-address" class="new-add"><?= $this->lang->line('js_add_address') ?></button>
                                </div>

                                <form method="POST" action="<?= base_url() . 'users_account/users/add_address' ?>"
                                    id="RegisterForm" class="ship-address" autocomplete="off">
                                    <div class="text-end">
                                        <button type="button" class="ship-close" data-bs-dismiss="modal"
                                            aria-label="Close"><i
                                                class="fa-sharp fa-regular fa-circle-xmark"></i></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="fname"
                                                class="form-label"><?= $this->lang->line('Full Name') ?><span>*</span></label>
                                            <input type="text" name="fname" class="form-control fname" id="fname"
                                                aria-describedby="fname" aria-describedby="fname"
                                                placeholder="<?= $this->lang->line('Full Name') ?>">
                                        </div>


                                        <div class="col-lg-12">
                                            <label for="text"
                                                class="form-label"><?= $this->lang->line('Mobile number') ?><span>*</span></label>
                                            <input type="text" name="phone" class="form-control mob_no" id="text"
                                                aria-describedby="text"
                                                placeholder="<?= $this->lang->line('Mobile number') ?>">
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="add"
                                                class="form-label"><?= $this->lang->line('Location') ?><span>*</span></label>
                                            <input type="text" id="departure_address"
                                                onfocus="initAutocomplete('departure_address')"
                                                class="form-control pac-target-input" name="location"
                                                aria-describedby="add"
                                                placeholder="<?= $this->lang->line('Enter Location') ?>">
                                            <label for="departure_address" class="error" style="display: none;"></label>
                                            <input type="hidden" id="departure_latitude" name="latitude"
                                                placeholder="Latitude" value="">
                                            <input type="hidden" id="departure_longitude" name="longitude"
                                                placeholder="Longitude" value="">
                                        </div>

                                        <div class="col-lg-12">
                                            <input type="text" class="form-control landmark" name="landmark"
                                                id="landmark" aria-describedby="add"
                                                placeholder="<?= $this->lang->line('Landmark') ?>">
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="select-box">
                                                <label for="city"
                                                    class="form-label"><?= $this->lang->line('Town / City') ?><span>*</span></label>
                                                <input type="text" name="city" class="form-control" id="city"
                                                    aria-describedby="add"
                                                    placeholder="<?= $this->lang->line('city') ?>" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="select-box">
                                                <label for="state"
                                                    class="form-label"><?= $this->lang->line('State') ?><span>*</span></label>
                                                <input type="text" name="state" class="form-control" id="state"
                                                    aria-describedby="add"
                                                    placeholder="<?= $this->lang->line('State') ?>" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="select-box">
                                                <label for="state"
                                                    class="form-label"><?= $this->lang->line('country') ?><span>*</span></label>
                                                <input type="text" name="country" class="form-control" id="country"
                                                    aria-describedby="add"
                                                    placeholder="<?= $this->lang->line('country') ?>"
                                                    autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="zipcode"
                                                class="form-label"><?= $this->lang->line('pincode'); ?><span>*</span></label>
                                            <input type="text" name="pincode" class="form-control pincode" id="pincode"
                                                aria-describedby="add" placeholder="<?= $this->lang->line('pincode') ?>"
                                                autocomplete="off">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="address" class="form-label"><?= $this->lang->line('Address'); ?>
                                                <span>*</span>
                                            </label>
                                            <textarea type="text" name="address" class="form-control pincode"
                                                id="address" placeholder="<?= $this->lang->line('Enter Address') ?>"
                                                autocomplete="off"></textarea>
                                        </div>

                                        <div class="save-btn">
                                            <button type="submit" id="addAddress"
                                                class=" signin-btn-green"><?= $this->lang->line('Save') ?></button>
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
                                            <input class="time_slot_checked" type="radio" id="Default-1"
                                                name="time_slot" value=" <?= $value->id ?>"
                                                <?= ($value->id == $time_slot[0]->id) ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="Default-1"> <?= $value->start_time ?> -
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
                                <form class="accordion-content-2 accordion-5">
                                    <?php

                                    if ($payment_option != '' && $isOnlinePayment == '1') {

                                    ?>

                                    <div class="form-check radio-outer-line">

                                        <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2"
                                            id="credit" value="<?= $payment_option ?>"
                                            <?= ($isCOD == '0' && $isOnlinePayment == '1') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="Credit/Debit Card">
                                            <?= $this->lang->line('Credit/Debit Card') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    <?php if ($isCOD == '1') { ?>

                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2"
                                            id="Cash On Delivery" value="0"
                                            <?= ($isCOD == '1' && $isOnlinePayment == '0') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="Cash">
                                            <?= $this->lang->line('Cash On Delivery') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                <div class="checkout-order-detils">
                    <div class="mydiv-wrapper">
                        <div class="mydiv-header">
                            <h3> <?= $this->lang->line('Your Orders') ?></h3>
                        </div>
                        <div class="order-wrapper-in">
                            <?php
                            foreach ($mycart as $key => $value) { ?>
                            <div class="order-wrapper">
                                <div class="order-wrapper-img">
                                    <a
                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                            alt=""></a>
                                </div>
                                <div class="order-wrapper-text">
                                    <h4><a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->product_name . ' ' . $value->weight_no . ' ' . $value->weight_name ?></a>
                                    </h4>
                                    <h5>Qty:<?= $value->quantity ?></h5>
                                    <h3><?= $this->siteCurrency . number_format((float)$value->discount_price, '2', '.', '') ?>
                                    </h3>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php if ($shopping_based_discount == 0) { ?>
                    <div class="coupon-code-wrapper">
                        <img src="<?= $this->theme_base_url . '/assets/img/check-out-tag-img.png' ?>" alt=""
                            class="check-out-tag-img">
                        <h3><span><i class="fa fa-tag" aria-hidden="true"></i></span>Have a coupon?<a href="">Click here
                                to enter your code</a></h3>
                    </div>

                    <div class="have-code-part">
                        <div class="input-group mb-3">
                            <label for="text">If you have a coupon code, please apply it below.</label><br>
                            <input type="text" class="form-control" id="promocode" placeholder="Enter Promocode"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">


                            <button type="text" class="input-group-text" id="checkPromocode">Apply</button>
                            <div>
                                <span class="error" id="promo_err"></span>
                            </div>
                        </div>

                    </div>
                    <?php } ?>


                    <div class="cart-totals-part">
                        <table>
                            <thead class="head-title">
                                <tr>
                                    <th colspan="2"><?= $this->lang->line('Cart Totals') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-total-text-1"><?= $this->lang->line('Sub Total') ?> <br> (
                                        <?= ($isShow[0]->display_price_with_gst == '1') ? $this->lang->line('exclude') : $this->lang->line('Inc') ?>Tax)
                                    </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="checkout_subtotal"> <?= $getMycartSubtotal ?> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-total-text-1"><?= $this->lang->line('Tax (Gst)') ?></td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span> <?= $TotalGstAmount ?> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-total-text-1"><?= $this->lang->line('Delivery Charges') ?></td>
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
                                        <span id="checkout_final"> <?php
                                                                    if (isset($calc_shiping) && is_numeric($calc_shiping)) {
                                                                        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                                                                            $to = $getMycartSubtotal + $calc_shiping + $TotalGstAmount;
                                                                        } else {
                                                                            $to = $getMycartSubtotal + $calc_shiping;
                                                                        }
                                                                        $f_amount = $to - $shopping_based_discount;
                                                                        echo number_format((float)$f_amount, 2, '.', '');
                                                                    } else {
                                                                        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                                                                            $tot = $getMycartSubtotal + $TotalGstAmount;
                                                                        } else {
                                                                            $tot = $getMycartSubtotal;
                                                                        }
                                                                        $f_amount = $tot - $shopping_based_discount;
                                                                        echo number_format((float)$f_amount, 2);
                                                                    } ?> </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php

                    if ($phone == '0' || $is_verify == '0') { ?>
                    <button type="button" id="verify" class="btn verify-btn lg-btn mb-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Verify Mobile
                    </button>
                    <?php } else { ?>
                    <a href="javascript:;" class="place-order-btn" id="payBtn"
                        data-toggle="modal"><?= $this->lang->line('Place order') ?>
                    </a>
                    <?php } ?>
                    <div class="our-secure-product">
                        <div class="secure-product-wrapper">
                            <div class="icon">

                                <svg id="Layer_1" data-name="Layer 1"
                                    xmlns="<?= $this->theme_base_url . '/assets/img/ShieldCheck.svg' ?>"
                                    viewBox="0 0 26.75 27.83">
                                    <defs>
                                        <style>
                                        .ShieldCheck-icon {
                                            fill: none;
                                            stroke: #f5512b;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke: width 1.5em;
                                            stroke-width: 1.5px;
                                        }
                                        </style>
                                    </defs>
                                    <path class="ShieldCheck-icon"
                                        d="M5.62,16.13V7.88A1.14,1.14,0,0,1,6,7.08a1.15,1.15,0,0,1,.8-.33h22.5a1.15,1.15,0,0,1,.8.33,1.14,1.14,0,0,1,.33.8v8.25c0,11.81-10,15.72-12,16.38a.94.94,0,0,1-.7,0C15.65,31.85,5.62,27.94,5.62,16.13Zm18.57-1.51L15.93,22.5l-4.12-3.94"
                                        transform="translate(-4.63 -5.75)" />
                                </svg>
                            </div>
                            <div class="text">
                                <h3>100% Genuine Products</h3>
                            </div>
                        </div>
                        <div class="secure-product-wrapper">
                            <div class="icon">

                                <svg id="Layer_1" data-name="Layer 1"
                                    xmlns="<?= $this->theme_base_url . '/assets/img/Medal.svg' ?>'"
                                    viewBox="0 0 24.5 33.5">
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
                                    <path class="medal-icon"
                                        d="M18,24.75A11.25,11.25,0,1,0,6.75,13.5,11.25,11.25,0,0,0,18,24.75Zm0-4.5a6.75,6.75,0,1,0-6.75-6.75A6.75,6.75,0,0,0,18,20.25Zm6.75,2.25V33.75L18,30.38l-6.75,3.37V22.5"
                                        transform="translate(-5.75 -1.25)" />
                                </svg>
                            </div>
                            <div class="text">
                                <h3>Secure Payments</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<input type="hidden" name="" id="s_charge" value="<?= $this->utility->safe_b64encode($calc_shiping) ?>">
<input type="hidden" name="" id="shipping_charge"
    value="<?= (isset($calc_shiping) && $calc_shiping != '') ? number_format((float)$calc_shiping, 2, '.', '') : '0.00' ?>">
<input type="hidden" name="" id="AddressNotInRange" value="<?= $AddressNotInRange ?>">
<input type="hidden" name="" id="checkAddress" value="<?= (!empty($userAddress) ? "1" : "0") ?>">
<input type="hidden" name="" id="CheckisSelfPickup"
    value="<?= ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') ? "0" : "1" ?>">

</div>
<?php if ($GatewayType == '1') { ?>
<form name='razorpayform' action="<?php echo base_url() . 'checkout/verify'; ?>" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
</form>
<?php } elseif ($GatewayType == '2') { ?>
<input type="hidden" name="publishableKey" id="publishableKey">

<form id="stipeForm" action="<?php echo base_url() . 'checkout/stripepost'; ?>" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>"
        data-amount="<?= $amount ?>" data-name="<?= $this->siteTitle ?>" data-description="<?= $this->siteTitle ?>"
        data-image="<?= $this->siteLogo ?>" data-currency="<?= $currency_code ?>" data-email="<?= $user_email ?>">
    </script>
</form>

<?php } else { ?>

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

<div id="order_success" class="modal">
    <div class="container">
        <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page">
                <div class="container">
                    <div class="center-img">
                        <img src="<?= $this->theme_base_url . '/assets/img/checkout-modal-img.png' ?>" alt="">
                    </div>
                    <h2>Thank you.</h2>
                    <h3>Your order has been received</h3>
                    <h5 id="orderId"></h5>
                    <div class="continue-btn">
                        <a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('continue shopping') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade otp-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <div class="modal-body">
                    <form id="mobileNumber" class="mobileNum-form" method="post"
                        action="<?= base_url() . 'checkout/updateMobileNumber' ?>" novalidate="novalidate"
                        autocomplete="off">
                        <label for=""><?= $this->lang->line('Please Enter Mobile Number') ?></label>
                        <div class="input-wrapper ">
                            <span><i class="fas fa-mobile"></i></span>
                            <select name="country_code" class="country_code" required="">
                                <?php foreach ($country_code as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= ($key == '+91') ? "SELECTED" : "" ?>><?= $key ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile Number*"
                                required="">
                        </div>
                        <label for="phoneNumber" class="error mobile_verfication" style="display: none;"></label>

                        <button type="submit" id="btnSubmit" class="s-btn"><?= $this->lang->line('Submit') ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade otp-popup" id="Otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <form id="OtpVerification" method="post" action="<?= base_url() . 'checkout/OtpVerification' ?>">
                    <label for="mobilenumber" class="form-label"><?= $this->lang->line('Please enter Otp') ?></label>
                    <input type="text" class="form-control" style="border:1px solid gray" name="otp" id="otp"
                        placeholder="Please enter 4 digit otp*" maxlength="4" required="">
                    <br>
                    <button type="submit" id="btnSubmit"><?= $this->lang->line('Submit') ?></button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<?php if (isset($Host)) { ?>
<script type="application/javascript" src="<?= $Host . '/merchantpgpui/checkoutjs/merchants/' . $MID ?>.js"></script>
<?php } ?>

<!-- ----hero-section--- -->
<section class="hero-section banner login-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('checkout') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('checkout') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>



<!-- ---------check-out-process--- -->
<section class="checkout-process-section p-120">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2><?= $this->lang->line('checkout') ?> <span><?= $this->lang->line('Process') ?></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                <div class="fill-detali-part">

                    <!-- ----------accordian-part------ -->
                    <div class="accordion-items">
                        <div class="main-accordion">
                            <div class="delivery-method-wrap">
                                <form class="accordion-content-2" action="">
                                    <?php if (isset($selfPickEnable) && $selfPickEnable == '1') { ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" id="isSelfPickup"
                                            class="default_check"
                                            <?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  "checked" : "" ?>>
                                        <label class="form-check-label" for="isSelfPickup">
                                            <?= $this->lang->line('self pickup') ?>
                                        </label>
                                    </div>
                                    <?php }
                                    if (!empty($userAddress) && $userAddress[0]->user_gst_number != '') {
                                    ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" class="default_check"
                                            name="flexRadioDefault" id="user_gst_number"
                                            value="<?= ($userAddress[0]->user_gst_number != '') ? $userAddress[0]->user_gst_number : "" ?>">
                                        <label class="form-check-label" for="user_gst_number">
                                            <?= $this->lang->line('Use GST Number') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>


                        <?php if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') {

                        ?>
                        <div class="main-accordion">
                            <div class="accordion-heading"><?= $this->lang->line('Pickup Address') ?></div>
                            <div class="accordion-content accordion-content-3">
                                <div class="address-wrapper">
                                    <?php foreach ($get_address as $key => $value) { ?>
                                    <div class="address-text">
                                        <h3><?= $value->name ?></h3>
                                    </div>
                                    <p><?= $value->address ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } else {
                        ?>
                        <div class="main-accordion">
                            <div class="accordion-heading active"><?= $this->lang->line('Delivery Address') ?>
                            </div>
                            <div class="accordion-content accordion-content-3">
                                <?php foreach ($get_address as $key => $value) {
                                        $status = ($value->status == '0') ? 'is_default ' : '';
                                    ?>
                                <div class="address-wrapper">
                                    <div class="address-text">
                                        <h3><?= $value->name ?></h3>
                                        <div class="address-icons">
                                            <div class="ship-check text-end">
                                                <div class="form-check">
                                                    <input class="form-check-input default_check chek <?= $status ?>"
                                                        type="checkbox"
                                                        data-id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                                        <?= ($value->status == '1') ? 'checked' : '' ?>
                                                        id="<?= 'add' . $key ?>">
                                                    <label class="form-check-label" for="<?= 'add' . $key ?>">
                                                        <?= $this->lang->line('Default') ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <a href="" class="add-address-btn edit_address"
                                                data-id='<?= $this->utility->safe_b64encode($value->id) ?>'><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="" class="delet-address-btn remove_address"
                                                data-id='<?= $this->utility->safe_b64encode($value->id) ?>'><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </div>
                                    <p><?= $value->address ?></p>
                                </div>
                                <?php }
                                    ?>
                                <div class="new-address text-end">
                                    <button type="button" id="checkout-add-address"
                                        class="new-add"><?= $this->lang->line('js_add_address') ?></button>
                                </div>

                                <form method="POST" action="<?= base_url() . 'users_account/users/add_address' ?>"
                                    id="RegisterForm" class="ship-address" autocomplete="off">
                                    <div class="text-end">
                                        <button type="button" class="ship-close" data-bs-dismiss="modal"
                                            aria-label="Close"><i
                                                class="fa-sharp fa-regular fa-circle-xmark"></i></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="fname"
                                                class="form-label"><?= $this->lang->line('Full Name') ?><span>*</span></label>
                                            <input type="text" name="fname" class="form-control" id="fname"
                                                aria-describedby="fname"
                                                placeholder="<?= $this->lang->line('Full Name') ?>">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="phone"
                                                class="form-label"><?= $this->lang->line('Mobile number') ?><span>*</span></label>
                                            <input type="text" name="phone" class="form-control mob_no" id="phone"
                                                aria-describedby="phone"
                                                placeholder="<?= $this->lang->line('Mobile number') ?>">
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="location"
                                                class="form-label"><?= $this->lang->line('Location') ?><span>*</span></label>
                                            <input type="text" id="departure_address"
                                                onfocus="initAutocomplete('departure_address')"
                                                class="form-control pac-target-input" name="location"
                                                aria-describedby="location"
                                                placeholder="<?= $this->lang->line('Enter Location') ?>">
                                            <label for="departure_address" class="error" style="display: none;"></label>
                                            <input type="hidden" id="departure_latitude" name="latitude"
                                                placeholder="Latitude" value="">
                                            <input type="hidden" id="departure_longitude" name="longitude"
                                                placeholder="Longitude" value="">
                                        </div>

                                        <div class="col-lg-12">
                                            <input type="text" class="form-control landmark" name="landmark"
                                                id="landmark" aria-describedby="landmark"
                                                placeholder="<?= $this->lang->line('Landmark') ?>">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="city"
                                                class="form-label"><?= $this->lang->line('Town / City') ?><span>*</span></label>
                                            <input type="text" name="city" class="form-control" id="city"
                                                aria-describedby="city" placeholder="<?= $this->lang->line('city') ?>"
                                                autocomplete="off">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="state"
                                                class="form-label"><?= $this->lang->line('State') ?><span>*</span></label>
                                            <input type="text" name="state" class="form-control" id="state"
                                                aria-describedby="state" placeholder="<?= $this->lang->line('State') ?>"
                                                autocomplete="off">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="country"
                                                class="form-label"><?= $this->lang->line('country') ?><span>*</span></label>
                                            <input type="text" name="country" class="form-control" id="country"
                                                aria-describedby="country"
                                                placeholder="<?= $this->lang->line('country') ?>" autocomplete="off">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="pincode"
                                                class="form-label"><?= $this->lang->line('pincode') ?><span>*</span></label>
                                            <input type="text" name="pincode" class="form-control pincode" id="pincode"
                                                aria-describedby="pincode"
                                                placeholder="<?= $this->lang->line('pincode') ?>" autocomplete="off">
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="address"
                                                class="form-label"><?= $this->lang->line('Address'); ?><span>*</span></label>

                                            <textarea name="address" class="form-control" id="address"
                                                placeholder="<?= $this->lang->line('Enter Address') ?>"
                                                autocomplete="off"></textarea>
                                        </div>

                                        <div class="save-btn">
                                            <button type="submit"
                                                id="addAddress"><?= $this->lang->line('Save') ?></button>
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
                                            <input class="form-check-input time_slot_checked" type="radio"
                                                name="time_slot" id="<?= 'slot' . $key ?>" value="<?= $value->id ?>">
                                            <label class="form-check-label" for="<?= 'slot' . $key ?>">
                                                <?= $selfPickupTimeChart[0]->selfPickupOpenClosingTiming ?>
                                            </label>
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
                                    <?php
                                    if ($payment_option != '' && $isOnlinePayment == '1') {
                                    ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input pay-chk" type="radio"
                                            value="<?= $payment_option ?>" name="flexRadioDefault2" id="credit"
                                            <?= ($isCOD == '0' && $isOnlinePayment == '1') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="credit">
                                            <?= $this->lang->line('Credit/Debit Card') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    <?php if ($isCOD == '1') { ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2"
                                            id="Cash On Delivery" value="0"
                                            <?= ($isCOD == '1' && $isOnlinePayment == '0') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="Cash On Delivery">
                                            <?= $this->lang->line('Cash On Delivery') ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <button type="button" class="btn verify-btn cmn-btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Verify Mobile
                    </button> -->
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
                                    <a
                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><img
                                            src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                            alt=""></a>
                                </div>
                                <div class="order-wrapper-text">
                                    <h4><a
                                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->product_name ?></a>
                                    </h4>
                                    <h5> <?= $value->weight_no . ' ' . $value->weight_name ?> </h5>
                                    <p>Qnt : <span><?= $value->quantity ?></span> </p>
                                    <h3><?= $this->siteCurrency . number_format((float)$value->discount_price, '2', '.', '') ?>
                                    </h3>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>


                    <?php if (!$shopping_based_discount > 0) { ?>
                    <div class="have-code-part">
                        <div class="input-group mb-3">
                            <label for="text">If you have a coupon code, please apply it below.</label><br>
                            <input type="text" class="form-control" id="promocode" placeholder="Enter Promocode"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="error" id="promo_err"></span>
                            <span class="input-group-text" id="checkPromocode">Apply</span>
                        </div>
                    </div>
                    <?php } ?>
                    <input type="hidden" id="isShow"
                        value="<?= $isShow[0]->display_price_with_gst == '1' ? "1" : "0" ?>">

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
                                        <br>
                                    </td>
                                    <td class="cart-total-text-2">
                                        <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                        <span id="checkout_subtotal">
                                            <?php echo numberFormat($getMycartSubtotal) ?>
                                        </span>
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
                                    <td class="cart-total-text-1"><?= $this->lang->line('Delivery Charges') ?> </td>
                                    <td class="cart-total-text-2"><span class='notranslate'> <?= $this->siteCurrency ?>
                                        </span>
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

                                                $to = $getMycartSubtotal + $calc_shiping + $TotalGstAmount;
                                                $f_amount = $to - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2, '.', '');
                                            } else {

                                                $tot = $getMycartSubtotal + $TotalGstAmount;
                                                // $tot = $getMycartSubtotal;
                                                $f_amount = $tot - $shopping_based_discount;
                                                echo number_format((float)$f_amount, 2);
                                            }
                                            ?>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="place-order">
                            <a href="#" class="place-order-btn" id="myBtn" data-toggle="modal">Place order</a>
                        </div> -->
                        <input type="hidden" id="applied_promo">
                        <?php if ($phone == '0' || $is_verify == '0') { ?>
                        <button type="button" class="place-order-btn"
                            id="verify"><?= $this->lang->line('Verify Mobile') ?></button>
                        <?php } else { ?>
                        <button class="place-order-btn" id="payBtn"> <?= $this->lang->line('Place order') ?> </button>
                        <?php } ?>
                    </div>


                    <div class="our-secure-product">
                        <div class="secure-product-wrapper">
                            <div class="icon">
                                <!-- <a href="#"><img src="./assets/images/ShieldCheck.svg" alt=""></a> -->
                                <svg id="Layer-2" data-name="Layer-2"
                                    xmlns="<?= $this->theme_base_url ?>/assets/images/ShieldCheck.svg"
                                    viewBox="0 0 26.75 27.83">
                                    <defs>
                                        <style>
                                        .ShieldCheck-icon {
                                            fill: none;
                                            stroke: #f5512b;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke: width 1.5em;
                                            px;
                                        }
                                        </style>
                                    </defs>
                                    <path class="ShieldCheck-icon"
                                        d="M5.62,16.13V7.88A1.14,1.14,0,0,1,6,7.08a1.15,1.15,0,0,1,.8-.33h22.5a1.15,1.15,0,0,1,.8.33,1.14,1.14,0,0,1,.33.8v8.25c0,11.81-10,15.72-12,16.38a.94.94,0,0,1-.7,0C15.65,31.85,5.62,27.94,5.62,16.13Zm18.57-1.51L15.93,22.5l-4.12-3.94"
                                        transform="translate(-4.63 -5.75)" />
                                </svg>
                            </div>
                            <div class="text">
                                <h3><?= $this->lang->line('100 Genuine Products') ?></h3>
                            </div>
                        </div>
                        <div class="secure-product-wrapper">
                            <div class="icon">
                                <!-- <a href="#"><img src="./assets/images/Medal.svg" alt=""></a> -->
                                <svg id="Layer-2" data-name="Layer-2"
                                    xmlns="<?= $this->theme_base_url ?>/assets/images/Medal.svg"
                                    viewBox="0 0 24.5 33.5">
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
                                    <path class="medal-icon"
                                        d="M18,24.75A11.25,11.25,0,1,0,6.75,13.5,11.25,11.25,0,0,0,18,24.75Zm0-4.5a6.75,6.75,0,1,0-6.75-6.75A6.75,6.75,0,0,0,18,20.25Zm6.75,2.25V33.75L18,30.38l-6.75,3.37V22.5"
                                        transform="translate(-5.75 -1.25)" />
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
</section>

<input type="hidden" name="" id="s_charge" value="<?= $this->utility->safe_b64encode($calc_shiping) ?>">
<input type="hidden" name="" id="shipping_charge"
    value="<?= (isset($calc_shiping) && $calc_shiping != '') ? number_format((float)$calc_shiping, 2, '.', '') : '0.00' ?>">
<input type="hidden" name="" id="AddressNotInRange" value="<?= $AddressNotInRange ?>">
<input type="hidden" name="" id="checkAddress" value="<?= (!empty($userAddress) ? "1" : "0") ?>">
<input type="hidden" name="" id="CheckisSelfPickup"
    value="<?= ($this->session->userdata('isSelfPickup') == '' || $this->session->userdata('isSelfPickup') == '0') ? "0" : "1" ?>">

</div>
<?php if ($GatewayType == '1') { ?>
<form name='razorpayform' action="<?php echo base_url() . 'checkout/verify'; ?>" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
</form>
<?php } elseif ($GatewayType == '2') { ?>
<input type="hidden" name="publishableKey" id="publishableKey">

<form id="stipeForm" action="<?php echo base_url() . 'checkout/stripepost'; ?>" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>"
        data-amount="<?= $amount ?>" data-name="<?= $this->siteTitle ?>" data-description="<?= $this->siteTitle ?>"
        data-image="<?= $this->siteLogo ?>" data-currency="<?= $currency_code ?>" data-email="<?= $user_email ?>">
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


<div class="modal fade otp-popup" id="Otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button> -->
            <div class="modal-body">
                <form id="OtpVerification" method="post" action="<?= base_url() . 'checkout/OtpVerification' ?>">
                    <label for="mobilenumber" class="form-label"><?= $this->lang->line('Please enter Otp') ?></label>
                    <input type="text" class="form-control" style="border:1px solid gray" name="otp" id="otp"
                        placeholder="Please enter 4 digit otp*" maxlength="4" required="">
                    <br>
                    <button type="submit" id="btnSubmit"><?= $this->lang->line('Submit') ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- =============place order popup=========== -->
<div id="myModal" class="modal">
    <div class="container">
        <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page">
                <div class="container">
                    <div class="center-img">
                        <img src="./assets/images/checkout-modal-img.png" alt="">
                    </div>
                    <h2>Thank you.</h2>
                    <h3>Your order has been received</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <h5>Your order number is <span>#VCGH1235</span></h5>

                    <div class="continue-btn">
                        <a href="./index.php">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade otp-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <div class="modal-body">
                    <form id="mobileNumber" class="mobileNum-form" method="post">
                        <h3>Verify Mobile Number</h3>
                        <label for="">Please Enter Mobile Number</label>
                        <div class="input-wrapper ">
                            <span><i class="fas fa-mobile"></i></span>
                            <select name="country_code" class="country_code" required="">
                                <option value="">Select Country Code</option>
                                <option value="+213">+213</option>
                                <option value="+376">+376</option>
                                <option value="+244">+244</option>
                                <option value="+1264">+1264</option>
                                <option value="+1268">+1268</option>
                                <option value="+54">+54</option>
                                <option value="+374">+374</option>
                                <option value="+297">+297</option>
                                <option value="+61">+61</option>
                                <option value="+43">+43</option>
                                <option value="+994">+994</option>
                                <option value="+1242">+1242</option>
                                <option value="+973">+973</option>
                                <option value="+880">+880</option>
                                <option value="+1246">+1246</option>
                                <option value="+375">+375</option>
                                <option value="+32">+32</option>
                                <option value="+501">+501</option>
                                <option value="+229">+229</option>
                                <option value="+1441">+1441</option>
                                <option value="+975">+975</option>
                                <option value="+591">+591</option>
                                <option value="+387">+387</option>
                                <option value="+267">+267</option>
                                <option value="+55">+55</option>
                                <option value="+673">+673</option>
                                <option value="+359">+359</option>
                                <option value="+226">+226</option>
                                <option value="+257">+257</option>
                                <option value="+855">+855</option>
                                <option value="+237">+237</option>
                                <option value="+1">+1</option>
                                <option value="+238">+238</option>
                                <option value="+1345">+1345</option>
                                <option value="+236">+236</option>
                                <option value="+56">+56</option>
                                <option value="+86">+86</option>
                                <option value="+57">+57</option>
                                <option value="+269">+269</option>
                                <option value="+242">+242</option>
                                <option value="+682">+682</option>
                                <option value="+506">+506</option>
                                <option value="+385">+385</option>
                                <option value="+53">+53</option>
                                <option value="+90392">+90392</option>
                                <option value="+357">+357</option>
                                <option value="+42">+42</option>
                                <option value="+45">+45</option>
                                <option value="+253">+253</option>
                                <option value="+1809">+1809</option>
                                <option value="+593">+593</option>
                                <option value="+20">+20</option>
                                <option value="+503">+503</option>
                                <option value="+240">+240</option>
                                <option value="+291">+291</option>
                                <option value="+372">+372</option>
                                <option value="+251">+251</option>
                                <option value="+500">+500</option>
                                <option value="+298">+298</option>
                                <option value="+679">+679</option>
                                <option value="+358">+358</option>
                                <option value="+33">+33</option>
                                <option value="+594">+594</option>
                                <option value="+689">+689</option>
                                <option value="+241">+241</option>
                                <option value="+220">+220</option>
                                <option value="+7880">+7880</option>
                                <option value="+49">+49</option>
                                <option value="+233">+233</option>
                                <option value="+350">+350</option>
                                <option value="+30">+30</option>
                                <option value="+299">+299</option>
                                <option value="+1473">+1473</option>
                                <option value="+590">+590</option>
                                <option value="+671">+671</option>
                                <option value="+502">+502</option>
                                <option value="+224">+224</option>
                                <option value="+245">+245</option>
                                <option value="+592">+592</option>
                                <option value="+509">+509</option>
                                <option value="+504">+504</option>
                                <option value="+852">+852</option>
                                <option value="+36">+36</option>
                                <option value="+354">+354</option>
                                <option value="+91" selected="">+91</option>
                                <option value="+62">+62</option>
                                <option value="+98">+98</option>
                                <option value="+964">+964</option>
                                <option value="+353">+353</option>
                                <option value="+972">+972</option>
                                <option value="+39">+39</option>
                                <option value="+1876">+1876</option>
                                <option value="+81">+81</option>
                                <option value="+962">+962</option>
                                <option value="+7">+7</option>
                                <option value="+254">+254</option>
                                <option value="+686">+686</option>
                                <option value="+850">+850</option>
                                <option value="+82">+82</option>
                                <option value="+965">+965</option>
                                <option value="+996">+996</option>
                                <option value="+856">+856</option>
                                <option value="+371">+371</option>
                                <option value="+961">+961</option>
                                <option value="+266">+266</option>
                                <option value="+231">+231</option>
                                <option value="+218">+218</option>
                                <option value="+417">+417</option>
                                <option value="+370">+370</option>
                                <option value="+352">+352</option>
                                <option value="+853">+853</option>
                                <option value="+389">+389</option>
                                <option value="+261">+261</option>
                                <option value="+265">+265</option>
                                <option value="+60">+60</option>
                                <option value="+960">+960</option>
                                <option value="+223">+223</option>
                                <option value="+356">+356</option>
                                <option value="+692">+692</option>
                                <option value="+596">+596</option>
                                <option value="+222">+222</option>
                                <option value="+52">+52</option>
                                <option value="+691">+691</option>
                                <option value="+373">+373</option>
                                <option value="+377">+377</option>
                                <option value="+976">+976</option>
                                <option value="+1664">+1664</option>
                                <option value="+212">+212</option>
                                <option value="+258">+258</option>
                                <option value="+95">+95</option>
                                <option value="+264">+264</option>
                                <option value="+674">+674</option>
                                <option value="+977">+977</option>
                                <option value="+31">+31</option>
                                <option value="+687">+687</option>
                                <option value="+64">+64</option>
                                <option value="+505">+505</option>
                                <option value="+227">+227</option>
                                <option value="+234">+234</option>
                                <option value="+683">+683</option>
                                <option value="+672">+672</option>
                                <option value="+670">+670</option>
                                <option value="+47">+47</option>
                                <option value="+968">+968</option>
                                <option value="+680">+680</option>
                                <option value="+507">+507</option>
                                <option value="+675">+675</option>
                                <option value="+595">+595</option>
                                <option value="+51">+51</option>
                                <option value="+63">+63</option>
                                <option value="+48">+48</option>
                                <option value="+351">+351</option>
                                <option value="+1787">+1787</option>
                                <option value="+974">+974</option>
                                <option value="+262">+262</option>
                                <option value="+40">+40</option>
                                <option value="+250">+250</option>
                                <option value="+378">+378</option>
                                <option value="+239">+239</option>
                                <option value="+966">+966</option>
                                <option value="+221">+221</option>
                                <option value="+381">+381</option>
                                <option value="+248">+248</option>
                                <option value="+232">+232</option>
                                <option value="+65">+65</option>
                                <option value="+421">+421</option>
                                <option value="+386">+386</option>
                                <option value="+677">+677</option>
                                <option value="+252">+252</option>
                                <option value="+27">+27</option>
                                <option value="+34">+34</option>
                                <option value="+94">+94</option>
                                <option value="+290">+290</option>
                                <option value="+1869">+1869</option>
                                <option value="+1758">+1758</option>
                                <option value="+249">+249</option>
                                <option value="+597">+597</option>
                                <option value="+268">+268</option>
                                <option value="+46">+46</option>
                                <option value="+41">+41</option>
                                <option value="+963">+963</option>
                                <option value="+886">+886</option>
                                <option value="+66">+66</option>
                                <option value="+228">+228</option>
                                <option value="+676">+676</option>
                                <option value="+1868">+1868</option>
                                <option value="+216">+216</option>
                                <option value="+90">+90</option>
                                <option value="+993">+993</option>
                                <option value="+1649">+1649</option>
                                <option value="+688">+688</option>
                                <option value="+44">+44</option>
                                <option value="+256">+256</option>
                                <option value="+380">+380</option>
                                <option value="+971">+971</option>
                                <option value="+598">+598</option>
                                <option value="+678">+678</option>
                                <option value="+379">+379</option>
                                <option value="+58">+58</option>
                                <option value="+84">+84</option>
                                <option value="+681">+681</option>
                                <option value="+969">+969</option>
                                <option value="+967">+967</option>
                                <option value="+260">+260</option>
                                <option value="+263">+263</option>
                            </select>
                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile Number*"
                                required="">
                        </div>
                        <label for="phoneNumber" class="error mobile_verfication" style="display: none;"></label>
                        <button type="submit" id="btnSubmit" class="s-btn">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
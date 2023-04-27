 <style>
     span.error {
         color: red;
     }

     .dates-day-wrapper {
         display: flex;
         gap: 20px;
         align-items: center;
         justify-content: center;
     }


     .ui-datepicker-calendar th:nth-child(1) {
         padding-left: 0px !important;
     }

     .ui-datepicker-calendar td:nth-child(1) {
         padding-left: 0 !important;
     }

     .ui-datepicker-calendar td:nth-child(2) {
         padding-left: 0px !important;
     }

     .ui-datepicker-calendar th:nth-child(3) {
         padding-left: 0px !important;
     }

     .ui-datepicker-calendar th:nth-child(4) {
         padding-left: 0px !important;
     }

     .ui-datepicker-title {
         font-size: 18px !important;
         color: var(--primary-color);
         font-family: Poppins !important;
     }

     .ui-datepicker {
         background-color: #fff;
         box-shadow: 0 0.125rem 0.3rem rgba(0, 0, 0, 0.2) !important;
         border-radius: 0.5rem !important;
         padding: 0.5rem !important;
         border: 1px solid #999 !important;
     }

     .ui-datepicker-calendar thead th {
         color: var(--primary-color) !important;
         font-size: 16px !important;
         font-weight: 400px !important;
     }

     .ui-state-active,
     .ui-widget-content .ui-state-active {
         background-color: var(--primary-color) !important;
         border-color: var(--primary-color) !important;
     }
 </style>
 <!-- ----hero-section--- -->
 <?php if (isset($Host)) { ?>
     <script type="application/javascript" src="<?= $Host . '/merchantpgpui/checkoutjs/merchants/' . $MID ?>.js"></script>
 <?php } ?>
 <section class="hero-section listing-hero-sec">
     <div class="container">
         <!-- <h2>Home /<span>Checkout</span></h2> -->
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a>
                 </li>
                 <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('checkout') ?></li>
             </ol>
         </nav>
     </div>
 </section>

 <!-- ------------shop-cart------------ -->
 <section class="checkout-process-section">
     <img src="<?= $this->theme_base_url ?>/assets/images/checkout-top-right-img.svg" alt="" class="checkout-top-right-img">
     <img src="<?= $this->theme_base_url ?>/assets/images/checkout-mid-left-img.svg" alt="" class="checkout-mid-left-img">
     <img src="<?= $this->theme_base_url ?>/assets/images/checkout-bottom-right-img.svg" alt="" class="checkout-bottom-right-img">
     <div class="container">
         <h2 class="title"> <?= $this->lang->line('checkout') ?> <span> <?= $this->lang->line('Process') ?> </span>
         </h2>
         <!-- <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
         <div class="row">
             <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                 <div class="fill-detali-part">
                     <div class="accordion-items">
                     <?php if(isset($selfPickEnable) && $selfPickEnable == '1' || !empty($userAddress) && $userAddress[0]->user_gst_number != ''){ ?>
                        <div class="main-accordion">
                            <div class="delivery-method-wrap">
                                <form class="accordion-content-2" action="">
                                    <?php if(isset($selfPickEnable) && $selfPickEnable == '1'){ ?>    
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="isSelfPickup" 
                                        <?= (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') ?  "checked" : "" ?>>
                                        <label class="form-check-label" for="isSelfPickup" style="text-transform:capitalize">
                                            <?=$this->lang->line('self pickup')?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($userAddress) && $userAddress[0]->user_gst_number != ''){ ?>
                                    <div class="form-check radio-outer-line">
                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="user_gst_number">
                                        <label class="form-check-label" for="user_gst_number" style="text-transform:capitalize">
                                        <?=$this->lang->line('Use GST Number')?>
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
                                     <div class="address-wrapper">
                                         <div class="address-text mt-3">
                                             <?php foreach ($get_address as $key => $value) { ?>
                                                 <h3> <?= $value->name ?> </h3>
                                                 <p><?= $value->address ?></p>
                                             <?php } ?>
                                         </div>
                                     </div>
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
                                                     <input class="form-check-input 
                                                        <?= $status ?>" id="<?= 'add' . $key ?>" data-id="
                                                        <?= $this->utility->safe_b64encode($value->id) ?>" type="checkbox" <?= ($value->status == '1') ? 'checked' : '' ?>>
                                                     <label class="form-check-label" for="<?= 'add' . $key ?>">
                                                         <?= $this->lang->line('Default') ?>
                                                 </div>
                                             </div>
                                             <div class="address-text mt-3">
                                                 <h3> <?= $value->name ?> </h3>
                                                 <p> <?= $value->address ?> </p>
                                             </div>
                                             <div class="address-icons mt-3">
                                                 <a href="javascript:" class="add-address-btn edit_address" data-id='
                                                            <?= $this->utility->safe_b64encode($value->id) ?>'>
                                                     <i class="fa-solid fa-pen-to-square"></i>
                                                 </a>
                                                 <a href="javascript:" class="delet-address-btn remove_address" data-id="
                                                            <?= $this->utility->safe_b64encode($value->id) ?>">
                                                     <i class="fa-solid fa-trash-can"></i>
                                                 </a>
                                             </div>
                                         </div>
                                     <?php } ?>
                                     <div class="new-address text-end">
                                         <button type="button" id="checkout-add-address" class="new-add">New
                                             Address</button>
                                     </div>
                                     <form method="post" id="RegisterForm" action="<?= base_url() . 'users_account/users/add_address' ?>" class="ship-address" autocomplete="off">
                                         <div class="text-end">
                                             <button type="button" class="ship-close cancel-btn" data-bs-dismiss="modal" aria-label="Close">
                                                 <i class="fa-sharp fa-regular fa-circle-xmark"></i>
                                             </button>
                                         </div>
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <label for="fname" class="form-label"><?= $this->lang->line('Full Name') ?><span>*</span>
                                                 </label>
                                                 <input type="text" name="fname" class="form-control fname" id="fname" aria-describedby="fname" placeholder="<?= $this->lang->line('Full Name') ?>">
                                             </div>
                                             <!-- <div class="col-lg-6"><label for="lname" class="form-label">Last Name<span>*</span></label><input type="email" class="form-control" id="lname" aria-describedby="lname" placeholder="Hussy"></div> -->
                                             <div class="col-lg-12">
                                                 <label for="text" class="form-label"><?= $this->lang->line('Mobile number') ?><span>*</span>
                                                 </label>
                                                 <input type="text" name="phone" class="form-control mob_no" id="text" aria-describedby="text" placeholder="<?= $this->lang->line('Mobile number') ?>">
                                             </div>
                                             <div class="col-lg-12">
                                                 <label for="add" class="form-label">Location <span>*</span>
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
                                                     <label for="state" class="form-label">State <span>*</span>
                                                     </label>
                                                     <input type="text" name="state" class="form-control" id="state" aria-describedby="add" placeholder="<?= $this->lang->line('State') ?>" autocomplete="off">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="select-box">
                                                     <label for="country" class="form-label">Country <span>*</span>
                                                     </label>
                                                     <input type="text" name="country" class="form-control" id="country" aria-describedby="add" placeholder="<?= $this->lang->line('country') ?>" autocomplete="off">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="select-box">
                                                     <label for="pincode" class="form-label">Pincode <span>*</span>
                                                     </label>
                                                     <input type="text" name="pincode" class="form-control pincode" id="pincode" aria-describedby="add" placeholder="<?= $this->lang->line('pincode') ?>" autocomplete="off">
                                                 </div>
                                             </div>
                                             <div class="col-lg-12">
                                                 <div class="select-box">
                                                     <label for="address" class="form-label">Address <span>*</span>
                                                     </label>
                                                     <textarea type="text" name="address" class="form-control pincode" id="address" placeholder="<?= $this->lang->line('Enter Address') ?>" autocomplete="off"></textarea>
                                                 </div>
                                             </div>
                                             <!-- <div class="col-lg-6"><div class="select-box"><label for="state" class="form-label">State<span>*</span></label><select class="form-select" aria-label="Default select example"><option selected>Gujarat</option><option value="1">Surt</option><option value="2">Baroda</option><option value="3">Ohter</option></select></div></div> -->
                                             <!-- <div class="col-lg-6"><div class="select-box"><label for="state" class="form-label">State<span>*</span></label><select class="form-select" aria-label="Default select example"><option selected>Gujarat</option><option value="1">Surt</option><option value="2">Baroda</option><option value="3">Ohter</option></select></div></div> -->
                                             <!-- <div class="col-lg-6"><label for="zipcode" class="form-label">ZIP Code<span>*</span></label><input type="text" class="form-control" id="add" aria-describedby="zipcode" placeholder="380050"></div> -->
                                             <div class="save-btn text-center">
                                                 <button type="submit" id="addAddress" class="signin-btn-green">
                                                     <?= $this->lang->line('Save') ?> </button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         <?php } ?>
                         <div class="main-accordion">
                             <div class="accordion-heading">Delivery Schedule</div>
                             <div class="accordion-content  accordion-content-4">
                                 <div class="dates-day-wrapper">
                                     <?php if ($isDeliveryTimeDate == '1' || isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                                     <?php } ?>
                                     <div id="datepicker"></div>
                                 </div>
                                 <?php if (isset($_SESSION['isSelfPickup']) && $_SESSION['isSelfPickup'] == '1') { ?>
                                     <div class="time-wrapper">
                                         <h3><?= $this->lang->line('Pickup Timing') ?></h3>
                                         <p><?= $selfPickupTimeChart[0]->selfPickupOpenClosingTiming ?></p>
                                     </div>
                                 <?php } else { ?>
                                     <div class="time-wrapper">
                                         <?php foreach ($time_slot as $key => $value) { ?>
                                             <div class="form-check">
                                                 <input class="time_slot_checked form-check-input" type="radio" id="<?= "Default-" . $key ?>" name="time_slot" value=" <?= $value->id ?>" <?= ($value->id == $time_slot[0]->id) ? 'checked' : '' ?>>
                                                 <label class="form-check-label" for="<?= "Default-" . $key ?>">
                                                     <?= $value->start_time ?> -
                                                     <?= $value->end_time ?> </label>
                                             </div>
                                         <?php } ?>
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
                                             <label class="form-check-label" for="Credit/Debit Card">
                                                 <?= $this->lang->line('Credit/Debit Card') ?> </label>
                                         </div>
                                     <?php } ?>
                                     <?php if ($isCOD == '1') { ?>
                                         <div class="form-check radio-outer-line">
                                             <input class="form-check-input pay-chk" type="radio" name="flexRadioDefault2" id="Cash On Delivery" value="0" <?= ($isCOD == '1' && $isOnlinePayment == '0') ? 'checked' : '' ?>>
                                             <label class="form-check-label" for="Cash On Delivery">
                                                 <?= $this->lang->line('Cash On Delivery') ?> </label>
                                         </div>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                 <div class="checkout-order-detils">
                     <div class="mydiv-wrapper">
                         <div class="mydiv-header">
                             <h3><?= $this->lang->line('Your Orders') ?></h3>
                         </div> <?php foreach ($mycart as $key => $value) { ?>

                             <div class="order-wrapper">
                                 <div class="order-wrapper-img">
                                     <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                         <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                                     </a>
                                 </div>
                                 <div class="order-wrapper-text">
                                     <h4>
                                         <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                             <?= $value->product_name ?> </a>
                                     </h4>
                                     <h5> <?= $value->weight_no . ' ' . $value->weight_name ?> </h5>
                                     <h3> <?= $this->siteCurrency . number_format((float)$value->discount_price, '2', '.', '') ?>
                                     </h3>
                                 </div>
                             </div> <?php } ?>
                     </div>
                     <!-- <div class="coupon-code-wrapper"><h3><span><i class="fa fa-tag" aria-hidden="true"></i></span>Have a coupon?<a href="">Click here to enter your code</a></h3></div> -->
                     <?php if (!$shopping_based_discount > 0) { ?>
                         <div class="have-code-part">
                             <div class="input-group mb-3">
                                 <label for="text">If you have a coupon code, please apply it below.</label>
                                 <br>
                                 <div class="promo-apply-wrapper">
                                     <input type="text" class="form-control" id="promocode" placeholder="Enter Promocode" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                     <br>
                                     <span class="error" id="promo_err"></span>
                                     <button type="text" class="input-group-text" id="checkPromocode">Apply</button>
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
                                     <td class="cart-total-text-1">
                                         <?= $this->lang->line('Sub Total') ?> <br>
                                         (<?= ($isShow[0]->display_price_with_gst == '1') ? $this->lang->line('exclude') : $this->lang->line('Inc') ?>Tax)
                                     </td>
                                     <td class="cart-total-text-2">
                                         <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                         <span id="checkout_subtotal"> <?= $getMycartSubtotal ?> </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="cart-total-text-1"> <?= $this->lang->line('Tax (Gst)') ?> </td>
                                     <td class="cart-total-text-2">
                                         <span class='notranslate'> <?= $this->siteCurrency ?> </span>
                                         <span> <?= $TotalGstAmount ?> </span>
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
                     <input type="hidden" id="applied_promo">
                     <?php if ($phone == '0' || $is_verify == '0') { ?>
                         <button type="button" class="place-order-btn" id="verify"><?= $this->lang->line('Verify Mobile') ?></button>
                     <?php } else { ?>
                         <button class="place-order-btn" id="payBtn"> <?= $this->lang->line('Place order') ?> </button>
                         <a href="<?= base_url() . 'home' ?>" class="place-order-btn" id="myBtn"><?= $this->lang->line('Cancel') ?></a>

                     <?php } ?>
                     <div class="our-secure-product">
                         <div class="secure-product-wrapper">
                             <div class="icon">
                                 <a href="javascript:"><img src="<?= $this->theme_base_url ?>/assets/images/ShieldCheck.svg" alt=""></a>
                             </div>
                             <div class="text">
                                 <h3><?= $this->lang->line('100 Genuine Products') ?></h3>
                             </div>
                         </div>
                         <div class="secure-product-wrapper">
                             <div class="icon">
                                 <a href="javascript:">
                                     <img src="<?= $this->theme_base_url ?>/assets/images/Medal.svg" alt=""></a>
                             </div>
                             <div class="text">
                                 <h3><?= $this->lang->line('Secure Payments') ?></h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </section>


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
                     <br>
                     <button type="submit" id="btnSubmit"><?= $this->lang->line('Submit') ?></button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- =============place order popup=========== -->
 <div id="order_success" class="modal">
     <div class="container">
         <div class="modal-content">
             <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
             <div class="login-page">
                 <div class="container">
                     <img src="<?= $this->theme_base_url ?>/assets/images/login-center-border-img.png" alt="" class="login-center-border-img">
                     <div class="center-img">
                         <img src="<?= $this->theme_base_url ?>/assets/images/login-center-img.png" alt="">
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
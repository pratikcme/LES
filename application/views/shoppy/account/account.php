<section class="hero-section login-section common-banner-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-left-bg.png" alt="err" class="left-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-right-bg.png" alt="err" class="right-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1> <?= $this->lang->line('My account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- ------------myaccoutn-section------------ -->
<section class="my-account-section p-100">
    <div class="container">

        <!-- ------tabs-part--- -->
        <div class="account-details-tabs">
            <div class="details-tabs">
                <!-- Nav pills -->
                <div class="mobile-responsive-tab">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs <?= ($action_name == 'my_account' || $action_name == '') ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-1"><?= $this->lang->line('My account') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs experience-active-img <?= ($action_name == 'order') ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-2"><?= $this->lang->line('My orders') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs eduction-active-img <?= ($action_name == 'wishlist') ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-3"><?= $this->lang->line('My Wishlist') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs certificates-active-img <?= ($action_name == 'my_address') ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-4"><?= $this->lang->line('My address') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs certificates-active-img <?= ($action_name == 'change') ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-7">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs languge-active-img" id="logout" data-bs-toggle="pill" href="#tab-5"><?= $this->lang->line('logout') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard-tabs languge-active-img" id="delete_account" data-bs-toggle="pill" href="#tab-6"><?= $this->lang->line('Delete Account') ?></a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Tab panes -->
            <div class="tab-details">
                <div class="tab-content">
                    <!-- ---tab-1-- -->
                    <div id="tab-1" class="container tab-pane fade active show">
                        <div class="col-xxl-12">
                            <div class="title text-center">
                                <h2>Account <span>Details</span></h2>
                            </div>
                        </div>
                        <div class="myaccout-detail-tab">

                            <form class="get-detials-account" id='ChangePass' enctype="multipart/form-data" action="<?= base_url() . 'users_account/users/account' ?>" method="post">

                                <input type="hidden" name="hidden_image" value="<?= $userDetails[0]->profileimage ?>">
                                <div class="choose-img">
                                    <input type="file" name="profileimage" class="choose-input" accept="image/*" onchange="loadFile(event)">
                                    <img src="<?= ($userDetails[0]->profileimage != '') ? base_url() . 'public/images/' . $this->folder . 'user_profile/' . $userDetails[0]->profileimage : $this->theme_base_url . '/assets/images/myaccount-choose-img.png' ?>" alt="" id="output" class="button">
                                    <button type="button" class="choose-btn"><i class="fa-solid fa-camera"></i></button>
                                </div>

                                <div class="row">
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="fname" class="form-label">First Name<span>*</span></label>
                                            <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="<?= $this->lang->line('First Name*') ?>" value="<?= $userDetails[0]->fname ?>">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="lname" class="form-label">Last Name<span>*</span></label>
                                            <input type="text" class="form-control" name="lname" placeholder="<?= $this->lang->line('Last Name*') ?>" value="<?= $userDetails[0]->lname ?>" id="lname" aria-describedby="lname">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address<span>*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="<?= $this->lang->line('Email*') ?>" value="<?= $userDetails[0]->email ?>" readonly aria-describedby="email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="mb-3">
                                            <label for="text" class="form-label">GST Number<span>*</span></label>
                                            <input type="text" class="form-control" name="user_gst_number" placeholder="<?= $this->lang->line('Gst number') ?>" value="<?= $userDetails[0]->user_gst_number ?>" aria-describedby="text" placeholder="22AAAAA0000A1Z5">

                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="tab-select-box">
                                            <label for="Country-code" class="form-label">Country
                                                Code<span>*</span></label>
                                            <select class="form-select" name="country_code" id="country_code" aria-label="Country-code">
                                                <?php foreach (GetDialcodelist() as $key => $value) { ?>
                                                    <option <?= ($key == $userDetails[0]->country_code) ? 'selected' : ''; ?> value="<?= $key; ?>"><?= $value; ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <input type="hidden" id="exiting_country" value="<?= $userDetails[0]->country_code ?>">
                                    <input type="hidden" id="exiting_phone" value="<?= $userDetails[0]->phone ?>">
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="m-number" class="form-label">Mobile
                                                Number<span>*</span></label>
                                            <input type="tel" class="form-control phone" id="phone" name="phone" aria-describedby="text" placeholder="<?= $this->lang->line('Mobile Number*') ?>" value="<?= $userDetails[0]->phone ?>">
                                        </div>
                                    </div>

                                    <div class="col-xxl-12 col-md-12 varification" style="display: none;">
                                        <div class="mb-3">
                                            <label for="otp" class="form-label">Otp<span>*</span></label>
                                            <input type="text" class="form-control" id="otp" name="otp" placeholder="<?= $this->lang->line('otp') ?>">
                                        </div>
                                    </div>
                                    <div class="tab-save-btn">

                                        <input type="submit" class="common-input-btn" id="btnAccSubmit" value="<?= $this->lang->line('Save') ?>" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- ---tab-2-- -->
                    <div id="tab-2" class="container tab-pane fade  <?= ($action_name == 'order') ? 'active show' : '' ?>">
                        <div class="col-xxl-12">
                            <div class="title text-center">
                                <h2>My <span>Orders</span></h2>
                            </div>
                        </div>

                        <div class="sub-tabs container">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link dashboard-tabs active" data-bs-toggle="pill" href="#subtab-1"><?= $this->lang->line('Completed') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dashboard-tabs experience-active-img" data-bs-toggle="pill" href="#subtab-2"><?= $this->lang->line('Process') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dashboard-tabs eduction-active-img" data-bs-toggle="pill" href="#subtab-3"><?= $this->lang->line('Cancel') ?></a>
                                </li>
                            </ul>
                        </div>

                        <div class="my-order-details">
                            <div class="tab-content">
                                <div class="accordion-items">
                                    <!-- ------sub-tab-1----- -->
                                    <div id="subtab-1" class="container tab-pane active show fade">
                                        <?php foreach ($order as $key => $value) {
                                            if ($value->order_status != '8') {
                                                continue;
                                            }
                                            date_default_timezone_set('Asia/Kolkata');
                                            $date =  date('d M Y, h:i A', $value->dt_updated);
                                            if ($value->order_status == '1') {
                                                $status = 'Processing';
                                            } elseif ($value->order_status == '2') {
                                                $status = 'Pending';
                                            } elseif ($value->order_status == '3') {
                                                $status = 'Ready';
                                            } elseif ($value->order_status == '4') {
                                                $status = 'Pickup';
                                            } elseif ($value->order_status == '5') {
                                                $status = 'on the way';
                                            } elseif ($value->order_status == '8') {
                                                $status = 'Delivered';
                                            } else {
                                                $status = 'Cancel';
                                            }
                                        ?>
                                            <div class="main-accordion">
                                                <div class="accordion-heading">
                                                    <a href="#" class="delivered-btn"><?= $status ?></a>

                                                    <div class="my-order-text">
                                                        <h3>Order Number:
                                                            <span><?= str_replace('Order', '', $value->order_no); ?></span>
                                                        </h3>
                                                        <h3>Delivered to: <span> <?= $value->delivered_address ?></span>
                                                        </h3>
                                                        <p><span><i class="fa-regular fa-clock"></i></span><?= $date ?></p>
                                                    </div>
                                                </div>
                                                <div class="accordion-content">
                                                    <?php foreach ($value->orderDetails as $k => $v) { ?>

                                                        <div class="my-order-details-content">
                                                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($v->product_id) . '/' . $this->utility->safe_b64encode($v->product_weight_id) ?>">
                                                                <div class="order-details-img">
                                                                    <div class="accordion-img-wrapper">
                                                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $v->product_image ?>" alt="err">
                                                                    </div>
                                                                    <div class="img-about-text">
                                                                        <h3><?= $v->product_name ?></h3>
                                                                        <h5><?= $v->weight_number . ' ' . $v->weight_name ?>
                                                                        </h5>
                                                                        <p>Qty: <span><?= $v->quantity ?></span></p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="accordion-price-text">
                                                                <h4><?= $this->siteCurrency . ' ' . numberFormat($v->discount_price) ?>
                                                                </h4>
                                                            </div>
                                                        </div>

                                                    <?php } ?>


                                                    <table class="table all-detalis-left all-detalis-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$order[$key]->sub_total + $order[$key]->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <?php if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <h4><?= $this->lang->line('Cart Discount') ?></h4>
                                                                    </td>
                                                                    <td>
                                                                        <h3 class="notranslate">
                                                                            -<?= $this->siteCurrency . ' ' . number_format((float)$value->shopping_amount_based_discount, 2, '.', '') ?>
                                                                        </h3>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Product Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount Before Tax') ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->sub_total - $value->TotalGstAmount, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Tax Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $order[$key]->TotalGstAmount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Delivery Charges') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= ($value->delivery_charge != '0') ? $this->siteCurrency . ' ' . number_format($value->delivery_charge, 2, '.', '') : 'FREE' ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Item') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?= $value->total_item ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Promocode Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $value->promocode_discount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Final Total') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?php
                                                                                            $final_total = numberFormat($order[$key]->sub_total + $order[$key]->total_saving);
                                                                                            if ($value->delivery_charge != '0') {
                                                                                                $final_total  += numberFormat($value->delivery_charge);
                                                                                            }
                                                                                            if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) {
                                                                                                $final_total  -= numberFormat($value->shopping_amount_based_discount);
                                                                                            }
                                                                                            if (numberFormat($value->promocode_discount) > 0) {
                                                                                                $final_total  -= numberFormat($value->promocode_discount);
                                                                                            }
                                                                                            echo $this->siteCurrency . ' ' . numberFormat($final_total);
                                                                                            ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= ($value->isSelfPickup == '1') ? $this->lang->line('self pickup otp') : "OTP" ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $value->isSelfPickup_details[0]->otp ?></h3>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <!-- ------sub-tab-2----- -->
                                    <div id="subtab-2" class="container tab-pane fade">
                                        <?php foreach ($order as $key => $value) {
                                            if ($value->order_status == '8' || $value->order_status == '9') {
                                                continue;
                                            }
                                            date_default_timezone_set('Asia/Kolkata');
                                            $date =  date('d M Y, h:i A', $value->dt_updated);
                                            if ($value->order_status == '1') {
                                                $status = 'Processing';
                                            } elseif ($value->order_status == '2') {
                                                $status = 'Pending';
                                            } elseif ($value->order_status == '3') {
                                                $status = 'Ready';
                                            } elseif ($value->order_status == '4') {
                                                $status = 'Pickup';
                                            } elseif ($value->order_status == '5') {
                                                $status = 'on the way';
                                            } elseif ($value->order_status == '8') {
                                                $status = 'Delivered';
                                            } else {
                                                $status = 'Cancel';
                                            }
                                        ?>
                                            <div class="main-accordion">
                                                <div class="accordion-heading">
                                                    <a href="" class="delivered-btn"><?= $status ?></a>

                                                    <div class="my-order-text">
                                                        <h3>Order Number:
                                                            <span><?= str_replace('Order', '', $value->order_no); ?></span>
                                                        </h3>
                                                        <h3>Delivered to: <span> <?= $value->delivered_address ?></span>
                                                        </h3>
                                                        <p><span><i class="fa-regular fa-clock"></i></span><?= $date ?></p>
                                                    </div>
                                                </div>

                                                <div class="accordion-content">

                                                    <?php foreach ($value->orderDetails as $k => $v) { ?>

                                                        <div class="my-order-details-content">
                                                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($v->product_id) . '/' . $this->utility->safe_b64encode($v->product_weight_id) ?>">
                                                                <div class="order-details-img">
                                                                    <div class="accordion-img-wrapper">
                                                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $v->product_image ?>" alt="">
                                                                    </div>
                                                                    <div class="img-about-text">
                                                                        <h3><?= $v->product_name ?></h3>
                                                                        <h5><?= $v->weight_number . ' ' . $v->weight_name ?>
                                                                        </h5>
                                                                        <p>Qty: <span><?= $v->quantity ?></span></p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="accordion-price-text">
                                                                <h4><?= $this->siteCurrency . ' ' . numberFormat($v->discount_price) ?>
                                                                </h4>
                                                            </div>
                                                        </div>

                                                    <?php } ?>

                                                    <table class="table all-detalis-left all-detalis-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$order[$key]->sub_total + $order[$key]->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <?php if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <h4><?= $this->lang->line('Cart Discount') ?></h4>
                                                                    </td>
                                                                    <td>
                                                                        <h3 class="notranslate">
                                                                            -<?= $this->siteCurrency . ' ' . number_format((float)$value->shopping_amount_based_discount, 2, '.', '') ?>
                                                                        </h3>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Product Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount Before Tax') ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->sub_total - $value->TotalGstAmount, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Tax Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $order[$key]->TotalGstAmount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Delivery Charges') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= ($value->delivery_charge != '0') ? $this->siteCurrency . ' ' . number_format($value->delivery_charge, 2, '.', '') : 'FREE' ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Item') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?= $value->total_item ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Promocode Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $value->promocode_discount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Final Total') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?php
                                                                                            $final_total = numberFormat($order[$key]->sub_total + $order[$key]->total_saving);
                                                                                            if ($value->delivery_charge != '0') {
                                                                                                $final_total  += numberFormat($value->delivery_charge);
                                                                                            }
                                                                                            if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) {
                                                                                                $final_total  -= numberFormat($value->shopping_amount_based_discount);
                                                                                            }
                                                                                            if (numberFormat($value->promocode_discount) > 0) {
                                                                                                $final_total  -= numberFormat($value->promocode_discount);
                                                                                            }
                                                                                            echo $this->siteCurrency . ' ' . numberFormat($final_total);
                                                                                            ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= ($value->isSelfPickup == '1') ? $this->lang->line('self pickup otp') : "OTP" ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $value->isSelfPickup_details[0]->otp ?></h3>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php if ($value->order_status <= '5') { ?>
                                                        <button type="button" data-href="<?= base_url() . 'orders/cancle_order/' . $this->utility->safe_b64encode($value->id) ?>" class="cancel-btn lg-btn cncOrder"><?= $this->lang->line('Cancel Order') ?></button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <!-- ------sub-tab-2----- -->
                                    <div id="subtab-3" class="container tab-pane fade">

                                        <?php foreach ($order as $key => $value) {
                                            if ($value->order_status != '9') {
                                                continue;
                                            }
                                            date_default_timezone_set('Asia/Kolkata');
                                            $date =  date('d M Y, h:i A', $value->dt_updated);
                                            if ($value->order_status == '1') {
                                                $status = 'Processing';
                                            } elseif ($value->order_status == '2') {
                                                $status = 'Pending';
                                            } elseif ($value->order_status == '3') {
                                                $status = 'Ready';
                                            } elseif ($value->order_status == '4') {
                                                $status = 'Pickup';
                                            } elseif ($value->order_status == '5') {
                                                $status = 'on the way';
                                            } elseif ($value->order_status == '8') {
                                                $status = 'Delivered';
                                            } else {
                                                $status = 'Cancel';
                                            }
                                        ?>
                                            <div class="main-accordion">
                                                <div class="accordion-heading">
                                                    <a href="" class="delivered-btn"><?= $status ?></a>

                                                    <div class="my-order-text">
                                                        <h3>Order Number:
                                                            <span><?= str_replace('Order', '', $value->order_no); ?></span>
                                                        </h3>
                                                        <h3>Delivered to: <span> <?= $value->delivered_address ?></span>
                                                        </h3>
                                                        <p><span><i class="fa-regular fa-clock"></i></span><?= $date ?></p>
                                                    </div>
                                                </div>
                                                <div class="accordion-content">

                                                    <?php foreach ($value->orderDetails as $k => $v) { ?>

                                                        <div class="my-order-details-content">
                                                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($v->product_id) . '/' . $this->utility->safe_b64encode($v->product_weight_id) ?>">
                                                                <div class="order-details-img">
                                                                    <div class="accordion-img-wrapper">
                                                                        <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $v->product_image ?>" alt="err">
                                                                    </div>
                                                                    <div class="img-about-text">
                                                                        <h3><?= $v->product_name ?></h3>
                                                                        <h5><?= $v->weight_number . ' ' . $v->weight_name ?>
                                                                        </h5>
                                                                        <p>Qty: <span><?= $v->quantity ?></span></p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <div class="accordion-price-text">
                                                                <h4><?= $this->siteCurrency . ' ' . numberFormat($v->discount_price) ?>
                                                                </h4>
                                                            </div>
                                                        </div>

                                                    <?php } ?>

                                                    <table class="table all-detalis-left all-detalis-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$order[$key]->sub_total + $order[$key]->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <?php if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <h4><?= $this->lang->line('Cart Discount') ?></h4>
                                                                    </td>
                                                                    <td>
                                                                        <h3 class="notranslate">
                                                                            -<?= $this->siteCurrency . ' ' . number_format((float)$value->shopping_amount_based_discount, 2, '.', '') ?>
                                                                        </h3>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Product Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->total_saving, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Amount Before Tax') ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . number_format((float)$value->sub_total - $value->TotalGstAmount, 2, '.', '') ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Tax Amount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $order[$key]->TotalGstAmount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Delivery Charges') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= ($value->delivery_charge != '0') ? $this->siteCurrency . ' ' . number_format($value->delivery_charge, 2, '.', '') : 'FREE' ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Total Item') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?= $value->total_item ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Promocode Discount') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $this->siteCurrency . ' ' . $value->promocode_discount ?>
                                                                    </h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?= $this->lang->line('Final Total') ?></h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate"><?php
                                                                                            $final_total = numberFormat($order[$key]->sub_total + $order[$key]->total_saving);
                                                                                            if ($value->delivery_charge != '0') {
                                                                                                $final_total  += numberFormat($value->delivery_charge);
                                                                                            }
                                                                                            if ($value->shopping_amount_based_discount != '0' && $value->shopping_amount_based_discount != NULL) {
                                                                                                $final_total  -= numberFormat($value->shopping_amount_based_discount);
                                                                                            }
                                                                                            if (numberFormat($value->promocode_discount) > 0) {
                                                                                                $final_total  -= numberFormat($value->promocode_discount);
                                                                                            }
                                                                                            echo $this->siteCurrency . ' ' . numberFormat($final_total);
                                                                                            ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4><?php
                                                                        if ($value->isSelfPickup == '1') {
                                                                            $this->lang->line('self pickup otp');
                                                                        } else {
                                                                            if ($value->isSelfPickup_details[0]->otp != "") {
                                                                                echo  "OTP";
                                                                            }
                                                                        } ?>
                                                                    </h4>
                                                                </td>
                                                                <td>
                                                                    <h3 class="notranslate">
                                                                        <?= $value->isSelfPickup_details[0]->otp ?></h3>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- ---tab-3-- -->
                <div id="tab-3" class="container tab-pane fade <?= ($action_name == 'wishlist') ? 'active show' : '' ?>">
                    <div class="col-xxl-12">
                        <div class="title text-center">
                            <h2>My <span>Wishlist</span></h2>
                        </div>
                    </div>

                    <div class="cart-product-detail mywishlist-part">
                        <table id="table-two-axis" class="two-axis">
                            <thead class="head-title">
                                <tr>
                                    <th colspan="2">product</th>
                                    <th>price</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($wishlist as $key => $value) { ?>
                                    <tr>
                                        <td class="mywishlist-part-img">
                                            <a href="#" class="removeWishlistItem" data-id="<?= $this->utility->safe_b64encode($value->id) ?>"><i class="fa-solid fa-xmark"></i></a>
                                            <div class="cart-detail-img">
                                                <div class="cart-detail-img">
                                                    <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><img src="<?= $value->image ?>" alt="err"></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-detail-text">

                                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                                    <h4><?= $value->name ?></h4>
                                                    <h5><?= $value->weight_no . ' ' . $value->weight_name ?></h5>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price-text">
                                                <h3 class="notranslate">
                                                    <?= $this->siteCurrency . ' ' . numberFormat($value->discount_price) ?>
                                                </h3>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                            <?php
                                            $d_none = '';
                                            $d_show = 'd-none';
                                            if (!empty($item_weight_id)) {
                                                if (in_array($value->product_weight_id, $item_weight_id)) {
                                                    $d_show = '';
                                                    $d_none = 'd-none';
                                                }
                                            }
                                            ?>
                                            <div>
                                                <a href="javascript:" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->product_id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->product_weight_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart
                                                </a>
                                                <div class="product-detail-quentity <?= $d_show ?>">
                                                    <div class="qty-container">
                                                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                                        <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>" readonly>
                                                        <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->product_weight_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- ---tab-4-- -->
                <div id="tab-4" class="container tab-pane fade <?= ($action_name == 'my_address') ? 'active show' : '' ?> ">
                    <div class="col-xxl-12">
                        <div class="title text-center">
                            <h2>My <span>Address</span></h2>
                        </div>
                    </div>

                    <div class="main-add-div">

                        <?php foreach ($get_address as $key => $value) {
                            $status = ($value->status == '0') ? 'is_default ' : '';
                        ?>
                            <div class="address-wrapper">
                                <div class="address-text">
                                    <div class="ship-check">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input default_check chek <?= $status ?>" data-id="<?= $this->utility->safe_b64encode($value->id) ?>" <?= ($value->status == '1') ? 'checked' : '' ?> id="<?= 'add' . $key ?>">
                                        </div>
                                    </div>
                                    <h3><?= $value->name ?></h3>
                                    <div class="address-icons">
                                        <a href="javascript:;" class="add-address-btn edit_address" data-id='<?= $this->utility->safe_b64encode($value->id) ?>'><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="javascript:;" class="delet-address-btn remove_address" data-id='<?= $this->utility->safe_b64encode($value->id) ?>'><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </div>
                                <p><?= $value->address ?></p>
                            </div>

                        <?php } ?>
                    </div>

                    <div class="edit-address-btn text-center mt-5">
                        <button type="button" id="myBtn" class="cancel-btn" data-toggle="modal">Add
                            Address</button>
                    </div>
                </div>

                <!-- ---tab-5-- -->
                <div id="tab-5" class="container tab-pane fade">

                </div>

                <!-- ---tab-7-- -->
                <div id="tab-7" class="container tab-pane fade <?= ($action_name == 'change') ? 'active show' : '' ?>">
                    <div class="title text-center">
                        <h2>Change <span>Password</span></h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                    </div>
                    <div class="myaccout-detail-tab">
                        <form id='ChangeUserPass' action="<?= base_url() . 'users_account/users/update_password' ?>" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="old_pass" placeholder="<?= $this->lang->line('current password') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="text" class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="new_pass" id="password_new" placeholder="<?= $this->lang->line('new password') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_pass" placeholder="<?= $this->lang->line('Confirm password') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="tab-save-btn">
                                    <button class="common-input-btn" type="submit" id="btnChangeUserPass"><?= $this->lang->line('Submit') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<input type="hidden" id="get_parameter" value="<?= (isset($_GET['name']) ? $_GET['name'] : '') ?>">

<div id="myModal" class="modal">
    <div class="container">
        <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page myaccout-detail-tab">
                <h3 id='address_title'><?= $this->lang->line('Add New Address') ?></h3>
                <form class="get-detials-account" method="post" id="RegisterForm" action="<?= base_url() . 'users_account/users/add_address' ?>" autocomplete="off">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="full_name" class="form-label">Full Name<span>*</span></label>
                            <input type="text" name="fname" class="form-control fname" id="full_name" aria-describedby="fname" placeholder="<?= $this->lang->line('Full Name') ?>">
                        </div>

                        <div class="col-lg-12">
                            <label for="text" class="form-label">Mobile Number<span>*</span></label>
                            <input type="text" name="phone" class="form-control mob_no" id="text" aria-describedby="text" placeholder="<?= $this->lang->line('Mobile number') ?>">
                        </div>

                        <div class="col-lg-12">
                            <label for="add" class="form-label">Location<span>*</span></label>
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
                                <label for="city" class="form-label">Town / City<span>*</span></label>
                                <input type="text" name="city" class="form-control" id="city" aria-describedby="add" placeholder="<?= $this->lang->line('city') ?>" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="select-box">
                                <label for="state" class="form-label">State<span>*</span></label>
                                <input type="text" name="state" class="form-control" id="state" aria-describedby="add" placeholder="<?= $this->lang->line('State') ?>" autocomplete="off">
                            </div>
                        </div>



                        <div class="col-lg-6">
                            <div class="select-box">
                                <label for="country" class="form-label">Country<span>*</span></label>
                                <input type="text" name="country" class="form-control" id="country" aria-describedby="add" placeholder="<?= $this->lang->line('country') ?>" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="select-box">
                                <label for="pincode" class="form-label">Pincode<span>*</span></label>
                                <input type="text" name="pincode" class="form-control pincode" id="pincode" aria-describedby="add" placeholder="<?= $this->lang->line('pincode') ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="select-box">
                                <label for="address" class="form-label">Address<span>*</span></label>
                                <textarea name="address" placeholder="<?= $this->lang->line('Enter Address') ?>" class="form-control pincode" id="address" autocomplete="off"></textarea>
                            </div>
                        </div>

                        <div class="save-btn">
                            <button type="submit" id="addAddress"><?= $this->lang->line('Save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
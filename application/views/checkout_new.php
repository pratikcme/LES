<?php
include 'header.php';
//echo '1';die;

$vendor_id = $this->session->userdata('id');
?>

<section id="main-content">
    <section class="wrapper">
        <div class="container-fluid">
            <div id="msg">
                <?php if ($this->session->flashdata('myMessage') != '') {
                    echo $this->session->flashdata('myMessage');
                } ?>
                <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-success fade in">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php }
                unset($this->session->flashdata); ?>
            </div>
            <div class="row">
                <?php if (!empty($register_result)) { ?>
                <?php if ($register_result[0]->type == '1') { ?>

                <!-- start new quick -->
                <div class="col-lg-6">
                    <div class="top">
                        <div class="input-box w-100">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search product or start scanning..." id="search_prod" />
                        </div>
                        <!-- <button class="btn-apply"> <img src="./assets/images/scan.svg" alt=""> <span> Scan
                                        Barcode</span></button> -->
                    </div>
                    <div id="prod-list">
                    </div>
                    <div class="cmn-bg h-auto quick-keys-title">
                        <div class="title">
                            <h5>Quick Keys</h5>
                        </div>
                        <div class="set-up-quick-keys-btn-wrap pb-0">
                            <p>Create Your Custom Quicks Keys For Most Popular, Product And Speed Up Checkout</p>
                            <button type="button" class="border-btn" id="quick_keys" data-toggle="modal"
                                data-target="#quick-keys">
                                Set Up Quick Keys
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <div class="quick-keys-wrap">
                            <?php foreach ($IsPosMostLike as $key => $value) : ?>

                            <div class="quick-view-wrap add_quick_product" data-product_id="<?= $value->product_id ?>"
                                data-pw_id="<?= $value->id ?>">
                                <p><?= $value->name ?></p>
                                <div class="badges-wrap">
                                    <span class="badge-pink"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
                                </div>
                                <span class="delete-wrap remove_quick_list_item" data-pw_id="<?= $value->id ?>">
                                    <img src="<?= base_url() ?>/public/admin_product_page_assets/images/delete.svg"
                                        alt="delete" class="deleteIcon">
                                </span>
                            </div>

                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
                <!-- end new quick -->
                <div class="col-lg-6">
                    <!-- add form Dipesh -->
                    <!-- form with new Design -->

                    <form method="post" action="<?php echo base_url() . 'sell_development/order_checkout/'; ?>"
                        id="paypal_form" class="paypal" name="checkout_sell">
                        <!-- novalidate changed by Dipesh -->
                        <input type="hidden" name="vendor_id" id="user_id" value="<?php echo $vendor_id; ?>">
                        <input type="hidden" name="customer" id="set_customer"
                            value="<?= (isset($order_temp_result[0]->customer_id)) ? $order_temp_result[0]->customer_id : 0 ?>">
                        <input type="hidden" name="hidden_subtotal" id="hidden_subtotal" value="0.00">
                        <input type="hidden" name="hidden_discount_total" id="hidden_discount_total"
                            value="<?= $total_savings ?>">
                        <input type="hidden" name="hidden_total" id="hidden_total" value="0.00">
                        <input type="hidden" name="hidden_total_pay" id="hidden_total_pay" value="0.00">
                        <input type="hidden" name="paypal_amount" id="paypal_amount" value="0.00">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="lc" value="UK" />
                        <input type="hidden" name="currency" id="currency" value="<?= $currency ?>">
                        <input type="hidden" name="currency_code" value="<?= $currency_code ?>">
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="shopping_based_discount" value="<?= $shopping_based_discount ?>"
                            id="shopping_based_discount">
                        <input type="hidden" name="isShow" id="isShow" value="<?= $isShow ?>">
                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                        <input type="hidden" name="applied" id="applied" value="false">
                        <input type="hidden" name="parked_order_id" id="parked_order_id"
                            value="<?= $parked_order_id ?>">
                        <!-- Dk added -->
                        <input type="hidden" name="register_id" value="<?php if (!empty($register_result)) {
                                                                                    echo $register_result[0]->id;
                                                                                } ?>" />

                        <!-- check -->
                        <div class="top justify-content-end">
                            <div class="button-top d-flex justify-content-end">
                                <?php
                                        if (isset($parked_order_id) && !empty($parked_order_id)) {
                                        ?>
                                <span id="changeParkTime" class="border-btn d-inline-block active">Back To Main
                                    Cart</span>
                                <?php
                                        } else {
                                        ?>
                                <span class="border-btn d-inline-block active" id="retriveBtn">Retrieve
                                    Sale</span>
                                <?php
                                        }
                                        ?>

                                <button class="border-btn d-inline-block" id="parked_sell" name="parked_sell"
                                    value="Park Sale">Park
                                    Sale</button>

                                <button type="button" class="border-btn d-inline-block discard_class"
                                    id="<?= (isset($parked_order_id) && !empty($parked_order_id)) ? 'discard_parked_sell' : 'discard_sell' ?>">Discard
                                    Sale</button>
                                <!-- <span class="border-btn d-inline-block active">Retrieve Sale</span>
                                    <span class="border-btn d-inline-block">Park Sale</span>
                                    <span class="border-btn d-inline-block">Discard Sale</span> -->
                            </div>
                        </div>
                        <div id="myDropdown" class="dropdown-content">
                            <ul>
                                <li>
                                    <h5>Parked Sale</h5>
                                </li>
                                <?php
                                        foreach ($order_row as $key => $value) { ?>
                                <li class="popover-list-item">
                                    <a
                                        href="<?= base_url() . 'sell_development/index?parkedId=' . base64_encode($value->id); ?>">
                                        <div class="">
                                            <div class="list-items">
                                                <h4>Parked By <?= $value->vendor_name ?>
                                                </h4>
                                                <span><?= $value->customerData['customer_name'] ?></span>
                                                <span><?= $value->customerData['customercode'] ?></span>
                                                <p>Parked
                                                    <?= time_ago($value->dt_added, DATE_TIME) ?>
                                                    ago</p>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="cmn-bg mt-3">
                            <div class="input-box add-customer">
                                <i class="fas fa-plus"></i>
                                <input type="text" placeholder="Add Customer" name="add_customer" id="add_customer" />
                            </div>
                            <div id="message">
                            </div>
                            <div class="cart-product-detail">
                                <ul id='selected_customber'>
                                    <?php if (!empty($order_temp_result) && $order_temp_result[0]->customer_id != 0) { ?>
                                    <ul>
                                        <li class="popover-list-item" id="display_customer">
                                            <a href="javascript:">
                                                <div class="customer-wrap">
                                                    <div class="profile-avatar">
                                                        <?= $order_temp_result[0]->customer_name[0] ?>
                                                    </div>
                                                    <div class="list-items">
                                                        <h4><?= $order_temp_result[0]->customer_name ?>
                                                        </h4>
                                                        <p><?= $order_temp_result[0]->customercode ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    <!-- selected customer hear -->
                                </ul>

                                <div class="cart-items-main-section" id="cart_items">
                                    <?php
                                            foreach ($order_temp_result as $key => $value) {
                                            ?>
                                    <div class="cart-item-drap-bg">
                                        <span class="addBtn">Add</span>
                                        <div class="cart-items-main-div draggable ">
                                            <div class="cart-detail-text">
                                                <h4>
                                                    <p><?= $value->product_name ?></p>
                                                </h4>

                                                <div class="cart-inner-detail">
                                                    <h4>
                                                        <p><span
                                                                class="m-0"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
                                                        </p>
                                                    </h4>
                                                    <h4 class="mx-2"> <span class="this_quantity">
                                                            <?= $value->quantity ?></span> <i class="fas fa-times"></i>
                                                        <span class="this_price"> <?= $value->discount_price ?></span>
                                                    </h4>

                                                    <div class="actual_price">
                                                        <?php if ($value->discount > 0) {
                                                                    ?>
                                                        <h5>(<?= $currency . ' '; ?>
                                                            <s><?= numberFormat($value->actual_price) ?></s> )
                                                        </h5>
                                                        <?php
                                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="counter-main-wrap">
                                                <div class="product-quantity-detail-wrapper">
                                                    <div class="product-quantity-detail">
                                                        <label for="">Qty</label>
                                                        <input type="number"
                                                            onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"
                                                            name="qnt<?= $value->id ?>" class="qunt" min="1"
                                                            data-actual_discount_price="<?= number_format((float) $value->discount_price, 2, '.', '') ?>"
                                                            data-product_weight_id="<?= $value->product_weight_id ?>"
                                                            data-temp_id="<?= $value->id ?>"
                                                            value="<?= $value->quantity ?>"
                                                            data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>"
                                                            inputmode="decimal">
                                                    </div>
                                                    <div class="product-quantity-detail">
                                                        <label for="">Dis</label>
                                                        <input type="number" min="0" max="99"
                                                            name="discount<?= $value->id ?>" class="disc"
                                                            data-product_weight_id="<?= $value->product_weight_id ?>"
                                                            data-temp_id="<?= $value->id ?>"
                                                            value="<?= (fmod($value->discount, 1) !== 0.00) ? numberFormat($value->discount) : (int) $value->discount ?>"
                                                            data-actual_discount_price="<?= number_format((float) $value->discount_price, 2, '.', '') ?>"
                                                            data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">

                                                    </div>
                                                </div>
                                                <div class="cart-price-text">
                                                    <h3><?= $currency . ' '; ?> <span class="sub_total">
                                                            <?= $value->price ?></span></h3>
                                                    <span class="delete-wrap revomeRecord"
                                                        data-order_tempId="<?= $value->id ?>"
                                                        data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">
                                                        <img src="<?= base_url() ?>/public/admin_product_page_assets/images/delete.svg"
                                                            alt="delete">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="btnchange">Remove</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="total-wrap">
                                <div class="top" id="promocode_item"
                                    style="<?= $shopping_based_discount > 0 ? 'display:none' : '' ?>">
                                    <div class="input-box">
                                        <i class="fas fa-tags"></i>
                                        <input type="text" name="promocode" id="promocode"
                                            placeholder="Enter Promocode" />
                                    </div>

                                    <button type="button" class="btn-apply" id="checkPromocode">Apply</button>
                                </div>
                                <span class="" id="promo_err"></span>
                                <div class="subtotal-wrap">
                                    <div>
                                        <p>Subtotal</p>
                                        <p><?= $currency . ' '; ?>
                                            <span class="subtotal"
                                                id="subtotal"><?= number_format((float) $subtotal, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                    <div id="cart_based_item">
                                        <p>Cart based Discount</p>
                                        <p>- (<span id="shopping_based_discountPercentage">
                                                <?= (fmod($shopping_based_discountPercentage, 1) !== 0.00) ? numberFormat($shopping_based_discountPercentage) : number_format((int) $shopping_based_discountPercentage) ?>
                                            </span>%)
                                            <span
                                                id="shopping_based_discount_amount"><?= $currency . ' '; ?><?= number_format((float) $shopping_based_discount, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                    <div id="promocode_discount_item">
                                        <p>Promocode Discount</p>
                                        <p>- <?= $currency . ' '; ?> <span id="promocode_discount">0.00</span> </p>
                                    </div>
                                    <div>
                                        <p>Tax GST (<?= $isShow ? 'Excluded' : 'Included' ?>)</p>
                                        <p><?= $currency . ' '; ?>
                                            <span
                                                id="total_gst"><?= number_format((float) $total_gst, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="total-payment-wrap">
                                    <div class="radio-buttons">
                                        <div class="form-group">
                                            <input type="radio" id="Cash" value="Cash" name="payment" checked />
                                            <label for="Cash">Cash</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" id="Online" value="Credit Card" name="payment" />
                                            <label for="Online">Online</label>
                                        </div>
                                    </div>
                                    <button class="btn-apply total-main">
                                        <span>Pay</span>
                                        <span><?= $currency . ' '; ?><span
                                                id="total_pay"><?= number_format((float) $subtotal, 2, '.', '') ?></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- check end -->
                    </form>
                    <!-- form with new Design end-->
                </div>
            </div>
            <!--  -->
            <?php } else { ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="checkout_closed_register">
                    <img src="<?php echo base_url() . 'public/images/sorry.png' ?>" />
                    <h3>Register closed</h3>
                    <p>To make a sale, please open the register</p>
                    <button class="btn btn-warning" type="button" href="#myModal" data-toggle="modal">Open
                        Register
                    </button>
                </div>
            </div>
            <?php } ?>
            <!--  -->
            <?php } else { ?>
            <div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="checkout_closed_register">
                        <img src="<?php echo base_url() . 'public/images/sorry.png' ?>" />
                        <h3>Register closed</h3>
                        <p>To make a sale, please open the register</p>
                        <button class="btn btn-warning" type="button" href="#myModal" data-toggle="modal">Open
                            Register
                        </button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
</section>

<input type="hidden" id="isParked"
    value="<?= (isset($parked_order_id) && !empty($parked_order_id)) ? $parked_order_id : '0' ?>">
<?php
if (isset($parked_order_id) && !empty($parked_order_id)) { ?>
<input type="hidden" name="parked_id" id="parked_id" value="<?= $parked_order_id; ?>">
<?php } ?>


<!-- Add Type : Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Set opening cash drawer amount</h4>
            </div>
            <form method="post" id="model" action="<?php echo base_url() . 'register/opening_cash'; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Cash Amount</label>
                        <input type="text" name="amount" class="form-control" value="">
                        <label for="amount" class="error"></label>
                    </div>
                    <div class="form-group">
                        <label for="name">Type to add note</label>
                        <input type="text" name="note" class="form-control" value="">
                        <label for="note" class="error"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save Amount" name="save_amount" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- quick keys modal -->
<div class="modal fade" id="quick-keys" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add products</h4>
                <p>Search for products to add to your Quick Key layout.</p>
            </div>
            <div class="modal-body">
                <div class="search-wrapper">
                    <div class="search-bar">
                        <span><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" id="add_search_prod"
                            placeholder="Start typing or scanning...">
                        <span><i class="fas fa-qrcode"></i></span>
                    </div>
                    <div id="add-prod-list">

                    </div>
                </div>
                <div class="select_category_item -quic-layout-wrapper" id="product_quick_list">
                </div>
                <div class="quick-btn">
                    <button type="button" id="SubmitQuickList" class="btn">create quick keys</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal add customer -->
<div class="modal fade" id="add_cust" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Customer</h4>
            </div>
            <div class="modal-body">
                <form id="customer_form" method="post" action="<?= base_url() . 'sell_development/customer_add' ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Customer Name</label>
                                <input type="text" name="customer_name" class="form-control" placeholder="Name">
                                <label for="customer_name" class="error" style="color: red"></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Customer Code</label>
                                <input type="text" name="customercode" class="form-control"
                                    value="<?= 'CC' . strtotime(DATE_TIME); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" style="color: red"
                                    placeholder="email">
                                <label for="email" class="error" style="color: red"></label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mobile" class="form-control mobile"
                                    placeholder="mobile number">
                                <label for="mobile" class="error" style="color: red"></label>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Customer Group</label>
                            <select name="" id="" class="form-control">
                            <option value="">customer group</option>
                            <option value="">all customer</option>
                            </select>
                        </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <button type="submit" name="create" class="btn btn-primary create_new_cust"
                                    id="btnSubmit">Create New
                                    Customer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
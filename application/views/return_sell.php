<?php
include('header.php');
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
                        <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
                    </div>
                <?php }
                unset($this->session->flashdata); ?>
            </div>
            <div class="row">
                <!-- start new quick -->
                <div class="col-lg-6">
                    <div class="top">
                        <div class="input-box w-100">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search order or sell number..." id="search_order" />
                        </div>
                        <!-- <button class="btn-apply"> <img src="./assets/images/scan.svg" alt=""> <span> Scan
                                        Barcode</span></button> -->
                    </div>
                    <div id="prod-list">
                    </div>
                    <!-- <div class="cmn-bg h-auto quick-keys-title">
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
                    </div> -->
                    <div class="">
                        <div class="quick-keys-wrap" id="sold_products">
                            <!-- show the bought products here -->
                        </div>
                    </div>
                </div>
                <!-- end new quick -->
                <div class="col-lg-6">
                    <!-- add form Dipesh -->
                    <!-- form with new Design -->

                    <form method="post" action="<?php echo base_url() . 'sell_development/order_refund_checkout/'; ?>" id="paypal_form" class="paypal" name="checkout_sell">
                        <!-- novalidate changed by Dipesh -->
                        <input type="hidden" name="vendor_id" id="user_id" value="<?php echo $vendor_id; ?>">
                        <input type="hidden" name="customer" id="set_customer" value="<?= (isset($order_temp_result[0]->customer_id)) ? $order_temp_result[0]->customer_id : 0 ?>">
                        <!-- <input type="hidden" name="hidden_subtotal" id="hidden_subtotal" value="0.00">
                        <input type="hidden" name="hidden_discount_total" id="hidden_discount_total"
                            value="<?= $total_savings ?>">
                        <input type="hidden" name="hidden_total" id="hidden_total" value="0.00">
                        <input type="hidden" name="hidden_total_pay" id="hidden_total_pay" value="0.00">
                        <input type="hidden" name="paypal_amount" id="paypal_amount" value="0.00"> -->
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="lc" value="UK" />
                        <input type="hidden" name="currency_code" value="<?= $currency_code ?>">
                        <input type="hidden" name="currency" id="currency" value="<?= $currency ?>">
                        <!-- <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="shopping_based_discount" value="<?= $shopping_based_discount ?>"
                            id="shopping_based_discount"> -->
                        <input type="hidden" name="isShow" id="isShow" value="<?= $isShow ?>">
                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                        <!-- <input type="hidden" name="applied" id="applied" value="false">
                        <input type="hidden" name="parked_order_id" id="parked_order_id"
                            value="<?= $parked_order_id ?>"> -->
                        <!-- Dk added -->
                        <!-- <input type="hidden" name="register_id" value="<?php if (!empty($register_result)) {
                                                                                echo $register_result[0]->id;
                                                                            } ?>" /> -->

                        <!-- check -->
                        <div class="top justify-content-end">
                            <div class="button-top d-flex justify-content-end">
                                <button type="button" class="border-btn d-inline-block discard_class" id="discard_sell">Discard
                                    Sale</button>
                            </div>
                        </div>

                        <div class="cmn-bg mt-3">

                            <div class="cart-product-detail">
                                <ul id='selected_customber'>
                                </ul>

                                <div class="cart-items-main-section" id="cart_items">
                                    <!-- later add products -->
                                </div>
                            </div>

                            <div class="total-wrap">
                                <!-- <div class="top" id="promocode_item" style="<?= $shopping_based_discount > 0 ? 'display:none' : '' ?>">
                                    <div class="input-box">
                                        <i class="fas fa-tags"></i>
                                        <input type="text" name="promocode" id="promocode" placeholder="Enter Promocode" />
                                    </div>

                                    <button type="button" class="btn-apply" id="checkPromocode">Apply</button>
                                </div>
                                <span class="" id="promo_err"></span> -->
                                <!-- <div class="subtotal-wrap">
                                    <div>
                                        <p>Previous Subtotal</p>
                                        <p><?= $currency . ' '; ?>
                                            <span id="sub_total"><?= number_format((float)0, 2, '.', '') ?></span>
                                        </p>
                                    </div>

                                    <div id="cart_based_item">
                                        <p class="tag_previous">Previous Cart based Discount</p>
                                        <p>- (<span id="shopping_based_discountPercentage">
                                                0</span>%) <?= $currency . ' '; ?>
                                            <span
                                                id="shopping_based_discount_amount"><?= number_format((float)0, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                </div>
                                <hr> -->
                                <div class="subtotal-wrap">
                                    <div>
                                        <p>Subtotal</p>
                                        <p><?= $currency . ' '; ?>
                                            <span class="subtotal" id="refund_subtotal"><?= number_format((float)$subtotal, 2, '.', '') ?></span>
                                        </p>
                                    </div>

                                    <input type="hidden" name="cart_based" id="cart_based" value="0">

                                    <input type="hidden" name="subtotal" id="subtotal" value="0">

                                    <input type="hidden" name="discount_amount" id="discount_amount" value="0">

                                    <input type="hidden" name="refund_amount" id="refund_amount" value="0">

                                    <input type="hidden" id="front_cartBased" value="">
                                    <div>
                                        <p>Tax GST </p>
                                        <p><?= $currency . ' '; ?>
                                            <span id="total_gst"><?= number_format((float) 0, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                    <div id="removed_cartbased_item">
                                        <p class="tag_removed">Removed Cart based Discount</p>
                                        <p>- (<span id="return_shopping_based_discountPercentage">
                                                0</span>%) <?= $currency . ' '; ?>
                                            <span id="return_shopping_based_discount_amount">0</span>
                                        </p>
                                    </div>

                                    <input type="hidden" name="counted_total_gst" id="counted_total_gst" value="<?= number_format((float) 0, 2, '.', '') ?>">
                                    <!-- <div id="promocode_discount_item">
                                        <p>Promocode Discount</p>
                                        <p>- <?= $currency . ' '; ?> <span id="promocode_discount">0.00</span> </p>
                                    </div> -->
                                    <!-- <div>
                                        <p>Tax GST (<?= $isShow ? 'Excluded' : 'Included' ?>)</p>
                                        <p><?= $currency . ' '; ?>
                                            <span id="total_gst"><?= number_format((float)$total_gst, 2, '.', '') ?></span>
                                        </p>
                                    </div> -->
                                </div>
                                <div class="total-payment-wrap">
                                    <div class="radio-buttons">
                                        <!-- <div class="form-group">
                                            <input type="radio" id="Cash" value="Cash" name="payment" checked />
                                            <label for="Cash">Cash</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" id="Online" value="Credit Card" name="payment" />
                                            <label for="Online">Online</label>
                                        </div> -->
                                    </div>
                                    <button class="btn-apply total-main" id="refund_btn">
                                        <span>Refund</span>
                                        <span><?= $currency . ' '; ?><span id="total_pay"><?= number_format((float)0, 2, '.', '') ?></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- check end -->
                    </form>
                    <!-- form with new Design end-->
                </div>
            </div>

        </div>
    </section>
</section>


<!-- Add Type : Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
</div> -->

<!-- quick keys modal -->
<!-- <div class="modal fade" id="quick-keys" role="dialog">
    <div class="modal-dialog">
        Modal content
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
</div> -->

<!-- 
<div class="modal fade" id="add_cust" role="dialog">
    <div class="modal-dialog">

        
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
</div> -->

<?php include('footer.php'); ?>
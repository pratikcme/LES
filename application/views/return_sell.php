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

                    </div>
                    <div id="prod-list">
                    </div>

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

                    <form method="post" action="<?php echo base_url() . 'sell_development/order_refund_checkout/'; ?>"
                        id="paypal_form" class="paypal" name="checkout_sell">
                        <!-- novalidate changed by Dipesh -->
                        <input type="hidden" name="vendor_id" id="user_id" value="<?php echo $vendor_id; ?>">
                        <input type="hidden" name="customer" id="set_customer"
                            value="<?= (isset($order_temp_result[0]->customer_id)) ? $order_temp_result[0]->customer_id : 0 ?>">

                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="lc" value="UK" />
                        <input type="hidden" name="currency_code" value="<?= $currency_code ?>">
                        <input type="hidden" name="currency" id="currency" value="<?= $currency ?>">

                        <input type="hidden" name="isShow" id="isShow" value="<?= $isShow ?>">
                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">

                        <!-- check -->
                        <div class="top justify-content-end">
                            <div class="button-top d-flex justify-content-end">
                                <button type="button" class="border-btn d-inline-block discard_class"
                                    id="discard_sell">Discard
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

                                <div class="subtotal-wrap">
                                    <div>
                                        <p>Products Subtotal</p>
                                        <p><?= $currency . ' '; ?>
                                            <span class="subtotal"
                                                id="refund_subtotal"><?= number_format((float)$subtotal, 2, '.', '') ?></span>
                                        </p>
                                    </div>

                                    <input type="hidden" name="cart_based" id="cart_based" value="0">

                                    <input type="hidden" name="subtotal" id="subtotal" value="0">

                                    <input type="hidden" name="discount_amount" id="discount_amount" value="0">

                                    <input type="hidden" name="refund_amount" id="refund_amount" value="0">

                                    <input type="hidden" id="front_cartBased" value="">
                                    <!-- new -->
                                    <div class="dis_subtotal">
                                        <p>Products GST</p>
                                        <p><?= $currency . ' '; ?>
                                            <span class="dis_gst"><?= number_format((float) 0, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                    <div class="dis_subtotal">
                                        <p>Sub total</p>
                                        <p><?= $currency . ' '; ?>
                                            <span class="dis_sub_val"><?= number_format((float) 0, 2, '.', '') ?></span>
                                        </p>
                                    </div>
                                    <!-- end -->
                                    <div>
                                        <p class="gstName">Products GST </p>
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

                                    <input type="hidden" name="counted_total_gst" id="counted_total_gst"
                                        value="<?= number_format((float) 0, 2, '.', '') ?>">

                                </div>
                                <div class="total-payment-wrap">
                                    <div class="radio-buttons">

                                    </div>
                                    <button class="btn-apply total-main" id="refund_btn">
                                        <span>Refund</span>
                                        <span><?= $currency . ' '; ?><span
                                                id="total_pay"><?= number_format((float)0, 2, '.', '') ?></span></span>
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



<?php include('footer.php'); ?>
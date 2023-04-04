<!-- <div class="cart-item-drap-bg">
    <span class="addBtn">Add</span>
    <div class="cart-items-main-div draggable">
        <div class="cart-detail-text">
            <h4>
                <p><?= $value->product_name ?></p>
            </h4>

            <div class="cart-inner-detail">
                <h4>
                    <p><span class="m-0"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
                    </p>
                </h4>
                <h4 class="mx-2"> <span class="this_quantity">
                        <?= $value->quantity ?></span> <i class="fas fa-times"></i>
                    <?= $value->discount_price ?></h4>

                <?php if ($value->discount > 0) {
                ?>
                <h5>(<?= $currency . ' '; ?>
                    <s><?= numberFormat($value->actual_price) ?></s> )
                </h5>
                <?php
                } ?>
            </div>
        </div>
        <div class="counter-main-wrap">
            <div class="product-quantity-detail-wrapper">
                <div class="product-quantity-detail">
                    <label for="">Qty</label>
                    <input type="number"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"
                        name="qnt<?= $value->id ?>" class="qunt" min="1"
                        data-actual_discount_price="<?= number_format((float)$value->product_price, 2, '.', '') ?>"
                        data-product_weight_id="<?= $value->product_weight_id ?>" data-temp_id="<?= $value->id ?>"
                        value="<?= $value->quantity ?>"
                        data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>" inputmode="decimal">
                </div>
                <div class="product-quantity-detail">
                    <label for="">Dis</label>
                    <input type="number" min="0" max="99" name="discount<?= $value->id ?>" class="disc"
                        data-product_weight_id="<?= $value->product_weight_id ?>" data-temp_id="<?= $value->id ?>"
                        value="<?= $value->discount ?>"
                        data-actual_discount_price="<?= number_format((float)$value->product_price, 2, '.', '') ?>"
                        data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">
                </div>
            </div>
            <div class="cart-price-text">
                <h3><?= $currency . ' '; ?> <span class="sub_total">
                        <?= $value->price ?></span></h3>
                <span class="delete-wrap revomeRecord" data-order_tempId="<?= $value->id ?>"
                    data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">
                    <img src="<?= base_url() ?>/public/admin_product_page_assets/images/delete.svg" alt="delete">
                </span>
            </div>
        </div>
    </div>
    <span class="btnchange">Remove</span>
</div> -->

<div class="cart-item-drap-bg">
    <span class="addBtn">Add</span>
    <div class="cart-items-main-div draggable">
        <div class="cart-detail-text">
            <h4>
                <p><?= $value->product_name ?></p>
            </h4>

            <div class="cart-inner-detail">
                <h4>
                    <p><span class="m-0"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
                    </p>
                </h4>
                <h4 class="mx-2">
                    <span class="this_quantity">
                        <?= $value->quantity ?></span> <i class="fas fa-times"></i>
                    <span class="this_price">
                        <?= $isShow ? numberFormat(($value->discount_price -  ($value->discount_price *  $value->gst) / 100)) : numberFormat($value->discount_price) ?></span></span>
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
                    <input type="number" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" name="qnt<?= $value->id ?>" class="qunt" min="1" data-actual_discount_price="<?= number_format((float)$value->discount_price, 2, '.', '') ?>" data-product_weight_id="<?= $value->product_weight_id ?>" data-temp_id="<?= $value->id ?>" value="<?= $value->quantity ?>" data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>" inputmode="decimal">
                </div>
                <div class="product-quantity-detail">
                    <label for="">Dis</label>
                    <input type="number" min="0" max="99" name="discount<?= $value->id ?>" class="disc" data-product_weight_id="<?= $value->product_weight_id ?>" data-temp_id="<?= $value->id ?>" value="<?= (fmod($value->discount, 1) !== 0.00) ? numberFormat($value->discount) : (int)$value->discount ?>" data-actual_discount_price="<?= number_format((float)$value->discount_price, 2, '.', '') ?>" data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">

                </div>
            </div>
            <div class="cart-price-text">
                <h3><?= $currency . ' '; ?> <span class="sub_total">
                        <?= numberFormat($value->price) ?></span></h3>
                <span class="delete-wrap revomeRecord" data-order_tempId="<?= $value->id ?>" data-isParked="<?= (isset($parked_order_id) ? $parked_order_id : '0') ?>">
                    <img src="<?= base_url() ?>/public/admin_product_page_assets/images/delete.svg" alt="delete">
                </span>
            </div>
        </div>
    </div>
    <span class="btnchange">Remove</span>
</div>
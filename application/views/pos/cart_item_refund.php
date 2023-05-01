<div class="cart-item-drap-bg">
    <!-- <span class="addBtn">Add</span> -->
    <div class="cart-items-main-div draggable">

        <input type="hidden" name="product_name[]" value="<?= $value->product_name ?>">
        <input type="hidden" name="product_id[]" value="<?= $value->product_id ?>">
        <input type="hidden" name="order_id[]" value="<?= $value->order_id ?>">
        <input type="hidden" name="weight_no[]" value="<?= $value->weight_no ?>">
        <input type="hidden" name="weight_name[]" value="<?= $value->weight_name ?>">
        <input type="hidden" name="quantity[]" value="<?= $value->quantity ?>">
        <input type="hidden" name="discount_price[]" value="<?= $value->discount_price ?>">
        <input type="hidden" name="discount[]" value="<?= $value->discount ?>">
        <input type="hidden" name="actual_price[]" value="<?= $value->actual_price ?>">
        <input type="hidden" name="order_details_id[]" value="<?= $value->order_details_id ?>">
        <input type="hidden" name="price[]" value="<?= $value->price ?>">
        <input type="hidden" name="product_weight_id[]" value="<?= $value->product_weight_id ?>">
        <input type="hidden" name="weight_id[]" value="<?= $value->weight_id ?>">
        <!-- new added for gst by Dipesh -->
        <input type="hidden" name="without_gst_price[]" value="<?= $value->without_gst_price ?>">
        <input type="hidden" name="gst[]" value="<?= $value->gst ?>">

        <!-- gst total amt -->
        <input type="hidden" class="uncount_gst_amount"
            value="<?= $value->returned_quantity != 0 ? numberFormat($value->returned_quantity * $value->single_gst_amount) : 0  ?>">
        <!--  -->
        <input type="hidden" class="uncount_gst_discounted_amount"
            value="<?= $value->returned_quantity != 0 ? numberFormat($value->returned_quantity * $value->single_gst_discounted_amount) : 0  ?>">
        <!-- again -->
        <input type="hidden" class="uncount_total"
            value="<?= $value->returned_quantity != 0 ? (($isShow == true) ? numberFormat($value->returned_quantity * $value->without_gst_price) : numberFormat($value->returned_quantity * $value->discount_price)) : 0 ?>">

        <div class="cart-detail-text">
            <h4>
                <p><?= $value->product_name ?> &nbsp; (Purchased : <?= $value->quantity ?>)
                </p>
            </h4>

            <div class="cart-inner-detail">
                <h4>
                    <p><span class="m-0"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
                    </p>
                </h4>
                <h4 class="mx-2"> <span class="this_quantity">
                        <?= $value->returned_quantity != 0 ? $value->returned_quantity : $value->quantity ?></span>
                    <i class="fas fa-times"></i>
                    <span class="this_price" data-actual_price="<?= $value->actual_price ?>"
                        data-gst="<?= $value->gst ?>">
                        <?= $isShow ? numberFormat($value->without_gst_price) : numberFormat($value->discount_price) ?></span>
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
                <!-- <p class="">
                    Purchased : <?= $value->quantity ?>
                </p> -->
            </div>
        </div>

        <div class="counter-main-wrap">
            <div class="product-quantity-detail-wrapper">
                <div class="product-quantity-detail">
                    <label for="">Qty</label>
                    <input type="number"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"
                        max="<?= $value->quantity ?>" name="qnt<?= $value->order_details_id ?>" class="qunt"
                        min="<?= $value->returned_quantity != 0 ? $value->returned_quantity : '1' ?>"
                        data-actual_calculation_price="<?= $isShow ? number_format((float)$value->without_gst_price, 2, '.', '') : number_format((float)$value->discount_price, 2, '.', '') ?>"
                        data-product_weight_id="<?= $value->product_weight_id ?>"
                        value="<?= $value->returned_quantity != 0 ? $value->returned_quantity : $value->quantity ?>"
                        data-gst_amount="<?= $value->single_gst_amount ?>"
                        data-returned_quantity="<?= $value->returned_quantity ?>" inputmode="decimal">

                    <input type="hidden" class="calculation_price" name="calculation_price[]"
                        value="<?= $value->returned_quantity != 0 ?  ($isShow ? numberFormat($value->returned_quantity * $value->without_gst_price) : numberFormat($value->returned_quantity * $value->discount_price)) : numberFormat($value->price) ?>">
                    <input type="hidden" class="gst_amount" value="<?= numberFormat($value->gst_amount) ?>">

                </div>
                <div class="product-quantity-detail">
                    <label for="">Dis</label>
                    <input type="number" readonly name="discount<?= $value->order_details_id ?>" class="disc"
                        data-product_weight_id="<?= $value->product_weight_id ?>"
                        data-temp_id="<?= $value->order_details_id ?>"
                        value="<?= (fmod($value->discount, 1) !== 0.00) ? numberFormat($value->discount) : (int)$value->discount ?>"
                        data-actual_discount_price="<?= number_format((float)$value->discount_price, 2, '.', '') ?>">
                </div>
            </div>
            <div class="cart-price-text">
                <h3><?= $currency . ' '; ?> <span class="sub_total">
                        <?= $value->returned_quantity != 0 ?  ($isShow ? numberFormat($value->returned_quantity * $value->without_gst_price) : numberFormat($value->returned_quantity * $value->discount_price)) : numberFormat($value->price) ?>
                    </span></h3>
                <?php if ($value->noDelete != '1') {
                ?>
                <span class="delete-wrap removeRecord" data-product_name="<?= $value->product_name ?>"
                    data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>"
                    data-product_weight_id="<?= $value->product_weight_id ?>" data-order_id="<?= $value->order_id ?>"
                    data-weight_no="<?= $value->weight_no ?>" data-weight_name="<?= $value->weight_name ?>"
                    data-quantity="<?= $value->quantity ?>" data-discount_price="<?= $value->discount_price ?>"
                    data-discount="<?= $value->discount ?>" data-actual_price="<?= $value->actual_price ?>"
                    data-order_details_id="<?= $value->order_details_id ?>"
                    data-without_gst_price="<?= $value->without_gst_price ?>" data-gst="<?= $value->gst ?>">
                    <img src="<?= base_url() ?>/public/admin_product_page_assets/images/delete.svg" alt="delete">
                </span>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <!-- <span class="btnchange">Remove</span> -->
</div>
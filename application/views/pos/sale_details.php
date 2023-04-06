<div class="customer_name_date">
    <h4> <?= isset($return_details) && $return_details == true ? 'Refund Order Details' : 'Order Details' ?> </h4>
    <h5> <span>Date : </span> <?= date('d - m - Y', $orderInfo->dt_added) ?></h5>
</div>
<div class="supportive-div">
    <table class="table sale-detail">
        <thead>
            <tr>
                <th>Product Name</th>
                <th> <?= isset($return_details) && $return_details == true ? 'Returned' : 'Purchased' ?> Quantity</th>
                <th>Product Price(<?= $currency ?>)</th>
                <th>Discount(%)</th>
                <th>Discounted Price(<?= $currency ?>)</th>
                <th>GST</th>
                <th>Price(<?= $currency ?>)</th>
            </tr>
        </thead>
        <input type="hidden" id="isShow" value="<?= $isShow ?>">
        <tbody>
            <?php
            foreach ($order_details as $key => $v) {
                $returned_quantity = $this->this_model->getReturnedQuantity($v->order_details_id);
            ?>
                <tr>
                    <td><?= $v->name ?></td>
                    <td><?= $v->quantity ?></td>
                    <td><?= $v->actual_price ?></td>
                    <?php
                    if ($v->discount > 0) {
                        $discountAmt = numberFormat($v->actual_price * $v->discount / 100);
                    }
                    if ($v->gst > 0) {
                        $total_gst_amount += numberFormat(($v->discounted_price * $v->gst / 100) * $v->quantity);
                    }
                    ?>
                    <td><?= $v->discount > 0 ? ((fmod($v->discount, 1) !== 0.00) ? '(' . numberFormat($v->discount) . '%)' . (isset($discountAmt) ? $discountAmt : '') :  '(' . (int)$v->discount . '%)' . (isset($discountAmt) ? $discountAmt : '')) : ' - ' ?>
                    </td>
                    <td><?= $isShow ? $v->without_gst_price :  $v->discounted_price ?></td>
                    <td><?= isset($v->gst) ? '(' . $v->gst . '%)' . numberFormat($v->discounted_price * $v->gst / 100)  : '-' ?>
                    </td>
                    <td>
                        <?= $currency . ' ' ?>
                        <span class="<?= isset($return_details) && $return_details == true ? 'return_order_price' : 'order_price ' ?>">
                            <?= $isShow ? numberFormat($v->without_gst_price * $v->quantity) :  numberFormat($v->discounted_price * $v->quantity) ?></span>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="order_data_view">
        <?php
        // if (!$isShow) {
        $newAmt =   numberFormat($orderInfo->total - $total_gst_amount);
        $shoppingDiscount = $orderInfo->shopping_amount_based_discount * 100 /  $newAmt;
        // } else {
        //     dd($orderInfo->total);
        // }
        ?>
        <ul>
            <li>
                <div>
                    <h6>Subtotal </h6>
                    <h6> <?= $currency . ' ' ?> <span id="<?= isset($return_details) && $return_details == true  ? 'return_order_subtotal' : 'order_subtotal' ?>">
                            <?= $isShow ? $orderInfo->total  :  numberFormat($orderInfo->total - $total_gst_amount) ?></span>
                    </h6>
                </div>
            </li>
            <li>
                <div>
                    <h6>Total GST </h6>
                    <h6><?= $currency . ' '  ?> <span id="<?= isset($return_details) && $return_details == true  ? 'return_total_gst' : 'total_gst' ?>"><?= numberFormat($total_gst_amount) ?></span>
                    </h6>
                </div>
            </li>
            <?php
            if (isset($orderInfo->promocode_used) && $orderInfo->promocode_used == 1) {
            ?>
                <li>
                    <div>
                        <h6>Promocode Discount</h6>
                        <h6> - (<?= $amount->percentage ?>%) <?= $currency . ' ' . numberFormat($amount->amount) ?> </h6>
                    </div>
                </li>
            <?php
            }
            if (isset($orderInfo->shopping_amount_based_discount) && $orderInfo->shopping_amount_based_discount > 0) {
            ?>
                <li>
                    <div>
                        <h6>Cart Amount Based Discount</h6>
                        <h6> -
                            (<?= (fmod($shoppingDiscount, 1) !== 0.00) ? numberFormat($shoppingDiscount) : (int)$shoppingDiscount ?>%)
                            <?= $currency . '' . numberFormat($orderInfo->shopping_amount_based_discount) ?> </h6>
                    </div>
                </li>
            <?php
            }
            ?>
            <?php
            if (isset($removedDiscountPercentage) && $removedDiscountPercentage > 0) {
            ?>
                <li>
                    <div>
                        <h6>Removed Discount</h6>
                        <h6> -
                            (<?= (fmod($removedDiscountPercentage, 1) !== 0.00) ? numberFormat($removedDiscountPercentage) : (int)$removedDiscountPercentage ?>%)
                            <?= $currency . ' ' .  numberFormat($removedDiscountAmount) ?> </h6>
                    </div>
                </li>
            <?php
            }
            ?>
            <li>
                <div>
                    <h6>Total </h6>
                    <h6><?= $currency . ' ' . numberFormat($orderInfo->payable_amount) ?></h6>
                </div>
            </li>
        </ul>
    </div>
</div>
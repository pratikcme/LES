<li>
    <div>
        <h6>Subtotal </h6>
        <h6><?= $orderInfo->total ?></h6>
    </div>
</li>
<?php
if (isset($orderInfo->promocode_used) && $orderInfo->promocode_used == 1) {
?>
<li>
    <div>
        <h6>Promocode Discount(%)</h6>
        <h6> - (<?= $amount->percentage ?>%) <?= numberFormat($amount->amount) ?> </h6>
    </div>
</li>
<?php
}
if (isset($orderInfo->shopping_amount_based_discount) && $orderInfo->shopping_amount_based_discount > 0) {
?>
<li>
    <div>
        <h6>Cart Amount Based Discount(%)</h6>
        <h6> -
            (<?= (fmod($shoppingDiscount, 1) !== 0.00) ? numberFormat($shoppingDiscount) : (int)$shoppingDiscount ?>%)
            <?= numberFormat($orderInfo->shopping_amount_based_discount) ?> </h6>
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
        <h6>Removed Discount(%)</h6>
        <h6> -
            (<?= (fmod($removedDiscountPercentage, 1) !== 0.00) ? numberFormat($removedDiscountPercentage) : (int)$removedDiscountPercentage ?>%)
            <?= numberFormat($removedDiscountAmount) ?> </h6>
    </div>
</li>
<?php
}
?>




<li>
    <div>
        <h6>Total </h6>
        <h6><?= numberFormat($orderInfo->payable_amount) ?></h6>
    </div>
</li>
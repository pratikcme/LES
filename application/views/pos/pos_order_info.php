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
        ?>
    <td> <?= $v->discount > 0 ? ((fmod($v->discount, 1) !== 0.00) ? '(' . numberFormat($v->discount) . '%)' . (isset($discountAmt) ? $discountAmt : '') :  '(' . (int)$v->discount . '%)' . (isset($discountAmt) ? $discountAmt : '')) : ' - ' ?>
    </td>
    <td><?= $v->discounted_price ?></td>
    <td><?= $v->calculation_price ?></td>
</tr><?php
        }
            ?>
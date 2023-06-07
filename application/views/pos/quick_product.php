<?php
foreach ($products as $key => $value) :

?>
<div class="quick-view-wrap add_quick_product" data-product_name="<?= $value->product_name ?>"
    data-product_id="<?= $value->product_id ?>" data-weight_id="<?= $value->weight_id ?>"
    data-product_weight_id="<?= $value->product_weight_id ?>" data-order_id="<?= $value->order_id ?>"
    data-weight_no="<?= $value->weight_no ?>" data-weight_name="<?= $value->weight_name ?>"
    data-quantity="<?= $value->quantity ?>" data-discount_price="<?= $value->discount_price ?>"
    data-discount="<?= $value->discount ?>" data-actual_price="<?= $value->actual_price ?>"
    data-order_details_id="<?= $value->order_details_id ?>" data-gst="<?= $value->gst ?>"
    data-without_gst_price="<?= $value->without_gst_price ?>">
    <p><?= $value->product_name ?></p>
    <div class="badges-wrap">
        <span class="badge-pink"><?= $value->weight_no . ' ' . $value->weight_name ?></span>
    </div>
</div>
<?php
endforeach;
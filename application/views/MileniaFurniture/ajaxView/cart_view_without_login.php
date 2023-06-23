<div class="dropdown-title">
  <h4><?= $this->lang->line('My shopping cart') ?></h4>
  <span class="close-btn"><i class="fa-solid fa-xmark"></i></span>
</div>

<?php
foreach ($_SESSION['My_cart'] as $key => $value) {
  $encode_id =  $this->utility->safe_b64encode($value['product_id']);
  $varient_id =  $this->utility->safe_b64encode($value['product_weight_id']);
  $product = $this->product_model->GetUsersProductInCart($value['product_weight_id']);

  if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
    $value['discount_price'] = $product[0]->without_gst_price;
  } else {
    $value['discount_price'] = $product[0]->discount_price;
  }

  if (!file_exists('public/images/' . $this->folder . 'product_image/' . $value["image"]) || $value["image"] == '') {
    if (strpos($value["image"], '%20') === true || $value["image"] == '') {
      $value["image"] = $default_product_image;
    } else {
      $value["image"] = $default_product_image;
    }
  }
?>


  <li>
    <div class="cart-drop-menu cart-drop-menu-1">
      <div class="drop-img">
        <a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>"><img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value["image"] ?>" alt=""></a>
      </div>
      <div class="drop-text">
        <a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>">
          <h4><?= $value['product_name'] ?></h4>
        </a>
        <p>Qty : <span><?= $value['quantity'] ?></span> </p>
        <h3><?= $this->siteCurrency . ' ' . number_format((float)$value['discount_price'], 2, '.', '') ?></h3>
      </div>
      <div class="cancel-btn remove_item" data-product_id="<?= $value['product_id'] ?>" data-product_weight_id="<?= $value['product_weight_id'] ?>">
        <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
      </div>
    </div>
  </li>
<?php } ?>
<div>
  <div class="total-amount p-0">
    <p><?= $this->lang->line('Total') ?></p>
    <h3><?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
  </div>
  <div class="drop-btns p-0">
    <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
    <a href="<?= base_url() . 'checkout' ?>" class="checkout"><?= $this->lang->line('checkout') ?></a>
  </div>
</div>
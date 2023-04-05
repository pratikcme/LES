<?php
   foreach ($_SESSION['My_cart'] as $key => $value) {
    $encode_id=  $this->utility->safe_b64encode($value['product_id']);
    $varient_id =  $this->utility->safe_b64encode($value['product_weight_id']);
    $product = $this->product_model->GetUsersProductInCart($value['product_weight_id']);

    if(!empty($isShow) && $isShow[0]->display_price_with_gst == '1'){
      $value['discount_price'] = $product[0]->without_gst_price;
    }else{
      $value['discount_price'] = $product[0]->discount_price;
    }
   
    if(!file_exists('public/images/'.$this->folder.'product_image/'.$value["image"]) || $value["image"] == '' ){
      if(strpos($value["image"], '%20') === true || $value["image"] == ''){
        $value["image"] = $default_product_image;
      }else{
        $value["image"] = $default_product_image;
      }
    }
    ?>
        <li>
        <div class="cart-drop-menu cart-drop-menu-1">
            <div class="drop-img">
            <a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id ?>">
                <img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$value["image"]?>" alt="">
            </a>
            </div>
            <div class="drop-text">
            <h4>
                <a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id?>"> <?=$value['product_name']?> </a>
            </h4>
            <p><?=$value['weight_no'] .' '.$value['weight_name']?></p>
            <h3> <?=$this->siteCurrency .' '.number_format((float)$value['discount_price'], 2, '.', '')?> </h3>
            </div>
            <div class="cancel-btn remove_item" data-product_id="<?=$value['product_id']?>" data-product_weight_id=" <?=$value['product_weight_id']?>">
            <a href="javascript:" class="ms-0">
                <i class="fa-regular fa-circle-xmark"></i>
            </a>
            </div>
        </div>
        </li>
        <hr>
  <?php } ?>
  <li>
    <div class="total-amount p-0 notranslate">
      <p>Total</p>
      <h3 id="nav_subtotal"> <?=$this->siteCurrency .' '. getMycartSubtotal()?> </h3>
    </div>
    <div class="drop-btns p-0">
      <a href="
			<?=base_url().'products/cart_item'?>" class="view-cart"> <?=$this->lang->line('view cart')?> </a>
      <a href="
			<?=base_url().'checkout'?>" class="checkout "> <?=$this->lang->line('checkout')?> </a>
    </div>
  </li>
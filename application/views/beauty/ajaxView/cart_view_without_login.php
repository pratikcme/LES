<div class="cart-drop-wrapper">
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
    <div class="cart-drop-menu cart-drop-menu-1">
        <div class="drop-img">
          <a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id ?>">
          <img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$value["image"]?>" alt="">
        </div>
        <div class="drop-text">
          <h4>
            <a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id?>"> <?=$value['product_name']?> </a>
        </h4>
          <p>Qty : <?=$value['quantity']?></p>
          <h3 class="notranslate"><?=$this->siteCurrency.' '.number_format((float)$product[0]->discount_price, 2, '.', '')?></h3>
        </div>
        <div class="cancel-btn remove_item" data-product_id="<?=$value['product_id']?>" data-product_weight_id="<?=$value['product_weight_id']?>">
          <a href="javascript:"><i class="fa-regular fa-circle-xmark"></i></a>
        </div>
    </div>
    <?php } ?>
    </div>
    <div class="total-amount notranslate">
      <p><?=$this->lang->line('Total')?></p>
      <h3 id="nav_subtotal"> <?=$this->siteCurrency .' '. getMycartSubtotal()?> </h3>
    </div>
    <div class="drop-btns">
      <a href="
			<?=base_url().'products/cart_item'?>" class="view-cart"> <?=$this->lang->line('view cart')?> </a>
      <a href="
			<?=base_url().'checkout'?>" class="checkout "> <?=$this->lang->line('checkout')?> </a>
    </div>

    
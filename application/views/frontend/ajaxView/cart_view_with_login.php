<?php
	foreach ($my_cart as $key => $value) {
         $product_image = $this->product_model->GetUsersProductInCart($value->product_weight_id);

         if(!empty($isShow) && $isShow[0]->display_price_with_gst == '1'){
             $product_image[0]->discount_price = $product_image[0]->without_gst_price;
         }  

         $product_image[0]->image = preg_replace('/\s+/', '%20', $product_image[0]->image);
         if(!file_exists('public/images/'.$this->folder.'product_image/'.$product_image[0]->image) || $product_image[0]->image == '' ){
           if(strpos($product_image[0]->image, '%20') === true || $product_image[0]->image == ''){
             $product_image[0]->image = $default_product_image;
           }
         }
        
         $value->product_name = $product_image[0]->name;
         $value->image = $product_image[0]->image;
        
         $encode_id =  $this->utility->safe_b64encode($value->product_id);
         $varient_id =  $this->utility->safe_b64encode($value->product_weight_id);
?>
<li>
	<a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id ?>">
		<div class="cart-img-wrap">
		<?php if(isset($value->food_type) && $value->food_type == '1'){ ?>
            <img src="<?=base_url().'public/frontend/assets/images/vage-icon.svg'?>" alt="veg-icon" class="veg-icon">
        <?php }else if(isset($value->food_type) && $value->food_type == '2'){ ?>
            <img src="<?=base_url().'public/frontend/assets/images/non-vage-icon.svg'?>" alt="nonveg-icon" class="nonveg-icon">
        <?php } ?>
		<img src="<?=base_url().'/public/images/'.$this->folder.'product_image/'.$value->image?>"> </div>
	</a>
	<a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id?>">
		<div class="cart-detail-wrap">
			<h6><?=$value->product_name?></h6>
			<p><span><?=$value->quantity?></span> X <?=number_format((float)$product_image[0]->discount_price, 2, '.', '')?></p>
		</div>
	</a>
	<a href="javescript:" class="remove_item" data-product_id="<?=$value->product_id?>" data-product_weight_id="<?=$value->product_weight_id?>">
		<div class="cart-delete"> <i class="fas fa-times-circle"></i> </div>
	</a>
</li>
<?php } ?>
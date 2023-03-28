<li>
	<a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id?>">
		<div class="cart-img-wrap">
		<?php if(isset($value['food_type']) && $value['food_type'] == '1'){ ?>
            <img src="<?=base_url().'public/frontend/assets/images/vage-icon.svg'?>" alt="veg-icon" class="veg-icon">
        <?php }else if(isset($value['food_type']) && $value['food_type'] == '2'){ ?>
            <img src="<?=base_url().'public/frontend/assets/images/non-vage-icon.svg'?>" alt="nonveg-icon" class="nonveg-icon">
        <?php } ?>	
		<img src=<?=base_url().'/public/images/'.$this->folder.'product_image/'.$value["image"]?>> </div>
	</a>
	<a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id?>">
		<div class="cart-detail-wrap">
			<h6><?=$value["product_name"]?></h6>
			<p><span><?=$value["quantity"]?></span> X <?=number_format((float)$value['discount_price'], 2, '.', '')?></p>
		</div>
	</a>
	<a href="javescript:" class="remove_item" data-product_id="<?=$value["product_id"]?>" data-product_weight_id=<?=$value["product_weight_id"]?>>
		<div class="cart-delete"> <i class="fas fa-times-circle"></i> </div>
	</a>
</li>
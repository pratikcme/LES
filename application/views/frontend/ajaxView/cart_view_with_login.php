<li>
	<a href="<?=base_url().'products/productDetails/'.$encode_id.'/'.$varient_id ?>">
		<div class="cart-img-wrap"> <img src="<?=base_url().'/public/images/'.$this->folder.'product_image/'.$value->image?>"> </div>
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
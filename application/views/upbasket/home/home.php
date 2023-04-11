
<!-- -----hero-section--- -->
<section class="hero-section d-none"
  style="background-image: url('<?=base_url().'public/images/'.$this->folder.'web_banners/'.$banner[0]->web_banner_image?>')">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6"></div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="hero-content">
          <!-- <h5>PROVIDING <span>QUALITY</span> PRODUCTS</h5>
          <h1>ORGANIC <span>DRY FRUITS</span></h1>
          <h3><span>100%</span> HEALTHY & AFFORDABLE</h3> -->
          <h1><?=$banner[0]->main_title?></h1>
          <h3><?=$banner[0]->sub_title?></h3>
          <a href="<?=base_url().'products'?>" class="hero-btn">shop now</a>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- Carousel -->
 <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <?php foreach ($banner as $key => $value) { ?> 
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$key?>" class="<?=($key==0) ? 'active' : '' ?>"></button>
  <?php } ?>
  <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
<?php foreach ($banner as $key => $value) { ?>
  <section class="hero-section carousel-item <?=($key == 0) ? "active" : ""?>" style="background-image: url(<?=base_url().'public/images/'.$this->folder.'web_banners/'.$value->web_banner_image?>)">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12"></div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="hero-content">
              <!-- <h5>PROVIDING <span>QUALITY</span> PRODUCTS</h5>
              <h1>ORGANIC <span>DRY FRUITS</span></h1>
              <h3><span>100%</span> HEALTHY & AFFORDABLE</h3> -->
              <h1><?=$value->main_title?></h1>
              <h3><?=$value->sub_title?></h3>
              <?php if($value->type == '1'){ ?>
               <a href="<?=base_url().'products'?>" class="hero-btn"><?=$this->lang->line('Shop Now')?></a>
               <?php }else if($value->type == '2'){ ?>
                <a href="<?=base_url().'products?cat_id='.$this->utility->safe_b64encode($value->category_id)?>" class="hero-btn"><?=$this->lang->line('Shop Now')?></a>
              <?php }else{ ?>
                <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_varient_id)?>" class="hero-btn"><?=$this->lang->line('Shop Now')?></a>
              <?php } ?>
              <!-- <a href="./product-listing-2.php" class="hero-btn">shop now</a> -->
            </div>
          </div>
      </div>
    </div>
  </section>
<?php } ?>
<!-- <section class="hero-section carousel-item ">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="hero-content">
            <h5>PROVIDING <span>QUALITY</span> PRODUCTS</h5>
            <h1>ORGANIC <span>DRY FRUITS</span></h1>
            <h3><span>100%</span> HEALTHY & AFFORDABLE</h3>
            <a href="./product-listing-2.php" class="hero-btn">shop now</a>
          </div>
        </div>
    </div>
  </div>
</section>
<section class="hero-section carousel-item">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="hero-content">
            <h5>PROVIDING <span>QUALITY</span> PRODUCTS</h5>
            <h1>ORGANIC <span>DRY FRUITS</span></h1>
            <h3><span>100%</span> HEALTHY & AFFORDABLE</h3>
            <a href="./product-listing-2.php" class="hero-btn">shop now</a>
          </div>
        </div>
    </div>
  </div>
</section> -->
</div>
</div>


<!-- -----Categories-section----- -->
<section class="Categories-section section">
  <img src="<?=$this->theme_base_url?>/assets/images/category-top-right-img.png" alt="" class="category-top-right-img">
  <div class="container">
    <h1 class="title">Shop By <span>Categories</span></h1>
    <p class="pera">Top Categories Of The Week</p>
    <h5>View All Categories</h5>
    <h5 class="mobile-cate-text"><a href="#">View All</a></h5>

    <!-- --------owl-slider--------->
    <div class="owl-1 owl-carousel owl-theme">
      <?php foreach ($category as $key => $value) { ?>
      <a href="<?=base_url().'products?cat_id='.$this->utility->safe_b64encode($value->id)?>"
        class="categorie-wrapper categorie-1">
        <div class="categorie-img ">
          <!-- <img src="<?=$this->theme_base_url?>/assets/images/categorie-new-1.svg" alt=""> -->
          <img src="<?=base_url().'public/images/'.$this->folder.'category/'.$value->image?>" alt="">
        </div>
        <div class="categorie-text">
          <h4><?=$value->name?></h4>
        </div>
      </a>
      <?php } ?>
      
    </div>
  </div>
</section>

<!-- -----Featured Products-section------------ -->
<section class="Featured-Products  section">
  <img src="<?=$this->theme_base_url?>/assets/images/product-top-left-img.png" alt="" class="product-top-left-img">
  <img src="<?=$this->theme_base_url?>/assets/images/product-bottom-right-img.png" alt=""
    class="product-bottom-right-img">
  <div class="container">
    <h2 class="title">Top Featured <span>Products</span></h2>
    <p class="pera">Do not miss the current offers until the end of month.</p>

    <div class="row">
      <!-- -----product-card----- -->
      <?php foreach ($top_sell as $key => $value) { 
          $attr = '';
          if(in_array($value->id, $wish_pid)){
            $attr = 'checked';
          }
          $value->name = character_limiter($value->name,30);
        ?>


      <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1s"
        data-wow-delay="0" data-wow-offset="0">
        <div class="techno-check">
          <!-- <input class="techno_checkbox" type="checkbox" id="1" value="1" data-product_id="<?=$this->utility->safe_b64encode($value->id)?>" <?=$attr?> /> -->
          <div class="product-wrapper card  <?=($value->quantity == '0') ? 'out-of-stock' : '' ?>">
            <div class="card-header">
              <a
                href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->id).'/'.$this->utility->safe_b64encode($value->pw_id)?>">
                <img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image ?>" alt="">
                <!-- <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-1.png" alt=""> -->
              </a>
            </div>

            <div class="card-body">
              <h3><a
                  href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->id).'/'.$this->utility->safe_b64encode($value->pw_id)?>"><?=$value->name?></a>
              </h3>
              <h4>
                <?=($value->quantity >= 25 ) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?>
              </h4>

              <div class="rate-dropdown">
                <!-- <a href="#" class="card-dropdown">500 gms <span><i class="fa-solid fa-angle-down"></i></span></a> -->
                <select class="form-select card-dropdown d-none" aria-label="Default select example">
                  <option selected>500 Gms</option>
                  <option value="1">300 Gms</option>
                  <option value="2">200 Gms</option>
                  <option value="3">1Kg</option>
                </select>


                <div class="card-rating">
                  <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt=""><?=$value->ratting['rating']?></p>
                </div>
              </div>
              <h6 class="rating notranslate">
                <?=$this->siteCurrency .' '. number_format((float)$value->discount_price, 2, '.', '') ?><span
                  class="<?=($value->discount_per > 0 ) ? '' : ' d-none' ?>"><strike><?=$this->siteCurrency .' '.$value->price?></strike></span>
              </h6>
              <?php 
                $d_none = '';
                $d_show = 'd-none';
                if(!empty($item_weight_id)){
                  if(in_array($value->pw_id,$item_weight_id)){
                    $d_show = '';
                    $d_none = 'd-none';
                  }
                }
              ?>
              <a href="javascript:" class="add-cart-btn addcartbutton <?=$d_none?>"
                data-product_id="<?=$this->utility->safe_b64encode($value->id)?>"
                data-varient_id="<?=$this->utility->safe_b64encode($value->pw_id)?>"><span><i
                    class="fa-solid fa-cart-shopping"></i></span> Add to Cart
              </a>
              <div class="product-detail-quentity <?=$d_show?>">
                  <div class="qty-container">
                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="qty" class="input-qty qty" value="<?=(!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?=$value->id?>" data-weight_id="<?=$value->weight_id?>">
                    <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-plus"></i></button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- -----Latest Products----- -->
<section class="Latest-Products Categories-section section">
  <img src="<?=$this->theme_base_url?>/assets/images/latest-product-top-img.png" alt="" class="latest-product-top-img">
  <div class="container">
    <h1 class="title">Latest <span>Products</span></h1>
    <p class="pera">Do not miss the current offers until the end of month.</p>
    <h5>View All Categories</h5>

    <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0"
      data-wow-offset="0">
      <?php foreach ($new_arrival as $key => $value) { ?>
      <div class="techno-check">
        <input class="techno_checkbox" type="checkbox" id="8" value="8" />
        <div class="product-wrapper card <?=($value->quantity == '0') ? 'out-of-stock' : '' ?>">
          <div class="card-header">
            <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->id).'/'.$this->utility->safe_b64encode($value->pw_id)?>">
              <!-- <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-1.png" alt=""> -->
              <img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image ?>" alt="">
            </a>
          </div>
          <div class="card-body">
            <h3><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->id).'/'.$this->utility->safe_b64encode($value->pw_id)?>"><?=$value->name?></a></h3>
            <h4><?=($value->quantity >= 25 ) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></h4>

            <div class="rate-dropdown">
              <!-- <a href="#" class="card-dropdown">500 gms <span><i class="fa-solid fa-angle-down"></i></span></a> -->

              <select class="form-select card-dropdown d-none" aria-label="Default select example">
                <option selected>500 Gms</option>
                <option value="1">300 Gms</option>
                <option value="2">200 Gms</option>
                <option value="3">1Kg</option>
              </select>

              <div class="card-rating">
                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt=""><?=$value->ratting['rating']?></p>
              </div>
            </div>
            <h6 class="rating">
                <?=$this->siteCurrency .' '. number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?=($value->discount_per > 0 ) ? '' : ' d-none' ?>"><strike><?=$this->siteCurrency .' '.$value->price?></strike></span>
            </h6>
            <?php 
            $d_none = '';
            $d_show = 'd-none';
            if(!empty($item_weight_id)){
              if(in_array($value->pw_id,$item_weight_id)){
                $d_show = '';
                $d_none = 'd-none';
              }
            }
            ?>
            <a href="javascript:" class="add-cart-btn addcartbutton <?=$d_none?>" data-product_id="<?=$this->utility->safe_b64encode($value->id)?>"
                data-varient_id="<?=$this->utility->safe_b64encode($value->pw_id)?>">
                <span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart
            </a>
            <div class="product-detail-quentity <?=$d_show?>">
                      <div class="qty-container">
                        <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-minus"></i></button>
                        <input type="text" name="qty" class="input-qty qty" value="<?=(!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?=$value->id?>" data-weight_id="<?=$value->weight_id?>">
                        <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-plus"></i></button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <?php }  ?>
    </div>
  </div>
</section>
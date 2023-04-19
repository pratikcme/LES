
<!--============== Carousel ==================-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
    
  <!-- The slideshow/carousel -->

    <div class="carousel-inner">
    <?php foreach ($banner as $key => $value) { ?>
        <section class="hero-section banner-section carousel-item <?= ($key == 0) ? "active" : "" ?> " style="background-image: url(<?=base_url() . 'public/images/' . $this->folder . 'web_banners/' . $value->web_banner_image ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="hero-content">
                            <!-- <h4>Discover</h4> -->
                            <h1><?= $value->main_title ?></h1>
                            <p><?= $value->sub_title ?></p>
                            <?php if($value->type == '1'){?>
                              <a href="<?= base_url() . 'products' ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                              <?php }elseif($value->type == '2'){ ?>
                              <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->category_id) ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                              <?php }else{ ?>
                                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>" class="hero-btn"><?= $this->lang->line('Shop Now') ?></a>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- <section class="hero-section banner-section carousel-item" style="background-image: url('./assets/images/home-page/banner-slider.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="hero-content">
                            <h4>Discover</h4>
                            <h1>The Secrets Of Beauty</h1>
                            <p>Get them together (for less!) for dewy, natural-looking <br> coverage that still looks like skin
                            </p>
                            <a href="./product-list-page.php" class="hero-btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-section banner-section carousel-item" style="background-image: url('./assets/images/home-page/banner-slider.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="hero-content">
                            <h4>Discover</h4>
                            <h1>The Secrets Of Beauty</h1>
                            <p>Get them together (for less!) for dewy, natural-looking <br> coverage that still looks like skin
                            </p>
                            <a href="./product-list-page.php" class="hero-btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
</div>

<!-- -----Categories-section----- -->
<section class="Categories-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2><?= $this->lang->line('SHOP BY CATEGORIES') ?></h2>
                <!-- <p>Top Categories Of The Week</p> -->
            </div>
        </div>

        <!-- --------owl-slider--------->
        
        <div class="owl-1 owl-carousel owl-theme">
          <?php foreach ($category as $key => $value) { ?>
            <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'category/' . $value->image ?>" alt="">
                </div>
                <div class="categorie-text">
                    <h4><?= $value->name ?></h4>
                </div>
            </a>
            <?php } ?>
            <!-- <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-2.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>LIPS</h4>
                </div>
            </a>

            <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-3.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>HAIR</h4>
                </div>
            </a>

            <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-4.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>EYE</h4>
                </div>
            </a>

            <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-5.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>MAKEUP</h4>
                </div>
            </a>

            <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-6.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>Natural</h4>
                </div>
            </a>

            <a href="./product-list-page.php" class="categorie-wapper">
                <div class="categorie-img">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/categorie-img-7.png" alt="">
                </div>
                <div class="categorie-text">
                    <h4>FRAGRANCE</h4>
                </div>
            </a> -->

        </div>

    </div>
</section>


<!-- -----Featured Products-section------------ -->
<section class="Featured-Products p-100 <?=(empty($top_sell) ? 'd-none':'' )?>">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2><?= $this->lang->line('TOP FEATURED PRODUCTS') ?></h2>
                <!-- <p>Do not miss the current offers until the end of month.</p> -->
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- -----product-card----- -->
            <?php foreach ($top_sell as $key => $value) { 
              // $class = '';
              // if (in_array($value->id, $wish_pid)) {
              //   $class = 'fas .fa-heart';
              // }
              $value->name = character_limiter($value->name, 30);  
            ?>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card <?=($value->quantity == '0') ? 'out-of-stock' : '' ?>">
                    <span class="discnt <?=($value->discount_per > 0) ? '' : 'd-none'?>"><?=$value->discount_per?> % off</span>
                        <div class="card-header">
                            <h5><?=($value->quantity >= 25 ) ? $this->lang->line('Available(Instock)') : ""?></h5>
                            
                            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                <img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image ?>" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a></h3>
                            <h6 class="rating-cnt notranslate"><?= $this->siteCurrency .' '. number_format((float)$value->discount_price, 2, '.', '')?> <span class="<?=($value->discount_per > 0 ) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency .' '. number_format((float)$value->price, 2, '.', '')?></strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                              <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                                <span class="star"></span>
                                <?php } ?>
                                <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                                  <span class="star star-active"></span>
                              <?php } ?>
                                <!-- <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span> -->
                              </div>
                              <div><span>(<?=$value->ratting['rating']?>)</span></div>
                            </div>
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
                            <div class="card-btn addcartbutton <?=$d_none?>" 
                            data-product_id="<?=$this->utility->safe_b64encode($value->id)?>"
                            data-varient_id="<?=$this->utility->safe_b64encode($value->pw_id)?>">
                            <a href="javascript:" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                            <?=$this->lang->line('add to cart')?></a>
                            </div>
                            <div class="product-detail-quentity add-cart-btn <?=$d_show?>">
                              <div class="qty-container">
                                <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                <input type="text" name="qty" class="input-qty qty" value="<?=(!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?=$value->id?>" data-weight_id="<?=$value->weight_id?>" readonly>
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

<!-- --our-offers--- -->
<section class="our-offer-section p-100 pb-0 <?=(empty($offer_list)) ? 'd-none' : '' ?>">
    <div class="container">
        <div class="row">
        <?php if(count($offer_list) == '1'){ ?>  
            <!--=========== Single-Banner ========-->
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?=$offer_list[0]->image?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                    <div class="sale-banner-inner text-center">
                        <span><?=$offer_list[0]->offer_title?></span>
                        <!-- <h2>Comfy Lounging</h2> -->
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($offer_list[0]->id) ?>" class="lg-btn">shop now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
            <!--=========== Two-Banners ==========-->
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
            <?php if(count($offer_list) == '2' || count($offer_list) >= '4' ){ ?> 
            <?php foreach ($offer_list as $key => $value) { ?>   
                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">
                    <div class="offer-wrapper offer-wrapper-1">
                        <img src="<?=$value->image?>" alt="" class="offer-extra-left">
                        <h4><?=$value->offer_title?></h4>
                        <h3><?=$value->offer_percent?>% <span>OFF</span></h3>
                        <p><?=$value->category_name?></p>
                        <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="explor-btn"><?=$this->lang->line('Explore More')?></a>
                    </div>
                </a>
            </div>
            <?php } ?>
            <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <a href="#">
                    <div class="offer-wrapper offer-wrapper-2">
                        <img src="<?=$this->theme_base_url?>/assets/images/home-page/offer-extra-right.png" alt="" class="offer-extra-right">
                        <h4>Natural Items</h4>
                        <h3>50% <span>OFF</span></h3>
                        <a href="#" class="explor-btn"><?=$this->lang->line('Explore More')?></a>
                    </div>
                </a>
            </div> -->
        <?php } ?>
            <!--=============== three-banners ==================-->
            <?php if(count($offer_list) == '3'){ ?> 
            <?php foreach ($offer_list as $key => $value) { 
                if($key == 2){
                    goto a;
                }    
            ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div>
                    <div class="home-clothes mb-4">
                        <div class="cloth-card">
                            <img src="<?=$value->image?>" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5><?=$value->offer_title?></h5>
                            <h3><?=$value->category_name?></h3>
                            <a href="<?=base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id)?>"><?=$this->lang->line('Explore More')?></a>
                        </div>
                    </div>
                    <!-- <div class="women-cloth home-clothes">
                        <div class="cloth-card">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/women-fashion-card.png" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5>MODERN AND STYLISH OUTFIT</h5>
                            <h3>The Best Women Fashion Outfits For Date</h3>
                            <a href="./product-list-page.php"><?=$this->lang->line('Explore More')?></a>
                        </div>
                    </div> -->
                </div>
            </div>
           <?php a: ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="practical-cloth home-clothes">
                    <div class="cloth-card">
                        <img src="<?=$value->image?>" alt="">
                    </div>
                    <div class="cloth-content">
                        <h5><?=$value->offer_title?></h5>
                        <h3><?=$value->category_name?></h3>
                        <a href="<?=base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id)?>"><?=$this->lang->line('Explore More')?></a>
                    </div>
                </div>
            </div>
            <?php } ?> 
        <?php } ?>
        </div>
    </div>
</section>

<!-- -----Latest Products----- -->
<section class="Latest-Products Categories-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2><?=$this->lang->line('Latest')?> <?=$this->lang->line('Products')?></h2>
                <!-- <p>Do not miss the current offers until the end of month.</p> -->
            </div>
        </div>

        <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0"
            data-wow-offset="0">
            <?php foreach ($new_arrival as $key => $value) { ?>
              <div class="techno-check">
                  <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                  <div href="#" class="product-wrapper card <?=($value->quantity == '0') ? 'out-of-stock' : '' ?>">
                  <span class="discnt <?=($value->discount_per > 0) ? '' : 'd-none'?>"><?=$value->discount_per?> % off</span>
                      <div class="card-header">
                          <h5><?=($value->quantity >= 25 ) ? $this->lang->line('Available(Instock)') : ""?></h5>
                          <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                                <img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image ?>" alt="">
                            </a>
                      </div>

                      <div class="card-body">
                        <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?= $value->name ?></a></h3>
                        <h6 class="rating-cnt notranslate"><?= $this->siteCurrency .' '. number_format((float)$value->discount_price, 2, '.', '')?> <span class="<?=($value->discount_per > 0 ) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency .' '. number_format((float)$value->price, 2, '.', '')?></strike></span></h6>
                          <div class="rating-starts">
                          <div class="rating stars3_5">
                            <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                                <span class="star"></span>
                                <?php } ?>
                                <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                                  <span class="star star-active"></span>
                            <?php } ?>
                              <!-- <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star star-active"></span>
                              <span class="star star-active-half"></span> -->
                          </div>
                          <div><span>(<?=$value->ratting['rating']?>)</span></div>
                          </div>
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
                          <div class="card-btn addcartbutton <?=$d_none?>" 
                            data-product_id="<?=$this->utility->safe_b64encode($value->id)?>"
                            data-varient_id="<?=$this->utility->safe_b64encode($value->pw_id)?>">
                            <a href="javascript:" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                            <?=$this->lang->line('add to cart')?></a>
                            </div>
                            <div class="product-detail-quentity add-cart-btn <?=$d_show?>">
                              <div class="qty-container">
                                <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-minus"></i></button>
                                <input type="text" name="qty" class="input-qty qty" value="<?=(!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?=$value->id?>" data-weight_id="<?=$value->weight_id?>" readonly>
                                <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?=$value->pw_id?>" type="button"><i class="fa-solid fa-plus"></i></button>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
            <?php } ?>
        </div>
    </div>
</section>
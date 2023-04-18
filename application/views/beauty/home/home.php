<!-- =====hero-section=== -->
<!-- <section class="hero-section banner-section" onmousemove="moveMouse()">
    <div class="banner-extra-img">
        <img src="<?=$this->theme_base_url?>/assets/images/home-page/hero-flver-img.png" alt="" id="Image" class="hero-flver-img">
        <img src="<?=$this->theme_base_url?>/assets/images/home-page/banner-left-img.png" alt="banner-left-img" class="banner-left-img">
        <img src="<?=$this->theme_base_url?>/assets/images/home-page/banner-right-img.png" alt="banner-right-img" class="banner-right-img">
    </div>
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
        <section class="hero-section banner-section carousel-item <?= ($key == 0) ? "active" : "" ?> <?= $calss[$key] ?>" style="background-image: url(<?=base_url() . 'public/images/' . $this->folder . 'web_banners/' . $value->web_banner_image ?>);">
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
<section class="Featured-Products p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2>Top Featured Products</h2>
                <p>Do not miss the current offers until the end of month.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- -----product-card----- -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card out-of-stock">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-1.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Mamaearth Ubtan Body Wash With Turmeric & Saffron
                                    For</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <!-- <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div> -->
                            <div class="product-detail-quentity add-cart-btn">
                              <div class="qty-container">
                                <button class="qty-btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
                                <input type="text" name="qty" value="1" class="input-qty">
                                <button class="qty-btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <span class="discnt">1% off</span>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-2.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Too Faced Lip Injection Maximum Plump Travel Size</a>
                            </h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-3.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Too Faced Sweet Peach Eye Palette</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                             <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-4.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Kay Beauty Quick Dry Liquid Eyeliner</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                             <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Lakme Absolute Blur Perfect Makeup Primer</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-6.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Lakme Absolute Matte Ultimate Lip Color with Argan
                            Oil</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-7.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Lakme Absolute Skin Natural Mousse Mattreal
                                    Foundation</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInDown" data-wow-duration="1s"
                data-wow-delay="0" data-wow-offset="0">
                <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                    <div href="#" class="product-wrapper card">
                        <div class="card-header">
                            <h5>In Stock</h5>
                            <a href="./product-list-page.php">
                                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-8.png" alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h3><a href="./product-list-page.php">Maybelline New York Fit Me Matte + Poreless Setting
                                    Spray</a></h3>
                            <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <div class="rating-starts">
                              <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                              </div>
                              <div><span>(122)</span></div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- --our-offers--- -->
<section class="our-offer-section p-100 pb-0">
    <div class="container">
        <div class="row">
            
            <!--=========== Single-Banner ========-->
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="sale-banner-wrap position-relative">
                    <img src="<?=$this->theme_base_url?>/assets/images/home-page/sale-banner.png" class="sale-banner-img position-absolute" alt="sale-banner" />
                    <div class="sale-banner-inner text-center">
                        <span>FROM LOVESEATS TO SECTIONALS.</span>
                        <h2>Comfy Lounging</h2>
                        <a href="./product-list-page.php" class="lg-btn">shop now</a>
                    </div>
                </div>
            </div>
            
            <!--=========== Two-Banners ==========-->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <a href="#">
                    <div class="offer-wrapper offer-wrapper-1">
                        <img src="<?=$this->theme_base_url?>/assets/images/home-page/offer-extra-left.png" alt="" class="offer-extra-left">
                        <h4>CHRISTMAS DAYS</h4>
                        <h3>60% <span>OFF</span></h3>
                        <p>All Beauty Products</p>
                        <a href="#" class="explor-btn">Explore More</a>
                    </div>
                </a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
                <a href="#">
                    <div class="offer-wrapper offer-wrapper-2">
                        <img src="<?=$this->theme_base_url?>/assets/images/home-page/offer-extra-right.png" alt="" class="offer-extra-right">
                        <h4>Natural Items</h4>
                        <h3>50% <span>OFF</span></h3>
                        <a href="#" class="explor-btn">Explore More</a>
                    </div>
                </a>
            </div>

            <!--=============== three-banners ==================-->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div>
                    <div class="home-clothes mb-4">
                        <div class="cloth-card">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/home-clothes-card.png" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5>CLOTHES THAT YOU LIKE</h5>
                            <h3>Home Clothes And Accessories</h3>
                            <a href="./product-list-page.php">Explore More</a>
                        </div>
                    </div>
                    <div class="women-cloth home-clothes">
                        <div class="cloth-card">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/women-fashion-card.png" alt="">
                        </div>
                        <div class="cloth-content">
                            <h5>MODERN AND STYLISH OUTFIT</h5>
                            <h3>The Best Women Fashion Outfits For Date</h3>
                            <a href="./product-list-page.php">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="practical-cloth home-clothes">
                    <div class="cloth-card">
                        <img src="<?=$this->theme_base_url?>/assets/images/home-page/practical-cloth.png" alt="">
                    </div>
                    <div class="cloth-content">
                        <h5>СOMFORTABLE CLOTHES</h5>
                        <h3>Practical Clothes For Your Kids</h3>
                        <a href="./product-list-page.php">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- -----Latest Products----- -->
<section class="Latest-Products Categories-section p-100">
    <div class="container">
        <div class="col-xxl-12 col-lg-12 ">
            <div class="title">
                <h2>Latest Products</h2>
                <p>Do not miss the current offers until the end of month.</p>
            </div>
        </div>

        <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0"
            data-wow-offset="0">

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-1.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Mamaearth Ubtan Body Wash With Turmeric & Saffron For</a>
                        </h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                        <div class="rating stars3_5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star star-active"></span>
                            <span class="star star-active-half"></span>
                        </div>
                        <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-2.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Too Faced Lip Injection Maximum Plump Travel Size</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                        <div class="rating stars3_5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star star-active"></span>
                            <span class="star star-active-half"></span>
                        </div>
                        <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-4.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Kay Beauty Quick Dry Liquid Eyeliner</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                            <div class="rating stars3_5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star star-active"></span>
                            <span class="star star-active-half"></span>
                            </div>
                            <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Lakme Absolute Blur Perfect Makeup Primer</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                          <div class="rating-starts">
                            <div class="rating stars3_5">
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star star-active"></span>
                              <span class="star star-active-half"></span>
                            </div>
                            <div><span>(122)</span></div>
                          </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Lakme Absolute Blur Perfect Makeup Primer</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                          <div class="rating-starts">
                            <div class="rating stars3_5">
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star star-active"></span>
                              <span class="star star-active-half"></span>
                            </div>
                            <div><span>(122)</span></div>
                          </div>
                         <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                            
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Lakme Absolute Blur Perfect Makeup Primer</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                          <div class="rating-starts">
                            <div class="rating stars3_5">
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star star-active"></span>
                              <span class="star star-active-half"></span>
                            </div>
                            <div><span>(122)</span></div>
                          </div>
                         <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                            </div>
                            
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-2.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Too Faced Lip Injection Maximum Plump Travel Size</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                            <div class="rating stars3_5">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star star-active"></span>
                                <span class="star star-active-half"></span>
                            </div>
                            <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                            
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Lakme Absolute Blur Perfect Makeup Primer</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                        <div class="rating stars3_5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star star-active"></span>
                            <span class="star star-active-half"></span>
                        </div>
                        <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                                <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                    Add to Cart</a>
                        </div>
                        <div class="product-detail-quentity add-cart-btn">
                            <div class="qty-container">
                            <button class="qty-btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
                            <input type="text" name="qty" value="1" class="input-qty">
                            <button class="qty-btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="techno-check">
                <input class="techno_checkbox" type="checkbox" id="1" value="1" />
                <div href="#" class="product-wrapper card">
                    <div class="card-header">
                        <h5>In Stock</h5>
                        <a href="./product-list-page.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-2.png" alt="">
                        </a>
                    </div>

                    <div class="card-body">
                        <h3><a href="./product-list-page.php">Too Faced Lip Injection Maximum Plump Travel Size</a></h3>
                        <h6 class="rating-cnt">₹398.00 <span><strike>₹425.00</strike></span></h6>
                        <div class="rating-starts">
                        <div class="rating stars3_5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star star-active"></span>
                            <span class="star star-active-half"></span>
                        </div>
                        <div><span>(122)</span></div>
                        </div>
                        <div class="card-btn">
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>
                                Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
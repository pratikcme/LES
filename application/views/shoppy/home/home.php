<!--============== Carousel ==================-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <?php $k = 0;
    foreach ($banner as $key => $value) {

    ?>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?= ($key == $k) ? 'active' : '' ?>"></button>
    <?php $k++;
    } ?>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <?php

    $i = 0;
    foreach ($banner as $key => $value) { ?>
      <section class="hero-sections carousel-item <?= ($key == $i) ? "active" : "" ?>" style="background-image: url('<?= base_url() . 'public/images/' . $this->folder . 'web_banners/' . $value->web_banner_image ?>');">
        <svg id="Layer_1" class="left-bg" data-name="Layer 1" xmlns="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.svg' ?>" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 150.6 125.24">
          <defs>
            <style>
              .left-bg {
                fill: none;
                stroke-width: 10px;
                stroke: url(#linear-gradient);
              }
            </style>
            <linearGradient id="linear-gradient" x1="138.77" y1="17.34" x2="33.24" y2="86.38" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f5512b" />
              <stop offset="1" stop-color="#f5512b" stop-opacity="0" />
            </linearGradient>
          </defs>
          <path class="left-bg" d="M148.83,106.7l-11.93,6.68A60,60,0,0,1,55.65,91L5,3.28" transform="translate(-0.67 -0.78)" />
        </svg>
        <svg id="Layer_1" class="right-bg" data-name="Layer 1" xmlns="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.svg' ?>" xmlns:xlink="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.svg' ?>" viewBox="0 0 353.33 207.47">
          <defs>
            <style>
              .right-bg {
                fill: none;
                stroke-width: 10px;
                stroke: url(#linear-gradient);
              }
            </style>
            <linearGradient id="linear-gradient" x1="380.55" y1="432.23" x2="-254.06" y2="-537.86" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#113a8e" />
              <stop offset="1" stop-color="#113a8e" stop-opacity="0" />
            </linearGradient>
          </defs>
          <path class="right-bg" d="M119,214.88,240,145a60,60,0,0,1,82,22l27.67,47.92M3.16,39.9,19,30.77a60,60,0,0,1,82,22l98.12,170" transform="translate(-0.66 -17.72)" />
        </svg>
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
              <div class="title">
                <h2 class="sub-heading wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">Colored Fashion Year</h2>
                <h1 class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0"><?= $value->main_title ?></h1>
                <p class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0"><?= $value->sub_title ?></p>
                <?php if ($value->type == '1') { ?>
                  <a href="<?= base_url() . 'products' ?>" type="button" class="lg-btn wow bounceInLeft" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('Shop Now') ?></a>

                <?php } else if ($value->type == '2') { ?>
                  <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->category_id) ?>" type="button" class="lg-btn wow bounceInLeft" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('Shop Now') ?></a>

                <?php } else { ?>
                  <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_varient_id) ?>" type="button" class="lg-btn wow bounceInLeft" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0"><?= $this->lang->line('Shop Now') ?></a>

                <?php } ?>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12"></div>
          </div>
        </div>
      </section>
    <?php $i++;
    } ?>
  </div>
</div>

<!--========== category-section ==========-->
<section class="category-wrap p-100">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="title text-center wow fadeIn">
          <h2>Shop By <span>Categories</span></h2>
          <p>Top Categories Of The Week</p>
        </div>
      </div>

      <?php


      foreach ($category as $key => $value) {
        if ($key == 2) {
          break;
        }
      ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>">
            <div class="categories">
              <div class="category-img">
                <img src="<?= base_url() . 'public/images/' . $this->folder . 'category/' . $value->image ?>" alt="category-img">
              </div>
              <div class="category-name">
                <h3><?= $value->name ?></h3>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>

      <div class="col-xxl-4 col-xl-4 col-lg-4">
        <div class="box-gap">
          <?php

          foreach ($category as $key => $value) {
            if ($key > 2) {

              if ($key == 5) {

                break;
              }

          ?>
              <a href="<?= base_url() . 'products?cat_id=' . $this->utility->safe_b64encode($value->id) ?>" class="kids-im">
                <div class="categories">
                  <div class="accesories-img mb-4">
                    <img src="<?= base_url() . 'public/images/' . $this->folder . 'category/' . $value->image ?>" alt="accesories-img">
                  </div>
                  <div class="category-name">
                    <h3><?= $value->name ?></h3>
                  </div>
                </div>
              </a>
          <?php
            }
          } ?>
        </div>

      </div>
    </div>
  </div>
</section>


<!--================ exclusive products =====================-->
<section class="products-wrap p-100">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="title text-center wow fadeIn">
          <h2> Exclusive <span>Products</span></h2>
          <p>Do not miss the current offers until the end of month.</p>
        </div>
      </div>
      <div>
        <div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="seller-tab" data-bs-toggle="tab" data-bs-target="#sellers" type="button" role="tab" aria-controls="sellers" aria-selected="true"><?= $this->lang->line('Best Sellers') ?></button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="arrival-tab" data-bs-toggle="tab" data-bs-target="#New" type="button" role="tab" aria-controls="New" aria-selected="false"><?= $this->lang->line('New Arrival') ?></button>
            </li>

          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="sellers" role="tabpanel" aria-labelledby="seller-tab">
            <div class="row">
              <?php

              foreach ($top_sell as $key => $value) :

              ?>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">

                  <div class="product-card  <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">
                    <div class="product-img-wrap">
                      <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                        <div class="product-im">
                          <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                        </div>
                      </a>

                      <?php if ($value->varientQuantity != '0') : ?>
                        <p>In Stock</p>
                      <?php endif ?>

                      <?php if ($value->discount_per > '0') { ?>
                        <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
                      <?php } ?>
                    </div>

                    <div class="product-content">
                      <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                        <h5><?= $value->name ?></h5>
                        <div class="product-discount notranslate">
                          <h4><?= $this->siteCurrency ?><?= number_format((float)$value->discount_price, 2, '.', '') ?></h4>
                          <p class="<?= ($value->discount_per > '0') ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->price ?></p>
                        </div>
                      </a>
                      <div class="rating-starts">
                        <div class="rating stars3_5">

                          <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                            <span class="star"></span>
                          <?php } ?>

                          <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                            <span class="star star-active"></span>
                          <?php } ?>

                        </div>
                        <div><span>(<?= $value->ratting['rating'] ?>)</span></div>
                      </div>

                      <?php
                      $d_none = '';
                      $d_show = 'd-none';
                      if (!empty($item_weight_id)) {
                        if (in_array($value->pw_id, $item_weight_id)) {
                          $d_show = '';
                          $d_none = 'd-none';
                        }
                      }
                      ?>

                      <div>
                        <button type="button" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                          Cart
                        </button>
                      </div>



                      <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                        <div class="qty-container">
                          <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                          <input type="text" name="qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" class="input-qty">
                          <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>



          <div class="tab-pane fade" id="New" role="tabpanel" aria-labelledby="arrival-tab">
            <div class="row">
              <?php foreach ($new_arrival as $key => $value) : ?>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">

                  <div class="product-card  <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">
                    <div class="product-img-wrap">
                      <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                        <div class="product-im">
                          <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                        </div>
                      </a>

                      <?php if ($value->varientQuantity != '0') : ?>
                        <p>In Stock</p>
                      <?php endif ?>

                      <?php if ($value->discount_per > '0') { ?>
                        <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
                      <?php } ?>
                    </div>

                    <div class="product-content">
                      <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                        <h5><?= $value->name ?></h5>
                        <div class="product-discount notranslate">
                          <h4><?= $this->siteCurrency ?><?= number_format((float)$value->discount_price, 2, '.', '') ?></h4>
                          <p class="<?= ($value->discount_per > '0') ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->price ?></p>
                        </div>
                      </a>
                      <div class="rating-starts">
                        <div class="rating stars3_5">

                          <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                            <span class="star"></span>
                          <?php } ?>

                          <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                            <span class="star star-active"></span>
                          <?php } ?>

                        </div>
                        <div><span>(<?= $value->ratting['rating'] ?>)</span></div>
                      </div>

                      <?php
                      $d_none = '';
                      $d_show = 'd-none';
                      if (!empty($item_weight_id)) {
                        if (in_array($value->pw_id, $item_weight_id)) {
                          $d_show = '';
                          $d_none = 'd-none';
                        }
                      }
                      ?>

                      <div>
                        <button type="button" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                          Cart
                        </button>
                      </div>



                      <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                        <div class="qty-container">
                          <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                          <input type="text" name="qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" class="input-qty">
                          <button class="qty-btn-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>


          <div class="tab-pane fade" id="Offer" role="tabpanel" aria-labelledby="offer-tab">
            <div class="row">

              <!-- pendding -->
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                <div class="product-card">
                  <div class="product-img-wrap">
                    <div class="product-im">
                      <a href="./product-detail.php">
                        <img src="./assets/img/home/category-1-img.png" alt="">
                      </a>
                    </div>
                    <p>In Stock</p>
                    <div class="stock-icons">
                      <a href="#">
                        <div class="stocks">
                          <!-- <img src="./assets/img/home/Handbag.png" alt=""> -->
                          <svg id="Layer_1" data-name="Layer 1" xmlns="./assets/img/home/Handbag.svg" viewBox="0 0 19.74 19.25">
                            <defs>
                              <style>
                                .stock-icon-svg {
                                  fill: none;
                                  stroke: #f5512b;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 2px;
                                }
                              </style>
                            </defs>
                            <path class="stock-icon-svg" d="M19.75,8H5.84a.71.71,0,0,0-.46.17.68.68,0,0,0-.23.43L3.93,19.49a.65.65,0,0,0,0,.28A.62.62,0,0,0,4.1,20a.66.66,0,0,0,.23.17.67.67,0,0,0,.28.06H21a.71.71,0,0,0,.28-.06.91.91,0,0,0,.23-.17.77.77,0,0,0,.14-.25.65.65,0,0,0,0-.28L20.43,8.57a.72.72,0,0,0-.22-.43A.71.71,0,0,0,19.75,8ZM8.25,9.75v-3a3.75,3.75,0,0,1,7.5,0v3" transform="translate(-2.92 -2)" />
                          </svg>
                        </div>
                      </a>
                      <a href="./product-detail.php">
                        <div class="stocks">
                          <!-- <img src="./assets/img/home/MagnifyingGlassPlus.png" alt=""> -->
                          <svg id="Layer_1" data-name="Layer 1" xmlns="./assets/img/home/MagnifyingGlassPlus.svg" viewBox="0 0 20 20">
                            <defs>
                              <style>
                                .stock-icon-svg {
                                  fill: none;
                                  stroke: #f5512b;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 2px;
                                }
                              </style>
                            </defs>
                            <path class="stock-icon-svg" d="M7.88,10.88h6m-3-3v6m0,4.87A7.88,7.88,0,1,0,3,10.88,7.88,7.88,0,0,0,10.88,18.75Zm5.56-2.31L21,21" transform="translate(-2 -2)" />
                          </svg>
                        </div>
                      </a>
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="1" value="1">
                        <div class="stocks heart">
                          <!-- <img src="./assets/img/home/HeartStraight.png" alt=""> -->
                          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.44 18.34">
                            <defs>
                              <style>
                                .stock-icon-svg {
                                  fill: none;
                                  stroke: #f5512b;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 2px;
                                }
                              </style>
                            </defs>
                            <path class="stock-icon-svg" d="M12.53,19.87l7.6-7.6a5.07,5.07,0,0,0,.37-6.9A4.93,4.93,0,0,0,18.92,4.2a4.89,4.89,0,0,0-3.85-.11,4.81,4.81,0,0,0-1.64,1.09L12,6.61,10.77,5.37A5.07,5.07,0,0,0,3.87,5,4.93,4.93,0,0,0,2.7,6.58a4.89,4.89,0,0,0-.11,3.85,5,5,0,0,0,1.09,1.65l7.79,7.79a.75.75,0,0,0,1.06,0Z" transform="translate(-1.25 -2.75)" />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <a href="./product-detail.php">
                      <h5>Woman Full Sliv Dress</h5>
                      <div class="product-discount">
                        <h4>₹1150.00</h4>
                        <p>₹1230.00</p>
                      </div>
                    </a>
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
                    <div>
                      <button type="button" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                        Cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>



<!--================ products-banner ===============-->
<?php

if (isset($offer_list) && !empty($offer_list) &&  count($offer_list) != 0) { ?>
  <section class="products-banner p-100">
    <div class="container">
      <div class="row">


        <?php

        if (count($offer_list) == 1) {


          foreach ($offer_list as $key => $value) : ?>

            <!--======== single-banner ==============-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="sale-banner-wrap position-relative">
                <img src="<?= $value->image ?>" class="sale-banner-img position-absolute" alt="sale-banner" />
                <div class="sale-banner-inner text-center">
                  <span><?= $value->offer_percent ?> OFF</span>
                  <h2><?= $value->offer_title ?></h2>
                  <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="lg-btn">shop now</a>
                </div>
              </div>
            </div>
          <?php endforeach;
        }
        if (count($offer_list) == 2 or count($offer_list) > 3) { ?>


          <!--============== two-banner ===================-->
          <?php foreach ($offer_list as $key => $value) : ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-4">
              <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">
                <div class="offer-wrapper offer-wrapper-1" style="background:url(<?= $value->image ?>)">
                  <h4><?= $value->offer_title ?></h4>
                  <h3><?= $value->offer_percent ?>%<span>OFF</span></h3>
                  <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>" class="explor-btn">Explore More</a>
                </div>
              </a>
            </div>
          <?php
          endforeach;
          ?>

        <?php }
        ?>

        <!--=============== three-banners ==================-->
        <?php if (count($offer_list) == 3) { ?>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div>
              <?php foreach ($offer_list as $key => $value) :
                if ($key == 2) {
                  goto a;
                }
              ?>
                <div class="home-clothes mb-4">
                  <div class="cloth-card">
                    <img src="<?= $value->image ?>" alt="">
                  </div>
                  <div class="cloth-content">
                    <h5><?= $value->offer_title ?></h5>
                    <h3><?= $value->offer_percent ?>%<span>OFF</span></h3>
                    <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">Explore More</a>
                  </div>
                </div>


            </div>
          </div>

          <?php
                a:
          ?>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="practical-cloth home-clothes">
              <div class="cloth-card">
                <img src="<?= $value->image ?>" alt="">
              </div>
              <div class="cloth-content">
                <h5><?= $value->offer_title ?></h5>
                <h3><?= $value->offer_percent ?>%<span>OFF</span></h3>
                <a href="<?= base_url() . 'home/get_offer_product_listing/' . $this->utility->safe_b64encode($value->id) ?>">Explore More</a>
              </div>
            </div>
          </div>

      <?php
              endforeach;
            } ?>
      </div>
    </div>
  </section>
<?php } ?>

<!--========= new-arrivals ===========-->
<section class="new-arrival products-wrap p-100 <?= (count($offer_list) == 0) ? 'bg-white' : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="title text-center wow fadeIn">
          <h2>New<span>Arrivals</span></h2>
          <p>Choose top trending items</p>
        </div>
      </div>
    </div>
  </div>

  <div class="owl-carousel owl-theme simple">
    <?php foreach ($new_arrival as $key => $value) : ?>
      <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
        <div class="product-card <?= ($value->varientQuantity == '0') ? 'out-of-stock' : '' ?>">
          <div class="product-img-wrap">
            <div class="product-im ">
              <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
              </a>
            </div>
            <?php if ($value->varientQuantity != '0') : ?>
              <p>In Stock</p>
            <?php endif ?>
            <?php if ($value->discount_per > '0') { ?>
              <span class="discnt"><?= $value->discount_per . ' % off' ?></span>
            <?php } ?>
          </div>

          <div class="product-content">
            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
              <h5><?= $value->name ?></h5>
              <div class="product-discount notranslate">
                <h4><?= $this->siteCurrency ?><?= number_format((float)$value->discount_price, 2, '.', '') ?></h4>
                <p class="<?= ($value->discount_per > '0') ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->price ?></p>
              </div>
            </a>
            <div class="rating-starts">
              <div class="rating stars3_5">
                <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                  <span class="star"></span>
                <?php } ?>

                <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                  <span class="star star-active"></span>
                <?php } ?>
              </div>
              <div><span>(<?= $value->ratting['rating'] ?>)</span></div>
            </div>
            <div>
              <?php
              $d_none = '';
              $d_show = 'd-none';
              if (!empty($item_weight_id)) {
                if (in_array($value->pw_id, $item_weight_id)) {
                  $d_show = '';
                  $d_none = 'd-none';
                }
              }
              ?>

              <div>
                <button type="button" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                  Cart
                </button>
                <div class="product-detail-quentity add-cart-btns <?= $d_show ?>">
                  <div class="qty-container">
                    <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>" class="input-qty">
                    <button class="qty-btn-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</section>
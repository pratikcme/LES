
<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1>SHOP</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="./product-list-page.php">SHOP</a></li>
            <li class="breadcrumb-item"><a href="./product-list-page.php">LIPS</a></li>
            <li class="breadcrumb-item active" aria-current="page">LAKMÉ ABSOLUTE MATTE</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- ------------Featured Products-section------------ -->
<section class="product-detalis-section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-image-part">
          <!-- -------swipr-slider-----  -->
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
            class="swiper mySwiper2 gallery-top">
            <span class="discnt">1% off</span>
            <div class="pro-hearticon">
                <i class="fa-regular fa-heart" onclick="myFunction(this)"></i>
            </div>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger"
                    src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-6.png"
                    data-zoom="./assets/images/home-page/feature-prodct-6.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger"
                    src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-1.png"
                    data-zoom="./assets/images/product-details/product-sub-img-1.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger"
                    src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-2.png"
                    data-zoom="./assets/images/product-details/product-sub-img-2.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger"
                    src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-3.png"
                    data-zoom="./assets/images/product-details/product-sub-img-3.png" /></a>
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-6.png" />
              </div>
              <div class="swiper-slide">
                <img src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-1.png" />
              </div>
              <div class="swiper-slide">
                <img src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-2.png" />
              </div>
              <div class="swiper-slide">
                <img src="<?=$this->theme_base_url?>/assets/images/product-details/product-sub-img-3.png" />
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-content-part zoom">
          <div class=""></div>
          <h6>Limited Stock</h6>
          <h2>Lakme Absolute Matte Ultimate Lip Color with Argan Oil</h2>
          <h5>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            4.5 <span> <a href=""> 174 Ratings & 22 Reviews</a></span>
          </h5>

          <h3>₹800.00 <span><strike>₹840.00</strike></span></h3>
          <!-- <h4>Color: <span> Red Extreme</span></h4> -->
          <!-- <h4>Pick a Shade<span></h4> -->

          <!-- ----color-picker--- -->
          <!-- <div class="preview">
            <input class='color-1' name='color' type='radio' />
            <input class='color-2' name='color' type='radio' />
            <input checked class='color-3' name='color' type='radio' />
            <input class='color-4' name='color' type='radio' />
            <input class='color-5' name='color' type='radio' />
            <input class='color-6' name='color' type='radio' />
          </div> -->

          <!-- <h4>SKU: <span> LDKFWVD</span></h4> -->
          <h4>Categories: <span> BB Creams, Skin care, Spa </span></h4>
          <!-- <h4>Tags: <span> Fresh, Oragnic</span></h4> -->

          <form action="" class="pro-sl">
            <select name="cars" id="cars">
                <option value="volvo">lipstick</option>
                <option value="saab">Pencil</option>
            </select>
          </form>

          <!-- -----counter-product-- -->
          <div class="product-detail-quentity">
            <div class="qty-container">
              <button class="qty-btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
              <input type="text" name="qty" value="1" class="input-qty" />
              <button class="qty-btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
            </div>
          </div>

          <!-- -----product-details-btn----- -->
          <div class="product-detalis-btn">
            <a href="" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add To Cart</a>
            <a href="./shop-cart.php" class="add-cart-btn order-now"><span><i class="fa fa-arrow-circle-right"
                  aria-hidden="true"></i></span>Order Now</a>
            <a href="" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
          </div>

          <!-- ------product-detils-accordian--- -->
          <!-- <div class="product-accordion">
            <div class="product-accordion-content">
              <div class="header">
                <span class="title">DETAILS</span>
                <i class="fa-solid fa-plus"></i>
              </div>
              <p class="description">
                Lakmé Absolute introduces a new Matte Ultimate Lip colour with Argan oil - a glamorous matte lipstick
                range suited for every occasion. From deep plum to fierce red, the collection comprises of 12 trendy
                shades with a lightweight formula enriched with luxe argan oil that nourishes your lips and keeps it
                from drying. Every bullet has a soft velvety matte texture that comfortably sits on your lips and
                provides a bold, intense color payoff.
                MRP inclusive of all taxes on all products
                Net Quantity: 3.4 g, Expiry date: 7-31-2024
              </p>
            </div>
          </div> -->
        </div>
      </div>

      
      
    </div>
  </div>
</section>

<section class="p-100">
  <div class="container">
    <div class="col-xxl-12">
        <div class="review-desc">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">REVIEWS (0)</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane mt-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit
                amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It
                has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                Et harum quidem rerum facilis est et expedita distinctio.</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <!-- -------review-tab------ -->
              <div class="my-review-wrapper">
                <!-- ----review-content--- -->
                <div class="review-content">
                  <div class="left-content">
                    <div>
                      <h3><strong>4.3</strong><span>/5</span></h3>
                    </div>
                    <div>
                      <h4>Overall Rating</h4>
                      <p>6k verified ratings</p>
                    </div>
                  </div>
                  <div class="right-content">
                    <h6>Write a review and win 100 reward points !</h6>
                    <div class="enter-review-btn">
                      <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</a>
                    </div>
                  </div>
                </div>

                <!-- ----review-comment-part--- -->
                <div class="review-comment-wrapper">
                  <h3>Most Useful Review</h3>

                  <div class="supportive-div">
                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="./assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1"
                              d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z"
                              transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6>Ashrita Jaiswal</h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star">5 <span><i class="fa-solid fa-star"></i></span></span>
                          <h4>"I loved it"</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut consequat. </p>
                      </div>
                    </div>

                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="./assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1"
                              d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z"
                              transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6>Ashrita Jaiswal</h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star">5 <span><i class="fa-solid fa-star"></i></span></span>
                          <h4>"I loved it"</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut consequat. </p>
                      </div>
                    </div>

                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="./assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1"
                              d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z"
                              transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6>Ashrita Jaiswal</h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star">5 <span><i class="fa-solid fa-star"></i></span></span>
                          <h4>"I loved it"</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut consequat. </p>
                      </div>
                    </div>

                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="./assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1"
                              d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z"
                              transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6>Ashrita Jaiswal</h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star">5 <span><i class="fa-solid fa-star"></i></span></span>
                          <h4>"I loved it"</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut consequat. </p>
                      </div>
                    </div>

                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="./assets/images/review-icon.svg" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1"
                              d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z"
                              transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6>Ashrita Jaiswal</h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star">5 <span><i class="fa-solid fa-star"></i></span></span>
                          <h4>"I loved it"</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut consequat. </p>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="load-btn">
                  <a href="#" class="cmn-btn lg-btn">Load More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!-- -----related-product----- -->
<?php if (!empty($related_product)) { ?>
<section class="Latest-Products Categories-section">
  <div class="container">
    <div class="col-xxl-12 col-lg-12 ">
      <div class="title">
        <h2><?=$this->lang->line('related products')?></h2>
        <!-- <p>Do not miss the current offers until the end of month.</p> -->
      </div>
    </div>

    <div class="owl-2 owl-carousel owl-theme wow fadeInDown" data-wow-duration="1s" data-wow-delay="0"
      data-wow-offset="0">
      <?php foreach ($related_product as $key => $value) { ?>
      <div class="techno-check">
        <input class="techno_checkbox" type="checkbox" id="1" value="1" />
        <div class="product-wrapper card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
          <div class="card-header">
            <h5><?= ($value->quantity >= 25) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></h5>
            <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
              <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
            </a>
          </div>

          <div class="card-body">
            <h3><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>"><?=$value->name?></a></h3>
            <h6 class="rating-cnt notranslate">
              <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?><span class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><strike><?= $this->siteCurrency . ' ' . $value->price ?></strike></span>
            </h6>
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
            <div class="card-btn">
              <a href="javascript:" class="add-cart-btn addcartbutton <?= $d_none ?>" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>" data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>"><span><i class="fa-solid fa-cart-shopping"></i></span>
              <?= $this->lang->line('add to cart') ?></a>
            </div>
            <div class="product-detail-quentity add-cart-btn <?= $d_show ?>">
              <div class="qty-container">
                <button class="qty-btn-minus dec cart-qty-minus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-minus"></i></button>
                <input type="text" name="qty" class="input-qty qty" value="<?= (!empty($value->addQuantity)) ? $value->addQuantity : 1 ?>" data-product_id="<?= $value->id ?>" data-weight_id="<?= $value->weight_id ?>">
                <button class="qty-btn-plus inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>" type="button"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php } ?>
    </div>
  </div>
</section>
<?php } ?>
<input type="hidden" name="product_id" id="product_id" value='<?= $product_id ?>'>
<input type="hidden" name="product_varient_id" id="product_varient_id" value='<?= (isset($varientDetails[0]->id) && $varientDetails[0]->id != '') ? $this->utility->safe_b64encode($varientDetails[0]->id) : $this->utility->safe_b64encode($productDetail[0]->variant_id) ?>'>
<!-- -------review-popup-- -->
<div class="modal fade my-review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Write Review</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="fa-regular fa-circle-xmark"></i></button>
      </div>
      <form class="modal-body">
        <div class="rating-box">
          <div class="rating">
            <div class="rating__stars">
              <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
              <input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
              <input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
              <input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
              <input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
              <label class="rating__label" for="rating-1">
                <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                  <g transform="translate(16,16)">
                    <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8"
                      transform="scale(0)" />
                  </g>
                  <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(16,16) rotate(180)">
                      <polygon class="rating__star-stroke"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="none" />
                      <polygon class="rating__star-fill"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="#000" />
                    </g>
                    <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                      <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                    </g>
                  </g>
                </svg>
                <span class="rating__sr">1 star—Terrible</span>
              </label>
              <label class="rating__label" for="rating-2">
                <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                  <g transform="translate(16,16)">
                    <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8"
                      transform="scale(0)" />
                  </g>
                  <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(16,16) rotate(180)">
                      <polygon class="rating__star-stroke"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="none" />
                      <polygon class="rating__star-fill"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="#000" />
                    </g>
                    <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                      <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                    </g>
                  </g>
                </svg>
                <span class="rating__sr">2 stars—Bad</span>
              </label>
              <label class="rating__label" for="rating-3">
                <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                  <g transform="translate(16,16)">
                    <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8"
                      transform="scale(0)" />
                  </g>
                  <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(16,16) rotate(180)">
                      <polygon class="rating__star-stroke"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="none" />
                      <polygon class="rating__star-fill"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="#000" />
                    </g>
                    <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                      <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                    </g>
                  </g>
                </svg>
                <span class="rating__sr">3 stars—OK</span>
              </label>
              <label class="rating__label" for="rating-4">
                <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                  <g transform="translate(16,16)">
                    <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8"
                      transform="scale(0)" />
                  </g>
                  <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(16,16) rotate(180)">
                      <polygon class="rating__star-stroke"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="none" />
                      <polygon class="rating__star-fill"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="#000" />
                    </g>
                    <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                      <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                    </g>
                  </g>
                </svg>
                <span class="rating__sr">4 stars—Good</span>
              </label>
              <label class="rating__label" for="rating-5">
                <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                  <g transform="translate(16,16)">
                    <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8"
                      transform="scale(0)" />
                  </g>
                  <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(16,16) rotate(180)">
                      <polygon class="rating__star-stroke"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="none" />
                      <polygon class="rating__star-fill"
                        points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07"
                        fill="#000" />
                    </g>
                    <g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
                      <polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
                      <polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
                    </g>
                  </g>
                </svg>
                <span class="rating__sr">5 stars—Excellent</span>
              </label>
              <p class="rating__display" data-rating="1" hidden>Terrible</p>
              <p class="rating__display" data-rating="2" hidden>Bad</p>
              <p class="rating__display" data-rating="3" hidden>OK</p>
              <p class="rating__display" data-rating="4" hidden>Good</p>
              <p class="rating__display" data-rating="5" hidden>Excellent</p>
            </div>
          </d>

          <div class="review-text-box">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Comments"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn cmn-btn lg-btn" data-bs-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
  
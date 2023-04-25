<style>
  .rating-rev {
    font-size: 20px;
  }

  .stars3_5 span:last-child {
    font-size: 18px;
    /* padding-left: 10px; */
  }
</style>


<section class="hero-section common-banner-bg login-section">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Product Detail') ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<?php

?>

<!-- product-detalis-section -->
<section class="product-detalis-section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-image-part">
          <!-- -------swipr-slider-----  -->
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 gallery-top">
            <span id="is_discounted" class="discnt <?= ($varientDetails[0]->discount_per != 0) ? '' : 'd-none' ?>"><?= $varientDetails[0]->discount_per ?>% off</span>
            <div class="pro-hearticon wishlist-icon" data-product_id="<?= $product_id ?>" data-product_weight_id="<?= $product_weight_id ?>">
              <i id="wishlist" class="fa-regular fa-heart <?= (in_array($this->utility->safe_b64decode($product_weight_id), $wish_pid)) ? "fa-solid" : "" ?>"></i>
            </div>
            <div class="swiper-wrapper " id="zoom_image">
              <?php

              foreach ($product_image as $key => $value) {

              ?>
                <div class="swiper-slide">
                  <a href="#"><img data-enlargable class="drift-demo-trigger" src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" data-zoom="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" /></a>
                </div>
              <?php } ?>
            </div>
          </div>

          <div thumbsSlider="" class="swiper mySwiper gallery-thumbs">
            <div class="swiper-wrapper " id="image_thumb">
              <?php foreach ($product_image as $key => $value) { ?>
                <div class="swiper-slide">
                  <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>">
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-content-part zoom">
          <div class=""></div>

          <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0"><?= $productDetail[0]->name ?></h2>
          <h5 class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">

            <div class="rating-starts justify-content-start" id="starRatting">
              <div class="rating stars3_5 align-items-center star-in">
                <?php for ($j = 1; $j <= $productDetail[0]->rating['rating']; $j++) { ?>
                  <span class="star"></span>
                <?php } ?>
                <?php for ($i = 1; $i <= 5 - $productDetail[0]->rating['rating']; $i++) { ?>
                  <span class="star star-active"></span>
                <?php } ?>

              </div>
              <div> <span><?= "(" . $productDetail[0]->rating['rating'] . ")" ?> </span></div>
            </div>

          </h5>
          <h6 id="is_aval_stock"><?= ($varientDetails[0]->quantity > 25) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></h6>
          <h3 class="wow fadeInRight notranslate" id="dynamic_price" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0"><?= $this->siteCurrency ?> <?= number_format((float)$varientDetails[0]->discount_price, 2, '.', '') ?>
            <span style="<?= ($varientDetails[0]->discount_per == 0) ? 'display:none' : '' ?>"><strike> <?= $this->siteCurrency ?>
                <?= number_format((float)$varientDetails[0]->price, 2, '.', '') ?></strike></span>
          </h3>


          <div class="mt-3 mb-3 wow fadeInRight" data-wow-duration="6s" data-wow-delay="0" data-wow-offset="0">

            <div>
              <div>
                <h4><?= $this->lang->line('Brand') ?>: <span><?= $productDetail[0]->brand_name ?></span></h4>
              </div>

              <div>
                <h4>Categories: <span><?= $productDetail[0]->category_name ?></span></h4>
              </div>
            </div>


            <select class="product_varient_id" name="cars product_varient_id" aria-label="Default select example" id="cars">
              <?php foreach ($varient as $key => $value) { ?>
                <option value="<?= $this->utility->safe_b64encode($value) ?>" <?= ($varientDetails[0]->id == $value) ? 'selected' : '' ?>><?= $weight_no[$key] . ' ' . $weight_name[$key] ?></option>
              <?php } ?>
            </select>

            <?php
            $d_none = '';
            $d_show = 'd-none';
            if (!empty($item_weight_id)) {
              if (in_array($varientDetails[0]->id, $item_weight_id)) {
                $d_show = '';
                $d_none = 'd-none';
              }
            }
            ?>
            <!-- -----counter-product-- -->

            <div class="product-detail-quentity <?= $d_show ?>">
              <div class="qty-container">
                <button class="qty-btn-minus cart-qty-minus decqnt" type="button" data-product_weight_id="<?= $varientDetails[0]->id ?>"><i class="fa-solid fa-minus"></i></button>
                <input type="text" name="qty" id="qnt" value="<?= ($cartQuantityForVarient != '') ? $cartQuantityForVarient : 1 ?>" data-product_id="<?= $this->utility->safe_b64decode($product_id) ?>" class="input-qty" />
                <button class="qty-btn-plus cart-qty-plus incqnt" type="button" data-product_weight_id="<?= $varientDetails[0]->id ?>"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>

            <!-- -----product-details-btn----- -->
            <div class="product-detalis-btn">
              <?php if ($isAvailable != '0') { ?>
                <a href="javascript:" class="add-cart-btn lg-btn <?= $d_none ?>" id="addtocart"><span><i class="fa-solid fa-cart-shopping"></i></span>Add To Cart</a>
              <?php } ?>
              <?php if ($isAvailable != '0') { ?>
                <a href="javascript:" id="order_now" class="order-now"><span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span><?= $this->lang->line('order now') ?></a>
              <?php } ?>
              <?php
              $product_id = $this->uri->segment(3);
              $varient_id = $this->uri->segment(4);
              $url = base_url() . 'products/productDetails/' . $product_id . '/' . $varient_id;
              ?>
              <?php if (!empty($BranchDetails) && $BranchDetails[0]->whatsappFlag  != '0' && $BranchDetails[0]->phone_no != '') {
                $mobile = '91' . $BranchDetails[0]->phone_no; ?>
                <a target="_black" id='whatsapp_link' href="https://wa.me/<?= $mobile ?>/?text=<?= $url ?>" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-12">
      <div class="review-desc">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="review_count" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">REVIEWS (<?= count($product_review) ?>)</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane mt-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p><?= $productDetail[0]->about ?></p>
            <p><?= $productDetail[0]->content ?></p>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- -------review-tab------ -->
            <div class="my-review-wrapper">
              <!-- ----review-content--- -->
              <div class=" review-content">
                <?php
                $sumOfRatting = 0;
                foreach ($product_review as $key => $value) {
                  $sumOfRatting += $value->ratting;
                } ?>
                <div class="left-content">
                  <div>
                    <h3> <strong><?= (!empty($sumOfRatting) && $sumOfRatting != 0) ? round($sumOfRatting / count($product_review)) : "0" ?></strong><span>/5</span></h3>
                  </div>

                </div>
                <div class="right-content">

                  <div class="enter-review-btn <?= (empty($isVarientExist) || $countParticularUserReview >= 1) ? 'd-none' : '' ?>" id="writeReviewSection">
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= $this->lang->line('Write your review') ?></a>
                  </div>
                </div>
              </div>

              <!-- ----review-comment-part--- -->
              <div class="review-comment-wrapper <?= (count($product_review) == 0) ? 'd-none' : '' ?>" id="review_section">
                <h3>Most Useful Review</h3>

                <div class="supportive-div">
                  <?php foreach ($product_review as $key => $value) { ?>

                    <div class="rewiew-wrapper">
                      <div class="review-left">
                        <div class="review-img">
                          <svg xmlns="<?= $this->theme_base_url . '/assets/images/review-icon.svg' ?>" viewBox="0 0 24.37 23.44">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill: #cc833d;
                                }
                              </style>
                            </defs>
                            <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
                          </svg>
                        </div>
                        <div class="review-text">
                          <h6><?= $value->fname ?></h6>
                          <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                        </div>
                      </div>
                      <div class="review-right">
                        <div class="review-right-top">
                          <span class="number-star"><?= $value->ratting ?> <span><i class="fa-solid fa-star"></i></span></span>
                          <h4><?= $value->review_title ?></h4>
                        </div>
                        <p><?= $value->review ?></p>
                      </div>
                    </div>
                  <?php } ?>



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

<?php

if (!empty($related_product)) { ?>
  <section class="new-arrival products-wrap related-products">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="title text-center wow fadeIn">
            <h2><?= $this->lang->line('Related') ?> <span><?= $this->lang->line('Products') ?></span></h2>
            <p>Choose top trending items</p>
          </div>
        </div>
      </div>
    </div>

    <div class="owl-carousel owl-theme simple">
      <?php

      foreach ($related_product as $key => $value) { ?>
        <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
          <div class="product-card <?= ($value->quantity == '0') ? 'out-of-stock' : '' ?>">
            <div class="product-img-wrap">
              <div class="product-im ">
                <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                  <img src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>" alt="">
                </a>
              </div>
              <p><?= ($value->quantity >= 25) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></p>

            </div>

            <div class="product-content">
              <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                <h5><?= $value->name ?></h5>
                <div class="product-discount">

                  <h4><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?></h4>
                  <p class="<?= ($value->discount_per > 0) ? '' : ' d-none' ?>"><?= $this->siteCurrency . ' ' . $value->price ?></p>
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
              <div class="product-detail-quentity <?= $d_show ?>">
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
  </section>
<?php } ?>
<?php if ($this->session->userdata('user_id') != '') { ?>
  <div class="modal fade my-review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><?= $this->lang->line('Your rating') ?></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
        </div>
        <form id="reviewForm" class="modal-body rating" method="POST" action="<?= base_url() . 'products/productReview' ?>">

          <div class="rating-box">
            <div class="rating">
              <div class="rating__stars">
                <input id="rating-1" class="rating__input rating__input-1" type="radio" name="ratetIndex" value="1">
                <input id="rating-2" class="rating__input rating__input-2" type="radio" name="ratetIndex" value="2">
                <input id="rating-3" class="rating__input rating__input-3" type="radio" name="ratetIndex" value="3">
                <input id="rating-4" class="rating__input rating__input-4" type="radio" name="ratetIndex" value="4">
                <input id="rating-5" class="rating__input rating__input-5" type="radio" name="ratetIndex" value="5">
                <label class="rating__label" for="rating-1">
                  <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                    <g transform="translate(16,16)">
                      <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                    </g>
                    <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <g transform="translate(16,16) rotate(180)">
                        <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                        <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
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
                      <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                    </g>
                    <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <g transform="translate(16,16) rotate(180)">
                        <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                        <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
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
                      <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                    </g>
                    <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <g transform="translate(16,16) rotate(180)">
                        <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                        <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
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
                      <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                    </g>
                    <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <g transform="translate(16,16) rotate(180)">
                        <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                        <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
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
                      <circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
                    </g>
                    <g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <g transform="translate(16,16) rotate(180)">
                        <polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
                        <polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
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
            </div>
            <input type="hidden" name="product_id" id="product_id" value="<?= $this->uri->segment(3) ?>">
            <input type="hidden" name="varient_id" id="varient_id" value="<?= $this->uri->segment(4) ?>">

            <div class="review-text-box">
              <textarea name="comment" id="Your-review" cols="30" rows="10" placeholder="enter your message"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn cmn-btn lg-btn" data-bs-dismiss="modal">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
<input type="hidden" name="product_id" id="product_id" value='<?= $product_id ?>'>
<input type="hidden" name="product_varient_id" id="product_varient_id" value='<?= (isset($varientDetails[0]->id) && $varientDetails[0]->id != '') ? $this->utility->safe_b64encode($varientDetails[0]->id) : $this->utility->safe_b64encode($productDetail[0]->variant_id) ?>'>
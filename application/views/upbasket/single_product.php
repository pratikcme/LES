  <style>
    #starRatting{
      display: flex;
      align-items:center;
      gap:3px;
    }
  </style>
  <!-- ----hero-section--- -->
  <section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>Product Detail</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Product Detail')?></li>
        </ol>
      </nav>
    </div>
  </section>


  <section class="product-detalis-section">
    <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-left-img.png" alt="" class="product-detail-top-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-right-img.png" alt="" class="product-detail-top-right-img">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
          <div class="product-image-part">

            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 gallery-top">  
              <span class="discnt <?=($varientDetails[0]->discount_per > 0) ? '' : 'd-none' ?>"><?=$varientDetails[0]->discount_per?> % off</span>
              <div class="pro-hearticon wishlist-icon" data-product_id ="<?=$product_id?>" data-product_weight_id ="<?=$product_weight_id?>">
                <i class="fa-regular fa-heart <?=(in_array($this->utility->safe_b64decode($product_weight_id), $wish_pid)) ? "fa-solid" : "" ?>"></i>
              </div>
              
              <div class="swiper-wrapper" id="zoom_image">
                <?php foreach ($product_image as $key => $value){ ?>
                  <div class="swiper-slide">
                    <a href="#"><img data-enlargable class="drift-demo-trigger" src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image?>"
                        data-zoom="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image?>" /></a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div thumbsSlider="" class="swiper mySwiper gallery-thumbs">
              <div class="swiper-wrapper" id="image_thumb">
                <?php foreach ($product_image as $key => $value){ ?>
                <div class="swiper-slide">
                  <img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image?>">
                </div>
                <?php } ?>
              </div>
            </div>

          </div>
        </div>


        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
          <div class="product-content-part zoom">
            <div class=""></div>
            <h2><?=$productDetail[0]->name?></h2>
            <h5 id="starRatting">
              <!-- <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i> -->
              <?php for ($j=1;$j<=$productDetail[0]->rating['rating'];$j++) {?>
                <i class="fa-solid fa-star"></i>
              <?php } ?>
              <?php for ($i=1; $i <= 5-$productDetail[0]->rating['rating']; $i++) { ?> 
                <i class="fa-solid fa-star"></i>  <!--  blank star appear hear -->
                <!-- <i class="fas fa-star blank-ratting"></i> -->
              <?php } ?>
              <?=$productDetail[0]->rating['rating']?> <span class="d-none"> <a href=""> 174 Ratings & 22 Reviews</a></span>
            </h5>
            <h6 id="is_aval_stock"><?=($varientDetails[0]->quantity > 25) ? $this->lang->line('Available(Instock)') : $this->lang->line('Limited Stock') ?></h6>
            <h3 class="notranslate" id="dynamic_price">
              <?=$this->siteCurrency.' '. number_format((float)$productDetail[0]->discount_price, 2, '.', '')?>  
              <span>
                <strike><?=($productDetail[0]->discount_per > 0) ? $this->siteCurrency.' '. number_format((float)$productDetail[0]->price, 2, '.', '') : ''?></strike>
            </span>
            </h3>
            <!-- <h4>Hurry up! only 10 products left in stock!</h4> -->
            <p><?=$productDetail[0]->about?></p>

            <select class="form-select card-dropdown product_varient_id"  aria-label="Default select example">
             <?php foreach ($varient as $key => $value) { ?>
               <option value="<?=$this->utility->safe_b64encode($value)?>" <?=($varientDetails[0]->id == $value) ? 'selected' : '' ?> ><?=$weight_no[$key].' '.$weight_name[$key]?></option>
             <?php } ?>
              <!-- <option value="1">300 Gms</option>
              <option value="2">200 Gms</option>
              <option value="3">1Kg</option> -->
            </select>
            <?php 
            $d_none = '';
            $d_show = 'd-none';
              if(!empty($item_weight_id)){
                if(in_array($varientDetails[0]->id,$item_weight_id)){
                  $d_show = '';
                  $d_none = 'd-none';
                }
              }
            ?>
            <div class="product-detalis-btn">
            <?php if($isAvailable != '0'){ ?>
              <a href="javascript:" class="add-cart-btn <?=$d_none?>" id="addtocart"><span><i class="fa-solid fa-cart-shopping"></i></span>Add To Cart</a>
            <?php } ?>
              <div class="product-detail-quentity <?=$d_show?>">
                  <div class="qty-container">
                    <button class="dec qty-btn-minus cart-qty-minus decqnt" type="button" data-product_weight_id="<?=$varientDetails[0]->id?>"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="qty" id="qnt" value="<?=($cartQuantityForVarient != '') ? $cartQuantityForVarient : 1 ?>" data-product_id = "<?= $this->utility->safe_b64decode($product_id)?>" class="input-qty">
                    <button class="inc qty-btn-plus cart-qty-plus incqnt" type="button" data-product_weight_id="<?=$varientDetails[0]->id?>"><i class="fa-solid fa-plus"></i></button>
                  </div>
              </div>
              <?php if($isAvailable != '0'){ ?>
              <a href="javascript:" id="order_now" class="add-cart-btn order-now"><span><i class="fa fa-arrow-circle-right"
                    aria-hidden="true"></i></span><?=$this->lang->line('order now')?></a>
              <?php } ?>
              <?php 
                $product_id = $this->uri->segment(3);
                $varient_id = $this->uri->segment(4);
                $url = base_url().'products/productDetails/'.$product_id.'/'.$varient_id;
              ?>
             <?php if(!empty($BranchDetails) && $BranchDetails[0]->whatsappFlag  != '0' && $BranchDetails[0]->phone_no != ''){
                  $mobile = '91'.$BranchDetails[0]->phone_no; ?>
              <a  target="_black" id='whatsapp_link' href="https://wa.me/<?=$mobile?>/?text=<?=$url?>" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
            <?php } ?>
            </div>
            <h3><?=$this->lang->line('Category')?>: <span> <span><?=$productDetail[0]->category_name?></span></h3>
            <h4><?=$this->lang->line('Brand')?>: <span> <span><?=$productDetail[0]->brand_name?></span></h4>

          </div>
        </div>

      </div>

      <div class="col-xxl-12">
        <div class="review-desc">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?=$this->lang->line('Description')?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false"><?=$this->lang->line('Information')?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="review_count" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?=$this->lang->line('Reviews')?> (<?=count($product_review)?>)</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="Description-wrapper">
                    <p><?=$productDetail[0]->about?></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                  <div class="Description-wrapper">
                    <p><?=$productDetail[0]->content?></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <!-- -------review-tab------ -->
                    <div class="my-review-wrapper">
                        <!-- ----review-content--- -->
                       

                        <!-- ----review-comment-part--- -->
                        <div class="row ">
                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                            <div class="review-comment-wrapper <?=(count($product_review) == 0) ? 'd-none' : '' ?>" id="review_section" >
                              <div class="review-content">
                                  <div class="review-left-content">
                                    <?php
                                      $sumOfRatting = 0;
                                      foreach ($product_review as $key => $value) { 
                                          $sumOfRatting += $value->ratting; } ?>
                                        <div>
                                            <h3>Customer Reviews</h3>
                                            <h5>
                                              <span>
                                              <?php for ($j=1;$j<=$productDetail[0]->rating['rating'];$j++) {?>
                                                <i class="fa-solid fa-star"></i>
                                              <?php } ?>
                                              <?php for ($i=1; $i <= 5-$productDetail[0]->rating['rating']; $i++) { ?> 
                                                <i class="fa-solid fa-star"></i>  <!--  blank star appear hear -->
                                              <?php } ?>
                                                <?=round($sumOfRatting/count($product_review))?></span>  <span><!--  174 Ratings &amp; --> <?=count($product_review)?> Reviews</span>
                                            </h5>
                                        </div>
                                  </div>
                              </div>                          
                              <div class="supportive-div">  
                                <?php foreach ($product_review as $key => $value) { ?>
                                  <div class="rewiew-wrapper">
                                      <div class="review-right">
                                        <div class="review-right-top">
                                            <span class="number-star"> <span><i class="fa-solid fa-star"></i></span><?=$value->ratting?></span>
                                            <h4><?=$value->review_title?></h4>
                                        </div>
                                        <h6><?=$value->fname?> on <?=date('M d, Y')?> </h6>
                                        <p><?=$value->review?></p>
                                      </div>
                                  </div>
                                <?php } ?>
                              </div>
                            </div>  
                          </div>
                          <?php if($this->session->userdata('user_id') != ''){ ?> 
                          <div class="col-xxl-4 col-xl-4 col-lg-4 <?=(empty($isVarientExist) || $countParticularUserReview >= 1) ? 'd-none' : ''?>" id="writeReviewSection">
                              <div class="add_review_wrapper">
                                  <h3><?=$this->lang->line('Add a review')?></h3>

                                <form id="reviewForm" class="rating" method="POST" action="<?=base_url().'products/productReview'?>">  
                                  <!-- <div class="mb-3">
                                    <label for="full-name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="full-name" placeholder="Enter Your name">
                                  </div> -->

                                  <div class="rating-box">
                                      <label for=""><?=$this->lang->line('Your rating')?></label>
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
                                    <input type="hidden" name="product_id" id="product_id" value="<?=$this->uri->segment(3)?>">
                                    <input type="hidden" name="varient_id" id="varient_id" value="<?=$this->uri->segment(4)?>">
                                  <div class="mb-3">
                                    <label for="review-title" class="form-label">Review Title</label>
                                    <input type="text" class="form-control" name="review_title" id="review-title"  placeholder="Give your review a title">
                                  </div>
                                  <div class="review-text-box">
                                      <label for="Your-review"><?=$this->lang->line('Your review')?></label>
                                      <textarea name="comment" id="Your-review" cols="30" rows="10" placeholder="enter your message"></textarea>
                                  </div>
                                  <button type="submit" id="btnSubmit1" class="add-cart-btn"><?=$this->lang->line('Submit')?></button>
                                </form>
                              </div>
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
  </section>


<!-- ----------related-product---------- -->
<?php if(!empty($related_product )){ ?>
<section class="Latest-Products Categories-section related-product-section section">
  <img src="<?=$this->theme_base_url?>/assets/images/related-product-bottm-left.png" alt="" class="latest-product-top-img">
  <img src="<?=$this->theme_base_url?>/assets/images/related-product-top-right.png" alt="" class="related-product-top-right">
  <div class="container">
    <h1 class="title"><?=$this->lang->line('Related')?> <span><?=$this->lang->line('Products')?></span></h1>
    <!-- <p class="pera">Do not miss the current offers until the end of month.</p> -->
    <!-- <h5>View All Categories</h5> -->
    <h5><?=$this->lang->line('See All')?> <?=$this->lang->line('Categories')?></h5>

    <div class="owl-2 owl-carousel owl-theme">
    <?php foreach ($related_product as $key => $value) { ?>
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
                <span><i class="fa-solid fa-cart-shopping"></i></span><?=$this->lang->line('add to cart')?> 
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
    <?php } ?>
    </div>
  </div>
</section>
<?php } >
<input type="hidden" name="product_id" id="product_id" value='<?=$product_id?>'>
<input type="hidden" name="product_varient_id" id="product_varient_id" value='<?=(isset($varientDetails[0]->id) && $varientDetails[0]->id != '' ) ? $this->utility->safe_b64encode($varientDetails[0]->id) : $this->utility->safe_b64encode($productDetail[0]->variant_id) ?>'>
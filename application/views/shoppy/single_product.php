<?php include './include/header.php'; ?>
<?php include './include/bodyHeader.php'; ?>

<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg login-section">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1>Shop</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="./product-list-page.php">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Black Dress For Women</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>


<!-- product-detalis-section -->
<section class="product-detalis-section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-image-part">
          <!-- -------swipr-slider-----  -->
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 gallery-top">
            <span class="discnt">1% off</span>
            <div class="pro-hearticon">
              <i class="fa-regular fa-heart" onclick="myFunction(this)"></i>
            </div>
            <div class="swiper-wrapper ">
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger" src="./assets/img/1.png" data-zoom="./assets/img/1.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger" src="./assets/img/2.png" data-zoom="./assets/img/2.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger" src="./assets/img/3.png" data-zoom="./assets/img/3.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger" src="./assets/img/4.png" data-zoom="./assets/img/4.png" /></a>
              </div>
              <div class="swiper-slide">
                <a href="#"><img data-enlargable class="drift-demo-trigger" src="./assets/img/about-us/about-us-img.png" data-zoom="./assets/img/about-us/about-us-img.png" /></a>
              </div>
            </div>
          </div>

          <div thumbsSlider="" class="swiper mySwiper gallery-thumbs">
            <div class="swiper-wrapper ">
              <div class="swiper-slide">
                <img src="./assets/img/1.png">
              </div>

              <div class="swiper-slide">
                <img src="./assets/img/2.png" />
              </div>

              <div class="swiper-slide">
                <img src="./assets/img/3.png" />
              </div>

              <div class="swiper-slide">
                <img src="./assets/img/4.png" />
              </div>

              <div class="swiper-slide">
                <img src="./assets/img/about-us/about-us-img.png" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
        <div class="product-content-part zoom">
          <div class=""></div>
          <h6 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">Featured Products: T-shirt</h6>
          <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0" data-wow-offset="0">Grown Cotton T-shirt with print</h2>
          <h5 class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            4.5 <span> <a href=""> 174 Ratings & 22 Reviews</a></span>
          </h5>

          <h3 class="wow fadeInRight" data-wow-duration="4s" data-wow-delay="0" data-wow-offset="0">₹800.00 <span><strike>₹840.00</strike></span></h3>
          <div class="d-flex mt-3 mb-3 wow fadeInRight" data-wow-duration="5s" data-wow-delay="0" data-wow-offset="0">
            <div class="flex-basis">
              <h4 class="d-flex align-items-center">Color:<span> Pink</span></h4>
            </div>
            <div class="preview">
              <input class='red' name='color' type='radio' />
              <input class='green' name='color' type='radio' />
              <input checked class='yellow' name='color' type='radio' />
              <input class='purple' name='color' type='radio' />
            </div>
          </div>

          <div class="mt-3 mb-3 wow fadeInRight" data-wow-duration="6s" data-wow-delay="0" data-wow-offset="0">
            <div class="size-wrapper d-flex align-items-center mb-4">
              <div class="flex-bas">
                <h4 class="d-flex align-items-center mb-0">Size:<span>XS-S</span></h4>
              </div>
              <!-- ----color-picker--- -->
              <div class="previewsd">
                <span class="active">XS-S</span>
                <span>XS</span>
                <span>S</span>
                <span>M</span>
              </div>
            </div>

            <div>
              <div>
                <h4>SKU: <span>LDKFWVD</span></h4>
              </div>
              <div>
                <h4>Brands:<span>Studio Design</span></h4>
              </div>
              <div>
                <h4>Tags: <span>fashion, jeans, summer</span></h4>
              </div>
              <div>
                <h4>Categories: <span>Coats, T-Shirts, Woman</span></h4>
              </div>
            </div>

            <form action="">
              <select name="cars" id="cars">
                <option value="volvo">Shoes</option>
                <option value="saab">Shirt</option>
                <option value="mercedes">Jeans</option>
                <option value="audi">T-shirt</option>
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
              <a href="" class="add-cart-btn lg-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add To Cart</a>
              <a href="./shop-cart.php" class="order-now"><span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>Order Now</a>
              <a href="" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i></a>
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
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">REVIEWS (0)</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane mt-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
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
                          <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut consequat. </p>
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
                          <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut consequat. </p>
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
                          <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut consequat. </p>
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
                          <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut consequat. </p>
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
                          <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
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
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut consequat. </p>
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
  </div>
</section>




<!--========= new-arrivals ===========-->
<section class="new-arrival products-wrap related-products">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="title text-center wow fadeIn">
          <h2>Related <span>Products</span></h2>
          <p>Choose top trending items</p>
        </div>
      </div>
    </div>
  </div>

  <div class="owl-carousel owl-theme simple">
    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="product-card out-of-stock">
        <div class="product-img-wrap">
          <div class="product-im ">
            <a href="./product-detail.php">
              <img src="./assets/img/home/new-product-img-1.png" alt="">
            </a>
          </div>
          <p>In Stock</p>
          <div class="stock-icons">
            <a href="#">
              <div class="stocks">
                <a href="#">
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
                </a>
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
            <h5>Blue Dress For Woman</h5>
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
          <div class="product-detail-quentity add-cart-btns">
            <div class="qty-container">
              <button class="qty-btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
              <input type="text" name="qty" value="1" class="input-qty">
              <button class="qty-btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="product-card">
        <div class="product-img-wrap">
          <div class="product-im ">
            <a href="./product-detail.php">
              <img src="./assets/img/home/new-product-img-2.png" alt="">
            </a>
          </div>
          <p>In Stock</p>
          <span class="discnt">1% off</span>
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
            <h5>Blue Dress For Woman</h5>
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
    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="product-card">
        <div class="product-img-wrap">
          <div class="product-im ">
            <a href="./product-detail.php"><img src="./assets/img/home/new-product-img-3.png" alt=""></a>
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
            <h5>Blue Dress For Woman</h5>
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
    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="product-card">
        <div class="product-img-wrap">
          <div class="product-im ">
            <a href="./product-detail.php"><img src="./assets/img/home/new-product-img-4.png" alt=""></a>
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
            <h5>Blue Dress For Woman</h5>
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
    <div class="item wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
      <div class="product-card">
        <div class="product-img-wrap">
          <div class="product-im ">
            <a href="./product-detail.php"><img src="./assets/img/home/new-product-img-5.png" alt=""></a>
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
            <h5>Blue Dress For Woman</h5>
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
</section>



<!-- -------review-popup-- -->
<div class="modal fade my-review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Write Review</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
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

          <div class="review-text-box">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Comments"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn cmn-btn lg-btn" data-bs-dismiss="modal">Submit</button>
        </div>
      </form>
    </div>
  </div>
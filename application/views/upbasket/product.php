
  <!-- ----hero-section--- -->
  <section class="hero-section listing-hero-sec">
    <div class="container">
        <!-- <h2>Home /<span>Product Listing</span></h2> -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
          </ol>
        </nav>
    </div>
  </section>


  <!-- -----Categories-section----- -->
  <section class="Categories-section listing-categories listing-categories-1 section">
      <img src="<?=$this->theme_base_url?>/assets/images/category-top-right-img.png" alt="" class="category-top-right-img">
      <div class="container">
        <h1 class="title">Shop By <span>Categories</span></h1>
        <p class="pera">Top Categories Of The Week</p>
        <h5>View All Categories</h5>
        <h5 class="mobile-cate-text"><a href="#">View All</a></h5>
  
        <!-- --------owl-1 owl-slider--------->
        <div class="owl-1 owl-carousel owl-theme">
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-1.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Vegetable & Fruit</h4>
            </div>
          </a>
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-2.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Milk & Dairies</h4>
            </div>
          </a>
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-3.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Beverages</h4>
            </div>
          </a>
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-4.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Dry Fruits</h4>
            </div>
          </a>
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-5.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Biscuits & Snacks</h4>
            </div>
          </a>
          <a href="product-details.php" class="categorie-wrapper">
            <div class="categorie-img">
              <img src="<?=$this->theme_base_url?>/assets/images/categorie-img-6.png" alt="">
            </div>
            <div class="categorie-text">
              <h4>Grocery & Staples</h4>
            </div>
          </a>
        </div>
  
  
        <!-- --------owl-5-slider--------->
        <div class="sub-categories-product">
  
          <div class="owl-5 owl-carousel owl-theme">
          
          <div class="techno-check">
          <input class="techno_checkbox" type="checkbox" id="1" value="1" /> 
          <a href="#" class="sub-categories-wrapper">
              <h3>All</h3>
          </a>
          </div>
          
          <div class="techno-check">
            <input class="techno_checkbox" type="checkbox" id="1" value="1" />
          <a href="#" class="sub-categories-wrapper">
              <h3>Saffron</h3>
          </a>
          </div>
  
          <div class="techno-check">
            <input class="techno_checkbox" type="checkbox" id="1" value="1" />
          <a href="#" class="sub-categories-wrapper">
              <h3>Pista</h3>
          </a>
          </div>
  
          <div class="techno-check">
            <input class="techno_checkbox" type="checkbox" id="1" value="1" />
          <a href="#" class="sub-categories-wrapper">
              <h3>Cashew</h3>
          </a>
          </div>
          
          <div class="techno-check">
            <input class="techno_checkbox" type="checkbox" id="1" value="1" />
          <a href="#" class="sub-categories-wrapper">
              <h3>Figs</h3>
          </a>
          </div>
  
          <div class="techno-check">
            <input class="techno_checkbox" type="checkbox" id="1" value="1" />
          <a href="#" class="sub-categories-wrapper">
              <h3>Walnuts</h3>
          </a>
          </div>
          
      </div>
      </div>
      </div>
  </section>

  <!-- ------------Featured Products-section------------ -->
  <section class="Featured-Products product-listing-1 product-listing-2  section">
    <img src="<?=$this->theme_base_url?>/assets/images/product-top-left-img.png" alt="" class="product-top-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">
    <div class="container">
      <div class="lisitng-1">
        <h4>Showing 1-15 of 31 products</h4>

        <div class="right-list">
          
            <div class="short-by-dropdown">
              <label for="list">Sort By: </label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Best Match</option>
                <option value="1">By Price</option>
                <option value="2">By Name</option>
                <option value="3">By Quality</option>
              </select>

              <!-- ---filter-icon--- -->
              <a class="filter-icon filter-hide-btn">FILTER<i class="fa fa-filter" aria-hidden="true"></i></a>

              <!-- ----mobile-filter-btn---- -->
              <a class="mobile-filter-btn"><i class="fa fa-filter" aria-hidden="true"></i></a>
            </div>
        </div>
      </div>
      
        <div class="mycustom-row">
            <!-- ----right-filter-part------ -->
            <div class="my-filter-wrapper">

              <div class="product-categires-part">
                  <div class="categire-header">
                      <h3>Product Categories</h3>
                  </div>
                  <div class="row">
                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">All Categories</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Bread</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Fruits</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Meat</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Uncategorized</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Vegetables</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">DryFruits</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                  </div>
              </div>
              <!-- --------------- -->
              <div class="product-categires-part price-range-part">
                  <div class="categire-header">
                      <h3>Price Range</h3>
                  </div>
                  <div slider id="slider-distance">
                      <div>
                          <div inverse-left style="width:70%;"></div>
                          <div inverse-right style="width:70%;"></div>
                          <div range style="left:0%;right:0%;"></div>
                          <span thumb style="left:0%;"></span>
                          <span thumb style="left:100%;"></span>
                          <div sign style="left:0%;">
                              <span id="value">₹0</span>
                          </div>
                          <div sign style="left:100%;">
                              <span id="value">₹100</span>
                          </div>
                      </div>
                      <input type="range" value="0" max="100" min="0" step="1" oninput="
                              this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                              let value = (this.value/parseInt(this.max))*100
                              var children = this.parentNode.childNodes[1].childNodes;
                              children[1].style.width=value+'%';
                              children[5].style.left=value+'%';
                              children[7].style.left=value+'%';children[11].style.left=value+'%';
                              children[11].childNodes[1].innerHTML=this.value;" />

                      <input type="range" value="100" max="100" min="0" step="1" oninput="
                              this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                              let value = (this.value/parseInt(this.max))*100
                              var children = this.parentNode.childNodes[1].childNodes;
                              children[3].style.width=(100-value)+'%';
                              children[5].style.right=(100-value)+'%';
                              children[9].style.left=value+'%';children[13].style.left=value+'%';
                              children[13].childNodes[1].innerHTML=this.value;" />
                  </div>
              </div>

              <!-- ------------- -->
              <div class="product-categires-part brands-part">
                  <div class="categire-header">
                      <h3>Brands</h3>
                  </div>
                  <div class="row">
                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Aerin</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5></h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#"> Fable&Mane</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5></h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#"> Loreal</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5></h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#"> Mac</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5></h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <h4><a href="#">Schwarzkopf</a></h4>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5></h5>
                      </div>

                  </div>
              </div>

              <!-- ------------- -->
              <div class="product-categires-part discoutn-part">
                  <div class="categire-header">
                      <h3>Discount</h3>
                  </div>
                  <div class="row">
                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="id1">
                              <label class="form-check-label" for="id1">
                                  <h4>0-5%</h4>
                              </label>
                          </div>

                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="2" id="id2">
                              <label class="form-check-label" for="id2">
                                  <h4>5-10%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id3">
                              <label class="form-check-label" for="id3">
                                  <h4>10-15%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id4">
                              <label class="form-check-label" for="id4">
                                  <h4>15-20%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id5">
                              <label class="form-check-label" for="id5">
                                  <h4>20-25%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id6">
                              <label class="form-check-label" for="id6">
                                  <h4>25-30%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-8 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id7">
                              <label class="form-check-label" for="id7">
                                  <h4>30-35%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-4 col-4">
                          <h5>35</h5>
                      </div>

                      <div class="ctg-left col-xl-8 col-md-9 col-8">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="id8">
                              <label class="form-check-label" for="id8">
                                  <h4>More than 35%</h4>
                              </label>
                          </div>
                      </div>
                      <div class="ctg-right col-xl-4 col-md-3 col-4">
                          <h5 class="end-text">35</h5>
                      </div>


                  </div>
              </div>
            </div>
          
            <!-- ---left-product-list--- -->
            <div class="show-div-wrapper">
                <div class="main-listing-wrapper">
                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                        <div class="techno-check">
                          <input class="techno_checkbox" type="checkbox" id="2" value="2" />
                          <div href="#" class="product-wrapper card card-1" >
                            
                            <div class="card-header">
                              <a href="./product-details.php">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt="">
                              </a>
                              </div>
                            
                            <div class="card-body">
                              <h3><a href="./product-details.php">Saffron (Kesar)</a></h3>
                              <h4>Limited Stock</h4>
                
                              <div class="rate-dropdown">
                                <select class="form-select card-dropdown" aria-label="Default select example">
                                  <option selected>500 Gms</option>
                                  <option value="1">300 Gms</option>
                                  <option value="2">200 Gms</option>
                                  <option value="3">1Kg</option>
                                </select>
                                <div class="card-rating">
                                  <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                                </div>
                              </div>
                              <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                              <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="3" value="3" />
                        <div href="#" class="product-wrapper card card-2">
                  
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt="">
                            </a>
                          </div>
                        
                          <div class="card-body">
                            <h3><a href="./product-details.php">Pistachio (Pista)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="4" value="4" />
                        <div href="#" class="product-wrapper card card-3">
                        
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt="">
                            </a>
                          </div>
                      
                          <div class="card-body">
                            <h3><a href="./product-details.php">Cashew Splits</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                       </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="6" value="6" />
                        <div href="#" class="product-wrapper card card-4">
                      
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-6.png" alt="">
                            </a>
                          </div>
                          
                          <div class="card-body">
                            <h3><a href="./product-details.php">Walnuts (Akhrot)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="7" value="7" />
                        <div href="#" class="product-wrapper card card-5">
                        
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-7.png" alt="">
                            </a>
                          </div>
                          
                          <div class="card-body">
                            <h3><a href="./product-details.php">Raisins (Kishmish)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
                              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="8" value="8" />
                        <div href="#" class="product-wrapper card card-6">
                
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-8.png" alt="">
                            </a>
                          </div>
                        
                          <div class="card-body">
                            <h3><a href="./product-details.php">Dried Berries</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="8" value="8" />
                        <div href="#" class="product-wrapper card card-7">
                
                          <div class="card-header">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-10.png" alt="">
                          </div>
                        
                          <div class="card-body">
                            <h3><a href="./product-details.php">Saffron (Kesar)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="8" value="8" />
                        <div href="#" class="product-wrapper card card-8">
                
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-11.png" alt="">
                            </a>
                          </div>
                        
                          <div class="card-body">
                            <h3><a href="./product-details.php">Pistachio (Pista)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                          <input class="techno_checkbox" type="checkbox" id="8" value="8" />
                          <div href="#" class="product-wrapper card card-9">
                  
                            <div class="card-header">
                              <a href="./product-details.php">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-12.png" alt="">
                              </a>
                            </div>
                          
                            <div class="card-body">
                              <h3><a href="./product-details.php">Cashew Splits</a></h3>
                              <h4>Limited Stock</h4>
                
                              <div class="rate-dropdown">
                                <select class="form-select card-dropdown" aria-label="Default select example">
                                  <option selected>500 Gms</option>
                                  <option value="1">300 Gms</option>
                                  <option value="2">200 Gms</option>
                                  <option value="3">1Kg</option>
                                </select>
                
                                <div class="card-rating">
                                  <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                                </div>
                              </div>
                              <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                              <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="2" value="2" />
                        <div href="#" class="product-wrapper card card-10" >
                          
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt="">
                            </a>
                            </div>
                          
                          <div class="card-body">
                            <h3><a href="./product-details.php">Saffron (Kesar)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="3" value="3" />
                        <div href="#" class="product-wrapper card card-11">
                  
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt="">
                            </a>
                          </div>
                        
                          <div class="card-body">
                            <h3><a href="./product-details.php">Pistachio (Pista)</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-listing-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
                      <div class="techno-check">
                        <input class="techno_checkbox" type="checkbox" id="4" value="4" />
                        <div href="#" class="product-wrapper card card-12">
                        
                          <div class="card-header">
                            <a href="./product-details.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt="">
                            </a>
                          </div>
                      
                          <div class="card-body">
                            <h3><a href="./product-details.php">Cashew Splits</a></h3>
                            <h4>Limited Stock</h4>
              
                            <div class="rate-dropdown">
                              <select class="form-select card-dropdown" aria-label="Default select example">
                                <option selected>500 Gms</option>
                                <option value="1">300 Gms</option>
                                <option value="2">200 Gms</option>
                                <option value="3">1Kg</option>
                              </select>
              
                              <div class="card-rating">
                                <p><img src="<?=$this->theme_base_url?>/assets/images/card-star-img.png" alt="">4.5</p>
                              </div>
                            </div>
                            <h6 class="rating">₹398.00 <span><strike>₹425.00</strike></span></h6>
                            <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    
      <!-- ---pagination-part--- -->
      <div class="pagination-part">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    </div>
  </section>

  <div class="mobile-filter-icon">
                  <!-- ---side-nav-filter-dropdown- -->
                  <div id="mySidepanel" class="sidepanel">
                      <span class="closebtn"><span>×</span></span>

                      <div class="filter-part col-xxl-3 col-xl-4 col-lg-4 col-md-4">

                          <div class="product-categires-part">
                              <div class="categire-header">
                                  <h3>Product Categories</h3>
                              </div>
                              <div class="row">
                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">All Categories</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Bread</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Fruits</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Meat</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Uncategorized</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Vegetables</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">DryFruits</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>


                              </div>
                          </div>

                          <!-- --------------- -->
                          <div class="product-categires-part price-range-part">
                              <div class="categire-header">
                                  <h3>Price Range</h3>
                              </div>
                              <div slider id="slider-distance">
                                  <div>
                                      <div inverse-left style="width:70%;"></div>
                                      <div inverse-right style="width:70%;"></div>
                                      <div range style="left:0%;right:0%;"></div>
                                      <span thumb style="left:0%;"></span>
                                      <span thumb style="left:100%;"></span>
                                      <div sign style="left:0%;">
                                          <span id="value">₹0</span>
                                      </div>
                                      <div sign style="left:100%;">
                                          <span id="value">₹100</span>
                                      </div>
                                  </div>
                                  <input type="range" value="0" max="100" min="0" step="1" oninput="
                                          this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                          let value = (this.value/parseInt(this.max))*100
                                          var children = this.parentNode.childNodes[1].childNodes;
                                          children[1].style.width=value+'%';
                                          children[5].style.left=value+'%';
                                          children[7].style.left=value+'%';children[11].style.left=value+'%';
                                          children[11].childNodes[1].innerHTML=this.value;" />

                                  <input type="range" value="100" max="100" min="0" step="1" oninput="
                                          this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                                          let value = (this.value/parseInt(this.max))*100
                                          var children = this.parentNode.childNodes[1].childNodes;
                                          children[3].style.width=(100-value)+'%';
                                          children[5].style.right=(100-value)+'%';
                                          children[9].style.left=value+'%';children[13].style.left=value+'%';
                                          children[13].childNodes[1].innerHTML=this.value;" />
                              </div>
                          </div>

                          <!-- ------------- -->
                          <div class="product-categires-part brands-part">
                              <div class="categire-header">
                                  <h3>Brands</h3>
                              </div>
                              <div class="row">
                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Aerin</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5></h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#"> Fable&Mane</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5></h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#"> Loreal</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5></h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#"> Mac</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5></h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <h4><a href="#">Schwarzkopf</a></h4>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5></h5>
                                  </div>

                              </div>
                          </div>
                          <!-- ------------- -->
                          <div class="product-categires-part discoutn-part">
                              <div class="categire-header">
                                  <h3>Product Categories</h3>
                              </div>
                              <div class="row">
                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-1">
                                          <label class="form-check-label" for="newid-1">
                                              <h4>0-5%</h4>
                                          </label>
                                      </div>

                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-2">
                                          <label class="form-check-label" for="newid-2">
                                              <h4>5-10%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-3">
                                          <label class="form-check-label" for="newid-3">
                                              <h4>10-15%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-4">
                                          <label class="form-check-label" for="newid-4">
                                              <h4>15-20%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-5">
                                          <label class="form-check-label" for="newid-5">
                                              <h4>20-25%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-6">
                                          <label class="form-check-label" for="newid-6">
                                              <h4>25-30%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-8 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-7">
                                          <label class="form-check-label" for="newid-7">
                                              <h4>30-35%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-4 col-4">
                                      <h5>35</h5>
                                  </div>

                                  <div class="ctg-left col-xl-8 col-md-9 col-8">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" name="common" id="newid-8">
                                          <label class="form-check-label" for="newid-8">
                                              <h4>More than 35%</h4>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="ctg-right col-xl-4 col-md-3 col-4">
                                      <h5 class="end-text">35</h5>
                                  </div>
                                  <div class="mob-btm-filter-btn">
                                      <a href="#" class="cleart-fliter-btn">clear filter</a>
                                      <a href="./product-list-page.php" class="show-result-btn">show <span></span> results</a>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ---side-nav-filter-dropdown-end- -->
              </div>

  <div class="mobile-btn-overlay"></div>
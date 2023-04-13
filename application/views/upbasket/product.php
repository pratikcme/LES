<!-- ----hero-section--- -->
<style>
  /*PRICE RANGE SLIDER */
  .price-range-slider {
    width: 100%;
    padding: 10px 20px 15px;
    background-color: #f7f7f7;
  }

  .price-range-slider .range-value {
    margin: 0;
    display: flex;
  }

  .price-range-slider .range-value .fa-rupee-sign {
    color: var(--secondary-color);
    position: relative;
    font-size: 16px;
    top: 3px;
    position: relative;
    font-weight: 900;
    margin-right: 5px;
    top: 1px;
  }

  .price-range-slider .range-value input {
    width: 100%;
    background: none;
    color: var(--secondary-color);
    font-family: 'OpenSans-SemiBold';
    font-size: 16px;
    font-weight: initial;
    box-shadow: none;
    border: none;
    margin: 00px 0 20px 0;
  }

  .price-range-slider .range-bar {
    border: none;
    background: #000;
    height: 3px;
    width: 96%;
    margin-left: 8px;
  }

  .price-range-slider .range-bar .ui-slider-range {
    background: #1ebcb7;
  }

  .price-range-slider .range-bar .ui-slider-handle {
    border: none;
    border-radius: 25px;
    background: #fff;
    border: 2px solid #1ebcb7;
    height: 17px;
    width: 17px;
    top: -0.52em;
    cursor: pointer;
  }

  .price-range-slider .range-bar .ui-slider-handle+span {
    background: #1ebcb7;
  }
</style>
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
  <img src="<?= $this->theme_base_url ?>/assets/images/category-top-right-img.png" alt="" class="category-top-right-img">
  <div class="container">
    <h1 class="title">Shop By <span>Categories</span></h1>
    <p class="pera">Top Categories Of The Week</p>
    <h5>View All Categories</h5>
    <h5 class="mobile-cate-text"><a href="#">View All</a></h5>

    <!-- --------owl-1 owl-slider--------->
    <div class="owl-1 owl-carousel owl-theme">
      <?php foreach ($category as $key => $value) : ?>
        <a href="javascript:;" class="categorie-wrapper cate_id" data="<?= $value->id ?>">
          <div class="categorie-img">
            <img src="<?= $this->theme_base_url ?>/assets/images/categorie-img-1.png" alt="">
          </div>
          <div class="categorie-text category_id">
            <h4><?= $value->name ?></h4>
          </div>
        </a>

      <?php endforeach ?>
    </div>


    <!-- --------owl-5-slider--------->
    <div class="sub-categories-product">

      <div class="owl-5 owl-carousel owl-theme" id="subcatOwl">

      </div>
    </div>

  </div>
</section>

<!-- ------------Featured Products-section------------ -->
<section class="Featured-Products product-listing-1 product-listing-2  section">
  <img src="<?= $this->theme_base_url ?>/assets/images/product-top-left-img.png" alt="" class="product-top-left-img">
  <img src="<?= $this->theme_base_url ?>/assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">
  <div class="container">
    <div class="lisitng-1">
      <!-- <h4>Showing 1-15 of 31 products</h4> -->

      <div class="right-list">

        <div class="short-by-dropdown">
          <label for="list">Sort By: </label>
          <select class="form-select sorting" aria-label="Default select example">
            <option value="All">All</option>
            <option value="alphabetically">Alphabetical</option>
            <option value="high_low">Price-High to Low</option>
            <option value="low_high">Price-Low to High</option>
            <option value="discount_high_low">`%` off - High to Low</option>
            <option value="discount_low_high">`%` off - low to high</option>
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
            <div class="ctg-left col-xl-8 col-md-8 col-8 category_id" data-cat_id="All">
              <h4><a href="javascript:;">All Categories</a></h4>
            </div>

            <?php foreach ($category as $key => $value) : ?>
              <div class="ctg-left col-xl-8 col-md-8 col-8 category_id" data-cat_id="<?= $value->id ?>">
                <h4><a href="javascript:;"><?= $value->name ?></a></h4>
              </div>

            <?php endforeach ?>



          </div>
        </div>
        <!-- --------------- -->
        <div class="product-categires-part price-range-part">
          <div class="categire-header">
            <h3>Price Range</h3>
          </div>
          <!-- <div slider id="slider-distance">
            <div>
              <div inverse-left style="width:70%;"></div>
              <div inverse-right style="width:70%;"></div>
              <div range style="left:0%;right:0%;"></div>
              <span thumb style="left:0%;"></span>
              <span thumb style="left:100%;"></span>
              <div sign style="left:0%;">
                <span id="value1">₹0</span>
              </div>
              <div sign style="left:100%;">
                <span id="value2">₹100</span>
              </div>
            </div>
            <input type="range" value="0" id="min" max="100" min="0" step="1" oninput="
                              this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                              let value = (this.value/parseInt(this.max))*100
                              var children = this.parentNode.childNodes[1].childNodes;
                              children[1].style.width=value+'%';
                              children[5].style.left=value+'%';
                              children[7].style.left=value+'%';children[11].style.left=value+'%';
                              children[11].childNodes[1].innerHTML=this.value;" />

            <input type="range" value="100" id="max" max="100" min="0" step="1" oninput="
                              this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                              let value = (this.value/parseInt(this.max))*100
                              var children = this.parentNode.childNodes[1].childNodes;
                              children[3].style.width=(100-value)+'%';
                              children[5].style.right=(100-value)+'%';
                              children[9].style.left=value+'%';children[13].style.left=value+'%';
                              children[13].childNodes[1].innerHTML=this.value;" />
          </div> -->
          <div class="price-range-slider">
            <p class="range-value">
              <span id="siteCurr"><?= $this->siteCurrency ?></span>
              <input type="text" class="range" id="amount" readonly>
              <!-- <input type="hidden"  id="start_range" value="0" readonly>
                      <input type="hidden"  id="end_range" value="150" readonly> -->
            </p>
            <div id="slider-range" class="range-bar"></div>

          </div>
        </div>

        <!-- ------------- -->
        <div class="product-categires-part brands-part">
          <div class="categire-header">
            <h3>Brands</h3>
          </div>

          <?php foreach ($brand as $key => $brandRecord) : ?>
            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input brand" name="brand" type="checkbox" value="<?= $brandRecord->id ?>">
                <label class="form-check-label" for="id1">
                  <h4><?= $brandRecord->name ?></h4>
                </label>
              </div>

            </div>

          <?php endforeach ?>



        </div>

        <!-- ------------- -->
        <div class="product-categires-part discoutn-part">
          <div class="categire-header">
            <h3>Discount</h3>
          </div>
          <div class="row">
            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="0" id="id1">
                <label class="form-check-label" for="id1">
                  <h4>0-5%</h4>
                </label>
              </div>

            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[0] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="1" id="id2">
                <label class="form-check-label" for="id2">
                  <h4>5-10%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[1] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="2" id="id3">
                <label class="form-check-label" for="id3">
                  <h4>10-15%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[2] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="3" id="id4">
                <label class="form-check-label" for="id4">
                  <h4>15-20%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[3] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="4" id="id5">
                <label class="form-check-label" for="id5">
                  <h4>20-25%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[4] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="5" id="id6">
                <label class="form-check-label" for="id6">
                  <h4>25-30%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[5] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="6" id="id7">
                <label class="form-check-label" for="id7">
                  <h4>30-35%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[6] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-9 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="7" id="id8">
                <label class="form-check-label" for="id8">
                  <h4>More than 35%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-3 col-4">
              <h5 class="end-text"><?= $countDiscoutWise[7] ?></h5>
            </div>


          </div>
        </div>
      </div>

      <!-- ---left-product-list--- -->
      <div class="show-div-wrapper">
        <div class="main-listing-wrapper" id="ajaxProduct">
        </div>
      </div>

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
          <div class="ctg-left col-xl-12 col-md-12 col-12 category_id" data-cat_id="All">
            <h4><a href="javascript:;">All Categories</a></h4>
          </div>

          <?php foreach ($category as $key => $value) : ?>
            <div class="ctg-left col-xl-12 col-md-12 col-12 category_id" data-cat_id="<?= $value->id ?>">
              <h4><a href="javascript:;"><?= $value->name ?></a></h4>
            </div>

          <?php endforeach ?>



        </div>
      </div>

      <!-- --------------- -->
      <div class="product-categires-part price-range-part">
        <div class="categire-header">
          <h3>Price Range</h3>
        </div>
        <div class="price-range-slider">
          <p class="range-value">
            <span id="siteCurr2"><?= $this->siteCurrency ?></span>
            <input type="text" class="range" id="amount2" readonly>
            <!-- <input type="hidden"  id="start_range" value="0" readonly>
                      <input type="hidden"  id="end_range" value="150" readonly> -->
          </p>
          <div id="slider-range2" class="range-bar"></div>

        </div>
      </div>

      <!-- ------------- -->
      <div class="product-categires-part brands-part">
        <div class="categire-header">
          <h3>Brands</h3>
        </div>
        <div class="row">
          <?php foreach ($brand as $key => $brandRecord) : ?>
            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input brand" name="brand" type="checkbox" value="<?= $brandRecord->id ?>">
                <label class="form-check-label" for="id1">
                  <h4><?= $brandRecord->name ?></h4>
                </label>
              </div>

            </div>

          <?php endforeach ?>


        </div>
      </div>
      <!-- ------------- -->
      <div class="product-categires-part discoutn-part">
        <div class="product-categires-part discoutn-part">
          <div class="categire-header">
            <h3>Discount</h3>
          </div>
          <div class="row">
            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="0" id="id1">
                <label class="form-check-label" for="id1">
                  <h4>0-5%</h4>
                </label>
              </div>

            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[0] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="1" id="id2">
                <label class="form-check-label" for="id2">
                  <h4>5-10%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[1] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="2" id="id3">
                <label class="form-check-label" for="id3">
                  <h4>10-15%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[2] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="3" id="id4">
                <label class="form-check-label" for="id4">
                  <h4>15-20%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[3] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="4" id="id5">
                <label class="form-check-label" for="id5">
                  <h4>20-25%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[4] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="5" id="id6">
                <label class="form-check-label" for="id6">
                  <h4>25-30%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[5] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-8 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="6" id="id7">
                <label class="form-check-label" for="id7">
                  <h4>30-35%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-4 col-4">
              <h5><?= $countDiscoutWise[6] ?></h5>
            </div>

            <div class="ctg-left col-xl-8 col-md-9 col-8">
              <div class="form-check">
                <input class="form-check-input discount" name="filter_discount" type="checkbox" value="7" id="id8">
                <label class="form-check-label" for="id8">
                  <h4>More than 35%</h4>
                </label>
              </div>
            </div>
            <div class="ctg-right col-xl-4 col-md-3 col-4">
              <h5 class="end-text"><?= $countDiscoutWise[7] ?></h5>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ---side-nav-filter-dropdown-end- -->
</div>

<div class="mobile-btn-overlay"></div>
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID" value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">
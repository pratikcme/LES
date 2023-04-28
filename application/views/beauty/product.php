<style>
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
<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('product listing')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" style="text-transform:capitalize" aria-current="page"><?=$this->lang->line('product listing')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ------------Featured Products-section------------ -->
<section class="Featured-Products product-listing-1 p-100">
    <div class="container">

        <!-- ----listing-title-and-filter----- -->
        <div class="lisitng-1">
          <!-- <h4>SHOWING 1–12 OF 21 RESULTS</h4> -->
          <h4></h4>
            <div class="right-list">
                <div class="short-by-dropdown">
                    <select class="form-select sorting" aria-label="Default select example">
                        <option value="all"><?= $this->lang->line('All') ?></option>
                        <option value="alphabetically"><?= $this->lang->line('alphabetical') ?></option>
                        <option value="high_low"><?= $this->lang->line('Price-High to Low') ?></option>
                        <option value="low_high"><?= $this->lang->line('Price-Low to High') ?></option>
                        <option value="discount_high_low"><?= $this->lang->line('`%` off - High to Low') ?></option>
                        <option value="discount_low_high"><?= $this->lang->line('`%` off - low to high') ?></option>
                    </select>

                    <!-- ---filter-icon--- -->
                    <a class="filter-icon filter-hide-btn">FILTER<i class="fa fa-filter" aria-hidden="true"></i></a>

                    <!-- ----mobile-filter-btn---- -->
                    <a class="mobile-filter-btn"><i class="fa fa-filter" aria-hidden="true"></i></a>

                    <!-- -----mobile-filter-dropdown---- -->
                    <div class="mobile-filter-icon">
                        <!-- ---side-nav-filter-dropdown- -->
                        <div id="mySidepanel" class="sidepanel">
                            <span class="closebtn"><span>×</span></span>

                            <div class="filter-part col-xxl-3 col-xl-4 col-lg-4 col-md-4">

                                <div class="product-categires-part">
                                    <div class="categire-header">
                                        <h3><?=$this->lang->line('Product Categories') ?></h3>
                                    </div>
                                    <ul>
                                        <li class="active"> <?=$this->lang->line('All Categories') ?></li>
                                        <?php foreach ($category as $key => $value) { ?>
                                        <li class="category_id" data-cat_id="<?= $value->id ?>"> <?= $value->name ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <!-- --------------- -->
                                <div class="product-categires-part price-range-part">
                                    <div class="categire-header">
                                        <h3>Price Range</h3>
                                    </div>
                                    <div class="slider-box">
                                        <label for="priceRange">Price Range:</label>
                                        <input type="text" id="priceRange_mob" readonly>
                                        <div id="price-range_mob" class="slider"></div>
                                    </div>
                                </div>

                                <!-- ------------- -->
                                <div class="product-categires-part brands-part">
                                    <div class="categire-header">
                                        <h3><?=$this->lang->line('Brands')?></h3>
                                    </div>
                                    <ul class="cate-wrp">
                                        <?php foreach ($brand as $key => $brandRecord){ ?>
                                        <li class="">
                                            <div class="discount-wrapper brands-wrp">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input brand" type="checkbox" value="<?= $brandRecord->id ?>" id="<?=$value->name?>">
                                                    <label class="form-check-label" for="Aerin">
                                                        <h4><?=$value->name?></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- ------------- -->
                                <?php 
                                  $discountDiv = ['0-5%','5-10%','10-15%','15-20%','20-25%','25-30%','30-35%','More than 35%'];
                                 ?>
                                <div class="product-categires-part discoutn-part">
                                    <div class="categire-header">
                                        <h3>Product Categories</h3>
                                    </div>
                                    <ul>
                                      <?php foreach ($discountDiv as $key => $value) {?>
                                        <li>
                                            <div class="discount-wrapper">
                                                <div class="form-check">
                                                    <input class="form-check-input discount" name="filter_discount" value="<?=$key?>" type="checkbox" id="id11">
                                                    <label class="form-check-label" for="id11">
                                                        <h4><?=$value?></h4>
                                                    </label>
                                                </div>

                                                <div class="discount-text">
                                                    <h5><?=$countDiscoutWise[$key]?></h5>
                                                </div>
                                            </div>
                                        </li>
                                      <?php } ?>
                                    </ul>
                                </div>

                                <div class="mob-btm-filter-btn">
                                    <a href="#" class="cleart-fliter-btn">clear filter</a>
                                    <a href="./product-list-page.php" class="show-result-btn">show results</a>
                                </div>
                            </div>
                        </div>
                        <!-- ---side-nav-filter-dropdown-end- -->
                    </div>
                </div>
            </div>
        </div>

        <div class="mycustom-row">
            <!-- ---left-product-list--- -->
            <div class="show-div-wrapper">
                <div class="main-listing-wrapper" id="ajaxProduct">
                </div>
            </div>

            <!-- ----right-filter-part------ -->
            <div class="my-filter-wrapper">

                <div class="product-categires-part">
                    <div class="categire-header">
                        <h3>Product Categories</h3>
                    </div>
                    <ul class="cate-wrp">
                    <li class="active category_id" data-cat_id=""><?=$this->lang->line('All Categories') ?></li>
                      <?php foreach ($category as $key => $value) { ?>
                        <li class="category_id" data-cat_id="<?= $value->id ?>"> <?= $value->name ?></li>
                      <?php } ?>
                    </ul>
                </div>
                <!-- --------------- -->
                <div class="product-categires-part price-range-part">
                    <div class="categire-header">
                        <h3>Price Range</h3>
                    </div>
                    <div class="slider-box">
                        <label for="priceRange">Price Range:</label>
                        <input type="text" id="priceRange" readonly>
                        <div id="price-range" class="slider"></div>
                    </div>
                </div>

                <!-- ------------- -->
                <div class="product-categires-part brands-part">
                    <div class="categire-header">
                        <h3><?=$this->lang->line('Brands')?></h3>
                    </div>
                    <ul class="cate-wrp">
                    <?php foreach ($brand as $key => $brandRecord){ ?>
                        <li class="active">
                            <div class="discount-wrapper brands-wrp">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input brand" type="checkbox" value="<?= $brandRecord->id ?>" id="<?=$value->name?>">
                                    <label class="form-check-label" for="Aerin">
                                        <h4><?=$value->name?></h4>
                                    </label>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>

                <!-- ------------- -->
                <div class="product-categires-part discoutn-part">
                    <div class="categire-header">
                        <h3>Discount</h3>
                    </div>

                    <ul class="cate-wrp">
                    <?php foreach ($discountDiv as $key => $value) {?>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input discount" name="filter_discount"  type="checkbox"  value="<?=$key?>" id="id21">
                                    <label class="form-check-label" for="id21">
                                        <h4><?=$value?></h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5><?=$countDiscoutWise[$key]?></h5>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ---pagination-part--- -->
        <div class="pagination-part d-none">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</section>

<div class="mobile-btn-overlay"></div>
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID" value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">
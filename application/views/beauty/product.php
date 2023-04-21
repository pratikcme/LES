
<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('product listing')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('product listing')?><</li>
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
                                    <ul>
                                        <li class="active">
                                            Aerin
                                        </li>
                                        <li>
                                            Fable&Mane
                                        </li>
                                        <li>
                                            Loreal
                                        </li>
                                        <li>
                                           Mac
                                        </li>
                                        <li>
                                            Schwarzkopf
                                        </li>
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
                    <li class="active"><?=$this->lang->line('All Categories') ?></li>
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
                    <ul class="cate-wrp">
                        <li class="active">
                            Aerin
                        </li>
                        <li>
                            Fable&Mane
                        </li>
                        <li>
                            Loreal
                        </li>
                        <li>
                            Mac
                        </li>
                        <li>
                            Schwarzkopf
                        </li>
                        <li>
                            Loreal
                        </li>
                        <li>
                            Mac
                        </li>
                        <li>
                            Schwarzkopf
                        </li>
                        <li>
                            Schwarzkopf
                        </li>
                    </ul>
                </div>

                <!-- ------------- -->
                <div class="product-categires-part discoutn-part">
                    <div class="categire-header">
                        <h3>Discount</h3>
                    </div>

                    <ul class="cate-wrp">
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="id21">
                                    <label class="form-check-label" for="id21">
                                        <h4>0-5%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="id22">
                                    <label class="form-check-label" for="id22">
                                        <h4>5-10%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id23">
                                    <label class="form-check-label" for="id23">
                                        <h4>10-15%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id24">
                                    <label class="form-check-label" for="id24">
                                        <h4>15-20%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id25">
                                    <label class="form-check-label" for="id25">
                                        <h4>20-25%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id26">
                                    <label class="form-check-label" for="id26">
                                        <h4>25-30%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id27">
                                    <label class="form-check-label" for="id27">
                                        <h4>30-35%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="discount-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="id28">
                                    <label class="form-check-label" for="id28">
                                        <h4>More than 35%</h4>
                                    </label>
                                </div>

                                <div class="discount-text">
                                    <h5>35</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
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

<div class="mobile-btn-overlay"></div>
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID" value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">
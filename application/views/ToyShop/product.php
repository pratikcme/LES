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


<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg login-section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('SHOP') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('SHOP') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- ------------Featured Products-section------------ -->
<section class="Featured-Products product-listing-1 p-120">
    <div class="mobile-btn-overlay active"></div>
    <div class="container">
        <div class="row">
            <div class="product-select-in m-0">

                <!-- -----mobile-filter-dropdown---- -->
                <div class="mobile-filter-icon">
                    <div id="mySidepanel" class="sidepanel">
                        <span class="closebtn"><span>×</span></span>
                        <div class="filter-part col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                            <div class="product-categires-part">
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <?= $this->lang->line('Product Categories'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class=" Categories-part">
                                                    <ul class="categories-wrapper">

                                                        <li class="active">
                                                            <div class="form-check category_id" data-cat_id="All">
                                                                <label class="form-check-label" for="sub-Kid's"><?= $this->lang->line('All Categories') ?></label>
                                                            </div>
                                                        </li>

                                                        <?php foreach ($category as $key => $value) : ?>
                                                            <li class="active">
                                                                <span><i class="fa-solid fa-circle-chevron-right"></i></span>
                                                                <div class="form-check category_id" data-cat_id="<?= $value->id ?>">
                                                                    <label class="form-check-label" for="sub-Kid's"><?= $value->name ?></label>
                                                                </div>
                                                            </li>

                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="price-range-part product-cat-card">
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
                                                                <span id="value">₹3000</span>
                                                            </div>
                                                        </div>
                                                        <input type="range" value="0" max="3000" min="0" step="10" oninput="
                                                                            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                                                            let value = (this.value/parseInt(this.max))*100
                                                                            var children = this.parentNode.childNodes[1].childNodes;
                                                                            children[1].style.width=value+'%';
                                                                            children[5].style.left=value+'%';
                                                                            children[7].style.left=value+'%';children[11].style.left=value+'%';
                                                                            children[11].childNodes[1].innerHTML=this.value;" />

                                                        <input type="range" value="3000" max="3000" min="0" step="10" oninput="
                                                                            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                                                                            let value = (this.value/parseInt(this.max))*100
                                                                            var children = this.parentNode.childNodes[1].childNodes;
                                                                            children[3].style.width=(100-value)+'%';
                                                                            children[5].style.right=(100-value)+'%';
                                                                            children[9].style.left=value+'%';children[13].style.left=value+'%';
                                                                            children[13].childNodes[1].innerHTML=this.value;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <?= $this->lang->line('Brands'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="mt-4">
                                                    <ul class="brand-content">
                                                        <?php foreach ($brand as $key => $brandRecord) : ?>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input class="form-check-input brand" type="checkbox" name="brand" value="<?= $brandRecord->id ?>" id="<?= 'brand' . $key ?>">
                                                                    <label class="form-check-label" for="<?= 'brand' . $key ?>"><?= $brandRecord->name ?></label>
                                                                </div>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <?= $this->lang->line('Discounts'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <div class="mt-2">
                                                    <ul>
                                                        <?php
                                                        $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                                                        foreach ($discountArray as $key => $value) {
                                                        ?>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input class="form-check-input discount" value="<?= $key ?>" type="checkbox" name="filter_discount" id="<?= $key ?>">
                                                                    <label class="form-check-label" for="<?= $key ?>"><?= $value ?></label>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
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

            <div class="products-wrap pro-list-wrap mycustom-row">

                <!-- ----right-filter-part------ -->
                <div class="my-filter-wrapper">
                    <div class="product-categires-part">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <?= $this->lang->line('Product Categories'); ?>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class=" Categories-part">
                                            <ul class="categories-wrapper cate-wrp">
                                                <li class="active">
                                                    <div class="form-check category_id" data-cat_id="All">
                                                        <label class="form-check-label" for="sub-Kid's"><?= $this->lang->line('All Categories') ?></label>
                                                    </div>
                                                </li>
                                                <?php foreach ($category as $key => $value) : ?>
                                                    <li>
                                                        <div class="form-check category_id" data-cat_id="<?= $value->id ?>">
                                                            <label class="form-check-label" for="sub-Kid's"><?= $value->name ?></label>
                                                        </div>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="price-range-part product-cat-card">
                                            <label for="priceRange"> <?= $this->lang->line('price Range'); ?>:</label>
                                            <input type="text" id="priceRange" readonly>
                                            <div id="price-range" class="slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <?= $this->lang->line('Brands'); ?>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mt-4">
                                            <ul class="brand-content">
                                                <?php foreach ($brand as $key => $brandRecord) : ?>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input brand" type="checkbox" name="brand" value="<?= $brandRecord->id ?>" id="<?= $brandRecord->id ?>">
                                                            <label class="form-check-label" for="<?= $brandRecord->id ?>"><?= $brandRecord->name ?></label>
                                                        </div>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <?= $this->lang->line('Discounts'); ?>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mt-2">
                                            <ul class="cate-wrp">
                                                <?php
                                                $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                                                foreach ($discountArray as $key => $value) {
                                                ?>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input discount" value="<?= $key ?>" type="checkbox" name="filter_discount" id="disc<?= $key ?>">
                                                            <label class="form-check-label" for="disc<?= $key ?>"><?= $value ?></label>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- ---left-product-list--- -->
                <div class="show-div-wrapper">

                    <div class="product-select-in">
                        <div class="d-flex w-100 justify-content-between">

                            <a class="filter-icon filter-hide-btn lg-btn wow fadeInLeft"><?= $this->lang->line('Filter'); ?><i class="fa-solid fa-circle-arrow-right"></i></a>

                            <!-- ----mobile-filter-btn---- -->
                            <a class="mobile-filter-btn"><i class="fa fa-filter" aria-hidden="true"></i></a>

                            <select class="form-select wow fadeInRight sorting" aria-label="Default select example">
                                <option value="All"><?= $this->lang->line('All'); ?></option>
                                <option value="alphabetically"><?= $this->lang->line('alphabetical'); ?></option>
                                <option value="high_low"><?= $this->lang->line('Price-High to Low'); ?></option>
                                <option value="low_high"><?= $this->lang->line('Price-Low to High'); ?></option>
                                <option value="discount_high_low"><?= $this->lang->line('`%` off - High to Low'); ?>
                                </option>
                                <option value="discount_low_high"><?= $this->lang->line('`%` off - low to high'); ?>
                                </option>
                            </select>
                            <!-- ---filter-icon--- -->

                        </div>

                    </div>

                    <div class="main-listing-wrapper" id="ajaxProduct">

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




<!-- <div class="mobile-btn-overlay"></div> -->
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID" value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">
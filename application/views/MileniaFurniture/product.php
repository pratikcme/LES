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
                        <li class="breadcrumb-item"><a
                                href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
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
            <div class="product-select-in">

                <!-- -----mobile-filter-dropdown---- -->
                <div class="mobile-filter-icon">
                    <div id="mySidepanel" class="sidepanel">
                        <span class="closebtn"><span>×</span></span>
                        <div class="filter-part col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                            <div class="product-categires-part">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                                <?= $this->lang->line('Product Categories'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse show"
                                            aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class=" Categories-part">
                                                    <ul class="categories-wrapper">

                                                        <li class="active">
                                                            <div class="form-check category_id" data-cat_id="">
                                                                <label class="form-check-label"
                                                                    for="sub-Kid's"><?= $this->lang->line('All Categories') ?></label>
                                                            </div>
                                                        </li>

                                                        <?php foreach ($category as $key => $value) : ?>
                                                        <li class="active">
                                                            <span><i
                                                                    class="fa-solid fa-circle-chevron-right"></i></span>
                                                            <div class="form-check category_id"
                                                                data-cat_id="<?= $value->id ?>">
                                                                <label class="form-check-label"
                                                                    for="sub-Kid's"><?= $value->name ?></label>
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                                        <input type="range" value="0" max="3000" min="0" step="10"
                                                            oninput="
                                                                            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                                                            let value = (this.value/parseInt(this.max))*100
                                                                            var children = this.parentNode.childNodes[1].childNodes;
                                                                            children[1].style.width=value+'%';
                                                                            children[5].style.left=value+'%';
                                                                            children[7].style.left=value+'%';children[11].style.left=value+'%';
                                                                            children[11].childNodes[1].innerHTML=this.value;" />

                                                        <input type="range" value="3000" max="3000" min="0" step="10"
                                                            oninput="
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
                                            <button class="accordion-button collapsed show" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <?= $this->lang->line('Brands'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="mt-4">
                                                    <ul class="brand-content">
                                                        <!-- <li>
                                                            <div class="brand-wrapper active">
                                                                <img src="./assets/images/product-list/brand-img-1.png"
                                                                    alt="">
                                                            </div>
                                                        </li> -->

                                                        <?php foreach ($brand as $key => $brandRecord) : ?>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input brand" type="checkbox"
                                                                    name="brand" value="<?= $brandRecord->id ?>"
                                                                    id="sub-Nike">
                                                                <label class="form-check-label"
                                                                    for="sub-Nike"><?= $brandRecord->name ?></label>
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                                <?= $this->lang->line('Discounts'); ?>
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse show"
                                            aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="mt-2">
                                                    <ul>

                                                        <?php

                                                        $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                                                        foreach ($discountArray as $key => $value) {
                                                        ?>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input discount"
                                                                    value="<?= $key ?>" type="checkbox"
                                                                    name="filter_discount" id="disc<?= $key ?>">
                                                                <label class="form-check-label"
                                                                    for="disc<?= $key ?>"><?= $value ?></label>
                                                            </div>
                                                        </li>
                                                        <?php } ?>


                                                        <!-- <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="discount" id="new-10%">
                                                                <label class="form-check-label" for="new-10%">10-15%
                                                                    (8)</label>
                                                            </div>
                                                        </li> -->

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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <?= $this->lang->line('Product Categories'); ?>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class=" Categories-part">
                                            <ul class="categories-wrapper cate-wrp">

                                                <li class="active">
                                                    <div class="form-check category_id" data-cat_id="">
                                                        <label class="form-check-label"
                                                            for="sub-Kid's"><?= $this->lang->line('All Categories') ?></label>
                                                    </div>
                                                </li>
                                                <?php foreach ($category as $key => $value) : ?>
                                                <li class="active">
                                                    <!-- <span><i class="fa-solid fa-circle-chevron-right"></i></span> Décor
                                                    (8) -->
                                                    <div class="form-check category_id" data-cat_id="<?= $value->id ?>">
                                                        <label class="form-check-label"
                                                            for="sub-Kid's"><?= $value->name ?></label>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                                <input type="range" value="0" max="3000" min="0" step="10"
                                                    oninput="
                                                                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                                                    let value = (this.value/parseInt(this.max))*100
                                                                    var children = this.parentNode.childNodes[1].childNodes;
                                                                    children[1].style.width=value+'%';
                                                                    children[5].style.left=value+'%';
                                                                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                                                                    children[11].childNodes[1].innerHTML=this.value;" />

                                                <input type="range" value="3000" max="3000" min="0" step="10"
                                                    oninput="
                                                                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                                                                    let value = (this.value/parseInt(this.max))*100
                                                                    var children = this.parentNode.childNodes[1].childNodes;
                                                                    children[3].style.width=(100-value)+'%';
                                                                    children[5].style.right=(100-value)+'%';
                                                                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                                                                    children[13].childNodes[1].innerHTML=this.value;" />
                                            </div>
                                            <!-- <label for="priceRange"> <?= $this->lang->line('price Range'); ?>:</label>
                                            <input type="text" id="priceRange" readonly>
                                            <div id="price-range" class="slider"></div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed show" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <?= $this->lang->line('Brands'); ?>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mt-4">

                                            <ul class="brand-content">

                                                <?php foreach ($brand as $key => $brandRecord) : ?>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input brand" type="checkbox"
                                                            name="brand" value="<?= $brandRecord->id ?>" id="sub-Nike">
                                                        <label class="form-check-label"
                                                            for="sub-Nike"><?= $brandRecord->name ?></label>
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <?= $this->lang->line('Discounts'); ?>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mt-2">
                                            <ul class="cate-wrp">

                                                <?php

                                                $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                                                foreach ($discountArray as $key => $value) {

                                                ?>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input discount" value="<?= $key ?>"
                                                            type="checkbox" name="filter_discount" id="disc<?= $key ?>">
                                                        <label class="form-check-label"
                                                            for="disc<?= $key ?>"><?= $value ?></label>
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

                            <a class="filter-icon filter-hide-btn lg-btn wow fadeInLeft"><?= $this->lang->line('Filter'); ?><i
                                    class="fa-solid fa-circle-arrow-right"></i></a>

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

                        <!-- <div class="product-listing-wrapper hot-products-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
              <div class="hot-products-img position-relative overflow-hidden">
                <img src="./assets/images/home/hot-product.png" alt="hot-product-img" />
                <div class="hot-products-cart-wrap">
                  <a href="#"><svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.5749 4.75H3.42488C3.24033 4.75087 3.06242 4.81891 2.92439 4.94141C2.78636 5.06391 2.69766 5.23249 2.67488 5.41562L1.34363 17.4156C1.33179 17.5202 1.34208 17.6261 1.37384 17.7264C1.4056 17.8267 1.45811 17.9192 1.52796 17.9979C1.59781 18.0766 1.68344 18.1397 1.77928 18.1831C1.87513 18.2266 1.97903 18.2494 2.08426 18.25H19.9155C20.0207 18.2494 20.1246 18.2266 20.2205 18.1831C20.3163 18.1397 20.4019 18.0766 20.4718 17.9979C20.5416 17.9192 20.5942 17.8267 20.6259 17.7264C20.6577 17.6261 20.668 17.5202 20.6561 17.4156L19.3249 5.41562C19.3021 5.23249 19.2134 5.06391 19.0754 4.94141C18.9373 4.81891 18.7594 4.75087 18.5749 4.75Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M7.25 7.75V4.75C7.25 3.75544 7.64509 2.80161 8.34835 2.09835C9.05161 1.39509 10.0054 1 11 1C11.9946 1 12.9484 1.39509 13.6517 2.09835C14.3549 2.80161 14.75 3.75544 14.75 4.75V7.75" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                  <a href="./product-details.php"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.875 8.875H11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M8.875 5.875V11.875" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M8.875 16.75C13.2242 16.75 16.75 13.2242 16.75 8.875C16.75 4.52576 13.2242 1 8.875 1C4.52576 1 1 4.52576 1 8.875C1 13.2242 4.52576 16.75 8.875 16.75Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M14.4438 14.4437L19.0001 19" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                  
                  <div class="techno-check">
                    <input class="techno_checkbox" type="checkbox" id="1" value="1">
                    <div class="stocks heart">
                      <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5345 17.8656L19.1283 10.2719C20.9939 8.39687 21.2658 5.33124 19.5033 3.37187C19.0612 2.8781 18.5232 2.47963 17.922 2.20082C17.3208 1.92201 16.669 1.76871 16.0066 1.75028C15.3441 1.73186 14.6848 1.84869 14.0691 2.09365C13.4533 2.33861 12.8939 2.70655 12.4251 3.17499L11.0001 4.60937L9.772 3.37187C7.897 1.50624 4.83138 1.23437 2.872 2.99687C2.37823 3.43888 1.97977 3.97694 1.70096 4.57815C1.42215 5.17936 1.26885 5.83111 1.25042 6.49356C1.23199 7.15602 1.34883 7.81528 1.59379 8.43106C1.83875 9.04684 2.20669 9.60621 2.67513 10.075L10.4658 17.8656C10.6079 18.0065 10.8 18.0855 11.0001 18.0855C11.2003 18.0855 11.3923 18.0065 11.5345 17.8656Z" stroke="#CC833D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hot-products-details">
                <a href="./product-details.php">
                  <h5>Chair Padded Seat</h5>
                </a>
                <div class="price-wrap d-flex">
                  <p><span><strike>₹1230.00</strike></span> </p>
                  <h6>₹1150.00</h6>
                </div>
                <div class="rating-starts rating-furni">
                  <div class="rating stars3_5">
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star star-active"></span>
                    <span class="star star-active-half"></span>
                  </div>
                  <div>
                    <p>( 2 reviews )</p>
                  </div>
                </div>
                <div class="product-detail-quentity add-cart-btns">
                  <div class="qty-container">
                    <button class="qty-btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" name="qty" value="1" class="input-qty">
                    <button class="qty-btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div> -->

                    </div>
                </div>
            </div>
        </div>

        <!-- ---pagination-part--- -->
        <!-- <div class="pagination-part">
            <ul class="pagination">
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a></li>
            </ul>
        </div> -->
    </div>
</section>




<!-- <div class="mobile-btn-overlay"></div> -->
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID"
    value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">
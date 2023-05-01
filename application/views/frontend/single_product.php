<style type="text/css">
.quantity-wrap {
    margin: 30px 0px;
}

.quantity-wrap button {
    width: 60px;
    height: 50px;

}

.quantity-wrap input {
    width: 60px;
    height: 50px;
}

.whatsapp-help-btn i {
    color: #25D366;
    font-size: 20px;
    margin-right: 10px;
  }
</style>
<!--=================BREADCRUMB SECTION=================  -->
<section class="breadcrumb-menu p-100">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('products') ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- =================PRODUCT SECTION================= -->
<section class="p-100 bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-slider" id="detail">
                    <div class="wishlist-wrapper" id='is_discounted'>
                        <?php if ($varientDetails[0]->discount_per != 0) { ?>
                        <div class="offer-wrap">
                            <p>
                                <?= $varientDetails[0]->discount_per ?> % off</p>
                        </div>
                        <?php } else { ?>
                        <div class="">
                            <p></p>
                        </div>
                        <?php } ?>
                        <div class="wishlist-icon" style="display: ''" data-product_id="<?= $product_id ?>"
                            data-product_weight_id="<?= $product_weight_id ?>"> <i
                                class="far fa-heart <?= (in_array($this->utility->safe_b64decode($product_weight_id), $wish_pid)) ? "fas .fa-heart" : "" ?>"></i>
                        </div>
                    </div>
                    <div class="slider slider-for">
                        <?php
                        if (count($product_image) > 0) {
                            foreach ($product_image as $key => $value) { ?>
                        <div class="main-img-wrapper xzoom-container"> <img class="slide-img demo-trigger"
                                src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>"
                                data-zoom="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>">
                        </div>
                        <?php }
                        } else { ?>
                        <div class="main-img-wrapper xzoom-container"> <img class="slide-img demo-trigger"
                                src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $image[0] ?>"
                                data-zoom="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $image[0] ?>">
                        </div>

                        <?php } ?>
                    </div>
                    <div class="slider slider-nav">
                        <?php foreach ($product_image as $key => $value) { ?>
                        <div class="thumnail"> <img
                                src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image ?>">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-detail-wrapper" id="product_detail">
                    <div class="detail"></div>

                    <?php if ($varientDetails[0]->quantity > $varientDetails[0]->limited_stock) { ?>
                    <div class="in-stock">
                        <h6><?= $this->lang->line('Available(Instock)') ?></h6>
                    </div>
                    <?php } else if ($varientDetails[0]->quantity <= $varientDetails[0]->limited_stock && $varientDetails[0]->quantity > 0) { ?>
                    <div class="in-stock">
                        <h6><?= $this->lang->line('Limited Stock') ?></h6>
                    </div>
                    <?php } else {
                    ?>
                    <div class="in-stock">
                        <h6>
                            <?= $this->lang->line('out of stock') ?>
                        </h6>
                    </div>
                    <?php
                    } ?>

                    <h1><?= $productDetail[0]->name ?></h1>
                    <div class="feature-detail">
                        <div class="card-icon mb-2" id="starRattingOfVarient">
                            <?php for ($j = 1; $j <= $productDetail[0]->rating['rating']; $j++) { ?>
                            <i class="fas fa-star"></i>
                            <?php } ?>
                            <?php for ($i = 1; $i <= 5 - $productDetail[0]->rating['rating']; $i++) { ?>
                            <i class="fas fa-star blank-ratting"></i>
                            <?php } ?>
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star blank-ratting"></i> -->
                        </div>
                        <div class="product-price">
                            <p class="notranslate"><?= $this->siteCurrency ?>
                                <?= number_format((float)$varientDetails[0]->discount_price, 2, '.', '') ?>
                                <span class="orginal-price"
                                    style="<?= ($varientDetails[0]->discount_per == 0) ? 'display:none' : '' ?>">
                                    <?= $this->siteCurrency ?>
                                    <?= number_format((float)$varientDetails[0]->price, 2, '.', '') ?>
                                </span>
                            </p>
                        </div>
                        <div class="product-vairant">
                            <?php foreach ($varient as $key => $value) { ?>
                            <span
                                class="variant product_varient_id <?= ($varientDetails[0]->id == $value) ? 'active' : '' ?>"
                                data-varient_id="<?= $this->utility->safe_b64encode($value) ?>">
                                <?= $weight_no[$key] . ' ' . $weight_name[$key] ?>
                            </span>
                            <?php } ?>
                        </div>
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
                        <div class="d-flex align-items-center add-after-wrapper">
                            <div class="quantity-wrap <?= $d_show ?>">
                                <button class="dec cart-qty-minus decqnt"
                                    data-product_weight_id="<?= $varientDetails[0]->id ?>"><span class="minus"><i
                                            class="fa fa-minus"></i></span></button>
                                <input class="qty" id="qnt" type="" name=""
                                    data-product_id="<?= $this->utility->safe_b64decode($product_id) ?>"
                                    value="<?= ($cartQuantityForVarient != '') ? $cartQuantityForVarient : 1 ?>"
                                    readonly>
                                <button class="inc cart-qty-plus incqnt"
                                    data-product_weight_id="<?= $varientDetails[0]->id ?>"><span><i
                                            class="fa fa-plus"></i></span></button>
                            </div>
                            <?php if ($isAvailable != '0') { ?>
                            <div class="order-btn ">
                                <a href="javascript:" class="<?= $d_none ?>">
                                    <button class="btn " id="addtocart"><span><i
                                                class="fas fa-shopping-basket"></i></span>
                                        <?= $this->lang->line('add to cart') ?>
                                    </button>
                                </a>
                                <a href="javascript:">
                                    <button class="btn hover"
                                        id="order_now"><?= $this->lang->line('order now') ?></button>
                                </a>
                                <?php } ?>
                                <?php
                                $product_id = $this->uri->segment(3);
                                $varient_id = $this->uri->segment(4);
                                $url = base_url() . 'products/productDetails/' . $product_id . '/' . $varient_id;
                                ?>
                                <?php
                                if (!empty($BranchDetails) && $BranchDetails[0]->whatsappFlag  != '0' && $BranchDetails[0]->phone_no != '') {
                                    $mobile = '91' . $BranchDetails[0]->phone_no; ?>
                                <a target="_black" id='whatsapp_link'
                                    href="https://wa.me/<?= $mobile ?>/?text=<?= $url ?>">
                                    <button class="btn hover whatsapp-help-btn" id=""><i
                                            class="fab fa-whatsapp"></i><?= $this->lang->line('Help!') ?></button>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <!--  <div class="quantity-wrap">
              <button class="cart-qty-minus decqnt"><span class="minus"><i class="fa fa-minus"></i></span></button>
              <input class="qty" id="qnt" type="text" name="" value="<?= ($cartQuantityForVarient != '') ? $cartQuantityForVarient : 1 ?>">
              <button class="cart-qty-plus incqnt"><span><i class="fa fa-plus"></i></span></button>
            </div>
          <div class="order-btn">
            <a href="javascript:">
              <button class="btn" id="addtocart"><span><i class="fas fa-shopping-basket"></i></span> add to cart
              </button>
            </a>
            <a href="javascript:">
              <button class="btn hover" id="order_now">order now</button>
            </a>
          </div> -->
                        <div class="product-description">
                            <h6><?= $this->lang->line('Description') ?> :</h6>
                            <p>
                                <?= $productDetail[0]->about ?>
                            </p>
                            <h6><?= $this->lang->line('Content') ?> :</h6>
                            <p>
                                <?= $productDetail[0]->content ?>
                            </p>
                            <h6>
                                <?= $this->lang->line('Category') ?> :
                                <span><?= $productDetail[0]->category_name ?></span>
                                <?= $this->lang->line('Brand') ?> : <span><?= $productDetail[0]->brand_name ?></span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- =================review-box================== -->
    <section class="p-50 review-box">
        <div class="container">
            <div class="my-review-wrapper">

                <!-- ----review-header--- -->
                <div class="review-header">
                    <h2>Ratings & reviews</h2>
                </div>

                <!-- ----review-content--- -->
                <div class="review-content">
                    <div class="left-content">
                        <?php $count = 0; ?>
                        <?php foreach ($product_review as $key => $value) { ?>
                        <?php $count = +$value->ratting;
                            $avgr = $count / count($product_review) ?>
                        <?php } ?>
                        <div>
                            <h3><strong id='avg'><?= ($avgr) ? $avgr : 0 ?></strong><span>/5</span></h3>
                        </div>
                        <div>
                            <h4>Overall Rating</h4>
                            <p id="verified_ratting"><?= count($product_review) ?> verified ratings</p>
                        </div>
                    </div>
                    <div id="writeReviewSection"
                        class="right-content <?= (empty($isVarientExist) || $countParticularUserReview >= 1) ? 'd-none' : '' ?>">
                        <h6>Write your review !</h6>
                        <div class="enter-review-btn">
                            <a href="#" data-toggle="modal" id="reviewModel" data-target="#exampleModal">Write
                                Review</a>
                        </div>
                    </div>
                </div>

                <!-- ----review-comment-part--- -->
                <div class="review-comment-wrapper <?= (empty($product_review)) ? 'd-none' : '' ?>" id='review-section'>
                    <div class="row" id="appendReview">
                        <?php foreach ($product_review as $key => $value) { ?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img
                                                src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong><?= $value->fname . ' ' . $value->lname ?></strong>
                                            <span>@<?= $value->fname . '' . $value->lname ?></span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <?php for ($i = 1; $i <= $value->ratting; $i++) { ?>
                                        <i class="fas fa-star"></i>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= (5 - $value->ratting); $i++) { ?>
                                        <i class="fas fa-star blank-ratting"></i>
                                        <?php } ?>
                                        <!-- <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i> -->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p><?= $value->review ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- -----write-review-modal---- -->
    <!-- Modal -->
    <div class="modal fade my-review-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Reviews</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="rating-box">
                        <h2>Rating</h2>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="review-text-box">
                        <h2>Comments</h2>
                        <textarea name="Comments" id="Comments" placeholder="Your Comments"></textarea>
                        <!-- <input type="text" name="Comments" id="Comments" placeholder="Your Comments"/> -->
                        <label for="error" id="error" style="color:red"></label>
                    </div>
                    <input type="hidden" name="product_id" id="ratting_product_id" value="<?= $product_id ?>">
                    <input type="hidden" name="varient_id" id="ratting_product_varient_id" value="<?= $varient_id ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================= -->



</section>





<!-- =================RELATED PRODUCTS SECTION================= -->

<?php if (count($related_product) > 4) { ?>
<section class="p-100 bg-cream">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="row align-items-center">
                <div class="col-md-8 col-sm-8 col-12">
                    <div class="section-title">
                        <h1><?= $this->lang->line('related products') ?></h1>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="see-all-wrap"> <a
                            href="<?= base_url() . 'products' ?>"><?= $this->lang->line('See All') ?></a> </div>
                </div>
            </div>
        </div>
        <div id="top_feat_slider" class="owl-carousel top-feature-slider">


            <?php foreach ($related_product as $key => $value) :
                    $value->name = character_limiter($value->name, 30);
                    if (($value->product_image == '') || !file_exists('public/images/' . $this->folder . 'product_image/' . $value->product_image)) {
                        $CI = &get_instance();
                        $CI->load->model('common_model');
                        $value->product_image = $default_product_image;
                    }
                    $class = '';
                    if (in_array($value->id, $wish_pid)) {
                        $class = 'fas .fa-heart';
                    }
                ?>
            <div class="item">
                <div class="product-wrapper">
                    <?php if ($value->varientQuantity == '0') { ?>
                    <div class="out-stock"><span class="out-heading"><?= $this->lang->line('out of stock') ?></span>
                    </div>
                    <?php } ?>
                    <div class="wishlist-wrapper">
                        <?php if ($value->discount_per > '0') { ?>
                        <div class="offer-wrap">
                            <p><?= $value->discount_per . ' % off' ?></p>
                        </div>
                        <?php } else { ?>
                        <div class="">
                        </div>
                        <?php } ?>
                        <div class="wishlist-icon" style="display: none"
                            data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"> <i
                                class="far fa-heart <?= $class ?>"></i> </div>
                    </div>
                    <a
                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                        <div class="feat-img"> <img
                                src="<?= base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->product_image ?>">
                        </div>
                    </a>
                    <div class="feature-detail">
                    <div class="card-icon">
                        <?php for ($j = 1; $j <= $value->ratting['rating']; $j++) { ?>
                            <i class="fas fa-star"></i>
                        <?php } ?>
                        <?php for ($i = 1; $i <= 5 - $value->ratting['rating']; $i++) { ?>
                            <i class="fas fa-star blank-ratting"></i>
                        <?php } ?>
                    </div>
                        <a
                            href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($value->pw_id) ?>">
                            <h5><?= $value->name ?></h5>
                        </a>
                        <h6><span><?= $this->siteCurrency ?></i></span>
                            <?= number_format((float)$value->discount_price, 2, '.', '') ?></h6>
                        <?php if ($value->varientQuantity > $value->limited_stock) { ?>
                        <p><?= $this->lang->line('Available(Instock)') ?></p>
                        <?php } else { ?>
                        <p><?= $this->lang->line('Limited Stock') ?></p>
                        <?php } ?>
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
                    <div class="feature-bottom-wrap ">
                        <div class="cart addcartbutton d-none"
                            data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"> <i
                                class="fas fa-shopping-basket"></i>
                        </div>
                        <div class="new_add_to_cart <?= $d_none ?>">
                            <button class="btn addcartbutton"
                                data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"
                                data-varient_id="<?= $this->utility->safe_b64encode($value->pw_id) ?>">Add To
                                Cart</button>
                        </div>
                        <div class="quantity-wrap <?= $d_show ?>">
                            <button class="dec cart-qty-minus related_cat"
                                data-product_weight_id="<?= $value->pw_id ?>"><span class="minus"><i
                                        class="fa fa-minus"></i></span></button>
                            <input class="qty" type="text" name="" value="1" data-product_id="<?= $value->id ?>"
                                data-weight_id="<?= $value->weight_id ?>" readonly>
                            <button class="inc cart-qty-plus" data-product_weight_id="<?= $value->pw_id ?>"><span><i
                                        class="fa fa-plus"></i></span></button>
                        </div>
                    </div>
                    <!-- <div class="feature-bottom-wrap">
                        <div class="cart addcartbutton" data-product_id="<?= $this->utility->safe_b64encode($value->id) ?>"> <i class="fas fa-shopping-basket"></i>
                        </div>
                        <div class="quantity-wrap">
                        <button class="cart-qty-minus"><span class="minus"><i class="fa fa-minus"></i></span></button>
                        <input class="qty" type="text" name="" value="1" min="1" disabled="disabled">
                        <button class="cart-qty-plus"><span><i class="fa fa-plus"></i></span></button>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php endforeach ?>
            <!-- <div class="mobile-see-all"> <a href="<?= base_url() . 'producta' ?>">see all</a> </div> -->
        </div>
        <?php } ?>
        <input type="hidden" name="product_id" id="product_id" value='<?= $product_id ?>'>
        <input type="hidden" name="product_varient_id" id="product_varient_id"
            value='<?= (isset($varientDetails[0]->id) && $varientDetails[0]->id != '') ? $this->utility->safe_b64encode($varientDetails[0]->id) : $this->utility->safe_b64encode($productDetail[0]->variant_id) ?>'>
</section>

<header>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <section class="loader-main d-none">
          <div class="loader-wrapper">
            <div class="dots dot2">
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
            </div>
          </div>
        </section>
        <!-- -----header-top---- -->
        <div class="header-top">

          <a href="./index.php">
            <div class="logo">
              <a href="<?= base_url() ?>"><img src="<?= $this->theme_base_url . '/assets/img/home/header-logo.png' ?>" alt=""></a>
            </div>

          </a>

          <!-- -------navigation-bar---- -->
          <nav>
            <div class="left-content">
              <ul>
                <li><a href="<?= base_url() . 'home' ?>">Home</a></li>
                <!--   -->
                <li><a href="<?= base_url() . 'products' ?>">Shop</a></li>
                <li><a href="<?= base_url() . 'about' ?>">About us</a></li>
                <li><a href="<?= base_url() . 'contact' ?>">Contact us</a></li>
              </ul>
            </div>

          </nav>

          <div class="d-flex drp-grp">

            <form class="lng-drp">
              <div id="google_translate_element"></div>
            </form>


            <?php

            if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != '') {

            ?>
              <?php if ($ApprovedBranch[0]->approved_branch >= '1'  && count($branch_nav) >= '1') {

              ?>
                <form class="branch-drp">
                  <select name="Branch" class="vendor_nav" id="Branch">
                    <option value=""> <?= $this->lang->line('All store') ?></option>
                    <?php foreach ($branch_nav as $key => $v) : ?>
                      <option value="<?= $v->id ?>" <?= (isset($_SESSION['branch_id']) && $v->id == $_SESSION['branch_id']) ? 'selected' : '' ?>><?= $v->name ?></option>
                    <?php endforeach ?>
                  </select>
                </form>
              <?php } ?>
            <?php } ?>


          </div>

          <!-- ----cart-dropdown--- -->
          <div class="cart-dropdwon" id="updated_list">
            <div class="drop-cart-title">
              <h3 class="cart-title">My shopping cart</h3>
              <a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
            </div>

            <?php if ($this->session->userdata('user_id') == '') {

            ?>
              <?php if (isset($this->cartCount)) {
                $CI = &get_instance();
                $CI->load->model('common_model');
                $default_product_image = $CI->common_model->default_product_image();
              } ?>
              <?php

              foreach ($this->session->userdata('My_cart') as $key => $value) {

                $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
                // dd($product);
                $product[0]->image = preg_replace('/\s+/', '%20', $product[0]->image);

                $CI->load->model('api_v3/common_model', 'co_model');
                $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));
                if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                  $product[0]->discount_price = $product[0]->without_gst_price;
                }
                if (!file_exists('public/images/' . $CI->folder . 'product_image/' . $product[0]->image) || $product[0]->image == '') {
                  if (strpos($product[0]->image, '%20') === true || $product[0]->image == '') {
                    $product[0]->image = $default_product_image;
                  } else {
                    $product[0]->image = $default_product_image;
                  }
                }
              ?>
                <div class="cart-drop-wrapper">


                  <div class="cart-drop-menu cart-drop-menu-1">
                    <div class="drop-img">
                      <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>"><img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $product[0]->image ?>" alt=""></a>
                    </div>
                    <div class="drop-text">
                      <h4><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>"><?= $value['product_name'] ?></a></h4>

                      <p>Qty : <?= $value['quantity'] ?></p>
                      <h3><?= $this->siteCurrency . ' ' . number_format((float)$product[0]->discount_price, 2, '.', '') ?></h3>

                    </div>
                    <div class="cancel-btn remove_item" data-product_id="<?= $value['product_id'] ?>" data-product_weight_id="<?= $value['product_weight_id'] ?>">
                      <a href="#"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                  </div>

                </div>
              <?php } ?>
              <div class="total-amount">
                <p><?= $this->lang->line('Total') ?></p>
                <h3><?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
              </div>

              <div class="drop-btns">
                <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
                <a href="<?= base_url() . 'checkout' ?>" class="checkout "><?= $this->lang->line('checkout') ?></a>
              </div>
            <?php } else {
            ?>
              <?php if (isset($this->cartCount)) { ?>
                <?php

                foreach ($mycart as $key => $value) { ?>

                  <div class="cart-drop-wrapper">


                    <div class="cart-drop-menu cart-drop-menu-1">
                      <div class="drop-img">
                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value->image ?>" alt=""></a>
                      </div>
                      <div class="drop-text">
                        <h4><a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><?= $value->product_name ?></a></h4>

                        <p>Qty : <?= $value->quantity ?></p>
                        <h3><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?> </h3>

                      </div>
                      <div class="cancel-btn remove_item" data-product_id="<?= $value->product_id ?>" data-product_weight_id="<?= $value->product_weight_id ?>">
                        <a href="#"><i class="fa-solid fa-xmark"></i></a>
                      </div>
                    </div>

                  </div>
                <?php } ?>

                <div class="total-amount">
                  <p><?= $this->lang->line('Total') ?></p>
                  <h3><?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
                </div>

                <div class="drop-btns">
                  <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
                  <a href="<?= base_url() . 'checkout' ?>" class="checkout "><?= $this->lang->line('checkout') ?></a>
                </div>

              <?php } ?>
            <?php } ?>
          </div>

          <div class="social-icons">
            <div class="overlay"></div>

            <a href="#" class="">
              <div class="search-icon icons search-toggle">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </a>

            <!-- -----search-btn---- -->

            <!-- -----search-btn---- -->
            <div class="search-block search-list-blcok">
              <form class="search-form">
                <?php if ($this->uri->segment(1) == '') { ?>
                  <input type="search" name="search" class="search-input" placeholder="Search here...">
                  <i class="fa-solid fa-magnifying-glass search-here-icon"></i>
                <?php }
                if ($this->uri->segment(1) != '') {
                  $placeholder = $this->lang->line('Search product..');
                }
                $segment1 = $this->uri->segment(1);

                if ($segment1 != '') { ?>
                  <input type="text" class="form-control search-input" id='myInput' data-search_val="" placeholder="<?= $placeholder ?>">
                  <i class="fa-solid fa-magnifying-glass search-here-icon"></i>

                <?php } ?>

              </form>
              <i class="fa-solid fa-xmark main-div-cancel"></i>
            </div>





            <div class="dropdown">
              <button class="dropdown-toggle user-login-icon icons" type="button" data-bs-toggle="dropdown">
                <div class="user-login-icon icons">
                  <i class="fa-regular fa-user"></i>
                </div>
              </button>
              <ul class="dropdown-menu user-login-drop">

                <?php if ($this->session->userdata('user_id') == '') { ?>
                  <li>
                    <div class="user-login-header">
                      <h4><?= $this->lang->line('New Customer') ?>?</h4>
                      <h3><a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                    </div>
                  </li>
                  <li>
                    <div class="user-data-wrapper">
                      <a href="<?= base_url() . 'login' ?>"><span><i class="fa-solid fa-right-to-bracket"></i></span><?= $this->lang->line('Login Account') ?></a>
                    </div>
                  </li>
                <?php } else { ?>
                  <li>
                    <div class="user-data-wrapper">
                      <a href="<?= base_url() . 'users_account/users/account' ?>"><span><i class="fa-sharp fa-solid fa-user"></i></span><?= $this->lang->line('My account') ?></a>
                    </div>
                  </li>
                  <li>
                    <div class="user-data-wrapper">
                      <a href="javascript:" id="logout"><span><i class="fa-solid fa-folder-plus"></i></span>Logout</a>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>

            <a href="#" class="cart-in">
              <div class="cart-icons icons">

                <span class="g-badge" id="itemCount" <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
            </a>


            <div class="icon-tex">
              <p><?= $this->lang->line('your cart') ?></p>
              <h3 class="mb-0" id="display_subtotal"><?= $this->siteCurrency . '' . getMycartSubtotal() ?></h3>
            </div>

          </div>
        </div>
      </div>
    </div>
</header>



<div class="header-cart-in">
  <a href="">
    <div class=" header-cart-respo">
      <i class="fa-solid fa-cart-shopping"></i>
      <span class="g-badge" id="itemCount" <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
    </div>
  </a>
</div>
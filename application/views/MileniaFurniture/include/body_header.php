<header>
    <div class="container position-relative">
        <img src="<?= $this->theme_base_url ?>/assets/images/home/light.png" class="position-absolute light-image"
            alt="light" />
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= $this->siteLogo ?>" alt="logo" />
                        </a>
                        <div class="navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url() . 'products' ?>"><?= $this->lang->line('Shop'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url() . 'about' ?>"><?= $this->lang->line('About us'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url() . 'contact' ?>"><?= $this->lang->line('Contact Us'); ?></a>
                                </li>
                            </ul>

                            <div class="drp-grp">
                                <form class="lng-drp">

                                    <div id="google_translate_element"></div>
                                </form>
                                <?php if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != '') { ?>
                                <?php if ($ApprovedBranch[0]->approved_branch > '1'  && count($branch_nav) > '1') { ?>
                                <form class="branch-drp">
                                    <select class="vendor_nav" name="Branch" id="Branch">
                                        <option value=""> <?= $this->lang->line('All store') ?></option>
                                        <?php foreach ($branch_nav as $key => $v) : ?>
                                        <option value="<?= $v->id ?>"
                                            <?= (isset($_SESSION['branch_id']) && $v->id == $_SESSION['branch_id']) ? 'selected' : '' ?>>
                                            <?= $v->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </form>
                                <?php } ?>
                                <?php } ?>
                            </div>

                            <div class="header-search-wrap">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <?php if ($this->uri->segment(1) == '') { ?>
                                            <input type="text" class="form-control" id='search' data-search_val=""
                                                placeholder="Search vendor.." aria-label="Recipient's username">
                                            <button type="button" value="Search" class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </button>
                                            <?php } ?>

                                            <?php
                                            if ($this->uri->segment(1) != '') {
                                                $placeholder = $this->lang->line('Search product..');
                                            }
                                            $segment1 = $this->uri->segment(1);

                                            if ($segment1 != '') { ?>

                                            <input type="text" class="form-control search" id='myInput'
                                                data-search_val="" placeholder="<?= $placeholder ?>"
                                                aria-label="Recipient's username">

                                            <button type="button" value="Search" class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </button>

                                            <?php } ?>
                                        </div>
                                    </form>

                                    <button class="mobile-search-toggle">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>

                                    <!-- -----search-btn---- -->
                                    <div class="search-block search-list-blcok">
                                        <form class="search-form">
                                            <?php if ($this->uri->segment(1) == '') { ?>
                                            <input type="text" name="search" id='search' data-search_val=""
                                                class="search-input" placeholder="Search vendor..">
                                            <button type="button" value="Search" class="search-here-icon"><i
                                                    class="fa-solid fa-magnifying-glass "></i></button>
                                            <?php } ?>

                                            <?php
                                            if ($this->uri->segment(1) != '') {
                                                $placeholder = $this->lang->line('Search product..');
                                            }
                                            $segment1 = $this->uri->segment(1);

                                            if ($segment1 != '') { ?>

                                            <input type="text" class="form-control search" name="search" id='myInput'
                                                data-search_val="" placeholder="<?= $placeholder ?>"
                                                aria-label="Recipient's username">

                                            <button type="button" value="Search" class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </button>

                                            <?php } ?>

                                        </form>
                                        <i class="fa-solid fa-xmark main-div-cancel"></i>
                                    </div>
                                </div>

                                <div class="header-account-btn btn-group">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                        <svg width="27" height="27" viewBox="0 0 28 27" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z"
                                                stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10" />
                                            <path
                                                d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999"
                                                stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu user-login-drop"
                                        aria-labelledby="dropdownMenuClickableInside">
                                        <?php if ($this->session->userdata('user_id') == '') { ?>
                                        <li>
                                            <div class="user-login-header">
                                                <h4><?= $this->lang->line('New Customer') ?>?</h4>
                                                <a
                                                    href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-data-wrapper">
                                                <a href="<?= base_url() . 'login' ?>"><span><i
                                                            class="fa-solid fa-right-to-bracket"></i></span><?= $this->lang->line('Login Account') ?></a>
                                            </div>
                                        </li>
                                        <?php } else { ?>
                                        <li>
                                            <div class="user-login-header">
                                                <h4 href="#">
                                                    <?= $_SESSION['user_name'] . ' ' . $_SESSION['user_lname'] ?>
                                                </h4>
                                                <!-- ask for which tag DK -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-data-wrapper">
                                                <a href="<?= base_url() . 'users_account/users/account' ?>"><span><i
                                                            class="fa-sharp fa-solid fa-user"></i></span><?= $this->lang->line('My account') ?></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-data-wrapper">
                                                <a href="javascript:;" id="logout"><span><i
                                                            class="fa-solid fa-folder-plus"></i></span><?= $this->lang->line('logout') ?></a>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <div
                                    class="header-card-btn btn-group cart-in <?= (empty($this->cartCount)) ? 'no-itm' : '' ?>">
                                    <button class="dropdown-toggle position-relative cart-new-btn" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                        <svg width="27" height="29" viewBox="0 0 29 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 22H8.725L5.2375 2.825C5.1967 2.59537 5.07691 2.38722 4.89887 2.23657C4.72082 2.08592 4.49572 2.00223 4.2625 2H2"
                                                stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 27C11.3807 27 12.5 25.8807 12.5 24.5C12.5 23.1193 11.3807 22 10 22C8.61929 22 7.5 23.1193 7.5 24.5C7.5 25.8807 8.61929 27 10 27Z"
                                                stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M23 27C24.3807 27 25.5 25.8807 25.5 24.5C25.5 23.1193 24.3807 22 23 22C21.6193 22 20.5 23.1193 20.5 24.5C20.5 25.8807 21.6193 27 23 27Z"
                                                stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M7.8125 17H23.5125C23.98 17.0014 24.433 16.838 24.7919 16.5386C25.1508 16.2391 25.3927 15.8227 25.475 15.3625L27 7H6"
                                                stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <span class="h-badge" id="itemCount"
                                            <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                                    </button>
                                    <ul class="dropdown-menu cart-dropdowns" id='updated_list'
                                        aria-labelledby="dropdownMenuClickableInside">
                                        <div class="dropdown-title">
                                            <h4><?= $this->lang->line('My shopping cart') ?></h4>
                                            <a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
                                        </div>

                                        <?php if ($this->session->userdata('user_id') == '') { ?>
                                        <?php if (isset($this->cartCount)) {
                                                $CI = &get_instance();
                                                $CI->load->model('common_model');
                                                $default_product_image = $CI->common_model->default_product_image();
                                            } ?>
                                        <?php foreach ($this->session->userdata('My_cart') as $key => $value) {
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
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a
                                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>"><img
                                                            src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $product[0]->image ?>"
                                                            alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <a
                                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>">
                                                        <h4><?= $value['product_name'] ?></h4>
                                                    </a>
                                                    <p><?= $value['weight_no'] . ' ' . $value['weight_name'] ?></p>
                                                    <p>Qty : <?= $value['quantity'] ?></p>
                                                    <h3><?= $this->siteCurrency . ' ' . number_format((float)$product[0]->discount_price, 2, '.', '') ?>
                                                    </h3>
                                                </div>
                                                <div class="cancel-btn remove_item"
                                                    data-product_id="<?= $value['product_id'] ?>"
                                                    data-product_weight_id="<?= $value['product_weight_id'] ?>">
                                                    <a href="#" class="ms-0"><i
                                                            class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        <div>
                                            <div class="total-amount p-0 notranslate">
                                                <p><?= $this->lang->line('Total') ?></p>
                                                <h3 id="nav_subtotal">
                                                    <?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
                                            </div>
                                            <div class="drop-btns p-0">
                                                <a href="<?= base_url() . 'products/cart_item' ?>"
                                                    class="view-cart"><?= $this->lang->line('view cart') ?></a>
                                                <a href="<?= base_url() . 'checkout' ?>"
                                                    class="checkout"><?= $this->lang->line('checkout') ?></a>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        <?php if (isset($this->cartCount)) { ?>
                                        <?php foreach ($mycart as $key => $value) { ?>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a
                                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><img
                                                            src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value->image ?>"
                                                            alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <a
                                                        href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                                        <h4><?= $value->product_name ?></h4>
                                                    </a>
                                                    <p><?= $value->weight_no . ' ' . $value->weight_name ?></p>
                                                    <p>Qty : <?= $value->quantity ?></p>
                                                    <h3><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                                    </h3>
                                                </div>
                                                <div class="cancel-btn remove_item"
                                                    data-product_id="<?= $value->product_id ?>"
                                                    data-product_weight_id="<?= $value->product_weight_id ?>">
                                                    <a href="#" class="ms-0"><i
                                                            class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        <div>
                                            <div class="total-amount p-0 notranslate">
                                                <p><?= $this->lang->line('Total') ?></p>
                                                <h3 id="nav_subtotal">
                                                    <?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
                                            </div>
                                            <div class="drop-btns p-0">
                                                <a href="<?= base_url() . 'products/cart_item' ?>"
                                                    class="view-cart"><?= $this->lang->line('view cart') ?></a>
                                                <a href="<?= base_url() . 'checkout' ?>"
                                                    class="checkout"><?= $this->lang->line('checkout') ?></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-search-wrap cart-for-mobile">
                            <div class="header-account-btn btn-group">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <svg width="27" height="27" viewBox="0 0 28 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z"
                                            stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10" />
                                        <path
                                            d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999"
                                            stroke="#CC833D" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="header-card-btn btn-group">
                                <button class="dropdown-toggle position-relative" type="button"
                                    id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    <img src="<?= $this->theme_base_url ?>/assets/images/cart.svg" alt="" />

                                    <span class="h-badge"
                                        <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
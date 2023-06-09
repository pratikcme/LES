<!-- <header>
    <div class="container position-relative">
        <img src="<?= $this->theme_base_url ?>/assets/images/home/light.png" class="position-absolute light-image"
            alt="light" />
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= $this->theme_base_url ?>/assets/images/logo.svg" alt="logo" />
                        </a>
                        <div class="navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
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
</header> -->


<header>
    <div class="cart-drop-ovalay"></div>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sports-text">
                        <p>Welcome to <span>Miri Toys</span> and Kids shop!</p>
                        <div class="drp-grp">
                            <a href="tel:" class="header-top-contact">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_40_2012)">
                                            <path
                                                d="M12.843 11.3546C12.9295 11.297 13.0291 11.2619 13.1326 11.2525C13.2362 11.2431 13.3404 11.2597 13.4359 11.3007L17.1203 12.9515C17.2445 13.0046 17.3481 13.0964 17.4157 13.2133C17.4833 13.3302 17.5112 13.4658 17.4953 13.5999C17.3739 14.507 16.9273 15.3391 16.2383 15.9415C15.5494 16.5439 14.6652 16.8756 13.75 16.8749C10.9321 16.8749 8.22957 15.7555 6.23699 13.7629C4.24442 11.7704 3.125 9.06785 3.125 6.24992C3.1243 5.33477 3.456 4.45051 4.05841 3.76159C4.66082 3.07267 5.49293 2.62599 6.4 2.50461C6.53409 2.48868 6.66973 2.5166 6.78662 2.5842C6.90351 2.6518 6.99537 2.75544 7.04844 2.87961L8.69922 6.56711C8.73978 6.66182 8.7563 6.76509 8.7473 6.86772C8.7383 6.97036 8.70407 7.06918 8.64766 7.15539L6.97813 9.14055C6.9189 9.22991 6.88388 9.33311 6.87649 9.44006C6.86909 9.547 6.88958 9.65404 6.93594 9.7507C7.58203 11.0734 8.94922 12.4241 10.2758 13.064C10.373 13.1101 10.4805 13.1302 10.5878 13.1221C10.695 13.114 10.7983 13.0781 10.8875 13.0179L12.843 11.3546Z"
                                                stroke="#F9F6FC" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_40_2012">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <p>+91 93270 13225</p>
                            </a>

                            <div class="header-top-user">
                                <button class="user-login-icon">
                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 15C15.3137 15 18 12.3137 18 8.99999C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 8.99999C6 12.3137 8.68629 15 12 15Z"
                                                stroke="#FFE3CE" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.90625 20.2499C3.82775 18.6534 5.15328 17.3277 6.74958 16.406C8.34588 15.4843 10.1567 14.999 12 14.999C13.8433 14.999 15.6541 15.4843 17.2504 16.406C18.8467 17.3277 20.1722 18.6534 21.0937 20.2499"
                                                stroke="#FFE3CE" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <?= $this->lang->line('Account') ?>
                                </button>
                                <div class="user-login-dropdow">
                                    <?php if ($this->session->userdata('user_id') == '') { ?>
                                    <div class="user-login-header">
                                        <h4><?= $this->lang->line('New Customer') ?>?</h4>
                                        <h3><a
                                                href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a>
                                        </h3>
                                    </div>
                                    <div class="user-data-wrapper">
                                        <a href="<?= base_url() . 'login' ?>"><span><i
                                                    class="fa-solid fa-right-to-bracket"></i></span><?= $this->lang->line('Login Account') ?></a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="user-data-wrapper">
                                        <a
                                            href="javascript:;"><?= $_SESSION['user_name'] . ' ' . $_SESSION['user_lname'] ?></a>
                                    </div>
                                    <div class="user-data-wrapper">
                                        <a href="<?= base_url() . 'users_account/users/account' ?>"><span><i
                                                    class="fa-sharp fa-solid fa-user"></i></span><?= $this->lang->line('My account') ?></a>
                                    </div>
                                    <div class="user-data-wrapper">
                                        <a href="javascript:;" id="logout"><span><i
                                                    class="fa-solid fa-folder-plus"></i></span><?= $this->lang->line('logout') ?></a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-bottom">
        <div class="container position-relative">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= $this->theme_base_url ?>/assets/img/home/header-logo.png" alt="logo" />
                        </a>
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

                        <div class="navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url() . 'products' ?>"><?= $this->lang->line('Shop') ?></a>
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
                        </div>
                        <div class="header-icons">
                            <button class="search-icon search-toggle">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_23_2896)">
                                        <path
                                            d="M14.028 24.5267C19.8264 24.5267 24.5269 19.8262 24.5269 14.0278C24.5269 8.22936 19.8264 3.52881 14.028 3.52881C8.22954 3.52881 3.52899 8.22936 3.52899 14.0278C3.52899 19.8262 8.22954 24.5267 14.028 24.5267Z"
                                            stroke="#FFE3CE" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.4523 21.4526L27.5267 27.527" stroke="#FFE3CE" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_23_2896">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <!-- ----search-toggle--- -->
                            <div class="search-block search-list-blcok">
                                <form class="search-form">


                                    <?php if ($this->uri->segment(1) == '') { ?>

                                    <input type="text" name="search" id='search' data-search_val="" class="search-input"
                                        placeholder="Search vendor...">
                                    <i class="fa-solid fa-magnifying-glass search-here-icon"></i>

                                    <?php } ?>



                                    <?php
                                    if ($this->uri->segment(1) != '') {
                                        $placeholder = $this->lang->line('Search product..');
                                    }
                                    $segment1 = $this->uri->segment(1);

                                    if ($segment1 != '') { ?>

                                    <input type="text" class="search-input" name="search" id='myInput'
                                        data-search_val="" placeholder="<?= $placeholder ?>"
                                        aria-label="Recipient's username">

                                    <i class="fa-solid fa-magnifying-glass search-here-icon"></i>
                                    </button>

                                    <?php } ?>
                                </form>
                                <i class="fa-solid fa-xmark search-cancel-btn" id="search-cancel-btn"></i>
                            </div>



                            <button class="cart-icon cart-icons">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_40_1641)">
                                        <path
                                            d="M24.5893 5.46436H4.5536C4.05062 5.46436 3.64288 5.8721 3.64288 6.37507V22.7679C3.64288 23.2709 4.05062 23.6786 4.5536 23.6786H24.5893C25.0923 23.6786 25.5 23.2709 25.5 22.7679V6.37507C25.5 5.8721 25.0923 5.46436 24.5893 5.46436Z"
                                            stroke="#662E87" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3.64288 9.10718H25.5" stroke="#662E87" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M19.125 12.75C19.125 13.9577 18.6453 15.1159 17.7913 15.9699C16.9374 16.8238 15.7791 17.3036 14.5715 17.3036C13.3638 17.3036 12.2056 16.8238 11.3516 15.9699C10.4976 15.1159 10.0179 13.9577 10.0179 12.75"
                                            stroke="#662E87" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_40_1641">
                                            <rect width="29.1429" height="29.1429" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="h-badge" id="itemCount"
                                    <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                            </button>

                            <!-- -----cart-dropdown--- -->
                            <div class="cart-dropdwon">
                                <div class="cart-drop-title">
                                    <h4><?= $this->lang->line('My shopping cart') ?></h4>
                                    <span class="cart-cancel-btn"><i class="fa-solid fa-xmark"></i></span>
                                </div>
                                <div class="cart-drop-wrapper">

                                    <?php if ($this->session->userdata('user_id') == '') { ?>
                                    <?php if (isset($this->cartCount)) {
                                                $CI = &get_instance();
                                                $CI->load->model('common_model');
                                                $default_product_image = $CI->common_model->default_product_image();
                                            } ?>
                                    <?php foreach ($this->session->userdata('My_cart') as $key => $value) {
                                                $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
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

                                    <div class="cart-drop-menu cart-drop-menu-1">
                                        <a href="./product-detail.php" class="drop-img">
                                            <img src="<?= $this->theme_base_url ?>/assets/img/myaccount/wishlist-img-1.png"
                                                alt="">
                                        </a>
                                        <div class="drop-text">
                                            <h4><a href="./product-detail.php">Kids Puzzle Round Shape Toy</a></h4>
                                            <p>Qty : 1</p>
                                            <h3>₹250.00</h3>
                                        </div>
                                        <div class="cancel-btn">
                                            <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                                        </div>
                                    </div>

                                </div>

                                <div class="total-amount">
                                    <p>Total</p>
                                    <h3>₹729.00</h3>
                                </div>

                                <div class="drop-btns">
                                    <a href="./shop-cart.php" class="view-cart cmn-btn">view cart</a>
                                    <a href="./checkout.php" class="checkout cmn-btn">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</header>

<!-- -------mobile-device-navbar--- -->
<div class="mobile-navbar">
    <div class="container">
        <div class="mobile-nav">
            <ul>
                <li><a href="./index.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a></li>
                <li><a href="./product-list.php"><span><i class="fa-solid fa-store"></i></span>Shop</a></li>
                <li><a href="./about-us.php"><span><i class="fa-regular fa-user"></i></span>About</a></li>
                <li><a href="./contact-us.php"><span><i class="fa-regular fa-circle-user"></i></span>Contact</a></li>
            </ul>
        </div>
    </div>
</div>
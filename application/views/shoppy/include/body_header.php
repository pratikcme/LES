<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="loader-main d-none">
                    <!-- <div class="loader-wrapper">
                        <div class="dots dot2">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div> -->
                </section>
                <!-- -----header-top---- -->
                <div class="header-top">
                    <div class="logo">
                        <a href="<?= base_url() ?>"><img src=" <?= $this->siteLogo ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
</header>



<div class="header-cart-in">
    <a href="<?= base_url() . 'products/cart_item' ?>">
        <div class=" header-cart-respo">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="g-badge <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'd-block' : 'd-none' ?>" id="itemCountMobile"><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
        </div>
    </a>
</div>




<div class="header-cart-in">
    <a href="<?= base_url() . 'products/cart_item' ?>">
        <div class=" header-cart-respo">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="g-badge <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'd-block' : 'd-none' ?>" id="itemCountMobile"><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
        </div>
    </a>
</div>
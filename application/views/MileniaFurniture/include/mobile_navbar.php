<!-- -------mobile-device-navbar--- -->
<!-- <div class="mobile-navbar">
    <div class="container">
      <div class="mobile-nav">
        <ul>
          <li><a href="./index.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a></li>
          <li><a href="./p-listing-2.php"><span><i class="fa-solid fa-store"></i></span>Shop</a></li>
          <li><a href="./sign-in-page.php"><span><i class="fa-regular fa-user"></i></span>Login</a></li>
          <li><a href="./contact.php"><span><i class="fa-regular fa-circle-user"></i></span>Contact</a></li>
        </ul>
      </div>
    </div>
</div>

<div class="header-cart-in">
    <a href="./shop-cart.php">
      <div class=" header-cart-respo">
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
    </a>
</div> -->

<div class="mobile-navbar">
  <div class="container">
    <div class="mobile-nav">
      <ul>
        <li><a href="<?= base_url() ?>home"><span><i class="fa fa-home" aria-hidden="true"></i></span><?= $this->lang->line('home') ?></a>
        </li>
        <li><a href="<?= base_url() ?>products"><span><i class="fa-solid fa-store"></i></span><?= $this->lang->line('Shop') ?></a></li>
        <li><a href="<?= base_url() ?>login"><span><i class="fa-regular fa-user"></i></span><?= $this->lang->line('About Us') ?></a></li>
        <li><a href="<?= base_url() ?>contact"><span><i class="fa-regular fa-circle-user"></i></span><?= $this->lang->line('Contact Us') ?></a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="header-cart-in">
  <a href="<?= base_url() ?>products/cart_item">
    <div class=" header-cart-respo">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </a>
</div>
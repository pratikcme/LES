<div class="container">
    <div class="mobile-nav">
      <ul>
        <li><a href="<?=base_url().'home'?>"><span><i class="fa fa-home" aria-hidden="true"></i></span><?=$this->lang->line('home')?></a></li>
        <li><a href="<?=base_url().'products'?>"><span><i class="fa-solid fa-store"></i></span><?=$this->lang->line('Shop')?><</a></li>
        <li><a href="<?=base_url().'about'?>"><span><i class="fa-solid fa-circle-info"></i></span><?=$this->lang->line('About Us')?></a></li>
        <li><a href="<?=base_url().'contact'?>"><span><i class="fa-regular fa-circle-user"></i></span><?=$this->lang->line('Contact Us')?></a></li>
      </ul>
    </div>
</div>
<div class="header-cart-in">
  <a href="<?= base_url() ?>products/cart_item">
    <div class=" header-cart-respo">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </a>
</div>
    
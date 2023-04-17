<html lang="en">

<head>
  <?php
  $this->load->view($_SESSION['template_name'] . '/include/header'); ?>
  <style>
    label.error {
      color: red
    }
  </style>
</head>
<!-- <body class="rtl" dir="rtl"> -->

<body>
  <section class="loader-main d-none">
    <div class="loader-wrapper">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
  </section>
  <header>
    <?php $this->load->view($_SESSION['template_name'] . '/include/body_header'); ?>
  </header>
  <!-- -------mobile-device-navbar--- -->
  <div class="mobile-navbar">
    <?php $this->load->view($_SESSION['template_name'] . '/include/mobile_navbar'); ?>
    <div class="floting-cart-btn">
    <a href="./shop-cart.php" class="mobile-cart-btn"><img src="<?=$this->theme_base_url?>/assets/images/header-cart-icon.svg" alt="cart"></a>
</div>
  </div>
  <?php
  if ($this->session->flashdata('myMessage') != '') {
    echo $this->session->flashdata('myMessage');
    // die;
  }  ?>
  <?php $this->load->view($page); ?>
  <footer>
    <?php $this->load->view($_SESSION['template_name'] . '/include/body_footer'); ?>
    <input type="hidden" id="site_lang" value="<?= $_SESSION['site_lang'] ?>">
    <input type="hidden" id="imageFolder" value="<?= $this->folder ?>">
  </footer>
  <?php $this->load->view($_SESSION['template_name'] . '/include/footer'); ?>
</body>

</html>
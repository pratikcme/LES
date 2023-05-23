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
    <?php $this->load->view($_SESSION['template_name'] . '/include/body_header'); ?>
    <!-- -------mobile-device-navbar--- -->

    <?php $this->load->view($_SESSION['template_name'] . '/include/mobile_navbar'); ?>

    <?php
  if ($this->session->flashdata('myMessage') != '') {
    echo $this->session->flashdata('myMessage');
    // die;
  }  ?>
    <?php $this->load->view($page); ?>

    <?php $this->load->view($_SESSION['template_name'] . '/include/body_footer'); ?>
    <input type="hidden" id="theme_base_url" value="<?=$this->theme_base_url?>">
    <input type="hidden" id="site_lang" value="<?= $_SESSION['site_lang'] ?>">
    <input type="hidden" id="imageFolder" value="<?= $this->folder ?>">
    <?php $this->load->view($_SESSION['template_name'] . '/include/footer'); ?>
</body>

</html>
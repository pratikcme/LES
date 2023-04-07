<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$this->siteTitle?></title>

  <!-- --------- style.css link------ -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/frontend/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$this->theme_base_url.'/assets/css/style.css'?>">

  <!-- --------- animate-css--- -->
  <link rel="stylesheet" href="<?=$this->theme_base_url.'/assets/css/animate.css'?>">

  <!-- ------owl-min-css------ -->
  <link rel="stylesheet" href="<?=$this->theme_base_url.'/assets/css/owl.carousel.min.css'?>">

  <!-- ------owl-theme-min-css------ -->
  <link rel="stylesheet" href="<?=$this->theme_base_url.'/assets/css/owl.theme.green.min.css'?>">

    <!-- --css animate-lin---- -->
    <link rel="stylesheet" href="<?=$this->theme_base_url.'/assets/css/animate.css'?>">

  <!-- ----------font-awesome-icon-link----- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

  <!-- -----swiper-slider-css----- -->
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <!-- ----product-hover-zoom-css----- -->
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/drift-basic.css'>
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
<?php $lang = json_encode($this->lang->language);
  // dd($lang);
?>
<script type="text/javascript">
    var language = <?=$lang; ?>;
</script>
<input type="hidden" id="siteCurrency" value="<?=$this->siteCurrency?>">
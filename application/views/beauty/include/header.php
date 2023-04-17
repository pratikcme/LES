<title>Butterfly-Beauty-Shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

  <!-- stle-css -->
  <link rel="stylesheet" href="<?=$theme_base_url?>/assets/css/style.css">

  <!-- bootstrap-link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- font-awesome-cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- -----swiper-slider-css----- -->
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  
  <!-- wow css -->
  <link rel="stylesheet" href="<?=$theme_base_url?>/assets/css/animate.css">

      <!-- ------owl-min-css------ -->
  <link rel="stylesheet" href="<?=$theme_base_url?>/assets/css/owl.carousel.min.css">

  <!-- ------owl-theme-min-css------ -->
  <link rel="stylesheet" href="<?=$theme_base_url?>/assets/css/owl.theme.green.min.css">

  <!-- owl-carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <!-- -----responsive-table-css--- -->
  <link rel="stylesheet" href="<?=$theme_base_url?>/assets/css/basictable.min.css">
  
  <!-- <link rel='stylesheet' href='https://unpkg.com/xzoom/dist/xzoom.css'> -->

  <!-- ----product-hover-zoom-css----- -->
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/drift-basic.css'>
  
  <!-- Bootstrap datepicker CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
    
  <?php $lang = json_encode($this->lang->language);
  // dd($lang);
  ?>
<script type="text/javascript">
    var language = <?=$lang; ?>;
</script>
<style>

/* google traslater*/
body {
top: 0px !important; 
}

.goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget {
    color: transparent !important;
}

.goog-te-banner-frame.skiptranslate {
display: none !important;
} 
.goog-te-gadget .goog-te-combo {
    margin: 4px 0;
    width: 150px !important;
}

.VIpgJd-ZVi9od-ORHb-OEVmcd.skiptranslate{
  display:none !important;
}
.VIpgJd-ZVi9od-l4eHX-hSRGPd{
  display :none !important;
}
</style>
</style>
<input type="hidden" id="siteCurrency" value="<?=$this->siteCurrency?>">
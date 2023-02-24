<!DOCTYPE html >
<html lang="en" dir=<?=($_SESSION['site_lang'] == 'ar') ? 'rtl' : 'ltr' ?>>
<head>
 <?php $this->load->view('frontend/include/header'); ?>
</head>
<body class="<?=($_SESSION['site_lang'] == 'ar') ? 'rtl' : 'ltr' ?>" >
<!-- =================HEADER SECTION================= -->
<header>
  <div class="header-top-nav" style="display: none">
   <?php $this->load->view('frontend/include/top_navbar'); ?>
  </div>
  <div class="navigation-bar">
     <?php $this->load->view('frontend/include/navbar'); ?>
  </div>
</header>
<style type="text/css">
  #cart_value{
    display: none;
  }
.goog-te-combo {
    border: 0px !important; 
    color: var(--secondary-color) !important;
    font-weight: bold !important;
    padding: 0px !important;
    position: relative !important;
    box-shadow: none !important;
    left: 0 !important;
    padding: 0px 10px !important;
    width: 100% !important;
    max-width: 150px !important;
    box-sizing: border-box !important;
    height: 50px !important;
    border-radius: 3px !important;
    z-index: 1 !important;
    position: relative !important;
    top: 8px !important;
    margin: 0px !important;
    left: -9px !important;
}
.VIpgJd-ZVi9od-l4eHX-hSRGPd{
  display: none;
}
</style>

<?php 
if($this->session->flashdata('myMessage') != ''){
    echo $this->session->flashdata('myMessage');
    // die;
}  
?>
<!-- =================Dynamic page================= -->

	<?php $this->load->view($page);?>

<!-- =================End dynamic page================= -->

<!-- =================SOCIAL SECTION================= -->
<section class="bg-light-blue social-main-wrapper">
  <?php $this->load->view('frontend/include/social_link'); ?>
</section>
<!-- =================FOOTER================= -->
<footer class="p-50" style="background: #fff;">
  <?php $this->load->view('frontend/include/footer_nav'); ?>
</footer>
<!-- =================BOTTOM FOOTER================= -->
<input type="hidden" id="site_lang" value="<?=$_SESSION['site_lang']?>">
<?php $this->load->view('frontend/include/footer'); ?>
</body>
<div id="backdrop"></div>
<div class="success-card-wrapper" id="pupup_message" style="display: none;">
	<div class="success-card">
        <div class="icon-container">
           
                <span class="bubble-1"></span>
                <span class="bubble-2"></span>
                <span class="bubble-3"></span>

                <span class="bubble-4"></span>
                <span class="bubble-5"></span>
                <span class="bubble-6"></span>
     
            <span> <i class="fas fa-check"></i></span>
        </div>
        <div class="success-msg">
            <h4>success</h4>
            <p>Your Item is added to cart successfully</p>
        </div>
</div>
</div>
</html>
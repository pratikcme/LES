<!-- ----hero-section-- -->
<section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>My Account</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Term & Conditions')?></li>
        </ol>
      </nav>
    </div>
</section>

<section class="privay-policy section">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-top-right-img.svg" alt="" class="checkout-top-right-img">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-mid-left-img.svg" alt="" class="checkout-mid-left-img">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
                <h2 class="text-center mb-3"><?=$term[0]->title?></h2>
                <?=$term[0]->sub_title?>
           </div>
       </div>
   </div>
</section>


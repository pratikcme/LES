<!-- ----hero-section-- -->
<section class="hero-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('Term & Conditions')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Term & Conditions')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>



<section class="privay-policy p-100">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
                <h2 class="text-center mb-3"><?=$term[0]->title?></h2>
                <?=$term[0]->sub_title?>
           </div>
       </div>
   </div>
</section>





  <!-- ----hero-section--- -->
  <section class="hero-section listing-hero-sec common-banner-bg">
    <div class="container">
      <!-- <h2>Home /<span>My Account</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href=""><?=$this->lang->line('home')?></a></li>
          <li class="breadcrumb-item check-show active" aria-current="page"><?=$this->lang->line('vendor')?></li>
        </ol>
      </nav>
    </div>
  </section>

  <section class="vendors contact-us-section section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <h2><?=$this->lang->line('vendor')?></h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                </div>
            </div>

            <div class="vendor-main">
                 <!-- <h2>New York, USA</h2> -->

                 <div class="row" id="vendorByajax">
                 <?php foreach ($branch as $key => $value) { ?>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <a href="javascript:"   data-ven_id="<?=$value->id?>" class="vendor-wrapper vendor <?=(isset($_SESSION['branch_id']) && $value->id == $_SESSION['branch_id']) ? 'active' : '' ?>">
                            <div class="circle-img"></div>
                            <div class="vendor-left">
                                <img src="<?=base_url().'public/images/'.$this->folder.'vendor_shop/'.$value->image ?>" alt="">
                            </div>
                            <div class="vendor-right">
                                <h3><?=$value->name?></h3>

                                <div class="contact-vendor">
                                    <div class="contact-content">
                                        <span><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.00056 8.43813C8.96736 8.43813 9.75112 7.65438 9.75112 6.68757C9.75112 5.72076 8.96736 4.93701 8.00056 4.93701C7.03375 4.93701 6.25 5.72076 6.25 6.68757C6.25 7.65438 7.03375 8.43813 8.00056 8.43813Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.3739 6.68792C12.3739 10.6267 7.99749 13.6902 7.99749 13.6902C7.99749 13.6902 3.62109 10.6267 3.62109 6.68792C3.62109 5.52723 4.08218 4.41407 4.90291 3.59334C5.72364 2.77261 6.8368 2.31152 7.99749 2.31152C9.15818 2.31152 10.2713 2.77261 11.0921 3.59334C11.9128 4.41407 12.3739 5.52723 12.3739 6.68792V6.68792Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg></span>
                                        <h6><?=$value->address?></h6>
                                    </div>
                                    <div class="contact-content">
                                        <span>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 11.8124V2.18705C10.5 1.70378 10.1082 1.31201 9.62497 1.31201L4.37476 1.31201C3.89149 1.31201 3.49972 1.70378 3.49972 2.18705L3.49972 11.8124C3.49972 12.2957 3.89149 12.6875 4.37476 12.6875H9.62497C10.1082 12.6875 10.5 12.2957 10.5 11.8124Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.00003 3.93706C7.36248 3.93706 7.6563 3.64324 7.6563 3.28079C7.6563 2.91834 7.36248 2.62451 7.00003 2.62451C6.63757 2.62451 6.34375 2.91834 6.34375 3.28079C6.34375 3.64324 6.63757 3.93706 7.00003 3.93706Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <h6>+91-<?=$value->phone_no?></h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                 </div>
            </div>
        </div>
       
    </div>
    
  </section>

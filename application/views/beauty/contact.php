  <!-- ----hero-section--- -->
  <section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>Contact Us</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url()?>"><?=$this->lang->line('home')?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('Contact us')?></li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- ------------contact-us-section------------ -->
  <section class="contact-us-section section">
    <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-left-img.png" alt="" class="product-detail-top-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/product-detail-top-right-img.png" alt="" class="product-detail-top-right-img">
    <img src="<?=$this->theme_base_url?>/assets/images/product-bottom-right-img.png" alt="" class="product-bottom-right-img">
       <div class="container">
            <h2 class="title text-center"><?=$this->lang->line('Get In')?> <span><?=$this->lang->line('Touch')?></span></h2>
            <!-- <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-md-12 wow bounceIn"  data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
                <form id="form" method="post" action="<?=base_url().'contact'?>">
                  <div class="left-contact-wrapper">
                    <div class="mb-3">
                      <label for="fname" class="form-label"><?=$this->lang->line('First Name')?></label>
                      <input type="text" name="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="<?=$this->lang->line('First Name')?>">
                      <label for="fname" class="error"><?=form_error('fname')?></label>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"><?=$this->lang->line('Email')?> </label>
                      <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?=$this->lang->line('Email')?>">
                      <label for="email" class="error"><?=form_error('email')?></label>
                    </div>
                    <div class="mb-3">
                      <label for="phone-num" class="form-label"><?=$this->lang->line('Phone')?></label>
                      <input type="tel" name="mobile_no" class="form-control" id="phone-num" aria-describedby="phone-num" placeholder="<?=$this->lang->line('Phone')?>">
                      <label for="mobile_no" class="error"><?=form_error('mobile_no')?></label>
                    </div>
                    <div class="mb-3">
                      <label for="message"  class="form-label"><?=$this->lang->line('Message')?></label>
                      <textarea name="message" cols="0" rows="0" placeholder="<?=$this->lang->line('Message')?>"></textarea>
                      <label for="message" class="error"><?=form_error('message')?></label>
                    </div>
                    <div class="submit-btn">
                    <button type="submit" class="common-input-btn btn" name="submit" id="btnSubmit"><?=$this->lang->line('send')?></button>
                    <!-- <a href="#" >Submit</a> -->
                  </div>
                </form>
                </div>
              </div>
              <div class="contact-right-content col-xxl-6 col-xl-6 col-md-12 wow bounceIn"  data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="right-contact-wrapper">
                    
                    <!-- ----right-contact-content--- -->
                   <div class="right-contact-main">
                    <span class="right-contact"><i class="fa-solid fa-location-dot"></i></span>

                    <div class="right-contact-text">
                        <h3><a href="javascript:"><?=$this->lang->line('Location')?></a></h3>
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_us_address?></a></h4>
                    </div>
                   </div>

                   <div class="right-contact-main">
                    <span class="right-contact"><i class="fa-regular fa-envelope"></i></span>

                    <div class="right-contact-text">
                        <h3><a href="javascript:"><?=$this->lang->line('Email')?></a></h3>
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_email?></a></h4>
                    </div>
                   </div>

                   <div class="right-contact-main">
                    <span class="right-contact"><i class="fa-solid fa-mobile"></i></span>

                    <div class="right-contact-text">
                        <h3><a href="javascript:"><?=$this->lang->line('Phone')?></a></h3>
                        <h4><a href="javascript:"><?=$appLinks[0]->contact_number?></a></h4>
                    </div>
                   </div>

                </div>
              </div>
            </div>
       </div>
  </section>
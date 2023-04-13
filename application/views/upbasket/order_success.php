<section class="p-100 bg-cream">
  <div class="container">
  <?php if($status == 1){ ?>
  <!-- The Modal -->
    <div id="order_success" class="modal">
        <div class="container"> 
          <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page">
              <div class="container">
                <img src="<?=$this->theme_base_url?>/assets/images/login-center-border-img.png" alt="" class="login-center-border-img">
                  <div class="center-img">
                      <img src="<?=$this->theme_base_url?>/assets/images/login-center-img.png" alt="">
                  </div>
                  <h2><?=$this->lang->line('Thanks for shopping')?>.</h2>
                  <h3><?=$this->lang->line('Order placed successfully')?></h3>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  <h5 id="orderId"><?=$this->lang->line('Your Order No')?> : <?=$order_number?></h5>
                  <div class="continue-btn">
                    <a href="<?=base_url().'home'?>"><?=$this->lang->line('continue shopping')?></a>
                  </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
  <?php } ?>
  <?php if($status == '0'){ ?>
    <!-- The Modal -->
    <div class="modal" id="payment_fail">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal body -->
          <div class="modal-body text-center">
              <div>
                  <h3>payment failed</h3>
              </div>
              <div class="my-3">
                  <i class="fas fa-ban"></i>
              </div>
              <div>
                  <p><?=$message?></p>
              </div>
              <div>
                  <a href="<?=base_url().'home'?>" class="retry_btn">continue shopping</a>
              </div>
          </div>
          
        </div>
      </div>
    </div>    
   <?php } ?>
    
    </div>
</section>

 <input type="hidden" id="base_url" value="<?=base_url()?>">

 
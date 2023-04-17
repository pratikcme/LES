
  <!-- -----login-section----- -->
  <div class="login-section forgot-section section">
    <div class="container">
        <div class="row">
          <div class="forgot-left col-xxl-6 col-lg-6 col-md-6">

            <!-- --------login-left-content---- -->
            <div class="login-left-content">
              <h2 class="title">Forgot password?</h2>
              <p class="pera">No worries, we'well send you reset intructions.</p>
              
              <!-- ---------forgot-deails-wrappper----- -->
            <form id="ForgetForm" method="post" action="<?=base_url().'login/forget_password'?>">
                <div class="login-deatils-wrapper signin-deatils-wrapper">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="<?=$this->lang->line('Enter Email*')?>">
                    <label for="email" class="error"><?=@form_error('email')?></label>
                  </div>

                  <div class="sign-in-btn reset-password-btn">
                  <input class="common-input-btn" type="submit" id="btnSubmit"  value="<?=$this->lang->line('Reset Password')?>"/>
                  <!-- <a href="#">Reset Password</a> -->
                  </div> 

                  <h3><span><i class="fa-solid fa-arrow-left"></i></span> Back to <a href="<?=base_url().'register'?>"><?=$this->lang->line('Sign up')?></a></h3>
                </div>
            </form>
          </div>
          </div>
          
          <!-- ------login-right-image-- -->
          <div class="login-images col-xxl-6 col-lg-6 col-md-6">
            <img src="<?=$this->theme_base_url?>/assets/images/forgot-stars-img.svg" alt="" class="login-say-img forgot-stars-img">
            <!-- <img src="<?=$this->theme_base_url?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img"> -->
            <img src="<?=$this->theme_base_url?>/assets/images/forgot-plant-img.svg" alt="" class="forgot-plant-img">
            <img src="<?=$this->theme_base_url?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">

            <div class="login-img-part forgot-password-img-part">
                <img src="<?=$this->theme_base_url?>/assets/images/forgot-passowrd-main-img.svg" alt="">
            </div>
          </div>
        </div>
    </div>
  </div>
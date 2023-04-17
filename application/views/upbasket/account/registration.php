<!-- -----login-section----- -->
<div class="login-section section">
    <div class="container">
        <div class="row">
          <div class="col-xxl-6 col-lg-6 col-md-6">

             <!-- --------login-left-content---- -->
            <div class="login-left-content">
              <h2 class="title"><?=$this->lang->line('Sign up')?></h2>
              <p class="pera">Let’s create your account</p>
              
              <!-- ---------signin-deails-wrappper----- -->
              <form id="RegisterForm" method="post" action="<?=base_url().'register'?>">
              <div class="login-deatils-wrapper signin-deatils-wrapper">
                <div class="row">
                  <div class="col-xxl-6">
                    <div class="mb-3">
                      <label for="fname" class="form-label">First Name<span>*</span></label>
                      <input type="text" name="fname" placeholder="<?=$this->lang->line('First Name*')?>">
                    </div>
                  </div>

                  <div class="col-xxl-6">
                    <div class="mb-3">
                      <label for="lname" class="form-label">Last Name<span>*</span></label>
                      <input type="text" name="lname" placeholder="<?=$this->lang->line('Last Name*')?>">
                    </div>
                  </div>

                  <div class="col-xxl-12">
                      <div class="mb-3">
                        <label for="cars">Select Country Code<span>*</span></label><br>
                          <select name="country_code" id="country_code" class="input-wrapper">
                            <option value=""><?=$this->lang->line('select country code')?></option>
                            <?php foreach(GetDialcodelist() as $key => $value){ ?>
                              <option value="<?=$key;?>"><?=$value;?></option>
                            <?php } ?> 
                          </select>
                      </div>
                    </div>

                  <div class="col-xxl-12">
                    <div class="mb-3">
                      <label for="Country-code" class="form-label">Mobile Number<span>*</span></label>
                      <input  type="text" name="phone"  class="mob_no" placeholder="<?=$this->lang->line('Mobile Number*')?>">
                    </div>
                  </div>

                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email<span>*</span></label>
                  <input type="text" name="email" placeholder="<?=$this->lang->line('Email*')?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password<span>*</span></label>
                  <input type="password" name="password" placeholder="<?=$this->lang->line('password*')?>"  id="password" autocomplete=off>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password<span>*</span></label>
                  <input type="password" name="confirm_password" placeholder="<?=$this->lang->line('Confirm password*')?>"  id="confirm_password" >
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="term_policy" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    By creating an account, you agree to our <a href="<?=base_url().'terms_condition'?>">Terms Of Conditions</a> and <a href="<?=base_url().'privacy_policy'?>">Privacy Policy.</a>   
                  </label>
                </div>


                <button type="submit" class="sign-in-btn signin-btn-green"><?=$this->lang->line('Sign up')?></button> 
                
                <p>Or</p>

                <div class="log-in-btn">
                  <a href="<?=$googleUrl?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span>Login with Google</a>
                  <a href="<?=base_url().'login/fb_login'?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span>Login with Facebook</a>
                </div>

                <h3>Already have an account? <a href="<?=base_url().'login'?>">Sign in</a></h3>
              </div>
              </form>
              
            </div>
          </div>

          <!-- ------login-right-image-- -->
          <div class="login-images col-xxl-6 col-lg-6 col-md-6">
            <img src="<?=$this->theme_base_url?>/assets/images/login-say-img.svg" alt="" class="login-say-img">
            <img src="<?=$this->theme_base_url?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img">
            <img src="<?=$this->theme_base_url?>/assets/images/login-tree-img.svg" alt="" class="login-tree-img">
            <img src="<?=$this->theme_base_url?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
            <div class="login-img-part">
                <img src="<?=$this->theme_base_url?>/assets/images/login-girl-img.svg" alt="">
            </div>
          </div>
        </div>
    </div>
  </div>
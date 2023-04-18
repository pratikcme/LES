<!-- ----hero-section--- -->
<section class="hero-section login-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('My Account')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('My Account')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="login-section forgot-section p-100">
    <img src="<?=$this->theme_base_url?>/assets/images/login-imges/login-wave-img.png" alt="" class="login-wave-img">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-6">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------signin-deails-wrappper----- -->
                    <div class="login-deatils-wrapper signin-deatils-wrapper">
                    <h2 class="title"><?=$this->lang->line('Forgot password')?>?</h2>
                        <!-- <p class="pera">No worries, we’well send you reset intructions.</p> -->
                        <form id="ForgetForm" method="post" action="<?=base_url().'login/forget_password'?>">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?=$this->lang->line('Email')?></label>
                                <input type="text" name="email" class="form-control"  placeholder="<?=$this->lang->line('Enter Email*')?>">
                            </div>

                            <div class="sign-in-btn reset-password-btn tab-save-btn" >
                                <!-- <button type="button">Reset Password</button> -->
                                <button type="submit" id="btnSubmit" class="btn create-btn"><?=$this->lang->line('Reset Password')?></button>
                            </div>

                            <h3><span><i class="fa-solid fa-arrow-left"></i></span> Back to <a href="<?=base_url().'register'?>"><?=$this->lang->line('Sign up')?></a></h3>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6 col-md-6">
                <img src="<?=$this->theme_base_url?>/assets/images/login-imges/login-sub-img-1.png" alt="" class="login-sub-img-1">
                <img src="<?=$this->theme_base_url?>/assets/images/login-imges/login-sub-img-2.png" alt="" class="login-sub-img-2">
                <div class="login-img-part">
                    <img src="<?=$this->theme_base_url?>/assets/images/login-imges/login-main-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal common-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <h3>Are you sure you want to change password?</h3>

          <div class="reset-btn">
              <button type="submit" class="yes-btn">Yes</button>
              <button type="submit" class="no-btn">No</button>
          </div>
      </div>
    </div>
  </div>
</div>
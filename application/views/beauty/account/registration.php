<section class="hero-section login-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?=$this->lang->line('My account')?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$this->lang->line('My account')?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<div class="login-section p-100">
    <img src="<?=$this->theme_base_url?>/assets/images/login-imges/login-wave-img.png" alt="" class="login-wave-img">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-6">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------signin-deails-wrappper----- -->
                    <div class="login-deatils-wrapper signin-deatils-wrapper">
                        <h2 class="title"><?=$this->lang->line('Sign up')?></h2>
                        <p class="pera">Let’s create your account</p>
                        <form id="RegisterForm" method="post" action="<?=base_url().'register'?>">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="<?=$this->lang->line('First Name*')?>">
                                        <!-- <label for="fname" class="error">Please enter first name</label> -->
                                      </div>
                                </div>

                                <div class="col-xxl-6">
                                    <div class="mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname" aria-describedby="lname" placeholder="<?=$this->lang->line('Last Name*')?>">
                                        <!-- <label for="lname" class="error">Please enter last name</label> -->
                                      </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="mb-3 form-in">
                                        <label for="Country-code" class="form-label">Country Code<span>*</span></label>
                                        <select class="form-select"  name="country_code" id="country_code" aria-label="Country-code">
                                            <option value=""><?=$this->lang->line('select country code')?></option>
                                            <?php foreach(GetDialcodelist() as $key => $value){ ?>
                                              <option value="<?=$key;?>"><?=$value;?></option>
                                            <?php } ?> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="mb-3">
                                        <label for="Country-code" class="form-label">Mobile Number</label>
                                        <input type="tel" name="phone" class="form-control mob_no" aria-describedby="Country-code" placeholder="<?=$this->lang->line('Mobile Number*')?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="<?=$this->lang->line('Email*')?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="<?=$this->lang->line('password*')?>">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="<?=$this->lang->line('Confirm password*')?>">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="term_policy" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        By creating an account, you agree to our <a href="<?=base_url().'terms_condition'?>">Terms Of Conditions</a> and
                                        <a href="<?=base_url().'privacy_policy'?>"><?=$this->lang->line('Privacy Policy')?>.</a>
                                    </label>
                                </div>
                                <label for="term_policy" class="error"></label>

                                <div class="sign-in-btn tab-save-btn">
                                    <input type="submit" id="btnSubmit" value="submit">
                                </div>

                                <p><?=$this->lang->line('Or, log in with your socials')?></p>

                                <div class="log-in-btn">
                                    <a href="<?=$googleUrl?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span><?=$this->lang->line('continue with google')?></a>
                                    <a href="<?=base_url().'login/fb_login'?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?=$this->lang->line('continue with facebook')?></a>
                                </div>

                                <h3>Already have an account? <a href="<?=base_url().'login'?>"><?=$this->lang->line('Sign In')?></a></h3>

                            </div>
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
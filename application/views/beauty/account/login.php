<!-- ----hero-section--- -->
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
                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentials to access your account.</p>
                        <form id="LoginForm" action="<?=base_url().'login'?>" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?=$this->lang->line('Email')?></label>
                                <input type="text" name="email" class="form-control"  placeholder="Email*">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?=$this->lang->line('password')?></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="password*">
                            </div>
                            <a href="<?=base_url().'login/forget_password'?>" class="forgot-password-text"><?=$this->lang->line('Forgot Your Password')?>?</a>
                            <div class="sign-in-btn tab-save-btn">
                                <input type="submit" value="submit">
                            </div>
                            <p>Or, log in with your socials</p>

                            <div class="log-in-btn">
                                <a href="<?=$googleUrl?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span><?=$this->lang->line('continue with google')?></a>
                                <a href="<?=base_url().'login/fb_login'?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?=$this->lang->line('continue with facebook')?></a>
                            </div>

                            <h3>Dont’ hvae an account? <a href="./sign-up-page.php">Sign up</a></h3>
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
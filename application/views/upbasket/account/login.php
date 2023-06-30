<!-- -----login-section----- -->
<div class="login-section section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <h2 class="title">Welcome back</h2>
                    <p class="pera">Welcome back! Enter your credentails to acess your account.</p>

                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <form id="LoginForm" action="<?= base_url() . 'login' ?>" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= $this->lang->line('Email') ?></label>
                                <input type="text" name="email" class="form-control" placeholder="<?= $this->lang->line('Email*') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?= $this->lang->line('password') ?></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="<?= $this->lang->line('password*') ?>">
                            </div>
                            <a href="<?= base_url() . 'login/forget_password' ?>" class="forgot-password-text"><?= $this->lang->line('Forgot Your Password') ?>?</a>

                            <div class="sign-in-btn">
                                <!-- <button type="submit" class="signin-btn-green">Sign Up</button> -->
                                <input class="common-input-btn" type="submit" id="btnSubmit" value="<?= $this->lang->line('Sign In') ?>" />
                            </div>
                            <p>Or, log in with your socials</p>
                            <div class="log-in-btn">
                                <a href="<?= $googleUrl ?>" class="google-btn"><span class="google-img"><img src="<?= base_url() . 'public/upbasket/assets/images/' ?>google-btn.svg" alt="err"></span><?= $this->lang->line('continue with google') ?></a>
                                <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('continue with facebook') ?></a>
                            </div>
                            <h3>Don’t have an account? <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-say-img.svg" alt="" class="login-say-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-tree-img.svg" alt="" class="login-tree-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
                <div class="login-img-part">
                    <img src="<?= $this->theme_base_url ?>/assets/images/login-girl-img.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
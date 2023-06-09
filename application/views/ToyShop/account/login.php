<!-- ----hero-section--- -->
<section class="banner login-section common-banner-bg">
    <img src="<?= $this->theme_base_url ?>/assets/img/common-star-bg.png" alt="" class="common-star-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('My account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('login') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- login-section -->
<section class="login-section p-100">

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="log-wrap">
                    <img src="<?= $this->theme_base_url ?>/assets/img/login-left-img.png" alt="" class="login-left-img">
                    <img src="<?= $this->theme_base_url ?>/assets/img/login-right-img.png" alt="" class="login-right-img">

                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <h2 class="title">
                            <?= $this->lang->line('Welcome') ?><span><?= $this->lang->line('back!') ?></span></h2>
                        <p class="pera">
                            <?= $this->lang->line('Welcome back! Enter your credentails to acess your account.') ?></p>
                        <form id="LoginForm" action="<?= base_url() . 'login' ?>" method="post">

                            <div class="mb-4">
                                <label for="email" class="form-label"><?= $this->lang->line('Email') ?></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="<?= $this->lang->line('Email*') ?>">
                            </div>

                            <div>
                                <label for="password" class="form-label"><?= $this->lang->line('password') ?></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="<?= $this->lang->line('password*') ?>">
                            </div>
                            <a href="<?= base_url() . 'login/forget_password' ?>" class="forgot-password-text"><?= $this->lang->line('Forgot Your Password') ?>?</a>

                            <div class="sign-in-btn">
                                <button class="cmn-btn" id="btnSubmit" type="submit"><?= $this->lang->line('Sign In') ?></button>
                            </div>

                            <p class="pera"><?= $this->lang->line('Or, log in with your socials') ?></p>

                            <div class="log-in-btn">
                                <a href="<?= $googleUrl ?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span><?= $this->lang->line('Login with Google') ?></a>
                                <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('Login with Facebook') ?></a>
                            </div>
                            <p><?= $this->lang->line("Don’t have an account?") ?> <a href="<?= base_url() . 'register' ?>" class="sign-iner"><?= $this->lang->line('Sign up') ?></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ----hero-section--- -->
<section class="banner home-banner login-section common-banner-bg">
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

<div class="login-section p-120">
    <!-- <img src="<?= base_url() . 'public/MileniaFurniture' ?>/assets/images/login-imges/login-wave-img.png" alt=""
        class="login-wave-img"> -->
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <!-- ---------login-deails-wrappper----- -->

                    <div class="login-deatils-wrapper">
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentails to acess your account.</p>
                        <form id="LoginForm" action="<?= base_url() . 'login' ?>" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label"><?= $this->lang->line('Email') ?></label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="<?= $this->lang->line('Email*') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"><?= $this->lang->line('password') ?></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="<?= $this->lang->line('password*') ?>">
                            </div>
                            <a href="<?= base_url() . 'login/forget_password' ?>" class="forgot-password-text"><?= $this->lang->line('Forgot Your Password') ?>?</a>

                            <div class="sign-in-btn">
                                <button class="cmn-btn" id="btnSubmit" type="submit"><?= $this->lang->line('Sign In') ?></button>
                            </div>

                            <p>Or, log in with your socials</p>

                            <div class="log-in-btn">
                                <a href="<?= $googleUrl ?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span><?= $this->lang->line('Login with Google') ?></a>
                                <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('Login with Facebook') ?></a>
                            </div>

                            <h3>Dont’ have an account? <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6 col-md-6">
                <!-- <img src="<?= base_url() . 'public/MileniaFurniture' ?>/assets/images/login-imges/login-sub-img-1.png" alt="" class="login-sub-img-1"> -->
                <!-- <img src="<?= base_url() . 'public/MileniaFurniture' ?>/assets/images/login-imges/login-sub-img-2.png" alt="" class="login-sub-img-2"> -->
                <div class="login-img-part">
                    <img src="<?= base_url() . 'public/MileniaFurniture' ?>/assets/images/login-common-image.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
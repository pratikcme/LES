<section class="hero-section login-section common-banner-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-left-bg.png" alt="err" class="left-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-right-bg.png" alt="err" class="right-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1> <?= $this->lang->line('My account') ?></h1>
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


<div class="login-section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="user-img">
                    <img src="<?= base_url() . 'public/shoppy/assets/img/' ?>my-account/user-img.png" alt="err">
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-12 d-flex align-items-center">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <!-- ---------login-deails-wrappper----- -->
                    <form class="login-deatils-wrapper" id="LoginForm" action="<?= base_url() . 'login' ?>" method="post">
                        <h2 class="title">Welcome <span>back!</span></h2>
                        <p class="pera">Welcome back! Enter your credentails to acess your account.</p>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address*">
                            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Addres"> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password*" autocomplete="off">
                        </div>

                        <a href="<?= base_url() . 'login/forget_password' ?>" class="forgot-password-text">Forgot
                            Password?</a>

                        <div class="sign-in-btn">
                            <button type="submit" class="lg-btn"><?= $this->lang->line('Sign In') ?></button>
                            <!-- <input class="common-input-btn" type="submit" id="btnSubmit" value="<?= $this->lang->line('Sign In') ?>" /> -->
                        </div>

                        <p>Or, log in with your socials</p>

                        <div class="log-in-btn">
                            <a href="<?= $googleUrl ?>" class="google-btn"><span><img src="<?= base_url() . 'public/shoppy/assets/img/' ?>my-account/google-btn.svg" alt="err"></span>Login with
                                Google</a>
                            <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span>Login with Facebook</a>
                        </div>
                        <h3>Don’t have an account? <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
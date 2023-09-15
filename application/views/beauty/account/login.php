<!-- ----hero-section--- -->
<section class="hero-section login-section common-banner-bg breadscrubBanner">
    <div class="container">
        <div class="row">
            <!-- <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('My account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('My account') ?>
                        </li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
</section>

<div class="login-section p-100">

    <!-- <svg preserveAspectRatio="none" class="login-wave-img" viewBox="0 0 1920 150" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 95.6183C0 95.6183 334.65 101.18 552.582 22.6813C770.514 -55.8129 938.261 101.89 1129.83 112.916C1336.54 124.812 1360.5 63.5267 1516.71 85.8648C1672.91 108.203 1920 95.6183 1920 95.6183V149.863H0V95.6183Z" fill="#DFD9FF" />
    </svg> -->
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                        </svg>
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentials to access your account.</p>
                        <form id="LoginForm" action="<?= base_url() . 'login' ?>" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= $this->lang->line('Email') ?></label>
                                <input type="text" name="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?= $this->lang->line('password') ?></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="password*">
                            </div>
                            <a href="<?= base_url() . 'login/forget_password' ?>" class="forgot-password-text"><?= $this->lang->line('Forgot Your Password') ?>?</a>
                            <div class="sign-in-btn tab-save-btn">
                                <input type="submit" id="btnSubmit" value="<?= $this->lang->line('Sign In') ?>">
                            </div>
                            <p><?= $this->lang->line('Or, log in with your socials') ?></p>

                            <div class="log-in-btn">
                                <a href="<?= $googleUrl ?>" class="google-btn"><span class="google-img"><img src="<?= base_url() . 'public/beauty/assets/images/' ?>google-btn.svg" alt="err"></span><?= $this->lang->line('continue with google') ?></a>
                                <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('continue with facebook') ?></a>
                            </div>

                            <h3>Dont’ have an account? <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="hero-section login-section common-banner-bg breadscrubBanner">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<div class="login-section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------signin-deails-wrappper----- -->
                    <div class="login-deatils-wrapper signin-deatils-wrapper signup-deatils-wrapper">
                        <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00"></path>
                        </svg>
                        <h2 class="title">Sign Up</h2>
                        <p class="pera">Let’s create your account</p>
                        <form id="RegisterForm" method="post" action="<?= base_url() . 'register' ?>">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="fname" class="form-label">Full Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="<?= $this->lang->line('First Name*') ?>">
                                        <!-- <label for="fname" class="error">Please enter first name</label> -->
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname" aria-describedby="lname" placeholder="<?= $this->lang->line('Last Name*') ?>">
                                        <!-- <label for="lname" class="error">Please enter last name</label> -->
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2 form-in">
                                        <label for="Country-code" class="form-label">Country Code<span>*</span></label>
                                        <select class="form-select" name="country_code" id="country_code" aria-label="Country-code">
                                            <option value=""><?= $this->lang->line('select country code') ?></option>
                                            <?php foreach (GetDialcodelist() as $key => $value) { ?>
                                                <option <?= (getPhoneCode() == $key) ? "selected" : "" ?> value="<?= $key; ?>"><?= $value; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="Country-code" class="form-label">Mobile Number</label>
                                        <input type="tel" name="phone" class="form-control mob_no" aria-describedby="Country-code" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="<?= $this->lang->line('Email*') ?>">
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="<?= $this->lang->line('password*') ?>">
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <div class="mb-2">
                                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="<?= $this->lang->line('Confirm password*') ?>">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="term_policy" id="flexCheckDefault">
                                    <label class="form-check-label col-12" for="flexCheckDefault">
                                        By creating an account, you agree to our <a href="<?= base_url() . 'terms_condition' ?>">Terms Of Conditions</a> and
                                        <a href="<?= base_url() . 'privacy_policy' ?>"><?= $this->lang->line('Privacy Policy') ?>.</a>
                                    </label>
                                </div>
                                <label for="term_policy" class="error"></label>

                                <div class="sign-in-btn tab-save-btn">
                                    <input type="submit" id="btnSubmit" value="<?= $this->lang->line("Sign up") ?>">
                                </div>

                                <p><?= $this->lang->line('Or, log in with your socials') ?></p>

                                <div class="log-in-btn">
                                    <a href="<?= $googleUrl ?>" class="google-btn"><span class="google-img"><img src="<?= base_url() . 'public/beauty/assets/images/' ?>google-btn.svg" alt="err"></span><?= $this->lang->line('continue with google') ?></a>
                                    <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('continue with facebook') ?></a>
                                </div>

                                <h3>Already have an account? <a href="<?= base_url() . 'login' ?>"><?= $this->lang->line('Sign In') ?></a></h3>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
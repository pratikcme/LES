<!-- -----login-section----- -->

<section class="hero-section login-section common-banner-bg breadscrubBanner">
    <div class="container">
        <div class="row">
            <!-- <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1>My account</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://zumkha.com/home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">My account                        </li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
</section>
<div class="login-section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">


                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper mobile-login">
                        <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                        </svg>
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentails to acess your account.</p>
                        <form id="Register_Form" method="post" action="<?= base_url() . 'register' ?>">
                            <input type="hidden" id="user_id">
                            <div class="mb-3">
                                <div class="tab-select-box">
                                
                                    <label for="Country-code" class="form-label"><?= $this->lang->line('Select country code') ?><span>*</span></label>
                                    <select name="country_code" id="country_code" class="form-select" aria-label="Country-code">
                                        <?php 
                                            
                                        foreach ($country_code as $key => $value) { 
                                            $ipCountryCode = "";
                                            if($_SERVER['HTTP_HOST'] == 'localhost'){
                                                $ipCountryCode = '91';
                                            }else{
                                                $ipCountryCode = getPhoneCode();

                                            }
                                            ?>
                                            
                                            <option <?= ($ipCountryCode == $key) ? "selected" : "" ?> value="<?= $key; ?>"><?= $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label"><?= $this->lang->line('Mobile Number') ?><span>*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control mob_no" aria-describedby="text" placeholder="<?= $this->lang->line('Mobile Number*') ?>" required>
                            </div>
                            <div id="completeOTP">
                                <div class="mb-3">
                                    <label for="otp-text" class="form-label">Otp<span>*</span></label>
                                    <input type="text" name="otp" id="otp" class="form-control OTP" placeholder="OTP">
                                    <label for="otp" class="varify-error error"></label>
                                </div>
                                <h3 class="mt-4">
                                    <span id="resetcounter">Didn't get the code? </span>
                                    <span href="javascript:" id="resend"><?= $this->lang->line('Resend') ?> OTP</span>
                                </h3>
                            </div>
                            <div id="completeProfile" style="display:none">
                                <div class="mb-3">
                                    <label for="fname-text" class="form-label"><?= $this->lang->line('First Name') ?><span>*</span></label>
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name*" required>
                                    <label for="fname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text" class="form-label"><?= $this->lang->line('Last Name') ?><span>*</span></label>
                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name*" required>
                                    <label for="lname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text" class="form-label">
                                        <?= $this->lang->line('Enter Email') ?><span>*</span></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="<?= $this->lang->line('Enter Email*') ?>">
                                    <label for="email" class="error"></label>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                            <label for="otp-text" class="form-label">Otp<span>*</span></label>
                            <input type="text" class="form-control" id="otp-text" aria-describedby="otp-text"
                            placeholder="Enter Your Otp Number">
                        </div> -->

                            <div class="mb-3 tab-save-btn">
                                <button type="button" class="common-input-btn send" id="frmBtn"><?= $this->lang->line('Send Code') ?></button>
                            </div>

                            <!-- <h3 class="mt-4 d-none">did not receive otp? <span href="#">Resend</span></h3> -->

                        </form>
                    </div>

                </div>
            </div>

            <!-- ------login-right-image-- -->
            <!-- <div class="login-images col-xxl-6 col-lg-6">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-say-img.svg" alt="" class="login-say-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-tree-img.svg" alt="" class="login-tree-img">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
                <div class="login-img-part">
                    <img src="<?= $this->theme_base_url ?>/assets/images/login-girl-img.svg" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>
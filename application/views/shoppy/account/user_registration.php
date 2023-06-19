<!-- ----hero-section--- -->
<section class="hero-section login-section common-banner-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-left-bg.png" alt="err" class="left-bg">
    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-right-bg.png" alt="err" class="right-bg">
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

<div class="login-section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="user-img">
                    <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/my-account/user-img.png" alt="err">
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-12 d-flex align-items-center">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------login-deails-wrappper----- -->
                    <form class="login-deatils-wrapper" id="Register_Form" method="post" action="<?= base_url() . 'register' ?>">
                        <input type="hidden" id="user_id">
                        <h2 class="title">Welcome <span>back!</span></h2>
                        <p class="pera">Welcome back! Enter your Mobile Number to acess your account.</p>

                        <div class="mb-3">
                            <label for="Country-code" class="form-label"><?= $this->lang->line('Select country code') ?></label>
                            <select name="country_code" id="country_code" class="form-select" aria-label="Country-code">
                                <?php foreach ($country_code as $key => $value) { ?>
                                    <option value="<?= $key; ?>"><?= $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control mob_no" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                        </div>

                        <!-- check -->

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

                        <!-- end -->

                        <div class="sign-in-btn">
                            <button type="button" class="lg-btn send" id="frmBtn"><?= $this->lang->line('Send Code') ?></button>
                        </div>

                        <h3 id="resetcounter">Didn't get the code? <span type="button" id="resend"><?= $this->lang->line('Resend') ?>
                                OTP</span></h3>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
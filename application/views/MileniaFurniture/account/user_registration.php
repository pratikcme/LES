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

    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentails to acess your account.</p>
                        <form id="Register_Form" method="post" action="<?= base_url() . 'register' ?>">
                            <input type="hidden" id="user_id">
                            <div class="mb-3">
                                <label for="country_code"
                                    class="form-label"><?= $this->lang->line('Select country code') ?></label>
                                <select class="form-select" name="country_code" id="country_code"
                                    aria-label="Country-code">
                                    <?php foreach ($country_code as $key => $value) { ?>
                                    <option value="<?= $key; ?>"><?= $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label"><?= $this->lang->line('Mobile Number') ?></label>
                                <input type="text" class="form-control mob_no" name="phone" id="phone"
                                    placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                            </div>

                            <!-- check -->

                            <div id="completeOTP">
                                <div class="mb-3">
                                    <div class="tab-select-box">
                                        <label for="Country-code"
                                            class="form-label"><?= $this->lang->line('Select country code') ?><span>*</span></label>
                                        <select name="country_code" id="country_code" class="form-select"
                                            aria-label="Country-code">
                                            <?php foreach ($country_code as $key => $value) { ?>
                                            <option value="<?= $key; ?>"><?= $value; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <h3 class="mt-4">
                                    <span id="resetcounter">Didn't get the code? </span>
                                    <span href="javascript:" id="resend"><?= $this->lang->line('Resend') ?> OTP</span>
                                </h3>
                            </div>

                            <div id="completeProfile" style="display:none">
                                <div class="mb-3">
                                    <label for="fname-text"
                                        class="form-label"><?= $this->lang->line('First Name') ?><span>*</span></label>
                                    <input type="text" name="fname" id="fname" class="form-control"
                                        placeholder="First Name*" required>
                                    <label for="fname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text"
                                        class="form-label"><?= $this->lang->line('Last Name') ?><span>*</span></label>
                                    <input type="text" name="lname" id="lname" class="form-control"
                                        placeholder="Last Name*" required>
                                    <label for="lname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text" class="form-label">
                                        <?= $this->lang->line('Enter Email') ?><span>*</span></label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="<?= $this->lang->line('Enter Email*') ?>">
                                    <label for="email" class="error"></label>
                                </div>
                            </div>

                            <!-- end -->

                            <div class="sign-in-btn">
                                <button type="button" id="frmBtn"
                                    class="lg-btn send"><?= $this->lang->line('Send Code') ?></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6 col-md-6">
                <div class="login-img-part">
                    <img src="<?= $this->theme_base_url ?>/assets/images/login-common-image.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
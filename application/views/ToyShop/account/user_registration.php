<!-- <section class="banner home-banner login-section common-banner-bg">
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

                <div class="login-left-content">

                    <div class="login-deatils-wrapper">
                        <h2 class="title">Welcome back</h2>
                        <p class="pera">Welcome back! Enter your credentails to acess your account.</p>
                        <form id="Register_Form" method="post" action="<?= base_url() . 'register' ?>">
                            <input type="hidden" id="user_id">
                            <div class="mb-3">
                                <label for="country_code" class="form-label"><?= $this->lang->line('Select country code') ?></label>
                                <select class="form-select" name="country_code" id="country_code" aria-label="Country-code">
                                    <?php foreach ($country_code as $key => $value) { ?>
                                        <option value="<?= $key; ?>"><?= $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label"><?= $this->lang->line('Mobile Number') ?></label>
                                <input type="text" class="form-control mob_no" name="phone" id="phone" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                            </div>



                            <div id="completeOTP">
                                <div class="mb-3">
                                    <div class="tab-select-box">
                                        <label for="Country-code" class="form-label"><?= $this->lang->line('Select country code') ?><span>*</span></label>
                                        <select name="country_code" id="country_code" class="form-select" aria-label="Country-code">
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



                            <div class="sign-in-btn">
                                <button type="button" id="frmBtn" class="lg-btn"><?= $this->lang->line('Send Code') ?></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="login-images col-xxl-6 col-lg-6 col-md-6">
                <div class="login-img-part">
                    <img src="<?= $this->theme_base_url ?>/assets/images/login-common-image.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->



<!-- ----hero-section--- -->
<section class="banner login-section common-banner-bg">
    <img src="<?= $this->theme_base_url ?>/img/common-star-bg.png" alt="" class="common-star-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('My account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Sign up') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- login-section -->
<section class="login-section p-100 ">

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="log-wrap">
                    <img src="<?= $this->theme_base_url ?>/assets/img/login-left-img.png" alt="" class="login-left-img">
                    <img src="<?= $this->theme_base_url ?>/assets/img/login-right-img.png" alt=""
                        class="login-right-img">

                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper">
                        <h2 class="title"><?= $this->lang->line('Sign up') ?></h2>
                        <p class="pera"><?= $this->lang->line('Let’s create your account') ?></p>
                        <form id="Register_Form" method="post" action="<?= base_url() . 'register' ?>">
                            <input type="hidden" id="user_id">
                            <div class="row">


                                <div class="col-xxl-12 mb-3">
                                    <div class="form-in">
                                        <label for="country_code"
                                            class="form-label"><?= $this->lang->line('select country code') ?></label>
                                        <select class="form-select" name="country_code" id="country_code"
                                            aria-label="country_code">
                                            <?php foreach ($country_code as $key => $value) { ?>
                                            <option value="<?= $key; ?>"><?= $value; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-12 mb-3">
                                    <label for="phone"
                                        class="form-label"><?= $this->lang->line('Mobile Number') ?></label>
                                    <input type="text" class="form-control mob_no" name="phone" id="phone"
                                        aria-describedby="phonenumber"
                                        placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                                </div>


                                <p><?= $this->lang->line("Already have an account?") ?><a
                                        href="<?= base_url() . 'login' ?>"
                                        class="sign-iner"><?= $this->lang->line("Sign In") ?></a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
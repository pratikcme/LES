<!-- ----hero-section--- -->
<section class="hero-section login-section common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('My account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="<?= base_url() ?>/home"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Forgot password') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="login-section forgot-section p-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------signin-deails-wrappper----- -->
                    <form class="login-deatils-wrapper signin-deatils-wrapper forgot-deatils-wrapper " id="ForgetForm"
                        method="post" action="<?= base_url() . 'login/forget_password' ?>">
                        <h2 class="title"><?= $this->lang->line('Forgot'); ?>
                            <span><?= $this->lang->line('Password?'); ?></span>
                        </h2>
                        <p class="pera">No worries, we' will send you reset instructions.</p>

                        <div class="mb-3">
                            <label for="email" class="form-label"><?= $this->lang->line('Email'); ?></label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" placeholder="<?= $this->lang->line('Enter Email*') ?>">
                            <label for="email" class="error"><?= @form_error('email') ?></label>
                        </div>

                        <div class="sign-in-btn reset-password-btn">
                            <button type="submit" id="btnSubmit"
                                class="cmn-btn"><?= $this->lang->line('Reset Password') ?></button>
                        </div>

                        <h3><span><i class="fa-solid fa-arrow-left"></i></span> <?= $this->lang->line('Back to'); ?> <a
                                href="<?= base_url() ?>login"><?= $this->lang->line('Sign In') ?></a></h3>
                    </form>
                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6 col-md-6">
                <div class="login-img-part">
                    <img src="<?= $this->theme_base_url ?>/assets/images/forgot-passowrd-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
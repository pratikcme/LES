<!-- ----hero-section--- -->
<section class="banner login-section common-banner-bg">
  <img src="<?= $this->theme_base_url ?>/assets/img/common-star-bg.png" alt="" class="common-star-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1><?= $this->lang->line('My account') ?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>/home"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">
              <?= $this->lang->line('Forgot password') ?></li>
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

          <div class="login-deatils-wrapper forgot-deatils-wrapper">
            <h2 class="title"><?= $this->lang->line('Forgot'); ?> <?= $this->lang->line('Password?'); ?>
            </h2>

            <p class="pera">No worries, we' will send you reset instructions.</p>
            <form id="ForgetForm" method="post" action="<?= base_url() . 'login/forget_password' ?>">

              <div class="mb-4">
                <label for="email" class="form-label"><?= $this->lang->line('Email'); ?></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="<?= $this->lang->line('Enter Email*') ?>">
                <label for="email" class="error"><?= @form_error('email') ?></label>
              </div>

              <div class="sign-in-btn">
                <button class="cmn-btn" id="btnSubmit" type="submit"><?= $this->lang->line('Reset Password') ?></button>
              </div>

              <p><a href="<?= base_url() ?>login"><i class="fa-solid fa-arrow-left"></i></a><?= $this->lang->line('Back to'); ?> <a href="<?= base_url() ?>login" class="sign-iner"><?= $this->lang->line('Sign In') ?></a></p>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>
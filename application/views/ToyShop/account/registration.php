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
          <img src="<?= $this->theme_base_url ?>/assets/img/login-right-img.png" alt="" class="login-right-img">

          <!-- ---------login-deails-wrappper----- -->
          <div class="login-deatils-wrapper">
            <h2 class="title"><?= $this->lang->line('Sign up') ?></h2>
            <p class="pera"><?= $this->lang->line('Let’s create your account') ?></p>
            <form id="RegisterForm" method="post" action="<?= base_url() . 'register' ?>">
              <div class="row">
                <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">

                  <label for="fname" class="form-label"><?= $this->lang->line('First Name'); ?></label>
                  <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="<?= $this->lang->line('First Name*') ?>">

                </div>

                <div class="col-xxl-6 col-lg-6 col-md-6 mb-3">

                  <label for="lname" class="form-label"><?= $this->lang->line('Last Name'); ?></label>
                  <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" placeholder="<?= $this->lang->line('Last Name*') ?>">
                </div>

                <div class="col-xxl-12 mb-3">
                  <div class="form-in">
                    <label for="Country-code" class="form-label"><?= $this->lang->line('select country code') ?></label>
                    <select class="form-select" name="country_code" id="Country-code" aria-label="Country-code">
                      <option value=""><?= $this->lang->line('select country code') ?></option>
                      <?php foreach (GetDialcodelist() as $key => $value) { ?>
                        <option value="<?= $key; ?>"><?= $value; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>



                <div class="col-xxl-12 mb-3">
                  <label for="phone" class="form-label"><?= $this->lang->line('Mobile Number') ?></label>
                  <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phonenumber" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                </div>

                <div class="col-xxl-12 mb-3">
                  <label for="email" class="form-label"><?= $this->lang->line('Email') ?></label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="<?= $this->lang->line('Email*') ?>">
                </div>

                <div class="col-xxl-12 mb-3">
                  <label for="password" class="form-label"><?= $this->lang->line('password') ?></label>
                  <input type="password" class="form-control" autocomplete="off" name="password" id="password" placeholder="<?= $this->lang->line('password*') ?>">
                </div>

                <div class="col-xxl-12 mb-3">

                  <label for="confirm_password" class="form-label"><?= $this->lang->line('Confirm password') ?></label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="<?= $this->lang->line('Confirm password*') ?>" autocomplete="off">

                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="term_policy" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    By creating an account, you agree to our <a href="<?= base_url() ?>terms_condition">
                      <?= $this->lang->line('Terms & Conditions') ?> </a>
                    and <a href="<?= base_url() ?>privacy_policy"><?= $this->lang->line('Privacy Policy') ?></a>
                  </label>
                </div>
                <label for="term_policy" class="error"></label>
                <div class="sign-in-btn">
                  <button type="submit" class="cmn-btn"><?= $this->lang->line("Sign up") ?></button>
                </div>

                <p><?= $this->lang->line('Or, log in with your socials') ?></p>

                <div class="log-in-btn">
                  <a href="<?= $googleUrl ?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span><?= $this->lang->line('continue with google') ?></a>
                  <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span><?= $this->lang->line('continue with facebook') ?></a>
                </div>

                <p><?= $this->lang->line("Already have an account?") ?><a href="<?= base_url() . 'login' ?>" class="sign-iner"><?= $this->lang->line("Sign In") ?></a></p>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>
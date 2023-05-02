<section class="hero-section login-section common-banner-bg">
  <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-left-bg.png" alt="err" class="left-bg">
  <img src="<?= base_url() . 'public/shoppy' ?>/assets/img/home/banner-right-bg.png" alt="err" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1> <?= $this->lang->line('My account') ?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>/home"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Forgot Password'); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<div class="login-section forgot-section p-100">
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

          <!-- ---------signin-deails-wrappper----- -->
          <form class="login-deatils-wrapper signin-deatils-wrapper" id="ForgetForm" method="post" action="<?= base_url() . 'login/forget_password' ?>">
            <h2 class="title"><?= $this->lang->line('Forgot'); ?> <span><?= $this->lang->line('Password?'); ?></span></h2>


            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><?= $this->lang->line('Email'); ?></label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $this->lang->line('Enter Email*') ?>">
              <label for="email" class="error"><?= @form_error('email') ?></label>
            </div>

            <div class="sign-in-btn reset-password-btn tab-save-btn text-start">
              <!-- data-bs-target="#exampleModal"   data-bs-toggle="modal"-->
              <button type="submit" id="btnSubmit"><?= $this->lang->line('Reset Password') ?></button>
            </div>

            <h3><span><i class="fa-solid fa-arrow-left"></i></span> <?= $this->lang->line('Back to'); ?> <a href="<?= base_url() ?>login"><?= $this->lang->line('Sign In') ?></a></h3>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- <div class="modal common-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Are you sure you want to change password?</h3>

                <div class="reset-btn">
                    <button type="submit" class="yes-btn">Yes</button>
                    <button type="submit" class="no-btn">No</button>
                </div>
            </div>
        </div>
    </div>
</div> -->
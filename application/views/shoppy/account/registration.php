<!-- 
<div class="login-section section">
    <div class="container">
        <div class="row">
          <div class="col-xxl-6 col-lg-6 col-md-6">

             
            <div class="login-left-content">
              <h2 class="title"><?= $this->lang->line('Sign up') ?></h2>
              <p class="pera">Let’s create your account</p>
              
              
              <form id="RegisterForm" method="post" action="<?= base_url() . 'register' ?>">
              <div class="login-deatils-wrapper signin-deatils-wrapper">
                <div class="row">
                  <div class="col-xxl-6">
                    <div class="mb-3">
                      <label for="fname" class="form-label">First Name<span>*</span></label>
                      <input type="text" name="fname" placeholder="<?= $this->lang->line('First Name*') ?>">
                    </div>
                  </div>

                  <div class="col-xxl-6">
                    <div class="mb-3">
                      <label for="lname" class="form-label">Last Name<span>*</span></label>
                      <input type="text" name="lname" placeholder="<?= $this->lang->line('Last Name*') ?>">
                    </div>
                  </div>

                  <div class="col-xxl-12">
                      <div class="mb-3">
                        <label for="cars">Select Country Code<span>*</span></label><br>
                          <select name="country_code" id="country_code" class="input-wrapper">
                            <option value=""><?= $this->lang->line('select country code') ?></option>
                            <?php foreach (GetDialcodelist() as $key => $value) { ?>
                              <option value="<?= $key; ?>"><?= $value; ?></option>
                            <?php } ?> 
                          </select>
                      </div>
                    </div>

                  <div class="col-xxl-12">
                    <div class="mb-3">
                      <label for="Country-code" class="form-label">Mobile Number<span>*</span></label>
                      <input  type="text" name="phone"  class="mob_no" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                    </div>
                  </div>

                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email<span>*</span></label>
                  <input type="text" name="email" placeholder="<?= $this->lang->line('Email*') ?>" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password<span>*</span></label>
                  <input type="password" name="password" placeholder="<?= $this->lang->line('password*') ?>"  id="password" autocomplete=off>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password<span>*</span></label>
                  <input type="password" name="confirm_password" placeholder="<?= $this->lang->line('Confirm password*') ?>"  id="confirm_password" >
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    By creating an account, you agree to our <a href="#">Terms Of Conditions</a> and <a href="#">Privacy Policy.</a>   
                  </label>
                </div>


                <button type="submit" class="sign-in-btn signin-btn-green">Sign Up</button> 
                
                <p>Or, log in with your socials</p>

                <div class="log-in-btn">
                  <a href="<?= $googleUrl ?>" class="google-btn"><span><i class="fa-brands fa-google"></i></span>Login with Google</a>
                  <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span>Login with Facebook</a>
                </div>

                <h3>Already have an account? <a href="<?= base_url() . 'login' ?>">Sign in</a></h3>
              </div>
              </form>
              
            </div>
          </div>

          
          <div class="login-images col-xxl-6 col-lg-6 col-md-6">
            <img src="<?= $this->theme_base_url ?>/assets/images/login-say-img.svg" alt="" class="login-say-img">
            <img src="<?= $this->theme_base_url ?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img">
            <img src="<?= $this->theme_base_url ?>/assets/images/login-tree-img.svg" alt="" class="login-tree-img">
            <img src="<?= $this->theme_base_url ?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
            <div class="login-img-part">
                <img src="<?= $this->theme_base_url ?>/assets/images/login-girl-img.svg" alt="">
            </div>
          </div>
        </div>
    </div>
  </div> -->

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
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Sign up') ?></li>
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
          <!-- ---------signin-deails-wrappper----- -->
          <form class="login-deatils-wrapper signin-deatils-wrapper" id="RegisterForm" method="post" action="<?= base_url() . 'register' ?>">
            <h2 class="title"><?= $this->lang->line('Sign up') ?></h2>
            <p class="pera">Let’s create your account</p>
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" aria-describedby="Enter First Name" placeholder="<?= $this->lang->line('First Name*') ?>">
                </div>
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="mb-3">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" placeholder="<?= $this->lang->line('Last Name*') ?>">
                </div>
              </div>

              <div class="col-xxl-12">
                <div class="mb-3 form-in">
                  <label for="Country-code" class="form-label">Select Country Code</label>
                  <select class="form-select" name="country_code" aria-label="Country-code" id="Country-code">
                    <option value=""><?= $this->lang->line('select country code') ?></option>
                    <?php foreach (GetDialcodelist() as $key => $value) { ?>
                      <option value="<?= $key; ?>"><?= $value; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-xxl-12">
                <div class="mb-3">
                  <label for="Country-code" class="form-label">Mobile Number</label>
                  <input type="text" name="phone" class="form-control" aria-describedby="Country-code" placeholder="<?= $this->lang->line('Mobile Number*') ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $this->lang->line('Email*') ?>">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" autocomplete="off" name="password" placeholder="<?= $this->lang->line('password*') ?>">
              </div>

              <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="<?= $this->lang->line('Confirm password*') ?>" id="confirm_password">
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  By creating an account, you agree to our <a href="#">Terms Of Conditions</a> and <a href="#">Privacy Policy.</a>
                </label>
              </div>

              <div class="sign-in-btn">
                <button class="lg-btn" type="submit">Submit</button>

              </div>
            </div>

            <p>Or, log in with your socials</p>

            <div class="log-in-btn">
              <a href="<?= $googleUrl ?>" class="google-btn"><span><img src="<?= base_url() . 'public/shoppy/assets/img/' ?>my-account/google-btn.svg" alt="err"></span>Login with
                Google</a>
              <a href="<?= base_url() . 'login/fb_login' ?>" class="facebook-btn"><span><i class="fa-brands fa-facebook"></i></span>Login with Facebook</a>
            </div>

            <h3>Already have an account? <a href="<?= base_url() . 'login' ?>"><?= $this->lang->line('Sign In') ?></a></h3>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
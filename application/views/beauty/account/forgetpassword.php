<!-- ----hero-section--- -->
<section class="hero-section login-section common-banner-bg breadscrubBanner">
    <div class="container">
        <div class="row ">
            <!-- <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('My Account') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('My Account') ?></li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
</section>

<div class="login-section forgot-section p-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-lg-12 col-md-12">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">

                    <!-- ---------signin-deails-wrappper----- -->
                    <div class="login-deatils-wrapper signin-deatils-wrapper">
                        <svg class="home_cat_title" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#5941EC" />
                        </svg>
                        <h2 class="title"><?= $this->lang->line('Forgot password') ?>?</h2>
                        <!-- <p class="pera">No worries, we’well send you reset intructions.</p> -->
                        <form id="ForgetForm" method="post" action="<?= base_url() . 'login/forget_password' ?>">

                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label"><?= $this->lang->line('Email') ?></label>
                                <input type="text" name="email" class="form-control" placeholder="<?= $this->lang->line('Enter Email*') ?>">
                            </div>

                            <div class="sign-in-btn reset-password-btn tab-save-btn">
                                <!-- <button type="button">Reset Password</button> -->
                                <button type="submit" id="btnSubmit" class="btn create-btn"><?= $this->lang->line('Reset Password') ?></button>
                            </div>

                            <h3><span><i class="fa-solid fa-arrow-left"></i></span> Back to <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a></h3>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal common-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
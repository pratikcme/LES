<!-- -----login-section----- -->
<div class="login-section section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-6">
                <!-- --------login-left-content---- -->
                <div class="login-left-content">
                    <h2 class="title">Welcome back</h2>
                    <p class="pera">Welcome back! Enter your credentails to acess your account.</p>

                    <!-- ---------login-deails-wrappper----- -->
                    <div class="login-deatils-wrapper mobile-login">
                        <form id="Register_Form" method="post" action="<?=base_url().'register'?>">
                            <input type="hidden" id="user_id">
                            <div class="mb-3">
                                <div class="tab-select-box">
                                    <label for="Country-code"
                                        class="form-label"><?=$this->lang->line('Select country code')?><span>*</span></label>
                                    <select name="country_code" id="country_code" class="form-select"
                                        aria-label="Country-code">
                                        <?php foreach($country_code as $key => $value){ ?>
                                        <option value="<?=$key;?>"><?=$value;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="text"
                                    class="form-label"><?=$this->lang->line('Mobile Number')?><span>*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control mob_no"
                                    aria-describedby="text" placeholder="<?=$this->lang->line('Mobile Number*')?>"
                                    required>
                            </div>
                            <div id="completeOTP">
                                <div class="mb-3">
                                    <label for="otp-text" class="form-label">Otp<span>*</span></label>
                                    <input type="text" name="otp" id="otp" class="form-control OTP" placeholder="OTP">
                                    <label for="otp" class="varify-error error"></label>
                                </div>
                                <h3 class="mt-4">
                                    <span id="resetcounter">Didn't get the code? </span>
                                    <span href="javascript:" id="resend"><?=$this->lang->line('Resend')?> OTP</span>
                                </h3>
                            </div>
                            <div id="completeProfile" style="display:none">
                                <div class="mb-3">
                                    <label for="fname-text"
                                        class="form-label"><?=$this->lang->line('First Name')?><span>*</span></label>
                                    <input type="text" name="fname" id="fname" class="form-control"
                                        placeholder="First Name*" required>
                                    <label for="fname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text"
                                        class="form-label"><?=$this->lang->line('Last Name')?><span>*</span></label>
                                    <input type="text" name="lname" id="lname" class="form-control"
                                        placeholder="Last Name*" required>
                                    <label for="lname" class="error"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="fname-text" class="form-label">
                                        <?=$this->lang->line('Enter Email')?><span>*</span></label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="<?=$this->lang->line('Enter Email*')?>">
                                    <label for="email" class="error"></label>
                                </div>
                            </div>

                            <div class="mb-3 tab-save-btn">
                                <button type="button" class="common-input-btn send"
                                    id="frmBtn"><?=$this->lang->line('Send Code')?></button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>

            <!-- ------login-right-image-- -->
            <div class="login-images col-xxl-6 col-lg-6">
                <img src="<?=$this->theme_base_url?>/assets/images/login-say-img.svg" alt="" class="login-say-img">
                <img src="<?=$this->theme_base_url?>/assets/images/login-mail-img.svg" alt="" class="login-mail-img">
                <img src="<?=$this->theme_base_url?>/assets/images/login-tree-img.svg" alt="" class="login-tree-img">
                <img src="<?=$this->theme_base_url?>/assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
                <div class="login-img-part">
                    <img src="<?=$this->theme_base_url?>/assets/images/login-girl-img.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

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
                    <form action="login.php">
                        <div class="mb-3">
                            <div class="tab-select-box">
                            <label for="Country-code" class="form-label">Country Code<span>*</span></label>
                            <select class="form-select" aria-label="Country-code">
                                <option selected>(+91) Inadia </option>
                                <option value="1">Surt</option>
                                <option value="2">Baroda</option>
                                <option value="3">Ohter</option>
                            </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Mobile Number<span>*</span></label>
                            <input type="tel" class="form-control" id="text" aria-describedby="text"
                            placeholder="Enter Your Number">
                        </div>

                        <div class="mb-3">
                            <label for="otp-text" class="form-label">Otp<span>*</span></label>
                            <input type="text" class="form-control" id="otp-text" aria-describedby="otp-text"
                            placeholder="Enter Your Otp Number">
                        </div>
                        
                        <div class="mb-3 tab-save-btn">
                            <button type="submit" class="common-input-btn">Submit</button>
                        </div>
                        
                        <h3 class="mt-4">did not receive otp? <span href="#">Resend</span></h3>

                    </form>
              </div>
             
          </div>
          </div>

          <!-- ------login-right-image-- -->
          <div class="login-images col-xxl-6 col-lg-6">
            <img src="./assets/images/login-say-img.svg" alt="" class="login-say-img">
            <img src="./assets/images/login-mail-img.svg" alt="" class="login-mail-img">
            <img src="./assets/images/login-tree-img.svg" alt="" class="login-tree-img">
            <img src="./assets/images/login-wall-bg.png" alt="" class="login-wall-bg">
            <div class="login-img-part">
                <img src="./assets/images/login-girl-img.svg" alt="">
            </div>
          </div>
        </div>
    </div>
</div>
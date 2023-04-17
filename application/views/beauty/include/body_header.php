<div class="container">
    <div class="row">
      <div class="col-lg-12">

        <!-- -----header-top---- -->
        <div class="header-top">
          <div class="logo">
            <a href="<?=base_url()?>"><img src="<?=$this->theme_base_url?>/assets/images/header-logo.png" alt=""></a>
          </div>

          <!-- -------navigation-bar---- -->
          <nav>
            <div class="left-content">
              <ul>
                <!-- <li><a href="./index.php">Home</a></li>
                <li><a href="./product-list-page.php">Shop</a></li> -->
                <li><a href="<?=base_url().'about'?>"><?=$this->lang->line('About us');?></a></li>
                <li><a href="<?=base_url().'contact'?>"><?=$this->lang->line('Contact Us');?></a></li>
              </ul>
            </div>

            <!-- <div class="right-content">
              <div class="right-icon">
                <a href=""><img src="<?=$this->theme_base_url?>/assets/images/nav-call-icon.svg" alt=""></a>
              </div>
              <div class="right-text">
                <h4>Need help? Call Us:</h4>
                <h3><a href="">+91 93270 13225</a></h3>
              </div>
            </div> -->
          </nav>
          
          <div class="d-flex drp-grp">
              <form class="lng-drp">
                <select name="language" id="Language">
                  <option value="volvo">English</option>
                  <option value="saab">Arebic</option>
                </select>
              </form>

              <form class="branch-drp">
                <select name="Branch" id="Branch">
                  <option value="volvo">Branch-1</option>
                  <option value="saab">Branch-2</option>
                </select>
              </form>
            </div>


          <div class="social-icons">
          <a href="#" class="search-toggle header-icon" id="search"><span><i class="fa-solid fa-magnifying-glass"></i></span></a>

             <!-- -----search-btn---- -->
             <div class="search-block search-list-blcok">
              <form class="search-form">
                <input type="search" name="search" class="search-input" placeholder="Search here...">
                <i class="fa-solid fa-magnifying-glass search-here-icon"></i>

                  <!-- ---search-list--- -->
                <div class="search-list-wrapper">
                  <ul class="search-list">
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>SkinCare</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Lips</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Hair</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Eye</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Makeup</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Natural</li>
                    <li><span><i class="fa-solid fa-magnifying-glass"></i></span>Fregrance</li>
                  </ul>
                </div>
              </form>
              <i class="fa-solid fa-xmark main-div-cancel"></i>
            </div>

            <div class="user-login-dropdow">
              <div class="user-login-header">
                <h4>New Customer?</h4>
                <h3><a href="./sign-up-page.php">sign up</a></h3>
              </div>
              <div class="user-data-wrapper">
                <a href="./sign-in-page.php"><span><i class="fa-solid fa-right-to-bracket"></i></span>Login Account</a>
              </div>
              <div class="user-data-wrapper">
                <a href="./myaccount-page.php"><span><i class="fa-sharp fa-solid fa-user"></i></span>My Account</a>
              </div>
              <div class="user-data-wrapper">
                <a href="./shop-cart.php"><span><i class="fa-solid fa-folder-plus"></i></span>My Orders</a>
              </div>
            </div>
            <a href="#" class="user-login-icon header-icon"><span><i class="fa-regular fa-user"></i></span></a>


            <a href="#" class="cart-icons header-icon"><i class="fa-solid fa-cart-shopping"></i><span class="g-badge">22</span></a>
            <!-- ----cart-dropdown--- -->
            <div class="cart-dropdwon">
              <div class="cart-drop-wrapper">
                <div class="cart-drop-menu cart-drop-menu-1">
                  <div class="drop-img">
                    <a href="./product-details.php"><img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-5.png" alt=""></a>
                  </div>
                  <div class="drop-text">
                    <h4><a href="./product-details.php">Lakme Absolute Skin Natural Mousse Foundation</a></h4>
                    <p>Qty : 1</p>
                    <h3>₹1150.00</h3>
                  </div>
                  <div class="cancel-btn">
                    <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
                </div>

                <div class="cart-drop-menu cart-drop-menu-2">
                  <div class="drop-img">
                    <a href="./product-details.php"><img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-6.png" alt=""></a>
                  </div>
                  <div class="drop-text">
                    <h4><a href="./product-details.php">Lakme Absolute Skin Natural Mousse Foundation</a></h4>
                    <p>Qty : 1</p>
                    <h3>₹1150.00</h3>
                  </div>
                  <div class="cancel-btn">
                    <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
                </div>

                <div class="cart-drop-menu cart-drop-menu-3">
                  <div class="drop-img">
                    <a href="./product-details.php"><img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-7.png" alt=""></a>
                  </div>

                  <div class="drop-text">
                    <h4><a href="./product-details.php">Lakme Absolute Skin Natural Mousse Foundation</a></h4>
                    <p>Qty : 1</p>
                    <h3>₹1150.00</h3>
                  </div>
                  <div class="cancel-btn">
                    <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
                </div>

                <div class="cart-drop-menu cart-drop-menu-3">
                  <div class="drop-img">
                    <a href="./product-details.php"><img src="<?=$this->theme_base_url?>/assets/images/home-page/feature-prodct-7.png" alt=""></a>
                  </div>
                  <div class="drop-text">
                    <h4><a href="./product-details.php">Lakme Absolute Skin Natural Mousse Foundation</a></h4>
                    <p>Qty : 1</p>
                    <h3>₹1150.00</h3>
                  </div>
                  <div class="cancel-btn">
                    <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
                </div>

              </div>

              <div class="total-amount">
                <p>Total</p>
                <h3>₹1134.00</h3>
              </div>

              <div class="drop-btns">
                <a href="./shop-cart.php" class="view-cart">view cart</a>
                <a href="./checkout-page.php" class="checkout ">checkout</a>
              </div>
            </div>


            <div class="icon-tex">
              <p>your cart</p>
              <h3>₹1290.00</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
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
              <?php if($this->session->userdata('user_id') == ''){ ?> 
                <div class="user-login-header">
                  <h4><?=$this->lang->line('New Customer')?>?</h4>
                  <h3><a href="<?=base_url().'register'?>"><?=$this->lang->line('Sign up')?></a></h3>
                </div>
                <div class="user-data-wrapper">
                  <a href="<?=base_url().'login'?>"><span><i class="fa-solid fa-right-to-bracket"></i></span><?=$this->lang->line('Login Account')?></a>
                </div>
              <?php }else{ ?>
                <div class="user-data-wrapper">
                  <a href="./myaccount-page.php"><span><i class="fa-sharp fa-solid fa-user"></i></span><?=$this->lang->line('My account')?></a>
                </div>
                <div class="user-data-wrapper">
                  <a href="javascript:" id="logout"><span><i class="fa-solid fa-folder-plus"></i></span><?=$this->lang->line('logout')?></a>
                </div>
              <?php } ?>
            </div>
            <a href="javascript:" class="user-login-icon header-icon"><span><i class="fa-regular fa-user"></i></span></a>


            <a href="javascript:" class="cart-icons header-icon" >
              <i class="fa-solid fa-cart-shopping"></i>
              <span class="g-badge" id="itemCount" <?=(isset($this->cartCount) && $this->cartCount != 0 ) ? 'style="display:block"' : 'style="display:none"' ?>><?=(isset($this->cartCount)) ? $this->cartCount : '' ?></span></a>
            <!-- ----cart-dropdown--- -->
            <div class="cart-dropdwon" id="updated_list">
              <div class="cart-drop-wrapper">
              <?php if ($this->session->userdata('user_id') == '') { ?>
                <?php if(isset($this->cartCount)){ 
                    $CI = &get_instance();
                    $CI->load->model('common_model');
                    $default_product_image =$CI->common_model->default_product_image(); 
                } ?> 
                  <?php foreach ($this->session->userdata('My_cart') as $key => $value) { 

                    $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
                    // dd($product);
                    $product[0]->image = preg_replace('/\s+/', '%20', $product[0]->image);

                    $CI->load->model('api_v3/common_model','co_model');
                    $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));
                    if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                      $product[0]->discount_price = $product[0]->without_gst_price;
                    }
                    if(!file_exists('public/images/'.$CI->folder.'product_image/'.$product[0]->image) || $product[0]->image == '' ){
                      if(strpos($product[0]->image, '%20') === true || $product[0]->image == ''){
                        $product[0]->image = $default_product_image;
                      }else{
                        $product[0]->image = $default_product_image;
                      }
                    }  
                    ?>
                  <div class="cart-drop-menu cart-drop-menu-1">
                    <div class="drop-img">
                      <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value['product_id']).'/'.$this->utility->safe_b64encode($value['product_weight_id'])?>">
                        <img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$product[0]->image?>" alt=""></a>
                    </div>
                    <div class="drop-text">
                      <h4><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value['product_id']).'/'.$this->utility->safe_b64encode($value['product_weight_id'])?>"><?=$value['product_name']?></a></h4>
                      <p>Qty : <?=$value['quantity']?></p>
                      <h3 class="notranslate"><?=$this->siteCurrency.' '.number_format((float)$product[0]->discount_price, 2, '.', '')?></h3>
                    </div>
                    <div class="cancel-btn remove_item" data-product_id="<?=$value['product_id']?>" data-product_weight_id="<?=$value['product_weight_id']?>">
                      <a href="javascript:"><i class="fa-regular fa-circle-xmark"></i></a>
                    </div>
                  </div>
                  <?php } ?>
                  <?php }else{ ?>
                    <?php if(isset($this->cartCount)){ ?>
                    <?php foreach ($mycart as $key => $value) { ?>
                    <div class="cart-drop-menu cart-drop-menu-1">
                    <div class="drop-img">
                      <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>">
                        <img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$value->image?>" alt=""></a>
                    </div>
                    <div class="drop-text">
                      <h4><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>"><?=$value->product_name?></a></h4>
                      <p>Qty : <?=$vakue->quantity?></p>
                      <h3 class="notranslate"><?=$this->siteCurrency.' '.number_format((float)$value->discount_price, 2, '.', '')?></h3>
                    </div>
                    <div class="cancel-btn remove_item" data-product_id="<?=$value->product_id?>" data-product_weight_id="<?=$value->product_weight_id?>">
                      <a href="javascript:"><i class="fa-regular fa-circle-xmark"></i></a>
                    </div>
                  </div>
                  <?php } ?>
                  <?php } ?>
                  <?php } ?>

              </div>

              <div class="total-amount">
                <p><?=$this->lang->line('Total')?></p>
                <h3 id="nav_subtotal" class="notranslate"><?=$this->siteCurrency .' '. getMycartSubtotal()?></h3>
              </div>
              <div class="drop-btns">
                <a href="./shop-cart.php" class="view-cart"><?=$this->lang->line('view cart')?></a>
                <a href="./checkout-page.php" class="checkout "><?=$this->lang->line('checkout')?></a>
               </div>
              </div>
              <div class="icon-tex">
                <p><?=$this->lang->line('your cart')?></p>
                <h3 class="notranslate" id="display_subtotal"><?=$this->siteCurrency.''.getMycartSubtotal()?></h3>
              </div>
          </div>
      </div>
    </div>
  </div>
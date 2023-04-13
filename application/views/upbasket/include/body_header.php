<div class="container">
      <div class="row">
        <div class="col-lg-12">

          <!-- -----header-top---- -->
          <div class="header-top">
            <div class="logo">
              <a href="<?=base_url()?>"><img src="<?=$this->theme_base_url.'/assets/images/header-logo.png'?>" alt=""></a>
            </div>
            <div class="search-btn">
              <div class="input-group">
              <?php if($this->uri->segment(1) == ''){ ?>
                <input type="text" class="form-control" id='search' data-search_val= ""  placeholder="Search vendor..">
                <span class="input-group-text"><span><i class="fa-solid fa-magnifying-glass"></i></span> Search</span>
              <?php } ?>
              <?php 
                if($this->uri->segment(1) != ''){ 
                  $placeholder = $this->lang->line('Search product..');
                }
                $segment1 = $this->uri->segment(1);
          
              if($segment1 != ''){ ?> 
                <input type="text" class="form-control" id='myInput' data-search_val= ""  placeholder="<?=$placeholder?>">
                <span class="input-group-text"><span><i class="fa-solid fa-magnifying-glass"></i></span> Search</span>
              <?php } ?>
              
              </div>
            </div>
            <div class="d-flex drp-grp">

              <form class="lng-drp" style="margin-top: -3px;">
                <!-- <select name="language" id="Language">
                  <option value="volvo">English</option>
                  <option value="saab">Arebic</option>
                </select> -->
                <div id="google_translate_element"></div>
              </form>
              <?php if($this->uri->segment(1)!='login' && $this->uri->segment(1) != '') { ?>
              <?php if($ApprovedBranch[0]->approved_branch > '1'  && count($branch_nav) > '1'){ ?>
              <form class="branch-drp">
                <select name="Branch" class="vendor_nav" id="Branch">
                    <option value=""> <?=$this->lang->line('All store')?></option>
                  <?php foreach ($branch_nav as $key => $v): ?>
                    <option value="<?=$v->id?>" <?=(isset($_SESSION['branch_id']) && $v->id == $_SESSION['branch_id']) ? 'selected' : '' ?>><?=$v->name?></option>
                  <?php endforeach ?>
                </select>
              </form>
              <?php } ?>
              <?php } ?>

            </div>
            <div class="social-icons">
                <div class="user-btn btn-group">
                  <button class="dropdown-toggle user-login-icon border-0" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <!-- <img src="<?=$this->theme_base_url?>//assets/images/header-user-icon.svg" alt="User"> -->
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 11.5C11.7614 11.5 14 9.26142 14 6.5C14 3.73858 11.7614 1.5 9 1.5C6.23858 1.5 4 3.73858 4 6.5C4 9.26142 6.23858 11.5 9 11.5Z" stroke="#222528" stroke-width="1.5" stroke-miterlimit="10"/>
                      <path d="M1.42188 15.875C2.18979 14.5447 3.2944 13.4399 4.62465 12.6718C5.9549 11.9037 7.46392 11.4993 9 11.4993C10.5361 11.4993 12.0451 11.9037 13.3753 12.6718C14.7056 13.4399 15.8102 14.5447 16.5781 15.875" stroke="#222528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                  <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuClickableInside">
                    <?php if($this->session->userdata('user_id') == ''){ ?> 
                      <li>
                        <div class="dropdown-item m-0 p-0">
                          <div class="user-login-header">
                            <h4><?=$this->lang->line('New Customer')?>?</h4>
                            <h3><a href="<?=base_url().'register'?>"><?=$this->lang->line('Sign up')?></a></h3>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-item m-0 p-0">
                          <div class="user-data-wrapper">
                            <a href="<?=base_url().'login'?>"><span><i class="fa-solid fa-right-to-bracket"></i></span><?=$this->lang->line('Login Account')?></a>
                          </div>
                        </div>
                      </li>
                      <?php }else{ ?>
                        <li>
                          <div class="dropdown-item m-0 p-0">
                            <div class="user-data-wrapper">
                              <a href="<?=base_url().'users_account/users/account'?>"><span><i class="fa-sharp fa-solid fa-user"></i></span><?=$this->lang->line('My account')?></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="dropdown-item m-0 p-0">
                            <div class="user-data-wrapper">
                              <a href="javascript:" id="logout"><span><i class="fa-solid fa-folder-plus"></i></span><?=$this->lang->line('logout')?></a>
                            </div>
                          </div>
                        </li>
                      <?php } ?>
                  </ul>
                </div>

                <div class="cart-btn btn-group">
                  <button class="cart-icons dropdown-toggle border-0" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <!-- <img src="<?=$this->theme_base_url?>//assets/images/header-cart-icon.svg" alt="cart"> -->
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.375 13.375H5.45313L3.27344 1.39063C3.24793 1.2471 3.17307 1.11701 3.06179 1.02285C2.95051 0.928697 2.80982 0.876396 2.66406 0.875H1.25" stroke="#222528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6.25 16.5C7.11294 16.5 7.8125 15.8004 7.8125 14.9375C7.8125 14.0746 7.11294 13.375 6.25 13.375C5.38706 13.375 4.6875 14.0746 4.6875 14.9375C4.6875 15.8004 5.38706 16.5 6.25 16.5Z" stroke="#222528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M14.375 16.5C15.2379 16.5 15.9375 15.8004 15.9375 14.9375C15.9375 14.0746 15.2379 13.375 14.375 13.375C13.5121 13.375 12.8125 14.0746 12.8125 14.9375C12.8125 15.8004 13.5121 16.5 14.375 16.5Z" stroke="#222528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M4.88281 10.25H14.6953C14.9875 10.2509 15.2706 10.1488 15.4949 9.96159C15.7193 9.77442 15.8704 9.51416 15.9219 9.22656L16.875 4H3.75" stroke="#222528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="g-badge" id="itemCount" <?=(isset($this->cartCount) && $this->cartCount != 0 ) ? 'style="display:block"' : 'style="display:none"' ?> ><?=(isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                  </button>
                  <ul class="dropdown-menu" id='updated_list' aria-labelledby="dropdownMenuClickableInside">
                    <div class="supportive-dropdown">
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
                        <li>
                          <div class="cart-drop-menu cart-drop-menu-1">
                            <div class="drop-img">
                                <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value['product_id']).'/'.$this->utility->safe_b64encode($value['product_weight_id'])?>"><img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$product[0]->image?>" alt=""></a>
                            </div>
                            <div class="drop-text">
                              <h4><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value['product_id']).'/'.$this->utility->safe_b64encode($value['product_weight_id'])?>"><?=$value['product_name']?></a></h4>
                              <p><?=$value['weight_no'] .' '.$value['weight_name']?></p>
                              <h3><?=$this->siteCurrency .' '.number_format((float)$product[0]->discount_price, 2, '.', '')?> </h3>
                            </div>
                            <div class="cancel-btn remove_item" data-product_id="<?=$value['product_id']?>" data-product_weight_id="<?=$value['product_weight_id']?>">
                              <a href="javascript:" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                            </div>
                          </div>
                        </li>
                        <hr>
                      <?php } ?>
                    </div>
                    <li>
                      <div class="total-amount p-0 notranslate">
                        <p><?=$this->lang->line('Total')?></p>
                        <h3 id="nav_subtotal"><?=$this->siteCurrency .' '. getMycartSubtotal()?></h3>
                      </div>
                      <div class="drop-btns p-0">
                        <a href="<?=base_url().'products/cart_item'?>" class="view-cart"><?=$this->lang->line('view cart')?></a>
                        <a href="<?=base_url().'checkout'?>" class="checkout "><?=$this->lang->line('checkout')?></a>
                      </div>
                    </li>
                    <?php }else{ ?>
                      <?php if(isset($this->cartCount)){ ?>
                        <?php foreach ($mycart as $key => $value) { ?>
                          <li>
                            <div class="cart-drop-menu cart-drop-menu-1">
                              <div class="drop-img">
                                  <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>"><img src="<?=base_url()?>public/images/<?=$this->folder?>product_image/<?=$value->image?>" alt=""></a>
                              </div>
                              <div class="drop-text">
                                <h4><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>"><?=$value->product_name?></a></h4>
                                <p><?=$value->weight_no.' '.$value->weight_name?></p>
                                <h3><?=$this->siteCurrency .' '.number_format((float)$value->discount_price, 2, '.', '')?> </h3>
                              </div>
                              <div class="cancel-btn remove_item" data-product_id="<?=$value->product_id?>" data-product_weight_id="<?=$value->product_weight_id?>">
                                <a href="javascript:" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                              </div>
                            </div>
                          </li>
                          <hr>
                       <?php } ?> 
                      </div>
                        <li>
                        <div class="total-amount p-0 notranslate">
                          <p>Total</p>
                          <h3 id="nav_subtotal"><?=$this->siteCurrency .' '. getMycartSubtotal()?></h3>
                        </div>
                        <div class="drop-btns p-0">
                          <a href="<?=base_url().'products/cart_item'?>" class="view-cart"><?=$this->lang->line('view cart')?></a>
                          <a href="<?=base_url().'checkout'?>" class="checkout "><?=$this->lang->line('checkout')?></a>
                        </div>
                      </li>
                      <?php } ?>
                    <?php } ?>
                    <hr>
                  </ul>
                </div>
                <div class="icon-tex">
                  <p><?=$this->lang->line('your cart')?></p>
                  <h3 class="notransalte" id="display_subtotal"><?=$this->siteCurrency.''.getMycartSubtotal()?></h3>
                </div>
            </div>
          </div>

          <!-- -----mobile-search-btn---- -->
          <div class="mobile-search-btn">
            <div class="input-group">
            <?php if($this->uri->segment(1) == ''){ ?>
              <input type="text" class="form-control" id='search' data-search_val= ""  placeholder="Search vendor..">
              <span class="input-group-text"><span><i class="fa-solid fa-magnifying-glass"></i></span></span>
            <?php } ?>
            <?php 
                if($this->uri->segment(1) != ''){ 
                  $placeholder = $this->lang->line('Search product..');
                }
                $segment1 = $this->uri->segment(1);
          
              if($segment1 != ''){ ?> 
                <input type="text" class="form-control" id='myInputMobile' data-search_val= ""  placeholder="<?=$placeholder?>">
                <span class="input-group-text"><span><i class="fa-solid fa-magnifying-glass"></i></span></span>
              <?php } ?>
            </div>
          </div>


          <!-- -------navigation-bar---- -->
          <nav>
            <div class="left-content">
              <ul>
                <li><a href="<?=base_url().'home'?>"><?=$this->lang->line('home')?></a></li>
                <li><a href="<?=base_url().'products'?>"><?=$this->lang->line('Shop')?></a></li>
                <li><a href="<?=base_url().'about'?>"><?=$this->lang->line('About Us')?></a></li>
                <li><a href="<?=base_url().'contact'?>"><?=$this->lang->line('Contact Us')?></a></li>
              </ul>
            </div>

            <div class="right-content">
              <div class="right-icon">
                <a href=""><img src="<?=$this->theme_base_url?>//assets/images/nav-call-icon.svg" alt=""></a>
              </div>
              <div class="right-text">
                <h4>Need help? Call Us:</h4>
                <h3><a href="javascript:"><?=$appLinks[0]->contact_number?></a></h3>
              </div>
            </div>
          </nav>

        </div>
      </div>
    </div>
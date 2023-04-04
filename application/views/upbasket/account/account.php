 <!-- ----hero-section--- -->
 <section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>My Account</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url().'home'?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">My Account</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- ------------shop-cart------------ -->
  <section class="my-account-section section">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-top-right-img.svg" alt="" class="checkout-top-right-img">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-mid-left-img.svg" alt="" class="checkout-mid-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-bottom-right-img.svg" alt="" class="checkout-bottom-right-img">
    <div class="container">

      <!-- ------tabs-part--- -->
      <div class="account-details-tabs">
        <div class="details-tabs">
          <!-- Nav pills -->
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link dashboard-tabs active" data-bs-toggle="pill" href="#tab-1"><?=$this->lang->line('My account')?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dashboard-tabs experience-active-img" data-bs-toggle="pill" href="#tab-2"><?=$this->lang->line('My orders')?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dashboard-tabs eduction-active-img" data-bs-toggle="pill" href="#tab-3"><?=$this->lang->line('My Wishlist')?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dashboard-tabs certificates-active-img" data-bs-toggle="pill" href="#tab-4"><?=$this->lang->line('My address')?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dashboard-tabs languge-active-img" data-bs-toggle="pill" href="#tab-5"><?=$this->lang->line('logout')?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link dashboard-tabs languge-active-img" data-bs-toggle="pill" href="#tab-6"><?=$this->lang->line('Delete Account')?></a>
            </li>
          </ul>
      </div>


        <!-- Tab panes -->
        <div class="tab-details">
          <div class="tab-content account-details-content">
            <!-- ---tab-1-- -->
            <div id="tab-1" class="container tab-pane active">
              <h2 class="title">Account <span>Details</span></h2>
              <!-- <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
              <div class="myaccout-detail-tab">
                <!-- <div class="choose-img">
                  <img src="<?=$this->theme_base_url?>/assets/images/myaccount-choose-img.png" alt="">
                </div> -->
                <div class="choose-img">
                    <input type="file" name="profileimage" class="choose-input" accept="image/*" onchange="loadFile(event)">
                    <img src="<?=$this->theme_base_url?>/assets/images/myaccount-choose-img.png" alt="" id="output" class="button">
                    <button class="choose-btn"><i class="fa-solid fa-camera"></i></button>
                </div>
                <div class="get-detials-account">
                  <form id='ChangePass' action="<?=base_url().'users_account/users/account'?>" method="post">
                    <div class="row">
                      <div class="col-xxl-6 col-md-6">
                        <div class="mb-3">
                          <label for="fname" class="form-label">First Name<span>*</span></label>
                          <input type="text" class="form-control" name="fname" placeholder="<?=$this->lang->line('First Name*')?>" value="<?=$userDetails[0]->fname?>" id="fname" aria-describedby="fname">
                        </div>
                      </div>
                      <div class="col-xxl-6 col-md-6">
                        <div class="mb-3">
                          <label for="lname" class="form-label">Last Name<span>*</span></label>
                          <input type="text" class="form-control" name="lname" placeholder="<?=$this->lang->line('Last Name*')?>" value="<?=$userDetails[0]->lname?>" id="lname" aria-describedby="lname">
                        </div>
                      </div>
                      <div class="col-xxl-12">
                        <div class="mb-3">
                          <label for="email" class="form-label">Email Address<span>*</span></label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="<?=$this->lang->line('Email*')?>" value="<?=$userDetails[0]->email?>" readonly aria-describedby="Enter Your E-mail" >
                        </div>
                      </div>
                      <div class="col-xxl-12">
                        <div class="mb-3">
                          <label for="text" class="form-label">GST Number<span>*</span></label>
                          <input type="text" class="form-control" name="user_gst_number" placeholder="<?=$this->lang->line('Gst number')?>" value="<?=$userDetails[0]->user_gst_number?>" aria-describedby="text"
                            placeholder="22AAAAA0000A1Z5">
                        </div>
                      </div>
                      <div class="col-xxl-6 col-md-6">
                        <div class="tab-select-box">
                          <label for="Country-code" class="form-label">Country Code<span>*</span></label>
                          <select class="form-select" name="country_code" id="country_code" aria-label="Country-code">
                          <?php foreach(GetDialcodelist() as $key => $value){ ?>
                                       <option <?=($key==$userDetails[0]->country_code)?'selected':'';?> value="<?=$key;?>"><?=$value;?></option>
                                 <?php } ?>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" id="exiting_country" value="<?=$userDetails[0]->country_code?>">
                      <input type="hidden" id="exiting_phone" value="<?=$userDetails[0]->phone?>">
                      <div class="col-xxl-6 col-md-6">
                        <div class="mb-3">
                          <label for="m-number" class="form-label">Mobile Number<span>*</span></label>
                          <input type="tel" class="form-control"  name="phone" placeholder="<?=$this->lang->line('Mobile Number*')?>" class="phone" id="phone" value="<?=$userDetails[0]->phone?>"  aria-describedby="text">
                        </div>
                      </div>
                      <div class="tab-save-btn">
                        <!-- <button type="submit" class=" signin-btn-green">Save</button> -->
                        <input class="common-input-btn" type="submit" id="btnAccSubmit" class="btn"><?=$this->lang->line('Save')?>/>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- ---tab-2-- -->
            <div id="tab-2" class="container tab-pane fade">
              <h2 class="title">My <span>Orders</span></h2>
              <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

              <div class="sub-tabs container">
                <ul class="nav nav-pills" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link dashboard-tabs active" data-bs-toggle="pill" href="#subtab-1">Completed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dashboard-tabs experience-active-img" data-bs-toggle="pill"
                      href="#subtab-2">Process</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dashboard-tabs eduction-active-img" data-bs-toggle="pill"
                      href="#subtab-3">Cancel</a>
                  </li>
                </ul>
               </div>            

              <div class="my-order-details">
                <div class="tab-content">
                <div class="accordion-items">

                  <!-- ------sub-tab-1----- -->
                  <div id="subtab-1" class="container tab-pane active" >
                    <div class="main-accordion">
                      <div class="accordion-heading">
                        <a href="#" class="delivered-btn">Delivered</a>

                        <div class="my-order-text">
                          <h3>Orders: <span> #3,345,512</span></h3>
                          <h3>Upbasket: <span> 41-42, Advance Business Park, Shahibaug Road, Ahmedabad-380004</span>
                          </h3>
                          <p><span><i class="fa-regular fa-clock"></i></span>09 Nov 2022, 10:49 AM</p>
                        </div>
                      </div>
                      <div class="accordion-content">
                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-1.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="all-detalis-wrapper">
                          <div class="all-detalis-left">
                            <h4>Total Amount</h4>
                            <h4>Product Discount</h4>
                            <h4>Total Amount Before Tax</h4>
                            <h4>Total Tax Amount</h4>
                            <h4>Delivery Charges</h4>
                            <h4>Total Item</h4>
                            <h4>Promocode Discount</h4>
                            <h4>Final Total</h4>
                            <h4>Self Pick Up OTP</h4>
                          </div>
                          <div class="all-detalis-right">
                            <h3>₹398.00</h3>
                            <h3>-₹20.00</h3>
                            <h3>₹18.00</h3>
                            <h3>₹0.00</h3>
                            <h3>Free</h3>
                            <h3>1</h3>
                            <h3>₹0.00</h3>
                            <h3>₹18.00 </h3>
                            <h3>0565</h3>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- ------sub-tab-2----- -->
                  <div id="subtab-2" class="container tab-pane " >
                    <div class="main-accordion">
                      <div class="accordion-heading">
                        <a href="" class="delivered-btn">Delivered</a>

                        <div class="my-order-text">
                          <h3>Orders: <span> #3,345,512</span></h3>
                          <h3>Upbasket: <span> 41-42, Advance Business Park, Shahibaug Road, Ahmedabad-380004</span>
                          </h3>
                          <p><span><i class="fa-regular fa-clock"></i></span>09 Nov 2022, 10:49 AM</p>
                        </div>
                      </div>
                      <div class="accordion-content">
                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-1.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="all-detalis-wrapper">
                          <div class="all-detalis-left">
                            <h4>Total Amount</h4>
                            <h4>Product Discount</h4>
                            <h4>Total Amount Before Tax</h4>
                            <h4>Total Tax Amount</h4>
                            <h4>Delivery Charges</h4>
                            <h4>Total Item</h4>
                            <h4>Promocode Discount</h4>
                            <h4>Final Total</h4>
                            <h4>Self Pick Up OTP</h4>
                          </div>
                          <div class="all-detalis-right">
                            <h3>₹398.00</h3>
                            <h3>-₹20.00</h3>
                            <h3>₹18.00</h3>
                            <h3>₹0.00</h3>
                            <h3>Free</h3>
                            <h3>1</h3>
                            <h3>₹0.00</h3>
                            <h3>₹18.00 </h3>
                            <h3>0565</h3>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- ------sub-tab-2----- -->
                  <div id="subtab-3" class="container tab-pane ">
                    <div class="main-accordion">
                      <div class="accordion-heading">
                        <a href="" class="delivered-btn">Delivered</a>

                        <div class="my-order-text">
                          <h3>Orders: <span> #3,345,512</span></h3>
                          <h3>Upbasket: <span> 41-42, Advance Business Park, Shahibaug Road, Ahmedabad-380004</span>
                          </h3>
                          <p><span><i class="fa-regular fa-clock"></i></span>09 Nov 2022, 10:49 AM</p>
                        </div>
                      </div>
                      <div class="accordion-content">
                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-1.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="my-order-details-content">
                          <div class="order-details-img">
                            <div class="accordion-img-wrapper">
                              <img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt="">
                            </div>
                            <div class="img-about-text">
                              <h3>Almond (Regular)</h3>
                              <h5>500 Gms</h5>
                              <p>Qty: <span>1</span></p>
                            </div>
                          </div>

                          <div class="accordion-price-text">
                            <h4>₹398.00</h4>
                          </div>
                        </div>

                        <div class="all-detalis-wrapper">
                          <div class="all-detalis-left">
                            <h4>Total Amount</h4>
                            <h4>Product Discount</h4>
                            <h4>Total Amount Before Tax</h4>
                            <h4>Total Tax Amount</h4>
                            <h4>Delivery Charges</h4>
                            <h4>Total Item</h4>
                            <h4>Promocode Discount</h4>
                            <h4>Final Total</h4>
                            <h4>Self Pick Up OTP</h4>
                          </div>
                          <div class="all-detalis-right">
                            <h3>₹398.00</h3>
                            <h3>-₹20.00</h3>
                            <h3>₹18.00</h3>
                            <h3>₹0.00</h3>
                            <h3>Free</h3>
                            <h3>1</h3>
                            <h3>₹0.00</h3>
                            <h3>₹18.00 </h3>
                            <h3>0565</h3>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
               </div>
      
            </div>
            </div>

            <!-- ---tab-3-- -->
            <div id="tab-3" class="container tab-pane fade">
              <h2 class="title">My <span>Wishlist </span></h2>
              <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

              <div class="cart-product-detail mywishlist-part">
                <table id="table-two-axis" class="two-axis">
                  <thead class="head-title">
                    <tr>
                      <th colspan="2">product</th>
                      <th>price</th>
                      <th>Stock Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mywishlist-part-img">
                      <span class="bt-content">
                        <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                        <div class="cart-detail-img"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-1.png" alt=""></div>
                      </span>
                        <!-- <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                        <div class="cart-detail-img"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-1.png" alt=""></div> -->
                      </td>
                      <td>
                        <div class="cart-detail-text">
                          <h4>Almond (Regular)</h4>
                          <h5>500 Gms</h5>
                        </div>
                      </td>
                      <td>
                        <div class="cart-price-text">
                          <h3>₹398.00</h3>
                        </div>
                      </td>
                      <td>
                        In Stock
                      </td>
                      <td>
                        <div>
                          <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                            Cart</a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="mywishlist-part-img">
                        <span class="bt-content">
                          <div>
                            <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                          </div>
                          <div class="cart-detail-img"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-2.png" alt=""></div>
                        </span>
                      </td>
                      <td>
                        <div class="cart-detail-text">
                          <h4>Saffron (Kesar)</h4>
                          <h5>500 Gms</h5>
                        </div>
                      </td>
                      <td>
                        <div class="cart-price-text">
                          <h3>₹398.00</h3>
                        </div>
                      </td>
                      <td>
                        In Stock
                      </td>
                      <td>
                        <div>
                          <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                            Cart</a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="mywishlist-part-img">
                        <span class="bt-content">
                          <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                          <div class="cart-detail-img"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-3.png" alt=""></div>
                        </span>
                      </td>
                      <td>
                        <div class="cart-detail-text">
                          <h4>Pistachio (Pista)</h4>
                          <h5>500 Gms</h5>
                        </div>
                      </td>
                      <td>
                        <div class="cart-price-text">
                          <h3>₹398.00</h3>
                        </div>
                      </td>
                      <td>
                        In Stock
                      </td>
                      <td>
                        <div>
                          <a href="#" class="add-cart-btn"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to
                            Cart</a>
                        </div>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>

            <!-- ---tab-4-- -->
            <div id="tab-4" class="container tab-pane fade">
              <h2 class="title">My <span>Address</span></h2>
              <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

              <div class="address-wrapper">
                <div class="address-text">
                  <h3>Office</h3>
                  <p>2548 Broaddus Maple Court Avenue, Madisonville KY 4783, United States of America
                    America</p>
                </div>
                <div class="address-icons">
                  <a href="" class="add-address-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="" class="delet-address-btn"><i class="fa-solid fa-trash-can"></i></a>
                </div>
              </div>

              <div class="address-wrapper">
                <div class="address-text">
                  <h3>Home</h3>
                  <p>2548 Broaddus Maple Court Avenue, Madisonville KY 4783, United States of America
                    America</p>
                </div>
                <div class="address-icons">
                  <a href="" class="add-address-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="" class="delet-address-btn"><i class="fa-solid fa-trash-can"></i></a>
                </div>
              </div>
               
              <div class="adrress-btn">
                 <a href="" class="signin-btn-green" data-bs-toggle="modal" data-bs-target="#addres-popup ">Add New Address</a>
              </div>
            </div>


            <!-- ---tab-5-- -->
            <div id="tab-5" class="container tab-pane fade">

            </div>

          </div>
        </div>

      </div>
  </section>
  
<!-- --------address-popup---- -->
<!-- Modal -->
<div class="modal fade address-popup" id="addres-popup" tabindex="-1" aria-labelledby="addres-popup" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-sharp fa-regular fa-circle-xmark"></i></button>
      <div class="modal-body">
          <div class="accordion-content-3">
              <h3>Add Address</h3>
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                    <label for="fname" class="form-label">First Name<span>*</span></label>
                    <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="Mike">
                  </div>

                  <div class="col-lg-6">
                    <label for="lname" class="form-label">Last Name<span>*</span></label>
                    <input type="email" class="form-control" id="lname" aria-describedby="lname" placeholder="Hussy">
                  </div>

                  <div class="col-lg-12">
                    <label for="text" class="form-label">Country / Region<span>*</span></label>
                    <input type="text" class="form-control" id="text" aria-describedby="text" placeholder="+91 99989 99899">
                  </div>

                  <div class="col-lg-12">
                    <label for="add" class="form-label">Street address<span>*</span></label>
                    <input type="text" class="form-control" id="add" aria-describedby="add" placeholder="Address">
                  </div>

                  <div class="col-lg-12">
                    <input type="text" class="form-control" id="add" aria-describedby="add" placeholder="Apartment, suite, etc.">
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="city" class="form-label">Town / City<span>*</span></label>
                    <select class="form-select" aria-label="city">
                      <option selected>Ahmedabad</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="state" class="form-label">State<span>*</span></label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Gujarat</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="state" class="form-label">State<span>*</span></label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Gujarat</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <label for="zipcode" class="form-label">ZIP Code<span>*</span></label>
                    <input type="text" class="form-control" id="add" aria-describedby="zipcode" placeholder="380050">
                  </div>
                  <div class="save-btn text-center">
                    <button type="submit" class=" signin-btn-green">Save</button>
                  </div>
                </div>
              </form>  
              </div>
          </div>
    </div>
  </div>
</div>
<header>
    <div class="container position-relative">
        <img src="<?=$this->theme_base_url?>/assets/images/home/light.png" class="position-absolute light-image" alt="light" />
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./index.php">
                            <img src="<?=$this->theme_base_url?>/assets/images/logo.svg" alt="logo" />
                        </a>
                        <div class="navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="./about.php">About us</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php">Contact us</a>
                                </li>  
                            </ul>

                            <div class="drp-grp">
                                <form class="lng-drp">
                                    <select name="language" id="Language">
                                    <option value="volvo">English</option>
                                    <option value="saab">Arebic</option>
                                    </select>
                                </form>
                                <form class="branch-drp">
                                    <select name="Branch" id="Branch">
                                    <option value="volvo">Branch</option>
                                    <option value="saab">Branch-2</option>
                                    </select>
                                </form>
                            </div>

                            <div class="header-search-wrap">
                                <div class="searchbar">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username">
                                            <button type="submit" value="Search" class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </button>
                                        </div>
                                    </form>

                                        <button class="mobile-search-toggle">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>

                                    <!-- -----search-btn---- -->
                                    <div class="search-block search-list-blcok">
                                        <form class="search-form">
                                        <input type="search" name="search" class="search-input" placeholder="Search here...">

                                        <button type="submit" class="search-here-icon"><i class="fa-solid fa-magnifying-glass "></i></button>
                                        

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
                                </div>
                                
                               
                                
                                <div class="header-account-btn btn-group">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <!-- <img src="<?=$this->theme_base_url?>/assets/images/user.svg" alt="user" /> -->
                                        <svg width="27" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z" stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10"/>
                                            <path d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu user-login-drop" aria-labelledby="dropdownMenuClickableInside">
                                        <li>
                                            <div class="user-login-header">
                                                <h4>New Customer?</h4>
                                                <a href="./sign-up-page.php">sign up</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-data-wrapper">
                                                <a href="./sign-in-page.php"><span><i class="fa-solid fa-right-to-bracket"></i></span>Login Account</a>
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="user-data-wrapper">
                                                <a href="./myaccount-page.php"><span><i class="fa-sharp fa-solid fa-user"></i></span>My Account</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-data-wrapper">
                                                <a href="./shop-cart.php"><span><i class="fa-solid fa-folder-plus"></i></span>My Orders</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="header-card-btn btn-group cart-in">
                                    <button class="dropdown-toggle position-relative cart-new-btn" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <svg width="27" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 22H8.725L5.2375 2.825C5.1967 2.59537 5.07691 2.38722 4.89887 2.23657C4.72082 2.08592 4.49572 2.00223 4.2625 2H2" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 27C11.3807 27 12.5 25.8807 12.5 24.5C12.5 23.1193 11.3807 22 10 22C8.61929 22 7.5 23.1193 7.5 24.5C7.5 25.8807 8.61929 27 10 27Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M23 27C24.3807 27 25.5 25.8807 25.5 24.5C25.5 23.1193 24.3807 22 23 22C21.6193 22 20.5 23.1193 20.5 24.5C20.5 25.8807 21.6193 27 23 27Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.8125 17H23.5125C23.98 17.0014 24.433 16.838 24.7919 16.5386C25.1508 16.2391 25.3927 15.8227 25.475 15.3625L27 7H6" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <!-- <img src="<?=$this->theme_base_url?>/assets/images/cart.svg" alt="" /> -->
                                        <span class="h-badge">22</span>
                                    </button>
                                    <ul class="dropdown-menu cart-dropdowns" aria-labelledby="dropdownMenuClickableInside">
                                        <div class="dropdown-title">
                                            <h4>My shopping cart</h4>
                                            <a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/header/image1.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <a href="./product-details.html"><h4>Wooden Dining Chair</h4></a>
                                                    <p>Qty : <span>2</span> </p>
                                                    <h3>₹1150.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                    <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/header/image2.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <a href="./product-details.html"><h4>Della Chair – Navy</h4></a>
                                                    <p>Qty : <span>2</span> </p>
                                                    <h3>₹2250.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                    <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/header/image3.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                <a href="./product-details.html"><h4>Artemis Lounge Chair</h4></a>
                                                <p>Qty : 2</p>
                                                <h3>₹1249.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <div>
                                            <div class="total-amount p-0">
                                                <p>Total</p>
                                                <h3>₹4,649</h3>
                                            </div>
                                            <div class="drop-btns p-0">
                                                <a href="./shop-cart.php" class="view-cart">view cart</a>
                                                <a href="./checkout-page.php" class="checkout">checkout</a>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-search-wrap cart-for-mobile">
                                <div class="header-account-btn btn-group">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <!-- <img src="<?=$this->theme_base_url?>/assets/images/user.svg" alt="user" /> -->
                                        <svg width="27" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z" stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10"/>
                                            <path d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                </div   >

                                <div class="header-card-btn btn-group">
                                    <button class="dropdown-toggle position-relative" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <img src="<?=$this->theme_base_url?>/assets/images/cart.svg" alt="" />
                                        <span class="h-badge">22</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-1.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <h4><a href="./product-details.html"></a></h4>
                                                    <p>500 Gms</p>
                                                    <h3>₹398.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                    <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-1.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                    <h4><a href="./product-details.html">Almond (Regular)</a></h4>
                                                    <p>500 Gms</p>
                                                    <h3>₹398.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                    <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                <div class="drop-img">
                                                    <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/cart-drop-img-1.png" alt=""></a>
                                                </div>
                                                <div class="drop-text">
                                                <h4><a href="./product-details.html">Almond (Regular)</a></h4>
                                                <p>500 Gms</p>
                                                <h3>₹398.00</h3>
                                                </div>
                                                <div class="cancel-btn">
                                                <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </nav>
            </div>
        </div>

        
    </div>


    

</header>



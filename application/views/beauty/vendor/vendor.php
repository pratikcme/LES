  <!-- ----hero-section--- -->
  <section class="hero-section listing-hero-sec common-banner-bg">
      <div class="container">
          <!-- <h2>Home /<span>My Account</span></h2> -->
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href=""><?= $this->lang->line('home') ?></a></li>
                  <li class="breadcrumb-item check-show active" aria-current="page"><?= $this->lang->line('vendor') ?></li>
              </ol>
          </nav>
      </div>
  </section>

  <section class="vendors contact-us-section section p-100">
      <div class="container">
          <div class="row">
              <div class="col-xl-12 text-center">
                  <div class="title">

                      <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.67475 7.94813C2.67475 16.2515 11.7184 18.1693 13.0225 19.5423C11.697 19.5423 8.76796 18.9321 7.6776 18.3219C4.6203 16.6438 1.41335 13.7888 0.494023 10.7813C-0.703241 5.70344 0.32298 4.00354 3.05958 1.82414C-0.42531 4.89698 0.622296 9.32117 1.17817 10.7813C3.78649 16.9707 9.3666 18.8014 11.2052 18.9321C6.75827 17.3848 3.50855 14.094 2.37543 11.6095C0.767675 6.93696 2.64624 3.13904 3.78649 1.82414C8.06243 -1.92429 12.6746 0.887138 14.0701 3.28435C16.3791 7.25077 15.8874 10.7813 15.6522 15.5759C16.5454 14.3337 17.4054 13.1786 19.2868 11.9146C23.0924 9.69165 26 11.4351 26 13.7888C25.5296 18.6924 19.073 19.5423 14.6688 20C17.8971 19.0411 22.2586 18.3219 23.9262 16.1425C25.5938 13.9632 24.0972 11.9146 21.1896 12.4376C17.9659 13.047 16.2132 15.851 14.6755 18.3111L14.6688 18.3219C14.7115 17.1015 14.9467 14.6388 15.2246 10.3673C14.797 3.02282 11.9108 1.93311 8.06243 1.82414C3.73518 1.66723 2.66762 5.84142 2.67475 7.94813Z" fill="#DE9F00" />
                      </svg>

                      <h2><?= $this->lang->line('vendor') ?></h2>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                  </div>
              </div>

              <div class="vendor-main">
                  <!-- <h2>New York, USA</h2> -->

                  <div class="row" id="vendorByajax">
                      <?php foreach ($branch as $key => $value) { ?>
                          <div class="col-xl-6 col-lg-6 col-md-6">
                              <a href="javascript:" data-ven_id="<?= $value->id ?>" class="vendor-wrapper vendor <?= (isset($_SESSION['branch_id']) && $value->id == $_SESSION['branch_id']) ? 'active' : '' ?>">
                                  <div class="circle-img"></div>
                                  <div class="vendor-left">
                                      <img src="<?= base_url() . 'public/images/' . $this->folder . 'vendor_shop/' . $value->image ?>" alt="">
                                  </div>
                                  <div class="vendor-right">
                                      <h3><?= $value->name ?></h3>

                                      <div class="contact-vendor">
                                          <div class="contact-content">
                                              <span><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8.00056 8.43813C8.96736 8.43813 9.75112 7.65438 9.75112 6.68757C9.75112 5.72076 8.96736 4.93701 8.00056 4.93701C7.03375 4.93701 6.25 5.72076 6.25 6.68757C6.25 7.65438 7.03375 8.43813 8.00056 8.43813Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M12.3739 6.68792C12.3739 10.6267 7.99749 13.6902 7.99749 13.6902C7.99749 13.6902 3.62109 10.6267 3.62109 6.68792C3.62109 5.52723 4.08218 4.41407 4.90291 3.59334C5.72364 2.77261 6.8368 2.31152 7.99749 2.31152C9.15818 2.31152 10.2713 2.77261 11.0921 3.59334C11.9128 4.41407 12.3739 5.52723 12.3739 6.68792V6.68792Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg></span>
                                              <h6><?= $value->address ?></h6>
                                          </div>
                                          <div class="contact-content">
                                              <span>
                                                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M10.5 11.8124V2.18705C10.5 1.70378 10.1082 1.31201 9.62497 1.31201L4.37476 1.31201C3.89149 1.31201 3.49972 1.70378 3.49972 2.18705L3.49972 11.8124C3.49972 12.2957 3.89149 12.6875 4.37476 12.6875H9.62497C10.1082 12.6875 10.5 12.2957 10.5 11.8124Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M7.00003 3.93706C7.36248 3.93706 7.6563 3.64324 7.6563 3.28079C7.6563 2.91834 7.36248 2.62451 7.00003 2.62451C6.63757 2.62451 6.34375 2.91834 6.34375 3.28079C6.34375 3.64324 6.63757 3.93706 7.00003 3.93706Z" fill="white" />
                                                  </svg>
                                              </span>
                                              <h6>+91-<?= $value->phone_no ?></h6>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>

      </div>

  </section>
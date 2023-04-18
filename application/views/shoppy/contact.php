  <!-- ----hero-section--- -->
  <style>
    label.error {
      color: red
    }
  </style>

  <section class="hero-section common-banner-bg login-section">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
    <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
          <h1> <?= $this->lang->line('Contact us') ?></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"> <?= $this->lang->line('Contact us') ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>


  <!-- contact-us-wrap -->
  <section class="contact-us-wrap p-100">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="title text-center">
            <h2>Reach <span>Out To Us</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
          </div>
        </div>
      </div>
      <div class="contact-data">

        <form id="form" method="post" class="contact-form-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0" action="<?= base_url() . 'contact' ?>">
          <h3>Write Us</h3>
          <div class="contact-form">
            <div class="input-form">
              <div>
                <label for="">Full Name</label>
              </div>
              <div>
                <input type="text" name="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter Full Name">
                <label for="fname" class="error"><?= form_error('fname') ?></label>
              </div>
            </div>
            <div class="input-form">
              <div>
                <label for="">Email</label>
              </div>
              <div>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                <label for="email" class="error"><?= form_error('email') ?></label>
              </div>
            </div>
            <div class="input-form">
              <div>
                <label for="">Phone</label>
              </div>
              <div>
                <input type="tel" name="mobile_no" class="form-control" id="phone-num" aria-describedby="phone-num" placeholder="Enter phone Number">
                <label for="mobile_no" class="error"><?= form_error('mobile_no') ?></label>
              </div>
            </div>
            <div class="input-form">
              <div>
                <label for="">Message</label>
              </div>
              <div>
                <textarea name="message" id="" cols="0" rows="0" placeholder="Enter Message"></textarea>
                <label for="message" class="error"><?= form_error('message') ?></label>
              </div>
            </div>
            <div>
              <button class="lg-btn" type="submit" name="submit" id="btnSubmit"><?= $this->lang->line('send') ?></button>
            </div>
          </div>
        </form>
        <div class="contact-info wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
          <div class="contact-info-wrap">
            <h3>Contact Info</h3>
            <div>
              <div class="d-flex align-items-center mb-50">
                <div class="contact-icon">

                  <svg id="Layer_1" data-name="Layer 1" xmlns="<?= $this->theme_base_url . '/assets/img/conatct-us/DeviceMobileCamera.svg' ?>" viewBox="0 0 19.73 30.5">
                    <defs>
                      <style>
                        .contact-us-icon {
                          fill: none;
                          stroke: #f5512b;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-width: 1.5px;
                        }
                      </style>
                    </defs>
                    <path class="contact-us-icon" d="M26.62,29.85V6.15A2.16,2.16,0,0,0,24.46,4H11.54A2.15,2.15,0,0,0,9.39,6.15v23.7A2.15,2.15,0,0,0,11.54,32H24.46A2.16,2.16,0,0,0,26.62,29.85ZM18,10.46a1.62,1.62,0,1,0-1.61-1.61A1.62,1.62,0,0,0,18,10.46Z" transform="translate(-8.14 -2.75)" />
                  </svg>
                </div>
                <div>
                  <p><?= $appLinks[0]->contact_number ?></p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-50">
                <div class="contact-icon">

                  <svg id="Layer_1" data-name="Layer 1" xmlns="<?= $this->theme_base_url . '/assets/img/conatct-us/EnvelopeSimple.svg' ?>" viewBox="0 0 28.35 21.88">
                    <defs>
                      <style>
                        .contact-us-icon {
                          fill: none;
                          stroke: #f5512b;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-width: 1.5px;
                        }
                      </style>
                    </defs>
                    <path class="contact-us-icon" d="M5.08,8.31H30.92V26.62a1.1,1.1,0,0,1-.31.76,1.08,1.08,0,0,1-.76.31H6.16a1.06,1.06,0,0,1-1.08-1.07Zm25.84,0L18,20.15,5.08,8.31" transform="translate(-3.83 -7.06)" />
                  </svg>
                </div>
                <div>
                  <a href="javascript:"><?= $appLinks[0]->contact_email ?></a>
                </div>
              </div>
              <div class="d-flex align-items-center mb-50">
                <div class="contact-icon">

                  <svg id="Layer_1" data-name="Layer 1" xmlns="<?= $this->theme_base_url . '/assets/img/conatct-us/MapPin.svg' ?>" viewBox="0 0 24.04 30.5">
                    <defs>
                      <style>
                        .contact-us-icon {
                          fill: none;
                          stroke: #f5512b;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-width: 1.5px;
                        }
                      </style>
                    </defs>
                    <path class="contact-us-icon" d="M18,19.08a4.31,4.31,0,1,0-4.31-4.31A4.31,4.31,0,0,0,18,19.08Zm10.77-4.31C28.77,24.46,18,32,18,32S7.23,24.46,7.23,14.77a10.77,10.77,0,0,1,21.54,0Z" transform="translate(-5.98 -2.75)" />
                  </svg>
                </div>
                <div>
                  <p><?= $appLinks[0]->contact_us_address ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ------------contact-us-section------------ -->
<section class="cmn-banner banner about-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="cmn-banner-wrap text-center">
          <h3 class="title2 text-uppercase"><?= $this->lang->line('Contact us') ?></h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a></li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= $this->lang->line('Contact us') ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-detail p-120">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="contact-detail-wrap">
          <h3 class="title2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0" data-wow-offset="0">
            <?= $this->lang->line('Contact us') ?></h3>
          <div class="contact-detail-main-div wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0" data-wow-offset="0">
            <div class="contact-wrap">
              <div class="contact-icon-wrap">
                <svg width="26" height="32" viewBox="0 0 26 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.9996 17.0768C15.3787 17.0768 17.3073 15.1482 17.3073 12.7691C17.3073 10.39 15.3787 8.46143 12.9996 8.46143C10.6205 8.46143 8.69189 10.39 8.69189 12.7691C8.69189 15.1482 10.6205 17.0768 12.9996 17.0768Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M23.7689 12.7692C23.7689 22.4615 12.9997 30 12.9997 30C12.9997 30 2.23047 22.4615 2.23047 12.7692C2.23047 9.91305 3.36508 7.17386 5.3847 5.15423C7.40433 3.13461 10.1435 2 12.9997 2C15.8559 2 18.5951 3.13461 20.6147 5.15423C22.6343 7.17386 23.7689 9.91305 23.7689 12.7692V12.7692Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="contact-detail-text">
                <h6><?= $this->lang->line('Address') ?></h6>
                <p><?= $appLinks[0]->contact_us_address ?></p>
              </div>
            </div>
            <div class="contact-wrap">
              <div class="contact-icon-wrap">
                <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.6157 27.846V4.15372C18.6157 2.96419 17.6514 1.99988 16.4619 1.99988L3.5388 1.99988C2.34926 1.99988 1.38495 2.96419 1.38495 4.15372V27.846C1.38495 29.0356 2.34926 29.9999 3.5388 29.9999H16.4619C17.6514 29.9999 18.6157 29.0356 18.6157 27.846Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M10.0011 8.46148C10.8933 8.46148 11.6165 7.73825 11.6165 6.8461C11.6165 5.95395 10.8933 5.23071 10.0011 5.23071C9.10897 5.23071 8.38574 5.95395 8.38574 6.8461C8.38574 7.73825 9.10897 8.46148 10.0011 8.46148Z" fill="#CC833D" />
                </svg>
              </div>
              <div class="contact-detail-text">
                <h6><?= $this->lang->line('Phone') ?></h6>
                <a href="tel:<?= $this->lang->line('Phone') ?>">
                  <p class="d-inline-block"><?= $appLinks[0]->contact_number ?></p>
                </a>
              </div>
            </div>
            <div class="contact-wrap">
              <div class="contact-icon-wrap">
                <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.07715 1.30762H27.9233V19.6153C27.9233 19.9009 27.8098 20.1748 27.6079 20.3768C27.4059 20.5788 27.132 20.6922 26.8464 20.6922H3.15407C2.86845 20.6922 2.59453 20.5788 2.39257 20.3768C2.19061 20.1748 2.07715 19.9009 2.07715 19.6153V1.30762Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M27.9233 1.30762L15.0002 13.1538L2.07715 1.30762" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="contact-detail-text">
                <h6><?= $this->lang->line('Email') ?></h6>
                <a href="mailto:<?= $appLinks[0]->contact_email ?>">
                  <p><?= $appLinks[0]->contact_email ?></p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="map">
          <div id="map" style="width: 100%; height: 100%;" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form pb-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title title text-center center-title">
          <span class="small-title mb-2"><?= $this->lang->line('Contact Us') ?></span>
          <h2> <?= $this->lang->line('Send Us An Message') ?></h2>
        </div>
      </div>
      <div class="col-lg-12">
        <form id="form" method="post" action="<?= base_url() ?>contact">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="fname"><?= $this->lang->line('Full Name'); ?></label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="<?= $this->lang->line('Full Name'); ?>">
                <label for="fname" class="error"><?= form_error('fname') ?></label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email"><?= $this->lang->line('Email'); ?></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="<?= $this->lang->line('Enter Email'); ?>">
                <label for="email" class="error"><?= form_error('email') ?></label>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="phone-num"><?= $this->lang->line('Phone'); ?></label>
                <input type="text" name="mobile_no" id="phone-num" class="form-control" placeholder="<?= $this->lang->line('Enter phone Number'); ?>">
                <label for="mobile_no" class="error"><?= form_error('mobile_no') ?></label>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <label for="message"><?= $this->lang->line('Message'); ?></label>
                <textarea name="message" id="message" rows="4" class="form-control" placeholder="<?= $this->lang->line('Enter Message'); ?>"></textarea>
                <label for="message" class="error"><?= form_error('message') ?></label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-center">
                <button type="submit" type="submit" name="submit" id="btnSubmit" class="cmn-btn"><?= $this->lang->line('Submit'); ?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<script type="text/javascript">
  function initialize() {
    var latitude = <?= $getLatLongOfBranch[0]->latitude; ?>;
    var longitude = <?= $getLatLongOfBranch[0]->longitude; ?>;
    // put latitude and longitude data here
    var latinfo = new google.maps.LatLng(latitude, longitude);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latinfo,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latinfo,
      draggable: false,
      animation: google.maps.Animation.BOUNCE,
      anchorPoint: new google.maps.Point(0, -29)
    });
    var infowindow = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="pop_window">' + '<div><b>Location</b> : Connaught Place, New Delhi</div></div>';
      // put content to the infowindow
      infowindow.setContent(iwContent);
      // show infowindow in the google map and at the current marker location
      infowindow.open(map, marker);
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
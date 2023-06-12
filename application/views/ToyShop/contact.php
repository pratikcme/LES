<!-- <section class="cmn-banner banner about-banner">
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.595366386584!2d72.50965841484987!3d23.038624621509506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b279b50bf1b%3A0xa4c68aa0205a0c78!2sPakwan%20Chokdi!5e0!3m2!1sen!2sin!4v1677157937397!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</section> -->



<section class="banner login-section common-banner-bg">
    <img src="<?= $this->theme_base_url ?>/assets/img/common-star-bg.png" alt="" class="common-star-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('Contact us') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Contact us') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-us p-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="title">
                    <span>
                        <svg width="130" height="37" viewBox="0 0 130 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.3953 29.45C43.3829 28.4113 42.4339 27.3203 41.6561 26.0859C40.9247 24.9254 40.8025 23.7163 41.3011 22.4341C42.2716 19.9383 43.5132 17.5876 44.9813 15.3578C45.1258 15.1387 45.1722 14.9485 45.0964 14.6933C44.2615 11.9017 44.4381 9.1264 45.2168 6.35287C45.5941 5.01028 46.2256 3.85975 47.3664 3.03473C48.567 2.16642 49.9148 1.95273 51.3508 2.11232C53.7422 2.37741 56.0666 2.88415 58.2055 4.05271C58.4044 4.16181 58.5819 4.1014 58.7603 4.04279C61.2177 3.2358 63.7393 2.92292 66.3144 3.06538C66.9949 3.10325 67.6764 3.1817 68.3507 3.28719C68.6254 3.33047 68.8208 3.2881 69.0438 3.1258C71.213 1.54698 73.6481 0.579486 76.2579 0.0916833C78.5182 -0.331199 80.6366 0.733671 81.7212 2.77234C83.0707 5.30873 83.8146 8.01193 83.5354 10.9045C83.4516 11.7773 83.6862 12.3363 84.2401 12.9549C85.8688 14.7717 87.2844 16.7554 88.4814 18.8933C89.0924 19.9843 89.1566 21.1105 88.7106 22.2718C87.8365 24.5494 86.5521 26.5728 84.9831 28.4194C84.9349 28.4753 84.893 28.5375 84.8484 28.5961C84.7396 28.6881 84.621 28.6601 84.5148 28.6042C83.8048 28.2291 83.1207 27.8153 82.5382 27.2499C82.4481 27.1625 82.3911 27.0633 82.4125 26.9316C82.6025 26.479 82.9726 26.1607 83.2616 25.782C84.2615 24.4674 85.1356 23.0815 85.7903 21.5523C86.0294 20.9951 85.9964 20.5325 85.6886 20.0285C84.7815 18.5434 83.7986 17.1143 82.6934 15.7726C81.9709 14.8962 81.2413 14.0252 80.4386 13.2209C80.2397 13.0207 80.1781 12.8097 80.253 12.5293C81.0076 9.71338 80.4849 7.05526 79.2487 4.49453C78.7456 3.4513 77.8117 2.78136 76.4203 3.1267C74.4999 3.60278 72.6714 4.28444 71.0221 5.40792C70.6769 5.64325 70.3326 5.884 70.0543 6.20048C69.7618 6.5332 69.4202 6.59 69.0054 6.49082C67.7576 6.19057 66.491 6.08146 65.2065 6.07154C62.9329 6.05441 60.745 6.47369 58.631 7.29962C58.2287 7.45651 57.9219 7.43396 57.5571 7.18601C55.9302 6.08417 54.0883 5.56661 52.1759 5.27718C51.6193 5.19332 51.0645 5.07791 50.4954 5.08512C49.4483 5.09865 48.6072 5.64415 48.2718 6.64771C47.3638 9.35993 47.1666 12.083 48.3083 14.7862C48.5064 15.255 48.4707 15.6085 48.1683 16.0269C46.5663 18.2432 45.2748 20.6389 44.2134 23.1654C43.9583 23.7722 43.9948 24.2744 44.3819 24.8001C44.9956 25.6341 45.6458 26.4303 46.3897 27.1489C46.5583 27.3112 46.7608 27.46 46.7831 27.7287C46.7447 28.0245 46.5209 28.1913 46.3193 28.3545C45.8358 28.7449 45.3096 29.074 44.7824 29.3995C44.6727 29.4671 44.5416 29.597 44.3926 29.45H44.3953Z"
                                fill="#ED7524" />
                            <path
                                d="M44.3953 29.45C45.2971 29.0325 46.1141 28.4951 46.7751 27.735C46.8108 27.5069 46.9856 27.378 47.131 27.231C49.0853 25.2473 50.1717 22.8507 50.4357 20.0736C50.5811 18.5479 50.7051 17.0223 51.3018 15.586C52.3284 13.1145 54.1329 11.6024 56.7294 11.0497C59.275 10.5078 61.2712 11.4284 62.875 13.394C63.3879 14.0225 63.7866 14.7276 64.1585 15.448C64.2254 15.5778 64.2754 15.7564 64.4457 15.7618C64.6535 15.769 64.6803 15.5607 64.7436 15.4173C65.1584 14.4796 65.6632 13.5969 66.3349 12.8214C67.6719 11.2778 69.3319 10.5168 71.3861 10.6944C73.137 10.8459 74.6863 11.4816 75.9502 12.7123C77.1615 13.8917 77.8376 15.3858 78.2176 17.0295C78.4682 18.1151 78.4986 19.2332 78.7224 20.3215C79.205 22.665 80.2825 24.6838 81.9397 26.3906C82.1146 26.571 82.334 26.7152 82.4277 26.9668C83.1207 27.6818 83.9172 28.2409 84.8484 28.5943C84.9715 28.6719 85.1009 28.7422 85.2177 28.8297C85.5602 29.0857 85.669 29.5348 85.4844 29.899C85.2917 30.2813 84.8475 30.4608 84.4363 30.2985C84.1509 30.1858 83.8789 30.0379 83.6006 29.9053C82.9682 29.7007 82.4883 29.2453 81.9567 28.8774C81.6775 28.6845 81.4287 28.4455 81.1495 28.249C78.4932 25.8677 77.0357 22.8687 76.6415 19.3198C76.522 18.2441 76.3614 17.1765 75.9529 16.163C75.0529 13.9287 73.3653 12.7583 71.0329 12.5906C69.595 12.4869 68.4631 13.1965 67.5854 14.3272C66.6391 15.5463 66.1092 16.9574 65.7444 18.4415C65.6374 18.8789 65.5437 19.3189 65.4679 19.7634C65.3707 20.3323 65.021 20.6614 64.5278 20.6723C64.0354 20.6831 63.6902 20.3928 63.5609 19.7922C63.3219 18.6877 63.0159 17.6057 62.5548 16.576C62.0678 15.4877 61.4621 14.4769 60.5149 13.7195C59.5622 12.9576 58.491 12.6889 57.294 12.9107C54.8491 13.3652 53.4015 14.8727 52.7575 17.2522C52.4292 18.4641 52.4497 19.721 52.2624 20.95C51.7906 24.0508 50.4669 26.7125 48.2111 28.8847C47.5511 29.4401 46.9089 30.0208 46.1659 30.468C46.041 30.5428 45.942 30.6718 45.7752 30.6582C45.6057 30.7439 45.4354 30.825 45.2686 30.9143C44.6808 31.229 44.2348 31.1614 43.9556 30.7105C43.6898 30.2813 43.8548 29.8071 44.3944 29.4482L44.3953 29.45Z"
                                fill="#ED7524" />
                            <path
                                d="M81.2092 28.1984C82.0066 28.7682 82.804 29.3381 83.6014 29.9079C79.8793 33.4993 75.4195 35.5938 70.3897 36.4901C67.0208 37.0906 63.6304 37.133 60.2312 36.7218C56.0497 36.216 52.1268 34.9483 48.5322 32.7085C47.56 32.1026 46.6074 31.4624 45.7752 30.6617C46.5565 30.0657 47.3379 29.4706 48.1192 28.8746C48.3155 28.8647 48.452 28.9891 48.5938 29.0946C52.0483 31.6653 55.9516 33.08 60.1696 33.667C61.9348 33.9122 63.7152 34.0267 65.4964 33.9555C68.8725 33.8203 72.1683 33.263 75.2875 31.8799C77.2293 31.0188 79.0409 29.9413 80.6375 28.5176C80.8025 28.3706 80.9604 28.2011 81.2074 28.1993L81.2092 28.1984Z"
                                fill="#ED7524" />
                            <path
                                d="M82.4285 26.9686C80.7258 25.516 79.6046 23.6802 78.9115 21.555C78.5369 20.4054 78.4646 19.2053 78.2827 18.0223C77.9223 15.6843 77.1062 13.5536 75.0939 12.1668C73.0014 10.7251 70.7162 10.2319 68.3213 11.3851C66.6569 12.1858 65.6909 13.6663 64.9184 15.2938C64.8034 15.5364 64.8096 15.9286 64.4662 15.9475C64.0791 15.9692 64.0782 15.5445 63.9507 15.3001C63.3727 14.1866 62.6894 13.156 61.7163 12.3562C59.7584 10.7467 57.5972 10.68 55.3477 11.5925C52.8056 12.624 51.5042 14.669 50.9022 17.2694C50.6239 18.474 50.672 19.7174 50.4544 20.9274C49.9718 23.6054 48.8043 25.9092 46.7751 27.7341C45.8278 26.7784 44.91 25.8001 44.1652 24.6658C43.886 24.2411 43.8209 23.8579 44.0198 23.3647C45.1053 20.6678 46.4977 18.1458 48.1852 15.7915C48.385 15.5129 48.4136 15.3065 48.2691 14.9882C47.3111 12.8747 47.2166 10.6692 47.6697 8.42402C47.791 7.82351 47.9667 7.23202 48.1469 6.64593C48.4519 5.6568 49.3493 4.93006 50.3429 4.98146C52.9992 5.11941 55.5546 5.65139 57.8006 7.20767C57.9968 7.34382 58.16 7.36366 58.3723 7.2762C61.2525 6.0869 64.2459 5.72353 67.3267 6.06797C67.9743 6.1401 68.6129 6.29248 69.2534 6.41781C69.4541 6.45749 69.6101 6.44937 69.776 6.28978C71.4815 4.64694 73.5847 3.77953 75.8119 3.16279C76.3828 3.005 76.9519 2.82827 77.5629 2.9509C78.2622 3.09066 78.8232 3.45313 79.1506 4.07798C80.567 6.77848 81.2012 9.6025 80.336 12.6276C80.2539 12.9143 80.4047 13.0397 80.5607 13.1993C82.5703 15.2614 84.3213 17.5255 85.8099 20.0014C86.1319 20.5361 86.1525 20.9996 85.9116 21.5595C85.1035 23.435 84.0126 25.122 82.6854 26.6593C82.598 26.7612 82.5124 26.8649 82.4267 26.9677L82.4285 26.9686Z"
                                fill="#F9F6FC" />
                            <path
                                d="M81.2092 28.1984C78.6636 30.495 75.7379 32.0855 72.4591 33.0269C69.6066 33.8456 66.6925 34.1305 63.7384 34.0656C60.2214 33.988 56.8069 33.3767 53.537 32.0287C51.589 31.2253 49.7774 30.1857 48.1192 28.8747C49.0852 27.8522 49.9638 26.7648 50.6381 25.5169C51.7192 23.5161 52.1991 21.3629 52.3391 19.1033C52.4435 17.4289 52.8511 15.8248 54.0169 14.558C55.3352 13.1252 56.9862 12.4914 58.9182 12.8187C60.1134 13.0216 60.9635 13.8042 61.6539 14.7627C62.7126 16.2324 63.2781 17.914 63.6519 19.6705C63.7821 20.2827 64.0488 20.5694 64.526 20.5667C64.9996 20.5631 65.2565 20.2782 65.3698 19.6515C65.6695 17.9906 66.1262 16.3839 67.0154 14.934C68.7985 12.0261 72.2084 11.605 74.6586 13.9863C75.8012 15.0972 76.3453 16.5092 76.579 18.0493C76.8181 19.6182 76.9581 21.1997 77.5201 22.7055C78.3157 24.8388 79.5564 26.6584 81.2083 28.2002L81.2092 28.1984Z"
                                fill="#F9F6FC" />
                            <path
                                d="M64.6946 23.5305C65.4162 23.5449 65.9897 23.6739 66.4839 24.0463C67.0279 24.4565 67.0913 25.0011 66.6506 25.5205C66.4678 25.736 66.2644 25.9371 66.053 26.1246C65.6606 26.4727 65.6427 27.1525 66.029 27.5772C66.3706 27.9541 67.0003 27.9613 67.3919 27.5907C67.6577 27.3383 67.7906 26.9992 67.9663 26.6873C68.051 26.5367 68.117 26.3338 68.3311 26.3329C68.571 26.332 68.6995 26.5304 68.794 26.7098C68.9367 26.9812 68.9537 27.2815 68.8823 27.5862C68.5024 29.2191 66.5882 29.9233 65.2485 28.9009C64.9907 28.7034 64.8872 28.7178 64.6553 28.936C63.4057 30.11 61.3765 29.5708 60.8591 27.9469C60.7494 27.6025 60.7575 27.267 60.9483 26.9514C61.0893 26.7197 61.2596 26.6818 61.4443 26.9019C61.6557 27.1534 61.8457 27.4248 62.0731 27.6602C62.4566 28.0578 62.9446 28.1624 63.3727 27.9721C63.8445 27.762 63.9088 27.341 63.9355 26.8883C63.9498 26.6422 63.8535 26.497 63.6474 26.3852C63.2915 26.1922 62.9829 25.9317 62.7091 25.6332C62.3398 25.2311 62.3371 24.7433 62.7091 24.3438C63.2781 23.7316 64.0194 23.5657 64.6955 23.5314L64.6946 23.5305Z"
                                fill="#ED7524" />
                            <path
                                d="M60.1937 18.236C60.1955 19.1052 60.0055 19.785 59.4864 20.3378C58.7951 21.0744 57.8158 21.115 57.0523 20.4523C55.9587 19.5019 55.7375 17.5606 56.5911 16.3885C57.2958 15.4201 58.4847 15.3155 59.3321 16.1612C59.9342 16.7627 60.1812 17.5165 60.1937 18.2369V18.236Z"
                                fill="#ED7524" />
                            <path
                                d="M70.4174 18.2044C70.9748 18.3162 71.5082 18.3532 71.9961 18.5786C72.3779 18.7553 72.7427 18.9546 72.9327 19.3604C72.9871 19.4767 73.079 19.6074 72.9844 19.7391C72.8756 19.8905 72.7257 19.8328 72.5795 19.7932C71.8213 19.5912 71.0658 19.382 70.2693 19.3847C69.7751 19.3865 69.2971 19.4623 68.8243 19.5948C68.3757 19.721 68.1402 19.5173 68.2222 19.0565C68.2445 18.9285 68.2927 18.7869 68.373 18.6886C69.1133 17.7879 69.9642 17.0395 71.1211 16.7347C71.221 16.7086 71.3236 16.6878 71.4262 16.6842C71.5823 16.6788 71.7794 16.6139 71.8552 16.8159C71.939 17.0395 71.7589 17.1323 71.5992 17.2207C71.155 17.4651 70.7661 17.7752 70.4174 18.2017V18.2044Z"
                                fill="#ED7524" />
                            <path
                                d="M59.3687 17.686C59.366 18.2405 59.0279 18.6697 58.5971 18.6643C58.1413 18.658 57.7613 18.1521 57.7729 17.5652C57.7827 17.0323 58.1065 16.6175 58.5195 16.6076C58.9753 16.5968 59.3713 17.1008 59.3687 17.686Z"
                                fill="#FEFCFE" />
                            <path d="M1 18H31" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                            <path d="M99 18H129" stroke="#ED7524" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <h2><?= $this->lang->line('Contact us') ?></h2>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="contact-us-top">
                    <div class="contact-top-wrp">
                        <div class="contact-top-icon">
                            <svg id="Layer_1" data-name="Layer 1"
                                xmlns="<?= $this->theme_base_url ?>/assets/img/conatct-us/MapPin.svg"
                                viewBox="0 0 24.04 30.5">
                                <defs>
                                    <style>
                                    .contact-us-icon {
                                        fill: none;
                                        stroke: #f5512b;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 3 px;
                                    }
                                    </style>
                                </defs>
                                <path class="contact-us-icon"
                                    d="M18,19.08a4.31,4.31,0,1,0-4.31-4.31A4.31,4.31,0,0,0,18,19.08Zm10.77-4.31C28.77,24.46,18,32,18,32S7.23,24.46,7.23,14.77a10.77,10.77,0,0,1,21.54,0Z"
                                    transform="translate(-5.98 -2.75)"></path>
                            </svg>
                        </div>
                        <div class="contact-top-content">
                            <h3><?= $this->lang->line('Address') ?></h3>
                            <p><?= $appLinks[0]->contact_us_address ?></p>
                        </div>
                    </div>

                    <div class="contact-top-wrp">
                        <div class="contact-top-icon">
                            <svg id="Layer_1" data-name="Layer 1"
                                xmlns="<?= $this->theme_base_url ?>/assets/img/conatct-us/DeviceMobileCamera.svg"
                                viewBox="0 0 19.73 30.5">
                                <defs>
                                    <style>
                                    .contact-us-icon {
                                        fill: none;
                                        stroke: #f5512b;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 3px;
                                    }
                                    </style>
                                </defs>
                                <path class="contact-us-icon"
                                    d="M26.62,29.85V6.15A2.16,2.16,0,0,0,24.46,4H11.54A2.15,2.15,0,0,0,9.39,6.15v23.7A2.15,2.15,0,0,0,11.54,32H24.46A2.16,2.16,0,0,0,26.62,29.85ZM18,10.46a1.62,1.62,0,1,0-1.61-1.61A1.62,1.62,0,0,0,18,10.46Z"
                                    transform="translate(-8.14 -2.75)"></path>
                            </svg>
                        </div>
                        <div class="contact-top-content">
                            <h3><?= $this->lang->line('Phone') ?></h3>
                            <a href="tel:<?= $this->lang->line('Phone') ?>">
                                <p><?= $appLinks[0]->contact_number ?></p>
                            </a>
                        </div>
                    </div>

                    <div class="contact-top-wrp">
                        <div class="contact-top-icon">
                            <svg id="Layer_1" data-name="Layer 1"
                                xmlns="<?= $this->theme_base_url ?>/assets/img/conatct-us/EnvelopeSimple.svg"
                                viewBox="0 0 28.35 21.88">
                                <defs>
                                    <style>
                                    .contact-us-icon {
                                        fill: none;
                                        stroke: #f5512b;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 3px;
                                    }
                                    </style>
                                </defs>
                                <path class="contact-us-icon"
                                    d="M5.08,8.31H30.92V26.62a1.1,1.1,0,0,1-.31.76,1.08,1.08,0,0,1-.76.31H6.16a1.06,1.06,0,0,1-1.08-1.07Zm25.84,0L18,20.15,5.08,8.31"
                                    transform="translate(-3.83 -7.06)"></path>
                            </svg>
                        </div>
                        <div class="contact-top-content">
                            <h3><?= $this->lang->line('Email') ?></h3>
                            <a href="mailto:<?= $appLinks[0]->contact_email ?>">
                                <p><?= $appLinks[0]->contact_email ?></p>
                            </a>
                        </div>
                    </div>

                    <!-- Dipesh ask later to remove it -->
                    <div class="contact-top-wrp">
                        <div class="contact-top-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1944 26.0977C21.2161 26.0977 26.0977 21.2161 26.0977 15.1944C26.0977 9.17262 21.2161 4.29102 15.1944 4.29102C9.17262 4.29102 4.29102 9.17262 4.29102 15.1944C4.29102 21.2161 9.17262 26.0977 15.1944 26.0977Z"
                                    stroke="#BC764B" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M15.1953 8.83398V15.1943H21.5556" stroke="#BC764B" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="contact-top-content">
                            <h3>Open Hours</h3>
                            <p>Mon to Fri 09:30 - 17:30 <br> Sat & Sun 10:00 - 15:00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-12">
                <form class="contact-form-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s"
                    data-wow-offset="0" id="form" method="post" action="<?= base_url() ?>contact"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInDown;">

                    <h3><?= $this->lang->line('Send Us An Message') ?></h3>
                    <div class="contact-form">
                        <div class="input-form mb-4">
                            <div>
                                <label for="fname"><?= $this->lang->line('Full Name'); ?></label>
                            </div>
                            <div>
                                <input type="text" name="fname" id="fname"
                                    placeholder="<?= $this->lang->line('Full Name'); ?>">
                                <label for="fname" class="error"><?= form_error('fname') ?></label>
                            </div>
                        </div>
                        <div class="input-form mb-4">
                            <div>
                                <label for="">Email</label>
                            </div>
                            <div>
                                <input type="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="input-form mb-4">
                            <div>
                                <label for="">Phone</label>
                            </div>
                            <div>
                                <input type="phone" placeholder="Enter phone Number">
                            </div>
                        </div>
                        <div class="input-form mb-4">
                            <div>
                                <label for="">Message</label>
                            </div>
                            <div>
                                <textarea name="" id="" cols="20" rows="10" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button class="lg-btn cmn-btn" type="submit">Submit</button>
                        </div>

                        <!-- 
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

             -->

                    </div>
                </form>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="contact-form-map">
                    <div class="map">
                        <iframe class="contact-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.595366386584!2d72.50965841484987!3d23.038624621509506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b279b50bf1b%3A0xa4c68aa0205a0c78!2sPakwan%20Chokdi!5e0!3m2!1sen!2sin!4v1677157937397!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
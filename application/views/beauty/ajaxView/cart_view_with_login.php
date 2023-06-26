<?php
if (empty($my_cart)) { ?>
  <div class="empty-cart-dropdown">

    <div class="empty-cart-img">
      <svg width="146" height="121" viewBox="0 0 146 121" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100.931 88.8837C97.4708 88.9046 94.1125 90.0544 91.3658 92.1583C88.6192 94.2622 86.6344 97.2053 85.7132 100.54H44.1089C43.3588 97.8432 41.912 95.3912 39.914 93.4305C37.9159 91.4698 35.437 90.0697 32.7263 89.3707V84.6229H104.065C105.054 84.632 106.014 84.2922 106.777 83.6631C107.54 83.034 108.056 82.156 108.235 81.1837L116.635 36.9924C116.752 36.3796 116.731 35.7486 116.576 35.1446C116.42 34.5406 116.132 33.9785 115.734 33.4986C115.336 33.0187 114.836 32.6329 114.271 32.3687C113.706 32.1045 113.089 31.9686 112.465 31.9707H32.8784V12.0967C32.8741 11.188 32.575 10.3051 32.0263 9.58077C31.4775 8.8564 30.7086 8.32956 29.835 8.07933L6.76544 0.714115C6.22198 0.495493 5.63922 0.391275 5.05367 0.407984C4.46812 0.424693 3.89226 0.561964 3.36215 0.81122C2.83203 1.06048 2.35906 1.41638 1.97267 1.85667C1.58628 2.29696 1.29481 2.8122 1.11651 3.37019C0.938199 3.92819 0.876848 4.51694 0.936319 5.0997C0.99579 5.68247 1.17486 6.24671 1.4622 6.75719C1.74955 7.26766 2.13903 7.71339 2.60639 8.06656C3.07375 8.41972 3.60893 8.67274 4.17847 8.80978L24.3263 15.2011V89.5533C21.6775 90.3425 19.2804 91.809 17.3718 93.808C15.4632 95.8071 14.1092 98.2695 13.4434 100.952C12.7776 103.634 12.8233 106.444 13.5757 109.104C14.3281 111.763 15.7612 114.18 17.7336 116.116C19.706 118.053 22.1495 119.441 24.8224 120.143C27.4954 120.846 30.3055 120.84 32.9751 120.124C35.6448 119.409 38.0816 118.009 40.0449 116.064C42.0081 114.118 43.4299 111.695 44.1697 109.032H85.6828C86.4774 111.885 88.054 114.46 90.2347 116.465C92.4154 118.47 95.1133 119.826 98.0236 120.378C100.934 120.931 103.941 120.659 106.705 119.593C109.469 118.527 111.88 116.709 113.665 114.345C115.45 111.982 116.539 109.166 116.809 106.215C117.078 103.265 116.517 100.299 115.19 97.6504C113.862 95.0022 111.821 92.778 109.296 91.2288C106.77 89.6797 103.863 88.8674 100.9 88.8837H100.931ZM52.2349 40.4619H64.4088V76.1315H52.2349V40.4619ZM72.9306 40.4619H85.1046V76.1315H72.9306V40.4619ZM100.657 76.162H93.5959V40.4619H107.444L100.657 76.162ZM43.7437 40.4619V76.1315H32.8784V40.4619H43.7437ZM28.8915 112.197C27.4228 112.197 25.987 111.761 24.7658 110.945C23.5446 110.129 22.5927 108.969 22.0307 107.613C21.4686 106.256 21.3215 104.762 21.6081 103.322C21.8946 101.881 22.6019 100.558 23.6405 99.5196C24.679 98.4811 26.0022 97.7738 27.4428 97.4873C28.8833 97.2007 30.3764 97.3478 31.7333 97.9098C33.0903 98.4719 34.2501 99.4237 35.066 100.645C35.882 101.866 36.3176 103.302 36.3176 104.771C36.3177 105.754 36.1226 106.727 35.7437 107.634C35.3648 108.541 34.8096 109.363 34.1103 110.054C33.411 110.745 32.5816 111.29 31.6701 111.658C30.7585 112.026 29.7831 112.209 28.8002 112.197H28.8915ZM101.022 112.197C99.5532 112.197 98.1175 111.761 96.8963 110.945C95.6751 110.129 94.7232 108.969 94.1612 107.613C93.5991 106.256 93.452 104.762 93.7385 103.322C94.0251 101.881 94.7324 100.558 95.7709 99.5196C96.8095 98.4811 98.1326 97.7738 99.5732 97.4873C101.014 97.2007 102.507 97.3478 103.864 97.9098C105.221 98.4719 106.381 99.4237 107.197 100.645C108.013 101.866 108.448 103.302 108.448 104.771C108.448 105.754 108.253 106.727 107.874 107.634C107.495 108.541 106.94 109.363 106.241 110.054C105.542 110.745 104.712 111.29 103.8 111.658C102.889 112.026 101.913 112.209 100.931 112.197H101.022Z" fill="var(--secondary-color)" />
        <path class="smily-shap-outerborder" d="M120.644 50.2534C132.783 50.2534 142.623 40.2433 142.623 27.8953C142.623 15.5472 132.783 5.53711 120.644 5.53711C108.505 5.53711 98.6648 15.5472 98.6648 27.8953C98.6648 40.2433 108.505 50.2534 120.644 50.2534Z" fill="var(--secondary-color)" stroke="var(--new-svg-color)" stroke-width="5" stroke-miterlimit="10" />
        <path d="M112.686 24.4831C114.151 24.4831 115.339 23.2954 115.339 21.8304C115.339 20.3654 114.151 19.1777 112.686 19.1777C111.221 19.1777 110.033 20.3654 110.033 21.8304C110.033 23.2954 111.221 24.4831 112.686 24.4831Z" fill="white" />
        <path d="M130.118 24.4831C131.583 24.4831 132.771 23.2954 132.771 21.8304C132.771 20.3654 131.583 19.1777 130.118 19.1777C128.653 19.1777 127.465 20.3654 127.465 21.8304C127.465 23.2954 128.653 24.4831 130.118 24.4831Z" fill="white" />
        <path class="smile-shape" d="M128.223 37.3697C126.808 34.6507 124.432 32.8223 121.402 32.8223C118.372 32.8223 115.996 34.6507 114.581 37.3697" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>

    <div class="empty-cart-content">
      <h3>Your Cart is Empty!</h3>
      <p>Must add items on the cart before you procced to check out.</p>
      <a href="<?= base_url() . 'products' ?>" class="cmn-btn lg-btn">Return to Shop</a>
    </div>

  </div>

<?php } else { ?>
  <div class="cart-drop-wrapper">
    <?php
    foreach ($my_cart as $key => $value) {
      $product_image = $this->product_model->GetUsersProductInCart($value->product_weight_id);
      if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
        $value->discount_price = $product_image[0]->without_gst_price;
      }

      $product_image[0]->image = preg_replace('/\s+/', '%20', $product_image[0]->image);
      if (!file_exists('public/images/' . $this->folder . 'product_image/' . $product_image[0]->image) || $product_image[0]->image == '') {
        if (strpos($product_image[0]->image, '%20') === true || $product_image[0]->image == '') {
          $product_image[0]->image = $default_product_image;
        } else {
          $product_image[0]->image = $default_product_image;
        }
      }
      $value->product_name = $product_image[0]->name;
      $value->image = $product_image[0]->image;
      $encode_id =  $this->utility->safe_b64encode($value->product_id);
      $varient_id =  $this->utility->safe_b64encode($value->product_weight_id);
    ?>
      <div class="cart-drop-menu cart-drop-menu-1">
        <div class="drop-img">
          <a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>">
            <img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value->image ?>" alt="">
        </div>
        <div class="drop-text">
          <h4>
            <a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>"> <?= $value->product_name ?> </a>
          </h4>
          <p>Qty : <?= $value->quantity ?></p>
          <h3 class="notranslate"><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?></h3>
        </div>
        <div class="cancel-btn remove_item" data-product_id="<?= $value->product_id ?>" data-product_weight_id="<?= $value->product_weight_id ?>">
          <a href="javascript:"><i class="fa-regular fa-circle-xmark"></i></a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="total-amount notranslate">
    <p><?= $this->lang->line('Total') ?></p>
    <h3 id="nav_subtotal"> <?= $this->siteCurrency . ' ' . getMycartSubtotal() ?> </h3>
  </div>
  <div class="drop-btns">
    <a href="
			<?= base_url() . 'products/cart_item' ?>" class="view-cart"> <?= $this->lang->line('view cart') ?> </a>
    <a href="
			<?= base_url() . 'checkout' ?>" class="checkout "> <?= $this->lang->line('checkout') ?> </a>
  </div>

<?php } ?>
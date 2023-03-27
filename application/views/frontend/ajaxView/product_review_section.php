<?php foreach ($product_review as $key => $value) { ?>
<div class="col-xl-6 col-lg-6 col-md-6">
      <div class="testimonial-box">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
            </div>
            <div class="name-user">
              <strong> <?=$value->fname .' '.$value->fname?> </strong>
              <span>@ <?=$value->fname .''.$value->fname?> </span>
            </div>
          </div>
          <div class="reviews"> <?php for ($i=1; $i <=$value->ratting ; $i++) { ?> <i class="fas fa-star"></i> <?php } ?> <?php for ($i=1; $i <=(5-$value->ratting) ; $i++) { ?> <i class="fas fa-star blank-ratting"></i> <?php } ?>
          </div>
        </div>
        <div class="client-comment">
          <p> <?=$value->review?> </p>
        </div>
      </div>
    </div>
<?php } ?>
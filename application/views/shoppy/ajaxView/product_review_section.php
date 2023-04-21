<h3>Most Useful Review</h3>

<div class="supportive-div">
    <?php foreach ($product_review as $key => $value) { ?>

        <div class="rewiew-wrapper">
            <div class="review-left">
                <div class="review-img">
                    <svg xmlns="<?= $this->theme_base_url . '/assets/images/review-icon.svg' ?>" viewBox="0 0 24.37 23.44">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #cc833d;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M25.06,23.78a.92.92,0,0,1-.34.34.88.88,0,0,1-.47.13H1.75a.88.88,0,0,1-.47-.13.92.92,0,0,1-.34-.34,1,1,0,0,1-.13-.47,1,1,0,0,1,.13-.47A13.94,13.94,0,0,1,8.68,16.5a8.43,8.43,0,0,1-.79-14A8.44,8.44,0,0,1,20.83,12.4a8.52,8.52,0,0,1-3.51,4.1,13.94,13.94,0,0,1,7.74,6.34,1,1,0,0,1,.13.47A1,1,0,0,1,25.06,23.78Z" transform="translate(-0.81 -0.81)" />
                    </svg>
                </div>
                <div class="review-text">
                    <h6><?= $value->fname ?></h6>
                    <p><span><i class="fa-solid fa-circle-check"></i></span> Verified Buyers</p>
                </div>
            </div>
            <div class="review-right">
                <div class="review-right-top">
                    <span class="number-star"><?= $value->ratting ?> <span><i class="fa-solid fa-star"></i></span></span>
                    <h4><?= $value->review_title ?></h4>
                </div>
                <p><?= $value->review ?></p>
            </div>
        </div>
    <?php } ?>



</div>
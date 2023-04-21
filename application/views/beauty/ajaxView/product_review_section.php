    <div class="review-content ">
        <div class="review-left-content">
            <?php
            $sumOfRatting = 0;
            foreach ($product_review as $key => $value) { 
                $sumOfRatting += $value->ratting; 
            } ?>
                <div>
                    <h3><?=$this->lang->line('Customer Reviews')?></h3>
                    <h5>
                    <span>
                    <?php for ($j=1;$j<=round($sumOfRatting/count($product_review));$j++) {?>
                        <i class="fa-solid fa-star"></i>
                    <?php } ?>
                    <?php for ($i=1; $i <= 5-round($sumOfRatting/count($product_review)); $i++) { ?> 
                        <i class="fa-solid fa-star"></i>  <!--  blank star appear hear -->
                    <?php } ?>
                        <?=round($sumOfRatting/count($product_review))?></span>  <span><!--  174 Ratings &amp; --> <?=count($product_review)?> Reviews</span>
                    </h5>
                </div>
        </div>
    </div>                          
    <div class="supportive-div">  
        <?php foreach ($product_review as $key => $value) { ?>
        <div class="rewiew-wrapper">
            <div class="review-right">
                <div class="review-right-top">
                    <span class="number-star"> <span><i class="fa-solid fa-star"></i></span><?=$value->ratting?></span>
                    <h4><?=$value->title?></h4>
                </div>
                <h6><?=$value->fname?> on <?=date('M d, Y',strtotime($value->dt_created))?></h6>
                <p><?=$value->review?></p>
            </div>
        </div>
        <?php } ?>
    </div>
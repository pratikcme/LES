

      <div class="owl-5 owl-carousel owl-theme">
    
      <?php
$long_li = '';
$short_li = '';
$i = 0;
$j = 0;

if (!empty($subcategory)) {
    $this->load->model('product_model', 'this_model');

    foreach ($subcategory as $key => $value) {

        $count = $this->this_model->countProduct('', $value->id);

        if ($count == 0) {

            unset($subcategory[$key]);
            $j++;
            continue;
        }

        $i++;
        $count_sub = count($subcategory);
        // echo $k ;
        $sub_class = '';
        if ($count_sub == 1) {
            $sub_class = 'active_sub';
        }

?>

        <!-- <div class="owl-item"> -->
            <div class="techno-check">
                <a href="javascript:" class="sub-categories-wrapper sucategory_id sub_cat_link <?= $sub_class ?>" data-sub_id=<?= $value->id ?>>
                    <h3><?= $value->name ?></h3>
                </a>
            </div>
        <!-- </div> -->



<?php }
}
?>
       

      </div>
    
<script>
    
  $(".owl-5").owlCarousel({
    loop: false,
    items: 6,
    margin: 5,
    nav: false,
    // center:true,
    dots: true,
    // autoplay:true,
    responsive: {
      0: {
        items: 1,
      },
      300: {
        items: 4,
        dots: false,
        margin: 8,
      },
      600: {
        items: 4,
        dots: false,
        margin: 5,
      },
      768: {
        items: 4,
        dots: false,
        margin: 30,
      },
      992: {
        items: 3,
        dots: false,
        nav: false,
        margin: 30,
      },
      1000: {
        items: 4,
        dots: false,
        nav: false,
        margin: 30,
      },
      1200: {
        items: 5,
        dots: false,
        margin: 10,
        nav: false,
      },
      1400: {
        items: 6,
        dots: false,
        nav: false,
        margin: 5,
      },
    },
  }); 
</script>
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
            // continue;
        }

        $i++;
        $count_sub = count($subcategory);
        // echo $k ;
        $sub_class = '';
        if ($count_sub == 1) {
            $sub_class = 'active_sub';
        }

?>
        <div class="owl-item">
            <div class="techno-check">
                <a href="javascript:" class="sub-categories-wrapper sucategory_id sub_cat_link <?= $sub_class ?>" data-sub_id=<?= $value->id ?>>
                    <h3><?= $value->name ?></h3>
                </a>
            </div>
        </div>


        <?php if ($key >= 6) {
            continue;
        } ?>


    <?php }
    $class = "";
    if ($i < 6) {
        $class = "none";
    } else ?>




<?php }
?>
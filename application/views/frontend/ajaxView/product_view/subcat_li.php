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
        <li><a href="javascript:" class="sucategory_id sub_cat_link <?= $sub_class ?>" data-sub_id=<?= $value->id ?>><?= $value->name ?></a></li>

        <?php if ($key >= 6) {
            continue;
        } ?>
        <!-- <li><a href="javascript:" class="sucategory_id sub_cat_link  <?= $sub_class ?>" data-sub_id=<?= $value->id ?>><?= $value->name ?></a></li> -->

    <?php }
    $class = "";
    if ($i < 6) {
        $class = "none";
    } else ?>
    <div class="dropdown-subcategories" style="display:<?= $class ?>">
        <div class="dropdown"><button id="drp-btn" onclick="myFunction()" class="dropbtn">All</button></div>
    </div>

<?php }
?>
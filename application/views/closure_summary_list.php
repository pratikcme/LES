<?php
include('header.php');

/*$user_query = $this->db->query("SELECT * FROM `delivery_user` WHERE status != '9' ORDER BY id DESC ");

$user_result = $user_query->result();*/


?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a
                                href="<?php echo base_url() . 'admin/dashboard'; ?>">Home</a> / Closure Summary</a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div id="msg">
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
            <div class="alert alert-success fade in">
                <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading"> Closures List</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="display table table-bordered table-striped dataTable" id="closure_summary"
                                    aria-describedby="example_info" data-paging="false" data-searching="false"
                                    data-ordering="false">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 20px;"> Sr.No
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Opening Time
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Closing Time
                                            </th>

                                            <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                                aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 100px;">Cash ($)
                                            </th>

                                            <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                                aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 100px;">Store Credit ($)
                                            </th>
                                            <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                                aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 100px;">Profit/Loss
                                            </th>
                                            <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                                aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 100px;">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php
                                        foreach ($closures_list as $key => $result) { ?>
                                        <tr class="gradeX odd">
                                            <td class="hidden-phone">
                                                <?= $key + 1 ?>
                                            </td>
                                            <td class="hidden-phone">
                                                <?php echo date('l, jS F, Y, g:ia', $result['opening_time']); ?></td>

                                            <td class="hidden-phone sorting_1">
                                                <?php echo date('l, jS F, Y, g:ia', $result['closing_time']); ?></td>

                                            <td class="hidden-phone sorting_1"><?php
                                                                                    echo number_format((float)$result['counted'], 2, '.', '');
                                                                                    ?>
                                                <br>
                                                <?php
                                                    if ($result['difference'] >= 0) {
                                                        echo ' +' . number_format((float)$result['difference'], 2, '.', '');
                                                    } else {
                                                        echo number_format((float)$result['difference'], 2, '.', '');
                                                    }
                                                    ?>
                                            </td>
                                            <td class="hidden-phone sorting_1">
                                                <?php
                                                    echo isset($result['credit_card_counted']) ? number_format((float)$result['credit_card_counted'], 2, '.', '') : "0.00" ?>
                                                <br>
                                                <?php
                                                    if ($result['credit_card_differences'] >= 0) {
                                                        echo ' +' . number_format((float)$result['credit_card_differences'], 2, '.', '');
                                                    } else {
                                                        echo number_format((float)$result['credit_card_differences'], 2, '.', '');
                                                    }
                                                    ?>
                                            </td>
                                            <td class="hidden-phone sorting_1"><?php
                                                                                    echo number_format((float)$result['counted'] - $result['transaction'], 2, '.', '');
                                                                                    //here
                                                                                    ?>
                                            </td>
                                            <td class="hidden-phone sorting_1">
                                                <a href="<?php echo base_url() . 'register/closure_summary/' . $this->utility->encode($result['id']); ?>"
                                                    class="btn btn-primary btn-xs">View
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script>
// $(".dataTable").dataTable({
//     "aoColumnDefs": [{
//             "bSortable": false,
//         },
//         {
//             "bSearchable": false,
//         }
//     ]
// });
</script>
<?php include('footer.php'); ?>
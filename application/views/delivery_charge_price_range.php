<?php include('header.php'); ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a
                                href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / Delivery Charge</a></li>
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
        <!-- <div id="msg">
            <?php if ($this->session->flashdata('msg_error') && $this->session->flashdata('msg_error') != '') { ?>
            <div class="alert alert-danger fade in"> <strong>Error!</strong>
                <?php echo $this->session->flashdata('msg_error');; ?>
            </div>
            <?php }
            unset($this->session->flashdata); ?>
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
            <div class="alert alert-success fade in"> <strong>Success!</strong>
                <?php echo $this->session->flashdata('msg');; ?>
            </div>
            <?php }
            unset($this->session->flashdata); ?>
        </div> -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">Delivery Charge</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_variants_addForm?id=' . $this->utility->encode($id) ?>"
                                        class="btn btn-primary">Add Delivery Range Charge </a>
                                    <!-- <a href="#" id="delete_user" class="btn btn-danger">Delete City</a>-->
                                </div>
                                <table class="display table table-bordered table-striped dataTable" id="example"
                                    aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending"
                                                style="width: 100px;">Sr.No
                                            </th>

                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Start Price Range
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">End Price Range
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Delivery Charge
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending"
                                                style="width: 100px;">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php
                                        if (count($range_variants_list) > 0) {
                                            $i = 1;
                                            foreach ($range_variants_list as $result) { ?>
                                        <tr class="gradeX odd">
                                            <td class="hidden-phone">
                                                <!--                                                    --><?php //if ($result->id) { 
                                                                                                                    ?>
                                                <!--                                                        <input type="checkbox" name="delete[]" id='iId' value="--><?php //echo $result->id; 
                                                                                                                                                                                ?>
                                                <!--" class="checkbox_user">-->
                                                <!--                                                    --><?php echo $i; ?>
                                            </td>
                                            <td class="hidden-phone"><?php echo $result['start_price']; ?></td>
                                            <td class="hidden-phone"><?php echo $result['end_price']; ?></td>
                                            <td class="hidden-phone"><?php echo $result['delivery_charge']; ?></td>
                                            <!-- <td class="hidden-phone">
                                                <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_variants_add?id=' . $this->utility->encode($result['id']); ?>"
                                                    class="btn btn-danger btn-xs">Add Variant</a>
                                                <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_variants?id=' . $this->utility->encode($result['id']); ?>"
                                                    class="btn btn-primary btn-xs">Variants List</a>
                                            </td> -->
                                            <td>
                                                <a href="javascript:;"
                                                    onclick="single_delete(<?php echo $result['id']; ?>)"
                                                    class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_add?id=' . $this->utility->encode($result['id']); ?>"
                                                    class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                            }
                                        } else {
                                            ?>
                                        <tr class="gradeX odd">

                                            <td class="hidden-phone text-center" colspan="5">
                                                No Records To Show
                                            </td>
                                            <?php
                                        } ?>
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
<script type="text/javascript">
setTimeout(function() {
    $('#msg').hide();
}, 4000);

/*Single Delete Script*/

//
//$('#delete_user').click(function() {
//
//    if($('.checkbox_user:checked').length == 0) {
//        //alert("Select one record"); return false;
//        bootbox.alert('Please select at least one record to delete');
//        return;
//    }
//    bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
//        if (confirmed == true) {
//
//            var ids = [];
//            $('.checkbox_user:checked').each(function() {
//                ids.push($(this).val());
//            });
//            $.ajax({
//                url: ' //echo base_url().'city/multi_delete_city'; 


//',
//                data: { ids: ids.toString() },
//                success: function(data) {
//                    if(data.status == 1) {
//
//                        bootbox.alert("City have been deleted successfully.", function() {
//                            window.location.reload(true);
//                        });
//                    }
//                    else {
//                        bootbox.alert('Failed to delete the selected records.');
//                    }
//                },
//                error: function() {
//                    bootbox.alert('Failed to delete the selected records.');
//                }
//            });
//        }
//        else
//        {
//            window.location.reload(true);
//        }
//    });
//});
//
//$(document).ready(function(){
//    $('.checkboxMain').on('click',function(){
//        if(this.checked){
//            $('.checkbox_user').each(function(){
//                this.checked = true;
//            });
//        }else{
//            $('.checkbox_user').each(function(){
//                this.checked = false;
//            });
//        }
//    });

// $('.checkbox_user').on('click',function(){
//     if($('.checkbox_user:checked').length == $('.checkbox_user').length){
//         $('.checkboxMain').prop('checked',true);
//     }else{
//         $('.checkboxMain').prop('checked',false);
//     }
// });
// });
</script>
<?php include('footer.php'); ?>
<?php include('header.php'); ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / Delivery Charge </a></li>
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
                    <header class="panel-heading"> Delivery Charge (Distance in
                        Km) </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_add'; ?>" class="btn btn-primary">Add Delivery Charge</a>
                                </div>
                                <table class="display table table-bordered table-striped dataTable" id="example" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 100px;">Sr.No
                                            </th>

                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Start Range
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">End Range
                                            </th>

                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 100px;">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php $i = 1;
                                        foreach ($city_result as $result) { ?>
                                            <tr class="gradeX odd">

                                                <td class="hidden-phone">
                                                    <?php echo $i; ?>
                                                </td>
                                                <td class="hidden-phone"><?php echo $result->start_range; ?></td>
                                                <td class="hidden-phone"><?php echo $result->end_range; ?></td>

                                                <td>
                                                    <a href="javascript:;" onclick="single_delete(<?php echo $result->id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                    <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_add?id=' . $this->utility->encode($result->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo base_url() . 'delivery_charge/delivery_charge_variants/' . $this->utility->encode($result->id); ?>" class="btn btn-primary btn-xs">Price Variants</a>
                                                </td>
                                            </tr>
                                        <?php $i++;
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
    function single_delete(value) {

        bootbox.confirm("Are you sure you want to delete ?", function(confirmed) {
            if (confirmed == true) {
                var id = value;
                $.ajax({
                    url: '<?php echo base_url() . 'delivery_charge/delete'; ?>',
                    data: {
                        id: id
                    },
                    success: function(data) {

                        if (data.status == 1) {
                            bootbox.alert("Delivery charge has been deleted successfully.", function() {
                                window.location.reload(true);
                            });
                        } else {
                            alert('Failed to delete selected delivery charge.');
                        }
                    },
                    error: function() {
                        alert('Failed to delete selected delivery charge.');
                    }
                });
            } else {
                window.location.reload(true);
            }
        });
    }
</script>
<?php include('footer.php'); ?>
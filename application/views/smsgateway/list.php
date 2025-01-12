<?php $this->load->view('header.php'); ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/index'; ?>">Home</a> / Sms gateway</a></li>
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
                    <header class="panel-heading">Sms Gateway</header>
                    <div class="panel-body">
           <!--  <a href="#">
                <i class="fa fa-product-hunt"></i>
                <span>Test key</span>
                <div class="tgl-group">
                    <input class="tgl tgl-light" id="display-address2" name="keyTestLive" type="checkbox" value="<?=$paymentMethods[0]->IsTestOrLive?>" <?=($paymentMethods[0]->IsTestOrLive == 1) ? "checked" : "" ?>>
                    <label class="tgl-btn" for="display-address2"></label>
                </div>
            </a> -->
                        <div class="adv-table">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'smsgateway/add_sms_gateway'; ?>" class="btn btn-primary">Add Sms gateway</a>
                                    
                                </div>
                            <div id="example_wrapper" class="table-responsive dataTables_wrapper form-inline" role="grid">
                                <table class="display table table-bordered table-striped dataTable" id="example"
                                       aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                      
                                       
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Sms gateway name
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">SID
                                        </th>
                                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Auth token
                                        </th>
                                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Twillo number
                                        </th>
                                         <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                            aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                            aria-label="CSS grade: activate to sort column ascending"
                                            style="width: 100px;">Status
                                        </th>

                                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 100px;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <?php foreach ($paymentMethods as $result){ ?>
                                        <tr class="gradeX odd">
                                         
                                            <td class="hidden-phone">
                                                <?php echo $result->sms_gateway_name; ?>
                                            </td>
                                            <td class="hidden-phone">
                                                <?php echo $result->sid; ?>
                                            </td>
                                            <td class="hidden-phone">
                                                <?php echo $result->auth_token; ?>
                                            </td>
                                            <td class="hidden-phone">
                                                <?php echo $result->twillo_number; ?>
                                            </td>
                                             <td> 
                                                <?php if($result->status=='1'){ ?>
                                               
                                                 <input type="button" data-val="<?php echo $this->utility->encode($result->id); ?>" class="sms_gateway_status btn btn-primary btn-xs" value="active"> 
                                                <?php }else{ ?>
                                                   <input type="button" data-val="<?php echo $this->utility->encode($result->id); ?>" class="sms_gateway_status btn btn-danger btn-xs" value="In-active"> 
                                                <?php } ?>
                                                </td>
                                            <td>                                               
                                                <a href="<?php echo base_url() . 'smsgateway/add_sms_gateway?id=' . $this->utility->encode($result->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                 <a href="javascript:;" onclick="sms_gateway_delete(<?php echo $result->id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
<script type="text/javascript">
    setTimeout(function () { $('#msg').hide(); }, 4000);

    $('.sms_gateway_status').click(function(){

                var id = $(this).data('val');
                $.ajax({
                    url: '<?php echo base_url().'smsgateway/status_change'; ?>' ,
                    data: {
                        id: id
                    },
                    success: function (data) {

                        if (data.status == 1) {
                            bootbox.alert("Status Changed successfully.", function() {
                                window.location.reload(true);
                            });
                        }
                        else {
                            alert('Failed to delete selected user.');
                        }
                    },
                    error: function () {
                        alert('Failed to delete selected user.');
                    }
                });
            });

            // $(document).on('change','#display-address2',function(){
            //     var keyStatus = $(this).val();
            //     $.ajax({
            //         url: '<?php echo base_url().'smsgateway/IsTestOrLive'; ?>' ,
            //         type : "post",
            //         data: {
            //             keyStatus: keyStatus
            //         },
            //         success: function (data) {
            //             data = JSON.parse(data);
            //             if (data.status == 1) {
            //                 bootbox.alert("Live Mode Is Activate.", function() {
            //                     window.location.reload(true);
            //                 });
            //             }else if(data.status == 0){
            //                     bootbox.alert("Test Mode Is Activate.", function() {
            //                     window.location.reload(true);
            //                 });
            //             }
            //             else {
            //                 alert('Failed to delete selected user.');
            //             }
            //         },
            //         error: function () {
            //             alert('Failed to delete selected user.');
            //         }
            //     });
            // });

    /*Single Delete Script*/


    function sms_gateway_delete(value) {

        bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
            if (confirmed == true) {
                var id = value;
                $.ajax({
                    type:"post",
                    url: '<?php echo base_url().'smsgateway/delete_sms_gateway'; ?>' ,
                    data: {
                        id: id
                    },
                    success: function (data) {

                            console.log(data);

                        if (data.status == 1) {
                            bootbox.alert("sms gateway has been deleted successfully.", function() {
                                window.location.reload(true);
                            });
                        }
                      
                        else {
                            alert('Failed to delete selected sote.');
                        }
                    },
                    error: function () {
                        alert('Failed to delete selected sms gateway.');
                    }
                });
            }
            else
            {
                window.location.reload(true);
            }
        });
    }
</script>
<?php $this->load->view('footer.php'); ?>
<?php include('header.php'); ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/dashboard'; ?>">Home</a> / Staff</a></li>
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
                    <header class="panel-heading"> Staff</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'staff/add_staff'; ?>" class="btn btn-primary">Add Staff</a>
                                   
                                </div>
                                <table class="display table table-bordered table-striped dataTable" id="example"
                                       aria-describedby="example_info">
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
                                            style="width: 200px;">Staff Name
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Mobile
                                        </th>
                                        <th class="hidden-phone sorting" role="columnheader" tabindex="0"
                                            aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Engine version: activate to sort column ascending"
                                            style="width: 263px;">Email
                                        </th>

                                         <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                            aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                            aria-label="CSS grade: activate to sort column ascending"
                                            style="width: 100px;">Status
                                        </th>

                                        <th class="hidden-phone sorting_desc" role="columnheader" tabindex="0"
                                            aria-controls="example" rowspan="1" colspan="1" aria-sort="descending"
                                            aria-label="CSS grade: activate to sort column ascending"
                                            style="width: 100px;">Action
                                        </th>
                                         <!-- <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 100px;">Action
                                        </th> -->
                                    </tr>
                                    </thead>
                                   <!--  <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <?php $i = 1; foreach ($user_result as $result){ ?>
                                        <tr class="gradeX odd">
                                            <td class="hidden-phone">
                                               <?php echo $i; $i++; ?>
                                            </td>
                                            
                                            <td class="hidden-phone"><?php echo $result->name; ?></td>
                                            <td class="hidden-phone sorting_1"><?php echo $result->phone_no; ?></td>
                                            <td class="hidden-phone sorting_1"><?php echo $result->email; ?></td>
                                            
                                            <td> 
                                                <?php if($result->status==1){ ?>
                                               
                                                 <input type="button" data-val="<?php echo $this->utility->encode($result->id); ?>" class="vendor_status btn btn-primary btn-xs" value="active"> 

                                                <?php }else{ ?>
                                                   <input type="button" data-val="<?php echo $this->utility->encode($result->id); ?>" class="vendor_status btn btn-danger btn-xs" value="In-active"> 
                                                <?php } ?>
                                                </td>
                                                <td>
                                                <a href="<?php echo base_url().'staff/add_staff?id='.$this->utility->encode($result->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody> -->
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


    /*Single Delete Script*/
    $(document).on('click','.vendor_status',function(){
                var id = $(this).attr('data-val');
                $.ajax({
                    url: '<?php echo base_url().'staff/status_change'; ?>' ,
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
           
    

    $('#delete_user').click(function() {

        if($('.checkbox_user:checked').length == 0) {
            //alert("Select one record"); return false;
            bootbox.alert('Please select at least one record to delete');
            return;
        }
        bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
            if (confirmed == true) {

                var ids = [];
                $('.checkbox_user:checked').each(function() {
                    ids.push($(this).val());
                });
                $.ajax({
                    url: '<?php echo base_url().'admin/multi_delete_user'; ?>',
                    data: { ids: ids.toString() },
                    success: function(data) {
                        if(data.status == 1) {

                            bootbox.alert("User(s) has been deleted successfully.", function() {
                                window.location.reload(true);
                            });
                        }
                        else {
                            bootbox.alert('Failed to delete the selected records.');
                        }
                    },
                    error: function() {
                        bootbox.alert('Failed to delete the selected records.');
                    }
                });
            }
            else
            {
                window.location.reload(true);
            }
        });
    });

    $(document).ready(function(){
        $('.checkboxMain').on('click',function(){
            if(this.checked){
                $('.checkbox_user').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox_user').each(function(){
                    this.checked = false;
                });
            }
        });

        $('.checkbox_user').on('click',function(){
            if($('.checkbox_user:checked').length == $('.checkbox_user').length){
                $('.checkboxMain').prop('checked',true);
            }else{
                $('.checkboxMain').prop('checked',false);
            }
        });
    });
</script>
<?php include('footer.php'); ?>
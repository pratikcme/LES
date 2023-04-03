<?php $this->load->view('header.php'); ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/index'; ?>">Home</a> / cart amount based discount</a></li>
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
                    <header class="panel-heading"> List</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?=base_url().'cart_amount_based_discount/add'?>" class="btn btn-primary">Add </a>
                                  
                                </div>
                                <table class="display table table-bordered table-striped dataTable" id=""
                                       aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                      
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Sr.No 
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Cart Amount 
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Discount Percentage 
                                        </th>   
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Status 
                                        </th>                                   
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 100px;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                      <?php foreach ($promocodes as $key => $value) { ?>
                                          <tr>
                                           
                                            <td><?=$key+1;;?></td>
                                            <td><?=$value->cart_amount;?></td>
                                            <td><?=$value->discount_percentage;?></td>
                                            <td> 
                                                <?php if($value->status==1){ ?>
                                               
                                                 <input type="button" data-val="<?php echo $this->utility->encode($value->id); ?>" class="promocode_status btn btn-primary btn-xs" value="active"> 

                                                <?php }else{ ?>
                                                   <input type="button" data-val="<?php echo $this->utility->encode($value->id); ?>" class="promocode_status btn btn-danger btn-xs" value="In-active"> 
                                                <?php } ?>
                                                </td>
                                           
                                            <td>
                                                <a href="javascript:;" onclick="single_delete(<?php echo $value->id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                             
                                                <a href="<?=base_url().'cart_amount_based_discount/edit/'.$this->utility->encode($value->id); ?>" class="btn btn-primary btn-xs"/><i class="fa fa-pencil"></i></a>
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
 <?php $this->load->view('footer.php'); ?>  
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">

    function single_delete(value) {

        bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
            if (confirmed == true) {
                var id = value;
                $.ajax({
                    url: '<?php echo base_url().'cart_amount_based_discount/removeRecord'; ?>' ,
                    type:'post',
                    dataType:'json',
                    data: {
                        id: id
                    },
                    success: function (data) {

                        if (data.status == 1) {
                            bootbox.alert("Record deleted successfully.", function() {
                                window.location.reload(true);
                            });
                        }
                        else {
                            alert('Failed to delete selected sote.');
                        }
                    },
                    error: function () {
                        alert('Failed to delete selected record.');
                    }
                });
            }
            else
            {
                window.location.reload(true);
            }
        });
    }
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
                    url: '<?php echo base_url().'Promocode_manage/multipleDelete'; ?>',
                    dataType:'Json',
                    data: { ids: ids},
                    success: function(data) {
                        if(data.status == 1) {

                            bootbox.alert("Record has been deleted successfully.", function() {
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
        $('body').on('click','.checkboxMain',function(){
        
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


<script type="text/javascript">

      function readUploadedImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#ContentImage').attr('src', e.target.result);
                $('#show1').css('display','');

            }
            
            reader.readAsDataURL(input.files[0]);
        }
        $("#uploadimage").change(function(){
            readUploadedImage(this);
        });
    }
    
</script>

<script>
      /* active Inactive status Script*/
      $(document).on('click','.cart_base_amt_status',function(){
                var id = $(this).attr('data-val');
                $.ajax({
                    url: '<?php echo base_url().'cart_amount_based_discount/status_change'; ?>' ,
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
           
    
</script>
   

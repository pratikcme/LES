<?php $this->load->view('header.php')?>
<section id="main-content">
   <section class="wrapper">
   <?php if($this->session->flashdata('myMessage') != '' ){
      echo $this->session->flashdata('myMessage');
      } ?>              
      <!-- page start-->
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
               <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/dashboard'; ?>">Home</a>/ Push Notification </a></li>
            </ul>
            <!--breadcrumbs end -->
         </div>
      </div>
      <div class="row">
         <!--Left Part-->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="panel">
               <header class="panel-heading">
                    PushNotification
               </header>
               <form id="frmAddEdit" method="post" enctype="multipart/form-data" action="<?=$FormAction?>">
                  <input type="hidden" id="id" name="id" value="">
                  <div class="panel-body">
                     <div class="row">
                         <div class="col-md-6 col-sm-12 col-xs-12 padding-zero">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                               
                            <div class="form-group">
                                  <label for="branch">Branch</label>
                                  <select class="form-control" name="branch" id="branch">
                                      <option value="">Select Branch</option>
                                      <<?php foreach ($branchList as $key => $value): ?>
                                      <option value="<?=$value->id?>"><?=$value->name?></option>
                                      <?php endforeach ?>
                                  </select>
                            </div>
                               <div class="form-group" style="display:none">
                                  <label for="type">Category</label>
                                  <select class="form-control" name="category_id" id="category">
                                      <option value="">Select Category</option>
                                  </select>
                               </div>
                               <div class="form-group" style="display:none">
                                  <label for="type">Product</label>
                                  <select class="form-control" name="product_id" id="product">
                                      <option value="">Select product</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-sm-12 col-xs-12 padding-zero">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                               <div class="form-group">
                                  <label for="title">Title</label>
                                  <input type="text" id="title" name="title" class="form-control">
                                  <label for="title" style="color: red" class="error"><?php echo @form_error('title'); ?></label>
                               </div>
                               <div class="form-group" >
                                  <label for="message">Message</label>
                                  <input type="text" id="message" name="message" class="form-control" autocomplete="off">
                                  <label for="message" style="color: red" class="error"><?php echo @form_error('message'); ?></label>
                               </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <span class="panel-body padding-zero" > -->
                        <a href="<?=base_url().'admin/dashboard'?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-info pull-right margin_top_label" value="<?php echo @$getData[0]->created_at != '' ? 'Update' : 'Add'; ?>" id="btnSubmit" name="submit">
                        <!-- </span> -->
                     </div>
                  </div>
                  <input type="hidden" name="url" id="base_url" value="<?=base_url()?>">
               </form>
            </section>
         </div>
         <!--Map Part-->
      </div>
   </section>
</section>
<script type="text/javascript">
   function app_readUploadedImage(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();
         
         reader.onload = function (e) {
   
             $('#app_ContentImage').attr('src', e.target.result);
             $('#show1').css('display','');
   
         }
         
         reader.readAsDataURL(input.files[0]);
     }
     $("#app_image").change(function(){
         app_readUploadedImage(this);
     });
   }

   function web_readUploadedImage(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();
         
         reader.onload = function (e) {
   
             $('#web_ContentImage').attr('src', e.target.result);
             $('#show2').css('display','');
   
         }
         
         reader.readAsDataURL(input.files[0]);
     }
     $("#web_image").change(function(){
         web_readUploadedImage(this);
     });
   }
   
</script>
<?php $this->load->view('footer.php')?>
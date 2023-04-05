<?php $this->load->view('header.php')?>
<section id="main-content">
   <?php if($this->session->flashdata('myMessage') != '' ){
      echo $this->session->flashdata('myMessage');
      } ?>              
   <section class="wrapper">
      <!-- page start-->
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
               <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/dashboard'; ?>">Home</a> / <a href="<?php echo base_url().'cart_amount_based_discount'; ?>">List</a> /Edit </a></li>
            </ul>
            <!--breadcrumbs end -->
         </div>
      </div>
      <div class="row">
         <!--Left Part-->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="panel">
               <header class="panel-heading">
                  Edit
               </header>
               <form id="frmAddEdit" method="post" enctype="multipart/form-data" action="<?=$FormAction?>">
                  <input type="hidden" id="id" name="id" value="<?=(isset($updated_id)) ? $updated_id : '' ?>">
                  <div class="panel-body">
                     <div class="row">
                         <div class="col-md-6 col-sm-12 col-xs-12 padding-zero">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <select class="form-control" name="branch" id="branch1">
                                            <option value="">Select Branch</option>
                                            <<?php foreach ($branchList as $key => $value): ?>
                                        
                                            <option value="<?= $value->id?>"><?=$value->name?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <label for="branch" style="color: red" class="error"><?php echo @form_error('branch'); ?></label>
                                    </div>
                              <div class="form-group">
                                  <label for="max_cart"> Cart Amount</label>
                                  <input type="text" id="cart_amount" name="cart_amount" class="form-control" value="<?=$editData[0]->cart_amount?>">
                                  <label for="cart_amount" style="color: red" class="error"><?php echo @form_error('cart_amount'); ?></label>
                               </div>                              
                            </div>
                         </div>
                         <div class="col-md-6 col-sm-12 col-xs-12 padding-zero">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">                             
                               <div class="form-group">
                                  <label for="min_cart">Discount percentage</label>
                                  <input type="text" id="discount_percentage" name="discount_percentage" class="form-control" value="<?=$editData[0]->discount_percentage?>">
                                  <label for="discount_percentage" style="color: red" class="error"><?php echo @form_error('discount_percentage'); ?></label>
                               </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <span class="panel-body padding-zero" > -->
                        <a href="<?=base_url().'cart_amount_based_discount'?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-info pull-right margin_top_label" value="Add" id="btnSubmit" name="submit">
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
<?php $this->load->view('footer.php')?>
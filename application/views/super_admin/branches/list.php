<form  id="searchByVendor" action="<?=base_url().'super_admin/branches/'?>" method="post">
  <div class="row mb-5">  
    <div class="col-sm-8">
      <select name="vendor_id" class="form-control" id="vendor_id">
        <option value="">Select Vendor</option>
        <?php foreach ($getVendors as $key => $value) { ?>
          <option value="<?=$value->id?>" <?=($vendor_id == $value->id) ? 'selected' : '' ?>><?=$value->server_name?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-sm-3">
      <!-- <input class="btn btn-primary" type="submit" name="btnSubmit" value="Search"> -->
      <a class="btn btn-danger" href="<?=base_url().'super_admin/branches'?>">Reset</a>
    </div>
    <!-- <div class="col-sm-1">
    <a class="btn btn-primary" href="<?=base_url().'admin/experience/add'?>">Add</a>
  </div> -->

  </div>
</form>
<div class="row">
<!-- <div class="col-12 col-sm-12 col-lg-12 text-right mb-3">
	<a class="btn btn-primary" href="<?=base_url().'admin/profession/add'?>">Add</a>
</div> -->
</div>
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
      <?php if($this->session->flashdata('myMessage') != ''){
        echo $this->session->flashdata('myMessage');
      } ?>
        <input type="hidden" name="" id="base_url" value="<?=base_url()?>">
              <div class="card">
                <div class="card-header title-search">
                  <h4>Branches</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="profession">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Branch Email</th>
                          <th>Phone Number</th>
                          <th>Domain</th>
                          <th>Location</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      <?php
                        foreach ($getBranches as $value) { ?>
                      <tr>
                        <td><?=$value->name?></td>
                        <td><?=$value->email?></td>
                        <td><?=$value->phone_no?></td>
                        <td><a target="_blank" href="<?=$value->domain_name?>"><?=$value->domain_name?></a></td>
                        <td style="    width: 30%;"><?=$value->location?></td>
                        <td><a class="badge <?=($value->status =='0')? 'badge-danger':'badge-success'?>" href="<?=base_url().'super_admin/branches/change_status/'.$this->utility->safe_b64encode($value->id)?>"><?=($value->status=='0') ? 'Inactive' : 'Active' ?></a></td>
                        <td>
                          <a  href="<?=base_url().'super_admin/branches/edit/'.$this->utility->safe_b64encode($value->id)?>" class="btn btn-danger btn-action"  data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"  style="color: white"></i></a> 
                        <!-- <button class="btn btn-danger btn-action delete" id="delete_id" data-toggle="tooltip"   data-original-title="Delete" value="<?=$this->utility->safe_b64encode($value->id)?>" ><i class="fas fa-trash" style="color: white"></i></button></td> -->
                      </tr> 
                       <?php } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>

           

           
    </div>

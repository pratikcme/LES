<div class="row">
<!-- <div class="col-12 col-sm-12 col-lg-12 text-right mb-3">
	<a class="btn btn-primary" href="<?=base_url().'super_admin/projectConfig/add'?>">Add</a>
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
                  <h4>Configration Key</h4>
              <form class="form-inline">
                <!-- <div class="search-element"> -->
                 <!--  <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search" data-width="200" style="width: 200px;">
                  <button class="btn" type="button">
                    <i class="fas fa-search"></i>
                  </button> -->
                <!-- </div> -->
              </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="config">
                      <thead>
                        <tr>
                          <th>Server Name</th>
                          <th>Instagram Link</th>
                          <th>Facebook Link</th>
                          <th>Twitter Link</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      <?php
                        foreach ($getConfig as $value) { ?>
                      <tr>
                        <td><a class="redirect_to" href="javascript:" data-href="<?=$value->server_name?>"><?=$value->server_name?></a></td> 
                        <td><?=$value->server_name?></td>
                        <td><?=$value->instagram_link ?></td>
                        <td><?=$value->facebook_link ?></td>
                        <td>
                          <a  href="<?=base_url().'super_admin/projectConfig/edit/'.$this->utility->safe_b64encode($value->id)?>" class="btn btn-danger btn-action"  data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"  style="color: white"></i></a> 
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

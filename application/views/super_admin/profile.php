    <div class="row">
      <div class="col-lg-12">
       <?php if($this->session->flashdata('myMessage') != ''){
        echo $this->session->flashdata('myMessage');
      } ?>
      <section class="profile">

        <form id="ProfileForm" method="post" action="<?=@$FormAction?>" class="basic-form">
          <div class="invoice-title border-grey">
            <h3><span><i class="fas fa-user"></i> </span> Profile</h3>
          </div>
          <div class="p-30">
            <div class="row">
              <div class="col-lg-9 order-lg-1 order-md-2 order-sm-2 order-2">
                <div class="form-group row">
                  <label for="company_name" class="col-sm-3 col-form-label">Company Name<!-- <sup>*</sup> --></label>
                  <div class="col-sm-9">
                    <div class="d-flex js-center">
                      <input type="text" name="company_name" value="<?=$profile[0]->company_name?>" class="form-control" placeholder="company name"><!-- <span><a href="#" id="invoice"><i class="fas fa-cog"></i></a></span> -->
                    </div>
                    <label id="company_name-error" class="error" for="company_name"></label>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email<!-- <sup>*</sup> --></label>
                  <div class="col-sm-9">
                    <div class="d-flex js-center">
                      <input type="email" name="email" value="<?=$profile[0]->email?>" class="form-control" placeholder="example@gmail.com"><!-- <span><a href="#" id="invoice"><i class="fas fa-cog"></i></a></span> -->
                    </div>
                    <label id="email-error" class="error" for="email"></label>
                  </div>
                </div>
                  </div>
                  <div class="col-lg-3 order-lg-2 order-md-1 order-sm-1 order-1 d-none" >
                    <div class="user-img">
                      <img src="<?=base_url()?>public/users/assets/img/user-1.png">
                      <!-- <button><i class="fas fa-pencil-alt" ></i></button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="button-group">
               <!-- <button type="button" id="submit" class="btn btn-light">Save</button> -->
               <button type="submit" id="submit" class="btn btn-new">Update</button>
           <!-- <div class="dropup" style="display: inline-block;">
          <button type="button" class="btn btn-danger dropdown-toggle " data-toggle="dropdown">
           Save and Send
        </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </div> -->
        <!-- <button type="button" class="btn btn-danger">Save and Send</button> -->
        <a href="<?=base_url()?>super_admin/dashboard" class="btn btn-new">Cancle</a>
      </div>


    </form>

  </section>
</div>
</div>
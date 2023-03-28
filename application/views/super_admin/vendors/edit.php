  <style type="text/css">
    span.error{
      color: red;
    }
    @media (max-width: 575px){
     .basic-form .button-group a{
      margin-bottom: 8px !important;
    }
  }
</style>
<section class="new-customer background-blue-grey">
  <?php if($this->session->flashdata('myMessage') != ''){
    echo $this->session->flashdata('myMessage');
  } ?>
  <div class="container">
    <div class="row">
      <form id="editForm" method="POST" action="<?=$FormAction?>" class="new-cust-form basic-form">
        <div class="invoice-title border-grey ">
          <h3 ><span><i class="far fa-file-alt"></i></span> Edit Vendor</h3>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$editData[0]->email?>">
              </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="approved">Login With</label>
                  <select name="login_type" class="form-control">
                    <option value="">Select User Login Type</option>
                    <option value="0" <?=($editData[0]->login_type == 0) ? 'SELECTED' : ''?>>Login With Email</option>
                    <option value="1" <?=($editData[0]->login_type == 1) ? 'SELECTED' : ''?>>Login With Mobile</option>
                  </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="approved">Approved Branch</label>
                <input type="text" name="approved" class="form-control" placeholder="Approved" value="<?=$editData[0]->approved_branch?>">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="approved" >Display Price With Gst</label>
                  <select name="display_price_with_gst" class="form-control">
                    <option value="">Select gst display mode</option>
                    <option value="0" <?=($editData[0]->display_price_with_gst == 0) ? 'SELECTED' : ''?>>With Gst</option>
                    <option value="1" <?=($editData[0]->display_price_with_gst == 1) ? 'SELECTED' : ''?>>Without Gst</option>
                  </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="webTitle" >Web Title</label>
                <input type="text" name="webTitle" class="form-control" placeholder="webTitle" value="<?=$editData[0]->webTitle?>">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="language" >Primary Language</label>
                <select name="language_support" class="form-control">
                    <option value="">Select Language</option>
                    <option value="0" <?=($editData[0]->language_support == 0) ? 'SELECTED' : ''?>>English</option>
                    <option value="1" <?=($editData[0]->language_support == 1) ? 'SELECTED' : ''?>>Arabic</option>
                  </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="language" >Locality</label>
                <select name="locality" class="form-control">
                    <option value="">Select Locality</option>
                    <option value="0" <?=($editData[0]->locality == 0) ? 'SELECTED' : ''?>>Local</option>
                    <option value="1" <?=($editData[0]->locality == 1) ? 'SELECTED' : ''?>>International</option>
                  </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="store_type" >Store Type</label>
                <select class="form-control" name="store_type">
                  <option value="">Select Store Type</option>
                  <?php foreach($getStore as $key => $value){?>
                    <option value="<?=$value->id?>" <?=($value->id==$editData[0]->store_type) ? 'SELECTED' : ''?>><?=$value->name?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" class="col-sm-2 col-form-label pl-0">Android Version</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="android_version" class="form-control" placeholder="android version" value="<?=$editData[0]->android_version?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" class="col-sm-2 col-form-label pl-0">Ios Version</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="ios_version" class="form-control" placeholder="ios version" value="<?=$editData[0]->ios_version?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" class="col-sm-2 col-form-label pl-0">Android isforce</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="android_isforce" class="form-control" placeholder="android isforce" value="<?=$editData[0]->android_isforce?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" class="col-sm-2 col-form-label pl-0">Ios isforce</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="ios_isforce" class="form-control" placeholder="Ios isforce" value="<?=$editData[0]->ios_isforce?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-group">
          <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Save </button>
          <a href="<?=base_url().$this->url?>" style="display: inline-block;" class="btn btn-new">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>

</section>

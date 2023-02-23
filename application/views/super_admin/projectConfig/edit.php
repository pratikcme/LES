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
      <form id="frmAdd" method="POST" action="<?=$FormAction?>" class="new-cust-form basic-form">
        <div class="invoice-title border-grey ">
          <h3 ><span><i class="far fa-file-alt"></i></span> Edit Configration</h3>
        </div>

        <div class="form-group mt-5">
          <label for="email" class="col-sm-2 col-form-label pl-0">User Firebase Key</label>
          <div class="row">
            <div class="col-sm-12">
              <input type="text" name="user_firebase_key" class="form-control" placeholder="User Firebase Key" value="<?=$editData[0]->user_firebase_key?>">
            </div>
          </div>
        </div>
        <div class="form-group mt-5">
          <label for="email" class="col-sm-2 col-form-label pl-0">Staff Firebase Key</label>
          <div class="row">
            <div class="col-sm-12">
              <input type="text" name="staff_firebase_key" class="form-control" placeholder="Staff Firebase Key" value="<?=$editData[0]->staff_firebase_key?>">
            </div>
          </div>
        </div>
        <div class="form-group mt-5">
          <label for="email" class="col-sm-2 col-form-label pl-0">Delivery Firebase Key</label>
          <div class="row">
            <div class="col-sm-12">
              <input type="text" name="delivery_firebase_key" class="form-control" placeholder="Delivery Firebase Key" value="<?=$editData[0]->delivery_firebase_key?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" >Key id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="key_id" class="form-control" placeholder="Key id" value="<?=$editData[0]->key_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >Delivery Bandle Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="delivery_bandle_id" class="form-control" placeholder="Delivery Bandle Id" value="<?=$editData[0]->delivery_bandle_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Google Client Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="google_client_id" class="form-control" placeholder="Google Client Id" value="<?=$editData[0]->google_client_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" >Google Secret Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="google_secret_id" class="form-control" placeholder="Google Secret Id" value="<?=$editData[0]->google_secret_id?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" >Team id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="team_id" class="form-control" placeholder="Team id" value="<?=$editData[0]->team_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >Facebook Client Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="facebook_client_id" class="form-control" placeholder="Facebook Client Id" value="<?=$editData[0]->facebook_client_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Facebook Secret Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="facebook_secret_id" class="form-control" placeholder="Facebook Secret Id" value="<?=$editData[0]->facebook_secret_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" >Android link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="android_app_link" class="form-control" placeholder="Android link" value="<?=$editData[0]->android_app_link?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" >User Bandle Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="user_bandle_id" class="form-control" placeholder="User Bandle Id" value="<?=$editData[0]->user_bandle_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >Staff Bandle Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="staff_bandle_id" class="form-control" placeholder="Staff Bandle Id" value="<?=$editData[0]->staff_bandle_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Admin Bandle Id</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="admin_bandle_id" class="form-control" placeholder="Admin Bandle Id" value="<?=$editData[0]->admin_bandle_id?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" >P8 file Name</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="p8_file" class="form-control" placeholder="P8 file Name" value="<?=$editData[0]->p8_file?>">
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" >Twitter link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="twitter_link" class="form-control" placeholder="Twitter link" value="<?=$editData[0]->twitter_link?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >Google+ link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="google_plus_link" class="form-control" placeholder="Google+ link" value="<?=$editData[0]->google_plus_link?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Instagram link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="instagram_link" class="form-control" placeholder="instagram link" value="<?=$editData[0]->instagram_link?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" >Facebook Social Media Link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="facebook_link" class="form-control" placeholder="Facebook Social media link" value="<?=$editData[0]->facebook_link?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version" >Ios Link</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="ios_app_link" class="form-control" placeholder="Ios link" value="<?=$editData[0]->ios_app_link?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >Contact Email</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="contact_email" class="form-control" placeholder="Contact Email" value="<?=$editData[0]->contact_email?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Contact Number</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" value="<?=$editData[0]->contact_number?>">
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Firebase Url</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="firebase_url" class="form-control" placeholder="Firebase url" value="<?=$editData[0]->firebase_url?>">
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version" >Firebase node</label>
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" name="firebase_node" class="form-control" placeholder="Firebase node" value="<?=$editData[0]->firebase_node?>">
                </div>
              </div>
            </div>
          </div>
         <!--  <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce" >Contact Us Address</label>
              <div class="row">
                <div class="col-sm-9">
                  <textarea name="contact_us_address" class="form-control" placeholder="Contact Us Address"><?=$editData[0]->contact_us_address?></textarea>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="ios_version" >Firebase Url</label>
              <div class="row">
                <div class="col-sm-12">
                  <input type="text" name="firebase_url" class="form-control" placeholder="Firebase url" value="<?=$editData[0]->firebase_url?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="ios_version" >Firebase Token</label>
              <div class="row">
                <div class="col-sm-12">
                  <input type="text" name="firebase_token" class="form-control" placeholder="Firebase Token" value="<?=$editData[0]->firebase_token?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="contact_us_address">Contact Us Address</label>
          <div class="row">
            <div class="col-sm-9">
              <textarea name="contact_us_address" class="form-control" placeholder="Contact Us Address"><?=$editData[0]->contact_us_address?></textarea>
            </div>
          </div>
        </div>
        <div class="button-group">
          <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Save </button>
          <a href="<?=base_url().$this->url?>" style="display: inline-block;" class="btn btn-new">Cancle</a>
        </div>
      </div>
    </form>
  </div>
</div>

</section>

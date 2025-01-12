  <style type="text/css">
      span.error {
          color: red;
      }
  </style>
  <section class="new-customer background-blue-grey">
      <?php if ($this->session->flashdata('myMessage') != '') {
            echo $this->session->flashdata('myMessage');
        } ?>
      <div class="container">
          <div class="row">
              <form id="vendor_form" method="POST" action="<?= $FormAction ?>" class="new-cust-form basic-form" enctype='multipart/form-data'>
                  <div class="invoice-title border-grey">
                      <h3 class="mb-0"><span><i class="far fa-file-alt"></i></span> Add Vendor</h3>
                  </div>

                  <div class="row mt-5">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="approved">Domain Type</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <select name="domain_type" id="domain_type" class="form-control">
                                          <option value="">Select domain type</option>
                                          <!-- <option value="0">Domain</option> -->
                                          <option value="1" selected>Sub Domain</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="store_in">Domain In Which Server</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <select name="database" id="database" class="form-control">
                                          <option value="">Choose Server</option>
                                          <option value="0">Stagging </option>
                                          <!-- <option value="1">Production </option> -->
                                          <!-- <option value="2" <?= (base_url() == 'https://development.launchestore.com/') ? "SELECTED" : '' ?>>Les-development</option> -->
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row ">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="login_type">Login Type</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <select name="login_type" class="form-control">
                                          <option value="">Select login type</option>
                                          <option value="0">Login With Email</option>
                                          <option value="1">Login With Mobile</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="domain_name">Domain Name</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="text" name="domain_name" class="form-control name" id="domain_name" placeholder="Domain Name">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="name">Shop Name</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="text" name="name" class="form-control name" placeholder="Shop Name">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="approved">Shop Owner Name</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="text" name="ownername" class="form-control" placeholder="Shop Owner Name">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="login_type">Store Type</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <select class="form-control" name="store_type">
                                          <option value="">Select Store Type</option>
                                          <?php foreach ($getStore as $key => $value) { ?>
                                              <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="form-group">
                              <label for="supported_language">Supported Language</label>
                              English
                              <input type="checkbox" name="supported_language[]" value="en" />
                              Arabic
                              <input type="checkbox" name="supported_language[]" value="ar" />
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="approved">Shop Image</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="file" name="image" class="form-control pt-2">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="login_type">Email Address</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="email" name="email" id="email" class="form-control valid" placeholder="Email Address">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="approved">Password</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="login_type">Confirm Password</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="mobile_number">Mobile Number</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="text" name="mobile_number" class="form-control " placeholder="Mobile Number">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="address">Address</label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <textarea name="address" class="form-control"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="location">Enter Location<span class="required" aria-required="true"> *
                                      :</span> </label>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <input type="text" id="departure_address" onfocus="initAutocomplete('departure_address')" class="dis form-control pac-target-input valid" name="location" maxlength="255" value="" placeholder="Location" autocomplete="off"> <span style="color: red;"></span>
                                      <input type="hidden" id="departure_latitude" name="latitude" placeholder="Latitude" value="">
                                      <input type="hidden" id="departure_longitude" name="longitude" placeholder="Longitude" value="">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="language">Primary Language</label>
                              <select name="language_support" class="form-control">
                                  <option value="">Select Language</option>
                                  <option value="0">English</option>
                                  <option value="1">Arabic</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="language">Locality</label>
                              <select name="locality" class="form-control">
                                  <option value="">Select Locality</option>
                                  <option value="0">Local</option>
                                  <option value="1">International</option>
                              </select>
                          </div>
                      </div>

                      <!-- themes_list -->
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="language">Themes</label>
                              <select name="theme_name" class="form-control" id="theme_select">
                                  <option value="">Select Theme</option>
                                  <?php
                                    foreach ($themes_list as $val) :
                                    ?>
                                      <option value="<?= $val->theme_key ?>" data-img="<?= $val->image ?>"><?= $val->name ?>
                                      </option>
                                  <?php endforeach;
                                    ?>
                              </select>
                          </div>
                      </div>

                      <div class="col-lg-6 hideImg">
                          <div class="form-group">
                              <label for="language">Theme Preview </label>
                              <img src="" id="imgPreview" style="height:100px;width:100px" alt="err">
                          </div>
                      </div>


                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="language">Web Type</label>
                              <select name="is_ecommerce" class="form-control" id="is_ecommerce">
                                  <option value="">Select Web Type</option>
                                  <option value="1">E-commerce</option>
                                  <option value="0">Infomation</option>

                              </select>
                          </div>
                      </div>
                      <!-- check only -->
                  </div>
                  <div class="button-group">
                      <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Save </button>
                      <a href="<?= base_url() . $this->url ?>" style="display: inline-block;" class="btn btn-new">Cancel</a>
                  </div>
          </div>
          </form>
      </div>
      </div>
      <div style="display: none;" id="html">
          <div class="row">
              <div class="col-sm-9">
                  <input type="text" name="name[]" class="form-control name" placeholder="profession name">
                  <span class="error"></span>
              </div>
              <div class="col-sm-2">
                  <button type="button" class="btn btn-danger remove">remove</button>
              </div>
          </div>
      </div>
  </section>
<style type="text/css">
span.error {
    color: red;
}

@media (max-width: 575px) {
    .basic-form .button-group a {
        margin-bottom: 8px !important;
    }
}
  </style>
  <section class="new-customer background-blue-grey">
      <?php if ($this->session->flashdata('myMessage') != '') {
      echo $this->session->flashdata('myMessage');
    } ?>
      <div class="container">
          <div class="row">
              <form id="VersionForm" method="POST" action="<?= $FormAction ?>" class="new-cust-form basic-form">
                  <div class="invoice-title border-grey ">
                      <h3><span><i class="far fa-file-alt"></i></span> Update Version</h3>
                  </div>

                  <div class="row">
                      <div class="col-lg-3">
                          <div class="form-group">
                              <label for="android_version" class="col-sm-2 col-form-label pl-0">Android Version</label>
                              <div class="row">
                                  <div class="col-sm-9">
                                      <input type="text" name="android_version" class="form-control"
                                          placeholder="android version" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                              <label for="ios_version" class="col-sm-2 col-form-label pl-0">Ios Version</label>
                              <div class="row">
                                  <div class="col-sm-9">
                                      <input type="text" name="ios_version" class="form-control"
                                          placeholder="ios version" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                              <label for="android_isforce" class="col-sm-2 col-form-label pl-0">Android isforce</label>
                              <div class="row">
                                  <div class="col-sm-9">
                                      <input type="text" name="android_isforce" class="form-control"
                                          placeholder="android isforce" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                              <label for="ios_isforce" class="col-sm-2 col-form-label pl-0">Ios isforce</label>
                              <div class="row">
                                  <div class="col-sm-9">
                                      <input type="text" name="ios_isforce" class="form-control"
                                          placeholder="Ios isforce" >
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="button-group">
                      <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Save </button>
                      <a href="<?= base_url() . $this->url ?>" style="display: inline-block;"
                          class="btn btn-new">Cancel</a>
                  </div>
          </div>
          </form>
      </div>
      </div>

  </section>
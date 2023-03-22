<style type="text/css">
    span.error{
      color: red;
    }
  </style>
  <section class="new-customer background-blue-grey">
    <?php if($this->session->flashdata('myMessage') != ''){
      echo $this->session->flashdata('myMessage');
    } ?>
    <div class="container">
      <div class="row">
        <form id="Form" method="POST" action="<?=$FormAction?>" class="new-cust-form basic-form" enctype='multipart/form-data'>
          <div class="invoice-title border-grey">
            <h3 class="mb-0"><span><i class="far fa-file-alt"></i></span> Select Food Category</h3>
          </div>

            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="store_in"></label>
                  <div class="row">
                    <div class="col-sm-12">
                     <select multiple='multiple' name="store_type[]" id="store_type" class="form-control" style="position: absolute; left: -9999px;">
                     <?php foreach ($store_type as $key => $value) { ?>
                        <option value="<?=$value->id?>" <?=(in_array($value->id,$foodCategory)) ? 'selected' : '' ?>><?=$value->name?></option>
                        <?php } ?> 
                    </select>
                    <label id="store_type-error" class="error" for="store_type"></label>
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
  <div style="display: none;" id="html">
     <div class="row">
        <div class="col-sm-9">
          <input type="text" name="name[]" class="form-control name" placeholder="profession name" >
          <span class="error"></span>
        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-danger remove">remove</button>
        </div>
      </div>
  </div>
</section>

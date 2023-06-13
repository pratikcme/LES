<?php
foreach ($record as $key => $value) { ?>
  <div class="col-md-6">
    <a href="javascript:" data-ven_id="<?= $value->id ?>" class="vendor-wrapper vendor  
		<?= (isset($_SESSION['branch_id']) && $value->id == $_SESSION['branch_id']) ? 'active' : '' ?>">
      <div class="vendor-loc">
        <div class="vendor-header">
          <div class="address-chk-box <?= $attr ?>">
            <label> <?= $this->lang->line('Default') ?> <input class="vendor-chk" type="checkbox" <?= $attr ?>>
              <span class="blue"></span>
            </label>
          </div>
        </div>
        <div class="vendor-1">
          <div class="vendor-img">
            <img src="<?= base_url() . 'public/images/' . $this->folder . 'vendor_shop/' . $value->image ?>" alt="">
          </div>
          <div class="vendor-detail">
            <a href="javascript:" class="vendor" data-ven_id="<?= $value->id ?>">
              <h5><?= $value->name ?></h5>
            </a>
            <p><?= $value->address ?> </p>
            <p>+91-<?= $value->phone_no ?></p>
          </div>
        </div>
      </div>
    </a>
  </div>
<?php } ?>
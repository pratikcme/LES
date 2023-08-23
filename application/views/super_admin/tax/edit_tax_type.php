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
            <form id="taxTypeEditForm" method="POST" action="<?= $FormAction ?>" class="new-cust-form basic-form">
                <div class="invoice-title border-grey">
                    <h3 class="mb-0"><span><i class="far fa-file-alt"></i></span> Edit Tax Type</h3>
                </div>
                <input type="hidden" id="id" value="<?= $id ?>">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="name">Tax Type name</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="tax_type" class="form-control tax_type" value="<?= $editTaxTypeData[0]->tax_type ?>" placeholder="Tax  Type Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="percentage">Percentage</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="percentage" class="form-control percentage" value="<?= $editTaxTypeData[0]->percentage ?>" placeholder="Tax Percentage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Update </button>
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
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
            <form id="taxTypeForm" method="POST" action="<?= $FormAction ?>" class="new-cust-form basic-form">

                <div class="invoice-title border-grey">
                    <h3 class="mb-0"><span><i class="far fa-file-alt"></i></span> Add Tax</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="tax_id">Tax</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <select name="tax_id" class="form-control">
                                        <option value="">Select Tax</option>
                                        <?php foreach ($getTaxList as $value) { ?>
                                            <option value="<?= $value->id ?>"><?= $value->tax_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="btn btn-primary " id="addTaxType">Add</span>
                <div class="row mt-5">
                    <div class="col-lg-12" id="addHtml">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="tax_type">Tax Type</label>
                                    <input type="text" name="tax_type[]" class="form-control tax_type">
                                    <span></span>
                                </div>

                                <div class="col-sm-6">
                                    <label for="percentage">Tax Percentage</label>
                                    <input type="text" name="percentage[]" class="form-control percentage">
                                    <span></span>
                                </div>
                            </div>
                        </div>


                    </div>

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


<div style="display: none" id="appendHtml">

    <div class="form-group">

        <div class="row">
            <div class="col-sm-6">
                <label for="tax_type">Tax Type</label>
                <input type="text" name="tax_type[]" class="form-control tax_type">
                <span></span>
            </div>

            <div class="col-sm-6">
                <label for="percentage">Tax Percentage</label>
                <input type="text" name="percentage[]" class="form-control percentage">
                <span></span>
            </div>
        </div>
        <span class=" btn remove text-danger">remove</span>
    </div>


</div>
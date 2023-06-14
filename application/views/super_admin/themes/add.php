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
            <form id="theme_form" method="POST" action="<?= $FormAction ?>" class="new-cust-form basic-form" enctype='multipart/form-data'>
                <div class="invoice-title border-grey">
                    <h3 class="mb-0"><span><i class="far fa-file-alt"></i></span>
                        <?= isset($themeDetails) ? 'Edit' : 'Add' ?> Theme</h3>
                </div>
                <input type="hidden" id="theme_id" name="theme_id" value="<?= isset($themeDetails) ? $themeDetails[0]->id : '0' ?>">
                <input type="hidden" name="old_image_name" value="<?= isset($themeDetails) ? $themeDetails[0]->image : '0'  ?>">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control name" id="name" placeholder="Theme Name" value="<?= isset($themeDetails) ? $themeDetails[0]->name : '' ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="theme_key">Key</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" id="theme_key" name="theme_key" class="form-control name" placeholder="Theme Key" value="<?= isset($themeDetails) ? $themeDetails[0]->theme_key : '' ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="theme_key">Preview url</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" id="preview_url" name="preview_url" class="form-control name" placeholder="Preview url" value="<?= isset($themeDetails) ? $themeDetails[0]->preview_url : '' ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Theme Image</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="file" id="photo" name="image" class="form-control pt-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="details">Details</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea placeholder="Theme Details" name="details" class="form-control"><?= isset($themeDetails) ? $themeDetails[0]->details : '' ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    if (isset($themeDetails)) {
                    ?>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Previous Image</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url() . 'public/images/themes_images/' . $themeDetails[0]->image ?>" style="height:100px;width:100px;" alt="err">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="col-lg-6 hideImg">
                        <div class="form-group">
                            <label for="details">Current Image</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="" id="imgPreview" style="height:100px;width:100px;" alt="err">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="details">Details</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea placeholder="Theme Details" name="details"
                                        class="form-control"><?= isset($themeDetails) ? $themeDetails[0]->details : '' ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="button-group">
                    <button type="submit" id="btnSubmit" class="btn <?= isset($themeDetails) ? 'btn-danger' :  'btn-new'  ?> ">
                        <?= isset($themeDetails) ? 'Update' :  'Save'  ?> </button>
                </div>
        </div>
        </form>
    </div>
    </div>

</section>
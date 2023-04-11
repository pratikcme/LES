<div class="row">
    <div class="col-12 col-sm-12 col-lg-12 text-right mb-3">
        <a class="btn btn-primary" href="<?= base_url() . 'super_admin/themes/add' ?>">Add</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <?php if ($this->session->flashdata('myMessage') != '') {
            echo $this->session->flashdata('myMessage');
        } ?>
        <input type="hidden" name="" id="base_url" value="<?= base_url() ?>">
        <div class="card">
            <div class="card-header title-search">
                <h4>Themes</h4>
                <form class="form-inline">
                    <!-- <div class="search-element"> -->
                    <!--  <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search" data-width="200" style="width: 200px;">
                  <button class="btn" type="button">
                    <i class="fas fa-search"></i>
                  </button> -->
                    <!-- </div> -->
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="profession">
                        <thead>
                            <tr>
                                <th>Index</th>
                                <th>Name</th>
                                <th>Key</th>
                                <th>Image</th>
                                <th>Details</th>
                                <!-- <th>Status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($themes_list as $key => $value) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->name ?></td>
                                    <td><?= $value->theme_key ?></td>

                                    <td><img src="<?= base_url() . 'public/images/themes_images/' . $value->image  ?>" style="height:50px;width:50px" alt="err"></td>
                                    <td><?= $value->details ?></td>
                                    <td>
                                        <a href="<?= base_url() . 'super_admin/themes/edit/' . $this->utility->safe_b64encode($value->id) ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt" style="color: white"></i></a>
                                        <button class="btn btn-danger btn-action deleteBtn" data-toggle="tooltip" data-original-title="Delete" data-theme_id="<?= $this->utility->safe_b64encode($value->id) ?>"><i class="fas fa-trash" style="color: white"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <input type="hidden" id="url" value="<?= base_url() ?>">
                </div>
            </div>
        </div>
    </div>
</div>
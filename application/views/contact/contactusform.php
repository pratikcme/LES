<?php $this->load->view('header'); ?>

<style>
.see-massgesee-massge{
    padding:10px 10px;
}
.modal-header{
    height:50px;
}
.modal-content .close{
    position: relative;
    top:-20px;
} 
</style>



<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <?php if ($this->session->flashdata('myMessage') != '') {
            echo $this->session->flashdata('myMessage');
        } ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / list</a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div id="msg">
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-success fade in">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading"> List</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="display table table-bordered table-striped dataTable" id="usersMessageList" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">S.no</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">First Name</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">Mobile</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">Email</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 80px;">Message</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 100px;">Created Date</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 100px;">Action</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <input type="hidden" id="baseUrl" value="<?= base_url(); ?>">
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php $count = 1;
                                        foreach ($meassagelist as $key => $value) { ?>
                                            <tr>
                                                <td><?= $count++ ?></td>
                                                <td><?= $value->fname ?></td>
                                                <!-- <td><?= $value->lname ?></td> -->
                                                <td><?= $value->mobile_no ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><button type="button" class="btn btn-info see-massge" value="<?=$value->id?>" data-toggle="modal" data-target="#exampleModal">See Message</button></td>
                                                <td><?= date('d F Y H:i:s',strtotime($value->created_at)) ?></td>
                                                <!-- change -->
                                                <td class="text-center">
                                                    <a href="javascript:;" data-id="<?php echo $value->id; ?>" class="btn btn-danger btn-xs deleteMsg"><i class="fa fa-trash-o "></i></a>
                                                    <!-- <a href="<?= base_url('admins/messagelist/deleteMessage?id=') . $this->utility->safe_b64encode($value->id)  ?>"
                                                    class="btn btn-danger btn-xs deleteMsg"><i
                                                        class="fa fa-trash-o "></i></a> -->
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="user_message">

      Հայերեն Shqip ‫العربية Български Català 中文简体 Hrvatski Česky Dansk Nederlands English Eesti Filipino Suomi Français ქართული Deutsch Ελληνικά ‫עברית हिन्दी Magyar Indonesia Italiano Latviski Lietuviškai македонски Melayu Norsk Polski Português Româna Pyccкий Српски Slovenčina Slovenščina Español Svenska ไทย Türkçe Українська Tiếng Việt
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



<?php $this->load->view('footer'); ?>
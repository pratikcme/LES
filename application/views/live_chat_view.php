<?php include('header.php'); ?>
<style type="text/css">
.excel-btn {
    padding: 8px 40px !important;
}
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div id="msg">
            <?php if ($this->session->flashdata('myMessage') && $this->session->flashdata('myMessage') != '') { ?>

            <?php echo $this->session->flashdata('myMessage');; ?>
            <?php } ?>
        </div>

        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a
                                href="<?php echo base_url() . 'index.php/admin/dashboard'; ?>">Home</a> / Live Chat
                            Credentials </a>
                    </li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <section class="panel">
                    <header class="panel-heading">Live Chat Credentials</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'live_chat/add_credentials'; ?>"
                                        class="btn btn-primary">Add Credentials</a>
                                </div>
                                <table class="display table table-bordered table-striped dataTable"
                                    aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Live Chat Key
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 200px;">Status
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending"
                                                style="width: 100px;">Action
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php foreach ($creds_list as $result) { ?>
                                        <tr class="gradeX odd">

                                            <td class="hidden-phone"><?php echo $result->live_chat_key; ?></td>
                                            <td><input type="button"
                                                    class="btn <?= $result->status == '1' ? 'btn-primary' : 'btn-danger' ?>  btn-xs"
                                                    value="<?= $result->status == '1' ? 'Active' : 'In-active' ?>">
                                            </td>
                                            <td>
                                                <a href="javascript:;"
                                                    onclick="single_delete('<?= $this->utility->encode($result->id) ?>')"
                                                    class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                                <a href="<?php echo base_url() . 'live_chat/edit_credentials/' . $this->utility->encode($result->id); ?>"
                                                    class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
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
<!--main content end-->
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
setTimeout(function() {
    //change
    $('#msg').hide("fade");
}, 4000);

// /*Single Delete Script */
// function single_delete(value) {
//     bootbox.confirm("Are you sure you want to delete ?", function(confirmed) {
//         if (confirmed == true) {
//             var id = value;
//             // $.ajax({
//             //     url: '<?php echo base_url() . '/single_delete_user'; ?>',
//             //     data: {
//             //         id: id
//             //     },
//             //     success: function(data) {
//             //         if (data.status == 1) {
//             //             bootbox.alert("User has been deleted successfully.", function() {
//             //                 window.location.reload(true);
//             //             });
//             //         } else {
//             //             alert('Failed to delete selected user.');
//             //         }
//             //     },
//             //     error: function() {
//             //         alert('Failed to delete selected user.');
//             //     }
//             // });
//         }
//     });
// }



// $('#delete_user').click(function() {

//     if ($('.checkbox_user:checked').length == 0) {
//         //alert("Select one record"); return false;
//         bootbox.alert('Please select at least one record to delete');
//         return;
//     }
//     bootbox.confirm("Are you sure you want to delete ?", function(confirmed) {
//         if (confirmed == true) {

//             var ids = [];
//             $('.checkbox_user:checked').each(function() {
//                 ids.push($(this).val());
//             });
//             $.ajax({
//                 url: '<?php echo base_url() . 'index.php/admin/multi_delete_user'; ?>',
//                 data: {
//                     ids: ids.toString()
//                 },
//                 success: function(data) {
//                     if (data.status == 1) {

//                         bootbox.alert("User(s) has been deleted successfully.", function() {
//                             window.location.reload(true);
//                         });
//                     } else {
//                         bootbox.alert('Failed to delete the selected records.');
//                     }
//                 },
//                 error: function() {
//                     bootbox.alert('Failed to delete the selected records.');
//                 }
//             });
//         } else {
//             window.location.reload(true);
//         }
//     });
// });

// $(document).ready(function() {
//     $('.checkboxMain').on('click', function() {
//         if (this.checked) {
//             $('.checkbox_user').each(function() {
//                 this.checked = true;
//             });
//         } else {
//             $('.checkbox_user').each(function() {
//                 this.checked = false;
//             });
//         }
//     });

//     $('.checkbox_user').on('click', function() {
//         if ($('.checkbox_user:checked').length == $('.checkbox_user').length) {
//             $('.checkboxMain').prop('checked', true);
//         } else {
//             $('.checkboxMain').prop('checked', false);
//         }
//     });
// });
</script>
<?php include('footer.php'); ?>
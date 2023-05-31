<?php $this->load->view('header.php');
    $id = $this->utility->decode($_GET['id']);

if($result['id']!=''){
        $reqName = "Update";
    }else{
        $reqName ="Add";
} 
?>
<style type="text/css">
    .required{
         color: red;
         }
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/dashboard'; ?>">Home</a> / <a href="<?php echo base_url().'smsgateway'; ?>">Sms gateway</a> / <?php echo $reqName; ?></a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div class="row">
            <!--Left Part-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo $reqName; ?> Sms gateway
                    </header>
                    <form role="form" method="post" action="<?php echo base_url().'smsgateway/add_update_sms_gateway'; ?>" name="payment_method_form" id="payment_method_form">
                        <input type="hidden" id="id" name="id" value="<?php echo $result['id']; ?>">
                        <div class="panel-body">
                             <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">Sms gateway name<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input"  name="sms_gateway_name" placeholder="Enter sms gateway name" value="<?php echo $result['sms_gateway_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">Twilo number<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input"  name="twillo_number" placeholder="Enter twillo_number" value="<?php echo $result['twillo_number']; ?>">
                                    </div>
                                </div>
                            </div> 
                             <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">SID<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="publish_key" name="sid" placeholder="Enter Sid" value="<?php echo $result['sid']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">Token<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="test_publish_key" name="auth_token" placeholder="Enter auth token" value="<?php echo $result['auth_token']; ?>">
                                    </div>
                                </div>
                            </div>

                             <!-- 
                             <div class="col-md-12 col-sm-12 col-xs-12 padding-zero">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">Secret Key Or Marchant Key For Live<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="secret_key" name="secret_key" placeholder="Secret Key Or Marchant Key for Live" value="<?php echo $result['secret_key']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name" class="margin_top_label">Secret Key Or Marchant Key for Test<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" class="form-control margin_top_input" id="test_secret_key" name="test_secret_key" placeholder="Secret Key Or Marchant Key For Test" value="<?php echo $result['test_secret_key']; ?>">
                                    </div>
                                </div>
                            </div> 
                        -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- <span class="panel-body padding-zero" > -->
                                <a href="<?=base_url().'smsgateway'?>" style="float: right; margin-right: 10px;" id="delete_user" class="btn btn-danger">Cancel</a>
                                 <input type="submit" class="btn btn-info pull-right margin_top_label" id="method_btn" value="<?php echo $reqName.' Gateway'; ?>" name="submit">
                                <!-- </span> -->
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <!--Map Part-->
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<style> label.error { color: red; font-weight: 500; } </style>
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script> -->
<script type="text/javascript">
    
    $('#payment_method_form').validate({
        rules: {
            twillo_number : {
                required : true
            },
            sms_gateway_name : {
                required : true
            },
            sid:{required:true,
                //  remote:{
                //     url : "<?php echo base_url().'payment_method/check_publish_key'; ?>",
                //     type: "post",
                //     data:{payment_methodId:$('#id').val()}
                // }
            },
            auth_token:{required:true,
                //  remote:{
                //     url : "<?php echo base_url().'payment_method/check_secret_key'; ?>",
                //     type: "post",
                //      data:{payment_methodId:$('#id').val()}
                // }
            },  
        },
        messages: {
            twillo_number: {
                required: "Please enter twillo number",
            },
            sms_gateway_name : {
                required : 'Please enter gatway name'
            },
            sid:{
                required:"Please enter sid ",
                // remote : "publish key already registered"
            },
            auth_token:{
                required:"Please enter auth token ", 
                // remote : "secret key already registered"},  
            },
        error: function(label) {
            $(this).addClass("error");
        },
        submitHandler: function (form) {
             $('.method_btn').attr('disabled','disabled');
                $(form).submit();            
        }
    }
});
</script>


<script type="text/javascript">
    
function testInput(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp(/[a-zåäö ]/i);
   return pattern.test(value);
}

$('#name').bind('keypress', testInput);

</script>
<?php $this->load->view('footer.php'); ?>
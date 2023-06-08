<?php
include('header.php');

date_default_timezone_set('Asia/Calcutta');


if ($register_result[0]->type == '0') {
    redirect(base_url() . 'register/close_register');
} else {
?>
    <style>
        .panel-heading {
            background: #5b6e84;
            font-size: 16px;
            font-weight: 300;
            color: white;
        }

        .add_register_closed h2 {
            margin-bottom: 5px;
        }

        .register_closed {
            float: left;
            width: 100%;
        }

        .padd_rght_0 {
            padding-right: 0;
        }

        .register_details h3 {
            border-bottom: 1px solid #ccc;
            float: left;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            padding-bottom: 10px;
            width: 100%;
        }

        .outlet_clouser p {
            color: #000;
            float: left;
            font-weight: 600;
            width: 100%;
        }

        .cash_summary h3 {
            float: left;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            width: 100%;
        }

        .closer_cash {
            background: #FFF1E8 none repeat scroll 0 0;
            float: left;
            padding: 5px;
            width: 100%;
        }

        .closer_cash_part2 {
            float: left;
            padding: 5px;
            width: 100%;
            border-bottom: 1px solid #ccc;
            border-top: 1px solid #ccc;
        }

        .summary_cash {
            float: left;
            width: 100%;
        }

        .summary_cash h4 {
            float: left;
            font-size: 14px;
            text-transform: uppercase;
            width: 100%;
            color: #777777;
        }

        .clouser_register {
            float: left;
            width: 100%;
        }

        .close_register .btn.btn-warning {
            background-color: #2a3542;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            border: unset;
            padding: 10px 20px;
        }

        .close_register {
            float: right;
            margin-top: 30px;
            width: auto;
        }



        .movement_day .opt_cash_day .col-lg-3 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
    </style>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <div id="msg">
                <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
                    <div class="alert alert-success fade in">
                        <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
                    </div>
                <?php }
                unset($this->session->flashdata); ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Register Open
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <div class="clouser_register">
                                    <h2>Close Register </h2>

                                    <div class="register_details">
                                        <h3>Register details</h3>

                                        <div class="detail_info_of_clouser">
                                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                                                <div class="outlet_clouser">
                                                    <span>Outlet</span>
                                                    <p>Main Outlet</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                                                <div class="outlet_clouser">
                                                    <span>Register</span>
                                                    <p>Main Register</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                                                <div class="outlet_clouser">
                                                    <span>Closure #</span>
                                                    <p><?php echo $register_result[0]->id - 1; ?></p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                                                <div class="outlet_clouser">
                                                    <span>Opening time</span>
                                                    <p> <?php if ($register_result[0]->opening_time != '') {
                                                            echo date('l, jS F, Y, g:ia', $register_result[0]->opening_time);
                                                        } else {
                                                            echo '';
                                                        }  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cash_summary">
                                        <h3>Cash Summary</h3>

                                        <div class="summary_details">
                                            <div class="closer_cash">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 res_no_padd">
                                                            <div class="summary_cash">
                                                                <h4>Expected (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 res_no_padd">
                                                            <div class="summary_cash">
                                                                <h4>Counted (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 res_no_padd">
                                                            <div class="summary_cash">
                                                                <h4>Differences (<?= $currency ?>) </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="closer_cash_part2">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 res_no_padd">
                                                    <span class="part_2_deatils">Cash in cash drawer</span>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 res_no_padd">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="expected">

                                                                    <?php echo  number_format((float)(float)$total + (float)$transaction, 2, '.', '');  ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <input type="number" min="0" id="counted_cash" class="form-control" placeholder="Enter Amount" value="<?php echo ($register_result[0]->counted > 0) ? $register_result[0]->counted : "0.00"; ?>" onkeyup="cash_summary(this.value, <?php echo $register_result[0]->id; ?>)" inputmode="decimal">
                                                            </div>
                                                            <!-- onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="cash_differences" style="<?php if (numberFormat($register_result[0]->counted - number_format((float)(float)$total + (float)$transaction, 2, '.', '')) >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php if (isset($register_result[0]->counted)) {
                                                                        // echo $register_result[0]->difference;
                                                                        echo numberFormat($register_result[0]->counted - number_format((float)(float)$total + (float)$transaction, 2, '.', ''));
                                                                    } else {
                                                                        echo '0.00';
                                                                    } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <!-- Dipesh added -->
                                                <div class="movement_day">
                                                    <div class="col-md-12">
                                                        <h4>Cash movements for the day</h4>
                                                    </div>

                                                    <div class="opt_cash_day">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <span>Time</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <span>User</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <span>Reasons</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <span>Transaction (<?= $currency ?>)</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="opt_cash_time">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <p><?php if (!empty($register_result)) {
                                                                        echo date('l, jS F, Y, g:ia', $register_result[0]->opening_time);
                                                                    } else {
                                                                    }  ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <p><?php echo $user_result['name']; ?></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <p>Opening float</p>
                                                                <p><?php if (!empty($register_result)) {
                                                                        echo $register_result[0]->open_note;
                                                                    }   ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="cash_movement">
                                                                <p class="dark_clr">
                                                                    <?= $transaction; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                            </div>
                                        </div>
                                        <!-- Dipesh added -->
                                        <div class="payment_recived">
                                            <div class="cash_payemnt_rcvd">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="cash_recieved">
                                                        <p>Cash payments received</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                                    <div class="cash_recieved">
                                                        <p><?= $total; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end -->

                                    </div>


                                    <div class="cash_summary payment_summary">
                                        <h3>Other Payments Summary</h3>

                                        <div class="summary_details">
                                            <div class="closer_cash">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 res_no_padd">
                                                    <div class="summary_cash">
                                                        <h4>Payment Types</h4>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 res_no_padd">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Expected (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Counted (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Differences (<?= $currency ?>) </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="closer_cash_part2">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 res_no_padd">
                                                    <span class="part_2_deatils">Online Payment</span>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 res_no_padd">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="credit_card_expected">
                                                                    <?php echo number_format((float)$online_result['total'], 2, '.', ''); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <input type="number" class="form-control" inputmode="decimal" min="0" value="<?php echo ($register_result[0]->credit_card_counted > 0) ?   $register_result[0]->credit_card_counted : "0.00"; ?>" placeholder="Enter Amount" id="credit_card_counted" onkeyup="credit_card_summary(this.value, <?php echo $register_result[0]->id; ?>)">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="credit_card_differences" style="<?php if (numberFormat($register_result[0]->credit_card_counted - $online_result['total']) >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php if (isset($online_result['total']) && $online_result['total'] !== "") {
                                                                        echo numberFormat($register_result[0]->credit_card_counted - $online_result['total']);
                                                                    } else {
                                                                        echo '0.00';
                                                                    } ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <!-- total added Dipesh -->
                                    <div class="cash_summary payment_summary">
                                        <h3>Total Payments Summary</h3>

                                        <div class="summary_details">
                                            <div class="closer_cash">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 res_no_padd">
                                                    <div class="summary_cash">
                                                        <h4>Payment Types Total</h4>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 res_no_padd">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Expected (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Counted (<?= $currency ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <h4>Differences (<?= $currency ?>) </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="closer_cash_part2">
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 res_no_padd">
                                                    <span class="part_2_deatils">Total</span>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 res_no_padd">
                                                    <div class="drawer_cash">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="total_expected">
                                                                    <?php echo numberFormat((float)$online_result['total'] + number_format((float)(float)$total + (float)$transaction, 2, '.', '')); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p id="total_counted">
                                                                    <?php echo numberFormat($register_result[0]->counted + $register_result[0]->credit_card_counted); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <!-- change -->
                                                                <p id="total_differences" style="<?php if (numberFormat(numberFormat($register_result[0]->counted - number_format((float)(float)$total + (float)$transaction, 2, '.', '')) + numberFormat($register_result[0]->credit_card_counted - $online_result['total'])) >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php

                                                                    if (isset($register_result)) {
                                                                        echo numberFormat(numberFormat($register_result[0]->counted - number_format((float)(float)$total + (float)$transaction, 2, '.', '')) + numberFormat($register_result[0]->credit_card_counted - $online_result['total']));
                                                                    } else {
                                                                        echo '0.00';
                                                                    } ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="clouser_note_type">
                                        <div class="note_create">
                                            <textarea class="form-control" id="closure_note" placeholder="Type to add a register closure note"></textarea>
                                        </div>
                                    </div>

                                    <div class="close_register pull-right">
                                        <button class="btn btn-warning" type="button" id="close_register">Close
                                            Register</button>
                                        <!-- Dipesh  -->
                                        <?php if (!empty($register_result)) { ?>
                                            <!-- Dipesh Change url for page -->
                                            <a href="<?php echo base_url() . 'register/closure_summary_list' ?>" class="btn btn-warning" type="button">View Register Clouser Sales</a>
                                        <?php } else { ?>
                                            <a class="btn btn-warning" type="button" disabled="">View Register Clouser Sales</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>

    <script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $('#close_register').click(function() {

            var counted_cash = $('#counted_cash').val();
            var counted_online_cash = $('#credit_card_counted').val();


            const cash_diff = parseFloat(parseFloat($("#counted_cash").val()) - parseFloat($('#expected').html()
                .trim()));
            const credit_card_expected = parseFloat($("#credit_card_expected").html().trim());
            const credit_card_counted = $("#credit_card_counted").val();
            const credit_card_diff = parseFloat(credit_card_counted - credit_card_expected);

            if (String(counted_cash).trim() == '' || String(counted_online_cash).trim() == '') {
                bootbox.alert("Please enter counted cash", function() {
                    // window.location.reload(false);
                });

            } else {

                var closure_note = $('#closure_note').val();

                $.ajax({
                    url: '<?php echo base_url() . 'register/close_register_button/'; ?>',
                    data: {
                        id: '<?php echo $register_result[0]->id; ?>',
                        closure_note: closure_note,
                        cash_diff: cash_diff,
                        credit_card_expected: credit_card_expected,
                        credit_card_counted: credit_card_counted,
                        credit_card_diff: credit_card_diff
                    },
                    success: function() {
                        window.location.href =
                            '<?php echo base_url() . "register/close_register"; ?>';
                    }
                });
            }
        });

        function cash_summary(value, id) {

            var register_id = id; //register id
            var counted = value; //counted value
            var expected_value = $('#expected').html().trim(); //expected value
            var difference_cash = parseFloat(counted - expected_value).toFixed(2);

            var differences = $('#cash_differences').html(difference_cash);
            var dif_val = $('#cash_differences').html();


            if (dif_val >= 0) {
                $('#cash_differences').css('color', 'green');
            } else {
                $('#cash_differences').css('color', 'red');
            }

            $.ajax({
                url: '<?php echo base_url() . 'register/update_cash_summary/'; ?>',
                data: {
                    id: register_id,
                    expected_value: expected_value,
                    counted: counted,
                    cash_dif: difference_cash,
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    $("#cash_differences").html(json.cash_difference);


                    // added by Dipesh for total
                    let val1 = parseFloat($('#cash_differences').html().trim()) + parseFloat($(
                            "#credit_card_differences")
                        .html().trim());



                    $("#total_differences").html(parseFloat(val1).toFixed(2))

                    let p1 = !isNaN(parseFloat($("#credit_card_counted").val())) ? $(
                            "#credit_card_counted")
                        .val() : 0.00;

                    let p2 = !isNaN(parseFloat($("#counted_cash").val())) ? $("#counted_cash").val() :
                        0.00;

                    $('#total_counted').html(parseFloat(parseFloat(p1) + parseFloat(p2)).toFixed(2));

                    // dipesh
                    if (parseFloat($("#total_differences").html()) >= 0) {
                        $('#total_differences').css('color', 'green');
                    } else {
                        $('#total_differences').css('color', 'red');
                    }

                    // $("#credit_card_differences").html();
                }
            });
        }

        function credit_card_summary(value, id) {

            var counted_value = value;
            var registered_id = id;
            var credit_card_expected = $('#credit_card_expected').html();
            var final_value = parseFloat(counted_value - credit_card_expected).toFixed(2);

            var dif_val = $('#credit_card_differences').html();

            if (dif_val >= 0) {
                $('#credit_card_differences').css('color', 'green');
            } else {
                $('#credit_card_differences').css('color', 'red');
            }

            $.ajax({
                url: '<?php echo base_url() . 'register/update_cc_summary/'; ?>',
                data: {
                    id: registered_id,
                    expected_value: credit_card_expected,
                    counted: counted_value,
                    cash_dif: final_value,
                    url: '<?php echo base_url() . 'register/update_cc_summary/'; ?>'
                },
                success: function(data) {

                    var json = JSON.parse(data);

                    $('#credit_card_differences').html(json.credit_card_differences);

                    var dif_val = $('#credit_card_differences').html();

                    if (dif_val >= 0) {
                        $('#credit_card_differences').css('color', 'green');
                    } else {
                        $('#credit_card_differences').css('color', 'red');
                    }


                    // added by Dipesh for total
                    let val1 = parseFloat($('#cash_differences').html()) + parseFloat($(
                            "#credit_card_differences")
                        .html());
                    $("#total_differences").html(parseFloat(val1).toFixed(2))
                    $('#total_counted').html(parseFloat(parseFloat($("#credit_card_counted").val()) +
                        parseFloat($(
                            "#counted_cash").val())).toFixed(2))

                    if (parseFloat($("#total_differences").html()) >= 0) {
                        $('#total_differences').css('color', 'green');
                    } else {
                        $('#total_differences').css('color', 'red');
                    }
                    // 

                    let p1 = !isNaN(parseFloat($("#credit_card_counted").val())) ? $(
                            "#credit_card_counted")
                        .val() : 0.00;

                    let p2 = !isNaN(parseFloat($("#counted_cash").val())) ? $("#counted_cash").val() :
                        0.00;

                    $('#total_counted').html(parseFloat(parseFloat(p1) + parseFloat(p2)).toFixed(2));
                    // new

                }
            });
        }

        function store_credit_summary(value, id) {

            var counted_value = value;
            var registered_id = id;
            var expected = $('#credit_card_expected').html();
            var final_value = parseFloat(counted_value - expected).toFixed(2);

            $.ajax({
                url: '<?php echo base_url() . 'register/update_sc_summary/'; ?>',
                data: {
                    id: registered_id,
                    expected_value: expected,
                    counted: counted_value,
                    cash_dif: final_value,
                    url: '<?php echo base_url() . 'register/update_sc_summary/'; ?>'
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#store_credit_differences').html(json.store_credit_differences);
                }
            });

        }
    </script>

<?php }
include('footer.php'); ?>
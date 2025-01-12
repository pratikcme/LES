<?php

include('header.php');
$vendor_id = $this->session->userdata['id'];

?>
<style>
    .panel-heading {
        background: #5b6e84;
        font-size: 16px;
        font-weight: 300;
        color: white;
    }

    .clouser_register h2 {
        float: left;
        font-size: 28px;
        font-weight: bold;
        margin-top: 0;
        width: 100%;
        margin-bottom: 30px;
    }

    .sumry_main h5 {
        float: left;
        width: 100%;
        font-weight: bold;
        margin-top: 0;
    }

    .registerd_summary {
        float: left;
        width: 100%;
        padding: 15px 0 0;
        border-bottom: 2px dotted #ccc;
        margin-bottom: 20px;
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

    .summary_cash h4 {
        float: left;
        font-size: 14px;
        text-transform: uppercase;
        width: 100%;
        color: #777777;
    }

    .payemnt_summry_detl .closer_cash_part2 {
        padding: 0;
    }

    .closer_cash_part2 {
        float: left;
        padding: 5px !important;

        width: 100%;
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #ccc;
    }

    .part_2_deatils {
        float: left;
        margin-bottom: 9px;
        margin-top: 9px;
        width: 100%;
    }

    .summary_cash p {
        float: left;
        margin-top: 8px;
        width: 100%;
        word-wrap: break-word;
    }

    .payemnt_summry_detl .closer_cash_part3 {
        border-top: none;
        padding: 0;
    }

    .closer_cash_part3 {
        float: left;
        padding: 5px !important;
        width: 100%;
        background: #eee;
    }

    .site-min-height {
        min-height: 900px;
    }

    .wrapper {
        display: inline-block;
        margin-top: 60px;
        padding: 15px;
        width: 100%;
    }

    .payemnt_summry_detl .closer_cash_part2 {
        padding: 0;
    }

    .closer_cash_part2 {
        float: left;
        padding: 5px;
        width: 100%;
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #ccc;
    }

    .cash_movements_smry {
        float: left;
        width: 100%;
    }
</style>


<section id="main-content">

    <section class="wrapper site-min-height">

        <div class="row">

            <div class="col-lg-12">

                <section class="panel">

                    <header class="panel-heading">

                        Closure Summary

                    </header>

                    <div class="panel-body">

                        <div class="adv-table">

                            <div class="clouser_register sumamry_details">

                                <h2>Register Closure Summary</h2>



                                <div class="register_closed">


                                </div>



                                <div class="registerd_summary">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd_lft_0">

                                        <div class="view_sammary">

                                            <div class="detail_of_smry">

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_main">

                                                        <h5>Register:</h5>

                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_sub">

                                                        <p>Main Register</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="detail_of_smry">

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_main">

                                                        <h5>Outlet:</h5>

                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_sub">

                                                        <p>Main Outlet</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd_rght_0">

                                        <div class="view_sammary">

                                            <div class="detail_of_smry">

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_main">

                                                        <h5>Opened:</h5>

                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_sub">

                                                        <p><?php echo date('l, jS F, Y, g:ia', $register_result[0]->opening_time); ?>
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="detail_of_smry">

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_main">

                                                        <h5>Closed:</h5>

                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 no_padd">

                                                    <div class="sumry_sub">

                                                        <p><?php echo date('l, jS F, Y, g:ia', $register_result[0]->closing_time); ?>
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>







                                <div class="payemnt_summry_detl">

                                    <div class="cash_summary payment_summary">

                                        <h3>Payments</h3>

                                        <div class="summary_details">

                                            <div class="closer_cash">

                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                                                    <div class="summary_cash">

                                                        <h4>Payment Types</h4>

                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">

                                                    <div class="drawer_cash">

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <h4>Expected</h4>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <h4>Counted</h4>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <h4>Differences </h4>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div class="closer_cash_part2">

                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                                                    <span class="part_2_deatils">Cash </span>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">

                                                    <div class="drawer_cash">

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (!empty($register_result)) {
                                                                        echo $register_result[0]->cash_amount_expected;
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (!empty($register_result)) {
                                                                        echo number_format((float)$register_result[0]->counted, 2, '.', '');
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p style="<?php if ($register_result[0]->difference >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php if (!empty($register_result[0]->difference)) {
                                                                        echo $register_result[0]->difference;
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="closer_cash_part3 part3_closer_cash">

                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                                                    <span class="part_2_deatils">Credit Card</span>

                                                </div>



                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">

                                                    <div class="drawer_cash">

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (isset($register_result[0]->credit_card_expected)) {
                                                                        echo $register_result[0]->credit_card_expected;
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (!empty($register_result)) {
                                                                        echo numberFormat($register_result[0]->credit_card_counted);
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p style="<?php if ($register_result[0]->credit_card_differences >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php if (isset($register_result[0]->credit_card_differences)) {
                                                                        echo $register_result[0]->credit_card_differences;
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div class="closer_cash_part2 part3_closer_cash">

                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                                                    <span class="part_2_deatils">Total</span>

                                                </div>



                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">

                                                    <div class="drawer_cash">

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (!empty($register_result)) {
                                                                        echo numberFormat($register_result[0]->credit_card_expected + $register_result[0]->cash_amount_expected);
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                                            <div class="summary_cash">

                                                                <p><?php if (!empty($register_result)) {
                                                                        echo numberFormat($register_result[0]->credit_card_counted + $register_result[0]->counted);
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="summary_cash">
                                                                <p style="<?php if (numberFormat($register_result[0]->credit_card_differences + $register_result[0]->difference) >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                    <?php if (!empty($register_result)) {
                                                                        echo numberFormat($register_result[0]->credit_card_differences + $register_result[0]->difference);
                                                                    } else {
                                                                        echo '0.00';
                                                                    }  ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                </div>



                                <div class="cash_movements_smry">

                                    <h3>Cash Movements</h3>

                                    <div class="closer_cash">

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                            <div class="summary_cash">

                                                <h4>Type</h4>

                                            </div>

                                        </div>



                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                            <div class="drawer_cash">

                                                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">

                                                    <div class="summary_cash">

                                                        <h4>Date and Time</h4>

                                                    </div>

                                                </div>
                                                <!-- 
                                                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

                                                    <div class="summary_cash">

                                                        <h4>User</h4>

                                                    </div>

                                                </div> -->

                                                <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">

                                                    <div class="summary_cash">

                                                        <h4>Note </h4>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">

                                                    <div class="summary_cash">

                                                        <h4>Amount </h4>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>



                                        <div class="closer_cash_part2">

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                <div class="summary_cash">

                                                    <h4>Opening float</h4>

                                                </div>

                                            </div>



                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                <div class="drawer_cash">

                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">

                                                            <h4><?php echo date('l, jS F, Y, g:ia', $register_result[0]->opening_time); ?>
                                                            </h4>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-4 col-md-5 col-sm-3 col-xs-12">

                                                    <div class="summary_cash">

                                                        <p><?php echo $user_result['email']; ?></p>

                                                    </div>

                                                </div> -->

                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">

                                                            <p><?php echo $register_result[0]->open_note; ?></p>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">
                                                            <p><?php if (!empty($register_result)) {
                                                                    echo $register_result[0]->transaction;
                                                                } else {
                                                                    echo '0.00';
                                                                }  ?>
                                                            </p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                        <div class="closer_cash_part3">

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                <div class="summary_cash">


                                                    <h4>Closing float</h4>

                                                </div>

                                            </div>



                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                <div class="drawer_cash">

                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">

                                                            <h4><?php echo date('l, jS F, Y, g:ia', $register_result[0]->closing_time); ?>
                                                            </h4>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-4 col-md-5 col-sm-3 col-xs-12">

                                                    <div class="summary_cash">

                                                        <p><?php echo $user_result['email']; ?></p>

                                                    </div>

                                                </div> -->

                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">

                                                            <p><?php echo $register_result[0]->closure_note; ?></p>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">




                                                            <p><?php if (!empty($register_result)) {
                                                                    echo number_format((float)$register_result[0]->counted, 2, '.', '');
                                                                } else {
                                                                    echo '0.00';
                                                                }  ?>
                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- dipesh -->

                                        <div class="closer_cash_part2">

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                                <div class="summary_cash">

                                                    <h4>Profit/Loss</h4>

                                                </div>

                                            </div>



                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                <div class="drawer_cash">

                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">



                                                    </div>


                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">


                                                    </div>

                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12">

                                                        <div class="summary_cash">
                                                            <p style="<?php if (number_format((float)$register_result[0]->counted - $register_result[0]->transaction, 2, '.', '') >= 0) { ?> color: green; <?php } else { ?> color: red; <?php } ?> ">
                                                                <?php echo number_format((float)$register_result[0]->counted - $register_result[0]->transaction, 2, '.', '') ?>
                                                            </p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

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



<?php include('footer.php'); ?>
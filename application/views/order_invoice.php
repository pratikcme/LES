<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'public/invoice_css/style.css'; ?>" media="all" />
    <link rel="stylesheet" href="<?php echo base_url() . 'public/invoice_css/bootstrap.css'; ?>" media="all" />
    <style type="text/css">
    @media print {

        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
            float: left;
        }

        .col-sm-12 {
            width: 100%;
        }

        .col-sm-11 {
            width: 91.66666666666666%;
        }

        .col-sm-10 {
            width: 83.33333333333334%;
        }

        .col-sm-9 {
            width: 75%;
        }

        .col-sm-8 {
            width: 66.66666666666666%;
        }

        .col-sm-7 {
            width: 58.333333333333336%;
        }

        .col-sm-6 {
            width: 50%;
        }

        .col-sm-5 {
            width: 41.66666666666667%;
        }

        .col-sm-4 {
            width: 33.33333333333333%;
        }

        .col-sm-3 {
            width: 25%;
        }

        .col-sm-2 {
            width: 16.666666666666664%;
        }

        .col-sm-1 {
            width: 8.333333333333332%;
        }

        .btn {
            display: none;
        }
    }

    /* .invoice-table th {
        font-size: 14px;
    }
    .invoice-table td {
        font-size: 14px;
    }

    .invoice-table table {
        width: 100%;
        max-width: 100%;
        table-layout: fixed;
    }

    main {
        background: #fff;
        padding: 30px 10px;
        border-radius: 0;
    }


    

    .invoice-table table th:nth-child(4) {
        width: 10%;
    }

    .invoice-table table td:nth-child(4) {
        width: 10%;
    }

    .invoice-table table th,
    table td {
        padding: 10px;

    } */

    .invoice-table table {
        width: 100%;
        max-width: 100%;
        table-layout: fixed;

    }

    main {
        background: #fff;
        padding: 30px 20px;
        border-radius: 0;
    }

    .invoice-table table th,
    table td {
        padding: 15px 10px;
    }

    .invoice-table th {
        font-size: 14px;
    }

    .invoice-table td {
        font-size: 14px;
    }

    .invoice-table table th:nth-child(1) {
        width: 150px;
        max-width: 105px;
    }

    .invoice-table table th:nth-child(2) {
        width: 150px;
        max-width: 75px;
    }

    .invoice-table table th:nth-child(3) {
        width: 150px;
        max-width: 120px;
    }

    .invoice-table table th:nth-child(4) {
        width: 150px;
        max-width: 110px;
    }

    .invoice-table table th:nth-child(5) {
        width: 150px;
        max-width: 150px;
    }

    .invoice-table table th:nth-child(6) {
        width: 150px;
        max-width: 130px;
    }

    .invoice-table tfoot .promo-parcentage {
        padding: 10px 0px !important;
    }
    </style>
</head>

<body>
    <div class="container">
        <header class="clearfix">
            <div id="logo">
                <img src="<?= $this->siteLogo ?>">
            </div>
            <div class="invoice float-right text-right">
                <h1><strong>Order Detail</strong></h1>
                <div class="date">Date of Invoice: <?php echo date('d-M-Y'); ?></div>
                <div class="date">

                    <?php if ($order_detail->order_status == '1') {
            echo "New Order";
          }
          if ($order_detail->order_status == '2') {
            echo "Ready";
          }
          if ($order_detail->order_status == '3') {
            echo "Delivered";
          }
          ?>


                </div>

            </div>
        </header>

        <main>
            <div class="row">
                <div class="col-sm-6">
                    <div id="client">

                        <div class="row">
                            <div class="col-sm-6"><b>Name : </b> </div>
                            <div class="col-sm-6">
                                <span><?= ($user_detail->name != '') ? $user_detail->name : $user->fname ?></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6"><b>Shipping Address : </b> </div>
                            <div class="col-sm-6">
                                <span><?= ($user_detail->address != '') ? $user_detail->address : "Self Pickup"; ?></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6"><b>Mobile Number : </b> </div>
                            <div class="col-sm-6">
                                <span><?= ($user_detail->phone != '') ? $user_detail->phone : $user->phone ?></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6"><b>Order Number : </b> </div>
                            <div class="col-sm-6"><span><?php echo $order_detail->order_no; ?></span></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6"><b>Email : </b> </div>
                            <div class="col-sm-6 email"><span><a
                                        href="mailto:john@example.com"><?php echo $order_detail_result[0]->email; ?></a></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6"><b>Date : </b> </div>
                            <div class="col-sm-6">
                                <span><?php echo date('d-M-Y', $order_detail_result[0]->dt_added); ?></span>
                            </div>
                        </div>
                        <?php if ($order_detail_result[0]->delivery_date != 0) { ?>
                        <div class="row">
                            <div class="col-sm-6"><b>Delivery Date : </b> </div>
                            <div class="col-sm-6"><span><?php echo  date('l d-M-Y', strtotime($order_detail_result[0]->delivery_date));
                                            if ($order_detail_result[0]->start_time != '') {
                                              echo ' Between (' . $order_detail_result[0]->start_time . ' - ' . $order_detail_result[0]->end_time . ')';
                                            }; ?></span></div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-6"><b>Gst Number : </b> </div>
                            <div class="col-sm-6 email"><span><?php echo $user->user_gst_number; ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="company">
                        <div><strong>Sold By : </strong></div>
                        <div><?php echo $vendor_detail->name; ?></div>
                        <div>
                            <?php $location = explode(',', $vendor_detail->location);
              echo $location[0];  ?><br /><?php echo $location['1']; ?>
                        </div>
                        <div><?php echo $vendor_detail->phone_no; ?></div>
                        <div><a
                                href="mailto:<?php echo $vendor_detail->email; ?>"><?php echo $vendor_detail->email; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive-sm invoice-table mt-4 mb-5">
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Product Price(<?= $currency ?>)</th>
                            <th width="200">Discount(%)</th>
                            <th>Discounted Price(<?= $currency ?>)</th>
                            <th>GST</th>
                            <th>Price(<?= $currency ?>)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $other_disc = 0;
            $total_gst_amount = 0;
            $total_discounted_gst = 0;
            $sub_total = 0;

            if (isset($amount) && $amount->percentage > 0) {
              $other_disc = $amount->percentage;
            } else if (isset($shoppingDiscount) && $shoppingDiscount > 0) {
              $other_disc = $shoppingDiscount;
            }

            $noQuant = true;
            foreach ($updatedOrder as $key => $v) {
              if ($v->updated_quantity > 0) {
                $noQuant = false;
                $sub_total += numberFormat(numberFormat($v->without_gst_price) * $v->updated_quantity);
            ?>
                        <tr>
                            <td><?= $v->name ?></td>
                            <td><?= $v->updated_quantity ?></td>
                            <td><?= $v->actual_price ?></td>
                            <?php
                  if ($v->discount > 0) {
                    $discountAmt = numberFormat($v->actual_price * $v->discount / 100);
                  }
                  if ($v->gst > 0) {
                    $total_gst_amount += numberFormat($v->discounted_price * $v->gst / 100) * $v->updated_quantity;
                  }
                  if ($other_disc > 0) {
                    $val = numberFormat($v->discounted_price - ($v->discounted_price * $other_disc / 100));
                    $total_discounted_gst += numberFormat(($val * $v->gst / 100) * $v->updated_quantity);
                  }
                  ?>
                            <td><?= $v->discount > 0 ? ((fmod($v->discount, 1) !== 0.00) ? '(' . numberFormat($v->discount) . '%)' . (isset($discountAmt) ? $discountAmt : '') :  '(' . (int)$v->discount . '%)' . (isset($discountAmt) ? $discountAmt : '')) : ' - ' ?>
                            </td>
                            <td><?= $isShow ? $v->without_gst_price :  $v->discounted_price ?></td>
                            <td><?= isset($v->gst) ? '(' . $v->gst . '%)' . numberFormat($v->discounted_price * $v->gst / 100)  : '-' ?>
                            </td>
                            <td>
                                <?= $currency . ' ' ?>
                                <span>
                                    <?= $isShow ? numberFormat($v->without_gst_price * $v->updated_quantity) :  numberFormat($v->discounted_price * $v->updated_quantity) ?></span>
                            </td>
                        </tr>
                        <?php
              }
            }

            // if($noQuant == false)

            ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Products Subtotal</strong></td>
                            <td><strong><?= $currency . ' ' . numberFormat($sub_total)
                          ?> </strong></td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Products GST</strong></td>
                            <td><strong><?= $currency . ' ' . numberFormat($total_gst_amount)
                          ?> </strong></td>
                        </tr>

                        <?php
            if ($total_discounted_gst > 0) {
            ?>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Subtotal</strong></td>
                            <td><strong><?= $currency . ' ' . numberFormat($sub_total + $total_gst_amount)
                            ?> </strong></td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Updated GST</strong></td>
                            <td><strong><?= $currency . ' ' . numberFormat($total_discounted_gst)
                            ?> </strong></td>
                        </tr>
                        <?php
            }
            ?>

                        <?php
            if (isset($amount) && $amount->percentage > 0) {
              $disc = $sub_total * $amount->percentage / 100;
            ?>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Promocode Discount</strong></td>
                            <td class="promo-parcentage"><strong> - (<?= $amount->percentage ?>%) <?= $currency . ' ' . numberFormat($disc)
                                                                                      ?> </strong></td>
                        </tr>
                        <?php
            }

            if (isset($shoppingDiscount) && $shoppingDiscount > 0) {
              $disc = $sub_total * $shoppingDiscount / 100;
            ?>

                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Cart Amount Based Discount</strong></td>
                            <td class="promo-parcentage"><strong> -
                                    (<?= (fmod($shoppingDiscount, 1) !== 0.00) ? numberFormat($shoppingDiscount) : (int)$shoppingDiscount ?>%)
                                    <?= $currency . ' ' . numberFormat($disc)
                    ?>
                                </strong></td>
                        </tr>
                        <?php
            }
            ?>

                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2"><strong>Total</strong></td>
                            <td><strong><?php
                          if ($total_discounted_gst > 0) {
                            $total = ($sub_total + $total_discounted_gst) -  $disc;
                            echo $currency . ' ' . numberFormat($total);
                          } else {
                            echo $currency . ' ' . numberFormat($sub_total + $total_gst_amount);
                          }
                          ?> </strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="notices">
                        <!-- <div>Action:</div> -->
                        <div class="notice">
                            <button class="btn btn-primary " onclick="window.print();"> Print </button>
                            <button class="btn btn-danger " onclick="window.close();"> Close </button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>

</html>
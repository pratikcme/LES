<div class="table-responsive-sm mb-5">
  <table border="0" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th>Product Name</th>
        <th> <?= isset($return_details) && $return_details == true ? 'Returned' : 'Purchased' ?>
          Quantity</th>
        <th>Product Price(<?= $currency ?>)</th>
        <th>Discount(%)</th>
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

      if (isset($return_details) && $return_details == true) {
        $other_disc = isset($removedDiscountPercentage) && $removedDiscountPercentage > 0 ? $removedDiscountPercentage  : 0;
      } else {
        if ($shoppingDiscount > 0) {
          $other_disc = $shoppingDiscount;
        } else if (isset($amount) && $amount->percentage > 0) {
          $other_disc = $amount->percentage;
        }
      }
      foreach ($order_details as $key => $v) {
        // $returned_quantity = $this->this_model->getReturnedQuantity($v->order_details_id);
      ?>
        <tr>
          <td><?= $v->name ?></td>
          <td><?= $v->quantity ?></td>
          <td><?= $v->actual_price ?></td>
          <?php
          if ($v->discount > 0) {
            $discountAmt = numberFormat($v->actual_price * $v->discount / 100);
          }
          if ($v->gst > 0) {
            $total_gst_amount += numberFormat(($v->discounted_price * $v->gst / 100) * $v->quantity);
          }
          if ($other_disc > 0) {
            $val = $v->discounted_price - ($v->discounted_price * $other_disc / 100);
            $total_discounted_gst += numberFormat(numberFormat($val * $v->gst / 100) * $v->quantity);
          }
          ?>
          <td><?= $v->discount > 0 ? ((fmod($v->discount, 1) !== 0.00) ? '(' . numberFormat($v->discount) . '%)' . (isset($discountAmt) ? $discountAmt : '') :  '(' . (int)$v->discount . '%)' . (isset($discountAmt) ? $discountAmt : '')) : ' - ' ?>
          </td>
          <td><?= $isShow ? $v->without_gst_price :  $v->discounted_price ?></td>
          <td><?= isset($v->gst) ? '(' . $v->gst . '%)' . numberFormat($v->discounted_price * $v->gst / 100)  : '-' ?>
          </td>
          <td>
            <?= $currency . ' ' ?>
            <span class="<?= isset($return_details) && $return_details == true ? 'return_order_price' : 'order_price ' ?>">
              <?= $isShow ? numberFormat($v->without_gst_price * $v->quantity) :  numberFormat($v->discounted_price * $v->quantity) ?></span>
          </td>
        </tr>
      <?php
      } ?>

    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"></td>
        <td colspan="1"><strong>Products Subtotal</strong></td>
        <td><strong><?= $currency . ' ' . numberFormat($orderInfo->total)
                    ?> </strong></td>
      </tr>
      <!-- <li>
                <div>
                    <h6>Products GST </h6>
                    <h6><?= $currency . ' '  ?> <span
                            id="<?= isset($return_details) && $return_details == true  ? 'return_total_gst' : 'total_gst' ?>"><?= numberFormat($total_gst_amount) ?></span>
                    </h6>
                </div>
            </li> -->
      <tr>
        <td colspan="3"></td>
        <td colspan="1"><strong>Products GST</strong></td>
        <td><strong><?= $currency . ' ' . numberFormat($total_gst_amount)
                    ?> </strong></td>
      </tr>

      <!-- <tr>
              <td colspan="3"></td>
              <td colspan="1"><strong>Promocode Amount :
                  <?= ($order_detail->percentage != '') ? $order_detail->percentage . ' %' : ''; ?></strong>
              </td>
              <td><strong><?php
                          echo ($order_detail->promocodeAmount != '') ? $getcurrency['value'] . ' ' . $order_detail->promocodeAmount : $getcurrency['value'] . '' . '0';
                          ?> </strong></td>
            </tr> -->

      <?php
      if ($total_discounted_gst > 0) {
        // if ($return_details == true) :
        //     dd($orderInfo->total);
        // endif;
      ?>

        <tr>
          <td colspan="3"></td>
          <td colspan="1"><strong>Subtotal</strong></td>
          <td><strong><?= $currency . ' ' . numberFormat($orderInfo->total + $total_gst_amount)
                      ?> </strong></td>
        </tr>

        <tr>
          <td colspan="3"></td>
          <td colspan="1"><strong>Updated GST</strong></td>
          <td><strong><?= $currency . ' ' . numberFormat($total_discounted_gst)
                      ?> </strong></td>
        </tr>
      <?php
      }
      ?>

      <!-- <tr>
                            <td colspan="3"></td>
                            <td colspan="1"><strong>Total Tax Amount :</strong></td>
                            <td><strong><?php
                                        echo $getcurrency['value'] . ' ' . $total_gst;
                                        ?> </strong></td>
                        </tr> -->
      <tr>
        <td colspan="3"></td>
        <td colspan="1"><strong>Delivery Charge</strong></td>
        <td><strong><?php
                    echo $getcurrency['value'] . ' ' . $order_detail->delivery_charge;
                    ?> </strong></td>
      </tr>
      <!-- <?php if ($order_detail->shopping_amount_based_discount != '0' && $order_detail->shopping_amount_based_discount != NULL) { ?>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="1"><strong>Cart Discount</strong></td>
                            <td><strong> -
                                    <?= $getcurrency['value'] . ' ' . $order_detail->shopping_amount_based_discount; ?>
                                </strong></td>
                        </tr>
                        <?php } ?> -->

      <tr>
        <td colspan="3"></td>
        <td colspan="1"><strong>Total</strong></td>
        <td><strong><?php
                    echo $currency . ' ' . numberFormat($orderInfo->payable_amount);
                    ?> </strong></td>
      </tr>
    </tfoot>
  </table>
</div>
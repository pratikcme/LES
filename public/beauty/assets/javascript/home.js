$maxRange = 6;
$multi = 0.1;
$OldPosX = 0;
$OldPosY = 0;
$PositionY = -5;
$PositionX = -5;
$img = document.getElementById("Image");

function moveMouse() {
    CursorX = event.clientX;
    CursorY = event.clientY;

    if ($OldPosX <= CursorX) {
        $PositionX = $PositionX + ($multi * 1);
    } else {
        $PositionX = $PositionX - ($multi * 1);
    }

    if ($PositionX >= $maxRange || $PositionX <= -$maxRange) {
        if ($PositionX >= $maxRange) {
            $PositionX = $maxRange;
        } else {
            $PositionX = -$maxRange;
        }
    }

    $OldPosX = CursorX;

    if ($OldPosY <= CursorY) {
        $PositionY = $PositionY + ($multi * 1);
    } else {
        $PositionY = $PositionY - ($multi * 1);
    }

    if ($PositionY >= $maxRange || $PositionY <= -$maxRange) {
        if ($PositionY >= $maxRange) {
            $PositionY = $maxRange;
        } else {
            $PositionY = -$maxRange;
        }
    }


    $OldPosY = CursorY;
    $img.style.transform = "translateY(" + $PositionY + "%) translateX(" + $PositionX + "%)";
}
// $(document).on('click','.addcartbutton', function(){
//     var that = $(this);
//     var product_id = $(this).data('product_id');
    
//     var varient_id = $(this).data('varient_id');
//     var url = $('#url').val();
//     var qnt = $(this).parent().next('div').find('input:text').val();
//     var siteCurrency = $('#siteCurrency').val(); // currency is dynamic
   
//     if(qnt == 0){
//       qnt = 1;
//       $(this).next('div').find('input:text').val('1');  
//     }
//      $.ajax({
//         url : url+'add_to_card/addProducToCart',
//         data:{product_id:product_id,qnt:qnt,varient_id:varient_id},
//         method:'post',
//         dataType:'json',
//         success:function(output){
//           that.removeAttr('disabled');
//           if(output.errormsg != ''){
//               swal(output.errormsg);
//               $('.cart-plus-minus-box').val('1');
//             }else if(output.itemExist != ''){
//               swal(output.itemExist);
              
//             }
//               if(output.count >= 1 ){
//                 that.parent().next('div').removeClass('d-none');
//                 that.parent().addClass('d-none');
//                 $('#itemCount').css('display','block');
//               }
              
//               if(output.success != ''){
              
//               }
//               $('#nav_cart_dropdown').removeClass("d-none");
//               $('#itemCount').html(output.count);
//               $('#updated_list').html(output.updated_list);
//               $('#nav_subtotal').html(siteCurrency+' '+output.final_total);
        
//         }
//     })
// });
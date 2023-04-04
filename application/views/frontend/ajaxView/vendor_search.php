<?php  foreach ($variable as $key => $value) { 
    $attr = (isset($_SESSION["vendor_id"]) && $value->id == $_SESSION["vendor_id"]) ? "checked" : ""; ?>
    <div class="col-md-6">
   <div class="vendor-loc">
     <div class="vendor-header">
       <div class="address-chk-box <?=$attr?>">
         <label> Defualt <input class="vendor-chk" type="checkbox" <?=$attr?>>
           <span class="blue"></span>
         </label>
       </div>
     </div>
     <div class="vendor-1">
       <div class="vendor-img">
         <img src="<?=base_url().' public/images/'.$this->folder.'vendor_shop/'.$value->image?>">
       </div>
       <div class="vendor-detail">
         <a href="javascript:" class="vendor" data-ven_id="<?=$value->id?>">
           <h5><?=$value->name?></h5>
         </a>
         <p><?=$value->location?></p>
         <p>+91-<?=$value->phone_no?></p>
       </div>
     </div>
   </div>
 </div>
<?php } ?>
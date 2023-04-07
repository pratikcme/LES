<?php
 $set = '0'; 
  if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != ''){
      if(!empty($mycart)){
        $set = '1';
      }
  }else{
    if(isset($_SESSION['My_cart']) AND !empty($_SESSION['My_cart'])){
        $set = '1';
      }
  }
?>

  <input type="hidden" name="" id="url" value="<?=base_url()?>">
  <input type="hidden" name="" id="session_my_cart" value="<?=$set?>">
  <input type="hidden" name="session_vendor_id" id="session_vendor_id" value="<?=(isset($_SESSION['branch_id'])) ? $_SESSION["branch_id"] : '' ?>">
<!-- -----jquary-min----- -->
<!-- <script src="<?=$this->theme_base_url.'/assets/js/jquery.min.js'?>"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!--  js animate-link -->
<script src="<?=$this->theme_base_url.'/assets/js/wow.min.js'?>"></script>

<!-- ----owl-min-js----- -->
<script src="<?=$this->theme_base_url.'/assets/js/owl.carousel.min.js'?>"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/Drift.min.js'></script>


  <!-- -----dropdown-js-- -->
<script src="<?=$this->theme_base_url.'/assets/js/zoom.js'?>"></script>
<script src="<?=$this->theme_base_url.'/assets/js/dropdown.js'?>"></script>
<!-- -----slider-js-- -->
<script src="<?=$this->theme_base_url.'/assets/js/index.js'?>"></script>
<script src="<?=$this->theme_base_url.'/assets/js/slider.js'?>"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW43KgTNs_Kusuvbian6KYGi_QzXOLS4w&v=3.exp&libraries=places"></script>
   	<script type="text/javascript">

      function initAutocomplete(id) {
              var res = id.split("_");
              geo = res[0];
              console.log(res);
              // Create the autocomplete object, restricting the search to geographical
              // location types.
              autocomplete = new google.maps.places.Autocomplete(
                  /** @type {!HTMLInputElement} */(document.getElementById(id)),
                  {types: ['geocode']});
            
              // When the user selects an address from the dropdown, populate the address
              // fields in the form.
              autocomplete.addListener('place_changed', fillInAddress);


          }
      
          function fillInAddress() {
              // Get the place details from the autocomplete object.
              var place = autocomplete.getPlace();
              console.log(place);
              // console.log(place.address_components);
              var url  = window.location.href; 
              var base_url = $('#url').val();

              if(url != base_url+'vendors' && url != base_url){
                  document.getElementById('address').value = place.formatted_address;
                // if($('#address').length){
                // }
                for (var i = 0; i < place.address_components.length; i++) {

                    for (var j = 0; j < place.address_components[i].types.length; j++) {

                        if (place.address_components[i].types[j] == "postal_code") {

                            document.getElementById('pincode').value = place.address_components[i].long_name;
                        }

                        if (place.address_components[i].types[j] == "administrative_area_level_1") {

                        document.getElementById('state').value = place.address_components[i].long_name;
                        $("#state").attr('readonly', 'readonly').focus();
                        }

                        if (place.address_components[i].types[j] == "country") {
                        	 document.getElementById('country').value =place.address_components[i].long_name ;
                            // $(".edittxtCountryCode").val(place.address_components[i].short_name);
                            // $(".edittxtCountry").val(place.address_components[i].long_name);
                            $("#country").attr('readonly', 'readonly').focus();
                        }

                        if (place.address_components[i].types[j] == "locality") {
                        document.getElementById('city').value = place.address_components[i].long_name;
                        }
                    }
                }

              }
              //alert(autocomplete.getPlace().geometry.location);false;
              
              document.getElementById(geo+'_latitude').value = place.geometry.location.lat();
              document.getElementById(geo+'_longitude').value = place.geometry.location.lng();
          }
      
              var map;
              var marker;
              
              var Lat = "<?php echo LATITUDE ; ?>";
              var Long = "<?php echo LONGITUDE; ?>";
                  
              var Lat = parseInt(Lat);
              var Long =  parseInt(Long);
                   
              var myLatlng = new google.maps.LatLng(Lat,Long);
              var geocoder = new google.maps.Geocoder();
              var infowindow = new google.maps.InfoWindow();
              
          function initialize(input){
          	
               $('.myMap').removeClass("abcd");
              //alert(document.getElementById(input+'_address').value);false;
              if(input == 'departure') {
                  if (document.getElementById('departure_latitude').value != 0) {
                      var myLat = document.getElementById('departure_latitude').value;
                  }else{
                      var myLat =  Lat;
                  }
                  if (document.getElementById('departure_latitude').value != 0) {
                      var myLng = document.getElementById('departure_longitude').value;
                  }else{
                      var myLng =  Long;
                  }
                  var myLatlng = new google.maps.LatLng(myLat,myLng);
              }else{
                  var myLatlng = new google.maps.LatLng(Lat,Long);
              }
              
              var mapOptions = {
                  zoom: 8,
                  center: myLatlng,
                  //center: new google.maps.LatLng(myLat,myLng),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              };
              lat1 = parseFloat(myLat) - 0.01;
              lat2 = parseFloat(myLat) + 0.007;
              lat3 = parseFloat(myLat) + 0.01;
              
              long1 = parseFloat(myLng) + 0.003;
              long2 = parseFloat(myLng) + 0.007;
              long3 = parseFloat(myLng) - 0.01;
             
              map = new google.maps.Map(document.getElementById("myMap"), mapOptions);
              
              var triangleCoords = [
                      new google.maps.LatLng(lat1, long1),
                      new google.maps.LatLng(lat2, long2),
                      new google.maps.LatLng(lat3, long3)
                    ];
              
              marker = new google.maps.Marker({
                  map: map,
                  position: myLatlng,
                  draggable: true 
              });     
              
              geocoder.geocode({'latLng': myLatlng }, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                      if (results[0]) {
                         
                      }
                  }
              });

              
                             
              google.maps.event.addListener(marker, 'dragend', function() {
                  geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                      if (status == google.maps.GeocoderStatus.OK) {
                          if (results[0]) {
                              $('#'+input+'_address').val(results[0].formatted_address);
                              $('#'+input+'_latitude').val(marker.getPosition().lat());
                              $('#'+input+'_longitude').val(marker.getPosition().lng());

                              
                              infowindow.setContent(results[0].formatted_address);
                              infowindow.open(map, marker);

                              setTimeout(function(){
                              	$('.myMap').addClass("abcd");
                              },3000)
                              
                              
                              // var center = map.getCenter();
                              // google.maps.event.trigger(map, 'resize');
                              // map.setCenter(center);
                          }
                      }
                  });
              });

              google.maps.event.addListener(map, 'dragend', function () {
				    marker.setPosition(this.getCenter()); // set marker position to map center
				    //updatePosition(this.getCenter().lat(), this.getCenter().lng()); // update position display
			});
          }
             function getPolygonCoords() {
              
              var len = myPolygon.getPath().getLength();
              var htmlStr = "";
              for (var i = 0; i < len; i++) {
                  if (htmlStr == "") {
                      htmlStr += myPolygon.getPath().getAt(i).toUrlValue(5);
                  }else{
                      htmlStr += "|" + myPolygon.getPath().getAt(i).toUrlValue(5);
                  }
              }
      
              document.getElementById('store-service_area').value = htmlStr;
          }
          setTimeout(function () { $('#registered').hide(); }, 6000);
            
      </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- bootstrap-datepicker-js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js" type="text/javascript"></script> 
    <script src="<?=base_url();?>public/<?=$_SESSION['template_name']?>/assets/javascript/common.js?v=<?=js_version?>"></script>
 <?php
	if(!empty($js)){
		foreach ($js as $value) { ?>
		<script src="<?=base_url();?>public/<?=$_SESSION['template_name']?>/assets/javascript/<?=$value.'?v='.js_version?>"></script>			
		 
	<?php	}
 	}
 ?> 
 <script>
    jQuery(document).ready(function () {
<?php
if (!empty($init)) {
    foreach ($init as $value) {
        echo $value . ';';
    }
}
?>
});


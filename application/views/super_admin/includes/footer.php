 <footer class="main-footer">
   <div class="footer-left">
     Copyright © <?= date('Y') ?> <div class="bullet"></div> Design By <a href="#">CMEXPERTISE</a>
   </div>
   <div class="footer-right">
   </div>
 </footer>

 </div>
 </div>
 <!-- General JS Scripts -->
 <script src="<?= base_url() ?>public/super_admin/assets/js/app.min.js"></script>
 <!-- Page Specific JS File -->
 <!-- <script src="<?= base_url() ?>public/super_admin/assets/js/page/index.js"></script> -->
 <!-- Template JS File -->
 <script src="<?= base_url() ?>public/super_admin/assets/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
 <script src="<?php echo base_url(); ?>public/js/jquery.multi-select.js"></script>
 <script src="<?php echo base_url(); ?>public/js/search_multivendor.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBW43KgTNs_Kusuvbian6KYGi_QzXOLS4w" type="text/javascript"></script>

 <script type="text/javascript">
   function initAutocomplete(id) {
     var res = id.split("_");
     geo = res[0];
     console.log(res);
     // Create the autocomplete object, restricting the search to geographical
     // location types.
     autocomplete = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
       (document.getElementById(id)), {
         types: ['geocode']
       });
     // When the user selects an address from the dropdown, populate the address
     // fields in the form.
     autocomplete.addListener('place_changed', fillInAddress);
   }

   function fillInAddress() {
     // Get the place details from the autocomplete object.
     var place = autocomplete.getPlace();
     //alert(autocomplete.getPlace().geometry.location);false;
     document.getElementById(geo + '_latitude').value = place.geometry.location.lat();
     document.getElementById(geo + '_longitude').value = place.geometry.location.lng();
   }
   var map;
   var marker;
   var Lat = "23.0225";
   var Long = "72.5714";
   var Lat = parseInt(Lat);
   var Long = parseInt(Long);
   var myLatlng = new google.maps.LatLng(Lat, Long);
   var geocoder = new google.maps.Geocoder();
   var infowindow = new google.maps.InfoWindow();
 </script>
 <?php
  if (!empty($js)) {
    foreach ($js as $value) {
  ?>
     <script src="<?php echo base_url(); ?>public/super_admin/assets/javascripts/<?php echo $value ?>" type="text/javascript"></script>
 <?php
    }
  }
  ?>
 <script>
   jQuery(document).ready(function() {
     <?php
      if (!empty($init)) {
        foreach ($init as $value) {
          echo $value . ';';
        }
      }
      ?>
   });
 </script>
 <!-- <script>
    options = {
      useZebra: true,
      useObserver: true,
      showToggle: true,
      showToggleAll: true,
    }
    $("table.shrink").tableShrinker(options)
  </script> -->
 <script>
   /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
   var dropdown = document.getElementsByClassName("dropdown-btn");
   var i;

   for (i = 0; i < dropdown.length; i++) {
     dropdown[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var dropdownContent = this.nextElementSibling;
       if (dropdownContent.style.display === "block") {
         dropdownContent.style.display = "none";
       } else {
         dropdownContent.style.display = "block";
       }
     });
   }
 </script>
 <script type="text/javascript">
   $(document).on('show', '.accordion', function(e) {
     //$('.accordion-heading i').toggleClass(' ');
     $(e.target).prev('.accordion-heading').addClass('accordion-opened');
   });

   $(document).on('hide', '.accordion', function(e) {
     $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
     //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
   });
 </script>
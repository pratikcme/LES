

// ---------my-acoount-table-js--
$(document).ready(function () {
  $("#table-two-axis").basictable();
});

// <!-- --responisive-table-js--- -->
$(document).ready(function () {
  $("#table-two-axis").basictable();
});
 
  // calender
  $(document).ready(function(){
    $('#datepicker').datepicker({
      inline:true,
      firstDay: 1,
      showOtherMonths:true,
      dayNamesMin:['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    })
  });
 
 // -----counter-js---
var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var buttonPlus  = $(".qty-btn-plus");
            var buttonMinus = $(".qty-btn-minus");

            var incrementPlus = buttonPlus.click(function() {
            var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
            $n.val(Number($n.val())+1 );
            });

            var incrementMinus = buttonMinus.click(function() {
            var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
            var amount = Number($n.val());
            if (amount > 0) {
                $n.val(amount-1);
            }
});
    
function myFunction(x) {
  x.classList.toggle("fa-solid");
}

// add-review-box
$(document).ready(function(){
  $(".add-review-btn").click(function(){
    $(".add-your-review-wrp").show();
  });

  $(".ship-close").click(function(){
    $(".add-your-review-wrp").hide();
  })
  $(".close-review-box").click(function(){
    $(".add-your-review-wrp").hide();
  })
});

  // chnage-password-form
  $(document).ready(function(){
    $(".new-add").click(function(){
      $(".ship-address").show();
    });
  
    $(".ship-close").click(function(){
      $(".ship-address").hide();
    })
  });
    
    // -----checkout-page-accordion----
    $(document).ready(function () {
        $(".accordion-items").on("click", ".accordion-heading", function () {
        $(this).toggleClass("active").next().slideToggle();
        
        $(".accordion-content").not($(this).next()).slideUp(300);
        $(this).siblings().removeClass("active");
        });
    });
    


    

  // ============= place order modal js ===========
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function(event) {
  modal.style.display = "none";
}

window.onclick = function(event){
  if (event.target == modal){
    modal.style.display = "none"; 
  }
}


  



function myFunction(x) {
  x.classList.toggle("fa-solid");
}


// calender
$(document).ready(function(){
  $('#calendar').datepicker({
    inline:true,
    firstDay: 1,
    showOtherMonths:true,
    dayNamesMin:['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
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

// ---------my-acoount-table-js--
$(document).ready(function () {
  $('#table-two-axis').basictable();
});

// <!-- --responisive-table-js--- -->
$(document).ready(function() {
  $('#table-two-axis').basictable();
})

// -----checkout-page-accordion----
$(document).ready(function () {
	$(".accordion-items").on("click", ".accordion-heading", function () {
    $(".accordion-heading").removeClass("active");
		$(this).toggleClass("active").next().slideToggle();

		$(".accordion-content").not($(this).next()).slideUp(300);
		$(this).siblings().removeClass("active");
	});
});


// -----product-detail-accordion---
// ---- ---- Const ---- ---- //
const accordionContent = document.querySelectorAll('.product-accordion-content');

// ---- ---- Class .open ---- ---- //
accordionContent.forEach((item, index) => {
  let header = item.querySelector('.header');
  header.addEventListener('click', () => {
    item.classList.toggle('open');

    // ---- ---- Height Description and Change Icon ---- ---- //
    let description = item.querySelector('.description');
    if (item.classList.contains('open')) {
      description.style.height = `${description.scrollHeight}px`;
      item.querySelector('i').classList.replace('fa-plus', 'fa-minus');
    } else {
      description.style.height = '0px';
      item.querySelector('i').classList.replace('fa-minus', 'fa-plus');
    }
    removeOpen(index);
  });
});

function removeOpen(index1) {
  accordionContent.forEach((item2, index2) => {
    if (index1 != index2) {
      item2.classList.remove('open');
      let descr = item2.querySelector('.description');
      descr.style.height = '0px';
      item2.querySelector('i').classList.replace('fa-minus', 'fa-plus');
    }
  });
}

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















// ============= place order modal js ===========
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function () {
  modal.style.display = "block";
};
span.onclick = function (event) {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

//   --------------accordian-js-------------

$(document).ready(function () {
  $(".accordion-items").on("click", ".accordion-heading", function () {
    $(".accordion-heading").removeClass("active");
    $(this).toggleClass("active").next().slideToggle();

    $(".accordion-content").not($(this).next()).slideUp(300);
    $(this).siblings().removeClass("active");
  });
});

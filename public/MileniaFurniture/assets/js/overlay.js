// overlay
let body = document.querySelector(".overlay");
let mycartbtn = document.querySelector(".cart-new-btn");
let closebtns = document.querySelector(".close-btn"); 
let cartdropdowns = document.querySelector(".cart-dropdowns");
// let ovelaybg = document.querySelector(".mobile-btn-overlay");
// let mysidebar = document.querySelector(".sidepanel");

mycartbtn.addEventListener('click', (event) => {
  body.classList.toggle('show');
});
body.addEventListener('click', (event) => {
    body.classList.remove('show');
});
closebtns.addEventListener('click', (event) => {
      cartdropdowns.classList.remove('show');
      body.classList.remove('show');
});
// ovelaybg.addEventListener('click', (event) => {
//   mysidebar.classList.remove('active');
//   ovelaybg.classList.remove('active');
//   body.classList.remove('show');
// });


// Open and Close Search Bar Toggle
const searchBlock = document.querySelector(".search-block");
const searchToggle = document.querySelector(".mobile-search-toggle");
const searchCancel = document.querySelector(".main-div-cancel");

if (searchToggle && searchCancel) {
   searchToggle.addEventListener("click", () => {
      searchBlock.classList.add("is-active");
      searchCancel.classList.add("is-active");

   });

   searchCancel.addEventListener("click", () => {
      searchBlock.classList.remove("is-active");
      searchCancel.classList.remove("is-active");
   });

   searchBlock.addEventListener("focusin", () => {
    searchBlock.classList.add('is-active');  
 });

   document.addEventListener("focusout", () => {
    searchBlock.classList.remove('is-active');
 });

 
}
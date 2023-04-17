
// Open and Close Search Bar Toggle
const searchBlock = document.querySelector(".search-block");
const searchToggle = document.querySelector(".search-toggle");
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



// cart-dropdwon-js--------

let cartdropdownbtn = document.querySelector(".cart-icons");
let cartdropdown = document.querySelector(".cart-dropdwon");

cartdropdownbtn.addEventListener('click', (event) => {
  cartdropdown.classList.toggle('active');
});

cartdropdownbtn.addEventListener('blur', (event) => {
  cartdropdown.classList.remove('active');
});



// ----user-dropdown-js---
let userdropbtn = document.querySelector(".user-login-icon");
let userdropdown = document.querySelector(".user-login-dropdow");

userdropbtn.addEventListener('click', (event) => {
  userdropdown.classList.toggle('active');
});

userdropbtn.addEventListener('blur', (event) => {
  userdropdown.classList.remove('active');
});
  


// -----------mobile-sidenav-------
  let mobileopenbtn = document.querySelector(".mobile-filter-btn");
  let closebtn = document.querySelector(".closebtn");
  let mysidebar = document.querySelector(".sidepanel");
  let ovelaybg = document.querySelector(".mobile-btn-overlay");
  
  mobileopenbtn.addEventListener('click', (event) => {
    mysidebar.classList.toggle('active');
    ovelaybg.classList.toggle('active');
  });
  
  closebtn.addEventListener('click', (event) => { 
    mysidebar.classList.remove('active');
    ovelaybg.classList.remove('active');
  });
  
  ovelaybg.addEventListener('click', (event) => {
    mysidebar.classList.remove('active');
    ovelaybg.classList.remove('active');
  });



// -----cart-sidenav--js---
let filterdiv = document.querySelector(".my-filter-wrapper");
let leftdiv = document.querySelector(".show-div-wrapper");
let hidedivebtn = document.querySelector(".filter-hide-btn");

hidedivebtn.addEventListener('click', (event) => {
    filterdiv.classList.toggle('hide');
    leftdiv.classList.toggle('hide');
});

mobileopenbtn.addEventListener('blur', (event) => {
    mysidebar.classList.remove('active');
});









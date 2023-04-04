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

// mobileopenbtn.addEventListener('blur', (event) => {
//     mysidebar.classList.remove('active');
// });
// ----search-icon-dropdown---
// Open and Close Search Bar Toggle

// const searchBlock = document.querySelector(".search-block");
// const searchToggle = document.querySelector(".search-toggle");
// const searchCancel = document.querySelector(".search-cancel");
// const mobilesearchCancel = document.querySelector(".mobile-search-cancel");
// const mobilesearchblock = document.querySelector(".mobile-search-block");
// const searchbgoverlay = document.querySelector(".search-bg-overlay");

// if (searchToggle && searchCancel) {
//    searchToggle.addEventListener("click", () => {
//       searchBlock.classList.add("is-active");
//       mobilesearchblock.classList.add("is-active");

//    });

//    searchCancel.addEventListener("click", () => {
//       searchBlock.classList.remove("is-active");
//       mobilesearchblock.classList.remove("is-active");
//    });

//    mobilesearchCancel.addEventListener("click", () => {
//       mobilesearchblock.classList.remove("is-active");
//    });

//    searchBlock.addEventListener("focusin", () => {
//     searchBlock.classList.add('is-active');  
//  });
  
//   mobilesearchblock.addEventListener("focusin", () => {
//     mobilesearchblock.classList.add('is-active');  
//  });

//    document.addEventListener("focusout", () => {
//     searchBlock.classList.remove('is-active');
//  });

//  document.addEventListener("focusout", () => {
//     mobilesearchblock.classList.remove('is-active');
//  });
 
// }

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




  

// cart-pc-dropdwon-js--------

let body = document.querySelector(".overlay");
let carticons = document.querySelector(".cart-icons");
let closebtns = document.querySelector(".close-btn");
let cartdropdowns = document.querySelector(".cart-dropdwon");

carticons.addEventListener('click', (event) => {
  body.classList.toggle('show');
});
carticons.addEventListener('click', (event) => {
    cartdropdowns.classList.toggle('show');
});
closebtns.addEventListener('click', (event) => {
    cartdropdowns.classList.remove('show');
    body.classList.remove('show');
});
body.addEventListener('click', (event) => {
  cartdropdowns.classList.remove('show');
  body.classList.remove('show');
});




// ----user-dropdown-js---

// let userdropbtn = document.querySelector(".user-login-icon");
// let userdropdown = document.querySelector(".user-login-dropdow");

// userdropbtn.addEventListener('click', (event) => {
//   userdropdown.classList.toggle('active');
// });

// userdropbtn.addEventListener('blur', (event) => {
//   userdropdown.classList.remove('active');
// });



// // ---mobile-dropdown-cart-js---
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

mobileopenbtn.addEventListener('blur', (event) => {
  mysidebar.classList.remove('active');
  ovelaybg.classList.remove('active');
});

ovelaybg.addEventListener('click', (event) => {
  mysidebar.classList.remove('active');
  ovelaybg.classList.remove('active');
});



// -----cart-sidenav-dropdown-js---

let filterdiv = document.querySelector(".my-filter-wrapper");
let leftdiv = document.querySelector(".show-div-wrapper");
let hidedivebtn = document.querySelector(".filter-hide-btn");

hidedivebtn.addEventListener('click', (event) => {
    filterdiv.classList.toggle('hide');
    leftdiv.classList.toggle('hide');
});





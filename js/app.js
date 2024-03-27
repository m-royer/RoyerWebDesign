"use strict";

let menuToggle = document.getElementById("menuToggle");
let menuItemsUL = document.getElementById("menuItems");
let menuItemsDIV = document.getElementById("menuDIV");
let body = document.body;
menuToggle.addEventListener("click", openMenu);
body.addEventListener("click", closeMenu);
let menuItemsArray = Array.from(menuItemsUL.children);

menuItemsArray.forEach((el) => {
    el.addEventListener("click", closeMenu);
});



function openMenu(event) {
    console.log("opened");
    menuItemsUL.classList.add("open");
    // stop the body from processing the click
    event.stopImmediatePropagation();
    
}

function closeMenu(event) {
    console.log("closed");
    menuItemsUL.classList.remove("open");
}
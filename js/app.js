"use strict";

let menuToggle = document.getElementById("menuToggle");
let navItemsUL = document.getElementById("menuItems");
let body = document.body;
menuToggle.addEventListener("click", openMenu);
body.addEventListener("click", closeMenu);
let menuItemsArray = Array.from(navItemsUL.children);

menuItemsArray.forEach((el) => {
    el.addEventListener("click", closeMenu);
});



function openMenu(event) {
    console.log("opened");
    navItemsUL.classList.toggle("open");
    // stop the body from processing the click
    event.stopImmediatePropagation();
    
}

function closeMenu(event) {
    console.log("closed");
    navItemsUL.classList.remove("open");
}



// scrollyspy nav

const sections = document.querySelectorAll('section');
const navItems = navItemsUL.children;
let activeNav = "";
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                activeNav = entry.target.classList[0];
                document.querySelector("#menuItems li.active").classList.remove("active");
                document.querySelector(`#menuItems li[data-section="${activeNav}"]`).classList.add("active");
            }
        });
    },
    { 
        root: document, 
        rootMargin: "0px",
        threshold: 0.2
    }
);

sections.forEach((section) => {
    observer.observe(section);
});
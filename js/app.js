"use strict";

// Mobile nav functionality
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



// scrollyspy desktop nav

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



// Contact form submit
const form = document.getElementById("contact-form");
const submitButton = document.getElementById("submit-button");
const submitButtonText = document.getElementById("submit-text");
const submitButtonIcon = document.getElementById("submit-icon");
const thankYouMessage = document.querySelector(".contact-thank-you");

async function submitContactForm(data) {
    const formData = new FormData();

    submitButton.disabled = true;
    submitButtonIcon.classList.remove("fa-paper-plane");
    submitButtonIcon.classList.add("fa-spinner", "anim-rotating");

    /*
    try {
        const response = await fetch("https://royerwebdesign.com/submit", {
            body: formData,
        });
    } catch(e) {
        console.error(e);
    }
    */

    console.log("Submitted");
    thankYouMessage.classList.add("show-thank-you");
}

form.addEventListener("submit", (event) => {
    event.preventDefault();
    submitContactForm();
});
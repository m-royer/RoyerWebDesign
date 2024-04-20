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

let isValidEmail = false;
let isValidName = false;
let isValidMessage = false;

async function submitContactForm(data) {
    const formData = new FormData(form);

    submitButton.disabled = true;
    submitButtonIcon.classList.remove("fa-paper-plane");
    submitButtonIcon.classList.add("fa-spinner", "anim-rotating");

    if(isValidName && isValidEmail && isValidMessage) {

        
        try {
            const response = await fetch("https://test.royerwebdesign.com/contact.php", {
                body: formData,
            });
            console.log(await response.json());
        } catch(e) {
            console.error(e);
        }
        

        console.log("Submitted");
        thankYouMessage.classList.add("show-thank-you");

    }
}

form.addEventListener("submit", (event) => {
    event.preventDefault();
    submitContactForm();
});

// validations
const frmName = document.getElementById("name");
const nameError = document.getElementById("name-error");

const frmEmail = document.getElementById("email");
const emailError = document.getElementById("email-error");

const frmMessage = document.getElementById("message");
const messageError = document.getElementById("message-error");

const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

frmName.addEventListener("input", () => {
    isValidName = frmName.value.length !== 0;
    if (isValidName) {
        nameError.textContent = "";
        frmName.classList.remove("invalid");
    } else {
        frmName.classList.add("invalid");
        nameError.textContent = "A name is required"
    }
});

frmEmail.addEventListener("input", () => {
    isValidEmail = frmEmail.value.length !== 0 && emailRegExp.test(frmEmail.value);
    if (isValidEmail) {
        emailError.textContent = "";
        frmEmail.classList.remove("invalid");
    } else {
        frmEmail.classList.add("invalid");
        emailError.textContent = "A valid email is required"
    }
});

frmMessage.addEventListener("input", () => {
    isValidMessage = frmMessage.value.length !== 0;
    if (isValidMessage) {
        messageError.textContent = "";
        frmMessage.classList.remove("invalid");
    } else {
        frmMessage.classList.add("invalid");
        messageError.textContent = "Please tell me a little about what you're looking for"
    }
});
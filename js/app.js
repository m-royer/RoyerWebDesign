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
const frmName = document.getElementById("name");
const nameError = document.getElementById("name-error");

const frmOrg = document.getElementById("org-name");
const frmURL = document.getElementById("url");

const frmEmail = document.getElementById("email");
const emailError = document.getElementById("email-error");

const frmMessage = document.getElementById("message");
const messageError = document.getElementById("message-error");

const submitButton = document.getElementById("submit-button");
const submitButtonText = document.getElementById("submit-text");
const submitButtonIcon = document.getElementById("submit-icon");

const thankYouMessage = document.querySelector(".contact-thank-you");
const resultsName = document.getElementById("contactResultsName");
const resultsOrg = document.getElementById("contactResultsOrg");
const resultsEmail = document.getElementById("contactResultsEmail");
const resultsURL = document.getElementById("contactResultsURL");
const resultsMessage = document.getElementById("contactResultsMessage");

let isValidEmail = false;
let isValidName = false;
let isValidMessage = false;

async function submitContactForm(data) {
    const formData = new FormData(form);

    submitButton.disabled = true;
    submitButtonIcon.classList.remove("fa-paper-plane");
    submitButtonIcon.classList.add("fa-spinner", "anim-rotating");

    if(validateName() && validateEmail() && validateMessage()) {

        
        try {
            const response = await fetch("contact.php", {
                method: 'POST',
                body: formData,
            });
            console.log(await response.json());
        } catch(e) {
            console.error(e);
        }
        

        resultsName.innerText = frmName.value;
        resultsOrg.innerText = frmOrg.value;
        resultsEmail.innerText = frmEmail.value;
        resultsURL.innerText = frmURL.value;
        resultsMessage.innerText = frmMessage.value;
        thankYouMessage.classList.add("show-thank-you");

    } else {
        console.log("not validated");
        submitButton.disabled = false;
        submitButtonIcon.classList.add("fa-paper-plane");
        submitButtonIcon.classList.remove("fa-spinner", "anim-rotating");
    }
}

form.addEventListener("submit", (event) => {
    event.preventDefault();
    submitContactForm();
});

// validations

const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

function validateName() {
    return frmName.value.length !== 0;
}
function validateEmail() {
    return frmEmail.value.length !== 0 && emailRegExp.test(frmEmail.value);
}
function validateMessage() {
    return frmMessage.value.length !== 0;
}

frmName.addEventListener("input", () => {
    isValidName = validateName();
    if (isValidName) {
        nameError.textContent = "";
        frmName.classList.remove("invalid");
    } else {
        frmName.classList.add("invalid");
        nameError.textContent = "A name is required"
    }
});

frmEmail.addEventListener("input", () => {
    isValidEmail = validateEmail();
    if (isValidEmail) {
        emailError.textContent = "";
        frmEmail.classList.remove("invalid");
    } else {
        frmEmail.classList.add("invalid");
        emailError.textContent = "A valid email is required"
    }
});

frmMessage.addEventListener("input", () => {
    isValidMessage = validateMessage();
    if (isValidMessage) {
        messageError.textContent = "";
        frmMessage.classList.remove("invalid");
    } else {
        frmMessage.classList.add("invalid");
        messageError.textContent = "Please tell me a little about what you're looking for"
    }
});
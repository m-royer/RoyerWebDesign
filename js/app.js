const title = document.querySelector(".text-layer");
const cloud = document.querySelector(".cloud-container");
const contact = document.querySelector(".contact-container");
const showContactButton = document.getElementById("show-contact");
const cancelContactButton = document.getElementById("contact-cancel");
const submitContactButton = document.getElementById("contact-submit");
var sceneType = "";

function changeScene() {
    if(sceneType==="contact") {
        title.classList.remove("show");
        cloud.classList.remove("show");
        contact.classList.add("show");
        sceneType = "";
    } else {
        title.classList.add("show");
        cloud.classList.add("show");
        contact.classList.remove("show");
        sceneType = "contact";
    }
}

function submitContact() {
    let contactForm = document.getElementById("contact-form");
    let cName = contactForm.querySelector("[name=name]");
    let cEmail = contactForm.querySelector("[name=email");
    let cMessage = contactForm.querySelector("[name=message");
    let data = [];
    data.push("name=" + cName.value);
    data.push("email=" + cEmail.value);
    data.push("message=" + cMessage.value);

    let contactRequest = new XMLHttpRequest();
    contactRequest.open("POST","/contact.php");
    contactRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    contactRequest.onreadystatechange = function() { // Call a function when the state changes.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log("Success!");
            console.log(this.responseText);
        } else {
            console.log("Error!");
        }
    }
    contactRequest.send(data.join("&"));
}


showContactButton.addEventListener("click", changeScene);
cancelContactButton.addEventListener("click", changeScene);
submitContactButton.addEventListener("click", submitContact);
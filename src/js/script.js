/* Allows changing of tabs within a single HTML Page */
function changetab(evt, tabName) {
    // Declare Variables
    let i, tabContent, tabLinks;

    // Hiding all elements with class="tabcontent"
    tabContent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Removing "active" class from elements that have class "tablink"
    tabLinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

/* Sets up Accordian FAQ Page */
function FAQsetup() {
    let faq = document.getElementsByClassName("QuestionTitle");
    for (let i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");
            /* Toggle between hiding and showing the active panel */
            let body = this.nextElementSibling;
            if (body.style.maxHeight) {
                body.style.maxHeight = null;
            } else {
                body.style.maxHeight = body.scrollHeight + "px";
            }
        });
    }
}

/* Clears Form */
function clearForm() {
    document.getElementById("FAQform").reset();
}

/* Allows for dynamic response of navbar */
function navtoggle() {
    let x = document.getElementById("navbar");
    if (x.className === "navtop") {
        x.className += " responsive";
    } else {
        x.className = "navtop";
    }
}

/* Opens Modal any product review */
function openmodal(modalname) {
    let x = document.getElementById(modalname);
    x.style.display = "block";
}

/* Closes Modal any product review */
function closemodal(modalname) {
    let x = document.getElementById(modalname);
    x.style.display = "none";
}

/* Closes modal window if user clicks outside of window */
window.onclick = function (event) {
    let preworkout = document.getElementById("disorder");
    let protein = document.getElementById("protein");
    let meal = document.getElementById("meal");
    if (event.target == preworkout) {
        preworkout.style.display = "none";
    } else if (event.target == protein) {
        protein.style.display = "none";
    } else if (event.target == meal) {
        meal.style.display = "none";
    }
}

/* Opens Popup for submitting question */
function openpopup() {
    let popup = document.getElementById("popup");
    popup.classList.add("openpopup");
    window.scrollTo(0, 0);
    return false;
}

/* Closes Popup after submitting question */
function closePopup() {
    let popup = document.getElementById("popup");
    popup.classList.remove("openpopup");
}
/*
 * Author: Felix Beaulieu
 * */

/* GLOBALS */
const SMALL = "small";
const LARGE = "large";
let screenMode;


/* HELPER FUNCTIONS */
function setScreenMode() {
    screenMode = window.innerWidth <= 400 ? screenMode = SMALL : LARGE;
}

function show(element, displayMethod = "block") {
    if (element != null)
        element.style.display = displayMethod;
}

function hide(e) {
    if (e != null)
        e.style.display = "none";
}

function isVisible(e) {
    if (e != null)
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
}
/* END OF HELPER FUNCTIONS */

function openUser(userLinkId, userInfoCardId) {
    let userLink = document.getElementById(userLinkId);
    let userInfoCard = document.getElementById(userInfoCardId);
    setScreenMode();
    if (userLink == null || userInfoCard == null) return;

    let i;

    let userInfoCards = document.getElementsByClassName("userInfoCard");
    for (i = 0; i < userInfoCards.length; i++) {
        userInfoCards[i].style.display = "none";
        userInfoCards[i].classList.remove("active");
    }

    let tabLinks = document.getElementsByClassName("tabLink");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }

    userInfoCard.style.display = "block";
    userLink.classList.add("active");
    userInfoCard.classList.add("active");
    if (screenMode === SMALL) {
        toggleMenu();
    }
}

// Collapse Menu function only works when the collapse button is visible,
// otherwise, call is ignored.
function toggleMenu() {
    setScreenMode();

    let mainDiv = document.getElementById("userListMainDiv");
    let sideNav = document.getElementById("userListSideNav");
    let icon = document.getElementById("toggleSideNavButton");
    let activeUserCard = document.getElementsByClassName("userInfoCard active")[0];

    icon.classList.toggle("change");

    switch (screenMode) {
        case SMALL:
            if (isVisible(sideNav)) {
                hide(sideNav);
                show(activeUserCard);
                mainDiv.style.gridTemplateAreas =
                    `"header header"
                     "card card"
                     "footer footer"`;
            } else {
                show(sideNav);
                hide(activeUserCard);
                mainDiv.style.gridTemplateAreas =
                    `"header header"
                     "menu menu"
                     "footer footer"`;
            }
            break;

        case LARGE:
            if (isVisible(sideNav)) {
                hide(sideNav);
                show(activeUserCard);
                mainDiv.style.gridTemplateAreas =
                    `"header header"
                     "card card"
                     "footer footer"`;
            } else {
                show(sideNav);
                mainDiv.style.gridTemplateAreas =
                    `"header header"
                     "menu card"
                     "footer footer"`;
            }
            break;
    }
}

// Search User Function
// Called when text is entered in #searchUserInput.
// Look through all tabLinks inner HTML for the
// entered string and hide the ones which do not
// contain the search string.
function searchUser() {
    let userLinks = document.getElementsByClassName("tabLink");
    let searchingFor = document.getElementById("searchUserInput").value;
    if (searchingFor !== "" && searchingFor != null) {
        for (let i = 0; i < userLinks.length; i++) {
            let userLink = userLinks[i];
            if (!(userLink.innerHTML.toLowerCase().search(searchingFor.toLowerCase()) >= 0)) {
                userLink.style.display = "none";
            }
        }
    } else {
        for (let i = 0; i < userLinks.length; i++) {
            userLinks[i].style.display = "inline-block";
        }
    }

}

function togglePasswordVisibility() {
    let vis = document.getElementsByClassName("visibility");
    let pass = document.getElementById("passwordInput");
    let confPass = document.getElementById("confirmPasswordInput");
    if (pass.type === "password" || confPass.type === "password") {
        pass.type = "text";
        confPass.type = "text";
    } else {
        pass.type = "password";
        confPass.type = "password";
    }
    for (let i = 0; i < vis.length; i++) {
        vis[i].classList.toggle("visibility-off");
    }
}

// TODO : FIX PASSWORD VALIDATION.
function checkPassword() {
    console.log("In checkPassword()...")
    let form = document.getElementById("newUserForm");
    let pass = document.getElementById("passwordInput");
    let confPass = document.getElementById("confirmPasswordInput");

    if (confPass.value !== pass.value) {
        confPass.style.color = "red";
    } else {
        confPass.style.color = "default";
    }
}
/*
 * Author: Felix Beaulieu
 * */

/* GLOBALS */
const SMALL = "small";
const LARGE = "large";
var screenMode;


/* HELPER FUNCTIONS */
function setScreenMode() {
    screenMode = window.innerWidth <= 400 ? screenMode = SMALL : LARGE;
}

function getJsonFile(path, callback) {
    let request = new XMLHttpRequest();
    request.open("GET", path,);
    request.setRequestHeader("Content-Type", "text/json");
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            callback(request.response);
        }
    };
    return request.send();
}

function isImageLink(url) {
    console.log("URL: ", url);
    return url.endsWith(".apng") ||
        url.endsWith(".bmp") ||
        url.endsWith(".gif") ||
        url.endsWith(".ico") ||
        url.endsWith(".cur") ||
        url.endsWith(".jpg") ||
        url.endsWith(".jpeg") ||
        url.endsWith(".jfif") ||
        url.endsWith(".pjpeg") ||
        url.endsWith(".pjp") ||
        url.endsWith(".png") ||
        url.endsWith(".svg") ||
        url.endsWith(".tif") ||
        /*url.endsWith(".tiff") ||*/
        url.endsWith(".webp");
}

function show(element, displayMethod="block") {
    if (element != null)
        element.style.display = displayMethod;
}

function hide(e) {
    if (e != null)
        e.style.display = "none";
}

function isVisible(e) {
    if (e != null)
        return !!( e.offsetWidth || e.offsetHeight || e.getClientRects().length );
}

function toggleVisibility(e) {
    if (isVisible(e)) hide(e);
    else show(e);
}

/* END OF HELPER FUNCTIONS */

/* CLASSES */
class User {
    static userCount;
    constructor(id, firstName, lastName, email, fullAddress, phoneNumber, avatarUrl) {
        this.id = id;
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.fullAddress = fullAddress;
        this.phoneNumber = phoneNumber;
        this.avatarUrl = avatarUrl;
        User.userCount++;
    }

    generateHtmlCard() {
        // Main Card (Main Container)
        let userInfoCard = document.createElement("div");
        userInfoCard.className = "userInfoCard";
        userInfoCard.id = "user" + this.id;

        // Card Header (Header Container)
        let headerDiv = document.createElement("div");
        headerDiv.className = "userInfoHeader";

        let header = document.createElement("h3");
        header.innerHTML = this.id + ". " + this.firstName + " " + this.lastName;

        let editBtn = document.createElement("button");
        editBtn.className = "editButton";
        editBtn.innerHTML = "Edit";
        editBtn.onclick = function() { window.open("EditUserProfile.php", "_self"); };
        headerDiv.appendChild(header);
        headerDiv.appendChild(editBtn);

        let avatar = document.createElement("img");
        avatar.alt = "Avatar";
        avatar.src = this.avatarUrl;
        avatar.onerror = function () {
            this.src = "../images/users/avatar.svg";
        }
        avatar.className = "userInfoAvatar";

        let firstName = document.createElement("div");
        firstName.className = "userInfo";
        firstName.innerHTML = "First Name: " + "<b>" + this.firstName + "</b>";

        let lastName = document.createElement("div");
        lastName.className = "userInfo";
        lastName.innerHTML = "Last Name: " + "<b>" + this.lastName + "</b>";

        let emailDiv = document.createElement("div");
        emailDiv.className = "userInfo";
        emailDiv.innerHTML = "email: " + "<b>" + this.email + "</b>";

        let addressDiv = document.createElement("div");
        addressDiv.className = "userInfo";
        addressDiv.innerHTML = "Full Address: " + "<b>" + this.fullAddress + "</b>";

        let phoneNumberDiv = document.createElement("div");
        phoneNumberDiv.className = "userInfo";
        phoneNumberDiv.innerHTML = "Phone Number: " + "<b>" + this.phoneNumber + "</b>";

        userInfoCard.appendChild(headerDiv);
        userInfoCard.appendChild(avatar);
        userInfoCard.appendChild(firstName);
        userInfoCard.appendChild(lastName);
        userInfoCard.appendChild(emailDiv);
        userInfoCard.appendChild(addressDiv);
        userInfoCard.appendChild(phoneNumberDiv);
        return userInfoCard;
    }


}
/* END OF CLASSES */

/* HTML GENERATOR FUNCTIONS */

// UserList body onload function.
function generateUserList() {
    setScreenMode();
    let userListMainDiv = document.getElementById("userListMainDiv");
    let userListSideNav = document.getElementById("userListSideNav");

    getJsonFile("../files/users.json", function (json) {
        let users = JSON.parse(json), i;
        for (i = 0; i < users.length; i++) {
            let _user = users[i];
            let user = new User(_user.id, _user.firstName, _user.lastName,
                                _user.email, _user.fullAddress, _user.phoneNumber,
                                _user.avatarUrl);

            const userButton = document.createElement('button');
            userButton.innerHTML = user.firstName + " " + user.lastName;
            userButton.className = "tabLink";

            let userInfoCard = user.generateHtmlCard();
            userListMainDiv.appendChild(userInfoCard);

            userButton.onclick = function() { openUser(userButton, userInfoCard) };
            userListSideNav.appendChild(userButton);
            //userListSideNav.insertBefore(userButton, newUserButton);

            if (i === 0) {
                openUser(userButton, userInfoCard);
                if (screenMode === SMALL) { toggleMenu(); }
            }

        }
    });

}
/* END OF HTML GENERATOR FUNCTIONS */
function createNewUser() {
    let newUser = new User(User.userCount++,
        document.getElementById("firstNameInput").value,
        document.getElementById("lastNameInput").value,
        document.getElementById("emailInput").value,
        document.getElementById("fullAddressInput").value,
        document.getElementById("phoneNumberInput").value);
    let jsonUser = JSON.stringify(newUser);
    console.log("JSON User: ", jsonUser);
    window.open("UserList.php", "_self");
}

function deleteUser(/*evt, sender*/) {
    window.confirm("Are you sure you want to delete this user?");
}

// TODO: Fix reload of page on OK.
function changeAvatar() {
    let newAvatarUrl = prompt("Enter the URL to the image you'd like to use: ");
    if (newAvatarUrl == null || newAvatarUrl === "") {
        console.log("Action cancelled by user.");
    }
    else if (isImageLink(newAvatarUrl)) {
        console.log(newAvatarUrl);
        document.getElementById("userAvatarImg").src = newAvatarUrl;
    }
    else {
        console.log("Invalid URL.");
        alert("Provided URL is invalid.");
    }
}

function openUser(userLink, userInfoCard) {
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
    if (screenMode === SMALL) { toggleMenu(); }
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

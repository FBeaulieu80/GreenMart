/*
 * Author: Felix Beaulieu
 * */

/* HELPER FUNCTIONS */
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
        let userInfoCard = document.createElement("div");
        userInfoCard.className = "userInfoCard";
        userInfoCard.id = "user" + this.id;

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
        if (this.avatarUrl == null || this.avatarUrl === "") {
            avatar.src = "../images/users/avatar.svg";
        }
        else {
            avatar.src = this.avatarUrl;
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
    getJsonFile("../files/users.json", function (json) {
        let users = JSON.parse(json), i;
        for (i = 0; i < users.length; i++) {
            let _user = users[i];
            let user = new User(_user.id, _user.firstName, _user.lastName,
                                _user.email, _user.fullAddress, _user.phoneNumber,
                                _user.avatarUrl);

            const userButton = document.createElement('button');
            userButton.innerHTML = user.firstName + " " + user.lastName;
            userButton.className = "userLink";

            let userInfoCard = user.generateHtmlCard();
            document.getElementById("userListMain").appendChild(userInfoCard);

            userButton.onclick = function() { openUser(userButton, userInfoCard) };
            document.getElementById("userListDiv").insertBefore(userButton, document.getElementById("newUserBtn"));

            if (i === 0) {
                openUser(userButton, userInfoCard);
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

function deleteUser(evt, sender) {
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
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("userInfoCard");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("userLink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    userInfoCard.style.display = "block";
    userLink.className += " active";
}
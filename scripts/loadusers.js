/*
 * Author: Felix Beaulieu
 * */

/* HELPER FUNCTIONS */
/*function concatenate(...strings) {
    let output = "";
    for (const stringsKey in strings) {
        output += " " + strings[stringsKey];
    }
    return output;
}*/

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

    generateAvatar() {
        let avatar = document.createElement("img");
        avatar.alt = "Avatar";
        avatar.src = this.avatarUrl;
        avatar.className = "userInfoAvatar";
        return avatar;
    }

    generateNameDiv() {
        let nameDiv = document.createElement("div");

        let firstName = document.createElement("label");
        firstName.className = "userInfoName";
        firstName.innerHTML = "First Name: ".concat("<b>", this.firstName, "</b>");

        let lastName = document.createElement("label");
        lastName.className = "userInfoName";
        lastName.innerHTML = "Last Name: ".concat("<b>", this.lastName, "</b>");

        nameDiv.appendChild(firstName);
        nameDiv.appendChild(lastName);
        return nameDiv;
    }

    generateEmail() {
        return document.createElement("div");
    }

    generateAddress() {
        return document.createElement("div");
    }

    generatePhoneNumber() {
        return document.createElement("div");
    }

    generateHtmlCard() {
        let userInfoCard = document.createElement("div");
        userInfoCard.className = "userInfoCard";
        userInfoCard.id = "user".concat(this.id);
        
        let header = document.createElement("h2");
        header.className = "userInfoHeader";
        header.innerHTML = this.id + ". " + this.firstName + " " + this.lastName;

        userInfoCard.appendChild(header);
        userInfoCard.appendChild(this.generateAvatar());
        userInfoCard.appendChild(this.generateNameDiv());
        userInfoCard.appendChild(this.generateEmail());
        userInfoCard.appendChild(this.generateAddress());
        userInfoCard.appendChild(this.generatePhoneNumber());

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
            userButton.className = "tabLink";


            let userInfoCard = user.generateHtmlCard();
            document.getElementById("userListMain").appendChild(userInfoCard);

            userButton.onclick = function() { openUser(userInfoCard) };
            document.getElementById("userListDiv").insertBefore(userButton,
                document.getElementById("newUserBtn"));
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

function openUser(element) {
    let i, userInfoCards, tabLinks;
    userInfoCards = document.getElementsByClassName("userInfoCard");
    for (i = 0; i < userInfoCards.length; i++) {
        if (userInfoCards[i] != null) {
            let user = userInfoCards[i];
            user.style.display = "none";
        }
    }
    tabLinks = document.getElementsByClassName("tabLink");
    for (i = 0; i < tabLinks.length; i++) {
        let link = tabLinks[i];
        link.className = link.className.replace("active", "");
    }
    element.style.display = "block";
    element.className += " active";

}
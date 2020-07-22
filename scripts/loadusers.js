/*
 *
 * */
function generateUserInfoCard(userObject) {
    let userInfoCard = document.createElement("div");
    userInfoCard.className = "user-info-container";

    return userInfoCard;
}

function generateUserList() {
    let getJsonFile = function (path, callback) {
        let request = new XMLHttpRequest();
        request.open("GET", path,);
        request.setRequestHeader("Content-Type", "text/json");
        request.onreadystatechange = function () {
            if (request.readyState === 4 && request.status === 200) {
                callback(request.response);
            }
        };
        request.send();
    };

    getJsonFile("../files/users.json", function (json) {
        let users = JSON.parse(json);
        for (const idx in users) {
            const newLink = document.createElement('a');
            newLink.href = "EditUserProfile.php";
            newLink.text = users[idx].firstName + " " + users[idx].lastName;
            document.getElementById("greenmart-user-list").insertBefore(newLink,
                document.getElementById("new-user-link"));

        }
    });


}
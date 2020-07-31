var description = document.getElementById("description");
var button4 = document.getElementById("details");

button4.onclick = function(){
    if(description.className == "open"){
        // shrink the box
        description.className = "";
        button4.innerHTML = "More Details";
    }
    else{
        //expand the box
        description.className = "open";
        button4.innerHTML = "Fewer Details";
    }
}






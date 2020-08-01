function ShowAndHide() {
    var x = document.getElementById('SectionName');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    document.getElementById("price").innerHTML = "$" + (Math.floor((3.29 * document.getElementById("number").value) * 100) / 100).toString();
  }

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
    document.getElementById("price").innerHTML = "$" + (Math.floor((3.29 * document.getElementById("number").value) * 100) / 100).toString();
}

function swapImage(){
    var image = document.getElementById("imageToSwap");
    var dropd = document.getElementById("dlist");
    image.src = dropd.value;	
}

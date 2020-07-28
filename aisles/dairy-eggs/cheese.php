<html lang="en">

<head>
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Cheese | Dairy & Eggs | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<body>
<?php require "../../common/header.php" ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/dairy-eggs/cheese.jpg" alt="Cheese">
        </div>
        <div class="grid-item">
            <h2>Cheese</h2>
            <span class="original-price">$3.79/lb</span><br />
            <span class="sale-price">$3.29/lb</span><br />
            <br />
            <br />
            <p style="color: darkslateblue;font-weight: bold;">Select between 3 types of cheese:
                <select id="dlist" onChange="swapImage()">
                    <option style="color: darkgreen;" value="../../images/dairy-eggs/cheese.jpg">Regular</option>
                    <option style="color: crimson;" value="../../images/dairy-eggs/cheddar.jpg">Cheddar</option>
                    <option style="color: blueviolet;" value="../../images/dairy-eggs/parmesan.jpg">Parmesan</option>
                    </select></p>
                    
                    <script type="text/javascript">
                    function swapImage(){
                        var image = document.getElementById("imageToSwap");
                        var dropd = document.getElementById("dlist");
                        image.src = dropd.value;	
                    };
                    </script> <br>

            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                        <div onclick="increaseValue()" value="Increase Value">+</div>
                            <input type="number" id="number" value="0" />
                        <div onclick="decreaseValue()" value="Decrease Value">-</div><br>
                      <script>
                      function increaseValue() {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('number').value = value;
                      }
                      function decreaseValue() {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value < 1 ? value = 1 : '';
                        value--;
                        document.getElementById('number').value = value;
                      }
                      </script>
                    <button type="submit">Add to Cart</button>
                    
                </form>
            </div>
            <p>Product of Switzerland.</p>
        
            <script>
                function ShowAndHide() {
                    var x = document.getElementById('SectionName');
                    if (x.style.display == 'none') {
                        x.style.display = 'block';
                    } else {
                        x.style.display = 'none';
                    }
                }
                </script>
                <button onclick="ShowAndHide()">Detailed Description</button>
          
                <div id="SectionName" style="display:none"><p>Cheese is a dairy product, derived from milk and produced in a wide range of flavors, textures and forms
                by coagulation of the milk protein casein. It comprises proteins and fat from milk, usually the milk of
                cows, buffalo, goats, or sheep.</p></div>
        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>
</html>

<html lang="en">

<head>
    <meta name="author" content="Athigan"> 
    <meta charset="UTF-8">
    <title>Rye bread | Bakery</title> 
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
</head>

<body>
    <?php require "../../common/header.php" ?>
    <div class="main">

        <div class="grid-container">
            <div class="grid-item">
                <img src="../../images/bakery/rye_bread.jpg" alt="Rye Bread"> 
            </div>
            <div class="grid-item">
                <h2>Rye Bread</h2> 
                <span class="original-price">$3.66/ea</span><br /> 
                <span class="sale-price">$3.45/ea</span><br />
                <br />
                 <br />
                 <div class="addtocart">
                    <form action="/action_page.php">
                        <label for="quantity">Quantity:</label> <br />
                        <button type="submit" style="float:right">Add to Cart</button>
                        <input type="text" id="quantity" name="quantity" value="1">
                    </form>
                </div>
                <p>Whole grain and loaded with flavor</p><br />
                <h3>Description</h3> 
                <p>High fibre bread made from whole wheat flour, yeast, caraway seeds and soybean oil. 
                Check out our <a href="../../recipes">recipes</a> to how you can add rye bread to your home meals.</p>
            </div>
        </div>
    </div>
</body>

<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>
    </ul>
</footer>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Michael Rowe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Carrot Cake | Bakery | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <script type="text/javascript" src="../../scripts/aisles/bakery.js"></script>
    <style>
        .main {
            padding: 0;
        }

        #image {
            margin: 0 auto;
        }

        #image img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            object-position: center;

        }

        .grid-container {
            width: 100%;
            display: grid;
            grid-template-areas:
                    "image info"
                    "description description"
                    "footer footer";
            grid-template-columns: 50% 50%;
            grid-template-rows: fit-content(100%) auto fit-content(100%);
            padding: 0;
            justify-content: center;
        }



        #image {
            grid-area: image;
            padding: 0;
        }

        #descriptionArea {
            grid-area: description;
            padding: 0 1rem;
        }

        .productInfo {
            display: grid;
            grid-template-areas:
                    "heading"
                    "price"
                    "origin"
                    "options"
                    "addtocart";
            grid-template-rows: auto auto auto auto auto;
            grid-row-gap: 0.5rem;
        }

        .typeSelectionButton {
            padding: 1em;
            background: #eee;
            font-size: 16px;
            border: none;
            margin-left: 10px;
        }

        .typeSelectionButton:hover {
            cursor: pointer;
            background: #ccc;
        }

        footer {
            grid-area: footer;
        }

        .accordion {
            background-color: #eee;
            cursor: pointer;
            padding: 1rem;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            font-weight: bold;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            font-weight: bold;
            float: right;
            margin-left: 5px;
            color: black;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .addtocart {
            padding: 1em;
        }

        .addtocart button {
            background: #eee;
            font-size: 16px;
            border: none;
        }

        .addtocart button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body onload="chooseCake(CakeTypes.CHEESE)">
<?php require_once "../../common/header.php"; ?>
<div class="main">
    <div class="grid-container">
        <div class="grid-item" id="image">
            <img src="../../images/bakery/carrot-cake.jpg" alt="Carrot Cake">
        </div>
        <div class="grid-item">
            <div class="productInfo">
                <h2>Cakes</h2>
                <div id="cakePrice" class="price"></div>
                <div id="productOrigin"></div>

                <div class="typeSelection">
                    <button class="typeSelectionButton" onclick="chooseCake(CakeTypes.CARROT)">Carrot</button>
                    <button class="typeSelectionButton" onclick="chooseCake(CakeTypes.CHEESE)">Cheese</button>
                    <button class="typeSelectionButton" onclick="chooseCake(CakeTypes.CHOCOLATE)">Chocolate</button>
                </div>

                <div class="addtocart">
                    <form action="../../common/404.php">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="localStorage.setItem('quantity', this.value);">
                        <button type="submit" style="float:right">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="descriptionArea">
            <button class="accordion" onclick="toggleAccordion();">Description</button>
            <p class="panel" id="description"></p>
        </div>

    </div>
</div>
<?php require "../../common/footer.php" ?>
</body>
</html>
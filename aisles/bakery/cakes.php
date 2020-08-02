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
            padding: 1rem;
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
                    "addtocart"
                    "subtotal";
            grid-template-rows: auto auto auto auto auto;
            grid-row-gap: 0.5rem;
        }

        .productPageButton {
            padding: 1em;
            background: #eee;
            font-size: 16px;
            border: none;
        }

        .productPageButton:hover {
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

        .accordion .active {
            color: #333333;
            background-color: #ccc;
        }

        .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            font-weight: bold;
            float: right;
            margin-left: 5px;
            color: black;
        }

        .accordion.active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .addtocart form {
            display: grid;
            grid-template-columns: fit-content(100%) auto fit-content(100%);
            grid-column-gap: 1em;
        }

        /*.addtocart button {
            background: #eee;
            font-size: 16px;
            border: none;
            padding: 0;
            margin: 0;
        }*/

        .addtocart button:hover {
            background-color: #ccc;
        }

        #quantity {
            width: 100%;
            min-width: 20px;
        }

        .typeSelection {
            display: grid;
            grid-template-columns: repeat(3, auto);
            grid-column-gap: 0.5em;
        }

        .addtocart form {
            display: grid;
            grid-template-columns: repeat(2, fit-content(100%)) auto repeat(2, fit-content(100%));
            grid-column-gap: 0.5em;
        }

        @media (max-width: 600px) {
            .grid-container {
                width: 100%;
                display: grid;
                grid-template-areas:
                    "image"
                    "info"
                    "description"
                    "footer";
                grid-template-columns: 100%;
                grid-template-rows: fit-content(100%) fit-content(100%) auto fit-content(100%);
                padding: 1rem;
                justify-content: center;
            }

            .typeSelection {
                display: grid;
                grid-template-columns: auto;
            }
        }
    </style>
</head>
<body onload="remember();">
<?php require_once "../../common/header.php"; ?>
<div class="main">
    <div class="grid-container">
        <div class="grid-item" id="image">
            <img src="../../images/bakery/carrot-cake.jpg" alt="Carrot Cake">
        </div>
        <div class="grid-item">
            <div class="productInfo">
                <h2>Cakes</h2>
                <div>&dollar;<span id="cakePrice" class="price"></span>/ea</div>
                <div id="productOrigin"></div>

                <div class="typeSelection">
                    <button class="productPageButton" onclick="chooseCake(CakeTypes.CARROT)">Carrot</button>
                    <button class="productPageButton" onclick="chooseCake(CakeTypes.CHEESE)">Cheese</button>
                    <button class="productPageButton" onclick="chooseCake(CakeTypes.CHOCOLATE)">Chocolate</button>
                </div>

                <div class="addtocart">
                    <form action="../../common/404.php">
                        <label for="quantity">Quantity:</label>
                        <input type="button" value="-" class="plusMinusButton productPageButton" id="minusButton" onclick="let q = document.getElementById('quantity'); q.value -= (q.value > q.min)? 1:0;updateSubtotal();">
                        <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateSubtotal();">
                        <input type="button" value="+" class="plusMinusButton productPageButton" id="plusButton" onclick="document.getElementById('quantity').value++;updateSubtotal();">
                        <input type="submit" class="productPageButton" value="Add to Cart">
                    </form>
                </div>
                <div>Subtotal:&dollar;<span id="subtotal"></span></div>
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
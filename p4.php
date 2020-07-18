<!DOCTYPE html>
<html long = "en">

<head>
    <meta name="author" content="Laura Boivin">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/p4.css">
    <title>Shopping Cart (4) | Green Mart</title>
</head>


<body marginwidth="100%">
<?php require "common/header.php"; ?>

<button class = "continue">Continue Shopping</button>
<h1 align="center" >My Shopping Cart</h1>
<table align="center" cellspacing="20" >
    <tr valign="top">
        <th class = "img-with-text">
            <h2>Organic Baby Spinach</h2>
            <img src="images/fruit-veg/Baby Spinach.jpg"
                 alt = "Picture of Organic Baby Spinach"
                 height = 250 width = 175>
            <p>$4.99 each</p>
            <button class = "add">+</button>
            <form action = ""></form>
            <textarea name = "number" rows = "1" cols = "1" > 1 </textarea>
            <button class = "subtract">-</button><br/>
            <button class = "delete">Delete Item </button>
        </th>
        <th class = "checkout">   <button> Checkout Now</button>
            <h3> Order Summary</h3>
            <h4>4 Products </h4><br/>
            <table>
                <tr>
                    <th>
                        Subtotal:
                    </th>
                    <td>$11.95</td>
                </tr>
                <tr>
                    <th>QST:</th>
                    <td>$1.19</td>
                </tr>
                <tr>
                    <th>GST:</th>
                    <td>$0.60</td>
                </tr>
                <tr>
                    <th>Total:</th>
                    <td >$13.74</td>
                </tr>
            </table>
    </tr>

    <tr valign="top">
        <th class = "img-with-text">
            <h2>Organic Banana</h2>
            <img src="images/fruit-veg/banana.png"
                 alt = "Picture of Organic Banana"
                 height = 200 width = 200>
            <p>$0.58 each</p>
            <button class = "add">+</button>
            <form action = ""></form>
            <textarea name = "number" rows = "1" cols = "1" > 1 </textarea>
            <button class = "subtract">-</button><br/>
            <button class = "delete">Delete Item</button>
        </th>
    </tr>

    <tr valign="top">
        <th class="img-with-text">
            <h2>Organic Blue Corn Chips</h2>
            <img img src="images/snacks/Blue Chips.jpeg"
                 alt="Picture of Organic Blue Tortilla Chips"
                 height=210 width=160>
            <p>$4.19 each</p>
            <button class="add">+</button>
            <form action=""></form>
            <textarea name="number" rows="1" cols="1"> 1 </textarea>
            <button class="subtract">-</button>
            <br/>
            <button class="delete">Delete Item</button>
        </th>

        <th class="img-with-text">
            <h2>Organic Chickpeas</h2>
            <img src="images/snacks/Chickpeas.png"
                 alt="Picture of Organic Chickpeas"
                 height=220 width=170>
            <p>$2.19 each</p>
            <button class="add">+</button>
            <form action=""></form>
            <textarea name="number" rows="1" cols="1"> 1 </textarea>
            <button class="subtract">-</button>
            <br/>
            <button class="delete">Delete Item</button>
        </th>
    </tr>
</table>
<?php //require "common/footer.html"; ?>
</body>

</html>

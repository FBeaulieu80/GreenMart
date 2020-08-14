<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Laura Boivin">
    <link rel="stylesheet" type="text/css" href="../css/p11.css">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css">
    <title>Order List</title>
</head>
<body>
<?php require "common/header.php"; ?>
<h1>Order List </h1>
<div align="center">
    <a href="../backstore/p12.php" class="button">Add</a>
    <a href="../backstore/p12.php" class="button">Edit</a>
</div>

<table marginwidth="100%" cellspacing="20" align="center">
    <tr>
        <th>Product Name</th>
        <th>Product ID</th>
        <th>Units / LBS</th>
        <th>Seller</th>
        <th>Order Date</th>
        <th>Arrived</th>
        <th></th>

    </tr>
    <tr>
        <td>Organic Banana</td>
        <td>4HKZ19</td>
        <td>
            <weight>30lbs</weight>
        </td>
        <td>Johanne's Garden Lte</td>
        <td>
            <date>12-07-2020</date>
        </td>
        <td>
            <form action="">
                <label>
                    <select name="answer">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </label>
            </form>
        </td>
        <th>
            <button>Delete</button>
        </th>
    </tr>
    <tr>
        <td>Yummy Chickpeas</td>
        <td>7ZYT28</td>
        <td>50</td>
        <td>Pea Haven Co</td>
        <td>
            <date>10-07-2020</date>
        </td>
        <td>
            <form action="">
                <label>
                    <select name="answer">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </label>
            </form>
        </td>
        <th>
            <button>Delete</button>
        </th>
    </tr>
    <tr>
        <td>Cherry Tomatoes</td>
        <td>96YRE4P</td>
        <td>25lbs</td>
        <td>Jerry's Dream</td>
        <td>
            <date>09-07-2020</date>
        </td>
        <td>
            <form action="">
                <label>
                    <select name="answer">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </label>
            </form>
        </td>
        <th>
            <button>Delete</button>
        </th>
    </tr>
    <tr>
        <td>Jimmy's Natural Potato Chips</td>
        <td>46RY3X</td>
        <td>30</td>
        <td>Jimmy's Basement</td>
        <td>
            <date>05-07-2020</date>
        </td>
        <td>
            <form action="">
                <label>
                    <select name="answer">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </label>
            </form>
        </td>
        <th>
            <button>Delete</button>
        </th>
    </tr>

</table>
<?php require "common/footer.html"; ?>
</body>


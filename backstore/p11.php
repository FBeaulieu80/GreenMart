<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css">
    <title>Order List</title>
</head>
<body>
<?php require "common/header.php"; ?>
<h1>Order List</h1>
<button>Add</button>
<button>Edit</button>

<table marginwidth="100%">
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
        <td><weight>30lbs</weight></td>
        <td>JohannesGardenLte</td>
        <td><date>2020-07-12</date></td>
        <td><form action = ""><select name = "answer"><option>No</option><option>Yes</option></form></td>
        <th><button>Delete</button></th>
    </tr>
    <tr>
        <td>Yummy Chickpeas</td>
        <td>7ZYT28</td>
        <td>50</td>
        <td>PeaHavenCo</td>
        <td><date>2020-07-10</date></td>
        <td><form action = ""><select name = "answer"><option>No</option><option>Yes</option></form></td>
        <th><button>Delete</button></th>
    </tr>
    <tr>
        <td>Cherry Tomatoes</td>
        <td>96YRE4P</td>
        <td>25lbs</td>
        <td>JerrysDream</td>
        <td><date>2020-07-09</date></td>
        <td><form action = ""><select name = "answer"><option>No</option><option>Yes</option></form></td>
        <th><button>Delete</button></th>
    </tr>
    <tr>
        <td>Jimmy's Natural Potato Chips</td>
        <td>46RY3X</td>
        <td>30</td>
        <td>JimmysBasement</td>
        <td><date>2020-07-05</date></td>
        <td><form action = ""><select name = "answer"><option>No</option><option>Yes</option></form></td>
        <th><button>Delete</button></th>
    </tr>

</table>
<?php require "common/footer.html"; ?>
</body>


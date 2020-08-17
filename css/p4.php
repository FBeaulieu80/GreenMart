<?php
header('Content-Type: text/css');
include("../p4.php")
// This is a php file because I was trying to change css with php but it doesnt work :)
?>


.grid-container {
    /*Add for responsive*/
    display: grid;
    margin: 0 auto;
    max-width: 1200px;
    grid-gap: 1rem;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

<?php ////$value0 = "none"; ?>
<!--#cart0 {display: --><?php //echo $value0; ?><!--}-->
<!--#cart1 {display: --><?php //echo $value1; ?><!--}-->
<!--#cart2 {display: --><?php //echo $value2; ?><!--}-->
<!--#cart3 {display: --><?php //echo $value3; ?><!--}-->
<!--#cart4 {display: --><?php //echo $value4; ?><!--}-->
<!--#cart5 {display: --><?php //echo $value5; ?><!--}-->
<!--#cart6 {display: --><?php //echo $value6; ?><!--}-->
<!--#cart7 {display: --><?php //echo $value7; ?><!--}-->
<!--#cart8 {display: --><?php //echo $value8; ?><!--}-->
<!--#cart9 {display: --><?php //echo $value9; ?><!--}-->

h1 {
    /*font-family: cursive;*/
    color: seagreen;
    font-size: 300%;
}

h2 {
    /*font-family: fantasy;*/
    font-size: 12px;
    text-align: center;
    /*button-align: left;*/
}

h3 {
    font-family: Helvetica, serif;
    font-size: 200%;
    text-align: center;
}

h4 {
    /*font-family: cursive;*/
    color: seagreen;
}

button {
    font-size: 75%;
}

.continue {
    font-size: 150%;
}

table {
    border-style: ridge;
    border-color: darkslategrey;
    vertical-align: auto;
    text-align: center;
    padding: 1% 2% 1% 2%;
    margin: 0 auto;
    max-width: 550px;
}

#food {
    max-width: 100%;
    max-height: 100%;
}

.img-with-text {
    text-align: center;
}

.img-with-text {
    display: block;
    text-align: center;

}

button {
    margin: auto;
}

#subtotal {
    text-align: center;
}

#subtract {
    background-color: burlywood;
    text-align: center;
    display: block;
    /* width: 100%;*/
    font-size: 150%;
}

#delete1, #delete2, #delete3, #delete4 {
    font-family: cursive;
    background-color: burlywood;
    text-align: center;
    display: block;
    margin: auto;
    width: 100%;
    font-size: 150%;
}

#add {
    background-color: burlywood;
    text-align: center;
    display: block;
    /* width: 10%;*/
    font-size: 150%;
}

.continue {
    text-align: center;
    display: block;
    margin: auto;
}

#number1, #number2, #number3, #number4 {
    background-color: thistle;
    text-align: center;
    padding: 6px 10px 6px 10px;
    width: 10%;
    position: center;
    font-size: 120%
}

#subtotal1, #subtotal2, #subtotal3, #subtotal4 {
    font-size: 140%
}

#checkout {
    border-style: groove;
    background-color: antiquewhite;
    text-align: center;
    display: inline-block;
    border-color: blueviolet;
    margin-top: 5%;
    padding-left: 5%;
    padding-right: 5%;
    padding-bottom: 5%;
    font-size: 150%
}

.main {
    margin-top: 5%;
    padding: 0;
    max-width: 100%;
    max-height: 100%;
}

#orderTitle {
    font-weight: bold;
}

.grid-item {
    text-align: left;
}

.grid-item a {
    text-decoration: none;
    color: black;
}

.grid-item a:hover {
    font-weight: bold;
}

th {
    border-bottom-style: dotted;
}

#box {
    padding: 1% 2% 1% 2%;
    margin: 0 auto;
    max-width: 550px;
}

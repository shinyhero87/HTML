<?php
$cost = array();
$toppings=array();


// Get pizza data sent by POST
// isset() tests for data at the gateway, required on many servers
// large group of if statements that pass values to array's which are used later in array_sum() and list()
//the array_sum add's all values in a php array together and outputs the total
//list() function assigns values to a "list" of variables based on whats in the array. This allows me to place those varibles anywhere in my html print satement below.

if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
if(isset($_POST["pepp"])) { $pepp = $_POST["pepp"]; } else { $pepp = ""; }
if(isset($_POST["mush"])) { $mush = $_POST["mush"]; } else { $mush = ""; }
if(isset($_POST["gppr"])) { $gppr = $_POST["gppr"]; } else { $gppr = ""; }
if(isset($_POST["grlic"])) { $grlic = $_POST["grlic"]; } else { $grlic = ""; }




if($size == "small"){
  $cost[] = 5.00;
}

if ($size == "medium") {
    $cost[] = 6.00;
}

if ($size == "large"){
    $cost[] = 7.00;
}
//run through checkbox values and add to array's cost and toppings, found this to be most efficent method instead of using array_push()
if ($pepp == "pepp") {
    $cost[] = .50;
   $toppings[] = "pepperoni";
}

if ($mush == "mush") {
    $cost[] = .50;
    $toppings[] = "Mushrooms";
}

if ($gppr == "gppr") {
    $cost[] = .50;
    $toppings[] = "Green Peppers";
}

if ($grlic == "grlic") {
    $cost[] = .50;
    $toppings[] = "Garlic";
}
//create list of toppings using variables a, b, c, d then print them below. If not value exists it will print a blank.
list($a, $b, $c, $d) = $toppings;


//print body of form and show variables in appropriate spots to complete the form
print "
<style>
body{
    background-color: #14B884;
}

h1 {
    font-family: 'Droid Sans', sans-serif;
    font-size: 22px;
    color: #093426;
}

</style>

<body>
<h2>Thank you for your order: </h2> <h3>$name</h3>
<p><b>Pizza Size:</b> $size<br /><br />
<b>Toppings:</b> $a &nbsp $b &nbsp $c&nbsp $d </br> </br>
<b>Total Cost:</b>$

";


//total cost and print
print array_sum($cost);
//used for testing to see if values are being stored in array
//print_r($cost);








?>
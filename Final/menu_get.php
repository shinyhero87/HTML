<?php
//create an array to store values in
$cost = array();



//check to see if  variable is set or not and assign values to them
if(isset($_GET["name"])) { $name = $_GET["name"]; } else { $name = ""; }
if(isset($_GET["tel"])) { $tel = $_GET["tel"]; } else { $tel = ""; }
if(isset($_GET["FP"])) { $FP = $_GET["FP"]; } else { $FP = ""; }
if(isset($_GET["BBW"])) { $BBW = $_GET["BBW"]; } else { $BBW = ""; }
if(isset($_GET["OnR"])) { $OnR= $_GET["OnR"]; } else { $OnR = ""; }
if(isset($_GET["SimBur"])) { $SimBur = $_GET["SimBur"]; } else { $SimBur = ""; }
if(isset($_GET["SimChk"])) { $SimChk= $_GET["SimChk"]; } else { $SimChk = ""; }
if(isset($_GET["HalChp"])) { $HalChp = $_GET["HalChp"]; } else { $HalChp = ""; }
if(isset($_GET["SoSerSun"])) { $SoSerSun = $_GET["SoSerSun"]; } else { $SoSerSun = ""; }
if(isset($_GET["SliChee"])) { $SliChee = $_GET["SliChee"]; } else { $SliChee = ""; }
if(isset($_GET["WarAppCri"])) { $WarAppCri = $_GET["WarAppCri"]; } else { $WarAppCri = ""; }
if(isset($_GET["Coff"])) { $Coff = $_GET["Coff"]; } else { $Coff = ""; }
if(isset($_GET["SoDr"])) { $SoDr = $_GET["SoDr"]; } else { $SoDr = ""; }
if(isset($_GET["FlaLem"])) { $FlaLem = $_GET["FlaLem"]; } else { $FlaLem = ""; }
//check to see if variable has a value stored in it and add value to $cost array for each possible checked value
if($FP == "FP"){
    $cost[] = 4.00;
}
if ($BBW == "BBW") {
    $cost[] = 5.00;
}
if ($OnR== "OnR") {
    $cost[] = 4.50;
}
if ($SimBur == "SimBur") {
    $cost[] = 6.00;
}
if ($SimChk == "SimChk") {
    $cost[] = 6.50;
}
if ($HalChp == "HalChp") {
    $cost[] = 7.50;
}
if ($SoSerSun == "SoSerSun") {
    $cost[] = 5.00;
}
if ($SliChee == "SliChee") {
    $cost[] = 4.50;
}
if ($WarAppCri == "WarAppCri") {
    $cost[] = 3.75;
}
if ($Coff == "Coff") {
    $cost[] = 1.00;
}
if ($SoDr == "SoDr") {
    $cost[] = 1.25;
}
if($FlaLem == "FlaLem") {
    $cost[] = 2.75;
}


//print the values collected to the screen with a total at the bottom
 print "
<style>
h1{
    color: #34676E;
    border:outset;
    text-align: center;
    background-color:#ffffff;
}

b{
    color: #34676E;
}
a{
    margin:2%;
}
span{
    color:#6d3a34;
}
body{
    background-color: bisque;
    
}
footer{
    margin: 30px;
    color: #34676E;
    text-align: center;
    border:outset;
    background-color: #ffffff;
}
</style>

<body>
<h1>OC Resturant and Eatery</h1>
<h2>Kitchen Order For: $name </h2>
<h3>tel:</h3> $tel
<h3>Your Total is:</h3>
";
print array_sum($cost);

//used for testing to see if values are being stored in array
//print_r($cost);



?>
<!DOCTYPE html>
<html>
<head>

<title>My CIS 255 Files</title>

<style>

body {
	margin: 4%;
	font-size: 140%;
}

</style>

</head>
<body>

<?php

$mycid = "S20"; //My CID
$mypin = "4463"; //My pin

/* Do not touch the code below */

if(isset($_GET['pin'])) { $pin = $_GET['pin']; } else { $pin = ""; }

if($pin == $mypin){

	//Get files
	$dir = ".";
	$dh  = opendir($dir);
	while (false !== ($filename = readdir($dh))) {
	    $files[] = $filename;
	}
	sort($files);
	
	//Show files
	print "<h2>$mycid Files</h2>\n";
	print "<ul>\n";
	foreach ($files as $file) {
	
		if(substr($file,0,1) != "." ) { 
			print "<li><a href='$file'>$file</a></li>\n"; 
		}
	
	}
	print "</ul>\n";
	
} else {
	
	//Show blank page
	print " ";
	
}
?>

</body>
</html>
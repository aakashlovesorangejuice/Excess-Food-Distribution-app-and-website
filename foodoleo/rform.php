<body bgcolor="#1a1a00"></body>
<?php

$host = "localhost";
$user = "root";
$pwd = "000";
$dbname = "foodoloi";

$co = new mysqli($host, $user , $pwd, $dbname) or die("Connection failed");

	//echo "Connection established!";

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$state = $_POST["state"];
$cd = $_POST["c/d"];
$ad1 = $_POST["line1"];
$ad2 = $_POST["line2"];
$pin = $_POST["pin"];

$qr = "INSERT INTO `food_save` VALUES ('$fname','$state','$cd','$ad1',$pin,null)";

if($co->query($qr))
{
?>
<h2 style="text-align: center; color: #6600ff; font-size: 40px;">Data entered sucessfully!</h2>

<?php
}
else
{
?>
<h3 style="text-align: center; color: #ff0000">Data was not entered successfully!</h3>

<?php
}
?>
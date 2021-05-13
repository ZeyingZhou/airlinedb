<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Airlinedb</title>
</head>
<body>
<?php
include 'connectAirlinedb.php';
?>
<h1>Update Departure Time</h1>
<form action="updateDepartureTime.php" method="post">
Which flight code: <br>
<?php
include 'getflightcode.php';
?> 
NewDepartureTime<input type="text" name="updateDepartureTime"><br>
<input type="submit"  value="Update Departure Time">
</form>
<?php
   $connection = NULL;
?>
</body>
</html>
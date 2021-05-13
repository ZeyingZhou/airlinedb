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
<h1>Add New Flight</h1>
<form action="addnewflight.php" method="post">
Which airline: <br><?php
include 'getairline.php';
?> 
Which departure airport: <br>
<?php
include 'getdepartureairport.php';
?> 
Which arrival airport: <br>
<?php
include 'getarrivalairport.php';
?> 
Which airplane:  <br>
<?php
include 'getairplane.php';
?> 
FlightNumber<br><input type="text" name="flightnumber"><br>
Day<br><input type="text" name="day"><br>
<input type="submit" value="Add New Flight">
</form>
<?php
   $connection = NULL;
?>
</body>
</html>
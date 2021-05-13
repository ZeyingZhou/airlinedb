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
<ol>
<?php
   $flightcode= $_POST["flightcode"];
   $updateDepartureTime = $_POST["updateDepartureTime"];
   $query = 'UPDATE Flight set departureActualTime = "'. $updateDepartureTime .'" WHERE flightCode =  "'.$flightcode.'"';
   $numRows = $connection->exec($query);
   echo "Departure time was updated!";
   $connection = NULL;
?>
</ol>
<a href="http://localhost/airlinedb/airline.php." >Home Page</a> 
</body>
</html>
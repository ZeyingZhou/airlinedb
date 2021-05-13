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
   $airlinecode= $_POST["airlinecode"];
   $departureAirport = $_POST["departureAirport"];
   $arrivalAirport =$_POST["arrivalAirport"];
   $airplaneid = $_POST["airplaneid"];
   $flightcode = $_POST["flightnumber"];
   $day = $_POST["day"];
   $query = 'INSERT INTO Flight(airlineCode,flightCode,departureAirport,arrivalAirport,airplane) VALUES ("'. $airlinecode .'","'.  $flightcode .'","'. $departureAirport .'","'. $arrivalAirport .'","'.  $airplaneid .'")';
   $query1 = 'INSERT INTO DaysOffered values("' . $airlinecode . '","' . $flightcode . '","' . $day . '")';
   $numRows = $connection->exec($query);
   $numRows2 = $connection->exec($query1);
   echo "Your flight was added!";
   $connection = NULL;
?>
</ol>
<a href="http://localhost/airlinedb/airline.php." >Home Page</a> 
</body>
</html>
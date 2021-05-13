<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Airlinedb</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php
include 'connectAirlinedb.php';
include 'getairportcity.php'
?>
<h1>Here are your flights:</h1>
<table>
<?php
   $airlineCode= $_POST["airlinecode"];
   $day= $_POST["day"];
   $query = 'SELECT * FROM Flight inner join DaysOffered on DaysOffered.airlineCode="'.$airlineCode.'" AND DaysOffered.day="' . $day . '" AND Flight.flightCode=DaysOffered.flightCode';
   echo "<tr>
   <th>FlightCode</th>
   <th>DepartureAirport</th>
   <th>ArrivalAirport</th>
   </tr>";
   $result=$connection->query($query);
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["flightCode"]."</td><td>".getAirport($row["departureAirport"], $connection)."</td><td>".getAirport($row["arrivalAirport"], $connection)."</td></tr>";
    }
?>
</table>
<a href="http://localhost/airlinedb/airline.php." >Home Page</a> 
<?php
   $connection = NULL;
?>
</body>
</html>
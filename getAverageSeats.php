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
<h1>The Average Seats is:</h1>
<table>
<?php
   $day= $_POST["dayoftheweek"];
   $query = 'SELECT * FROM (((DaysOffered inner join Flight on DaysOffered.day="'.$day.'" AND DaysOffered.flightCode=Flight.flightCode) inner join Airplane on Flight.airplane = Airplane.id) inner join AirplaneType on Airplane.type = AirplaneType.name)';
   $result=$connection->query($query);
   $sum = 0;
   $count = 0;
    while ($row=$result->fetch()) {
    $sum += $row["maxSeats"];
    $count++;
    }
    $averageSeats = $sum/$count;
    echo "<h2> The Average number of Seats is $averageSeats <h2>";
?>
</table>
<a href="http://localhost/airlinedb/airline.php." >Home Page</a> 
<?php
   $connection = NULL;
?>
</body>
</html>
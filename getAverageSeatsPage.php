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
<h1>Get Average Seats</h1>
<form action="getAverageSeats.php" method="post">
<input type="radio" name="dayoftheweek" value="Monday">Monday<br>
<input type="radio" name="dayoftheweek" value="Tuesday">Tuesday<br>
<input type="radio" name="dayoftheweek" value="Wednesday">Wednesday<br>
<input type="radio" name="dayoftheweek" value="Thursday">Thursday<br>
<input type="radio" name="dayoftheweek" value="Friday">Friday<br>
<input type="radio" name="dayoftheweek" value="Saturday">Saturday<br>
<input type="radio" name="dayoftheweek" value="Sunday">Sunday<br>
<input type="submit" value="calculateAverageSeat">
</form>
<?php
   $connection = NULL;
?>
</body>
</html>
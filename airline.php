<meta charset="utf-8">
<title>AirlineDB</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
  height:10%
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2 {
  margin: 0;
}
h1 {
  color: blue;
}
img {
  border-radius: 8px;
  width: 22%;
}

</style>
<body>

<?php
include 'connectAirlinedb.php';
?>
<h1>Welcome to Airline</h1>
<img src="Airlines.jpeg" alt="Italian Trulli">

<h2>Flights</h2>

<?php
include 'getFlightsdata.php';
?>
<p>
<hr>
<p>
<h2>CHECK FLIGHT</h2>
<form action="getflights.php" method="post">
AirlineCode<br><input type="text" name="airlinecode"><br>
Day<br><input type="text" name="day"><br>
<input type="submit" value="Get Flights">
</form>
<p>
<hr>
<p>
<a href="http://localhost/airlinedb/addnewflightpage.php." >ADD A NEW FLIGHT</a> 

<a href="http://localhost/airlinedb/updateDepartureTimePage.php." >UPDATE DEPARTURE TIME</a> 
<a href="http://localhost/airlinedb/getAverageSeatsPage.php." >GET AVERAGE SEATS</a> 

<?php
$connection =- NULL;
?>
</body>
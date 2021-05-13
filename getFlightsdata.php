<?php
   $query = "SELECT * FROM flight";
   $result = $connection->query($query);
   echo "<table>";
   echo "<tr>
   <th>FlightCode</th>
   <th>ArrivalScheduledTime</th>
   <th>ArrivalActualTime</th>
   </tr>";
   while ($row = $result->fetch()) {
    echo "<tr>";
	echo '<td>' .$row["flightCode"] .'</td>';
    echo  '<td>'. $row["arrivalScheduledTime"]  .'</td>';
    echo   '<td>'. $row["arrivalActualTime"]  .'</td>'.  '</tr>';
   }
   echo "</table>";
?>
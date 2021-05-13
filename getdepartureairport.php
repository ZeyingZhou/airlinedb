<?php
   $query = "SELECT * FROM Airport";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo $row["name"];
        echo '<input type="radio" name="departureAirport" value="';
        echo $row["code"];
        echo '">' . $row["code"]  . "<br>";
   }
?>
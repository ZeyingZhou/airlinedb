<?php
   $query = "SELECT * FROM Airport";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo $row["name"];
        echo '<input type="radio" name="arrivalAirport" value="';
        echo $row["code"];
        echo '">' . $row["code"]  . "<br>";
   }
?>
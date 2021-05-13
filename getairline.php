<?php
   $query = "SELECT * FROM Airline";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo $row["name"];
        echo '<input type="radio" name="airlinecode" value="';
        echo $row["code"];
        echo '">' . $row["code"]  . "<br>";
   }
?>
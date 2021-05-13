<?php
   $query = "SELECT * FROM Flight";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="flightcode" value="';
        echo $row["flightCode"];
        echo '">' . $row["flightCode"]  . "<br>";
   }
?>
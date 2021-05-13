<?php
   $query = "SELECT * FROM Airplane";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airplaneid" value="';
        echo $row["id"];
        echo '">' . $row["id"]  . "<br>";
   }
?>
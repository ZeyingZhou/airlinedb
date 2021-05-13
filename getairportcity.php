<?php
    function getAirport($airportcode, $connection) {
        $query = 'SELECT city from Airport WHERE Airport.code = "'.$airportcode.'"';
        $result = $connection->query($query);
        while($row = $result->fetch()) {
            return $row["city"];
        }
    }
?>
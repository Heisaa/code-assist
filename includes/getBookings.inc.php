<?php

require_once('dbh.inc.php');

$sql = "SELECT * FROM bookings";

$result = mysqli_query($conn, $sql);

$bookings = [];

if (mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) {
        array_push($bookings, $row);
    }
} 
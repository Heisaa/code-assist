<?php

$serverName = "my06s.sqlserver.se";
$dBUsername = "4003497_jg28567";
$dBPassword = "Grupp7edf";
$dBName = "4003497-db7";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
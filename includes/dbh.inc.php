<?php

$servername = "localhost"; #server name of online server go to dashboard of domain provider
$dBUsername = "root";
$dBPassword = "";
$dBName = "grand framez";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("CONNECTION FAILED: ".mysqli_connect_error());
}
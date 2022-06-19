<?php

$serverName = "us-cdbr-east-05.cleardb.net";
$dBUsername = "b2cc4eb6372415";
$dBPassword = "f4c74845";
$dBName = "heroku_05ed115d2962d3f";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
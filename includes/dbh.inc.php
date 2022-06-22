<?php

$serverName = "us-cdbr-east-05.cleardb.net";
$dBUsername = "b005adb9d76d3a";
$dBPassword = "5154c24f";
$dBName = "heroku_87d64f2edf7ed81";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
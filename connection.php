<?php

$serverName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "test";

$con = mysqli_connect($serverName, $userName, $password, $databaseName);

if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}

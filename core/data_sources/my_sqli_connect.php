<?php
$host = "localhost";
$dbName = "greenhills";
$dbUser = "root";
$dbPassword = "";
$con = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
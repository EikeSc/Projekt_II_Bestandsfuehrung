<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "holcim";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn) {

    echo "Connection success.";
} else {
    echo "Connection failed";
}

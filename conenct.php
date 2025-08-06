<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "gymnasium_db";
$con = mysqli_connect($host, $username, $password, $db);


if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

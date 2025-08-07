<?php
include 'connect.php';

global $currentUser; 
$currentUser = null;

if (isset($_COOKIE['auth_token'])) {
    $token = $_COOKIE['auth_token'];

    $token = mysqli_real_escape_string($con, $token);
    $query = "SELECT id, username FROM users WHERE auth_token = '$token'";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        $currentUser = mysqli_fetch_assoc($run);
    }
}

if ($currentUser === null) {
    header("location: admin-login.html");
    exit(); 
}


?>
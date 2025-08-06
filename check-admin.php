<?php
include 'connect.php';


$currentAdmin = null;

if (isset($_COOKIE['auth_token'])) {
    $token = $_COOKIE['auth_token'];

    $token = mysqli_real_escape_string($con, $token);
    $query = "SELECT id, username, role FROM admins WHERE auth_token = '$token'";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        $currentAdmin = mysqli_fetch_assoc($run);
    }
}

if ($currentAdmin === null) {
    header("location: admin-login.html");
    exit(); 
}
?>
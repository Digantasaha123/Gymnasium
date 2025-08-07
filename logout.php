<?php
include 'connect.php';

if (isset($_COOKIE['auth_token'])) {
    $token = $_COOKIE['auth_token'];
    
    $token = mysqli_real_escape_string($con, $token);

    $query_users = "UPDATE users SET auth_token = NULL WHERE auth_token = '$token'";
    mysqli_query($con, $query_users);

    $query_admins = "UPDATE admins SET auth_token = NULL WHERE auth_token = '$token'";
    mysqli_query($con, $query_admins);
    
    setcookie("auth_token", "", time() - 3600, "/");
}

header("location: index.html");
exit();
?>
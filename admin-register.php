<?php

include 'connect.php';

$username = mysqli_real_escape_string($con, $_POST['adminRegisterUsername']);
$email = mysqli_real_escape_string($con, $_POST['AdminRegisterEmail']);
$role = mysqli_real_escape_string($con, $_POST['adminRole']);
$password = mysqli_real_escape_string($con, $_POST['adminRegisterPassword']);

$query = "INSERT INTO admins (username, email, role, password)
          VALUES ('$username', '$email', '$role', '$password')";

$run = mysqli_query($con, $query);

if (!$run) {
    echo "Admin registration failed: " ;
} else {
    // alert("Registration Successfull");
    header("location: admin-login.html?status=success");
}
?>
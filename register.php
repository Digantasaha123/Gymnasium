<?php
include 'connect.php';

$username = mysqli_real_escape_string($con, $_POST['registerUsername']);
$email = mysqli_real_escape_string($con, $_POST['registerEmail']);
$password = mysqli_real_escape_string($con, $_POST['registerPassword']);

$query = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$email', '$password')";

$run = mysqli_query($con, $query);

if (!$run) {
    echo "Registration failed: " . mysqli_error($con);
} else {
    header("location: login.html?status=success");
}
?>
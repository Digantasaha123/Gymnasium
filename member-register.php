<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = mysqli_real_escape_string($con, $_POST['registerUsername']);
    $email = mysqli_real_escape_string($con, $_POST['registerEmail']);
    $password = mysqli_real_escape_string($con, $_POST['registerPassword']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password)
              VALUES ('$username', '$email', '$hashedPassword')";

    $run = mysqli_query($con, $query);

    if (!$run) {
        echo " Member registration failed: " ;
    } else {
        header("location: member-login.html?status=success");
        exit();
    }
}
?>


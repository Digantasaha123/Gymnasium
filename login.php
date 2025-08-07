<?php
include 'connect.php';

$username = mysqli_real_escape_string($con, $_POST['loginUsername']);
$password = mysqli_real_escape_string($con, $_POST['loginPassword']);

$query = "SELECT id, password FROM users WHERE username = '$username'";
$run = mysqli_query($con, $query);

if (mysqli_num_rows($run) > 0) {
    $user = mysqli_fetch_assoc($run);

    if ($password == $user['password']) {
        $token = bin2hex(random_bytes(32));
        $userId = $user['id'];

        $update_query = "UPDATE users SET auth_token = '$token' WHERE id = $userId";
        mysqli_query($con, $update_query);

        setcookie("auth_token", $token, time() + 86400, "/");
        header("location: member_dashboard.php");
    } else {
        echo "Login failed: Invalid username or password.";
    }
} else {
    echo "Login failed: Invalid username or password.";
}
?>
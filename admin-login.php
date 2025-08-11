<?php
include 'connect.php';
include 'check-admin.php';

$username = mysqli_real_escape_string($con, $_POST['adminloginUsername']);
$password = mysqli_real_escape_string($con, $_POST['adminloginPassword']);

$query = "SELECT id, password FROM admins WHERE username = '$username'";
$run = mysqli_query($con, $query);

if (mysqli_num_rows($run) > 0) {
    $admin = mysqli_fetch_assoc($run);

    if ($password == $admin['password']) {
        $token = bin2hex(random_bytes(32));
        $adminId = $admin['id'];

        $update_query = "UPDATE admins SET auth_token = '$token' WHERE id = $adminId";
        mysqli_query($con, $update_query);

        setcookie("auth_token", $token, time() + 86400, "/");
       header("location: admin_dashboard.php");
    } else {
        echo "Invalid credentials.";
    }
} else {
    echo "Invalid credentials.";
}
?>
<?php
include 'connect.php';
include 'check_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gymnasium</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/admin-dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="index.html" class="logo">Gym<span>Nasium</span></a>
        <ul class="nav">
            <li><a href="index.html">View Site</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </header>

    <section class="dashboard-container">
        <h2 class="heading">Admin<span>Dashboard</span></h2>
        <h3 class="welcome-message">Welcome, <?php echo htmlspecialchars($currentAdmin['username']); ?>!</h3>

        <div class="info-table">
            <h4><i class='bx bx-user'></i> Registered Members</h4>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user_query = "SELECT id, username, email, reg_date FROM users ORDER BY id DESC";
                    $user_run = mysqli_query($con, $user_query);
                    if (mysqli_num_rows($user_run) > 0) {
                        while ($row = mysqli_fetch_assoc($user_run)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . $row['reg_date'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No members found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="info-table">
            <h4><i class='bx bx-shield-quarter'></i> Admin Staff</h4>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $admin_query = "SELECT id, username, email, role FROM admins ORDER BY id DESC";
                    $admin_run = mysqli_query($con, $admin_query);
                    if (mysqli_num_rows($admin_run) > 0) {
                        while ($row = mysqli_fetch_assoc($admin_run)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['role']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No admins found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>
</body>
</html>
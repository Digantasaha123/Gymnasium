<?php
include 'check_login.php';
include 'connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard - Gymnasium</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/member-dashboard.css">
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
        <h2 class="heading">Member <span>Dashboard</span></h2>
        <h3 class="welcome-message">
            Welcome back, <?php echo htmlspecialchars($currentUser['username']); ?>!
        </h3>

        <div class="dashboard-grid">
            <div class="dashboard-widget">
                <h4><i class='bx bx-user-check'></i> Select Your Personal Trainer</h4>
                <div class="trainer-list">
                    <?php
                    
                    $query = "SELECT username, role, avatar FROM admins WHERE role LIKE '%trainer%'";
                    $run = mysqli_query($con, $query);
                    if (mysqli_num_rows($run) > 0) {
                        while ($row = mysqli_fetch_assoc($run)) {
                    ?>
                        <div class="trainer-card">
                            <img src="assets/images/<?php echo $row['avatar']; ?>" alt="Trainer">
                            <div class="trainer-info">
                                <strong><?php echo htmlspecialchars($row['username']); ?></strong>
                                <span><?php echo htmlspecialchars($row['role']); ?></span>
                            </div>
                            <button class="btn-select">Select</button>
                        </div>
                    <?php
                        }
                    } else {
                        echo "<p>No trainers available at the moment.</p>";
                    }
                    ?>
                </div>
            </div>

            <div class="dashboard-widget">
                <h4><i class='bx bx-body'></i> Get a Plan Recommendation</h4>
                <div class="plan-finder">
                    <p>What is your primary fitness goal?</p>
                    <select id="goalSelector">
                        <option value="lose">Fat Loss</option>
                        <option value="gain">Weight Gain</option>
                        <option value="strength">Strength Training</option>
                    </select>
                    <button id="getPlanBtn" class="btn">Find My Plan</button>
                    <p id="planResult" class="plan-recommendation"></p>
                </div>
            </div>

            <div class="dashboard-widget">
                <h4><i class='bx bx-message-dots'></i> Talk to a Trainer</h4>
                <div class="chat-box">
                    <div class="chat-header">Live Chat (Demo)</div>
                    <div class="chat-messages">
                        <div class="message received">Hello! How can I help you today?</div>
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="Type your message...">
                        <button><i class='bx bxs-paper-plane'></i></button>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-widget">
                <h4><i class='bx bx-dollar-circle'></i> Our Plans</h4>
                <div class="plans-summary">
                    <div class="plan-item">
                        <strong>BASIC</strong>
                        <span>$100/Month</span>
                        <p>Access to Gym Equipment, 1 Personal Training Session, Group Classes.</p>
                    </div>
                    <div class="plan-item">
                        <strong>STANDARD</strong>
                        <span>$150/Month</span>
                        <p>All Basic Features, Unlimited Training Sessions, Nutrition Guidance.</p>
                    </div>
                    <div class="plan-item">
                        <strong>PREMIUM</strong>
                        <span>$200/Month</span>
                        <p>All Standard Features, 24/7 Gym Access, Exclusive Workshops.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="JS/member-dashboard.js"></script>
</body>
</html>
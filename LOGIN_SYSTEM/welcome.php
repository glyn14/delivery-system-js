<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="center-box">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You are successfully logged in.</p>

    <a href="dashboard.php" class="primary-btn">Go to Dashboard</a>
    <a href="logout.php" class="secondary-btn">Log Out</a>
</div>

</body>
</html>

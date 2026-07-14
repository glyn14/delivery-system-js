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
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="top-bar">
    <div class="top-logo">📌 Dashboard</div>
    <div class="top-user">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</div>
    <a href="logout.php" class="secondary-btn">Log Out</a>
</div>

<div class="dashboard-grid">
    <div class="card">
        <div class="icon">👤</div>
        <h3>Profile</h3>
        <p>View your personal information</p>
        <a href="#" class="card-link">Open</a>
    </div>

    <div class="card">
        <div class="icon">⚙️</div>
        <h3>Settings</h3>
        <p>Manage your account settings</p>
        <a href="#" class="card-link">Open</a>
    </div>

    <div class="card">
        <div class="icon">📊</div>
        <h3>Grades</h3>
        <p>Check your academic performance</p>
        <a href="#" class="card-link">Open</a>
    </div>

    <div class="card">
        <div class="icon">📚</div>
        <h3>Subjects</h3>
        <p>View your enrolled subjects</p>
        <a href="#" class="card-link">Open</a>
    </div>
</div>

</body>
</html>

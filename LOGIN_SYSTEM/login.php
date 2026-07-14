<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql    = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No user found.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="split-container">
    <!-- LEFT PANEL -->
    <div class="left-panel">
        <a href="#" class="home-link">&lt; Home Page</a>
        <h1>Welcome back</h1>
        <p>New here?</p>
        <a href="register.php" class="panel-button">Create account</a>
    </div>

    <!-- RIGHT PANEL (FORM) -->
    <div class="right-panel">
        <div class="form-header">
            <h2>Log in</h2>
            <a href="#" class="help-link">Need help?</a>
        </div>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" class="primary-btn">Log in</button>
        </form>
    </div>
</div>

</body>
</html>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fullname = $_POST['fullname'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Registration failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="split-container">
    <!-- LEFT PANEL -->
    <div class="left-panel">
        <a href="#" class="home-link">&lt; Home Page</a>
        <h1>Get Started</h1>
        <p>Already have an account?</p>
        <a href="login.php" class="panel-button">Log in</a>
    </div>

    <!-- RIGHT PANEL (FORM) -->
    <div class="right-panel">
        <div class="form-header">
            <h2>Create account</h2>
            <a href="#" class="help-link">Need help?</a>
        </div>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Full Name</label>
            <input type="text" name="fullname" required>

            <div class="checkbox-row">
                <input type="checkbox" required>
                <span>I accept the terms of the agreement</span>
            </div>

            <button type="submit" class="primary-btn">Sign up</button>
        </form>
    </div>
</div>

</body>
</html>

<?php
session_start();

// Hardcoded credentials (for demo purposes)
$valid_username = "admin";
$valid_password = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    // Store username in session
    $_SESSION['username'] = $username;

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid username or password!";
}
?>
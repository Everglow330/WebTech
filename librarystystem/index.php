<?php

session_start();

require_once("db.php");

$message = "";

$emailCookie = "";

if (isset($_COOKIE['user_email'])) {
    $emailCookie = $_COOKIE['user_email'];
}

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];

        setcookie(
            "user_email",
            $email,
            time() + (86400 * 7)
        );

        setcookie(
            "last_login",
            date("Y-m-d H:i:s"),
            time() + (86400 * 7)
        );

        header("Location: dashboard.php");

    } else {

        $message = "Invalid Email or Password";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login Form</h2>

    <form method="POST">

        Email:
        <input
            type="email"
            name="email"
            value="<?php echo $emailCookie; ?>"
            required
        >

        <br><br>

        Password:
        <input type="password" name="password" required>

        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

    <br>

    <?php echo $message; ?>

    <br><br>

    <a href="register.php">
        Create New Account
    </a>

</body>

</html>
<?php

require_once("db.php");

$message = "";

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name, email, password)
            VALUES('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration Successful";
    } else {
        $message = "Registration Failed";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>

    <h2>Registration Form</h2>

    <form method="POST">

        Name:
        <input type="text" name="name" required>

        <br><br>

        Email:
        <input type="email" name="email" required>

        <br><br>

        Password:
        <input type="password" name="password" required>

        <br><br>

        <input type="submit" name="register" value="Register">

    </form>

    <br>

    <?php echo $message; ?>

    <br><br>

    <a href="index.php">Go to Login</a>

</body>

</html>
<?php

session_start();

if (!isset($_SESSION['user_name'])) {

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h1>
        Welcome,
        <?php echo $_SESSION['user_name']; ?>
    </h1>

    <br>

    <h3>Dashboard Page</h3>

    <br>

    <?php

    if (isset($_COOKIE['last_login'])) {

        echo "Last Login Time: "
             . $_COOKIE['last_login'];
    }

    ?>

    <br><br>

    <a href="logout.php">
        Logout
    </a>

</body>

</html>
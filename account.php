<!DOCTYPE html>
<?php
session_start(); // Start a PHP session.
if (isset($_SESSION['loggedin'])) { // Check to see if the user is already signed in.
    $username = $_SESSION["username"];
} else {
    header("Location: ./signin.php");
}
?>
<html lang="en">
    <head>
        <title>Moop - Account</title>
        <link href="./stylesheets/styles.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Account</h1>
        <a class="button" href="./dashboard.php">Dashboard</a>
        <a class="button" href="./signout.php">Sign Out</a>
        <a class="button" href="./settings.php">Settings</a>
        <a class="button" href="./statistics.php">Statistics</a>
    </body>
</html>

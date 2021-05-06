<!DOCTYPE html>
<?php
session_start(); // Start a PHP session.
if (isset($_SESSION['loggedin'])) { // Check to see if the user is already signed in.
    $username = $_SESSION["username"]; // Set the $username variable to the current user's username.
} else {
    header("Location: ./signin.php"); // Redirect the user if they are not logged in.
}
?>
<html lang="en">
    <head>
        <title>Moop - Dashboard</title>
        <link href="./stylesheets/styles.css" rel="stylesheet">
        <link href="./stylesheets/buttons.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Dashboard</h1>
        <h3>Report static hazard</h3><br>
        <a class="redbutton" href="./report.php?hazard=damage">Road Damage</a><br><br><br>
        <a class="orangebutton" href="./report.php?hazard=construction">Construction</a><br><br><br>
        <a class="yellowbutton" href="./report.php?hazard=accident">Accident</a><br><br><br>
        <a class="greenbutton" href="./report.php?hazard=environment">Environmental Hazard</a><br><br><br>
        <a class="bluebutton" href="./report.php?hazard=police">Police</a><br><br><br>
        <a class="purplebutton" href="./report.php?hazard=traffic">Traffic</a><br><br><br>
        <a class="brownbutton" href="./report.php?hazard=roadkill">Roadkill</a><br><br><br>
        <a class="graybutton" href="./report.php?hazard=miscellaneous">Miscellaneous</a><br><br><br>
    </body>
</html>

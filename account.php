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

        <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(recordPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
        
            function recordPosition(position) {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
            }
        </script>
    </head>
    <body>
        <h1>Account</h1>
        <p id="locationtext"></p>
        <a id="locationlink" href="#">Map</a>
        <br><br>
        <button class="button" onclick="getLocation()">Get Location</button>
        <button class="button" onclick="showPosition()">Show Position</button>
        <br><br>
        <a class="button" href="./dashboard.php">Dashboard</a>
        <a class="button" href="./signout.php">Sign Out</a>
        <a class="button" href="./settings.php">Settings</a>
        <a class="button" href="./statistics.php">Statistics</a>
    </body>
</html>

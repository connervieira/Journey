<!DOCTYPE html>
<?php
session_start(); // Start a PHP session.
if (isset($_SESSION['loggedin'])) { // Check to see if the user is already signed in.
    $username = $_SESSION["username"]; // Set the $username variable to the current user's username.
} else {
    header("Location: ./signin.php"); // Redirect the user if they are not logged in.
}

// Get submitted variables from the URL
$hazard = $_GET["hazard"];
$confirm = $_GET["confirm"];

?>
<html lang="en">
    <head>
        <title>Moop - Dashboard</title>
        <link href="./stylesheets/styles.css" rel="stylesheet">
        <link href="./stylesheets/buttons.css" rel="stylesheet">
    </head>
    <body>
        <h1>Report</h1>
        <h3>You have selected to report:</h3><br>
        
        <?php
        if ($hazard == "damage") {
            echo '<p class="redbutton">Road Damage</p>';
        } else if ($hazard == "construction") {
            echo '<p class="orangebutton">Construction</p>';
        } else if ($hazard == "accident") {
            echo '<p class="yellowbutton">Accident</p>';
        } else if ($hazard == "environment") {
            echo '<p class="greenbutton">Environmental Hazard</p>';
        } else if ($hazard == "police") {
            echo '<p class="bluebutton">Police</p>';
        } else if ($hazard == "traffic") {
            echo '<p class="purplebutton">Traffic</p>';
        } else if ($hazard == "roadkill") {
            echo '<p class="brownbutton">Roadkill</p>';
        } else if ($hazard == "miscellaneous") {
            echo '<p class="graybutton">Miscellaneous</p>';
        }
        ?>
        <br><br>
        <a id="submitbutton" href="./report.php?confirm=true&hazard=<?php echo $hazard; ?>" class="disabledlightbutton">Submit</a>
        <a href="./dashboard.php" class="darkbutton">Back</a>
        <br><br>
        <p id="locatingnotification"><i>Obtaining location, please wait to submit</i></p>

        <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(recordPosition);
                } else {
                    alert("Error: Geolocation is not supported by this browser");
                }
            }
        
            function recordPosition(position) {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                updateSubmitButton();
            }

            function updateSubmitButton() {
                link = document.getElementById('submitbutton').href; // Get the initial link value.
                link = link + "&longitude=" + longitude + "&latitude=" + latitude; // Add the latitude and longitude to the link.
                document.getElementById('submitbutton').href = link; // Set the newly created link as the href for the submit button.
                document.getElementById('submitbutton').classList.add("lightbutton"); // Set the style of the button to appear as enabled.
                document.getElementById('submitbutton').classList.remove("disabledlightbutton"); // Set the style of the button to appear as enabled.
                document.getElementById('locatingnotification').innerHTML = "Location found!";
            }

            getLocation();
            updateSubmitButton();
        </script>
    </body>
</html>

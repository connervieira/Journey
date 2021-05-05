<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Moop - Sign In</title>
        <link href="./stylesheets/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start(); // Start the PHP session
        if (!isset($_SESSION['loggedin'])) { // Check to see if the user is already signed in.
            echo "<p class='error'>You aren't currently signed in!</p>";
            exit();
        }

        session_unset(); // Remove all session variables.

        session_destroy(); // Destroy the session.
        ?>
        <h1>Sign Out</h1>
        <h3>You have signed out of your Moop account!</h3>
    </body>
</html>
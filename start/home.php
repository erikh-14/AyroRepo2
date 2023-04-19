<?php
// Start the session
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Display the home page
echo "Welcome, " . $_SESSION['username'] . "!";
?>
<?php
// Database connection
$server = "localhost"; // Server name
$username = "root";    // Database username
$password = "";        // Database password
$database = "all_crud"; // Your database name

// Create a connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

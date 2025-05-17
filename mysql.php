<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";  // Replace with your actual DB name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection to the database was successful";
?>

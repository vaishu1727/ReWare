<?php
$servername = "localhost";  
$username = "root";  // Default XAMPP username
$password = "";  // Default XAMPP password (empty)
$dbname = "kapde_db";  // Make sure this matches your database name

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

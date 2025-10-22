<?php
// db.php - Handles the database connection

// Database configuration
$servername = "localhost";  // XAMPP default
$username = "root";         // XAMPP default username for MySQL
$password = "";             // XAMPP default password (empty by default)
$dbname = "pet";   // Database name (replace with your database name)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

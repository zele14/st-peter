<?php
$servername = "localhost"; // usually localhost
$username = "your_db_username"; // your database username
$password = "your_db_password"; // your database password
$dbname = "deutschconnectac_user_login"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

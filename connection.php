<?php
// Demo Database Configuration - Ready to use!
$host = "db"; // Use "localhost" if running without Docker
$user = "paperclip";  // Docker-created user
$password = "demo123"; // Demo password for immediate use
$database = "paperclip_db";
$port = 3306; 

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

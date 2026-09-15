<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission_db";
$port = 3307;

// Create connection using OOP MySQLi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
?>

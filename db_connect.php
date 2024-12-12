<?php

$servername = "localhost"; // Default WAMP server address
$username = "root"; // Change this to your MySQL username
$password ="root"; // Change this to your MySQL password
$dbname = "test"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
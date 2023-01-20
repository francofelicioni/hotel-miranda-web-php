<?php
$servername = "localhost";
$username = "root";
$password = "root";
$name = 'hotel_miranda_backend';

// Create connection
$conn = new mysqli($servername, $username, $password, $name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

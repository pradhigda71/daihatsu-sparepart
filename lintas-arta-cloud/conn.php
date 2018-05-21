<?php
$servername = "localhost";
$username = "devs7968_rayno";
$password = "developneo123";
$dbname = "devs7968_lintas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recyclebulungi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// Session timeout duration in seconds
define('SESSION_TIMEOUT', 600)
?>
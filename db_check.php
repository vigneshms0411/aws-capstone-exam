<?php
$servername = getenv('DB_HOST') ?: "your-rds-endpoint.rds.amazonaws.com";
$username = getenv('DB_USER') ?: "admin";
$password = getenv('DB_PASS') ?: "yourpassword";
$dbname = getenv('DB_NAME') ?: "streamline_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected Successfully";
$conn->close();
?>

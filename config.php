<?php
define('DB_HOST', 'Localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Aryan&12');
define('DB_NAME', 'netflix_clone');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>

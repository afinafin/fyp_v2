<?php
$host = 'localhost';
$dbname = 'mall';
$username = 'postgres';
$password = 'March@130325';

// Connect to PostgreSQL
$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    // Connection failed
    echo "Failed to connect to PostgreSQL.";
} else {
    // Connection successful
    echo "Connected successfully";
}
?>

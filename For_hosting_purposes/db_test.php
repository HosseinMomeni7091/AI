<?php
// Remote MySQL connection settings
$hostname = 'your_remote_host';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Query to show all tables
$result = $conn->query('SHOW TABLES');

if ($result) {
    while ($row = $result->fetch_array()) {
        echo $row[0] . "\n";
    }
    $result->free();
} else {
    echo 'Error retrieving tables: ' . $conn->error;
}

$conn->close();
?>

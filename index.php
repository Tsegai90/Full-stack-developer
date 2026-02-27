<html lang="en">
<body>

<?php

// Configuration class with constants
class Config {
    const DB_HOST = "localhost";        // MySQL server
    const DB_USER = "myuser";           // Your MySQL username
    const DB_PASS = "StrongPass123!";   // Your MySQL password
    const DB_NAME = "my_database";      // Your database name
}

// Create a new MySQLi connection using constants
$mysqli = new mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASS, Config::DB_NAME);

// Check connection
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Success message
echo "Connected successfully to database '" . Config::DB_NAME . "'";

// Example query
$result = $mysqli->query("SELECT NOW() AS new_time");

if ($result) {
    $row = $result->fetch_assoc();
    echo "<br>Current database time: " . $row['new_time'];
} else {
    echo "<br>Error executing query: " . $mysqli->error;
}

?>

</body>
</html>


<?php
$host = "localhost"; // Your database host
$user = "root"; // Your database username
$password = ""; // Your database password
$database = "store"; // Your database name

// Create connection
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

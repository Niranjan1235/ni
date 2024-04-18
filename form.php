<?php

$servername = "localhost"; // Change this to your database servername
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "booking_db"; // Change this to your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

mysqli_close($conn);
?>

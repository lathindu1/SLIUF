<?php
$username ="root";
$userpassword="";
$servername="localhost";
$database="sliuf";

// Create connection
$conn = mysqli_connect($servername, $username, $userpassword,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";




?>
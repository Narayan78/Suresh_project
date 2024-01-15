<?php
$servername = "localhost";
$username = "root";
$password = "Gehendra@splendid530413";

//Create Connection
$conn = mysqli_connect($servername, $username, $password);

//Check Connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";


?>
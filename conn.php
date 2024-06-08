<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alvas"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name = $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['password'];
$phno = $_POST['phno'];

$sql = "INSERT INTO `registration` (`name`, `email`, `password`, `phno`) VALUES ('$name', '$email', '$password', '$phno');"
rs = mysqli_query($conn, $sql);

?>
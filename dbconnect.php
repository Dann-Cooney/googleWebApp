<?php 

//this file is used to create a connection to the database. 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adoptable_pets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?>

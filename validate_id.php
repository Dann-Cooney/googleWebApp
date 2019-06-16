<!--

Author - Ryan Glynn
Project - Pet Adoption
Date - 14/06/2019

-->
<?php

include ('dbconnect.php');
session_start();

$check_id = $_POST['petid'];

$sql = "SELECT  * FROM pets WHERE an_id = '$check_id' ";
$result = $conn->query($sql);

//if the post id is found do this.... 
if ($result->num_rows > 0) 
{

	$_SESSION["sess_id"] = $check_id;
	header("Location: single.php");
	exit();

} 
// if not go  back
else
{

	echo "<script>
	alert('Sorry, that Animal ID does not exist.');
	window.location.href='index.php';
	</script>";

	
}

?>
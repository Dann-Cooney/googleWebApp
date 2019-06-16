<?php
include ('dbconnect.php');

$search = $_GET['term'];

$query = $conn->query("SELECT DISTINCT * FROM `pets` 
	WHERE an_color LIKE '%$search%' 
	ORDER BY an_color ASC") or die(mysqli_connect_errno());

$list = array();
$rows = $query->num_rows;

if($rows > 0){
	while($fetch = $query->fetch_assoc()){
		$data['value'] = $fetch['an_color'];
		array_push($list, $data);
	}
}
echo json_encode($list);
?>
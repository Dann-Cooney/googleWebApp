
<!--

Author - Ryan Glynn
Project - Pet Adoption
Date - 14/06/2019

-->

<?php

include ('dbconnect.php');

//value from the dropdown box from previous page.
$dropDownVal = $_POST['options'];

$sql = "SELECT * FROM pets WHERE an_type = '$dropDownVal'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<pre>";
        echo "id: " . $row["an_id"]."<br>"."Type: ". $row["an_type"]."<br>"."Name: " . $row["an_name"].  "<br>";
    }
} else {
    echo "0 results";
}
$con


?>
<?php
	require 'dbConnector.php';

	$sql = "select * from people limit 10";

	$conn -> select_db("local_general_dev");

	$result = $conn->query($sql);

	

	

	if ($result->num_rows > 0) {
	$returnValue = array();

	// output data of each row
	
		while($row = $result->fetch_assoc()) {
			array_push($returnValue, $row);
			//array_push($returnValue, "[id: " . $row["id"]. "] [name: " . $row["first_name"]. " " . $row["last_name"] . "]");
		}
	} 
	else {
		array_push($returnValue, "0 results");
	}
	$conn->close();

	echo json_encode($returnValue);
	exit;
?>
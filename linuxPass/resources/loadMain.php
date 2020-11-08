<?php
	require 'dbConnector.php';

	$sql = "select * from people limit 10";

	$conn -> select_db("local_general_dev");

	$result = $conn->query($sql);

	//var_dump($conn);

	if ($result->num_rows > 0) {
	  // output data of each row
		echo "\n";
	  while($row = $result->fetch_assoc()) {
	    echo "id: " . $row["id"]. " - name: " . $row["first_name"]. " " . $row["last_name"]. "\n";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();


?>
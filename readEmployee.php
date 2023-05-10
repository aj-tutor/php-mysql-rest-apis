<?php

require "connect.php";

$sql = "select * from employee";

$query = mysqli_query($db, $sql);
$response["employee"] = array();

	$result = $db->query($sql);
	if($count = $result->num_rows){		
		
		while($row = $result->fetch_object()){

			$emp = array();													
			$emp["emp_id"] = $row->emp_id;
			$emp["emp_name"] = $row->emp_name;
			$emp["dob"] = $row->dob;

			array_push($response["employee"], $emp);
		}
		
		$response["status"] = 'success';
		
		// echoing JSON response
		echo json_encode($response,JSON_UNESCAPED_UNICODE);
		
	}
		
		$result->free();


?>
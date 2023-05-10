<?php

$emp_id = $_POST['emp_id'];

require "connect.php";

$delete_emp = $db->prepare("delete from employee where emp_id = ?");			
$delete_emp->bind_param('i',$emp_id);
					
			if($delete_emp->execute()){

				$response["status"] = 'success';					
				$response["message"] = "Employee Deleted successfully";
				echo json_encode($response,JSON_UNESCAPED_UNICODE);
			}




?>				
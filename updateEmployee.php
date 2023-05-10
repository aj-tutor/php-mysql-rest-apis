<?php

$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$dob = $_POST['dob'];

require "connect.php";

$update_emp = $db->prepare("update employee set emp_name = ?, dob = ? where emp_id = ?");			
$update_emp->bind_param('ssi',$emp_name,$dob,$emp_id);
					
			if($update_emp->execute()){

				$response["status"] = 'success';					
				$response["message"] = "Employee Updated successfully";
    			echo json_encode($response,JSON_UNESCAPED_UNICODE);
			}




?>				
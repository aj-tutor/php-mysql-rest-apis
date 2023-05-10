<?php

$emp_name = $_POST['emp_name'];
$dob = $_POST['dob'];

require "connect.php";

$insert_emp = $db->prepare("insert into employee(emp_name,dob) values (?,?)");			
$insert_emp->bind_param('ss',$emp_name,$dob);
					
			if($insert_emp->execute()){

				$response["status"] = 'success';					
				$response["message"] = "Employee Added successfully";
				$response["emp_id"] = $insert_emp->insert_id;
    			echo json_encode($response,JSON_UNESCAPED_UNICODE);
			}




?>				
<?php
	if(require_once('Connection.php')){
		$name = $_POST["Name"];
		$id = $_POST["Id"];
		$rate = $_POST["Rate"];
				
		$sql = "UPDATE employee SET Emp_rating = '$rate' where Emp_id = '$id' and Emp_name = '$name'";
		$result = $_SESSION["conn"] -> query($sql);
		if($_SESSION["conn"]->affected_rows){
			header("Location: RateEmp.php?status=updated");
		} else {
			header("Location: RateEmp.php?status=failed");
		}
	}
	else
		echo "failed Operation";
?>
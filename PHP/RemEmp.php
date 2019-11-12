<?php
	if(require_once('Connection.php')){
		$name = $_POST["Name"];
		$id = $_POST["Id"];
				
		$sql = "DELETE FROM `employee` WHERE Emp_id='$id' ";
		$result = $_SESSION["conn"] -> query($sql);
		if($_SESSION["conn"]->affected_rows){
			header("Location: RemoveEmployee.php?name=$name");
		} else {
			header("Location: RemoveEmployee.php?status=$id");	
		}
	}
	else
		echo "failed Operation";
?>
<?php
	//Start session
	session_start();
	//Include database connection details
	// require_once('connection.php');
	$conn = mysqli_connect("localhost", "root", "", "project");
	if ($conn)
		echo "Connection Established<br>";
	if(!mysqli_select_db($conn,'project')){
		echo "Databse Not Selected";
	}

	else{
		$name = $_POST["Name"];
		$id = $_POST["Id"];
		$phone = $_POST["Phone"];
		$user = $_POST["Username"];
		$pass = $_POST["Password"];
		$rate = 0;
		$sql = "INSERT INTO employee (Username,Password,Emp_name,Emp_phone,Emp_rating) VALUES ('$user','$pass','$name','$phone','$rate')";
		$result = $conn -> query($sql);	
		
		if($result){
			header("Location:AddEmployee.php?insertion=successful");
		}
		else{
			header("Location:AddEmployee.php?insertion=unsuccessful");
		}
		
	 }
?>
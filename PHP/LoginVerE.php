<?php
	//Start session
	session_start();
	//Include database connection details
	// require_once('connection.php');
	$conn = new mysqli("localhost", "root", "", "project");
	if ($conn -> connect_error)
		die("Connection Failed");
	else{
		$_SESSION["user"] = $_POST["username"];
		$pass = $_POST["password"];
		$user = $_SESSION["user"];
		$sql = "select count(*) as tot from employee where Username ='$user' and Password ='$pass'";
		$result = $conn -> query($sql);	
		$row = $result -> fetch_assoc();
		if ($row["tot"] != 0 ) {
			header("Location:EmployeePage.php");
		} else {
			header("Location:EmployeeLogin.php?status=invalid");	
		}
	 }
?>
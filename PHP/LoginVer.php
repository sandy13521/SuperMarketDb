<?php
	//Start session
	session_start();
	//Include database connection details
	if(require_once('Connection.php')){
		$_SESSION['user'] = $_POST["username"];
		$pass = $_POST["password"];
		// echo $user;
		// echo $pass;
		$user = $_SESSION['user'];
		$sql = "select count(*) as tot from admin where Username ='$user' and Password ='$pass'";
		$result = $_SESSION["conn"] -> query($sql);
		$row = $result -> fetch_assoc();
		if ($row["tot"] == 1) {
			header("Location: AdminPage.php?user=$user");
		} else {
			header("Location: AdminLogin.php?status=invalid");	
		}
	}
	else
		echo "failed Operation";
	// $_SESSION["conn"] = new mysqli("localhost", "root", "", "project");
	// if ($_SESSION["conn"] -> connect_error)
	// 	die("Connection Failed");
	// else{
		// $user = $_POST["username"];
		// $pass = $_POST["password"];
		// echo $user;
		// echo $pass;
		// $sql = "select count(*) as tot from admin where Username ='$user' and Password ='$pass'";
		// $result = $_SESSION["conn"] -> query($sql);
		// $row = $result -> fetch_assoc();
		// if ($row["tot"] == 1) {
		// 	header("Location: AdminPage.php?user=$user");
		// } else {
		// 	header("Location: AdminLogin.php?status=invalid");	
		// }
	 // }
?>
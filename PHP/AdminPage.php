<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link href="../CSS/AdminPage.css" rel="stylesheet">
	<style type="text/css">
          body {
            background-color: white;
            margin: 0%;
            padding: 0%;
            margin-top: -20px;
        }
    </style>
</head>
<body>
	 <div style="background:rgb(85, 79, 79);width: 100%;height:auto;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h1 style="color: white;font-family: bahnschrift condensed">Super Market</h1>
        </div>
        <div style="margin-right:20px;margin" align="right">
            <?php
                session_start();
                $user = $_SESSION['user'];
                echo "<h2 style='color:white;'> Hi, " . $user . "</h2>";
                ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
	<h2 style="margin-left: 300px;font-size: 40px">Select Your Operation</h2>
	<div class="sidenav">
		<a href="Place.php">Place Order</a>
		<a href="CheckStock.php">Check Stock</a>
		<a href="AddEmployee.php">Add a Employee</a>
		<a href="RateEmp.php">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
        <a href="Progress.php">SuperMarket Progress</a> 
        <a href="LogoutPage.php">Logout</a>
	</div>

	<div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="color:lightblue;">Address : </h3>
            <p style="color: white;">
            #22/32, 16th main, 16th cross,<br> Opposite Maharaja Agarsen Hospital,<br>
            Padmanbhanagar,BSK 2nd Stage<br>
            Bengaluru - 560060  <br>  
            </p>
        </div> 
        <div style="float: left;padding-left: 80px;padding-top: 10px;">
            <h3  style="color: lightblue;">Contact Us :</h3>
            <p style="color: white;">nandavarmukund1999@gmail.com</p>    
        </div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Rate Employee</title>
</head>
<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
<style type="text/css">
          body {
            background-color: white;
            margin: 0%;
            padding: 0%;
            margin-top: -20px;
        }
    </style>
<body>
	<div style="background:rgb(85, 79, 79);width: 100%;height:100px;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h2 style="color: white">Super Market</h2>
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
    <div class="sidenav" style="margin-top: 100px">
		<a href="Place.php">Place Order</a>
		<a href="CheckStock.php">Check Stock</a>
		<a href="AddEmployee.php">Add a Employee</a>
		<a href="RateEmp.php" class="active">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
        <a href="Progress.php">SuperMarket Progress</a>
		<a href="LogoutPage.php">Log Out</a>

	</div>
	<h1 align="center">Rate Your Employee</h1>
    <div style="background-color: lightgreen;width: 300px;height:auto;border-radius: 5px;margin-left: 40%;margin-top: 40px;padding: 16px" align="center">

    <h2 align="center" style="margin-top:15px">Fill The Form</h2>
	<form action="RateEmployee.php" method="POST" align="center">
		<input type="text" name="Name" placeholder="Name" required="Must" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px"><br>
		<input type="number" name="Id" placeholder="Id"  required="Must" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px"><br>
		<input type="number" name="Rate" min="1" max="5" placeholder="Rating" required="Must" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" ><br>
		<input type="submit"  value="Update Rating"style="padding: 10px;border-radius: 5px;border-width: 1px;margin-top: 30px;widows: 250px;height: 40px;background-color: red;color: white;font-style: bold;font-family: sans-serif;"><br>
	</form>
    </div>
    <div align="center" style="width:auto;height: auto;padding:10px;margin-top:20px;margin-left: 400px;margin-right: 400px">
    <?php
    	if(isset($_GET["status"])){
    		$code = $_GET["status"];
    		if($code == "failed")
    			echo "<h3>Failed to Update the Rating</h3>";
    		elseif ($code == "updated") {
    			echo "<h3>Rating is Successfully Uploaded</h3>";
    		}
    	}        
    ?>    
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
</body>
</html>
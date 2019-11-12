<!DOCTYPE html>
<html>
<head>
	<title>Employee Page</title>
	<link href="../CSS/AdminPage.css" rel="stylesheet">
	<style type="text/css">
		body {
            margin: 0%;
        }
	</style>
</head>
<body>
	<div style="background:rgb(85, 79, 79);width: 100%;height:100px;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h2 style="color: white;font-family: bahnschrift condensed">Super Market</h2>
        </div>
        <div style="margin-right:20px;margin" align="right">
            <?php
                session_start();
                $user = $_SESSION['user'];
                echo "<h2 style='color:white;'> Hi, ". $user . "</h2>";
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
	<div class="sidenav" style="margin-top: 100px">
		<a href="AddCustomer.php">Add a Customer</a>
		<a href="CheckStockE.php">Check Stock</a>
		<a href="SellProducts.php">Sell Products</a>
		<a href="UpdateStock.php">Add Product To Stock</a>
        <a href="LogoutPage.php">LogOut</a>
	</div>
	
	<div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="color:lightblue;font-family: bahnschrift condensed">Address : </h3>
            <p style="color: white;">
            #22/32, 16th main, 16th cross,<br> Opposite Maharaja Agarsen Hospital,<br>
            Padmanbhanagar,BSK 2nd Stage<br>
            Bengaluru - 560060  <br>  
            </p>
        </div> 
        <div style="float: left;padding-left: 80px;padding-top: 10px;">
            <h3  style="color: lightblue;font-family:bahnschrift condensed">Contact Us :</h3>
            <p style="color: white;">nandavarmukund1999@gmail.com</p>    
        </div>
	</div>
</body>
</html>
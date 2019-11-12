<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add a Customer</title>
</head>
<link rel="stylesheet" type="text/css" href="../CSS/AddCustomer.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<body style="margin:0;padding: 0px;">
    <div style="background:rgb(85, 79, 79);width: 100%;height:100px;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h2 style="color: white">Super Market</h2>
        </div>
        <div style="margin-right:20px;margin" align="right">
            <?php
          
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

	<div class="sidenav" style="margin-top: 100px;">
		<a class="active" href="AddCustomer.php">Add a Customer</a>
		<a href="CheckStockE.php">Check Stock</a>
		<a href="SellProducts.php">Sell Products</a>
		<a href="UpdateStock.php">Add Product To Stock</a>
	    <a href="LogoutPage.php">LogOut</a>
	</div>
	<div style="margin-left: 350px">
        <form  action="AddCust.php" method="POST">
            <fieldset style="margin-right: 500px;border-radius: 5px;border-style: outset;">
                <legend style="font-size: 30px;color:   ">Add Customer</legend>
            <input type="text" name="Name" placeholder="Name" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <br>
            <input type="email" name="Emailid" placeholder="Email-Id" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px">
            <br>
            <input type="text" name="Age"  placeholder="Age" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px">
            <br>
            <input type="number" name="PhoneNo" placeholder="Phone Number" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <br>
            <input type="submit" value="Add Customer"  class = "button" style="margin-top: 8px;margin-left: 100px">
        </fieldset>
        </form>
    </div>
    <div style="margin-left: 400px;">
    <?php
    if (isset($_GET["status"])) {
        $code = $_GET["status"];
        if($code == "added")
            echo "<h2 style = 'color:blue'>Customer Is Added.<br>Thank You For Join Us.</h2> ";
        else
            echo "<h2>Failed To Add Customer</h2>";
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
	</div>
</body>
</html>
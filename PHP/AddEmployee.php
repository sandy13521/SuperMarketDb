<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
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
		<a href="AddEmployee.php" class="active">Add a Employee</a>
		<a href="RateEmp.php">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
        <a href="Progress.php">SuperMarket Progress</a>
        <a href="LogoutPage.php">Logout</a>
	</div>
    <div style="background-color: lightgreen;width:300px;height: auto;border-radius: 5px;margin-left: 40%;margin-top: 40px;padding: 16px" align="center">
    <h2 align="center" style="margin-top:15px">Fill The Form</h2>
	<form action="../PHP/AddEmp.php" method="POST" align = "center">
		<input type="text" name="Name" placeholder="Name" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" required="must"><br>
		<input type="text" name="Id"  placeholder="Id" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" required="must"><br>
		<input type="text" name="Phone" placeholder="Phone Number"style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" required="must"><br>
		<input type="text" name="Username"  placeholder="Username" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" required="must"><br>
		<input type="text" name="Password"  placeholder="Password" style="padding: 8px;border-radius: 5px;border-width: 1px;margin-bottom: 15px;width: 200px" required="must"><br>
		<input type="submit" name="Add Employee" style="padding: 10px;border-radius: 5px;border-width: 1px;margin-top: 30px;widows: 250px;height: 40px;background-color: red;color: white;font-style: bold;font-family: sans-serif;"><br>
	</form>
    <?php
        if (isset($_GET["insertion"])){
            $code = $_GET["insertion"];
            if($code == "unsuccessful"){
                echo "<h3> Invalid Insertion.</h3>";
            }
            else{
                echo "<h3> Employee Inserted Successfully</h3>";
            }
        }

    ?>
	</div>
	<div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position:absolute;float: left;" >
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
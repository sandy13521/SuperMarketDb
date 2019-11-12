<?php
	require_once('Connection.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Stock</title>
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
	<style type="text/css">
	table {
  		border-collapse:separate;
  		width: 1100px;
  		margin-left: 320px;
  		margin-right: 16px;
  		margin-top: 16px;
  		border-right: 1px;
  		border-color: black;
  	}

  	thead{
  		background-color: white;
  	}
	td {	
		text-align: center;
	  	padding: 8px;
	  	width: auto;
	  	font-family: cursive;
	  	font-size: 20px;
	  	border-bottom: 2px solid #ddd;
	  	border-right: 1px solid #ddd;
	  	color: black;
	 }

	 th{
		border-bottom: 2px solid #ddd;	
		border-right: 1px solid #ddd;
		text-align: left;
	  	padding: 8px;
	  	position: sticky;
	  	z-index: 0;
	  	width: auto;
	  	font-family: bahnschrift;
	  	font-size: 20px;	 	
  		border-color: black;
	 }

	body{
		margin:0%;
		padding: 0%;
	}

	#header-fixed {
    position: fixed;
    top: 0px; display:none;
    background-color:white;
	}

	</style>
	<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
</head>
<body>
	<div style="background:rgb(85, 79, 79);width: 100%;height:100px;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h2 style="color: white">Super Market</h2>
        </div>
        <div style="margin-right:20px;margin" align="right">
            <?php
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
<div class="sidenav" style="margin-top: 100px;z-index: 0;">
		<a href="Place.php">Place Order</a>
		<a href="CheckStock.php" class="active">Check Stock</a>
		<a href="AddEmployee.php">Add a Employee</a>
		<a href="RateEmp.php">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
		<a href="Progress.php">SuperMarket Progress</a>
		<a href="LogoutPage.php">Log Out</a>
	</div>


<table>
    
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Stock In Source</th>
        </tr>
    
    
    	<?php
			
			$sql = "select Product_Id,Product_Name,Product_Stock from products";
			$result = $_SESSION["conn"]->query($sql);
			$rows = $result->num_rows;
			for($i=0;$i<$rows;$i++){
				$result->data_seek($i);
				$proname = $result->fetch_assoc()['Product_Name'];
				$result->data_seek($i);
				$proid = $result->fetch_assoc()['Product_Id'];
				$result->data_seek($i);
				$stock = $result->fetch_assoc()['Product_Stock'];
				echo '<tr> 
                  <td>'.$proid.'</td> 
                  <td>'.$proname.'</td> 
                  <td>'.$stock.'</td> 
              		</tr>';
			}
		?>
	
</table>

	 <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: relative;float: left;z-index: 1" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="color:lightblue;">Address : </h3>
            <p style="color: white;">
            #10, 3th main, 2th cross,<br> Opposite Laxmi Hospital,<br>
            BSK 3nd Stage<br>
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

<!DOCTYPE html>
<html>
<head>
	<title>Progress</title>
	<style type="text/css">
	table {
  		border-collapse:separate;
  		width: 1200px;
  		margin-left: 320px;
  		margin-right: 16px;
  		margin-top: 16px;
  		border-right: 1px;
  		border-color: black;
	}

	td {	
		text-align: center;
	  	padding: 8px;
	  	width: auto;
	  	font-family: cursive;
	  	font-size: 20px;
	  	border-bottom: 2px solid #ddd;
	  	border-right: 1px solid #ddd;
	 }

	 th{
		border-bottom: 2px solid #ddd;	
		border-right: 1px solid #ddd;
		text-align: left;
	  	padding: 8px;
	  	width: auto;
	  	font-family: bahnschrift;
	  	font-size: 20px;	 	
  		border-color: black;
	 }

	tr:nth-child(even) {
	  
	  color: black;
	}

	tr:nth-child(odd) {
	  
	  color: black;
	}

	body{
		margin:0%;
		padding: 0%;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
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
                echo "<h2 style='color:white;font-family: bahnschrift condensed'> Hi, ". $user . "</h2>";
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
<div class="sidenav" style="z-index: 0;margin-top: 100px">
		<a href="Place.php">Place Order</a>
		<a href="CheckStock.php">Check Stock</a>
		<a href="AddEmployee.php">Add a Employee</a>
		<a href="RateEmp.php">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
		<a href="Progress.php">SuperMarket Progress</a>
		<a href="LogoutPage.php">Log Out</a>
	</div>

	<table>
		<tr>
			<th><a href="#" style="text-decoration: none;color: gray;">Product Id</a></th>
			<th><a href="#" style="text-decoration: none;color: gray">Product Name</a></th>
			<th><a href="#" style="text-decoration: none;color: gray">Quantity</a></th>
			<th><a href="#" style="text-decoration: none;color: gray">Purchase Amount</a></th>
		</tr>
		<tr style="">
			<?php
				require_once('Connection.php');
				$sql = " select SUM(Purchase_Amt),Product_Id,Sum(Quantity) from sold GROUP by Product_Id ORDER by Quantity";
				$result = $_SESSION["conn"]->query($sql);
				$rows = $result->num_rows;
				for ($i=0; $i < $rows; $i++) { 
					$result->data_seek($i);
					$amount = $result->fetch_assoc()['SUM(Purchase_Amt)'];
					$result->data_seek($i);
					$proid = $result->fetch_assoc()['Product_Id'];
					$sqlp = "select Product_Name from products where Product_Id='$proid'";
					$resultp = $_SESSION["conn"]->query($sqlp);
					$name = $resultp->fetch_assoc()['Product_Name'];
					$result->data_seek($i);
					$quant = $result->fetch_assoc()['Sum(Quantity)'];
					echo '<tr> 
                  <td>'.$proid.'</td> 
                  <td>'.$name . '</td>	
                  <td>'.$quant.'</td> 
                  <td>'.$amount.'</td> 
              </tr>';
				}
			?>
		</tr>
	</table>	
	 <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;z-index: 1" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="color:lightblue;font-family: bahnschrift condensed">Address : </h3>
            <p style="color: white;">
            #10, 3th main, 2th cross,<br> Opposite Laxmi Hospital,<br>
            BSK 3nd Stage<br>
            Bengaluru - 560060  <br>  
            </p>
        </div> 
        <div style="float: left;padding-left: 80px;padding-top: 10px;">
            <h3  style="color: lightblue;font-family: bahnschrift condensed">Contact Us :</h3>
            <p style="color: white;">nandavarmukund1999@gmail.com</p>    
        </div>
    </div>
</body>
</html>
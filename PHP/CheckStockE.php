<?php
require_once('Connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stock</title>
	<style type="text/css">
	table {
  		font-family: arial, sans-serif;
  		border-collapse: collapse;
  		width: 1200px;
  		margin-left: 300px;
  		margin-right: 16px;
  		margin-top: 16px
	}

	td, th {
  		border: 1px solid #4CAF50;
		text-align: center;
	  	padding: 8px;
	  	width: auto;
	}

	tr:nth-child(even) {
	  background-color: #4CAF50;
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
<div class="sidenav" style="z-index: 0;margin-top: 100px">
		<a href="AddCustomer.php">Add Customer</a>
		<a href="CheckStockE.php" class="active">Check Stock</a>
		<a href="SellProducts.php">Sell Products</a>
		<a href="UpdateStock.php">Add Product To Stock</a>
        <a href="LogoutPage.php">LogOut</a>
	</div>
	<table>
		<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Stock In Store</th>
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
	 <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;z-index: 1" >
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
<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>
	<link href="../CSS/AdminPage.css" rel="stylesheet">
	<style type="text/css">
	body {
		background-color: white;
		margin: 0%;
		padding: 0%;
		margin-top: -20px;
	}
</style>
<link rel="stylesheet" type="text/css" href="../CSS/Placeorder.css">
<link rel="stylesheet" type="text/css" href="../CSS/SellProducts.css">
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
	<div class="sidenav" style="margin-top: 120px">
		<a href="Place.php" class="active">Place Order</a>
		<a href="CheckStock.php">Check Stock</a>
		<a href="AddEmployee.php">Add a Employee</a>
		<a href="RateEmp.php">Rate a Employee</a>
		<a href="RemoveEmployee.php">Remove Employee</a>
    <a href="Progress.php">SuperMarket Progress</a>
		<a href="LogoutPage.php">Logout</a>
	</div>
	
	<div style="margin-left: 350px;margin-top: 100px">
        <form  action="PlaceOrder.php" method="POST" id="Order">
            <fieldset style="margin-right: 500px;border-radius: 5px;border-style: outset;width: auto;" id="box">
                <legend style="font-size: 30px;">Place Order </legend>
                <select  name="Shop"  class="dropdown">
	 					<option value="Balaji Traders">Balaji Traders</option>
	  					<option value="Shankar Stores">Shankar Stores</option>
	  					<option value="Sampath">Sampath Enterpresis</option>
	  					<option value="Gagan Watches">Gagan Watches</option>
	  					<option value="Foster Lenovo Store">Foster Lenovo Store</option>
				</select>
            	<h3 style="font-size: 15px;margin-left: 8px;">Expected Delivery Date :<input type="Date" name="date" style="margin-left:16px;padding: 8px;border-radius: 5px;border-width:1px" required="Must"><br></h3>
            	<br>
            	<input type="text" name="Product[]" placeholder="Product Name" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px">
            	<br>
            	<input type="text" name="Quantity[]"  placeholder="Quantity" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px">
            <input type="button" name="Add Product" onclick="createProductField()" id="AddPro" value="Add Product" class="add">
            <br>
            </fieldset>
        	<div style="margin-top: 16px;">
         		<input type="submit" value="Place Order"  class = "button"  style="margin-top: 8px;margin-left: 100px">
         	</div>
        </form>
    </div>
    <div align="center" style="width: auto;height: auto;">
	 <?php
        if (isset($_GET["order"])){
            $code = $_GET["order"];
            if($code == "success"){
               	echo "<h2>Order Is Successfully Placed</h2>";  		
            }
            else{
            	echo "<h2>Order Unsuccessful</h2>";
            }
        }
    ?>
	</div>
	<script type="text/javascript">
		function createProductField() {
		var field= document.getElementById('box');
  		var pro = document.createElement('input');
  		var quant = document.createElement('input');
  		var br = document.createElement('br');
  		var but = document.getElementById("AddPro");
  		but.parentNode.removeChild(but);
  		var newbie = document.createElement('input');
  		newbie.type = 'button';
  		newbie.onclick = createProductField;
  		newbie.value = "Add Product";
  		newbie.id = "AddPro";
  		newbie.style = "border-radius: 5px;border-width: 0px;background-color: #F8AF41;padding: 8px;margin-left: 8px;";
  		pro.type = 'text';
  		pro.name = "Product[]";
  		pro.style = "padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px";
  		pro.placeholder = "Product Name";
  		quant.type = 'text';
  		quant.name = "Quantity[]";
  		quant.style = "padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px";
  		quant.placeholder = "Quantity";
  		field.appendChild(pro);
  		field.appendChild(quant);
  		field.appendChild(newbie);
  		field.appendChild(br);
  		return quant;
  		return pro;
  		
	}
	</script>
	
	<div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0;position: relative;float: left;margin-top: 80px" >
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
</html
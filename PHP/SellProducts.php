<!DOCTYPE html>
<html>
<head>
	<title>Sell Products</title>
	<link rel="stylesheet" type="text/css" href="../CSS/SellProducts.css">
</head>
<body style="margin: 0%;padding: 0%;">
	<div style="background:rgb(85, 79, 79);width: 100%;height:100px;position: fixed;top:0px;z-index: 1;float: right;">
        <div align="center" style="width: auto">
            <h2 style="color: white">Super Market</h2>
        </div>
        <div style="margin-right:20px;margin" align="right">
            <?php
            session_start();
                $user = $_SESSION['user'];
                echo "<h2 style='color:white;'> Hi, ". $user . "</h2>";
              ?>
        </div>
    </div>	
	<div class="sidenav" style="margin-top: 100px">
		<a href="AddCustomer.php">Add a Customer</a>
		<a href="CheckStockE.php">Check Stock</a>
		<a class = "active" href="SellProducts.php">Sell Products</a>
		<a href="UpdateStock.php">Add Product To Stock</a>
        <a href="LogoutPage.php">LogOut</a>
	</div>
	<div style="margin-left: 250px">
		<div align="center">
			<h2>Check Out</h2>
		</div>
		<hr style="border-width: 2px;">
		<div>
			
		</div>
	</div>
	<div style="margin-left: 350px;margin-top: 100px">
        <form  action="SellPro.php" method="POST" id="Order">
            <fieldset style="margin-right: 500px;border-radius: 5px;border-style: outset;width: auto;" id="box">
            <legend style="font-size: 30px;">Order </legend>
            <input type="text" name="Cust_id" placeholder="Customer Id" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <br>
            <input type="text" name="Product[]" placeholder="Product Name" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <br>
            <input type="text" name="Quantity[]"  placeholder="Quantity" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <input type="button" name="Add Product" onclick="createProductField()" id="AddPro" value="Add Product" class="add" >
            <br>
            </fieldset>
        	<div style="margin-top: 16px;">
         		<input type="submit" value="Sell Product"  class = "button"  style="margin-top: 8px;margin-left: 100px">
         	</div>
        </form>
    </div>

    <div style="margin-left: 350px;margin-top: 50px;">
    <?php
    	if(isset($_GET["sell"]) and isset($_GET["amount"])){
    		$code = $_GET["sell"];
            $price = $_GET["amount"];
    		if($code == "success")
    			echo "<h2 style='color:red;'>Order Is Placed and Amount To be Paid Is -- Rs. ". $price." <br> Thank You For Shopping With Us.</h2>";
    		elseif($code == "failed")
    			echo "<h2>Unable to Dispense Requested Products</h2>";
    		else{
    			echo "<h2>Stock Not Available. Try Reducing The Quantity Or Try Some Other Time.</h2>";
    		}
    	}
    ?>
   </div>
    <script type="text/javascript">
		function createProductField() {
			var field = document.getElementById('Box');
	  		var pro = document.createElement('input');
	  		var quant = document.createElement('input');
	  		var br = document.createElement('br');
	  		var but = document.getElementById("AddPro");
	  		
	  		var newbie = document.createElement('input');
	  		newbie.type = 'button';
	  		newbie.onclick = createProductField;
	  		newbie.value = "Add Product";
	  		newbie.style = "border-radius: 5px;border-width: 0px;background-color: #F8AF41;padding:8px;margin-left:8px;";
	  		newbie.id = "AddPro";
	  		pro.type = 'text';
	  		pro.name = "Product[]";
	  		pro.style = "padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px";
	  		pro.placeholder = "Product Name";
	  		but.parentNode.appendChild(pro);
	  		but.parentNode.removeChild(but);
	  		quant.type = 'text';
	  		quant.name = "Quantity[]";
	  		quant.style = "padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px";
	  		quant.placeholder = "Quantity";
	  		pro.parentNode.appendChild(br);
	  		pro.parentNode.appendChild(quant);
	  		pro.parentNode.appendChild(newbie);
	  		
	  		return quant;
  			return pro;
	  		return br;
		}
	</script>

    <footer style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: relative;float: left;margin-top: 170px;" >
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
	</footer>
</body>
</html>
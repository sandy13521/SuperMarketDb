<!DOCTYPE html>
<html>
<head>
	<title>Update Stock</title>
</head>
<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
<body style="padding: :0px;margin: 0px;">
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
		<a href="SellProducts.php">Sell Products</a>
		<a class ="active" href="UpdateStock.php">Add Product To Stock</a>
    <a href="../HTML/LoginPage.html">LogOut</a>
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
        <form  action="UpdateS.php" method="POST" id="Order">
            <fieldset style="margin-right: 500px;border-radius: 5px;border-style: outset;" id="box">
            <legend style="font-size: 30px;">Update Stock </legend>
            <input type="text" name="Product[]" placeholder="Product Name" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <br>
            <input type="number" name="Quantity[]"  placeholder="Quantity" style="padding: 8px;border-radius: 5px;border-width: 1px;margin: 8px;width: 400px" required="must">
            <input type="button" class="add" name="Add Product" onclick="createProductField()" id="AddPro" value="Add Product" >
            <br>
        	</fieldset>
        	<div>
           	<input type="submit" value="Update Stock"  class = "button" style="margin-top: 8px;margin-left: 100px;background-color: lightblue;color: black;border-width: 0px;">
           	</div>
        </form>
    </div>
    <div style="margin-left: 350px;">
    <?php
    	if(isset($_GET["update"])){
    		$code = $_GET["update"];
    		if($code == "success")
    			echo "<h2>Stock Is Successfully Updated</h2>";
    		else
    			echo "<h2>Unable To Update Stock</h2>";
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
  		pro.required="must"
  		quant.type = 'number';
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



    <footer style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;" >
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
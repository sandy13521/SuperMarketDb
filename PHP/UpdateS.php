<?php
	if(require_once('Connection.php')){
		$pro = $_POST["Product"];
		$quant = $_POST["Quantity"];
		for ($i=0; $i < count($pro); $i++) { 
			$sql = "select Product_Stock from products where Product_Name = '$pro[$i]'";
			$result = $_SESSION["conn"]->query($sql);
			$row = $result->fetch_Assoc()['Product_Stock'];
			$value = $quant[$i] + $row ; 
			$sql1 = "UPDATE products SET Product_Stock= '$value' where Product_Name = '$pro[$i]'";
			$result1 = $_SESSION["conn"]->query($sql1);	
		}
		if($result1){
				header("Location: UpdateStock.php?update=success");
			}
			else{
				header("Location: UpdateStock.php?update=failed");
			}
	}
	else{
		echo "Failed to Establish Connection With The Database";
	}
?>

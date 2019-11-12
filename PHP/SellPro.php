<?php
	if(require_once('Connection.php')){
		$pro = $_POST["Product"];
		$quant = $_POST["Quantity"];
		$Cust_Id=$_POST["Cust_id"];
		$user = $_SESSION["user"];
		$amount = 0;
		for ($i=0; $i < count($pro); $i++) { 
			$sql = "select Product_Stock from products where Product_Name = '$pro[$i]'";
			$result = $_SESSION["conn"]->query($sql);
			$row = $result->fetch_Assoc()['Product_Stock'];
			$value = $row - $quant[$i] ;
			
			$sqlp1 = "select Product_Id from products where Product_Name = '$pro[$i]'";
			$resultp1 = $_SESSION["conn"]->query($sqlp1);
			$rowp1 = $resultp1->fetch_Assoc()['Product_Id'];

			$sqlp = "select Product_Price from products where Product_Id = '$rowp1'";
			$resultp = $_SESSION["conn"]->query($sqlp);
			$rowp = $resultp->fetch_Assoc()['Product_Price'] * $quant[$i];

			$sqle = "select Emp_Id from employee where Username = '$user'";
			$resulte = $_SESSION["conn"]->query($sqle);
			$rowe = $resulte->fetch_assoc()['Emp_Id'];	

			$amount = $amount + $rowp ; 

			echo $Cust_Id . "<br>";
			echo $rowp1 ."<br>";
			echo $rowp	 . "<br>";
			echo $rowe . "<br>";
			
			if($value < 0){
				 header("Location: SellProducts.php?sell=quantity");
				
			}
			else{
				$sql1 = "UPDATE products SET Product_Stock= '$value' where Product_Name = '$pro[$i]'";
				$result1 = $_SESSION["conn"]->query($sql1);	

				$sql2 = "INSERT into sold (	`Cust_Id`,`Product_Id`,`Purchase_Amt`,`Emp_Id`,`Quantity`) values ('$Cust_Id','$rowp1','$rowp','$rowe','$quant[$i]')";
				$result2 = $_SESSION["conn"]->query($sql2);	
			}
		}
		if($result1 and $result2){
			header("Location: SellProducts.php?sell=success&amount=$amount");
		}
		else{
			header("Location: SellProducts.php?sell=failed");
		}
	}
	else{
		echo "Failed to Establish Connection With The Database";
	}
?>

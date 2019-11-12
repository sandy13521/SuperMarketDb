
<?php  
	//session_start();
if(require_once('Connection.php')){
	$pro = $_POST["Product"];
	$quant = $_POST["Quantity"];
	$date = $_POST["date"];
	$shop = $_POST["Shop"];
	
	for ($i=0; $i < count($pro); $i++) { 
		$sql = "select Product_Id from products where Product_Name = '$pro[$i]' ";
		$result = $_SESSION["conn"]->query($sql);
		$result->data_seek($i);
		$proid = $result->fetch_assoc()['Product_Id'];
		echo $proid ."<br>". $quant[$i] ."<br>". $shop ."<br>". $date ;
		$sql1 = "INSERT into placedorder (ProductId,PartnerStoreName,QuantityOrdered,ExpectedDate) values('$proid','$shop','$quant[$i]','$date')";
		$result1 = $_SESSION["conn"]->query($sql1);
	}
	if($result1)
		header("Location: Place.php?order=success");
	else
		header("Location: Place.php?order=failed");
}
else{
	echo "Connection failed";
}

	// INSERT INTO placedorder (ProductId, PartnerStoreName, QuantityOrdered, ExpectedDate) VALUES ('$proid','$shop',$quant[$i]','$date')"
?>

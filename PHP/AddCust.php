<?php
    require_once('Connection.php');
    $Name = $_POST["Name"];
    $Email = $_POST["Emailid"];
    $age = $_POST["Age"];
    $phone = $_POST["PhoneNo"];

    $sql = "INSERT INTO customer (Cust_Name,Cust_phone) value ('$Name','$phone')";
    $result = $_SESSION["conn"]->query($sql);
    echo "hll";
    if($result)
        header("Location: AddCustomer.php?status=added");
    else
        header("Location: AddCustomer.php?status=failed");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<style type="text/css">
	body{
		margin: 0%;
		padding: 0%;
	}
</style>
<body>
 	<div style="background:rgb(85, 79, 79);width: 100%;height:auto;position: fixed;top:0px;display: inline;z-index: 1" align:"center">
        <div>
            <h2 style="color: white;padding: 20px;" align ="center">Super Market</h2>
        </div>
  	</div>
    <?php
        require_once('Connection.php');
        
    ?>
  	
    <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;" >
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
</html>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link href="F:\dbms project\Supermarket Database\CSS\Adminlogin.css" rel="stylesheet">
    <style type="text/css">
          body {
            background-image: url('../Assets/back.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            margin: 0%;
            padding: 0%;
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <div style="background:rgb(85, 79, 79);width: 100%;height:auto;position: fixed;top:0px;display: inline;" align:"center">
        <div>
            <h1 style="color: white;padding: 20px;font-family: bahnschrift condensed" align ="center">SuperMarket</h1>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="center" style="margin-top: 100px;background-color:rgb(237,26,37,0.5);width: 500px;height: 300px;margin-left: 510px;border-radius: 5px;border-width: 1px">
        <h1 style="text-align: center;color:blue; padding-top: 16px;font-family: bahnschrift condensed ">Admin Login</h1>
    
        <form action="LoginVer.php" autocomplete="off" method="POST">
            <input type="text" name="username" placeholder="Username" class="input" style="width: 250px;height: 30px;border-radius: 5px;border-width: 0px;padding: 8px" required="Fill This Must">
            <br><br>

            <input type="password"  name="password" placeholder="Password" class="input" style="width: 250px;height: 30px;border-width: 0px;border-radius:5px;padding: 8px" required="Fill This Must">
            <br><br>

            <button type="submit" class="button" style="width: 200px;height: 40px;background-color: red;border-radius: 5px;color: white;border-width: 0px;font-family: cursive;font-size: 20px">Sign In</button>
        </form>
    
    </div>
    <div align="center" style="width:auto;height: auto;padding:10px;margin-top:20px;margin-left: 400px;margin-right: 400px">
        <?php
            if (isset($_GET["status"])){
            $code = $_GET["status"];
            if($code == "invalid"){
                echo "<h3>Invalid Username or Password. Please Try Again.</h3>";
            }
        }
    ?>
    </div>

    <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="color:lightblue;font-family: bahnschrift condensed">Address : </h3>
            <p style="color: white;">
            #22/32, 16th main, 16th cross,<br> Opposite Maharaja Agarsen Hospital,<br>
            Padmanbhanagar,BSK 2nd Stage<br>
            Bengaluru - 560060  <br>  
            </p>
        </div> 
        <div style="float: left;padding-left: 80px;padding-top: 10px;">
            <h3  style="color: lightblue;font-family: bahnschrift condensed;font">Contact Us :</h3>
            <p style="color: white;">nandavarmukund1999@gmail.com</p>    
        </div>
    
</body>
</html>
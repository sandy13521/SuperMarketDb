<!DOCTYPE html>
<html>

<head>
    <title>Employee Login</title>
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
            <h1 style="color: white;padding: 20px;font-family: bahnschrift condensed"" align ="center">Super Market</h1>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="center" style="margin-top: 100px;background-color:rgb(105, 245, 66,0.5);width: 500px;height: 300px;margin-left: 510px;border-radius: 5px;border-width: 1px">
        <h1 style="text-align: center;color: blue ;padding-top: 16px;">Employee Login</h1>
        <form action="LoginVerE.php" autocomplete="off" method="POST">
            <input type="text" name="username" placeholder="Username" class="input" style="width: 250px;height: 30px;border-radius: 5px;border-width: 0px;padding: 8px"  required="Fill This Must">
            <br><br>
            <input type="password"  name="password" placeholder="Password" class="input" style="width: 250px;height: 30px;border-width: 0px;border-radius: 5px;padding: 8px"  required="Fill This Must">
            <br><br>
            <button type="submit" class="button" style="width: 200px;height: 40px;background-color: lightblue ;border-radius: 5px;color:black;border-width: 0px;font-family: cursive;font-size: 20px">Sign In</button>
        </form>
    </div>
    <div align = "center">
    <?php
        if (isset($_GET["status"])){
            $code = $_GET["status"];
            if($code == "invalid"){
                echo "<h2 style='color:blue'> Invalid Username or Password . Please Try Again. </h2>";
            }
        }
    ?>
    </div>

    <div style="background:rgb(85, 79, 79);width: 100%;height:auto;bottom: 0px;position: absolute;float: left;display: inline;" >
        <div style="position: relative;float: left;padding-left: 50px;padding-top: 10px;">
            <h3 style="font-family: bahnschrift;color:lightblue;">Address : </h3>
            <p style="color: white;">
            #22/32, 16th main, 16th cross,<br> Opposite Maharaja Agarsen Hospital,<br>
            Padmanbhanagar,BSK 2nd Stage<br>
            Bengaluru - 560060  <br>  
            </p>
        </div> 
        <div style="float: left;padding-left: 80px;padding-top: 10px;">
            <h3  style="color: lightblue;font-family: bahnschrift">Contact Us :</h3>
            <p style="color: white;">nandavarmukund1999@gmail.com</p>    
        </div>
    </div>
</body>
</html>
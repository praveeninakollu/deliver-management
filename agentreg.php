<?php 
include "cnct.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $loc=$_POST['locale'];
        $qry = "INSERT INTO `agent` ( `agent_usrname`, `agent_email`, `password`,`locale`) VALUES ('$name', '$email', '$pass','$loc')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>BoltDeliveries</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        <div class="header">
            <?php include "header.php"?>   
        </div>
        <div class="content">
            <div class="disp">
                <h2>AgentRegistration</h2>
                <form class="form" method="post" action="">
                Name<input type="text" name="name">
                Email<input type="text" name="email">
                Password<input type="password" name="pass">
                Locality:<input type="text" name="locale">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            <p class="footer">&#169; 2017 BoltDeliveries &#9889;</p>
        </div>
    </body>  
</html>
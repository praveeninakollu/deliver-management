<?php 
include "cnct.php";
session_start();
    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $var=$_POST['field'];
        if($var=='agent'){
            $_SESSION['type']=1;
            $qry1="SELECT * FROM `agent` WHERE `agent_email`='$email' AND `password`='$pass'";
            $res=mysqli_query($conn,$qry1) or die("Connection failed: " . mysqli_error());
        }
        if($var=='customer'){
            $_SESSION['type']=2;
            $qry2="SELECT * FROM `delivery` WHERE `del_email`='$email' AND `password`='$pass'";
            $res=mysqli_query($conn,$qry2) or die("Connection failed: " . mysqli_error());
        }
        if(mysqli_num_rows($res)>0) {
            if($var=='agent')
                header('location:agent.php');
            if($var=='customer')
                header('location:cust.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>BoltDeliveries</title>
            <link rel="stylesheet" href="proj.css">
    </head>   
    <body>
        <div class="header">
           <?php include "header.php"?>
        </div>
        <div class="content">
            <div class="disp">
                <h2>Login</h2>
                <h4 style:"border:1px solid red;"> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="">
                Email<input type="text" name="email">
                Password<input type="password" name="pass">
                I am a<br/> 
                <input type="radio" name="field" value="agent">Agent
                <input type="radio" name="field" value="customer">Customer
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            <p class="footer">&#169; 2017 BoltDeliveries &#9889;</p>
        </div>
    </body>  
</html>
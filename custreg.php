<?php
include "cnct.php";
session_start();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$qry="INSERT INTO `delivery` (`del_usrname`,`del_email`,`password`) VALUES ('$name','$email','$password')";
	mysqli_query($conn,$qry) or die("Connection failed: " .mysqli_error());
	header('location:login.php');
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
                <h2>CustomerRegistration</h2>
                <form class="form" method="post" action="">
					Name<input type="text" name="name">
					Email<input type="text" name="email">
					Password<input type="password" name="password">
					<input type="submit" name="sub" value="Click to Submit">
            	</form>
            </div> 
            <p class="footer">&#169; 2017 BoltDeliveries &#9889;</p>
        </div>
    </body>  
</html>
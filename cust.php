<?php 
include "cnct.php";
if(isset($_POST['sub'])) {
        $dd=$_POST['dd'];
        $pro=$_POST['pro'];
        $dest=$_POST['dest'];
        $loc=$_POST['locale'];
        $res = "SELECT locale FROM agent WHERE locale = $loc";
        if($res==$loc)  echo "1";
        $qry = "INSERT INTO `deldetails` ( `delivery_date`, `products`, `dest`,`locality`) VALUES ('$dd', '$pro', '$dest','$loc')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
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
                <h2>DeliveryDetalis</h2>
                <form class="form" method="post" action="">
                DeliveryDate: <input type="date" name="dd">
                Products: <textarea name="pro" rows="10" cols="30"></textarea>
                Destination: <input type="text" name="dest">
                Locality: <input type="text" name="locale">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
            <p class="footer">&#169; 2017 BoltDeliveries &#9889;</p>
        </div>
    </body>  
</html>
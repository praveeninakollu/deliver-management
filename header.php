<h1>Bolt Deliveries</h1>
<div class="nav">
    <ul>
        <li><a href="home.html">Home</a></li>
        <?php if(!isset($_SESSION['email'])) {    ?>
        <li><a href="agentreg.php">AgentRegistration</a></li>
        <li><a href="custreg.php">CustomerRegistration</a></li>
        <li><a href="login.php">Login</a></li>
        <?php  } ?>
        <?php if(isset($_SESSION['email'])) {    ?>
        <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
    </ul>
</div>
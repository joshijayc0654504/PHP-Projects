<?php 
session_start();

if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
	echo "User added successfully.";
}
?>
<div id="header1">
          <div id="h1"> <font size="+6" color="#fff">Payment Mode</font>
    <div id="login">
              <?php /*
echo "<pre>";
print_r($_SESSION);*/
if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
?>
              Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> ||
              <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 1){
?>
              <a href="signinupdate.php">Profile</a> || <a href="main.php">Home</a> || <a href="cart.php"><img src="images/cart.png" title="Your Cart"/> </a>
              <h2>Pay Online and Get 25% Discount </h2>
              <?php }else{ ?>
              <a href="premiumuserupdate.php">Profile</a> || <a href="main.php">Home</a> || <a href="cart.php"><img src="images/cart.png" title="Your Cart"/> </a>
              <h2>Pay Online and Get 25% Discount</h2>
              <?php } ?>
              <?php }else{ ?>
              <a class='inline' href="#inline_content">Login</a> | <a href="usertypesignup.php">Signup</a><br />
              
              <br />
              <?php } ?>
            </div>
  </div>
        </div>
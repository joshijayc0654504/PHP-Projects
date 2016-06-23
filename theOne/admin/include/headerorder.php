<?php 
session_start();

if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
	echo "User added successfully.";
}
?>
<div id="header1">
          <div id="h1"> <font size="+6" color="#fff">Order</font>
    <div id="login">
              <?php /*
echo "<pre>";
print_r($_SESSION);*/
if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
?>
              Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> 
              <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 1){
?>
              
              <h2>Order Cart </h2>
              <?php }else{ ?>
              
              <h2>Order Cart </h2>
              <?php } ?>
              <?php }else{ ?>
             
              
              <br />
              <?php } ?>
            </div>
  </div>
        </div>
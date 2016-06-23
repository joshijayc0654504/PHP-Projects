<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contain</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body><?php 
session_start();

if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
	echo "User added successfully.";
}
?>
<?php 
if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
?>
Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> || 
<?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 1){
?>
<a href="signinupdate.php">Profile</a>
<?php }else{ ?>
<a href="premiumuserupdate.php">Profile</a>
<?php } ?>
<?php }else{ ?>

<a href="login.php">Login</a> | <a href="usertypesignup.php">Signup</a>

<?php } ?>

<div class="container"> 
	<div id="header"> </div>
   
    <div id="content">
    	
        	<div id="content-left" ><?php include_once("include/left.php");?></div>
            
      		
       
     
         <div id="content-right">Post Your Projects here...</div>
        
</div>    
<div id="footer" >Footer </div>
    
</div>
</body>
</html>
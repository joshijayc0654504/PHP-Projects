<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/signval.js" type="text/javascript"> </script>
</head>

<body>
<?php 
session_start();
if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'exist'){
	echo "Username/Email already exist.";
}
?>

<form action="signinsave.php" method="post" name="form" enctype="multipart/form-data">
<div id="container1">
<div id="Reg">
<font size="+3" color="#005387"><b>Simple User Sign Up Form</b></font><br/><br />
</div>
<br />
<font size="+2" color="#03a712"><b>For New User</b></font><br />
-----------------------
<div  id="field" >
<input type="hidden" name="uid" value="<?php echo $data['uid']?>" />
<label>First Name:</label><input class="inputbox" type="text" name="fname" id="fname" value=""/><span class="Red" id="First_Error"></span>
</div>

<div  id="field" >

<label>Last Name:</label><input class="inputbox" type="text" name="lname" id="lname" value=""/><span class="Red" id="Last_Error"></span><br/>
</div>
<div  id="field" >

<label>Email:</label><input class="inputbox" type="text" name="email" id="email" value=""/><span class="Red" id="Email_Error"></span><br/>
</div>

<div  id="field" >

<label>Password:</label><input class="inputbox" type="password" name="password" id="password" value=""/><span class="Red" id="Password_Error"></span><br/>
</div>
<div  id="field" >

<label>Confirm Password:</label><input class="inputbox" type="password" name="cpassword" id="cpassword" value=""/><span class="Red" id="Password_Error"></span><br/>
</div>

</br>
---------------------------------<br />
<!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
<input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
<input type="cancle" name="Cancle" value="Cancle" class="inputbox2"/>
</form>
<br />
Click <a href="login.php"><b>here</b></a> Login for Existing User.....<br />
Click <a href="signinupdate.php"><b>here</b></a> Update the Data.....<br />
Click <a href="main.php"><b>here</b></a> Go to the Home Page.....<br />

</div>
</body>
</html>


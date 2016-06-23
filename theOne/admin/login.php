<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<body>

<form action="checklogin.php" method="post" name="form" enctype="multipart/form-data">
<div id="container">
<div id="Reg">
<font size="+3" color="#005387"><b> Login Form</b></font><br/><br />
</div>
<br />
<font size="+2" color="#03a712"><b>For Existing User</b></font><br />
-----------------------
<div  id="field" >

<label>Email/User Id:</label><input class="inputbox" type="text" name="email" id="email" value=""/>
</div>
<div id="field" >
<label>Password:</label><input class="inputbox" type="password" name="password" id="password" value=""/>
</div>
<div  id="field" >
</br>
----------------------------------<br />
<!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
<input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
<input type="reset" name="Reset" value="Reset" class="inputbox2"/>
</form>
<br />
<br/>
<a href="forgetpass.php"><b>Forget Password???</b></a><br/><br />
Click <a href="usertypesignup.php"><b>here</b></a> for New User Sign In.....<br />
Click <a href="main.php"><b>here</b></a> Go to the Home Page.....<br />
</div>
<br/>
<?php session_start();
if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'wrong'){
	echo "User doesn't exist or user is not active.";
}

?>
</body>
</html>

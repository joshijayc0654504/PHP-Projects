<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save Premium User</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<pre>
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

echo "Database selection successfully.";

$email=$_REQUEST['$email'];
print_r($_POST);

$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$photo = $_FILES['photo'];

move_uploaded_file($photo['tmp_name'],"images/".$photo['name']);
$photoname = $photo['name'];

$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$password=$_REQUEST['password'];
$occupation=$_REQUEST['occupation'];
$experience=$_REQUEST['experience'];
$basicskillset=$_REQUEST['basicskillset'];

/*$cpassword=$_REQUEST['cpassword'];*/


$query = "UPDATE user SET fname='$fname',mname='$mname',lname='$lname',gender='$gender',dob='$dob',photo='$photoname',email='$email',phone='$phone',address='$address',city='$city',state='$state',country='$country',password='$password',occupation='$occupation',experience='$experience',basicskillset='basicskillset' WHERE email='$email' ";

$queryExec = mysql_query($query) or die("Error in Query execution : ".mysql_error());

echo "Data updated successfully.";
echo '<script language="javascript">window.location="main.php"</script>';
?>

CLick <a href="signin.php">Here</a> to go Sign Up Page.......

</body>
</html>
<pre>
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

echo "Database selection successfully.";

print_r($_REQUEST);

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
/*$cpassword=$_REQUEST['cpassword'];*/
$sql="SELECT fname,lname,email FROM user  WHERE email like '$email'";
$exec = mysql_query($sql);
$data = mysql_fetch_assoc($exec);
print_r($data);
if($data['email'] != ''){
	echo "This User Email is already Existed....Sorry Sign Up again";
}
else{

$query = "INSERT INTO user (fname,lname,email,password,created,status,utype) VALUES ('$fname','$lname','$email' ,'$password',now(),1,1)";
$queryExec = mysql_query($query) or die("Error in Query execution : ".mysql_error());

echo "Data inserted successfully.";
echo '<script language="javascript">window.location="main.php"</script>';
}
?>

CLick <a href="signin.php">Here</a> to go Sign In Page.......

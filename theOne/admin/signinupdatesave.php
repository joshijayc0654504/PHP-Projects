<pre>
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

echo "Database selection successfully.";
$email=$_REQUEST['email'];
print_r($_POST);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
/*$cpassword=$_REQUEST['cpassword'];*/
/*$sql="SELECT fname,lname,email,password FROM user WHERE email like '$email'";
$exec = mysql_query($sql);
$data = mysql_fetch_assoc($exec);
print_r($data);
*/

$query = "UPDATE user SET fname='$fname',lname='$lname',password='$password' WHERE email='$email' AND utype = 1";

$queryExec = mysql_query($query) or die("Error in Query execution : ".mysql_error());

echo "Data Updated successfully.";
echo '<script language="javascript">window.location="main.php"</script>';

?>

CLick <a href="signin.php">Here</a> to go Sign In Page.......

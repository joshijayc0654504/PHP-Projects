<pre>
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());



print_r($_REQUEST);

$companyname=$_REQUEST['companyname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$country=$_REQUEST['country'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$copyright=$_REQUEST['copyright'];

$sql="SELECT * FROM setting";
$exec = mysql_query($sql);
$data = mysql_fetch_assoc($exec);
print_r($data);

$query = "update setting SET companyname='$companyname',phone='$phone',email='$email' ,address='$address',country='$country',state='$state',city='$city',copyright='$copyright'";
$queryExec = mysql_query($query) or die("Error in Query execution : ".mysql_error());

echo "Data updated successfully.";
echo '<script language="javascript">window.location="contain.php"</script>';

?>



<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

$scatid = $_REQUEST['scatid'];
$sql = "DELETE FROM subcategory WHERE scatid=".$scatid;

$query = mysql_query($sql) or die("Error in Delete:".mysql_error());


echo '<script language="javascript">window.location="addsubcat.php"</script>';
?>
<br>

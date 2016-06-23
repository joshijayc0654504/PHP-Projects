
<pre>
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());


/*print_r($_POST);*/
$catname=$_POST['catname'];
$status=$_POST['status'];

$sql = "INSERT INTO category (catname,status,created) VALUES ('$catname','$status',now())";
$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
echo '<script language="javascript">window.location="addcat.php"</script>';
?>

<form action="cat.php" method="post" enctype="multipart/form-data">
<?php
session_start();
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());


$sql = "DELETE FROM category";
$query = mysql_query($sql) or die("Error in Delete:".mysql_error());
echo "Deleted Successfully.";
?>
<br>
</form>
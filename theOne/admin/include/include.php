
<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	$catname=$_REQUEST['catname'];
	$status=$_REQUEST['status'];



	$sql = "INSERT INTO category (catname,status,created) VALUES ('$catname','$status',now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "insert succ";
	

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$catid=$_REQUEST['catid'];
	$catname=$_REQUEST['catname'];
	$status=$_REQUEST['status'];
	$sql = "UPDATE category SET catname='$catname',status='$status',modified=now() WHERE catid=$catid";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "Data updated successfully.";

}

else{
	$catid = $_REQUEST['catid'];
	$sql = "delete from category where catid = ".$catid;
	$query = mysql_query($sql) or die("Error in execution:".mysql_error());
	echo "Data deleted successfully......"; 


	}
	?>
<?php header("Location: ../addcat.php");?>
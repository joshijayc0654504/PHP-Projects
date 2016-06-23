<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());
//print_r($_REQUEST);
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	$catid=$_REQUEST['catid'];
	$scatname=$_REQUEST['scatname'];
	$status=$_REQUEST['status'];



	$sql = "INSERT INTO subcategory (catid,scatname,status,created) VALUES ('$catid','$scatname','$status',now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$scatid=$_REQUEST['scatid'];
	$catid=$_REQUEST['catid'];
	$scatname=$_REQUEST['scatname'];
	$status=$_REQUEST['status'];
	$sql = "UPDATE subcategory SET catid='$catid',scatname='$scatname',status='$status',modified=now() WHERE scatid = $scatid";
	$query = mysql_query($sql) or die("Error in update query:".mysql_error());
	echo "Data updated successfully.";
	
}

else{
	$scatid = $_REQUEST['scatid'];
	$sql = "delete from subcategory where scatid =$scatid";
	$query = mysql_query($sql) or die("Error in execution:".mysql_error());
	echo "Data deleted successfully......"; 
	

	}
	?>
	<?php header("Location: ../addsubcat.php"); ?>
<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

if($_POST['catid'])
{
	$id=$_POST['catid'];
	$sql=mysql_query("select scatid,scatname from subcategory where catid='$id'");
	
	while($row=mysql_fetch_array($sql))
	{
		$id=$row['scatid'];
		$data=$row['scatname'];
		echo '<option value="'.$id.'">'.$data.'</option>';
	
	}
}


?>

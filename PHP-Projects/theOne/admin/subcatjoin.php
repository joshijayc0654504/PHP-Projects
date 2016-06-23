<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

if($_POST['scatid'])
{
	$id=$_POST['scatid'];
	$sql=mysql_query("select catid,scatname from subcategory where catid='$id'");
	
	while($row=mysql_fetch_array($sql))
	{
		$id=$row['catid'];
		$data=$row['catname'];
		echo '<option value="'.$id.'">'.$data.'</option>';
	
	}
}

?>
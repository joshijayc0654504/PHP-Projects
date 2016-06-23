<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

if($_POST['id'])
{
	$id=$_POST['id'];
	$sql=mysql_query("select stateID,stateName from states where countryID='$id'");
	
	while($row=mysql_fetch_array($sql))
	{
		$id=$row['stateID'];
		$data=$row['stateName'];
		echo '<option value="'.$id.'">'.$data.'</option>';
	
	}
}
if($_POST['stateId'])
{
	$id=$_POST['stateId'];
	$sql=mysql_query("select cityID,cityName from cities where stateID=$id");
	
	while($row=mysql_fetch_array($sql))
	{
		$id=$row['cityID'];
		$data=$row['cityName'];
		echo '<option value="'.$id.'">'.$data.'</option>';
	
	}
}


?>

<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

print_r($_REQUEST);
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	
	
	
	$lcid=$_POST['lcid'];
	$photo = $_FILES['photo'];
	$tmpname = $photo['tmp_name'];
	$photoname = $photo['name'];
	move_uploaded_file($tmpname,"../images/".$photoname);
	$catid=$_REQUEST['catid'];
	$scatid=$_REQUEST['scatid'];
	$keyword=$_POST['keyword'];
	$type=$_POST['type'];
	
	
	
	$sql = "INSERT INTO logocreate (photo,type,catid,scatid,keyword,created,modified) VALUES ('$photoname','$type','$catid','$scatid','$keyword',now(),now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "Data inserted successfully.";

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$lcid=$_REQUEST['lcid'];
	$scatid=$_REQUEST['scatid'];
	$catid=$_REQUEST['catid'];
	$type=$_REQUEST['type'];
	$photo = $_FILES['photo'];
	$tmpname = $photo['tmp_name'];
	$photoname = $photo['name'];
	if($photoname==''){
		$photoname=$_POST['oldphoto'];
	}
	else{
		move_uploaded_file($tmpname,"../images/".$photoname);
	}
	$keyword=$_REQUEST['keyword'];
	$sql = "UPDATE logocreate SET photo='$photoname',type='$type',catid='$catid',scatid='$scatid',keyword='$keyword' WHERE lcid = $lcid";
	$query = mysql_query($sql) or die("Error in update query:".mysql_error());
	echo "Data updated successfully.";
	
}

else{
	$lcid = $_REQUEST['lcid'];
	$sql = "delete from logocreate where lcid = $lcid";
	$query = mysql_query($sql) or die("Error in execution:".mysql_error());
	echo "Data deleted successfully......"; 
	

	}
	?>
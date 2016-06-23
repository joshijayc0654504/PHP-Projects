<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

print_r($_REQUEST);
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	
	
	
	$webid=$_POST['webid'];
	$photo = $_FILES['photo'];
	$tmpname = $photo['tmp_name'];
	$photoname = $photo['name'];
	move_uploaded_file($tmpname,"../images/".$photoname);
	$catid=$_REQUEST['catid'];
	$scatid=$_REQUEST['scatid'];
	$keyword=$_POST['keyword'];
	
	
	$sql = "INSERT INTO webtemp (photo,catid,scatid,keyword,created,formated) VALUES ('$photoname','$catid','$scatid','$keyword',now(),now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "Data inserted successfully.";

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$webid=$_REQUEST['webid'];
	$scatid=$_REQUEST['scatid'];
	$catid=$_REQUEST['catid'];
	
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
	$sql = "UPDATE webtemp SET photo='$photoname',catid='$catid',scatid='$scatid',keyword='$keyword' WHERE webid = $webid";
	$query = mysql_query($sql) or die("Error in update query:".mysql_error());
	echo "Data updated successfully.";
	
}

else{
	$webid = $_REQUEST['webid'];
	$sql = "delete from webtemp where webid = $webid";
	$query = mysql_query($sql) or die("Error in execution:".mysql_error());
	echo "Data deleted successfully......"; 
	

	}
	?>
<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

print_r($_REQUEST);
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	
	
	
	$webid=$_POST['webid'];
	$catid=$_REQUEST['catid'];
	$photo = $_FILES['photo'];
	
	/*Rename of file */
	
	$extension = explode('.',$photo['name']); // Conert image name into array to get extension of file
	$ext = end($extension); // Find last element of array - which extension of file here
	$newphotoname = time()."_".str_replace(" ","","no image").".".$ext; // New name of file
	/* Rename of file */
	move_uploaded_file($photo['tmp_name'],"images/".$newphotoname);
	$photoname = $newphotoname;
	
	
	/*upload zip file starts*/
	$zip = $_FILES['zip'];
	/*Rename of file */
	
	$extensionzip = explode('.',$zip['name']); // Conert image name into array to get extension of file
	$extzip = end($extensionzip); // Find last element of array - which extension of file here
	$newzipname = time()."_".str_replace(" ","",$catid).".".$extzip; // New name of file
	/* Rename of file */
	move_uploaded_file($zip['tmp_name'],"upload/".$newzipname);
	$zipname = $newzipname;
	/*upload zip file ends*/
	
	
	$scatid=$_REQUEST['scatid'];
	$keyword=$_POST['keyword'];
	
	
	$sql = "INSERT INTO webtemp (photo,catid,scatid,keyword,zip,created) VALUES ('$photoname','$catid','$scatid','$keyword','$zipname',now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "Data inserted successfully.";

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$webid=$_REQUEST['webid'];
	$scatid=$_REQUEST['scatid'];
	$catid=$_REQUEST['catid'];
	
	$photo = $_FILES['photo'];
//print_r($_FILES);
	$newphotoname = $photo['name'];


if($newphotoname == ''){ 
	$photo=$_REQUEST['oldphoto'];
}
else{ 
	/*Rename of file */
	
	$extension = explode('.',$photo['name']); // Conert image name into array to get extension of file
	$ext = end($extension); // Find last element of array - which extension of file here
	$newphotoname = time()."_".str_replace(" ","","no image").".".$ext; // New name of file

	move_uploaded_file($photo['tmp_name'],"images/".$newphotoname);

	$photo = $newphotoname;
}
echo $photo;

	$keyword=$_REQUEST['keyword'];
	$sql = "UPDATE webtemp SET photo='$photo',catid='$catid',scatid='$scatid',keyword='$keyword',formated=now() WHERE webid = $webid";
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
	<?php header("Location: addwebtemp.php");?>
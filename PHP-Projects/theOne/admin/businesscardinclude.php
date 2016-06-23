<?php
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());

print_r($_REQUEST);
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

	
	
	
	$buid=$_POST['buid'];
	
	$photo = $_FILES['photo'];
	
	/*Rename of file */
	
	$extension = explode('.',$photo['name']); // Conert image name into array to get extension of file
	$ext = end($extension); // Find last element of array - which extension of file here
	$newphotoname = time()."_".str_replace(" ","","no image").".".$ext; // New name of file
	/* Rename of file */
	move_uploaded_file($photo['tmp_name'],"images/".$newphotoname);
	$photoname = $newphotoname;
	
	$catid=$_REQUEST['catid'];
	$scatid=$_REQUEST['scatid'];
	$keyword=$_POST['keyword'];
	$price=$_POST['price'];
	
	$sql = "INSERT INTO businesscard (photo,catid,scatid,keyword,price,created) VALUES ('$photoname','$catid','$scatid','$keyword','$price',now())";
	$query = mysql_query($sql) or die("Error in Insert query:".mysql_error());
	echo "Data inserted successfully.";

}
else if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Update')
{
	$buid=$_REQUEST['buid'];
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
	$price=$_POST['price'];
	$sql = "UPDATE businesscard SET photo='$photo',catid='$catid',scatid='$scatid',keyword='$keyword',price='$price',formated=now() WHERE buid = $buid";
	$query = mysql_query($sql) or die("Error in update query:".mysql_error());
	echo "Data updated successfully.";
	
}

else{
	$buid = $_REQUEST['buid'];
	$sql = "delete from businesscard where buid = $buid";
	$query = mysql_query($sql) or die("Error in execution:".mysql_error());
	echo "Data deleted successfully......"; 
	

	}
	?>
	<?php header("Location: addbusinesscard.php");?>
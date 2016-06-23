<?php
include_once('include/header.php');
include_once('connection.php');
print_r($_SESSION);
print_r($_POST); 
$email = $_POST['email'];
$newpassword = $_SESSION['newpassword'];
$query = "UPDATE user set password = '$newpassword',formated=now() WHERE email = '$email'";
$execute = mysql_query($query)or die("execute query in database:".mysql_error());
?>
<?php header("Location: front.php"); ?>
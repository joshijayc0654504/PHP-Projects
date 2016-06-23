<?php
session_start();
$host='localhost';
$username='root';
$password='';
$dbname='theone';

$conn=mysql_connect ($host,$username,$password) or die ("error in connection:" .mysql_error());

$db= mysql_select_db($dbname,$conn) or die ("error in database select:" .mysql_error());
$email = $_POST['email'];
$password = $_POST['password'];

$sqlcheck = "SELECT * FROM user WHERE email like '$email' AND password like '$password' AND status = '1'";
$exechk = mysql_query($sqlcheck);
$count = mysql_num_rows($exechk);
$data = mysql_fetch_assoc($exechk);
if($count == 1){
	$_SESSION['email'] = $data['email'];
	$_SESSION['utype'] = $data['utype'];
	$_SESSION['email'] = $data;
	
	echo '<script language="javascript">window.location="main.php"</script>';
}
else{
	echo '<script language="javascript">window.location="login.php?user=wrong"</script>';
	echo "*incorrect User Id/ Email or Password...Please Enter correct Id and Password....";
}

?>
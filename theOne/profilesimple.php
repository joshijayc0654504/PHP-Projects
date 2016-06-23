<?php
session_start();

if($count == 3){
	$_SESSION['utype'] = $data['utype'];
	
	echo '<script language="javascript">window.location="signinupdate.php"</script>';
}
else{
	echo '<script language="javascript">window.location="login.php?user=wrong"</script>';
}

?>
<?php
session_start();

if($count == 2){
	$_SESSION['utype'] = $data['utype'];
	
	echo '<script language="javascript">window.location="premiumuserupdate.php"</script>';
}
else{
	echo '<script language="javascript">window.location="login.php?user=wrong"</script>';
}

?>
<?php
session_start();

if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
session_destroy();
echo '<script language="javascript">window.location="home.php"</script>';
}else{ 
echo "user is not logged in.";
}?>
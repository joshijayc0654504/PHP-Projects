<?php
include_once('connection.php');
print_r($_REQUEST);


/************************/
/*** Delete DATA QUERY **/
/************************/

     $logoid = $_POST['logoid'];

      if(isset($_REQUEST['cart']) && $_REQUEST['cart'] == 'Delete'){
   
	$_SESSION['cart']['logoid']= $logoid;
	
    $delQuery = "DELETE FROM orders WHERE logoid = $logoid";
	$executeDel = mysql_query($delQuery) or die("Error in Delete Query :".mysql_error());
	print_r($_SESSION);
	}
	else
	{
	
    
    }
     
    echo "data will be deleted"

?>

<script type="text/javascript">window.location = 'cart.php';</script>








   
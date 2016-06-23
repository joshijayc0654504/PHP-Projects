<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal</title>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/lightbox-2.6.min.js"></script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once('include/headerpaymode.php');?>
<?php 
include_once('connection.php');
?>
<div id="background">
  
<div id="logo-main-left">

<?php include_once('include/payleft.php');?>
</div>

<div id="logo-main-right">
<div id="tabs-1">
    <h3>Paypal....</h3>
   		<form  enctype="multipart/form-data" method="get" action="https://www.paypal.com/in/webapps/mpp/home">
        	<input type="submit" name="paypal" value="Click here to pay using paypal"  >
            </form>
    </div>
    
   
    
     
    		
			

</div>
</div>
<div id="footer1">
    <div id="h">
    <div id="h2">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><font color="#fff"><b>&copy; 2014 by
        Online Graphics Design</b></font>
      </p>
        </div>
 
    </div>
</div>
</div>
</body>
</html>

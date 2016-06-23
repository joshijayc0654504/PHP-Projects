    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Orders</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--/*Header*/-->
        
        <?php include_once('include/headerorder.php');?>
              
        <!--/*Header End*/-->
    
    <div id="background">  
                    
                <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
           
         
             <div id="logo-main-right">Orders view Below.........<br /><br /><br />
         		

		<?php 
        include_once('connection.php');
        
        
       ?>
 
      <?php
    //$data=$_REQUEST;
    $sql = "SELECT * from orders";
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    
    while ($data=mysql_fetch_assoc($query)){?>
    
    
    
                oid:<?php echo $data['oid'];?><br />
                uid:<?php echo $data['uid'];?><br />
                logoid:<?php echo $data['logoid'];?><br />
                buid:<?php echo $data['buid'];?><br />
                broid:<?php echo $data['broid'];?><br />
                status:<?php echo $data['status'];?><br />
                paymentmode:<?php echo $data['paymentmode'];?><br />
                created:<?php echo $data['created'];?><br />
                formated:<?php echo $data['formated'];?>
      <?php }?>
      </div>
      </div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
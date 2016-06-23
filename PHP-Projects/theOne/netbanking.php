    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Net Banking</title>
    
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
    
        <h3> Pay using Net Banking...</h3>
        <div id="card">
        <?php
        $sql = "select uid from user";
        $exec = mysql_query($sql) or die("Error in sql execution:".mysql_error());
        $data = mysql_fetch_array($exec,MYSQL_ASSOC);
        //print_r($_SESSION);
        ?>
        
        
        <form action="saveorder.php" enctype="multipart/form-data" method="post">
        <input type="hidden" id="netbanking" name="paymentmode" value="netbanking" />
        <input type="hidden" id="uid" name="uid" value="<?php echo $data['uid'];?>" />
        <div  id="field" >
        <label> Choose your bank:</label>
        <select>
         <option value="0">---Select bank----</option>
            <option>State Bank Of India</option>
            <option>HDFC Bank</option>
            <option>ICICI Bank</option>
            <option>Citi Bank</option>
            <option>AXIS Bank</option>
        </select>
        </div>
        <br />
     
        <input type="submit" name="pay" value="Pay Here" id="pay"   />
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

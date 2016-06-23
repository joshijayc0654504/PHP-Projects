    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Logo</title>
    
   
    
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    
    </head>
    
    <body>
    <!--/*Header*/-->
    
    <?php include_once('include/headeruserreport.php');?>
    <?php 
    include_once('connection.php');
    ?>
    
    <!--/*Header End*/-->
   
    </div>
    <div id="background"> 
        
       
        
            
                 <div id="logo-main-left"><?php include_once("include/left.php");?></div><br />
                <div id="logo-main-right">Select Option To Generate Reports................<br />
                    
                        <ul>
<!--<li><a href="logoreport.php">Logo</a></li><br/>
<li><a href="logocreatereport.php">Logo Create</a></li><br/>
<li><a href="cardreport.php">Business Card</a></li><br/>
<li><a href="webtempreport.php">Web Site Templates</a></li><br/>
<li><a href="brochurereport.php">Brochure</a></li><br/>
<li><a href="projectreport.php">Projects</a></li><br/>-->
<a href="time.php">Orders</a><br/>
<a href="userreport.php">User</a><br/>
                    </ul>
    
    </div>
    </div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
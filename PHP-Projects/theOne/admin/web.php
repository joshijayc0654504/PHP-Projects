    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Website Template</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--/*Header*/-->
            
            <?php include_once('include/headerweb.php');?>
            <?php 
            include_once('connection.php');
            ?>
            
            <!--/*Header End*/-->
    
    <div id="background"> 
	<div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
           
         
             <div id="logo-main-right">Web Site Templates Design Here<br /><br/>
             <a href="addwebtemp.php">Add Website Templates</a><br />
             <a href="addwebtempcat.php">Add Website Templates Categories</a><br />
              <a href="addwebtempsubcat.php">Add Website Templates Subcategories</a><br />
             </div>
            
    </div>    
    </div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
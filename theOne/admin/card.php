    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Business Card</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--/*Header*/-->
            
            <?php include_once('include/headerbusiness.php');?>
            <?php 
            include_once('connection.php');
            ?>
            
            <!--/*Header End*/-->
    
    <div id="background"> 
        <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
           
         
              <div id="logo-main-right">Business Card Design Here<br /><br/>
                 <a href="addbusinesscard.php">Add Business Card </a><br />
                 <a href="addbusinesscat.php">Add Business Card Categories</a><br />
                 <a href="addbusinesssubcat.php">Add Business Card Subcategories</a>
            </div>
    </div>    
    </div>
    <!--/*Footer*/-->
        
         <?php include_once('include/footer.php');?>
        
        <!--/*Footer End*/-->
    </body>
    </html>
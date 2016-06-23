    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Brochure</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--/*Header*/-->
            
            <?php include_once('include/headerbrochure.php');?>
            <?php 
            include_once('connection.php');
            ?>
            
            <!--/*Header End*/-->
    
    
       
      <div id="background"> 
        <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
           
         
             <div id="logo-main-right">Broucher Design Here<br /><br/>
             <a href="addbrochure.php">Add Brochure</a><br />
             <a href="addbrochurecat.php">Add Brochure Categories</a><br />
             <a href="addbrochuresubcat.php">Add Brochure Subcategories</a>
             </div>
            
    </div>    
        
    </div>
    <!--/*Footer*/-->
        
         <?php include_once('include/footer.php');?>
        
        <!--/*Footer End*/-->
    </body>
    </html>
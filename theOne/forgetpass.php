        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Brouchure</title>
        
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/lightbox-2.6.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/defaultslide.css" />
        <link rel="stylesheet" type="text/css" href="css/componentslide.css" />
        <script src="js/js/modernizr.custom.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/signval.js" type="text/javascript"> </script>
        </head>
        
        
        <body>
        <?php include_once('include/headerforgetpass.php');?>
        <?php 
        include_once('connection.php');
        ?>
        
        <div id="background">
          <?php 
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add')
    {
        echo "User added successfully.";
    }
    ?>
    
    
    <br/>
    <font size="+3" color="#005387"><b>Enter your User Id/Email Address</b></font> <br/><br/>
     
    <form action="updatenewpassword.php"="form" method="post" enctype="multipart/form-data">
    
    <label>E-mail:&nbsp;</label><input type="text" name="email" value="" id="email" class="inputbox"><span class="Red" id="Email_Error"></span><br/>
    
    <input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" onClick="randompassword()"/>
    </form>
    
    <br/>
    
    
    
	<?php function generatePasswordsUsingCharactersAndNumbers($passwordLength){
    $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $password_characters = str_split($characters);
    $password=''; 
    
    for($i=0;$i<$passwordLength;$i++){ 
    $password.=$password_characters[rand(0,count($password_characters)-1)];
    }
    return $password;
    } 
    $newpassword = generatePasswordsUsingCharactersAndNumbers(8);
    "Your New password is: ".$newpassword;
    
    
    $_SESSION['newpassword'] = $newpassword;
    ?>
    <font size="-1" color="#CC0000">**After the submit your User Id/ Email Address we will provide unique password through the Mail...</font>
        </div>
        
       </div>
       
       <?php include_once('include/footer.php');?>
        </body>
        </html>

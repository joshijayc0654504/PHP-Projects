    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simple User Update Data Form</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--<script type="text/javascript" language="javascript" src="js/script.js"></script>-->
    <script src="js/jquery-1.10.2.min.js" type="text/javascript" ></script>
    <script src="js/signval.js" type="text/javascript"></script>
    <link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
            <link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
    
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/signval.js" type="text/javascript"> </script>
    </head>
    
    <body>
    <div id="header1">
        <div id="h1">
        <font size="+6" color="#fff">theOne Graphics Design</font>
    <div id="login1">
    <a href="login.php"><b>Login(Exiting User)</b></a>||<a href="index.php">Main</a>
    </div>
    </div>
    </div>
    <div id="background">
    <div id="loginform"> 
     <p>&nbsp;</p>
     <p><font size="+3" color="#005387">Simple User Update Form </font><br/>
       <br/>
       <?php error_reporting(0);?>
       <?php 
    session_start();
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'exist'){
        echo "Username/Email already exist.";
    }
    $data = $_SESSION['email'];
    /*echo "<pre>";
    print_r($_SESSION);*/
    ?>
       
       
     </p>
     <form action="signinupdatesave.php" method="post" name="formname" enctype="multipart/form-data"/>
    
    <div id="field" >
      <p>
        <input type="hidden" name="uid" id="uid" value="<?php echo $data['uid']; ?>"  />
        <label>First Name:</label>
        <input type="text"  class="inputbox" name="fname" id="fname" value="<?php echo $data['fname'];?>"/>
        <span class="Red" id="First_Error"></span><br/> 
        
        <label>Last Name:</label>
        <input type="text" class="inputbox" name="lname" id="lname" value="<?php echo $data['lname'];?>"/>
        <span class="Red" id="Last_Error"></span><br/>
        
        <label>Email:</label>
        <input type="text" class="inputbox" name="email" id="email" readonly="readonly" value="<?php echo $data['email'];?>"/>
        <span class="Red" id="Email_Error"></span><br/>
        
        <label>Password:</label>
        <input type="password" class="inputbox" name="password" id="password" value="<?php echo $data['password'];?>"/>
        <span class="Red" id="Password_Error"></span><br/>
        
        
        
        
      <!--<input type="submit" name="submit" value="Submit" class="inputbox2" onclick="return validform();" />-->
      </p>
      <p>	
        <input type="submit" name="submit" value="Submit" class="inputbox2" id="Submit" />
        <input type="reset" name="reset" value="Reset" class="inputbox2"/>
        <br />
      </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <?php include_once('include/footer.php');?>
    <!-- End Footer -->
    </body>
    </html>

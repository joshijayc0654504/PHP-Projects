    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
            <link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
    
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="js/logval.js" type="text/javascript"> </script>
    </head>
    
    <body>
    
    <div id="header1">
        <div id="h1">
        <font size="+6" color="#fff">theOne Graphics Design</font>
    <div id="login1">
    <a href="signin.php"><b>Sign Up(New User)</b></a>||<a href="front.php">Main</a>
    </div>
    </div>
    </div>
    <br/>
    <br/>
    <div id="background">
    <div id="loginform"> 
    <font size="+6" color="#005387"><b>Existing User Login Here</b></font>
      
      <br/><br />
      
      <form action="checklogin.php" method="post" name="form" enctype="multipart/form-data">
        <div id="Reg"> 
      
          <font size="+3" color="#005387"><b>Login Form</b></font><br/>
            <br />
          
        </div>
        <br />
        <font size="+2" color="#03a712"><b>For Existing User</b></font></p>
        <br />
    
        <div  id="field" >
            <label>Email/User Id: </label>
            <input class="inputbox" type="text" name="email" id="email" value=""/><span class="Red" id="Email_Error"></span>
        </div>
        <br/>
        <div id="field" >
        
             <label>Password:</label>
             <input class="inputbox" type="password" name="password" id="password" value=""/><span class="Red" id="Password_Error"></span>
        
     
      </div>
      <div  id="field" >
      <br />
      <!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
      <input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
      <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
      </form>
     
    </div>
     
    <br/>
    <a href="forgetpass.php"><b>Forget Password???</b></a><br/><br /><br/>
    <?php session_start();
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'wrong'){
        echo "User doesn't exist or User is not active.";
    }
    
    ?>
    </div>
    </div>
    
    
    <!--/*Footer*/-->
    
   <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
     
     
    
    <?php session_start();
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'wrong'){
        echo "User doesn't exist or User is not active.";
    }
    
    ?>
    </body>
    </html>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
            <link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
    
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/signval.js" type="text/javascript"> </script>
    </head>
    
    <body>
    <?php 
    session_start();
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'exist'){
        echo "Username/Email already exist.";
    }
    ?>
    <div id="header1">
        <div id="h1">
        <font size="+6" color="#fff">theOne Graphics Design</font>
    <div id="login1">
    <a href="premiumuser.php"><b>Premium User(Paid User)</b></a>||<a href="front.php">Main</a><br/>
    <h4>Get 100% access rights with Premium User Registration...</h4>
    </div>
    </div>
    </div>
    <br/>
    <br/>
    <div id="background">
    <div id="loginform"> 
    <form action="signinsave.php" method="post" name="form" enctype="multipart/form-data">
    <div id="container1">
    <div id="Reg">
      <p><font size="+3" color="#005387"><b>Simple User SignUp Form</b></font><br/><br />
      </p>
    </div>
    <br />
    <font size="+2" color="#03a712"><b>For New User</b></font><br />
    -----------------------
    <div  id="field" >
    <input type="hidden" name="uid" value="<?php echo $data=$_SESSION['uid'];?>" />
    <label>First Name:</label><input class="inputbox" type="text" name="fname" id="fname" value=""/><span class="Red" id="First_Error"></span><br/>
    </div>
    
    <div  id="field" >
    
    <label>Last Name:</label><input class="inputbox" type="text" name="lname" id="lname" value=""/><span class="Red" id="Last_Error"></span><br/>
    </div>
    <div  id="field" >
    
    <label>Email:</label><input class="inputbox" type="text" name="email" id="email" value=""/><span class="Red" id="Email_Error"></span><br/>
    </div>
    
    <div  id="field" >
    
    <label>Password:</label><input class="inputbox" type="password" name="password" id="password" value=""/><span class="Red" id="Password_Error"></span><br/>
    </div>
    <div  id="field" >
    
    <label>Confirm Password:</label><input class="inputbox" type="password" name="cpassword" id="cpassword" value=""/><span class="Red" id="Password_Error"></span><br/>
    </div>
    
    </br>
    ---------------------------------<br />
    <!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
    <input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    </form>
    <br />
    <br />
    
    
    </div>
    </div>
    </div>
    <?php include_once('include/footer.php');?>
    </div>
    </div>
    </div>
    
    </body>
    </html>
    

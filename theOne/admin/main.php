    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>theOne-Main Page</title>
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <?php 
    session_start();
    
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
        echo "User added successfully.";
    }
    ?>
    <?php /*
    echo "<pre>";
    print_r($_SESSION);*/
    if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
    ?>
    Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> || 
    <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 1){
    ?>
    <a href="signinupdate.php">Profile</a>
    <?php }else{ ?>
    <a href="premiumuserupdate.php">Profile</a>
    <?php } ?>
    <?php }else{ ?>
    
    <a href="login.php">Login</a> | <a href="usertypesignup.php">Signup</a>
    
    <?php } ?>
    
    
    <div id="container">
    <div id="Reg">
    <font size="+6" color="#005387"><br/><b> Wel Come Admin......  </b></font><br/><br />
    </div>
    
    <div id="field2">
    <form name="search" action="searchresult.php" method="post">
    <label>Search:</label><input type="text" name="Searchword" id="Search" value="Search Website" />
    <input type="submit" name="Search" value="Search" class="inputbox2"/>
    </form>
    
    </div>
    </div>
    </body>
    </html>
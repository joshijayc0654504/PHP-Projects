    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Main Page theOne</title>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
    </head>
    <body>
    
    <!--Header-->
    
    <?php 
    session_start();
    
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
        echo "User added successfully.";
    }
    ?>
    <div id="header1">
      <div id="h1"> <font size="+4" color="#fff">theOne Graphics </font>
        <div id="login">
          <?php /*
    echo "<pre>";
    print_r($_SESSION);*/
    if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
    ?>
          Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> || 
          <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 3){
    ?>
          <a href="signinupdate.php">Profile</a> || <a href="cart.php">Cart</a>
          <?php }else{ ?>
          <a href="premiumuserupdate.php">Profile</a> || <a href="logocreate.php" >Logo Create</a> || <a href="cart.php"><img src="images/cart.png" title="Your Cart"/> </a>
          <?php } ?>
          <h4>Hurry Signup for Primum User and Get 25% Discount</h4>
          <br />
          <?php }else{ ?>
          <a href="login.php">Login</a> || <a href="usertypesignup.php">Signup</a><br /> 
          <?php } ?>
        </div>
      </div>
    </div>
    
    <!--/*Header End*/-->
    
    
    <!--/*Container*/-->
    
    <div id="background" class="main-page">
      <div id="main-left">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><font size="+6" color="#005387"><b>WelCome to theOne Graphics</b></font> <br/>
          <br />
        </p>
        <p>Hi Friends WelCome to the "theOne Graphics Design"...<br />
          Here you can get free Designs like for Logo Design,Broucher Design, <br />
        Business Card Design and many More.....</p>
        <div id="tree">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="229" height="243" id="FlashID" title="Christmas Tree">
            <param name="movie" value="images/christmastree2.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="8.0.35.0" />
            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="images/christmastree2.swf" width="229" height="243">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="8.0.35.0" />
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
              <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
              
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object>
        </div>
      </div>
      <div id="main-right"> 
        <a href="projects.php"><img src="images/SignUp.png" width="98" height="89" alt="signup link" class="signup-link" /></a>
        <a href="logo.php"><img src="images/LogIn.png" width="100" height="99" alt="login link" class="login-link" title="Logo Page"/></a>
        <a href="brochure.php"><img src="images/Reviews.png" width="111" height="101" alt="review link" class="review-link" title="Brochure Page"/></a>
        <a href="webtemp.php"><img src="images/Design.png" width="80" height="99" alt="design link" class="design-link" title="Website Templates Page"/></a>
        <a href="businesscard.php"><img src="images/Projects.png" width="90" height="93" alt="project link" class="project-link" title="Business Card Page"/></a>
        <a href="aboutus.php"><img src="images/AboutUs.png" width="101" height="90" alt="about link" class="about-link" title="About Us Page"/></a>
        <a href="contactus.php"><img src="images/Contactus.png" width="101" height="101" alt="contact link" class="contact-link" title="Contact Us Page"/></a>
        <a href="ourteam.php"><img src="images/Ourteam.png" width="90" height="93" alt="team link" class="team-link" title="Our Team Page"/></a><br/>
        
      </div>
      
     </div>
        
   
    
    <!--/*Container End*/-->
    
    <!--/*Footer*/-->
    
    <?php include_once('include/footer.php');?>
    
    
    <!--/*Footer End*/-->        
    
    <script type="text/javascript">
    swfobject.registerObject("FlashID");
            </script>
    </body>
    </html>
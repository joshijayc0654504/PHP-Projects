   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
            <meta name="keywords" content="VisualLightBox, LightBox, Photo Gallery, photo galleries for websites, photo gallery template" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>theOne Graphics Design</title>
            <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
            <link href="css/styles.css" rel="stylesheet" type="text/css">
            <link rel="shortcut icon" href="../favicon.ico"> 
            <link rel="stylesheet" type="text/css" href="css/default.css" />
            <link rel="stylesheet" type="text/css" href="css/component.css" />
            <script src="js/modernizr.custom.js"></script>
		    <script src="js/logval.js" type="text/javascript"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="js/jquery.colorbox.js" type="text/javascript"></script>
            </head>
    <body>
    
	<!--/*Header*/-->
    
	<?php include_once('include/header.php');?>
    
    <!--/*Header End*/-->
    
    <!--/*Container*/-->
    
    <div id="background">
        <div id="main-left">
          <p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><font size="+6" color="#005387"><b>WelCome to theOne Graphics</b></font> <br/>
              <br />
            </p>
            <p>Hi Friends WelCome to the "theOne Graphics Design"...<br />
          Here you can get free Designs like for Logo Design,Broucher Design,Business Card Design and many More.....</p>
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
              </div><!-- End tree-->
        </div><!-- End Main Left-->
           <!-- </div>
    </div>-->
           <div id="main-right"> <!--Main Right-->
          <form action="checklogin.php" method="post" name="form" enctype="multipart/form-data">
<div id="container">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font size="+3" color="#005387"><br/>
  <b> Admin please Login Below....</b></font><br/><br />
</p>
<div  id="field" >
  
  <label> Email/User Id:</label><input class="inputbox" type="text" name="email" id="email" value=""/>
</div><br />
<div id="field" >
<label> Password:</label><input class="inputbox" type="password" name="password" id="password" value=""/>
</div>
<div  id="field" >
</br>
<input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
<input type="reset" name="Reset" value="Reset" class="inputbox2"/>
<br />
<br />


</div>
</div>
</form>
      </div> <!--End Main Right--></div> <!--End Background-->
    
    <!--/*Container End*/-->
    
    <!--/*Footer*/-->
 
    
    <?php include_once('include/footer.php');?>
 
    
    <script type="text/javascript">
    swfobject.registerObject("FlashID");
            </script> 
    
    <!--/*Footer End*/-->
    
    
    <!-- This contains the hidden content for inline calls / This is login popup -->
    <div style='display:none'>
              <div id='inline_content' style='padding:10px; background:url(images/BusinessBack.png); background-repeat:repeat;'>
        <div id="loginform1"> 
        
        <font size="+6" color="#fff"><b>Existing User Login Here</b></font> <br/>
                  <br />
                  <form action="checklogin.php" method="post" name="form" enctype="multipart/form-data">
            <div id="Reg"> <font size="+3" color="#00CC00"><b>Login Form</b></font><br/>
                      <br />
                    </div>
            <br />
            <font size="+2" color="#000"><b>For Existing User</b></font>
            </p>
            <br />
            <div  id="field" >
                      <label>Email/User Id: </label>
                      <input class="inputbox" type="text" name="email" id="email" value=""/>
                      <span class="Red" id="Email_Error"></span> </div>
            <br/>
            <div id="field" >
                      <label>Password:</label>
                      <input class="inputbox" type="password" name="password" id="password" value=""/>
                      <span class="Red" id="Password_Error"></span> </div>
            <div  id="field" >
            <br />
            <!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
            <input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
            <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
          </form>
                </div>
        <br/>
        <a href="forgetpass.php"><b>Forget Password???</b></a><br/>
        <br />
      </div>
     </div>
    </body>
    </html>
    
   <!--/*End Form*/-->
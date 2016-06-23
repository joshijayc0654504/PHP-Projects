    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>About Us</title>
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/defaultslide.css" />
    <link rel="stylesheet" type="text/css" href="css/componentslide.css" />
    <script src="js/js/modernizr.custom.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>

    <!--/*Slider Menu */-->
    <body class="cbp-spmenu-push">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <h3>Menu</h3>
                <a href="main.php">Home</a>
                <a href="logo.php">Logo</a>
                <a href="businesscard.php">Business Card</a>
                <a href="webtemp.php">Website Templates</a>
                <a href="brochure.php">Brochure</a>
                <a href="projects.php">Projects</a>
                <a href="aboutus.php">About Us</a>
                <a href="contactus.php">Contact Us</a>
                <a href="ourteam.php">Our Team</a>
            </nav>
        
    <!--/*Slider Menu End*/-->
    
    <!--/*Header*/-->
    
    <?php include_once('include/headerabout.php');?>
    <?php 
    include_once('connection.php');
    ?>
    
    <!--/*Header End*/-->
    
    <!--/*container*/-->
    
        
    <div id="background">
    <p align="center"><img src="images/Logo Title1.png" />
    </p> 
    <p align="justify"><font size="+1" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;<b>theone Graphics Design</b> is the Website with you can get and with some amount pay get more Good Design with this Website. We provide the Quick , Average and Long time delivery of His/Her Requirements Designs.....</p>
 
  	 <p align="justify"> This Website Provides the Online Logo Design,Brochure Design and Business card as per user Requirements.</p>
   <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp; Also Contain of the some free Website Templates and have Great thing that user can post their requirements and as per their requirement we provide them Designs.</p>
     
   <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;  Scope define that what the Functionalities and Facilities are provided by Online Graphics Design They are Easy get Online Design 
     As per user Requirement Designs...</p></font>
    
      </font>
      </div>
    <!--/*container End*/-->
  
     <!--/*Footer*/-->
    
   <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    
    <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
            <script src="js/js/classie.js"></script>
            <script>
                var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                    menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                    menuTop = document.getElementById( 'cbp-spmenu-s3' ),
                    menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
                    showLeft = document.getElementById( 'showLeft' ),
                    showRight = document.getElementById( 'showRight' ),
                    showTop = document.getElementById( 'showTop' ),
                    showBottom = document.getElementById( 'showBottom' ),
                    showLeftPush = document.getElementById( 'showLeftPush' ),
                    showRightPush = document.getElementById( 'showRightPush' ),
                    body = document.body;
    
                showLeft.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( menuLeft, 'cbp-spmenu-open' );
                    disableOther( 'showLeft' );
                };
                showRight.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( menuRight, 'cbp-spmenu-open' );
                    disableOther( 'showRight' );
                };
                showTop.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( menuTop, 'cbp-spmenu-open' );
                    disableOther( 'showTop' );
                };
                showBottom.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( menuBottom, 'cbp-spmenu-open' );
                    disableOther( 'showBottom' );
                };
                showLeftPush.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( body, 'cbp-spmenu-push-toright' );
                    classie.toggle( menuLeft, 'cbp-spmenu-open' );
                    disableOther( 'showLeftPush' );
                };
                showRightPush.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( body, 'cbp-spmenu-push-toleft' );
                    classie.toggle( menuRight, 'cbp-spmenu-open' );
                    disableOther( 'showRightPush' );
                };
    
                function disableOther( button ) {
                    if( button !== 'showLeft' ) {
                        classie.toggle( showLeft, 'disabled' );
                    }
                    if( button !== 'showRight' ) {
                        classie.toggle( showRight, 'disabled' );
                    }
                    if( button !== 'showTop' ) {
                        classie.toggle( showTop, 'disabled' );
                    }
                    if( button !== 'showBottom' ) {
                        classie.toggle( showBottom, 'disabled' );
                    }
                    if( button !== 'showLeftPush' ) {
                        classie.toggle( showLeftPush, 'disabled' );
                    }
                    if( button !== 'showRightPush' ) {
                        classie.toggle( showRightPush, 'disabled' );
                    }
                }
            </script>
    </body>
    </html>

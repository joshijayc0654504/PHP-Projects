    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Logo</title>
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/defaultslide.css" />
    <link rel="stylesheet" type="text/css" href="css/componentslide.css" />
    <script src="js/js/modernizr.custom.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
     <style>
		#pgn .active{ font-weight:bold; font-size:120%; text-decoration:underline; color:#600;}
		#pgn a{ color:#666; text-decoration:none;}
	</style>
    </head>
    
    <body>
    
    <!--/*Slider Menu */-->
    <body class="cbp-spmenu-push">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <h3>Menu</h3>
                <a href="main.php">Home</a>
                <a href="logo.php">Logo</a>
                <a href="logocreate.php">Logo Create</a>
                <a href="businesscard.php">Business Card</a>
                <a href="webtemp.php">Website Templates</a>
                <a href="brochure.php">Brochure</a>
                <a href="projects.php">Projects</a>
                <a href="#">About us</a>
            </nav>
        
    <!--/*Slider Menu End*/-->    
    
    <!--/*Header*/-->
    
    <?php include_once('include/headerlogo.php');?>
    <?php 
    include_once('connection.php');
    ?>
    
    <!--/*Header End*/-->
    
    <!--/*container*/-->
    
    <!--/*Left*/-->
    
    <div id="background">
	      
    <div id="logo-main-left">
      <?php include_once('include/catsubcat.php');?>  
    </div>
    
    <!--/*Left End*/-->
    
    <!--/*Right*/-->
    
    <!-- Filter Display Part -->
    
    <div id="logo-main-right">
    <br/>
    <?php
    
    if(isset($_POST['submit']) && $_POST['submit'] == 'Search'){
        $where='';
        $table='';
        $join='';
        $searchSCat='';
        $searchCat='';
        if(isset($_POST['catname'])){
            $catname=implode(",",$_POST['catname']);
             //$catname=$_POST['catname'];
            //echo $catname;
            $table .= ',c.*';
            //$searchCat = ' For Category :'.$catname; 
            $join .= ' JOIN category c ON c.catid=logo.catid';
            $where .= 'logo.catid IN ('.$catname.') AND ';
        }
        if(isset($_POST['scatname'])){
            $scatname=implode(",",$_POST['scatname']);
             //$catname=$_POST['catname'];
            //echo $scatname;
            $table .= ',sc.*';
            //$searchSCat = ' For Sub Category :'.$scatname; 
            $join .= ' JOIN subcategory sc ON sc.scatid=logo.scatid';
            $where .= 'logo.scatid IN ('.$scatname.') AND ';
        }
        //$scatname=is_array($_POST['scatname'])? implode(",",$_POST['scatname']):'';
         
        //$scatname=$_POST['scatname'];
        //print_r($scatname);
        $keyword=trim($_POST['keyword']);
        
        $where .= "keyword like '%$keyword%'";
        
        $sql = "select logo.photo,logo.logoid,logo.price ".$table." from logo ".$join." where ".$where; //catid in ($catname) AND scatid in ($scatname) AND keyword like '%$keyword%'";
        //echo $sql;
        $query = mysql_query($sql) or die("Error in execution:".mysql_error());
        $numrows = mysql_num_rows($query);
        echo "Total Result found: ".$numrows." For Keyword : ".$keyword.$searchCat.$searchSCat;
        while($data=mysql_fetch_array($query,MYSQL_ASSOC)){
    
        
        ?>
        
        <form action="cart.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="logoid" value="<?php echo $data['logoid']; ?>" />
        <input type="hidden" name="toatalamount" value="<?php echo $data['$price']?>"  />
      <div class="image-row">
        <div class="image-set">
                    <a class="example-image-link" href="admin/images/<?php echo $data['photo'];?>" data-lightbox="example-set" title="<?= $data['photo'];?>"><img class="example-image" src="admin/images/<?php echo $data['photo'];?>" alt="no photo" width="150" height="100"/></a><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Price:<?php echo $data['price'];?>
    <input type="hidden" name="logocart"  value="" />
                <input type="submit" name="buy" value="Add to cart"  />
				 <?php $_SESSION['totalamount']= $totalamount;
	//echo $totalamount = $_SESSION['totalamount'];
	//print_r($_SESSION);?></form>
                </div>
   
            
    <?php }?>
     
    
    <?php } else { ?>
    <!-- End Filter  Display -->
    
    <!--/*Right End*/-->
    
    <!-- Logo Part -->
    
    <!--pagination-->
	<?php
    
    // define limit for page
    $limit = 12;
    $queryTotal = mysql_query('select logoid from logo') or die(mysql_error());
    // Get total products
    $total = mysql_num_rows($queryTotal);
    // get total pages
    $totalPages = ceil($total/$limit);
    $active = 1; // check for active page
    
    // Query for fetch data
    
    if(isset($_REQUEST['page']) && $_REQUEST['page'] != ''){
        $page = $_REQUEST['page'];
        if($page!=1){
                $active = $page;
                $query = mysql_query('SELECT l.* ,c.catname,s.scatname FROM logo l JOIN category c ON l.catid = c.catid JOIN subcategory s ON l.scatid = s.scatid ORDER BY logoid DESC LIMIT '.$limit*($page-1).','.$limit) or die(mysql_error());
        }else{$query = mysql_query('SELECT l.* ,c.catname,s.scatname FROM logo l JOIN category c ON l.catid = c.catid JOIN subcategory s ON l.scatid = s.scatid ORDER BY logoid DESC LIMIT 0,'.$limit) or die(mysql_error());}
        
        }
        else{
            $query = mysql_query('SELECT l.* ,c.catname,s.scatname FROM logo l JOIN category c ON l.catid = c.catid JOIN subcategory s ON l.scatid = s.scatid ORDER BY logoid DESC LIMIT 0,'.$limit) or die(mysql_error());
    
        }?>
        
    <!--pagination ends-->
    <?php
/*        $sql = "SELECT l.* ,c.catname,s.scatname FROM logo l JOIN category c ON l.catid = c.catid JOIN subcategory s ON l.scatid = s.scatid";
        $exec = mysql_query($sql) or die(mysql_error());
*/        ?>
    <table>
    <tr>
    
    <?php 
    while($data=mysql_fetch_array($query)){
    ?>
     <form action="cart.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="logoid" value="<?php echo $data['logoid']; ?>" />
		<input type="hidden" name="toatalamount" value="<?php echo ['$price']?>"  />
    
    <!--<img src="admin/images/<?php echo $data['photo'];?>" height="75"  width="100"
                alt="no photo" /><br />
                <a href="logoview.php?id=<?php echo $data['logoid'];?>" > view</a>-->
    	
           	<div class="image-row">
  
                
                    <a class="example-image-link" href="admin/images/<?php echo $data['photo'];?>" data-lightbox="example-set" title="<?= $data['photo'];?>"><img class="example-image" src="admin/images/<?php echo $data['photo'];?>" alt="no photo" width="160" height="110"/></a><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Price:<?php echo $data['price'];?>
                    
    <input type="hidden" name="logocart"  value="" />
                <input type="submit" name="buy" value="Add to cart"  />
                    <script src="index_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
                
       </div>
    
      </form>	
 
    <?php }?>
    </tr>
    </table>
    
    <!-- pagination script-->
    <div id="pgn">
	<?php if($total > $limit){ // checking if total products are more than limit. if yes.. than pagination will be genarated. else no.
		for($i=1;$i<=$totalPages;$i++){
		if($i == $active){ 
		echo '<a href="?page='.$i.'" class="active">'.$i.'</a>&nbsp;&nbsp;';	 
		}
		else{
		echo '<a href="?page='.$i.'" >'.$i.'</a>&nbsp;&nbsp;';	 	
			}
		
		}	
	}
	?>
    </div>
    <?php } ?>
    
	<!--pagination ends-->
    <!-- End Logo -->
    
    </div>		
    </div>
    
    </div>
    
    <!--/*container End*/-->
    
    <!--/*Footer*/-->
    
    <div id="footer1">
      
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><font color="#fff"><b>&copy; 2014 by Online Graphics Design || Designed by theOne Designer</b></font>
          </p>
          </div>
    </div>
    
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

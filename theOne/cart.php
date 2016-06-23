 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cart</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php 
    include_once('connection.php');
    session_start();
    //print_r($_SESSION);
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
        echo "User added successfully.";
    }
    ?>
    <div id="header1">
      <div id="h1"> <font size="+4" color="#fff">Your Cart</font>
        <div id="login">
          <?php /*
    echo "<pre>";
    print_r($_SESSION);*/
    if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
    ?>
          Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> ||
          <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 3){
    ?>
          <a href="signinupdate.php">Profile</a> || <a href="main.php">Home</a>
          <?php }else{ ?>
          <a href="premiumuserupdate.php">Profile</a> || <a href="main.php">Home</a>
          <?php } ?>
          <h4>Pay Online and Get 25% Discount</h4>
          <br />
          <?php }else{ ?>
          <a href="login.php">Login</a> | <a href="usertypesignup.php">Signup</a><br />
          <?php } ?>
        </div>
      </div>
    </div>
    <div id="background" class="main-page">
      <p>
      <?php
    
    
    error_reporting(0);
    /*echo "<pre>";
    print_r($_SESSION);
    print_r($_POST);
    //$cart = $_SESSION['cart']['logoid']['logocart'];
    
    //print_r($_SESSION);
    //echo "<pre>";*/
    ?>
                  
      <!--cart starts-->
      <?php
    //print_r($_SESSION);
       //empty cart
            if(isset($_REQUEST['cart']) && $_REQUEST['cart'] == 'empty'){
                $_SESSION['cart']['buid']= array();
				$_SESSION['cart']['logoid']= array();
				$_SESSION['cart']['broid']= array();
                $_SESSION['cart']['lcid']= array();
				$_SESSION['cart']['total']=array();
                echo "Your cart is empty";
            } 
            else{
                // Delete a product from cart
                if(isset($_POST['pidd']) && $_POST['pidd'] !=''){
                    $pidd = $_POST['pidd'];
                    
                    $_SESSION['cart']['logoid'] = array_flip($_SESSION['cart']['logoid']);
                    unset($_SESSION['cart']['logoid'][$pidd]);
                    $_SESSION['cart']['logoid'] = array_flip($_SESSION['cart']['logoid']);
					
					 $_SESSION['cart']['buid'] = array_flip($_SESSION['cart']['buid']);
                    unset($_SESSION['cart']['buid'][$pidd]);
                    $_SESSION['cart']['buid'] = array_flip($_SESSION['cart']['buid']);
					
					 $_SESSION['cart']['broid'] = array_flip($_SESSION['cart']['broid']);
                    unset($_SESSION['cart']['broid'][$pidd]);
                    $_SESSION['cart']['broid'] = array_flip($_SESSION['cart']['broid']);
                }
				
                else if(isset($_POST['logoid']) && $_POST['logoid'] !=''){
                    $logoid = $_POST['logoid'];
                    
                        // Add product to session cart after checking if already in cart or not
                        if(!(in_array($logoid,$_SESSION['cart']['logoid']))){
                            $_SESSION['cart']['logoid'][] = $logoid ;                            
                        }
                        else{
                            echo "Product is already exists in your cart";
                            }
                       
                }
				
				
				
				else if(isset($_POST['buid']) && $_POST['buid'] !=''){
					$buid = $_POST['buid'];
                    
                        // Add product to session cart after checking if already in cart or not
                        if(!(in_array($buid,$_SESSION['cart']['buid']))){
                            $_SESSION['cart']['buid'][] = $buid ;                            
                        }
                        else{
                            echo "Product is already exists in your cart";
                            }
                       
				}
				else if(isset($_POST['broid']) && $_POST['broid'] !=''){
					$broid = $_POST['broid'];
                    
                        // Add product to session cart after checking if already in cart or not
                        if(!(in_array($broid,$_SESSION['cart']['broid']))){
                            $_SESSION['cart']['broid'][] = $broid ;                            
                        }
                        else{
                            echo "Product is already exists in your cart";
                            }
                       
				}
				
				
				else if(isset($_POST['lcid']) && $_POST['lcid'] !=''){
                    $lcid = $_POST['lcid'];
                    
                        // Add product to session cart after checking if already in cart or not
                        if(!(in_array($lcid,$_SESSION['cart']['lcid']))){
                            $_SESSION['cart']['lcid'][] = $lcid ;                            
                        }
                        else{
                            echo "Product is already exists in your cart";
                            }
                       
                }
                
                /*echo "<pre>"; print_r($_SESSION['cart']); echo "</pre>";*/
                $count = count($_SESSION['cart']['logoid']);
				$count1 = count($_SESSION['cart']['buid']);
				$count2 = count($_SESSION['cart']['broid']);
				$count3 = count($_SESSION['cart']['lcid']);
				$subtotal=0;
				$lsubtotal=0;
				$bsubtotal=0;
				$brsubtotal=0;
				if($count >0 || $count1 >0 || $count2 >0 || $count3 >0 )
                {
				if($count >0 )
                {
                    $logo = implode(',',$_SESSION['cart']['logoid']);
                    $sqlL="SELECT l.*,c.catname FROM logo l join category c on l.catid = c.catid  WHERE l.logoid IN (".$logo.")";
                    $execL=mysql_query($sqlL) or die("Error in query Fetch LOGO:".mysql_error());
				}
				if($count1 >0 )
                {
                    $bcard = implode(',',$_SESSION['cart']['buid']);
                   	$sqlBu="SELECT b.*,c.catname FROM businesscard b join category c on b.catid = c.catid WHERE b.buid IN (".$bcard.")";
                    $execBu=mysql_query($sqlBu) or die("Error in query Fetch Businesscard :".mysql_error());
				}
				if($count2 >0 )
                {
                    $brochure = implode(',',$_SESSION['cart']['broid']);
                    $sqlBr="SELECT b.*,c.catname FROM brochure b join category c on b.catid = c.catid WHERE b.broid IN (".$brochure.")";
                    $execBr=mysql_query($sqlBr) or die("Error in query Fetch Brochure :".mysql_error());
				}
				if($count3 >0 )
                {
                    $lc = implode(',',$_SESSION['cart']['lcid']);
					$lc;
    				$sqlLc="SELECT l.*,c.catname FROM logocreate l join category c on l.catid = c.catid  WHERE l.lcid IN (".$lc.")";
                    $execLc=mysql_query($sqlLc) or die("Error in query Fetch LOGO CREATE:".mysql_error());
				}
			
                ?>
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
     
                <table border="3" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
                  <tr>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Delete</th>
                  </tr>
                  
                  <!--logo display-->
                  <?php 
                  $i=0;
                  while($data=mysql_fetch_array($execL,MYSQL_ASSOC)){
                  
                  ?>
                      <tr>
                        <td><?php echo $data['catname'];?></td>
                        <td><img src="admin/images/<?php echo $data['photo'];?>" alt="<?php echo $data['photo'];?>" height="50" width="auto" /></td>
                        <td><?php echo $ltotal=$data['price'];?></td>
                       
                       
                       <td><form method="post" action="cart.php">
                            <input type="hidden" name="pidd" value="<?php echo $data['logoid'];?>" />
                            <input type="submit" value="Delete"  name="Delete"/>
                          </form></td>
                      </tr>
                      <?php $lsubtotal = $lsubtotal + $ltotal;?>
                  <?php 
                  $i++;}
                  ?>
                  
                  <!--business card display-->
                  <?php 
                  $j=0;
                  while($dataBu=mysql_fetch_array($execBu,MYSQL_ASSOC)){
                  
                  ?>
                      <tr>
                        <td><?php echo $dataBu['catname'];?></td>
                        <td><img src="admin/images/<?php echo $dataBu['photo'];?>" alt="<?php echo $dataBu['photo'];?>" height="50" width="auto" /></td>
                         <td><?php echo $btotal=$dataBu['price'];?></td>
                       <td><form method="post" action="cart.php">
                            <input type="hidden" name="pidd" value="<?php echo $dataBu['buid'];?>" />
                            <input type="submit" value="Delete"  name="Delete"/>
                          </form></td> 
                      </tr>
                       <?php $bsubtotal = $bsubtotal + $btotal;?>
                  <?php 
                  $j++;}
                  ?>
                  
                  
                 <!-- brochure display-->
                  <?php 
                  $k=0;
                  while($dataBr=mysql_fetch_array($execBr,MYSQL_ASSOC)){
                  
                  ?>
                      <tr>
                        <td><?php echo $dataBr['catname'];?></td>
                        <td><img src="admin/images/<?php echo $dataBr['photo'];?>" alt="<?php echo $dataBr['photo'];?>" height="50" width="auto" /></td>
                         <td><?php echo $brtotal=$dataBr['price'];?></td>
                         
                       <td><form method="post" action="cart.php">
                            <input type="hidden" name="pidd" value="<?php echo $dataBr['broid'];?>" />
                            <input type="submit" value="Delete"  name="Delete"/>
                          </form></td>
                      </tr>
                       <?php $brsubtotal = $brsubtotal + $brtotal;?>
                  <?php 
                  $k++;}
                  ?>
                  
                  <!--logocreate-->
                  
                  
                   <?php 
                  $m=0;
                  while($dataLc=mysql_fetch_array($execLc,MYSQL_ASSOC)){
                  
                  ?>
                      <tr>
                        <td><?php echo $dataLc['catname'];?></td>
                        <td><img src="admin/images/<?php echo $dataLc['photo'];?>" alt="<?php echo $dataLc['photo'];?>" height="50" width="auto" /></td>
                        
                       <td><form method="post" action="cart.php">
                            <input type="hidden" name="pidd" value="<?php echo $dataLc['lcid'];?>" />
                            <input type="submit" value="Delete"  name="Delete"/>
                          </form></td>
                      </tr>
                      
                  <?php 
                  $m++;}
                  ?>
                  
      </table>
     			 <?php  $subtotal = $lsubtotal + $bsubtotal + $brsubtotal;?>
      
                  <?php
                  $_SESSION['cart']['total'] = $subtotal;?>
				 <h1>Total Amount:<?php echo $subtotal;?></h1><br />
                 
            <a href="?cart=empty">Empty Cart</a> || <a href="main.php">Back</a> || <a href="paymode.php">Pay Now </a>
        <?php }
                else{ // display if cart is empty. And cart will not generate
                    echo "Your cart is empty";
                }
    } ?><br />
    <!-- cart ends-->
    
   
    </div>
    </div> 
    <!--/*Footer*/-->
    
   <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
    
    

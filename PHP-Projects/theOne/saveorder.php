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
    
    if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
        echo "User added successfully.";
    }
    ?>
    <div id="header1">
      <div id="h1"> <font size="+4" color="#fff">Orders</font>
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
//print_r($_SESSION);
$uid = $_REQUEST['uid'];
//echo $uid;


$count = count($_SESSION['cart']['logoid']);
$count1 = count($_SESSION['cart']['buid']);
$count2 = count($_SESSION['cart']['broid']);



$logo = implode(',',$_SESSION['cart']['logoid']);
$sqlL="SELECT l.*,c.catname FROM logo l join category c on l.catid = c.catid  WHERE l.logoid IN ('".$logo."')";
$execL=mysql_query($sqlL) or die("Error in query Fetch LOGO:".mysql_error());
$dataL = mysql_fetch_array($execL,MYSQL_ASSOC);
//print_r($dataL);


$bcard = implode(',',$_SESSION['cart']['buid']);
$sqlBu="SELECT b.*,c.catname FROM businesscard b join category c on b.catid = c.catid WHERE b.buid IN ('".$bcard."')";
$execBu=mysql_query($sqlBu) or die("Error in query Fetch Businesscard :".mysql_error());
$dataBu = mysql_fetch_array($execBu,MYSQL_ASSOC);
//print_r($dataBu);


$brochure = implode(',',$_SESSION['cart']['broid']);
$sqlBr="SELECT b.*,c.catname FROM brochure b join category c on b.catid = c.catid WHERE b.broid IN ('".$brochure."')";
$execBr=mysql_query($sqlBr) or die("Error in query Fetch Brochure :".mysql_error());
$dataBr = mysql_fetch_array($execBr,MYSQL_ASSOC);
//print_r($dataBr);


$paymentmode=$_REQUEST['paymentmode'];
$subtotal=$_SESSION['cart']['total'];
if($count >0 || $count1 >0 || $count2 >0 )
{



 $query = "INSERT INTO orders (uid,logoid,buid,broid,status,totalamount,paymentmode,created) VALUES ('$uid','$logo','$bcard','$brochure','completed','$subtotal','$paymentmode',now())";
	
$execq = mysql_query($query) or die("Error in insert query execution:".mysql_error());
"data success...";
}
else{

//insertion for logo
if($count >0 ){

 $query = "INSERT INTO orders (uid,logoid,buid,broid,status,totalamount,paymentmode,created) VALUES ('$uid','$logo','','','completed','$subtotal','$paymentmode',now())";
	
$execq = mysql_query($query) or die("Error in insert query execution:".mysql_error());
 "data success...";

}


//insertion for bcard
if($count1 >0 ){				


$query = "INSERT INTO orders (uid,logoid,buid,status,totalamount,paymentmode,created) VALUES ('$uid','','$bcard','completed','$subtotal','$paymentmode',now())";
	
$execq = mysql_query($query) or die("Error in insert query execution:".mysql_error());
 "data success...";
}


//insertion for brochure

if($count2 >0 ){


$query = "INSERT INTO orders (uid,logoid,buid,broid,status,totalamount,paymentmode,created) VALUES ('$uid','','','$brochure','completed','$subtotal','$paymentmode',now())";
	
$execq = mysql_query($query) or die("Error in insert query execution:".mysql_error());
"Data Success...";
}


}

echo"<br/>";echo "Thank You For Shopping";



?>
<!--<script type="text/javascript">window.location = 'thankyou.php';</script>-->
</p>
</div>
<?php include_once('include/footer.php')?>
</body>
</html>
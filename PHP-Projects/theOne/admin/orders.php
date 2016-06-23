    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Orders</title>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script language="javascript">
    function validate()
    {
    var chks = document.getElementsByName('deleteID[]');
    var hasChecked = false;
    for (var i = 0; i < chks.length; i++)
    {
    if (chks[i].checked)
    {
    hasChecked = true;
    break;
    }
    }
    if (hasChecked == false)
    {
    alert("Please select at least one.");
    return false;
    }
    return true;
    }
    </script>
    </head>
    
    <body>
    <!--/*Header*/-->
        
        <?php include_once('include/headerorder.php');?>
              
        <!--/*Header End*/-->
    
    <div id="background">  
                    
                <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
           
         
             <div id="logo-main-right">Orders Here................<br /><br/>
         		

		<?php 
        include_once('connection.php');
        
        
       ?>
 <?php 
    
    
    if(isset($_POST['delete'])){
    //print_r($_POST);
    $dids = implode(",",$_POST['deleteID']);
    for($i=0;$i<count($_POST['deleteID']);$i++){
    $del_id=$_POST['deleteID'][$i];
    }
     $sql = "DELETE FROM orders WHERE oid IN ($dids);";
    $result = mysql_query($sql);
    
    }
    
    $data=$_REQUEST;
    $sql = "SELECT * FROM orders "; 
    $exec= mysql_query($sql) or die ("Error in orders Fetch :".mysql_error());
    //$data = mysql_fetch_array($exec,MYSQL_ASSOC);
    $count=mysql_num_rows($exec);
    
    ?>
        
        <!--View Table-->
        
        <table border="1" cellpadding="4">
            <tr>
            	<th></th>
                <th>oid</th>
                <th>uid</th>
                <th>logoid</th>
                <th>buid</th>
                <th>broid</th>
                <th>status</th>
                <th>paymentmode</th>
                <th>created</th>
                <th>View</th>
                
            </tr>
        
        
        <?php 
        
        
        
       $sql = "SELECT * from orders";
        
        $query = mysql_query($sql) or die("Error in select:".mysql_error());?>
		  <form action="#" name="form" enctype="multipart/form-data" method="post" onSubmit="return validate()";>
       <?php while ($data=mysql_fetch_assoc($query)){?>
        
            <tr>
            	<td><input type="checkbox" name="deleteID[]" value="<?php echo $data['oid'];?>" id="deleteID"  /></a></td>
                <td><?php echo $data['oid'];?></td>
                <td><?php echo $data['uid'];?></td>
                <td><?php echo $data['logoid'];?></td>
                <td><?php echo $data['buid'];?></td>
                <td><?php echo $data['broid'];?></td>
                
                <td><?php echo $data['status'];?></td>
                <td><?php echo $data['paymentmode'];?></td>
                <td><?php echo $data['created'];?></td>
                <td><a href="ordersview.php?oid=<?php echo $data['oid'];?>">View</a></td>
                
                </tr>
        <?php
        }
        ?>
         
        </table>
         <input type="submit" name="delete" value="Delete" id="delete"  />
         </form>
        <!--End View-->
        <?php 
        $sqlU = "SELECT * from user";
        
        $queryU = mysql_query($sqlU) or die("Error in select:".mysql_error());
        $dataU=mysql_fetch_array($queryU,MYSQL_ASSOC);
        ?>
        <form action="ordersview.php" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="uid" class="uid" id="uid"  value="<?php echo $dataU['uid']; ?>"  />
        </form>
        
        </div>
        </div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
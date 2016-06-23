<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>orders</title>

 <link href="css/styles.css" rel="stylesheet" type="text/css" />
 </head>

<body>


<!--/*Header*/-->
        
        <?php include_once('include/headerorders.php');?>
        <?php 
        include_once('connection.php');
        ?>
        
        <!--/*Header End*/-->
<div id="background">  
                    
                <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
            <div id="logo-main-right">ORDERS<br /><br/>

 <?php
 
 $cond = $_POST['date'];


          $filename = "orders.xls";
          $exists = file_exists('excelwork.xls');
          if($exists)
          {
                   unlink($filename);
          }
                   $filename = "orders.xls";
                   $fp = fopen($filename, "wb");
				   
                  if($cond == 't'){
					$date = date("Y-m-d",time());
					$query = "SELECT * from orders where created > '$date'";
					$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
					}
					
					
				else if($cond == 'y'){
					$yDate = date("Y-m-d",strtotime('-1 day'));
					$today = date("Y-m-d",time());
					$query = "SELECT * from orders where created between '$yDate' AND '$today'";
					$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
				}
				
				
				else if($cond == 'lw'){
				$date = date("Y-m-d",strtotime('-1 week'));
				$query = "SELECT * from orders where created > '$date'";
				$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
				}
				
				else if($cond == 'lm'){
				$date = date("Y-m-d",strtotime('-1 month'));
				$query = "SELECT * from orders where created > '$date'";
				$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
				}
				
				
				
				else if($cond == 'lsm'){
				$date = date("Y-m-d",strtotime('-6 month'));
				$query = "SELECT * from orders where created > '$date'";
				$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
				}
				
				
				else if($cond == 'ly'){
				$date = date("Y-m-d",strtotime('-1 year'));
				$query = "SELECT * from orders where created > '$date'";
				$exec = mysql_query($query) or die("Error in Delete Query :".mysql_error());
				}
				
				
                   $result = mysql_query($query);
                   $schema_insert = "";
                   $schema_insert_rows = "";
                   for ($i = 0; $i < mysql_num_fields($result); $i++)
                   {
                   $insert_rows .= mysql_field_name($result,$i) . "\t";
                   }
                   $insert_rows.="\n";
                   fwrite($fp, $insert_rows);
				   
                   while($row = mysql_fetch_row($result))
                   {
				   
				   $insert = implode("\t",$row); //$row[1]. "\t" .$row[2]. "\t".$row[3]. "\t".$row[4]. "\t".$row[5];
                   $insert .= "\n";               //       serialize($assoc)
                   fwrite($fp, $insert);
                   }
                   if (!is_resource($fp))
                   {
                             echo "cannot open excel file";
                   }
                   echo "success full export";
				    echo "<br>";
				  	echo '<a href="orders.xls">Download orders Report</a>';
                   fclose($fp);
?>


    	</div>    
            
    	</div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
</body>
</html>

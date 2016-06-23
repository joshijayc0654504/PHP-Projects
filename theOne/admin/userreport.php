<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users</title>

 <link href="css/styles.css" rel="stylesheet" type="text/css" />
 </head>

<body>


<!--/*Header*/-->
        
        <?php include_once('include/headeruserreport.php');?>
        <?php 
        include_once('connection.php');
		error_reporting(0);
        ?>
        
        <!--/*Header End*/-->
<div id="background">  
                    
                <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                
                
            <div id="logo-main-right">Users.....<br /><br/>

 
<?php
 
 include_once('connection.php');


          $filename = "user.xls";
          $exists = file_exists('excelwork.xls');
          if($exists)
          {
                   unlink($filename);
          }
                   $filename = "user.xls";
                   $fp = fopen($filename, "wb");
                   $sql = "select * from user";
                   $result = mysql_query($sql);
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
                   echo "Success Full Export";
				   echo "<br>";
				   echo "<br>";
				   echo '<a href="user.xls">Download User Report</a>';
                   fclose($fp);
?>

    	</div>    
            
    	</div>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
</body>
</html>

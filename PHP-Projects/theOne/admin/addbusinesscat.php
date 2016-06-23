    
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Categories</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--Connectinon With User Login-->
    
    
    <!--/*Header*/-->
                        
                        <?php include_once('include/headerbusiness.php');?>
                        <?php 
                        include_once('connection.php');
                        ?>
                        
                        <!--/*Header End*/-->
    <!--End Connection-->
    
    <!--Form Start-->
    
     <div id="background"> 
        <div id="logo-main-left"><?php include_once("include/left.php");?></div>

             <div id="logo-main-right">Add Categories Here................<br /><br/>
    <!--End Form -->  
    
    <!--Update Category-->
    
    <?php 
    if(isset($_REQUEST['catid'])){
    $catid=$_REQUEST['catid'];
    $sql="SELECT * FROM category WHERE catid=$catid";
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    $data=mysql_fetch_array($query,MYSQL_ASSOC);
    
    ?>
    <form action="include/include.php" method="post"  enctype="multipart/form-data">
    <div id="field" >
    <input type="hidden" name="catid" id="catid" value="<?php echo $data['catid']; ?>" />  
    <label>Category:</label><input class="inputbox" type="text" name="catname" id="catname" value="<?php echo $data['catname'];?>"/><br />
    <label>Status:</label> <select name="status" class="status" >
        <option value="" selected="selected" >select status</option>
         <option  <?php echo $data['status'] == "Active" ? 'selected="selected"' : ""; ?> value="Active">Active</option>
         <option  <?php echo $data['status'] == "Inactive" ? 'selected="selected"' : ""; ?> value="Inactive">Inactive</option>
        </select><br/><br />
        
        <input type="submit" name="submit" value="Update" id="submit" class="inputbox2" />
        <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    </div><br/>
           
    </form>
    
    <!--End Category-->
    
    <?php 
    }else{?>
    
    <!--Add Category-->
    
    <form action="include/include.php" method="post" enctype="multipart/form-data">
    <div id="field" >
    <input type="hidden" name="catid" id="catid" />
    <label>Category:</label><input class="inputbox" type="text" name="catname" id="catname" value=""/><br />
    <label>Status:</label> <select name="status" class="status" >
        <option value="" selected="selected" >select status</option>
         <option value="Active">Active</option>
         <option value="Inactive">Inactive</option>
        </select><br/><br />
        
        
        <input type="submit" name="submit" value="submit" id="submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    </div><br/>
           
    </form>
    
    <!--End Category-->
    
    <!--Show Data-->
    
    <?php } ?>
    <table border="1" cellpadding="4">
        <tr>
            <th>catid</th>
            <th>catname</th>
            <th>status</th>
            <th>created</th>
            <th>modified</th>
       
            <th>Delete</th>
            <th>Update</th>
        </tr>
    
    
     <?php 
    
    $connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
    $db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());
    
    
    $sql = "SELECT catid,catname,status,created,modified FROM category";
    
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    while ($data=mysql_fetch_assoc($query)){?>
    
        <tr>
            <td><?php echo $data['catid'];?></td>
            <td><?php echo $data['catname'];?></td>
            <td><?php echo $data['status'];?></td>
            <td><?php echo $data['created'];?></td>
            <td><?php echo $data['modified'];?></td>
     
            <td><a href="include/include.php?catid=<?php echo $data['catid'];?>">Delete</a></td>
            <td><a href="addcat.php?catid=<?php echo $data['catid'];?>">Update</a></td>
            </tr>
    <?php
    }
    ?>
    </table>
    
    <!--End Data Show-->
    </div>

    </div>
    <!--/*Footer*/--> 
        
    <?php include_once('include/footer.php');?>
        
        <!--/*Footer End*/-->
    </body>
    </html>
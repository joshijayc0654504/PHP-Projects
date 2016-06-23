    
    
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Subcategories</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    
    $(document).ready(function()
    {
        $(".scatid").change(function()
        {
            var id=$(this).val();
            
            var dataString = 'id='+ id;
            if(id==0){
                $(".catid").html("<option value='0'>--Select cat--</option>"); 
                $('.catid').attr('disabled','disabled');
                
            }
            else
            {
                $.ajax
                ({
                    type: "POST",
                    url: "subcatjoin.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".catid").html(html);
                        $('.catid').removeAttr('disabled');
                    } 
                });
            }
            
        });
        
    </script>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <!--/*Header*/-->
                    
                    <?php include_once('include/headerlogo.php');?>
                    <?php 
                    include_once('connection.php');
                    ?>
                    
                    <!--/*Header End*/-->
    
    <!--Form-->
    
     <div id="background"> 
        <div id="logo-main-left"><?php include_once("include/left.php");?></div>
                <div id="logo-main-right">Add Subcategories Here................<br /><br/>
    
    <!--End Form-->
    
    <!--Connection Data-->
    
    <?php 
    
    $sql = "SELECT scatid,catid,scatname,status,created,modified FROM subcategory";
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    ?>
    
    <!--End Connection-->
    
    <!--Update Form-->
    <?php 
    if(isset($_REQUEST['scatid'])){
    $scatid=$_REQUEST['scatid'];
    $sql="SELECT * FROM subcategory WHERE scatid=".$scatid;
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    $data=mysql_fetch_array($query,MYSQL_ASSOC);
    
    ?>
    <?php
    
    $query="SELECT c.catname
    FROM `category` c
    JOIN subcategory s ON c.catid = s.catid
    LIMIT 0 , 30";
    ?> 
    
    
    <form action="include/subinclude.php" method="post" enctype="multipart/form-data">
    <div id="field" >
    <input type="hidden" name="scatid" id="scatid" value="<?php echo $data['scatid']; ?>" />
    
    
     
    <label>Category:</label><select name="catid" class="catid"  ><br/>
    <option selected="selected" value="" ><?php echo $data['catid']; ?></option>
    
    <?php
    
    $sql=mysql_query("select catid,catname from category");
    while($row=mysql_fetch_array($sql))
    {
    $id=$row['catid'];
    $fdata=$row['catname'];
    echo '<option value="'.$id.'">'.$fdata.'</option>';
     } 
    ?>
    
    </select><br />
    <label>Subcategory:</label><input class="inputbox" type="text" name="scatname" id="scatname" value="<?php echo $data['scatname'];?>"/><br />
    <label>Status:</label> <select name="status" class="status" >
        <option value="0" <?php echo $data['status'] == 0 ? "selected":"";?> >Select status</option>
         <option value="Active"  <?php echo $data['status'] == 'Active' ? "selected" : ""; ?> >Active</option>
         <option value="Inactive"  <?php echo $data['status'] == 'Inactive' ? "selected" : ""; ?> >Inactive</option>
        </select><br/><br />
    <br/><br />
    <input type="submit" name="submit" value="Update" id="submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    </div><br/>   
    </form>
    
    <!--End Update Form-->
    <?php 
    }else{?>
    <!--Data iNSERT IN Sub Cat-->
    <?php
    
    $query="SELECT c.catname
    FROM `category` c
    JOIN subcategory s ON c.catid = s.catid
    LIMIT 0 , 30";
    ?> 
    
    <form action="include/subinclude.php" method="post" enctype="multipart/form-data">
    <div id="field" >
    <input type="hidden" name="scatid" id="scatid" />
    <label>Category:</label><select name="catid" class="catid"  >
    <option value="<?php echo $data['catname']; ?>" selected="selected" >Select category</option>
    
    <?php
    
    $sql=mysql_query("select catid,catname from category");
    while($row=mysql_fetch_array($sql))
    {
    $id=$row['catid'];
    $data=$row['catname'];
    echo '<option value="'.$id.'">'.$data.'</option>';
     } 
    ?>
    
    </select><br />
    <label>Subcategory:</label><input class="inputbox" type="text" name="scatname" id="scatname" value=""/><br />
    <label>Status:</label> <select name="status" class="status" >
        <option value="" selected="selected" >select status</option>
         <option value="Active">Active</option>
         <option value="Inactive">Inactive</option>
        </select>
    <br/><br />
    <input type="submit" name="submit" value="submit" id="submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    </div><br/>   
    </form>
    <?php } ?>
    <!--End Data Insert in SubCat-->
    
    
    <!--View Table-->
    
    <table border="1" cellpadding="4">
        <tr>
            <th>scatid</th>
            <th>catname</th>
            <th>scatname</th>
            <th>status</th>
            <th>created</th>
            <th>modified</th>
       
            <th>Delete</th>
            <th>Update</th>
        </tr>
    
    
    <?php 
    
    
    
    $sql = "SELECT s.scatid,c.catname,s.scatname,s.status,s.created,s.modified FROM `subcategory` s
    JOIN category c ON s.catid = c.catid";
    
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    while ($data=mysql_fetch_assoc($query)){?>
    
        <tr>
            <td><?php echo $data['scatid'];?></td>
            <td><?php echo $data['catname'];?></td>
            <td><?php echo $data['scatname'];?></td>
            <td><?php echo $data['status'];?></td>
            <td><?php echo $data['created'];?></td>
            <td><?php echo $data['modified'];?></td>
     
            <td><a href="include/subinclude.php?scatid=<?php echo $data['scatid'];?>">Delete</a></td>
            <td><a href="addsubcat.php?scatid=<?php echo $data['scatid'];?>">Update</a></td>
            </tr>
    <?php
    }
    ?>
    </table>
    
    <!--End View-->
    
    </div>
    </div>
    </div>
     <!--/*Footer*/--> 
        
    <?php include_once('include/footer.php');?>
        
        <!--/*Footer End*/-->
    </body>
    </html>
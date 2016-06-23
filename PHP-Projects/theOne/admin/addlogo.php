    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Logo</title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    
    $(document).ready(function()
    {
        $(".logoid").change(function()
        {
            var id=$(this).val();
            alert(id);
            var dataString = 'id='+ id;
            if(id==0){
                $(".catid").html("<option value='0'>--Select cat--</option>"); 
                $('.catid').attr('disabled','disabled');
                $(".scatid").html("<option value='0'>--Select subcat--</option>"); 
                $('.scatid').attr('disabled','disabled');
            }
            else
            {
                $.ajax
                ({
                    type: "POST",
                    url: "logojoin.php",
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
        $(".catid").change(function()
        {
            var id=$(this).val();
            var dataString = 'catid='+ id;
            if(id==0){
                $(".scatid").html("<option value='0' selected='selected'>--Select subcat--</option>"); 
                $('.scatid').attr('disabled','disabled');
            }
            else
            {
            
                $.ajax
                ({
                    type: "POST",
                    url: "logojoin.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".scatid").html(html);
                        $('.scatid').removeAttr('disabled');
                    } 
                });
            }
        });
    });
        
    </script>
    
    
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
    
    <?php include_once('include/headerlogo.php');?>
    <?php 
    include_once('connection.php');
    ?>
    
    <!--/*Header End*/-->
   
    </div>
    <div id="background"> 
        
       
        
            
                 <div id="logo-main-left"><?php include_once("include/left.php");?></div><br />
                <div id="logo-main-right">Add Logo Here................<br />
                    <ul>
                        <li>Categories Name</li>
                        <li>Status</li>
                    </ul>
    
    
    <?php   
    
       
    if(isset($_POST['delete'])){
    //print_r($_POST);
    $dids = implode(",",$_POST['deleteID']);
    for($i=0;$i<count($_POST['deleteID']);$i++){
    $del_id=$_POST['deleteID'][$i];
    }
     $sql = "DELETE FROM logo WHERE logoid IN ($dids);";
    $result = mysql_query($sql);
    
    }
    
    $data=$_REQUEST;
    $sql = "SELECT * FROM logo "; 
    $exec= mysql_query($sql) or die ("Error in Product Fetch :".mysql_error());
    //$data = mysql_fetch_array($exec,MYSQL_ASSOC);
    $count=mysql_num_rows($exec);
    
    ?>
    <?php 
    
    $sql = "SELECT logoid,photo,keyword,catid,scatid FROM logo";
    $query = mysql_query($sql) or die("Error in select:".mysql_error());
    ?>
    
    <!--update form starts-->
    
    <?php 
    if(isset($_REQUEST['logoid'])){
    $logoid=$_REQUEST['logoid'];
    
    ?>
    
    <?php 
    $query="SELECT l. * , c.catname, s.scatname
    FROM `logo` l
    JOIN category c ON l.catid = c.catid
    JOIN subcategory s ON l.scatid = s.scatid
    WHERE logoid=".$logoid."
    LIMIT 0 , 30";
    $query = mysql_query($query) or die("Error in select:".mysql_error());
    $data=mysql_fetch_array($query,MYSQL_ASSOC);
    
    ?>
    
    <form action="logoinclude.php" method="post" enctype="multipart/form-data">
    <div id="field">
            <input type="hidden" name="logoid" class="logoid" id="logoid"  value="<?php echo $data['logoid']; ?>"  />
            
            <input type="hidden" name="scatid" id="scatid"  value="<?php echo $data['scatid']; ?>"/>
            <label>Category:</label><select name="catid" class="catid"  >
            <option value ="<?php echo $data['catid']; ?>" selected="selected"><?php echo $data['catname']; ?></option>
                <?php
                $sql=mysql_query("select catid,catname from category");
                while($row=mysql_fetch_array($sql))
                {
                    $id=$row['catid'];
                    $cdata=$row['catname'];
                    echo '<option value="'.$id.'">'.$cdata.'</option>';
                } 
                ?>
    
    
                </select><br /><br />
            <label>Subcategory:</label><select name="scatid" class="scatid"  >
                <option selected="selected"  value="<?php echo $data['scatid']; ?>" ><?php echo $data['scatname']; ?></option>
                <?php
                $sql=mysql_query("select scatid,scatname from category");
                while($row=mysql_fetch_array($sql))
                {
                    $id=$row['scatid'];
                    $sdata=$row['scatname'];
                    echo '<option value="'.$id.'">'.$sdata.'</option>';
                } 
                ?>
                
                </select><br /><br />
                <label>Add Logo:</label><input type="file" name="photo" id="photo" />
      <input type="hidden" value="<?php echo $data['photo'];?>" id="oldphoto" name ="oldphoto" /><img src="images/<?php echo $data['photo']?>" height="50" width="auto" /><br /><br />
                <label>Keyword:</label><textarea name="keyword"  rows="5" cols="40" ><?php echo $data['keyword'];?></textarea><br /> 
                 <label>Price:</label><input type="text" name="price" id="price" value="<?php echo $data['price'];?>" /><br />
                <input type="submit" name="submit" value="Update" id="submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
        </div>	
    </form><br />
    
    <!--update form ends-->
    <?php 
    }else{ ?>
    
    <!--insert form starts-->
    <?php 
    $query="SELECT l. * , c.catname, s.scatname
    FROM `logo` l
    JOIN category c ON l.catid = c.catid
    JOIN subcategory s ON l.scatid = s.scatid
    LIMIT 0 , 30";
    
    $execq = mysql_query($query) or die(mysql_error());
    $data = mysql_fetch_assoc($execq);
    
    ?>
    
    <form action="logoinclude.php" method="post" enctype="multipart/form-data">
    <div id="field">
            <input type="hidden" name="logoid" class="logoid" id="logoid" />
            <input type="hidden" name="catid" id="catid" />
            <input type="hidden" name="scatid" id="scatid" />
            <label>Category:</label><select name="catid" class="catid"  >
            <option selected="selected" value="<?php echo $data['catname']; ?>" >select category</option>
                <?php
                $sql=mysql_query("select catid,catname from category");
                while($row=mysql_fetch_array($sql))
                {
                    $id=$row['catid'];
                    $cdata=$row['catname'];
                    echo '<option value="'.$id.'">'.$cdata.'</option>';
                } 
                ?>
    
    
                </select><br /><br />
            <label>Subcategory:</label><select name="scatid" class="scatid"  >
                <option selected="selected"  value="<?php echo $data['scatid']; ?>" >select subcat</option>
                <?php
                $sql=mysql_query("select scatid,scatname from category");
                while($row=mysql_fetch_array($sql))
                {
                    $id=$row['scatid'];
                    $cdata=$row['scatname'];
                    echo '<option value="'.$id.'">'.$cdata.'</option>';
                } 
                ?>
                
                </select><br /><br />
                <label>Add Logo:</label><input type="file" name="photo" id="photo" /><br /><br />
                <label>Keywords:</label><textarea name="keyword"  rows="5" cols="40" ></textarea><br /> <br /> 
                <label>Price:</label><input type="text" name="price" id="price" /><br />          
                <input type="submit" name="submit" value="submit" id="submit" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
        </div>	
    </form><br />
    
    <?php } ?>
    <!-- insert ends-->
    
    <!--View Table-->
    
    <table border="1" cellpadding="4">
        <tr>
        <th></th>
            <th>logoid</th>
            <th>catname</th>
            <th>scatname</th>
            <th>photo</th>
            <th>keyword</th>
            <th>price</th>
            <th>created</th>
            <th>formated</th>
       
           
            <th>Update</th>
        </tr>
    
    
    <?php 
    
    
    
    $sql = "SELECT l.logoid,l.photo,l.keyword,l.price,c.catname,s.scatname,l.created,l.formated FROM `logo` l
    JOIN category c ON l.catid = c.catid
    JOIN subcategory s ON l.scatid = s.scatid";
    
    
    $query = mysql_query($sql) or die("Error in select:".mysql_error());?>
    
    <form action="#" name="form" enctype="multipart/form-data" method="post" onSubmit="return validate()";>
    <?php
     
    while ($data=mysql_fetch_assoc($query)){?>
    
        <tr>
         <td><input type="checkbox" name="deleteID[]" value="<?php echo $data['logoid'];?>" id="deleteID"  /></a></td>
            <td><?php echo $data['logoid'];?></td>
            <td><?php echo $data['catname'];?></td>
            <td><?php echo $data['scatname'];?></td>
            <td><img src="images/<?php echo $data['photo'];?>" alt="no image" height="50" width="auto" /></td>
            <td><?php echo $data['keyword'];?></td>
            <td><?php echo $data['price'];?></td>
            <td><?php echo $data['created'];?></td>
            <td><?php echo $data['formated'];?></td>
     
    
            <td><a href="addlogo.php?logoid=<?php echo $data['logoid'];?>">Update</a></td>
            </tr>
    <?php
    }
    ?>
    </table>
    
    <input type="submit" name="delete" value="Delete" id="delete"  />
    </form>
    <!--End View-->
    
      
    
        
    </div>
    
    </div>
    <!--/*Footer*/--> 
        
    <?php include_once('include/footer.php');?>
        
        <!--/*Footer End*/-->
    </body>
    </html>
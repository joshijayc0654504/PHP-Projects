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
                    url: "logocreatejoin.php",
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
                    url: "logocreatejoin.php",
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
 
 
 
 
 
 <?php 
            $catsql = "SELECT catid,catname FROM category";
            $exec = mysql_query($catsql) or die(mysql_error());
        ?>
    
        <?php 
            $query = "select scatid,scatname FROM subcategory";
            $execq = mysql_query($query) or die(mysql_error());
            $sKeyw = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        ?>
        
        
        <?php
		if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Search1')
		{
			$type=$_REQUEST['type'];
			$query2= "SELECT * from logocreate WHERE type='$type'";
			$exec2= mysql_query($query2) or die ("error in query execution".mysql_error());
		}
 	
	
		?>
       
    
    
    <form action="#" method="post" name="logocreate" enctype="multipart/form-data">
    <ul style="list-style-type:none">
   <?php 
    $query="SELECT l. * , c.catname, s.scatname
    FROM `logo` l
    JOIN category c ON l.catid = c.catid
    JOIN subcategory s ON l.scatid = s.scatid
    LIMIT 0 , 30";
    
    $execq = mysql_query($query) or die(mysql_error());
    $data = mysql_fetch_assoc($execq);
    
    ?>
    
    <form action="include/logoinclude.php" method="post" enctype="multipart/form-data">
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
                
    <!-- insert ends-->
    <label>Your Text here:</label>
    <input type="text" id="txt" name="text" value="Your text Here" >
  
    <label>Search:</label>
    <input type="text" name="keyword" value="" >
    
    <input type="submit" name="submit" value="Search"  />
    <input type="reset" name="Reset" value="Reset" />
    </ul>
    </form>
    <pre>&nbsp;
    
    
    </pre>
 
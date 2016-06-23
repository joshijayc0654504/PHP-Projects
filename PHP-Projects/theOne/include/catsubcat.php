 <?php 
            $catsql = "SELECT catid,catname FROM category";
            $exec = mysql_query($catsql) or die(mysql_error());
        ?>
    
        <?php 
            $query = "select scatid,scatname FROM subcategory";
            $execq = mysql_query($query) or die(mysql_error());
            $sKeyw = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        ?>
    
    
    
    <form action="#" method="post" name="logo" enctype="multipart/form-data">
    <ul style="list-style-type:none">
    <li><h2>Category</h2></li>
        <?php 
            while($data=mysql_fetch_array($exec,MYSQL_ASSOC)){
        ?>
        
        <?php 
            $catname=explode(",",$data['catname']);
        ?>
    <input type="checkbox" name="catname[]" id="catname" value="<?php echo $data['catid'];?>" <?php echo in_array("catname",$catname)? "checked":"" ?>/><?php echo $data['catname'];?><br /><br />
    
    <?php }?>
    
    <li><h2>Subcategory</h2></li>
        <?php 
            while($dataq=mysql_fetch_array($execq,MYSQL_ASSOC)){
        ?>
    <input type="checkbox" name="scatname[]" value="<?php echo $dataq['scatid'];?>"/><?php echo $dataq['scatname'];?><br /><br />
    
    <?php }?>
    
    <br />
    
    <label>Keywords</label>
    <input type="text" name="keyword" value="<?php echo $sKeyw;?>" >
    <input type="submit" name="submit" value="Search"  />
    <input type="reset" name="Reset" value="Reset" />
    </ul>
    </form>
    <pre>&nbsp;
    
    
    </pre>
 
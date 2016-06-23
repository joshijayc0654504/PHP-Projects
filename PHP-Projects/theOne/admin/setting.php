    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Setting</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    
    $(document).ready(function()
    {
        $(".country").change(function()
        {
            var id=$(this).val();
            
            var dataString = 'id='+ id;
            if(id==0){
                $(".state").html("<option value='0'>--Select State--</option>"); 
                $('.state').attr('disabled','disabled');
                $(".city").html("<option value='0' selected='selected'>--Select City--</option>"); 
                $('.city').attr('disabled','disabled');
            }
            else
            {
                $.ajax
                ({
                    type: "POST",
                    url: "join.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".state").html(html);
                        $('.state').removeAttr('disabled');
                    } 
                });
            }
            
        });
        
        $(".state").change(function()
        {
            var id=$(this).val();
            var dataString = 'stateId='+ id;
            if(id==0){
                $(".city").html("<option value='0' selected='selected'>--Select City--</option>"); 
                $('.city').attr('disabled','disabled');
            }
            else
            {
            
                $.ajax
                ({
                    type: "POST",
                    url: "join.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".city").html(html);
                        $('.city').removeAttr('disabled');
                    } 
                });
            }
        });
    });
    </script>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    
    
     <!--/*Header*/-->
                
                <?php include_once('include/headerweb.php');?>
                <?php 
                include_once('connection.php');
                ?>
                
                <!--/*Header End*/-->
    <?php
    
    $connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
    $db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());
    
    $query="SELECT s . * , cn.countryName, st.stateName, ct.cityName
    FROM `setting` s
    JOIN countries cn ON s.country LIKE cn.countryID
    JOIN states st ON s.state = st.stateID
    JOIN cities ct ON s.city = ct.cityID
    LIMIT 0 , 30";
    
    $execq = mysql_query($query) or die(mysql_error());
    $data = mysql_fetch_assoc($execq);
    
    
    /*$query = "select * from setting";
    $execq = mysql_query($query) or die(mysql_error());
    $data = mysql_fetch_assoc($execq);
    
    
    // from above you will get city,country,state ids.
    $counid = $data['country']; // here country wil be replaced with your fields name
    $cnQuery = "select * from countries where countryID like '$counid'";
    $cnexecq = mysql_query($cnQuery) or die(mysql_error());
    $cndata = mysql_fetch_assoc($cnexecq);
    $cnName = $cndata['countryName']; // cnName will be replaced with your field name
    
    // State
    $stateid = $data['state']; // here state wil be replaced with your fields name
    $stQuery = "select * from states where stateID = '$stateid'";
    $stexecq = mysql_query($stQuery) or die(mysql_error());
    $stdata = mysql_fetch_assoc($stexecq);
    $stateName = $stdata['stateName']; // stateName will be replaced with your field name
    
    // city 
    $cityid = $data['city']; // here city wil be replaced with your fields name
    $ctQuery = "select * from cities where cityID = '$cityid'";
    $ctexecq = mysql_query($ctQuery) or die(mysql_error());
    $ctdata = mysql_fetch_assoc($ctexecq);
    $cityName = $ctdata['cityName']; // cityName will be replaced with your field name*/
    
    
    
    
    /*$csql=mysql_query("select country from setting");
    while($crow=mysql_fetch_array($csql))
    {
    $cid=$crow['country'];
    
    
    echo '<option value="'.$cdata.'"></option>';
     } ?>*/
    
    
    /*$query ="select country,state,city from setting
    right join countries on setting.country = countries.'countryID'
    right join states on setting.state = states.'stateID'
    right join cities on setting.city = cities.'cityID'";*/
    /*
    $query="select cities.cityName from cities
    join states on cities.stateID=states.stateID
    join countries on states.countryID = countries.countryID";*/
    
    ?>
    
    <form action="settingupdatesave.php" method="post" name="formname" enctype="multipart/form-data"/>
    
    <div id="background"> 
        <div id="logo-main-left"><?php include_once("include/left.php");?></div>

         
    <div id="logo-main-right"><br/><br/>
    <div  id="field" >
    <label>Company Name:</label><input class="inputbox" type="text" name="companyname" id="companyname" value="<?php echo $data['companyname']; ?>"/>
    </div><br/>
    <div id="field" >
    <label>Phone:</label><input class="inputbox" type="text" name="phone" id="phone" value="<?php echo $data['phone']; ?>"/>
    </div><br/>
    <div  id="field" >
    <label>Email:</label><input class="inputbox" type="text" name="email" id="email" value="<?php echo $data['email']; ?>"/>
    </div><br/>
    <div  id="field" >
    <label>Address:</label><input class="inputbox" type="text" name="address" id="address" value="<?php echo $data['address']; ?>"/>
    </div><br/>
    <div  id="field" >
    <label>Copy Right:</label><input class="inputbox" type="text" name="copyright" id="copyright" value="<?php echo $data
    ['copyright']; ?>"/><br/>
    </div><br/>
    
    
    <div id="field">
      <label>Country :</label>
      <select name="country" class="country" >
        <option value="<?php echo $data['countryName']; ?>" selected="selected" ><?php echo $data['countryName']; ?></option>
        <?php
    
    $sql=mysql_query("select countryID,countryName from countries");
    while($row=mysql_fetch_array($sql))
    {
    $id=$row['countryID'];
    $fdata=$row['countryName'];
    echo '<option value="'.$id.'">'.$data.'</option>';
     } 
    
    
     ?>
     
      
     
      </select>
      <br/>
      <br/>
      
      <label>State :</label>
     
      <select name="state" class="state"   >
        <option selected="selected" value="<?php echo $data['stateName']; ?>"><?php echo $data['stateName']; ?></option>
    
      </select>
      <br/>
      <br/>
      <label>City :</label>
      <select name="city" class="city"  >
        <option selected="selected" value="<?php echo $data['cityName']; ?>"><?php echo $data['cityName']; ?></option>
    
    
      </select>
    </div>
    
    
    </br>
    <input type="submit" name="Update" value="Update" id="Update" class="inputbox2" />
    <input type="reset" name="Reset" value="Reset" class="inputbox2"/>
    <br /></div>
    
            
    </div>    
       
    </div>
    </div>
    </div>
    </div>
    </form>
    <!--/*Footer*/-->
    
     <?php include_once('include/footer.php');?>
    
    <!--/*Footer End*/-->
    </body>
    </html>
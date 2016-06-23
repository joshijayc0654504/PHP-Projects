<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Premium User Update Form</title>

</head>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/premiumuserval.js" type="text/javascript"> </script>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<body>
<?php error_reporting(0);?>
<?php 
session_start();
if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'exist'){
	echo "Username/Email already exist.";
}
?>
<div id="container">
<div id="Reg">
<font size="+3" color="#0567b2"><b> Premium User Update Form</b></font><br/>
</div>
<form action="premiumuserupdatesave.php" method="post" name="New Form" enctype="multipart/form-data">
<font size="+1" color="#03a712"><b>Personal Information</b></font><br />
-----------------------
<div  id="field" >
<input type="hidden" name="uid" value="<?php echo $data=$_SESSION['uid']?>" />
<input type="hidden" name="email" value="<?php echo $data=$_SESSION['email']?>" />
<label>First Name:</label><input class="inputbox" type="text" name="fname" id="fname" value="<?php echo $data['fname'];?>"/><span class="Red" id="First_Error"></span>
</div>
<div id="field" >
<label>Middle Name:</label><input class="inputbox" type="text" name="mname" id="mname" value="<?php echo $data['mname'];?>"/><span class="Red" id="Middle_Error"></span>
</div>
<div  id="field" >

<label>Last Name:</label><input class="inputbox" type="text" name="lname" id="lname" value="<?php echo $data['lname'];?>"/><span class="Red" id="Last_Error"></span><br/>
</div>

<div  id="field" >
<label1>Gender:</label1><input <?php echo $data['gender']=="male" ? "checked" :" ";?> type="radio" name="gender" value="Male"/>Male&nbsp;&nbsp;
		<input <?php echo $data['gender']=="female" ? "checked='checked'":"";?> type="radio" name="gender" value="Female"/>Female<span class="Red" id="Gender_Error"></span><br/>
</div>

<div  id="field" >

</div>

<div  id="field" >
<label>Date of Birth:</label><input class="inputbox" type="date" name="dob" id="dob" value="<?php echo $data['dob'];?>"/><span class="Red" id="Dob_Error"></span><br/>
</div>

<div  id="field" >
<label>Photo:</label><input  type="file" name="photo" id="photo"/><img src="upload/<?php echo $data['photo'];?>" height="50"  width="auto" alt="no image" /><input type="hidden" value="<?php $data['photo']?>" name="oldphoto" /><span class="Red" id="Photo_Error"></span><br/>
</div>
</br>

 

<font size="+1" color="#03a712"><b>Contact Information</b></font><br />
-----------------------

<div id="field">
<label>Email:</label><input class="inputbox" type="text" name="email" id="email" value="<?php echo $data=$_SESSION['email']['email'];?>"/><span class="Red" id="Email_Error"></span><br/>
<label>Phone Number:</label><input class="inputbox" type="text" name="phone" id="phone" value="<?php echo $data['phone'];?>"/><span class="Red" id="Phone_Error"></span><br/>
<label>Address:</label><textarea class="inputbox" name="address" id="address" value="<?php echo $data['address'];?>"></textarea><span class="Red" id="Address_Error"></span><br />
<label>City:</label>
<select name="city" class="inputbox" id="city">
<option value="-">Please select city</option>
    <option <?php echo $data['city']=="Rajkot" ? "selected": " ";?> value="Rajkot">Rajkot</option>
    <option <?php echo $data['city']=="Junagadh" ? "selected": " ";?> value="Junagadh">Junagadh</option>
    <option <?php echo $data['city']=="Ahmedabad" ? "selected": " ";?> value="Ahmedabad">Ahmedabad</option>
    <option <?php echo $data['city']=="Noida" ? "selected": " ";?> value="Noida">Noida</option>
    <option <?php echo $data['city']=="Jetpur" ? "selected": " ";?> value="Jetpur">Jetpur</option>
    </select><span class="Red" id="City_Error"></span><br /> 
    
<label>State:</label>
<select name="state" class="inputbox" id="state">
<option value="-">Please select State</option>
    <option <?php echo $data['state']=="Gujarat" ? "selected": " ";?> value="Gujarat">Guajrat</option>
    <option <?php echo $data['state']=="Maharastra" ? "selected": " ";?> value="Maharastra">Maharastra</option>
    <option <?php echo $data['state']=="Ap" ? "selected": " ";?> value="AP">AP</option>
    <option <?php echo $data['state']=="Up" ? "selected": " ";?> value="UP">UP</option>
    <option <?php echo $data['state']=="Punjab" ? "selected": " ";?> value="Punjab">Punjab</option>
    </select><span class="Red" id="State_Error"></span> <br/>
<label>Country:</label>
<input class="inputbox" type="text" name="country" id="country" value="<?php echo $data['country'];?>"/><span class="Red" id="Country_Error"></span><br/>

<label>Password:</label><input class="inputbox" type="password" name="password" id="password" value="<?php echo $data['password'];?>"/><span class="Red" id="Password_Error"></span><br/>
<label>Confirm Password:</label><input class="inputbox" type="password" name="cpassword" id="cpassword" value=""/><span class="Red" id="Password_Error"></span><br/>
</div><br/>



<font size="+1" color="#03a712"><b>Business Information </b></font><br />
----------------------------------
<div id="field">

<label>Occupation:</label>
<select name="occupation" class="inputbox" id="occupation">
<option value="-">Please select occupation</option>
    <option <?php echo $data['occupation']=="Business" ? "selected": " ";?> value="Business">Business</option>
    <option <?php echo $data['occupation']=="Govnt.Job" ? "selected": " ";?> value="Govnt.Job">Govnt.Job</option>
    <option <?php echo $data['occupation']=="Others" ? "selected": " ";?> value="Others">others</option>
    </select><span class="Red" id="Occupation_Error"></span><br/>
	
<label>Experience:</label>
<select name="experience" class="inputbox" id="experience">
<option value="-">Please select experience</option>
    <option <?php echo $data['experience']=="Fresher" ? "selected": " ";?> value="Fresher">Fresher</option>
    <option <?php echo $data['experience']=="1-2yrs" ? "selected": " ";?> value="1-2yrs">1-2 yrs</option>
    <option <?php echo $data['experience']=="3-4yrs" ? "selected": " ";?> value="3-4yrs">3-4 yrs</option>
    <option <?php echo $data['experience']=="more_than_5yrs" ? "selected": " ";?> value="more_than_5yrs">more than 5 yrs</option>
    </select><span class="Red" id="Experience_Error"></span><br /> 
<label>Basic Skillset:</label>

<select name="basicskillset" class="inputbox" id="basicskillset">
<option value="-">Please select skillset</option>
    <option <?php echo $data['basicskillset']=="ITcompany" ? "selected": " ";?> value="ITcompany">IT Company</option>
    <option <?php echo $data['basicskillset']=="Programer" ? "selected": " ";?> value="Programer">Programer</option>
    <option <?php echo $data['basicskillset']=="Devloper" ? "selected": " ";?> value="Devloper">Devloper</option>
    <option <?php echo $data['basicskillset']=="Others" ? "selected": " ";?> value="Others">Others</option>
    </select><span class="Red" id="Basicskillset_Error"></span><br /> 





</div>

----------------------------------
<div id="field">

</div>
<input type="submit" name="Submit" value="Submit" id="Submit" class="inputbox2" />
<input type="reset" name="Reset" value="Reset" class="inputbox2"/>
</form>
----------------------------------<br />
Click <a href="main.php"><b>here</b></a> Main Page.....<br />

</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Premium User Registeration Form</title>

</head>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/premiumuserval.js" type="text/javascript"> </script>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<body>
<?php 
session_start();
if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'exist'){
	echo "Username/Email already exist.";
}
?>
<div id="container">
<div id="Reg">
<font size="+3" color="#0567b2"><b> Premium User Registeration Form</b></font><br/>
</div>
<form action="premiumusersave.php" method="post" name="New Form" enctype="multipart/form-data">
<font size="+1" color="#03a712"><b>Personal Information</b></font><br />
-----------------------
<div  id="field" >
<input type="hidden" name="uid" value="<?php echo $data['uid']?>" />
<label>First Name:</label><input class="inputbox" type="text" name="fname" id="fname" value=""/><span class="Red" id="First_Error"></span>
</div>
<div id="field" >
<label>Middle Name:</label><input class="inputbox" type="text" name="mname" id="mname" value=""/><span class="Red" id="Middle_Error"></span>
</div>
<div  id="field" >

<label>Last Name:</label><input class="inputbox" type="text" name="lname" id="lname" value=""/><span class="Red" id="Last_Error"></span><br/>
</div>

<div  id="field" >
<label1>Gender:</label1><input type="radio" name="gender" value="Male"/>Male&nbsp;&nbsp;
		<input type="radio" name="gender" value="Female"/>Female<span class="Red" id="Gender_Error"></span><br/>
</div>

<div  id="field" >

</div>

<div  id="field" >
<label>Date of Birth:</label><input class="inputbox" type="date" name="dob" id="dob" value=""/><span class="Red" id="Dob_Error"></span><br/>
</div>

<div  id="field" >
<label>Photo:</label><input type="file" name="photo" id="photo"/><span class="Red" id="Photo_Error"></span><br/>
</div>
</br>

 

<font size="+1" color="#03a712"><b>Contact Information</b></font><br />
-----------------------

<div id="field">
<label>Email:</label><input class="inputbox" type="text" name="email" id="email" value=""/><span class="Red" id="Email_Error"></span><br/>
<label>Phone Number:</label><input class="inputbox" type="text" name="phone" id="phone" value=""/><span class="Red" id="Phone_Error"></span><br/>
<label>Address:</label><textarea class="inputbox" name="address" id="address" value=""></textarea><span class="Red" id="Address_Error"></span><br />
<label>City:</label>
<select name="city" class="inputbox" id="city">
<option value="-">Please select city</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Noida">Noida</option>
    <option value="Jetpur">Jetpur</option>
    </select><span class="Red" id="City_Error"></span><br /> 
    
<label>State:</label>
<select name="state" class="inputbox" id="state">
<option value="-">Please select State</option>
    <option value="Gujarat">Guajrat</option>
    <option value="Maharastra">Maharastra</option>
    <option value="AP">AP</option>
    <option value="UP">UP</option>
    <option value="Panjab">Panjab</option>
    </select><span class="Red" id="State_Error"></span> <br/>
<label>Country:</label>
<input class="inputbox" type="text" name="country" id="country" value=""/><span class="Red" id="Country_Error"></span><br/>
<label>Password:</label><input class="inputbox" type="password" name="password" id="password" value=""/><span class="Red" id="Password_Error"></span><br/>
<label>Confirm Password:</label><input class="inputbox" type="password" name="cpassword" id="cpassword" value=""/><span class="Red" id="Password_Error"></span><br/>
</div><br/>



<font size="+1" color="#03a712"><b>Business Information </b></font><br />
----------------------------------
<div id="field">

<label>Occupation:</label>
<select name="occupation" class="inputbox" id="occupation">
<option value="-">Please select occupation</option>
    <option value="Business">Business</option>
    <option value="Govnt.Job">Govnt.Job</option>
    <option value="Others">others</option>
    </select><span class="Red" id="Occupation_Error"></span><br/>
	
<label>Experience:</label>
<select name="experience" class="inputbox" id="experience">
<option value="-">Please select experience</option>
    <option value="Fresher">Fresher</option>
    <option value="1-2 yrs">1-2 yrs</option>
    <option value="3-4 yrs">3-4 yrs</option>
    <option value="more than 5 yrs">more than 5 yrs</option>
    </select><span class="Red" id="Experience_Error"></span><br /> 
<label>Basic Skillset:</label>

<select name="basicskillset" class="inputbox" id="basicskillset">
<option value="-">Please select skillset</option>
    <option value="IT company">IT Company</option>
    <option value="Programer">Programer</option>
    <option value="Devloper">Devloper</option>
    <option value="Others">Others</option>
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
	<?php 
	session_start();
	
	if(isset($_REQUEST['user']) && $_REQUEST['user'] == 'add'){
		echo "User added successfully.";
	}
	?>
	<div id="header1">
			  <div id="h1"> <font size="+6" color="#fff">Forget Password</font>
		<div id="login">
				  <?php /*
	echo "<pre>";
	print_r($_SESSION);*/
	if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
	?>
				  Welcome, <?php echo $_SESSION['email']['email']; ?> || <a href="logout.php">logout</a> ||
				  <?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == 1){
	?>
				  <a href="signinupdate.php">Profile</a>||<a href="main.php">Home</a>
				  <?php }else{ ?>
				  <a href="premiumuserupdate.php">Profile</a>||<a href="main.php">Home</a>
				  <?php } ?>
				  <?php }else{ ?>
	  
      
      <form action="checklogin.php" method="post" name="form" enctype="multipart/form-data">
	   
	
	   <label><b>Login Here</b></label><br/>
			<label>Email: </label>
			<input class="inputboxtextlog" type="text" name="email" id="email" value=""/>
		
			 <label>Password:</label>
			 <input class="inputboxtextlog" type="password" name="password" id="password" value=""/>
		
	 
	  
	  <!--<input type="submit" name="Submit" value="Submit" class="inputbox2" onclick="return validform();"/>-->
	  <input type="submit" name="Submit" value="Log In" id="Submit" class="inputboxlog" />
		</form>
	   <a href="usertypesignup.php"><font color="#000000"><u>Signup</u></font></a>(Click Here to Register) || <a href="forgetpass.php"><font color="#000000"><u>Forget Password</u></font></a> || <a href="front.php">Main</a><br />  
				    <br />
				  <?php } ?>
				</div>
	  </div>
			</div>
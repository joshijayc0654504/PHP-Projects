$(document).ready(function(){
	$('#Submit').click(function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var Filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		$('#First_Error').html("");
		$('#Last_Error').html("");
		$('#Email_Error').html('');
		$('#Password_Error').html('');
		
		
		
		if(fname == ''){
		
			$('#First_Error').html("Enter Your First Name");
			$('#fname').focus();
			return false;
		}
		
		if(lname == ''){
		
			$('#Last_Error').html("Enter your Last Name");
			$('#lname').focus();
			return false;
		
		}
		if(email == '' || !Filter.test($('#email').val())){
			$('#Email_Error').html('Enter Your Email');	
			$('#email').focus();
			return false;
		}
		if(password == ''){
			$('#Password_Error').html('Enter Your Password');	
			$('#password').focus();
			return false;
		}
		
		return true;
	});	
	return false;
});

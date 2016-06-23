$(document).ready(function(){
	$('#Submit').click(function(){
	
		var email = $('#email').val();
		var password = $('#password').val();
		var Filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		$('#Email_Error').html('');
		$('#Password_Error').html('');
		
		
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

$(document).ready(function(){
	$('#Submit').click(function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var Filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		
			if (fname == ''){
			alert("Enter the First Name");
			$('#fname').focus();
		return false;
			}
			
			if (lname == ''){
			alert("Enter the Last_Name");
			$('#lname').focus();
		return false;
			}
			
			if (email == '' || !Filter.test($('#email').val())){
			alert("Enter the Email");
			$('#email').focus();
		return false;
			}
			if (password == ''){
			alert("Enter the Password");
			$('#password').focus();
		return false;
			}
			
		return true;
	});	
	return false;
});
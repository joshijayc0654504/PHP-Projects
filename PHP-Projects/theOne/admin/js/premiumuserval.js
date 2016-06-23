$(document).ready(function(){
	$('#Submit').click(function(){
		var fname = $('#fname').val();
		var mname = $('#mname').val();
		var lname = $('#lname').val();
		var address = $('#address').val();
		var city = $('#city').val();
		var state = $('#state').val();
		var country = $('#country').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var cpassword = $('#cpassword').val();
		var photo = $('#photo').val();
		var dob = $('#dob').val();
		var occupation = $('#occupation').val();
		var phone = $('#phone').val();
		var Filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		$('#First_Error').html("");
		$('#Middle_Error').html("");
		$('#Last_Error').html("");
		$('#Address_Error').html("");
		$('#City_Error').html("");
		$('#State_Error').html("");
		$('#Country_Error').html("");
		$('#Email_Error').html('');
		$('#Password_Error').html('');
		$('#Password_Error').html('');
		$('#Photo_Error').html("");
		$('#Dob_Error').html("");
		$('#Occupation_Error').html("");
		$('#Phone_Error').html("");
		
		
		if(fname == ''){
		
			$('#First_Error').html("Enter Your First Name");
			$('#fname').focus();
			return false;
		}
		if(mname == ''){
		
			$('#Middle_Error').html("Enter your Middle Name");
			$('#mname').focus();
			return false;
		}
		if(lname == ''){
		
			$('#Last_Error').html("Enter your Last Name");
			$('#lname').focus();
			return false;
		
		}
		if(address == ''){
		
			$('#Address_Error').html("Enter your Address");
			$('#address').focus();
			return false;
		}
		if(city == ''){
		
			$('#City_Error').html("Enter your City");
			$('#city').focus();
			return false;
		}
		if(state == ''){
		
			$('#State_Error').html("Enter your State");
			$('#state').focus();
			return false;
		}
		if(country == ''){
		
			$('#Country_Error').html("Enter your Country");
			$('#country').focus();
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
		if(cpassword == ''){
			$('#Password_Error').html('Enter Confirm Password');	
			$('#cpassword').focus();
			return false;
		}
		if(photo == ''){
		
			$('#Photo_Error').html("Your Photo Upload Here");
			$('#photo').focus();
			return false;
		}
		if(dob == ''){
		
			$('#Dob_Error').html("Enter your Date of Birth");
			$('#dob').focus();
			return false;
		}
		if(gender == ''){
		
			$('#Gender_Error').html("Enter your Gender");
			$('#gender').focus();
			return false;
		}
		if(phone == ''){
		
			$('#Phone_Error').html("Enter Phone Number");
			$('#phone').focus();
			return false;
		}
		return true;
	});	
	return false;
});

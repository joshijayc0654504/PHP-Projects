var login_response = '<div id="logged_in">' +
'<div style="width: 350px; float: left; margin-left: 70px;">' +
'<div style="width: 40px; float: left;">' +
'<img style="margin: 10px 0px 10px 0px;" align="absmiddle" src="images/ajax-loader.gif">' +
'</div>' +
'<div style="margin: 10px 0px 0px 10px; float: right; width: 300px;">'+
"You are successfully logged in! <br /> Please wait while you're redirected...</div></div>";
$('a.modalCloseImg').hide();

$('#simplemodal-container').css("width","500px");
$('#simplemodal-container').css("height","120px");

$(this).html(login_response); // Refers to 'status'

// After 3 seconds redirect the
setTimeout('go_to_private_page()', 3000);
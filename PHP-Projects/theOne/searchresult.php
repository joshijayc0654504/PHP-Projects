<pre>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
$host="localhost";
$user="root";
$password="";
$db="theone";
$conn = mysql_connect($host,$user,$password) or die(mysql_error());
$db = mysql_select_db($db,$conn) or die(mysql_error());

print_r($_POST);
$Search = $_POST['Searchword'];
$sql = "SELECT fname FROM puserlogin where fname like '%$Search%'";
$query = mysql_query($sql) or die(mysql_error());
$result = mysql_num_rows($query);
echo "<br>Results Found : ".$result." for \"".$Search."\"<br> ";
while ($data = mysql_fetch_assoc($query)){
echo $data['fname'];
}
?>

Click <a href="main.php">here</a> to go home.
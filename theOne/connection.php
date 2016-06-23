<?php
$host="localhost";
$user="root";
$db="theone";
$password="";
$connection = mysql_connect("localhost","root","") or die("Error in connection:".mysql_error()); 
$db_select = mysql_select_db("theone",$connection) or die("Error in db select:".mysql_error());
$query= "select * from theone";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body >
<div>
<?php
//state drop down
    echo "<td"." id="."id_sel_state".">";
    $con=mysql_connect("localhost","root","");
    mysql_select_db("theone",$con);
    $query=("SELECT countryName FROM country ");
    $result = mysql_query ($query); 
    echo "<label>Select Country : </label>"."<select id='country' onchange='getstateval()'>";

    while ($nt = mysql_fetch_array($result)){
    echo "<option value='".$nt['countryName']."'>".$nt['countryName']."</option>";
    }
    echo "</select>";

?>
</div>

</body>
</html>

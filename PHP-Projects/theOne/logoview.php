<?php
include_once('connection.php');

$sql = "SELECT photo FROM logo";
$exec = mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_array($exec,MYSQL_ASSOC);?>

<a href="admin/images/<?php echo $data['photo'];?>" rel="Photo" title="This is the description"><img src="admin/images/<?php echo $data['photo'];?>" height="600"  width="800"
            alt="no photo" /><br /></a>
          
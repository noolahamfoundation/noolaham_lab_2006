<?php
$dbhost = 'localhost';
$dbuser = 'noolaham_mauran';
$dbpass = 'mauranmm';
$dbname = 'noolaham_wiki';


//opendb
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('failed :' . mysql_error());
mysql_select_db ($dbname);
//mysql_query("SET NAMES 'UTF8'");


$query  = "SELECT img_metadata FROM image WHERE img_name='010.jpg'";
$result = mysql_query($query);


$row = mysql_fetch_array($result, MYSQL_NUM);

mysql_free_result($result);
mysql_close($conn);


header("Content-type: image/jpg") ; 
exit($row);




?>


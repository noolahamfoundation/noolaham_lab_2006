<?php
//opendb
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('failed :' . mysql_error());
mysql_select_db ($dbname);
mysql_query("SET NAMES 'UTF8'");
?>
<?php

$dbhost = 'localhost';
$dbuser = 'noolaham_mauran';
$dbpass = 'mauranmm';
$dbname = 'noolaham_wiki';


//opendb
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('failed :' . mysql_error());
mysql_select_db ($dbname);
mysql_query("SET NAMES 'UTF8'");



$query  = "SELECT page_title FROM page ORDER BY page_counter DESC LIMIT 0, 100";
$result = mysql_query($query);
echo "<br /><hr>hot பக்கங்கள்<br /><br /><hr>";


while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo $row['page_title'];
echo "<br />";

}

echo "<br /><hr>hot பயனர்<br /><br /><hr>";

$query  = "SELECT user_name FROM user ORDER BY user_editcount DESC LIMIT 0, 50";
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo $row['user_name'];
echo "<br />";

}


mysql_close($conn);

?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
<FORM action="" method="POST">
நூலின் முதல் எழுத்து/ எழுத்துக்கள்<INPUT type="text" name="pattern"> 
<INPUT type="hidden" name="click" value="yes"> 
<INPUT type="submit" name="ok" value="பட்டியலிடுக">
</FORM>
<table>
  <tbody>
<?php

$dbhost = 'localhost';
$dbuser = 'noolaham_mauran';
$dbpass = 'mauranmm';
$dbname = 'noolaham_wiki';


//opendb
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('failed :' . mysql_error());
mysql_select_db ($dbname);
mysql_query("SET NAMES 'UTF8'");

if ($_POST['click']=="yes")
{

$pattern = $_POST['pattern'];
$query  = "SELECT cl_sortkey FROM categorylinks WHERE cl_to='நூல்கள்'  AND cl_sortkey LIKE '$pattern%'";
$result = mysql_query($query);
echo "<br /><hr>நூற்பட்டியல்<br /><br /><hr>";


while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{

$bookname = $row['cl_sortkey'];


echo '<br />* <a href="http://noolaham.net/wiki/index.php?title='.$bookname.'" >'.$bookname.'</a><br />';



}

}
else {}


mysql_close($conn);

?>

  </body>
</html>

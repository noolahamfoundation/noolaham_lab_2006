<?php
echo 'தொகுக்கவேண்டிய பக்கம்: <a href="http://noolaham.org/wiki/index.php?title='.$_POST['title'].'&action=edit"  target="_blank">'.$_POST['title'].' </a>(புதிய சாளரத்தில் திறக்கும்)';
?>
<br />
<br />

<textarea cols="60" rows="22" onFocus="this.select()">
<?php
$number = $_POST['no'];

if ($number%100==0) {
	$list=($number/100);
}
else{
	$list=(floor(($number)/100))+1;

}


$auth = explode(',', $_POST['auth']);
$cat = explode(',', $_POST['cat']);
$pub = explode(',', $_POST['pub']);

$title = $_POST['title'];
$language = $_POST['language'];
$year = $_POST['year'];
$page = $_POST['page'];
$pdf = $_POST['pdf'];
$html = $_POST['html'];


if ($year=="-" OR $year=="") {
	$year_o = "-";
}
else{
	$year_o = "[[:பகுப்பு:$year|$year]]";
}



if ($_POST['cover']=="yes")
{
	$cover = "$number.jpg";
}
else
{
	$cover = "No cover.png";
}

echo "{{பிரசுரம்|
நூலக எண்     	= $number |
தலைப்பு             =  ''' $title ''' |
படிமம்          	=  [[படிமம்:$cover|150px]] |
ஆசிரியர்       	=  "; foreach ($auth as $value) {$value=trim($value); if ($value=="-" OR $value=="") {echo "-";} else{ echo "[[:பகுப்பு:$value|$value]] <br />";}} echo " | 
  வகை               =  "; foreach ($cat as $value) {$value=trim($value); if ($value=="-" OR $value=="") {echo "-";} else{ echo "[[:பகுப்பு:$value|$value]] <br />";}} echo " |
மொழி               =  $language |
பதிப்பகம்            =  "; foreach ($pub as $value) {$value=trim($value); if ($value=="-" OR $value=="") {echo "-";} else{ echo "[[:பகுப்பு:$value|$value]] <br />";}} echo " |
பதிப்பு              
பக்கங்கள்            =  $page
}}
\n
=={{Multi|வாசிக்க|To Read}}==\n";

if ($_POST['pdf']=="yes")
{
	echo "* [http://noolaham.net/project/$list/$number/$number.pdf $title] {{P}}\n";

}

else{}

if ($_POST['html']=="yes")
{
	echo "* [http://noolaham.net/project/$list/$number/$number.html $title] {{H}}\n";

}

else{}

echo "\n";

if ($year=="-" OR $year=="") {

}
else{
	echo "[[பகுப்பு:$year]]";
}

foreach ($pub as $value) {$value=trim($value); if ($value=="-" OR $value=="") {} else{ echo "[[பகுப்பு:$value]] ";}}


foreach ($cat as $value) {$value=trim($value); if ($value=="-" OR $value=="") {} else{ echo "[[பகுப்பு:$value]] ";}}

foreach ($auth as $value) {$value=trim($value); if ($value=="-" OR $value=="") {} else{ echo "[[பகுப்பு:$value]] ";}}





?>
</textarea>



<?php
echo 'தொகுக்கவேண்டிய பக்கம்: <a href="http://noolaham.org/wiki/index.php?title='.$_POST['mag_title'].' '.$_POST['mag_magno'].'&action=edit"  target="_blank">'.$_POST['mag_title'].' '.$_POST['mag_magno'].' </a>(புதிய சாளரத்தில் திறக்கும்)';
?>
<br />
<br />

<textarea cols="60" rows="22" onFocus="this.select()">

<?php
$number = $_POST['mag_no'];

if ($number%100==0) {
	$list=($number/100);
}
else{
	$list=(floor(($number)/100))+1;

}


if ($_POST['mag_cover']=="yes")
{
	$cover = "$number.jpg";
}
else
{
	$cover = "No cover.png";
}

$auth = explode(',', $_POST['mag_auth']);

$title = $_POST['mag_title'];
$magno = $_POST['mag_magno'];
$per= $_POST['mag_per'];
$year = $_POST['mag_year'];
$circ = $_POST['mag_circ'];
$lang = $_POST['mag_lang'];
$page = $_POST['mag_page'];



echo "{{இதழ்|
நூலக எண் = $number |
தலைப்பு = '''$title $magno''' |
படிமம் =[[படிமம்:$number.jpg|150px]] |
வெளியீடு = $per";if ($year=="-" OR $year=="") {echo "";} else{ echo " [[:பகுப்பு:$year|$year]] ";} echo"|
சுழற்சி = $circ |
இதழாசிரியர் = "; foreach ($auth as $value) {$value=trim($value); if ($value=="-" OR $value=="") {echo "-";} else{ echo "$value <br />";}} echo " |
மொழி = $lang |
பக்கங்கள் = $page |
}}


=={{Multi|வாசிக்க|To Read}}==


* [http://noolaham.net/project/$list/$number/$number.pdf $title $magno] {{P}}


[[பகுப்பு:இதழ்கள்]]
[[பகுப்பு:$title]]";
if ($year=="-" OR $year=="") {echo "";} else{ echo " [[பகுப்பு:$year]] ";}


?>
</textarea>

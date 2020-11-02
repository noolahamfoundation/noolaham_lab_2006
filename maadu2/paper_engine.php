<?php
echo 'தொகுக்கவேண்டிய பக்கம்: <a href="http://noolaham.org/wiki/index.php?title='.$_POST['paper_title'].' '.$_POST['paper_magno'].'&action=edit"  target="_blank">'.$_POST['paper_title'].' '.$_POST['paper_magno'].' </a>(புதிய சாளரத்தில் திறக்கும்)';
?>
<br />
<br />

<textarea cols="60" rows="22" onFocus="this.select()">
<?php
$number = $_POST['paper_no'];

if ($number%100==0) {
$list=($number/100);
}
else{
$list=(floor(($number)/100))+1;

}


if ($_POST['paper_cover']=="yes")
{
$cover = "$number.jpg";
}
else
{
$cover = "No cover.png";
}



$title = $_POST['paper_title'];
$magno = $_POST['paper_magno'];
$per= $_POST['paper_per'];
$year = $_POST['paper_year'];
$circ = $_POST['paper_circ'];
$lang = $_POST['paper_lang'];
$page = $_POST['paper_page'];



echo "{{பத்திரிகை|
நூலக எண் = $number |
தலைப்பு = '''$title $magno''' |
படிமம் =[[படிமம்:$number.jpg|150px]] |
வெளியீடு = $per";if ($year=="-" OR $year=="") {echo "";} else{ echo " [[:பகுப்பு:$year|$year]] ";} echo"|
சுழற்சி = $circ |
மொழி = $lang |
பக்கங்கள் = $page |
}}


=={{Multi|வாசிக்க|To Read}}==

* [http://noolaham.net/project/$list/$number/$number.pdf $title $magno] {{P}}


[[பகுப்பு:$title]]";
if ($year=="-" OR $year=="") {echo "";} else{ echo " [[பகுப்பு:$year]] ";}


?>
</textarea>
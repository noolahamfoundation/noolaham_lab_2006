<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>செக்குமாடு 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/maadu.css" type="text/css"
	media="screen">

<script src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>


<script>
  $(document).ready(function(){
    $("#example > ul").tabs({ cookie: { expires: 30 } });
  });
</script>


</head>

<body>

<div id="example" class="flora">

<ul>

	<li><a href="#fragment-1"><span>நூல்</span></a></li>
	<li><a href="#fragment-2"><span>இதழ்</span></a></li>
	<li><a href="#fragment-3"><span>பிரசுரம்</span></a></li>
	<li><a href="#fragment-4"><span>பத்திரிகை</span></a></li>
</ul>

<div id="fragment-1"><?php include 'book_form.html'; ?></div>
<div id="fragment-2"><?php include 'mag_form.html'; ?></div>
<div id="fragment-3"><?php include 'pamphlets_form.html'; ?></div>
<div id="fragment-4"><?php include 'paper_form.html'; ?></div>

<br />

<a style="color: #26a20d; font-size: 11px;"><strong>செக்குமாடு:</strong></a>
<a style="color: #919191; font-size: 10px;">நூலகம் மென்பொருட்பட்டறையின் ஆக்கம்.</a></div>


</body>
</html>
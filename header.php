<!DOCTYPE html>
<html>
<head>
	<title>PHP Coading Practice</title>
<style>
body{}
.header{background:#282923;
		color:#fff;
		text-align: center;
		font-size: 30px;
		 }
.header h1{
	padding:10px;
}
.footer{
	background: #282923;
	color: #fff;
	text-align: center;
	
}
.footer p{
	padding: 10px;
	font-size: 30px;
}
.editor{
	background: #39b5c2;
	text-align: center;
	padding: 20px;
	min-height: 400px;
	font-size: 20px;
}


	
</style>
</head>
<body>
		<div class="header">
		<?php
		date_default_timezone_set('asia/dhaka');
		$h = date('H');
		
		if ($h<'9') {
			echo'<h1>Good Morning Programmer Nazmul</h1>';
		}elseif ($h<'12') {
			echo "<h1>Good Forenoon Programmer Nazmul</h1>";
		}elseif ($h<'16') {
			echo "<h1>Good Afternoon Programmer Nazmul</h1>";
		}elseif ($h<'20') {
			echo "<h1>Good Evening Programmer Nazmul</h1>";
		}elseif ($h<'24') {
			echo "<h1>It's Your Working Time Programmer Nazmul</h1>";
		}else {echo "<h1>It's Sleeping Time Fall in Sleep</h1>";}
		?>

		</div>
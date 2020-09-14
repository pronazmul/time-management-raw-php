<?php include 'header.php'; ?>
	
	<div class="editor">
		<h1 style="color:white;">PHP DATE & TIME</h1>

<?php
//Get current location time...
date_default_timezone_set('asia/dhaka');
//Date is presents with date(); Function.
echo date("dS M Y")."<br>".date('dS m y')."<br>";
echo date('H:i:sa')."<br>".date('h:i:sa')."<br>";
// Convert the numaric time stamp into Unix time since 1 jan 1970.
// You can set a specific with this time stamp. 
echo "<h2> Date & Time With mktime()</h2>";
$x= mktime(11,40,20,11,20,2022);//numaric timestamp into unix timestamp.
$y= ceil(($x- time())/60/60/24);//time()specifies present unix timestamp
echo "There are ".$y." days until The time Stamp"."<br>";
echo "<br><br>";
//Remove decimel point with floor function...

echo "<h2>Floor funcition and Ceil function do the same work </h2>";
$stamp= strtotime('saturday');

$get= floor(($stamp- time())/60/60/24);
echo "There are $get days until the time stamp<br>";

//Get a specific date of the week....
echo "<h2> Get a specific date of the week or month</h2>";
$start=strtotime('saturday');
$end=strtotime('10 week');

while ($end>$start) {
	echo date('dS M l', $start)."<br>";
	$start= strtotime('+1 week', $start);
}


?>


	</div>

<?php include  'footer.php';?>

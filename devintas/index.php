<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// print_r($_POST);
	$color = 'white';
	$kiekPazymetu = count($_POST) - 1;
	echo "<h1>Buvo pazymeta $kiekPazymetu <br><br></h1>";
	$counter = $_POST['counter'];
	echo " <h2>is viso check boxu buvo $counter</h2>";
}
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$color = 'grey';}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>




<body style="background-color:<?=$color?>;">

<?php
$counter = 0;
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$rnd = rand(3, 10);
	echo "<form action=\"\" method=\"POST\">";

	echo "<button type=\"submit\">MYGTUKAS</button>";
	for ($i = 0; $i < $rnd; $i++) {
		echo " <input type=\"checkbox\" name=$i>";
		$counter++;
		if ($i == 0) {
			$name = "A";
		}
		if ($i == 1) {
			$name = "B";
		}
		if ($i == 2) {
			$name = "C";
		}
		if ($i == 3) {
			$name = "D";
		}
		if ($i == 4) {
			$name = "E";
		}
		if ($i == 5) {
			$name = "F";
		}
		if ($i == 6) {
			$name = "G";
		}
		if ($i == 7) {
			$name = "H";
		}
		if ($i == 8) {
			$name = "I";
		}
		if ($i == 9) {
			$name = "J";
		}
		echo "<label style=\"color:white;\" for=$i>$name</label>";
		echo "<input type=\"hidden\" name=\"counter\" value=\"$counter\">";
	}
}
?>

</form>


</body>
</html>

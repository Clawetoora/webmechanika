<?php
$color = 'black';

if (isset($_GET['color'])) {
	$color = $_GET['color'];
	print_r($_GET);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#<?=$color?>;">
    <a href="index2.php">Lalala</a>


 <form action="./index2.php" method="GET">

     <input type="text" name="color">
     <button type="submit">Nauja spalva</button>
    </form>



</body>
</html>
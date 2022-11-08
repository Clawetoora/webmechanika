<?php include 'header.php'?>



<?php
// print_r($_POST);
$player1 = $_POST['player1'];
$player2 = $_POST['player2'];
$taskai1 = $_POST['taskai1'];
$taskai2 = $_POST['taskai2'];
$count = $_POST['count'];
?>


<?php

if ($taskai1 >= 30) {
	echo "<div id='popup' ><p id='winner'>THE WINNER IS $player1 with $taskai1 points</p>
    <a id='play-again'href='./index.php'>PLAY AGAIN</a>
    </div>";
}
if ($taskai2 >= 30) {
	echo "<div id='popup'><p id='winner'>THE WINNER IS $player2 with $taskai2 points</p>
    <a id='play-again'href='./index.php'>PLAY AGAIN</a>
    </div>";
}

?>



<div class="container d-flex flex-column  align-items-center justify-content-center">
    <div class="col-4 d-flex justify-content-center game-name">
        <h1>Game</h1>
    </div>
 <div  class="container d-flex flex-column  align-items-center justify-content-center">
    <h3 class="mt-5 align-self-center">ROLL THE DICE</h3>
    <form class="container d-flex flex-column" action="./zaidimas.php" method="POST">
        <?php
$roll = rand(1, 6);

?>

<!-- <?=($count % 2 === 0) ? "background-color:red;" : ""?> -->

<input type="hidden" name="count" value="<?=$count + 1?>">

<div class="mt-5 player-cont">
    <div class="row mb-5">
<div class="col-sm-3"></div>
<div class="d-flex flex-column align-items-center col-sm-3 <?=$count % 2 == 0 ? "marked" : ""?>"  >
    <h1><?=$player1?></h1>
    <p class="taskai"><?=$taskai1?></p>

</div>

<div class=" d-flex flex-column align-items-center col-sm-3 <?=$count % 2 !== 0 ? "marked" : ""?>" >
    <h1><?=$player2?></h1>
    <p class="taskai"><?=$taskai2?></p>
</div>
<div class="col-sm-3"></div>
    </div>
</div>
    <?php
if ($count % 2 == 0) {
	$taskai1 += $roll;
}
if ($count % 2 !== 0) {
	$taskai2 += $roll;
}

?>
    <input type="hidden" name="player1" value="<?=$player1?>">
    <input type="hidden" name="player2" value="<?=$player2?>">
    <input type="hidden" name="taskai1" value="<?=$taskai1?>">
    <input type="hidden" name="taskai2" value="<?=$taskai2?>">
<button class="btn btn-game mt-5" type="submit">ROLL</button>


    </form>


 </div>

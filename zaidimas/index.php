<?php include 'header.php'?>

<div class="container d-flex flex-column  align-items-center justify-content-center">
    <div class="col-4 d-flex justify-content-center game-name">
        <h1>Game</h1>
    </div>
 <div  class="container d-flex flex-column  align-items-center justify-content-center">
    <h3 class="mt-5 align-self-center">Type in player names</h3>
    <form class="d-flex flex-column" action="./zaidimas.php" method="POST">
        <label class="player-names" for="player1">Player 1 name</label>
        <input type="text" name="player1">
        <label  class="player-names" for="player2">Player 2 name</label>
        <input type="text" name="player2">
        <input type="hidden" name="count" value="0">
        <input type="hidden" name="taskai1" value="0">
        <input type="hidden" name="taskai2" value="0">
        <button class="btn" type="submit">START THE GAME</button>

    </form>
 </div>
</div>
</body>
</html>

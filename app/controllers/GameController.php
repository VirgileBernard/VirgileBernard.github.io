<?php

class GameController{

public function start(){
    session_start();
    $game = new Game();
    $game->init($_POST['nbLignes']);
    $_SESSION['game'] = $game;

    require "../app/views/game.php";
}

public function play(){
    session_start();
    $game = $_SESSION['game'];

    $ligne = (int)$_POST['ligne'];
    $choix = (int)$_POST['choix'];

    $game->retirer($ligne, $choix);

    if($game->estTerminee()){
        $game->gameOver = true;
        $game->winner = "joueur1";
        require "../app/views/end.php";
        return;
    }

    $_SESSION['game'] = $game;
    require "../app/views.game.php";
}
}
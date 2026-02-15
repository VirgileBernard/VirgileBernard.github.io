<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/style.css">
    <title>BernimGame</title>
</head>
<body>

<h1>berNimGame</h1>

<!-- Messages de configuration -->
<div class="messages-settings">
    <?php foreach ($_SESSION['messages'] as $msg): ?>
        <?php if ($msg['class'] === 'setting'): ?>
            <p class="message setting"><?= htmlspecialchars($msg['text']) ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<?php if ($_SESSION['pyramide'] !== null && !$_SESSION['game_over']): ?>

    <p class="tour-actuel <?= $_SESSION['tour'] ?>">
        <?php
            if ($_SESSION['mode'] === "joueur") {
                echo ($_SESSION['tour'] === "joueur1") ? "Tour de Joueur 1" : "Tour de Joueur 2";
            } else {
                echo ($_SESSION['tour'] === "joueur1") ? "Votre tour" : "Tour de l'ordinateur";
            }
        ?>
    </p>

<?php endif; ?>


<?php if ($_SESSION['pyramide'] === null): ?>

<form method="post">
    <p>Choisissez votre adversaire :</p>
    <label><input type="radio" name="mode" value="ordi"> Ordinateur</label>
    <label><input type="radio" name="mode" value="joueur"> Joueur</label>

    <p>Choisissez la taille de la pyramide</p>
    <input type="range" name="nbLignes" min="3" max="5" step="1" value="3" id="sliderPyramide">

    <p class="txt-secondary">Taille : <span id="valeurPyramide">3</span> lignes</p>

    <div class="preview-pyramide" id="previewPyramide"></div>

    <button type="submit">Valider</button>
</form>

<?php endif; ?>

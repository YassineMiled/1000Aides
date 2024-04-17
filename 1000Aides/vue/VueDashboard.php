<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/dashboard.css">
    </head>
<header>
        <h1>1000Aides</h1>
        <p>Simplifiez-vous la vie avec 1000Aides </p> 
        <nav>
            <strong>
            <a href="./?action=defaut">Accueil</a>
        <a href="./?action=propos">À propos</a>
        <a href="./?action=signUp">Inscription</a> 
        <a href="./?action=login">Connexion</a>
            </strong>
    </nav>
</header>
<body>
<div class="wrapper">
<h1>Mon Profil</h1>
<?php include_once "modele/bd.dashboard.php"  ?>
</div>
</body>
</html>
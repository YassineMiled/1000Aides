<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/dashboard.css">
    </head>
<header>
        <nav>
            <strong>
            <a href="./?action=defaut">Accueil</a>
            <a href="./?action=propos">À propos</a>
            </strong>
    </nav>
</header>
<body>

<div class="wrapper">
<h1>Mon Profil</h1>
<strong>
 adresse électronique : <br><?= $util["email"] ?><br><br>
Mon nom: <br><?= $util["nom"] ?> <br><br>
Mon prenom : <br><?= $util["prenom"] ?><br><br>
Mot de Passe : <br><?= $util["motDePasse"] ?> <br><br>
Sexe :<br> <?= $util["sexe"] ?><br><br>
</strong>

<strong>
<BR>
<a href="./?action=updProfil">Modifier Profil</a>   
<BR><BR>
<a href="./?action=supprimerProfil">supprimer profil</a>
<BR><BR>
<a href="./?action=deconnexion">se deconnecter</a>
</strong>
</div>
</body>
</html>
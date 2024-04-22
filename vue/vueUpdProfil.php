
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=stylesheet href='css/Update.css'>
  <title>updProfil</title>
 
</head>

<nav>
        <strong>
        <a href="./?action=defaut">Accueil</a>
        <a href="./?action=propos">À propos</a>
             <?php if(isLoggedOn()){ ?>
                <a href="./?action=dashboard">Mon Profil</a>
                <?php } 
                else{ ?>
                <a href="./?action=signUp">Inscription</a>
                <a href="./?action=login">Connexion</a>
                <?php } ?>
        </strong>
    </nav>
    <div class="wrapper">
<h1>Modifier mon Profil</h1>

<h3>Mon adresse électronique :<br><br>   <?= $util["email"] ?> </h3>
<hr>
<h3>Mettre à jour mon Nom : </h3>
<form action="./?action=updProfil" method="POST">
 
    <input type="text" name="nom" placeholder="Nouveau Nom" /><br />
    <input type="submit" value="Enregistrer" />
    <hr>

    <h3>Mettre à jour mon Prenom :</h3>
    <input type="text" name="prenom" placeholder="Nouveau prenom" /><br />
    <input type="submit" value="Enregistrer" />
    <hr>
    
    <H3> Mettre à jour mon mot de passe :</H3>
    <?= $messageMdp ?>
    <input type="password" name="motDePasse" placeholder="Nouveau mot de passe" /><br />
    <input type="password" name="motDePasse2" placeholder="Confirmer la saisie" /><br />
    <input type="submit" value="Enregistrer" />


</div>
</form>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Des Utilisateurs</title>
    <link rel="stylesheet" href="css/supprimerAdmin.css">
   
</head>
<body>
   
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
            <h1>Supprimer Des Utilisateurs</h1>
            <H3>Veuillez taper l'adresse email de l'utilisateur que vous souhaitez supprimer .</H3>
            <strong>
            <form action="./?action=supprimerByAdmin" method="POST">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>

             
                <?php if (isset($error)) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>

                <input type="submit" value="Supprimer">
            </form>
        </div>
</body>
</html>



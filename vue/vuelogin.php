<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/login.css">
   
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
            <h1>Connexion</h1>
            <strong>
            <form action="./?action=login" method="POST">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>

                <label for="motDePasse">Mot de passe :</label></strong>
                <input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[0-9]).{8,}$" required  title="Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et faire au moins 8 caractères">
                <span id="showPassword" class="toggle-password">👁️</span>
                <Script>
                document.getElementById('showPassword').addEventListener('click', function() {
                    var passwordField = document.getElementById('password');
                    var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                });
                </script>
                
                <?php if (isset($error)) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>

                <input type="submit" value="Se connecter">
            </form>
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/login.css">
    <?php
    include_once('../modele/login.php');
    ?>
</head>
<body>
   
    <nav>
    <strong>
        <a href="../vue/index.php">Accueil</a>
        <a href="../vue/propos.php">À propos</a>
        <a href="../vue/SignUp.html">Inscription</a>
        <a href="../vue/login.php">Connexion</a>
        </strong>
    </nav>
  
 
        <div class="wrapper">
            <h1>Connexion</h1>
            <strong>
            <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
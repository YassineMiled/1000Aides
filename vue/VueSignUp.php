<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/SignUp.css">
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
            <h1>Inscription</h1>
            <strong>
            <form id="loginForm" action="./?action=signUp" method="POST" onsubmit="submitForm(event)">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
        
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[0-9]).{8,}$" required  title="Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et faire au moins 8 caractères">
                    <span id="showPassword" class="toggle-password">👁️</span>
           
                <Script>
                document.getElementById('showPassword').addEventListener('click', function() {
                    var passwordField = document.getElementById('password');
                    var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                });
                </script>
                
        
        
                <label for="sexe">Sexe :</label>
                <select name="sexe" id="sexe">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                </select>
             
            </strong>
        
                <input type="submit" value="S'inscrire">
            </form>
        </div>
</body>
</html>

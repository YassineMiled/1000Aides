<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>
    <h1>Inscription</h1>
    <form action="traitement_inscription.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="age">Âge :</label>
        <input type="text" id="age" name="age" required>

        <label for="sexe">Sexe :</label>
        <input type="text" id="sexe" name="sexe" required>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html> 
<?php
include('../modele/bd.inc.php');
include_once('login.inc.php');

// Vérification de l'existence des clés dans $_POST
if (isset($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['sexe'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];

    try {
        // Préparation et exécution de la requête SQL
        $stmt = connexionPDO()->prepare("INSERT INTO secours.utilisateur (nom, prenom, age, sexe) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $age, $sexe]);

        // Vérification si l'insertion a réussi
        if ($stmt->rowCount() > 0) {
            $response = ["success" => true];
        } else {
            $response = ["success" => false];
        }
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        $response = ["success" => false, "error" => $e->getMessage()];
    }
} else {
    // Si les clés $_POST ne sont pas définies
    $response = ["success" => false, "error" => "Missing POST data"];
}

// Envoi de la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
    
<?php
include_once "$racine/modele/bd.utilisateur.inc.php"; // Assurez-vous que le chemin d'accès est correct
include_once "$racine/modele/bd.inc.php";
include "$racine/vue/vueSupprimer.php";

// Vérification si la méthode POST est utilisée et si l'email est fourni
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["email"])&& isset($_POST["password"])) {
    $email = $_POST["email"];
    $motDePasse = $_POST["password"];

    // Appel à la fonction de suppression
    if (DeleteUtilisateur($email,$motDePasse)) {
        echo "L'utilisateur a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}
?>

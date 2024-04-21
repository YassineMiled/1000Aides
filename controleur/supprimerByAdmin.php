<?php
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/bd.inc.php";
include "$racine/vue/vueSupprimerByAdmin.php";

// Vérification si la méthode POST est utilisée et si l'email est fourni
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["email"])) {
    $email = $_POST["email"];

    // Appel à la fonction de suppression
    if (DeleteUtilisateurByAdmin($email)) {
        echo "";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}
?>

<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}

// Affiche les informations de l'utilisateur
echo 'Bienvenue ' . $_SESSION['userUid'] . '<br>';

// Ici, vous pouvez ajouter plus de logique pour afficher d'autres informations de l'utilisateur en fonction de l'ID de session
?>

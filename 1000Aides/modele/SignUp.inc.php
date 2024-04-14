<?php
include_once '../modele/bd.inc.php';

// Vérifier si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sexe = $_POST['sexe'];
    // Securité sur mdp 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //insere les données dans la base de données
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, motDePasse, sexe) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $hashed_password, $sexe]);

    header("Location: ../vue/index.php");
    exit();
}
?>

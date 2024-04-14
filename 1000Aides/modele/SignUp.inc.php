<?php
include_once '../modele/bd.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sexe = $_POST['sexe'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, motDePasse, sexe) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $hashed_password, $sexe]);

    header("Location: ../vue/index.php");
    exit();
}
?>

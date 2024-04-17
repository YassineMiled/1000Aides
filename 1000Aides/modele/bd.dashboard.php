<?php
include_once('../modele/bd.inc.php');

// Assurez-vous que la session a été démarrée
session_start();

// Vérifiez si l'idUser est défini dans la session
if(isset($_SESSION['idUser'])) {
    // Récupérer l'idUser depuis la session
    $idUser = $_SESSION['idUser'];

    // Requête SQL pour récupérer les informations de l'utilisateur
    $sql = "SELECT nom, prenom, email, motDePasse, sexe FROM utilisateurs WHERE idUser = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$idUser]);

    // Récupération des résultats de la requête
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Affichage des données récupérées dans votre HTML
    ?>
    
    <h3>Nom :</h3>
    <h4><?php echo $user['nom']; ?></h4>

    <h3>Prénom :</h3>
    <h4><?php echo $user['prenom']; ?></h4>

    <h3>Email :</h3>
    <h4><?php echo $user['email']; ?></h4>

    <h3>Mot de Passe :</h3>
    <h4><?php echo $user['motDePasse']; ?></h4>

    

    <h3>Sexe :</h3>
    <h4><?php echo $user['sexe']; ?></h4>
    
    <?php
} else {
    // Rediriger vers la page de connexion si l'idUser n'est pas défini dans la session
    header("Location: ../vue/VueDashboard.php");
    exit; // Assurez-vous d'arrêter l'exécution du script après la redirection
}
?>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once("../modele/bd.inc.php");



    $email = $_POST["email"];
    $password = $_POST["password"];

    // Préparer et exécuter la requête SQL pour vérifier les identifiants
    $sql = "SELECT email, motDePasse FROM utilisateurs WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Si un utilisateur avec cet email est trouvé dans la base de données
        $row = $result->fetch_assoc();
        $hashedPassword = $row["motDePasse"];
        if (password_verify($password, $hashedPassword)) {
            // Si le mot de passe correspond, connecter l'utilisateur
            session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: ../vue/index.php");
            exit();
        } else {
           
            $error = "Mot de passe incorrect.";
        }
    } else {
       
        $error = "Aucun compte avec cet email trouvé.";
    }

    // Fermer la connexion à la base de données
    $stmt->close();
    $conn->close();
}
?>


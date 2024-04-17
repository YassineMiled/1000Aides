<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once("../modele/bd.inc.php");



    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT email, motDePasse FROM utilisateurs WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["motDePasse"];
        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION["idUser"] = $row["idUser"];
            header("Location: ../vue/index.php");
            exit();
        } else {
           
            $error = "Mot de passe incorrect.";
        }
    } else {
       
        $error = "Aucun compte avec cet email trouvé.";
    }

}
?>


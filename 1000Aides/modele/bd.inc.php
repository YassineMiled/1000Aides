<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secours";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);
$pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

try {
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>


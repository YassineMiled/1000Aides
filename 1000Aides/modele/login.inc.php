<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];

    try {
        require_once 'db.inc.php';
    } catch (PDOException $e) {
        die ("Query failed : " . $e->getMessage());
    }
} else {
    header("Location: chemin_vers_la_page_d'erreur");
    die();
}

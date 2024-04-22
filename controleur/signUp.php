<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";

$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])&& isset($_POST["password"])&& isset($_POST["sexe"])) {

    if ($_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["email"] != ""&& $_POST["password"] != "" && $_POST["sexe"] != "" ) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $motDePasse = $_POST["password"];
        $sexe = $_POST["sexe"];

        // enregistrement des donnees
        $ret = addUtilisateur($nom, $prenom, $email, $motDePasse, $sexe);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "l'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseigner tous les champs...";    
    }
}

if ($inscrit) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée";
    include "$racine/vue/vueConfirmationInscription.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription pb";
    include "$racine/vue/vueSignUp.php";
}
?>
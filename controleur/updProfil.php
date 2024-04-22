<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/login.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";


// init messages 
$messageMdp = "";

// recuperation des donnees GET, POST, et SESSION
if (isLoggedOn()) {
    $email = getemailLoggedOn();
    $util = getUtilisateurByemail($email);

        // traitement si necessaire des donnees recuperees


        if (isset($_POST["nom"])){
            $nom = $_POST["nom"];
            if ($nom!=""){
                updtnomtilisateur($email, $nom);
            }
        }

    if (isset($_POST["prenom"])){
        $prenom = $_POST["prenom"];
        if ($prenom!=""){
            updtPrenomtilisateur($email, $prenom);
        }
    }
    
    if (isset($_POST["MotDePasse"]) && isset($_POST["MotDePasse2"])) {
        if ($_POST["MotDePasse"] != "") {
            if (($_POST["MotDePasse"] == $_POST["MotDePasse2"])) {
                updtMotDePassetilisateur($email, $_POST["MotDePasse"]);
            } else {
                $messageMdp = "erreur de saisie du mot de passe";
            }
        }
    }

    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Mon profil";
    include "$racine/vue/vueUpdProfil.php";
}
else{
    $titre = "Mon profil";
}



?>
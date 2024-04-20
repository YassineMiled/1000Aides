<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/login.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $util = getUtilisateurByemail($email);
    
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Mon profil";
    include "$racine/vue/VueDashboard.php";
    
    
}
else{
    $titre = "Mon profil";
}

?>
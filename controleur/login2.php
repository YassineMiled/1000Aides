<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/login.inc.php";



// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["email"]) && isset($_POST["motDePasse"])){
    $email=$_POST["email"];
    $motDePasse=$_POST["motDePasse"];
}
else
{
    $email="";
    $motDePasse="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
login($email,$motDePasse);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "$racine/controleur/dashboard.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "authentification";
    include "$racine/vue/Vuelogin.php";
}

?>
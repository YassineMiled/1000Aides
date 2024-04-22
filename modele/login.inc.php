<?php

    include_once "bd.utilisateur.inc.php";

function login($email, $motDePasse) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByemail($email);
    $mdpBD = $util["motDePasse"];

    if (trim($mdpBD) == trim(crypt($motDePasse, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["email"] = $email;
        $_SESSION["motDePasse"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["email"]);
    unset($_SESSION["motDePasse"]);
}

function getemailLoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["email"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["email"])) {
        $util = getUtilisateurByemail($_SESSION["email"]);
        if (is_array($util) && isset($_SESSION["motDePasse"]) && isset($util["email"]) && isset($util["motDePasse"])) {
            if ($util["email"] == $_SESSION["email"] && $util["motDePasse"] == $_SESSION["motDePasse"]) {
                $ret = true;
            }
        }
    }
    return $ret;
}



if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("mathieu.capliez@gmail.com", "Passe1?");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>
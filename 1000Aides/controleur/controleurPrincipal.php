<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["propos"] = "propos.php";
    $lesActions["signUp"] = "signUp.php";
    $lesActions["login"] = "login.php";
    $lesActions["dashboard"] = "dashboard.php";
    $lesActions["mentionLegal"] = "mentionlegal.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}


?>
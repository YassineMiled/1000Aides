<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "index.php";
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
    print($lesActions);
}
$action = $_GET['action'] ?? 'defaut';  // Utiliser 'defaut' si aucune action n'est spécifiée
$fichier = controleurPrincipal($action);
include($fichier);
print($action);
print($fichier);

?>

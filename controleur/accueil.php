<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

//Connection base de données:
include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.alerteAttentat.php";
include_once "$racine/modele/bd.CentrePoison.php";
include_once "$racine/modele/bd.enfantEnDanger.php";
include_once "$racine/modele/bd.Police.php";
include_once "$racine/modele/bd.Pompiers.php";
include_once "$racine/modele/bd.Samu.php";
include_once "$racine/modele/bd.sosSucide.php";
include_once "$racine/modele/bd.ViolenceSexiste.php";
include_once "$racine/modele/login.inc.php";
//vue
$titre = "Accueil - 1000Aides";
include "$racine/vue/Vueindex.php";

?>
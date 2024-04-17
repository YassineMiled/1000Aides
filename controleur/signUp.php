<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/SignUp.inc.php";
include "$racine/vue/VueSignUp.php";
?>
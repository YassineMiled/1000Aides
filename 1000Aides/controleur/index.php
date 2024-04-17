<?php
$titre = "Accueil - 1000Aides";

//Connection base de données:
include_once('../modele/bd.inc.php');
//vue
include_once('../vue/Vueindex.php');
//Include Modele :
include_once('../modele/bd.alerteAttentat.php');
include_once('../modele/bd.CentrePoison.php');
include_once('../modele/bd.enfantEnDanger.php');
include_once('../modele/bd.Police.php');
include_once('../modele/bd.Pompiers.php');
include_once('../modele/bd.Samu.php');
include_once('../modele/bd.sosSucide.php');
include_once('../modele/bd.ViolenceSexiste.php');
?>
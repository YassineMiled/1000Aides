<?php

include_once "bd.inc.php";

function fetchViolencesSexistes($idpays) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM serviceUrgence WHERE idpays = :idpays AND nomService = 'Violences sexistes et sexuelles'");
        $req->bindValue(':idpays', $idpays, PDO::PARAM_INT);
        $req->execute();
      

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($resultat)) {
            foreach ($resultat as $row) {
                echo "<h1><strong>Service: " . $row["nomService"] . "<br></h1></strong>";
                echo "<h4><em>" . $row["description"] . "</em></h4>";
                echo "<h3><strong>Numero: " . $row["numero"] . "<br></h3></strong>";
            }
        } else {
            echo "Aucun résultat trouvé";
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

?>

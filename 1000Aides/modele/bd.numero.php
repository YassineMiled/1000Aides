<?php
include_once("modele/bd.inc.php");
    function getNumPoliceByIdR($id) {
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from  serviceUrgence where id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

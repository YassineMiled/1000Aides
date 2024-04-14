<?php
include_once('../modele/bd.inc.php');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de la valeur sélectionnée dans le menu déroulant
    $idPays = $_POST['Langues'];

    $sql = "SELECT * FROM serviceurgence WHERE idPays = $idPays AND nomService = 'Police'"  ;

    // Exécution de la requête SQL
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Affichage des données récupérées
        while($row = $result->fetch_assoc()) {
            echo "<h1><strong>Service: " . $row["nomService"] . "<br></h1></strong>";
            echo ("<h4><em>". $row["description"] . "</em></h4>");
            echo "<h3><strong>Numero: " . $row["numero"] . "<br></h3></strong>";
        }
    } else {
        echo "Aucun résultat trouvé";
    }
}
?>

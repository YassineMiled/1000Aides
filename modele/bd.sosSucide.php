<?php

include_once "bd.inc.php";

function fetchSosSucide($idPays) {
    global $conn;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $conn->prepare("SELECT * FROM serviceurgence WHERE idPays = ? AND nomService = 'SOS Suicide'");
        $stmt->bind_param("i", $idPays);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h1><strong>Service: " . $row["nomService"] . "<br></h1></strong>";
                echo ("<h4><em>". $row["description"] . "</em></h4>");
                echo "<h3><strong>Numero: " . $row["numero"] . "<br></h3></strong>";
            }
        } else {
            echo "Aucun résultat trouvé";
        }

        $stmt->close();
    }
}

?>

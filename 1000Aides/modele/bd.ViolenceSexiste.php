<?php

include_once('../modele/bd.inc.php');

function fetchViolencesSexistes($idPays) {
    global $conn;  // Ensure $conn is accessible within the function if it's defined outside
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Using prepared statements to prevent SQL Injection
        $stmt = $conn->prepare("SELECT * FROM serviceurgence WHERE idPays = ? AND nomService = 'Violences sexistes et sexuelles'");
        $stmt->bind_param("i", $idPays); // 'i' specifies the variable type is integer

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

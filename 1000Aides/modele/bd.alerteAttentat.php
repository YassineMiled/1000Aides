<?php
                
                include_once('../modele/bd.inc.php');
                
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   
                    $idPays = $_POST['Langues'];
                
            
                    $sql = "SELECT * FROM serviceurgence WHERE idPays = $idPays AND nomService = 'Alerte attentat'"  ;
                

                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
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
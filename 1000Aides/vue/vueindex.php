<!DOCTYPE html>
<html lang="fr">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1000Aides</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    include_once("../modele/bd.numero.php");
    include_once("vueEntete.php");
    include_once('../modele/bd.inc.php');
    ?>
  
</head>
<body>
<h1 align="center">1000Aides</h1>
<p><p>
<br><br><br><br>
<div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <h2>Police</h2>
        <?php
         $sql = "SELECT numero FROM serviceUrgence where idPays= 1 and nomService = 'Police'";
         $resultat = $conn->query($sql);
         echo($resultat)
        ?>
      </div>
      <div class="col">
        <h2>Pompier</h2>
        <h6>18</h6>
      </div>
      <div class="col">
       <h2>Samu</h2>
       <h6>15</h6>
      </div>
      
      <br><br><br><br><br><br><br><br><br><br><br><br>


    </div>
  </div>
  <br><br>

  <div class="container text-center">
    <div class="row align-items-start">

      <div class="col">
        <h2>Alerte attentat et enlèvement </h2>
      </div>

      <div class="col">
        <h2>Enfants en danger</h2>
        <h6>18</h6>

      </div>
      <div class="col">
       <h2>Violences sexistes et sexuelles</h2>
       <h6>15</h6>
      </div>

      <br><br>
      
    </div>
  </div>
  <script src="../JS/search.js"></script>
</body>
</html>
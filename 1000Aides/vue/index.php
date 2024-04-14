<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1000Aides - Accueil</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- jQuery depuis un CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <?php
    include_once("../modele/bd.inc.php");
    
    ?>
</head>
<body>
    <header>
        <h1>1000Aides</h1>
        <p>Simplifiez-vous la vie avec 1000Aides </p> 
        <form method="post" action="../vue/index.php">
        <select name="Langues" id = "Langues">
            
            <option value="1" data-image="../images/france.png">France</option>
            <option value="2" data-image="../images/usa.png">États-Unis</option>
            <option value="3" data-image="../images/uk.png">Royaume-Uni</option>
            <option value="4" data-image="../images/allemagne.png">Allemagne</option>
            <option value="5" data-image="../images/japon.png">Japon</option>
            <option value="5" data-image="../images/tunisie.png">Tunisie</option>
            
        </select>
        <input type="submit" value="Soumettre">
    </form>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="../JS/select.js"></script>
</header>
    <nav>
        <a href="../vue/index.php">Accueil</a>
        <a href="../vue/propos.php">À propos</a>
        <a href="../vue/SignUp.html">Inscription</a> 
        <a href="../vue/login.php">Connexion</a>
    </nav>

    <section>
        <h2>Nos Services Publics</h2>

        <div class="services">
            <div class="service">
                <img src="../images/policeFR.png" alt="Police">       
                <?php
                include_once('../modele/bd.Police.php');
                ?>   
            </div>

            
            <div class="service">
                <img src="../images/PompierFR.jpg" alt="Pompiers">
                <?php
                include_once('../modele/bd.Pompiers.php');
                ?> 
            </div>

            <div class="service">
                <img src="../images/SamuFR.png" alt="Samu">
                <?php
                include_once('../modele/bd.Samu.php');
                ?>
            </div>

            <div class="service">
                <img src="../images/AlerteAttentatFR.png" alt="Alerte attentat et enlèvement">
                <?php
                include_once('../modele/bd.alerteAttentat.php');
                ?>
            </div>

            <div class="service">
                <img src="../images/EnfantsEnDanger.png" alt="Enfants en danger">
                <?php
                include_once('../modele/bd.enfantEnDanger.php');
                ?>
            </div>

            
            <div class="service">
                <img src="../images/Violences-sexistes-et-sexuelles.png" alt="Violences sexistes et sexuelles">
                <?php
                include_once('../modele/bd.ViolenceSexiste.php');
                ?>
            </div>

            <div class="service">
                <img src="../images/SosSucide.png">
                <?php
                include_once('../modele/bd.sosSucide.php');
                ?>
            </div>

            <div class="service">
                <img src="../images/CentrePoison.png" alt="Violences sexistes et sexuelles">
                <?php
                include_once('../modele/bd.CentrePoison.php');
                ?> 
            </div>
            
        </div>
    </section>
    <footer>
        <p>© 2024 1000Aides - Tous droits réservés</p>
        <a href="mentionLegal.php">Mentions légales</a>
    </footer>

</body>
</html>

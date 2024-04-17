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
include_once('../controleur/controleurPrincipal.php');
    ?>
</head>
<body>
    <header>
        <h1>1000Aides</h1>
        <p>Simplifiez-vous la vie avec 1000Aides </p> 
        <form method="post" action="../controleur/index.php">
        <select name="Langues" id = "Langues">  
            
            <option value="1" data-image="../images/france.png" selected>France</option>
            <option value="2" data-image="../images/usa.png">États-Unis</option>
            <option value="3" data-image="../images/uk.png">Royaume-Uni</option>
            <option value="4" data-image="../images/allemagne.png">Allemagne</option>
            <option value="5" data-image="../images/japon.png">Japon</option>
            <option value="6" data-image="../images/tunisie.png">Tunisie</option>
            
        </select>
        <input type="submit" value="Soumettre">
    </form>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="../JS/select.js"></script>
</header>
    <nav>
        <strong>
        <a href="../controleur/./?action=defaut">Accueil</a>
        <a href="../controleur/./?action=propos">À propos</a>
        <a href="../controleur/./?action=signUp">Inscription</a> 
        <a href="../controleur/./?action=login">Connexion</a>
        <br><br>
        <a href="../controleur/./?action=dashboard">Mon Profil</a>
        </strong>
    </nav>

    <section>
        <h2>Nos Services Publics</h2>

        <div class="services">
            <div class="service">
                <img src="../images/policeFR.png" alt="Police">       
                <?php
                fetchPolice($_POST['Langues']);
                ?>   
            </div>

            
            <div class="service">
                <img src="../images/PompierFR.jpg" alt="Pompiers">
                <?php
                fetchPompier($_POST['Langues']);
                ?> 
            </div>

            <div class="service">
                <img src="../images/SamuFR.png" alt="Samu">
                <?php
                fetchSamu($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="../images/AlerteAttentatFR.png" alt="Alerte attentat et enlèvement">
                <?php
                fetchAlerteAttentat($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="../images/EnfantsEnDanger.png" alt="Enfants en danger">
                <?php
                fetchEnfantEnDanger($_POST['Langues']);
                ?>
            </div>

            
            <div class="service">
                <img src="../images/Violences-sexistes-et-sexuelles.png" alt="Violences sexistes et sexuelles">
                <?php
                fetchViolencesSexistes($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="../images/SosSucide.png">
                <?php
                fetchSosSucide($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="../images/CentrePoison.png" alt="Violences sexistes et sexuelles">
                <?php
                fetchCentreAntiPoison($_POST['Langues']);
                ?> 
            </div>
            
        </div>
    </section>
    <footer>
        <p>© 2024 1000Aides - Tous droits réservés</p>
        <a href="../controleur/./?action=mentionLegal">Mentions légales</a>
    </footer>

</body>
</html>

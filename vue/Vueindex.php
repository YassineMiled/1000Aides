<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1000Aides - Accueil</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- jQuery depuis un CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <?php
// include_once('../controleur/controleurPrincipal.php');
    ?>
</head>
<body>
    <header>
        <h1>1000Aides</h1>
        <p>Simplifiez-vous la vie avec 1000Aides </p> 
        <form method="post" action="">
            <select name="Langues" id = "Langues" onchange="this.form.submit();"> 
            <option value="0" data-image="">Choisir Un pays</option>
            <option value="1" data-image="images/france.png">France</option>
            
            <?php if(isLoggedOn()){ ?>
            <option value="2" data-image="images/usa.png">États-Unis</option>
            <option value="3" data-image="images/uk.png">Royaume-Uni</option>
            <option value="4" data-image="images/allemagne.png">Allemagne</option>
            <option value="5" data-image="images/japon.png">Japon</option>
            <option value="6" data-image="images/tunisie.png">Tunisie</option>
                <?php } 
                else{ ?>
                
                <?php } ?>
        </select>

    </form>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="JS/select.js"></script>
</header>
    <nav>
        <strong>
        <a href="./?action=defaut">Accueil</a>
        <a href="./?action=propos">À propos</a>
   
             <?php if(isLoggedOn()){ ?>
                <a href="./?action=dashboard">Mon Profil</a>
                <?php } 
                else{ ?>
                <a href="./?action=signUp">Inscription</a>
                <a href="./?action=login">Connexion</a>
                <?php } ?>
        </strong>
    </nav>

    <section>
        <h2>Nos Services Publics</h2>
        <?php if(isLoggedOn()){ ?><h2></h2>
                <?php } 
                else{ ?>
                <h3>Connectez-vous pour voir d'avantage de Service et dans différents pays tel que l'Allemagne,<br> Japon, États-Unis et plein d'autres !  </h3>
                <?php } ?>
        <div class="services">
            <div class="service">
                <img src="images/policeFR.png" alt="Police">       
                <?php
                fetchPolice($_POST['Langues']);
                ?>   
            </div>

            
            <div class="service">
                <img src="images/PompierFR.jpg" alt="Pompiers">
                <?php
                fetchPompier($_POST['Langues']);
                ?> 
            </div>

            <div class="service">
                <img src="images/SamuFR.png" alt="Samu">
                <?php
                fetchSamu($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="images/AlerteAttentatFR.png" alt="Alerte attentat et enlèvement">
                <?php
                fetchAlerteAttentat($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="images/EnfantsEnDanger.png" alt="Enfants en danger">
                <?php
                fetchEnfantEnDanger($_POST['Langues']);
                ?>
            </div>

            
            <div class="service">
                <img src="images/Violences-sexistes-et-sexuelles.png" alt="Violences sexistes et sexuelles">
                <?php
                fetchViolencesSexistes($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="images/SosSucide.png">
                <?php
                fetchSosSucide($_POST['Langues']);
                ?>
            </div>

            <div class="service">
                <img src="images/CentrePoison.png" alt="Violences sexistes et sexuelles">
                <?php
                fetchCentreAntiPoison($_POST['Langues']);
                ?> 
            </div>
            
        </div>
    </section>
    <footer>
        <p>© 2024 1000Aides - Tous droits réservés</p>
        <a href="./?action=mentionLegal">Mentions légales</a>
    </footer>

</body>
</html>

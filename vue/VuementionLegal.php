<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=stylesheet href='css/mention.css'>
  <title>Mentions Légales - 1000Aides</title>
 
</head>
<body>
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
    <br>
    
  <div class="container">


    <h1>Mentions Légales</h1>

    <h2>Informations générales</h2>
    <p>Raison sociale : 1000Aides</p>
    <p>Type d'entreprise : Association à but non lucratif</p>
    <p>Siège social : 69 rue Turbigo</p>
    <p>Numéro SIRET : [Numéro SIRET]</p>
    <p>Directeur de publication : Mield Yassine</p>
    <p>Contact : 1000Aides@gmail.com</p>

    <h2>Hébergeur du site</h2>
    <p>Nom de l'hébergeur : GITHUB</p>
    <p>Adresse de l'hébergeur : AWS</p>
    <p>Contact de l'hébergeur : yassinemiled34190@gmail.com</p>

    <h2>Propriété intellectuelle</h2>
    <p>Tous les contenus du site 1000Aides sont protégés par les droits d'auteur et autres droits de propriété intellectuelle.</p>
    <p>La reproduction, la représentation, la modification, la publication, la transmission, la dénaturation, totale ou partielle du site ou de son contenu, par quelque procédé que ce soit, et sur quelque support que ce soit, est interdite.</p>

    <h2>Responsabilité</h2>
    <p>1000Aides ne peut être tenu responsable des erreurs présentes sur le site, ainsi que de l'usage qui pourrait être fait des informations qui y sont contenues.</p>

    <h2>Liens externes</h2>
    <P>Toutes nos images proviennent d'une intelligence artificielle, ou sont libres de droits </P>
    <p>Le site 1000Aides peut contenir des liens hypertextes vers d'autres sites. La responsabilité de 1000Aides ne saurait être engagée quant aux contenus de ces sites tiers.</p>

    <h2>Loi applicable</h2>
    <p>Le site 1000Aides est soumis à la loi française.</p>

    <h2>Modification des mentions légales</h2>
    <p>1000Aides se réserve le droit de modifier les présentes mentions légales à tout moment. Les utilisateurs du site sont donc invités à les consulter régulièrement.</p>
  </div>
</body>
</html>

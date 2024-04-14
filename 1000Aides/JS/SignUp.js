document.addEventListener('DOMContentLoaded', function() {
    var loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêcher l'envoi du formulaire par défaut

        // Récupérer les valeurs des champs du formulaire
        var formData = new FormData(loginForm);

        // Envoyer les données à votre script PHP via AJAX pour traitement
        fetch('../modele/login.inc.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Afficher la réponse du serveur dans la console
            // Vous pouvez ajouter ici du code pour gérer la réponse du serveur, par exemple, rediriger l'utilisateur vers une page de succès
        })
        .catch(error => console.error(error));
    });
});

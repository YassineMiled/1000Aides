function submitForm(event) {
    event.preventDefault(); 
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var age = document.getElementById('age').value;
    var sexe = document.getElementById('sexe').value;

    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'nom=' + encodeURIComponent(nom) + '&prenom=' + encodeURIComponent(prenom) + '&age=' + encodeURIComponent(age) + '&sexe=' + encodeURIComponent(sexe)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = '../vue/vueindex.php';
        } else {
            alert('L\'inscription a échoué. Veuillez vérifier vos informations ou vous inscrire à nouveau.');
        }
    })
    .catch(error => {
        console.error('Erreur :', error);
    });
}

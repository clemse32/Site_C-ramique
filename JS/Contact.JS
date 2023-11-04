document.getElementById('bt-message').addEventListener('click', function (e) {
    e.preventDefault();

    var formulaire = document.getElementById('f-contact');
    var donnees = new FormData(formulaire);
    if (formulaire.checkValidity()){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/insertionCommentaire.php', true); 
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
             if (xhr.status === 200) {
                    // Traitement de la réponse ici
                    document.getElementById('mess').innerHTML = xhr.responseText;
                } else if(xhr.status === 202) {
                    document.getElementById('mess').innerHTML = xhr.responseText;
                }
                else {
                    document.getElementById('mess').innerHTML = 'Erreur lors de la connexion';
                }
            }
        };
        xhr.send(donnees);
    } else {
        formulaire.reportValidity();
    }
});